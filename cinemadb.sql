-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2022 at 12:22 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cinemadb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL COMMENT 'email',
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `user_id`, `username`, `password`) VALUES
(26, 15, 'ilinca.sava@yahoo.com', 'ilincasava'),
(27, 16, 'constantin_sava58@yahoo.com', 'sava');

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

CREATE TABLE `movie` (
  `movie_id` int(11) NOT NULL,
  `movie_name` varchar(255) NOT NULL,
  `cast` varchar(500) NOT NULL,
  `desc` varchar(1000) NOT NULL,
  `release_date` date NOT NULL,
  `image` varchar(200) NOT NULL,
  `video_url` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`movie_id`, `movie_name`, `cast`, `desc`, `release_date`, `image`, `video_url`) VALUES
(1, 'In Between', 'Joey King, Kyle Allen, Kim Dickens, John Ortiz', 'Dupa ce isi pierde iubitul într-un accident tragic, o adolescenta cu inima sfasiata începe să creadă că dragostea vietii ei îi trimite semne de dincolo de mormant.', '2022-02-11', 'images/InBetween.jpg', 'https://www.youtube.com/watch?v=MmGNg3nreDA'),
(11, 'The 355', 'Penelope Cruz, Jessica Chastain, Sebastian Stan, Diane Kruger', 'Când o arma secreta cade în mâinile mercenarului, agentul CIA Mason Brown trebuie sa-si uneasca fortele cu rivalul agent german Marie, fost aliat MI6 si specialistul în tehnologie de vârf, Khadijah.', '2022-01-07', 'images/The355.jpg', 'https://www.youtube.com/watch?v=MyktpXSvjZE'),
(12, 'Uncharted', 'Tom Holland, Mark Wahlberg, Antonio Banderas', 'Descurcaretul Nathan Drake este recrutat de experimentatul vânator de comori Victor Sully Sullivan pentru a recupera o avere adunata de Ferdinand Magellan si pierduta cu 500 de ani în urma de Casa Moncada. Ceea ce începe ca o tâlharie pentru cei doi devine o cursa în jurul globului pentru a ajunge la comoara înaintea crudului Santiago Moncada, care crede ca el si familia lui sunt mostenitorii de drept ai acesteia.', '2022-02-18', 'images/uncharted.jpg', 'https://www.youtube.com/watch?v=eHp3MbsCbMg'),
(17, 'Dog', 'Channing Tatum, Ethan Suplee, Skyler Joy', 'Briggs, fost granicer, si Lulu, o femela din rasa Malinois belgian, pornesc la drum de-a lungul coastei Pacificului pentru a ajunge la înmormântarea celui mai bun prieten din armata. Unul dintre ei mai are de trait o saptamâna, iar celalalt traieste fiecare zi ca si când ar fi ultima.', '2022-02-18', 'images/Dog.jpg', 'https://www.youtube.com/watch?v=V4tAtp-TyzQ');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `news_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `cast` varchar(100) CHARACTER SET utf16 NOT NULL,
  `news_date` date NOT NULL,
  `description` varchar(200) NOT NULL,
  `attachment` varchar(200) CHARACTER SET utf16 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`news_id`, `name`, `cast`, `news_date`, `description`, `attachment`) VALUES
(3, 'Jurassic World: Dominion', 'Chris Pratt, Owen Grady, Bryce Dallas Howard, Claire Dearing', '2022-09-10', 'Jurassic World: Domination are loc la patru ani dupa ce Isla Nublar a fost distrusa. Dinozaurii traiesc acum - si vâneaza - alaturi de oameni din întreaga lume.', 'images/jurassicworld.jpg'),
(9, 'Black Adam', 'Dwayne Johnson, Noah Centineo, Sarah Shahi', '2022-10-21', 'Black Adam urmareste povestea de origine a modului în care Teth-Adam devine legenda DC pe care fanii o cunosc si o iubesc din benzile desenate.', 'images/BlackAdam.jpg'),
(10, 'The Gray Man', 'Ana de Armas, Chris Evans, Rege-Jean Page, Wagner Moura, Ryan Gosling', '2022-08-15', 'Fost agent CIA, acum ucigas, pe nume Grey Man, el încearca sa salveze doua fiice, de exista carora nu stia.', 'images/TheGrayMan.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `user_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `age` int(2) NOT NULL,
  `gender` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`user_id`, `name`, `email`, `age`, `gender`) VALUES
(15, 'Ilinca', 'ilinca.sava@yahoo.com', 21, 'gender'),
(16, 'Sava', 'constantin_sava58@yahoo.com', 64, 'gender');

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `reservation_id` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `last_name` varchar(200) NOT NULL,
  `first_name` varchar(200) NOT NULL,
  `movie_name` varchar(200) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `seats` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`reservation_id`, `id`, `last_name`, `first_name`, `movie_name`, `date`, `time`, `seats`) VALUES
(69, 0, 'Sava', 'Constantin', 'The 355', '2022-07-28', '14:00:00', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`movie_id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`news_id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`reservation_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `movie`
--
ALTER TABLE `movie`
  MODIFY `movie_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `reservation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
