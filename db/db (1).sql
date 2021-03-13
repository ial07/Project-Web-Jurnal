-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 10, 2020 at 10:19 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ijcmd`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` int(11) NOT NULL,
  `admin_nama` varchar(255) NOT NULL,
  `admin_username` varchar(255) NOT NULL,
  `admin_password` varchar(255) NOT NULL,
  `admin_foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `admin_nama`, `admin_username`, `admin_password`, `admin_foto`) VALUES
(1, 'Admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin.jpg'),
(2, 'Afif Syah Putra, S.H., M.H.', 'afif_syah', '0f71697db5ca568e1efb905965ce4f02', 'IMG-20181108-WA0010.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_announcement`
--

CREATE TABLE `tbl_announcement` (
  `announcement_id` int(11) NOT NULL,
  `announcement_judul` varchar(255) NOT NULL,
  `announcement_isi` text NOT NULL,
  `announcement_gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_announcement`
--

INSERT INTO `tbl_announcement` (`announcement_id`, `announcement_judul`, `announcement_isi`, `announcement_gambar`) VALUES
(11, 'Recruitment and Call for Paper', '<p>The International Journal of Multicultural and Multireligious understanding (IJMMU) invites the submission of original manuscripts on a full range of topics related to social science in all areas. To qualify for consideration, submissions must meet the scholarships standards within the appropriate discipline and be of interest to an interdisciplinary readership. It publishes articles on recent multireligious and multicultural studies ,anthropology, sociology, politics, culture, history, philosophy, economics, education, management, arts, laws, geography, linguistics, psychology, heritage and tourism, corporate social responsibility (CSR), NGO studies, ethnic relations, political economic, development studies, immigration and migrant workers studies, sustainability studies, peace studies and Islamic studies. Some of the articles also take an interdisciplinary approach.<br />\r\nWe also welcome applications (or nominations) for editorial board members, and editors and reviewers. Responsibilities of editorial board members include the identification and recruitment of other editorial members, reviewers, and authors. Privileges of being an editorial team member include a waiver of submission and publishing fees. Contributions and a letter of interest can be sent to us through emails.</p>\r\n\r\n<p>Thank you very much for paying attention to us.<br />\r\nWe look forward to cooperating with you soon!</p>\r\n', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_archive`
--

CREATE TABLE `tbl_archive` (
  `archive_id` int(11) NOT NULL,
  `year` year(4) NOT NULL,
  `month` varchar(255) NOT NULL,
  `title` text NOT NULL,
  `des` varchar(255) NOT NULL,
  `pict` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_archive`
--

INSERT INTO `tbl_archive` (`archive_id`, `year`, `month`, `title`, `des`, `pict`) VALUES
(7, 2020, 'Oct-2020', 'Volume 1 No. 1', 'International Journal Concept of Multi Dicipline (IJCMD) Vol .1 No. 1, May 2020', 'VOL. 1 NO. 1 MAY 2020.png'),
(8, 2020, 'Oct-2020', 'Volume 1 No. 2', 'International Journal Concept of Multi Dicipline (IJCMD) Vol .1 No. 2, October 2020', 'VOL. 1 NO. 2 OCTOBER 2020.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_article`
--

CREATE TABLE `tbl_article` (
  `article_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `archive_id` int(11) NOT NULL,
  `sub_id` int(11) NOT NULL,
  `hal` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_article`
--

INSERT INTO `tbl_article` (`article_id`, `title`, `file`, `archive_id`, `sub_id`, `hal`) VALUES
(8, 'Dispute Settlement Compensation for Land Acquisition of the Padang to Sicincin Toll Road', 'jurnal anita fitri.id.en.pdf', 7, 1, '1-20'),
(9, 'Dispute Settlement Compensation for Land Acquisition of the Padang to Sicincin Toll Road', 'jurnal anita fitri.id.en.pdf', 8, 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_author`
--

CREATE TABLE `tbl_author` (
  `author_id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `orcidid` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `affiliation` text NOT NULL,
  `country` varchar(255) NOT NULL,
  `bio_statement` text NOT NULL,
  `google` varchar(255) NOT NULL,
  `sub_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_author`
--

INSERT INTO `tbl_author` (`author_id`, `first_name`, `middle_name`, `last_name`, `email`, `orcidid`, `url`, `affiliation`, `country`, `bio_statement`, `google`, `sub_id`) VALUES
(0, 'tono', 'tono', 'tono', 'upi@yptk.com', 'http://orcid.org/0000-0002-1825-0097', 'http://orcid.org', 'upi yptk padang', 'indonesia', 'department', '', 0),
(1, 'Anisa ', '', 'Fitri', 'Afive49@gmail.com', 'https://orcid.org/0000-0003-1541-5244', 'http://orcid.org', 'Andalas Univeresity', 'Indonesia', 'department', '150663125', 1),
(2, 'Meydil', 'Rizky', 'Pratama', 'Afive49@gmail.com', 'http://orcid.org/0000-0002-1825-0097', 'http://orcid.org', 'Andalas University', 'Indonesia', 'Student', '150663125', 2),
(3, 'Meydil', 'Rizky', 'Pratama', 'afive49@gmail.com', 'https://orcid.org/0000-0003-1541-5244', 'http://orcid.org', 'Andalas Univesity', 'indonesia', 'department', '150663125', 3),
(4, 'tono', 'pergi', 'kepasar', 'upi@yptk.com', 'http://orcid.org/0000-0002-1825-0097', 'http://orcid.org', 'upi yptk padang', 'indonesia', 'department', '', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_file_sup`
--

CREATE TABLE `tbl_file_sup` (
  `id_file_sup` int(11) NOT NULL,
  `register_id` int(11) NOT NULL,
  `original_name` varchar(255) NOT NULL,
  `file_size` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_file_sup`
--

INSERT INTO `tbl_file_sup` (`id_file_sup`, `register_id`, `original_name`, `file_size`, `date`, `type`) VALUES
(1, 2, 'jurnal anita fitri.id.en.pdf', '465579 b', '2020-10-31', 'submission'),
(2, 2, 'JURNAL MEYDIL.id.en.pdf', '625792 b', '2020-10-31', 'submission'),
(3, 2, 'JURNAL MEYDIL.id.en.pdf', '625792 b', '2020-10-31', 'submission'),
(5, 2, 'JURNAL MEYDIL.id.en.pdf', '625792 b', '2020-11-02', 'submission'),
(6, 1, '5555-15810-1-PB.pdf', '286049 b', '2020-11-03', 'submission');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_home`
--

CREATE TABLE `tbl_home` (
  `home_id` int(11) NOT NULL,
  `home_judul` varchar(255) NOT NULL,
  `home_isi` text NOT NULL,
  `home_gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_home`
--

INSERT INTO `tbl_home` (`home_id`, `home_judul`, `home_isi`, `home_gambar`) VALUES
(4, 'International Journal Concept Of Multidicipline', '<p>International&nbsp;Journal&nbsp;Concept&nbsp;Of&nbsp;Multi Dicipline<strong> (IJCMD) ISSN 2634-2563,&nbsp;</strong>is an international, double-blind peer-reviewed, open-access journal covering the study of topics in the social &amp; Humanities aims to provide a forum for high quality research related to social sciences and humanities research.</p>\r\n\r\n<p>The main Areas relevant to the scope of the journal is&nbsp;<strong>social science studies</strong>&nbsp;and also the journal focuses on the following topics:</p>\r\n\r\n<ul>\r\n	<li><strong>&nbsp;Sociology</strong></li>\r\n	<li><strong>&nbsp;Psychology</strong></li>\r\n	<li><strong>&nbsp;Politics</strong></li>\r\n	<li><strong>&nbsp;Management</strong></li>\r\n	<li><strong>&nbsp;Economics</strong></li>\r\n	<li><strong>&nbsp;Law</strong></li>\r\n	<li><strong>&nbsp;</strong><strong>History</strong></li>\r\n	<li><strong>&nbsp;Culture</strong></li>\r\n	<li><strong>&nbsp;Business Studies</strong></li>\r\n	<li><strong>&nbsp;Linguistics</strong></li>\r\n	<li><strong>&nbsp;Ethnic Relations</strong></li>\r\n	<li><strong>&nbsp;Immigration and Migrant Workers Studies</strong></li>\r\n	<li><strong>&nbsp;Multicultural studies</strong></li>\r\n	<li><strong>&nbsp;Sports Science</strong></li>\r\n	<li><strong>&nbsp;Public Relations</strong></li>\r\n	<li><strong>&nbsp;</strong><strong>Educational Research</strong>&nbsp;</li>\r\n	<li><strong>&nbsp;Communication</strong></li>\r\n	<li><strong>&nbsp;Peace Studies</strong></li>\r\n	<li><strong>&nbsp;Religious Studies&nbsp; &nbsp;</strong>&nbsp;</li>\r\n</ul>\r\n\r\n<p>It provides an academic platform for professionals and researchers to contribute innovative work in the field. The journal carries original and full-length articles that reflect the latest research and developments in both theoretical and practical aspects of society and human behavior.</p>\r\n\r\n<p>The journal is published in both print and online versions. The online version is free access and download.</p>\r\n\r\n<p>IJMMU accepts submission of mainly four types: Original Articles, Short Communications, Reviews, and Proposals for special issues.</p>\r\n\r\n<table>\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p><strong>Policy of Print Journals</strong></p>\r\n			</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>As you are aware, printing and delivery of journals results in causing a significant amount of detrimental impact to the environment. Being a responsible publisher and being considerate for the environment, we have decided to change the policy of offering print journals for authors.</p>\r\n\r\n			<p>When authors really need print copies, they are requested&nbsp;to order printed copies. Once approved, we will arrange print and delivery, for a maximum of four copies per article.</p>\r\n\r\n			<p>Additionally, we are happy to provide journal&rsquo;s eBook in PDF format for authors. The eBook is the same as the printed version, but it is completely environmentally friendly. Please contact the journal editor to request eBook of the journal&rsquo;s issues.</p>\r\n\r\n			<p>We are committed to saving the planet for our future generations.</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', 'VOL. 1 NO. 1 MAY 2020.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_index`
--

CREATE TABLE `tbl_index` (
  `index_id` int(255) NOT NULL,
  `index_link` varchar(255) NOT NULL,
  `index_foto` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_index`
--

INSERT INTO `tbl_index` (`index_id`, `index_link`, `index_foto`) VALUES
(1, 'https://scholar.google.com/scholar?q=site%3Aijmmu.com', 'schol.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_register`
--

CREATE TABLE `tbl_register` (
  `register_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `register_password` varchar(255) NOT NULL,
  `register_validation` varchar(255) NOT NULL,
  `salutation` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `initials` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `affiliation` text NOT NULL,
  `register_signature` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `orcidid` varchar(255) NOT NULL,
  `register_url` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `fax` varchar(255) NOT NULL,
  `mailing_address` text NOT NULL,
  `country` varchar(255) NOT NULL,
  `bio_statement` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_register`
--

INSERT INTO `tbl_register` (`register_id`, `username`, `register_password`, `register_validation`, `salutation`, `first_name`, `middle_name`, `last_name`, `initials`, `gender`, `affiliation`, `register_signature`, `email`, `orcidid`, `register_url`, `phone`, `fax`, `mailing_address`, `country`, `bio_statement`) VALUES
(1, 'tono', '14d2d4119982cd6c68a566e523cb16ae', 'KzxdWc', 'dopem', 'tono', 'pergi', 'kepasar', 'tono', 'Male', 'upi yptk padang', '', 'upi@yptk.com', 'http://orcid.org/0000-0002-1825-0097', 'http://orcid.org', '083876374', 'you', 'padang', 'indonesia', 'department'),
(2, 'afif_syah', '5c91b3f4793afb618966357110a84271', 'uXjRdN', 'happy salutation', 'Afif', 'Syah', 'Putra', 'ASP', 'Male', 'Andalas University', 'be a Good People', 'afive49@gmail.com', 'https://orcid.org/0000-0003-1541-5244', 'https://orcid.org/', '082311119194', '0751483741', 'Lubuk Buaya', 'Indonesia', 'Magister of Law '),
(3, 'afif_syah', '5c91b3f4793afb618966357110a84271', 'NQPxOt', 'happy salutation', 'Afif', 'Syah', 'Putra', 'ASP', 'Male', 'Andalas University', 'Be a Good People', 'afive49@gmail.com', 'https://orcid.org/0000-0003-1541-5244', 'https://orcid.org/', '+621258402640', '0751483741', 'Lubuk Buaya', 'Indonesia', 'Magister of Law');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_submission`
--

CREATE TABLE `tbl_submission` (
  `sub_id` int(11) NOT NULL,
  `comment` text NOT NULL,
  `register_id` int(111) NOT NULL,
  `title` text NOT NULL,
  `abstract` text NOT NULL,
  `academic_discipline` varchar(255) NOT NULL,
  `keyword` text NOT NULL,
  `agencies` text NOT NULL,
  `reference` text NOT NULL,
  `file_sup` int(11) NOT NULL COMMENT 'id_file_sup dengan type submission',
  `status` enum('Awaiting Assignment','IN REVIEW','IN EDITING') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_submission`
--

INSERT INTO `tbl_submission` (`sub_id`, `comment`, `register_id`, `title`, `abstract`, `academic_discipline`, `keyword`, `agencies`, `reference`, `file_sup`, `status`) VALUES
(1, 'OK', 2, 'Dispute Settlement Compensation for Land Acquisition of the Padang to Sicincin Toll Road', '<p>Infrastructure development aimed at the public interest can move the wheels of the people&#39;s economy. This development requires land as one of the supporting facilities. The need for land for development in terms of public interest can be met by means of land acquisition. Land acquisition for development for public use has been regulated through Law Number 2 of 2012. However, in practice there are always problems in the process of implementing land acquisition. Land acquisition problems generally cannot be separated from the problem of compensation. This is also a problem in the construction of the Trans Sumatra Toll Road, especially in the construction of the Padang-Pekanbaru Session I Padang-Sic Cincin Toll Road which resulted in development activities being hampered for a long time. The issue of compensation, according to the community, is because the price offered by the Public Appraisal Team through the Land Procurement Implementer is considered too low compared to the Fair Compensation Value desired by the community holding land rights. So that the community holding land rights filed an objection to the value of compensation to the Pariaman District Court. This journal examines the process of implementing land acquisition in the construction of the Padang-Sic Cincin Toll Road, regarding disputes in land acquisition for the Padang-Sic Cincin Toll Road and about dispute resolution in land acquisition for the Padang-Sic Cincin Toll Road. The legal research method used is sociological juridical by collecting primary data in the field. However, the result of the decision of the panel of judges rejected the objection of the community holding land rights on the value of the compensation and the value of the compensation still refers to the value of compensation that has been determined by the Land Acquisition Administrator. The legal research method used is sociological juridical by collecting primary data in the field. However, the result of the decision of the panel of judges rejected the objection of the community holding the land rights on the value of the compensation and the value of the compensation still refers to the value of compensation that has been determined by the Land Acquisition Administrator. The legal research method used is sociological juridical by collecting primary data in the field. However, the result of the decision of the panel of judges rejected the objection of the community holding land rights on the value of the compensation and the value of the compensation still refers to the value of compensation that has been determined by the Land Acquisition Administrator.</p>\r\n', '$academic', 'Dispute Resolution, Compensation, Land Acquisition, Padang-Sic Cincin Toll Road.', '$agencies', '<p>1. Book<br />\r\nAlfan Miko, Nagari Government and Land of Ulayat, Andalas University Press, Padang, 2006. Arie Sukanti and Markus Gunawan, Government Authority in the Land Sector, PT Raja Grafindo Persada, Jakarta, 2008. H. Idham, Urban Land Consolidation in the Perspective of Regional Autonomy, Prints I, 2004, Bandung Alumni. Maria SWSumardjono, Land policy between regulation and implementation, Kompas, Jakarta, 2007. Maria SW Sumardjono, Land in the Perspective of Economic, Social and Cultural Rights, KompasMedia Nusantara, Jakarta, 2008. Academic Paper on the Draft Law on Land Acquisition for Development, 2010, Jakarta. Soerjono Soekanto, Factors Affecting Law Enforcement, Raja Grafindo Persada, Jakarta, 2011. International Journal Concept of Multi Dicipline (IJCMD) Volume 1 No. 2, October 2020 Dispute Settlement Compensation for Land Acquisition of the Padang to Sicincin Toll Road 20 Sri Warjiyati, Understanding the Fundamentals of Law: Basic Concepts of Law, Prenada Media, Jakarta, 2018. W. Yudho and H. Tjandrasari, Law Effectiveness in Society, Law and Development Magazine, UIPress, 1987, Jakarta.<br />\r\n2. Journal<br />\r\nTitin Fatimah and Hengki Andora, Ulayat Land Dispute Resolution Patterns in West Sumatra (Disputes between Community and Investors), Journal of Law Science, Faculty of Law, Andalas University, Padang. Kurnia Warman and Rachmadi, Still &quot;Far Bake from Fire&quot;: A Study on Strengthening Rights in the Era of Decentralization in West Sumatra, Collaboration between the Kemala Jakarta Foundation and the World Resources Institute (WRI) with Qbar.<br />\r\n3. Interview<br />\r\nInterview with Mr. Damanhuri, Wali Nagari Kasang, Batang Anai District, Padang Pariaman Regency, on March 16, 2020 at 10:00 WIB. Interview with Mr. Damanhuri, Wali Nagari Kasang, Batang Anai District, Padang Pariaman Regency, March 16, 2020 at 10:00 WIB. Interview with Allex Suvrianto, SH., Land Acquisition Section of the National Land Agency (BPN) Padang Pariaman Regency, March 17, 2020 at 10.00 WIB.<br />\r\n4. Website<br />\r\nWebsite Alinea.id: Agrarian Conflict Due to Infrastructure Developmenthttp://www.alinea.id (last visited on 6 January 2020). Bisnis.com Website: Padang-Pekanbaru Toll Road is Obstructed by Land Acquisition, http://www.bisnis.com visited on 27 December 2019. Bisnis.com Website: Padang-Sic Cincin Toll Road Project: Residents Want Clarity About Prices, http://www.bisnis.com, visited on 27 December 2019. CNBC Indonesia Website; A Line of Concrete Evidence for Infrastructure Development in the Jokowi Era!http://www.cnbcindonesia.com (last visited was on January 6, 2020). Get to know Free and Prior Informed Consent (FPIC) , https://perkumpulwallacea.wordpress.com/2014/07/23/mengenal-free-andpriorinformedconsent-fpic /, last visited on 25 June 2020.<br />\r\n5. News<br />\r\n&quot;Land Acquisition Has Already 97 Percent&quot; Singgalang, 17 December 2019.</p>\r\n', 1, 'IN REVIEW'),
(2, 'Adipisicing magnam i', 1, 'Dispute Settlement Compensation for Land Acquisition of the Padang to Sicincin Toll Road', '<p>Infrastructure development aimed at the public interest can move the wheels of the people&#39;s economy. This development requires land as one of the supporting facilities. The need for land for development in terms of public interest can be met by means of land acquisition. Land acquisition for development for public use has been regulated through Law Number 2 of 2012. However, in practice there are always problems in the process of implementing land acquisition. Land acquisition problems generally cannot be separated from the problem of compensation. This is also a problem in the construction of the Trans Sumatra Toll Road, especially in the construction of the Padang-Pekanbaru Session I Padang-Sic Cincin Toll Road which resulted in development activities being hampered for a long time. The issue of compensation, according to the community, is because the price offered by the Public Appraisal Team through the Land Procurement Implementer is considered too low compared to the Fair Compensation Value desired by the community holding land rights. So that the community holding land rights filed an objection to the value of compensation to the Pariaman District Court. This journal examines the process of implementing land acquisition in the construction of the Padang-Sic Cincin Toll Road, regarding disputes in land acquisition for the Padang-Sic Cincin Toll Road and about dispute resolution in land acquisition for the Padang-Sic Cincin Toll Road. The legal research method used is sociological juridical by collecting primary data in the field. However, the result of the decision of the panel of judges rejected the objection of the community holding land rights on the value of the compensation and the value of the compensation still refers to the value of compensation that has been determined by the Land Acquisition Administrator. The legal research method used is sociological juridical by collecting primary data in the field. However, the result of the decision of the panel of judges rejected the objection of the community holding the land rights on the value of the compensation and the value of the compensation still refers to the value of compensation that has been determined by the Land Acquisition Administrator. The legal research method used is sociological juridical by collecting primary data in the field. However, the result of the decision of the panel of judges rejected the objection of the community holding land rights on the value of the compensation and the value of the compensation still refers to the value of compensation that has been determined by the Land Acquisition Administrator.</p>', 'academic', 'Student Development; HOTS; Critical Thinking', 'upi', '<p>1. Book Alfan Miko, Nagari Government and Land of Ulayat, Andalas University Press, Padang, 2006. Arie Sukanti and Markus Gunawan, Government Authority in the Land Sector, PT Raja Grafindo Persada, Jakarta, 2008. H. Idham, Urban Land Consolidation in the Perspective of Regional Autonomy, Prints I, 2004, Bandung Alumni. International Journal Concept of Multi Dicipline (IJCMD) Volume 1 No. 2, October 2020 Dispute Settlement Compensation for Land Acquisition of the Padang to Sicincin Toll Road 20 Maria SWSumardjono, Land policy between regulation and implementation, Kompas, Jakarta, 2007. Maria SW Sumardjono, Land in the Perspective of Economic, Social and Cultural Rights, KompasMedia Nusantara, Jakarta, 2008. Academic Paper on the Draft Law on Land Acquisition for Development, 2010, Jakarta. Soerjono Soekanto, Factors Affecting Law Enforcement, Raja Grafindo Persada, Jakarta, 2011. Sri Warjiyati, Understanding the Fundamentals of Law: Basic Concepts of Law, Prenada Media, Jakarta, 2018. W. Yudho and H. Tjandrasari, Law Effectiveness in Society, Law and Development Magazine, UIPress, 1987, Jakarta. 2. Journal Titin Fatimah and Hengki Andora, Ulayat Land Dispute Resolution Patterns in West Sumatra (Disputes between Community and Investors), Journal of Law Science, Faculty of Law, Andalas University, Padang. Kurnia Warman and Rachmadi, Still &quot;Far Bake from Fire&quot;: A Study on Strengthening Rights in the Era of Decentralization in West Sumatra, Collaboration between the Kemala Jakarta Foundation and the World Resources Institute (WRI) with Qbar. 3. Interview Interview with Mr. Damanhuri, Wali Nagari Kasang, Batang Anai District, Padang Pariaman Regency, on March 16, 2020 at 10:00 WIB. Interview with Mr. Damanhuri, Wali Nagari Kasang, Batang Anai District, Padang Pariaman Regency, March 16, 2020 at 10:00 WIB. Interview with Allex Suvrianto, SH., Land Acquisition Section of the National Land Agency (BPN) Padang Pariaman Regency, March 17, 2020 at 10.00 WIB. 4. Website Website Alinea.id: Agrarian Conflict Due to Infrastructure Developmenthttp://www.alinea.id (last visited on 6 January 2020). Bisnis.com Website: Padang-Pekanbaru Toll Road is Obstructed by Land Acquisition, http://www.bisnis.com visited on 27 December 2019. Bisnis.com Website: Padang-Sic Cincin Toll Road Project: Residents Want Clarity About Prices, http://www.bisnis.com, visited on 27 December 2019. CNBC Indonesia Website; A Line of Concrete Evidence for Infrastructure Development in the Jokowi Era!http://www.cnbcindonesia.com (last visited was on January 6, 2020). Get to know Free and Prior Informed Consent (FPIC) , https://perkumpulwallacea.wordpress.com/2014/07/23/mengenal-free-andpriorinformedconsent-fpic /, last visited on 25 June 2020. 5. News &quot;Land Acquisition Has Already 97 Percent&quot; Singgalang, 17 December 2019.</p>', 6, 'Awaiting Assignment');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sup`
--

CREATE TABLE `tbl_sup` (
  `sup_id` int(11) NOT NULL,
  `register_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `creator` varchar(255) NOT NULL,
  `keyword` varchar(255) NOT NULL,
  `type1` varchar(255) NOT NULL,
  `publisher` varchar(255) NOT NULL,
  `brief` text NOT NULL,
  `contributor` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `source` varchar(255) NOT NULL,
  `id_file_sup` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_sup`
--

INSERT INTO `tbl_sup` (`sup_id`, `register_id`, `title`, `creator`, `keyword`, `type1`, `publisher`, `brief`, `contributor`, `date`, `source`, `id_file_sup`) VALUES
(1, 2, 'Dispute Settlement Compensation for Land Acquisition of the Padang to Sicincin Toll Road', 'Anisa Fitri', 'Keywords: Dispute Resolution, Compensation, Land Acquisition, Padang-Sic Cincin Toll Road.', 'Empirical Research', 'Anisa Fitri', 'Data Analisys', 'Kurnia Warman; Syofiarti; Andalas University', '2020-10-31', 'public works and public housing services', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tbl_announcement`
--
ALTER TABLE `tbl_announcement`
  ADD PRIMARY KEY (`announcement_id`);

--
-- Indexes for table `tbl_archive`
--
ALTER TABLE `tbl_archive`
  ADD PRIMARY KEY (`archive_id`);

--
-- Indexes for table `tbl_article`
--
ALTER TABLE `tbl_article`
  ADD PRIMARY KEY (`article_id`);

--
-- Indexes for table `tbl_author`
--
ALTER TABLE `tbl_author`
  ADD PRIMARY KEY (`author_id`);

--
-- Indexes for table `tbl_file_sup`
--
ALTER TABLE `tbl_file_sup`
  ADD PRIMARY KEY (`id_file_sup`);

--
-- Indexes for table `tbl_submission`
--
ALTER TABLE `tbl_submission`
  ADD PRIMARY KEY (`sub_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_archive`
--
ALTER TABLE `tbl_archive`
  MODIFY `archive_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tbl_file_sup`
--
ALTER TABLE `tbl_file_sup`
  MODIFY `id_file_sup` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbl_submission`
--
ALTER TABLE `tbl_submission`
  MODIFY `sub_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
