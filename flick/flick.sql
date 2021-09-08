-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 08, 2021 at 03:05 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `flick`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Username` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Username`, `Password`, `Email`) VALUES
('Ohm Patel', 'ohm', 'ohmpatel@gmail.com'),
('admin', 'admin', 'admin@admin.com'),
('zsdvdzfv', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `ID` varchar(255) NOT NULL,
  `Movie_Name` varchar(255) NOT NULL,
  `Banner_Image` varchar(255) NOT NULL,
  `Movie_URL` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`ID`, `Movie_Name`, `Banner_Image`, `Movie_URL`) VALUES
('tt6967980', 'Raazi ', 'raazi_banner.jpg', 'https://m.media-amazon.com/images/M/MV5BODA4MjM2ODk4OF5BMl5BanBnXkFtZTcwNDgzODk1OQ@@.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `ID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Icon_URL` varchar(255) NOT NULL,
  `Email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`ID`, `Name`, `Icon_URL`, `Email`) VALUES
(1, 'Dad', '../Users/Professor.png', '19bca91@vtcbb.edu.in'),
(2, '  Mummy ', '../Users/Tokio.png', '19bca91@vtcbb.edu.in'),
(3, 'Son', '../Users/Rio.png', '19bca91@vtcbb.edu.in'),
(24, 'Friend', '../Users/Police.png', '19bca91@vtcbb.edu.in'),
(28, 'Other', '../Users/Palermo.png', '19bca91@vtcbb.edu.in');

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `ID` varchar(255) NOT NULL,
  `Movie_Name` varchar(255) NOT NULL,
  `Cast` varchar(255) NOT NULL,
  `Genres` varchar(255) NOT NULL,
  `Plot` mediumtext NOT NULL,
  `IMDB` varchar(255) NOT NULL,
  `Duration` varchar(255) NOT NULL,
  `Year` int(11) NOT NULL,
  `Certificate` varchar(255) NOT NULL,
  `Audio` varchar(255) NOT NULL,
  `Poster_URL` mediumtext NOT NULL,
  `Movie_URL` mediumtext NOT NULL,
  `Movie_BG` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`ID`, `Movie_Name`, `Cast`, `Genres`, `Plot`, `IMDB`, `Duration`, `Year`, `Certificate`, `Audio`, `Poster_URL`, `Movie_URL`, `Movie_BG`) VALUES
('tt6967980', 'Raazi ', 'Alia Bhatt, Vicky Kaushal, Rajit Kapoor, Shishir Sharma, Ashwath Bhatt, Jaideep Ahlawat', 'Thriller, Suspense', 'A Kashmiri woman agrees to marry a Pakistani army officer in order to spy on Pakistan during the Indo-Pakistan War of 1971.', '7.8', '2h 18min', 2018, 'U', 'Hindi', 'https://m.media-amazon.com/images/M/MV5BZmVhN2JlYjEtZWFkOS00YzE0LThiNDMtMGI3NDA1MTk2ZDQ2XkEyXkFqcGdeQXVyODE5NzE3OTE@.jpg', 'https://m.media-amazon.com/images/M/MV5BODA4MjM2ODk4OF5BMl5BanBnXkFtZTcwNDgzODk1OQ@@.jpg', NULL),
('tt4864932', 'Baaghi ', 'Shraddha Kapoor, Tiger Shroff, Sudheer Babu Posani, Paras Arora, Shifuji Shaurya Bharadwaj, Sourav Chakraborty', 'Action, Romantic', 'A martial arts student seeks revenge after the murder of his master.', '5.2', '2h 13min', 2016, 'U', 'Hindi', 'https://m.media-amazon.com/images/M/MV5BMDlhYzBmYjgtYzkyMC00MDUwLTkwNzgtYzk4Yjc5ZTU1ODI3XkEyXkFqcGdeQXVyODE5NzE3OTE@.jpg', 'https://m.media-amazon.com/images/M/MV5BMDlhYzBmYjgtYzkyMC00MDUwLTkwNzgtYzk4Yjc5ZTU1ODI3XkEyXkFqcGdeQXVyODE5NzE3OTE@.jpg', NULL),
('tt2372678', '2 States ', 'Arjun Kapoor, Alia Bhatt, Amrita Singh, Revathy, Ronit Roy, Shivkumar Subramaniam', 'Romantic', 'This movie chronicles how Chetan met his wife and the difficulties they faced due to their cultural differences.', '6.9', '2h 29min', 2014, 'U', 'Hindi', 'https://m.media-amazon.com/images/M/MV5BMTUwNjQ3Nzk5N15BMl5BanBnXkFtZTgwMjI4MTgzMTE@.jpg', 'https://m.media-amazon.com/images/M/MV5BMDlhYzBmYjgtYzkyMC00MDUwLTkwNzgtYzk4Yjc5ZTU1ODI3XkEyXkFqcGdeQXVyODE5NzE3OTE@.jpg', NULL),
('tt6277440', 'Badrinath Ki Dulhania ', 'Varun Dhawan, Alia Bhatt, Sahil Vaid, Swanand Kirkire, Rituraj Singh, Yash Sinha', 'Romantic', 'Badrinath Bansal from Jhansi and Vaidehi Trivedi from Kota belong to small towns but have diametrically opposite opinions on everything. This leads to a clash of ideologies, despite both of them recognizing the goodness in each other.', '6.2', '2h 19min', 2017, 'U', 'Hindi', 'https://m.media-amazon.com/images/M/MV5BNTQ4MDY5OTE5Ml5BMl5BanBnXkFtZTgwNjA3MjQzMTI@.jpg', 'https://m.media-amazon.com/images/M/MV5BMDlhYzBmYjgtYzkyMC00MDUwLTkwNzgtYzk4Yjc5ZTU1ODI3XkEyXkFqcGdeQXVyODE5NzE3OTE@.jpg', NULL),
('tt3678938', 'Humpty Sharma ki Dulhania', 'Varun Dhawan, Alia Bhatt, Ashutosh Rana, Sidharth Shukla, Sahil Vaid, Gaurav Pandey', 'Romantic', 'Two spoiled brats meet over the purchase of an expensive wedding skirt in Delhi. Thus begins a romance under the shadow of her arranged marriage.', '6.0', '2h 13min', 2014, 'U', 'Hindi', 'https://m.media-amazon.com/images/M/MV5BMjE3MDA4NjMxN15BMl5BanBnXkFtZTgwMzc4NzkxMjE@.jpg', 'https://m.media-amazon.com/images/M/MV5BMDlhYzBmYjgtYzkyMC00MDUwLTkwNzgtYzk4Yjc5ZTU1ODI3XkEyXkFqcGdeQXVyODE5NzE3OTE@.jpg', NULL),
('tt2178470', 'Yeh Jawaani Hai Deewani ', 'Ranbir Kapoor, Deepika Padukone, Aditya Roy Kapoor, Kalki Koechlin, Kunaal Roy Kapur, Madhuri Dixit', 'Romantic', 'Kabir and Naina bond during a trekking trip. Before Naina can express herself, Kabir leaves India to pursue his career. They meet again years later, but he still cherishes his dreams more than bonds.', '7.1', '2h 40min', 2013, 'U', 'Hindi', 'https://m.media-amazon.com/images/M/MV5BODA4MjM2ODk4OF5BMl5BanBnXkFtZTcwNDgzODk1OQ@@.jpg', 'https://m.media-amazon.com/images/M/MV5BODA4MjM2ODk4OF5BMl5BanBnXkFtZTcwNDgzODk1OQ@@.jpg', NULL),
('tt3148502', 'Tamasha ', 'Deepika Padukone, Ranbir Kapoor, Piyush Mishra, Svetlana Tulasi, Javed Sheikh, Naila Grewal', 'Romantic', 'Tamasha is about the journey of someone who has lost his edge in trying to follow socially acceptable conventions of society. The film is based on the central theme of abrasion and loss of ...  »', '7.3', '2h 19min', 2015, 'U', 'Hindi', 'https://m.media-amazon.com/images/M/MV5BMjA1MTc0Mjc4Ml5BMl5BanBnXkFtZTgwNjU5Nzk4NjE@.jpg', 'https://m.media-amazon.com/images/M/MV5BMjA1MTc0Mjc4Ml5BMl5BanBnXkFtZTgwNjU5Nzk4NjE@.jpg', NULL),
('tt9614460', 'Chhapaak ', 'Deepika Padukone, Vikrant Massey, Vishal Dahiya, Madhurjeet Sarghi, Ankit Bisht, Geeta Agarwal', 'Romantic', 'The trials and triumphs of Malti, an acid attack survivor. From the investigation of the attack to the court proceedings, the medical treatment to the emotional healing. Chhapaak is the story of the unquashable human spirit.', '4.6', '2h', 2020, 'U', 'Hindi', 'https://m.media-amazon.com/images/M/MV5BNjZjYzRhMmEtMTU0Ny00YWI4LThiZjEtNWZjMDQ3MTgwZmVhXkEyXkFqcGdeQXVyMTA5NzIyMDY5._V1_UY268_CR16,0,182,268_AL_.jpg', 'https://m.media-amazon.com/images/M/MV5BNjZjYzRhMmEtMTU0Ny00YWI4LThiZjEtNWZjMDQ3MTgwZmVhXkEyXkFqcGdeQXVyMTA5NzIyMDY5._V1_UY268_CR16,0,182,268_AL_.jpg', NULL),
('tt2461132', 'Happy New Year ', 'Deepika Padukone, Shah Rukh Khan, Anupam Kher, Anurag Kashyap, Jackie Shroff, Abhishek Bachchan', 'Comedy', 'A gang of amateur dancers takes part in a dancing competition to avenge their personal vendetta.', '5.0', '3h', 2014, 'U', 'Hindi', 'https://m.media-amazon.com/images/M/MV5BMjEwZGQwZWMtNTU4Zi00YWVlLTlhZTYtZjc2MzJmMGVmMDQwXkEyXkFqcGdeQXVyNjQ3ODkxMjE@.jpg', 'https://m.media-amazon.com/images/M/MV5BNjZjYzRhMmEtMTU0Ny00YWI4LThiZjEtNWZjMDQ3MTgwZmVhXkEyXkFqcGdeQXVyMTA5NzIyMDY5._V1_UY268_CR16,0,182,268_AL_.jpg', NULL),
('tt1024943', 'Om Shanti Om ', 'Shah Rukh Khan, Arjun Rampal, Kiron Kher, Shreyas Talpade, Deepika Padukone, Bindu', 'Romantic', 'In the 1970s, Om, an aspiring actor, is murdered, but is immediately reincarnated into the present day. He attempts to discover the mystery of his demise and find Shanti, the love of his previous life.', '6.7', '2h 42min', 2007, 'U', 'Hindi', 'https://m.media-amazon.com/images/M/MV5BZDQxM2RkZDItNDFkMi00NTVkLTlhNTUtNzM1MzkxNWZjYjQ2XkEyXkFqcGdeQXVyMTExNDQ2MTI@.jpg', 'https://m.media-amazon.com/images/M/MV5BNjZjYzRhMmEtMTU0Ny00YWI4LThiZjEtNWZjMDQ3MTgwZmVhXkEyXkFqcGdeQXVyMTA5NzIyMDY5._V1_UY268_CR16,0,182,268_AL_.jpg', NULL),
('tt2395469', 'Gully Boy ', 'Ranveer Singh, Alia Bhatt, Siddhant Chaturvedi, Vijay Raaz, Amruta Subhash, Vijay Varma', 'Music, Romantic', 'A coming-of-age story based on the lives of street rappers in Mumbai.', '8.2', '2h 33min', 2019, 'U', 'Hindi', 'https://m.media-amazon.com/images/M/MV5BZDkzMTQ1YTMtMWY4Ny00MzExLTkzYzEtNzZhOTczNzU2NTU1XkEyXkFqcGdeQXVyODY3NjMyMDU@.jpg', 'https://m.media-amazon.com/images/M/MV5BZDkzMTQ1YTMtMWY4Ny00MzExLTkzYzEtNzZhOTczNzU2NTU1XkEyXkFqcGdeQXVyODY3NjMyMDU@.jpg', NULL),
('tt5946128', 'Dear Zindagi ', 'Alia Bhatt, Shah Rukh Khan, Kunal Kapoor, Priyanka Moodley, Prateek Jain, Aditya Roy Kapoor', 'Romantic', 'Kaira is a budding cinematographer in search of a perfect life. Her encounter with Jug, an unconventional thinker, helps her gain a new perspective on life. She discovers that happiness is all about finding comfort in life\'s imperfections.', '7.6', '2h 31min', 2016, 'U', 'Hindi', 'https://m.media-amazon.com/images/M/MV5BZWQzYWI3ZGMtYzgyYy00OWZkLWEwODYtNGNiMTZhODBkNzUyL2ltYWdlL2ltYWdlXkEyXkFqcGdeQXVyNjY1MTg4Mzc@.jpg', 'https://m.media-amazon.com/images/M/MV5BZWQzYWI3ZGMtYzgyYy00OWZkLWEwODYtNGNiMTZhODBkNzUyL2ltYWdlL2ltYWdlXkEyXkFqcGdeQXVyNjY1MTg4Mzc@.jpg', NULL),
('tt4559046', 'Housefull 3 ', 'Akshay Kumar, Abhishek Bachchan, Riteish Deshmukh, Jackie Shroff, Jacqueline Fernandez, Nargis Fakhri', 'Comedy', 'A father doesn\'t want his three daughters to get married. Now, it\'s up to three men to try to and convince the father that they\'re a good fit for his daughters.', '5.0', '2h 20min', 2016, '\r\n                                    U', 'Hindi', 'https://m.media-amazon.com/images/M/MV5BZDQ5Zjg2ZDktYWIyZi00MTE4LWJiZTQtNzcwMzg3YjAzNGNhXkEyXkFqcGdeQXVyNjQ2MjQ5NzM@.jpg', 'https://m.media-amazon.com/images/M/MV5BZDQ5Zjg2ZDktYWIyZi00MTE4LWJiZTQtNzcwMzg3YjAzNGNhXkEyXkFqcGdeQXVyNjQ2MjQ5NzM@.jpg', 'movie_bg.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `top10`
--

CREATE TABLE `top10` (
  `Rank` int(11) NOT NULL,
  `ID` varchar(255) NOT NULL,
  `Movie_Name` varchar(255) NOT NULL,
  `Poster_URL` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `top10`
--

INSERT INTO `top10` (`Rank`, `ID`, `Movie_Name`, `Poster_URL`) VALUES
(1, 'tt6277440', 'Badrinath Ki Dulhania ', 'https://m.media-amazon.com/images/M/MV5BNTQ4MDY5OTE5Ml5BMl5BanBnXkFtZTgwNjA3MjQzMTI@.jpg'),
(2, 'tt5946128', 'Dear Zindigi', 'https://m.media-amazon.com/images/M/MV5BZWQzYWI3ZGMtYzgyYy00OWZkLWEwODYtNGNiMTZhODBkNzUyL2ltYWdlL2ltYWdlXkEyXkFqcGdeQXVyNjY1MTg4Mzc@.jpg'),
(3, 'tt6967980', 'Raazi', 'https://m.media-amazon.com/images/M/MV5BZmVhN2JlYjEtZWFkOS00YzE0LThiNDMtMGI3NDA1MTk2ZDQ2XkEyXkFqcGdeQXVyODE5NzE3OTE@.jpg'),
(4, 'tt2395469', 'Gully Boy', 'https://m.media-amazon.com/images/M/MV5BZDkzMTQ1YTMtMWY4Ny00MzExLTkzYzEtNzZhOTczNzU2NTU1XkEyXkFqcGdeQXVyODY3NjMyMDU@.jpg'),
(5, 'tt2372678', '2 States', 'https://m.media-amazon.com/images/M/MV5BMTUwNjQ3Nzk5N15BMl5BanBnXkFtZTgwMjI4MTgzMTE@.jpg'),
(6, 'tt6277440', 'Badrinath Ki Dulhania ', 'https://m.media-amazon.com/images/M/MV5BNTQ4MDY5OTE5Ml5BMl5BanBnXkFtZTgwNjA3MjQzMTI@.jpg'),
(7, 'tt4900716', 'Kapoor & Sons ', 'https://m.media-amazon.com/images/M/MV5BMjE4NDk4MTIwNl5BMl5BanBnXkFtZTgwNDEwODI5NzE@.jpg'),
(8, 'tt2178470', 'Yeh Jawaani Hai Deewani ', 'https://m.media-amazon.com/images/M/MV5BODA4MjM2ODk4OF5BMl5BanBnXkFtZTcwNDgzODk1OQ@@.jpg'),
(9, 'tt3148502', 'Tamasha', 'https://m.media-amazon.com/images/M/MV5BMjA1MTc0Mjc4Ml5BMl5BanBnXkFtZTgwNjU5Nzk4NjE@.jpg'),
(10, 'tt2461132', 'Happy New Year ', 'https://m.media-amazon.com/images/M/MV5BMjEwZGQwZWMtNTU4Zi00YWVlLTlhZTYtZjc2MzJmMGVmMDQwXkEyXkFqcGdeQXVyNjQ3ODkxMjE@.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Token` varchar(255) DEFAULT NULL,
  `Status` varchar(255) DEFAULT 'Inactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `Email`, `Username`, `Password`, `Token`, `Status`) VALUES
(5, '19bca91@vtcbb.edu.in', 'Ohm Patel', 'Patel', 'a322aa6c69db8e05a53d6c20081852', 'Active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
