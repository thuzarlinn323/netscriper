-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 22, 2020 at 01:57 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cmsinstitute`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `blog_id` int(11) NOT NULL,
  `blog_category_id` int(11) NOT NULL,
  `blog_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `blog_author` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `blog_date` date NOT NULL,
  `blog_image` text COLLATE utf8_unicode_ci NOT NULL,
  `blog_content` text COLLATE utf8_unicode_ci NOT NULL,
  `blog_tag` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `blog_comment_count` int(11) NOT NULL,
  `blog_status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `blog_view_count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`blog_id`, `blog_category_id`, `blog_title`, `blog_author`, `blog_date`, `blog_image`, `blog_content`, `blog_tag`, `blog_comment_count`, `blog_status`, `blog_view_count`) VALUES
(1, 2, 'WebDesignCourse', 'SwamHtet', '2019-10-30', 'c.jpg', ' Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus quam earum unde facilis voluptatibus, dolor, soluta necessitatibus voluptate, laudantium repellendus fuga ex modi! Tenetur quidem, eos possimus nemo ex corporis.', 'html, css, design, jquery, javascript, bootstrap ', 4, 'public', 0),
(2, 2, 'WebDevelopmentCourse', 'ThteHmue', '2019-11-04', 'b.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus quam earum unde facilis voluptatibus, dolor, soluta necessitatibus voluptate, laudantium repellendus fuga ex modi! Tenetur quidem, eos possimus nemo ex corporis.', 'php, java, python, develop, javascript', 3, 'public', 0),
(4, 1, 'Javascript', 'Thet Hmue Pyae Sone', '2019-11-04', 'e.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim ut ratione deserunt voluptate, maiores quis quos quisquam aliquid sed ipsa dolorum hic doloremque asperiores nisi, incidunt molestiae, inventore quas id.', 'python class', 4, 'public', 5),
(5, 8, 'Ajax', 'Mg Zee', '2019-11-05', 'f.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, fugit dolore quisquam itaque possimus autem harum incidunt totam, animi, minus asperiores id eaque fugiat cumque obcaecati ratione tempore molestias explicabo.', 'Ajax Class', 2, 'public', 4),
(7, 3, 'About Love', 'Zero', '2019-11-06', 'c.jpg', '<p>I Love U Bae!</p>', 'Love Course', 2, 'public', 6),
(11, 3, 'About Love', 'Zero', '2019-11-07', 'c.jpg', '<p>I Love U Bae!</p>', 'Love Course', 0, 'public', 3),
(12, 2, 'WebDesignCourse', 'SwamHtet', '2019-11-13', 'c.jpg', ' Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus quam earum unde facilis voluptatibus, dolor, soluta necessitatibus voluptate, laudantium repellendus fuga ex modi! Tenetur quidem, eos possimus nemo ex corporis.', 'html, css, design, jquery, javascript, bootstrap ', 0, 'public', 0),
(13, 2, 'WebDevelopmentCourse', 'ThteHmue', '2019-11-13', 'b.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus quam earum unde facilis voluptatibus, dolor, soluta necessitatibus voluptate, laudantium repellendus fuga ex modi! Tenetur quidem, eos possimus nemo ex corporis.', 'php, java, python, develop, javascript', 0, 'public', 0),
(14, 1, 'Javascript', 'Thet Hmue Pyae Sone', '2019-11-13', 'e.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim ut ratione deserunt voluptate, maiores quis quos quisquam aliquid sed ipsa dolorum hic doloremque asperiores nisi, incidunt molestiae, inventore quas id.', 'python class', 0, 'public', 0),
(15, 8, 'Ajax', 'Mg Zee', '2019-11-13', 'f.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, fugit dolore quisquam itaque possimus autem harum incidunt totam, animi, minus asperiores id eaque fugiat cumque obcaecati ratione tempore molestias explicabo.', 'Ajax Class', 0, 'public', 0),
(16, 3, 'About Love', 'Zero', '2019-11-13', 'c.jpg', '<p>I Love U Bae!</p>', 'Love Course', 0, 'public', 0),
(17, 3, 'About Love', 'Zero', '2019-11-13', 'c.jpg', '<p>I Love U Bae!</p>', 'Love Course', 0, 'public', 0),
(18, 8, 'Ajax', 'Mg Zee', '2019-11-13', 'f.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, fugit dolore quisquam itaque possimus autem harum incidunt totam, animi, minus asperiores id eaque fugiat cumque obcaecati ratione tempore molestias explicabo.', 'Ajax Class', 0, 'public', 0);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(11) NOT NULL,
  `cat_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES
(1, 'WebDesign'),
(2, 'WebDevelopment'),
(3, 'IOT Class'),
(6, 'Java Script '),
(8, 'Ajax');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(11) NOT NULL,
  `comment_blog_id` int(11) NOT NULL,
  `comment_author` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `comment_email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `comment_content` text COLLATE utf8_unicode_ci NOT NULL,
  `comment_status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `comment_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `comment_blog_id`, `comment_author`, `comment_email`, `comment_content`, `comment_status`, `comment_date`) VALUES
