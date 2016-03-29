<?php
function change_db($link, $stat = false)
{
    if (isset($_FILES['image']['tmp_name']) AND $_FILES['image']['tmp_name'] AND getimagesize($_FILES['image']['tmp_name'])) {
        $info = new SplFileInfo($_FILES['image']['name']);
        $img_name = count(scandir('image')) . '_' . uniqid() . '.' . $info->getExtension();
        move_uploaded_file($_FILES['image']['tmp_name'], 'image' . DIRECTORY_SEPARATOR . $img_name);
    } else {
        $img_name = $_POST['image'];
    }
    $date = date('Y-m-d', time());
    if ($stat) {
        $sql = "INSERT INTO products SET
        `name`='{$_POST['name']}',
        description='{$_POST['description']}',
        price='{$_POST['price']}',
        image='{$img_name}',
        is_active='{$_POST['is_active']}',
        vendor='{$_POST['vendor']}',
        add_date = '{$date}'
        ";
    } else {
        $_POST['id'] = (int)$_POST['id'];
        $sql = "UPDATE products SET
        `name`='{$_POST['name']}',
        description='{$_POST['description']}',
        price='{$_POST['price']}',
        image='{$img_name}',
        is_active='{$_POST['is_active']}',
        vendor='{$_POST['vendor']}',
        upd_date = '{$date}' 
        WHERE id='{$_POST['id']}'
        ";
    }

    return mysqli_query($link, $sql);
}

function get_item($link)
{ // Получение данных для карточек
    $sql_price_filter = null;
    $sql_vendor_filter = null;
    if (isset($_GET['price_fr']) AND isset($_GET['price_to']) AND is_numeric($_GET['price_fr']) AND is_numeric($_GET['price_to'])) {
        $sql_price_filter = (isset($_GET['checVendor'])) ? 'AND' : 'WHERE';
        $sql_price_filter .= ' ' . "price >= {$_GET['price_fr']} AND price <= {$_GET['price_to']}";
    }
    if (isset($_GET['checVendor'])) {
        $fin = '';
        foreach ($_GET['checVendor'] as $k => $v) {
            if (isset($_GET['checVendor'][($k + 1)])) {
                $fin .= "'$v'" . ",";
            } else {
                $fin .= "'$v'";
            }
        }
        $sql_vendor_filter = "WHERE vendor IN ({$fin})";
    }
    if (isset($_GET['order_value']) AND isset($_GET['order_type'])) {
        $order_by = "ORDER BY " . $_GET['order_value'] . ' ' . $_GET['order_type'];
    } else {
        $order_by = 'ORDER BY id DESC';
    }
    $sql = "SELECT * FROM products {$sql_vendor_filter} {$sql_price_filter} {$order_by}";
    $res = mysqli_query($link, $sql);
    $items = [];
    while ($row = mysqli_fetch_assoc($res)) {
        $items[] = $row;
    }
    return $items;
}

function login($login, $pass, $link)
{ // Авторизация пользователя
    $login = mysqli_real_escape_string($link, $login);
    $sql = "SELECT password FROM users WHERE login='{$login}'";
    $res = mysqli_query($link, $sql);
    $row = mysqli_fetch_assoc($res);
    if (password_verify($pass, $row['password'])) {
        return true;
    } else {
        return false;
    }
}

function add_user($link)
{
    $sql = "SELECT * FROM users WHERE login='{$_POST['login']}'";
    $res = mysqli_query($link, $sql);
    $row = mysqli_fetch_assoc($res);
    if ($row) {
        return 0;
    } else {
        $options = [
            'cost' => 11,
            'salt' => mcrypt_create_iv(22, MCRYPT_DEV_URANDOM),
        ];
        $hash = password_hash($_POST['password'], PASSWORD_DEFAULT, $options);
        $sql = "INSERT INTO users SET login='{$_POST['login']}',
        password='$hash'";
        $res = mysqli_query($link, $sql);
        return 1;
    }
}

function display_form($update = false, $item = null)
{ // Вывод формы добавления товара и редактирования  имеющихся
    ?>
    <div class="col-lg-4">
        <form method="post" action="" enctype="multipart/form-data"
              style="border: 1px solid crimson; margin-bottom: 10px;padding: 10px;">
            <?php if ($update) { ?>
                <span>id</span>
                <input class="form-control" type="text" name="id" value="<?= $item['id'] ?>">
                <?php
            }
            ?>
            <span>name</span>
            <input class="form-control" type="text" name="name" value="<?= $item['name'] ?>">
            <span>description</span>
            <textarea class="form-control" name="description" cols="35" rows="7"><?= $item['description'] ?></textarea>
            <span>price</span>
            <input class="form-control" type="text" name="price" value="<?= $item['price'] ?>">
            <span>image</span>
            <?php
            if ($item['image'] == "") {
                echo "<input class='form-control' type='file' name='image'>";
            } else {
                echo "<input class='form-control' type='text' name='image' value={$item['image']}>";
                echo "<img src='image/{$item['image']}'>";
            }

            ?>
            <span>is_active</span>
            <input class="form-control" type="text" name="is_active" value="<?= $item['is_active'] ?>">
            <span>vendor</span>
            <input class="form-control" type="text" name="vendor" value="<?= $item['vendor'] ?>">
            <span>Add date : <?= $item['add_date'] ?></span><br>
            <span>Update date : <?= $item['upd_date'] ?></span><br>
            <input class="btn btn-danger" type="submit" name='edit' value="Edit">
        </form>
    </div>
    <?php
}

