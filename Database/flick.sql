-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 05, 2021 at 07:44 PM
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
  `MID` varchar(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Icon_URL` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`MID`, `Name`, `Icon_URL`, `Email`) VALUES
('14b6e1e081', 'Mirav', '../Users/Helsinki.png', 'ohmpatel45@gmail.com'),
('1860f2a422', 'Friend', '../Users/Helsinki.png', '19bca91@vtcbb.edu.in'),
('28cf649b7c', ' Manthan ', '../Users/Tokio.png', 'ohmpatel45@gmail.com'),
('4100382423', 'Ohm', '../Users/Professor.png', 'ohmpatel45@gmail.com'),
('6c8333851c', 'Dad', '../Users/Professor.png', '19bca91@vtcbb.edu.in'),
('7524412fd9', 'Daughter', '../Users/Tokio.png', '19bca91@vtcbb.edu.in'),
('86645431d9', 'Son', '../Users/Rio.png', '19bca91@vtcbb.edu.in'),
('8790a86de7', 'Mom', '../Users/Lisboa.png', '19bca91@vtcbb.edu.in'),
('e5a1bdc4f8', 'Parth', '../Users/Palermo.png', 'ohmpatel45@gmail.com'),
('efe6353799', 'Other', '../Users/Police.png', 'ohmpatel45@gmail.com');

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
('tt6967980', 'Raazi ', 'Alia Bhatt, Vicky Kaushal, Rajit Kapoor, Shishir Sharma, Ashwath Bhatt, Jaideep Ahlawat', 'Thriller, Suspense, Drama, International', 'A Kashmiri woman agrees to marry a Pakistani army officer in order to spy on Pakistan during the Indo-Pakistan War of 1971.', '7.8', '2h 18min', 2018, 'U', 'Hindi', 'https://m.media-amazon.com/images/M/MV5BZmVhN2JlYjEtZWFkOS00YzE0LThiNDMtMGI3NDA1MTk2ZDQ2XkEyXkFqcGdeQXVyODE5NzE3OTE@.jpg', 'https://flick-project.s3.ap-south-1.amazonaws.com/Raazi_(2018)_Hindi_720p_BluRay_1GB_ESub_.mkv', 'https://www.youtube.com/embed/YjMSttRJrhA'),
('tt8983202', 'Kabir Singh ', 'Shahid Kapoor, Kiara Advani, Nikita Dutta, Soham Majumdar, Arjan Bajwa, Suresh Oberoi', 'Action, Drama, Romance', 'Kabir Singh is a remake of a Telugu movie Arjun Reddy (2017), where a short-tempered house surgeon gets used to drugs and drinks when his girlfriend is forced to marry another person.', '7.1', '2h 53min', 2019, 'U/A', 'Hindi', 'https://m.media-amazon.com/images/M/MV5BOTIyMTNkMWQtZDJlYi00OGJmLTliN2MtOGE0YjY4NzFiYTNmXkEyXkFqcGdeQXVyOTAzMTc2MjA@.jpg', 'https://flick-project.s3.ap-south-1.amazonaws.com/Raazi_(2018)_Hindi_720p_BluRay_1GB_ESub_.mkv', 'https://www.youtube.com/embed/RiANSSgCuJk'),
('tt8291224', 'Uri: The Surgical Strike ', 'Vicky Kaushal, Paresh Rawal, Mohit Raina, Yami Gautam, Kirti Kulhari, Rajit Kapoor', 'Action, Drama, War', 'Indian army special forces execute a covert operation, avenging the killing of fellow army men at their base by a terrorist group.', '8.4', '2h 18min', 2019, 'U/A', 'Hindi', 'https://m.media-amazon.com/images/M/MV5BMWU4ZjNlNTQtOGE2MS00NDI0LWFlYjMtMmY3ZWVkMjJkNGRmXkEyXkFqcGdeQXVyNjE1OTQ0NjA@.jpg', 'https://flick-project.s3.ap-south-1.amazonaws.com/Raazi_(2018)_Hindi_720p_BluRay_1GB_ESub_.mkv', 'https://www.youtube.com/embed/VVY3do673Zc'),
('tt7721800', 'Bharat ', 'Salman Khan, Katrina Kaif, Sunil Grover, Tabu, Jackie Shroff, Sonali Kulkarni', 'Action, Comedy, Drama', 'At the cusp of India\'s birth as an Independent nation, a family makes an arduous journey to freedom at a cost. A young boy Bharat, makes a promise to his Father that he will keep his family together no matter what.', '5.4', '2h 30min', 2019, 'U/A', 'Hindi', 'https://m.media-amazon.com/images/M/MV5BYzRjMTY1MzktZGRmNi00YjM0LWJkOTUtMmI0ZGEyZjdkOGFhXkEyXkFqcGdeQXVyOTAzMTc2MjA@.jpg', 'https://flick-project.s3.ap-south-1.amazonaws.com/Raazi_(2018)_Hindi_720p_BluRay_1GB_ESub_.mkv', 'https://www.youtube.com/embed/Ea_GKoe81GY'),
('tt8504014', 'Good Newwz ', 'Akshay Kumar, Kareena Kapoor, Diljit Dosanjh, Kiara Advani, Adil Hussain, Tisca Chopra', 'Comedy', 'Two couples with the same surnames pursue in-vitro fertilization and wait for their upcoming babies. Trouble ensues when they find that the sperms of each couple have been mixed with each other.', '7.6', '2h 14min', 2019, 'U/A', 'Hindi', 'https://m.media-amazon.com/images/M/MV5BNWQzNGQxY2YtNWZjOC00MGU4LTgzNTUtODliOGQzYTkxYzM1XkEyXkFqcGdeQXVyMTA5NzIyMDY5._V1_UY268_CR1,0,182,268_AL_.jpg', 'https://flick-project.s3.ap-south-1.amazonaws.com/Raazi_(2018)_Hindi_720p_BluRay_1GB_ESub_.mkv', 'https://www.youtube.com/embed/r9VJpqoAr84'),
('tt9248972', 'Mission Mangal ', 'Akshay Kumar, Vidya Balan, Taapsee Pannu, Sonakshi Sinha, Nithya Menon, Kirti Kulhari', 'Drama, History', 'Based on true events of the Indian Space Research Organisation (ISRO) successfully launching the Mars Orbiter Mission (Mangalyaan), making it the least expensive mission to Mars.', '6.5', '2h 10min', 2019, 'U/A', 'Hindi', 'https://m.media-amazon.com/images/M/MV5BZThmMWFlOWYtY2M0YS00OWIxLWI4MzgtYTJhMDNkZDY4ZjhjXkEyXkFqcGdeQXVyNzc4NzEzNjY@.jpg', 'https://flick-project.s3.ap-south-1.amazonaws.com/Raazi_(2018)_Hindi_720p_BluRay_1GB_ESub_.mkv', 'https://www.youtube.com/embed/q10nfS9V090'),
('tt7721946', 'Housefull 4 ', 'Akshay Kumar, Riteish Deshmukh, Bobby Deol, Kriti Sanon, Pooja Hegde, Kriti Kharbanda', 'Action, Drama, Comedy', 'A set of three brothers are due to marry a set of three sisters, until one of the brothers starts to realize that they are all reincarnations from 600 years earlier and the wrong couples are about to get married.', '3.4', '2h 25min', 2019, 'U/A', 'Hindi', 'https://m.media-amazon.com/images/M/MV5BYjIyODM0OTAtMmYwNS00YTA1LTkwMjctYzcwZWFhZjcyMWM2XkEyXkFqcGdeQXVyOTAzMTc2MjA@.jpg', 'https://flick-project.s3.ap-south-1.amazonaws.com/Raazi_(2018)_Hindi_720p_BluRay_1GB_ESub_.mkv', 'https://www.youtube.com/embed/gcHH34cEl3Y'),
('tt2395469', 'Gully Boy ', 'Ranveer Singh, Alia Bhatt, Siddhant Chaturvedi, Vijay Raaz, Amruta Subhash, Vijay Varma', 'Drama, Music, Romance', 'A coming-of-age story based on the lives of street rappers in Mumbai.', '8.2', '2h 33min', 2019, 'U/A', 'Hindi', 'https://m.media-amazon.com/images/M/MV5BZDkzMTQ1YTMtMWY4Ny00MzExLTkzYzEtNzZhOTczNzU2NTU1XkEyXkFqcGdeQXVyODY3NjMyMDU@.jpg', 'https://flick-project.s3.ap-south-1.amazonaws.com/Raazi_(2018)_Hindi_720p_BluRay_1GB_ESub_.mkv', 'https://www.youtube.com/embed/JfbxcD6biOk'),
('tt7639372', 'Total Dhamaal ', 'Ajay Devgn, Anil Kapoor, Madhuri Dixit, Riteish Deshmukh, Arshad Warsi, Javed Jaffrey', 'Comedy', 'A group of people learn about a hidden treasure and then they race to find it and claim it.', '4.3', '2h 10min', 2019, 'U/A', 'Hindi', 'https://m.media-amazon.com/images/M/MV5BMTdiN2Q2MGUtYWRjMi00M2Y2LWEzOTYtOTA3NjNiMGMzNmFhXkEyXkFqcGdeQXVyNjE1OTQ0NjA@.jpg', 'https://flick-project.s3.ap-south-1.amazonaws.com/Raazi_(2018)_Hindi_720p_BluRay_1GB_ESub_.mkv', 'https://www.youtube.com/embed/fo9EhcwQXcM'),
('tt8908002', 'Luka Chuppi ', 'Kartik Aaryan, Kriti Sanon, Aparshakti Khurana, Pankaj Tripathi, Vinay Pathak, Atul Srivastava', 'Drama, Comedy, Romance', 'It tells the story of a television reporter in Mathura who falls in love with a headstrong woman.', '6.3', '2h 6min', 2019, 'U/A', 'Hindi', 'https://m.media-amazon.com/images/M/MV5BY2MwM2ZhNTItMzkwNi00MTQxLTljMDAtZTk1YmU2M2YzNGVmXkEyXkFqcGdeQXVyNjE1OTQ0NjA@.jpg', 'https://flick-project.s3.ap-south-1.amazonaws.com/Raazi_(2018)_Hindi_720p_BluRay_1GB_ESub_.mkv', 'https://www.youtube.com/embed/-JLewvWBkCw'),
('tt8130968', 'Badla ', 'Amitabh Bachchan, Taapsee Pannu, Amrita Singh, Antonio Aakeel, Tony Luke, Tanveer Ghani', 'Crime, Drama, Mystery', 'A dynamic young entrepreneur finds herself locked in a hotel room with the corpse of her dead lover. She hires a prestigious lawyer to defend her and they work together to figure out what actually happened.', '7.9', '1h 58min', 2019, 'U/A', 'Hindi', 'https://m.media-amazon.com/images/M/MV5BYjZiMzIzYTctNDViZi00OWNmLWFmN2YtMmI2OWJiZWViMmY3XkEyXkFqcGdeQXVyNTYwMzA0MTM@.jpg', 'https://flick-project.s3.ap-south-1.amazonaws.com/Raazi_(2018)_Hindi_720p_BluRay_1GB_ESub_.mkv', 'https://www.youtube.com/embed/mSlgu8AQAd4'),
('tt6264938', 'Kesari ', 'Akshay Kumar, Parineeti Chopra, Suvinder Vicky, Vansh Bhardwaj, Sumeet Basran, Ajit Singh', 'Action, Drama, History', 'Based on an incredible true story of the Battle of Saragarhi in which an army of 21 Sikhs fought against 10,000 Afghans in 1897.', '7.4', '2h 30min', 2019, 'U/A', 'Hindi', 'https://m.media-amazon.com/images/M/MV5BYTRhZWVkNTctMzRmYy00MDk1LWIzNDYtMjA1ZGE5YWJkYjU0XkEyXkFqcGdeQXVyODE5NzE3OTE@.jpg', 'https://flick-project.s3.ap-south-1.amazonaws.com/Raazi_(2018)_Hindi_720p_BluRay_1GB_ESub_.mkv', 'https://www.youtube.com/embed/JFP24D15_XM'),
('tt6988116', 'Kalank ', 'Varun Dhawan, Alia Bhatt, Aditya Roy Kapoor, Madhuri Dixit, Sonakshi Sinha, Sanjay Dutt', 'Drama, Romance', 'The lives of six enigmatic characters become entangled whilst in search of love, but separated by the dichotomy between the two worlds of Husnabad, a town in North India.', '3.7', '2h 46min', 2019, 'U/A', 'Hindi', 'https://m.media-amazon.com/images/M/MV5BYTg4NWEyMjMtNTM2MS00M2I4LWFjOTQtMDRjNjc0ODI3NmY4XkEyXkFqcGdeQXVyOTc1MDE5NzI@.jpg', 'https://flick-project.s3.ap-south-1.amazonaws.com/Raazi_(2018)_Hindi_720p_BluRay_1GB_ESub_.mkv', 'https://www.youtube.com/embed/p4Z_ueeT_XQ'),
('tt8647400', 'De De Pyaar De ', 'Ajay Devgn, Tabu, Rakul Preet Singh, Jimmy Sheirgill, Alok Nath, Madhumalti Kapoor', 'Comedy, Drama, Romance', 'A 50-year-old single father faces disapproval from his family and his ex-wife when he falls in love with a 26-year-old woman.', '6.6', '2h 15min', 2019, 'U/A', 'Hindi', 'https://m.media-amazon.com/images/M/MV5BOTRiYzExNWItNDk4ZS00Y2RiLTgwNmUtODI5N2FmOGM5NzM3XkEyXkFqcGdeQXVyODE5NzE3OTE@.jpg', 'https://flick-project.s3.ap-south-1.amazonaws.com/Raazi_(2018)_Hindi_720p_BluRay_1GB_ESub_.mkv', 'https://www.youtube.com/embed/EJUD2PptXrk'),
('tt10324144', 'Article 15 ', 'Ayushmann Khurrana, Nassar, Manoj Pahwa, Kumud Mishra, Isha Talwar, Sayani Gupta', 'Crime, Drama, Mystery', 'In the rural heartlands of India, an upright police officer sets out on a crusade against violent caste-based crimes and discrimination.', '8.2', '2h 10min', 2019, 'U/A', 'Hindi', 'https://m.media-amazon.com/images/M/MV5BZTI2NTFiMDMtZjQxNS00YjBkLWFhNWMtOTIyMzE5Yjc0ZTZiXkEyXkFqcGdeQXVyODE5NzE3OTE@.jpg', 'https://flick-project.s3.ap-south-1.amazonaws.com/Raazi_(2018)_Hindi_720p_BluRay_1GB_ESub_.mkv', 'https://www.youtube.com/embed/HKOJY0cU63E'),
('tt7881524', 'Arjun Patiala ', 'Diljit Dosanjh, Kriti Sanon, Varun Sharma, Ronit Roy, Seema Bhargava, Mohammed Zeeshan Ayyub', 'Action, Comedy', 'This spoof comedy narrates the story of a cop Arjun Patiala (Diljit Dosanjh) and his sidekick Onidda Singh (Varun Sharma). Together, will they be able to accomplish their mission of a crime-free town with their goofy style of policing?', '4.1', '1h 47min', 2019, 'U/A', 'Hindi', 'https://m.media-amazon.com/images/M/MV5BNmQ3ODI0OWMtZjNlYS00MWQxLTg4MjEtNWM0NjAxZGUyZDk4XkEyXkFqcGdeQXVyOTAzMTc2MjA@.jpg', 'https://flick-project.s3.ap-south-1.amazonaws.com/Raazi_(2018)_Hindi_720p_BluRay_1GB_ESub_.mkv', 'https://www.youtube.com/embed/nR7ETMS7Eo0'),
('tt8869978', 'Batla House ', 'Mrunal Thakur, John Abraham, Nora Fatehi, Ravi Kishan, Sonam Arora, Rajesh Sharma', 'Action, Crime, Drama', 'After a deadly encounter, a police officer struggles to catch the fugitives and prove the police acted lawfully, while being despised by the whole nation.', '7.2', '2h 26min', 2019, 'U/A', 'Hindi', 'https://m.media-amazon.com/images/M/MV5BZmI4M2I1NWYtM2MwNS00NDJmLThhMmMtNDk1MzM4ZWQyMDZmXkEyXkFqcGdeQXVyODE5NzE3OTE@.jpg', 'https://flick-project.s3.ap-south-1.amazonaws.com/Raazi_(2018)_Hindi_720p_BluRay_1GB_ESub_.mkv', 'https://www.youtube.com/embed/dG3K6jB3iW8'),
('tt9052870', 'Chhichhore ', 'Sushant Singh Rajput, Shraddha Kapoor, Varun Sharma, Prateik, Tahir Raj Bhasin, Naveen Polishetty', 'Comedy, Drama, Romance', 'Following a group of friends from university as they progress into middle-age life and go their own separate ways.', '8.1', '2h 23min', 2019, 'U/A', 'Hindi', 'https://m.media-amazon.com/images/M/MV5BYjg2ZDI2YTYtN2EwYi00YWI5LTgyMWQtMWFkYmE3NmJkOGVhXkEyXkFqcGdeQXVyODE5NzE3OTE@.jpg', 'https://flick-project.s3.ap-south-1.amazonaws.com/Raazi_(2018)_Hindi_720p_BluRay_1GB_ESub_.mkv', 'https://www.youtube.com/embed/tsxemFX0a7k'),
('tt9248940', 'Dream Girl ', 'Ayushmann Khurrana, Nushrat Bharucha, Annu Kapoor, Manjot Singh, Abhishek Banerjee, Vijay Raaz', 'Comedy, Romance', 'Rom-com Movie, directed by Raaj Shaandilyaa, stars Ayushmann Khurrana who plays a \'dream girl\'. In every love story, there is always one trying to win the heart of the other, who could be the \'dream girl\'.', '7.2', '2h 12min', 2019, 'U/A', 'Hindi', 'https://m.media-amazon.com/images/M/MV5BNmUyMzU3YjgtZTliNS00NWM2LWI5ODgtYWE3ZjAzODgyNjNhXkEyXkFqcGdeQXVyNjY1MTg4Mzc@.jpg', 'https://flick-project.s3.ap-south-1.amazonaws.com/Raazi_(2018)_Hindi_720p_BluRay_1GB_ESub_.mkv', 'https://www.youtube.com/embed/nf39Jpi3ZQ4'),
('tt8144834', 'Section 375 ', 'Akshaye Khanna, Richa Chadha, Meera Chopra, Rahul Bhat, Shriswara, Kishore Kadam', 'Crime, Drama, Mystery', 'A celebrated Bollywood director Rohan Khurana stands accused by a female member of his crew, Anjali Dangle of having raped her at his residence.', '8.2', '2h 4min', 2019, 'U/A', 'Hindi', 'https://m.media-amazon.com/images/M/MV5BMTQwNDBlODYtNGIyYS00ZmMwLTk5NDUtNDEwNmFiZjY0ZDUxXkEyXkFqcGdeQXVyODg4OTQ4NDM@.jpg', 'https://flick-project.s3.ap-south-1.amazonaws.com/Raazi_(2018)_Hindi_720p_BluRay_1GB_ESub_.mkv', 'https://www.youtube.com/embed/UWjxS8EJ4Z8'),
('tt8902990', 'The Sky Is Pink ', 'Zaira Wasim, Priyanka Chopra, Farhan Akhtar, Rohit Saraf, Manas Mittal, Rajshri Deshpande', 'Drama, Romance', 'It is based on the love story of a couple spanning 25 years, told through the lens of their spunky teenage daughter Aisha Chaudhary, who was diagnosed with a Pulmonary fibrosis .', '7.4', '2h 23min', 2019, 'U/A', 'Hindi', 'https://m.media-amazon.com/images/M/MV5BNWQ5OTJjYTktMGNmYi00ZGMwLTlkYTgtODY3YWIxZDgyMzkwXkEyXkFqcGdeQXVyOTg4MzcyNzQ@.jpg', 'https://flick-project.s3.ap-south-1.amazonaws.com/Raazi_(2018)_Hindi_720p_BluRay_1GB_ESub_.mkv', 'https://www.youtube.com/embed/prwUFBsDRLk'),
('tt8983180', 'Made in China ', 'Rajkummar Rao, Mouni Roy, Boman Irani, Paresh Rawal, Gajraj Rao, Sumeet Vyas', 'Comedy, Drama', 'Story of Failed Gujarati Businessman, who jumps into unknown world of China to get once in a life time business idea, which will change his life.', '6.2', '2h 8min', 2019, 'U/A', 'Hindi', 'https://m.media-amazon.com/images/M/MV5BNjY1Y2NmNGEtOTIzMS00NGQxLTljZWUtYjRkYTZiYmYxYTlmXkEyXkFqcGdeQXVyMTMxODk2OTU@.jpg', 'https://flick-project.s3.ap-south-1.amazonaws.com/Raazi_(2018)_Hindi_720p_BluRay_1GB_ESub_.mkv', 'https://www.youtube.com/embed/eA6PFnSHo-E'),
('tt9680136', 'Pati Patni Aur Woh ', 'Kartik Aaryan, Bhumi Pednekar, Ananya Panday, Aparshakti Khurana, Rajesh Sharma, Geeta Agrawal Sharma', 'Comedy, Romance', 'Chintu Tyagi is an ordinary, middle class man who finds himself torn between his wife and another woman.', '6.0', '2h 6min', 2019, 'U/A', 'Hindi', 'https://m.media-amazon.com/images/M/MV5BMjQzOGM5ZmYtYzA2ZS00ZDk0LWI2NzctMmMzZDg3MWExMmM0XkEyXkFqcGdeQXVyOTAzMTc2MjA@.jpg', 'https://flick-project.s3.ap-south-1.amazonaws.com/Raazi_(2018)_Hindi_720p_BluRay_1GB_ESub_.mkv', 'https://www.youtube.com/embed/L7a1JSeqaXk'),
('tt5668770', 'Mardaani 2 ', 'Rani Mukerji, Vishal Jethwa, Shruti Bapna, Rajesh Sharma, Prasanna Ketkar, Anurag Sharma', 'Action, Crime, Drama', 'Shivani Shivaji Roy is back and this time she\'s on the trail of a 21 year old merciless villain who targets women.', '7.8', '1h 43min', 2019, 'U/A', 'Hindi', 'https://m.media-amazon.com/images/M/MV5BNWZhYTc4M2ItNDc3NS00NjIxLWEzNWMtZWIyNDgzMmUwZWM3XkEyXkFqcGdeQXVyMTkzOTcxOTg@.jpg', 'https://flick-project.s3.ap-south-1.amazonaws.com/Raazi_(2018)_Hindi_720p_BluRay_1GB_ESub_.mkv', 'https://www.youtube.com/embed/dKeRIOA28Jk'),
('tt8108274', 'Tanhaji: The Unsung Warrior ', 'Ajay Devgn, Saif Ali Khan, Kajol, Rajesh Aher, Raj Bhansali, Myrah Dandekar', 'Action, Biography, Drama', 'Tanhaji Malusare, a military chieftain in the army of the Maratha king Shivaji, leads the charge to capture the strategically important Kondhana fort guarded by the army of the fierce Rajput chieftain Udaybhan Rathod.', '8.6', '2h 15min', 2020, 'U/A', 'Hindi', 'https://m.media-amazon.com/images/M/MV5BMDc5ZmQ3MzUtYTY4OS00YTE3LTkwNmItNmQ2ODIwNWM3MzY1XkEyXkFqcGdeQXVyODE5NzE3OTE@.jpg', 'https://flick-project.s3.ap-south-1.amazonaws.com/Raazi_(2018)_Hindi_720p_BluRay_1GB_ESub_.mkv', 'https://www.youtube.com/embed/cffAGIYTEHU'),
('tt9648672', 'Street Dancer 3D ', 'Varun Dhawan, Shraddha Kapoor, Prabhu Deva, Nora Fatehi, Aparshakti Khurana, Dharmesh Yelande', 'Drama, Music', 'A coming-of-age story based on the lives of street dancers.', '3.9', '2h 26min', 2020, 'U/A', 'Hindi', 'https://m.media-amazon.com/images/M/MV5BYjZlMTg1NDktNzI2My00Mjg2LTk3NzktZWQ5ZDJhYmJkNGExXkEyXkFqcGdeQXVyOTAzMTc2MjA@.jpg', 'https://flick-project.s3.ap-south-1.amazonaws.com/Raazi_(2018)_Hindi_720p_BluRay_1GB_ESub_.mkv', 'https://www.youtube.com/embed/2Ym7LJv6L_c'),
('tt9614460', 'Chhapaak ', 'Deepika Padukone, Vikrant Massey, Vishal Dahiya, Madhurjeet Sarghi, Ankit Bisht, Geeta Agarwal', 'Biography, Drama', 'The trials and triumphs of Malti, an acid attack survivor. From the investigation of the attack to the court proceedings, the medical treatment to the emotional healing. Chhapaak is the story of the unquashable human spirit.', '4.6', '2h', 2020, 'U/A', 'Hindi', 'https://m.media-amazon.com/images/M/MV5BNjZjYzRhMmEtMTU0Ny00YWI4LThiZjEtNWZjMDQ3MTgwZmVhXkEyXkFqcGdeQXVyMTA5NzIyMDY5._V1_UY268_CR16,0,182,268_AL_.jpg', 'https://flick-project.s3.ap-south-1.amazonaws.com/Raazi_(2018)_Hindi_720p_BluRay_1GB_ESub_.mkv', 'https://www.youtube.com/embed/kXVf-KLyybk'),
('tt9248952', 'Jawaani Jaaneman ', 'Saif Ali Khan, Tabu, Alaya Furniturewala, Mahir Abdullah, Dante Alexander, Adeel Ali', 'Comedy, Drama', 'A 40 year-old playboy\'s life turns upside down when he comes to know that he has a 20 something year-old daughter.', '7.5', '1h 59min', 2020, 'U/A', 'Hindi', 'https://m.media-amazon.com/images/M/MV5BNjY1OTI0NjEtNzRmZS00NzFlLTlhMTgtNjdmNWY2MDQ3YzIwXkEyXkFqcGdeQXVyODE5NzE3OTE@.jpg', 'https://flick-project.s3.ap-south-1.amazonaws.com/Raazi_(2018)_Hindi_720p_BluRay_1GB_ESub_.mkv', 'https://www.youtube.com/embed/_lkFyfcrvkU'),
('tt3678938', 'Humpty Sharma Ki Dulhania', 'Varun Dhawan, Alia Bhatt, Ashutosh Rana, Sidharth Shukla, Sahil Vaid, Gaurav Pandey', 'Comedy, Drama, Romance', 'Two spoiled brats meet over the purchase of an expensive wedding skirt in Delhi. Thus begins a romance under the shadow of her arranged marriage.', '6.0', '2h 13min', 2014, 'U/A', 'Hindi', 'https://m.media-amazon.com/images/M/MV5BMjE3MDA4NjMxN15BMl5BanBnXkFtZTgwMzc4NzkxMjE@.jpg', 'https://flick-project.s3.ap-south-1.amazonaws.com/Raazi_(2018)_Hindi_720p_BluRay_1GB_ESub_.mkv', 'https://www.youtube.com/embed/hWMWEhOjmFs'),
('tt5946128', 'Dear Zindagi ', 'Alia Bhatt, Shah Rukh Khan, Kunal Kapoor, Priyanka Moodley, Prateek Jain, Aditya Roy Kapoor', 'Drama, Romance', 'Kaira is a budding cinematographer in search of a perfect life. Her encounter with Jug, an unconventional thinker, helps her gain a new perspective on life. She discovers that happiness is all about finding comfort in life\'s imperfections.', '7.6', '2h 31min', 2016, 'U/A', 'Hindi', 'https://m.media-amazon.com/images/M/MV5BZWQzYWI3ZGMtYzgyYy00OWZkLWEwODYtNGNiMTZhODBkNzUyL2ltYWdlL2ltYWdlXkEyXkFqcGdeQXVyNjY1MTg4Mzc@.jpg', 'https://flick-project.s3.ap-south-1.amazonaws.com/Raazi_(2018)_Hindi_720p_BluRay_1GB_ESub_.mkv', 'https://www.youtube.com/embed/5DkO7ksXY8E'),
('tt5165344', 'Rustom ', 'Akshay Kumar, Ileana D\'Cruz, Esha Gupta, Manoj Bajpayee, Sharad Kelkar, Arjan Bajwa', 'Crime, Drama, Thriller', 'A naval officer returns home to find out about his wife\'s affair. Soon, he surrenders after murdering the lover but as the case unfolds, it starts to reveal his hidden intention.', '7.1', '2h 28min', 2016, 'U/A', 'Hindi', 'https://m.media-amazon.com/images/M/MV5BNWFiMGZlMWUtYzBlNy00ZDlmLTg3YjYtNDBmOWQ4Y2ZjMjlkXkEyXkFqcGdeQXVyODE5NzE3OTE@.jpg', 'https://flick-project.s3.ap-south-1.amazonaws.com/Raazi_(2018)_Hindi_720p_BluRay_1GB_ESub_.mkv', 'https://www.youtube.com/embed/L83qMnbJ198'),
('tt2424988', 'Gabbar is Back ', 'Shruti Haasan, Akshay Kumar, Kareena Kapoor, Chitrangda Singh, Shruti Bapna, Jaideep Ahlawat', 'Action, Crime, Comedy', 'A grief-stricken man takes the law into his own hands when he begins to kidnap and murder corrupt public servants.', '7.1', '2h 8min', 2015, 'U/A', 'Hindi', 'https://m.media-amazon.com/images/M/MV5BMjFhNDQ5NjEtNDE1ZS00YjYwLTgzMjItN2Y2M2RlMjNhZGI4XkEyXkFqcGdeQXVyODE5NzE3OTE@.jpg', 'https://flick-project.s3.ap-south-1.amazonaws.com/Raazi_(2018)_Hindi_720p_BluRay_1GB_ESub_.mkv', 'https://www.youtube.com/embed/T95zFC4Z2pY'),
('tt7218518', 'Pad Man ', 'Akshay Kumar, Radhika Apte, Sonam Kapoor, Jyoti Subhash, Urmila Mahanta, Suneel Sinha', 'Comedy, Drama', 'Upon realizing the extent to which women are affected by their menses, a man sets out to create a sanitary pad machine and to provide inexpensive sanitary pads to the women of rural India.', '8.0', '2h 20min', 2018, 'U/A', 'Hindi', 'https://m.media-amazon.com/images/M/MV5BODViYjQ0YTktMTM5NS00YTVkLWE5MmUtNGY1MzUwOGY0OTg2XkEyXkFqcGdeQXVyNjg5NzkxNTU@.jpg', 'https://flick-project.s3.ap-south-1.amazonaws.com/Raazi_(2018)_Hindi_720p_BluRay_1GB_ESub_.mkv', 'https://www.youtube.com/embed/-K9ujx8vO_A'),
('tt3148502', 'Tamasha ', 'Deepika Padukone, Ranbir Kapoor, Piyush Mishra, Svetlana Tulasi, Javed Sheikh, Naila Grewal', 'Comedy, Drama, Romance', 'Tamasha is about the journey of someone who has lost his edge in trying to follow socially acceptable conventions of society. The film is based on the central theme of abrasion and loss of ...  »', '7.3', '2h 19min', 2015, 'U/A', 'Hindi', 'https://m.media-amazon.com/images/M/MV5BMjA1MTc0Mjc4Ml5BMl5BanBnXkFtZTgwNjU5Nzk4NjE@.jpg', 'https://flick-project.s3.ap-south-1.amazonaws.com/Raazi_(2018)_Hindi_720p_BluRay_1GB_ESub_.mkv', 'https://www.youtube.com/embed/QDsRDWR-yoM'),
('tt2461132', 'Happy New Year ', 'Deepika Padukone, Shah Rukh Khan, Anupam Kher, Anurag Kashyap, Jackie Shroff, Abhishek Bachchan', 'Action, Comedy, Crime', 'A gang of amateur dancers takes part in a dancing competition to avenge their personal vendetta.', '5.0', '3h', 2014, 'U/A', 'Hindi', 'https://m.media-amazon.com/images/M/MV5BMjEwZGQwZWMtNTU4Zi00YWVlLTlhZTYtZjc2MzJmMGVmMDQwXkEyXkFqcGdeQXVyNjQ3ODkxMjE@.jpg', 'https://flick-project.s3.ap-south-1.amazonaws.com/Raazi_(2018)_Hindi_720p_BluRay_1GB_ESub_.mkv', 'https://www.youtube.com/embed/JGHwANkQFrg'),
('tt5935704', 'Padmaavat ', 'Deepika Padukone, Ranveer Singh, Shahid Kapoor, Aditi Rao Hydari, Jim Sarbh, Anupriya Goenka', 'Drama, History, Romance', 'Set in medieval Rajasthan, Queen Padmavati is married to a noble king and they live in a prosperous fortress with their subjects until an ambitious Sultan hears of Padmavati\'s beauty and forms an obsessive love for the Queen of Mewar.', '7.0', '2h 44min', 2018, 'U/A', 'Hindi', 'https://m.media-amazon.com/images/M/MV5BOWZjMjkwM2QtZTJiMy00MmI5LWI2YjEtMmY5NjNiYTE2NTBiXkEyXkFqcGdeQXVyNjQ2MjQ5NzM@.jpg', 'https://flick-project.s3.ap-south-1.amazonaws.com/Raazi_(2018)_Hindi_720p_BluRay_1GB_ESub_.mkv', 'https://www.youtube.com/embed/X_5_BLt76c0'),
('tt3735246', 'Bajirao Mastani ', 'Ranveer Singh, Deepika Padukone, Priyanka Chopra, Tanvi Azmi, Mahesh Manjrekar, Raza Murad', 'Action, Drama, Romance', 'An account of the romance between the Maratha general, Baji Rao I and Mastani, princess of Bundelkhand.', '7.2', '2h 38min', 2015, 'U/A', 'Hindi', 'https://m.media-amazon.com/images/M/MV5BYjMwNDU1MTQtNDBjMS00YTVlLWE4NWYtODBmZDY1YTkzZWI1XkEyXkFqcGdeQXVyNTc5OTMwOTQ@.jpg', 'https://flick-project.s3.ap-south-1.amazonaws.com/Raazi_(2018)_Hindi_720p_BluRay_1GB_ESub_.mkv', 'https://www.youtube.com/embed/eHOc-4D7MjY'),
('tt2178470', 'Yeh Jawaani Hai Deewani ', 'Ranbir Kapoor, Deepika Padukone, Aditya Roy Kapoor, Kalki Koechlin, Kunaal Roy Kapur, Madhuri Dixit', 'Drama, Musical, Romance', 'Kabir and Naina bond during a trekking trip. Before Naina can express herself, Kabir leaves India to pursue his career. They meet again years later, but he still cherishes his dreams more than bonds.', '7.1', '2h 40min', 2013, 'U/A', 'Hindi', 'https://m.media-amazon.com/images/M/MV5BODA4MjM2ODk4OF5BMl5BanBnXkFtZTcwNDgzODk1OQ@@.jpg', 'https://flick-project.s3.ap-south-1.amazonaws.com/Raazi_(2018)_Hindi_720p_BluRay_1GB_ESub_.mkv', 'https://www.youtube.com/embed/Rbp2XUSeUNE'),
('tt1562872', 'Zindagi Na Milegi Dobara', 'Hrithik Roshan, Farhan Akhtar, Abhay Deol, Katrina Kaif, Kalki Koechlin, Ariadna Cabrol', 'Comedy, Drama', 'Three friends decide to turn their fantasy vacation into reality after one of their friends gets engaged.', '8.1', '2h 35min', 2011, 'U/A', 'Hindi', 'https://m.media-amazon.com/images/M/MV5BZGFmMjM5OWMtZTRiNC00ODhlLThlYTItYTcyZDMyYmMyYjFjXkEyXkFqcGdeQXVyNDUzOTQ5MjY@.jpg', 'https://flick-project.s3.ap-south-1.amazonaws.com/Raazi_(2018)_Hindi_720p_BluRay_1GB_ESub_.mkv', 'https://www.youtube.com/embed/FJrpcDgC3zU'),
('tt2372678', '2 States ', 'Arjun Kapoor, Alia Bhatt, Amrita Singh, Revathy, Ronit Roy, Shivkumar Subramaniam', 'Comedy, Romance, Drama', 'This movie chronicles how Chetan met his wife and the difficulties they faced due to their cultural differences.', '6.9', '2h 29min', 2014, 'U/A', 'Hindi', 'https://m.media-amazon.com/images/M/MV5BMTUwNjQ3Nzk5N15BMl5BanBnXkFtZTgwMjI4MTgzMTE@.jpg', 'https://flick-project.s3.ap-south-1.amazonaws.com/Raazi_(2018)_Hindi_720p_BluRay_1GB_ESub_.mkv', 'https://www.youtube.com/embed/CGyAaR2aWcA'),
('tt8108198', 'Andhadhun ', 'Ayushmann Khurrana, Tabu, Radhika Apte, Anil Dhawan, Manav Vij, Ashwini Kalsekar', 'Crime, Drama, Music', 'A series of mysterious events changes the life of a blind pianist, who must now report a crime that he should technically know nothing of.', '8.4', '2h 19min', 2018, 'U/A', 'Hindi', 'https://m.media-amazon.com/images/M/MV5BZWZhMjhhZmYtOTIzOC00MGYzLWI1OGYtM2ZkN2IxNTI4ZWI3XkEyXkFqcGdeQXVyNDAzNDk0MTQ@.jpg', 'https://flick-project.s3.ap-south-1.amazonaws.com/Raazi_(2018)_Hindi_720p_BluRay_1GB_ESub_.mkv', 'https://www.youtube.com/embed/2iVYI99VGaw'),
('tt6452574', 'Sanju ', 'Ranbir Kapoor, Paresh Rawal, Manisha Koirala, Vicky Kaushal, Dia Mirza, Anushka Sharma', 'Biography, Comedy, Drama', 'Sanju is a biopic of the controversial life of actor : his film career, jail sentence and personal life.', '7.8', '2h 35min', 2018, 'U/A', 'Hindi', 'https://m.media-amazon.com/images/M/MV5BMjI3NTM1NzMyNF5BMl5BanBnXkFtZTgwOTE4NTgzNTM@.jpg', 'https://flick-project.s3.ap-south-1.amazonaws.com/Raazi_(2018)_Hindi_720p_BluRay_1GB_ESub_.mkv', 'https://www.youtube.com/embed/1J76wN0TPI4'),
('tt4559006', 'Ae Dil Hai Mushkil', 'Ranbir Kapoor, Aishwarya Rai Bachchan, Anushka Sharma, Fawad Khan, Lisa Haydon, Imran Abbas', 'Drama, Music, Romance', 'This story explores love - the shapes it takes, the ways it changes us and the exhilarating and often terrifying ride it takes us on. It is the journey of two characters, Alizeh and Ayan, as they navigate life, love and heartbreak.', '5.8', '2h 38min', 2016, 'U/A', 'Hindi', 'https://m.media-amazon.com/images/M/MV5BZTM1OTI3ZjItOWE3ZS00OTE2LWE2YjAtZTVlM2Q0MGQ5ZThmXkEyXkFqcGdeQXVyODE5NzE3OTE@.jpg', 'https://flick-project.s3.ap-south-1.amazonaws.com/Raazi_(2018)_Hindi_720p_BluRay_1GB_ESub_.mkv', 'https://www.youtube.com/embed/Z_PODraXg4E'),
('tt3405236', 'Raees ', 'Shah Rukh Khan, Mahira Khan, Nawazuddin Siddiqui', 'Action, Crime, Drama', 'A bootlegger sets out to improve his community as a promising leader but falls in a political trap.', '6.8', '2h 23min', 2017, 'U/A', 'Hindi', 'https://m.media-amazon.com/images/M/MV5BMTc2NTYwMTE1NV5BMl5BanBnXkFtZTgwODQ5MzAwMTI@.jpg', 'https://flick-project.s3.ap-south-1.amazonaws.com/Raazi_(2018)_Hindi_720p_BluRay_1GB_ESub_.mkv', 'https://www.youtube.com/embed/J7_1MU3gDk0'),
('tt5956100', 'Tiger Zinda Hai ', 'Salman Khan, Katrina Kaif, Anupriya Goenka, Paresh Rawal, Nawab Shah, Angad Bedi', 'Action, Adventure, Thriller', 'When a group of Indian and Pakistani nurses are held hostage in Iraq by a terrorist organization, a secret agent is drawn out of hiding to rescue them.', '6.0', '2h 41min', 2017, '\r\n                                U/A', 'Hindi', 'https://m.media-amazon.com/images/M/MV5BYzM0ZTg2OTEtNzI4My00NjBlLWFhYTctY2E4NzdiYzY1YWYwXkEyXkFqcGdeQXVyODE5NzE3OTE@.jpg', 'https://flick-project.s3.ap-south-1.amazonaws.com/Raazi_(2018)_Hindi_720p_BluRay_1GB_ESub_.mkv', 'https://www.youtube.com/embed/ePO5M5DE01I'),
('tt8108202', 'Stree ', 'Rajkummar Rao, Shraddha Kapoor, Pankaj Tripathi, Aparshakti Khurana, Abhishek Banerjee, Ram Kishan Dhakad', 'Comedy, Horror', 'In the small town of Chanderi, the menfolk live in fear of an evil spirit named \'Stree\' who abducts men in the night. Based on the urban legend of \'Nale Ba\' that went viral in Karnataka in the 1990s.', '7.6', '2h 8min', 2018, 'U/A', 'Hindi', 'https://m.media-amazon.com/images/M/MV5BMjk4NGZiMzAtODU1NS00MmQ4LWJiNmQtNWU5ZWU4Y2VmNWI0XkEyXkFqcGdeQXVyODE5NzE3OTE@.jpg', 'https://flick-project.s3.ap-south-1.amazonaws.com/Raazi_(2018)_Hindi_720p_BluRay_1GB_ESub_.mkv', 'https://www.youtube.com/embed/gzeaGcLLl_A'),
('tt4832640', 'Sultan ', 'Salman Khan, Anushka Sharma, Kubbra Sait, Marko Zaror, Hans Marrero, Randeep Hooda', 'Action, Drama, Sports', 'Sultan is a classic underdog tale about a wrestler\'s journey, looking for a comeback by defeating all odds.', '7.0', '2h 50min', 2016, 'U/A', 'Hindi', 'https://m.media-amazon.com/images/M/MV5BNDc0OTU3M2MtMGFhMi00ZGVlLWI4YmItODA1ZTc0OGY0NmJlXkEyXkFqcGdeQXVyNjQ2MjQ5NzM@.jpg', 'https://flick-project.s3.ap-south-1.amazonaws.com/Raazi_(2018)_Hindi_720p_BluRay_1GB_ESub_.mkv', 'https://www.youtube.com/embed/wPxqcq6Byq0'),
('tt5074352', 'Dangal ', 'Aamir Khan, Fatima Sana Shaikh, Sanya Malhotra, Sakshi Tanwar, Aparshakti Khurana, Zaira Wasim', 'Action, Drama, Sports', 'Former wrestler  and his two wrestler daughters struggle towards glory at the Commonwealth Games in the face of societal oppression.', '8.4', '2h 41min', 2016, 'U/A', 'Hindi', 'https://m.media-amazon.com/images/M/MV5BMTQ4MzQzMzM2Nl5BMl5BanBnXkFtZTgwMTQ1NzU3MDI@.jpg', 'https://flick-project.s3.ap-south-1.amazonaws.com/Raazi_(2018)_Hindi_720p_BluRay_1GB_ESub_.mkv', 'https://www.youtube.com/embed/x_7YlGv9u1g'),
('tt4169250', 'M.S. Dhoni: The Untold Story ', 'Sushant Singh Rajput, Kiara Advani, Anupam Kher, Disha Patani, Bhoomika Chawla, Sanjay Dadich', 'Biography, Drama, Sports', 'The untold story of \'s journey from ticket collector to trophy collector - the world-cup-winning captain of the Indian Cricket Team.', '7.7', '3h 4min', 2016, 'U/A', 'Hindi', 'https://m.media-amazon.com/images/M/MV5BZjAzZjZiMmQtMDZmOC00NjVmLTkyNTItOGI2Mzg4NTBhZTA1XkEyXkFqcGdeQXVyODE5NzE3OTE@.jpg', 'https://flick-project.s3.ap-south-1.amazonaws.com/Raazi_(2018)_Hindi_720p_BluRay_1GB_ESub_.mkv', 'https://www.youtube.com/embed/6L6XqWoS8tw'),
('tt4535650', 'Dilwale ', 'Shah Rukh Khan, Kajol, Varun Dhawan, Kriti Sanon, Boman Irani, Varun Sharma', 'Action, Comedy, Drama', 'The siblings of two estranged lovers fall for each other, unaware of the violent past that drove them apart.', '5.2', '2h 38min', 2015, 'U/A', 'Hindi', 'https://m.media-amazon.com/images/M/MV5BMjEyNzAyNjExN15BMl5BanBnXkFtZTgwNjM0MDczNzE@.jpg', 'https://flick-project.s3.ap-south-1.amazonaws.com/Raazi_(2018)_Hindi_720p_BluRay_1GB_ESub_.mkv', 'https://www.youtube.com/embed/AHuOo1DLcRc'),
('tt3678782', 'Badlapur', 'Varun Dhawan, Nawazuddin Siddiqui, Yami Gautam, Huma Qureshi, Neel Tyagi, Vinay Pathak', 'Crime, Action, Drama', 'An innocent man turns brutal when his family gets killed in a bank robbery and one of the perpetrators escapes. 15 years later, he begins his deadly game of vengeance.', '7.4', '2h 14min', 2015, 'U/A', 'Hindi', 'https://m.media-amazon.com/images/M/MV5BMmIzOWY5NjMtOTNhOC00YzQxLTk2OTYtNzFkNTE4NGQzZmFmXkEyXkFqcGdeQXVyODE5NzE3OTE@.jpg', 'https://flick-project.s3.ap-south-1.amazonaws.com/Raazi_(2018)_Hindi_720p_BluRay_1GB_ESub_.mkv', 'https://www.youtube.com/embed/9KEoZanqlOE'),
('tt6277440', 'Badrinath Ki Dulhania ', 'Varun Dhawan, Alia Bhatt, Sahil Vaid, Swanand Kirkire, Rituraj Singh, Yash Sinha', 'Drama, Romance', 'Badrinath Bansal from Jhansi and Vaidehi Trivedi from Kota belong to small towns but have diametrically opposite opinions on everything. This leads to a clash of ideologies, despite both of them recognizing the goodness in each other.', '6.2', '2h 19min', 2017, 'U/A', 'Hindi', 'https://m.media-amazon.com/images/M/MV5BNTQ4MDY5OTE5Ml5BMl5BanBnXkFtZTgwNjA3MjQzMTI@.jpg', 'https://flick-project.s3.ap-south-1.amazonaws.com/Raazi_(2018)_Hindi_720p_BluRay_1GB_ESub_.mkv', 'https://www.youtube.com/embed/ztX-iGlZ_Ug'),
('tt4900716', 'Kapoor & Sons ', 'Sidharth Malhotra, Fawad Khan, Alia Bhatt, Rajat Kapoor, Rishi Kapoor, Anahita Oberoi', 'Drama, Comedy', 'A story revolving around a dysfunctional family of 2 brothers who visit their family and discover that their parents marriage is on the verge of collapse,the family is undergoing a financial crunch and much more as the drama unfolds.', '7.7', '2h 12min', 2016, 'U/A', 'Hindi', 'https://m.media-amazon.com/images/M/MV5BMjE4NDk4MTIwNl5BMl5BanBnXkFtZTgwNDEwODI5NzE@.jpg', 'https://flick-project.s3.ap-south-1.amazonaws.com/Raazi_(2018)_Hindi_720p_BluRay_1GB_ESub_.mkv', 'https://www.youtube.com/embed/s7YYt9_KfsM'),
('tt2980794', 'Highway ', 'Alia Bhatt, Randeep Hooda, Durgesh Kumar, Pradeep Nagar, Saharsh Kumar Shukla, Hemant Mathur', 'Crime, Drama, Romance', 'Right before her wedding, a young woman finds herself abducted and held for ransom. As the initial days pass, she begins to develop a strange bond with her kidnapper.', '7.6', '2h 13min', 2014, '\r\n                                U', 'Hindi', 'https://m.media-amazon.com/images/M/MV5BMjE5NjkyNTczM15BMl5BanBnXkFtZTgwNDg4MzE5MDE@.jpg', 'https://flick-project.s3.ap-south-1.amazonaws.com/Raazi_(2018)_Hindi_720p_BluRay_1GB_ESub_.mkv', 'https://www.youtube.com/embed/LSrDD52bx4A');

-- --------------------------------------------------------

--
-- Table structure for table `mylist`
--

CREATE TABLE `mylist` (
  `MID` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `ID` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mylist`
--

INSERT INTO `mylist` (`MID`, `Email`, `ID`) VALUES
('7524412fd9', '19bca91@vtcbb.edu.in', 'tt6967980'),
('7524412fd9', '19bca91@vtcbb.edu.in', 'tt8504014'),
('7524412fd9', '19bca91@vtcbb.edu.in', 'tt8647400'),
('7524412fd9', '19bca91@vtcbb.edu.in', 'tt3678938'),
('7524412fd9', '19bca91@vtcbb.edu.in', 'tt9052870'),
('7524412fd9', '19bca91@vtcbb.edu.in', 'tt5946128'),
('7524412fd9', '19bca91@vtcbb.edu.in', 'tt8983202'),
('7524412fd9', '19bca91@vtcbb.edu.in', 'tt8291224'),
('7524412fd9', '19bca91@vtcbb.edu.in', 'tt8869978'),
('7524412fd9', '19bca91@vtcbb.edu.in', 'tt8108274'),
('4100382423', 'ohmpatel45@gmail.com', 'tt6967980'),
('4100382423', 'ohmpatel45@gmail.com', 'tt6277440'),
('4100382423', 'ohmpatel45@gmail.com', 'tt2395469'),
('4100382423', 'ohmpatel45@gmail.com', 'tt6452574'),
('4100382423', 'ohmpatel45@gmail.com', 'tt8504014'),
('4100382423', 'ohmpatel45@gmail.com', 'tt8983202'),
('4100382423', 'ohmpatel45@gmail.com', 'tt8291224'),
('4100382423', 'ohmpatel45@gmail.com', 'tt1562872'),
('4100382423', 'ohmpatel45@gmail.com', 'tt8869978'),
('4100382423', 'ohmpatel45@gmail.com', 'tt2178470'),
('4100382423', 'ohmpatel45@gmail.com', 'tt2461132'),
('14b6e1e081', 'ohmpatel45@gmail.com', 'tt8983180'),
('4100382423', 'ohmpatel45@gmail.com', 'tt2372678'),
('4100382423', 'ohmpatel45@gmail.com', 'tt8647400'),
('4100382423', 'ohmpatel45@gmail.com', 'tt3405236'),
('4100382423', 'ohmpatel45@gmail.com', 'tt8130968'),
('28cf649b7c', 'ohmpatel45@gmail.com', 'tt6967980'),
('28cf649b7c', 'ohmpatel45@gmail.com', 'tt2395469'),
('14b6e1e081', 'ohmpatel45@gmail.com', 'tt6967980'),
('e5a1bdc4f8', 'ohmpatel45@gmail.com', 'tt6967980'),
('e5a1bdc4f8', 'ohmpatel45@gmail.com', 'tt6452574'),
('efe6353799', 'ohmpatel45@gmail.com', 'tt3678938'),
('6c8333851c', '19bca91@vtcbb.edu.in', 'tt6967980');

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
(1, 'tt8983202', 'Kabir Singh ', 'https://m.media-amazon.com/images/M/MV5BOTIyMTNkMWQtZDJlYi00OGJmLTliN2MtOGE0YjY4NzFiYTNmXkEyXkFqcGdeQXVyOTAzMTc2MjA@.jpg'),
(2, 'tt5946128', 'Dear Zindigi', 'https://m.media-amazon.com/images/M/MV5BZWQzYWI3ZGMtYzgyYy00OWZkLWEwODYtNGNiMTZhODBkNzUyL2ltYWdlL2ltYWdlXkEyXkFqcGdeQXVyNjY1MTg4Mzc@.jpg'),
(3, 'tt6967980', 'Raazi', 'https://m.media-amazon.com/images/M/MV5BZmVhN2JlYjEtZWFkOS00YzE0LThiNDMtMGI3NDA1MTk2ZDQ2XkEyXkFqcGdeQXVyODE5NzE3OTE@.jpg'),
(4, 'tt2395469', 'Gully Boy', 'https://m.media-amazon.com/images/M/MV5BZDkzMTQ1YTMtMWY4Ny00MzExLTkzYzEtNzZhOTczNzU2NTU1XkEyXkFqcGdeQXVyODY3NjMyMDU@.jpg'),
(5, 'tt2372678', '2 States', 'https://m.media-amazon.com/images/M/MV5BMTUwNjQ3Nzk5N15BMl5BanBnXkFtZTgwMjI4MTgzMTE@.jpg'),
(6, 'tt3678938', 'Humpty Sharma Ki Dulhania', 'https://m.media-amazon.com/images/M/MV5BMjE3MDA4NjMxN15BMl5BanBnXkFtZTgwMzc4NzkxMjE@.jpg'),
(7, 'tt4900716', 'Kapoor & Sons ', 'https://m.media-amazon.com/images/M/MV5BMjE4NDk4MTIwNl5BMl5BanBnXkFtZTgwNDEwODI5NzE@.jpg'),
(8, 'tt2178470', 'Yeh Jawaani Hai Deewani ', 'https://m.media-amazon.com/images/M/MV5BODA4MjM2ODk4OF5BMl5BanBnXkFtZTcwNDgzODk1OQ@@.jpg'),
(9, 'tt3148502', 'Tamasha', 'https://m.media-amazon.com/images/M/MV5BMjA1MTc0Mjc4Ml5BMl5BanBnXkFtZTgwNjU5Nzk4NjE@.jpg'),
(10, 'tt2461132', 'Happy New Year ', 'https://m.media-amazon.com/images/M/MV5BMjEwZGQwZWMtNTU4Zi00YWVlLTlhZTYtZjc2MzJmMGVmMDQwXkEyXkFqcGdeQXVyNjQ3ODkxMjE@.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `UID` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Token` varchar(255) NOT NULL,
  `Status` varchar(255) DEFAULT 'Inactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UID`, `Email`, `Username`, `Password`, `Token`, `Status`) VALUES
('1ac7c2b2f1', '19bca91@vtcbb.edu.in', 'Ohm Patel', 'Patel', '1232217891ccebcc5547e9dab0dc30', 'Inactive'),
('6997e66e99', 'test@gmail.com', 'Patel Patel', 'Patel', '0cc6ba8eb94650b25ba1ddc88e50da', 'Inactive'),
('960e54cbba', 'ohmpatel45@gmail.com', 'Ohm Patel', 'Patel', '1ee5ca443cccf4b4eb4aac6722ffd6', 'Active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`MID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