(1, 1, 'Swam Swam', 'swam@gmail.com', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio id beatae officia praesentium, excepturi, assumenda error dolorem officiis expedita quas, aliquid nostrum velit, sunt adipisci porro dicta earum alias est.', 'unapprove', '2019-11-04'),
(2, 1, 'oosaht', 'saht12@gmail.com', 'very good service', 'unapprove', '2019-11-05'),
(6, 1, 'Thet Hmue', 'thet19@gamil.com', 'Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.', 'approve', '2019-11-05'),
(7, 2, 'Thet Hmue', 'thet19@gamil.com', 'Nice One!', 'approve', '2019-11-05'),
(8, 1, 'Swam Htet', 'saht12@gmail.com', 'U so beautiful!', 'approve', '2019-11-05'),
(9, 4, 'Mg Zee', 'zee12@gmail.com', 'U are very Beautifu!', 'approve', '2019-11-05'),
(10, 1, 'oosaht', 'saht12@gmail.com', 'Have a nice day!', 'unapprove', '2019-11-05'),
(11, 2, 'zeze', 'zee12@gmail.com', 'Have a nice day!', 'unapprove', '2019-11-05'),
(12, 4, 'Hmue Hmue', 'thet19@gamil.com', 'Amazing!', 'approve', '2019-11-05'),
(13, 4, 'Thazin Ei', 'ei12@gmail.com', 'Wow!', 'approve', '2019-11-05');

-- --------------------------------------------------------

--
-- Table structure for table `online_user`
--

CREATE TABLE `online_user` (
  `id` int(11) NOT NULL,
  `session` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `online_user`
--

INSERT INTO `online_user` (`id`, `session`, `time`) VALUES
(1, 'df3h2vlsco920jud9ragu89r0v', 1573635473),
(2, '0riruhm5pl0v0ju9dc3e7nur2f', 1573631676),
(3, 'jcuhhpgc0c0idpvi5patuiprs1', 1573631647),
(4, 'qlm3qjmvbcevctn14ucmb8j583', 1573633378),
(5, '2hvm5f5hk57v8lm4nph7dvkofv', 1573657947),
(6, '3frj5ul7ef4nmtev26kgk9tifv', 1573708406),
(7, 'og4f38q08hf91l93udour35ljr', 1575214949),
(8, 'db81s4lrnbmv87iq5ji178uce9', 1575387579),
(9, 'pbv24n25mglc9psdcpdmum51hi', 1582375434);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_role` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_password`, `user_email`, `user_role`) VALUES
(1, 'swam', '12345', 'swam19@gmail.com', 'user'),
(2, 'Zero', '12345', 'ze12@gmail.com', 'admin'),
(3, 'Swam Htet Naing', '11111', 'swamhtetnaing@cu.gmail.com', 'admin'),
(4, 'Thet Hmue Pyae Sone', '11111', 'thet12@gmail.com', 'admin'),
(5, 'nana', '$2y$10$fPr91Djr3ac6nlCd69NKJOxIGvlOIXj15lJRD6e.VtydaUIuniztC', 'nana@gmail.com', 'user'),
(6, 'Ko Kyaw', '12345', 'kyaw12@gmail.com', 'user'),
(7, 'Bo Bo', '12345', 'bo12@gmail.com', 'user'),
(8, 'Boo', '12345', 'boo12@gmail.com', 'user'),
(9, 'Be Be', '$2y$10$IC50KhevXuT.h1yOXk968.jVc2vnkBEIYr01/hWPIlUuAxNxdMhGy', 'be12@gmail.com', 'user'),
(10, 'Ve Ve', '$2y$10$Qz.hNfu6Q6qOl2TDuf6oiO.WW1V2.F/hSfVZhU/bqIdwKqk1hT42W', 've12@gmail.com', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`blog_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `online_user`
--
ALTER TABLE `online_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `blog_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `online_user`
--
ALTER TABLE `online_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
