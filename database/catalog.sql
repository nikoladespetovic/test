-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2020 at 01:47 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `catalog`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `show_comment` int(11) NOT NULL,
  `created_on` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `name`, `email`, `text`, `show_comment`, `created_on`) VALUES
(1, 'Nikola', 'nikola@despetovic.rs', 'Comment 1', 1, '2020-12-12 00:00:00'),
(2, 'Nikola Despetovic', 'nikola@despetovic.rs', 'Comment 2. Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in fa', 1, '2020-12-12 00:00:00'),
(3, 'Nikola Despetovic', 'nikola@despetovic.rs', 'Comment 3. Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in fa', 1, '2020-12-12 00:00:00'),
(4, 'Nikola Despetovic', 'nikola@despetovic.rs', 'Comment 4. Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in fa', 1, '2020-12-12 01:20:05');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_on` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `description`, `image`, `created_on`) VALUES
(1, 'Ambrosia Apples', 'Crisp, juicy, and sweet, this apple ticks all the boxes. Its delicately smooth, blush-colored skin smells sweetly aromatic with hints of honey. Blessed with an almost-creamy texture inside, it\'s great on its own as a naturally sweet midday snack, but also', 'ambrosia-apples.webp', '0000-00-00'),
(2, 'Hass Avocados', 'With its irresistibly buttery flavor, the Hass sets the avocado standard. It also wins the popularity contest, making up 75% of the American crop.', 'hass-avocados.webp', '0000-00-00'),
(3, 'Yellow Bananas', 'The banana is an anytime, year-round snack. We like them fully yellow with just a dusting of brown freckles. But super-ripe, meltingly sweet bananas and firmer greenish ones have their fans too. Slice them onto cereal or pancakes, fold into fruit salad, b', 'yellow-bananas.webp', '2020-12-11'),
(4, 'Red Pomelo', 'The brilliant ruby-colored pomelo has a big, bold citrus taste with echoes of a very young red wine. It is sweet and tart but not bitter. Its large segments separate easily. The fragrant skin peels off effortlessly.', 'red-pomelo.webp', '0000-00-00'),
(5, 'Organic Pink Grapefruit', 'This grapefruit\'s watermelon-colored flesh is tart and sweet, with big citrus flavor. It is full of juice, with barely any bitterness. A half is the perfect breakfast companion, but we also love to juice it. This grapefuit has very little acid and can be ', 'pink-gpft.webp', '0000-00-00'),
(6, 'Navel Orange', 'Extra-big, beautiful, seedless, very low in acid and filled with mild, sweet flesh. These beauties are supremely simple to peel and section. Bursting with freshly picked juiciness, this is the perfect orange to serve to kids. We also like to toss sections', 'navel-orange.webp', '0000-00-00'),
(7, 'Bosc Pear', 'Melt-in-your-mouth texture with hints of vanilla and apple-blossom honey. Its slightly thick skin hides a creamy-crisp fruit with more tartness than other pears. The Bosc is known as the best cooking pear, and it\'s also at the top of our list for eating r', 'pears.webp', '0000-00-00'),
(8, 'Apricots', 'Velvet skin, juicy flesh, and a subtle, deeply sweet taste with almond overtones. The skin is tender and tart, with just a little bit of downy fuzz. This fruit is all about flavor and juice. Apricots have a slightly firm texture that holds up well when co', 'apricots.webp', '0000-00-00'),
(9, 'Cotton Candy Grapes', 'These plump green grapes are simply bursting with juice and the unmistakable flavor of cotton candy! The first wave of flavor on your palate tastes exactly like the popular carnival treat, then mellows into a soft sweetness with a hit of tart at the end. ', 'grapes.webp', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `role_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `role_name`) VALUES
(1, 'administrator');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `roles_id` int(11) NOT NULL,
  `password` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `created_on` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `roles_id`, `password`, `username`, `created_on`) VALUES
(1, 1, '$2y$10$oNtvpznAXd4w9YuJwwujP.LWuJa/femoHA.BIrX4LFpy/U/SsOHyW', 'admin', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
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
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