function display_product($item)
{ // Вывод товаров в режиме пользоватеся
    ?>
    <div class="col-lg-4">
        <table class="table" style="border: 1px solid crimson;">
            <tr>
                <td>Name</td>
                <td><?= $item['name'] ?></td>
            </tr>
            <tr>
                <td>Description</td>
                <td><p style="height: 200px;overflow: scroll;"><?= $item['description'] ?></p></td>
            </tr>
            <tr>
                <td>Price</td>
                <td><?= $item['price'] ?></td>
            </tr>
            <tr>
                <td>Image</td>
                <td>
                    <?php if ($item['image'] != "") {
                        echo "<img src='/work_23_03/image/{$item['image']}'>";
                    } ?></td>
            </tr>
            <tr>
                <td>Vendor</td>
                <td><?= $item['vendor'] ?></td>
            </tr>
            <tr>
                <td colspan="2">
                    <span>Add date : <?= $item['add_date'] ?></span>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <span>Update date : <?= $item['upd_date'] ?></span>
                </td>
            </tr>
        </table>
    </div>
    <?php
}

function display_filter($link)
{ // Вывод фильтров
    if (isset($_SESSION['admin'])) {
        $admin = "WHERE is_active = 1";
    } else {
        $admin = null;
    }
    $sql = "SELECT DISTINCT vendor FROM products {$admin}";
    $sql_p_max = "SELECT MAX(price) AS max FROM products";
    $p_max = mysqli_fetch_assoc(mysqli_query($link, $sql_p_max));
    $row = mysqli_query($link, $sql);
    while ($rez = mysqli_fetch_assoc($row)) {
        $vendor[] = $rez;
    };
    echo '<form method="get" action="">';
    $price_fr = '0';
    $price_to = $p_max['max'];
    if (isset($_GET['price_fr'])) {
        $price_fr = $_GET['price_fr'];
    }
    if (isset($_GET['price_to'])) {
        $price_to = $_GET['price_to'];
    }
    ?>
    <h4>Сортировка</h4>
    <select class='form-control' name="order_value">
        <option value="price" <?= (isset($_GET['order_type']) AND $_GET['order_value'] == 'price') ? 'selected' : ''; ?> >Цена</option>
        <option value="name" <?= (isset($_GET['order_type']) AND $_GET['order_value'] == 'name') ? 'selected' : ''; ?>>Название</option>
        <option value="vendor" <?= (isset($_GET['order_type']) AND $_GET['order_value'] == 'vendor') ? 'selected' : ''; ?>>Производитель</option>
        <option value="add_date" <?= (isset($_GET['order_type']) AND $_GET['order_value'] == 'add_date') ? 'selected' : ''; ?>>Дата добавления</option>
    </select>
    <select class='form-control' name="order_type">
        <option value="ASC" <?= (isset($_GET['order_type']) AND $_GET['order_type'] == 'ASC') ? 'selected' : ''; ?>>По
            возрастанию
        </option>
        <option value="DESC" <?php if(isset($_GET['order_type']) AND $_GET['order_type'] == 'DESC') {
            echo 'selected';
        } elseif (!isset($_GET['order_type'])) {
            echo 'selected';
        } ?>>По убыванию
        </option>
    </select>
    <h4>Цена</h4>
    <?php
    echo "<input class='form-control' type='number' name='price_fr' value='{$price_fr}'>";
    echo "<input class='form-control' type='number' name='price_to' value='{$price_to}' max='{$p_max['max']}'>";
    echo '<h4>Производитель</h4>';
    foreach ($vendor as $v) {
        $name = $v['vendor'];
        $chec = '';
        if (isset($_GET['checVendor']) AND in_array($name, $_GET['checVendor'])) {
            $chec = "checked";
        }
        echo "<label><input type=checkbox name='checVendor[]' value='{$name}' $chec />" . $v['vendor'] . "</label><br>";
    }
    echo "<input class='btn-success btn' type='submit' value='фильтровать'>";
    echo "<input class='btn-danger btn' type='submit' name='clear_form' value='сбросить'></form>";
}

function input_validator($str)
{
    return stripslashes(strip_tags(trim($str)));
}