-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 05, 2024 at 07:46 PM
-- Server version: 8.0.39-0ubuntu0.20.04.1
-- PHP Version: 8.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `postcards`
--

-- --------------------------------------------------------

--
-- Table structure for table `active_status`
--

DROP TABLE IF EXISTS `active_status`;
CREATE TABLE `active_status` (
  `id` int NOT NULL,
  `is_active` varchar(5) DEFAULT NULL,
  `active` varchar(5) NOT NULL DEFAULT '1',
  `recdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
)  ;

--
-- Dumping data for table `active_status`
--

INSERT INTO `active_status` (`id`, `is_active`, `active`, `recdate`) VALUES
(1, 'Yes', '1', '2022-03-09 08:54:32'),
(2, 'No', '1', '2022-03-09 08:54:32');

-- --------------------------------------------------------

--
-- Table structure for table `answers_attend_quest`
--

DROP TABLE IF EXISTS `answers_attend_quest`;
CREATE TABLE `answers_attend_quest` (
  `id` bigint UNSIGNED NOT NULL,
  `web_user_id` varchar(10) DEFAULT NULL,
  `ip_address` varchar(50) DEFAULT NULL,
  `card_id` varchar(10) DEFAULT NULL,
  `attend_quest_id` varchar(10) DEFAULT NULL,
  `answer_attend_quest` varchar(200) DEFAULT NULL,
  `base_lang` varchar(5) NOT NULL DEFAULT 'en',
  `active` varchar(5) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
)   ;

--
-- Dumping data for table `answers_attend_quest`
--

INSERT INTO `answers_attend_quest` (`id`, `web_user_id`, `ip_address`, `card_id`, `attend_quest_id`, `answer_attend_quest`, `base_lang`, `active`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, NULL, '127.0.0.1', '39', '24', 'No', 'en', '1', '2024-07-24 12:34:09', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `answers_memorial`
--

DROP TABLE IF EXISTS `answers_memorial`;
CREATE TABLE `answers_memorial` (
  `id` bigint UNSIGNED NOT NULL,
  `web_user_id` varchar(10) DEFAULT NULL,
  `ip_address` varchar(50) DEFAULT NULL,
  `card_id` varchar(10) DEFAULT NULL,
  `memorial_id` varchar(10) DEFAULT NULL,
  `answer_memorial` varchar(200) DEFAULT NULL,
  `base_lang` varchar(5) NOT NULL DEFAULT 'en',
  `active` varchar(5) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
)   ;

--
-- Dumping data for table `answers_memorial`
--

INSERT INTO `answers_memorial` (`id`, `web_user_id`, `ip_address`, `card_id`, `memorial_id`, `answer_memorial`, `base_lang`, `active`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, NULL, '127.0.0.1', '39', '7', 'asd asdf asfd', 'en', '1', '2024-07-24 12:34:09', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `answers_optional_question`
--

DROP TABLE IF EXISTS `answers_optional_question`;
CREATE TABLE `answers_optional_question` (
  `id` bigint UNSIGNED NOT NULL,
  `web_user_id` varchar(10) DEFAULT NULL,
  `ip_address` varchar(50) DEFAULT NULL,
  `card_id` varchar(10) DEFAULT NULL,
  `optnl_quest_id` varchar(10) DEFAULT NULL,
  `answer_optnl_quest` varchar(200) DEFAULT NULL,
  `base_lang` varchar(5) NOT NULL DEFAULT 'en',
  `active` varchar(5) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
)   ;

--
-- Dumping data for table `answers_optional_question`
--

INSERT INTO `answers_optional_question` (`id`, `web_user_id`, `ip_address`, `card_id`, `optnl_quest_id`, `answer_optnl_quest`, `base_lang`, `active`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, NULL, NULL, NULL, '5', 'Option A', 'en', '1', '2024-07-24 11:59:16', NULL, NULL),
(2, NULL, NULL, NULL, '5', 'Option A', 'en', '1', '2024-07-24 11:59:50', NULL, NULL),
(3, NULL, NULL, NULL, '5', 'Option A', 'en', '1', '2024-07-24 12:00:48', NULL, NULL),
(4, NULL, '127.0.0.1', '39', '2', 'Option B', 'en', '1', '2024-07-24 12:09:17', NULL, NULL),
(5, NULL, '127.0.0.1', '39', '5', 'Option A', 'en', '1', '2024-07-24 12:34:09', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `answers_text_question`
--

DROP TABLE IF EXISTS `answers_text_question`;
CREATE TABLE `answers_text_question` (
  `id` bigint UNSIGNED NOT NULL,
  `web_user_id` varchar(10) DEFAULT NULL,
  `ip_address` varchar(100) DEFAULT NULL,
  `card_id` varchar(10) DEFAULT NULL,
  `text_question_id` varchar(10) DEFAULT NULL,
  `answer_text_question` varchar(200) DEFAULT NULL,
  `base_lang` varchar(5) NOT NULL DEFAULT 'en',
  `active` varchar(5) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
)   ;

--
-- Dumping data for table `answers_text_question`
--

INSERT INTO `answers_text_question` (`id`, `web_user_id`, `ip_address`, `card_id`, `text_question_id`, `answer_text_question`, `base_lang`, `active`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, NULL, '127.0.0.1', '39', '9', 'faisal', 'en', '1', '2024-07-24 12:34:09', NULL, NULL),
(2, '2', '127.0.0.1', '39', '10', 'lkjljkl', 'en', '1', '2024-07-24 12:44:50', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `backgrounds`
--

DROP TABLE IF EXISTS `backgrounds`;
CREATE TABLE `backgrounds` (
  `id` bigint UNSIGNED NOT NULL,
  `client_id` varchar(10) DEFAULT NULL,
  `user_id` varchar(10) DEFAULT NULL,
  `web_user_id` varchar(10) DEFAULT NULL,
  `title` varchar(200) DEFAULT NULL,
  `main_image` varchar(200) DEFAULT NULL,
  `more_images` text  ,
  `base_lang` varchar(5) NOT NULL DEFAULT 'en',
  `ticket_type_id` varchar(10) DEFAULT NULL,
  `active` varchar(5) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `deleted_for` varchar(10) DEFAULT NULL
)   ;

--
-- Dumping data for table `backgrounds`
--

INSERT INTO `backgrounds` (`id`, `client_id`, `user_id`, `web_user_id`, `title`, `main_image`, `more_images`, `base_lang`, `ticket_type_id`, `active`, `created_at`, `updated_at`, `deleted_at`, `deleted_for`) VALUES
(1, NULL, NULL, NULL, 'Romantic', 'public/ObKYrs1UI1F31yrNAgxrgScUTJrYn6iuqeBWZPeT.webp', 'public/xc3OAg8wtzbJICml0BWWbo81qBn5bdD7mYnCd6F9.webp,public/WhSPBP0nFlkPHzKLSdJJcAfKqHmMhIWxpOVzKQfZ.webp,public/zqeJMfulMn7W5Hr57Qs4He6s8MjGrH1Wtxjxj74S.webp,public/Ld1WeJhymqBFcRlYlWiVwngJKBgrzQKdq49wkLEH.webp,public/Tz2zfGwXVXMw7zNH0hn5XpCd91s7oz6R11YnbX95.webp,public/FYLyqxSNn9Exl2aha8HaibLW7WKEcKCQFhiFod7y.webp,public/2r7OhPTdDrbEAHsRgqwrjzMqNaVxpLybNet87kbs.webp,public/OA6MqorXaPHd7Q6zecN1CYJjgOANtnmrEvGEJ3Dp.webp,public/n038VBdhNbLYmAA8vwxgXrNqg1ctIHKngiYlMcAG.webp,public/CoblYgp6F0WSFmA0knPQuwruTwnL0W2j3tN1yYbO.webp,public/pp99gBwredKsgjl550eB7InYn215vaDxwtX3xlYN.webp,public/T3JPkbGk8MBCOTW3zX6cDFadMUQYbZwWubrRyane.webp,public/xpKhVSucUIKWeoW0cQBLFqUHXLBIf9d7lyX5oyJb.webp,public/uuEwcZAgkJBbxXeNMk2WfpY1JCIHRyyYXIi4WFyt.webp,public/hRNcYohp6QBZ2GdizrS1RfhbNvBmj7Y8ypF3wrG3.webp,public/wNF9T2ST4ZvHGEXOlSvIm4GN7RShF9zmm5cAjyzD.webp,public/SRZWm8P4Wozbep54o0XoYv7cRcnz89Up7eLD93AP.webp,public/WunmsGSElyPtyHZvAk0TcIpLN6eCKIexXTnSp5l7.webp,public/PkOWUNJ97xcNikJb9Nl804fmDJMaKEx5nSAJ1gSR.webp', 'en', NULL, '1', '2024-05-24 17:33:34', '2024-05-24 22:33:34', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `blog_categories`
--

DROP TABLE IF EXISTS `blog_categories`;
CREATE TABLE `blog_categories` (
  `id` bigint UNSIGNED NOT NULL,
  `client_id` varchar(10) DEFAULT NULL,
  `user_id` varchar(10) DEFAULT NULL,
  `web_user_id` varchar(10) DEFAULT NULL,
  `blog_category` varchar(200) DEFAULT NULL,
  `base_lang` varchar(5) NOT NULL DEFAULT 'en',
  `active` varchar(5) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `deleted_for` varchar(10) DEFAULT NULL
)   ;

-- --------------------------------------------------------

--
-- Table structure for table `blog_posts`
--

DROP TABLE IF EXISTS `blog_posts`;
CREATE TABLE `blog_posts` (
  `id` bigint UNSIGNED NOT NULL,
  `client_id` varchar(10) DEFAULT NULL,
  `user_id` varchar(10) DEFAULT NULL,
  `web_user_id` varchar(10) DEFAULT NULL,
  `blog_category_id` varchar(10) DEFAULT NULL,
  `blog_title` varchar(500) DEFAULT NULL,
  `blog_image` varchar(200) DEFAULT NULL,
  `blog_text` text   COMMENT 'text editor',
  `base_lang` varchar(5) NOT NULL DEFAULT 'en',
  `active` varchar(5) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `deleted_for` varchar(10) DEFAULT NULL
)   ;

-- --------------------------------------------------------

--
-- Table structure for table `cards`
--

DROP TABLE IF EXISTS `cards`;
CREATE TABLE `cards` (
  `id` bigint UNSIGNED NOT NULL,
  `client_id` varchar(10) DEFAULT NULL,
  `user_id` varchar(10) DEFAULT NULL,
  `web_user_id` varchar(10) DEFAULT NULL,
  `title` varchar(200) DEFAULT NULL,
  `card_status` varchar(50) NOT NULL DEFAULT 'draft',
  `short_descr` varchar(500) DEFAULT NULL,
  `tags` varchar(200) DEFAULT NULL,
  `short_code` varchar(100) DEFAULT NULL,
  `card_context` varchar(200) DEFAULT NULL,
  `card_objects` json DEFAULT NULL,
  `designed_by_user_id` varchar(10) DEFAULT NULL,
  `sender_user_id` varchar(10) DEFAULT NULL,
  `sender_name` varchar(200) DEFAULT NULL,
  `sender_name_font` varchar(200) DEFAULT NULL,
  `sender_name_color` varchar(200) DEFAULT NULL,
  `seal_design` varchar(200) DEFAULT NULL,
  `seal_design_id` varchar(10) DEFAULT NULL,
  `background_image` varchar(200) DEFAULT NULL,
  `background_image_id` varchar(10) DEFAULT NULL,
  `envelop_design_id` varchar(10) DEFAULT NULL,
  `envelop_inside_image` varchar(200) DEFAULT NULL,
  `envelop_inside_image_id` varchar(10) DEFAULT NULL,
  `effect_name` varchar(200)   DEFAULT NULL,
  `effect_name_id` varchar(10) DEFAULT NULL,
  `canvas_image` varchar(200) DEFAULT NULL,
  `canvas_image_id` varchar(10) DEFAULT NULL,
  `stamp_image` varchar(200) DEFAULT NULL,
  `stamp_image_id` varchar(10) DEFAULT NULL,
  `stamp_design` varchar(200) DEFAULT NULL,
  `stamp_design_id` varchar(10) DEFAULT NULL,
  `card_image` varchar(200) DEFAULT NULL,
  `card_image_id` varchar(10) DEFAULT NULL,
  `music_title` varchar(200) DEFAULT NULL,
  `music_file` varchar(200) DEFAULT NULL,
  `music_file_id` varchar(10) DEFAULT NULL,
  `recipient_name` varchar(200) DEFAULT NULL,
  `recepient_name_font` varchar(200) DEFAULT NULL,
  `recepient_name_color` varchar(200) DEFAULT NULL,
  `front_image` varchar(200) DEFAULT NULL,
  `back_image` varchar(200) DEFAULT NULL,
  `flap_image` varchar(200) DEFAULT NULL,
  `card_credits_price` float DEFAULT NULL,
  `recipient_emails` text,
  `base_lang` varchar(5) NOT NULL DEFAULT 'en',
  `active` varchar(5) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `deleted_for` varchar(10) DEFAULT NULL
)   ;

--
-- Dumping data for table `cards`
--

INSERT INTO `cards` (`id`, `client_id`, `user_id`, `web_user_id`, `title`, `card_status`, `short_descr`, `tags`, `short_code`, `card_context`, `card_objects`, `designed_by_user_id`, `sender_user_id`, `sender_name`, `sender_name_font`, `sender_name_color`, `seal_design`, `seal_design_id`, `background_image`, `background_image_id`, `envelop_design_id`, `envelop_inside_image`, `envelop_inside_image_id`, `effect_name`, `effect_name_id`, `canvas_image`, `canvas_image_id`, `stamp_image`, `stamp_image_id`, `stamp_design`, `stamp_design_id`, `card_image`, `card_image_id`, `music_title`, `music_file`, `music_file_id`, `recipient_name`, `recepient_name_font`, `recepient_name_color`, `front_image`, `back_image`, `flap_image`, `card_credits_price`, `recipient_emails`, `base_lang`, `active`, `created_at`, `updated_at`, `deleted_at`, `deleted_for`) VALUES
(14, NULL, NULL, NULL, 'New Card 1', 'draft', NULL, NULL, NULL, NULL, '{\"objects\": [{\"src\": \"http://127.0.0.1:8001/storage/nax0TLcRxax1A9gxoCyXQLWzYm9WUY0e69ZKmBu5.webp\", \"top\": 194, \"fill\": \"rgb(0,0,0)\", \"left\": 116, \"type\": \"image\", \"angle\": 0, \"cropX\": 0, \"cropY\": 0, \"flipX\": false, \"flipY\": false, \"skewX\": 0, \"skewY\": 0, \"width\": 60, \"clipTo\": null, \"height\": 60, \"scaleX\": 5, \"scaleY\": 5, \"shadow\": null, \"stroke\": null, \"filters\": [], \"opacity\": 1, \"originX\": \"left\", \"originY\": \"top\", \"version\": \"3.5.0\", \"visible\": true, \"fillRule\": \"nonzero\", \"paintFirst\": \"fill\", \"crossOrigin\": \"\", \"strokeWidth\": 0, \"strokeLineCap\": \"butt\", \"strokeLineJoin\": \"miter\", \"backgroundColor\": \"\", \"strokeDashArray\": null, \"transformMatrix\": null, \"strokeDashOffset\": 0, \"strokeMiterLimit\": 4, \"globalCompositeOperation\": \"source-over\"}], \"version\": \"3.5.0\"}', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'public/wl6oHy8siZJ1QVbdWFJiuAGu13GtKfpuglrJdvAI.png', NULL, NULL, NULL, NULL, NULL, 'public/brYk9y1eQ8fZyh2kmOpAShDlFWoh3OJTtJiMV14t.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'en', '1', '2024-07-08 13:23:39', '2024-07-08 18:29:28', NULL, NULL),
(15, NULL, NULL, NULL, 'test card', 'draft', NULL, NULL, NULL, NULL, '{\"objects\": [{\"src\": \"http://127.0.0.1:8001/storage/ygFfBi6yXKZiCXKqzZkeA5HcIIVunMVlnEahWAW3.webp\", \"top\": 151, \"fill\": \"rgb(0,0,0)\", \"left\": 181, \"type\": \"image\", \"angle\": 0, \"cropX\": 0, \"cropY\": 0, \"flipX\": false, \"flipY\": false, \"skewX\": 0, \"skewY\": 0, \"width\": 60, \"clipTo\": null, \"height\": 60, \"scaleX\": 5, \"scaleY\": 5, \"shadow\": null, \"stroke\": null, \"filters\": [], \"opacity\": 1, \"originX\": \"left\", \"originY\": \"top\", \"version\": \"3.5.0\", \"visible\": true, \"fillRule\": \"nonzero\", \"paintFirst\": \"fill\", \"crossOrigin\": \"\", \"strokeWidth\": 0, \"strokeLineCap\": \"butt\", \"strokeLineJoin\": \"miter\", \"backgroundColor\": \"\", \"strokeDashArray\": null, \"transformMatrix\": null, \"strokeDashOffset\": 0, \"strokeMiterLimit\": 4, \"globalCompositeOperation\": \"source-over\"}], \"version\": \"3.5.0\"}', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'public/LrgTXPJgC6V4lXtbqVEylckHz9KtECTXpivIXPaD.png', NULL, NULL, NULL, NULL, NULL, 'public/yMVnIzwHPmAyCUU7t4mkLzohh3EksYpNZeNddFyy.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'en', '1', '2024-07-08 13:45:11', '2024-07-08 18:46:16', NULL, NULL),
(37, NULL, NULL, NULL, 'Birthsday card', 'draft', NULL, NULL, NULL, NULL, '{\"objects\": [{\"src\": \"http://127.0.0.1:8001/storage/K0aKckyieFN8FHQdZXztyWEwYqFKgh8vrmsKHvJT.webp\", \"top\": 171, \"fill\": \"rgb(0,0,0)\", \"left\": 134, \"type\": \"image\", \"angle\": 0, \"cropX\": 0, \"cropY\": 0, \"flipX\": false, \"flipY\": false, \"skewX\": 0, \"skewY\": 0, \"width\": 60, \"clipTo\": null, \"height\": 60, \"scaleX\": 5, \"scaleY\": 5, \"shadow\": null, \"stroke\": null, \"filters\": [], \"opacity\": 1, \"originX\": \"left\", \"originY\": \"top\", \"version\": \"3.5.0\", \"visible\": true, \"fillRule\": \"nonzero\", \"paintFirst\": \"fill\", \"crossOrigin\": \"\", \"strokeWidth\": 0, \"strokeLineCap\": \"butt\", \"strokeLineJoin\": \"miter\", \"backgroundColor\": \"\", \"strokeDashArray\": null, \"transformMatrix\": null, \"strokeDashOffset\": 0, \"strokeMiterLimit\": 4, \"globalCompositeOperation\": \"source-over\"}, {\"top\": 75.9, \"fill\": \"#000000\", \"left\": 222.6, \"text\": \"lkjlkjljkl\", \"type\": \"text\", \"angle\": 0, \"flipX\": false, \"flipY\": false, \"skewX\": 0, \"skewY\": 0, \"width\": 137.79, \"clipTo\": null, \"height\": 45.2, \"scaleX\": 1, \"scaleY\": 1, \"shadow\": null, \"stroke\": null, \"styles\": {}, \"opacity\": 1, \"originX\": \"left\", \"originY\": \"top\", \"version\": \"3.5.0\", \"visible\": true, \"fillRule\": \"nonzero\", \"fontSize\": 40, \"overline\": false, \"fontStyle\": \"normal\", \"textAlign\": \"right\", \"underline\": false, \"fontFamily\": \"Butcherman\", \"fontWeight\": \"normal\", \"lineHeight\": 1.16, \"paintFirst\": \"fill\", \"charSpacing\": 0, \"linethrough\": false, \"strokeWidth\": 1, \"strokeLineCap\": \"butt\", \"strokeLineJoin\": \"miter\", \"backgroundColor\": \"\", \"strokeDashArray\": null, \"transformMatrix\": null, \"strokeDashOffset\": 0, \"strokeMiterLimit\": 4, \"textBackgroundColor\": \"\", \"globalCompositeOperation\": \"source-over\"}], \"version\": \"3.5.0\", \"background\": \"rgba(0, 0, 0, 0)\"}', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'public/Yu1iWeKaxyWDxES8m6Mj82pSvrA5UagMthEgWVd4.png', NULL, NULL, NULL, NULL, NULL, 'public/card_image_37.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'en', '1', '2024-07-08 16:15:14', NULL, NULL, NULL),
(38, NULL, NULL, NULL, 'New Card', 'draft', NULL, NULL, NULL, NULL, '{\"objects\": [{\"src\": \"http://127.0.0.1:8001/storage/C9WLW0HJXyhimQILjd9BxhbnCuV1NB6ObJSIL6AA.webp\", \"top\": 255, \"fill\": \"rgb(0,0,0)\", \"left\": 135, \"type\": \"image\", \"angle\": 0, \"cropX\": 0, \"cropY\": 0, \"flipX\": false, \"flipY\": false, \"skewX\": 0, \"skewY\": 0, \"width\": 60, \"clipTo\": null, \"height\": 60, \"scaleX\": 5, \"scaleY\": 5, \"shadow\": null, \"stroke\": null, \"filters\": [], \"opacity\": 1, \"originX\": \"left\", \"originY\": \"top\", \"version\": \"3.5.0\", \"visible\": true, \"fillRule\": \"nonzero\", \"paintFirst\": \"fill\", \"crossOrigin\": \"\", \"strokeWidth\": 0, \"strokeLineCap\": \"butt\", \"strokeLineJoin\": \"miter\", \"backgroundColor\": \"\", \"strokeDashArray\": null, \"transformMatrix\": null, \"strokeDashOffset\": 0, \"strokeMiterLimit\": 4, \"globalCompositeOperation\": \"source-over\"}, {\"top\": 121.9, \"fill\": \"#e01f1f\", \"left\": 197.16, \"text\": \"ljhljkhkljhk\", \"type\": \"text\", \"angle\": 0, \"flipX\": false, \"flipY\": false, \"skewX\": 0, \"skewY\": 0, \"width\": 186.68, \"clipTo\": null, \"height\": 45.2, \"scaleX\": 1, \"scaleY\": 1, \"shadow\": null, \"stroke\": null, \"styles\": {}, \"opacity\": 1, \"originX\": \"left\", \"originY\": \"top\", \"version\": \"3.5.0\", \"visible\": true, \"fillRule\": \"nonzero\", \"fontSize\": 40, \"overline\": false, \"fontStyle\": \"normal\", \"textAlign\": \"right\", \"underline\": false, \"fontFamily\": \"Butcherman\", \"fontWeight\": \"normal\", \"lineHeight\": 1.16, \"paintFirst\": \"fill\", \"charSpacing\": 0, \"linethrough\": false, \"strokeWidth\": 1, \"strokeLineCap\": \"butt\", \"strokeLineJoin\": \"miter\", \"backgroundColor\": \"\", \"strokeDashArray\": null, \"transformMatrix\": null, \"strokeDashOffset\": 0, \"strokeMiterLimit\": 4, \"textBackgroundColor\": \"\", \"globalCompositeOperation\": \"source-over\"}], \"version\": \"3.5.0\", \"background\": \"rgba(0, 0, 0, 0)\"}', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'public/mlf3fWqkspDdoWpHcB1VQ63I4FZyC9F8kwTz420v.png', NULL, NULL, NULL, NULL, NULL, 'public/card_image_38.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'en', '1', '2024-07-08 16:20:39', '2024-07-08 21:21:42', NULL, NULL),
(39, NULL, NULL, '2', 'New Card', 'draft', NULL, NULL, NULL, '', '{\"objects\": [{\"src\": \"http://127.0.0.1:8001/storage/C9WLW0HJXyhimQILjd9BxhbnCuV1NB6ObJSIL6AA.webp\", \"top\": 255, \"fill\": \"rgb(0,0,0)\", \"left\": 135, \"type\": \"image\", \"angle\": 0, \"cropX\": 0, \"cropY\": 0, \"flipX\": false, \"flipY\": false, \"skewX\": 0, \"skewY\": 0, \"width\": 60, \"clipTo\": null, \"height\": 60, \"scaleX\": 5, \"scaleY\": 5, \"shadow\": null, \"stroke\": null, \"filters\": [], \"opacity\": 1, \"originX\": \"left\", \"originY\": \"top\", \"version\": \"3.5.0\", \"visible\": true, \"fillRule\": \"nonzero\", \"paintFirst\": \"fill\", \"crossOrigin\": \"\", \"strokeWidth\": 0, \"strokeLineCap\": \"butt\", \"strokeLineJoin\": \"miter\", \"backgroundColor\": \"\", \"strokeDashArray\": null, \"transformMatrix\": null, \"strokeDashOffset\": 0, \"strokeMiterLimit\": 4, \"globalCompositeOperation\": \"source-over\"}, {\"top\": 121.9, \"fill\": \"#e01f1f\", \"left\": 197.16, \"text\": \"ljhljkhkljhk\", \"type\": \"text\", \"angle\": 0, \"flipX\": false, \"flipY\": false, \"skewX\": 0, \"skewY\": 0, \"width\": 186.68, \"clipTo\": null, \"height\": 45.2, \"scaleX\": 1, \"scaleY\": 1, \"shadow\": null, \"stroke\": null, \"styles\": {}, \"opacity\": 1, \"originX\": \"left\", \"originY\": \"top\", \"version\": \"3.5.0\", \"visible\": true, \"fillRule\": \"nonzero\", \"fontSize\": 40, \"overline\": false, \"fontStyle\": \"normal\", \"textAlign\": \"right\", \"underline\": false, \"fontFamily\": \"Butcherman\", \"fontWeight\": \"normal\", \"lineHeight\": 1.16, \"paintFirst\": \"fill\", \"charSpacing\": 0, \"linethrough\": false, \"strokeWidth\": 1, \"strokeLineCap\": \"butt\", \"strokeLineJoin\": \"miter\", \"backgroundColor\": \"\", \"strokeDashArray\": null, \"transformMatrix\": null, \"strokeDashOffset\": 0, \"strokeMiterLimit\": 4, \"textBackgroundColor\": \"\", \"globalCompositeOperation\": \"source-over\"}], \"version\": \"3.5.0\", \"background\": \"rgba(0, 0, 0, 0)\"}', NULL, NULL, 'sdfghdfghdfgh', NULL, NULL, 'http://127.0.0.1:8001/storage/g39pJo7zNHkHHDMPFH5xI24CNLZQmoNKeal9TFbb.webp', '1', 'http://127.0.0.1:8001/storage/WhSPBP0nFlkPHzKLSdJJcAfKqHmMhIWxpOVzKQfZ.webp', NULL, '1', 'http://127.0.0.1:8001/storage/Aiw6trGzLvFli7KeGCqn0ZELGyYzO8ANkyVq0xAQ.webp', '1', NULL, NULL, NULL, NULL, 'http://127.0.0.1:8001/storage/2bzqxZeWiphI227YicpXMh4zDHkJKcAnDNv4Zvyq.webp', NULL, 'http://127.0.0.1:8001/storage/ApgsX4pFdPsy9O2yzeSIAUgoaTrsLWYTCJeR2fF7.webp', '1', 'public/aosjdofamdflajdfojwoe.png', NULL, NULL, 'public/Ethan_Sturock_Summer_Time.mp3', NULL, 'sadgfdghdfgh', NULL, NULL, 'http://127.0.0.1:8001/storage/kOhqPbV40SlrtwGdVVFeBOnDHdZVp3ebpuHiBqeM.webp', 'http://127.0.0.1:8001/storage/wgMZy4zudK7q0TQO1aKVC5w70az2whwBXCgCJzbP.webp', 'http://127.0.0.1:8001/storage/8Yv7YJJXAFnbTta31cxSvfx71zpSo5nkwF0UEpGS.webp', NULL, NULL, 'en', '1', '2024-07-09 10:43:00', '2024-07-30 20:49:20', NULL, NULL),
(60, NULL, NULL, NULL, 'New Card', 'draft', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'en', '1', '2024-07-30 13:02:19', '2024-07-30 18:02:19', NULL, NULL),
(73, NULL, NULL, NULL, 'New Card', 'draft', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'en', '1', '2024-07-30 18:20:58', '2024-07-30 23:20:58', NULL, NULL),
(74, NULL, NULL, NULL, 'New Card', 'draft', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'en', '1', '2024-07-30 19:42:28', '2024-07-31 00:42:28', NULL, NULL),
(75, NULL, NULL, NULL, 'New Card', 'draft', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'en', '1', '2024-08-01 10:36:22', '2024-08-01 15:36:22', NULL, NULL),
(76, NULL, NULL, NULL, 'New Card', 'draft', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'en', '1', '2024-08-01 10:48:19', '2024-08-01 15:48:19', NULL, NULL),
(77, NULL, NULL, NULL, 'New Card', 'draft', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'en', '1', '2024-08-01 10:55:58', '2024-08-01 15:55:58', NULL, NULL),
(78, NULL, NULL, NULL, 'New Card', 'draft', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'en', '1', '2024-08-01 19:11:17', '2024-08-02 00:11:17', NULL, NULL),
(79, NULL, NULL, NULL, 'New Card', 'draft', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'en', '1', '2024-08-03 13:29:27', '2024-08-03 18:29:27', NULL, NULL),
(80, NULL, NULL, NULL, 'New Card', 'draft', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'this is sender name', NULL, NULL, NULL, NULL, 'http://127.0.0.1:8001/storage/hRNcYohp6QBZ2GdizrS1RfhbNvBmj7Y8ypF3wrG3.webp', '1', '1', 'http://127.0.0.1:8001/storage/Aiw6trGzLvFli7KeGCqn0ZELGyYzO8ANkyVq0xAQ.webp', '1', 'stars', NULL, 'public/3QJ8b5quQaqPkKPuH85Qc38jLcvjRvHZeoIwfYYS.png', NULL, 'http://127.0.0.1:8001/storage/33Dog2sGNutrBz1YLPnrYRY52FvEHrLl4aUMydD5.webp', '1', 'http://127.0.0.1:8001/storage/QIZh69Zqn6Rwsc9dbFaj2dRvVxy9SyFldenjLndG.webp', '1', NULL, NULL, NULL, NULL, NULL, 'recpnt name here', NULL, NULL, 'http://127.0.0.1:8001/storage/wF2u1DdkgkwAMLXuK9hcvsWT4W8WCUuAGwP7BkJ0.webp', 'http://127.0.0.1:8001/storage/VxDL3GhsbYgPopCcX5GGfXlG6zoDWxVPm8Dcmf42.webp', 'http://127.0.0.1:8001/storage/WthKmJoVfXXYKMNZhOcBFhN1151FJgGJTQoC0H0V.webp', NULL, NULL, 'en', '1', '2024-08-03 13:36:50', '2024-08-03 19:10:08', NULL, NULL),
(81, NULL, NULL, NULL, 'New Card', 'draft', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'random', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'en', '1', '2024-08-03 16:44:40', '2024-08-03 21:47:41', NULL, NULL),
(82, NULL, NULL, NULL, 'New Card', 'draft', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'en', '1', '2024-08-03 16:56:37', '2024-08-03 21:56:37', NULL, NULL),
(83, NULL, NULL, NULL, 'New Card', 'draft', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'en', '1', '2024-08-03 16:59:16', '2024-08-03 21:59:16', NULL, NULL),
(84, NULL, NULL, NULL, 'New Card', 'draft', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'en', '1', '2024-08-03 17:00:14', '2024-08-03 22:00:14', NULL, NULL),
(85, NULL, NULL, NULL, 'New Card', 'draft', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'en', '1', '2024-08-03 17:01:04', '2024-08-03 22:01:04', NULL, NULL),
(86, NULL, NULL, NULL, 'New Card', 'draft', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'en', '1', '2024-08-03 17:01:26', '2024-08-03 22:01:26', NULL, NULL),
(87, NULL, NULL, NULL, 'New Card', 'draft', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'en', '1', '2024-08-03 17:03:43', '2024-08-03 22:03:43', NULL, NULL),
(88, NULL, NULL, NULL, 'New Card', 'draft', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'en', '1', '2024-08-03 17:08:44', '2024-08-03 22:08:44', NULL, NULL),
(89, NULL, NULL, NULL, 'New Card', 'draft', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'en', '1', '2024-08-03 17:11:28', '2024-08-03 22:11:28', NULL, NULL),
(90, NULL, NULL, NULL, 'New Card', 'draft', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'en', '1', '2024-08-03 17:12:41', '2024-08-03 22:12:41', NULL, NULL),
(91, NULL, NULL, NULL, 'New Card', 'draft', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'en', '1', '2024-08-03 17:13:12', '2024-08-03 22:13:12', NULL, NULL),
(92, NULL, NULL, NULL, 'New Card', 'draft', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'en', '1', '2024-08-03 17:14:41', '2024-08-03 22:14:41', NULL, NULL),
(93, NULL, NULL, NULL, 'New Card', 'draft', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'en', '1', '2024-08-03 17:16:14', '2024-08-03 22:16:14', NULL, NULL),
(94, NULL, NULL, NULL, 'New Card', 'draft', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'en', '1', '2024-08-03 17:16:34', '2024-08-03 22:16:34', NULL, NULL),
(95, NULL, NULL, NULL, 'New Card', 'draft', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'en', '1', '2024-08-03 17:17:17', '2024-08-03 22:17:17', NULL, NULL),
(96, NULL, NULL, NULL, 'New Card', 'draft', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'stars', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'en', '1', '2024-08-03 17:23:26', '2024-08-03 22:24:13', NULL, NULL),
(97, NULL, NULL, NULL, 'New Card', 'draft', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'en', '1', '2024-08-03 17:26:01', '2024-08-03 22:26:01', NULL, NULL),
(98, NULL, NULL, NULL, 'New Card', 'draft', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'en', '1', '2024-08-03 17:27:01', '2024-08-03 22:27:01', NULL, NULL),
(99, NULL, NULL, NULL, 'New Card', 'draft', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'realistic', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'en', '1', '2024-08-03 17:28:01', '2024-08-03 22:28:12', NULL, NULL),
(100, NULL, NULL, NULL, 'New Card', 'draft', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'realistic', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'en', '1', '2024-08-03 17:30:06', '2024-08-03 22:30:16', NULL, NULL),
(101, NULL, NULL, NULL, 'New Card', 'draft', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'realistic', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'en', '1', '2024-08-03 17:32:44', '2024-08-03 22:32:53', NULL, NULL),
(102, NULL, NULL, NULL, 'New Card', 'draft', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'en', '1', '2024-08-03 17:54:53', '2024-08-03 22:54:53', NULL, NULL),
(103, NULL, NULL, NULL, 'New Card', 'draft', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'en', '1', '2024-08-03 17:58:05', '2024-08-03 22:58:05', NULL, NULL),
(104, NULL, NULL, NULL, 'New Card', 'draft', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'en', '1', '2024-08-03 18:52:46', '2024-08-03 23:52:46', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `card_categories`
--

DROP TABLE IF EXISTS `card_categories`;
CREATE TABLE `card_categories` (
  `id` bigint UNSIGNED NOT NULL,
  `client_id` varchar(10) DEFAULT NULL,
  `user_id` varchar(10) DEFAULT NULL,
  `web_user_id` varchar(10) DEFAULT NULL,
  `cat_image` varchar(200) DEFAULT NULL,
  `title` varchar(200) DEFAULT NULL,
  `short_descr` varchar(500) DEFAULT NULL,
  `long_descr` text,
  `sound_file_ids` varchar(500) DEFAULT NULL,
  `base_lang` varchar(5) NOT NULL DEFAULT 'en',
  `active` varchar(5) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `deleted_for` varchar(10) DEFAULT NULL
)   ;

--
-- Dumping data for table `card_categories`
--

INSERT INTO `card_categories` (`id`, `client_id`, `user_id`, `web_user_id`, `cat_image`, `title`, `short_descr`, `long_descr`, `sound_file_ids`, `base_lang`, `active`, `created_at`, `updated_at`, `deleted_at`, `deleted_for`) VALUES
(1, NULL, NULL, NULL, 'public/46eGcJ8e5Vzz904DIPn3kHVf3mTVJeagFweZKFRA.webp', 'Happy Birthday', 'Sending a creative birthday greeting card can make this day memorable for others. Use DigiPostal\'s features and editor to create and personalize a birthday greeting card. Experience animated effects, beautiful music and even the possibility of adding a collection of special photos to your cards.', '<div class=\"nblock nblock-header\" style=\"margin-top:10px; text-align:start; width:1170px\">\r\n<div class=\"nblock nblock-header\" style=\"margin-top:10px; text-align:start; width:1170px\">\r\n<h2><span style=\"font-size:16px\"><span style=\"color:#4a4a4a\"><span style=\"font-family:Vazirmatn,sans-serif\"><span style=\"background-color:#ffffff\"><span style=\"font-size:24px\"><strong><span style=\"font-size:1.05em\"><span style=\"font-family:&quot;Sahl Naskh&quot;\">What is a digital birthday postcard?</span></span></strong></span></span></span></span></span></h2>\r\n</div>\r\n</div>\r\n\r\n<div class=\"nblock nblock-paragraph\" style=\"margin-bottom:20px; margin-top:10px; text-align:start; width:1170px\">\r\n<p style=\"text-align:justify\"><span style=\"font-size:16px\"><span style=\"color:#4a4a4a\"><span style=\"font-family:Vazirmatn,sans-serif\"><span style=\"background-color:#ffffff\"><span style=\"font-size:1.05em\"><span style=\"font-family:&quot;Sahl Naskh&quot;\">Birthday postcards are among the most attractive and popular greeting options as a special gift for special people. You can&nbsp;</span></span><span style=\"font-size:1.05em\"><span style=\"font-family:&quot;Sahl Naskh&quot;\">send&nbsp;</span></span><span style=\"font-size:1.05em\"><span style=\"font-family:&quot;Sahl Naskh&quot;\">these cards for&nbsp;</span></span><strong><span style=\"font-size:1.05em\"><span style=\"font-family:&quot;Sahl Naskh&quot;\">birthday wishes</span></span></strong>&nbsp;<span style=\"font-size:1.05em\"><span style=\"font-family:&quot;Sahl Naskh&quot;\">. With&nbsp;</span></span><strong><span style=\"font-size:1.05em\"><span style=\"font-family:&quot;Sahl Naskh&quot;\">virtual birthday cards</span></span></strong><span style=\"font-size:1.05em\"><span style=\"font-family:&quot;Sahl Naskh&quot;\">&nbsp;, you can send messages of love and congratulations to your friends and family, even if you can&#39;t attend the birthday party in person.</span></span><br />\r\n<span style=\"font-size:1.05em\"><span style=\"font-family:&quot;Sahl Naskh&quot;\">These cards are easily sent in the digital world and can turn the birthday party into an unforgettable experience with various features such as beautiful images, attractive effects and pleasant melodies. You can send these cards to your loved ones through popular social networks or even traditionally through SMS.</span></span></span></span></span></span></p>\r\n</div>\r\n\r\n<div class=\"nblock nblock-header\" style=\"margin-top:10px; text-align:start; width:1170px\">\r\n<h4><span style=\"font-size:16px\"><span style=\"color:#4a4a4a\"><span style=\"font-family:Vazirmatn,sans-serif\"><span style=\"background-color:#ffffff\"><span style=\"font-size:18px\"><strong><span style=\"font-size:1.05em\"><span style=\"font-family:&quot;Sahl Naskh&quot;\">The advantage of using online birthday greeting cards</span></span></strong></span></span></span></span></span></h4>\r\n</div>\r\n\r\n<div class=\"nblock nblock-paragraph\" style=\"margin-bottom:20px; margin-top:10px; text-align:start; width:1170px\">\r\n<p style=\"text-align:justify\"><span style=\"font-size:16px\"><span style=\"color:#4a4a4a\"><span style=\"font-family:Vazirmatn,sans-serif\"><span style=\"background-color:#ffffff\"><span style=\"font-size:1.05em\"><span style=\"font-family:&quot;Sahl Naskh&quot;\">In a world full of repeated messages and images on social networks, these cards, having a special and personal design, add more charm and spiritual value to your birthday greetings. Show others that you care and are happy about their birthday by sending them a special birthday card.</span></span><br />\r\n<span style=\"font-size:1.05em\"><span style=\"font-family:&quot;Sahl Naskh&quot;\">A birthday postcard can be&nbsp;</span></span><a href=\"https://digipostal.ir/article/best-birthday-gift\" style=\"box-sizing:border-box; -webkit-tap-highlight-color:transparent; text-decoration:none; color:#107abe\"><span style=\"font-size:1.05em\"><span style=\"font-family:&quot;Sahl Naskh&quot;\">the best birthday gift</span></span></a>&nbsp;<span style=\"font-size:1.05em\"><span style=\"font-family:&quot;Sahl Naskh&quot;\">and plays the role of a memory-making masterpiece. Compared to ordinary gifts that may be forgotten over time, a postcard can immortalize good memories and moments along with messages and greetings from friends. These cards are always available due to their stylish and unique design.</span></span><br />\r\n<span style=\"font-size:1.05em\"><span style=\"font-family:&quot;Sahl Naskh&quot;\">You can record your messages or write special texts for your loved ones on your postcard. This unique feature can turn your birthday greeting card into a personal and pleasant gift.</span></span></span></span></span></span></p>\r\n</div>\r\n\r\n<div class=\"nblock nblock-header\" style=\"margin-top:10px; text-align:start; width:1170px\">\r\n<h4><span style=\"font-size:16px\"><span style=\"color:#4a4a4a\"><span style=\"font-family:Vazirmatn,sans-serif\"><span style=\"background-color:#ffffff\"><span style=\"font-size:18px\"><strong><span style=\"font-size:1.05em\"><span style=\"font-family:&quot;Sahl Naskh&quot;\">Digital birthday postcards are the best birthday gifts&nbsp;</span></span></strong></span></span></span></span></span></h4>\r\n</div>\r\n\r\n<div class=\"nblock nblock-paragraph\" style=\"margin-bottom:20px; margin-top:10px; text-align:start; width:1170px\">\r\n<p style=\"text-align:justify\"><span style=\"font-size:16px\"><span style=\"color:#4a4a4a\"><span style=\"font-family:Vazirmatn,sans-serif\"><span style=\"background-color:#ffffff\"><span style=\"font-size:1.05em\"><span style=\"font-family:&quot;Sahl Naskh&quot;\">If a birthday party is coming up but you can&#39;t attend it in person, or if you can&#39;t buy a physical gift for any reason, a digital birthday greeting card is the perfect solution. These cards allow you to experience a different virtual birthday party and congratulate your friends using beautiful images and designs. You can even use&nbsp;</span></span><a href=\"https://digipostal.ir/tag/birthday-photo-frame\" style=\"box-sizing:border-box; -webkit-tap-highlight-color:transparent; text-decoration:none; color:#107abe\"><span style=\"font-size:1.05em\"><span style=\"font-family:&quot;Sahl Naskh&quot;\">postcards with photo frames</span></span></a>&nbsp;<span style=\"font-size:1.05em\"><span style=\"font-family:&quot;Sahl Naskh&quot;\">and add pictures of friends and family to your card and share the good moments of the birthday party.</span></span><br />\r\n<span style=\"font-size:1.05em\"><span style=\"font-family:&quot;Sahl Naskh&quot;\">With the help of DigiPostal application, you can easily design your birthday greeting card. Use the professional and customizable editor to add interesting images, texts and effects to your cards. Then, send your virtual postcard to recipients electronically or even as a real card.</span></span><br />\r\n<span style=\"font-size:1.05em\"><span style=\"font-family:&quot;Sahl Naskh&quot;\">Now that you know&nbsp;</span></span><a href=\"https://digipostal.ir/article/how-to-make-digital-postcard\" style=\"box-sizing:border-box; -webkit-tap-highlight-color:transparent; text-decoration:none; color:#107abe\"><span style=\"font-size:1.05em\"><span style=\"font-family:&quot;Sahl Naskh&quot;\">how to make a digital birthday greeting card</span></span></a><span style=\"font-size:1.05em\"><span style=\"font-family:&quot;Sahl Naskh&quot;\">&nbsp;, you can easily and surprisingly convey your greetings to others. Use these modern tools for friendly and family communication and make the special moments of the birthday party memora</span></span></span></span></span></span></p>\r\n</div>', NULL, 'en', '1', '2024-05-21 07:26:45', '2024-05-21 12:26:45', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `card_payments`
--

DROP TABLE IF EXISTS `card_payments`;
CREATE TABLE `card_payments` (
  `id` bigint UNSIGNED NOT NULL,
  `client_id` varchar(10) DEFAULT NULL,
  `user_id` varchar(10) DEFAULT NULL,
  `web_user_id` varchar(10) DEFAULT NULL,
  `card_id` varchar(10) DEFAULT NULL,
  `amount` float DEFAULT NULL,
  `transaction_id` varchar(10) DEFAULT NULL,
  `base_lang` varchar(5) NOT NULL DEFAULT 'en',
  `active` varchar(5) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `deleted_for` varchar(10) DEFAULT NULL
)   ;

-- --------------------------------------------------------

--
-- Table structure for table `card_recipients`
--

DROP TABLE IF EXISTS `card_recipients`;
CREATE TABLE `card_recipients` (
  `id` bigint UNSIGNED NOT NULL,
  `client_id` varchar(10) DEFAULT NULL,
  `user_id` varchar(10) DEFAULT NULL,
  `web_user_id` varchar(10) DEFAULT NULL,
  `card_id` varchar(5) DEFAULT NULL,
  `prefix` varchar(100) DEFAULT NULL,
  `recipient_name` varchar(200) DEFAULT NULL,
  `mobile_no` varchar(200) DEFAULT NULL,
  `base_lang` varchar(5) NOT NULL DEFAULT 'en',
  `active` varchar(5) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
)   ;

--
-- Dumping data for table `card_recipients`
--

INSERT INTO `card_recipients` (`id`, `client_id`, `user_id`, `web_user_id`, `card_id`, `prefix`, `recipient_name`, `mobile_no`, `base_lang`, `active`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, NULL, NULL, NULL, NULL, 'Mr', 'test2', '09123244645', 'en', '1', '2024-07-26 20:11:08', '2024-07-27 01:11:08', NULL),
(2, NULL, NULL, '2', '39', 'Mr', 'Nadeem', '09123244645', 'en', '1', '2024-07-26 20:17:29', '2024-07-27 01:17:29', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `card_reviews`
--

DROP TABLE IF EXISTS `card_reviews`;
CREATE TABLE `card_reviews` (
  `id` bigint UNSIGNED NOT NULL,
  `client_id` varchar(10) DEFAULT NULL,
  `user_id` varchar(10) DEFAULT NULL,
  `web_user_id` varchar(10) DEFAULT NULL,
  `card_id` varchar(5) DEFAULT NULL,
  `score_rating` varchar(5) DEFAULT NULL,
  `full_name` varchar(200) DEFAULT NULL,
  `review` text,
  `base_lang` varchar(5) NOT NULL DEFAULT 'en',
  `active` varchar(5) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `deleted_for` varchar(10) DEFAULT NULL
)   ;

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

DROP TABLE IF EXISTS `countries`;
CREATE TABLE `countries` (
  `id` int NOT NULL,
  `client_id` varchar(10) DEFAULT NULL,
  `user_id` varchar(10) DEFAULT NULL,
  `country_code` varchar(2) NOT NULL DEFAULT '',
  `country_name` varchar(100) NOT NULL DEFAULT '',
  `currency_code` varchar(10) DEFAULT NULL,
  `currency_name` varchar(100) DEFAULT NULL,
  `currency_symbol` varchar(10) DEFAULT NULL,
  `lang_code` varchar(10) DEFAULT NULL,
  `language` varchar(200) DEFAULT NULL,
  `lang_direction` varchar(10) DEFAULT NULL,
  `active` varchar(10) NOT NULL DEFAULT '1',
  `recdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` datetime DEFAULT NULL
)  DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `client_id`, `user_id`, `country_code`, `country_name`, `currency_code`, `currency_name`, `currency_symbol`, `lang_code`, `language`, `lang_direction`, `active`, `recdate`, `deleted_at`) VALUES
(1, NULL, NULL, 'AF', 'Afghanistan', 'AFN', 'Afghan afghani', '؋', NULL, 'Pashto', 'RTL', '1', '2024-01-31 12:34:33', NULL),
(2, NULL, NULL, 'AL', 'Albania', 'ALL', 'Albanian lek', 'L', NULL, 'Albanian', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(3, NULL, NULL, 'DZ', 'Algeria', 'DZD', 'Algerian dinar', 'د.ج', NULL, 'Arabic', 'RTL', '1', '2024-01-31 12:34:33', NULL),
(4, NULL, NULL, 'AS', 'American Samoa', 'USD', 'United States Dollar', '$', NULL, 'English', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(5, NULL, NULL, 'AD', 'Andorra', 'EUR', 'Euro', '€', NULL, 'Catalan', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(6, NULL, NULL, 'AO', 'Angola', 'AOA', 'Angolan kwanza', 'Kz', NULL, 'Portuguese', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(7, NULL, NULL, 'AI', 'Anguilla', 'XCD', 'East Caribbean dollar', '$', NULL, 'English', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(8, NULL, NULL, 'AQ', 'Antarctica', 'AUD', 'Australian dollar', '$', NULL, 'N/A', 'N/A', '1', '2024-01-31 12:34:33', NULL),
(9, NULL, NULL, 'AG', 'Antigua and Barbuda', 'XCD', 'East Caribbean dollar', '$', NULL, 'English', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(10, NULL, NULL, 'AR', 'Argentina', 'ARS', 'Argentine peso', '$', NULL, 'Spanish', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(11, NULL, NULL, 'AM', 'Armenia', 'AMD', 'Armenian dram', '֏', NULL, 'Armenian', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(12, NULL, NULL, 'AW', 'Aruba', 'AWG', 'Aruban florin', 'ƒ', NULL, 'Dutch', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(13, NULL, NULL, 'AU', 'Australia', 'AUD', 'Australian dollar', '$', NULL, 'English', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(14, NULL, NULL, 'AT', 'Austria', 'EUR', 'Euro', '€', NULL, 'German', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(15, NULL, NULL, 'AZ', 'Azerbaijan', 'AZN', 'Azerbaijani manat', '₼', NULL, 'Azerbaijani', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(16, NULL, NULL, 'BS', 'Bahamas', 'BSD', 'Bahamian dollar', '$', NULL, 'English', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(17, NULL, NULL, 'BH', 'Bahrain', 'BHD', 'Bahraini dinar', '.د.ب', NULL, 'Arabic', 'RTL', '1', '2024-01-31 12:34:33', NULL),
(18, NULL, NULL, 'BD', 'Bangladesh', 'BDT', 'Bangladeshi taka', '৳', NULL, 'Bengali', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(19, NULL, NULL, 'BB', 'Barbados', 'BBD', 'Barbadian dollar', '$', NULL, 'English', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(20, NULL, NULL, 'BY', 'Belarus', 'BYN', 'Belarusian ruble', 'Br', NULL, 'Russian', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(21, NULL, NULL, 'BE', 'Belgium', 'EUR', 'Euro', '€', NULL, 'French', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(22, NULL, NULL, 'BZ', 'Belize', 'BZD', 'Belize dollar', 'BZ$', NULL, 'English', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(23, NULL, NULL, 'BJ', 'Benin', 'XOF', 'West African CFA franc', 'Fr', NULL, 'French', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(24, NULL, NULL, 'BM', 'Bermuda', 'BMD', 'Bermudian dollar', '$', NULL, 'English', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(25, NULL, NULL, 'BT', 'Bhutan', 'BTN', 'Bhutanese ngultrum', 'Nu.', NULL, 'Dzongkha', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(26, NULL, NULL, 'BO', 'Bolivia', 'BOB', 'Bolivian boliviano', 'Bs.', NULL, 'Spanish', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(27, NULL, NULL, 'BA', 'Bosnia and Herzegovina', 'BAM', 'Bosnia and Herzegovina convertible mark', 'KM', NULL, 'Bosnian', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(28, NULL, NULL, 'BW', 'Botswana', 'BWP', 'Botswana pula', 'P', NULL, 'English', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(30, NULL, NULL, 'BR', 'Brazil', 'BRL', 'Brazilian real', 'R$', NULL, 'Portuguese', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(31, NULL, NULL, 'IO', 'British Indian Ocean Territory', 'USD', 'United States Dollar', '$', NULL, 'English', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(32, NULL, NULL, 'BN', 'Brunei Darussalam', 'BND', 'Brunei dollar', '$', NULL, 'Malay', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(33, NULL, NULL, 'BG', 'Bulgaria', 'BGN', 'Bulgarian lev', 'лв', NULL, 'Bulgarian', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(34, NULL, NULL, 'BF', 'Burkina Faso', 'XOF', 'West African CFA franc', 'Fr', NULL, 'French', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(35, NULL, NULL, 'BI', 'Burundi', 'BIF', 'Burundian franc', 'Fr', NULL, 'French', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(36, NULL, NULL, 'KH', 'Cambodia', 'KHR', 'Cambodian riel', '៛', NULL, 'Khmer', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(37, NULL, NULL, 'CM', 'Cameroon', 'XAF', 'Central African CFA franc', 'Fr', NULL, 'French', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(38, NULL, NULL, 'CA', 'Canada', 'CAD', 'Canadian dollar', '$', NULL, 'English, French', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(39, NULL, NULL, 'CV', 'Cape Verde', 'CVE', 'Cape Verdean escudo', 'Esc', NULL, 'Portuguese', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(40, NULL, NULL, 'KY', 'Cayman Islands', 'KYD', 'Cayman Islands dollar', '$', NULL, 'English', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(41, NULL, NULL, 'CF', 'Central African Republic', 'XAF', 'Central African CFA franc', 'Fr', NULL, 'French, Sango', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(42, NULL, NULL, 'TD', 'Chad', 'XAF', 'Central African CFA franc', 'Fr', NULL, 'French', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(43, NULL, NULL, 'CL', 'Chile', 'CLP', 'Chilean peso', '$', NULL, 'Spanish', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(44, NULL, NULL, 'CN', 'China', 'CNY', 'Chinese yuan', '¥', NULL, 'Chinese', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(45, NULL, NULL, 'CX', 'Christmas Island', 'AUD', 'Australian dollar', '$', NULL, 'English', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(46, NULL, NULL, 'CC', 'Cocos (Keeling) Islands', 'AUD', 'Australian dollar', '$', NULL, 'English', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(47, NULL, NULL, 'CO', 'Colombia', 'COP', 'Colombian peso', '$', NULL, 'Spanish', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(48, NULL, NULL, 'KM', 'Comoros', 'KMF', 'Comorian franc', 'Fr', NULL, 'French', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(49, NULL, NULL, 'CD', 'Democratic Republic of the Congo', 'CDF', 'Congolese franc', 'Fr', NULL, 'French, Lingala, Kiswahili', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(50, NULL, NULL, 'CG', 'Republic of Congo', 'CDF', 'Congolese franc', 'Fr', NULL, 'French, Lingala', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(51, NULL, NULL, 'CK', 'Cook Islands', 'NZD', 'New Zealand dollar', '$', NULL, 'English, Cook Islands Maori', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(52, NULL, NULL, 'CR', 'Costa Rica', 'CRC', 'Costa Rican colón', '₡', NULL, 'Spanish', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(53, NULL, NULL, 'HR', 'Croatia (Hrvatska)', 'HRK', 'Croatian kuna', 'kn', NULL, 'Croatian', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(54, NULL, NULL, 'CU', 'Cuba', 'CUP', 'Cuban peso', '$', NULL, 'Spanish', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(55, NULL, NULL, 'CY', 'Cyprus', 'EUR', 'Euro', '€', NULL, 'Greek', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(56, NULL, NULL, 'CZ', 'Czech Republic', 'CZK', 'Czech koruna', 'Kč', NULL, 'Czech', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(57, NULL, NULL, 'DK', 'Denmark', 'DKK', 'Danish krone', 'kr', NULL, 'Danish', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(58, NULL, NULL, 'DJ', 'Djibouti', 'DJF', 'Djiboutian franc', 'Fr', NULL, 'French', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(59, NULL, NULL, 'DM', 'Dominica', 'XCD', 'East Caribbean dollar', '$', NULL, 'English', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(60, NULL, NULL, 'DO', 'Dominican Republic', 'DOP', 'Dominican peso', 'RD$', NULL, 'Spanish', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(61, NULL, NULL, 'TL', 'East Timor', 'USD', 'United States Dollar', '$', NULL, 'Tetum, Portuguese', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(62, NULL, NULL, 'EC', 'Ecuador', 'USD', 'United States Dollar', '$', NULL, 'Spanish', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(63, NULL, NULL, 'EG', 'Egypt', 'EGP', 'Egyptian pound', '£', NULL, 'Arabic', 'RTL', '1', '2024-01-31 12:34:33', NULL),
(64, NULL, NULL, 'SV', 'El Salvador', 'USD', 'United States Dollar', '$', NULL, 'Spanish', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(65, NULL, NULL, 'GQ', 'Equatorial Guinea', 'XAF', 'Central African CFA franc', 'Fr', NULL, 'Spanish, French, Portuguese', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(66, NULL, NULL, 'ER', 'Eritrea', 'ERN', 'Eritrean nakfa', 'Nfk', NULL, 'English', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(67, NULL, NULL, 'EE', 'Estonia', 'EUR', 'Euro', '€', NULL, 'Estonian', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(68, NULL, NULL, 'ET', 'Ethiopia', 'ETB', 'Ethiopian birr', 'Br', NULL, 'Amharic', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(69, NULL, NULL, 'FK', 'Falkland Islands (Malvinas)', 'FKP', 'Falkland Islands pound', '£', NULL, 'English', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(70, NULL, NULL, 'FO', 'Faroe Islands', 'DKK', 'Danish krone', 'kr', NULL, 'Faroese', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(71, NULL, NULL, 'FJ', 'Fiji', 'FJD', 'Fijian dollar', '$', NULL, 'English, Fijian, Hindi', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(72, NULL, NULL, 'FI', 'Finland', 'EUR', 'Euro', '€', NULL, 'Finnish, Swedish', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(73, NULL, NULL, 'FR', 'France', 'EUR', 'Euro', '€', NULL, 'French', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(74, NULL, NULL, 'FX', 'France, Metropolitan', 'EUR', 'Euro', '€', NULL, 'French', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(75, NULL, NULL, 'GF', 'French Guiana', 'EUR', 'Euro', '€', NULL, 'French', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(76, NULL, NULL, 'PF', 'French Polynesia', 'XPF', 'CFP franc', 'Fr', NULL, 'French', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(77, NULL, NULL, 'TF', 'French Southern Territories', 'EUR', 'Euro', '€', NULL, 'French', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(78, NULL, NULL, 'GA', 'Gabon', 'XAF', 'Central African CFA franc', 'Fr', NULL, 'French', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(79, NULL, NULL, 'GM', 'Gambia', 'GMD', 'Gambian dalasi', 'D', NULL, 'English', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(80, NULL, NULL, 'GE', 'Georgia', 'GEL', 'Georgian lari', '₾', NULL, 'Georgian', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(81, NULL, NULL, 'DE', 'Germany', 'EUR', 'Euro', '€', NULL, 'German', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(82, NULL, NULL, 'GH', 'Ghana', 'GHS', 'Ghanaian cedi', '₵', NULL, 'English', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(83, NULL, NULL, 'GI', 'Gibraltar', 'GIP', 'Gibraltar pound', '£', NULL, 'English', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(84, NULL, NULL, 'GG', 'Guernsey', 'GBP', 'Pound sterling', '£', NULL, 'English, French', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(85, NULL, NULL, 'GR', 'Greece', 'EUR', 'Euro', '€', NULL, 'Greek', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(86, NULL, NULL, 'GL', 'Greenland', 'DKK', 'Danish krone', 'kr', NULL, 'Greenlandic, Danish', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(87, NULL, NULL, 'GD', 'Grenada', 'XCD', 'East Caribbean dollar', '$', NULL, 'English', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(88, NULL, NULL, 'GP', 'Guadeloupe', 'EUR', 'Euro', '€', NULL, 'French', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(89, NULL, NULL, 'GU', 'Guam', 'USD', 'United States Dollar', '$', NULL, 'English, Chamorro', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(90, NULL, NULL, 'GT', 'Guatemala', 'GTQ', 'Guatemalan quetzal', 'Q', NULL, 'Spanish', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(91, NULL, NULL, 'GN', 'Guinea', 'GNF', 'Guinean franc', 'Fr', NULL, 'French', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(92, NULL, NULL, 'GW', 'Guinea-Bissau', 'XOF', 'West African CFA franc', 'Fr', NULL, 'Portuguese', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(93, NULL, NULL, 'GY', 'Guyana', 'GYD', 'Guyanese dollar', '$', NULL, 'English', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(94, NULL, NULL, 'HT', 'Haiti', 'HTG', 'Haitian gourde', 'G', NULL, 'French, Haitian Creole', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(96, NULL, NULL, 'HN', 'Honduras', 'HNL', 'Honduran lempira', 'L', NULL, 'Spanish', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(97, NULL, NULL, 'HK', 'Hong Kong', 'HKD', 'Hong Kong dollar', '$', NULL, 'Chinese, English', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(98, NULL, NULL, 'HU', 'Hungary', 'HUF', 'Hungarian forint', 'Ft', NULL, 'Hungarian', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(99, NULL, NULL, 'IS', 'Iceland', 'ISK', 'Icelandic króna', 'kr', NULL, 'Icelandic', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(100, NULL, NULL, 'IN', 'India', 'INR', 'Indian Rupee', '₹', NULL, 'Hindi, English', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(101, NULL, NULL, 'IM', 'Isle of Man', 'GBP', 'Pound sterling', '£', NULL, 'English, Manx', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(102, NULL, NULL, 'ID', 'Indonesia', 'IDR', 'Indonesian rupiah', 'Rp', NULL, 'Indonesian', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(103, NULL, NULL, 'IR', 'Iran (Islamic Republic of)', 'IRR', 'Iranian rial', '﷼', NULL, 'Persian', 'RTL', '1', '2024-01-31 12:34:33', NULL),
(104, NULL, NULL, 'IQ', 'Iraq', 'IQD', 'Iraqi dinar', 'ع.د', NULL, 'Arabic', 'RTL', '1', '2024-01-31 12:34:33', NULL),
(105, NULL, NULL, 'IE', 'Ireland', 'EUR', 'Euro', '€', NULL, 'Irish, English', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(106, NULL, NULL, 'IL', 'Israel', 'ILS', 'Israeli new shekel', '₪', NULL, 'Hebrew', 'RTL', '1', '2024-01-31 12:34:33', NULL),
(107, NULL, NULL, 'IT', 'Italy', 'EUR', 'Euro', '€', NULL, 'Italian', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(108, NULL, NULL, 'CI', 'Ivory Coast', 'XOF', 'West African CFA franc', 'Fr', NULL, 'French', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(109, NULL, NULL, 'JE', 'Jersey', 'GBP', 'Pound sterling', '£', NULL, 'English, French', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(110, NULL, NULL, 'JM', 'Jamaica', 'JMD', 'Jamaican dollar', 'J$', NULL, 'English', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(111, NULL, NULL, 'JP', 'Japan', 'JPY', 'Japanese yen', '¥', NULL, 'Japanese', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(112, NULL, NULL, 'JO', 'Jordan', 'JOD', 'Jordanian dinar', 'د.ا', NULL, 'Arabic', 'RTL', '1', '2024-01-31 12:34:33', NULL),
(113, NULL, NULL, 'KZ', 'Kazakhstan', 'KZT', 'Kazakhstani tenge', '₸', NULL, 'Kazakh, Russian', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(114, NULL, NULL, 'KE', 'Kenya', 'KES', 'Kenyan shilling', 'KSh', NULL, 'Swahili, English', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(115, NULL, NULL, 'KI', 'Kiribati', 'AUD', 'Australian dollar', '$', NULL, 'English, Gilbertese', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(116, NULL, NULL, 'KP', 'Korea, Democratic People\'s Republic of', 'KPW', 'North Korean won', '₩', NULL, 'Korean', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(117, NULL, NULL, 'KR', 'Korea, Republic of', 'KRW', 'South Korean won', '₩', NULL, 'Korean', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(118, NULL, NULL, 'XK', 'Kosovo', 'EUR', 'Euro', '€', NULL, 'Albanian, Serbian', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(119, NULL, NULL, 'KW', 'Kuwait', 'KWD', 'Kuwaiti dinar', 'د.ك', NULL, 'Arabic', 'RTL', '1', '2024-01-31 12:34:33', NULL),
(120, NULL, NULL, 'KG', 'Kyrgyzstan', 'KGS', 'Kyrgyzstani som', 'с', NULL, 'Kyrgyz, Russian', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(121, NULL, NULL, 'LA', 'Lao People\'s Democratic Republic', 'LAK', 'Lao kip', '₭', NULL, 'Lao', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(122, NULL, NULL, 'LV', 'Latvia', 'EUR', 'Euro', '€', NULL, 'Latvian', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(123, NULL, NULL, 'LB', 'Lebanon', 'LBP', 'Lebanese pound', 'ل.ل', NULL, 'Arabic', 'RTL', '1', '2024-01-31 12:34:33', NULL),
(124, NULL, NULL, 'LS', 'Lesotho', 'LSL', 'Lesotho loti', 'L', NULL, 'Sesotho, English', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(125, NULL, NULL, 'LR', 'Liberia', 'LRD', 'Liberian dollar', '$', NULL, 'English', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(126, NULL, NULL, 'LY', 'Libyan Arab Jamahiriya', 'LYD', 'Libyan dinar', 'ل.د', NULL, 'Arabic', 'RTL', '1', '2024-01-31 12:34:33', NULL),
(127, NULL, NULL, 'LI', 'Liechtenstein', 'CHF', 'Swiss franc', 'Fr', NULL, 'German', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(128, NULL, NULL, 'LT', 'Lithuania', 'EUR', 'Euro', '€', NULL, 'Lithuanian', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(129, NULL, NULL, 'LU', 'Luxembourg', 'EUR', 'Euro', '€', NULL, 'Luxembourgish, French, German', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(130, NULL, NULL, 'MO', 'Macau', 'MOP', 'Macanese pataca', 'P', NULL, 'Chinese, Portuguese', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(131, NULL, NULL, 'MK', 'North Macedonia', 'MKD', 'Macedonian denar', 'ден', NULL, 'Macedonian', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(132, NULL, NULL, 'MG', 'Madagascar', 'MGA', 'Malagasy ariary', 'Ar', NULL, 'Malagasy, French', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(133, NULL, NULL, 'MW', 'Malawi', 'MWK', 'Malawian kwacha', 'MK', NULL, 'English, Chewa', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(134, NULL, NULL, 'MY', 'Malaysia', 'MYR', 'Malaysian ringgit', 'RM', NULL, 'Malay', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(135, NULL, NULL, 'MV', 'Maldives', 'MVR', 'Maldivian rufiyaa', 'ރ.', NULL, 'Dhivehi', 'RTL', '1', '2024-01-31 12:34:33', NULL),
(136, NULL, NULL, 'ML', 'Mali', 'XOF', 'West African CFA franc', 'Fr', NULL, 'French', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(137, NULL, NULL, 'MT', 'Malta', 'EUR', 'Euro', '€', NULL, 'Maltese, English', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(138, NULL, NULL, 'MH', 'Marshall Islands', 'USD', 'United States Dollar', '$', NULL, 'Marshallese, English', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(139, NULL, NULL, 'MQ', 'Martinique', 'EUR', 'Euro', '€', NULL, 'French', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(140, NULL, NULL, 'MR', 'Mauritania', 'MRU', 'Mauritanian ouguiya', 'UM', NULL, 'French', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(141, NULL, NULL, 'MU', 'Mauritius', 'MUR', 'Mauritian rupee', '₨', NULL, 'Mauritian Creole, French, English', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(142, NULL, NULL, 'YT', 'Mayotte', 'EUR', 'Euro', '€', NULL, 'French', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(143, NULL, NULL, 'MX', 'Mexico', 'MXN', 'Mexican peso', '$', NULL, 'Spanish', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(144, NULL, NULL, 'FM', 'Micronesia, Federated States of', 'USD', 'United States Dollar', '$', NULL, 'English', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(145, NULL, NULL, 'MD', 'Moldova, Republic of', 'MDL', 'Moldovan leu', 'L', NULL, 'Moldovan, Romanian, Russian', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(146, NULL, NULL, 'MC', 'Monaco', 'EUR', 'Euro', '€', NULL, 'French', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(147, NULL, NULL, 'MN', 'Mongolia', 'MNT', 'Mongolian tögrög', '₮', NULL, 'Mongolian', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(148, NULL, NULL, 'ME', 'Montenegro', 'EUR', 'Euro', '€', NULL, 'Montenegrin, Serbian, Bosnian, Albanian, Croatian', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(149, NULL, NULL, 'MS', 'Montserrat', 'XCD', 'East Caribbean dollar', '$', NULL, 'English', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(150, NULL, NULL, 'MA', 'Morocco', 'MAD', 'Moroccan dirham', 'د.م.', NULL, 'Arabic', 'RTL', '1', '2024-01-31 12:34:33', NULL),
(151, NULL, NULL, 'MZ', 'Mozambique', 'MZN', 'Mozambican metical', 'MT', NULL, 'Portuguese', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(152, NULL, NULL, 'MM', 'Myanmar', 'MMK', 'Burmese kyat', 'Ks', NULL, 'Burmese', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(153, NULL, NULL, 'NA', 'Namibia', 'NAD', 'Namibian dollar', '$', NULL, 'English', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(154, NULL, NULL, 'NR', 'Nauru', 'AUD', 'Australian dollar', '$', NULL, 'Nauruan, English', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(155, NULL, NULL, 'NP', 'Nepal', 'NPR', 'Nepalese rupee', '₨', NULL, 'Nepali', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(156, NULL, NULL, 'NL', 'Netherlands', 'EUR', 'Euro', '€', NULL, 'Dutch', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(157, NULL, NULL, 'AN', 'Netherlands Antilles', 'ANG', 'Netherlands Antillean guilder', 'ƒ', NULL, 'Dutch', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(158, NULL, NULL, 'NC', 'New Caledonia', 'XPF', 'CFP franc', 'Fr', NULL, 'French', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(159, NULL, NULL, 'NZ', 'New Zealand', 'NZD', 'New Zealand dollar', '$', NULL, 'English, Maori', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(160, NULL, NULL, 'NI', 'Nicaragua', 'NIO', 'Nicaraguan córdoba', 'C$', NULL, 'Spanish', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(161, NULL, NULL, 'NE', 'Niger', 'XOF', 'West African CFA franc', 'Fr', NULL, 'French', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(162, NULL, NULL, 'NG', 'Nigeria', 'NGN', 'Nigerian naira', '₦', NULL, 'English', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(163, NULL, NULL, 'NU', 'Niue', 'NZD', 'New Zealand dollar', '$', NULL, 'Niuean, English', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(164, NULL, NULL, 'NF', 'Norfolk Island', 'AUD', 'Australian dollar', '$', NULL, 'English', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(165, NULL, NULL, 'MP', 'Northern Mariana Islands', 'USD', 'United States Dollar', '$', NULL, 'English, Chamorro', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(166, NULL, NULL, 'NO', 'Norway', 'NOK', 'Norwegian krone', 'kr', NULL, 'Norwegian', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(167, NULL, NULL, 'OM', 'Oman', 'OMR', 'Omani rial', 'ر.ع.', NULL, 'Arabic', 'RTL', '1', '2024-01-31 12:34:33', NULL),
(168, NULL, NULL, 'PK', 'Pakistan', 'PKR', 'Pakistani rupee', '₨', NULL, 'Urdu', 'RTL', '1', '2024-01-31 12:34:33', NULL),
(169, NULL, NULL, 'PW', 'Palau', 'USD', 'United States Dollar', '$', NULL, 'Palauan, English', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(170, NULL, NULL, 'PS', 'Palestine', 'ILS', 'Israeli new shekel', '₪', NULL, 'Arabic', 'RTL', '1', '2024-01-31 12:34:33', NULL),
(171, NULL, NULL, 'PA', 'Panama', 'PAB', 'Panamanian balboa', 'B/.', NULL, 'Spanish', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(172, NULL, NULL, 'PG', 'Papua New Guinea', 'PGK', 'Papua New Guinean kina', 'K', NULL, 'Tok Pisin, English, Hiri Motu', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(173, NULL, NULL, 'PY', 'Paraguay', 'PYG', 'Paraguayan guaraní', '₲', NULL, 'Spanish, Guarani', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(174, NULL, NULL, 'PE', 'Peru', 'PEN', 'Peruvian sol', 'S/', NULL, 'Spanish', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(175, NULL, NULL, 'PH', 'Philippines', 'PHP', 'Philippine peso', '₱', NULL, 'Filipino, English', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(176, NULL, NULL, 'PN', 'Pitcairn', 'NZD', 'New Zealand dollar', '$', NULL, 'English', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(177, NULL, NULL, 'PL', 'Poland', 'PLN', 'Polish złoty', 'zł', NULL, 'Polish', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(178, NULL, NULL, 'PT', 'Portugal', 'EUR', 'Euro', '€', NULL, 'Portuguese', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(179, NULL, NULL, 'PR', 'Puerto Rico', 'USD', 'United States Dollar', '$', NULL, 'Spanish, English', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(180, NULL, NULL, 'QA', 'Qatar', 'QAR', 'Qatari riyal', 'ر.ق', NULL, 'Arabic', 'RTL', '1', '2024-01-31 12:34:33', NULL),
(181, NULL, NULL, 'RE', 'Reunion', 'EUR', 'Euro', '€', NULL, 'French', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(182, NULL, NULL, 'RO', 'Romania', 'RON', 'Romanian leu', 'lei', NULL, 'Romanian', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(183, NULL, NULL, 'RU', 'Russian Federation', 'RUB', 'Russian ruble', '₽', NULL, 'Russian', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(184, NULL, NULL, 'RW', 'Rwanda', 'RWF', 'Rwandan franc', 'Fr', NULL, 'Kinyarwanda, French, English', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(185, NULL, NULL, 'KN', 'Saint Kitts and Nevis', 'XCD', 'East Caribbean dollar', '$', NULL, 'English', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(186, NULL, NULL, 'LC', 'Saint Lucia', 'XCD', 'East Caribbean dollar', '$', NULL, 'English', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(187, NULL, NULL, 'VC', 'Saint Vincent and the Grenadines', 'XCD', 'East Caribbean dollar', '$', NULL, 'English', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(188, NULL, NULL, 'WS', 'Samoa', 'WST', 'Samoan tālā', 'T', NULL, 'Samoan, English', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(189, NULL, NULL, 'SM', 'San Marino', 'EUR', 'Euro', '€', NULL, 'Italian', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(190, NULL, NULL, 'ST', 'Sao Tome and Principe', 'STN', 'São Tomé and Príncipe dobra', 'Db', NULL, 'Portuguese', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(191, NULL, NULL, 'SA', 'Saudi Arabia', 'SAR', 'Saudi riyal', 'ر.س', NULL, 'Arabic', 'RTL', '1', '2024-01-31 12:34:33', NULL),
(192, NULL, NULL, 'SN', 'Senegal', 'XOF', 'West African CFA franc', 'Fr', NULL, 'French', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(193, NULL, NULL, 'RS', 'Serbia', 'RSD', 'Serbian dinar', 'дин.', NULL, 'Serbian', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(194, NULL, NULL, 'SC', 'Seychelles', 'SCR', 'Seychelles rupee', '₨', NULL, 'Seselwa, French, English', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(195, NULL, NULL, 'SL', 'Sierra Leone', 'SLL', 'Sierra Leonean leone', 'Le', NULL, 'English', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(196, NULL, NULL, 'SG', 'Singapore', 'SGD', 'Singapore dollar', '$', NULL, 'English, Malay, Mandarin, Tamil', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(197, NULL, NULL, 'SK', 'Slovakia', 'EUR', 'Euro', '€', NULL, 'Slovak', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(198, NULL, NULL, 'SI', 'Slovenia', 'EUR', 'Euro', '€', NULL, 'Slovene', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(199, NULL, NULL, 'SB', 'Solomon Islands', 'SBD', 'Solomon Islands dollar', 'SI$', NULL, 'English', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(200, NULL, NULL, 'SO', 'Somalia', 'SOS', 'Somali shilling', 'Sh', NULL, 'Arabic', 'RTL', '1', '2024-01-31 12:34:33', NULL),
(201, NULL, NULL, 'ZA', 'South Africa', 'ZAR', 'South African rand', 'R', NULL, 'Afrikaans, English, Zulu, Xhosa, Swati, Southern Sotho, Northern Sotho, Tsonga, Tswana, Venda', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(202, NULL, NULL, 'GS', 'South Georgia South Sandwich Islands', 'GBP', 'Pound sterling', '£', NULL, 'English', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(203, NULL, NULL, 'SS', 'South Sudan', 'SSP', 'South Sudanese pound', '£', NULL, 'English', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(204, NULL, NULL, 'ES', 'Spain', 'EUR', 'Euro', '€', NULL, 'Spanish', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(205, NULL, NULL, 'LK', 'Sri Lanka', 'LKR', 'Sri Lankan rupee', '₨', NULL, 'Sinhala, Tamil', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(206, NULL, NULL, 'SH', 'St. Helena', 'SHP', 'Saint Helena pound', '£', NULL, 'English', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(207, NULL, NULL, 'PM', 'St. Pierre and Miquelon', 'EUR', 'Euro', '€', NULL, 'French', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(208, NULL, NULL, 'SD', 'Sudan', 'SDG', 'Sudanese pound', '£', NULL, 'Arabic', 'RTL', '1', '2024-01-31 12:34:33', NULL),
(209, NULL, NULL, 'SR', 'Suriname', 'SRD', 'Surinamese dollar', '$', NULL, 'Dutch', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(211, NULL, NULL, 'SZ', 'Eswatini', NULL, NULL, NULL, NULL, 'Swati, English', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(212, NULL, NULL, 'SE', 'Sweden', 'SEK', 'Swedish krona', 'kr', NULL, 'Swedish', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(213, NULL, NULL, 'CH', 'Switzerland', 'CHF', 'Swiss franc', 'Fr', NULL, 'German, French, Italian, Romansh', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(214, NULL, NULL, 'SY', 'Syrian Arab Republic', 'SYP', 'Syrian pound', '£', NULL, 'Arabic', 'RTL', '1', '2024-01-31 12:34:33', NULL),
(215, NULL, NULL, 'TW', 'Taiwan', 'TWD', 'New Taiwan dollar', 'NT$', NULL, 'Mandarin', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(216, NULL, NULL, 'TJ', 'Tajikistan', 'TJS', 'Tajikistani somoni', 'ЅМ', NULL, 'Tajik', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(217, NULL, NULL, 'TZ', 'Tanzania, United Republic of', 'TZS', 'Tanzanian shilling', 'Sh', NULL, 'Swahili, English', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(218, NULL, NULL, 'TH', 'Thailand', 'THB', 'Thai baht', '฿', NULL, 'Thai', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(219, NULL, NULL, 'TG', 'Togo', 'XOF', 'West African CFA franc', 'Fr', NULL, 'French', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(220, NULL, NULL, 'TK', 'Tokelau', 'NZD', 'New Zealand dollar', '$', NULL, 'Tokelauan, English', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(221, NULL, NULL, 'TO', 'Tonga', 'TOP', 'Tongan paʻanga', 'T$', NULL, 'Tongan, English', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(222, NULL, NULL, 'TT', 'Trinidad and Tobago', 'TTD', 'Trinidad and Tobago dollar', 'TT$', NULL, 'English', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(223, NULL, NULL, 'TN', 'Tunisia', 'TND', 'Tunisian dinar', 'د.ت', NULL, 'Arabic', 'RTL', '1', '2024-01-31 12:34:33', NULL),
(224, NULL, NULL, 'TR', 'Turkey', 'TRY', 'Turkish lira', '₺', NULL, 'Turkish', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(225, NULL, NULL, 'TM', 'Turkmenistan', 'TMT', 'Turkmenistani manat', 'm', NULL, 'Turkmen', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(226, NULL, NULL, 'TC', 'Turks and Caicos Islands', 'USD', 'United States Dollar', '$', NULL, 'English', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(227, NULL, NULL, 'TV', 'Tuvalu', 'AUD', 'Australian dollar', '$', NULL, 'Tuvaluan, English', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(228, NULL, NULL, 'UG', 'Uganda', 'USD', 'United States Dollar', '$', NULL, 'English, Swahili', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(229, NULL, NULL, 'UA', 'Ukraine', 'UAH', 'Ukrainian hryvnia', '₴', NULL, 'Ukrainian', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(230, NULL, NULL, 'AE', 'United Arab Emirates', 'AED', 'United Arab Emirates dirham', 'د.إ', NULL, 'Arabic', 'RTL', '1', '2024-01-31 12:34:33', NULL),
(231, NULL, NULL, 'GB', 'United Kingdom', 'GBP', 'Pound sterling', '£', NULL, 'English', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(232, NULL, NULL, 'US', 'United States', 'USD', 'United States Dollar', '$', NULL, 'English', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(233, NULL, NULL, 'UM', 'United States minor outlying islands', NULL, NULL, NULL, NULL, 'English', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(234, NULL, NULL, 'UY', 'Uruguay', 'UYU', 'Uruguayan peso', '$U', NULL, 'Spanish', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(235, NULL, NULL, 'UZ', 'Uzbekistan', 'UZS', 'Uzbekistan som', 'лв', NULL, 'Uzbek', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(236, NULL, NULL, 'VU', 'Vanuatu', 'VUV', 'Vanuatu vatu', 'VT', NULL, 'Bislama, English, French', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(237, NULL, NULL, 'VA', 'Vatican City State', NULL, NULL, NULL, NULL, 'Italian, Latin', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(238, NULL, NULL, 'VE', 'Venezuela', 'VEF', 'Venezuelan bolívar', 'Bs.S.', NULL, 'Spanish', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(239, NULL, NULL, 'VN', 'Vietnam', 'VND', 'Vietnamese đồng', '₫', NULL, 'Vietnamese', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(240, NULL, NULL, 'VG', 'Virgin Islands (British)', 'USD', 'United States Dollar', '$', NULL, 'English', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(241, NULL, NULL, 'VI', 'Virgin Islands (U.S.)', 'USD', 'United States Dollar', '$', NULL, 'English', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(242, NULL, NULL, 'WF', 'Wallis and Futuna Islands', NULL, NULL, NULL, NULL, 'French', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(243, NULL, NULL, 'EH', 'Western Sahara', 'MAD', 'Moroccan dirham', 'د.م.', NULL, 'Arabic', 'RTL', '1', '2024-01-31 12:34:33', NULL),
(244, NULL, NULL, 'YE', 'Yemen', 'YER', 'Yemeni rial', '﷼', NULL, 'Arabic', 'RTL', '1', '2024-01-31 12:34:33', NULL),
(245, NULL, NULL, 'ZM', 'Zambia', 'ZMW', 'Zambian kwacha', 'ZK', NULL, 'English', 'LTR', '1', '2024-01-31 12:34:33', NULL),
(246, NULL, NULL, 'ZW', 'Zimbabwe', 'USD', 'United States Dollar', '$', NULL, 'English, Shona, Ndebele', 'LTR', '1', '2024-01-31 12:34:33', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `custom_user_images`
--

DROP TABLE IF EXISTS `custom_user_images`;
CREATE TABLE `custom_user_images` (
  `id` bigint UNSIGNED NOT NULL,
  `client_id` varchar(10) DEFAULT NULL,
  `user_id` varchar(10) DEFAULT NULL,
  `web_user_id` varchar(10) DEFAULT NULL,
  `title` varchar(200) DEFAULT NULL,
  `custom_user_image` varchar(200) DEFAULT NULL,
  `base_lang` varchar(5) NOT NULL DEFAULT 'en',
  `active` varchar(5) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `deleted_for` varchar(10) DEFAULT NULL
)   ;

-- --------------------------------------------------------

--
-- Table structure for table `custom_user_voices`
--

DROP TABLE IF EXISTS `custom_user_voices`;
CREATE TABLE `custom_user_voices` (
  `id` bigint UNSIGNED NOT NULL,
  `client_id` varchar(10) DEFAULT NULL,
  `user_id` varchar(10) DEFAULT NULL,
  `web_user_id` varchar(10) DEFAULT NULL,
  `title` varchar(200) DEFAULT NULL,
  `custom_user_voice` varchar(200) DEFAULT NULL,
  `base_lang` varchar(5) NOT NULL DEFAULT 'en',
  `active` varchar(5) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `deleted_for` varchar(10) DEFAULT NULL
)   ;

-- --------------------------------------------------------

--
-- Table structure for table `dznr_modules`
--

DROP TABLE IF EXISTS `dznr_modules`;
CREATE TABLE `dznr_modules` (
  `id` int NOT NULL,
  `client_id` varchar(10) DEFAULT NULL,
  `module_name` varchar(200) NOT NULL,
  `parent_module` varchar(100) DEFAULT '0',
  `module_folder` varchar(50) DEFAULT NULL,
  `module_type` varchar(100) DEFAULT 'application',
  `module_descr` text,
  `module_icon` varchar(50) DEFAULT NULL,
  `table_name` varchar(100) DEFAULT NULL,
  `controller_file` varchar(50) DEFAULT NULL,
  `list_view_file` varchar(100)  DEFAULT NULL,
  `addedit_view_file` varchar(100) DEFAULT NULL,
  `filter` varchar(500) DEFAULT NULL,
  `is_hidden` varchar(5) NOT NULL DEFAULT 'N',
  `active` varchar(5) NOT NULL DEFAULT '1',
  `user_id` varchar(10) DEFAULT NULL,
  `recdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` datetime DEFAULT NULL
)  ;

--
-- Dumping data for table `dznr_modules`
--

INSERT INTO `dznr_modules` (`id`, `client_id`, `module_name`, `parent_module`, `module_folder`, `module_type`, `module_descr`, `module_icon`, `table_name`, `controller_file`, `list_view_file`, `addedit_view_file`, `filter`, `is_hidden`, `active`, `user_id`, `recdate`, `deleted_at`) VALUES
(35, NULL, 'Menu', '0', NULL, 'application', NULL, NULL, '', NULL, NULL, NULL, NULL, 'N', '1', NULL, '2022-03-29 01:48:41', NULL),
(40, NULL, 'User Widgets', '0', NULL, 'application', NULL, NULL, '', NULL, NULL, NULL, NULL, 'N', '1', NULL, '2022-03-29 01:48:41', NULL),
(152, NULL, 'Lookups', '0', NULL, 'application', NULL, NULL, '', NULL, NULL, NULL, NULL, 'N', '1', NULL, '2022-03-29 01:48:41', NULL),
(155, NULL, 'Users', '35', NULL, 'main_module', NULL, 'fa fas-list', 'users', 'users', NULL, NULL, NULL, 'N', '1', NULL, '2024-05-16 17:00:59', NULL),
(157, NULL, 'Envelop inside images', '152', NULL, 'lookup', NULL, 'fa fas-list', 'envelop_inside_images', 'envelop_inside_images', NULL, NULL, NULL, 'N', '1', NULL, '2024-05-16 17:24:35', NULL),
(159, NULL, 'Effects', '152', NULL, 'lookup', NULL, 'fa fas-list', 'effects', 'effects', NULL, NULL, NULL, 'N', '1', NULL, '2024-05-16 17:27:42', NULL),
(160, NULL, 'Tags', '152', NULL, 'lookup', NULL, 'fa fas-list', 'tags', 'tags', NULL, NULL, NULL, 'N', '1', NULL, '2024-05-16 17:29:03', NULL),
(161, NULL, 'Blog Categories', '152', NULL, 'lookup', NULL, 'fa fas-list', 'blog_categories', 'blog_categories', NULL, NULL, NULL, 'N', '1', NULL, '2024-05-16 17:30:29', NULL),
(162, NULL, 'Stamp Designs', '152', NULL, 'lookup', NULL, 'fa fas-list', 'stamp_designs', 'stamp_designs', NULL, NULL, NULL, 'N', '1', NULL, '2024-05-16 17:31:53', NULL),
(163, NULL, 'Stamp Images', '152', NULL, 'lookup', NULL, 'fa fas-list', 'stamp_images', 'stamp_images', NULL, NULL, NULL, 'N', '1', NULL, '2024-05-16 17:33:12', NULL),
(164, NULL, 'Custom User Images', '152', NULL, 'lookup', NULL, 'fa fas-list', 'custom_user_images', 'custom_user_images', NULL, NULL, NULL, 'N', '1', NULL, '2024-05-16 17:36:05', NULL),
(165, NULL, 'Custom User Voices', '152', NULL, 'lookup', NULL, 'fa fas-list', 'custom_user_voices', 'custom_user_voices', NULL, NULL, NULL, 'N', '1', NULL, '2024-05-16 17:37:57', NULL),
(166, NULL, 'Sound Files', '152', NULL, 'lookup', NULL, 'fa fas-list', 'sound_files', 'sound_files', NULL, NULL, NULL, 'N', '1', NULL, '2024-05-16 17:47:59', NULL),
(167, NULL, 'Card Categories', '35', NULL, 'main_module', NULL, 'fa fas-list', 'card_categories', 'card_categories', NULL, NULL, NULL, 'N', '1', NULL, '2024-05-16 18:12:30', NULL),
(168, NULL, 'Cards', '35', NULL, 'main_module', NULL, 'fa fas-list', 'cards', 'cards', NULL, NULL, NULL, 'N', '1', NULL, '2024-05-16 18:31:21', NULL),
(169, NULL, 'Card Payments', '35', NULL, 'main_module', NULL, 'fa fas-list', 'card_payments', 'card_payments', NULL, NULL, NULL, 'N', '1', NULL, '2024-05-16 18:33:40', NULL),
(170, NULL, 'Card Reviews', '35', NULL, 'main_module', NULL, 'fa fas-list', 'card_reviews', 'card_reviews', NULL, NULL, NULL, 'N', '1', NULL, '2024-05-16 18:35:54', NULL),
(171, NULL, 'Favourites', '35', NULL, 'main_module', NULL, 'fa fas-list', 'favourites', 'favourites', NULL, NULL, NULL, 'N', '1', NULL, '2024-05-16 18:38:40', NULL),
(172, NULL, 'Blog Posts', '35', NULL, 'main_module', NULL, 'fa fas-list', 'blog_posts', 'blog_posts', NULL, NULL, NULL, 'N', '1', NULL, '2024-05-16 18:40:57', NULL),
(173, NULL, 'Blog Posts', '35', NULL, 'main_module', NULL, 'fa fas-list', 'blog_posts', 'blog_posts', NULL, NULL, NULL, 'N', '1', NULL, '2024-05-16 18:53:45', NULL),
(174, NULL, 'Post Reviews', '35', NULL, 'main_module', NULL, 'fa fas-list', 'post_reviews', 'post_reviews', NULL, NULL, NULL, 'N', '1', NULL, '2024-05-16 18:55:40', NULL),
(175, NULL, 'Stickers', '152', NULL, 'lookup', NULL, 'fa fas-list', 'stickers', 'stickers', NULL, NULL, NULL, 'N', '1', NULL, '2024-05-21 13:23:48', NULL),
(176, NULL, 'Backgrounds', '152', NULL, 'lookup', NULL, 'fa fas-list', 'backgrounds', 'backgrounds', NULL, NULL, NULL, 'N', '1', NULL, '2024-05-24 22:28:44', NULL),
(177, NULL, 'Seal Designs', '152', NULL, 'lookup', NULL, 'fa fas-list', 'seal_designs', 'seal_designs', NULL, NULL, NULL, 'N', '1', NULL, '2024-05-25 08:28:46', NULL),
(178, NULL, 'Envelop Designs', '152', NULL, 'lookup', NULL, 'fa fas-list', 'envelop_designs', 'envelop_designs', NULL, NULL, NULL, 'N', '1', NULL, '2024-05-25 14:24:38', NULL),
(180, NULL, 'Envelop Design Parts', '152', NULL, 'lookup', NULL, 'fa fas-list', 'envelop_design_parts', 'envelop_design_parts', NULL, NULL, NULL, 'N', '1', NULL, '2024-05-25 15:08:16', NULL),
(181, NULL, 'Music Categories', '152', NULL, 'lookup', NULL, 'fa fas-list', 'music_categories', 'music_categories', NULL, NULL, NULL, 'N', '1', NULL, '2024-05-28 00:25:23', NULL),
(182, NULL, 'Music Files', '35', NULL, 'main_module', NULL, 'fa fas-list', 'music_files', 'music_files', NULL, NULL, NULL, 'N', '1', NULL, '2024-05-28 00:26:55', NULL),
(184, NULL, 'Attendance Question', '40', NULL, 'main_module', NULL, 'fa fas-list', 'widget_attend_quest', 'attendance_question', NULL, NULL, NULL, 'N', '1', NULL, '2024-07-30 12:14:36', NULL),
(185, NULL, 'Cont & Comm', '40', NULL, 'main_module', NULL, 'fa fas_fa-circle', 'widget_contact_comm', 'cont_&_comm', NULL, NULL, NULL, 'N', '1', NULL, '2024-07-30 12:25:02', NULL),
(186, NULL, 'Countdown Timer', '40', NULL, 'main_module', NULL, 'fa fas_fa-circle', 'widget_countdown', 'countdown_timer', NULL, NULL, NULL, 'N', '1', NULL, '2024-07-30 12:36:21', NULL),
(187, NULL, 'Link', '40', NULL, 'main_module', NULL, 'fa fas_fa-circle', 'widget_link', 'link', NULL, NULL, NULL, 'N', '1', NULL, '2024-07-30 12:43:17', NULL),
(188, NULL, 'Optional Question', '40', NULL, 'main_module', NULL, 'fa fas_fa-circle', 'widget_optional_question', 'optional_question', NULL, NULL, NULL, 'N', '1', NULL, '2024-07-30 12:53:19', NULL),
(189, NULL, 'Text Question', '40', NULL, 'main_module', NULL, 'fa fas_fa-circle', 'widget_text_question', 'text_question', NULL, NULL, NULL, 'N', '1', NULL, '2024-07-30 12:59:11', NULL),
(190, NULL, 'Social Network', '40', NULL, 'main_module', NULL, 'fa fas_fa-circle', 'widget_social_network', 'social_network', NULL, NULL, NULL, 'N', '1', NULL, '2024-07-30 13:07:50', NULL),
(191, NULL, 'Memorial Request', '40', NULL, 'main_module', NULL, 'fa fas_fa-circle', 'widget_memorial', 'memorial_request', NULL, NULL, NULL, 'N', '1', NULL, '2024-07-30 13:28:19', NULL),
(192, NULL, 'USER TEXT', '40', NULL, 'main_module', NULL, 'fa fas_fa-circle', 'widget_user_text', 'user_text', NULL, NULL, NULL, 'N', '1', NULL, '2024-07-30 13:32:02', NULL),
(193, NULL, 'User Images', '40', NULL, 'main_module', NULL, 'fa fas_fa-circle', 'widget_image', 'user_images', NULL, NULL, NULL, 'N', '1', NULL, '2024-07-30 14:04:49', NULL),
(194, NULL, 'Card Video', '40', NULL, 'main_module', NULL, 'fa fas_fa-circle', 'widget_video', 'card_video', NULL, NULL, NULL, 'N', '1', NULL, '2024-07-30 14:07:18', NULL),
(195, NULL, 'Card Recipients', '40', NULL, 'main_module', NULL, 'fa fas_fa-circle', 'card_recipients', 'card_recipients', NULL, NULL, NULL, 'N', '1', NULL, '2024-07-30 14:17:15', NULL),
(196, NULL, 'Card Reviews', '40', NULL, 'main_module', NULL, 'fa fas_fa-circle', 'card_reviews', 'card_reviews', NULL, NULL, NULL, 'N', '1', NULL, '2024-07-30 14:20:43', NULL),
(197, NULL, 'Widgets Ticket Type', '35', NULL, 'main_module', NULL, 'fa fas_fa-circle', 'widgets_ticket_type', 'widgets_ticket_type', NULL, NULL, NULL, 'Y', '1', NULL, '2024-07-30 14:37:59', NULL),
(199, NULL, 'Ticket Types', '152', NULL, 'lookup', NULL, 'fa fas_fa-circle', 'ticket_types', 'ticket_types', NULL, NULL, NULL, 'N', '1', NULL, '2024-08-03 15:27:55', NULL),
(202, NULL, 'Music Files', '152', NULL, 'lookup', NULL, 'fa fas_fa-circle', 'music_files', 'music_files', NULL, NULL, NULL, 'N', '1', NULL, '2024-08-03 21:23:08', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `dznr_module_fields`
--

DROP TABLE IF EXISTS `dznr_module_fields`;
CREATE TABLE `dznr_module_fields` (
  `id` int NOT NULL,
  `client_id` varchar(10) DEFAULT NULL,
  `user_id` varchar(10) DEFAULT NULL,
  `dznr_moduleid` varchar(5) DEFAULT NULL,
  `field_label` varchar(200) DEFAULT NULL,
  `field_name` varchar(200) DEFAULT NULL,
  `placeholder` varchar(200) DEFAULT NULL,
  `field_type` varchar(100) DEFAULT NULL,
  `isrequired` varchar(5) DEFAULT NULL,
  `display_seq` int DEFAULT '0',
  `default_value` varchar(200) DEFAULT NULL,
  `range_min` int DEFAULT NULL,
  `range_max` int DEFAULT NULL,
  `list_type` varchar(200) DEFAULT NULL,
  `input_length` int DEFAULT '255',
  `staticlist` text,
  `listmodulename` varchar(200) DEFAULT NULL,
  `listmoduleitem` varchar(200) DEFAULT NULL,
  `onlistpag` varchar(5) DEFAULT NULL,
  `active` varchar(5) NOT NULL DEFAULT '1',
  `userid` varchar(10) DEFAULT NULL,
  `recdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` datetime DEFAULT NULL
)  ;

--
-- Dumping data for table `dznr_module_fields`
--

INSERT INTO `dznr_module_fields` (`id`, `client_id`, `user_id`, `dznr_moduleid`, `field_label`, `field_name`, `placeholder`, `field_type`, `isrequired`, `display_seq`, `default_value`, `range_min`, `range_max`, `list_type`, `input_length`, `staticlist`, `listmodulename`, `listmoduleitem`, `onlistpag`, `active`, `userid`, `recdate`, `deleted_at`) VALUES
(214, NULL, NULL, '180', 'FLAP IMAGE', 'flap_image', NULL, 'single_image', 'N', 8, NULL, NULL, NULL, NULL, 255, '', '', '', '', '1', NULL, '2024-05-25 15:08:16', NULL),
(215, NULL, NULL, '180', 'ACTIVE', 'active', NULL, 'list_single', 'Y', 9, NULL, NULL, NULL, NULL, 255, '', 'active_status', 'is_active', 'Y', '1', NULL, '2024-05-25 15:08:16', NULL),
(213, NULL, NULL, '180', 'BACK IMAGE', 'back_image', NULL, 'single_image', 'N', 7, NULL, NULL, NULL, NULL, 255, '', '', '', '', '1', NULL, '2024-05-25 15:08:16', NULL),
(212, NULL, NULL, '180', 'FRONT IMAGE', 'front_image', NULL, 'single_image', 'N', 6, NULL, NULL, NULL, NULL, 255, '', '', '', '', '1', NULL, '2024-05-25 15:08:16', NULL),
(211, NULL, NULL, '180', 'THUMBNAIL', 'thumbnail', NULL, 'single_image', 'N', 5, NULL, NULL, NULL, NULL, 255, '', '', '', '', '1', NULL, '2024-05-25 15:08:16', NULL),
(11, NULL, NULL, '155', 'ID', 'id', NULL, 'hidden_input', 'Y', 1, NULL, NULL, NULL, NULL, 255, '', '', '', 'Y', '1', NULL, '2024-05-16 17:00:59', NULL),
(12, NULL, NULL, '155', 'USER', 'user_id', NULL, 'hidden_input', 'N', 2, NULL, NULL, NULL, NULL, 255, '', '', '', '', '1', NULL, '2024-05-16 17:00:59', NULL),
(13, NULL, NULL, '155', 'WEB USER', 'web_user_id', NULL, 'hidden_input', 'N', 3, NULL, NULL, NULL, NULL, 255, '', '', '', '', '1', NULL, '2024-05-16 17:00:59', NULL),
(14, NULL, NULL, '155', 'FULL NAME', 'name', NULL, 'text_input', 'Y', 4, NULL, NULL, NULL, NULL, 255, '', '', '', 'Y', '1', NULL, '2024-05-16 17:00:59', NULL),
(15, NULL, NULL, '155', 'EMAIL', 'email', NULL, 'text_input', 'Y', 5, NULL, NULL, NULL, NULL, 255, '', '', '', 'Y', '1', NULL, '2024-05-16 17:00:59', NULL),
(16, NULL, NULL, '155', 'EMAIL VERIFIED AT', 'email_verified_at', NULL, 'date_time', 'N', 6, NULL, NULL, NULL, NULL, 255, '', '', '', 'Y', '1', NULL, '2024-05-16 17:00:59', NULL),
(17, NULL, NULL, '155', 'VALIDATION CODE', 'validation_code', NULL, 'text_input', 'N', 7, NULL, NULL, NULL, NULL, 255, '', '', '', '', '1', NULL, '2024-05-16 17:00:59', NULL),
(18, NULL, NULL, '155', 'PASSWORD', 'password', NULL, 'text_input', 'Y', 8, NULL, NULL, NULL, NULL, 255, '', '', '', '', '1', NULL, '2024-05-16 17:00:59', NULL),
(19, NULL, NULL, '155', 'ACTIVE', 'active', NULL, 'list_single', 'Y', 9, NULL, NULL, NULL, NULL, 255, '', 'active_status', 'is_active', 'Y', '1', NULL, '2024-05-16 17:00:59', NULL),
(20, NULL, NULL, '155', 'ACCOUNT TYPE', 'account_type', NULL, 'list_single', 'N', 10, NULL, NULL, NULL, NULL, 255, 'Admin,User', '', '', 'N', '1', NULL, '2024-05-16 17:00:59', NULL),
(21, NULL, NULL, '155', 'PHOTO', 'photo', NULL, 'single_image', 'N', 11, NULL, NULL, NULL, NULL, 255, '', '', '', '', '1', NULL, '2024-05-16 17:00:59', NULL),
(22, NULL, NULL, '155', 'COUNTRY', 'country', NULL, 'list_single', 'N', 12, NULL, NULL, NULL, NULL, 255, '', 'countries', 'country_name', 'N', '1', NULL, '2024-05-16 17:00:59', NULL),
(23, NULL, NULL, '155', 'STATE', 'state', NULL, 'text_input', 'N', 13, NULL, NULL, NULL, NULL, 255, '', '', '', 'N', '1', NULL, '2024-05-16 17:00:59', NULL),
(24, NULL, NULL, '155', 'CITY', 'city', NULL, 'text_input', 'N', 14, NULL, NULL, NULL, NULL, 255, '', '', '', 'N', '1', NULL, '2024-05-16 17:00:59', NULL),
(25, NULL, NULL, '155', 'STREET ADDRESS', 'street_address', NULL, 'text_area', 'N', 15, NULL, NULL, NULL, NULL, 255, '', '', '', '', '1', NULL, '2024-05-16 17:00:59', NULL),
(26, NULL, NULL, '155', 'ZIP POST CODE', 'zip_post_code', NULL, 'text_input', 'N', 16, NULL, NULL, NULL, NULL, 255, '', '', '', '', '1', NULL, '2024-05-16 17:00:59', NULL),
(27, NULL, NULL, '155', 'PHONE', 'phone', NULL, 'text_input', 'N', 17, NULL, NULL, NULL, NULL, 255, '', '', '', 'N', '1', NULL, '2024-05-16 17:00:59', NULL),
(28, NULL, NULL, '155', 'AGREE TERMS CONDITION', 'agree_terms_condition', NULL, 'check_box', 'N', 18, NULL, NULL, NULL, NULL, 255, '', '', '', '', '1', NULL, '2024-05-16 17:00:59', NULL),
(197, NULL, NULL, '178', 'ACTIVE', 'active', NULL, 'list_single', 'Y', 7, NULL, NULL, NULL, NULL, 255, '', 'active_status', 'is_active', 'Y', '1', NULL, '2024-05-25 14:24:39', NULL),
(196, NULL, NULL, '178', 'MAIN IMAGE', 'main_image', NULL, 'single_image', 'N', 6, NULL, NULL, NULL, NULL, 255, '', '', '', '', '1', NULL, '2024-05-25 14:24:39', NULL),
(195, NULL, NULL, '178', 'SHORT DESC', 'short_desc', NULL, 'text_input', 'N', 5, NULL, NULL, NULL, NULL, 255, '', '', '', '', '1', NULL, '2024-05-25 14:24:39', NULL),
(194, NULL, NULL, '178', 'TITLE', 'title', NULL, 'text_input', 'N', 4, NULL, NULL, NULL, NULL, 255, '', '', '', 'Y', '1', NULL, '2024-05-25 14:24:39', NULL),
(193, NULL, NULL, '178', 'WEB USER', 'web_user_id', NULL, 'hidden_input', 'N', 3, NULL, NULL, NULL, NULL, 255, '', '', '', '', '1', NULL, '2024-05-25 14:24:39', NULL),
(192, NULL, NULL, '178', 'USER', 'user_id', NULL, 'hidden_input', 'N', 2, NULL, NULL, NULL, NULL, 255, '', '', '', '', '1', NULL, '2024-05-25 14:24:39', NULL),
(191, NULL, NULL, '178', 'ID', 'id', NULL, 'hidden_input', 'Y', 1, NULL, NULL, NULL, NULL, 255, '', '', '', 'Y', '1', NULL, '2024-05-25 14:24:39', NULL),
(36, NULL, NULL, '157', 'ID', 'id', NULL, 'hidden_input', 'Y', 1, NULL, NULL, NULL, NULL, 255, '', '', '', 'Y', '1', NULL, '2024-05-16 17:24:35', NULL),
(37, NULL, NULL, '157', 'USER', 'user_id', NULL, 'hidden_input', 'N', 2, NULL, NULL, NULL, NULL, 255, '', '', '', '', '1', NULL, '2024-05-16 17:24:35', NULL),
(38, NULL, NULL, '157', 'WEB USER', 'web_user_id', NULL, 'hidden_input', 'N', 3, NULL, NULL, NULL, NULL, 255, '', '', '', '', '1', NULL, '2024-05-16 17:24:35', NULL),
(39, NULL, NULL, '157', 'TITLE', 'title', NULL, 'text_input', 'N', 4, NULL, NULL, NULL, NULL, 255, '', '', '', 'Y', '1', NULL, '2024-05-16 17:24:35', NULL),
(40, NULL, NULL, '157', 'MAIN IMAGE', 'main_image', NULL, 'single_image', 'N', 5, NULL, NULL, NULL, NULL, 255, '', '', '', '', '1', NULL, '2024-05-16 17:24:35', NULL),
(41, NULL, NULL, '157', 'MORE IMAGE', 'more_image', NULL, 'muliti_images', 'N', 6, NULL, NULL, NULL, NULL, 255, '', '', '', '', '1', NULL, '2024-05-16 17:24:35', NULL),
(42, NULL, NULL, '157', 'ACTIVE', 'active', NULL, 'list_single', 'Y', 7, NULL, NULL, NULL, NULL, 255, '', 'active_status', 'is_active', 'Y', '1', NULL, '2024-05-16 17:24:35', NULL),
(95, NULL, NULL, '166', 'SOUND FILE', 'sound_file', NULL, 'single_file', 'N', 5, NULL, NULL, NULL, NULL, 255, '', '', '', '', '1', NULL, '2024-05-16 17:47:59', NULL),
(94, NULL, NULL, '166', 'TITLE', 'title', NULL, 'text_input', 'N', 4, NULL, NULL, NULL, NULL, 255, '', '', '', 'Y', '1', NULL, '2024-05-16 17:47:59', NULL),
(93, NULL, NULL, '166', 'WEB USER', 'web_user_id', NULL, 'hidden_input', 'N', 3, NULL, NULL, NULL, NULL, 255, '', '', '', '', '1', NULL, '2024-05-16 17:47:59', NULL),
(92, NULL, NULL, '166', 'USER', 'user_id', NULL, 'hidden_input', 'N', 2, NULL, NULL, NULL, NULL, 255, '', '', '', '', '1', NULL, '2024-05-16 17:47:59', NULL),
(91, NULL, NULL, '166', 'ID', 'id', NULL, 'hidden_input', 'Y', 1, NULL, NULL, NULL, NULL, 255, '', '', '', 'Y', '1', NULL, '2024-05-16 17:47:59', NULL),
(49, NULL, NULL, '159', 'ID', 'id', NULL, 'hidden_input', 'Y', 1, NULL, NULL, NULL, NULL, 255, '', '', '', 'Y', '1', NULL, '2024-05-16 17:27:42', NULL),
(50, NULL, NULL, '159', 'USER', 'user_id', NULL, 'hidden_input', 'N', 2, NULL, NULL, NULL, NULL, 255, '', '', '', '', '1', NULL, '2024-05-16 17:27:42', NULL),
(51, NULL, NULL, '159', 'WEB USER', 'web_user_id', NULL, 'hidden_input', 'N', 3, NULL, NULL, NULL, NULL, 255, '', '', '', '', '1', NULL, '2024-05-16 17:27:42', NULL),
(52, NULL, NULL, '159', 'TITLE', 'title', NULL, 'text_input', 'N', 4, NULL, NULL, NULL, NULL, 255, '', '', '', 'Y', '1', NULL, '2024-05-16 17:27:42', NULL),
(53, NULL, NULL, '159', 'EFFECTS FILE', 'effects_file', NULL, 'list_single', 'N', 5, NULL, NULL, NULL, NULL, 255, '', '', '', '', '1', NULL, '2024-05-16 17:27:42', NULL),
(54, NULL, NULL, '159', 'ACTIVE', 'active', NULL, 'list_single', 'Y', 6, NULL, NULL, NULL, NULL, 255, '', 'active_status', 'is_active', 'Y', '1', NULL, '2024-05-16 17:27:42', NULL),
(55, NULL, NULL, '160', 'ID', 'id', NULL, 'hidden_input', 'Y', 1, NULL, NULL, NULL, NULL, 255, '', '', '', 'Y', '1', NULL, '2024-05-16 17:29:03', NULL),
(56, NULL, NULL, '160', 'USER', 'user_id', NULL, 'hidden_input', 'N', 2, NULL, NULL, NULL, NULL, 255, '', '', '', '', '1', NULL, '2024-05-16 17:29:03', NULL),
(57, NULL, NULL, '160', 'WEB USER', 'web_user_id', NULL, 'hidden_input', 'N', 3, NULL, NULL, NULL, NULL, 255, '', '', '', '', '1', NULL, '2024-05-16 17:29:03', NULL),
(58, NULL, NULL, '160', 'TAG', 'tag', NULL, 'text_input', 'N', 4, NULL, NULL, NULL, NULL, 255, '', '', '', 'Y', '1', NULL, '2024-05-16 17:29:03', NULL),
(59, NULL, NULL, '160', 'ACTIVE', 'active', NULL, 'list_single', 'Y', 5, NULL, NULL, NULL, NULL, 255, '', 'active_status', 'is_active', 'Y', '1', NULL, '2024-05-16 17:29:03', NULL),
(60, NULL, NULL, '161', 'ID', 'id', NULL, 'hidden_input', 'Y', 1, NULL, NULL, NULL, NULL, 255, '', '', '', 'Y', '1', NULL, '2024-05-16 17:30:29', NULL),
(61, NULL, NULL, '161', 'USER', 'user_id', NULL, 'hidden_input', 'N', 2, NULL, NULL, NULL, NULL, 255, '', '', '', '', '1', NULL, '2024-05-16 17:30:29', NULL),
(62, NULL, NULL, '161', 'WEB USER', 'web_user_id', NULL, 'hidden_input', 'N', 3, NULL, NULL, NULL, NULL, 255, '', '', '', '', '1', NULL, '2024-05-16 17:30:29', NULL),
(63, NULL, NULL, '161', 'BLOG CATEGORY', 'blog_category', NULL, 'text_input', 'N', 4, NULL, NULL, NULL, NULL, 255, '', '', '', 'Y', '1', NULL, '2024-05-16 17:30:29', NULL),
(64, NULL, NULL, '161', 'ACTIVE', 'active', NULL, 'list_single', 'Y', 5, NULL, NULL, NULL, NULL, 255, '', 'active_status', 'is_active', 'Y', '1', NULL, '2024-05-16 17:30:29', NULL),
(65, NULL, NULL, '162', 'ID', 'id', NULL, 'hidden_input', 'Y', 1, NULL, NULL, NULL, NULL, 255, '', '', '', 'Y', '1', NULL, '2024-05-16 17:31:53', NULL),
(66, NULL, NULL, '162', 'USER', 'user_id', NULL, 'hidden_input', 'N', 2, NULL, NULL, NULL, NULL, 255, '', '', '', '', '1', NULL, '2024-05-16 17:31:53', NULL),
(67, NULL, NULL, '162', 'WEB USER', 'web_user_id', NULL, 'hidden_input', 'N', 3, NULL, NULL, NULL, NULL, 255, '', '', '', '', '1', NULL, '2024-05-16 17:31:53', NULL),
(68, NULL, NULL, '162', 'TITLE', 'title', NULL, 'text_input', 'N', 4, NULL, NULL, NULL, NULL, 255, '', '', '', 'Y', '1', NULL, '2024-05-16 17:31:53', NULL),
(69, NULL, NULL, '162', 'MAIN IMAGE', 'main_image', NULL, 'single_image', 'N', 5, NULL, NULL, NULL, NULL, 255, '', '', '', '', '1', NULL, '2024-05-16 17:31:53', NULL),
(70, NULL, NULL, '162', 'MORE IMAGE', 'more_image', NULL, 'muliti_images', 'N', 6, NULL, NULL, NULL, NULL, 255, '', '', '', '', '1', NULL, '2024-05-16 17:31:53', NULL),
(71, NULL, NULL, '162', 'ACTIVE', 'active', NULL, 'list_single', 'Y', 7, NULL, NULL, NULL, NULL, 255, '', 'active_status', 'is_active', 'Y', '1', NULL, '2024-05-16 17:31:53', NULL),
(72, NULL, NULL, '163', 'ID', 'id', NULL, 'hidden_input', 'Y', 1, NULL, NULL, NULL, NULL, 255, '', '', '', 'Y', '1', NULL, '2024-05-16 17:33:12', NULL),
(73, NULL, NULL, '163', 'USER', 'user_id', NULL, 'hidden_input', 'N', 2, NULL, NULL, NULL, NULL, 255, '', '', '', '', '1', NULL, '2024-05-16 17:33:12', NULL),
(74, NULL, NULL, '163', 'WEB USER', 'web_user_id', NULL, 'hidden_input', 'N', 3, NULL, NULL, NULL, NULL, 255, '', '', '', '', '1', NULL, '2024-05-16 17:33:12', NULL),
(75, NULL, NULL, '163', 'TITLE', 'title', NULL, 'text_input', 'N', 4, NULL, NULL, NULL, NULL, 255, '', '', '', 'Y', '1', NULL, '2024-05-16 17:33:12', NULL),
(76, NULL, NULL, '163', 'MAIN IMAGE', 'main_image', NULL, 'single_image', 'N', 5, NULL, NULL, NULL, NULL, 255, '', '', '', '', '1', NULL, '2024-05-16 17:33:12', NULL),
(77, NULL, NULL, '163', 'MORE IMAGE', 'more_image', NULL, 'muliti_images', 'N', 6, NULL, NULL, NULL, NULL, 255, '', '', '', '', '1', NULL, '2024-05-16 17:33:12', NULL),
(78, NULL, NULL, '163', 'ACTIVE', 'active', NULL, 'list_single', 'Y', 7, NULL, NULL, NULL, NULL, 255, '', 'active_status', 'is_active', 'Y', '1', NULL, '2024-05-16 17:33:12', NULL),
(79, NULL, NULL, '164', 'ID', 'id', NULL, 'hidden_input', 'Y', 1, NULL, NULL, NULL, NULL, 255, '', '', '', 'Y', '1', NULL, '2024-05-16 17:36:05', NULL),
(80, NULL, NULL, '164', 'USER', 'user_id', NULL, 'hidden_input', 'N', 2, NULL, NULL, NULL, NULL, 255, '', '', '', '', '1', NULL, '2024-05-16 17:36:05', NULL),
(81, NULL, NULL, '164', 'WEB USER', 'web_user_id', NULL, 'hidden_input', 'N', 3, NULL, NULL, NULL, NULL, 255, '', '', '', '', '1', NULL, '2024-05-16 17:36:05', NULL),
(82, NULL, NULL, '164', 'TITLE', 'title', NULL, 'text_input', 'N', 4, NULL, NULL, NULL, NULL, 255, '', '', '', 'Y', '1', NULL, '2024-05-16 17:36:05', NULL),
(83, NULL, NULL, '164', 'CUSTOM USER IMAGE', 'custom_user_image', NULL, 'list_single', 'N', 5, NULL, NULL, NULL, NULL, 255, '', '', '', '', '1', NULL, '2024-05-16 17:36:05', NULL),
(84, NULL, NULL, '164', 'ACTIVE', 'active', NULL, 'list_single', 'Y', 6, NULL, NULL, NULL, NULL, 255, '', 'active_status', 'is_active', 'Y', '1', NULL, '2024-05-16 17:36:05', NULL),
(85, NULL, NULL, '165', 'ID', 'id', NULL, 'hidden_input', 'Y', 1, NULL, NULL, NULL, NULL, 255, '', '', '', 'Y', '1', NULL, '2024-05-16 17:37:57', NULL),
(86, NULL, NULL, '165', 'USER', 'user_id', NULL, 'hidden_input', 'N', 2, NULL, NULL, NULL, NULL, 255, '', '', '', '', '1', NULL, '2024-05-16 17:37:57', NULL),
(87, NULL, NULL, '165', 'WEB USER', 'web_user_id', NULL, 'hidden_input', 'N', 3, NULL, NULL, NULL, NULL, 255, '', '', '', '', '1', NULL, '2024-05-16 17:37:57', NULL),
(88, NULL, NULL, '165', 'TITLE', 'title', NULL, 'text_input', 'N', 4, NULL, NULL, NULL, NULL, 255, '', '', '', 'Y', '1', NULL, '2024-05-16 17:37:57', NULL),
(89, NULL, NULL, '165', 'USER VOICE', 'custom_user_voice', NULL, 'single_file', 'N', 5, NULL, NULL, NULL, NULL, 255, '', '', '', '', '1', NULL, '2024-05-16 17:37:57', NULL),
(90, NULL, NULL, '165', 'ACTIVE', 'active', NULL, 'list_single', 'Y', 6, NULL, NULL, NULL, NULL, 255, '', 'active_status', 'is_active', 'Y', '1', NULL, '2024-05-16 17:37:57', NULL),
(96, NULL, NULL, '166', 'ACTIVE', 'active', NULL, 'list_single', 'Y', 6, NULL, NULL, NULL, NULL, 255, '', 'active_status', 'is_active', 'Y', '1', NULL, '2024-05-16 17:47:59', NULL),
(97, NULL, NULL, '167', 'ID', 'id', NULL, 'hidden_input', 'Y', 1, NULL, NULL, NULL, NULL, 255, '', '', '', 'Y', '1', NULL, '2024-05-16 18:12:30', NULL),
(98, NULL, NULL, '167', 'USER', 'user_id', NULL, 'hidden_input', 'N', 2, NULL, NULL, NULL, NULL, 255, '', '', '', '', '1', NULL, '2024-05-16 18:12:30', NULL),
(99, NULL, NULL, '167', 'WEB USER', 'web_user_id', NULL, 'hidden_input', 'N', 3, NULL, NULL, NULL, NULL, 255, '', '', '', '', '1', NULL, '2024-05-16 18:12:30', NULL),
(100, NULL, NULL, '167', 'CATEGORY IMAGE', 'cat_image', NULL, 'single_image', 'N', 4, NULL, NULL, NULL, NULL, 255, '', '', '', 'N', '1', NULL, '2024-05-16 18:12:30', NULL),
(101, NULL, NULL, '167', 'TITLE', 'title', NULL, 'text_input', 'N', 5, NULL, NULL, NULL, NULL, 255, '', '', '', 'Y', '1', NULL, '2024-05-16 18:12:30', NULL),
(102, NULL, NULL, '167', 'SHORT DESCR', 'short_descr', NULL, 'text_input', 'N', 6, NULL, NULL, NULL, NULL, 255, '', '', '', '', '1', NULL, '2024-05-16 18:12:30', NULL),
(103, NULL, NULL, '167', 'LONG DESCR', 'long_descr', NULL, 'text_area', 'N', 7, NULL, NULL, NULL, NULL, 255, '', '', '', '', '1', NULL, '2024-05-16 18:12:30', NULL),
(104, NULL, NULL, '167', 'SOUND FILES', 'sound_file_ids', NULL, 'list_multiple', 'N', 8, NULL, NULL, NULL, NULL, 255, '', 'sound_files', 'title', 'N', '1', NULL, '2024-05-16 18:12:30', NULL),
(105, NULL, NULL, '167', 'ACTIVE', 'active', NULL, 'list_single', 'Y', 9, NULL, NULL, NULL, NULL, 255, '', 'active_status', 'is_active', 'Y', '1', NULL, '2024-05-16 18:12:30', NULL),
(106, NULL, NULL, '168', 'ID', 'id', NULL, 'hidden_input', 'Y', 1, NULL, NULL, NULL, NULL, 255, '', '', '', 'Y', '1', NULL, '2024-05-16 18:31:21', NULL),
(107, NULL, NULL, '168', 'USER', 'user_id', NULL, 'hidden_input', 'N', 2, NULL, NULL, NULL, NULL, 255, '', '', '', '', '1', NULL, '2024-05-16 18:31:21', NULL),
(108, NULL, NULL, '168', 'WEB USER', 'web_user_id', NULL, 'hidden_input', 'N', 3, NULL, NULL, NULL, NULL, 255, '', 'users', 'name', 'N', '1', NULL, '2024-05-16 18:31:21', NULL),
(109, NULL, NULL, '168', 'CARD TITLE', 'title', NULL, 'text_input', 'N', 4, NULL, NULL, NULL, NULL, 255, '', '', '', 'Y', '1', NULL, '2024-05-16 18:31:21', NULL),
(110, NULL, NULL, '168', 'SHORT DESCR', 'short_descr', NULL, 'text_input', 'N', 5, NULL, NULL, NULL, NULL, 255, '', '', '', '', '1', NULL, '2024-05-16 18:31:21', NULL),
(111, NULL, NULL, '168', 'TAGS', 'tags', NULL, 'list_multiple', 'N', 6, NULL, NULL, NULL, NULL, 255, '', 'tags', 'tag', '', '1', NULL, '2024-05-16 18:31:22', NULL),
(112, NULL, NULL, '168', 'SHORT CODE', 'short_code', NULL, 'text_input', 'N', 7, NULL, NULL, NULL, NULL, 255, '', '', '', 'N', '1', NULL, '2024-05-16 18:31:22', NULL),
(113, NULL, NULL, '168', 'CARD IMAGE', 'card_image', NULL, 'single_image', 'N', 8, NULL, NULL, NULL, NULL, 255, '', '', '', '', '1', NULL, '2024-05-16 18:31:22', NULL),
(114, NULL, NULL, '168', 'CARD DESIGN', 'card_design', NULL, 'text_area', 'N', 9, NULL, NULL, NULL, NULL, 255, '', '', '', '', '1', NULL, '2024-05-16 18:31:22', NULL),
(115, NULL, NULL, '168', 'DESIGNED BY USER', 'designed_by_user_id', NULL, 'list_single', 'N', 10, NULL, NULL, NULL, NULL, 255, '', 'users', 'name', 'N', '1', NULL, '2024-05-16 18:31:22', NULL),
(116, NULL, NULL, '168', 'SENDER USER', 'sender_user_id', NULL, 'list_single', 'N', 11, NULL, NULL, NULL, NULL, 255, '', 'users', 'name', 'Y', '1', NULL, '2024-05-16 18:31:22', NULL),
(117, NULL, NULL, '168', 'NAME ON ENVELOP', 'sender_name', NULL, 'text_input', 'N', 12, NULL, NULL, NULL, NULL, 255, '', '', '', 'Y', '1', NULL, '2024-05-16 18:31:22', NULL),
(118, NULL, NULL, '168', 'SEAL COLOR', 'seal_design_color', NULL, 'text_input', 'N', 13, NULL, NULL, NULL, NULL, 255, '', '', '', '', '1', NULL, '2024-05-16 18:31:22', NULL),
(119, NULL, NULL, '168', 'SEAL DESIGN', 'seal_design_image', NULL, 'list_single', 'N', 14, NULL, NULL, NULL, NULL, 255, '', 'sound_files', 'title', 'N', '1', NULL, '2024-05-16 18:31:23', NULL),
(120, NULL, NULL, '168', 'BACKGROUND', 'background_id', NULL, 'list_single', 'N', 15, NULL, NULL, NULL, NULL, 255, '', 'backgrounds', 'title', 'N', '1', NULL, '2024-05-16 18:31:23', NULL),
(121, NULL, NULL, '168', 'ENVELOP DESIGN', 'envelop_design_id', NULL, 'list_single', 'N', 16, NULL, NULL, NULL, NULL, 255, '', 'envelop_designs', 'title', '', '1', NULL, '2024-05-16 18:31:23', NULL),
(122, NULL, NULL, '168', 'ENVELOP INSIDE', 'envelop_inside_id', NULL, 'list_single', 'N', 17, NULL, NULL, NULL, NULL, 255, '', 'envelop_inside_images', 'title', '', '1', NULL, '2024-05-16 18:31:23', NULL),
(123, NULL, NULL, '168', 'SOUND FILE', 'sound_file_id', NULL, 'list_single', 'N', 18, NULL, NULL, NULL, NULL, 255, '', 'sound_files', 'title', 'N', '1', NULL, '2024-05-16 18:31:23', NULL),
(124, NULL, NULL, '168', 'EFFECTS FILE', 'effect_id', NULL, 'list_single', 'N', 19, NULL, NULL, NULL, NULL, 255, '', 'effects', 'title', '', '1', NULL, '2024-05-16 18:31:23', NULL),
(125, NULL, NULL, '168', 'CARD PRICE', 'card_price', NULL, 'number_input', 'N', 20, NULL, NULL, NULL, NULL, 255, '', '', '', 'Y', '1', NULL, '2024-05-16 18:31:23', NULL),
(126, NULL, NULL, '168', 'ACTIVE', 'active', NULL, 'list_single', 'Y', 21, NULL, NULL, NULL, NULL, 255, '', 'active_status', 'is_active', 'Y', '1', NULL, '2024-05-16 18:31:23', NULL),
(127, NULL, NULL, '169', 'ID', 'id', NULL, 'hidden_input', 'Y', 1, NULL, NULL, NULL, NULL, 255, '', '', '', 'Y', '1', NULL, '2024-05-16 18:33:40', NULL),
(128, NULL, NULL, '169', 'USER', 'user_id', NULL, 'hidden_input', 'N', 2, NULL, NULL, NULL, NULL, 255, '', '', '', '', '1', NULL, '2024-05-16 18:33:40', NULL),
(129, NULL, NULL, '169', 'WEB USER', 'web_user_id', NULL, 'list_single', 'N', 3, NULL, NULL, NULL, NULL, 255, '', 'users', 'name', 'Y', '1', NULL, '2024-05-16 18:33:40', NULL),
(130, NULL, NULL, '169', 'CARD', 'card_id', NULL, 'list_single', 'N', 4, NULL, NULL, NULL, NULL, 255, '', 'cards', 'title', 'Y', '1', NULL, '2024-05-16 18:33:40', NULL),
(131, NULL, NULL, '169', 'AMOUNT', 'amount', NULL, 'number_input', 'N', 5, NULL, NULL, NULL, NULL, 255, '', '', '', 'Y', '1', NULL, '2024-05-16 18:33:40', NULL),
(132, NULL, NULL, '169', 'TRANSACTION', 'transaction_id', NULL, 'text_input', 'N', 6, NULL, NULL, NULL, NULL, 255, '', '', '', '', '1', NULL, '2024-05-16 18:33:40', NULL),
(133, NULL, NULL, '169', 'ACTIVE', 'active', NULL, 'list_single', 'Y', 7, NULL, NULL, NULL, NULL, 255, '', 'active_status', 'is_active', 'Y', '1', NULL, '2024-05-16 18:33:40', NULL),
(134, NULL, NULL, '170', 'ID', 'id', NULL, 'hidden_input', 'Y', 1, NULL, NULL, NULL, NULL, 255, '', '', '', 'Y', '1', NULL, '2024-05-16 18:35:54', NULL),
(135, NULL, NULL, '170', 'USER', 'user_id', NULL, 'hidden_input', 'N', 2, NULL, NULL, NULL, NULL, 255, '', '', '', '', '1', NULL, '2024-05-16 18:35:54', NULL),
(136, NULL, NULL, '170', 'WEB USER', 'web_user_id', NULL, 'hidden_input', 'N', 3, NULL, NULL, NULL, NULL, 255, '', '', '', '', '1', NULL, '2024-05-16 18:35:54', NULL),
(137, NULL, NULL, '170', 'CARD', 'card_id', NULL, 'list_single', 'N', 4, NULL, NULL, NULL, NULL, 255, '', 'cards', 'title', 'Y', '1', NULL, '2024-05-16 18:35:54', NULL),
(138, NULL, NULL, '170', 'SCORE RATING', 'score_rating', NULL, 'list_single', 'N', 5, NULL, NULL, NULL, NULL, 255, '1,2,3,4,5', '', '', 'Y', '1', NULL, '2024-05-16 18:35:54', NULL),
(139, NULL, NULL, '170', 'FULL NAME', 'full_name', NULL, 'text_input', 'N', 6, NULL, NULL, NULL, NULL, 255, '', '', '', 'Y', '1', NULL, '2024-05-16 18:35:54', NULL),
(140, NULL, NULL, '170', 'REVIEW', 'review', NULL, 'text_area', 'N', 7, NULL, NULL, NULL, NULL, 255, '', '', '', '', '1', NULL, '2024-05-16 18:35:54', NULL),
(141, NULL, NULL, '170', 'ACTIVE', 'active', NULL, 'list_single', 'Y', 8, NULL, NULL, NULL, NULL, 255, '', 'active_status', 'is_active', 'Y', '1', NULL, '2024-05-16 18:35:54', NULL),
(142, NULL, NULL, '171', 'ID', 'id', NULL, 'hidden_input', 'Y', 1, NULL, NULL, NULL, NULL, 255, '', '', '', 'Y', '1', NULL, '2024-05-16 18:38:40', NULL),
(143, NULL, NULL, '171', 'USER', 'user_id', NULL, 'hidden_input', 'N', 2, NULL, NULL, NULL, NULL, 255, '', '', '', '', '1', NULL, '2024-05-16 18:38:40', NULL),
(144, NULL, NULL, '171', 'WEB USER', 'web_user_id', NULL, 'list_single', 'N', 3, NULL, NULL, NULL, NULL, 255, '', 'users', 'name', 'Y', '1', NULL, '2024-05-16 18:38:40', NULL),
(145, NULL, NULL, '171', 'CARD', 'card_id', NULL, 'list_single', 'Y', 4, NULL, NULL, NULL, NULL, 255, '', 'cards', 'title', 'Y', '1', NULL, '2024-05-16 18:38:40', NULL),
(146, NULL, NULL, '171', 'ACTIVE', 'active', NULL, 'list_single', 'Y', 5, NULL, NULL, NULL, NULL, 255, '', 'active_status', 'is_active', 'Y', '1', NULL, '2024-05-16 18:38:40', NULL),
(147, NULL, NULL, '172', 'ID', 'id', NULL, 'hidden_input', 'Y', 1, NULL, NULL, NULL, NULL, 255, '', '', '', 'Y', '1', NULL, '2024-05-16 18:40:57', NULL),
(148, NULL, NULL, '172', 'USER', 'user_id', NULL, 'hidden_input', 'N', 2, NULL, NULL, NULL, NULL, 255, '', '', '', '', '1', NULL, '2024-05-16 18:40:57', NULL),
(149, NULL, NULL, '172', 'WEB USER', 'web_user_id', NULL, 'hidden_input', 'N', 3, NULL, NULL, NULL, NULL, 255, '', '', '', '', '1', NULL, '2024-05-16 18:40:57', NULL),
(150, NULL, NULL, '172', 'BLOG CATEGORY', 'blog_category_id', NULL, 'list_single', 'N', 4, NULL, NULL, NULL, NULL, 255, '', 'blog_categories', 'blog_category', 'Y', '1', NULL, '2024-05-16 18:40:57', NULL),
(151, NULL, NULL, '172', 'BLOG IMAGE', 'blog_image', NULL, 'single_image', 'N', 5, NULL, NULL, NULL, NULL, 255, '', '', '', '', '1', NULL, '2024-05-16 18:40:57', NULL),
(152, NULL, NULL, '172', 'LOG TEXT', 'log_text', NULL, 'text_editor', 'N', 6, NULL, NULL, NULL, NULL, 255, '', '', '', '', '1', NULL, '2024-05-16 18:40:57', NULL),
(153, NULL, NULL, '172', 'ACTIVE', 'active', NULL, 'list_single', 'Y', 7, NULL, NULL, NULL, NULL, 255, '', 'active_status', 'is_active', 'Y', '1', NULL, '2024-05-16 18:40:57', NULL),
(154, NULL, NULL, '173', 'ID', 'id', NULL, 'hidden_input', 'Y', 1, NULL, NULL, NULL, NULL, 255, '', '', '', 'Y', '1', NULL, '2024-05-16 18:53:45', NULL),
(155, NULL, NULL, '173', 'USER', 'user_id', NULL, 'hidden_input', 'N', 2, NULL, NULL, NULL, NULL, 255, '', '', '', '', '1', NULL, '2024-05-16 18:53:45', NULL),
(156, NULL, NULL, '173', 'WEB USER', 'web_user_id', NULL, 'hidden_input', 'N', 3, NULL, NULL, NULL, NULL, 255, '', '', '', '', '1', NULL, '2024-05-16 18:53:45', NULL),
(157, NULL, NULL, '173', 'BLOG CATEGORY', 'blog_category_id', NULL, 'list_single', 'N', 4, NULL, NULL, NULL, NULL, 255, '', 'blog_categories', 'blog_category', 'Y', '1', NULL, '2024-05-16 18:53:45', NULL),
(158, NULL, NULL, '173', 'BLOG TITLE', 'blog_title', NULL, 'text_input', 'N', 5, NULL, NULL, NULL, NULL, 255, '', '', '', 'Y', '1', NULL, '2024-05-16 18:53:45', NULL),
(159, NULL, NULL, '173', 'BLOG IMAGE', 'blog_image', NULL, 'single_image', 'N', 6, NULL, NULL, NULL, NULL, 255, '', '', '', '', '1', NULL, '2024-05-16 18:53:45', NULL),
(160, NULL, NULL, '173', 'BLOG TEXT', 'blog_text', NULL, 'text_editor', 'N', 7, NULL, NULL, NULL, NULL, 255, '', '', '', '', '1', NULL, '2024-05-16 18:53:45', NULL),
(161, NULL, NULL, '173', 'ACTIVE', 'active', NULL, 'list_single', 'Y', 8, NULL, NULL, NULL, NULL, 255, '', 'active_status', 'is_active', 'Y', '1', NULL, '2024-05-16 18:53:45', NULL),
(162, NULL, NULL, '174', 'ID', 'id', NULL, 'hidden_input', 'Y', 1, NULL, NULL, NULL, NULL, 255, '', '', '', 'Y', '1', NULL, '2024-05-16 18:55:40', NULL),
(163, NULL, NULL, '174', 'USER', 'user_id', NULL, 'hidden_input', 'N', 2, NULL, NULL, NULL, NULL, 255, '', '', '', '', '1', NULL, '2024-05-16 18:55:40', NULL),
(164, NULL, NULL, '174', 'WEB USER', 'web_user_id', NULL, 'hidden_input', 'N', 3, NULL, NULL, NULL, NULL, 255, '', '', '', '', '1', NULL, '2024-05-16 18:55:40', NULL),
(165, NULL, NULL, '174', 'POST', 'post_id', NULL, 'list_single', 'N', 4, NULL, NULL, NULL, NULL, 255, '', 'blog_posts', 'blog_title', 'Y', '1', NULL, '2024-05-16 18:55:40', NULL),
(166, NULL, NULL, '174', 'SCORE RATING', 'score_rating', NULL, 'list_single', 'N', 5, NULL, NULL, NULL, NULL, 255, '1,2,3,4,5', '', '', 'Y', '1', NULL, '2024-05-16 18:55:40', NULL),
(167, NULL, NULL, '174', 'FULL NAME', 'full_name', NULL, 'text_input', 'N', 6, NULL, NULL, NULL, NULL, 255, '', '', '', 'Y', '1', NULL, '2024-05-16 18:55:40', NULL),
(168, NULL, NULL, '174', 'REVIEW', 'review', NULL, 'text_area', 'N', 7, NULL, NULL, NULL, NULL, 255, '', '', '', '', '1', NULL, '2024-05-16 18:55:40', NULL),
(169, NULL, NULL, '174', 'ACTIVE', 'active', NULL, 'list_single', 'Y', 8, NULL, NULL, NULL, NULL, 255, '', 'active_status', 'is_active', 'Y', '1', NULL, '2024-05-16 18:55:40', NULL),
(170, NULL, NULL, '175', 'ID', 'id', NULL, 'hidden_input', 'Y', 1, NULL, NULL, NULL, NULL, 255, '', '', '', 'Y', '1', NULL, '2024-05-21 13:23:49', NULL),
(171, NULL, NULL, '175', 'USER', 'user_id', NULL, 'hidden_input', 'N', 2, NULL, NULL, NULL, NULL, 255, '', '', '', '', '1', NULL, '2024-05-21 13:23:49', NULL),
(172, NULL, NULL, '175', 'WEB USER', 'web_user_id', NULL, 'hidden_input', 'N', 3, NULL, NULL, NULL, NULL, 255, '', '', '', '', '1', NULL, '2024-05-21 13:23:49', NULL),
(173, NULL, NULL, '175', 'TITLE', 'title', NULL, 'text_input', 'N', 4, NULL, NULL, NULL, NULL, 255, '', '', '', 'Y', '1', NULL, '2024-05-21 13:23:49', NULL),
(174, NULL, NULL, '175', 'MAIN IMAGE', 'main_image', NULL, 'single_image', 'N', 5, NULL, NULL, NULL, NULL, 255, '', '', '', '', '1', NULL, '2024-05-21 13:23:49', NULL),
(175, NULL, NULL, '175', 'MORE IMAGES', 'more_images', NULL, 'muliti_images', 'N', 6, NULL, NULL, NULL, NULL, 255, '', '', '', '', '1', NULL, '2024-05-21 13:23:49', NULL),
(176, NULL, NULL, '175', 'ACTIVE', 'active', NULL, 'list_single', 'Y', 7, NULL, NULL, NULL, NULL, 255, '', 'active_status', 'is_active', 'Y', '1', NULL, '2024-05-21 13:23:49', NULL),
(177, NULL, NULL, '176', 'ID', 'id', NULL, 'hidden_input', 'Y', 1, NULL, NULL, NULL, NULL, 255, '', '', '', 'Y', '1', NULL, '2024-05-24 22:28:44', NULL),
(178, NULL, NULL, '176', 'USER', 'user_id', NULL, 'hidden_input', 'N', 2, NULL, NULL, NULL, NULL, 255, '', '', '', '', '1', NULL, '2024-05-24 22:28:44', NULL),
(179, NULL, NULL, '176', 'WEB USER', 'web_user_id', NULL, 'hidden_input', 'N', 3, NULL, NULL, NULL, NULL, 255, '', '', '', '', '1', NULL, '2024-05-24 22:28:44', NULL),
(180, NULL, NULL, '176', 'TITLE', 'title', NULL, 'text_input', 'N', 4, NULL, NULL, NULL, NULL, 255, '', '', '', 'Y', '1', NULL, '2024-05-24 22:28:44', NULL),
(181, NULL, NULL, '176', 'MAIN IMAGE', 'main_image', NULL, 'single_image', 'N', 5, NULL, NULL, NULL, NULL, 255, '', '', '', '', '1', NULL, '2024-05-24 22:28:44', NULL),
(182, NULL, NULL, '176', 'MORE IMAGE', 'more_image', NULL, 'muliti_images', 'N', 6, NULL, NULL, NULL, NULL, 255, '', '', '', '', '1', NULL, '2024-05-24 22:28:44', NULL),
(183, NULL, NULL, '176', 'ACTIVE', 'active', NULL, 'list_single', 'Y', 7, NULL, NULL, NULL, NULL, 255, '', 'active_status', 'is_active', 'Y', '1', NULL, '2024-05-24 22:28:44', NULL),
(184, NULL, NULL, '177', 'ID', 'id', NULL, 'hidden_input', 'Y', 1, NULL, NULL, NULL, NULL, 255, '', '', '', 'Y', '1', NULL, '2024-05-25 08:28:46', NULL),
(185, NULL, NULL, '177', 'USER', 'user_id', NULL, 'hidden_input', 'N', 2, NULL, NULL, NULL, NULL, 255, '', '', '', '', '1', NULL, '2024-05-25 08:28:46', NULL),
(186, NULL, NULL, '177', 'WEB USER', 'web_user_id', NULL, 'hidden_input', 'N', 3, NULL, NULL, NULL, NULL, 255, '', '', '', '', '1', NULL, '2024-05-25 08:28:46', NULL),
(187, NULL, NULL, '177', 'TITLE', 'title', NULL, 'text_input', 'N', 4, NULL, NULL, NULL, NULL, 255, '', '', '', 'Y', '1', NULL, '2024-05-25 08:28:46', NULL),
(188, NULL, NULL, '177', 'MAIN IMAGE', 'main_image', NULL, 'single_image', 'N', 5, NULL, NULL, NULL, NULL, 255, '', '', '', '', '1', NULL, '2024-05-25 08:28:46', NULL),
(189, NULL, NULL, '177', 'MORE IMAGES', 'more_images', NULL, 'muliti_images', 'N', 6, NULL, NULL, NULL, NULL, 255, '', '', '', '', '1', NULL, '2024-05-25 08:28:46', NULL),
(190, NULL, NULL, '177', 'ACTIVE', 'active', NULL, 'list_single', 'Y', 7, NULL, NULL, NULL, NULL, 255, '', 'active_status', 'is_active', 'Y', '1', NULL, '2024-05-25 08:28:46', NULL),
(210, NULL, NULL, '180', 'ENVELOP DESIGN', 'envelop_design_id', NULL, 'list_single', 'N', 4, NULL, NULL, NULL, NULL, 255, '', 'envelop_designs', 'title', 'Y', '1', NULL, '2024-05-25 15:08:16', NULL),
(209, NULL, NULL, '180', 'WEB USER', 'web_user_id', NULL, 'hidden_input', 'N', 3, NULL, NULL, NULL, NULL, 255, '', '', '', '', '1', NULL, '2024-05-25 15:08:16', NULL),
(208, NULL, NULL, '180', 'USER', 'user_id', NULL, 'hidden_input', 'N', 2, NULL, NULL, NULL, NULL, 255, '', '', '', '', '1', NULL, '2024-05-25 15:08:16', NULL),
(207, NULL, NULL, '180', 'ID', 'id', NULL, 'hidden_input', 'Y', 1, NULL, NULL, NULL, NULL, 255, '', '', '', 'Y', '1', NULL, '2024-05-25 15:08:16', NULL),
(216, NULL, NULL, '181', 'ID', 'id', NULL, 'hidden_input', 'Y', 1, NULL, NULL, NULL, NULL, 255, '', '', '', 'Y', '1', NULL, '2024-05-28 00:25:23', NULL),
(217, NULL, NULL, '181', 'USER', 'user_id', NULL, 'hidden_input', 'N', 2, NULL, NULL, NULL, NULL, 255, '', '', '', '', '1', NULL, '2024-05-28 00:25:23', NULL),
(218, NULL, NULL, '181', 'WEB USER', 'web_user_id', NULL, 'hidden_input', 'N', 3, NULL, NULL, NULL, NULL, 255, '', '', '', '', '1', NULL, '2024-05-28 00:25:23', NULL),
(219, NULL, NULL, '181', 'MUSIC CATEGORY', 'music_category', NULL, 'text_input', 'N', 4, NULL, NULL, NULL, NULL, 255, '', '', '', 'Y', '1', NULL, '2024-05-28 00:25:23', NULL),
(220, NULL, NULL, '181', 'ACTIVE', 'active', NULL, 'list_single', 'Y', 5, NULL, NULL, NULL, NULL, 255, '', 'active_status', 'is_active', 'Y', '1', NULL, '2024-05-28 00:25:23', NULL),
(221, NULL, NULL, '182', 'ID', 'id', NULL, 'hidden_input', 'Y', 1, NULL, NULL, NULL, NULL, 255, '', '', '', 'Y', '1', NULL, '2024-05-28 00:26:55', NULL),
(222, NULL, NULL, '182', 'USER', 'user_id', NULL, 'hidden_input', 'N', 2, NULL, NULL, NULL, NULL, 255, '', '', '', '', '1', NULL, '2024-05-28 00:26:55', NULL),
(223, NULL, NULL, '182', 'WEB USER', 'web_user_id', NULL, 'hidden_input', 'N', 3, NULL, NULL, NULL, NULL, 255, '', '', '', '', '1', NULL, '2024-05-28 00:26:55', NULL),
(224, NULL, NULL, '182', 'MUSIC CATEGORY', 'music_category_id', NULL, 'list_single', 'N', 4, NULL, NULL, NULL, NULL, 255, '', 'music_categories', 'music_category', 'Y', '1', NULL, '2024-05-28 00:26:55', NULL),
(225, NULL, NULL, '182', 'TITLE', 'title', NULL, 'text_input', 'N', 5, NULL, NULL, NULL, NULL, 255, '', '', '', 'Y', '1', NULL, '2024-05-28 00:26:55', NULL),
(226, NULL, NULL, '182', 'MUSIC FILE', 'music_file', NULL, 'single_file', 'N', 6, NULL, NULL, NULL, NULL, 255, '', '', '', '', '1', NULL, '2024-05-28 00:26:55', NULL),
(227, NULL, NULL, '182', 'ACTIVE', 'active', NULL, 'list_single', 'Y', 7, NULL, NULL, NULL, NULL, 255, '', 'active_status', 'is_active', 'Y', '1', NULL, '2024-05-28 00:26:55', NULL),
(228, NULL, NULL, '184', 'ID', 'id', NULL, 'hidden_input', 'Y', 1, NULL, NULL, NULL, NULL, 255, '', '', '', 'Y', '1', NULL, '2024-07-30 12:14:36', NULL),
(229, NULL, NULL, '184', 'USER', 'user_id', NULL, 'hidden_input', 'N', 2, NULL, NULL, NULL, NULL, 255, '', '', '', '', '1', NULL, '2024-07-30 12:14:36', NULL),
(230, NULL, NULL, '184', 'USER NAME', 'web_user_id', NULL, 'list_single', 'N', 3, NULL, NULL, NULL, NULL, 255, '', 'users', 'name', 'Y', '1', NULL, '2024-07-30 12:14:36', NULL),
(231, NULL, NULL, '184', 'CARD', 'card_id', NULL, 'list_single', 'N', 4, NULL, NULL, NULL, NULL, 255, '', 'cards', 'title', 'Y', '1', NULL, '2024-07-30 12:14:36', NULL),
(232, NULL, NULL, '184', 'QUEST TITLE', 'attend_quest_title', NULL, 'text_input', 'N', 5, NULL, NULL, NULL, NULL, 255, '', '', '', 'Y', '1', NULL, '2024-07-30 12:14:36', NULL),
(233, NULL, NULL, '184', 'QUEST YES TITLE', 'attend_quest_yes_title', NULL, 'text_input', 'N', 6, NULL, NULL, NULL, NULL, 255, '', '', '', '', '1', NULL, '2024-07-30 12:14:36', NULL),
(234, NULL, NULL, '184', 'QUEST NO TITLE', 'attend_quest_no_title', NULL, 'text_input', 'N', 7, NULL, NULL, NULL, NULL, 255, '', '', '', '', '1', NULL, '2024-07-30 12:14:36', NULL),
(235, NULL, NULL, '184', 'MANDATORY', 'attend_quest_mandatory', NULL, 'list_single', 'N', 8, NULL, NULL, NULL, NULL, 255, 'Y,N', '', '', '', '1', NULL, '2024-07-30 12:14:36', NULL),
(236, NULL, NULL, '184', 'TICKET TYPE', 'ticket_type_id', NULL, 'list_single', 'N', 9, NULL, NULL, NULL, NULL, 255, '', 'ticket_types', 'ticket_type', 'Y', '1', NULL, '2024-07-30 12:14:36', NULL),
(237, NULL, NULL, '184', 'ACTIVE', 'active', NULL, 'list_single', 'Y', 10, NULL, NULL, NULL, NULL, 255, '', 'active_status', 'is_active', 'Y', '1', NULL, '2024-07-30 12:14:36', NULL),
(238, NULL, NULL, '185', 'ID', 'id', NULL, 'hidden_input', 'Y', 1, NULL, NULL, NULL, NULL, 255, '', '', '', 'Y', '1', NULL, '2024-07-30 12:25:02', NULL),
(239, NULL, NULL, '185', 'USER', 'user_id', NULL, 'hidden_input', 'N', 2, NULL, NULL, NULL, NULL, 255, '', '', '', '', '1', NULL, '2024-07-30 12:25:02', NULL),
(240, NULL, NULL, '185', 'USER NAME', 'web_user_id', NULL, 'list_single', 'N', 3, NULL, NULL, NULL, NULL, 255, '', 'users', 'name', 'Y', '1', NULL, '2024-07-30 12:25:02', NULL),
(241, NULL, NULL, '185', 'CARD', 'card_id', NULL, 'list_single', 'N', 4, NULL, NULL, NULL, NULL, 255, '', 'cards', 'title', 'Y', '1', NULL, '2024-07-30 12:25:02', NULL),
(242, NULL, NULL, '185', 'COMM TYPE', 'comm_type', NULL, 'list_single', 'N', 5, NULL, NULL, NULL, NULL, 255, 'tel,mobile,sms,email,whatsapp', '', '', 'Y', '1', NULL, '2024-07-30 12:25:02', NULL),
(243, NULL, NULL, '185', 'TITLE', 'comm_title', NULL, 'text_input', 'N', 6, NULL, NULL, NULL, NULL, 255, '', '', '', 'Y', '1', NULL, '2024-07-30 12:25:02', NULL),
(244, NULL, NULL, '185', 'TELEPHONE', 'comm_tel', NULL, 'text_input', 'N', 7, NULL, NULL, NULL, NULL, 255, '', '', '', '', '1', NULL, '2024-07-30 12:25:02', NULL),
(245, NULL, NULL, '185', 'MOBILE', 'comm_mobile', NULL, 'text_input', 'N', 8, NULL, NULL, NULL, NULL, 255, '', '', '', '', '1', NULL, '2024-07-30 12:25:02', NULL),
(246, NULL, NULL, '185', 'SMS NO', 'comm_sms_no', NULL, 'text_input', 'N', 9, NULL, NULL, NULL, NULL, 255, '', '', '', '', '1', NULL, '2024-07-30 12:25:02', NULL),
(247, NULL, NULL, '185', 'SMS TEXT', 'comm_sms_text', NULL, 'text_input', 'N', 10, NULL, NULL, NULL, NULL, 255, '', '', '', '', '1', NULL, '2024-07-30 12:25:02', NULL),
(248, NULL, NULL, '185', 'EMAIL', 'comm_email', NULL, 'text_input', 'N', 11, NULL, NULL, NULL, NULL, 255, '', '', '', '', '1', NULL, '2024-07-30 12:25:02', NULL),
(249, NULL, NULL, '185', 'WHATSAPP NO', 'comm_whatsapp_no', NULL, 'text_input', 'N', 12, NULL, NULL, NULL, NULL, 255, '', '', '', '', '1', NULL, '2024-07-30 12:25:02', NULL),
(250, NULL, NULL, '185', 'WHATSAPP TEXT', 'comm_whatsapp_text', NULL, 'text_input', 'N', 13, NULL, NULL, NULL, NULL, 255, '', '', '', '', '1', NULL, '2024-07-30 12:25:02', NULL),
(251, NULL, NULL, '185', 'TICKET TYPE', 'ticket_type_id', NULL, 'list_single', 'N', 14, NULL, NULL, NULL, NULL, 255, '', 'ticket_types', 'ticket_type', 'Y', '1', NULL, '2024-07-30 12:25:02', NULL),
(252, NULL, NULL, '185', 'ACTIVE', 'active', NULL, 'list_single', 'Y', 15, NULL, NULL, NULL, NULL, 255, '', 'active_status', 'is_active', 'Y', '1', NULL, '2024-07-30 12:25:02', NULL),
(253, NULL, NULL, '186', 'ID', 'id', NULL, 'hidden_input', 'Y', 1, NULL, NULL, NULL, NULL, 255, '', '', '', 'Y', '1', NULL, '2024-07-30 12:36:21', NULL),
(254, NULL, NULL, '186', 'USER', 'user_id', NULL, 'hidden_input', 'N', 2, NULL, NULL, NULL, NULL, 255, '', '', '', '', '1', NULL, '2024-07-30 12:36:21', NULL),
(255, NULL, NULL, '186', 'USER NAME', 'web_user_id', NULL, 'list_single', 'N', 3, NULL, NULL, NULL, NULL, 255, '', 'users', 'name', 'Y', '1', NULL, '2024-07-30 12:36:21', NULL),
(256, NULL, NULL, '186', 'CARD', 'card_id', NULL, 'list_single', 'N', 4, NULL, NULL, NULL, NULL, 255, '', 'cards', 'title', 'Y', '1', NULL, '2024-07-30 12:36:21', NULL),
(257, NULL, NULL, '186', 'TITLE', 'countdown_title', NULL, 'text_input', 'N', 5, NULL, NULL, NULL, NULL, 255, '', '', '', 'Y', '1', NULL, '2024-07-30 12:36:21', NULL),
(258, NULL, NULL, '186', 'DATE', 'countdown_date', NULL, 'text_input', 'N', 6, NULL, NULL, NULL, NULL, 255, '', '', '', 'Y', '1', NULL, '2024-07-30 12:36:21', NULL),
(259, NULL, NULL, '186', 'TIME', 'countdown_time', NULL, 'text_input', 'N', 7, NULL, NULL, NULL, NULL, 255, '', '', '', 'Y', '1', NULL, '2024-07-30 12:36:21', NULL),
(260, NULL, NULL, '186', 'JS DATE FORMAT', 'js_date_format', NULL, 'hidden_input', 'N', 8, NULL, NULL, NULL, NULL, 255, '', '', '', '', '1', NULL, '2024-07-30 12:36:21', NULL),
(261, NULL, NULL, '186', 'TICKET TYPE', 'ticket_type_id', NULL, 'list_single', 'N', 9, NULL, NULL, NULL, NULL, 255, '', 'ticket_types', 'ticket_type', 'Y', '1', NULL, '2024-07-30 12:36:21', NULL),
(262, NULL, NULL, '186', 'ACTIVE', 'active', NULL, 'list_single', 'Y', 10, NULL, NULL, NULL, NULL, 255, '', 'active_status', 'is_active', 'Y', '1', NULL, '2024-07-30 12:36:21', NULL),
(263, NULL, NULL, '187', 'ID', 'id', NULL, 'hidden_input', 'Y', 1, NULL, NULL, NULL, NULL, 255, '', '', '', 'Y', '1', NULL, '2024-07-30 12:43:17', NULL),
(264, NULL, NULL, '187', 'USER', 'user_id', NULL, 'text_input', 'N', 2, NULL, NULL, NULL, NULL, 255, '', '', '', '', '1', NULL, '2024-07-30 12:43:17', NULL),
(265, NULL, NULL, '187', 'USER NAME', 'web_user_id', NULL, 'list_single', 'N', 3, NULL, NULL, NULL, NULL, 255, '', 'users', 'name', 'Y', '1', NULL, '2024-07-30 12:43:17', NULL),
(266, NULL, NULL, '187', 'CARD', 'card_id', NULL, 'list_single', 'N', 4, NULL, NULL, NULL, NULL, 255, '', 'cards', 'title', 'Y', '1', NULL, '2024-07-30 12:43:17', NULL),
(267, NULL, NULL, '187', 'LINK TEXT', 'link_text', NULL, 'text_input', 'N', 5, NULL, NULL, NULL, NULL, 255, '', '', '', 'Y', '1', NULL, '2024-07-30 12:43:17', NULL),
(268, NULL, NULL, '187', 'LINK URL', 'link_url', NULL, 'text_input', 'N', 6, NULL, NULL, NULL, NULL, 255, '', '', '', 'Y', '1', NULL, '2024-07-30 12:43:17', NULL),
(269, NULL, NULL, '187', 'TICKET TYPE', 'ticket_type_id', NULL, 'hidden_input', 'N', 7, NULL, NULL, NULL, NULL, 255, '', '', '', 'N', '1', NULL, '2024-07-30 12:43:17', NULL),
(270, NULL, NULL, '187', 'ACTIVE', 'active', NULL, 'list_single', 'Y', 8, NULL, NULL, NULL, NULL, 255, '', 'active_status', 'is_active', 'Y', '1', NULL, '2024-07-30 12:43:17', NULL),
(271, NULL, NULL, '188', 'ID', 'id', NULL, 'hidden_input', 'Y', 1, NULL, NULL, NULL, NULL, 255, '', '', '', 'Y', '1', NULL, '2024-07-30 12:53:19', NULL),
(272, NULL, NULL, '188', 'USER', 'user_id', NULL, 'text_input', 'N', 2, NULL, NULL, NULL, NULL, 255, '', '', '', '', '1', NULL, '2024-07-30 12:53:19', NULL),
(273, NULL, NULL, '188', 'USER NAME', 'web_user_id', NULL, 'list_single', 'N', 3, NULL, NULL, NULL, NULL, 255, '', 'users', 'name', 'Y', '1', NULL, '2024-07-30 12:53:19', NULL),
(274, NULL, NULL, '188', 'CARD', 'card_id', NULL, 'list_single', 'N', 4, NULL, NULL, NULL, NULL, 255, '', 'cards', 'title', 'Y', '1', NULL, '2024-07-30 12:53:19', NULL),
(275, NULL, NULL, '188', 'QUESTION TITLE', 'optnl_quest_title', NULL, 'text_input', 'N', 5, NULL, NULL, NULL, NULL, 255, '', '', '', 'Y', '1', NULL, '2024-07-30 12:53:19', NULL),
(276, NULL, NULL, '188', 'QUESTION TYPE', 'optnl_quest_type', NULL, 'list_single', 'N', 6, NULL, NULL, NULL, NULL, 255, 'radio,checkbox,dropdown', '', '', 'Y', '1', NULL, '2024-07-30 12:53:19', NULL),
(277, NULL, NULL, '188', 'OPTIONS', 'optnl_quest_options', NULL, 'text_input', 'N', 7, NULL, NULL, NULL, NULL, 255, '', '', '', '', '1', NULL, '2024-07-30 12:53:19', NULL),
(278, NULL, NULL, '188', 'MANDATORY', 'optnl_quest_mandatory', NULL, 'list_single', 'N', 8, NULL, NULL, NULL, NULL, 255, 'Y,N', '', '', '', '1', NULL, '2024-07-30 12:53:19', NULL),
(279, NULL, NULL, '188', 'OPTNL QUEST FORYESNO', 'optnl_quest_foryesno', NULL, 'hidden_input', 'N', 9, NULL, NULL, NULL, NULL, 255, '', '', '', '', '1', NULL, '2024-07-30 12:53:19', NULL),
(280, NULL, NULL, '188', 'TICKET TYPE', 'ticket_type_id', NULL, 'hidden_input', 'N', 10, NULL, NULL, NULL, NULL, 255, '', '', '', '', '1', NULL, '2024-07-30 12:53:19', NULL),
(281, NULL, NULL, '188', 'ACTIVE', 'active', NULL, 'list_single', 'Y', 11, NULL, NULL, NULL, NULL, 255, '', 'active_status', 'is_active', 'Y', '1', NULL, '2024-07-30 12:53:19', NULL),
(282, NULL, NULL, '189', 'ID', 'id', NULL, 'hidden_input', 'Y', 1, NULL, NULL, NULL, NULL, 255, '', '', '', 'Y', '1', NULL, '2024-07-30 12:59:11', NULL),
(283, NULL, NULL, '189', 'USER', 'user_id', NULL, 'hidden_input', 'N', 2, NULL, NULL, NULL, NULL, 255, '', '', '', '', '1', NULL, '2024-07-30 12:59:11', NULL),
(284, NULL, NULL, '189', 'USER NAME', 'web_user_id', NULL, 'list_single', 'N', 3, NULL, NULL, NULL, NULL, 255, '', 'users', 'name', 'Y', '1', NULL, '2024-07-30 12:59:11', NULL),
(285, NULL, NULL, '189', 'CARD', 'card_id', NULL, 'list_single', 'N', 4, NULL, NULL, NULL, NULL, 255, '', 'cards', 'title', 'Y', '1', NULL, '2024-07-30 12:59:11', NULL),
(286, NULL, NULL, '189', 'TEXT QUESTION TITLE', 'text_question_title', NULL, 'text_input', 'N', 5, NULL, NULL, NULL, NULL, 255, '', '', '', 'Y', '1', NULL, '2024-07-30 12:59:11', NULL),
(287, NULL, NULL, '189', 'QUESTION TYPE', 'text_question_type', NULL, 'list_single', 'N', 6, NULL, NULL, NULL, NULL, 255, 'name,number,phone,email,single_line,multi_line', '', '', 'Y', '1', NULL, '2024-07-30 12:59:11', NULL),
(288, NULL, NULL, '189', 'MANDATORY', 'text_question_mandatory', NULL, 'list_single', 'N', 7, NULL, NULL, NULL, NULL, 255, 'Y,N', '', '', 'Y', '1', NULL, '2024-07-30 12:59:11', NULL),
(289, NULL, NULL, '189', 'TEXT QUESTION FORYESNO', 'text_question_foryesno', NULL, 'hidden_input', 'N', 8, NULL, NULL, NULL, NULL, 255, '', '', '', '', '1', NULL, '2024-07-30 12:59:11', NULL),
(290, NULL, NULL, '189', 'TICKET TYPE', 'ticket_type_id', NULL, 'hidden_input', 'N', 9, NULL, NULL, NULL, NULL, 255, '', '', '', '', '1', NULL, '2024-07-30 12:59:11', NULL),
(291, NULL, NULL, '189', 'ACTIVE', 'active', NULL, 'list_single', 'Y', 10, NULL, NULL, NULL, NULL, 255, '', 'active_status', 'is_active', 'Y', '1', NULL, '2024-07-30 12:59:11', NULL),
(292, NULL, NULL, '190', 'ID', 'id', NULL, 'hidden_input', 'Y', 1, NULL, NULL, NULL, NULL, 255, '', '', '', 'Y', '1', NULL, '2024-07-30 13:07:50', NULL),
(293, NULL, NULL, '190', 'USER', 'user_id', NULL, 'hidden_input', 'N', 2, NULL, NULL, NULL, NULL, 255, '', '', '', '', '1', NULL, '2024-07-30 13:07:50', NULL),
(294, NULL, NULL, '190', 'USER NAME', 'web_user_id', NULL, 'list_single', 'N', 3, NULL, NULL, NULL, NULL, 255, '', 'users', 'name', 'Y', '1', NULL, '2024-07-30 13:07:50', NULL),
(295, NULL, NULL, '190', 'CARD', 'card_id', NULL, 'list_single', 'N', 4, NULL, NULL, NULL, NULL, 255, '', 'cards', 'title', 'Y', '1', NULL, '2024-07-30 13:07:50', NULL),
(296, NULL, NULL, '190', 'TITLE', 'sn_title', NULL, 'text_input', 'N', 5, NULL, NULL, NULL, NULL, 255, '', '', '', 'Y', '1', NULL, '2024-07-30 13:07:50', NULL),
(297, NULL, NULL, '190', 'FACEBOOK', 'sn_facebook', NULL, 'text_input', 'N', 6, NULL, NULL, NULL, NULL, 255, '', '', '', 'Y', '1', NULL, '2024-07-30 13:07:50', NULL),
(298, NULL, NULL, '190', 'TWITTER', 'sn_twitter', NULL, 'text_input', 'N', 7, NULL, NULL, NULL, NULL, 255, '', '', '', 'Y', '1', NULL, '2024-07-30 13:07:51', NULL),
(299, NULL, NULL, '190', 'INSTAGRAM', 'sn_instagram', NULL, 'text_input', 'N', 8, NULL, NULL, NULL, NULL, 255, '', '', '', 'Y', '1', NULL, '2024-07-30 13:07:51', NULL),
(300, NULL, NULL, '190', 'TELEGRAM', 'sn_telegram', NULL, 'text_input', 'N', 9, NULL, NULL, NULL, NULL, 255, '', '', '', '', '1', NULL, '2024-07-30 13:07:51', NULL),
(301, NULL, NULL, '190', 'WHATSAPP', 'sn_whatsapp', NULL, 'text_input', 'N', 10, NULL, NULL, NULL, NULL, 255, '', '', '', '', '1', NULL, '2024-07-30 13:07:51', NULL),
(302, NULL, NULL, '190', 'PINTEREST', 'sn_pinterest', NULL, 'text_input', 'N', 11, NULL, NULL, NULL, NULL, 255, '', '', '', '', '1', NULL, '2024-07-30 13:07:51', NULL),
(303, NULL, NULL, '190', 'TICKET TYPE', 'ticket_type_id', NULL, 'hidden_input', 'N', 12, NULL, NULL, NULL, NULL, 255, '', '', '', '', '1', NULL, '2024-07-30 13:07:51', NULL),
(304, NULL, NULL, '190', 'ACTIVE', 'active', NULL, 'list_single', 'Y', 13, NULL, NULL, NULL, NULL, 255, '', 'active_status', 'is_active', 'Y', '1', NULL, '2024-07-30 13:07:51', NULL),
(305, NULL, NULL, '191', 'ID', 'id', NULL, 'hidden_input', 'Y', 1, NULL, NULL, NULL, NULL, 255, '', '', '', 'Y', '1', NULL, '2024-07-30 13:28:19', NULL),
(306, NULL, NULL, '191', 'USER', 'user_id', NULL, 'text_input', 'N', 2, NULL, NULL, NULL, NULL, 255, '', '', '', '', '1', NULL, '2024-07-30 13:28:19', NULL),
(307, NULL, NULL, '191', 'USER NAME', 'web_user_id', NULL, 'list_single', 'N', 3, NULL, NULL, NULL, NULL, 255, '', 'users', 'name', 'Y', '1', NULL, '2024-07-30 13:28:19', NULL),
(308, NULL, NULL, '191', 'CARD', 'card_id', NULL, 'list_single', 'N', 4, NULL, NULL, NULL, NULL, 255, '', 'cards', 'title', 'Y', '1', NULL, '2024-07-30 13:28:19', NULL),
(309, NULL, NULL, '191', 'TITLE', 'memorial_title', NULL, 'text_input', 'N', 5, NULL, NULL, NULL, NULL, 255, '', '', '', 'Y', '1', NULL, '2024-07-30 13:28:19', NULL),
(310, NULL, NULL, '191', 'TEXT', 'memorial_text', NULL, 'text_input', 'N', 6, NULL, NULL, NULL, NULL, 255, '', '', '', '', '1', NULL, '2024-07-30 13:28:19', NULL),
(311, NULL, NULL, '191', 'PRESENCE', 'memorial_presence_yesno', NULL, 'list_single', 'N', 7, NULL, NULL, NULL, NULL, 255, 'Yes,No', '', '', '', '1', NULL, '2024-07-30 13:28:19', NULL),
(312, NULL, NULL, '191', 'DISPLAY ON CARD', 'display_oncard', NULL, 'list_single', 'N', 8, NULL, NULL, NULL, NULL, 255, 'Y,N', '', '', '', '1', NULL, '2024-07-30 13:28:19', NULL),
(313, NULL, NULL, '191', 'MANDATORY', 'memorial_answer_mandatory', NULL, 'list_single', 'N', 9, NULL, NULL, NULL, NULL, 255, 'Y,N', '', '', '', '1', NULL, '2024-07-30 13:28:19', NULL),
(314, NULL, NULL, '191', 'MEMORIAL PRESENCE STATUS', 'memorial_presence_status', NULL, 'hidden_input', 'N', 10, NULL, NULL, NULL, NULL, 255, '', '', '', '', '1', NULL, '2024-07-30 13:28:19', NULL),
(315, NULL, NULL, '191', 'TICKET TYPE', 'ticket_type_id', NULL, 'hidden_input', 'N', 11, NULL, NULL, NULL, NULL, 255, '', '', '', '', '1', NULL, '2024-07-30 13:28:19', NULL),
(316, NULL, NULL, '191', 'ACTIVE', 'active', NULL, 'list_single', 'Y', 12, NULL, NULL, NULL, NULL, 255, '', 'active_status', 'is_active', 'Y', '1', NULL, '2024-07-30 13:28:19', NULL),
(317, NULL, NULL, '192', 'ID', 'id', NULL, 'hidden_input', 'Y', 1, NULL, NULL, NULL, NULL, 255, '', '', '', 'Y', '1', NULL, '2024-07-30 13:32:02', NULL),
(318, NULL, NULL, '192', 'USER', 'user_id', NULL, 'hidden_input', 'N', 2, NULL, NULL, NULL, NULL, 255, '', '', '', '', '1', NULL, '2024-07-30 13:32:02', NULL),
(319, NULL, NULL, '192', 'USER NAME', 'web_user_id', NULL, 'list_single', 'N', 3, NULL, NULL, NULL, NULL, 255, '', 'users', 'name', 'Y', '1', NULL, '2024-07-30 13:32:02', NULL),
(320, NULL, NULL, '192', 'CARD', 'card_id', NULL, 'list_single', 'N', 4, NULL, NULL, NULL, NULL, 255, '', 'cards', 'title', 'Y', '1', NULL, '2024-07-30 13:32:02', NULL),
(321, NULL, NULL, '192', 'TEXT', 'user_text', NULL, 'text_input', 'N', 5, NULL, NULL, NULL, NULL, 255, '', '', '', 'Y', '1', NULL, '2024-07-30 13:32:02', NULL),
(322, NULL, NULL, '192', 'ALIGNMENT', 'user_text_alignment', NULL, 'text_input', 'N', 6, NULL, NULL, NULL, NULL, 255, '', '', '', 'Y', '1', NULL, '2024-07-30 13:32:02', NULL),
(323, NULL, NULL, '192', 'FONT SIZE', 'user_text_font_size', NULL, 'text_input', 'N', 7, NULL, NULL, NULL, NULL, 255, '', '', '', 'Y', '1', NULL, '2024-07-30 13:32:02', NULL),
(324, NULL, NULL, '192', 'TICKET TYPE', 'ticket_type_id', NULL, 'hidden_input', 'N', 8, NULL, NULL, NULL, NULL, 255, '', '', '', '', '1', NULL, '2024-07-30 13:32:02', NULL),
(325, NULL, NULL, '192', 'ACTIVE', 'active', NULL, 'list_single', 'Y', 9, NULL, NULL, NULL, NULL, 255, '', 'active_status', 'is_active', 'Y', '1', NULL, '2024-07-30 13:32:02', NULL),
(326, NULL, NULL, '193', 'ID', 'id', NULL, 'hidden_input', 'Y', 1, NULL, NULL, NULL, NULL, 255, '', '', '', 'Y', '1', NULL, '2024-07-30 14:04:49', NULL),
(327, NULL, NULL, '193', 'USER', 'user_id', NULL, 'hidden_input', 'N', 2, NULL, NULL, NULL, NULL, 255, '', '', '', '', '1', NULL, '2024-07-30 14:04:49', NULL);
INSERT INTO `dznr_module_fields` (`id`, `client_id`, `user_id`, `dznr_moduleid`, `field_label`, `field_name`, `placeholder`, `field_type`, `isrequired`, `display_seq`, `default_value`, `range_min`, `range_max`, `list_type`, `input_length`, `staticlist`, `listmodulename`, `listmoduleitem`, `onlistpag`, `active`, `userid`, `recdate`, `deleted_at`) VALUES
(328, NULL, NULL, '193', 'USER NAME', 'web_user_id', NULL, 'list_single', 'N', 3, NULL, NULL, NULL, NULL, 255, '', 'users', 'name', 'Y', '1', NULL, '2024-07-30 14:04:49', NULL),
(329, NULL, NULL, '193', 'CARD', 'card_id', NULL, 'list_single', 'N', 4, NULL, NULL, NULL, NULL, 255, '', 'cards', 'title', 'Y', '1', NULL, '2024-07-30 14:04:49', NULL),
(330, NULL, NULL, '193', 'IMAGE', 'image_url', NULL, 'single_image', 'N', 5, NULL, NULL, NULL, NULL, 255, '', '', '', '', '1', NULL, '2024-07-30 14:04:49', NULL),
(331, NULL, NULL, '193', 'TICKET TYPE', 'ticket_type_id', NULL, 'hidden_input', 'N', 6, NULL, NULL, NULL, NULL, 255, '', '', '', '', '1', NULL, '2024-07-30 14:04:49', NULL),
(332, NULL, NULL, '193', 'ACTIVE', 'active', NULL, 'list_single', 'Y', 7, NULL, NULL, NULL, NULL, 255, '', 'active_status', 'is_active', 'Y', '1', NULL, '2024-07-30 14:04:49', NULL),
(333, NULL, NULL, '194', 'ID', 'id', NULL, 'hidden_input', 'Y', 1, NULL, NULL, NULL, NULL, 255, '', '', '', 'Y', '1', NULL, '2024-07-30 14:07:18', NULL),
(334, NULL, NULL, '194', 'USER', 'user_id', NULL, 'hidden_input', 'N', 2, NULL, NULL, NULL, NULL, 255, '', '', '', '', '1', NULL, '2024-07-30 14:07:18', NULL),
(335, NULL, NULL, '194', 'USER NAME', 'web_user_id', NULL, 'list_single', 'N', 3, NULL, NULL, NULL, NULL, 255, '', 'users', 'name', 'Y', '1', NULL, '2024-07-30 14:07:18', NULL),
(336, NULL, NULL, '194', 'CARD', 'card_id', NULL, 'list_single', 'N', 4, NULL, NULL, NULL, NULL, 255, '', 'cards', 'title', 'Y', '1', NULL, '2024-07-30 14:07:18', NULL),
(337, NULL, NULL, '194', 'VIDEO LINK', 'video_link', NULL, 'single_file', 'N', 5, NULL, NULL, NULL, NULL, 255, '', '', '', 'Y', '1', NULL, '2024-07-30 14:07:18', NULL),
(338, NULL, NULL, '194', 'TICKET TYPE', 'ticket_type_id', NULL, 'hidden_input', 'N', 6, NULL, NULL, NULL, NULL, 255, '', '', '', '', '1', NULL, '2024-07-30 14:07:18', NULL),
(339, NULL, NULL, '194', 'ACTIVE', 'active', NULL, 'list_single', 'Y', 7, NULL, NULL, NULL, NULL, 255, '', 'active_status', 'is_active', 'Y', '1', NULL, '2024-07-30 14:07:18', NULL),
(340, NULL, NULL, '195', 'ID', 'id', NULL, 'hidden_input', 'Y', 1, NULL, NULL, NULL, NULL, 255, '', '', '', 'Y', '1', NULL, '2024-07-30 14:17:15', NULL),
(341, NULL, NULL, '195', 'USER', 'user_id', NULL, 'hidden_input', 'N', 2, NULL, NULL, NULL, NULL, 255, '', '', '', 'N', '1', NULL, '2024-07-30 14:17:15', NULL),
(342, NULL, NULL, '195', 'USER NAME', 'web_user_id', NULL, 'list_single', 'N', 3, NULL, NULL, NULL, NULL, 255, '', 'users', 'name', 'Y', '1', NULL, '2024-07-30 14:17:15', NULL),
(343, NULL, NULL, '195', 'CARD', 'card_id', NULL, 'list_single', 'N', 4, NULL, NULL, NULL, NULL, 255, '', 'cards', 'title', 'Y', '1', NULL, '2024-07-30 14:17:15', NULL),
(344, NULL, NULL, '195', 'PREFIX', 'prefix', NULL, 'text_input', 'N', 5, NULL, NULL, NULL, NULL, 255, '', '', '', 'Y', '1', NULL, '2024-07-30 14:17:15', NULL),
(345, NULL, NULL, '195', 'RECIPIENT NAME', 'recipient_name', NULL, 'text_input', 'N', 6, NULL, NULL, NULL, NULL, 255, '', '', '', 'Y', '1', NULL, '2024-07-30 14:17:15', NULL),
(346, NULL, NULL, '195', 'MOBILE NO', 'mobile_no', NULL, 'text_input', 'N', 7, NULL, NULL, NULL, NULL, 255, '', '', '', 'Y', '1', NULL, '2024-07-30 14:17:15', NULL),
(347, NULL, NULL, '195', 'ACTIVE', 'active', NULL, 'list_single', 'Y', 8, NULL, NULL, NULL, NULL, 255, '', 'active_status', 'is_active', 'Y', '1', NULL, '2024-07-30 14:17:15', NULL),
(348, NULL, NULL, '196', 'ID', 'id', NULL, 'hidden_input', 'Y', 1, NULL, NULL, NULL, NULL, 255, '', '', '', 'Y', '1', NULL, '2024-07-30 14:20:43', NULL),
(349, NULL, NULL, '196', 'USER', 'user_id', NULL, 'hidden_input', 'N', 2, NULL, NULL, NULL, NULL, 255, '', '', '', '', '1', NULL, '2024-07-30 14:20:43', NULL),
(350, NULL, NULL, '196', 'USER NAME', 'web_user_id', NULL, 'list_single', 'N', 3, NULL, NULL, NULL, NULL, 255, '', 'users', 'name', 'Y', '1', NULL, '2024-07-30 14:20:43', NULL),
(351, NULL, NULL, '196', 'CARD', 'card_id', NULL, 'list_single', 'N', 4, NULL, NULL, NULL, NULL, 255, '', 'cards', 'title', 'Y', '1', NULL, '2024-07-30 14:20:43', NULL),
(352, NULL, NULL, '196', 'SCORE RATING', 'score_rating', NULL, 'number_input', 'N', 5, NULL, NULL, NULL, NULL, 255, '', '', '', 'Y', '1', NULL, '2024-07-30 14:20:43', NULL),
(353, NULL, NULL, '196', 'FULL NAME', 'full_name', NULL, 'text_input', 'N', 6, NULL, NULL, NULL, NULL, 255, '', '', '', 'Y', '1', NULL, '2024-07-30 14:20:43', NULL),
(354, NULL, NULL, '196', 'REVIEW', 'review', NULL, 'text_area', 'N', 7, NULL, NULL, NULL, NULL, 255, '', '', '', '', '1', NULL, '2024-07-30 14:20:43', NULL),
(355, NULL, NULL, '196', 'ACTIVE', 'active', NULL, 'list_single', 'Y', 8, NULL, NULL, NULL, NULL, 255, '', 'active_status', 'is_active', 'Y', '1', NULL, '2024-07-30 14:20:43', NULL),
(356, NULL, NULL, '197', 'ID', 'id', NULL, 'hidden_input', 'Y', 1, NULL, NULL, NULL, NULL, 255, '', '', '', 'Y', '1', NULL, '2024-07-30 14:37:59', NULL),
(357, NULL, NULL, '197', 'USER', 'user_id', NULL, 'hidden_input', 'N', 2, NULL, NULL, NULL, NULL, 255, '', '', '', '', '1', NULL, '2024-07-30 14:37:59', NULL),
(358, NULL, NULL, '197', 'WEB USER', 'web_user_id', NULL, 'hidden_input', 'N', 3, NULL, NULL, NULL, NULL, 255, '', '', '', '', '1', NULL, '2024-07-30 14:37:59', NULL),
(359, NULL, NULL, '197', 'WIDGET NAME', 'widget_name', NULL, 'text_input', 'N', 4, NULL, NULL, NULL, NULL, 255, '', '', '', 'Y', '1', NULL, '2024-07-30 14:37:59', NULL),
(360, NULL, NULL, '197', 'TICKET TYPE', 'ticket_type_id', NULL, 'list_single', 'N', 5, NULL, NULL, NULL, NULL, 255, '', 'ticket_types', 'ticket_type', 'Y', '1', NULL, '2024-07-30 14:37:59', NULL),
(361, NULL, NULL, '197', 'ACTIVE', 'active', NULL, 'list_single', 'Y', 6, NULL, NULL, NULL, NULL, 255, '', 'active_status', 'is_active', 'Y', '1', NULL, '2024-07-30 14:37:59', NULL),
(362, NULL, NULL, '198', 'ID', 'id', NULL, 'hidden_input', 'Y', 1, NULL, NULL, NULL, NULL, 255, '', '', '', 'Y', '1', NULL, '2024-07-30 14:59:10', NULL),
(363, NULL, NULL, '198', 'USER', 'user_id', NULL, 'hidden_input', 'N', 2, NULL, NULL, NULL, NULL, 255, '', '', '', '', '1', NULL, '2024-07-30 14:59:10', NULL),
(364, NULL, NULL, '198', 'WEB USER', 'web_user_id', NULL, 'hidden_input', 'N', 3, NULL, NULL, NULL, NULL, 255, '', '', '', 'N', '1', NULL, '2024-07-30 14:59:10', NULL),
(365, NULL, NULL, '198', 'TICKET IMAGE', 'ticket_image', NULL, 'single_image', 'N', 4, NULL, NULL, NULL, NULL, 255, '', '', '', '', '1', NULL, '2024-07-30 14:59:10', NULL),
(366, NULL, NULL, '198', 'TICKET TYPE', 'ticket_type', NULL, 'text_input', 'N', 5, NULL, NULL, NULL, NULL, 255, '', '', '', 'Y', '1', NULL, '2024-07-30 14:59:10', NULL),
(367, NULL, NULL, '198', 'TICKET PRICE', 'ticket_price', NULL, 'text_input', 'N', 6, NULL, NULL, NULL, NULL, 255, '', '', '', 'Y', '1', NULL, '2024-07-30 14:59:10', NULL),
(368, NULL, NULL, '198', 'ACTIVE', 'active', NULL, 'list_single', 'Y', 7, NULL, NULL, NULL, NULL, 255, '', 'active_status', 'is_active', 'Y', '1', NULL, '2024-07-30 14:59:10', NULL),
(369, NULL, NULL, '199', 'ID', 'id', NULL, 'hidden_input', 'Y', 1, NULL, NULL, NULL, NULL, 255, '', '', '', 'Y', '1', NULL, '2024-08-03 15:27:55', NULL),
(370, NULL, NULL, '199', 'USER', 'user_id', NULL, 'hidden_input', 'N', 2, NULL, NULL, NULL, NULL, 255, '', '', '', '', '1', NULL, '2024-08-03 15:27:55', NULL),
(371, NULL, NULL, '199', 'WEB USER', 'web_user_id', NULL, 'hidden_input', 'N', 3, NULL, NULL, NULL, NULL, 255, '', '', '', '', '1', NULL, '2024-08-03 15:27:55', NULL),
(372, NULL, NULL, '199', 'TICKET IMAGE', 'ticket_image', NULL, 'single_image', 'N', 4, NULL, NULL, NULL, NULL, 255, '', '', '', '', '1', NULL, '2024-08-03 15:27:55', NULL),
(373, NULL, NULL, '199', 'TICKET TYPE', 'ticket_type', NULL, 'text_input', 'N', 5, NULL, NULL, NULL, NULL, 255, '', '', '', 'Y', '1', NULL, '2024-08-03 15:27:55', NULL),
(374, NULL, NULL, '199', 'TOKENS', 'tokens', NULL, 'number_input', 'N', 6, NULL, NULL, NULL, NULL, 255, '', '', '', 'Y', '1', NULL, '2024-08-03 15:27:55', NULL),
(375, NULL, NULL, '199', 'SHORT DESCR', 'short_descr', NULL, 'text_input', 'N', 7, NULL, NULL, NULL, NULL, 255, '', '', '', '', '1', NULL, '2024-08-03 15:27:55', NULL),
(376, NULL, NULL, '199', 'ACTIVE', 'active', NULL, 'list_single', 'Y', 8, NULL, NULL, NULL, NULL, 255, '', 'active_status', 'is_active', 'Y', '1', NULL, '2024-08-03 15:27:55', NULL),
(377, NULL, NULL, '200', 'ID', 'id', NULL, 'hidden_input', 'Y', 1, NULL, NULL, NULL, NULL, 255, '', '', '', 'Y', '1', NULL, '2024-08-03 20:45:10', NULL),
(378, NULL, NULL, '200', 'USER', 'user_id', NULL, 'hidden_input', 'N', 2, NULL, NULL, NULL, NULL, 255, '', '', '', '', '1', NULL, '2024-08-03 20:45:10', NULL),
(379, NULL, NULL, '200', 'WEB USER', 'web_user_id', NULL, 'hidden_input', 'N', 3, NULL, NULL, NULL, NULL, 255, '', '', '', '', '1', NULL, '2024-08-03 20:45:10', NULL),
(380, NULL, NULL, '200', 'MUSIC CATEGORY', 'music_category', NULL, 'text_input', 'N', 4, NULL, NULL, NULL, NULL, 255, '', '', '', 'Y', '1', NULL, '2024-08-03 20:45:10', NULL),
(381, NULL, NULL, '200', 'TICKET TYPE', 'ticket_type_id', NULL, 'list_single', 'N', 5, NULL, NULL, NULL, NULL, 255, '', 'ticket_types', 'ticket_type', 'Y', '1', NULL, '2024-08-03 20:45:10', NULL),
(382, NULL, NULL, '200', 'ACTIVE', 'active', NULL, 'list_single', 'Y', 6, NULL, NULL, NULL, NULL, 255, '', 'active_status', 'is_active', 'Y', '1', NULL, '2024-08-03 20:45:10', NULL),
(383, NULL, NULL, '201', 'ID', 'id', NULL, 'hidden_input', 'Y', 1, NULL, NULL, NULL, NULL, 255, '', '', '', 'Y', '1', NULL, '2024-08-03 20:47:31', NULL),
(384, NULL, NULL, '201', 'USER', 'user_id', NULL, 'hidden_input', 'N', 2, NULL, NULL, NULL, NULL, 255, '', '', '', '', '1', NULL, '2024-08-03 20:47:31', NULL),
(385, NULL, NULL, '201', 'WEB USER', 'web_user_id', NULL, 'hidden_input', 'N', 3, NULL, NULL, NULL, NULL, 255, '', '', '', '', '1', NULL, '2024-08-03 20:47:31', NULL),
(386, NULL, NULL, '201', 'TITLE', 'title', NULL, 'text_input', 'N', 4, NULL, NULL, NULL, NULL, 255, '', '', '', 'Y', '1', NULL, '2024-08-03 20:47:31', NULL),
(387, NULL, NULL, '201', 'SOUND FILE', 'sound_file', NULL, 'single_file', 'N', 5, NULL, NULL, NULL, NULL, 255, '', '', '', '', '1', NULL, '2024-08-03 20:47:31', NULL),
(388, NULL, NULL, '201', 'ACTIVE', 'active', NULL, 'list_single', 'Y', 6, NULL, NULL, NULL, NULL, 255, '', 'active_status', 'is_active', 'Y', '1', NULL, '2024-08-03 20:47:31', NULL),
(389, NULL, NULL, '202', 'ID', 'id', NULL, 'hidden_input', 'Y', 1, NULL, NULL, NULL, NULL, 255, '', '', '', 'Y', '1', NULL, '2024-08-03 21:23:08', NULL),
(390, NULL, NULL, '202', 'USER', 'user_id', NULL, 'hidden_input', 'N', 2, NULL, NULL, NULL, NULL, 255, '', '', '', '', '1', NULL, '2024-08-03 21:23:08', NULL),
(391, NULL, NULL, '202', 'WEB USER', 'web_user_id', NULL, 'hidden_input', 'N', 3, NULL, NULL, NULL, NULL, 255, '', '', '', '', '1', NULL, '2024-08-03 21:23:08', NULL),
(392, NULL, NULL, '202', 'MUSIC CATEGORY', 'music_category_id', NULL, 'list_single', 'N', 4, NULL, NULL, NULL, NULL, 255, '', 'music_categories', 'music_category', 'Y', '1', NULL, '2024-08-03 21:23:08', NULL),
(393, NULL, NULL, '202', 'TITLE', 'title', NULL, 'text_input', 'N', 5, NULL, NULL, NULL, NULL, 255, '', '', '', 'Y', '1', NULL, '2024-08-03 21:23:08', NULL),
(394, NULL, NULL, '202', 'MUSIC FILE', 'music_file', NULL, 'single_file', 'N', 6, NULL, NULL, NULL, NULL, 255, '', '', '', '', '1', NULL, '2024-08-03 21:23:08', NULL),
(395, NULL, NULL, '202', 'ACTIVE', 'active', NULL, 'list_single', 'Y', 7, NULL, NULL, NULL, NULL, 255, '', 'active_status', 'is_active', 'Y', '1', NULL, '2024-08-03 21:23:08', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `effects`
--

DROP TABLE IF EXISTS `effects`;
CREATE TABLE `effects` (
  `id` bigint UNSIGNED NOT NULL,
  `client_id` varchar(10) DEFAULT NULL,
  `user_id` varchar(10) DEFAULT NULL,
  `web_user_id` varchar(10) DEFAULT NULL,
  `title` varchar(200) DEFAULT NULL,
  `effects_file` varchar(200) DEFAULT NULL,
  `base_lang` varchar(5) NOT NULL DEFAULT 'en',
  `ticket_type_id` varchar(5) DEFAULT NULL,
  `active` varchar(5) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `deleted_for` varchar(10) DEFAULT NULL
)   ;

-- --------------------------------------------------------

--
-- Table structure for table `envelop_designs`
--

DROP TABLE IF EXISTS `envelop_designs`;
CREATE TABLE `envelop_designs` (
  `id` bigint UNSIGNED NOT NULL,
  `client_id` varchar(10) DEFAULT NULL,
  `user_id` varchar(10) DEFAULT NULL,
  `web_user_id` varchar(10) DEFAULT NULL,
  `title` varchar(200) DEFAULT NULL,
  `short_desc` varchar(500) DEFAULT NULL,
  `main_image` varchar(200) DEFAULT NULL,
  `base_lang` varchar(5) NOT NULL DEFAULT 'en',
  `ticket_type_id` varchar(5) DEFAULT NULL,
  `active` varchar(5) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `deleted_for` varchar(10) DEFAULT NULL
)   ;

--
-- Dumping data for table `envelop_designs`
--

INSERT INTO `envelop_designs` (`id`, `client_id`, `user_id`, `web_user_id`, `title`, `short_desc`, `main_image`, `base_lang`, `ticket_type_id`, `active`, `created_at`, `updated_at`, `deleted_at`, `deleted_for`) VALUES
(1, NULL, NULL, NULL, 'Simple', 'its Free', 'public/4Rvu1kK3KMbWWu6q1xnRSpx774XkRZlxdEWqbc6i.webp', 'en', NULL, '1', '2024-05-25 09:44:37', '2024-05-25 15:14:02', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `envelop_design_parts`
--

DROP TABLE IF EXISTS `envelop_design_parts`;
CREATE TABLE `envelop_design_parts` (
  `id` bigint UNSIGNED NOT NULL,
  `client_id` varchar(10) DEFAULT NULL,
  `user_id` varchar(10) DEFAULT NULL,
  `web_user_id` varchar(10) DEFAULT NULL,
  `envelop_design_id` varchar(10) DEFAULT NULL,
  `thumbnail` varchar(200) DEFAULT NULL,
  `front_image` varchar(200) DEFAULT NULL,
  `back_image` varchar(200) DEFAULT NULL,
  `flap_image` varchar(200) DEFAULT NULL,
  `base_lang` varchar(5) NOT NULL DEFAULT 'en',
  `active` varchar(5) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `deleted_for` varchar(10) DEFAULT NULL
)   ;

--
-- Dumping data for table `envelop_design_parts`
--

INSERT INTO `envelop_design_parts` (`id`, `client_id`, `user_id`, `web_user_id`, `envelop_design_id`, `thumbnail`, `front_image`, `back_image`, `flap_image`, `base_lang`, `active`, `created_at`, `updated_at`, `deleted_at`, `deleted_for`) VALUES
(1, NULL, NULL, NULL, '1', 'public/FmJS9tV1rcnKyQebjPpxZ5RQiV3LtMGKyvFPzBTK.webp', 'public/wF2u1DdkgkwAMLXuK9hcvsWT4W8WCUuAGwP7BkJ0.webp', 'public/VxDL3GhsbYgPopCcX5GGfXlG6zoDWxVPm8Dcmf42.webp', 'public/WthKmJoVfXXYKMNZhOcBFhN1151FJgGJTQoC0H0V.webp', 'en', '1', '2024-05-25 09:46:30', '2024-05-25 15:12:26', NULL, NULL),
(2, NULL, NULL, NULL, '1', 'public/Y8I9dqYX8M0mPp7DsDGMfqXFpDhJ878Db6mwf3iT.webp', 'public/PDv9u9w2aUVezrJg5oZqg1D0B1JqdAzXV234Vchh.webp', 'public/5CrCAti9Jp7t0W7rwL1RcYu95QDNAbAUznUYnZTU.webp', 'public/Ze88zGs9Z3izFP7lSDeVtcVX3jPBZAiOy0Dzruc5.webp', 'en', '1', '2024-05-25 09:47:30', '2024-05-25 15:11:38', NULL, NULL),
(3, NULL, NULL, NULL, '1', 'public/bmTqbbeGYtz38Wrkci5U4vIzlY57rnuqkFUxybEn.webp', 'public/kOhqPbV40SlrtwGdVVFeBOnDHdZVp3ebpuHiBqeM.webp', 'public/wgMZy4zudK7q0TQO1aKVC5w70az2whwBXCgCJzbP.webp', 'public/8Yv7YJJXAFnbTta31cxSvfx71zpSo5nkwF0UEpGS.webp', 'en', '1', '2024-05-25 09:48:51', '2024-05-25 15:10:19', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `envelop_inside_images`
--

DROP TABLE IF EXISTS `envelop_inside_images`;
CREATE TABLE `envelop_inside_images` (
  `id` bigint UNSIGNED NOT NULL,
  `client_id` varchar(10) DEFAULT NULL,
  `user_id` varchar(10) DEFAULT NULL,
  `web_user_id` varchar(10) DEFAULT NULL,
  `title` varchar(200) DEFAULT NULL,
  `main_image` varchar(200) DEFAULT NULL,
  `more_images` text  ,
  `ticket_type_id` varchar(5) DEFAULT NULL,
  `base_lang` varchar(5) NOT NULL DEFAULT 'en',
  `active` varchar(5) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `deleted_for` varchar(10) DEFAULT NULL
)   ;

--
-- Dumping data for table `envelop_inside_images`
--

INSERT INTO `envelop_inside_images` (`id`, `client_id`, `user_id`, `web_user_id`, `title`, `main_image`, `more_images`, `ticket_type_id`, `base_lang`, `active`, `created_at`, `updated_at`, `deleted_at`, `deleted_for`) VALUES
(1, NULL, NULL, NULL, 'Simple', 'public/w4JQByMAKr90PLgjy1ehjFo5cwid2IYmHzQe8SjT.webp', 'public/YCiWoXuVTeBt23GMiidBL9TDNayaToh2kRfL8bWD.webp,public/9z2Tb0eL5xfL0S9BA8V4kYJHRi8UoA46uGMVTqmf.webp,public/PDLn0MiTGHn14qNHQ1qc86Sw4TdSPNIqRmCTYSIs.webp,public/kkMpqHQhAprirWenYwyjWeUN7iCEhVeA5lJESn1E.webp,public/Aiw6trGzLvFli7KeGCqn0ZELGyYzO8ANkyVq0xAQ.webp,public/QbwgIhkPfUWuq5puwFaXbk5BQIQaucxu100sOY9P.webp,public/LcYG1JvOqkOvfYURg6vigMdJ0dzBX892sNgF3Wzx.webp', NULL, 'en', '1', '2024-05-24 19:35:21', '2024-05-25 00:35:21', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `favourites`
--

DROP TABLE IF EXISTS `favourites`;
CREATE TABLE `favourites` (
  `id` bigint UNSIGNED NOT NULL,
  `client_id` varchar(10) DEFAULT NULL,
  `user_id` varchar(10) DEFAULT NULL,
  `web_user_id` varchar(10) DEFAULT NULL,
  `card_id` varchar(5) NOT NULL,
  `base_lang` varchar(5) NOT NULL DEFAULT 'en',
  `active` varchar(5) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `deleted_for` varchar(10) DEFAULT NULL
)   ;

-- --------------------------------------------------------

--
-- Table structure for table `music_categories`
--

DROP TABLE IF EXISTS `music_categories`;
CREATE TABLE `music_categories` (
  `id` bigint UNSIGNED NOT NULL,
  `client_id` varchar(10) DEFAULT NULL,
  `user_id` varchar(10) DEFAULT NULL,
  `web_user_id` varchar(10) DEFAULT NULL,
  `music_category` varchar(200) DEFAULT NULL,
  `ticket_type_id` varchar(10) DEFAULT NULL,
  `base_lang` varchar(5) NOT NULL DEFAULT 'en',
  `active` varchar(5) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `deleted_for` varchar(10) DEFAULT NULL
)   ;

--
-- Dumping data for table `music_categories`
--

INSERT INTO `music_categories` (`id`, `client_id`, `user_id`, `web_user_id`, `music_category`, `ticket_type_id`, `base_lang`, `active`, `created_at`, `updated_at`, `deleted_at`, `deleted_for`) VALUES
(1, NULL, NULL, NULL, 'Birth day', '1', 'en', '1', '2024-05-27 19:32:24', '2024-08-03 20:48:25', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `music_files`
--

DROP TABLE IF EXISTS `music_files`;
CREATE TABLE `music_files` (
  `id` bigint UNSIGNED NOT NULL,
  `client_id` varchar(10) DEFAULT NULL,
  `user_id` varchar(10) DEFAULT NULL,
  `web_user_id` varchar(10) DEFAULT NULL,
  `music_category_id` varchar(10) DEFAULT NULL,
  `title` varchar(200) DEFAULT NULL,
  `music_file` varchar(200) DEFAULT NULL,
  `base_lang` varchar(5) NOT NULL DEFAULT 'en',
  `active` varchar(5) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `deleted_for` varchar(10) DEFAULT NULL
)   ;

--
-- Dumping data for table `music_files`
--

INSERT INTO `music_files` (`id`, `client_id`, `user_id`, `web_user_id`, `music_category_id`, `title`, `music_file`, `base_lang`, `active`, `created_at`, `updated_at`, `deleted_at`, `deleted_for`) VALUES
(1, NULL, NULL, NULL, '1', 'Happy Birthday', 'public/happy-birthday-155461.mp3', 'en', '1', '2024-05-27 19:33:56', '2024-05-28 13:09:06', NULL, NULL),
(4, NULL, NULL, NULL, '1', 'Pufino - Enjoy', 'public/pufin_enjoy.mp3', 'en', '1', '2024-08-03 16:26:21', '2024-08-03 21:26:21', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `post_reviews`
--

DROP TABLE IF EXISTS `post_reviews`;
CREATE TABLE `post_reviews` (
  `id` bigint UNSIGNED NOT NULL,
  `client_id` varchar(10) DEFAULT NULL,
  `user_id` varchar(10) DEFAULT NULL,
  `web_user_id` varchar(10) DEFAULT NULL,
  `post_id` varchar(10) DEFAULT NULL,
  `score_rating` varchar(5) DEFAULT NULL,
  `full_name` varchar(200) DEFAULT NULL,
  `review` text,
  `base_lang` varchar(5) NOT NULL DEFAULT 'en',
  `active` varchar(5) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `deleted_for` varchar(10) DEFAULT NULL
)   ;

-- --------------------------------------------------------

--
-- Table structure for table `seal_designs`
--

DROP TABLE IF EXISTS `seal_designs`;
CREATE TABLE `seal_designs` (
  `id` bigint UNSIGNED NOT NULL,
  `client_id` varchar(10) DEFAULT NULL,
  `user_id` varchar(10) DEFAULT NULL,
  `web_user_id` varchar(10) DEFAULT NULL,
  `title` varchar(200) DEFAULT NULL,
  `main_image` varchar(200) DEFAULT NULL,
  `more_images` text,
  `base_lang` varchar(5) NOT NULL DEFAULT 'en',
  `ticket_type_id` varchar(5) DEFAULT NULL,
  `active` varchar(5) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `deleted_for` varchar(10) DEFAULT NULL
)   ;

--
-- Dumping data for table `seal_designs`
--

INSERT INTO `seal_designs` (`id`, `client_id`, `user_id`, `web_user_id`, `title`, `main_image`, `more_images`, `base_lang`, `ticket_type_id`, `active`, `created_at`, `updated_at`, `deleted_at`, `deleted_for`) VALUES
(1, NULL, NULL, NULL, 'Dark blue', 'public/9KbNnuBjc2B4wXUDnjlH1KHuovHJTKaV7I6sEsDA.webp', 'public/LKtdQKh0fD0lPykOkKTCgK13PhLHvgR0xBmBdodo.webp,public/lPteWSrsqRnRWQ7CJxSGEA1gl34GamaB5fXvNXMC.webp,public/y7NRr2aLQTelEIxZ70eHHzxgJ47CkFfPoiWkFocu.webp,public/VvUALepmPArQDa2Lqh6bznRxcN1HCDSRKcAo5wV0.webp,public/lPq1kP90qYtmR6RkPsJ4U3YBZ1rq8pqHWnJbHAoZ.webp,public/vmknlS2LsGPtVJl2nDKr8nQtJ53sVotHwkQ8oqfz.webp,public/ZoNXhgPL1QXFp7kO5kvTgrtkuoFOn3NwuCXH54rK.webp,public/IUyswiQLRWFTh3ItO9iL4PoPdLgIQGcIzPbxro3w.webp,public/r9Ao5kLJxjUM5b5t9FYVeuWCzFEEGYbKBbmlkWxu.webp,public/P4C4BPVqxX4nrFV47J8fUITlYY5L10YpbeWY2MQC.webp,public/NZ1IC9Gj2MFXNM5LtH5iIP3dPtX6mvAMNozmUFxG.webp,public/JnMDYrrk9EBDtJeZpwimFEdiLFTMO2OtTP2JhFjW.webp,public/cLto5G4tJd3otPc5ePJGNq9W6vv8MhCCOFKgfvcU.webp,public/VqKRi8VRYvNzOnfWEBoE36sDtRSEeYqinazGqz7S.webp,public/Y78kSBB9ycNCl0l1j5DziXjrjtt3YxpJ0DnsnAlJ.webp,public/dlMBW364TZOSQsAoBJjeAESzvvWnsa4Gdwb2qutz.webp,public/0U6WLoOoukvBMqwlIXJtWyjD6tPl6poVCfeD6qWc.webp,public/g39pJo7zNHkHHDMPFH5xI24CNLZQmoNKeal9TFbb.webp,public/G9ODiRrSppGwY4Rxgk3GaEoA1dWkoHTubvShUx8M.webp', 'en', NULL, '1', '2024-05-25 03:34:20', '2024-05-25 08:34:20', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sound_files`
--

DROP TABLE IF EXISTS `sound_files`;
CREATE TABLE `sound_files` (
  `id` bigint UNSIGNED NOT NULL,
  `client_id` varchar(10) DEFAULT NULL,
  `user_id` varchar(10) DEFAULT NULL,
  `web_user_id` varchar(10) DEFAULT NULL,
  `title` varchar(200) DEFAULT NULL,
  `sound_file` varchar(200) DEFAULT NULL,
  `base_lang` varchar(5) NOT NULL DEFAULT 'en',
  `active` varchar(5) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `deleted_for` varchar(10) DEFAULT NULL
)   ;

-- --------------------------------------------------------

--
-- Table structure for table `stamp_designs`
--

DROP TABLE IF EXISTS `stamp_designs`;
CREATE TABLE `stamp_designs` (
  `id` bigint UNSIGNED NOT NULL,
  `client_id` varchar(10) DEFAULT NULL,
  `user_id` varchar(10) DEFAULT NULL,
  `web_user_id` varchar(10) DEFAULT NULL,
  `title` varchar(200) DEFAULT NULL,
  `main_image` varchar(200) DEFAULT NULL,
  `more_images` text  ,
  `base_lang` varchar(5) NOT NULL DEFAULT 'en',
  `ticket_type_id` varchar(5) DEFAULT NULL,
  `active` varchar(5) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `deleted_for` varchar(10) DEFAULT NULL
)   ;

--
-- Dumping data for table `stamp_designs`
--

INSERT INTO `stamp_designs` (`id`, `client_id`, `user_id`, `web_user_id`, `title`, `main_image`, `more_images`, `base_lang`, `ticket_type_id`, `active`, `created_at`, `updated_at`, `deleted_at`, `deleted_for`) VALUES
(1, NULL, NULL, NULL, 'Round Stamps', 'public/cGMHqOGeIKUF7x838O0RbLCxzgVceahPFUACFBuQ.webp', 'public/ApgsX4pFdPsy9O2yzeSIAUgoaTrsLWYTCJeR2fF7.webp,public/p304H53tuMjkhuMXepxKAFpt1mhkUgCyCDP58MiU.webp,public/g7GEKgkOsLLrprhLaTjJ2O9gClVbxZxslINc9pAp.webp,public/5ke3PqrXikyjEaLWxGqjSvp9J0bbgLx0CR2DenR2.webp,public/quUpz8XD8WJLBYO8Aohdoacdxvax8A4F7k8Zr6c3.webp,public/QIZh69Zqn6Rwsc9dbFaj2dRvVxy9SyFldenjLndG.webp,public/AR8HLzowLsP69U3grpS1R6ZkTbyoLJYvSOAwrtW0.webp,public/HYLepf5GGMyyQcf5aYVujKkdC42w90Whpv6pL189.webp,public/9PuuBRv65NVTaaNFQe0hRR1Jd4gTNuwIkcKXCeA6.webp', 'en', '1', '1', '2024-05-25 02:42:58', '2024-05-25 07:42:58', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `stamp_images`
--

DROP TABLE IF EXISTS `stamp_images`;
CREATE TABLE `stamp_images` (
  `id` bigint UNSIGNED NOT NULL,
  `client_id` varchar(10) DEFAULT NULL,
  `user_id` varchar(10) DEFAULT NULL,
  `web_user_id` varchar(10) DEFAULT NULL,
  `title` varchar(200) DEFAULT NULL,
  `main_image` varchar(200) DEFAULT NULL,
  `more_images` text  ,
  `base_lang` varchar(5) NOT NULL DEFAULT 'en',
  `ticket_type_id` varchar(5) DEFAULT NULL,
  `active` varchar(5) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `deleted_for` varchar(10) DEFAULT NULL
)   ;

--
-- Dumping data for table `stamp_images`
--

INSERT INTO `stamp_images` (`id`, `client_id`, `user_id`, `web_user_id`, `title`, `main_image`, `more_images`, `base_lang`, `ticket_type_id`, `active`, `created_at`, `updated_at`, `deleted_at`, `deleted_for`) VALUES
(1, NULL, NULL, NULL, 'Flowers', 'public/nOC1KMDE4SR9rapYxJBOyLWtfkIwa7Xn1aqwXcsD.webp', 'public/cvUoOPtsW7aFnIJX6eSRHUKyl2Bk4QeNoOnTZA3m.webp,public/M2BCurD8ivMV4bORW1fOhdghCrJ9Y1DbJc9nn8Rq.webp,public/888g9JuOCcws9ZfRiNvGmNgVlknSSZzFpIuqRrjM.webp,public/LFFq6EnGishQsQBymwmIq4FFmgeHtwRfDcgtRSrC.webp,public/EttYWhNcFZjsDf8DYSIOVJ9kuZ9yYJg7AVM2AjLE.webp,public/lZgNXlhr4K4CkDEwS6DlyPM1sNpZoeDCuFIl58vj.webp,public/33Dog2sGNutrBz1YLPnrYRY52FvEHrLl4aUMydD5.webp,public/XmTkUXwVmD3abq7hOjbYYRTjq0wO9lUgIsGsurUZ.webp,public/2bzqxZeWiphI227YicpXMh4zDHkJKcAnDNv4Zvyq.webp,public/C8yVrirC9bXyjpDHG1A5icKxwQ6gm7AMMnvVM3tk.webp,public/fckHc8IoUfHQkbpI0SGDxtgRTV5LQ4qMpWdwJcRn.webp,public/ZyL861596pIkAfMhmfHHoNozy8ObvrbeLs6GaNLP.webp,public/E4TZntJIlNwuE01J8p3NCkkoPmFZ2b7MuKbXB81T.webp,public/zyjA75uW0ipuogmfWsPuTTF1lZ2DXk4ZTkJLCNA8.webp,public/GUWR8UWG82J2MwubIHBgse48IpclVvsZ9NQ7BZeC.webp,public/TvZZQqzDChhL9pERQiRUaxlLVDwPiXdCvKnPEfD8.webp,public/OSYUdqWdqGAtGgtjoe0nFO3HPR98hGNgUvIv15sF.webp,public/XAO3xGcDyxayoGwToJlaRjOgmn7p5Izj3lTRnGsT.webp,public/m0K5dU0VmLpWhVzgeLrWPTyL8TjYLz36iFsvlXnW.webp', 'en', '2', '1', '2024-05-25 01:36:38', '2024-07-30 15:44:11', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `stickers`
--

DROP TABLE IF EXISTS `stickers`;
CREATE TABLE `stickers` (
  `id` bigint UNSIGNED NOT NULL,
  `client_id` varchar(10) DEFAULT NULL,
  `user_id` varchar(10) DEFAULT NULL,
  `web_user_id` varchar(10) DEFAULT NULL,
  `title` varchar(200) DEFAULT NULL,
  `main_image` varchar(200) DEFAULT NULL,
  `more_images` text,
  `base_lang` varchar(5) NOT NULL DEFAULT 'en',
  `active` varchar(5) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `deleted_for` varchar(10) DEFAULT NULL
)   ;

--
-- Dumping data for table `stickers`
--

INSERT INTO `stickers` (`id`, `client_id`, `user_id`, `web_user_id`, `title`, `main_image`, `more_images`, `base_lang`, `active`, `created_at`, `updated_at`, `deleted_at`, `deleted_for`) VALUES
(1, NULL, NULL, NULL, 'Flowers', 'public/LFtVhRkqjQyY3t4k3LxIiuYTIqFREYknDhtu9oCg.webp', 'public/fknqrlc0KkJKAMffpaboq88QhPV7TdiiLvZ6HLcp.webp,public/nax0TLcRxax1A9gxoCyXQLWzYm9WUY0e69ZKmBu5.webp,public/5hMqQPJieDkLOci5VQbOnkPiwnx1bJTg7NTPFGnC.webp,public/K0aKckyieFN8FHQdZXztyWEwYqFKgh8vrmsKHvJT.webp,public/uOnHs6Z7L3tRUzD9nQ3tqsNXAhZPtT3cJLV2eKa1.webp,public/MQcFW487SfdPGqiTtiir9VgeuXsipRYfyzuZNc1k.webp,public/2JsaJlFlAvzWOiEM2IVy66j2tRbxyxzOYq8BT4XT.webp,public/0rHL0cvk7SdI5fjGiBtcFEKjn6a0FTiAKmSurqWD.webp,public/CREZHmZwtXPnEoMNjmQWtMTCmTcup2GQCqBLO4be.webp,public/KKBgBpDUm5ql9iRGx5uFKmPklgos2YMJJvNyT6Jd.webp,public/C9WLW0HJXyhimQILjd9BxhbnCuV1NB6ObJSIL6AA.webp,public/AQn9rIpG33iPpy1FHLnRyfuAg6WFlGx37SOIemYg.webp,public/S5TFQCC3Kuxbu5UoghYJKrzpI4icybJQvTOsD3oW.webp,public/V83TDeNsPQQfwWfV0mtvfcoJxpCoxTL8cSuvPLmE.webp,public/v29ZPMg0nQqj3oiJWInzPCBKyRDcueiyyIqDhM9q.webp,public/5ZeXxwop4AhFOwmSHa4b7b9NqeaVL4ZlVCRi44CS.webp,public/7e6qMLcWnAXwaqj7CENa39rc2IKdEo6yPNzmQ3z4.webp,public/DltLEPSCTYU8SQbaHoiifCWTy668pxszyuvAEqF6.webp', 'en', '1', '2024-05-21 08:27:34', '2024-05-21 13:27:34', NULL, NULL),
(2, NULL, NULL, NULL, 'Face Mask', 'public/eQtpEZLc47cdSi8zJesBvN3z95BFSnY3m0AqZQD1.webp', 'public/Xi8DYyGBVpe6lUGb6mRS7p4Dau3qAHsK4xK2MxA4.webp,public/VGkntnAYumf6lO8rOceiTNL9r1HJVuiHTsf1lEj2.webp,public/3uoKSgyNADZH8sF6mabeQiSDF8F2VrCNDavS3rcW.webp,public/ygFfBi6yXKZiCXKqzZkeA5HcIIVunMVlnEahWAW3.webp,public/fx2ksZcsuzYPwqugJWHAdPnoumTbA6uS2G1A6efB.webp,public/cSIE9wTH5EuMJBiTLRQeM2Ob1rvkjH2qI4pV8Pbv.webp,public/OLdV0lJq1sr16eA7RSITxkxGdHr8297XpXGUoTgV.webp,public/8vD2ISAWaOUcxtxH6Gt5Vqdvw5D6gMzfanSW7KWB.webp,public/QJDwai1phb4tswzI46Lhgna8vNZRw4Lz5YSFSxnH.webp,public/vSIOGmzEplfnbAT6cVTpELugOpNcCIg6M73btszm.webp,public/ATXQWvxdIZz6Irpe2GdSdKDeDfxnAGUbcH4BEkH0.webp,public/iPuK62mSiVBJSGMBH5ojcOh10LAqIGCRxbnoePqr.webp,public/fPdWdRO3vK8Ty4AZkXHFngomXOKNVW4EwlAFuG1U.webp,public/LUtLrbcgExDH36LFk3CqoH0IQoCCuLrLZEHtcrVt.webp,public/ek9jEgqADtawMx3GDVHRSSMQRo12vqfIkKGJhXva.webp,public/WaKzWL8xuchodtVyd4xB5P6Z3aMqfhcFRmHAOKqW.webp,public/BIl4FuIRphGGb73FPE57g6kulSKiFG8rOhDQtlY5.webp,public/529P3FImN4UTalWlbdIWGFOAwO8P2IHlqGheb416.webp,public/OQ18Wdkbt5rx1EGfmPIPhjOrLtH5vQ73qdQuPbWY.webp', 'en', '1', '2024-05-24 17:07:16', '2024-05-24 22:07:16', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

DROP TABLE IF EXISTS `tags`;
CREATE TABLE `tags` (
  `id` bigint UNSIGNED NOT NULL,
  `client_id` varchar(10) DEFAULT NULL,
  `user_id` varchar(10) DEFAULT NULL,
  `web_user_id` varchar(10) DEFAULT NULL,
  `tag` varchar(200) DEFAULT NULL,
  `base_lang` varchar(5) NOT NULL DEFAULT 'en',
  `active` varchar(5) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `deleted_for` varchar(10) DEFAULT NULL
)   ;

-- --------------------------------------------------------

--
-- Table structure for table `ticket_types`
--

DROP TABLE IF EXISTS `ticket_types`;
CREATE TABLE `ticket_types` (
  `id` bigint UNSIGNED NOT NULL,
  `client_id` varchar(10) DEFAULT NULL,
  `user_id` varchar(10) DEFAULT NULL,
  `web_user_id` varchar(10) DEFAULT NULL,
  `ticket_image` varchar(200) DEFAULT NULL,
  `ticket_type` varchar(100)   DEFAULT NULL COMMENT 'Gold, Silver, Bronz',
  `tokens` int DEFAULT NULL COMMENT 'Gold=2tokens, Sliver=1token, bronze=0tokens',
  `short_descr` varchar(200) DEFAULT NULL,
  `base_lang` varchar(5) NOT NULL DEFAULT 'en',
  `active` varchar(5) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
)   ;

--
-- Dumping data for table `ticket_types`
--

INSERT INTO `ticket_types` (`id`, `client_id`, `user_id`, `web_user_id`, `ticket_image`, `ticket_type`, `tokens`, `short_descr`, `base_lang`, `active`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, NULL, NULL, NULL, 'public/AYSe1JkDladlLwMi0KmWXvvj8E2T718A5KQEWJBQ.png', 'Gold', 2, 'Use all plans and features', 'en', '1', '2024-07-30 10:05:24', '2024-07-30 15:05:24', NULL),
(2, NULL, NULL, NULL, 'public/hyn1qU1gnFFoxz6LXbV97NZlqfx3CgvNQJrKF9QW.png', 'Silver', 1, 'Access to more designs and widgets ', 'en', '1', '2024-07-30 10:06:15', '2024-07-30 15:06:15', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

DROP TABLE IF EXISTS `transactions`;
CREATE TABLE `transactions` (
  `id` bigint UNSIGNED NOT NULL,
  `client_id` varchar(10) DEFAULT NULL,
  `user_id` varchar(10) DEFAULT NULL,
  `web_user_id` varchar(10) DEFAULT NULL,
  `feature` varchar(200) DEFAULT NULL COMMENT 'feature name / purchased',
  `stamp_type` varchar(10) DEFAULT NULL COMMENT 'gold,silver,bronze',
  `tokens` int DEFAULT NULL COMMENT '+added, -consumed',
  `purchase_trans_id` varchar(200) DEFAULT NULL,
  `base_lang` varchar(5) NOT NULL DEFAULT 'en',
  `ticket_type_id` varchar(5) DEFAULT NULL,
  `active` varchar(5) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
)   ;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `client_id`, `user_id`, `web_user_id`, `feature`, `stamp_type`, `tokens`, `purchase_trans_id`, `base_lang`, `ticket_type_id`, `active`, `created_at`, `updated_at`, `deleted_at`) VALUES
(3, NULL, NULL, '2', 'Purchase', '2', 30, NULL, 'en', NULL, '1', '2024-08-01 19:38:02', '2024-08-02 00:38:02', NULL),
(4, NULL, NULL, '2', 'Purchase', '2', 30, NULL, 'en', NULL, '1', '2024-08-01 19:43:11', '2024-08-02 00:43:11', NULL),
(5, NULL, NULL, '2', 'Purchase', '1', 30, NULL, 'en', NULL, '1', '2024-08-01 19:44:42', '2024-08-02 00:44:42', NULL),
(6, NULL, NULL, '2', 'Purchase', '2', 25, NULL, 'en', NULL, '1', '2024-08-01 19:45:21', '2024-08-02 00:45:21', NULL),
(9, NULL, NULL, '2', 'Stamp Design', '1', -2, NULL, 'en', NULL, '1', '2024-08-01 21:02:16', '2024-08-02 02:02:16', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `client_id` varchar(10) DEFAULT NULL,
  `user_id` varchar(10) DEFAULT NULL,
  `web_user_id` varchar(10) DEFAULT NULL,
  `name` varchar(255)   NOT NULL,
  `email` varchar(255)   NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `validation_code` varchar(100) DEFAULT NULL,
  `password` varchar(255)   NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `active` varchar(5) NOT NULL DEFAULT '1',
  `account_type` varchar(100) DEFAULT NULL,
  `photo` varchar(200) DEFAULT NULL,
  `country` varchar(10) DEFAULT NULL,
  `state` varchar(200) DEFAULT NULL,
  `city` varchar(200) DEFAULT NULL,
  `street_address` text,
  `zip_post_code` varchar(100) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `agree_terms_condition` varchar(10) DEFAULT NULL
)  ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `client_id`, `user_id`, `web_user_id`, `name`, `email`, `email_verified_at`, `validation_code`, `password`, `created_at`, `updated_at`, `active`, `account_type`, `photo`, `country`, `state`, `city`, `street_address`, `zip_post_code`, `phone`, `agree_terms_condition`) VALUES
(1, '1', '1', NULL, 'Admin', 'admin@email.com', '2024-03-12 14:35:45', NULL, '$2y$10$dMJDxLYobp2vdFFFyxvJtu1GfevRjIgXKGW/fI3PYSKtVAeWkC.WS', '2022-03-09 03:19:50', '2022-03-09 03:19:50', '1', 'Admin', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, '2', '2', NULL, 'Faisal', 'faisal@email.com', '2024-03-12 14:35:50', NULL, '$2y$10$dMJDxLYobp2vdFFFyxvJtu1GfevRjIgXKGW/fI3PYSKtVAeWkC.WS', '2022-03-09 03:19:50', '2024-05-14 03:16:07', '1', 'teacher', NULL, '10', NULL, NULL, NULL, NULL, NULL, NULL),
(3, NULL, NULL, NULL, 'Nadeem', 'nadeem@email.com', NULL, 'ceZm1CZeZ5', '$2y$10$xwnCObx/U7FFHnIBotkrx.B11VscKM5pb81jGWoyqRIKS..3/QMX.', '2024-04-08 13:17:11', '2024-05-13 15:16:09', '1', 'student', NULL, 'Pakistan', NULL, 'islamabad', 'House no 23, Street No 23, Sector ABC', '44000', '03335160416', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `widgets_ticket_type`
--

DROP TABLE IF EXISTS `widgets_ticket_type`;
CREATE TABLE `widgets_ticket_type` (
  `id` bigint UNSIGNED NOT NULL,
  `client_id` varchar(10) DEFAULT NULL,
  `user_id` varchar(10) DEFAULT NULL,
  `web_user_id` varchar(10) DEFAULT NULL,
  `widget_name` varchar(200) DEFAULT NULL,
  `ticket_type_id` varchar(10) DEFAULT NULL,
  `base_lang` varchar(5) NOT NULL DEFAULT 'en',
  `active` varchar(5) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
)   ;

-- --------------------------------------------------------

--
-- Table structure for table `widget_attend_quest`
--

DROP TABLE IF EXISTS `widget_attend_quest`;
CREATE TABLE `widget_attend_quest` (
  `id` bigint UNSIGNED NOT NULL,
  `client_id` varchar(10) DEFAULT NULL,
  `user_id` varchar(10) DEFAULT NULL,
  `web_user_id` varchar(10) DEFAULT NULL,
  `card_id` varchar(10) DEFAULT NULL,
  `attend_quest_title` varchar(200) DEFAULT NULL,
  `attend_quest_yes_title` varchar(200) DEFAULT NULL,
  `attend_quest_no_title` varchar(200) DEFAULT NULL,
  `attend_quest_mandatory` varchar(200) DEFAULT NULL,
  `base_lang` varchar(5) NOT NULL DEFAULT 'en',
  `ticket_type_id` varchar(5) DEFAULT NULL,
  `active` varchar(5) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `deleted_for` varchar(10) DEFAULT NULL
)   ;

--
-- Dumping data for table `widget_attend_quest`
--

INSERT INTO `widget_attend_quest` (`id`, `client_id`, `user_id`, `web_user_id`, `card_id`, `attend_quest_title`, `attend_quest_yes_title`, `attend_quest_no_title`, `attend_quest_mandatory`, `base_lang`, `ticket_type_id`, `active`, `created_at`, `updated_at`, `deleted_at`, `deleted_for`) VALUES
(1, NULL, NULL, NULL, NULL, 'Are you attending our ceremony?', 'Yes, I will participate', 'No, I will not participate', 'on', 'en', NULL, '1', '2024-06-29 08:22:30', '2024-06-29 13:22:30', NULL, NULL),
(2, NULL, NULL, NULL, NULL, 'Are you attending our ceremony?', 'Yes, I will participate', 'No, I will not participate', 'on', 'en', NULL, '1', '2024-06-29 09:18:42', '2024-06-29 14:18:42', NULL, NULL),
(3, NULL, NULL, NULL, NULL, 'Are you attending our ceremony?', 'Yes, I will participate', 'No, I will not participate', 'on', 'en', NULL, '1', '2024-06-29 09:37:35', '2024-06-29 14:37:35', NULL, NULL),
(6, NULL, NULL, NULL, NULL, 'Are you attending our ceremony?', 'Yes, I will participate12', 'No, I will not participate', 'on', 'en', NULL, '1', '2024-06-29 10:16:44', '2024-06-29 15:16:44', NULL, NULL),
(7, NULL, NULL, NULL, NULL, 'Are you attending our ceremony?', 'Yes, I will participate12', 'No, I will not participate', 'on', 'en', NULL, '1', '2024-06-29 10:16:47', '2024-06-29 15:16:47', NULL, NULL),
(9, NULL, NULL, NULL, NULL, 'Are you attending our ceremony?', 'Yes, I will participate12', 'No, I will not participate', 'on', 'en', NULL, '1', '2024-06-29 10:17:44', '2024-06-29 15:17:44', NULL, NULL),
(10, NULL, NULL, NULL, NULL, 'Are you attending our ceremony?', 'Yes, I will participate12', 'No, I will not participate', 'on', 'en', NULL, '1', '2024-06-29 10:17:46', '2024-06-29 15:17:46', NULL, NULL),
(11, NULL, NULL, NULL, NULL, 'Are you attending our ceremony?', 'Yes, I will participate12', 'No, I will not participate', 'on', 'en', NULL, '1', '2024-06-29 10:17:46', '2024-06-29 15:17:46', NULL, NULL),
(12, NULL, NULL, NULL, NULL, 'Are you attending our ceremony?', 'Yes, I will participate12', 'No, I will not participate', 'on', 'en', NULL, '1', '2024-06-29 10:17:47', '2024-06-29 15:17:47', NULL, NULL),
(14, NULL, NULL, NULL, NULL, 'Are you attending our ceremony?', 'Yes, I will participate12', 'No, I will not participate', 'on', 'en', NULL, '1', '2024-06-29 10:23:08', '2024-06-29 15:23:08', NULL, NULL),
(15, NULL, NULL, NULL, NULL, 'Are you attending our ceremony?', 'Yes, I will participate12', 'No, I will not participate', 'on', 'en', NULL, '1', '2024-06-29 10:23:12', '2024-06-29 15:23:12', NULL, NULL),
(16, NULL, NULL, NULL, NULL, 'Are you attending our ceremony?', 'Yes, I will participate12', 'No, I will not participate', 'on', 'en', NULL, '1', '2024-06-29 10:23:34', '2024-06-29 15:23:34', NULL, NULL),
(18, NULL, NULL, NULL, NULL, 'Are you attending our ceremony?', 'Yes, I will participate12', 'No, I will not participate', 'on', 'en', NULL, '1', '2024-06-29 10:33:24', '2024-06-29 15:33:24', NULL, NULL),
(19, NULL, NULL, NULL, NULL, 'Are you attending our ceremony?', 'Yes, I will participate13', 'No, I will not participate', 'on', 'en', NULL, '1', '2024-06-29 10:33:48', '2024-06-29 15:33:48', NULL, NULL),
(20, NULL, NULL, NULL, NULL, 'Are you attending our ceremony?', 'Yes, I will participate', 'No, I will not participate', 'on', 'en', NULL, '1', '2024-06-29 10:38:16', '2024-06-29 15:38:16', NULL, NULL),
(21, NULL, NULL, NULL, NULL, 'Are you attending our ceremony?', 'Yes, I will participate', 'No, I will not participate', 'on', 'en', NULL, '1', '2024-06-29 10:38:28', '2024-06-29 15:38:28', NULL, NULL),
(22, NULL, NULL, NULL, NULL, 'Are you attending our ceremony?', 'Yes, I will participate', 'No, I will not participate', 'on', 'en', NULL, '1', '2024-06-29 10:38:41', '2024-06-29 15:38:41', NULL, NULL),
(23, NULL, NULL, NULL, NULL, 'Are you attending our ceremony?', 'Yes, I will participate12', 'No, I will not participate', 'on', 'en', NULL, '1', '2024-06-29 10:39:37', '2024-06-29 15:39:37', NULL, NULL),
(24, NULL, NULL, NULL, '39', 'Are you attending our ceremony?', 'Yes, I will participate', 'No, I will not participate', 'on', 'en', NULL, '1', '2024-06-29 10:44:10', '2024-06-29 15:44:10', NULL, NULL),
(27, NULL, NULL, NULL, '8', 'Are you attending our ceremony?', 'Yes, I will participate', 'No, I will not participate', 'on', 'en', NULL, '1', '2024-07-02 23:43:20', '2024-07-03 04:43:20', NULL, NULL),
(28, NULL, NULL, NULL, '80', 'Are you attending our ceremony?', 'Yes, I will participate', 'No, I will not participate', 'on', 'en', NULL, '1', '2024-08-03 14:11:08', '2024-08-03 19:11:08', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `widget_contact_comm`
--

DROP TABLE IF EXISTS `widget_contact_comm`;
CREATE TABLE `widget_contact_comm` (
  `id` bigint UNSIGNED NOT NULL,
  `client_id` varchar(10) DEFAULT NULL,
  `user_id` varchar(10) DEFAULT NULL,
  `web_user_id` varchar(10) DEFAULT NULL,
  `card_id` varchar(10) DEFAULT NULL,
  `comm_type` varchar(200) DEFAULT NULL,
  `comm_title` varchar(200) DEFAULT NULL,
  `comm_tel` varchar(200) DEFAULT NULL,
  `comm_mobile` varchar(200) DEFAULT NULL,
  `comm_sms_no` varchar(200) DEFAULT NULL,
  `comm_sms_text` varchar(200) DEFAULT NULL,
  `comm_email` varchar(200) DEFAULT NULL,
  `comm_whatsapp_no` varchar(200) DEFAULT NULL,
  `comm_whatsapp_text` varchar(200) DEFAULT NULL,
  `base_lang` varchar(5) NOT NULL DEFAULT 'en',
  `ticket_type_id` varchar(5) DEFAULT NULL,
  `active` varchar(5) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `deleted_for` varchar(10) DEFAULT NULL
)   ;

--
-- Dumping data for table `widget_contact_comm`
--

INSERT INTO `widget_contact_comm` (`id`, `client_id`, `user_id`, `web_user_id`, `card_id`, `comm_type`, `comm_title`, `comm_tel`, `comm_mobile`, `comm_sms_no`, `comm_sms_text`, `comm_email`, `comm_whatsapp_no`, `comm_whatsapp_text`, `base_lang`, `ticket_type_id`, `active`, `created_at`, `updated_at`, `deleted_at`, `deleted_for`) VALUES
(1, NULL, NULL, NULL, NULL, 'mobile', 'call me now', NULL, '6546465465', NULL, NULL, NULL, NULL, NULL, 'en', NULL, '1', '2024-06-29 06:24:29', '2024-06-29 11:24:29', NULL, NULL),
(2, NULL, NULL, NULL, NULL, 'mobile', 'call me now', NULL, '4564567', NULL, NULL, NULL, NULL, NULL, 'en', NULL, '1', '2024-06-29 07:02:16', '2024-06-29 12:02:16', NULL, NULL),
(3, NULL, NULL, NULL, NULL, 'mobile', 'call me now', NULL, '4564567', NULL, NULL, NULL, NULL, NULL, 'en', NULL, '1', '2024-06-29 07:02:18', '2024-06-29 12:02:18', NULL, NULL),
(4, NULL, NULL, NULL, NULL, 'mobile', 'call me now', NULL, '4564567', NULL, NULL, NULL, NULL, NULL, 'en', NULL, '1', '2024-06-29 07:02:18', '2024-06-29 12:02:18', NULL, NULL),
(5, NULL, NULL, NULL, NULL, 'mobile', 'call me now', NULL, '4564567', NULL, NULL, NULL, NULL, NULL, 'en', NULL, '1', '2024-06-29 07:02:22', '2024-06-29 12:02:22', NULL, NULL),
(6, NULL, NULL, NULL, NULL, 'mobile', 'call me now', NULL, '4564567', NULL, NULL, NULL, NULL, NULL, 'en', NULL, '1', '2024-06-29 07:02:23', '2024-06-29 12:02:23', NULL, NULL),
(7, NULL, NULL, NULL, NULL, 'mobile', 'call me now', NULL, '4564567', NULL, NULL, NULL, NULL, NULL, 'en', NULL, '1', '2024-06-29 12:47:32', '2024-06-29 17:47:32', NULL, NULL),
(8, NULL, NULL, NULL, '39', 'mobile', 'call me now', NULL, '4564567', NULL, NULL, NULL, NULL, NULL, 'en', NULL, '1', '2024-06-29 12:49:12', '2024-06-29 17:49:12', NULL, NULL),
(10, NULL, NULL, NULL, NULL, 'mobile', 'call me now12', NULL, '456456712', NULL, NULL, NULL, NULL, NULL, 'en', NULL, '1', '2024-06-29 13:05:27', '2024-06-29 18:05:46', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `widget_countdown`
--

DROP TABLE IF EXISTS `widget_countdown`;
CREATE TABLE `widget_countdown` (
  `id` bigint UNSIGNED NOT NULL,
  `client_id` varchar(10) DEFAULT NULL,
  `user_id` varchar(10) DEFAULT NULL,
  `web_user_id` varchar(10) DEFAULT NULL,
  `card_id` varchar(10) DEFAULT NULL,
  `countdown_title` varchar(200) DEFAULT NULL,
  `countdown_date` varchar(200) DEFAULT NULL,
  `countdown_time` varchar(200) DEFAULT NULL,
  `js_date_format` varchar(200) DEFAULT NULL,
  `base_lang` varchar(5) NOT NULL DEFAULT 'en',
  `ticket_type_id` varchar(5) DEFAULT NULL,
  `active` varchar(5) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `deleted_for` varchar(10) DEFAULT NULL
)   ;

--
-- Dumping data for table `widget_countdown`
--

INSERT INTO `widget_countdown` (`id`, `client_id`, `user_id`, `web_user_id`, `card_id`, `countdown_title`, `countdown_date`, `countdown_time`, `js_date_format`, `base_lang`, `ticket_type_id`, `active`, `created_at`, `updated_at`, `deleted_at`, `deleted_for`) VALUES
(1, NULL, NULL, NULL, NULL, 'sfdg', '2024-06-15', '08:00', 'Jun 15, 2024 08:00:00', 'en', NULL, '1', '2024-06-29 06:59:38', '2024-06-29 11:59:38', NULL, NULL),
(2, NULL, NULL, NULL, NULL, 'sfdg', '2024-07-15', '08:00', 'Jul 15, 2024 08:00:00', 'en', NULL, '1', '2024-06-29 08:00:05', '2024-06-29 13:00:05', NULL, NULL),
(4, NULL, NULL, NULL, NULL, 'it is close in', '2024-07-21', '10:00', 'Jul 21, 2024 10:00:00', 'en', NULL, '1', '2024-06-29 11:15:21', '2024-06-29 16:15:37', NULL, NULL),
(5, NULL, NULL, NULL, NULL, 'it is close in', '2024-09-17', '10:00', 'Sep 17, 2024 10:00:00', 'en', NULL, '1', '2024-06-29 11:31:51', '2024-06-29 16:32:02', NULL, NULL),
(6, NULL, NULL, NULL, NULL, 'it is close in', '2024-09-17', '10:00', 'Sep 17, 2024 10:00:00', 'en', NULL, '1', '2024-06-29 11:32:25', '2024-06-29 16:32:25', NULL, NULL),
(7, NULL, NULL, NULL, NULL, 'it is close in', '2024-09-17', '10:00', 'Sep 17, 2024 10:00:00', 'en', NULL, '1', '2024-06-29 11:43:20', '2024-06-29 16:43:20', NULL, NULL),
(8, NULL, NULL, NULL, NULL, 'it is close in', '2024-09-16', '10:00', 'Sep 16, 2024 10:00:00', 'en', NULL, '1', '2024-06-29 11:43:55', '2024-06-29 16:44:05', NULL, NULL),
(10, NULL, NULL, NULL, NULL, 'it is close in', '2024-09-16', '09:00', 'Sep 16, 2024 09:00:00', 'en', NULL, '1', '2024-06-29 11:55:16', '2024-06-29 16:55:16', NULL, NULL),
(11, NULL, NULL, NULL, NULL, 'sfdg', '2024-09-18', '09:00', 'Sep 18, 2024 09:00:00', 'en', NULL, '1', '2024-06-29 12:04:52', '2024-06-29 17:04:52', NULL, NULL),
(12, NULL, NULL, NULL, '39', 'it is close in', '2024-08-20', '10:00', 'Aug 20, 2024 10:00:00', 'en', NULL, '1', '2024-06-29 12:07:12', '2024-06-29 17:07:25', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `widget_image`
--

DROP TABLE IF EXISTS `widget_image`;
CREATE TABLE `widget_image` (
  `id` bigint UNSIGNED NOT NULL,
  `client_id` varchar(10) DEFAULT NULL,
  `user_id` varchar(10) DEFAULT NULL,
  `web_user_id` varchar(10) DEFAULT NULL,
  `card_id` varchar(10) DEFAULT NULL,
  `image_url` varchar(200) DEFAULT NULL,
  `base_lang` varchar(5) NOT NULL DEFAULT 'en',
  `ticket_type_id` varchar(5) DEFAULT NULL,
  `active` varchar(5) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `deleted_for` varchar(10) DEFAULT NULL
)   ;

--
-- Dumping data for table `widget_image`
--

INSERT INTO `widget_image` (`id`, `client_id`, `user_id`, `web_user_id`, `card_id`, `image_url`, `base_lang`, `ticket_type_id`, `active`, `created_at`, `updated_at`, `deleted_at`, `deleted_for`) VALUES
(1, NULL, NULL, NULL, '39', 'public/VUJkrMbaxdl7gacvqEG0ltYu5Mn4oOolwd1kKTJ8.jpg', 'en', NULL, '1', '2024-06-29 14:00:56', '2024-06-29 19:00:56', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `widget_link`
--

DROP TABLE IF EXISTS `widget_link`;
CREATE TABLE `widget_link` (
  `id` bigint UNSIGNED NOT NULL,
  `client_id` varchar(10) DEFAULT NULL,
  `user_id` varchar(10) DEFAULT NULL,
  `web_user_id` varchar(10) DEFAULT NULL,
  `card_id` varchar(10) DEFAULT NULL,
  `link_text` varchar(200) DEFAULT NULL,
  `link_url` varchar(200) DEFAULT NULL,
  `base_lang` varchar(5) NOT NULL DEFAULT 'en',
  `ticket_type_id` varchar(5) DEFAULT NULL,
  `active` varchar(5) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `deleted_for` varchar(10) DEFAULT NULL
)   ;

--
-- Dumping data for table `widget_link`
--

INSERT INTO `widget_link` (`id`, `client_id`, `user_id`, `web_user_id`, `card_id`, `link_text`, `link_url`, `base_lang`, `ticket_type_id`, `active`, `created_at`, `updated_at`, `deleted_at`, `deleted_for`) VALUES
(8, NULL, NULL, NULL, NULL, 'Our Instagram page', 'https://jsbin.com/', 'en', NULL, '1', '2024-06-27 07:52:56', '2024-06-27 12:52:56', NULL, NULL),
(9, NULL, NULL, NULL, NULL, 'Our Instagram page12', 'https://jsbin12.com/', 'en', NULL, '1', '2024-06-27 07:53:20', '2024-06-27 12:53:20', NULL, NULL),
(10, NULL, NULL, NULL, NULL, 'sign in to site2', 'https://jsbin2.com/', 'en', NULL, '1', '2024-06-27 07:59:01', '2024-06-27 12:59:01', NULL, NULL),
(11, NULL, NULL, NULL, NULL, 'enter channel', 'https://jsbin12.com/', 'en', NULL, '1', '2024-06-27 08:03:28', '2024-06-27 13:03:28', NULL, NULL),
(12, NULL, NULL, NULL, NULL, 'enter channel 12', 'https://hcanel12.com/', 'en', NULL, '1', '2024-06-27 08:03:49', '2024-06-27 13:03:49', NULL, NULL),
(13, NULL, NULL, NULL, NULL, 'sign in to site', 'https://jsbin.com/', 'en', NULL, '1', '2024-06-27 08:18:56', '2024-06-27 13:18:56', NULL, NULL),
(14, NULL, NULL, NULL, NULL, 'sign in to site', 'https://jsbin.com/', 'en', NULL, '1', '2024-06-27 08:25:56', '2024-06-27 13:25:56', NULL, NULL),
(15, NULL, NULL, NULL, NULL, 'sign in to site123', 'https://jsbin.com/', 'en', NULL, '1', '2024-06-27 08:30:46', '2024-06-27 13:34:16', NULL, NULL),
(16, NULL, NULL, NULL, NULL, 'enter channel', 'https://jsbin12.com/', 'en', NULL, '1', '2024-06-27 08:42:06', '2024-06-27 13:42:06', NULL, NULL),
(22, NULL, NULL, NULL, NULL, 'sign in to site', 'https://jsbin.com/', 'en', NULL, '1', '2024-06-27 11:49:05', '2024-06-27 16:49:05', NULL, NULL),
(23, NULL, NULL, NULL, NULL, NULL, NULL, 'en', NULL, '1', '2024-06-27 11:52:48', '2024-06-27 16:52:48', NULL, NULL),
(24, NULL, NULL, NULL, NULL, 'Our Instagram page', 'https://jsbin12.com/', 'en', NULL, '1', '2024-06-27 11:53:51', '2024-06-27 16:53:51', NULL, NULL),
(25, NULL, NULL, NULL, NULL, 'Our Instagram page', 'https://jsbin12.com/', 'en', NULL, '1', '2024-06-27 12:00:06', '2024-06-27 17:00:06', NULL, NULL),
(27, NULL, NULL, NULL, '39', 'sign in to site3', 'https://jsbin.com/', 'en', NULL, '1', '2024-06-29 10:21:18', '2024-06-29 15:21:51', NULL, NULL),
(28, NULL, NULL, NULL, '8', 'sign in to site', 'https://jsbin.com/', 'en', NULL, '1', '2024-07-02 23:43:06', '2024-07-03 04:43:06', NULL, NULL),
(29, NULL, NULL, NULL, '8', NULL, NULL, 'en', NULL, '1', '2024-07-02 23:43:12', '2024-07-03 04:43:12', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `widget_memorial`
--

DROP TABLE IF EXISTS `widget_memorial`;
CREATE TABLE `widget_memorial` (
  `id` bigint UNSIGNED NOT NULL,
  `client_id` varchar(10) DEFAULT NULL,
  `user_id` varchar(10) DEFAULT NULL,
  `web_user_id` varchar(10) DEFAULT NULL,
  `card_id` varchar(10) DEFAULT NULL,
  `memorial_title` varchar(200) DEFAULT NULL,
  `memorial_text` varchar(200) DEFAULT NULL,
  `memorial_presence_yesno` varchar(200) DEFAULT NULL,
  `display_oncard` varchar(200) DEFAULT NULL,
  `memorial_answer_mandatory` varchar(200) DEFAULT NULL,
  `memorial_presence_status` varchar(200) DEFAULT NULL,
  `base_lang` varchar(5) NOT NULL DEFAULT 'en',
  `ticket_type_id` varchar(5) DEFAULT NULL,
  `active` varchar(5) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `deleted_for` varchar(10) DEFAULT NULL
)   ;

--
-- Dumping data for table `widget_memorial`
--

INSERT INTO `widget_memorial` (`id`, `client_id`, `user_id`, `web_user_id`, `card_id`, `memorial_title`, `memorial_text`, `memorial_presence_yesno`, `display_oncard`, `memorial_answer_mandatory`, `memorial_presence_status`, `base_lang`, `ticket_type_id`, `active`, `created_at`, `updated_at`, `deleted_at`, `deleted_for`) VALUES
(1, NULL, NULL, NULL, NULL, 'Write a message as a memorial', 'Memorials of dear relatives and acquaintances12', 'Yes', 'Y', 'Y', NULL, 'en', NULL, '1', '2024-06-29 07:01:41', '2024-06-29 12:01:41', NULL, NULL),
(2, NULL, NULL, NULL, NULL, 'Write a message as a memorial 12', 'Memorials of dear relatives and acquaintances', 'Yes', NULL, 'Y', NULL, 'en', NULL, '1', '2024-06-29 12:07:55', '2024-06-29 17:07:55', NULL, NULL),
(3, NULL, NULL, NULL, NULL, 'Write a message as a memorial 12', 'Memorials of dear relatives and acquaintances', 'Yes', NULL, 'Y', NULL, 'en', NULL, '1', '2024-06-29 12:23:28', '2024-06-29 17:23:28', NULL, NULL),
(4, NULL, NULL, NULL, NULL, 'Write a message as a memorial', 'Memorials of dear relatives and acquaintances', 'Yes', NULL, NULL, NULL, 'en', NULL, '1', '2024-06-29 12:28:51', '2024-06-29 17:28:51', NULL, NULL),
(5, NULL, NULL, NULL, NULL, 'Write a message as a memorial', 'Memorials of dear relatives and acquaintances', 'Yes', NULL, NULL, NULL, 'en', NULL, '1', '2024-06-29 12:31:43', '2024-06-29 17:31:43', NULL, NULL),
(6, NULL, NULL, NULL, NULL, 'Write a message as a memorial', 'Memorials of dear relatives and acquaintances', 'Yes', NULL, NULL, NULL, 'en', NULL, '1', '2024-06-29 12:38:26', '2024-06-29 17:38:26', NULL, NULL),
(7, NULL, NULL, NULL, '39', 'Write a message as a memorial', 'Memorials of dear relatives and acquaintances', 'Yes', NULL, NULL, NULL, 'en', NULL, '1', '2024-06-29 12:46:14', '2024-06-29 17:46:14', NULL, NULL),
(9, NULL, NULL, NULL, '52', 'Write a message as a memorial', 'Memorials of dear relatives and acquaintances', 'Yes', 'Y', 'Y', NULL, 'en', NULL, '1', '2024-07-23 13:29:37', '2024-07-23 18:29:37', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `widget_optional_question`
--

DROP TABLE IF EXISTS `widget_optional_question`;
CREATE TABLE `widget_optional_question` (
  `id` bigint UNSIGNED NOT NULL,
  `client_id` varchar(10) DEFAULT NULL,
  `user_id` varchar(10) DEFAULT NULL,
  `web_user_id` varchar(10) DEFAULT NULL,
  `card_id` varchar(10) DEFAULT NULL,
  `optnl_quest_title` varchar(200) DEFAULT NULL,
  `optnl_quest_type` varchar(200) DEFAULT NULL,
  `optnl_quest_options` varchar(200) DEFAULT NULL,
  `optnl_quest_mandatory` varchar(200) DEFAULT NULL,
  `optnl_quest_foryesno` varchar(200) DEFAULT NULL,
  `base_lang` varchar(5) NOT NULL DEFAULT 'en',
  `ticket_type_id` varchar(5) DEFAULT NULL,
  `active` varchar(5) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `deleted_for` varchar(10) DEFAULT NULL
)   ;

--
-- Dumping data for table `widget_optional_question`
--

INSERT INTO `widget_optional_question` (`id`, `client_id`, `user_id`, `web_user_id`, `card_id`, `optnl_quest_title`, `optnl_quest_type`, `optnl_quest_options`, `optnl_quest_mandatory`, `optnl_quest_foryesno`, `base_lang`, `ticket_type_id`, `active`, `created_at`, `updated_at`, `deleted_at`, `deleted_for`) VALUES
(1, NULL, NULL, NULL, NULL, 'sdfsdfsd', 'checkbox', 'Option A1,Option B1', 'yes', 'yes', 'en', NULL, '1', '2024-06-29 11:45:50', '2024-06-29 16:45:50', NULL, NULL),
(2, NULL, NULL, NULL, '39', 'optionl quest check', 'checkbox', 'Option A1,Option B1', 'yes', 'yes', 'en', NULL, '1', '2024-06-29 11:47:58', '2024-06-29 16:47:58', NULL, NULL),
(3, NULL, NULL, NULL, NULL, 'sdfasdfadf', 'radio', 'Option A,Option B', NULL, 'yes', 'en', NULL, '1', '2024-06-29 14:42:35', '2024-06-29 19:42:35', NULL, NULL),
(4, NULL, NULL, NULL, NULL, 'sdfasdfadf', 'radio', 'Option A,Option B', NULL, 'yes', 'en', NULL, '1', '2024-06-29 14:42:38', '2024-06-29 19:42:38', NULL, NULL),
(5, NULL, NULL, NULL, '39', 'optionl qst radio', 'radio', 'Option A,Option B', NULL, 'yes', 'en', NULL, '1', '2024-06-29 15:36:13', '2024-06-29 20:36:13', NULL, NULL),
(6, NULL, NULL, NULL, NULL, 'sdfasdfadf', 'radio', 'Option A,Option B', NULL, 'yes', 'en', NULL, '1', '2024-06-29 15:36:55', '2024-06-29 20:36:55', NULL, NULL),
(7, NULL, NULL, NULL, NULL, 'sdfsdfsd1', 'radio', 'Option A1,Option B1', NULL, 'yes', 'en', NULL, '1', '2024-06-29 15:39:42', '2024-06-29 20:39:59', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `widget_separator`
--

DROP TABLE IF EXISTS `widget_separator`;
CREATE TABLE `widget_separator` (
  `id` bigint UNSIGNED NOT NULL,
  `client_id` varchar(10) DEFAULT NULL,
  `user_id` varchar(10) DEFAULT NULL,
  `web_user_id` varchar(10) DEFAULT NULL,
  `card_id` varchar(10) DEFAULT NULL,
  `separator` blob,
  `base_lang` varchar(5) NOT NULL DEFAULT 'en',
  `ticket_type_id` varchar(5) DEFAULT NULL,
  `active` varchar(5) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `deleted_for` varchar(10) DEFAULT NULL
)   ;

--
-- Dumping data for table `widget_separator`
--

INSERT INTO `widget_separator` (`id`, `client_id`, `user_id`, `web_user_id`, `card_id`, `separator`, `base_lang`, `ticket_type_id`, `active`, `created_at`, `updated_at`, `deleted_at`, `deleted_for`) VALUES
(1, NULL, NULL, NULL, '39', 0x3c73766720786d6c6e733d22687474703a2f2f7777772e77332e6f72672f323030302f7376672220786d6c6e733a786c696e6b3d22687474703a2f2f7777772e77332e6f72672f313939392f786c696e6b222076657273696f6e3d22312e31222066696c6c3d2263757272656e74436f6c6f72222077696474683d2231313022206865696768743d2231332e35222076696577426f783d22302030203131302031332e352220636c6173733d226469766964657220702d3130207072696d6172792d686f76657222207374796c653d2277696474683a313030253b6865696768743a6175746f3b223e0a2020202020202020202020202020202020202020202020203c7061746820643d224d3130362e333820332e3531632d332e32392d322e33342d392e39312d312e39392d31392e363520312e30342d31352e333920342e37392d32342e393620372e35382d33312e303920362e3320312e35312d2e353420322e37372d312e333520332e38332d322e343820312e372d312e373920322e32362d332e373820312e35352d352e34352d2e35342d312e32372d312e37392d322e31342d332e31312d322e31352d312e32382d2e30312d322e33392e37352d332e313120322e30392d2e37322d312e33342d312e38342d322e312d332e31312d322e30392d312e33322e30312d322e35372e38382d332e313120322e31352d2e373120312e36372d2e313520332e363620312e353520352e343520312e303620312e313220322e333320312e393420332e383320322e34382d362e313320312e32382d31352e36392d312e35312d33312e30382d362e334331332e313220312e353220362e3520312e313720332e323120332e353120312e3720342e35382e3920362e32332e383220382e333961342e31393620342e31393620302030203020342e303420342e3333682e303963312e3435203020322e36352d312e313520322e36392d322e36312e30332d2e39372d2e37332d312e382d312e37312d312e38332d2e33322d2e30312d2e36322e312d2e38352e33322d2e32322e32332d2e33362e35322d2e33372e38342d2e30312e32322e30372e34332e32322e362e31352e31362e33362e32362e35382e32362e33332e30312e36322d2e32352e36332d2e353920302d2e31332d2e312d2e32352d2e32332d2e3235732d2e32352e312d2e32352e32336330202e30372d2e30362e31322d2e31332e3132612e33322e33322030203020312d2e32342d2e31312e3330322e3330322030203020312d2e30392d2e323463302d2e31392e30382d2e33372e32322d2e35732e33322d2e322e35312d2e3139632e37312e303320312e32362e363220312e323420312e333361322e323220322e32322030203020312d322e323920322e313441332e37313520332e37313520302030203120312e3320382e3431632e30372d322e30312e382d332e353220322e31382d342e3520332e31362d322e323520392e36332d312e38372031392e323320312e31312031302e353320332e32382031372e383720352e34392032332e363920362e323920332e34322e343720362e31352e3420382e33382d2e3220322e32342e363120342e39372e363820382e33382e324336392031302e352037362e333420382e332038362e383720352e303263392e362d322e39392031362e30372d332e33362031392e32332d312e313120312e33382e393820322e313120322e3520322e313820342e3561332e37313520332e3731352030203020312d332e353820332e3833632d312e32312e30342d322e32352d2e39322d322e32392d322e31342d2e30322d2e37312e35332d312e3320312e32342d312e33332e31392d2e30312e33372e30362e35312e3139732e32322e332e32322e34396330202e30392d2e30332e31382d2e30392e3235612e33322e33322030203020312d2e32342e3131632d2e303720302d2e31332d2e30352d2e31332d2e313220302d2e31332d2e31322d2e32342d2e32352d2e32332d2e313320302d2e32342e31322d2e32332e32352e30312e33342e332e362e36332e35392e32322d2e30312e34332d2e312e35382d2e32362e31352d2e31362e32332d2e33372e32322d2e362d2e30312d2e33322d2e31342d2e36312d2e33382d2e38332d2e32332d2e32322d2e35342d2e33332d2e38352d2e33322d2e39372e30332d312e37342e38352d312e373120312e383361322e37303120322e37303120302030203020322e363920322e3631682e303961342e313920342e313920302030203020342e30342d342e3333632d2e30362d322e31372d2e38362d332e38322d322e33372d342e38397a4d35302e343720382e3035632d312e35362d312e36352d322e30392d332e34342d312e34362d342e39332e34372d312e3120312e35342d312e383520322e36372d312e383620312e31392d2e303120322e32332e373820322e383620322e31372e30342e312e31352e31342e32352e31322e312e30312e32312d2e30322e32352d2e31322e36322d312e333920312e36372d322e313820322e38362d322e313720312e31332e303120322e32312e373620322e363720312e38362e363320312e34392e3120332e32382d312e343620342e39332d312e3220312e32362d322e363220322e31312d342e333320322e362d312e372d2e34392d332e31322d312e33342d342e33312d322e367a223e0a2020202020202020202020202020202020202020202020203c2f706174683e0a20202020202020202020202020202020202020203c2f7376673e, 'en', NULL, '1', '2024-06-29 10:40:10', '2024-06-29 18:19:19', NULL, NULL),
(2, NULL, NULL, NULL, '39', 0x3c73766720786d6c6e733d22687474703a2f2f7777772e77332e6f72672f323030302f7376672220786d6c6e733a786c696e6b3d22687474703a2f2f7777772e77332e6f72672f313939392f786c696e6b222076657273696f6e3d22312e31222066696c6c3d2263757272656e74436f6c6f72222077696474683d2231313022206865696768743d223130222076696577426f783d22302030203131302031302220636c6173733d226469766964657220702d3130207072696d6172792d686f76657222207374796c653d2277696474683a313030253b6865696768743a6175746f3b223e0a2020202020202020202020202020202020202020202020203c7061746820643d224d3130352e383120342e3233632e36322d312e30352d2e32342d312e372d2e32342d312e372e303820312e32322d2e373920322e31322d312e323820322e3533483130302e3731612e3937352e3937352030203020302d2e39342d2e3734632d2e343620302d2e38332e33322d2e39342e37344836312e3339632e30382d2e34372e30382d2e39352e30312d312e34312d2e33322d322e30392d312e39362d332e34372d332e38312d332e32312d312e31382e31362d322e303920312e30342d322e333220322e32342d2e31382e39322e313320312e382e373820322e33322e30382e32312e32382e33352e35322e3335612e35362e353620302031203020302d312e3132632d2e313720302d2e33312e30372d2e34312e31392d2e34332d2e34372d2e35312d312e31332d2e342d312e36362e31342d2e37352e37332d312e363820312e392d312e383420312e382d2e323520332e303220312e323620332e323620322e382e30372e34392e303620312e30312d2e303620312e35332d2e30312e30322d2e30322e30342d2e30322e30362030202e30312e30312e30312e30312e30322d2e3420312e35392d312e383320332e31362d342e393720332e372d322e30352e33352d342e35322d2e33362d362d312e37322d2e37332d2e36372d312e35362d312e382d312e34332d332e34322e30352d2e35392e33322d312e31332e37372d312e35312e34352d2e333820312e30312d2e353720312e35392d2e35322e38322e303720312e34332e383120312e333620312e36342d2e30352e35362d2e35342e39382d312e30382e3933612e3736362e3736362030203020312d2e34372d2e32632e31372d2e312e32392d2e32372e32392d2e3438612e35362e35362030203120302d312e313220306330202e31372e30382e33312e31392e34312e31362e34312e35372e373220312e30372e37362e38322e303720312e35352d2e353520312e36322d312e33382e30392d312e31312d2e37322d322e30382d312e38312d322e313861322e363220322e36322030203020302d312e39352e363320322e363320322e36332030203020302d2e393720312e3835632d2e30342e34332030202e38352e303820312e32352d382e323520302d32312e313320302d33372e33322d2e3033612e3937332e3937332030203020302d2e39342d2e3735632d2e343620302d2e38332e33322d2e39342e373548352e3236632d2e35352d2e34352d312e35372d312e34362d312e332d322e3533203020302d2e39332e38332d2e323420312e3743342e3333203520332e323520332e3338203220352e3363312e323420312e393220322e32322e323320312e373220312e30372d2e363220312e30352e323420312e372e323420312e372d2e30382d312e32322e37392d322e313220312e32382d322e353248382e3831632e31322e34332e34392e37342e39342e37342e34362030202e38322d2e33322e39342d2e37342031362e32382e30322032392e322e30332033372e34352e30332e32352e37362e373120312e343620312e333820322e303820312e333320312e323220332e333220312e393420352e323320312e39342e342030202e382d2e303320312e31392d2e3120332e31352d2e353420342e38322d322e313720352e33332d332e39356833372e3537632e31312e34322e34382e37342e39342e37342e34362030202e38332d2e33322e39342d2e373468332e3537632e35342e343520312e353520312e343620312e323920322e353220302030202e39332d2e38342e32342d312e372d2e36312d2e37362e34382e383520312e37322d312e30372d312e32352d312e39322d322e32332d2e32332d312e37332d312e30377a223e0a2020202020202020202020202020202020202020202020203c2f706174683e0a20202020202020202020202020202020202020203c2f7376673e, 'en', NULL, '1', '2024-06-29 13:19:29', '2024-06-29 18:19:29', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `widget_social_network`
--

DROP TABLE IF EXISTS `widget_social_network`;
CREATE TABLE `widget_social_network` (
  `id` bigint UNSIGNED NOT NULL,
  `client_id` varchar(10) DEFAULT NULL,
  `user_id` varchar(10) DEFAULT NULL,
  `web_user_id` varchar(10) DEFAULT NULL,
  `card_id` varchar(10) DEFAULT NULL,
  `sn_title` varchar(200) DEFAULT NULL,
  `sn_facebook` varchar(200) DEFAULT NULL,
  `sn_twitter` varchar(200) DEFAULT NULL,
  `sn_instagram` varchar(200) DEFAULT NULL,
  `sn_telegram` varchar(200) DEFAULT NULL,
  `sn_whatsapp` varchar(200) DEFAULT NULL,
  `sn_pinterest` varchar(200) DEFAULT NULL,
  `base_lang` varchar(5) NOT NULL DEFAULT 'en',
  `ticket_type_id` varchar(5) DEFAULT NULL,
  `active` varchar(5) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `deleted_for` varchar(10) DEFAULT NULL
)   ;

--
-- Dumping data for table `widget_social_network`
--

INSERT INTO `widget_social_network` (`id`, `client_id`, `user_id`, `web_user_id`, `card_id`, `sn_title`, `sn_facebook`, `sn_twitter`, `sn_instagram`, `sn_telegram`, `sn_whatsapp`, `sn_pinterest`, `base_lang`, `ticket_type_id`, `active`, `created_at`, `updated_at`, `deleted_at`, `deleted_for`) VALUES
(1, NULL, NULL, NULL, '39', 'test title', NULL, NULL, 'sfdg', 'ert', 'dfg', NULL, 'en', NULL, '1', '2024-06-29 06:58:57', '2024-06-29 11:58:57', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `widget_text_question`
--

DROP TABLE IF EXISTS `widget_text_question`;
CREATE TABLE `widget_text_question` (
  `id` bigint UNSIGNED NOT NULL,
  `client_id` varchar(10) DEFAULT NULL,
  `user_id` varchar(10) DEFAULT NULL,
  `web_user_id` varchar(10) DEFAULT NULL,
  `card_id` varchar(10) DEFAULT NULL,
  `text_question_title` varchar(200) DEFAULT NULL,
  `text_question_type` varchar(200) DEFAULT NULL,
  `text_question_mandatory` varchar(200) DEFAULT NULL,
  `text_question_foryesno` varchar(200) DEFAULT NULL,
  `base_lang` varchar(5) NOT NULL DEFAULT 'en',
  `ticket_type_id` varchar(5) DEFAULT NULL,
  `active` varchar(5) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `deleted_for` varchar(10) DEFAULT NULL
)   ;

--
-- Dumping data for table `widget_text_question`
--

INSERT INTO `widget_text_question` (`id`, `client_id`, `user_id`, `web_user_id`, `card_id`, `text_question_title`, `text_question_type`, `text_question_mandatory`, `text_question_foryesno`, `base_lang`, `ticket_type_id`, `active`, `created_at`, `updated_at`, `deleted_at`, `deleted_for`) VALUES
(1, NULL, NULL, NULL, NULL, 'your name', 'name', 'yes', 'no', 'en', NULL, '1', '2024-06-29 05:08:51', '2024-06-29 10:08:51', NULL, NULL),
(2, NULL, NULL, NULL, NULL, 'your name', 'name', 'yes', 'no', 'en', NULL, '1', '2024-06-29 05:08:54', '2024-06-29 10:08:54', NULL, NULL),
(3, NULL, NULL, NULL, NULL, 'your name', 'name', 'yes', 'no', 'en', NULL, '1', '2024-06-29 05:09:19', '2024-06-29 10:09:19', NULL, NULL),
(4, NULL, NULL, NULL, NULL, 'enter your pohne number', 'phone', 'yes', 'no', 'en', NULL, '1', '2024-06-29 05:23:57', '2024-06-29 10:23:57', NULL, NULL),
(5, NULL, NULL, NULL, NULL, 'enter your pohne number', 'phone', 'yes', 'yes', 'en', NULL, '1', '2024-06-29 05:27:36', '2024-06-29 10:27:36', NULL, NULL),
(7, NULL, NULL, NULL, NULL, 'enter your name', 'name', 'yes', 'no', 'en', NULL, '1', '2024-06-29 05:39:06', '2024-06-29 10:39:06', NULL, NULL),
(9, NULL, NULL, NULL, '39', 'enter your name123', 'name', 'yes', 'yes', 'en', NULL, '1', '2024-06-29 05:39:35', '2024-06-29 10:39:35', NULL, NULL),
(10, NULL, NULL, NULL, '39', 'enter your number', 'phone', 'yes', 'no', 'en', NULL, '1', '2024-06-29 05:48:16', '2024-06-29 10:48:16', NULL, NULL),
(11, NULL, NULL, NULL, NULL, 'enter your pohne number', 'phone', 'yes', 'yes', 'en', NULL, '1', '2024-06-29 06:10:16', '2024-06-29 11:10:16', NULL, NULL),
(12, NULL, NULL, NULL, NULL, 'enter your pohne number', 'phone', 'yes', 'yes', 'en', NULL, '1', '2024-06-29 06:10:19', '2024-06-29 11:10:19', NULL, NULL),
(18, NULL, NULL, NULL, NULL, 'enter your pohne number12', 'number', 'yes', 'yes', 'en', NULL, '1', '2024-06-29 09:19:16', '2024-06-29 14:19:16', NULL, NULL),
(19, NULL, NULL, NULL, NULL, 'enter your pohne number1', 'number', 'yes', 'yes', 'en', NULL, '1', '2024-06-29 09:19:32', '2024-06-29 14:19:32', NULL, NULL),
(20, NULL, NULL, NULL, NULL, 'enter your pohne number 20', 'number', 'yes', 'no', 'en', NULL, '1', '2024-06-29 11:01:00', '2024-06-29 16:01:21', NULL, NULL),
(22, NULL, NULL, NULL, NULL, 'enter your pohne number 21', 'phone', 'yes', 'no', 'en', NULL, '1', '2024-06-29 11:11:15', '2024-06-29 16:11:15', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `widget_user_text`
--

DROP TABLE IF EXISTS `widget_user_text`;
CREATE TABLE `widget_user_text` (
  `id` bigint UNSIGNED NOT NULL,
  `client_id` varchar(10) DEFAULT NULL,
  `user_id` varchar(10) DEFAULT NULL,
  `web_user_id` varchar(10) DEFAULT NULL,
  `card_id` varchar(10) DEFAULT NULL,
  `user_text` varchar(200) DEFAULT NULL,
  `user_text_alignment` varchar(200) DEFAULT NULL,
  `user_text_font_size` varchar(200) DEFAULT NULL,
  `base_lang` varchar(5) NOT NULL DEFAULT 'en',
  `ticket_type_id` varchar(5) DEFAULT NULL,
  `active` varchar(5) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `deleted_for` varchar(10) DEFAULT NULL
)   ;

--
-- Dumping data for table `widget_user_text`
--

INSERT INTO `widget_user_text` (`id`, `client_id`, `user_id`, `web_user_id`, `card_id`, `user_text`, `user_text_alignment`, `user_text_font_size`, `base_lang`, `ticket_type_id`, `active`, `created_at`, `updated_at`, `deleted_at`, `deleted_for`) VALUES
(1, NULL, NULL, NULL, NULL, 'ertert', 'center', '13', 'en', NULL, '1', '2024-06-29 07:02:39', '2024-06-29 12:02:39', NULL, NULL),
(2, NULL, NULL, NULL, '39', 'sdfg sdfg', 'left', '13', 'en', NULL, '1', '2024-06-29 13:06:01', '2024-06-29 18:06:01', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `widget_video`
--

DROP TABLE IF EXISTS `widget_video`;
CREATE TABLE `widget_video` (
  `id` bigint UNSIGNED NOT NULL,
  `client_id` varchar(10) DEFAULT NULL,
  `user_id` varchar(10) DEFAULT NULL,
  `web_user_id` varchar(10) DEFAULT NULL,
  `card_id` varchar(10) DEFAULT NULL,
  `video_link` varchar(200) DEFAULT NULL,
  `base_lang` varchar(5) NOT NULL DEFAULT 'en',
  `ticket_type_id` varchar(5) DEFAULT NULL,
  `active` varchar(5) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `deleted_for` varchar(10) DEFAULT NULL
)   ;

--
-- Dumping data for table `widget_video`
--

INSERT INTO `widget_video` (`id`, `client_id`, `user_id`, `web_user_id`, `card_id`, `video_link`, `base_lang`, `ticket_type_id`, `active`, `created_at`, `updated_at`, `deleted_at`, `deleted_for`) VALUES
(1, NULL, NULL, NULL, NULL, 'https://www.youtube.com/embed/0YgzXuHrwl4', 'en', NULL, '1', '2024-06-29 07:03:16', '2024-06-29 12:03:16', NULL, NULL),
(2, NULL, NULL, NULL, NULL, 'https://www.youtube.com/embed/0YgzXuHrwl4', 'en', NULL, '1', '2024-06-29 13:36:18', '2024-06-29 18:36:18', NULL, NULL),
(3, NULL, NULL, NULL, '39', 'https://www.youtube.com/embed/0YgzXuHrwl4', 'en', NULL, '1', '2024-06-29 13:50:08', '2024-06-29 18:50:08', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `active_status`
--
ALTER TABLE `active_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `answers_attend_quest`
--
ALTER TABLE `answers_attend_quest`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `answers_memorial`
--
ALTER TABLE `answers_memorial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `answers_optional_question`
--
ALTER TABLE `answers_optional_question`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `answers_text_question`
--
ALTER TABLE `answers_text_question`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `backgrounds`
--
ALTER TABLE `backgrounds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_categories`
--
ALTER TABLE `blog_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_posts`
--
ALTER TABLE `blog_posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cards`
--
ALTER TABLE `cards`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `card_categories`
--
ALTER TABLE `card_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `card_payments`
--
ALTER TABLE `card_payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `card_recipients`
--
ALTER TABLE `card_recipients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `card_reviews`
--
ALTER TABLE `card_reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `custom_user_images`
--
ALTER TABLE `custom_user_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `custom_user_voices`
--
ALTER TABLE `custom_user_voices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dznr_modules`
--
ALTER TABLE `dznr_modules`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dznr_module_fields`
--
ALTER TABLE `dznr_module_fields`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `effects`
--
ALTER TABLE `effects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `envelop_designs`
--
ALTER TABLE `envelop_designs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `envelop_design_parts`
--
ALTER TABLE `envelop_design_parts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `envelop_inside_images`
--
ALTER TABLE `envelop_inside_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `favourites`
--
ALTER TABLE `favourites`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `music_categories`
--
ALTER TABLE `music_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `music_files`
--
ALTER TABLE `music_files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post_reviews`
--
ALTER TABLE `post_reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seal_designs`
--
ALTER TABLE `seal_designs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sound_files`
--
ALTER TABLE `sound_files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stamp_designs`
--
ALTER TABLE `stamp_designs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stamp_images`
--
ALTER TABLE `stamp_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stickers`
--
ALTER TABLE `stickers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ticket_types`
--
ALTER TABLE `ticket_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `widgets_ticket_type`
--
ALTER TABLE `widgets_ticket_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `widget_attend_quest`
--
ALTER TABLE `widget_attend_quest`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `widget_contact_comm`
--
ALTER TABLE `widget_contact_comm`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `widget_countdown`
--
ALTER TABLE `widget_countdown`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `widget_image`
--
ALTER TABLE `widget_image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `widget_link`
--
ALTER TABLE `widget_link`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `widget_memorial`
--
ALTER TABLE `widget_memorial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `widget_optional_question`
--
ALTER TABLE `widget_optional_question`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `widget_separator`
--
ALTER TABLE `widget_separator`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `widget_social_network`
--
ALTER TABLE `widget_social_network`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `widget_text_question`
--
ALTER TABLE `widget_text_question`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `widget_user_text`
--
ALTER TABLE `widget_user_text`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `widget_video`
--
ALTER TABLE `widget_video`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `active_status`
--
ALTER TABLE `active_status`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `answers_attend_quest`
--
ALTER TABLE `answers_attend_quest`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `answers_memorial`
--
ALTER TABLE `answers_memorial`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `answers_optional_question`
--
ALTER TABLE `answers_optional_question`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `answers_text_question`
--
ALTER TABLE `answers_text_question`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `backgrounds`
--
ALTER TABLE `backgrounds`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blog_categories`
--
ALTER TABLE `blog_categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `blog_posts`
--
ALTER TABLE `blog_posts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cards`
--
ALTER TABLE `cards`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- AUTO_INCREMENT for table `card_categories`
--
ALTER TABLE `card_categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `card_payments`
--
ALTER TABLE `card_payments`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `card_recipients`
--
ALTER TABLE `card_recipients`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `card_reviews`
--
ALTER TABLE `card_reviews`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=247;

--
-- AUTO_INCREMENT for table `custom_user_images`
--
ALTER TABLE `custom_user_images`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `custom_user_voices`
--
ALTER TABLE `custom_user_voices`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dznr_modules`
--
ALTER TABLE `dznr_modules`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=203;

--
-- AUTO_INCREMENT for table `dznr_module_fields`
--
ALTER TABLE `dznr_module_fields`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=396;

--
-- AUTO_INCREMENT for table `effects`
--
ALTER TABLE `effects`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `envelop_designs`
--
ALTER TABLE `envelop_designs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `envelop_design_parts`
--
ALTER TABLE `envelop_design_parts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `envelop_inside_images`
--
ALTER TABLE `envelop_inside_images`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `favourites`
--
ALTER TABLE `favourites`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `music_categories`
--
ALTER TABLE `music_categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `music_files`
--
ALTER TABLE `music_files`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `post_reviews`
--
ALTER TABLE `post_reviews`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `seal_designs`
--
ALTER TABLE `seal_designs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sound_files`
--
ALTER TABLE `sound_files`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `stamp_designs`
--
ALTER TABLE `stamp_designs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `stamp_images`
--
ALTER TABLE `stamp_images`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `stickers`
--
ALTER TABLE `stickers`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ticket_types`
--
ALTER TABLE `ticket_types`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `widgets_ticket_type`
--
ALTER TABLE `widgets_ticket_type`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `widget_attend_quest`
--
ALTER TABLE `widget_attend_quest`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `widget_contact_comm`
--
ALTER TABLE `widget_contact_comm`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `widget_countdown`
--
ALTER TABLE `widget_countdown`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `widget_image`
--
ALTER TABLE `widget_image`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `widget_link`
--
ALTER TABLE `widget_link`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `widget_memorial`
--
ALTER TABLE `widget_memorial`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `widget_optional_question`
--
ALTER TABLE `widget_optional_question`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `widget_separator`
--
ALTER TABLE `widget_separator`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `widget_social_network`
--
ALTER TABLE `widget_social_network`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `widget_text_question`
--
ALTER TABLE `widget_text_question`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `widget_user_text`
--
ALTER TABLE `widget_user_text`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `widget_video`
--
ALTER TABLE `widget_video`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
