-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2023 at 01:38 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fanconnect`
--

-- --------------------------------------------------------

--
-- Table structure for table `albums`
--

CREATE TABLE `albums` (
  `id_album` char(10) NOT NULL DEFAULT substr(replace(convert(uuid() using utf8mb4),'-',''),1,10),
  `album_name` varchar(200) NOT NULL,
  `release_date` date NOT NULL DEFAULT cast(current_timestamp() as date),
  `album_cover` varchar(500) NOT NULL DEFAULT 'default.png',
  `id_group` char(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `albums`
--

INSERT INTO `albums` (`id_album`, `album_name`, `release_date`, `album_cover`, `id_group`) VALUES
('0264808179', 'What Is Love?', '2018-04-09', 'https://kpopping.com/documents/ee/2/250/cover_TWICE-WhatisLove-Cover-300x300.webp?v=feeeb', 'kuzwman8'),
('0958af3879', 'Deceivers', '2022-08-12', 'https://i.scdn.co/image/ab67616d00001e02d102f713b6404110023d15e6', 'ork1ksca'),
('0e9e458079', 'Day by Day', '2012-07-03', 'https://kpopping.com/documents/17/4/250/cover_T-ARA_Day_by_Day.webp?v=feeeb', 'q0jfv6fg'),
('18e2828079', 'The Most Beautiful Moment in Life: Young Forever', '2015-05-02', 'https://kpopping.com/documents/5f/4/250/cover_The_Most_Beautiful_Moment_In_Life_Young_Forever.webp?v=feeeb', '2woi7puv'),
('1e04109779', 'FANCY YOU', '2019-04-22', 'https://kpopping.com/documents/34/3/250/cover_20248246.webp?v=feeeb', 'kuzwman8'),
('22fd54db79', 'Hoot', '2010-10-27', 'https://kpopping.com/documents/3c/2/250/Hoot-2010-10-27-cover.webp?v=feeeb', 'cfhhrvjk'),
('23ea206379', 'Time for us', '2019-01-14', 'https://kpopping.com/documents/0d/0/250/cover_10242169_500.webp?v=feeeb', 't8er65pf'),
('2961306e79', 'RESONANCE', '2020-12-05', 'https://kpopping.com/documents/b7/1/250/cover_NCT_Resonance_album_cover.webp?v=feeeb', 'v7pht6kv'),
('29b3800f79', ' Mr. Simple', '2011-08-03', 'https://kpopping.com/documents/18/5/250/cover_Superjunior_mrsimple.webp?v=73a73', 'aa2a7dc1'),
('2a1ee10f78', 'Raid Of Dream', '2019-09-18', 'https://kpopping.com/documents/d2/3/250/cover_post_1247134172716802667.webp?v=feeeb', '4dhl16q8'),
('34ad21ed79', 'Merry & Happy', '2017-12-11', 'https://kpopping.com/documents/97/2/250/cover_313x0w_1.webp?v=feeeb', 'kuzwman8'),
('34eac23a78', 'Over The Sky', '2019-01-16', 'https://kpopping.com/documents/88/2/250/cover_Dreamcatcher_Over_the_Sky.webp?v=feeeb', '4dhl16q8'),
('3e54619079', 'Clé 1 : MIROH', '2019-03-25', 'https://kpopping.com/documents/50/2/250/cover_stray.webp?v=feeeb', '13bf6ae0'),
('3e96d41c79', 'Time for the moon night', '2018-04-30', 'https://kpopping.com/documents/9b/5/250/cover_maxresdefault_2.webp?v=aac37', 't8er65pf'),
('3sxg1ra11b', 'Eyes Wide Open', '2020-10-26', 'https://upload.wikimedia.org/wikipedia/en/9/90/Twice_-_Eyes_Wide_Open.png', 'kuzwman8'),
('44b9937579', 'SORRY, SORRY', '2009-03-12', 'https://kpopping.com/documents/57/5/250/cover_unnamed_11_1(6).webp?v=feeeb', 'aa2a7dc1'),
('4baa03ff79', 'One More Time', '2018-10-01', 'https://kpopping.com/documents/82/0/250/cover_Super_Junior_One_More_Time_cover.webp?v=feeeb', 'aa2a7dc1'),
('52f0e55278', 'Nightmare Escape the ERA', '2023-11-01', 'https://kpopping.com/documents/09/5/250/cover_300x0w_13(2).webp?v=feeeb', '4dhl16q8'),
('5ba8f0cd79', 'LOL', '2016-07-11', 'https://kpopping.com/documents/1a/0/250/cover_GFriend_LOL_album.webp?v=feeeb', 't8er65pf'),
('5bd729e279', 'Again', '2013-10-10', 'https://kpopping.com/documents/d3/4/250/cover_T-ARA_Again.webp?v=feeeb', 'q0jfv6fg'),
('5chrve1hw7', 'BLOOM*IZ ', '2020-02-17', 'https://kpopping.com/documents/8b/4/250/cover_300x0w(70).webp', 'h3007jhw'),
('656ccee579', 'LOVE SHOT', '2018-12-13', 'https://kpopping.com/documents/af/5/250/cover_300x0w(20).webp?v=feeeb', 'i7fj1pqj'),
('6b99e81078', ' Apocalypse : Follow us', '2023-11-01', 'https://kpopping.com/documents/2f/5/250/Apocalypse-Follow-us-2022-10-11-cover.webp?v=feeeb', '4dhl16q8'),
('77854e3479', 'Brother Act.', '2017-10-05', 'https://kpopping.com/documents/b3/0/250/cover_btob___brother_act__2nd_full_album__by_bornthemelody-dci4nzt.webp?v=feeeb', 'kmwpq1g8'),
('8b79109678', 'Dystopia : Lose Myself', '2023-11-01', 'https://kpopping.com/documents/89/4/250/cover_ab67616d00001e02f425b2269d04150547d76377(1).webp?v=feeeb', '4dhl16q8'),
('938f6aa888', 'Black Eyes', '2011-11-11', 'https://kpopping.com/documents/c0/1/400/cover_T-ARA_Black_Eyes.webp?v=e2173', 'q0jfv6fg'),
('9ff60ff279', 'EXODUS ', '2015-03-30', 'https://kpopping.com/documents/24/1/250/EXODUS-2015-3-30-cover.webp?v=feeeb', 'i7fj1pqj'),
('a5026f2079', 'Into the New World', '2007-08-03', 'https://kpopping.com/documents/5d/0/250/Into-the-New-World-2007-8-3-cover.webp?v=feeeb', 'cfhhrvjk'),
('af25d49179', 'Oneiric Diary', '2020-06-15', 'https://kpopping.com/documents/bd/1/250/cover_500x500bb_-_2020-06-15T150652017.webp?v=feeeb', 'h3007jhw'),
('b6089dd579', 'Love Yourself 轉 \'Tear\'', '2018-05-18', 'https://kpopping.com/documents/56/0/250/cover_220px-Love_Yourself_Tear_Cover.webp?v=feeeb', '2woi7puv'),
('b74843a679', 'IN LIFE', '2020-09-14', 'https://kpopping.com/documents/77/0/250/cover_EhuMUQJVoAIPjzn.webp?v=feeeb', '13bf6ae0'),
('baf6b33f79', 'As If It\'s Your Last', '2017-06-22', 'https://kpopping.com/documents/ed/4/250/cover_268x0w.webp?v=feeeb', 'f36uo73q'),
('bdaf7bdf79', 'LOOK', '2020-04-13', 'https://kpopping.com/documents/5b/0/250/cover_Webpnet-resizeimage_116.webp?v=feeeb', '2zek0vjh'),
('c329d20b79', 'REPLAY', '2018-04-12', 'https://kpopping.com/documents/87/2/250/cover_super_junior___replay___the_8th_repackage_album_by_criscrazy-dca014g.webp?v=feeeb', 'aa2a7dc1'),
('cae029b479', 'War Eternal', '2014-06-04', 'https://i.scdn.co/image/ab67616d00001e02ffe6955b65d9425f0cce4472', 'ork1ksca'),
('d37b1aaa79', 'First Love', '2014-02-21', 'https://kpopping.com/documents/a9/3/250/cover_T-ara_-_First_Love.webp?v=feeeb', 'q0jfv6fg'),
('d57fbb4979', 'Mr Taxi / Devil Run Devil', '2011-04-03', 'https://kpopping.com/documents/b3/4/250/Mr-Taxi-Run-Devil-Run-2011-4-23-cover.webp?v=feeeb', 'cfhhrvjk'),
('dbc5b71379', 'SQUARE ONE', '2016-08-08', 'https://kpopping.com/documents/91/3/250/cover_300x0w(3).webp?v=feeeb', 'f36uo73q'),
('e250426d79', 'Prequel', '2017-07-27', 'https://kpopping.com/documents/c8/3/250/cover_300x0w_15(1).webp?v=feeeb', '4dhl16q8'),
('e2f1863a89', 'Fiction and Fact ', '2011-05-17', 'https://kpopping.com/documents/b1/4/400/Fiction-and-Fact-2011-5-17-cover.webp?v=e2173', 'e9dfa745'),
('e6254dc979', '回:Song of the Sirens', '2020-07-13', 'https://kpopping.com/documents/3f/3/250/cover_500x500bb-60_1(6).webp?v=feeeb', 't8er65pf'),
('eceaa35479', 'SQUARE TWO', '2016-11-01', 'https://kpopping.com/documents/f9/4/250/cover_300x0w_1(3).webp?v=feeeb', 'f36uo73q'),
('ed0d909679', 'Lion Heart', '2015-08-19', 'https://kpopping.com/documents/56/5/250/Lion-Heart-2015-8-19-cover.webp?v=feeeb', 'cfhhrvjk'),
('f0f5dc2a79', 'One & Six', '2018-07-02', 'https://kpopping.com/documents/66/4/250/cover_600x600bf_4(1).webp?v=feeeb', '2zek0vjh'),
('f2e243bb79', 'Will to Power', '2017-09-08', 'https://i.scdn.co/image/ab67616d00001e02f22accdfcf008be55b063aae', 'ork1ksca'),
('f6d8fc2079', 'BONAMANA', '2010-05-13', 'https://kpopping.com/documents/7f/4/250/cover_unnamed_6_1(10).webp?v=feeeb', 'aa2a7dc1'),
('f83a8b5279', 'Remember', '2016-11-09', 'https://kpopping.com/documents/d5/1/250/cover_T-ARA_Remember.webp?v=feeeb', 'q0jfv6fg'),
('fgtrwlrr64', 'Dystopia: The Road to Utopia', '2021-01-26', 'https://kpopping.com/documents/34/2/250/cover_t3ll32b19nd61.webp', '4dhl16q8'),
('gl7rmjpbtp', 'Apocalypse : From Us', '2023-05-24', 'https://kpopping.com/documents/a4/1/250/Apocalypse-From-Us-2023-5-24-cover.webp', '4dhl16q8'),
('kvvkq1ld1j', 'SNOWFLAKE', '2016-01-25', 'https://kpopping.com/documents/57/4/250/cover_Gfriend_Snowflake_cover.webp', 't8er65pf'),
('l0stepcjdb', 'One-reeler / Act IV', '2020-12-07', 'https://kpopping.com/documents/f6/4/250/cover_999999999x0w-999(1).webp', 'h3007jhw'),
('n8vtd7eyui', '우리 사랑했잖아', '2011-12-23', 'https://kpopping.com/documents/ed/4/250/cover_Davichi_T-ARA_We_Were_in_Love.webp', 'q0jfv6fg'),
('uervl6iy4a', ' 回:Walpurgis Night', '2020-11-09', 'https://kpopping.com/documents/f0/4/250/cover_unnamed(2).webp?v=feeeb', 't8er65pf');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `slug_country` varchar(5) NOT NULL,
  `country_name` varchar(60) NOT NULL,
  `flag` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`slug_country`, `country_name`, `flag`) VALUES
('au', 'Australia', 'au.png'),
('cn', 'China', 'cn.png'),
('id', 'Indonesia', 'id.png'),
('jp', 'Japan', 'jp.png'),
('kr', 'South Korea', 'kr.png'),
('th', 'Thailand', 'th.png'),
('us', 'United States', 'us.png'),
('vn', 'Vietnam', 'vn.png');

-- --------------------------------------------------------

--
-- Table structure for table `favorite_groups_d`
--

CREATE TABLE `favorite_groups_d` (
  `id_favorite` char(10) NOT NULL,
  `id_group` char(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `favorite_groups_d`
--

INSERT INTO `favorite_groups_d` (`id_favorite`, `id_group`) VALUES
('ecdd116579', '4dhl16q8'),
('ecdd116579', 'ork1ksca'),
('ecdd116579', 'kuzwman8'),
('ecdd116579', 't8er65pf'),
('3770022584', 'a291a309'),
('ecdd116579', '2zek0vjh'),
('ecdd116579', 'aa2a7dc1'),
('b285a9a084', 'i7fj1pqj'),
('edce06be85', 'f36uo73q'),
('b285a9a084', 'ork1ksca');

-- --------------------------------------------------------

--
-- Table structure for table `favorite_groups_h`
--

CREATE TABLE `favorite_groups_h` (
  `id_favorite` char(10) NOT NULL DEFAULT substr(replace(convert(uuid() using utf8mb4),'-',''),1,10),
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `favorite_groups_h`
--

INSERT INTO `favorite_groups_h` (`id_favorite`, `email`) VALUES
('edce06be85', 'imjisooimok@email.com'),
('3770022584', 'jakasembung@gmail.com'),
('ecdd116579', 'raniafaharani@gmail.com'),
('b285a9a084', 'zahirarahmawati@gmail.com'),
('09bff5a784', 'zarifaramadhani@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `favorite_idols_d`
--

CREATE TABLE `favorite_idols_d` (
  `id_favorite` char(10) NOT NULL,
  `id_idol` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `favorite_idols_d`
--

INSERT INTO `favorite_idols_d` (`id_favorite`, `id_idol`) VALUES
('059318e879', 'enp0w1ccsk'),
('059318e879', '4nu9pd9b23'),
('059318e879', 'qxen7rv6mq'),
('059318e879', 'b3e1fd3478'),
('059318e879', 'y8ooyp7wy7'),
('059318e879', 'behe1re3lg'),
('059318e879', '41b5edd178'),
('059318e879', '439f700f78'),
('059318e879', '4664085578'),
('059318e879', '961f9fbc77'),
('059318e879', '96bd8d9f77'),
('059318e879', '97505c5e77'),
('059318e879', '9808367a77'),
('059318e879', '990e513477'),
('059318e879', '9a51a2c577'),
('b8c8ea1184', '3lfku6pen3'),
('b8c8ea1184', '44674f8c78'),
('376f7f4384', 'c6af10f679'),
('059318e879', '597vk1rmxs'),
('059318e879', '4841610878'),
('059318e879', '480f2e7278'),
('edcddf2785', 'b728a5b778'),
('edcddf2785', 'b3e1fd3478'),
('b8c8ea1184', '71fa962179'),
('edcddf2785', 'bad18f5b78'),
('edcddf2785', 'bec84cb978');

-- --------------------------------------------------------

--
-- Table structure for table `favorite_idols_h`
--

CREATE TABLE `favorite_idols_h` (
  `id_favorite` char(10) NOT NULL DEFAULT substr(replace(convert(uuid() using utf8mb4),'-',''),1,10),
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `favorite_idols_h`
--

INSERT INTO `favorite_idols_h` (`id_favorite`, `email`) VALUES
('edcddf2785', 'imjisooimok@email.com'),
('376f7f4384', 'jakasembung@gmail.com'),
('059318e879', 'raniafaharani@gmail.com'),
('b8c8ea1184', 'zahirarahmawati@gmail.com'),
('09bfb19984', 'zarifaramadhani@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `favorite_news_d`
--

CREATE TABLE `favorite_news_d` (
  `id_favorite` char(10) NOT NULL,
  `id_news` char(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `favorite_news_d`
--

INSERT INTO `favorite_news_d` (`id_favorite`, `id_news`) VALUES
('651f9d8b88', '8df15833883711e'),
('651f9d8b88', '9f95816587c811e'),
('6f807fc488', '9e146841884011e'),
('6f807fc488', '9f95816587c811e'),
('69bcbbac88', '3a201f42890b11e'),
('69bcbbac88', 'e61078a8890911e'),
('69bcbbac88', '251cdff1883b11e');

-- --------------------------------------------------------

--
-- Table structure for table `favorite_news_h`
--

CREATE TABLE `favorite_news_h` (
  `id_favorite` char(10) NOT NULL DEFAULT substr(replace(convert(uuid() using utf8mb4),'-',''),1,10),
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `favorite_news_h`
--

INSERT INTO `favorite_news_h` (`id_favorite`, `email`) VALUES
('603b9e9888', 'imjisooimok@email.com'),
('651f9d8b88', 'jakasembung@gmail.com'),
('69bcbbac88', 'raniafaharani@gmail.com'),
('6f807fc488', 'zahirarahmawati@gmail.com'),
('73befa9888', 'zarifaramadhani@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id_group` char(8) NOT NULL DEFAULT substr(replace(convert(uuid() using utf8mb4),'-',''),1,8),
  `group_name` varchar(100) NOT NULL,
  `debut` year(4) NOT NULL DEFAULT year(current_timestamp()),
  `disband` year(4) DEFAULT NULL,
  `information` text NOT NULL,
  `slug` varchar(50) NOT NULL,
  `group_gender` tinyint(1) NOT NULL,
  `slug_country` varchar(5) NOT NULL,
  `group_cover` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id_group`, `group_name`, `debut`, `disband`, `information`, `slug`, `group_gender`, `slug_country`, `group_cover`) VALUES
('13bf6ae0', 'Stray Kids', '2018', NULL, 'Stray Kids (KR: 스트레이 키즈; JP: ストレイキッズ) is an eight-member boy group under JYP Entertainment. They were formed through the competition reality show of the same name and debuted on March 25, 2018 with the mini album \"I am NOT\".\r\n\r\nPrior to their debut, they released a mini album, \"Mixtape\", on January 8, 2018.\r\n\r\nStray Kids debuted on March 25, 2018 with \"I am NOT\" and its title track \"District 9\". The group announced its fandom name, STAY, on August 1st. That was a few days before their first comeback on August 6 with the title track \"My Pace\" and the mini album \"I am WHO\". Finally, they released \"I am YOU\" on October 22. The three mini albums, the I Am series, were all released in less than a year and are all part of the same narrative cycle revolving around the theme of identity and self-discovery.\r\n\r\nOn October 28, 2019 JYPE announced that Woojin had left the group due to personal circumstances. On November 13, the group released the music video for \"Astronaut,\" their first single as an eight-member group.\r\n\r\nAt the 2020 Mnet Asian Music Awards, it was announced that Stray Kids would be participating in the Mnet survival show Kingdom: Legendary War. On May 28, 2021, the group released a song for the final round of the competition titled \"WOLFGANG \", which marked the group\'s first appearance on the main Gaon Digital Chart at number 138. They won the program on June 3, earning them their own reality show and a Kingdom Week special show for their comeback.\r\n\r\nOn February 10, 2022, it was announced that Stray Kids signed with Republic Records for promotions in the United States as part of JYP Entertainment\'s strategic partnership with the label.\r\n\r\nOn October 20, 2023, Stray Kids became the first and only fourth-generation K-pop group to receive the Korean Popular Culture Arts and Awards, joining the ranks of only six other groups who have achieved this feat.', 'stray-kids', 1, 'kr', 'https://kpopping.com/documents/a8/1/850/Stray-Kids-fullPicture(18).webp?v=ec5e3'),
('2woi7puv', 'BTS', '2013', NULL, 'BTS (방탄소년단; Bangtan Sonyeondan), also known as the Bangtan Boys, is a seven-member South Korean boy band formed by Big Hit Entertainment. BTS\' musical style has evolved to include a wide range of genres. Their lyrics touch on the themes of mental health, troubles of school-age youth, loss, the journey towards loving oneself, and individualism.\r\n\r\nBTS debuted on June 12, 2013 with the song \"No More Dream\" from their first album \"2 COOL 4 SKOOL\". \"Wings\" became BTS\' first album to sell one million copies in South Korea. By 2017, BTS crossed into the international music market, leading the Korean Wave into the United States and breaking numerous sales records, becoming the first Korean group to receive a certification from the Recording Industry Association of America (RIAA) for their single \"MIC Drop\".\r\n\r\nBTS is the first Korean act to top the Billboard 200 with their studio album \"Love Yourself: Tear\" and have since hit the top of the U.S. charts with their albums \"Love Yourself: Answer\" and \"MAP OF THE SOUL : PERSONA\", making BTS the first group since The Beatles to earn three number one albums in less than a year. \"Love Yourself: Answer\" also broke South Korea\'s Gaon Album Chart\'s all-time monthly record previously set by Love Yourself: Tear and became the first Korean album certified Gold in the United States.\r\n\r\nAs of 2019, BTS are worth more than $4.65 billion to South Korea\'s economy each year, or 0.3 percent of the country\'s GDP. BTS attracts one in every 13 foreign tourists that vist South Korea and were cited as one of the key acts boosting global music sales to $19 billion in 2018.', 'bts', 1, 'kr', 'https://kpopping.com/documents/f6/1/2048/BTS-Proof-Concept-Photos-documents-1(2).jpeg'),
('2zek0vjh', 'Apink', '2011', NULL, 'Apink (Korean: 에이핑크, Japanese: エーピンク; also written as A Pink) is a South Korean girl group formed by Plan A Entertainment. in 2011. The group consists of Park Chorong, Yoon Bomi, Jung Eunji, Son Naeun, Kim Namjoo and Oh Hayoung. Hong Yookyung left the group in April 2013 to focus on her studies.\r\n\r\nApink made their official debut on April 19, 2011, with the mini album, Seven Springs of Apink, along with the title track \"I Don\'t Know\". In October 2014, Apink released their first Japanese single, \"NoNoNo\". The group has won awards at shows such as the 26th Golden Disc Awards, 21st Seoul Music Awards and 13th Mnet Asian Music Awards. Their first music program win was on M Countdown on January 5, 2012, for \"My My\" from their second mini-album Snow Pink.\r\n\r\nIn April 2022, Naeun announced that she will leave Apink after 11 years.', 'apink', 0, 'kr', 'https://kpopping.com/documents/d7/4/850/Apink-fullPicture(2).webp?v=1f0eb'),
('4dhl16q8', 'Dreamcatcher', '2017', NULL, 'Dreamcatcher (드림캐쳐) is a seven-member girl group under Dreamcatcher Company. They debuted on January 13, 2017 with the single \"Nightmare\".\r\n\r\nThey were originally known as MINX, which debuted in 2014, before they re-debuted under their current name with two new members: Handong and Gahyeon.', 'dreamcatcher', 0, 'kr', 'https://kpopping.com/documents/2e/1/800/Dreamcatcher-Apocalypse-From-Us-Teaser-Photos-documents-2(1).jpeg?v=5cfcf'),
('7c9ec756', 'Red Velvet', '2014', NULL, 'Red Velvet (레드벨벳) is a five-member girl group under SM Entertainment. They debuted as four on August 1, 2014, with the single \"Happiness\". Yeri joined the group in 2015 during the promotions for \"Ice Cream Cake.\"\r\n\r\nThe group\'s name represents its concept, defined by two different images, \"Red\" and \"Velvet\". \"Red\" signifies their vivid and bold image, whereas \"Velvet\" reflects their classy and toned-down side. Songs like \"Happiness\", \"Ice Cream Cake\", and \"Dumb Dumb\" fall into the \"Red\" concept, in contrast, to \"Be Natural\", \"Automatic\", and \"One of These Nights\" which falls into the \"Velvet\" concept, with \"Russian Roulette\" and \"Rookie\" falling in both \"Red\" and \"Velvet\" concepts.\r\n\r\nBefore their debut, Irene, Seulgi, Wendy, and Yeri were previously part of SM Rookies, SM Entertainment\'s pre-debut team of trainees under SR14G (SMROOKIES 2014 Girls). The members appeared in multiple music videos and posted their own content using SM Rookies. Seulgi was the first to be recruited in 2007 through SM Saturday Open Audition and made a cameo in Henry\'s \"Fantastic\". Irene became a trainee of SM Entertainment back in 2009, and made a cameo in Henry\'s \"1-4-3 (I Love You)\". Wendy was recruited in 2012 during the SM Global Audition in Canada and released an OST for the drama Mimi. Joy was recruited through SM Global Audition in Seoul in 2012. Finally, Yeri was casted at SM Global Audition in the US in 2011.', 'red-velvet', 0, 'kr', 'https://kpopping.com/documents/86/1/850/Red-Velvet-fullPicture(12).webp?v=1f0eb'),
('a291a309', 'ENHYPEN', '2020', NULL, 'ENHYPEN (엔하이픈) is a seven-member boy group under Belift Lab. Formed through the reality show I-LAND, they debuted on November 30, 2020, with their first mini album Border : Day One.\r\n\r\nThe name of the group was described as \"just like hyphens connect different words to make new meanings, the members will connect, discover each other, and grow together.\"\r\n\r\nOn September 18, 2020, the winners of the reality survival show I-LAND were announced as members of the boy group ENHYPEN. The group is composed of six members chosen by global viewers and one, Sunoo, chosen by the producer Bang Si Hyuk and directors Son Sung Deuk, DOOBU, Pdogg, and Wonderkid.\r\n\r\nENHYPEN members do not have official positions or roles except for the leader. The goal is for each member to be able to fulfill all positions at high quality.\r\n\r\nOn July 6, 2021, Enhypen made their Japanese debut with the single Border: Hakanai (BORDER : 儚い), which includes \"Forget Me Not,\" that serves as the opening theme for the anime Re-Main, and the Japanese versions of \"Given-Taken\" and \"Let Me In (20 Cube).\"\r\n\r\nOn January 16, 2022, the first of a new fictional webtoon series about the group was released, entitled \"Dark Moon: The Blood Altar.\"', 'enhypen', 1, 'kr', 'https://kpopping.com/documents/27/3/850/ENHYPEN-fullPicture(10).webp?v=ec5e3'),
('aa2a7dc1', 'SUPER JUNIOR', '2005', NULL, 'Super Junior (슈퍼주니어), also known as SJ or SuJu, is a South Korean boy band formed by SM Entertainment. They made their official debut on November 6, 2005, with the digital single \"Twins (Knock Out)\" The group currently consists of ten members: Leeteuk, Heechul, Yesung, Shindong, Sungmin, Eunhyuk, Donghae, Siwon, Ryeowook and Kyuhyun.\r\n\r\nSuper Junior originally debuted with the name Super Junior 05. They were supposed to be a rotational group wherein members will be removed and added regularly. However, this system received criticism from fans. SM Entertainment eventually decided to make them a fixed group and renamed them Super Junior. The group eventually attracted fans, not just in South Korea, but all over the world. Their prominent contributions to the Korean Wave earned them the nickname \"King of Hallyu Wave\".\r\n\r\nOver the years, Super Junior was divided into sub-units, simultaneously targeting different audiences and nationalities. The members have also individually branched out into acting, hosting, and participating in different show formats. Their immense popularity and success as all-rounded entertainers influenced Korean entertainment agencies to train their artists in different aspects of the entertainment industry.', 'super-junior', 1, 'kr', 'https://kpopping.com/documents/2e/3/850/SUPER-JUNIOR-fullPicture(3).webp?v=ec5e3'),
('cfhhrvjk', 'Girls\' Generation', '2007', NULL, 'Dubbed the Queens of KPOP—Girls\' Generation (Korean: 소녀시대; RR: Sonyeo Sidae), also known as SNSD, is an eight-member South Korean girl group formed by SM Entertainment. The group comprises eight members: Taeyeon, Sunny, Tiffany, Hyoyeon, Yuri, Sooyoung, Yoona, and Seohyun. Originally a nine-piece, main vocalist Jessica departed the group in late 2014.\r\n\r\nGirls\' Generation debuted on August 2nd, 2007, with their eponymous Korean album and the single \"Into the New World.\" The group eventually rose to fame in 2009 with the single \"Gee,\" which claimed the top spot on KBS\'s Music Bank for a record-breaking nine consecutive weeks and was Melon\'s most popular song of the 2000s. Girls\' Generation solidified their popularity in South Korea with follow-up singles \"Genie, \"Oh!\" and \"Run Devil Run,\" which were released between mid-2009 and early 2010. Their back-to-back achievement earned them the title \"The Nation\'s Girl Group.\"\r\n\r\nBesides South Korea, Girls Generation ventured into the Japanese music scene in 2011 with their eponymous Japanese album, which became the first album by a non-Japanese girl group to be certified million by the RIAJ and led to a total of three Japanese albums. Their hit single \"The Boys\" was the first released in English, Korean, and Japanese and led to numerous promotional appearances in 2011-2012.\r\n\r\nThey are credited as the lead female group that shifted the public\'s focus back to female idols after the Korean music industry experienced an influx of male idol groups from 2002 to 2007. Their success has influenced various K-pop girl groups for future generations. Girls\' Generation is also the first Korean celebrity to have official postage stamps distributed by the Korea Post. In 2017, Billboard honored Girls\' Generation as the \"Top K-pop Girl Group of the Past Decade, published in 2019.\r\n\r\nIn October 2017, SM Entertainment announced that members Tiffany, Sooyoung, and Seohyun decided not to renew their contracts with the company to focus on their acting or solo music careers. However, with the change of music labels, the group was said not to be disbanded, and future activities of the eight-member group remain to be discussed.\r\n\r\nAfter five years of hiatus, Girls Generation returned with their seventh studio album, \"Forever 1,\" on August 5th, 2022—the same day as their fifteenth debut anniversary.\r\n\r\nTaeyeon, Jessica, Tiffany, and Hyoyeon each have had successful solo music careers, with Jessica and Tiffany focusing on English releases.\r\n\r\nYuri, Sooyoung, Yoona, and Seohyun have primarily taken acting roles in K-dramas and films, with Sunny shifting to television variety shows.', 'girls-generation', 0, 'kr', 'https://kpopping.com/documents/f8/2/800/Girls-Generation-Lion-Heart-concept-teaser-images-documents-1(1).jpeg?v=6ca92'),
('e9dfa745', 'BEAST', '2009', '2016', 'B2ST, also known as BEAST, was Cube Entertainment\'s first-ever boy group. They made their official debut on October 16, 2009 with the mini album \"Beast Is The B2ST.\" The group originally consisted of Doojoon, Yoseop, Gikwang, Dongwoon, Junhyung, and Hyunseung. They went on to become one of South Korea\'s legendary boy groups, gaining support and love from fans all over the world.\r\n\r\nIn 2016, Hyunseung left the group to pursue solo activities. Since then, B2ST continued to promote as a five-member group. In the same year, all remaining members decide to leave Cube Entertainment with intent to continue group activities elsewhere. However, due to trademark issues, they could no longer promote with the name B2ST.\r\n\r\nEventually, the group redebuted as HIGHLIGHT under their self-established company Around US Entertainment.', 'beast', 1, 'kr', 'https://kpopping.com/documents/44/2/850/B2ST-BEAST-fullPicture.webp?v=ec5e3'),
('ed1b0382', 'MAMAMOO', '2014', NULL, 'MAMAMOO (마마무) consist of 4 members: Solar, Moonbyul, Wheein and Hwasa. MAMAMOO debuted debuted on June 18, 2014, under Rainbow Bridge World (formerly WA Entertainment) with the single, \"Mr. Ambiguous\". Their debut was considered by some critics as one of the best Kpop debuts of 2014.\r\n\r\nPrior to their official debut, Mamamoo collaborated with several artists. Their first collaboration titled \"Don\'t Be Happy\" with Bumkey was released on January 8, 2014. On February 11th, 2014 Mamamoo released their second collaboration with K. Will titled \"Peppermint Chocolate\" featuring Wheesung. On May 30th Mamamoo released another collaboration with rap duo Geeks called \"HeeHeeHaHeHo\".\r\n\r\nOn June 18, 2014, the group made their official debut with the lead single \"Mr. Ambiguous\" from their first extended play, \"Hello\". They made their first live appearance on June 19, 2014 episode of Mnet Countdown.', 'mamamoo', 0, 'kr', 'https://kpopping.com/documents/d4/5/850/MAMAMOO-fullPicture(5).webp?v=d5340'),
('f36uo73q', 'Blackpink', '2016', NULL, 'BLACKPINK (블랙핑크; stylized as BLΛƆKPIИK) is an internationally acclaimed South Korean girl group formed under YG Entertainment. The group has four members Jisoo, Jennie, Lisa, and Rosé. They debuted on August 8, 2016 with their digital single album \"SQUARE ONE\" and immediately rose to be one of the most well-known and loved artists of their generation.\r\n\r\nBLACKPINK\'s debut was highly anticipated as they were YG Entertainment\'s second girl group after 2NE1. Most of the members were also well known among fans when they were still trainees—Jennie having featured in her labelmates\' songs and music videos, Lisa being a well-known Thai trainee, and Jisoo appearing as an actress in several music videos and tv shows.\r\n\r\nAt the time of its release, their song \"DDU-DU DDU-DU\" was the most-viewed Korean music video in the first 24 hours on YouTube, and in January 2019, it became the most viewed music video by a K-pop group on the website. The former record was broken by their video for \"How You Like That\" in June 2020, which also became the most viewed YouTube video in the first 24 hours.', 'blackpink', 0, 'kr', 'https://kpopping.com/documents/c7/0/800/BLACKPINK-Limited-Edition-Born-Pink-Vinyl-Scans-documents-2.jpeg?v=cdd1a'),
('h3007jhw', 'IZ*ONE', '2018', '2021', 'IZ*ONE (Korean: 아이즈원; Japanese: アイズワン; pronounced as \"eyes one\") is a twelve-member project girl group under Off The Record Entertainment and Swing Entertainment. They were formed through Mnet\'s competition reality show Produce 48 and officially debuted on October 29, 2018 with mini album Color*IZ.\r\n\r\nIn early 2018, Mnet announced the third installment to their Produce 101 franchise which aimed to bring together 48 Korean trainees from several entertainment companies and 48 Japanese idols from the J-pop idol group AKB48 and their sister groups to form a girl group with 12 members chosen by the viewers.\r\n\r\nProduce 48 premiered on June 15, 2018 and the live finale was broadcast in August 31, 2018, with the top 12 winners becoming a girl group named IZ*ONE. Of the top 12 winners, Miyawaki Sakura and Yabuki Nako had already debuted in HKT48, Honda Hitomi in AKB48, while Kwon Eun Bi was previously in girl group Ye-A under the stage name Kazoo but left the group in late 2014, Jo Yuri is a former contestant of another Mnet survival show Idol School which created the girl group fromis_9, while the final winner Lee Chae Yeon was a well-known contestant in another competition show called SIXTEEN which created the girl group TWICE.\r\n\r\nOn September 21, 2018, along with Mnet\'s Idol School\'s final group fromis_9, it was announced the group had switch agencies and would now be managed by Off The Record Entertainment in Korea.\r\n\r\nOn April 28, 2021, after three years of promotions, IZ*ONE officially disbanded.', 'izone', 0, 'kr', 'https://kpopping.com/documents/23/5/800/20067467(1).jpeg?v=6ca92'),
('i7fj1pqj', 'EXO', '2012', NULL, 'EXO (엑소) is an acclaimed nine-member South Korean boy group formed by SM Entertainment. The current line-up consists of Xiumin, Suho, Lay, Chen, D.O, Kai, Baekhyun, Chanyeol, and Sehun. They made their offical debut on April 12th 2012 with their mini album Mama. Following the release of their first studio album XOXO, EXO went on to become one of the most popular artists, not just in South Korea but all over the world. They broke records left and right, scored massive brand deals, and snagged multiple awards domestically and internationally.\r\n\r\nEXO initially debuted with twelve members which were separated into two sub-groups: EXO-K, a unit that focused on South Korean content which consisted of Suho, Baekhyun, Chanyeol, Kai, and D.O. And the Chinese-focused unit EXO-M which included Xiumin, Lay, Chen, and former members Kris, Luhan, and Tao. However, following the former members\' departure in 2014, EXO began to actively promote as a whole nine-member group.\r\n\r\nEXO continued to release chart-topping music over the years and solidified their status as one of the legendary boy groups of South Korea. They also went on to have their first sub-unit in 2016, EXO-CBX, which comprised of Chen, Baekhyun, and Xiumin. Three years later, in 2019, they had their second sub-unit, EXO-SC, which was a duo consisting of Sehun and Chanyeol. Along with the members\' solo releases, the sub-units became massive hits worldwide.\r\n\r\nOn June 1, 2023, Baekhyun, Chen, and Xiumin revealed the termination of their exclusive contracts with SM Entertainment.', 'exo', 1, 'kr', 'https://kpopping.com/documents/80/1/800/EXO-Cream-Soda-Creamy-Breath-documents-2.jpeg?v=5cfcf'),
('kmwpq1g8', 'BTOB', '2012', NULL, 'BTOB (Korean: 비투비, acronym for Born to Beat) is a six-member boy group under Cube Entertainment.\r\n\r\nPrior to their debut, Seo Eunkwang, Lee Minhyuk, Lim Hyunsik, Jung Ilhoon and Lee Minwoo were part on the original list of members who are waiting to be debuted under the name of \"BtoB\". They also made their appearance on the JTBC sitcom \"I Live in Cheongdam-dong\" as an aspiring boy band towards their debut. However, Lee Minwoo dropped out of the list of confirmed members due to his health.\r\n\r\nOn March 21, 2012, the group made their official debut with their first digital single 비밀 (Insane) and made their debut stage on March 22nd, 2012 with their title tracks \"Insane\" and \"Imagine\" on Mnet’s M! Countdown.', 'btob', 1, 'kr', 'https://kpopping.com/documents/f2/4/800/3FAD4CB0-FE1A-4C98-B2A8-B19392D92FE6.jpeg?v=5cfcf'),
('kuzwman8', 'Twice', '2015', NULL, 'TWICE (트와이스) is a nine-member girl group under JYP Entertainment. They were formed through the competition reality show SIXTEEN and officially debuted on October 20, 2015 with the mini album The Story Begins.\r\n\r\nIn 2015, Park Jin Young announced that the new JYP girl group will be formed by the survival reality show SIXTEEN, where sixteen JYP trainees would compete to debut in the seven-member girl group TWICE. The show started on May 5 and ended with Nayeon, Jeongyeon, Dahyun, Sana, Jihyo, Mina, and Chaeyoung. During the finale, Park announced that he will add two more members into the group, making it a nine-member girl group. By audience vote, Tzuyu was added, and by Park\'s choice, Momo was added, thus starting the beginning of TWICE.\r\n\r\nOn October 7, 2015, JYP launched the group\'s official website and announced on social media that the group would debut with the mini album The Story Begins with \"Like Ooh-Ahh\" as the title track. On October 20, the album and the song\'s music video were released online on October 20 and through the Naver \"V LIVE\" App. The group held their debut showcase the same day, where they performed \"Like Ooh-Ahh\" along with dance tracks \"Going Crazy\" and \"Do It Again\". The title track\'s music video hit 50 million views within five months of their debut and became the most-viewed debut music video for any K-pop group, later becoming one of the first K-pop group to have their debut music video pass 100 million views.\r\n\r\nTWICE rose to fame in 2016 with their single \"Cheer Up\": the song charted at #1 on the Gaon Digital Chart and became the best performing single of the year. TWICE made their Japan debut on June 28, 2017 and became the first Korean girl group that earned Platinum certification by the Recording Industry Association of Japan (RIAJ).\r\n\r\nTWICE made history as the first female Kpop to hold a Japanese dome tour, named Twice Dome Tour 2019 \"#Dreamday\". with a total audience of 220,000 during five shows in Osaka, Tokyo and Nagoya was held in March and April 2019. On April 22 2019 they released their seventh EP \"Fancy You\". The release of Fancy You made Twice the best-selling Korean girl group of all time with a total of 3,750,000 copies sold from their twelve Korean releases, surpassing the twenty-year-old record of S.E.S.\r\n\r\nThe group released their first official English-language single, \"The Feels\", on October 1, 2021. \"The Feels\" debuted at number 83 on the Billboard Hot 100, marking the group\'s first appearance on the chart. The song also made its way to the UK Singles Chart, where it peaked at number 80.\r\n\r\nTwice made history on July 6, 2023, by becoming the first K-pop group to perform at Metlife Stadium.', 'twice', 0, 'kr', 'https://kpopping.com/documents/62/1/800/TWICE-JAPAN-4th-Album-Celebrate-Scans-documents-1.jpeg?v=e30c2'),
('ork1ksca', 'Arch Enemy', '1996', NULL, 'Arch Enemy is a Swedish melodic death metal band, originally a supergroup from Halmstad, formed in 1995. Its members were in bands such as Carcass, Armageddon, Carnage, Mercyful Fate, Spiritual Beggars, The Agonist, Nevermore, and Eucharist. It was founded by Carcass guitarist Michael Amott along with Johan Liiva, who were both originally from the death metal band Carnage. The band has released eleven studio albums, three live albums, three video albums and four EPs. The band was originally fronted by Johan Liiva, who was replaced by German vocalist Angela Gossow in 2000. Gossow left the band in March 2014 to become the group\'s manager and was replaced by Canadian vocalist Alissa White-Gluz.', 'arch-enemy', 2, 'au', 'https://lastfm.freetls.fastly.net/i/u/770x0/0e193d0c372cccfd381e4a7e0f90ed6d.jpg'),
('q0jfv6fg', 'T-ARA', '2023', NULL, 'T-ARA (티아라; pronounced as Tiara) is a girl group formed by Mnet Media in 2009. Prior to their debut, they released their first song for Cinderella Man OST in April 2009. In June 2009, members Jiwon and Jiae left the group, delaying the group\'s debut. The following month, T-ARA re-grouped to become a six-member group and released their debut single \"Lie\" on July 27, 2009 and officially debuting on the 29th on the MBC talk show Radio Star.\r\n\r\nOn March 6, 2017, MBK Entertainment announced that T-ARA will be releasing a new mini album in May, and that it will be their last album as six members. It was originally announced that Boram and Soyeon had terminated their contracts, but would still feature on the album, however on May 7, 2017, it was revealed that the album would be delayed to June 2017 to re-record after Boram and Soyeon withdrew from promotions of the last album. The remaining four members stayed with MBK until December to finish up their activities.\r\n\r\nOn July 29, 2021, for the group\'s 12th anniversary, T-ARA\'s members announced on a live broadcast they are preparing for a comeback.They recently made a comeback as a group on November 15, 2021.', 't-ara', 0, 'kr', 'https://kpopping.com/documents/02/1/800/T-ara-Cry-Cry-concept-photos-documents-3.jpeg'),
('t8er65pf', 'G-Friend', '2015', '2021', 'GFRIEND (Hangul: 여자친구; Japanese: ジーフレンド) was a six-member girl group under Source Music. They released their debut mini album Season of Glass on January 15, 2015 and held their debut stage on Music Bank the following day.\r\n\r\nThe group\'s main concepts were \"powerful innocent\" (an innocent concept with knife-like choreography) and \"passionate melancholy\" (an orchestral and sentimental sound), but they were always reinventing themselves. Also, the music videos follow GFRIEND\'s signature storytelling.\r\n\r\nOn May 18, 2021, it was announced that their exclusive contracts with Source Music will end on May 22, 2021. The following day, the group members confirmed GFriend\'s official disbandment.', 'g-friend', 0, 'kr', 'https://kpopping.com/documents/6e/4/2400/80216536(1).jpeg'),
('v7pht6kv', 'NCT', '2016', NULL, 'NCT (엔시티) is a 26 member boy group under SM Entertainment. The group consists of members divided into multiple sub-units to be based in major cities around the world. Their name stands for \"Neo Culture Technology\".\r\n\r\nBefore any of the members debut, most of the members were under SM Entertainments pre-debut team, SMROOKIES under the name SR14B (SMROOKIES 2014 Boys). When SMROOKIES were announced in December 2013, they announced members Taeyong and Jeno, with Jaehyun, Mark, Jisung, Johnny, Ten, and Yuta on the same month days later. In April 2014, Haechan and Jaemin were announced. In July 2014, they released a video of Taeyong\'s rapping skills on SMTown\'s YouTube channel. The next month, they released a video of Johnny, Taeyong, and another rookie named Hansol of a dance focus video titled “Super Moon” showing off their dance moves. In January 2015, Doyoung was announced as part of SM Rookies as him and Jaehyun was introduced as the new MCs on MBC Music Champion. In October 2015, Taeil was introduced. In January 2016, Winwin was introduced.\r\n\r\nOn January 27, the group was announced by SM Entertainment‘s founder, Lee Soo Man, at SM’s Coex Artium during “SMTown: New Culture Technology 2016\" press conference. It was announced that there will be different teams that will debut based in different countries around the world. There will be various collaborations and units formed between the different groups, allowing for movement of members and new recruits into the groups. There also won’t be a set member number for these groups.\r\n\r\nOn February 24, 2023, SM Entertainment announced the \"limitless expansion\" concept would end after the future debut of the Japanese unit, NCT Tokyo. Current members would be supported with no future member changes.\r\n\r\nOn May 10, 2023, it was announced that member Lucas would be leaving the group to pursue his individual endeavors.\r\n\r\nOn May 24, 2023, it was announced that members Sungchan and Shotaro would be leaving the group and joining SM\'s upcoming boy group set to debut in 2023.\r\n\r\nOn October 2, 2023, SM Entertainment announced that Jungmin would be departing from the group and returning to be a trainee due to health concerns, and that the group would continue their activities with six members.', 'kr', 1, 'kr', 'https://kpopping.com/documents/17/4/800/NCT-NCT-RESONANCE-Pt-2-Concept-Teaser-Images-documents-1(4).jpeg?v=6ca92');

-- --------------------------------------------------------

--
-- Table structure for table `idols`
--

CREATE TABLE `idols` (
  `id_idol` char(10) NOT NULL DEFAULT substr(replace(convert(uuid() using utf8mb4),'-',''),1,10),
  `idol_name` varchar(50) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `birthday` date NOT NULL,
  `weight` tinyint(4) NOT NULL,
  `height` smallint(6) NOT NULL,
  `gender` tinyint(1) NOT NULL DEFAULT 0,
  `photo` varchar(500) NOT NULL DEFAULT 'default.png',
  `slug_country` varchar(5) DEFAULT NULL,
  `id_group` char(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `idols`
--

INSERT INTO `idols` (`id_idol`, `idol_name`, `full_name`, `birthday`, `weight`, `height`, `gender`, `photo`, `slug_country`, `id_group`) VALUES
('06a24e7578', 'Xiumin\r\n', 'Kim Min-seok\r\n', '1990-03-26', 53, 173, 1, 'https://kpopping.com/documents/86/1/750/Xiumin-fullBodyPicture(6).webp?v=8cd6b', 'kr', 'i7fj1pqj'),
('06e3660e78', 'Suho\r\n', 'Kim Jun-myeon\r\n', '1991-05-22', 60, 173, 1, 'https://kpopping.com/documents/23/0/750/Suho-fullBodyPicture(4).webp?v=8cd6b', 'kr', 'i7fj1pqj'),
('071be03178', 'Lay\r\n', 'Zhang Yixing\r\n', '1991-10-07', 60, 177, 1, 'https://kpopping.com/documents/c8/0/750/Lay-fullBodyPicture(1).webp?v=30845', 'cn', 'i7fj1pqj'),
('09e6ef5c78', 'Baekhyun\r\n', 'Byun Baek-hyun\r\n', '1992-05-06', 58, 174, 1, 'https://kpopping.com/documents/0c/2/750/Baekhyun-fullBodyPicture(5).webp?v=8cd6b', 'kr', 'i7fj1pqj'),
('0a2d2fa578', 'Chen\r\n', 'Kim Jong-dae\r\n', '1992-09-21', 60, 173, 1, 'https://kpopping.com/documents/e6/4/750/Chen-fullBodyPicture(6).webp?v=8cd6b', 'kr', 'i7fj1pqj'),
('0af259a078', 'Chanyeol\r\n', 'Park Chan-yeol\r\n', '1992-11-27', 70, 185, 1, 'https://kpopping.com/documents/72/3/750/Chanyeol-fullBodyPicture(6).webp?v=9b70a', 'kr', 'i7fj1pqj'),
('0b55e62578', 'D.O.\r\n', 'Do Kyung-soo\r\n', '1993-01-12', 60, 173, 1, 'https://kpopping.com/documents/2b/5/750/D-O-fullBodyPicture(3).webp?v=8cd6b', 'kr', 'i7fj1pqj'),
('0b95b21278', 'Kai\r\n', 'Kim Jong-in\r\n', '1994-01-14', 62, 182, 1, 'https://kpopping.com/documents/e4/4/750/Kai-fullBodyPicture(4).webp?v=8cd6b', 'kr', 'i7fj1pqj'),
('0bd2ba4d78', 'Sehun\r\n', 'Oh Se-hun\r\n', '1994-04-12', 66, 183, 1, 'https://kpopping.com/documents/62/0/750/Sehun-fullBodyPicture(3).webp?v=8cd6b', 'kr', 'i7fj1pqj'),
('0ce114ea89', 'Doojoon\r\n', 'Yoon Du-jun\r\n', '1989-07-04', 66, 177, 0, 'https://kpopping.com/documents/5b/1/750/Doojoon-fullBodyPicture(2).webp?v=30845', 'kr', 'e9dfa745'),
('0f7ff8bd89', 'Junhyung\r\n', 'Yong Jun Hyung\r\n', '1989-12-19', 0, 178, 0, 'https://kpopping.com/documents/d0/4/750/Junhyung-fullBodyPicture(8).webp?v=9b70a', 'kr', 'e9dfa745'),
('11ca71dc89', 'Yoseop\r\n', 'Yang Yoseop\r\n', '1990-01-05', 57, 170, 0, 'https://kpopping.com/documents/7c/3/750/Yoseop-fullBodyPicture(2).webp?v=30845', 'kr', 'e9dfa745'),
('122f0ac689', 'Gikwang\r\n', 'Lee Gikwang\r\n', '1990-03-30', 0, 171, 0, 'https://kpopping.com/documents/3e/2/750/Gikwang-fullBodyPicture(3).webp?v=9b70a', 'kr', 'e9dfa745'),
('14ab6fc389', 'Dongwoon\r\n', 'Son Dongwoon\r\n', '1991-06-06', 0, 181, 0, 'https://kpopping.com/documents/43/4/750/Dongwoon-fullBodyPicture(2).webp?v=30845', 'kr', 'e9dfa745'),
('26fe1ace78', 'Bang Chan\r\n', 'Christopher Bang\r\n', '1997-10-03', 65, 171, 1, 'https://kpopping.com/documents/7f/1/750/Bang-Chan-fullBodyPicture(19).webp?v=d25e5', 'au', '13bf6ae0'),
('2739475778', 'Lee Know\r\n', 'Lee Min-ho\r\n', '1998-10-25', 66, 172, 1, 'https://kpopping.com/documents/f6/4/750/Lee-Know-fullBodyPicture(17).webp?v=d25e5', 'kr', '13bf6ae0'),
('27746c3a78', 'Changbin\r\n', 'Seo Chang-bin\r\n', '1999-08-11', 68, 167, 1, 'https://kpopping.com/documents/c6/5/750/Changbin-fullBodyPicture(21).webp?v=d25e5', 'kr', '13bf6ae0'),
('2800644f86', 'Solar\r\n', 'Kim Yong Sun\r\n', '1991-02-21', 46, 160, 0, 'https://kpopping.com/documents/eb/5/750/Solar-fullBodyPicture(6).webp?v=e3772', 'kr', 'ed1b0382'),
('284d38cb78', 'Hyunjin\r\n', 'Hwang Hyun-jin\r\n', '2000-03-20', 67, 181, 1, 'https://kpopping.com/documents/ff/4/750/Hyunjin-fullBodyPicture(23).webp?v=d25e5', 'kr', '13bf6ae0'),
('2887504f78', 'Han\r\n', 'Han Jisung\r\n', '2000-09-14', 60, 169, 1, 'https://kpopping.com/documents/a5/2/750/Han-fullBodyPicture(19).webp?v=d25e5', 'kr', '13bf6ae0'),
('28e9351978', 'Felix\r\n', 'Felix Lee\r\n', '2000-09-15', 58, 171, 1, 'https://kpopping.com/documents/42/1/750/Felix-fullBodyPicture(16).webp?v=d25e5', 'kr', '13bf6ae0'),
('2923716e78', 'Seungmin\r\n', 'Kim Seung-min\r\n', '2000-09-22', 60, 178, 1, 'https://kpopping.com/documents/f2/0/750/Seungmin-fullBodyPicture(22).webp?v=d25e5', 'kr', '13bf6ae0'),
('2b7ab56078', 'I.N\r\n', 'Yang Jeong-in\r\n', '2001-02-08', 62, 172, 1, 'https://kpopping.com/documents/21/4/750/I-N-fullBodyPicture(17).webp?v=d25e5', 'kr', '13bf6ae0'),
('2bf8646586', 'Moonbyul\r\n', 'Moon Byul-yi\r\n', '1992-12-22', 45, 163, 0, 'https://kpopping.com/documents/a0/3/750/Moonbyul-fullBodyPicture(6).webp?v=fe021', 'kr', 'ed1b0382'),
('2fa0700686', 'Wheein\r\n', 'Jung Whee-in\r\n', '1995-04-17', 43, 159, 0, 'https://kpopping.com/documents/33/5/750/Wheein-fullBodyPicture(2).webp?v=a6f34', 'kr', 'ed1b0382'),
('2fd3c9b586', 'Hwasa\r\n', 'Ahn Hye Jin\r\n', '1995-07-23', 53, 155, 0, 'https://kpopping.com/documents/75/5/800/221208-Hwa-Sa-Instagram-Update-Hwa-Sa-Show-Vol-1-just-talking-to-myself-Poster-documents-2.jpeg?v=6c309', 'kr', 'ed1b0382'),
('3d5cbc0a79', 'Erlandsson', 'Daniel John Erlandsson', '1976-05-22', 127, 80, 1, 'https://www.spirit-of-metal.com/membre_groupe/photo/Daniel_Erlandsson-102168_5b39.jpg', 'us', 'ork1ksca'),
('3f13078478', 'Taeyeon\r\n', 'Kim Tae-yeon\r\n', '1989-03-09', 45, 160, 0, 'https://kpopping.com/documents/2d/0/500/Taeyeon-facePicture(11).webp?v=7b461', 'kr', 'cfhhrvjk'),
('3lfku6pen3', 'Dami', 'Lee Yoo-bin', '1997-03-07', 44, 163, 0, 'https://kpopping.com/documents/a4/1/800/Dreamcatcher-Apocalypse-From-Us-Teaser-Photos-documents-2.jpeg', 'kr', '4dhl16q8'),
('40427eb978', 'Sunny\r\n', 'Lee Soon Kyu\r\n', '1989-05-15', 47, 158, 0, 'https://kpopping.com//documents/d5/4/500/Sunny-facePicture(7).webp?v=7b461', 'kr', 'cfhhrvjk'),
('41b5edd178', 'Tiffany Young\r\n', 'Stephanie Young Hwang\r\n', '1989-08-01', 51, 163, 0, 'https://kpopping.com/documents/0f/4/500/Tiffany-Young-facePicture(3).webp?v=b293a', 'kr', 'cfhhrvjk'),
('429cbef978', 'Hyoyeon\r\n', 'Kim Hyo-yeon\r\n', '1989-09-22', 46, 161, 0, 'https://kpopping.com/documents/fb/3/500/Hyoyeon-facePicture(8).webp?v=e89ae', 'kr', 'cfhhrvjk'),
('439f700f78', 'Yuri\r\n', 'Kwon Yu-ri\r\n', '1989-12-05', 46, 168, 0, 'https://kpopping.com/documents/f5/4/500/Yuri-facePicture(10).webp?v=7b461', 'kr', 'cfhhrvjk'),
('44674f8c78', 'Sooyoung\r\n', 'Choi Soo Young\r\n', '1990-02-10', 49, 172, 0, 'https://kpopping.com/documents/f1/0/500/Sooyoung-facePicture(5).webp?v=7b461', 'kr', 'cfhhrvjk'),
('455cb4b978', 'Yoona\r\n', 'Im Yoon Ah\r\n', '1990-05-30', 48, 168, 0, 'https://kpopping.com/documents/ff/1/500/Yoona-facePicture(11).webp?v=7b461', 'kr', 'cfhhrvjk'),
('4664085578', 'Seohyun\r\n', 'Seo Ju-hyun\r\n', '1991-06-28', 51, 170, 0, 'https://kpopping.com/documents/36/1/500/Seohyun-facePicture(3).webp?v=7b461', 'kr', 'cfhhrvjk'),
('480f2e7278', 'Chorong\r\n', 'Park Cho-rong\r\n', '1991-03-03', 46, 163, 0, 'https://kpopping.com/documents/7e/5/750/Chorong-fullBodyPicture(1).webp?v=de937', 'kr', '2zek0vjh'),
('4841610878', 'Bomi\r\n', 'Yoon Bo Mi\r\n', '1993-08-13', 52, 163, 0, 'https://kpopping.com/documents/80/1/750/Bomi-fullBodyPicture(5).webp?v=de937', 'kr', '2zek0vjh'),
('49114ca178', 'Eunji\r\n', 'Jeong Eun-ji\r\n', '1993-08-18', 47, 162, 0, 'https://kpopping.com/documents/9b/1/750/Eunji-fullBodyPicture(14).webp?v=de937', 'kr', '2zek0vjh'),
('496b82a078', 'Namjoo\r\n', 'Kim Nam Joo\r\n', '1995-04-15', 48, 165, 0, 'https://kpopping.com/documents/13/4/750/Namjoo-fullBodyPicture(1).webp?v=de937', 'kr', '2zek0vjh'),
('499e138778', 'Hayoung\r\n', 'Oh Ha Young\r\n', '1996-07-19', 52, 169, 0, 'https://kpopping.com/documents/d7/4/750/Hayoung-fullBodyPicture(7).webp?v=de937', 'kr', '2zek0vjh'),
('4nu9pd9b23', 'Jihyo', 'Park Ji-hyo', '1997-02-01', 48, 160, 0, 'https://kpopping.com/documents/3a/1/800/TWICE-JAPAN-4th-Album-Celebrate-Scans-documents-7.jpeg', 'kr', 'kuzwman8'),
('51936add79', 'Soyeon', 'Park So Yeon', '1987-10-05', 46, 163, 0, 'https://kpopping.com/documents/f8/0/800/T-ara-Cry-Cry-concept-photos-documents-6.jpeg?v=77e07', 'kr', 'q0jfv6fg'),
('597vk1rmxs', 'JiU', 'Kim Minji', '1994-05-17', 49, 167, 0, 'https://kpopping.com/documents/e7/1/800/Dreamcatcher-Apocalypse-From-Us-Teaser-Photos-documents-7.jpeg', 'kr', '4dhl16q8'),
('6kvb49jhbl', 'Yena', 'Choi Yena', '1999-09-29', 44, 162, 0, 'https://kpopping.com/documents/f6/5/800/20067467_040.jpeg', 'kr', 'h3007jhw'),
('71fa962179', 'Michael Amott', 'Michael Amott', '1969-07-26', 79, 185, 1, 'https://upload.wikimedia.org/wikipedia/commons/thumb/3/34/Arch_Enemy_17.10.2012_Rockfabrik%2C_Ludwigsburg_%288123155213%29.jpg/344px-Arch_Enemy_17.10.2012_Rockfabrik%2C_Ludwigsburg_%288123155213%29.jpg', 'us', 'ork1ksca'),
('7839a71f79', 'Qri\r\n', 'Lee Ji-hyun\r\n', '1986-12-12', 44, 163, 0, 'https://kpopping.com/documents/a7/2/800/T-ara-Cry-Cry-concept-photos-documents-5.jpeg?v=77e07', 'kr', 'q0jfv6fg'),
('7abc473279', 'Eunjung\r\n', 'Hahm Eun-jung\r\n', '1988-12-12', 48, 168, 0, 'https://kpopping.com/documents/b8/0/800/T-ara-Cry-Cry-concept-photos-documents-7.jpeg?v=77e07', 'kr', 'q0jfv6fg'),
('7af1492279', 'Hyomin\r\n', 'Park Sun-young\r\n', '1989-05-30', 46, 167, 0, 'https://kpopping.com/documents/b9/3/800/T-ara-Cry-Cry-concept-photos-documents-8.jpeg?v=77e07', 'kr', 'q0jfv6fg'),
('7d7bb2b979', 'Jiyeon\r\n', 'Park Ji-yeon\r\n', '1993-06-07', 46, 167, 0, 'https://kpopping.com/documents/59/4/800/T-ara-Cry-Cry-concept-photos-documents-1(2).jpeg?v=77e07', 'kr', 'q0jfv6fg'),
('89c72bcd86', 'Irene\r\n', 'Bae Joo-hyun\r\n', '1991-03-29', 44, 158, 0, 'https://kpopping.com/documents/62/2/750/Irene-fullBodyPicture(11).webp?v=ee80a', 'kr', '7c9ec756'),
('8a94fedd86', 'Seulgi\r\n', 'Kang Seul Gi\r\n', '1994-02-10', 44, 161, 0, 'https://kpopping.com/documents/4f/3/750/Seulgi-fullBodyPicture(16).webp?v=ee80a', 'kr', '7c9ec756'),
('8af47a4d86', 'Wendy\r\n', 'Son Seung Wan\r\n', '1994-02-21', 46, 160, 0, 'https://kpopping.com/documents/76/4/750/Wendy-fullBodyPicture(10).webp?v=ee80a', 'kr', '7c9ec756'),
('8b2f05a886', 'Joy\r\n', 'Park Soo Young\r\n', '1996-09-03', 49, 167, 0, 'https://kpopping.com/documents/a1/2/750/Joy-fullBodyPicture(9).webp?v=ee80a', 'kr', '7c9ec756'),
('8b92cd8386', 'Yeri\r\n', 'Kim Ye Rim\r\n', '1999-03-05', 43, 159, 0, 'https://kpopping.com/documents/a8/0/750/Yeri-fullBodyPicture(8).webp?v=ee80a', 'kr', '7c9ec756'),
('9541886877', 'Jin\r\n', 'Kim Seok-jin\r\n', '1992-12-04', 66, 179, 1, 'https://kpopping.com/documents/b9/1/800/BTS-Proof-Concept-Photos-documents-9(1).jpeg?v=9270a', 'kr', '2woi7puv'),
('961f9fbc77', 'SUGA\r\n', 'Min Yoon-Gi\r\n', '1993-03-09', 61, 174, 1, 'https://kpopping.com/documents/11/1/800/BTS-Proof-Concept-Photos-documents-13(1).jpeg?v=9270a', 'kr', '2woi7puv'),
('96bd8d9f77', 'j-hope\r\n', 'Jung Ho-Seok\r\n', '1994-02-18', 59, 177, 1, 'https://kpopping.com/documents/d6/4/800/BTS-Proof-Concept-Photos-documents-14(1).jpeg', 'kr', '2woi7puv'),
('97505c5e77', 'RM\r\n', 'Kim Nam-Joon\r\n', '1994-09-12', 76, 181, 1, 'https://kpopping.com/documents/91/1/800/BTS-Proof-Concept-Photos-documents-12(1).jpeg', 'kr', '2woi7puv'),
('9808367a77', 'Jimin\r\n', 'Park Ji Min\r\n', '1995-10-13', 65, 174, 1, 'https://kpopping.com/documents/f2/2/800/BTS-Proof-Concept-Photos-documents-10(1).jpeg?v=9270a', 'kr', '2woi7puv'),
('990e513477', 'V\r\n', 'Kim Tae-Hyung\r\n', '1995-12-30', 62, 179, 1, 'https://kpopping.com/documents/a3/2/800/BTS-Proof-Concept-Photos-documents-8(2).jpeg?v=9270a', 'kr', '2woi7puv'),
('9a51a2c577', 'Jungkook\r\n', 'Jeon Jeong-guk\r\n', '1997-09-01', 71, 179, 1, 'https://kpopping.com/documents/a2/5/800/BTS-Proof-Concept-Photos-documents-11(1).jpeg?v=9270a', 'kr', '2woi7puv'),
('ae5c112779', 'Chaewon\r\n', 'Kim Chaewon\r\n', '2000-08-01', 42, 164, 0, 'https://kpopping.com/documents/f1/1/800/20067467_033.jpeg?v=6ca92', 'kr', 'h3007jhw'),
('aea963cf78', 'Taeil\r\n', 'Moon Tae Il\r\n', '1994-06-14', 60, 172, 1, 'https://kpopping.com/documents/71/0/750/Taeil-fullBodyPicture(8).webp?v=8cd6b', 'kr', 'v7pht6kv'),
('aec1f68f79', 'Minju\r\n', 'Kim Minju\r\n', '2001-02-05', 45, 164, 0, 'https://kpopping.com/documents/d1/1/800/20067467_032.jpeg?v=6ca92', 'kr', 'h3007jhw'),
('aee1bd5478', 'Johnny\r\n', 'John Jun Suh\r\n', '1995-02-09', 70, 185, 1, 'https://kpopping.com/documents/0a/1/750/Johnny-fullBodyPicture(5).webp?v=8cd6b', 'kr', 'v7pht6kv'),
('af1ea23078', 'Taeyong\r\n', 'Lee Tae-yong\r\n', '1995-07-01', 59, 175, 1, 'https://kpopping.com/documents/6e/1/750/Taeyong-fullBodyPicture(7).webp?v=8cd6b', 'kr', 'v7pht6kv'),
('af24fe2b79', 'Nako\r\n', 'Yabuki Nako\r\n', '2001-06-18', 40, 150, 0, 'https://kpopping.com/documents/a5/5/800/20067467_036.jpeg?v=6ca92', 'jp', 'h3007jhw'),
('af567d8678', 'Yuta\r\n', 'Nakamoto Yuta\r\n', '1995-10-26', 60, 176, 1, 'https://kpopping.com/documents/7b/4/750/Yuta-fullBodyPicture(5).webp?v=8cd6b', 'jp', 'v7pht6kv'),
('af63136b79', 'Hitomi\r\n', 'Honda Hitomi\r\n', '2001-10-06', 41, 159, 0, 'https://kpopping.com/documents/8a/4/800/20067467_041.jpeg?v=6ca92', 'jp', 'h3007jhw'),
('af8ce88a78', 'Kun\r\n', 'Qián Kūn\r\n', '1996-01-01', 60, 176, 1, 'https://kpopping.com/documents/b1/1/750/Kun-fullBodyPicture(6).webp?v=8cd6b', 'cn', 'v7pht6kv'),
('afa4eb7479', 'Yuri\r\n', 'Jo Yu-ri\r\n', '2001-10-22', 42, 163, 0, 'https://kpopping.com/documents/bd/2/800/20067467_039.jpeg?v=6ca92', 'kr', 'h3007jhw'),
('afc420d978', 'Doyoung\r\n', 'Kim Dong Young\r\n', '1996-02-01', 60, 178, 1, 'https://kpopping.com/documents/c0/4/750/Doyoung-fullBodyPicture(11).webp?v=8cd6b', 'kr', 'v7pht6kv'),
('afe339a179', 'Yujin\r\n', 'Ahn Yu-jin\r\n', '2003-09-01', 50, 173, 0, 'https://kpopping.com/documents/72/5/800/20067467_035.jpeg?v=6ca92', 'kr', 'h3007jhw'),
('affa505e78', 'Ten\r\n', 'Chittaphon Leechaiyapornkul\r\n', '1996-02-27', 59, 170, 1, 'https://kpopping.com/documents/af/5/750/Ten-fullBodyPicture(5).webp?v=8cd6b', 'th', 'v7pht6kv'),
('b025250a79', 'Wonyoung\r\n', 'Jang Won-young\r\n', '2004-08-31', 47, 173, 0, 'https://kpopping.com/documents/ec/4/800/20067467_038.jpeg?v=6ca92', 'kr', 'h3007jhw'),
('b03781f378', 'Jaehyun\r\n', 'Jeong Yoon Oh\r\n', '1997-02-14', 65, 180, 1, 'https://kpopping.com/documents/81/4/750/Jaehyun-fullBodyPicture(21).webp?v=8cd6b', 'kr', 'v7pht6kv'),
('b072ee6d78', 'WinWin\r\n', 'Dǒng Sīchéng\r\n', '1997-10-28', 59, 180, 1, 'https://kpopping.com/documents/95/1/750/WinWin-fullBodyPicture(6).webp?v=8cd6b', 'cn', 'v7pht6kv'),
('b0b04f9478', 'Jungwoo\r\n', 'Kim Jung Woo\r\n', '1998-02-19', 58, 180, 1, 'https://kpopping.com/documents/49/4/750/Jungwoo-fullBodyPicture(8).webp?v=8cd6b', 'kr', 'v7pht6kv'),
('b0ee4b4a78', 'Mark\r\n', 'Mark Lee\r\n', '1999-08-02', 64, 175, 1, 'https://kpopping.com/documents/07/3/750/Mark-fullBodyPicture(16).webp?v=8cd6b', 'us', 'v7pht6kv'),
('b1aff11f78', 'Xiaojun\r\n', 'Xiao De Jun\r\n', '1999-08-08', 0, 173, 1, 'https://kpopping.com/documents/bd/5/750/Xiaojun-fullBodyPicture(7).webp?v=8cd6b', 'cn', 'v7pht6kv'),
('b20f155878', 'Hendery\r\n', 'Wong Kun-Hang\r\n', '1999-09-28', 0, 175, 1, 'https://kpopping.com/documents/1f/4/750/Hendery-fullBodyPicture(6).webp?v=8cd6b', 'cn', 'v7pht6kv'),
('b26a835e78', 'Renjun\r\n', 'Huang Ren Jun\r\n', '2000-03-23', 57, 170, 1, 'https://kpopping.com/documents/e3/4/750/Renjun-fullBodyPicture(7).webp?v=30845', 'kr', 'v7pht6kv'),
('b2ca0db078', 'Jeno\r\n', 'Lee Je No\r\n', '2000-04-23', 58, 178, 1, 'https://kpopping.com/documents/47/0/750/Jeno-fullBodyPicture(9).webp?v=8cd6b', 'kr', 'v7pht6kv'),
('b3058a2178', 'Haechan\r\n', 'Lee Dong Hyuck\r\n', '2000-06-06', 57, 174, 1, 'https://kpopping.com/documents/ec/2/750/Haechan-fullBodyPicture(11).webp?v=8cd6b', 'kr', 'v7pht6kv'),
('b34394a478', 'Jaemin\r\n', 'Na Jae Min\r\n', '2000-08-13', 60, 175, 1, 'https://kpopping.com/documents/9c/2/750/Jaemin-fullBodyPicture(14).webp?v=88699', 'kr', 'v7pht6kv'),
('b37f2f8c78', 'YangYang\r\n', 'Liu YangYang\r\n', '2000-10-10', 57, 174, 1, 'https://kpopping.com/documents/2d/1/750/YangYang-fullBodyPicture(6).webp?v=8cd6b', 'cn', 'v7pht6kv'),
('b3db1e3378', 'Chenle\r\n', 'Zhong Chen Le\r\n', '2001-11-22', 58, 179, 1, 'https://kpopping.com/documents/f0/1/750/Chenle-fullBodyPicture(9).webp?v=8cd6b', 'cn', 'v7pht6kv'),
('b3e1fd3478', 'Jisoo\r\n', 'Kim Ji Soo\r\n', '1995-01-03', 46, 162, 0, 'https://kpopping.com/documents/36/4/800/BLACKPINK-Born-Pink-Album-Scans-documents-21.jpeg?v=4c692', 'kr', 'f36uo73q'),
('b4390c8278', 'Jisung\r\n', 'Park Ji Sung\r\n', '2002-02-05', 50, 180, 1, 'https://kpopping.com/documents/e5/4/750/Jisung-fullBodyPicture(11).webp?v=88699', 'kr', 'v7pht6kv'),
('b728a5b778', 'Jennie\r\n', 'Kim Jennie\r\n', '1996-01-16', 49, 163, 0, 'https://kpopping.com/documents/b4/1/800/BLACKPINK-Born-Pink-Album-Scans-documents-20(3).jpeg?v=c1e53', 'au', 'f36uo73q'),
('bad18f5b78', 'Rosé\r\n', 'Park Chaeyoung\r\n', '1997-02-11', 48, 169, 0, 'https://kpopping.com/documents/36/4/800/BLACKPINK-Born-Pink-Album-Scans-documents-16(6).jpeg?v=8df08', 'au', 'f36uo73q'),
('bec84cb978', 'Lisa\r\n', 'Lalisa Manobal\r\n', '1997-03-27', 46, 167, 0, 'https://kpopping.com/documents/7d/1/800/BLACKPINK-Born-Pink-Album-Scans-documents-5(6).jpeg?v=f359d', 'th', 'f36uo73q'),
('behe1re3lg', 'Eunha', 'Jung Eun Bi', '1997-05-30', 44, 163, 0, 'https://kpopping.com/documents/5d/1/800/80216536_084.jpeg', 'kr', 't8er65pf'),
('c5fu1meeqm', 'Yerin', 'Jung Ye-rin', '1996-08-19', 49, 167, 0, 'https://kpopping.com/documents/0d/2/800/80216536_083.jpeg', 'kr', 't8er65pf'),
('c6af10f679', 'Heeseung\r\n', 'Lee Hee-seung\r\n', '2001-10-15', 64, 182, 1, 'https://kpopping.com/documents/78/0/750/Heeseung-fullBodyPicture(6).webp?v=30845', 'kr', 'a291a309'),
('c77ac35979', 'Jay\r\n', 'Park Jong Seong\r\n', '2002-04-20', 60, 178, 1, 'https://kpopping.com/documents/e1/5/750/Jay-fullBodyPicture(16).webp?v=30845', 'us', 'a291a309'),
('c8c7f2c179', 'Jake\r\n', 'Sim Jaeyun\r\n', '2002-11-15', 0, 177, 1, 'https://kpopping.com/documents/de/1/750/Jake-fullBodyPicture(7).webp?v=30845', 'au', 'a291a309'),
('c984aabd79', 'Sunghoon\r\n', 'Park Sung Hoon\r\n', '2002-12-08', 0, 180, 1, 'https://kpopping.com/documents/36/4/750/Sunghoon-fullBodyPicture(10).webp?v=30845', 'kr', 'a291a309'),
('cb323c9779', 'Sunoo\r\n', 'Kim Sun Woo\r\n', '2003-06-24', 0, 175, 1, 'https://kpopping.com/documents/0a/4/750/Sunoo-fullBodyPicture(6).webp?v=30845', 'kr', 'a291a309'),
('cc05535478', 'Leeteuk\r\n', 'Park Jung Soo\r\n', '1983-07-01', 61, 174, 1, 'https://kpopping.com/documents/83/0/750/Leeteuk-fullBodyPicture(3).webp?v=30845', 'kr', 'aa2a7dc1'),
('cc6b9e1f78', 'Heechul\r\n', 'Kim Hee Сhul\r\n', '1983-07-10', 67, 178, 1, 'https://kpopping.com/documents/ba/1/750/Heechul-fullBodyPicture(2).webp?v=30845', 'kr', 'aa2a7dc1'),
('ccaac8ef78', 'Yesung\r\n', 'Kim Kang Hoon\r\n', '1984-08-24', 63, 177, 1, 'https://kpopping.com/documents/1e/2/750/Yesung-fullBodyPicture(2).webp?v=30845', 'kr', 'aa2a7dc1'),
('cce0d0b879', 'Jungwon\r\n', 'Yang Jung Won\r\n', '2004-02-09', 56, 175, 1, 'https://kpopping.com/documents/c0/4/750/Jungwon-fullBodyPicture(6).webp?v=30845', 'kr', 'a291a309'),
('cdb6cca279', 'NI-KI\r\n', 'Nishimura Riki\r\n', '2005-12-09', 60, 183, 1, 'https://kpopping.com/documents/e1/2/750/NI-KI-fullBodyPicture(6).webp?v=30845', 'jp', 'a291a309'),
('cf38891178', 'Shindong\r\n', 'Shin Dong Hee\r\n', '1985-09-28', 79, 178, 1, 'https://kpopping.com/documents/c3/4/750/Shindong-fullBodyPicture(2).webp?v=30845', 'kr', 'aa2a7dc1'),
('cf6f30d478', 'Sungmin\r\n', 'Lee Sung Min\r\n', '1986-01-01', 57, 175, 1, 'https://kpopping.com/documents/8b/3/750/Sungmin-fullBodyPicture(1).webp?v=2d756', 'kr', 'aa2a7dc1'),
('cfaa45b778', 'Eunhyuk\r\n', 'Lee Hyuk Jae\r\n', '1986-04-04', 61, 175, 1, 'https://kpopping.com/documents/46/3/750/Eunhyuk-fullBodyPicture(3).webp?v=30845', 'kr', 'aa2a7dc1'),
('cfe189b178', 'Siwon\r\n', 'Choi Si Won\r\n', '1986-04-07', 63, 183, 1, 'https://kpopping.com/documents/8e/0/750/Siwon-fullBodyPicture(3).webp?v=30845', 'kr', 'aa2a7dc1'),
('clf3y73fsi', 'Sowon', 'Kim So-jung', '1995-12-07', 66, 172, 0, 'https://kpopping.com/documents/27/4/800/80216536_081.jpeg', 'kr', 't8er65pf'),
('d234404c78', 'Donghae\r\n', 'Lee Dong Hae\r\n', '1986-10-15', 70, 172, 1, 'https://kpopping.com/documents/4e/2/750/Donghae-fullBodyPicture(2).webp?v=30845', 'kr', 'aa2a7dc1'),
('d290b61f78', 'Ryeowook\r\n', 'Kim Ryeo Wook\r\n', '1987-06-21', 70, 170, 1, 'https://kpopping.com/documents/7f/2/750/Ryeowook-fullBodyPicture(4).webp?v=30845', 'kr', 'aa2a7dc1'),
('d537be8778', 'Kyuhyun\r\n', 'Cho Kyu Hyun\r\n', '1988-02-03', 68, 178, 1, 'https://kpopping.com/documents/9e/4/750/Kyuhyun-fullBodyPicture(3).webp?v=30845', 'kr', 'aa2a7dc1'),
('e72d20be79', 'Nayeon\r\n', 'Im Na-yeon\r\n', '1995-09-22', 48, 163, 0, 'https://kpopping.com/documents/03/4/800/TWICE-JAPAN-4th-Album-Celebrate-Scans-documents-2.jpeg?v=a1a68', 'kr', 'kuzwman8'),
('e7650ff579', 'Jeongyeon\r\n', 'Yoo Jeong-yeon\r\n', '1996-11-01', 50, 168, 0, 'https://kpopping.com/documents/d1/4/800/TWICE-JAPAN-4th-Album-Celebrate-Scans-documents-10.jpeg?v=aded1', 'kr', 'kuzwman8'),
('e79db33579', 'Momo\r\n', 'Hirai Momo\r\n', '1996-11-09', 49, 163, 0, 'https://kpopping.com/documents/ea/1/800/TWICE-JAPAN-4th-Album-Celebrate-Scans-documents-9.jpeg?v=a1a68', 'jp', 'kuzwman8'),
('e7d8689c79', 'Sana\r\n', 'Sana Minatozaki\r\n', '1996-12-29', 47, 163, 0, 'https://kpopping.com/documents/5b/4/800/TWICE-JAPAN-4th-Album-Celebrate-Scans-documents-8.jpeg?v=6b68c', 'jp', 'kuzwman8'),
('e848919679', 'Mina\r\n', 'Mina Sharon Myoi\r\n', '1997-03-24', 45, 165, 0, 'https://kpopping.com/documents/8b/5/800/TWICE-JAPAN-4th-Album-Celebrate-Scans-documents-6.jpeg?v=aded1', 'jp', 'kuzwman8'),
('e87f8f1d79', 'Dahyun\r\n', 'Kim Da-hyun\r\n', '1998-05-28', 44, 161, 0, 'https://kpopping.com/documents/e5/1/800/TWICE-JAPAN-4th-Album-Celebrate-Scans-documents-4.jpeg?v=98bfb', 'kr', 'kuzwman8'),
('e8b5482179', 'Chaeyoung\r\n', 'Son Chae-young\r\n', '1999-04-23', 42, 159, 0, 'https://kpopping.com/documents/f0/5/800/TWICE-JAPAN-4th-Album-Celebrate-Scans-documents-5.jpeg?v=a1a68', 'kr', 'kuzwman8'),
('e8ec37ca79', 'Tzuyu\r\n', 'Chou Tzuyu\r\n', '1999-06-14', 51, 172, 0, 'https://kpopping.com/documents/ee/4/800/TWICE-JAPAN-4th-Album-Celebrate-Scans-documents-3.jpeg?v=98bfb', 'kr', 'kuzwman8'),
('enp0w1ccsk', 'Yoohyeon', 'Kim Yoo Hyeon', '1997-01-07', 49, 127, 0, 'https://kpopping.com/documents/8e/2/800/Dreamcatcher-Apocalypse-From-Us-Teaser-Photos-documents-3.jpeg', 'kr', '4dhl16q8'),
('f04920d278', 'Eunkwang\r\n', 'Seo Eun Kwang\r\n', '1990-11-22', 62, 170, 1, 'https://kpopping.com/documents/37/4/750/Eunkwang-fullBodyPicture(1).webp?v=e3772', 'kr', 'kmwpq1g8'),
('f08877c578', 'Minhyuk\r\n', 'Lee Min Hyuk\r\n', '1990-11-29', 61, 171, 1, 'https://kpopping.com/documents/93/1/750/Minhyuk-fullBodyPicture(15).webp?v=30845', 'kr', 'kmwpq1g8'),
('f0bc3f3e78', 'Changsub\r\n', 'Lee Chang Sub\r\n', '1991-02-26', 64, 178, 1, 'https://kpopping.com/documents/2f/4/750/Changsub-fullBodyPicture(2).webp?v=e3772', 'kr', 'kmwpq1g8'),
('f0ef2fde78', 'Hyunsik\r\n', 'Lim Hyun-sik\r\n', '1992-03-07', 66, 177, 1, 'https://kpopping.com/documents/79/4/750/Hyunsik-fullBodyPicture(6).webp?v=e3772', 'kr', 'kmwpq1g8'),
('f121dc2e78', 'Peniel\r\n', 'Shin Dong Geun\r\n', '1993-03-10', 77, 175, 1, 'https://kpopping.com/documents/44/3/750/Peniel-fullBodyPicture(1).webp?v=e3772', 'us', 'kmwpq1g8'),
('f15654dd78', 'Sungjae\r\n', 'Yook Sung Jae\r\n', '1995-05-02', 68, 180, 1, 'https://kpopping.com/documents/ab/4/750/Sungjae-fullBodyPicture(1).webp?v=e3772', 'kr', 'kmwpq1g8'),
('f3kvg2yabw', 'SuA', 'Kim Bo Ra', '1994-08-10', 42, 162, 0, 'https://kpopping.com/documents/44/1/800/Dreamcatcher-Apocalypse-From-Us-Teaser-Photos-documents-6.jpeg', 'kr', '4dhl16q8'),
('f6f7d0e079', 'Jeff Loomis', 'Jeff Loomis', '1971-09-14', 76, 180, 1, 'https://upload.wikimedia.org/wikipedia/commons/thumb/0/0a/VSpectrum-Arch_Enemy-Jeff_Loomis-0093_%28cropped%29.jpg/330px-VSpectrum-Arch_Enemy-Jeff_Loomis-0093_%28cropped%29.jpg', 'us', 'ork1ksca'),
('ffy5v7wnu1', 'Yuju', 'Choi Yu-na', '1997-10-04', 46, 169, 0, 'https://kpopping.com/documents/af/0/800/80216536_086.jpeg?v=6ca92', 'kr', 't8er65pf'),
('gx29y9f23h', 'Handong', 'Hang Dong', '1996-03-26', 46, 165, 0, 'https://kpopping.com/documents/9e/1/800/Dreamcatcher-Apocalypse-From-Us-Teaser-Photos-documents-4.jpeg', 'cn', '4dhl16q8'),
('k59oa0zizq', 'Gahyeon', 'Lee Ga Hyeon', '1999-02-03', 45, 160, 0, 'https://kpopping.com/documents/44/3/800/Dreamcatcher-Apocalypse-From-Us-Teaser-Photos-documents-1.jpeg', 'kr', '4dhl16q8'),
('qxen7rv6mq', 'Alissa White‐Gluz', 'Alissa White‐Gluz', '1985-07-31', 59, 168, 0, 'https://hardforce.com/img/uploads/Posts/2022/08/1200804-59888i57262.jpg', 'us', 'ork1ksca'),
('seloq4lk14', 'Eunbi', 'Kwon Eunbi', '1995-09-27', 46, 158, 0, 'https://kpopping.com/documents/c4/0/800/20067467_031.jpeg?v=6ca92', 'kr', 'h3007jhw'),
('whl23c5nyq', 'Umji', 'Kim Ye Won', '1998-08-19', 48, 165, 0, 'https://kpopping.com/documents/6d/0/800/80216536_085.jpeg', 'kr', 't8er65pf'),
('y2cyfwmqhq', 'Sakura', 'Miyawaki Sakura', '1998-05-19', 42, 163, 0, 'https://kpopping.com/documents/3e/3/800/20067467_034.jpeg', 'jp', 'h3007jhw'),
('y8ooyp7wy7', 'Sin B', 'Hwang Eun-bi', '1998-06-03', 47, 166, 0, 'https://kpopping.com/documents/bf/3/800/80216536_082.jpeg', 'kr', 't8er65pf'),
('yhqqjnczul', 'Hyewon', 'Kang Hyewon', '1999-07-05', 43, 163, 0, 'https://kpopping.com/documents/2e/1/800/20067467_030.jpeg', 'kr', 'h3007jhw'),
('yosx2f8ptb', 'Lee Chae Yeon', 'Lee Chae Yeon', '2000-01-11', 47, 167, 0, 'https://kpopping.com/documents/47/0/800/20067467_037.jpeg', 'kr', 'h3007jhw'),
('z5ja75wi0f', 'Siyeon', 'Lee Si Yeon', '1995-10-01', 49, 166, 0, 'https://kpopping.com/documents/0c/5/800/Dreamcatcher-Apocalypse-From-Us-Teaser-Photos-documents-5.jpeg', 'kr', '4dhl16q8');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id_news` char(15) NOT NULL DEFAULT substr(replace(convert(uuid() using utf8mb4),'-',''),1,15),
  `news_title` varchar(300) NOT NULL,
  `news_content` text NOT NULL,
  `news_date` date NOT NULL DEFAULT cast(current_timestamp() as date),
  `id_group` char(8) NOT NULL,
  `email` varchar(50) NOT NULL,
  `news_cover` varchar(25) NOT NULL DEFAULT 'default.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id_news`, `news_title`, `news_content`, `news_date`, `id_group`, `email`, `news_cover`) VALUES
