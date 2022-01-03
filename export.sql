-- MariaDB dump 10.17  Distrib 10.4.11-MariaDB, for osx10.10 (x86_64)
--
-- Host: localhost    Database: user
-- ------------------------------------------------------
-- Server version	10.4.11-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `photo` char(60) NOT NULL,
  `genre1` char(10) DEFAULT NULL,
  `genre2` char(10) DEFAULT NULL,
  `name` char(20) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `osusume` char(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product`
--

LOCK TABLES `product` WRITE;
/*!40000 ALTER TABLE `product` DISABLE KEYS */;
INSERT INTO `product` VALUES (1,'http://localhost/php_test/images/mcd_01.png','夜マック','ハンバーガー','ごはんてりやき',390,'1'),(2,'http://localhost/php_test/images/mcd_02.png','夜マック','ハンバーガー','ごはんベーコンレタス',410,'1'),(3,'http://localhost/php_test/images/mcd_03.png','夜マック','ハンバーガー','倍ビックマック',490,'1'),(4,'http://localhost/php_test/images/mcd_04.png','レギュラー','ハンバーガー','てりたま',360,'1'),(5,'http://localhost/php_test/images/mcd_05.png','レギュラー','ハンバーガー','はみ出るパストラミビーフてりたま',450,'1'),(6,'http://localhost/php_test/images/mcd_06.png','レギュラー','ハンバーガー','チーズてりたま',390,'1'),(7,'http://localhost/php_test/images/mcd_07.png','レギュラー','ハンバーガー','チキンクリスプ',110,'0'),(8,'http://localhost/php_test/images/mcd_08.png','朝マック','ハンバーガー','ソーセージエッグマフィン',250,'0'),(9,'http://localhost/php_test/images/mcd_09.png','レギュラー','ハンバーガー','てりやきチキンフィレオ セット',670,'0'),(10,'http://localhost/php_test/images/mcd_10.png','レギュラー','ハンバーガー','ビックマック セット',690,'0'),(11,'http://localhost/php_test/images/mcd_11.png','レギュラー','ハンバーガー','ハッピーセット',500,'0'),(12,'http://localhost/php_test/images/mcd_12.png','レギュラー','サイドメニュー','フライドポテト',200,'0'),(13,'http://localhost/php_test/images/mcd_13.png','レギュラー','サイドメニュー','チキンマックナゲット',200,'0'),(14,'http://localhost/php_test/images/mcd_14.png','レギュラー','スイーツ','マックフルーリー',240,'0'),(15,'http://localhost/php_test/images/mcd_15.png','レギュラー','スイーツ','ソフトツイスト',100,'0'),(16,'http://localhost/php_test/images/mcd_16.png','レギュラー','ドリンク','コカ・コーラ',150,'0'),(17,'http://localhost/php_test/images/mcd_17.png','レギュラー','ドリンク','オレンジジュース',150,'0'),(18,'http://localhost/php_test/images/mcd_18.png','レギュラー','ドリンク','ホットコーヒー',150,'0'),(19,'http://localhost/php_test/images/mcd_19.png','レギュラー','ドリンク','ファンタ グレープ',150,'0'),(20,'http://localhost/php_test/images/mcd_20.png','レギュラー','スイーツ','マックシェイク',180,'0');
/*!40000 ALTER TABLE `product` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sold`
--

DROP TABLE IF EXISTS `sold`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sold` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `photo` char(60) DEFAULT NULL,
  `name` char(30) DEFAULT NULL,
  `number` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `user_name` char(20) DEFAULT NULL,
  `date` char(10) DEFAULT NULL,
  `date_2` char(20) DEFAULT NULL,
  `genre2` char(10) DEFAULT NULL,
  `code` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sold`
--

LOCK TABLES `sold` WRITE;
/*!40000 ALTER TABLE `sold` DISABLE KEYS */;
INSERT INTO `sold` VALUES (1,'http://localhost/php_test/images/mcd_09.png','てりやきチキンフィレオ セット',1,670,'浜辺美波','2021-04-29','2021-04-29 19:44:08','ハンバーガー',9),(2,'http://localhost/php_test/images/mcd_18.png','ホットコーヒー',2,300,'浜辺美波','2021-04-29','2021-04-29 19:47:08','ドリンク',18),(3,'http://localhost/php_test/images/mcd_06.png','チーズてりたま',1,390,'山田太郎','2021-04-29','2021-04-29 22:32:24','ハンバーガー',6),(4,'http://localhost/php_test/images/mcd_15.png','ソフトツイスト',1,100,'朝倉未来','2021-04-29','2021-04-29 22:37:45','スイーツ',15),(5,'http://localhost/php_test/images/mcd_15.png','ソフトツイスト',1,100,'朝倉未来','2021-04-29','2021-04-29 22:37:59','スイーツ',15),(6,'http://localhost/php_test/images/mcd_03.png','倍ビックマック',5,2450,'山田太郎','2021-04-29','2021-04-29 22:40:29','ハンバーガー',3),(7,'http://localhost/php_test/images/mcd_14.png','マックフルーリー',1,240,'zorn','2021-04-29','2021-04-29 22:41:53','スイーツ',14),(8,'http://localhost/php_test/images/mcd_15.png','ソフトツイスト',5,500,'zorn','2021-04-29','2021-04-29 22:49:58','スイーツ',15),(9,'http://localhost/php_test/images/mcd_17.png','オレンジジュース',1,150,'zorn','2021-04-29','2021-04-29 23:00:19','ドリンク',17),(10,'http://localhost/php_test/images/mcd_12.png','フライドポテト',4,800,'アイウエオ','2021-04-29','2021-04-29 23:01:32','サイドメニュー',12),(11,'http://localhost/php_test/images/mcd_07.png','チキンクリスプ',1,110,'sum','2021-04-29','2021-04-29 23:12:15','ハンバーガー',7),(12,'http://localhost/php_test/images/mcd_07.png','チキンクリスプ',1,110,'sum','2021-04-29','2021-04-29 23:12:23','ハンバーガー',7),(13,'http://localhost/php_test/images/mcd_11.png','ハッピーセット',1,500,'sum','2021-04-29','2021-04-29 23:12:32','ハンバーガー',11),(14,'http://localhost/php_test/images/mcd_19.png','ファンタ グレープ',1,150,'アイウエオn','2021-04-29','2021-04-29 23:13:59','ドリンク',19),(15,'http://localhost/php_test/images/mcd_12.png','フライドポテト',4,800,'アイウエオn','2021-04-29','2021-04-29 23:14:11','サイドメニュー',12),(16,'http://localhost/php_test/images/mcd_02.png','ごはんベーコンレタス',1,410,'アイウエオn','2021-04-29','2021-04-29 23:15:11','ハンバーガー',2),(17,'http://localhost/php_test/images/mcd_16.png','コカ・コーラ',1,150,'浜辺美波','2021-04-30','2021-04-30 01:45:28','ドリンク',16);
/*!40000 ALTER TABLE `sold` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `userinfo`
--

DROP TABLE IF EXISTS `userinfo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `userinfo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` char(20) DEFAULT NULL,
  `email` char(30) NOT NULL,
  `password` char(128) NOT NULL,
  `area` char(10) DEFAULT NULL,
  `gender` char(1) DEFAULT NULL,
  `old` int(11) DEFAULT NULL,
  `memo` char(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `userinfo`
--

LOCK TABLES `userinfo` WRITE;
/*!40000 ALTER TABLE `userinfo` DISABLE KEYS */;
INSERT INTO `userinfo` VALUES (1,'山田太郎','aaa@xxx.com','$2y$10$HlYwtftB7v/Rb7pkU7cuV.YUdRCHUJkogUEX13I6UXMO0abLfQR6K','北海道','0',35,'１コメ！'),(2,'浜辺美波','minami@xxx.com','$2y$10$2T0yfaQimZNow05EIxxOaenn77MFhUt4J41L0FBL1vMZhPgP5Oure','北海道','1',20,'ヨロシク！'),(3,'ローランド','host@icloud.com','$2y$10$N2pCODy.RVS2ObcNkKCICOzSwGYriMApvSrwb0X8XTUubrSBvE2jm','関東地方','0',40,'俺が最強。'),(4,'田中義則','bbb@xxx.com','$2y$10$tLjzUjfgh2XZCihH.m175enFEglwFmzxC9qwJPpHadFEpPL.3t9wq','その他','0',66,'ハロー'),(5,'橋本環奈','kanna@xxx.com','$2y$10$zdr6rjNtNtKAZx/z7q/6MeId2dFHO4fxrlvPNebB2pj92DJT0iwWu','四国地方','1',22,'押忍'),(6,'長澤まさみ','ccc@xxx.com','$2y$10$2b4gnGy1XhNEtMQOFC7.UeofkIAqKypRj16QBh2YSDdIiSqJZ/8wy','関東地方','1',37,'yo'),(9,'野原 新之助','ketu@yahoo.jp','$2y$10$9G/X.WhX2tqZe8cV9L0N2O.RUTF7OP2GZkD/mrn0V6/ht9f/O2w2i','関東地方','0',5,'オネエチャーーーーん'),(10,'桐生一馬','gokudo@xxx.com','$2y$10$vnW6xR9cKFu2RNON8QmS3ujJbJpS9hifHltRZQ8xouLC/S2cxousa','九州地方','0',50,'殴るぞ'),(12,'朝倉未来','zzz@xxx.com','$2y$10$udg6Ewgt/BCVDoeLoPMP.uMbdyeNYcoYkuW/wmRBhchuKvHDN5PM6','九州地方','0',33,'l'),(13,'zorn','rep@xxx.com','$2y$10$xOlWAPJcq3CISaYVyAHxd.HyqRPH9UYzNb7tRfDnr98LchuWebx0y','関東地方','0',40,'arukouka'),(14,'アイウエオ','abcd@xxx.com','$2y$10$24mo2h2RZlhCenZ1dovx4e3ZXFIIQVHU00WYAsRuDpgyRS/sWLpWy','沖縄県','1',13,'1'),(15,'sum','sum@xxx.com','$2y$10$GpqqVu76DCJz.CdQ3xLD7.B8A1JLTvFswqB3jK5nS.aRu8of/9nBK','北海道','0',29,'yo'),(16,'アイウエオn','xxx@xxx.com','$2y$10$x.CHDP73ILSm3tEA/BpmzOmn6V26KcAmIt7lA1nOJ6YMjXJSfUx9C','北海道','1',30,'');
/*!40000 ALTER TABLE `userinfo` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-04-30  1:53:55
