
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";




-- --------------------------------------------------------

--
-- Table structure for table `contact`
--
create database traveller;
use traveller;

CREATE TABLE `contact` (
  `user_name` varchar(50) DEFAULT NULL,
  `c_phone` varchar(20) NOT NULL,
  `e_mail` varchar(100) NOT NULL,
  `c_comment` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`user_name`, `c_phone`, `e_mail`, `c_comment`) VALUES
('', '01151851295', 'omarfadl995@gmail.com', 'your web site is awesome.but i can not use it correctly in some prowsers like firefox,please solve this problem');

-- --------------------------------------------------------

--
-- Table structure for table `special_offer`
--

CREATE TABLE `special_offer` (
  `country_name` varchar(50) NOT NULL,
  `price` double DEFAULT NULL,
  `image_src` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE `ticket` (
  `id` int(11) NOT NULL,
  `dept_country` varchar(30) DEFAULT NULL,
  `dest_country` varchar(30) DEFAULT NULL,
  `class` varchar(20) DEFAULT NULL,
  `ticket_type` varchar(20) NOT NULL,
  `travel_date` date DEFAULT NULL,
  `return_date` date DEFAULT NULL,
  `uesr_phone` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ticket`
--

INSERT INTO `ticket` (`id`, `dept_country`, `dest_country`, `class`, `ticket_type`, `travel_date`, `return_date`, `uesr_phone`) VALUES
(1, 'egypt', 'sudi arabia', 'excursion', 'oneWay', '0000-00-00', '0000-00-00', '01151851295'),
(2, 'egypt', 'iraq', 'business', 'oneWay', '2018-11-04', '2018-11-13', '01251851295'),
(3, 'egypt', 'sudi arabia', 'economy', 'oneWay', '2019-01-01', '2019-09-02', '01151851295');

-- --------------------------------------------------------

--
-- Table structure for table `trip`
--

CREATE TABLE `trip` (
  `dept_country` varchar(30) DEFAULT NULL,
  `dest_country` varchar(30) DEFAULT NULL,
  `dept_time` datetime NOT NULL,
  `price` double NOT NULL,
  `travel_comp` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trip`
--

INSERT INTO `trip` (`dept_country`, `dest_country`, `dept_time`, `price`, `travel_comp`) VALUES
('assuit', 'qina', '2018-11-01 00:00:00', 0, NULL),
('assuit', 'qina', '2018-11-01 04:14:21', 444.66, 'omarcop'),
('egypt', 'iraq', '2018-11-03 05:23:32', 444.66, 'omarcop'),
('egypt', 'syria', '2018-11-03 04:23:40', 5555.66, 'valcopm'),
('egypt', 'sudi arabia', '2018-11-10 09:16:36', 999.77, 'pcomp'),
('egypt', 'libia', '2018-12-20 09:28:29', 888.98, 'omarcop');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `name` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `e_mail` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `visa` int(11) NOT NULL,
  `username` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`name`, `password`, `e_mail`, `phone`, `visa`, `username`) VALUES
('omar hamada', '12345', 'omarhamada995@gmail.com', '01005851295', 3435, '01051851295'),
('omar hamada abolfadl', '123', 'omar995@gmail.com', '01151851295', 2334, 'omar'),
('ahmed saad', '1234', 'ahmedsaad996@gmail.com', '01251851295', 897, 'ahmed');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD UNIQUE KEY `e_mail` (`e_mail`),
  ADD KEY `c_phone` (`c_phone`);

--
-- Indexes for table `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`id`),
  ADD KEY `uesr_phone` (`uesr_phone`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`phone`),
  ADD UNIQUE KEY `e_mail` (`e_mail`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ticket`
--
ALTER TABLE `ticket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `contact`
--
ALTER TABLE `contact`
  ADD CONSTRAINT `contact_ibfk_1` FOREIGN KEY (`c_phone`) REFERENCES `users` (`phone`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ticket`
--
ALTER TABLE `ticket`
  ADD CONSTRAINT `ticket_ibfk_1` FOREIGN KEY (`uesr_phone`) REFERENCES `users` (`phone`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