('098d09a3884111e', 'BTS Makin di Atas Awan Usai Klarifikasi Soal Kepemilikan Saham, Netizen Sindir Agensi yang Dibeli HYBE', '<p><a href=\"https://www.kpopchart.net/tag/bts\">BTS</a> semakin di atas awan usai klarifikasi <a href=\"https://www.kpopchart.net/tag/hybe\">HYBE</a> soal kepemilikan <a href=\"https://www.kpopchart.net/tag/saham\">saham</a> tuai komentar <a href=\"https://www.kpopchart.net/tag/netizen\"><i>netizen</i></a><i>.</i></p><p>Banyak <i>netizen </i>yang memberikan komentar mereka terkait kepemilikan saham BTS di HYBE.</p><p>&nbsp;</p><p><i>Netizen </i>pun turut beri sindiran pada agensi di bawah HYBE setelah status kepemilikan saham para&nbsp;<i>member</i> BTS di label tersebut.</p><p>&nbsp;</p><p>Baru-baru ini, para <i>netizen </i>dihebohkan dengan berita bahwa ketujuh <i>member</i> BTS telah berhak menyuarakan pendapat mereka sendiri untuk kelangsungan label HYBE.</p><p>&nbsp;</p><p>Jika biasanya suara BTS diwakili oleh Bang Si Hyuk, kali ini berbeda.</p><p>Hal itu karena hubungan khusus antara ketujuh <i>member</i> BTS dan Bang Si Hyuk telah diselesaikan.</p><p>&nbsp;</p><p>Dikutip dari laporan Yonhap, HYBE mengatakan,&nbsp;</p><blockquote><p>“Para anggota tidak menjual saham mereka, dan karena&nbsp; kontrak antara Bang Si-hyuk dan BTS sebagai pemegang saham telah berakhir.”</p><p>“Hak Istimewa BTS (suara pemegang saham) yang biasanya diwakili oleh Bang Si-hyuk, tidak bisa diwakili lagi,” tutur perwakilan HYBE.</p><p>“Oleh karena itu, ketujuh anggota BTS diharapkan dapat menggunakan hak suara Hybe sesuai dengan saham yang mereka miliki di masa depan,” tutupnya.</p></blockquote><p>&nbsp;</p><p>Dengan kata lain, BTS berhak memberikan suara mereka untuk keputusan-keputusan pada label HYBE di masa mendatang.</p><p>Berita tersebut pun langsung menyebar di kalangan <i>netizen </i>dengan cepat.</p>', '2023-11-21', '2woi7puv', 'jakasembung@gmail.com', '098d09a3884111e.webp'),
('251cdff1883b11e', 'Grup BLACKPINK Lanjut Kontrak dengan YG Entertainment tapi Tidak dengan Member?', '<p>Grup K-Pop, <a href=\"https://www.pramborsfm.com/tag/blackpink\">BLACKPINK</a> resmi memperbarui status kontrak grup dengan <a href=\"https://www.pramborsfm.com/tag/yg-entertainment\">YG Entertainment</a> secara kolektif. Berita ini beredar sejak dilaporkan oleh beberapa media asal Korea Selatan pada hari Senin (20/11/2023) lalu.</p><p>Kontrak grup BLACKPINK sudah jadi pembicaraan hangat sejak masa periode kontraknya habis di Agustus 2023 lalu dan negosiasi sempat dikabarkan berjalan dengan sengit.</p><p>Di samping itu, keempat member BLACKPINK yakni Jisoo, Jennie, Rose dan Lisa dikabarkan akan berada di agensi yang berbeda ke depannya. Jadi, grup BLACKPINK akan tetap lanjut di bawah agensi YG Entertainment sementara itu para member kemungkinan akan menandatangani kontrak baru dengan agensi lain.</p><p><img src=\"https://studio.mrngroup.co/storage/app/media/Prambors/Editorial 2/YG ENTERTAINMENT-20230503175311.webp\" alt=\"YG ENTERTAINMENT\" width=\"728\" height=\"455\"></p><p>Daftar idol YG Entertainment (YG ENTERTAINMENT)</p><p>&nbsp;</p><p>Munhwa Ilbo (Culture Daily) melaporkan informasi eksklusif bahwa keempat member BLACKPINK tidak akan memperbarui kontrak eksklusif mereka dengan agensi lamanya secara individu. Namun, kabar menambahkan bahwa dua member telah menandatangani perpanjangan kontrak baru di YG Entertainment.</p><p>&nbsp;</p><p>Dari spekulasi yang beredar, salah satu member yang masih akan di bawah agensi YG Entertainment adalah Rose yang sudah lebih dulu menandatangani kontrak.</p><p>BLACKPINK sendiri debut pada Agustus 2016 dengan kontrak yang berakhir di 2023. BLACKPINK telah berdiskusi dengan YG mengenai pembaruan kontrak mereka. Negosiasi ini dimulai pada bulan Agustus tahun ini yang akhirnya berhasil terungkap hasilnya saat ini.</p><p>Sebelum ada kabar BLACKPINK resmi melanjutkan kontrak dengan YG Entertainment, saham dari perusahaan di bidang industri musik ini sempat jatuh di bulan September ke Oktober 2023 lalu sebesar 13,28 persen melansir laporan CNBC.&nbsp;</p><p>Kini, dilansir dari <a href=\"https://variety.com/2023/music/news/blackpink-contract-renewal-talks-yg-entertainment-1235801518/\">Variety</a>, saham YG Entertainment yang terdaftar di KOSDAQ, naik sebesar 3 persen pada Senin pagi. Namun perusahaan mengeluarkan pernyataan pers yang mengatakan bahwa belum ada konfirmasi langsung dan sedang dalam tahap pembicaraan yang masih berlangsung.</p>', '2023-11-21', 'f36uo73q', 'imjisooimok@email.com', 'default.png'),
('3a201f42890b11e', 'BLACKPINK Ikut Rombongan Presiden Korsel ke Buckingham Palace', '&lt;p&gt;Presiden Korea Selatan Yoon Suk Yeol bersama istrinya, Kim Keon Hee, mengunjungi Buckingham Palace di London, Inggris, pada Selasa (21/11/2023) malam waktu setempat. Dalam kunjungan kenegaraan tersebut, BLACKPINK turut hadir.&lt;br&gt;&lt;br&gt;Jennie, Jisoo, Lisa, dan Ros&eacute; tampil cantik dan anggun dalam kunjungan pertama mereka ke Buckingham Palace. Ros&eacute; dan Jisoo kompak mengenakan gaun berwarna hitam, sementara Jennie memilih menggunakan dress putih panjang. Lisa tampil dengan dress berwarna koral yang berkilauan.&lt;br&gt;&lt;br&gt;BLACKPINK jadi empat di antara 170 tamu undangan yang hadir di Buckingham Palace malam itu. Mereka disambut secara istimewa oleh Raja Charles III hingga disebut dalam pidato sambutan sang Raja.&lt;br&gt;&amp;nbsp;&lt;/p&gt;&lt;blockquote&gt;&lt;p&gt;&lt;br&gt;&quot;Melihat generasi muda Korea (Selatan) menerima usaha pelestarian lingkungan hidup. Aku memberikan penghargaan buat Jennie, Jisoo, Lisa, dan Ros&eacute;, yang dikenal sebagai grup BLACKPINK, atas peran mereka membawa pesan pelestarian tersebut ke audiens global sebagai duta dari COP26 President Inggris dan duta PBB untuk pembangunan berkelanjutan,&quot; kata Raja Charles III.&lt;/p&gt;&lt;/blockquote&gt;&lt;p&gt;&lt;br&gt;BLACKPINK Hadiri Undangan di Istana BuckinghamBLACKPINK Hadiri Undangan di Istana Buckingham Foto: Instagram: @theroyalfamily&lt;br&gt;&lt;br&gt;&lt;br&gt;COP26 President atau Climate Change Conference of the Parties, merupakan konferensi yang digelar PBB berfokus pada perubahan iklim. COP26 digelar di Glasgow, Inggris, pada tahun 2021.&lt;br&gt;&lt;br&gt;Ketika Raja Charles III menyampaikan pidatonya, BLACKPINK duduk di kursi dan meja terpisah. Saat nama mereka disebut, para member tampak saling mencari satu sama lain dan tersenyum bangga. Demikian seperti dilihat dalam potongan video tayangan Sky News pada Rabu (22/11/2023).&lt;br&gt;&lt;br&gt;Kunjungan BLACKPINK ke Buckingham Palace ini menjadi salah satu momen bersejarah lain dalam karier grup tersebut. Di tengah kabar kontrak mereka yang masih belum jelas dengan manajemen YG Entertainment, BLACKPINK terus memberikan kejutan buat para penggemar di dunia.&lt;br&gt;&lt;br&gt;Sebelumnya BLACKPINK menjadi girlband Korea pertama yang menjadi headliner di festival BST Hyde Park. Rekor yang sama mereka ciptakan saat tampil di Coachella beberapa waktu lalu.&lt;/p&gt;', '2023-11-22', 'f36uo73q', 'imjisooimok@email.com', '3a201f42890b11e.jpeg'),
('44be5e3a890f11e', 'Yuju takes you behind the scenes of &#039;DALALA&#039; MV', '&lt;figure class=&quot;media&quot;&gt;&lt;oembed url=&quot;https://www.youtube.com/embed/l9X5OwUkTcA&quot;&gt;&lt;/oembed&gt;&lt;/figure&gt;&lt;p&gt;&lt;a href=&quot;https://www.allkpop.com/artisttag/yuju&quot;&gt;Yuju&lt;/a&gt; has revealed a behind-the-scenes look at her &lt;a href=&quot;https://www.allkpop.com/video/2023/09/yuju-takes-the-elevator-to-her-own-world-in-dalala-mv&quot;&gt;music video for &quot;&lt;strong&gt;DALALA&lt;/strong&gt;&quot;&lt;/a&gt;.&lt;br&gt;&lt;br&gt;In the making-of video, Yuju talks about her concept and filming, and fans get to see previously unseen footage of the singer on set.&amp;nbsp;&quot;DALALA&quot; is the former &lt;strong&gt;GFriend&lt;/strong&gt; member&#039;s newest digital single, and it&#039;s the first song that she&#039;s taken on as the main composer and sole lyricist. The song was inspired from the liberating sensation Yuju had as she watched people with earphones passing on the streets.&lt;br&gt;&lt;br&gt;Watch Yuju&#039;s &quot;DALALA&quot; MV making-of above, and make sure to turn on the English captions.&lt;/p&gt;', '2023-11-22', 't8er65pf', 'raniafaharani@gmail.com', 'default.png'),
('8df15833883711e', 'Ibu Negara AS Jill Biden Kenalkan Rose Blackpink di Asia Pacific Economic Leaders Week', '<p>Ibu Negara Amerika Serikat, Jill Biden memperkenal <a href=\"https://www.tempo.co/tag/rose-blackpink\"><strong>Rose BLACKPINK </strong></a>di forum internasional, Asia Pasific Economic Leaders Week. \"Merupakan suatu kehormatan bisa memperkenalkan seorang perempuan muda dengan bakat dan keberanian yang luar biasa, seorang superstar global yang menggunakan <i>platform</i>-nya sebagai kekuatan untuk kebaikan di dunia,\" ujar first lady tersebut pada Jumat, 17 November 2023.</p><p>Dalam diskusi yang membahas seputar isu kesadaran mental dari rangkaian acara yang diselenggarakan oleh <a href=\"https://www.tempo.co/tag/jill-biden\">Jill Biden </a>untuk para pasangan pemimpin Asia-Pasifik di California, Rose mengungkapkan pendapatnya soal kesehatan mental. Superstar K-pop itu mengatakan pentingnya memahami bahwa orang-orang terkenal juga berjuang dengan masalah emosional.</p><h2>Rose BLACKPINK Bicara Soal Kesehatan Mental</h2><p>\"Saya pikir itu akan sangat bagus, untuk semua orang yang bekerja di bawah sorotan publik,\" kata Rose BLACKPINK sambil duduk di sofa abu-abu di kampus Apple Park, Cupertino setelah memeluk Ibu Negara yang berterima kasih atas kedatangannya.</p><p>Rose, salah satu anggota dari idol group <a href=\"https://www.tempo.co/tag/blackpink\">BLACKPINK </a>mengatakan, memiliki banyak pengikut di media sosial membuatnya merasa rentan, terutama ketika orang-orang bersikap kritis. \"Saya merasa bahwa beberapa hal yang saya lakukan tidak pernah cukup dan tidak peduli seberapa keras saya mengerjakan sesuatu, akan selalu ada orang yang memiliki pendapat sendiri atau yang senang mengendalikan narasi,\" katanya.</p><p>Menurut Rose, hal tersebut justru membuatnya merasa kesepian. Meski begitu, ia mengatakan bahwa penting untuk membicarakan hal-hal seperti itu, sesulit apapun. \"Sama seperti memberi makan diri kita sendiri untuk kesehatan dan kebugaran yang lebih baik, kesehatan mental hanya bisa dipertahankan dengan cara yang sama, seperti kesehatan fisik kita.\" tutur Rose agar semua orang mementingkan kesehatan mental.</p><h2>Tanggapan Ibu Negara Amerika Serikat</h2><p>Sebagai tuan rumah, istri orang nomor satu di Amerika Serikat itu membalas pernyataan Rose. \"Orang-orang yang lebih tua seperti kami tidak pernah berbicara tentang kesehatan mental. Ada rasa malu yang melekat padanya. Namun, yang saya temukan sebagai seorang guru dan memiliki cucu yang berusia dua puluhan, saya pikir mereka jauh lebih terbuka untuk berbicara satu sama lain, saya pikir rasa malu mereka jauh lebih sedikit,\" kata Jill Biden.</p><p>&nbsp;</p><p>Acara ini dimoderatori oleh Ahli Bedah Umum Vivek Murthy. CEO Apple, Tim Cook, juga turut membuka acara tersebut, namun sempat terdiam sejenak saat teleprompternya mati. Selain itu, Kim Keon Hee, Ibu Negara Korea Selatan, Rachael Marape, pasangan Perdana Menteri Papua Nugini, dan Louise Araneta-Marcos, Ibu Negara Filipina, juga turut hadir dalam forum internasional tersebut.</p>', '2023-11-21', 'f36uo73q', 'imjisooimok@email.com', '8df15833883711e.webp'),
('9e146841884011e', 'Dreamcatcher Buat Netizen Salut Dengan Kesetiaan Para Anggota Meski Salah Satu dari China: Grup Paling Kuat! ', '<p>Dreamcatcher jadi girl group generasi ketiga dengan anggota yang masih utuh meski salah satu dari China (Instagram @hf_dreamcatcher)</p><p>&nbsp;</p><p><i>Girl group</i> generasi ketiga <a href=\"https://www.kpopchart.net/tag/dreamcatcher\">Dreamcatcher</a> telah menarik perhatian <i>netizen</i> karena kesetiaan para anggotanya.</p><p>Kesetiaan para anggota ini membuat <i>netizen</i> salut sebab belum ada anggota yang meninggalkan grup meski telah lama berada di dunia entertainment.</p><p>&nbsp;</p><p>Dengan hal ini, banyak yang mengatakan bahwa Dreamcatcher menjadi salah satu grup terkuat di generasi ketiga dengan anggota yang masih lengkap.</p><p>&nbsp;</p><p>Dilansir dari Theqoo, seorang <i>netizen</i> membagikan sebuah artikel mengenai perjalanan grup Dreamcatcher.</p><p>&nbsp;</p><p>Dreamcatcher merupakan salah satu <i>girl group</i> generasi ketiga yang masih aktif dengan jumlah anggota yang lengkap.</p><p>Berawal dari 5 anggota debut dengan nama MINX dibawah naungan Happyface Entertainment pada tahun 2014.</p><p>&nbsp;</p><p>Kemudian MINX melakukan debut kembali dengan tambahan 2 anggota dengan nama grup Dreamcatcher pada tahun 2017.</p><p>&nbsp;</p><p><img src=\"https://static.promediateknologi.id/crop/0x0:0x0/750x0/webp/photo/2023/07/05/dreamcatcher-grup-generasi-ketiga-yang-masih-utuh-2-3745624715.jpeg\" alt=\"Dreamcatcher\" width=\"750\" height=\"500\"></p><p>Dreamcatcher (Instagram @hf_dreamcatcher)</p><p>&nbsp;</p><p>Yang dimana Dreamcatcher saat ini memiliki 7 anggota yakni JiU, SuA, Siyeon, Handong, Yoohyeon, Dami, dan Gahyeon.</p><p>Dengan debut ulangnya pada tahun 2017 dengan jumlah 7 anggota ini, Dreamcatcher masih tetap bersama dengan anggota lengkap meski memiliki anggota China yakni Handong.</p><p>&nbsp;</p><p>Seperti yang diketahui, setiap grup yang memiliki anggota China mereka tidak akan bertahan lama itupun tergantung perlakuan agensi kepada mereka.</p><p>&nbsp;</p><p>&nbsp;</p><p>Namun, Dreamcather buat salut netizen atas kesetiaan dan kepercayaan ke-7 anggota dengan agensi mereka, meski agensi mereka bukan kalangan agensi besar.</p><p>Bahkan baru-baru ini, Dreamcatcher melakukan comeback dengan lagu utama \"BONVOYAGE\" yang dirilis pada 24 Mei.</p><p>&nbsp;</p><p>Melihat hal ini netizen membagikan komentar mereka mengenai kesetiaan para anggota Dreamcatcher yang masih utuh meski dari agensi kecil.</p><p>\"Mereka merupakan grup yang kuat, mereka bisa bertahan selama itu dengan jumlah anggota yang lengkap\"</p><p>\"Bahkan mereka selalu menyuguhkan konsep yang berbeda\"</p><p>&nbsp;</p><p>\"Lagu-lagu mereka sangat bagus...Aku suka itu\"</p><p>\"Biasanya dari agensi kecil, mereka tidak akan bertahan lama, tapi Dreamcatcher luar biasa\"</p><p>\"Agensinya memperlakukan mereka dengan sangat baik, sehingga mereka sangat mempercayainya\"</p><p>\"Itu berarti mereka mendapatkan pelayaan yang baik dari agensinya\"</p><p>\"Dreamcatcher generasi ketiga dengan anggota yang masih utuh, kebanyakaan grup paling susah mempertahankan ini\"</p><p>Bagaimana menurut kalian?</p>', '2023-11-21', '4dhl16q8', 'jakasembung@gmail.com', '9e146841884011e.webp'),
('9f95816587c811e', 'Good News! Anggota GFRIEND Kembali Tegaskan Mereka Tidak Bubar dan Akan Lakukan Comeback, VIVIZ Sub Unit? ', '&lt;p&gt;Anggota &lt;a href=&quot;https://www.kpopchart.net/tag/gfriend&quot;&gt;GFRIEND&lt;/a&gt; kembali menegaskan bahwa mereka tidak bubar dan akan kembali&amp;nbsp;&lt;i&gt;comeback,&amp;nbsp;&lt;/i&gt;apakah&amp;nbsp;&lt;a href=&quot;https://www.kpopchart.net/tag/viviz&quot;&gt;VIVIZ&lt;/a&gt;&amp;nbsp;sub unit.&lt;/p&gt;&lt;p&gt;GFRIEND sendiri mempunyai enam member yang terdiri dari &lt;a href=&quot;https://www.kpopchart.net/tag/sowon&quot;&gt;Sowon&lt;/a&gt;, &lt;a href=&quot;https://www.kpopchart.net/tag/yerin&quot;&gt;Yerin&lt;/a&gt;, &lt;a href=&quot;https://www.kpopchart.net/tag/yuju&quot;&gt;Yuju&lt;/a&gt;, &lt;a href=&quot;https://www.kpopchart.net/tag/eunha&quot;&gt;Eunha&lt;/a&gt;, &lt;a href=&quot;https://www.kpopchart.net/tag/umji&quot;&gt;Umji&lt;/a&gt; dan &lt;a href=&quot;https://www.kpopchart.net/tag/sinb&quot;&gt;SinB&lt;/a&gt;.&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;Setelah dibubarkannya&amp;nbsp;GFRIEND, beberapa anggota ada yang mengejar akting, solo, hingga sub unit salah satunya&amp;nbsp;VIVIZ.&lt;/p&gt;&lt;p&gt;VIVIZ adalah anggota dari GFRIEND, Eunha, SinB, dan Umji yang saat ini berada dibawah naungan BPM Entertainment.&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;Yerin dan Yuju saat ini sedang bersolo karir sebagai penyanyi, kadang Yerin juga melakukan akting.&lt;/p&gt;&lt;p&gt;Yuju berada dibawah naungan Konnect Entertainment, dimana CEO nya adalah Kang Daniel eks WANNA ONE.&lt;/p&gt;&lt;p&gt;Yerin berada dibawah naungan aktris Sublime Entertainment, dan Sowon berada di Oui Entertainment yaitu agensi Wei.&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;https://static.promediateknologi.id/crop/0x0:0x0/750x0/webp/photo/2023/07/07/Picsart_23-07-07_15-20-41-464-1981793330.jpg&quot; alt=&quot;Yerin konfirmasi&quot; width=&quot;750&quot; height=&quot;500&quot;&gt;&lt;/p&gt;&lt;p&gt;Yerin konfirmasi (Twitter @flywithVIVIZ)&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;Melalui Twitter @flywithVIVIZ, dalam salah satu acara, Yerin menyatakan, kata bubar tidak tepat untuk menggambarkan GFRIEND saat ini.&lt;/p&gt;&lt;p&gt;Karena saat ini masing-masing anggota GFRIEND disebut hanya bekerja keras di tempat mereka masing-masing untuk saat ini dan akan kembali lagi nanti.&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;https://static.promediateknologi.id/crop/0x0:0x0/750x0/webp/photo/2023/07/07/Picsart_23-07-07_15-19-37-399-2479433705.jpg&quot; alt=&quot;Kata Yerin&quot; width=&quot;750&quot; height=&quot;500&quot;&gt;&lt;/p&gt;&lt;p&gt;Kata Yerin (Twitter @flywithVIVIZ)&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;Hal ini menjadikan anggota GFRIEND benar-benar membuatnya cukup jelas jika GFRIEND tidak bubar.&lt;/p&gt;', '2023-11-21', 't8er65pf', 'raniafaharani@gmail.com', 'default.png'),
('bc82f228883c11e', 'Lisa BLACKPINK Tolak Kontrak YG Entertainment Senilai Rp 578 Miliar?', '<p><a href=\"https://www.pramborsfm.com/tag/lisa-blackpink\">Lisa BLACKPINK</a> dikabarkan telah menolak tawaran untuk memperpanjang <a href=\"https://www.pramborsfm.com/tag/kontrak\">kontrak</a> di <a href=\"https://www.pramborsfm.com/tag/yg-entertainment\">YG Entertainment</a>. Tawaran kontrak tersebut katanya senilai puluhan juta dolar.</p><p>Di samping itu, media Korea Star News menuliskan laporan tentang negosiasi kontrak Lisa. Katanya, ia telah menerima beberapa tawaran kontrak dari label lain di berbagai negara dengan nilai yang tak kala fantastis.</p><p>\"Lisa diduga menolak tawaran pertama YG dan baru-baru ini menolak tawaran kedua. Besarnya kontrak dikabarkan bernilai 50 miliar Won (Rp 578 miliar lebih),\" tulis Star News dalam Koreaboo, Jumat (15/09/2023).</p><p>\"Ada rumor yang menyebutkan bahwa Lisa telah menerima tawaran dari label luar negeri, termasuk Thailand dengan nilai puluhan juta dolar,\" terang Star News lagi.</p><p><img src=\"https://studio.mrngroup.co/storage/app/media/Prambors/Editorial 3/Lisa BLACKPINK-20230915142839.webp\" alt=\"Lisa BLACKPINK\" width=\"1600\" height=\"1200\">Lisa BLACKPINK disebut menolak tawaran kontrak YG Entertainment senilai Rp 578 miliar (INSTAGRAM/lalalalisa_m)&nbsp;</p><p>Mengenai kabar perpanjangan kontrak Lisa BLACKPINK dan YG Entertainment disebut alot setelah sudah dua kali menolak tawaran perpanjangan kontrak dari agensi tersebut. Salah satu media Tiongkok juga sempat mengabarkan adanya kesulitan terkait perpanjangan kontrak antara idol dan agensinya ini.</p><p>Di samping itu, YG Entertainment membuka suara terkait rumor penolakan kontrak Lisa. \"Kami sedang mendiskusikan pembaruan kontrak Lisa. Rumor tersebut belum terkonfirmasi secara resmi,\" katanya, melansir dari Naver.</p><p>Perlu diketahui, kontrak dari BLACKPINK sendiri sudah selesai pada Agustus bertepatan dengan <i>anniversary&nbsp;</i>grup BLACKPINK yang ke-7 pada 2023 ini.</p><p>Sementara itu, BLACKPINK baru saja menjalankan tur <i>BORN PINK</i> yang telah dimulai sejak 2022. Lisa, Rose, Jennie, dan Jisoo juga akan mengakhiri perjalanannya dengan menggelar konser penutupan terakhir di Korea Selatan pada 16 dan 17 September mendatang.</p><p>Meski kontrak lanjutan para member terutama Lisa yang belum jelas, dalam laman Koreaboo, arah aktivitas BLACKPINK di masa depan diperkirakan akan diputuskan setelah YG Entertainment secara resmi mengumumkan status kontrak masing-masing anggota dengan perusahaan.</p><p>Kita tunggu kabar baiknya ya, Kawula Muda dan BLINKS!</p>', '2023-11-21', 'f36uo73q', 'jakasembung@gmail.com', 'bc82f228883c11e.webp'),
('e61078a8890911e', 'Lisa BLACKPINK Merayakan Pencapaian Lagu Money', '&lt;p&gt;Layanan streaming musik dan podcast, &lt;a href=&quot;https://www.jpnn.com/tag/spotify&quot;&gt;Spotify&lt;/a&gt; meluncurkan episode keempat dari &#039;Billions Club: The Series&#039;.&lt;/p&gt;&lt;p&gt;Adapun Billions Club merupakan sebuah serial digital yang menampilkan artis-artis favorit saat merayakan keberhasilan melampaui 1 miliar streaming di Spotify.&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;Pada episode keempat Billions Club: The Series, penggemar dapat menyaksikan &lt;a href=&quot;https://www.jpnn.com/tag/lisa-blackpink&quot;&gt;Lisa BLACKPINK&lt;/a&gt; merayakan pencapaian lagu Money yang berhasil menembus lebih dari 1 miliar streaming dalam sejarah Spotify.&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;Pada 18 September 2023, Money menjadi lagu pertamanya yang bergabung dalam Billions Club di Spotify.&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;Selain itu, Lisa BLACKPINK juga menjadi artis K-Pop perempuan pertama yang mencapainya.&lt;/p&gt;&lt;p&gt;Dalam episode tersebut, saat berada di Paris, dia meluangkan waktu sejenak untuk merayakan momen penting ini dengan memasak hidangan Thailand favoritnya, Khai Jiao, telur dadar udang yang menjadi makanan rumah khas di Thailand.&lt;/p&gt;&lt;p&gt;Lisa BLACKPINK juga mengenang kembali perjalanannya dengan Money dan membagikan reaksi saat pertama kali mendengarkan lagu tersebut.&lt;/p&gt;&lt;p&gt;&quot;Lagu ini dibuat untukku,&quot; kata Lisa BLACKPINK.&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;Adapun Money milik Lisa BLACKPINK telah ditambahkan ke lebih dari 14 juta playlist di Spotify.&lt;/p&gt;&lt;p&gt;Tidak hanya itu, 10 negara teratas yang mendengarkan lagu itu tersebar di empat benua, dengan Indonesia berada di posisi ketiga setelah Filipina dan Thailand.&lt;/p&gt;&lt;p&gt;&quot;Aku sangat senang bisa bergabung dengan Billions Club. Terima kasih banyak atas dukungan kalian terhadap &#039;Money&#039;, kalian yang telah membuat hal ini terjadi. Ini adalah sesuatu yang akan aku kenang sepanjang hidupku,&quot; beber Lisa.&lt;/p&gt;&lt;p&gt;Prestasi tersebut merupakan suatu kelanjutan yang luar biasa karena sebelumnya Lisa BLACKPINK telah menjadi bintang K-Pop solo pertama yang ditampilkan dalam daftar putar paling populer dan sangat berpengaruh di Spotify, Today&rsquo;s Top Hits, setelah single dirilis tahun lalu.&lt;/p&gt;', '2023-11-22', 'f36uo73q', 'imjisooimok@email.com', 'e61078a8890911e.webp');

