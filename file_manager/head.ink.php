<head>
    <title>File manager</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/bootstrap-theme.min.css">
    <script src="./js/jquery.min.js" type="text/javascript"></script>
    <script src="./js/bootstrap.min.js" type="text/javascript"></script>
    <!-- Add fancyBox -->
    <link rel="stylesheet" href="./js/fancybox/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
    <script type="text/javascript" src="./js/fancybox/jquery.fancybox.pack.js?v=2.1.5"></script>
    <!-- include codemirroe-->
    <script src="./codemirror/lib/codemirror.js"></script>
    <link rel="stylesheet" href="./codemirror/lib/codemirror.css">
    <script src="./codemirror/mode/javascript/javascript.js"></script>
    <script>
        $(document).ready(function(){
            $(".image").fancybox();
            $(".spRename").click(function(){
                var name = $(this).attr('value');
                if($("form."+name).css('display') == 'none') {
                    $("form." + name).fadeIn();
                }else{
                    $("form." + name).fadeOut();
                }

            });
            if(document.getElementById("editForm")) {
                var editor = CodeMirror.fromTextArea(document.getElementById("editForm"), {
                    lineNumbers: true,
                });
            }
        });
    </script>
</head>