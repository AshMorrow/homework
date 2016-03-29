-- MySQL dump 10.13  Distrib 5.6.28, for debian-linux-gnu (x86_64)
--
-- Host: 127.0.0.1    Database: work_23_03
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.10-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `products` (
  `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `description` varchar(250) NOT NULL,
  `price` float NOT NULL,
  `image` varchar(250) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `vendor` varchar(50) NOT NULL,
  `add_date` char(10) NOT NULL,
  `upd_date` char(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=122 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (67,'Fel tauri, Ginkgo biloba, Kidney, Germanium sesqui','Duis consequat dui nec nisi volutpat eleifend. Donec ut dolor. Morbi vel lectus in quam fringilla rhoncus.',245,'',0,'Apotheca Company','2015-10-08','0000-00-00'),(68,'Allium sativum, Berberis vulgaris, Fucus vesiculos','Maecenas ut massa quis augue luctus tincidunt. Nulla mollis molestie lorem. Quisque ut erat.\r\n\r\nCurabitur gravida nisi at nibh. In hac habitasse platea dictumst. Aliquam augue quam, sollicitudin vitae, consectetuer eget, rutrum at, lorem.',136,'',0,'Apotheca Company','2015-05-03','0000-00-00'),(69,'Gentamicin Sulfate','Donec diam neque, vestibulum eget, vulputate ut, ultrices vel, augue. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec pharetra, magna vestibulum aliquet ultrices, erat tortor sollicitudin mi, sit amet lob',333,'',1,'REMEDYREPACK INC.','2016-02-24','0000-00-00'),(70,'Mineral oil, Petrolatum, Phenylephrine HCl, Shark ','Duis bibendum. Morbi non quam nec dui luctus rutrum. Nulla tellus.\r\n\r\nIn sagittis dui vel nisl. Duis ac nibh. Fusce lacus purus, aliquet at, feugiat non, pretium quis, lectus.',283,'',0,'Supervalu Inc','2015-04-10','0000-00-00'),(71,'Escitalopram Oxalate','Proin leo odio, porttitor id, consequat in, consequat ut, nulla. Sed accumsan felis. Ut at dolor quis odio consequat varius.\r\n\r\nInteger ac leo. Pellentesque ultrices mattis odio. Donec vitae nisi.\r\n\r\nNam ultrices, libero non mattis pulvinar, nulla pe',1178,'',1,'BluePoint Laboratories','2015-11-16','0000-00-00'),(72,'West Sycamore','Pellentesque at nulla. Suspendisse potenti. Cras in purus eu magna vulputate luctus.\r\n\r\nCum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vivamus vestibulum sagittis sapien. Cum sociis natoque penatibus et magnis d',592,'',1,'Nelco Laboratories, Inc.','2016-02-04','0000-00-00'),(73,'IRBESARTAN AND HYDROCHLOROTHIAZIDE','Pellentesque at nulla. Suspendisse potenti. Cras in purus eu magna vulputate luctus.\r\n\r\nCum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vivamus vestibulum sagittis sapien. Cum sociis natoque penatibus et magnis d',382,'',1,'Bristol-Myers Squibb Company','2015-12-15','0000-00-00'),(74,'Chlorpheniramine maleate and Phenylephrine HCl','Vestibulum quam sapien, varius ut, blandit non, interdum in, ante. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Duis faucibus accumsan odio. Curabitur convallis.\r\n\r\nDuis consequat dui nec nisi volutpat eleif',142,'',0,'Best Choice (Valu Merchandisers Company)','2015-05-27','0000-00-00'),(75,'nitroglycerin','Nullam porttitor lacus at turpis. Donec posuere metus vitae ipsum. Aliquam non mauris.\r\n\r\nMorbi non lectus. Aliquam sit amet diam in magna bibendum imperdiet. Nullam orci pede, venenatis non, sodales sed, tincidunt eu, felis.',1197,'',0,'Graceway Pharmaceuticals, LLC','2015-07-18','0000-00-00'),(76,'Dimercaptosuccinic Acid','Morbi non lectus. Aliquam sit amet diam in magna bibendum imperdiet. Nullam orci pede, venenatis non, sodales sed, tincidunt eu, felis.\r\n\r\nFusce posuere felis sed lacus. Morbi sem mauris, laoreet ut, rhoncus aliquet, pulvinar sed, nisl. Nunc rhoncus ',1373,'',0,'AnazaoHealth Corporation','2015-04-14','0000-00-00'),(77,'Rotavirus Vaccine, Live, Oral, Pentavalent','Nam ultrices, libero non mattis pulvinar, nulla pede ullamcorper augue, a suscipit nulla elit ac nulla. Sed vel enim sit amet nunc viverra dapibus. Nulla suscipit ligula in lacus.\r\n\r\nCurabitur at ipsum ac tellus semper interdum. Mauris ullamcorper pu',978,'',1,'Merck Sharp & Dohme Corp.','2015-09-18','0000-00-00'),(78,'Ciprofloxacin','Nullam sit amet turpis elementum ligula vehicula consequat. Morbi a ipsum. Integer a nibh.',1173,'',0,'Claris Lifesciences Inc.','2015-12-22','0000-00-00'),(79,'Venlafaxine Hydrochloride','Aenean lectus. Pellentesque eget nunc. Donec quis orci eget orci vehicula condimentum.\r\n\r\nCurabitur in libero ut massa volutpat convallis. Morbi odio odio, elementum eu, interdum eu, tincidunt in, leo. Maecenas pulvinar lobortis est.\r\n\r\nPhasellus sit',794,'',1,'AvKARE, Inc.','2015-06-22','0000-00-00'),(80,'Loratadine and Pseudoephedrine','Duis aliquam convallis nunc. Proin at turpis a pede posuere nonummy. Integer non velit.',568,'',0,'Walgreen Company','2015-09-10','0000-00-00'),(81,'Lamotrigine','Sed sagittis. Nam congue, risus semper porta volutpat, quam pede lobortis ligula, sit amet eleifend pede libero quis orci. Nullam molestie nibh in lectus.\r\n\r\nPellentesque at nulla. Suspendisse potenti. Cras in purus eu magna vulputate luctus.',1075,'',0,'Upsher-Smith Laboratories, Inc.','2015-04-22','0000-00-00'),(82,'Rifampin','Nulla ut erat id mauris vulputate elementum. Nullam varius. Nulla facilisi.\r\n\r\nCras non velit nec nisi vulputate nonummy. Maecenas tincidunt lacus at velit. Vivamus vel nulla eget eros elementum pellentesque.\r\n\r\nQuisque porta volutpat erat. Quisque e',1278,'',0,'REMEDYREPACK INC.','2015-12-03','0000-00-00'),(83,'METHYL SALICYLATE','Vestibulum ac est lacinia nisi venenatis tristique. Fusce congue, diam id ornare imperdiet, sapien urna pretium nisl, ut volutpat sapien arcu sed augue. Aliquam erat volutpat.\r\n\r\nIn congue. Etiam justo. Etiam pretium iaculis justo.\r\n\r\nIn hac habitass',914,'',1,'AB7 Industries','2015-11-01','0000-00-00'),(84,'METHYL SALICYLATE','Aenean fermentum. Donec ut mauris eget massa tempor convallis. Nulla neque libero, convallis eget, eleifend luctus, ultricies eu, nibh.\r\n\r\nQuisque id justo sit amet sapien dignissim vestibulum. Vestibulum ante ipsum primis in faucibus orci luctus et ',1031,'',1,'AB7 Industries','2016-02-11','0000-00-00'),(85,'DIMETHICONE','Integer ac leo. Pellentesque ultrices mattis odio. Donec vitae nisi.\r\n\r\nNam ultrices, libero non mattis pulvinar, nulla pede ullamcorper augue, a suscipit nulla elit ac nulla. Sed vel enim sit amet nunc viverra dapibus. Nulla suscipit ligula in lacus',1436,'',0,'MEGASOL COSMETIC GMBH','2015-11-19','0000-00-00'),(86,'Benztropine Mesylate','In quis justo. Maecenas rhoncus aliquam lacus. Morbi quis tortor id nulla ultrices aliquet.\r\n\r\nMaecenas leo odio, condimentum id, luctus nec, molestie sed, justo. Pellentesque viverra pede ac diam. Cras pellentesque volutpat dui.',291,'',0,'REMEDYREPACK INC.','2015-07-18','0000-00-00'),(87,'Dextrose (glucose), Levulose (fructose), Phosphori','Integer tincidunt ante vel ipsum. Praesent blandit lacinia erat. Vestibulum sed magna at nunc commodo placerat.\r\n\r\nPraesent blandit. Nam nulla. Integer pede justo, lacinia eget, tincidunt eget, tempus vel, pede.\r\n\r\nMorbi porttitor lorem id ligula. Su',827,'',1,'Kroger Company','2016-03-19','0000-00-00'),(88,'OCTINOXATE, TITANIUM DIOXIDE','Aenean lectus. Pellentesque eget nunc. Donec quis orci eget orci vehicula condimentum.\r\n\r\nCurabitur in libero ut massa volutpat convallis. Morbi odio odio, elementum eu, interdum eu, tincidunt in, leo. Maecenas pulvinar lobortis est.\r\n\r\nPhasellus sit',542,'',1,'Benefit Cosmetics, LLC','2016-01-15','0000-00-00'),(89,'Velvet Grass','Etiam vel augue. Vestibulum rutrum rutrum neque. Aenean auctor gravida sem.\r\n\r\nPraesent id massa id nisl venenatis lacinia. Aenean sit amet justo. Morbi ut odio.\r\n\r\nCras mi pede, malesuada in, imperdiet et, commodo vulputate, justo. In blandit ultric',949,'',1,'Nelco Laboratories, Inc.','2015-05-22','0000-00-00'),(90,'Human Immunoglobulin G','Maecenas leo odio, condimentum id, luctus nec, molestie sed, justo. Pellentesque viverra pede ac diam. Cras pellentesque volutpat dui.\r\n\r\nMaecenas tristique, est et tempus semper, est quam pharetra magna, ac consequat metus sapien ut nunc. Vestibulum',254,'',1,'Baxter Healthcare Corporation','2015-07-04','0000-00-00'),(91,'Acetaminophen','Praesent id massa id nisl venenatis lacinia. Aenean sit amet justo. Morbi ut odio.',174,'',1,'Major Pharmaceuticals','2015-06-14','0000-00-00'),(92,'glycerin, phenylephrine HCl, pramoxine HCl, white ','Maecenas tristique, est et tempus semper, est quam pharetra magna, ac consequat metus sapien ut nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Mauris viverra diam vitae quam. Suspendisse potenti.',1018,'',0,'HyVee Inc','2015-08-15','0000-00-00'),(93,'Ibuprofen','Curabitur gravida nisi at nibh. In hac habitasse platea dictumst. Aliquam augue quam, sollicitudin vitae, consectetuer eget, rutrum at, lorem.\r\n\r\nInteger tincidunt ante vel ipsum. Praesent blandit lacinia erat. Vestibulum sed magna at nunc commodo pl',948,'',1,'Contract Pharmacy Services-PA','2015-06-29','0000-00-00'),(94,'Aceticum Acidum, Colchicum Autumnale, Lacticum Aci','Maecenas ut massa quis augue luctus tincidunt. Nulla mollis molestie lorem. Quisque ut erat.',278,'',1,'Energique, Inc.','2015-09-08','0000-00-00'),(95,'diflorasone diacetate1','Vestibulum ac est lacinia nisi venenatis tristique. Fusce congue, diam id ornare imperdiet, sapien urna pretium nisl, ut volutpat sapien arcu sed augue. Aliquam erat volutpat.\r\n\r\nIn congue. Etiam justo. Etiam pretium iaculis justo.\r\n\r\nIn hac habitass',241,'',1,'E. FOUGERA & CO., A division of Fougera Pharmaceut','2016-03-02','0000-00-00'),(96,'Naproxen','In congue. Etiam justo. Etiam pretium iaculis justo.\r\n\r\nIn hac habitasse platea dictumst. Etiam faucibus cursus urna. Ut tellus.\r\n\r\nNulla ut erat id mauris vulputate elementum. Nullam varius. Nulla facilisi.',510,'',1,'MARKSANS PHARMA LIMITED','2015-10-12','0000-00-00'),(97,'Brompheniramine maleate, Dextromethorphan HBr, Phe','Praesent blandit. Nam nulla. Integer pede justo, lacinia eget, tincidunt eget, tempus vel, pede.\r\n\r\nMorbi porttitor lorem id ligula. Suspendisse ornare consequat lectus. In est risus, auctor sed, tristique in, tempus sit amet, sem.',1040,'',1,'Wal-Mart Stores Inc','2015-12-07','0000-00-00'),(98,'Povidone-Iodine','Etiam vel augue. Vestibulum rutrum rutrum neque. Aenean auctor gravida sem.\r\n\r\nPraesent id massa id nisl venenatis lacinia. Aenean sit amet justo. Morbi ut odio.\r\n\r\nCras mi pede, malesuada in, imperdiet et, commodo vulputate, justo. In blandit ultric',1074,'',0,'Wuxi Medical Instrument Factory','2015-10-06','0000-00-00'),(99,'olmesartan medoxomil','Quisque id justo sit amet sapien dignissim vestibulum. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla dapibus dolor vel est. Donec odio justo, sollicitudin ut, suscipit a, feugiat et, eros.\r\n\r\nVestibulum',54,'',0,'PD-Rx Pharmaceuticals, Inc.','2015-05-09','0000-00-00'),(100,'Capsaicin','Integer tincidunt ante vel ipsum. Praesent blandit lacinia erat. Vestibulum sed magna at nunc commodo placerat.\r\n\r\nPraesent blandit. Nam nulla. Integer pede justo, lacinia eget, tincidunt eget, tempus vel, pede.',864,'',1,'Meijer','2015-08-31','0000-00-00'),(101,'MOUSE EPITHELIA','Quisque porta volutpat erat. Quisque erat eros, viverra eget, congue eget, semper rutrum, nulla. Nunc purus.\r\n\r\nPhasellus in felis. Donec semper sapien a libero. Nam dui.',710,'',1,'ALK-Abello, Inc.','2015-12-05','0000-00-00'),(102,'Bitternut Hickory','Cras non velit nec nisi vulputate nonummy. Maecenas tincidunt lacus at velit. Vivamus vel nulla eget eros elementum pellentesque.',996,'',1,'Antigen Laboratories, Inc.','2015-12-11','0000-00-00'),(103,'Mefloquine Hydrochloride','Praesent id massa id nisl venenatis lacinia. Aenean sit amet justo. Morbi ut odio.',1167,'',1,'Rebel Distributors Corp','2015-11-08','0000-00-00'),(104,'Aethusa cynapium, Arsenicum album, Cocculus indicu','Proin interdum mauris non ligula pellentesque ultrices. Phasellus id sapien in sapien iaculis congue. Vivamus metus arcu, adipiscing molestie, hendrerit at, vulputate vitae, nisl.\r\n\r\nAenean lectus. Pellentesque eget nunc. Donec quis orci eget orci ve',1436,'',1,'Apotheca Company','2015-06-04','0000-00-00'),(105,'Simethicone','Quisque porta volutpat erat. Quisque erat eros, viverra eget, congue eget, semper rutrum, nulla. Nunc purus.',769,'',1,'Raritan Pharmaceuticals Inc','2016-01-21','0000-00-00'),(106,'zolpidem tartrate','Mauris enim leo, rhoncus sed, vestibulum sit amet, cursus id, turpis. Integer aliquet, massa id lobortis convallis, tortor risus dapibus augue, vel accumsan tellus nisi eu orci. Mauris lacinia sapien quis libero.\r\n\r\nNullam sit amet turpis elementum l',685,'',1,'PD-Rx Pharmaceuticals, Inc.','2015-09-11','0000-00-00'),(107,'amlodipine besylate and valsartan','Fusce consequat. Nulla nisl. Nunc nisl.\r\n\r\nDuis bibendum, felis sed interdum venenatis, turpis enim blandit mi, in porttitor pede justo eu massa. Donec dapibus. Duis at velit eu est congue elementum.\r\n\r\nIn hac habitasse platea dictumst. Morbi vestibu',431,'',1,'Physicians Total Care, Inc.','2015-05-25','0000-00-00'),(108,'metoprolol succinate','Morbi porttitor lorem id ligula. Suspendisse ornare consequat lectus. In est risus, auctor sed, tristique in, tempus sit amet, sem.',117,'',0,'Ethex Corporation','2015-07-22','0000-00-00'),(109,'Acetaminophen','Morbi porttitor lorem id ligula. Suspendisse ornare consequat lectus. In est risus, auctor sed, tristique in, tempus sit amet, sem.',759,'',0,'CVS Pharmacy','2016-01-10','0000-00-00'),(110,'Horse Epithelium','Nullam porttitor lacus at turpis. Donec posuere metus vitae ipsum. Aliquam non mauris.',1218,'',1,'ALK-Abello, Inc.','2015-06-01','0000-00-00'),(111,'BENZALKONIUM CHLORIDE','Sed sagittis. Nam congue, risus semper porta volutpat, quam pede lobortis ligula, sit amet eleifend pede libero quis orci. Nullam molestie nibh in lectus.\r\n\r\nPellentesque at nulla. Suspendisse potenti. Cras in purus eu magna vulputate luctus.',1295,'',1,'Woodbine Products Company','2016-02-07','0000-00-00'),(112,'ASCORBIC ACID, CHOLECALCIFEROL, ALPHA-TOCOPHEROL A','Proin leo odio, porttitor id, consequat in, consequat ut, nulla. Sed accumsan felis. Ut at dolor quis odio consequat varius.',377,'',1,'Midlothian Laboratories','2015-04-04','0000-00-00'),(113,'Diphenhydramine HCl','Sed ante. Vivamus tortor. Duis mattis egestas metus.\r\n\r\nAenean fermentum. Donec ut mauris eget massa tempor convallis. Nulla neque libero, convallis eget, eleifend luctus, ultricies eu, nibh.\r\n\r\nQuisque id justo sit amet sapien dignissim vestibulum. ',1461,'',1,'The Kroger Co.','2015-09-14','0000-00-00'),(114,'Apis mellifica, Carbo vegetabilis, Carduus marianu','Proin leo odio, porttitor id, consequat in, consequat ut, nulla. Sed accumsan felis. Ut at dolor quis odio consequat varius.',963,'',1,'Eight and Company','2015-05-16','0000-00-00'),(115,'Avobenzone, Homosalate, Octinoxate, Octisalate, Oc','Cras mi pede, malesuada in, imperdiet et, commodo vulputate, justo. In blandit ultrices enim. Lorem ipsum dolor sit amet, consectetuer adipiscing elit.',1018,'',1,'Fischer Pharmaceuticals Ltd','2015-07-26','0000-00-00'),(116,'Titanium Dioxide and Zinc Oxide','Aenean lectus. Pellentesque eget nunc. Donec quis orci eget orci vehicula condimentum.',1388,'5_56f9c7246fa57.jpg',1,'DHC USA Incorporated','2015-04-11','2016-03-29'),(117,'GG','fsd',112,'updater.png',1,'sss','2012-04-11','2016-03-29'),(118,'wqe','eqweqw',123,'updater.png',1,'fsdf','2015-04-11','2016-03-29'),(119,'das','qw',123,'6_56fa84c47ac15.jpg',1,'das','2016-03-29',''),(120,'nw','wq',1575,'',1,'eqwe','2016-03-29',''),(121,'12','qwddasd',123,'7_56fa8a6519b07.jpg',1,'dasd','2016-03-29','');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(50) NOT NULL,
  `password` char(60) NOT NULL,
  `admin` set('y','n') NOT NULL DEFAULT 'n',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (7,'admin','$2y$11$aYXC3C2tGIggJ.CWVDPIouC6AAztNX3GjuKMn9H9P7MLAmR4jq8I6','y'),(9,'root','$2y$11$9EhkFKM7osA8OCL0TRzzTupUfuKz6qCf3EjU6IQR/qVOrGO9Gv/yK','y'),(10,'user','$2y$11$ayapbP5HnDthEjTLKXAotOfIrq05yWhcQ7knCuqlgCmOMVnxZ4.SW','n');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-03-29 17:13:38