-- --------------------------------------------------------

--
-- Table structure for table `songs`
--

CREATE TABLE `songs` (
  `id_song` char(11) NOT NULL DEFAULT substr(replace(convert(uuid() using utf8mb4),'-',''),1,11),
  `song_name` varchar(255) NOT NULL,
  `song_number` smallint(6) NOT NULL,
  `music_video` varchar(150) DEFAULT NULL,
  `id_album` char(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `songs`
--

INSERT INTO `songs` (`id_song`, `song_name`, `song_number`, `music_video`, `id_album`) VALUES
('x84srrd662f', 'Mago', 1, 'https://www.youtube.com/watch?v=LmBYPXGqtss', 'uervl6iy4a'),
('va5u9jzfmh8', 'Love Spell', 2, NULL, 'uervl6iy4a'),
('dr9pgwt68c3', ' Intro (Snowflake)', 1, NULL, 'kvvkq1ld1j'),
('bjyfky6ri9e', 'Rough', 2, 'https://www.youtube.com/watch?v=0VKcLPdY9lI', 'kvvkq1ld1j'),
('a0cwgo25cuf', 'Intro : From Us', 1, NULL, 'gl7rmjpbtp'),
('7fdqfpt3fvm', 'Bon Voyage', 2, 'https://www.youtube.com/watch?v=RPNaYj6etb8', 'gl7rmjpbtp'),
('2zmanofdbqc', 'IZ*ONE - Mis-en-Scène', 1, NULL, 'l0stepcjdb'),
('zd4dvl21axb', 'Panorama', 2, 'https://www.youtube.com/watch?v=G8GaQdW2wHc', 'l0stepcjdb'),
('klmno54321p', '서늘', 3, NULL, 'kvvkq1ld1j'),
('pqrst67890u', '짐살라빔 (Luv Star)', 4, NULL, 'kvvkq1ld1j'),
('vwxyz12345a', 'SAY MY NAME', 5, NULL, 'kvvkq1ld1j'),
('ab123cde456', '여자친구 (My Buddy)', 6, NULL, 'kvvkq1ld1j'),
('20aa6c4c757', 'I Can\'t Stop Me', 1, 'https://www.youtube.com/watch?v=CM4CkVFmTds', '3sxg1ra11b'),
('20aa7540757', 'Hell In Heaven', 2, NULL, '3sxg1ra11b'),
('20aa75b9757', 'Up No More', 3, NULL, '3sxg1ra11b'),
('20aa763d757', 'Do What We Like', 4, NULL, '3sxg1ra11b'),
('20aa7686757', 'Bring It Back', 5, NULL, '3sxg1ra11b'),
('20aa774d757', 'Believer', 6, NULL, '3sxg1ra11b'),
('20aa77e1757', 'Queen', 7, NULL, '3sxg1ra11b'),
('20aa7870757', 'Wannabe', 8, NULL, '3sxg1ra11b'),
('20aac743757', 'Handle It', 9, NULL, '3sxg1ra11b'),
('20aac83b757', 'Depend On You', 10, NULL, '3sxg1ra11b'),
('20aac8a2757', 'Say Something', 11, NULL, '3sxg1ra11b'),
('20aac903757', 'Behind the Mask', 12, NULL, '3sxg1ra11b'),
('fb7bb17c758', 'Intro', 1, NULL, 'fgtrwlrr64'),
('fb7bbaac758', 'Odd Eye', 2, 'https://www.youtube.com/watch?v=1QD0FeZyDtQ', 'fgtrwlrr64'),
('fb7bbb3d758', 'Wind Blows', 3, NULL, 'fgtrwlrr64'),
('fb7bbbc2758', 'Poison Love', 4, NULL, 'fgtrwlrr64'),
('fb7bbc00758', '4 Memory', 5, NULL, 'fgtrwlrr64'),
('fb7bbc36758', 'New Days', 6, NULL, 'fgtrwlrr64'),
('fb7bbc98758', 'Eclipse', 7, NULL, 'fgtrwlrr64'),
('144wxmq9xtv', '우리 사랑했잖아', 1, 'https://www.youtube.com/watch?v=nJ31sMmytHU', 'n8vtd7eyui'),
('f126023e75a', 'Eyes', 1, NULL, '5chrve1hw7'),
('f12616be75a', 'FIESTA', 2, 'https://www.youtube.com/watch?v=eDEFolvLn0A', '5chrve1hw7'),
('f126174275a', 'Dreamlike', 3, NULL, '5chrve1hw7'),
('f126179875a', 'AYAYAYA', 4, NULL, '5chrve1hw7'),
('f126182175a', 'So Curious', 5, NULL, '5chrve1hw7'),
('f12618a075a', 'Spaceship', 6, 'https://www.youtube.com/watch?v=xaWafVLlIZs', '5chrve1hw7'),
('f126192275a', 'Destiny', 7, NULL, '5chrve1hw7'),
('f126198275a', 'YOU & I', 8, NULL, '5chrve1hw7'),
('f12619de75a', 'Daydream', 9, NULL, '5chrve1hw7'),
('f1261add75a', 'Pink Blusher', 10, NULL, '5chrve1hw7'),
('f1261b5275a', 'Someday', 11, NULL, '5chrve1hw7'),
('f1261bad75a', 'Open Your Eyes', 12, NULL, '5chrve1hw7'),
('5191ca5278c', 'Intro : Chaotical X ', 1, NULL, '6b99e81078'),
('519209fc78c', 'VISION ', 2, 'https://www.youtube.com/watch?v=jKrJBVLnRiM&pp=ygUMZHJlYW1jYXRjaGVy', '6b99e81078'),
('5192349f78c', 'Fairytale ', 3, NULL, '6b99e81078'),
('519268d478c', 'Some Love ', 4, NULL, '6b99e81078'),
('51928e2178c', 'Rainy Day ', 5, NULL, '6b99e81078'),
('5192b03378c', 'Outro : Mother Nature ', 6, NULL, '6b99e81078'),
('c8f8cf6e78c', 'Intro ', 1, NULL, '8b79109678'),
('c8f909e278c', 'BOCA ', 2, 'https://www.youtube.com/watch?v=MZ4JGye4dQU&pp=ygUMZHJlYW1jYXRjaGVy', '8b79109678'),
('c8f9347e78c', 'Break The Wall ', 3, NULL, '8b79109678'),
('c8f958a978c', 'Can\'t get you out of my mind ', 4, NULL, '8b79109678'),
('c8f9783378c', 'Dear ', 5, NULL, '8b79109678'),
('c8f9971b78c', 'BOCA (Inst.) ', 6, NULL, '8b79109678'),
('9e25f1b578c', 'INSIDE-OUTSIDE (Intro)', 1, NULL, '52f0e55278'),
('9e2624f978c', 'You and I ', 2, 'https://www.youtube.com/watch?v=I5_BQAtwHws&pp=ygUMZHJlYW1jYXRjaGVy', '52f0e55278'),
('9e26425e78c', 'Mayday ', 3, NULL, '52f0e55278'),
('9e265da978c', 'Which a Star ', 4, NULL, '52f0e55278'),
('9e26763478c', 'Scar ', 5, NULL, '52f0e55278'),
('9e268f2178c', 'Dreamcatcher - You and I (Instrumental) ', 6, NULL, '52f0e55278'),
('5296f82678c', 'Over the Sky ', 1, 'https://www.youtube.com/watch?v=3F2nRTyVPGo', '34eac23a78'),
('529720c078c', 'Over the Sky (Inst.) ', 2, NULL, '34eac23a78'),
('2f71cac4793', 'Intro(\'Special Mini Album\'[Raid of Dream]) ', 1, NULL, '2a1ee10f78'),
('2f71f126793', 'Deja Vu ', 2, 'https://www.youtube.com/watch?v=W761DtH1oRg&pp=ygUMZHJlYW1jYXRjaGVy', '2a1ee10f78'),
('2f720ab5793', 'The curse of the Spider ', 3, NULL, '2a1ee10f78'),
('2f722378793', 'Silent Night ', 4, NULL, '2a1ee10f78'),
('2f723fc0793', 'Polaris ', 5, NULL, '2a1ee10f78'),
('2f22f162793', 'Intro : The Most Beautiful Moment In Life ', 1, NULL, '18e2828079'),
('2f24755a793', 'I Need U ', 2, 'https://www.youtube.com/watch?v=NMdTd9e-LEI&pp=ygUMaSBuZWVkIHUgYnRz', '18e2828079'),
('2f2499c4793', 'Hold Me Tight ', 3, NULL, '18e2828079'),
('2f24bba3793', 'Autumn Leaves ', 4, NULL, '18e2828079'),
('2f2519dc793', 'Run ', 5, 'https://www.youtube.com/watch?v=2WBwJD6hldA&pp=ygUHcnVuIGJ0cw%3D%3D', '18e2828079'),
('2f253d28793', 'Butterfly (Prologue Mix) ', 6, NULL, '18e2828079'),
('2f255f26793', 'Ma City ', 7, NULL, '18e2828079'),
('2f257ff5793', 'Silver Spoon ', 8, NULL, '18e2828079'),
('2f25a66f793', 'Dope ', 9, NULL, '18e2828079'),
('2f25c809793', 'Fire ', 10, NULL, '18e2828079'),
('2f25e9cb793', 'Save Me ', 11, NULL, '18e2828079'),
('2f260bfc793', 'Epilogue: Young Forever ', 12, NULL, '18e2828079'),
('619aaaed793', 'Intro: Singularity ', 1, NULL, 'b6089dd579'),
('619c272e793', 'Fake Love ', 2, 'https://www.youtube.com/watch?v=7C2z4GqqS5E&pp=ygUNYnRzIGZha2UgbG92ZQ%3D%3D', 'b6089dd579'),
('619c76cb793', 'Truth Untold ', 3, NULL, 'b6089dd579'),
('619c9157793', '134340 ', 4, NULL, 'b6089dd579'),
('619cab4b793', 'Paradise ', 5, NULL, 'b6089dd579'),
('619cc786793', 'Love Maze ', 6, NULL, 'b6089dd579'),
('619ce27d793', 'Magic Shop ', 7, NULL, 'b6089dd579'),
('619cfca0793', 'Airplane pt.2 ', 8, NULL, 'b6089dd579'),
('619d17f8793', 'Anpanman ', 9, NULL, 'b6089dd579'),
('619d3359793', 'So What ', 10, NULL, 'b6089dd579'),
('619d4e79793', 'Outro: Tear ', 11, NULL, 'b6089dd579'),
('f8cb80d7793', 'Before & After Intro ', 1, NULL, 'e250426d79'),
('f8cbb1dd793', 'Fly High ', 2, 'https://www.youtube.com/watch?v=39yeTdIuKJU', 'e250426d79'),
('f8cc0619793', 'Dreamcatcher - Wake up ', 3, NULL, 'e250426d79'),
('f8cc2629793', 'Dreamcatcher - Sleep-walking ', 4, NULL, 'e250426d79'),
('f8cc443e793', 'Dreamcatcher - Trust Me ', 5, NULL, 'e250426d79'),
('f8cc6198793', 'Dreamcatcher - Fly High (inst.) ', 6, NULL, 'e250426d79'),
('c5d4dac2793', 'Dumhdurum ', 1, 'https://www.youtube.com/watch?v=WqzTRK5GPWQ', 'bdaf7bdf79'),
('c5d505d2793', 'Yummy ', 2, NULL, 'bdaf7bdf79'),
('c5d525e4793', 'Be Myself ', 3, NULL, 'bdaf7bdf79'),
('c5d543e8793', 'Love is Blind ', 4, NULL, 'bdaf7bdf79'),
('c5d57692793', 'Overwrite ', 5, NULL, 'bdaf7bdf79'),
('c5d5915c793', 'Moment ', 6, NULL, 'bdaf7bdf79'),
('c5d5aedd793', 'Everybody Ready? ', 7, NULL, 'bdaf7bdf79'),
('0bec79a8794', 'I\'m So Sick ', 1, 'https://www.youtube.com/watch?v=F4oHuML9U2A', 'f0f5dc2a79'),
('0becba97794', 'Alright ', 2, NULL, 'f0f5dc2a79'),
('0becd8f1794', 'Don\'t Be Silly ', 3, NULL, 'f0f5dc2a79'),
('0becf614794', 'Forever Star ', 4, NULL, 'f0f5dc2a79'),
('0bed12c3794', 'Promise Me ', 5, NULL, 'f0f5dc2a79'),
('0bed2f59794', 'I Like That Kiss ', 6, NULL, 'f0f5dc2a79'),
('ef6d310b794', 'First Love (feat. EB) ', 1, 'https://www.youtube.com/watch?v=wMPnAcJTj_U&pp=ygUQdC1hcmEgZmlyc3QgbG92ZQ%3D%3D', 'd37b1aaa79'),
('ef6e9417794', 'First Love (Instr.) ', 2, NULL, 'd37b1aaa79'),
('8d055277794', 'Stray Kids ＜Clé 1 : MIROH＞ UNVEIL : TRACK \"Entrance\" ', 1, NULL, '3e54619079'),
('8d06c389794', 'MIROH ', 2, 'https://www.youtube.com/watch?v=Dab4EENTW5I', '3e54619079'),
('8d07127a794', 'Victory Song ', 3, 'https://www.youtube.com/watch?v=Fy3zu0WsTLM', '3e54619079'),
('8d073fa4794', 'Maze of Memories ', 4, 'https://www.youtube.com/watch?v=LdOT4dsbldQ', '3e54619079'),
('8d0760c7794', 'Boxer ', 5, NULL, '3e54619079'),
('8d077ca9794', 'Chronosaurus ', 6, 'https://www.youtube.com/watch?v=T1i9cvewUYU', '3e54619079'),
('8d079893794', '19 ', 7, 'https://www.youtube.com/watch?v=wfd6_PIZong', '3e54619079'),
('d334034d794', '토끼와 거북이 The Tortoise and the Hare ', 1, NULL, 'b74843a679'),
('d3358a58794', 'Back Door ', 2, 'https://www.youtube.com/watch?v=X-uJtV8ScYk', 'b74843a679'),
('d335ac21794', 'B Me ', 3, NULL, 'b74843a679'),
('d335d1bb794', 'Any ', 4, NULL, 'b74843a679'),
('d3361933794', 'Ex ', 5, NULL, 'b74843a679'),
('d3363748794', 'We Go (Bang Chan, Changbin, HAN) ', 6, NULL, 'b74843a679'),
('d33653f9794', 'Wow (Lee Know, Hyunjin, Felix) ', 7, NULL, 'b74843a679'),
('d3367107794', 'My Universe (Seungmin, I.N) [feat. Changbin] ', 8, NULL, 'b74843a679'),
('d33699c3794', 'God\'s Menu ', 9, 'https://www.youtube.com/watch?v=TQTlCHxyuu8', 'b74843a679'),
('d336bc75794', 'Easy ', 10, 'https://www.youtube.com/watch?v=XZSv3aMGg5Q', 'b74843a679'),
('d336dcaa794', 'Pacemaker ', 11, NULL, 'b74843a679'),
('d336f625794', 'Airplane ', 12, NULL, 'b74843a679'),
('d3370fe9794', 'Another Day ', 13, NULL, 'b74843a679'),
('d3372b3e794', 'Phobia ', 14, NULL, 'b74843a679'),
('d3374447794', 'Blueprint ', 15, NULL, 'b74843a679'),
('d3375cd1794', 'TA ', 16, NULL, 'b74843a679'),
('d3377b57794', 'Haven ', 17, NULL, 'b74843a679'),
('6e341c69794', 'One More Time (Otra Vez) ', 1, 'https://www.youtube.com/watch?v=7GqYSbc1tsM', '4baa03ff79'),
('6e358f08794', 'One More Time (Otra Vez) (SJ Version) ', 2, NULL, '4baa03ff79'),
('6e35d94a794', 'Super Junior - Animals ', 3, NULL, '4baa03ff79'),
('6e35f674794', 'Ahora Te Puedes Marchar ', 4, NULL, '4baa03ff79'),
('6e3610b3794', 'Lo Siento (Remix Version) ', 5, NULL, '4baa03ff79'),
('50cfe779794', 'Mr. Simple ', 1, 'https://www.youtube.com/watch?v=r6TwzSGYycM', '29b3800f79'),
('50d03fd8794', 'Opera ', 2, NULL, '29b3800f79'),
('50d066fa794', 'Be My Girl ', 3, NULL, '29b3800f79'),
('50d09038794', 'Walkin\' ', 4, NULL, '29b3800f79'),
('50d0b028794', 'Storm ', 5, NULL, '29b3800f79'),
('50d0d063794', 'Good Friends ', 6, NULL, '29b3800f79'),
('50d0ef66794', 'Feels Good ', 7, NULL, '29b3800f79'),
('50d113aa794', 'Memories ', 8, NULL, '29b3800f79'),
('50d133b4794', 'Sunflower ', 9, NULL, '29b3800f79'),
('50d15599794', 'White Christmas ', 10, NULL, '29b3800f79'),
('50d170cc794', 'Y ', 11, NULL, '29b3800f79'),
('50d18d7d794', 'My Love, My Kiss, My Heart ', 12, NULL, '29b3800f79'),
('50d1ac40794', 'Perfection ', 13, 'https://www.youtube.com/watch?v=KaWeiV65uGU', '29b3800f79'),
('50d1f1c4794', 'Superman ', 14, 'https://www.youtube.com/watch?v=IdFeKj798hU', '29b3800f79'),
('6944e04b794', 'SORRY, SORRY ', 1, 'https://www.youtube.com/watch?v=x6QA3m58DQw', '44b9937579'),
('69464d06794', 'Why I Like You ', 2, NULL, '44b9937579'),
('69466d5a794', 'Let\'s Not... ', 3, NULL, '44b9937579'),
('694691e0794', 'Angela ', 4, NULL, '44b9937579'),
('6946ac63794', 'Reset ', 5, NULL, '44b9937579'),
('6946c5dd794', 'Monster ', 6, NULL, '44b9937579'),
('6946df26794', 'What If ', 7, NULL, '44b9937579'),
('6946f995794', 'Heartquake ', 8, NULL, '44b9937579'),
('69471547794', 'Club No. 1 ', 9, NULL, '44b9937579'),
('69473527794', 'Happy Together ', 10, NULL, '44b9937579'),
('69474ee7794', 'Dead At Heart ', 11, NULL, '44b9937579'),
('69476df9794', 'Shining Star ', 12, NULL, '44b9937579'),
('c2b297ac794', 'Bonamana ', 1, 'https://www.youtube.com/watch?v=tSOSxwEWFA4', 'f6d8fc2079'),
('c2b2d68a794', 'Boom Boom ', 2, NULL, 'f6d8fc2079'),
('c2b2f37d794', 'Coagulation ', 3, NULL, 'f6d8fc2079'),
('c2b311de794', 'Your Eyes ', 4, NULL, 'f6d8fc2079'),
('c2b334de794', 'My Only Girl ', 5, NULL, 'f6d8fc2079'),
('c2b35489794', 'My All Is In You ', 6, NULL, 'f6d8fc2079'),
('c2b39665794', 'Shake It Up! ', 7, NULL, 'f6d8fc2079'),
('c2b3b049794', 'In My Dream ', 8, NULL, 'f6d8fc2079'),
('c2b3c918794', 'One Fine Spring Day ', 9, NULL, 'f6d8fc2079'),
('c2b3e281794', 'Good Person ', 10, NULL, 'f6d8fc2079'),
('c2b3fcb7794', 'Here We Go ', 11, NULL, 'f6d8fc2079'),
('f7e6040e794', 'Lo Siento ', 1, 'https://www.youtube.com/watch?v=ZbB4SYJNuTo', 'c329d20b79'),
('f7e799cf794', 'SUPER JUNIOR - Black Suit ', 2, 'https://www.youtube.com/watch?v=MvqB6JsRbsc', 'c329d20b79'),
('f7e7beaa794', 'SUPER JUNIOR - Scene Stealer ', 3, NULL, 'c329d20b79'),
('f7e7db95794', 'SUPER JUNIOR - Me & U ', 4, NULL, 'c329d20b79'),
('f7e7f8b1794', 'SUPER JUNIOR - One More Chance ', 5, NULL, 'c329d20b79'),
('f7e81111794', 'SUPER JUNIOR - Good Day for a Good Day ', 6, NULL, 'c329d20b79'),
('f7e82854794', 'SUPER JUNIOR - Runaway ', 7, NULL, 'c329d20b79'),
('f7e84c5f794', 'Super Duper ', 8, NULL, 'c329d20b79'),
('f7e86551794', 'SUPER JUNIOR - The Lucky Ones ', 9, NULL, 'c329d20b79'),
('f7e87c06794', 'SUPER JUNIOR - Girlfriend ', 10, NULL, 'c329d20b79'),
('f7e8938f794', 'SUPER JUNIOR - Hug ', 11, NULL, 'c329d20b79'),
('f7e8ab0f794', 'SUPER JUNIOR - Spin Up! ', 12, NULL, 'c329d20b79'),
('f7e8c3f3794', 'SUPER JUNIOR - Too Late ', 13, NULL, 'c329d20b79'),
('f7e8dbf9794', 'SUPER JUNIOR - I do ', 14, NULL, 'c329d20b79'),
('f7e8f3f5794', 'SUPER JUNIOR - Lo Siento ', 15, NULL, 'c329d20b79'),
('7a172354795', 'Hoot ', 1, 'https://www.youtube.com/watch?v=F4-SxcCO5d0', '22fd54db79'),
('7a18ad95795', 'Mistake ', 2, NULL, '22fd54db79'),
('7a18d249795', 'My Best Friend ', 3, NULL, '22fd54db79'),
('7a18f52f795', 'Wake Up ', 4, NULL, '22fd54db79'),
('7a1914be795', 'Snowy Wish ', 5, NULL, '22fd54db79'),
('b40f283f795', 'Into The New World ', 1, 'https://www.youtube.com/watch?v=0k2Zzkw_-0I', 'a5026f2079'),
('b4109339795', 'Beginning ', 2, NULL, 'a5026f2079'),
('b410b3d2795', 'Perfect for You ', 3, NULL, 'a5026f2079'),
('b410d527795', 'Into The New World (Instrumental) ', 4, NULL, 'a5026f2079'),
('ece82315795', 'Mr. Taxi (Japanese Ver.) ', 1, 'https://www.youtube.com/watch?v=Fzr2Nv8NTEE', 'd57fbb4979'),
('ece9f9b8795', 'Run Devil Run (Japanese Ver.) ', 2, 'https://www.youtube.com/watch?v=LJReD9chwFk', 'd57fbb4979'),
('160b78d1795', 'Party ', 1, 'https://www.youtube.com/watch?v=HQzu7NYlZNQ', 'ed0d909679'),
('160c4678795', 'Lion Heart ', 2, 'https://www.youtube.com/watch?v=nVCubhQ454c', 'ed0d909679'),
('160ccf77795', 'You Think ', 3, 'https://www.youtube.com/watch?v=hJYGddE0vHc', 'ed0d909679'),
('160d3bf4795', 'Check ', 4, NULL, 'ed0d909679'),
('160d6174795', 'One Afternoon ', 5, NULL, 'ed0d909679'),
('160dee58795', 'Show Girls ', 6, NULL, 'ed0d909679'),
('160e1885795', 'Fire Alarm ', 7, NULL, 'ed0d909679'),
('160e3a4b795', 'Talk Talk ', 8, NULL, 'ed0d909679'),
('160e5b61795', 'Green Light ', 9, NULL, 'ed0d909679'),
('160e7de1795', 'Paradise ', 10, NULL, 'ed0d909679'),
('160e9d0e795', 'Sign ', 11, NULL, 'ed0d909679'),
('160eb9bb795', 'Bump It ', 12, NULL, 'ed0d909679'),
('fea23e75795', 'As If It\'s Your Last ', 1, 'https://www.youtube.com/watch?v=Amq-qlqbjYA', 'baf6b33f79'),
('2e79a209795', 'WHISTLE ', 1, 'https://www.youtube.com/watch?v=dISNgvVpWlo', 'dbc5b71379'),
('2e7b2efd795', 'BOOMBAYAH ', 2, 'https://www.youtube.com/watch?v=bwmSjveL3Lc', 'dbc5b71379'),
('4486de2c795', 'Playing With Fire ', 1, 'https://www.youtube.com/watch?v=9pdj4iJD08s', 'eceaa35479'),
('4487188d795', 'STAY ', 2, 'https://www.youtube.com/watch?v=FzVR_fymZw4', 'eceaa35479'),
('448739e7795', 'WHISTLE (Acoustic Version) ', 3, NULL, 'eceaa35479'),
('c8f41152795', 'IZ*ONE - Welcome ', 1, NULL, 'af25d49179'),
('c8f5a060795', 'Secret Story of the Swan ', 2, 'https://www.youtube.com/watch?v=nnVjsos40qk', 'af25d49179'),
('c8f5efec795', 'IZ*ONE - Pretty ', 3, NULL, 'af25d49179'),
('c8f60c36795', 'IZ*ONE - Merry-Go-Round ', 4, NULL, 'af25d49179'),
('c8f62791795', 'IZ*ONE - Rococo ', 5, NULL, 'af25d49179'),
('c8f64484795', 'IZ*ONE - With*One ', 6, NULL, 'af25d49179'),
('c8f65fea795', 'IZ*ONE - Secret Story of the Swan - Japanese Ver. ', 7, NULL, 'af25d49179'),
('c8f67c89795', 'IZ*ONE - Merry-Go-Round - Japanese Ver. ', 8, NULL, 'af25d49179'),
('d6a619e2795', 'Call Me Baby ', 1, 'https://www.youtube.com/watch?v=yWfsla_Uh80', '9ff60ff279'),
('d6a65e0b795', 'Transformer ', 2, NULL, '9ff60ff279'),
('d6a680bd795', 'What If... ', 3, NULL, '9ff60ff279'),
('d6a6a7f4795', 'My Answer ', 4, NULL, '9ff60ff279'),
('d6a6ca5d795', 'Exodus ', 5, NULL, '9ff60ff279'),
('d6a6e973795', 'El Dorado ', 6, NULL, '9ff60ff279'),
('d6a7076e795', 'Playboy ', 7, NULL, '9ff60ff279'),
('d6a72379795', 'Hurt ', 8, NULL, '9ff60ff279'),
('d6a748dd795', 'Beautiful ', 9, NULL, '9ff60ff279'),
('d6a77246795', 'Lady Luck ', 10, NULL, '9ff60ff279'),
('ed80c458795', 'Love Shot ', 1, 'https://www.youtube.com/watch?v=pSudEWBAYRE', '656ccee579'),
('ed8235eb795', 'Tempo ', 2, 'https://www.youtube.com/watch?v=iwd8N6K-sLk', '656ccee579'),
('ed828d4c795', 'Sign ', 3, NULL, '656ccee579'),
('ed82b04a795', 'Trauma ', 4, NULL, '656ccee579'),
('ed82cbf9795', 'Ooh La La ', 5, NULL, '656ccee579'),
('ed82e9a6795', 'Wait ', 6, NULL, '656ccee579'),
('ed83057d795', 'Gravity ', 7, NULL, '656ccee579'),
('ed832090795', 'With You ', 8, NULL, '656ccee579'),
('ed833bce795', '24/7 ', 9, NULL, '656ccee579'),
('ed838da2795', 'Bad Dream ', 10, NULL, '656ccee579'),
('ed83ac15795', 'Smile On My Face ', 11, NULL, '656ccee579'),
('ed83c9c3795', 'Oasis ', 12, NULL, '656ccee579'),
('ed83e73f795', 'Damage ', 13, NULL, '656ccee579'),
('ed8400a9795', 'Love Shot (Chinese Version) ', 14, NULL, '656ccee579'),
('9cbf12f2795', 'Prelude: A Day ', 1, NULL, '77854e3479'),
('9cc0878b795', 'Missing You ', 2, 'https://www.youtube.com/watch?v=wDkjWSt3HOM', '77854e3479'),
('9cc0ba8b795', 'My Lady ', 3, NULL, '77854e3479'),
('9cc0db27795', 'Red Lie ', 4, NULL, '77854e3479'),
('9cc0fa49795', 'Blowin\' Up ', 5, NULL, '77854e3479'),
('9cc115db795', 'Interlude: Brother Act. ', 6, NULL, '77854e3479'),
('9cc13018795', 'Nanana ', 7, NULL, '77854e3479'),
('9cc149fa795', 'Dreaming ', 8, NULL, '77854e3479'),
('9cc166dc795', 'Guitar (Stroke of Love) ', 9, NULL, '77854e3479'),
('9cc181a3795', 'Running into Breakup ', 10, NULL, '77854e3479'),
('9cc19f0f795', 'Fly Away ', 11, NULL, '77854e3479'),
('9cc1baf7795', 'Finale: Our Concert ', 12, NULL, '77854e3479'),
('496c6103795', 'FANCY ', 1, 'https://www.youtube.com/watch?v=kOHB85vDuow', '1e04109779'),
('496c9b4b795', 'TWICE - STUCK IN MY HEAD ', 2, NULL, '1e04109779'),
('496cc342795', 'TWICE - GIRLS LIKE US ', 3, NULL, '1e04109779'),
('496ceded795', 'TWICE - HOT ', 4, NULL, '1e04109779'),
('496d1429795', 'TWICE - TURN IT UP ', 5, NULL, '1e04109779'),
('496d333b795', 'TWICE - STRAWBERRY ', 6, NULL, '1e04109779'),
('45e4bb88795', 'What Is Love? ', 1, 'https://www.youtube.com/watch?v=i0p1bmr0EmE', '0264808179'),
('45e648fa795', 'SWEET TALKER ', 2, NULL, '0264808179'),
('45e68fbf795', 'HO! ', 3, NULL, '0264808179'),
('45e6a90e795', 'DEJAVU ', 4, NULL, '0264808179'),
('45e6c40c795', 'SAY YES ', 5, NULL, '0264808179'),
('57afec2c795', 'Likey ', 1, 'https://www.youtube.com/watch?v=V2hlQkVJZhE', '34ad21ed79'),
('57b15e53795', 'Heart Shaker ', 2, 'https://www.youtube.com/watch?v=rRzxEiBLQCA', '34ad21ed79'),
('57b17c7a795', 'Merry & Happy ', 3, 'https://www.youtube.com/watch?v=zi_6oaQyckM', '34ad21ed79'),
('57b19e08795', 'TWICE - Turtle ', 4, NULL, '34ad21ed79'),
('57b1bcea795', 'TWICE - Missing U ', 5, NULL, '34ad21ed79'),
('57b1d86f795', 'TWICE - Wow ', 6, NULL, '34ad21ed79'),
('57b1f344795', 'TWICE - Ffw ', 7, NULL, '34ad21ed79'),
('57b20e52795', 'TWICE - Ding Dong ', 8, NULL, '34ad21ed79'),
('57b229ff795', 'TWICE - 24/7 ', 9, NULL, '34ad21ed79'),
('57b244d7795', 'TWICE - Look At Me ', 10, NULL, '34ad21ed79'),
('57b25f32795', 'TWICE - Rollin\' ', 11, NULL, '34ad21ed79'),
('57b27a67795', 'TWICE - Love Line ', 12, NULL, '34ad21ed79'),
('57b2951f795', 'TWICE - Don\'t Give Up ', 13, NULL, '34ad21ed79'),
('57b2b094795', 'TWICE - You In My Heart ', 14, NULL, '34ad21ed79'),
('57b2cb90795', 'TWICE - Jaljayo Good Night ', 15, NULL, '34ad21ed79'),
('cf66b2da796', 'Sunrise ', 1, 'https://www.youtube.com/watch?v=TbPHPX3hSPA', '23ea206379'),
('cf672194796', 'You are not alone ', 2, NULL, '23ea206379'),
('cf673f88796', 'L.U.V ', 3, NULL, '23ea206379'),
('cf675cd7796', 'GLOW ', 4, NULL, '23ea206379'),
('cf6778d8796', 'Our Secret ', 5, NULL, '23ea206379'),
('cf67959f796', 'Only 1 ', 6, 'https://www.youtube.com/watch?v=lK8oPOZTAwA', '23ea206379'),
('cf67b126796', 'Truly Love ', 7, NULL, '23ea206379'),
('cf67cb71796', 'Show Up ', 8, NULL, '23ea206379'),
('cf67e712796', 'It\'s You ', 9, NULL, '23ea206379'),
('cf68085e796', 'A Starry Sky ', 10, NULL, '23ea206379'),
('cf685ca9796', 'Love Oh Love ', 11, NULL, '23ea206379'),
('cf687f98796', 'Memoria (Korean Ver.) ', 12, NULL, '23ea206379'),
('cf68b980796', 'Sunrise - Instrumental ', 13, NULL, '23ea206379'),
('1f652c8a796', 'Eye of the Storm ', 1, 'https://www.youtube.com/watch?v=gpBe_EIH8pg', 'e6254dc979'),
('1f66aa4b796', 'Room of Mirrors ', 2, 'https://www.youtube.com/watch?v=rFoqjKv6goU', 'e6254dc979'),
('1f66cd79796', 'Tarot Cards ', 3, NULL, 'e6254dc979'),
('1f66f619796', 'Crème Brûlée ', 4, NULL, 'e6254dc979'),
('1f671846796', 'Stairs in the North ', 5, NULL, 'e6254dc979'),
('1f673832796', 'Apple ', 6, 'https://www.youtube.com/watch?v=XQSse3b2ge4', 'e6254dc979'),
('1fcf0b9e796', 'INTRO(Daytime) ', 1, NULL, '3e96d41c79'),
('1fcf3c40796', 'Time for the moon night ', 2, 'https://www.youtube.com/watch?v=_XyBa8QsVQU', '3e96d41c79'),
('1fcf5ea8796', 'Love Bug ', 3, NULL, '3e96d41c79'),
('1fcf8059796', 'Flower Garden ', 4, NULL, '3e96d41c79'),
('1fcf9f15796', 'Tik Tik ', 5, NULL, '3e96d41c79'),
('1fcfbce8796', 'Bye ', 6, NULL, '3e96d41c79'),
('1fcfdc15796', 'You are my star ', 7, NULL, '3e96d41c79'),
('1fcffc0a796', 'Time for the moon night - Instrumental version ', 8, NULL, '3e96d41c79'),
('20a7c159796', 'INTRO ', 1, NULL, '5ba8f0cd79'),
('20a7f434796', 'Fall in Love ', 2, NULL, '5ba8f0cd79'),
('20a80b7c796', 'NAVILLERA ', 3, 'https://www.youtube.com/watch?v=Se8bbsUFjC8', '5ba8f0cd79'),
('20a823c7796', 'LOL ', 4, NULL, '5ba8f0cd79'),
('20a83f4e796', 'Distance ', 5, NULL, '5ba8f0cd79'),
('20a8578b796', 'Water Flower ', 6, NULL, '5ba8f0cd79'),
('20a88381796', 'Mermaid ', 7, NULL, '5ba8f0cd79'),
('20a89d99796', 'Sunshine ', 8, NULL, '5ba8f0cd79'),
('20a8b785796', 'Compass ', 9, NULL, '5ba8f0cd79'),
('20a8d0f6796', 'Click ', 10, NULL, '5ba8f0cd79'),
('20a8ef29796', 'Gone with the wind ', 11, NULL, '5ba8f0cd79'),
('20a90683796', 'NAVILLERA - Instrumental version ', 12, NULL, '5ba8f0cd79'),
('91d50a79796', 'NCT 2020 - Resonance ', 1, 'https://www.youtube.com/watch?v=0IpbvXVbBYA', '2961306e79'),
('90a373cd796', 'No.9 ', 1, 'https://www.youtube.com/watch?v=Qk52ypnGs68', '5bd729e279'),
('90a39ca6796', 'It Hurts ', 2, NULL, '5bd729e279'),
('90a3b7ac796', 'Don\'t Get Married ', 3, NULL, '5bd729e279'),
('90a3d38f796', 'No.9 (Club ver.) ', 4, NULL, '5bd729e279'),
('90a3ee16796', 'No.9 (MV ver. 2) ', 5, NULL, '5bd729e279'),
('90a40f30796', 'I Know The Feeling ', 6, NULL, '5bd729e279'),
('9102f7bb796', 'Day by Day ', 1, 'https://www.youtube.com/watch?v=brnCe8lL7l4', '0e9e458079'),
('910442cc796', 'Holiday ', 2, NULL, '0e9e458079'),
('9104639f796', 'Don\'t Leave Me Alone ', 3, NULL, '0e9e458079'),
('91048611796', 'Love Game ', 4, NULL, '0e9e458079'),
('91049ea9796', 'Hue ', 5, NULL, '0e9e458079'),
('91d12019796', 'Tiamo ', 1, 'https://www.youtube.com/watch?v=xJHUKzz1vss', 'f83a8b5279'),
('91d275ab796', 'Prism ', 2, NULL, 'f83a8b5279'),
('91d293c6796', 'Needed Me ', 3, NULL, 'f83a8b5279'),
('91d2b59b796', 'Tiamo (Chinese Ver.) ', 4, NULL, 'f83a8b5279'),
('91d2cd52796', 'Tiamo (Inst.) ', 5, NULL, 'f83a8b5279'),
('b0992121796', 'Tempore Nihil Sanat (Prelude In F Minor)', 1, NULL, 'cae029b479'),
('b09a813c796', 'Never Forgive, Never Forget', 2, NULL, 'cae029b479'),
('b09a9e88796', 'War Eternal', 3, 'https://www.youtube.com/watch?v=InRMwptcgAo&list=PLpBebqRASg9fUQO45SywQMGb_XX96b3xB&index=2', 'cae029b479'),
('b09abda3796', 'As the Pages Burn', 4, 'https://www.youtube.com/watch?v=9lXuZHkOoH8&list=PLpBebqRASg9fUQO45SywQMGb_XX96b3xB&index=5', 'cae029b479'),
('b09ad531796', 'No More Regrets', 5, 'https://www.youtube.com/watch?v=tc-p93x5rPQ&list=PLpBebqRASg9fUQO45SywQMGb_XX96b3xB&index=3', 'cae029b479'),
('b09aec73796', 'You Will Know My Name', 6, 'https://www.youtube.com/watch?v=3Y-J7sBT_no', 'cae029b479'),
('b09b053b796', 'Graveyard of Dreams', 7, NULL, 'cae029b479'),
('b09b1f05796', 'Stolen Life', 8, 'https://www.youtube.com/watch?v=gB4uhCqOH2k&list=PLpBebqRASg9fUQO45SywQMGb_XX96b3xB', 'cae029b479'),
('b09b6210796', 'Time Is Black', 9, NULL, 'cae029b479'),
('b09b7c67796', 'On and On', 10, NULL, 'cae029b479'),
('b09b9597796', 'Avalanche', 11, 'https://www.youtube.com/watch?v=zPxiSs4BF44&list=PLpBebqRASg9fUQO45SywQMGb_XX96b3xB&index=6', 'cae029b479'),
('b09bad74796', 'Down to Nothing', 12, NULL, 'cae029b479'),
('b09bc99a796', 'Not Long for This World', 13, NULL, 'cae029b479'),
('b09be284796', 'Shadow On the Wall - cover version', 14, NULL, 'cae029b479'),
('3256a124796', 'Handshake with Hell', 1, 'https://www.youtube.com/watch?v=dsuhfOD7emE', '0958af3879'),
('325826ab796', 'Deceiver, Deceiver', 2, 'https://www.youtube.com/watch?v=m_m2oYJkx1A', '0958af3879'),
('325848e2796', 'In the Eye of the Storm', 3, 'https://www.youtube.com/watch?v=AO6qLvHAuVU', '0958af3879'),
('325863a8796', 'The Watcher', 4, 'https://www.youtube.com/watch?v=h5nDeMvPJZE', '0958af3879'),
('325880e2796', 'Poisoned Arrow', 5, 'https://www.youtube.com/watch?v=OEDREBKrsZQ', '0958af3879'),
('32589d4e796', 'Sunset over the Empire', 6, 'https://www.youtube.com/watch?v=E3mOvCMG24I', '0958af3879'),
('3258b7d5796', 'House of Mirrors', 7, 'https://www.youtube.com/watch?v=1DvDjeRs-_o', '0958af3879'),
('3258eb3a796', 'Spreading Black Wings', 8, NULL, '0958af3879'),
('32590f71796', 'Mourning Star', 9, NULL, '0958af3879'),
('32592d11796', 'One Last Time', 10, NULL, '0958af3879'),
('32594781796', 'Exiled from Earth', 11, NULL, '0958af3879'),
('6ed28d41796', 'Set Flame to the Night', 1, NULL, 'f2e243bb79'),
('6ed40a33796', 'The Race', 2, 'https://www.youtube.com/watch?v=7GXIqR7P5ZQ', 'f2e243bb79'),
('6ed42620796', 'Blood in the Water', 3, NULL, 'f2e243bb79'),
('6ed441db796', 'The World Is Yours', 4, 'https://www.youtube.com/watch?v=lk2-bgwA0Ro', 'f2e243bb79'),
('6ed45cef796', 'The Eagle Flies Alone', 5, 'https://www.youtube.com/watch?v=mjF1rmSV1dM', 'f2e243bb79'),
('6ed4780a796', 'Reason to Believe', 6, 'https://www.youtube.com/watch?v=0kJdWJXxF3Y', 'f2e243bb79'),
('6ed4927d796', 'Murder Scene', 7, NULL, 'f2e243bb79'),
('6ed4aaf2796', 'First Day in Hell', 8, NULL, 'f2e243bb79'),
('6ed4c2a0796', 'Saturnine', 9, NULL, 'f2e243bb79'),
('6ed4df17796', 'Dreams of Retribution', 10, NULL, 'f2e243bb79'),
('6ed5027a796', 'My Shadow and I', 11, NULL, 'f2e243bb79'),
('6ed526ed796', 'A Fight I Must Win', 12, NULL, 'f2e243bb79'),
('6ed54c55796', 'City Baby Attacked by Rats - cover version', 13, NULL, 'f2e243bb79'),
('b44df74788b', 'Cry Cry ', 1, 'https://www.youtube.com/watch?v=5M69TE1yzt4', '938f6aa888'),
('b44e1e3488b', 'Goodbye, OK ', 2, NULL, '938f6aa888'),
('b44e3a8288b', 'O My God ', 3, NULL, '938f6aa888'),
('b44e55c988b', 'I\'m So Bad ', 4, NULL, '938f6aa888'),
('b44e719988b', 'Cry Cry (Ballad ver.) ', 5, 'https://www.youtube.com/watch?v=xMTSYvRyNzs', '938f6aa888'),
('b44e8cbe88b', 'Cry Cry (Ballad Music Video ver.) ', 6, 'https://www.youtube.com/watch?v=-Ju79e8rM0c', '938f6aa888'),
('b44ea6ed88b', 'Cry Cry (Story ver.) ', 7, NULL, '938f6aa888'),
('f798434e892', 'The Fact ', 1, NULL, 'e2f1863a89'),
('f798adc4892', 'Fiction ', 2, 'https://www.youtube.com/watch?v=ZAzWT8mRoR0', 'e2f1863a89'),
('f798d308892', 'Back To You ', 3, NULL, 'e2f1863a89'),
('f798f5cb892', 'You ', 4, NULL, 'e2f1863a89'),
('f7991d61892', 'Freeze ', 5, NULL, 'e2f1863a89'),
('f79940c7892', 'Virus ', 6, NULL, 'e2f1863a89'),
('f79967fa892', 'Though I Call Your Name ', 7, NULL, 'e2f1863a89'),
('f7998bf7892', 'On Rainy Days ', 8, 'https://www.youtube.com/watch?v=fJP5bcprD48', 'e2f1863a89'),
('f799b069892', 'Lightless (Unplugged Ver.) ', 9, NULL, 'e2f1863a89'),
('f799d475892', 'Fiction (Orhestra Ver.) ', 10, NULL, 'e2f1863a89');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `email` varchar(50) NOT NULL,
  `username` varchar(11) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `birthday` date NOT NULL,
  `gender` tinyint(1) NOT NULL,
  `photo` varchar(500) NOT NULL DEFAULT 'default.png',
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`email`, `username`, `full_name`, `birthday`, `gender`, `photo`, `password`) VALUES
('imjisooimok@email.com', 'imjisoo', 'Jisoo', '1995-01-03', 0, 'imjisoo.jpeg', '$2y$10$YRE8vrNCH.I9ng7oWSC8hukm3KWyzUeh/3gyaWPLU5GK7/JILQDOe'),
('jakasembung@gmail.com', 'jakas', 'Jaka Sembung', '2004-11-24', 1, 'jakas.png', '$2y$10$nhsr.TJfLiMHL85gillStOBkaA7poC7Ax2A8ND7O6RD1BtndZOucG'),
('raniafaharani@gmail.com', 'raniafhr', 'Rania Faharani', '2002-06-12', 0, 'raniafhr.png', '$2y$10$4dAK2Dkej2VIALKqPDxNkODa9eRYnNmIi/nRzGmg6RW23QPD2j0nO'),
('zahirarahmawati@gmail.com', 'zahiraa', 'Zahira Rahmawati', '1995-12-27', 0, 'zahiraa.jpg', '$2y$10$rJQgkI0l97eQQHSZKbwnBuwIZ0re2diEbcDIBfT52J5f/X9lwwjW6'),
('zarifaramadhani@gmail.com', 'zarifarama', 'Zarifa Ramadhani', '2000-11-30', 0, 'default.png', '$2y$10$eocIWtvpwNdTCJdGMNUV4uqf492TFhYzyEsKpZ6CE9zh/Yzc77CDW');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `albums`
--
ALTER TABLE `albums`
  ADD PRIMARY KEY (`id_album`),
  ADD KEY `id_group` (`id_group`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`slug_country`);

--
-- Indexes for table `favorite_groups_d`
--
ALTER TABLE `favorite_groups_d`
  ADD KEY `id_favorite` (`id_favorite`),
  ADD KEY `id_group` (`id_group`);

--
-- Indexes for table `favorite_groups_h`
--
ALTER TABLE `favorite_groups_h`
  ADD PRIMARY KEY (`id_favorite`),
  ADD KEY `email` (`email`);

--
-- Indexes for table `favorite_idols_d`
--
ALTER TABLE `favorite_idols_d`
  ADD KEY `id_idol` (`id_idol`),
  ADD KEY `id_favorite` (`id_favorite`);

--
-- Indexes for table `favorite_idols_h`
--
ALTER TABLE `favorite_idols_h`
  ADD PRIMARY KEY (`id_favorite`),
  ADD KEY `email` (`email`);

--
-- Indexes for table `favorite_news_d`
--
ALTER TABLE `favorite_news_d`
  ADD KEY `id_news` (`id_news`),
  ADD KEY `id_favorite` (`id_favorite`);

--
-- Indexes for table `favorite_news_h`
--
ALTER TABLE `favorite_news_h`
  ADD PRIMARY KEY (`id_favorite`),
  ADD KEY `email` (`email`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id_group`),
  ADD KEY `slug_country` (`slug_country`);

--
-- Indexes for table `idols`
--
ALTER TABLE `idols`
  ADD PRIMARY KEY (`id_idol`),
  ADD KEY `id_group` (`id_group`),
  ADD KEY `slug_country` (`slug_country`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id_news`),
  ADD KEY `id_group` (`id_group`),
  ADD KEY `email` (`email`);

--
-- Indexes for table `songs`
--
ALTER TABLE `songs`
  ADD KEY `id_album` (`id_album`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `albums`
--
ALTER TABLE `albums`
  ADD CONSTRAINT `albums_ibfk_1` FOREIGN KEY (`id_group`) REFERENCES `groups` (`id_group`);

--
-- Constraints for table `favorite_groups_d`
--
ALTER TABLE `favorite_groups_d`
  ADD CONSTRAINT `favorite_groups_d_ibfk_3` FOREIGN KEY (`id_favorite`) REFERENCES `favorite_groups_h` (`id_favorite`),
  ADD CONSTRAINT `favorite_groups_d_ibfk_4` FOREIGN KEY (`id_group`) REFERENCES `groups` (`id_group`);

--
-- Constraints for table `favorite_groups_h`
--
ALTER TABLE `favorite_groups_h`
  ADD CONSTRAINT `favorite_groups_h_ibfk_1` FOREIGN KEY (`email`) REFERENCES `users` (`email`);

--
-- Constraints for table `favorite_idols_d`
--
ALTER TABLE `favorite_idols_d`
  ADD CONSTRAINT `favorite_idols_d_ibfk_1` FOREIGN KEY (`id_idol`) REFERENCES `idols` (`id_idol`),
  ADD CONSTRAINT `favorite_idols_d_ibfk_2` FOREIGN KEY (`id_favorite`) REFERENCES `favorite_idols_h` (`id_favorite`);

--
-- Constraints for table `favorite_idols_h`
--
ALTER TABLE `favorite_idols_h`
  ADD CONSTRAINT `favorite_idols_h_ibfk_1` FOREIGN KEY (`email`) REFERENCES `users` (`email`);

--
-- Constraints for table `favorite_news_d`
--
ALTER TABLE `favorite_news_d`
  ADD CONSTRAINT `favorite_news_d_ibfk_1` FOREIGN KEY (`id_news`) REFERENCES `news` (`id_news`),
  ADD CONSTRAINT `favorite_news_d_ibfk_2` FOREIGN KEY (`id_favorite`) REFERENCES `favorite_news_h` (`id_favorite`);

--
-- Constraints for table `favorite_news_h`
--
ALTER TABLE `favorite_news_h`
  ADD CONSTRAINT `favorite_news_h_ibfk_1` FOREIGN KEY (`email`) REFERENCES `users` (`email`);

--
-- Constraints for table `groups`
--
ALTER TABLE `groups`
  ADD CONSTRAINT `groups_ibfk_1` FOREIGN KEY (`slug_country`) REFERENCES `countries` (`slug_country`);

--
-- Constraints for table `idols`
--
ALTER TABLE `idols`
  ADD CONSTRAINT `idols_ibfk_1` FOREIGN KEY (`id_group`) REFERENCES `groups` (`id_group`),
  ADD CONSTRAINT `idols_ibfk_2` FOREIGN KEY (`slug_country`) REFERENCES `countries` (`slug_country`);

--
-- Constraints for table `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `news_ibfk_1` FOREIGN KEY (`id_group`) REFERENCES `groups` (`id_group`),
  ADD CONSTRAINT `news_ibfk_2` FOREIGN KEY (`email`) REFERENCES `users` (`email`);

--
-- Constraints for table `songs`
--
ALTER TABLE `songs`
  ADD CONSTRAINT `songs_ibfk_1` FOREIGN KEY (`id_album`) REFERENCES `albums` (`id_album`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
