-- MySQL dump 10.13  Distrib 8.0.36, for Linux (x86_64)
--
-- Host: localhost    Database: gos
-- ------------------------------------------------------
-- Server version	8.0.36-0ubuntu0.22.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `about_images`
--

DROP TABLE IF EXISTS `about_images`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `about_images` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `about_images`
--

LOCK TABLES `about_images` WRITE;
/*!40000 ALTER TABLE `about_images` DISABLE KEYS */;
INSERT INTO `about_images` VALUES (1,'/storage/images/about-image/KUqYWWUPayf7t4F78dYbVsPNQub4rOGbiqbNWIKC.jpg','2024-03-16 05:00:07','2024-03-25 14:23:44');
/*!40000 ALTER TABLE `about_images` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `about_texts`
--

DROP TABLE IF EXISTS `about_texts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `about_texts` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tm_text` text COLLATE utf8mb4_unicode_ci,
  `ru_text` text COLLATE utf8mb4_unicode_ci,
  `en_text` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `about_texts`
--

LOCK TABLES `about_texts` WRITE;
/*!40000 ALTER TABLE `about_texts` DISABLE KEYS */;
INSERT INTO `about_texts` VALUES (1,'Aşgabat şäher Arassalaýyş, abadanlaşdyryş birleşigi, Türkmenistanyň Prezidentiniň 2018-nji ýylyň 5-nji iýulyndaky “Türkmenistanyň Jemagat hojalygy ministrliginiň meseleleri hakynda 849 belgili karary, Türkmenistanyň Ministrler Kabinetiniň Başlygynyň Orunbasarynyň 2018-nji ýylyň 11-nji iýulyndaky AD/33 buýrugy, Türkmenistanyň Gurluşyk we binagärlik ministrliginiň 2018-nji ýylyň 19-njy iýulyndaky MB-102 AŞ we Aşgabat şäheriniň häkiminiň 2018-nji ýylyň 19-njy iýulyndaky 106 belgili bilelikdäki buýrugy hem-de Aşgabat şäher häkimliginiň Jemagat hojalygy müdirliginiň edara-kärhanalarynyň işini talaba laýyk gurnamak hem-de işleri guramaçylykly alyp barmak barada Aşgabat şäher häkiminiň 2018-nji ýylyň 06-njy awgustyndaky 112 belgili buýrugynyň esasynda döredildi. “Birleşik” Türkmenistanyň Maliýa we ykdysadyýet ministrliginiň ýuridik şahslary we maýa goýum taslamalary döwlet tarapyndan bellige almak bölüminde 2018-nji ýylyň awgust aýynyň 06-daky 15485086 belgi bilen bellige alnan şahadatnama esasynda, Aşgabat şäher häkimliginiň Jemagat hojalygy müdirliginiň gönümel tabynlygynda durýar. “Birleşigiň” düzüminde göni tabynlygyndaky özbaşdak, özleriniň hasaplaşyk hasaplary we gaýry hasaplary bolan müdirlikler we beýleki guramalar bolup, Birleşik öz işinde Türkmenistanyň Konstitusiýasy, Türkmenistanyň Mejlisiniň kararlary, Türkmenistanyň Ministrler kabinetiniň çözgütleri, beýleki kadalaşdyryjy hukuk namalary, Aşgabat şäher häkimligiň gözükdirijileri, kararlary, buýruklary we görkezmeleri hem-de Aşgabat şäher häkimliginiň Jemagat hojalygy müdirliginiň buýruklary we görkezmeleri esasynda hereket edýär.','Ассоциации уборки и благоустройства города Ашхабада, Постановление Президента Туркменистана от 5 июля 2018 года № 849 «О вопросах Министерства социальной экономики Туркменистана», приказ AD/33 Председателя Кабинета Министров Туркменистана от 11 июля 2018 года, Совместным приказом Министерства строительства и архитектуры Туркменистана МБ-102 от 19 июля 2018 года и приказом муниципалитета города Ашхабада от 19 июля 2018 года № 106, а также приказом № 112 от 6 августа 2018 года муниципалитета города Ашхабад организовать работу учреждений и предприятий отдела социальной экономики в соответствии с требованиями и вести работу организованно. «Союз» юридических лиц и инвестиционных проектов Министерства финансов и экономики Туркменистана находятся в непосредственном ведении Администрация народного хозяйства муниципалитета города Ашхабада на основании свидетельства, зарегистрированного под номером 15485086 от 06 августа 2018 года в Администрации государственной регистрации  В состав «Союза» входят независимые дирекции и другие организации, имеющие свои расчетные счета и иные счета, а также Конституция Туркменистана, решения Меджлиса Туркменистана, постановления Кабинета Министров Туркменистана, другие нормативно-правовые документы, отчеты, решения, приказы и указания муниципалитета города Ашхабада и действует на основании приказов и указаний Администрации народного хозяйства муниципалитета города Ашхабада.','Association of Cleaning and Improvement of the City of Ashgabat, Resolution of the President of Turkmenistan dated July 5, 2018 No. 849 “On issues of the Ministry of Social Economy of Turkmenistan”, Order AD/33 of the Chairman of the Cabinet of Ministers of Turkmenistan dated July 11, 2018, Joint Order of the Ministry of Construction and Architecture of Turkmenistan MB-102 dated July 19, 2018 and by order of the Ashgabat city municipality dated July 19, 2018 No. 106, as well as by order No. 112 dated August 6, 2018 of the Ashgabat city municipality, organize the work of institutions and enterprises of the social economics department in accordance with the requirements and conduct work in an organized manner. The “Union” of legal entities and investment projects of the Ministry of Finance and Economy of Turkmenistan are under the direct supervision of the Administration of National Economy of the Municipality of Ashgabat on the basis of a certificate registered under number 15485086 dated August 6, 2018 in the State Registration Administration. The “Union” includes independent directorates and others organizations that have their own current accounts and other accounts, as well as the Constitution of Turkmenistan, decisions of the Mejlis of Turkmenistan, resolutions of the Cabinet of Ministers of Turkmenistan, other regulatory documents, reports, decisions, orders and instructions of the municipality of Ashgabat and acts on the basis of orders and instructions of the Administration of National Economy municipality of Ashgabat.','2024-03-16 05:00:07','2024-04-02 07:01:44');
/*!40000 ALTER TABLE `about_texts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `abouts`
--

DROP TABLE IF EXISTS `abouts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `abouts` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `about_text_id` bigint unsigned NOT NULL,
  `tm_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ru_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `en_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tm_content` text COLLATE utf8mb4_unicode_ci,
  `ru_content` text COLLATE utf8mb4_unicode_ci,
  `en_content` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `about_about_text_id_fk` (`about_text_id`),
  CONSTRAINT `about_about_text_id_fk` FOREIGN KEY (`about_text_id`) REFERENCES `about_texts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `abouts`
--

LOCK TABLES `abouts` WRITE;
/*!40000 ALTER TABLE `abouts` DISABLE KEYS */;
INSERT INTO `abouts` VALUES (1,1,'Aşgabat şäher Arassalaýyş, abadanlaşdyryş birleşiginiň Bagçylyk bölümi','Отдел садоводства города Ашхабада Ассоциации уборки и благоустройства','Ashgabat City Gardening Department of the Cleaning and Improvement Association','Hormatly Prezidentimiziň Ýurdumyzda uzyn möhletleýin ekologiýa syýasatyny ösdürmek, ilatymyzyň yaşaýyş durmuş derejesini ýokarlandyrmak maksady bilen, her ýylyň ýaz we güýz möwsüminde, Ýurdumyzda bag ekmek barada karar kabul edýär. Kabul edilen kararlara laýyklykda, Aşgabat şäher Arassalaýyş, abadanlaşdyryş birleşiginiň garamagyndaky Bagçylyk müdirlikleri tarapyndan Paýtagtymyzyň şaýollarynyň ugrunda, seýil baglarynda, syýasy durmuş maksatly döwrebap binalaryň daş töwereginde  toplumlaýyn dürli görnüşli baglary  we dürli reňkli gülleri ekilýär we bu babatda birleşigiň Bagçylyk bölümi ýylyň dowamynda ekilen baglaryň, gülleriň Paýtagtymyzyň al-ýaşyl  bagy-bossanlyga, gül-gülzarlyga öwrülmegi ugrunda alnyp barylýan işlere gözegçilik edýär.','В целях разработки долгосрочной экологической политики в нашей стране и повышения уровня жизни нашего народа каждый год в весенне-осенний сезон Уважаемый Президент Туркменистана принимает решение о посадке сада в нашей стране. В соответствии с принятыми решениями отдела садоводства при Ассоциации уборки и благоустройства города Ашхабада вдоль проспектов Ашхабада, в парках, вокруг каменных стен современных зданий с политическими и социальными целями высажены разнообразные сады и цветы различной окраски, и в этой связи Отдел садоводства круглый год руководит делами ассоциации работает над преображением садов и цветов, высаженные в сине-зеленом саду и цветнике.','In order to develop a long-term environmental policy in our country and improve the standard of living of our people, every year in the spring-autumn season, the Respected President of Turkmenistan decides to plant a garden in our country. In accordance with the decisions of the Gardening Department of the Ashgabat City Cleaning and Improvement Association, various gardens and flowers of various colors are planted along the avenues of Ashgabat, in parks, around the stone walls of modern buildings for political and social purposes, and in this regard, the Gardening Department manages the affairs of the association all year round working on transforming the gardens and flowers planted in the blue-green garden and flower garden.','/storage/images/about/zj4975rk3xNKTnrfxqcTySg32VY6aJh5GeDfhwV4.jpg','2024-03-16 05:00:07','2024-04-01 16:19:57'),(2,1,'Aşgabat şäher Arassalaýyş, abadanlaşdyryş birleşiginiň Tehniki önümçilik bölümi','Техническо-производственный отдел города Ашхабада Ассоциации уборки и благоустройства','Technical and production department of the city of Ashgabat of the Association of Cleaning and Improvement','Ýurdumyzyň paýtagty Ak şäherimiz Aşgabadyň çäginde arassalaýyş, abadanlaşdyryş işlerini meýilleşdirýär. Şäherimiziň çägindäki gara ýollaryň gyralaryndaky jähek daşlarynyň, ýer asty we ýer üsti geçelgeleriň, duralgalaryň, köprüleriň, seýilgähleriň, suw çüwdürimleriniň, suwaryş ulgamlarynyň, zir-zibil nokatlarynyň durkuny saklamak maksady bilen bejeriş işlerine, işiň ýerine ýetirilişine gözegçilik edýär we maliýe işlerini geçirýär.','В столице нашей страны – Белом городе – планируются работы по благоустройству и чистку территории города Ашхабада. Он контролирует проводимые работы и проводит финансовые дела с целью содержанию внешности, реализацию и финансовую эксплуатацию бордюров грунтовых дорог нашего города, подземных и надземных переходов, автостоянок, мостов, парков, фонтанов, ирригационных систем и свалок.','In the capital of our country - the White City - work is planned to improve and clean the territory of the city of Ashgabat. He supervises the work being carried out and conducts financial affairs in order to maintain the appearance, implementation and financial operation of our city\'s dirt road curbs, underground and overpasses, parking lots, bridges, parks, fountains, irrigation systems and landfills.','/storage/images/about/125eLzVC3fo5wT3roKdjG4fuem2UIMZ9miSZjxdr.jpg','2024-03-16 05:00:07','2024-04-02 07:00:00'),(3,1,'Aşgabat şäher Arassalaýyş, abadanlaşdyryş birleşiginiň Şertnama bölümi','Контрактный отдел Ассоциации уборки и благоустройства города Ашхабада','Contract Department of the Association of Cleaning and Improvement of the City of Ashgabat','Aşgabat şäheriniň çäginde eýeçiligiň görnüşlerine we haýsy pudaga degişlidigine garamazdan edaralardan, telekeçilerden, kärhanalardan we daşary ýurt kompaniýalardan hojalyk galyndylary aýyrmak üçin öz wagtynda zir-zibilleri ýygnalmagyny we şol babatynda ikitaraplaýyn şertnamalar baglanyşmak işlerini geçirýär.','На территории города Ашхабада, независимо от формы собственности и отрасли, учреждения, предпринимателей, предприятия и иностранные компании своевременно собирают отходы и заключают в этой связи двусторонние соглашения.','In the city of Ashgabat, regardless of the form of ownership and industry, institutions, entrepreneurs, enterprises and foreign companies collect waste in a timely manner and conclude bilateral agreements in this regard.','/storage/images/about/P4TpPE97scBBtkc4eLkH2TCF0UuxkgAVOCkSCAdK.jpg','2024-03-16 05:00:07','2024-04-02 07:00:19'),(4,1,'Aşgabat şäher Arassalaýyş, abadanlaşdyryş birleşiginiň Arassaçylyk bölümi','Отдел чистоты города Ашхабада Ассоциации уборки и благоустройства','Ashgabat City Cleanlines Department of the Cleaning and Improvement Association','Aşgabat şäheriniň ilatly ýerleriniň çäkleriniň arassaçylyk taýdan saklanmagyny we ilatly ýerleriň çäklerinde ýygnalýan köçe hapalary wagtynda ýygnalmagyny, çalt äkidilmegini ýgtybarly zyýansyzlandyrylmagyny we olaryň ykdysady taýdan maksada laýyk ulanylmagyny göz öňünde tutulmagyny hem-de aýry-aýry desgalary, şeýle hem dürli pudaklaýyn dolandyryş edaralarynyň, ýaşaýyş jaý çäkleriniň arassaçylyk taýdan arassalanmagy, olarda ýörite ulag bar mahaly hyzmat etmegini we usulyýet taýdan ýolbaşçylygynda şol ilatly ýer üçin kabul edilen iş tertibi boýunça geçirmegini gözegçilikde saklaýar.','Необходимо обеспечить гигиеническое содержание границ населенных пунктов города Ашхабада, сбор, быструю транспортировку, безопасную обезвреживание уличных отходов, собираемых в пределах населенных пунктов, и учет их хозяйственного использования, как отдельных объектов, так и различных ведомственных административных объектов, органов, жилых помещений, контролирует их санитарную очистку, их содержание','It is necessary to ensure the hygienic maintenance of the boundaries of populated areas of the city of Ashgabat, the collection, rapid transportation, safe disposal of street waste collected within populated areas, and accounting for their economic use, both individual objects and various departmental administrative facilities, bodies, residential premises, controls them sanitary cleaning, their maintenance if they have special vehicles and carries them out in accordance with the work schedule adopted for a given locality, under their methodological guidance.','/storage/images/about/ZeNf53LmxGaLgLo78QF9g3yQEhE7EiDjEQDlALwj.jpg','2024-03-16 05:00:07','2024-04-01 16:36:21');
/*!40000 ALTER TABLE `abouts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `banners`
--

DROP TABLE IF EXISTS `banners`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `banners` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tm_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ru_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `en_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tm_content` text COLLATE utf8mb4_unicode_ci,
  `ru_content` text COLLATE utf8mb4_unicode_ci,
  `en_content` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `banners`
--

LOCK TABLES `banners` WRITE;
/*!40000 ALTER TABLE `banners` DISABLE KEYS */;
INSERT INTO `banners` VALUES (1,NULL,NULL,NULL,NULL,NULL,NULL,'/storage/images/banner/pbzgisxqzp-banner-1.jpg','2024-03-16 05:00:07','2024-03-18 09:52:22'),(2,NULL,NULL,NULL,'Aşgabat şäheriniň ilatly ýerleriniň çäkleriniň arassaçylyk taýdan saklanmagyny we ilatly ýerleriň çäklerinde ýygnalýan köçe hapalary wagtynda ýygnalmagyny, çalt äkidilmegini ýgtybarly zyýansyzlandyrylmagyny we olaryň ykdysady taýdan maksada laýyk ulanylmagyny göz öňünde tutulmagyny hem-de aýry-aýry desgalary, şeýle hem dürli pudaklaýyn dolandyryş edaralarynyň, ýaşaýyş jaý çäkleriniň arassaçylyk taýdan arassalanmagy, olarda ýörite ulag bar mahaly hyzmat etmegini we usulyýet taýdan ýolbaşçylygynda şol ilatly ýer üçin kabul edilen iş tertibi boýunça geçirmegini gözegçilikde saklaýar.','Необходимо обеспечить гигиеническое содержание границ населенных пунктов города Ашхабада, сбор, быструю транспортировку, безопасную обезвреживание уличных отходов, собираемых в пределах населенных пунктов, и учет их хозяйственного использования, как отдельных объектов, так и различных ведомственных административных объектов, органов, жилых помещений, контролирует их санитарную очистку, их содержание при наличии у них специального автотранспорта и проводит их согласно графику работ, принятому для данного населенного пункта, под своим методическим руководством.','It is necessary to ensure the hygienic maintenance of the boundaries of populated areas of the city of Ashgabat, the collection, rapid transportation, safe disposal of street waste collected within populated areas, and accounting for their economic use, both individual objects and various departmental administrative facilities, bodies, residential premises, controls them sanitary cleaning, their maintenance if they have special vehicles and carries them out in accordance with the work schedule adopted for a given locality, under their methodological guidance.','/storage/images/banner/gU58YAgkOl2mLgsPd0H2IJSlSvJ3NXRi0Ah0jKS2.jpg','2024-03-16 05:00:07','2024-04-01 10:38:02'),(3,'Şäheriň arassaçylygy biziň gözegçiligimizde','Чистота города под нашем контролем','The cleanliness of the city is under our control',NULL,NULL,NULL,'/storage/images/banner/YzjVtB2PXGFmuSWDYy6bTnmghYAEnxHfI3mWNkR5.jpg','2024-03-16 05:00:07','2024-04-01 10:57:39');
/*!40000 ALTER TABLE `banners` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cards`
--

DROP TABLE IF EXISTS `cards`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cards` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `ru_content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tm_content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `en_content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cards`
--

LOCK TABLES `cards` WRITE;
/*!40000 ALTER TABLE `cards` DISABLE KEYS */;
INSERT INTO `cards` VALUES (1,'Отдел садоводства города Ашхабада Ассоциации уборки и благоустройства','Aşgabat şäher Arassalaýyş, abadanlaşdyryş birleşiginiň Bagçylyk bölümi','Ashgabat City Gardening Department of the Cleaning and Improvement Association','/storage/images/card/hK0Yb3U22H9rXFZXENdolVl8QynVIwUWqDvWGtfL.jpg','2024-03-16 05:00:07','2024-04-01 10:28:02'),(2,'Техническо-производственный отдел города Ашхабада Ассоциации уборки и благоустройства','Aşgabat şäher Arassalaýyş, abadanlaşdyryş birleşiginiň Tehniki önümçilik bölümi','Technical and production department of the city of Ashgabat of the Association of Cleaning and Improvement','/storage/images/card/mTSU7xWPOA0bhAnE6x4EK7bBdfSM47imsXdoiAu8.jpg','2024-03-16 05:00:07','2024-04-01 10:28:16'),(3,'Контрактный отдел Ассоциации уборки и благоустройства города Ашхабада','Aşgabat şäher Arassalaýyş, abadanlaşdyryş birleşiginiň Şertnama bölümi','Contract Department of the Association of Cleaning and Improvement of the City of Ashgabat','/storage/images/card/6LAOHdtCFLgX7fzwFUL3e1tFy7PfBQ0FctPqne1n.jpg','2024-03-16 05:00:07','2024-04-01 10:26:37'),(4,'Отдел чистоты города Ашхабада Ассоциации уборки и благоустройства','Aşgabat şäher Arassalaýyş, abadanlaşdyryş birleşiginiň Arassaçylyk bölümi','Ashgabat City Cleanliness Department of the Cleaning and Improvement Association','/storage/images/card/yIXOUxsy73nHh6gD8CrRsz0Kk2fZ8DpLewpyDUZl.jpg','2024-03-16 05:00:07','2024-04-01 10:28:48');
/*!40000 ALTER TABLE `cards` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contents`
--

DROP TABLE IF EXISTS `contents`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `contents` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tm_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ru_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `en_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tm_content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `ru_content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `en_content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contents`
--

LOCK TABLES `contents` WRITE;
/*!40000 ALTER TABLE `contents` DISABLE KEYS */;
INSERT INTO `contents` VALUES (1,'Türkmenistanyň Рrezidenti','Президент Туркменистана','President of Turkmenistan','<p>2024-nji ýyl Türkmenistanda bir ýyl diýlip yglan edildi</p><p>\r\n                    <br><b> Sebäbiň hazynasy <br> Makhtumkuli Fragi </b><br>\r\n                    Hormatly Arkadag Serdaryň belleýşi ýaly, 300 ýyllygy mynasybetli, akyldarymyz we şahyrymyz Magtymgulynyň şu günki eserleri türkmenleriň ruhunyň sesi bolup, dünýäni ýagtylandyrýar. Bu şöhratly ýylda Magtymguly Pyragynyň döredijilik işiniň şöhratyny mundan beýläk wagyz etmek we giňden ýaýratmak we bu ugurda halkara hyzmatdaşlygyny güýçlendirmek üçin ýurtda uly işler alnyp barylýar.</p>','<p>2024 год в Туркменистане объявлен годом</p><p><br></p><blockquote class=\"blockquote\"><b>\"Кладезь разума<br> </b><b>Махтумкули Фраги\"</b></blockquote><p> В честь 300-летия, как отметил Уважаемый Аркадаглы Герой Сердар, произведения нашего мудреца и поэта Махтумкули сегодня являются голосом туркменской души и освещают мир. В славный год в стране проводится масштабная работа по дальнейшему проповедению и широкому распространению славы творчества Махтумкули Пыраги, укреплению международного сотрудничества в этой области.</p>','<p>2024 has been declared a year in Turkmenistan</p><p>\r\n                    <br><b>Treasury of reason<br>Makhtumkuli Fragi</b><br>\r\n                    In honor of the 300th anniversary, as noted by Dear Arkadag Serdar, the works of our sage and poet Magtymguly today are the voice of the Turkmen soul and illuminate the world. In this glorious year, large-scale work is being carried out in the country to further preach and widely disseminate the glory of Magtymguly Pyraghi’s work and strengthen international cooperation in this area.</p>','/storage/images/content/qdQGVAzUsXWFjIgq54abDZWCrA0MqTi3UwzosRVU.jpg','2024-03-16 05:00:07','2024-04-01 10:22:28');
/*!40000 ALTER TABLE `contents` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `footer_contents`
--

DROP TABLE IF EXISTS `footer_contents`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `footer_contents` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tel` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address_tm` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address_ru` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `work_tm` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `work_ru` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `work_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `footer_contents`
--

LOCK TABLES `footer_contents` WRITE;
/*!40000 ALTER TABLE `footer_contents` DISABLE KEYS */;
INSERT INTO `footer_contents` VALUES (1,'+993 12 27-25-95','birleshik@arassachylyk.gov.tm','Aşgabat ş, Magtymguly şaýoly, 1-nji jaýy','Город Ашгабад, улица Махтумкули дом 1','Ashgabat city, Magtymguly street building 1','8:00 - 18:00 br-ot','8:00 - 18:00 пн-вс','8:00 - 23:00 mn-sn','2024-03-25 10:35:14','2024-03-25 14:22:01');
/*!40000 ALTER TABLE `footer_contents` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `footers`
--

DROP TABLE IF EXISTS `footers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `footers` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `ru_content` text COLLATE utf8mb4_unicode_ci,
  `tm_content` text COLLATE utf8mb4_unicode_ci,
  `en_content` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `footers`
--

LOCK TABLES `footers` WRITE;
/*!40000 ALTER TABLE `footers` DISABLE KEYS */;
INSERT INTO `footers` VALUES (1,'На территории города Ашхабада, независимо от формы собственности и отрасли, учреждения, предпринимателей, предприятия и иностранные компании своевременно собирают отходы и заключают в этой связи двусторонние соглашения.','Aşgabat şäheriniň çäginde eýeçiligiň görnüşlerine we haýsy pudaga degişlidigine garamazdan edaralardan, telekeçilerden, kärhanalardan we daşary ýurt kompaniýalardan hojalyk galyndylary aýyrmak üçin öz wagtynda zir-zibilleri ýygnalmagyny we şol babatynda ikitaraplaýyn şertnamalar baglanyşmak işlerini geçirýär.','In the city of Ashgabat, regardless of the form of ownership and industry, institutions, entrepreneurs, enterprises and foreign companies collect waste in a timely manner and conclude bilateral agreements in this regard.','2024-03-16 05:00:07','2024-04-01 11:01:07');
/*!40000 ALTER TABLE `footers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `galleries`
--

DROP TABLE IF EXISTS `galleries`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `galleries` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `galleries`
--

LOCK TABLES `galleries` WRITE;
/*!40000 ALTER TABLE `galleries` DISABLE KEYS */;
INSERT INTO `galleries` VALUES (16,'фото 11','/storage/images/gallery/98NMzASbq55WbprWE3r70LFahu902yec6DBkqKjO.jpg','2024-03-26 05:17:16','2024-03-26 05:17:16'),(17,'фото 12','/storage/images/gallery/0qeLcIeSKE1fyuGxUHOQVhxi5r5CLhbjLjaeFNsX.jpg','2024-03-26 05:19:39','2024-03-26 05:19:39'),(18,'фото 13','/storage/images/gallery/dnC2QDmphWsHDWohIcznGqJw2fEhr1EoZZIsqj1r.jpg','2024-03-26 05:21:06','2024-03-26 05:21:06'),(19,'фото 14','/storage/images/gallery/iB9GYYsPMzB8Fto82o7kOa7WFlSgn9clzvamlGfv.jpg','2024-03-26 05:22:15','2024-03-26 05:22:15'),(20,'фото 15','/storage/images/gallery/QZjGyl5s2X7Ujx7umkKk0KIpUFO6MvBlC04Rr13e.jpg','2024-03-26 05:24:10','2024-03-26 05:24:10'),(21,'фото 16','/storage/images/gallery/IHUKkeLBY3Sq09Buata4KzXPb2MAEzRAERPIuzZL.jpg','2024-03-26 05:26:36','2024-03-26 05:26:36'),(22,'фото 18','/storage/images/gallery/EeMlRZWX7hD7rrDXjrvjjKI3DUK1waeqy0d6Ybix.jpg','2024-03-26 05:28:44','2024-03-26 05:28:44');
/*!40000 ALTER TABLE `galleries` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `logos`
--

DROP TABLE IF EXISTS `logos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `logos` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `logos`
--

LOCK TABLES `logos` WRITE;
/*!40000 ALTER TABLE `logos` DISABLE KEYS */;
INSERT INTO `logos` VALUES (1,'/storage/images/logo/Otv9NhC7vOMWge1qnEPd0jQJvVpSmpl3WE0uDoeU.jpg','2024-03-16 05:00:07','2024-03-19 14:53:10'),(2,'/image/logo.png','2024-03-16 05:00:07','2024-03-16 05:00:07');
/*!40000 ALTER TABLE `logos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_reset_tokens_table',1),(3,'2014_10_12_100000_create_password_resets_table',1),(4,'2019_08_19_000000_create_failed_jobs_table',1),(5,'2019_12_14_000001_create_personal_access_tokens_table',1),(6,'2024_03_14_060020_create_logos_table',1),(7,'2024_03_14_100224_create_banners_table',1),(8,'2024_03_14_103518_create_cards_table',1),(9,'2024_03_14_130052_create_contents_table',1),(10,'2024_03_14_133457_create_services_table',1),(11,'2024_03_14_192905_create_about_texts_table',1),(12,'2024_03_14_194433_create_footers_table',1),(13,'2024_03_14_194906_create_abouts_table',1),(14,'2024_03_14_235416_create_galleries_table',1),(15,'2024_03_15_194141_create_about_images_table',1),(16,'2024_03_24_192012_create_footer_contents_table',2);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_reset_tokens`
--

LOCK TABLES `password_reset_tokens` WRITE;
/*!40000 ALTER TABLE `password_reset_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_reset_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_access_tokens`
--

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `services`
--

DROP TABLE IF EXISTS `services`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `services` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tm_content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ru_content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `en_content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `services`
--

LOCK TABLES `services` WRITE;
/*!40000 ALTER TABLE `services` DISABLE KEYS */;
INSERT INTO `services` VALUES (1,'Jemagat sektorlarynyň we hususy eýeçiligindäki öýlerden durmuş zibillerini, azyk galyndylaryny, öý hapalaryny daşamak;','Утилизация бытовые отходы, пищевые отходы, бытовые отходы государственного сектора и частных домохозяйств;','Disposal of household waste, food waste, household waste from the public sector and private households;','/storage/images/service/e3494wKhFnsryQ0yzoUlx3hBNFQVI6s0HJ6MWf8h.jpg','2024-03-16 05:00:07','2024-04-01 10:54:17'),(2,'Şäheriň ýörite awtoulagy bolmadyk kärhanalardan, guramalaryndan we edaralaryndan zir-zibillerini äkitmek:','Вывоз мусора с предприятий, организаций и учреждений, не имеющих специального городского транспорта:','Removal of waste from enterprises, organizations and institutions that do not have special urban transport:','/storage/images/service/7EqOK623sS2DauzIqnP4OF2g4ZKYfRraAK6gqmkE.jpg','2024-03-16 05:00:07','2024-04-01 10:54:28'),(3,'Aşgabat şäheriniň köçeleriniň suwlanmagy we ýuwulmak;','Полив и мойка улиц города Ашхабада;','Watering and washing the streets of Ashgabat;','/storage/images/service/FXm1ZrUCvK4DzdGIwbxy6NIfc6WH2H8gXqdM3xUo.jpg','2024-03-16 05:00:07','2024-04-01 10:54:37'),(4,'Aşgabat şäheriniň köçeleriniň ýörelýän bölegini mehaniki taýdan arassalamak;','Механическая очистка пешеходной части улиц города Ашхабада;','Mechanical cleaning of the pedestrian part of the streets of Ashgabat;','/storage/images/service/A7O41PXoyEWIck0RC6rwsg5aHWOCKAo8eSOwe1NY.jpg','2024-03-16 05:00:07','2024-04-01 10:54:48'),(5,'Şäheriň çäklerinde eýesiz itleri we pişikleri tutmagy hem-de haýwanlaryň maslyklaryny ýygnamak;','Отлов бездомных собак и кошек и сбор отходов животноводства на территории города;','Catching stray dogs and cats and collecting animal waste in the city;','/storage/images/service/FRdeHyGKgMvmUaMq4HiErbIJ03rjZ8rAAQ6iBK7q.jpg','2024-03-16 05:00:07','2024-04-01 10:54:58'),(6,'Gaty hem-de suwuk görnüşli hapalary daşaýan ýöriteleşdirilen awtoulaglaryň işine gözegçilik etmek;','Контроль за работой специализированного транспорта, перевозящего твердые и жидкие отходы;','Monitoring the operation of specialized transport transporting solid and liquid waste;','/storage/images/service/kUP1Nb3DB1DazAdjraMpT18FuxYRv3j5V9uwWJEz.jpg','2024-03-16 05:00:07','2024-04-01 10:55:10'),(7,'Ýollary we ýanýollary, zir-zibil atylýan gaplary goýulýan meýdançalaryň, çatryklardaky we şaýollaryň, köçeleriň ugrundaky ýerasty pyýada geçelgeleriň, arassaçylygyna gözegçilik etmek;','Контролировать чистоту дорог и магистралей, мест размещения мусорных баков, перекрестков и проспектов, подземных пешеходных переходов вдоль улиц;','Monitor the cleanliness of roads and highways, places where garbage cans are located, intersections and avenues, underground pedestrian crossings along the streets;','/storage/images/service/b5tRT9z133Ks4csUKeyj20fTWV8hihOnlsUX5jCp.jpg','2024-03-16 05:00:07','2024-04-01 10:55:21'),(8,'Gyş döwründe doňaklyk wagty köçelere, ýanýollara, duralgalara, ýollara çäge we duz dökmek hem-de gardan arassalamak;','Посыпка песком и солью улиц, автомагистралей, станций, дорог и расчистка снега в зимний период;','Sprinkling sand and salt on streets, highways, stations, roads and clearing snow in winter;','/storage/images/service/mlZunNAHGWrJW4C2W79EjpsnkY3w1fYOl7pxSvtk.jpg','2024-03-16 05:00:07','2024-04-01 10:55:34'),(9,'Gurluşyk gurnama, abatlaýyş işlerini ýerine ýetirmek we işleriň ýerine ýetirlişiniň barşyna, gözegçilik etmek;','Контроль за ходом строительных, ремонтных работ и выполнением работ;','Monitoring the progress of construction, repair work and execution of work;','/storage/images/service/orgZNRXv01S5wgdKoZU2wFYNf2TjzNiRHbU7qZqN.jpg','2024-03-16 05:00:07','2024-04-01 10:55:45'),(10,'Aşgabat şäherindäki monumentleriň, ýadygärlikleriň arassaçylygyna we abatlygyna seretmek;','Забота о чистоте и уходе за памятниками и монументами в городе Ашхабаде;','Caring for the cleanliness and care of monuments in the city of Ashgabat;','/storage/images/service/8HWmND29vgDKlj4tPEhCHpANFQEv8ifzTN5mnV70.jpg','2024-03-16 05:00:07','2024-04-01 10:56:00'),(11,'Gaty durmuş galyndylary gömülýän meýdançany dizenfeksiýalamak;','Дизенфекция полигона твердо бытовых отходов;','Disinfection of solid waste landfill;','/storage/images/service/qxdrfPVCxPc5r2vbKmmgtl2fKL8eJWps1ZxzXoiG.jpg','2024-03-16 05:00:07','2024-04-01 10:56:13'),(12,'Şäheriň çäginde ýerleşýän, zibillerini daşamaklyga mümkinçiligi bolmadyk edara-kärhanalar bilen şertnama baglaşmak arkaly zibilleri aýyrmak;','Вывоз мусора путем заключения договоров с учреждениями и предприятиями, расположенными в черте города и не имеющими возможности вывозить свой мусор;','Garbage removal by concluding contracts with institutions and enterprises located within the city and unable to remove their own waste;','/storage/images/service/3fOl2xjIxyg9QXTqYzcP16CvnKoGRqJ5SJxtEEGq.jpg','2024-03-16 05:00:07','2024-04-01 10:56:27'),(13,'Köçelerde, ýanýollarynda gaçan ýapraklary aýyrmak;','Убирать листья, падающие на улицах и дорогах;','Remove leaves falling on streets and roads;','/storage/images/service/Ee0TZeLAh0o8Cmgc6PritXyuXRfkSWTfjtzzpjYw.jpg','2024-03-16 05:00:07','2024-04-01 10:56:36'),(14,'Miweli we saýaly baglary,gülleriň dürli reňkdäki görnüşlerini ösdürip ýetişdirmek, şäheri bagy-bossanlyga öwürmek.','Выращивать фруктовые и тенистые сады, где растут цветы разных цветов, превращающие город в сад.','Grow fruit and shady gardens, where flowers of different colors grow, turning the city into a garden.','/storage/images/service/WA3klu1kkiEhSSY31zREdY09Kt2bnbbJ3Oe8TRFJ.jpg','2024-03-16 05:00:07','2024-04-01 10:56:46');
/*!40000 ALTER TABLE `services` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Admin','admin@example.com',NULL,'$2y$12$5ppKiQzLw77K0VHNnDC6s.6id3anLlijp49ZtuwtB3iQPd2aViALK','JZNpHUcFDDbYllCOHTjbqvnizaZuZxFIubLdAivLlPQwCwQSFJ1cxNH1Wu0E','2024-03-16 05:00:07','2024-03-16 05:00:07');
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

-- Dump completed on 2024-04-02  9:56:45
