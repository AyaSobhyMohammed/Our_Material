-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2021 at 11:29 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `odb`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `level_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `content` text DEFAULT NULL,
  `image` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `level_id`, `name`, `content`, `image`, `created_at`) VALUES
(1, 2, 'Math 211', '                              <div class=\"col-md-6\">\r\n                          <li><a class=\"item\" href=\"https://drive.google.com/file/d/1hTEhkwN_SGhBFn6k1Lot4Wc4FKb3cA3O/view?usp=sharing\" target=\"_blank\">linear(Book 1)</a></li>\r\n                          <li><a class=\"item\" href=\"https://drive.google.com/file/d/1z6oCODFAnc_19lAHjZeKi4GLRIZQzx8e/view?usp=sharing\" target=\"_blank\">Book 1(solutions)</a></li>\r\n                          <li><a class=\"item\" href=\"https://drive.google.com/file/d/1gtJc915Dy-YsTpbIBrd4OzriAU2tyD-i/view?usp=sharing\" target=\"_blank\">Abstract(Book 2) </a></li>\r\n                          <li><a class=\"item\" href=\"https://drive.google.com/file/d/1L698ORW-vKzceytRF7kc1hH1miaD4MSu/view?usp=sharing\" target=\"_blank\">Book 2(solutions)</a></li>      \r\n                                  \r\n                                  \r\n                            </div>\r\n\r\n                       <div class=\"col-md-6\">\r\n                        <li><a class=\"item\" href=\" https://drive.google.com/drive/folders/1EqHxqIvXOogtgDlxJoVA_OxbezP3RtIK?usp=sharing\" target=\"_blank\">Lectures</a></li>\r\n                           <li><a class=\"item\" href=\" https://drive.google.com/drive/folders/1hwNrOjp8nUmqN-edpDebfEJlMNhw_SAd?usp=sharing\" target=\"_blank\">Sections</a></li> \r\n                            <li><a class=\"item\" href=\" https://drive.google.com/file/d/1Vnl7VboJBBkHD-kZ7pNJmDRn2gE2ErX6/view?usp=sharing\" target=\"_blank\">Exams</a></li> \r\n                      \r\n                  </div>', '0.png', '2020-12-26 19:28:46'),
(2, 2, 'Math 231', '                          <li><a class=\"item\" href=\"https://drive.google.com/file/d/1y1nkhnwh5-VH0ski-azUydpe8WLKXigN/view?usp=sharing\" target=\"_blank\">Book</a></li>\r\n                          <li><a class=\"item\" href=\"https://drive.google.com/file/d/1yOI4mwOEfJP3u5-wuUofnYy9PaE-eH3J/view?usp=sharing\" target=\"_blank\">Book (solutions)</a></li>\r\n                          <li><a class=\"item\" href=\"https://drive.google.com/drive/folders/103Kk0wEV35xEtWY8v8pt2tHRxZF8RRWp?usp=sharing\" target=\"_blank\">Lectures </a></li>', '1001.jpg', '2020-12-26 19:28:46'),
(3, 2, 'Math 271', '                          <li><a class=\"item\" href=\"https://drive.google.com/file/d/10IJR37aj3qm93YpGaIzZExAC5CMxlD9A/view?usp=sharing\" target=\"_blank\">Book</a></li>\r\n                          <li><a class=\"item\" href=\"https://drive.google.com/file/d/1BxMYswv_4Bgp5RyIITZwEIc-ttaK34md/view?usp=sharing\" target=\"_blank\">Solved questions</a></li>\r\n                          <li><a class=\"item\" href=\"https://drive.google.com/drive/folders/1ZyyYVF2cKJ6SfmvRCxhKHnsRNHnWEH3r?usp=sharing\">Lectures </a></li>', '60.png', '2020-12-26 19:30:18'),
(5, 2, 'CS 201', '<li><a class=\"item\" href=\"https://drive.google.com/file/d/1AOiC30COjHa55mN2rOFAASRUB7L2_zuH/view?usp=sharing\" target=\"_blank\"> Book</a></li>', '1005.jpg', '2020-12-27 01:00:06'),
(6, 2, 'S 201', '                          <li><a class=\"item\" href=\"https://drive.google.com/file/d/1zfbmRFyFvJ1HyCQz672xXyCriXVNNpxU/view?usp=sharing\" target=\"_blank\">Book</a></li>\r\n                          <li><a class=\"item\" href=\"https://drive.google.com/file/d/1I9pzk-7uWe4a8CH3cYWLqLzM9pYfuJ5E/view?usp=sharing\" target=\"_blank\">Book (solutions)</a></li>\r\n                          <li><a class=\"item\" href=\"https://drive.google.com/file/d/1PnGKc38rOlIjEtLZiBQNkuSU2Az9A3pc/view?usp=sharing\" target=\"_blank\">Sections </a></li>', '90.jpg', '2020-12-27 01:10:12'),
(7, 2, 'Math 212', '                          <li><a class=\"item\" href=\"https://drive.google.com/file/d/1hTEhkwN_SGhBFn6k1Lot4Wc4FKb3cA3O/view?usp=sharing\" target=\"_blank\">linear(Book 1)</a></li>\r\n                          <li><a class=\"item\" href=\"https://drive.google.com/file/d/1z6oCODFAnc_19lAHjZeKi4GLRIZQzx8e/view?usp=sharing\" target=\"_blank\">Book 1(solutions)</a></li>\r\n                          <li><a class=\"item\" href=\"https://drive.google.com/file/d/1gtJc915Dy-YsTpbIBrd4OzriAU2tyD-i/view?usp=sharing\" target=\"_blank\">Abstract(Book 2) </a></li>\r\n                          <li><a class=\"item\" href=\"https://drive.google.com/file/d/1L698ORW-vKzceytRF7kc1hH1miaD4MSu/view?usp=sharing\" target=\"_blank\">Book 2(solutions)</a></li>    ', '0.png', '2020-12-27 01:11:00'),
(8, 2, 'Math 213', '                          <li><a class=\"item\" href=\"https://drive.google.com/file/d/1sZq6xu0SrIi-6W1X7ioLTl1afaD3WZyu/view?usp=sharing\" target=\"_blank\">Book </a></li>\r\n                          <li><a class=\"item\" href=\"https://drive.google.com/file/d/1Mx5ieiPZbDTS8FY_vyrq139lsXioQMcZ/view?usp=sharing\" target=\"_blank\">Book (solutions)</a></li>\r\n                           <li><a class=\"item\" href=\"https://drive.google.com/drive/folders/17_Bvsg9wiqGldkHhZWpiknQABugOMkNs?usp=sharing\" target=\"_blank\">Lectures</a></li> <li style=\"color: white\"></li>  ', '66.png', '2020-12-27 01:15:01'),
(9, 2, 'Math 232', '                         <li><a class=\"item\" href=\"https://drive.google.com/file/d/1y1nkhnwh5-VH0ski-azUydpe8WLKXigN/view?usp=sharing\" target=\"_blank\">Book</a></li>\r\n                          <li><a class=\"item\" href=\"https://drive.google.com/file/d/1yOI4mwOEfJP3u5-wuUofnYy9PaE-eH3J/view?usp=sharing\" target=\"_blank\">Book (solutions)</a></li>\r\n                          <li><a class=\"item\" href=\"https://drive.google.com/drive/folders/1hxNX9VWMb3m5zk8a8y_yeslXSL7f7tkc?fbclid=IwAR1b70CbgDMR767Fp0GB63ufy9mXO79fUoTp2-Z8IgwgelTuApblbZunWrE\" target=\"_blank\">Lectures </a></li>\r\n                          <li><a class=\"item\" href=\"https://drive.google.com/drive/folders/1gDlTnnhhi52JFSpjhhyQ_5uo_DmFRU7p?fbclid=IwAR1b70CbgDMR767Fp0GB63ufy9mXO79fUoTp2-Z8IgwgelTuApblbZunWrE\" target=\"_blank\">Sections</a></li> \r\n<li><a class=\"item\" href=\" https://drive.google.com/drive/folders/1Bqwh3zYwS9K_8Er1SEEylSEsR5Nw4Q10?fbclid=IwAR3gF7y6W-njUX3X4FcWmxHNIlUrZn57YzQx5NkWaL4BBBTCHtZu_UNK50Q\" target=\"_blank\">Exams</a></li>', '222.jpg', '2020-12-27 01:15:59'),
(13, 2, 'Math 241', '                          <li><a class=\"item\" href=\"https://drive.google.com/file/d/16_b0OkOz2foceH6Uxv6gi2yKiz9qRGaF/view?usp=sharing\" target=\"_blank\">Book</a></li>\r\n                          <li><a class=\"item\" href=\"https://drive.google.com/drive/folders/1fN-glBEjaH8GmZuIIzJGG8ps0V0R5N0a?fbclid=IwAR1q4Dz6noAU20SL3NakU9OOKoRQCvNy_G_ercWczRkIUag3WaJlD92mIz4\" target=\"_blank\">Book (solutions)</a></li>\r\n                          <li><a class=\"item\" href=\"https://drive.google.com/drive/folders/1nYSceznTqq5gYHGKN0RhwVEm9N1u9kec?fbclid=IwAR3gF7y6W-njUX3X4FcWmxHNIlUrZn57YzQx5NkWaL4BBBTCHtZu_UNK50Q\" target=\"_blank\">Exams</a></li>\r\n                          <li style=\"color: white\"></li>  ', '23.jpg', '2020-12-27 01:51:01'),
(14, 2, 'Math 272', '                          <li><a class=\"item\" href=\"https://drive.google.com/file/d/1CnmdjgKyOwC2_vw8NH-Kyq1A8YoDQdoC/view?usp=sharing\" target=\"_blank\">Book</a></li>\r\n                          <li><a class=\"item\" href=\"https://drive.google.com/file/d/1se2AUsAlVP3uX4TAnpciEYB1a1pGb8ib/view?usp=sharing\" target=\"_blank\">Book (solutions)</a></li>\r\n                          <li><a class=\"item\" href=\"https://drive.google.com/file/d/12vqZqV2uV196wUZwut5FVjwORmGhMHjA/view?usp=sharing\" target=\"_blank\">Solved questions</a></li>\r\n                          <li><a class=\"item\" href=\"https://drive.google.com/drive/folders/1X1Ax_vaVcVE8coKAbKML-JjdTNQwgLew?fbclid=IwAR3gF7y6W-njUX3X4FcWmxHNIlUrZn57YzQx5NkWaL4BBBTCHtZu_UNK50Q\" target=\"_blank\">Exams</a></li>      \r\n                                  ', '60.png', '2020-12-27 01:51:32'),
(15, 2, 'CS 202', '                          <li><a class=\"item\" href=\"https://drive.google.com/file/d/1wge8HL44_lBkoeP0e-qulxmYyCl1BFIn/view?usp=sharing\" target=\"_blank\">Book 1</a></li>\r\n                          <li><a class=\"item\" href=\"https://drive.google.com/file/d/10x6IqVvfJSouaCehwhuqgzOVcuFm2wFR/view?usp=sharing\" target=\"_blank\">Book 2</a></li>\r\n                          <li><a class=\"item\" href=\"https://drive.google.com/drive/folders/1XMizZX2EAWHMvqOTGFDShcCold4_66xJ?fbclid=IwAR2MSjW393z-2Ge5KycJN13ZPx6-rG8Js11QHZ73tAjIEAJMLIlXnHzVwt8\" target=\"_blank\">Lectures </a></li>\r\n                          <li><a class=\"item\" href=\"https://drive.google.com/file/d/1X_zubWteHvXUvg93OiAnye-mIf6SfyRP/view?usp=sharing\" target=\"_blank\">Exams</a></li>  ', '4.png', '2020-12-27 01:52:19'),
(16, 3, 'CS 302', '                          <li><a class=\"item\" href=\"https://drive.google.com/file/d/1j6QdbLACOJwO_9Rr9VyTVUxifMrazZuO/view?usp=sharing\" target=\"_blank\">Book</a></li>\r\n                          <li><a class=\"item\" href=\"https://drive.google.com/file/d/1R0GEVLD8ukPruykO8TOLHqQDc2Kl7LwV/view?usp=sharing\" target=\"_blank\">Book(solutions)</a></li>\r\n                          <li><a class=\"item\" href=\"https://drive.google.com/file/d/1You_nqvpepRrGR4RdZcj9LtZVoG6X-9B/view?usp=sharing\" target=\"_blank\">Exams</a></li>', 'cs302.jpg', '2020-12-27 01:53:12'),
(17, 3, 'CS 304', '                          <li><a class=\"item\" href=\"https://drive.google.com/file/d/1W0A30gRuSMsBddhVB6FJyCQhgrxpo1sg/view?usp=sharing\" target=\"_blank\">Book</a></li>\r\n                          \r\n                          <li><a class=\"item\" href=\"https://drive.google.com/drive/folders/1bvxKg_BCL479XyiFF5BnTOZNEffZ3FHn?usp=sharing\" target=\"_blank\">Sheets </a></li>\r\n                          <li><a class=\"item\" href=\"https://drive.google.com/drive/folders/1GVgq9uBGvQ3SG1ol3j4FyV_evfukCBX1?usp=sharing\" target=\"_blank\">Exams</a></li>  ', 'cs304.jpg', '2020-12-27 01:53:42'),
(18, 3, 'CS 305', '                          <li><a class=\"item\" href=\"https://drive.google.com/file/d/18DQhL8cyDp9CKPVN5C0rKWbSPpMdudPQ/view?usp=sharing\" target=\"_blank\">Book</a></li>\r\n                         <li><a class=\"item\" href=\"https://drive.google.com/file/d/1jrDjL-3UVWj9VXK1AaWOqCfMqFV0DocP/view?usp=sharing\" target=\"_blank\">Exams</a></li>', 'cs305.jpg', '2020-12-27 01:54:12'),
(19, 3, 'CS 307', '                          <li><a class=\"item\" href=\"https://drive.google.com/file/d/1Lyyi2XzkRGW4vEpaMyFWzI9tOrfhToK6/view?usp=sharing\" target=\"_blank\">Book</a></li>\r\n                          <li><a class=\"item\" href=\"https://drive.google.com/drive/folders/1SniFutzCOtG4q22oQQPxUumgnbMEQzAU?usp=sharing\" target=\"_blank\">Lectures</a></li>\r\n                         <li><a class=\"item\" href=\"https://drive.google.com/file/d/1SPyAgTb_yjaZOPdoJ56s5D6StXN20TOQ/view?usp=sharing\" target=\"_blank\">Exam 2018</a></li>', 'cs303.jpg', '2020-12-27 02:00:20'),
(20, 3, 'CS 309', '                          <li><a class=\"item\" href=\"https://drive.google.com/file/d/1mH6UTl31eEBydyyb2rfCehrpRLne2bwN/view?usp=sharing\" target=\"_blank\">Book</a></li>\r\n                            <li><a class=\"item\" href=\"https://drive.google.com/drive/folders/1gW05CFyoMjyeQfXZDyQQ_Ta7ZVBdMqk7?usp=sharing\" target=\"_blank\">Lectures(1)</a></li> \r\n                             <li><a class=\"item\" href=\"https://drive.google.com/drive/folders/1uOTpac_IqT_UGB03akP35i0nyfT3eXoX?usp=sharing\" target=\"_blank\">Lectures(2)</a></li>  ', 'cs309.jpg', '2020-12-27 02:00:47'),
(21, 3, 'Math 351', '                          <li><a class=\"item\" href=\"https://drive.google.com/file/d/1_vQE4nTudJrr-mLQAQpJlXRRS6Mlz50J/view?usp=sharing\" target=\"_blank\">Book</a></li>\r\n', 'math351.jpg', '2020-12-27 02:01:20'),
(22, 3, 'Math 305', '                          <li><a class=\"item\" href=\"https://drive.google.com/file/d/10nTqLVJ9XTEJemEIGpF6gM8qmF3R2tzD/view?usp=sharing\" target=\"_blank\">Book</a></li>\r\n                          <li><a class=\"item\" href=\"https://drive.google.com/file/d/17Tdl8TvylR09xxXGH1dUkqXLO28ZriPS/view?usp=sharing\" target=\"_blank\">Lecture Notes</a></li>\r\n                           <li><a class=\"item\" href=\"https://drive.google.com/file/d/1uq14dCSUGYt1aXVPbVCReXKlTnjhjqB1/view?usp=sharing\" target=\"_blank\">Lectures</a></li> \r\n                          <li style=\"color: white\"></li> ', 'math305.png', '2020-12-27 02:05:52'),
(23, 3, 'CS 303', '                          <li><a class=\"item\" href=\"https://drive.google.com/file/d/1rZSq8F7oyac_wEFRabzh97F_CQpkLRGm/view?usp=sharing\" target=\"_blank\">Book </a></li>\r\n                         <li><a class=\"item\" href=\"https://drive.google.com/drive/folders/1CusKDmYlf3HdkPNGzOBRSFqtqiJjf66p?usp=sharing\" target=\"_blank\">Slides</a></li>\r\n                           <li><a class=\"item\" href=\"https://drive.google.com/drive/folders/1Ni0epZjiQ9kuwpcEtAbPhFc9mnaqL0k7?usp=sharing\" target=\"_blank\">Slides (Solutions)</a></li> \r\n                             <li style=\"color: white\"></li>     \r\n                            ', 'cs303.jpg', '2020-12-27 02:06:19'),
(24, 3, 'CS 306', '                          <li><a class=\"item\" href=\"https://drive.google.com/file/d/1EFLB7SP51Xdj6sXq7_giLNzjb5jsdsqA/view?usp=sharing\" target=\"_blank\">Book</a></li>\r\n                          <li><a class=\"item\" href=\"https://drive.google.com/drive/folders/177PK-84qPnYqFXfn1sicv_4QMsileJdn?usp=sharing\" target=\"_blank\">Book (solutions)</a></li>\r\n                         <li><a class=\"item\" href=\"https://drive.google.com/drive/folders/1sxmxP-Q1pC9PhSeQ0bXhJPD90XY4SJyZ?usp=sharing\">Lectures</a></li>\r\n                          <li><a class=\"item\" href=\"https://drive.google.com/file/d/1HKgvN8lJLRnwjHdh03PVjzDVkt9yOGxT/view?usp=sharing\" target=\"_blank\">Exam 2018</a></li>\r\n                        ', 'cs306.jpg', '2020-12-27 02:07:45'),
(25, 3, 'CS 308', '                       <li><a class=\"item\" href=\"https://drive.google.com/file/d/1W0SixtB1werWfIJA7QDdeSy87c0WevKg/view?usp=sharing\" target=\"_blank\">Book</a></li>\r\n                     <li><a class=\"item\" href=\"https://www.chegg.com/homework-help/fundamentals-of-database-systems-7th-edition-chapter-14-solutions-9780133970777?fbclid=IwAR0OtbZk6rrTPDVPsXpr2vsadyR6bDhR_X9pn74rivSKCtfjFWZeJggofN0\" target=\"_blank\">Book (Solutions)</a></li>\r\n                 <li><a class=\"item\" href=\"https://drive.google.com/drive/folders/1DjYYOrtjowDj0e-pTDY-5m_mAKo4kqrG?usp=sharing\" target=\"_blank\">Slides</a></li>\r\n\r\n                                  \r\n                       <li><a class=\"item\" href=\"https://drive.google.com/drive/folders/1LmqQlcoHYfIT2goSdMZFBzgsC7qmvUz1?usp=sharing\" target=\"_blank\">Lectures</a></li>\r\n\r\n                       ', 'cs317.jpg', '2020-12-27 02:08:44'),
(26, 3, 'CS 316', '                    <li><a class=\"item\" href=\"https://drive.google.com/drive/folders/1MQr7yyZqkmh762tI-kLyGRfVFqJZO_07?usp=sharing\" target=\"_blank\">Lectures</a></li>\r\n                        <li><a class=\"item\" href=\"https://drive.google.com/drive/folders/1ftYV1Z97upoKSNlJsM4qtsWqKUoVMmEv?usp=sharing\" target=\"_blank\">Exams</a></li> \r\n                        <li><a class=\"item\" href=\"https://drive.google.com/file/d/1c5r_RHoHrm8pBnH_XImgWyxQKAVt5e5J/view?usp=sharing\" target=\"_blank\">Tasks</a></li> \r\n                        <li style=\"color: white\"></li>\r\n                            ', 'cs316.jpg', '2020-12-27 02:09:41'),
(27, 3, 'CS 317', '                        <li><a class=\"item\" href=\"https://drive.google.com/drive/folders/19-3yXFVlqQYWiNFs4vhSr1alpFTRALNt?usp=sharing\" target=\"_blank\">Lectures</a></li>\r\n                          <li><a class=\"item\" href=\"https://drive.google.com/drive/folders/1k_E2EwdH6TmnMUlEr-3sphL7BgUguPKY?usp=sharing\" target=\"_blank\">Exams</a></li> ', 'cs317.jpg', '2020-12-27 02:10:19'),
(28, 3, 'Math 352', '                           <li><a class=\"item\" href=\"https://drive.google.com/file/d/1_vQE4nTudJrr-mLQAQpJlXRRS6Mlz50J/view?usp=sharing\" target=\"_blank\">Book</a></li>\r\n', 'math351.jpg', '2020-12-27 02:11:01'),
(29, 3, 'Math 306', '                          <li><a class=\"item\" href=\"https://drive.google.com/drive/folders/13taIHvOE9wYkq0IMeqLnEXnLF1CRyNJo?usp=sharing\" target=\"_blank\">Lectures</a></li>\r\n', 'math305.png', '2020-12-27 02:11:31');

-- --------------------------------------------------------

--
-- Table structure for table `enroll`
--

CREATE TABLE `enroll` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `enroll`
--

INSERT INTO `enroll` (`id`, `student_id`, `course_id`, `created_at`) VALUES
(8, 2, 1, '2021-05-28 13:29:52');

-- --------------------------------------------------------

--
-- Table structure for table `levels`
--

CREATE TABLE `levels` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `levels`
--

INSERT INTO `levels` (`id`, `name`, `created_at`) VALUES
(1, 'level 1', '2020-12-27 01:05:48'),
(2, 'level 2', '2020-12-26 19:17:51'),
(3, 'level 3', '2020-12-26 19:17:51'),
(4, 'level 4', '2020-12-27 01:05:54');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `type` int(11) DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `type`, `created_at`) VALUES
(1, 'admin', '$2y$12$Ag54JbHXRcrQlFifzCu03u1p0F1IjRYJQrARTvc5kpg99RzN3qXsm', 1, '2020-12-26 23:16:39'),
(2, 'aya', '$2y$10$P5ZVB28IFVExlS4ivxXwleTDN9gGgssRMu1oSXq5qrKFY0sb/84VG', 0, '0000-00-00 00:00:00'),
(5, 'test', '$2y$10$lOvMi6R6XvNQT6RP7b/XyuRkdvAHqIFp6EuY/x2su8Emh745szQiu', 0, '2021-05-28 13:07:53');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enroll`
--
ALTER TABLE `enroll`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `levels`
--
ALTER TABLE `levels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `enroll`
--
ALTER TABLE `enroll`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `levels`
--
ALTER TABLE `levels`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
