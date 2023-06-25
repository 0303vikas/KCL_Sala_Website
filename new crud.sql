-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 19, 2020 at 09:13 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `accommodation_data`
--

CREATE TABLE `accommodation_data` (
  `id` int(11) NOT NULL,
  `information` longtext NOT NULL,
  `comments` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `accommodation_data`
--

INSERT INTO `accommodation_data` (`id`, `information`, `comments`) VALUES
(1, '  Accommodation', 'accommodation_data'),
(2, 'Pii Hotel is one of the most cosy and comfortable place to live in Salo. One of the biggest reason to live in Pii Hotel is that it is quite close to the Salo IoT Campus (around 7-10mins) of walking. It is also near to the city center where you can buy your daily needs. I personally suggest to take this place because I\'ve myself lived here for a long time and the room service is very good. Your room will be cleaned once a week and you would also be able to take use of many services provided by the Pii team. If you are taking one bed room the cost is around 540 euro per month. If you are staying in a two bed room then the cost will be 320 euros per person. And if you are taking 4 bed room the cost will be around 250 euros per person.', 'pii hotel'),
(3, 'Hotelli is another option for your stay because it is located at the city center which is around 100 - 200m far from the the plaza. In Hotelli there is a bar where you can enjoy in your free time. The cost for Hotelli is 210 euros per person for one month. From Hotelli the bus station is also not so far which is also one of the biggest reason to think about choosing Hotelli. My personal experience with hotelli is not so good because the size of the room is not so big and it is not comfortable as compared to the other hotels in Salo. The Salo IoT campus is approximate 1.5km far from Hotelli.', 'hotelli'),
(4, 'Ella appartment is also good choice to select it gives you a new experience of a home because of its big rooms. The view from Ella appartment is also good. There is a K-Market near to the ella appartment from where you can buy your groccery. It is on the other side of the river-bank area. The Salo IoT campus is around 2.7 km, so if you a bike it will take 10-15mins and by walking 25-30 mins to the Ella Appartments. You will get a fully furnished home. My personal experience for ella appartments is a very good place to live and you will get a proper home vibe living there. The only drawback for not living in ella appartment is that it\'s quite far from the Salo IoT Campus, but if you have a car or a bike then there won\'t be any problem living in ella appartments.', 'ella appartments'),
(5, 'Located in a former TV and radio factory in Salo, this hotel is part of a refurbished event and conference center. It offers self-catering accommodation, free parking and free WiFi. At no extra cost you also have access to a gym, group training and a shared sauna in the same building. All rooms have armchairs, tea / coffee makers and flat-screen TVs with cable channels. Shower and hairdryer are provided in the private bathroom. A lunch restaurant and café are located in the same building as the Salora Hotel. On site you will also find indoor playground, theater, bowling alley, electronics museum and escape room Escape Room. Discount is offered on all of these. Hotel Salora is just a 10-minute walk from Salo\'s train and bus station. The Salo and Wiurila golf courses are a 5-minute drive away. Turku Airport is 55 km away.', 'hotel salora'),
(6, 'The comfortable and modern Scandic Salo is located on Salo river, in the heart of the idyllic town of Salo. It offers air-conditioned rooms with a flat-screen TV and free internet up to 1 GB. Scandic Salo has cozy and well-equipped rooms with a desk and a private bathroom with shower and hairdryer. Buffet breakfast is served daily and you can order a breakfast bag from reception at any time. Nearby Salon Seurahuone serves food and the Wanha Mestari restaurant offers refreshing drinks. Couples particularly like the area - they have rated it 8.9 for couples trips. Scandic Salo has been welcoming Booking.com\'s guests since June 8, 2009. Hotel Chain: Scandic The most popular facilities Pets accepted Parking Bar', 'hotel scandic'),
(19, ' Pii Hotel!', 'pii hotel heading'),
(20, 'Hotelli', 'hotelli heading'),
(21, 'Ella Appartment', 'ella heading'),
(22, 'Hotel Salora', 'hotel salora heading'),
(23, 'Hotel Scandic', 'hotel scandic heading');

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `is_admin` tinyint(1) DEFAULT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id`, `name`, `location`, `email`, `is_admin`, `password`) VALUES
(29, 'Dhruv Verma', 'Pii Hotel', 'dhruverma5923@gmai.com', 1, '81dc9bdb52d04dc20036dbd8313ed055'),
(30, 'gjb', 'hjgbe', 'hkbde@gmail.com', 0, '821fa74b50ba3f7cba1e6c53e8fa6845');

-- --------------------------------------------------------

--
-- Table structure for table `food_and_bar_data`
--

CREATE TABLE `food_and_bar_data` (
  `id` int(11) NOT NULL,
  `information` longtext NOT NULL,
  `comments` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `food_and_bar_data`
--

INSERT INTO `food_and_bar_data` (`id`, `information`, `comments`) VALUES
(1, 'Market', 'market_data'),
(2, 'BAR/CLUB/PUB', 'bar/club/pub_bank'),
(3, 'PIZZA', 'pizza_data'),
(4, 'BURGER', 'burger_data'),
(5, 'CAFE', 'cafe_data'),
(6, 'RESTAURANTS', 'restaurants_data');

-- --------------------------------------------------------

--
-- Table structure for table `homepage_data`
--

CREATE TABLE `homepage_data` (
  `id` int(11) NOT NULL,
  `information` longtext NOT NULL,
  `comments` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `homepage_data`
--

INSERT INTO `homepage_data` (`id`, `information`, `comments`) VALUES
(1, ' Welcome to Salo!', 'Starting heading (first Main)'),
(2, '  Salo, Finland', 'Starting heading (second Main)'),
(4, '   Salo is located in the province of Western Finland and is part of the Southwest Finland region. Salo is located between the capital Helsinki and the provincial capital Turku, making it a busy small city. The short distance from these bigger cities keeps the Salo region and its business life growing.\r\n\r\nThe Teijo National Park offers activities for the whole family. For golfers, there are three international-standard golf courses with the longest playing seasons in Finland. You can enjoy exercise and nature all year round - there´s down- hill skiing, hiking, canoeing, swimming, riding or even gravity racing.\r\n\r\nManors, mills and museums tell you about the region´s role as an important cultural centre point. At the art museum Veturitalli you can enjoy art, and at the Salo electronics museum you can see old TVs and radios, and learn more about the his- tory of TV and radio manufacturing in Finland, in Salo in particular. The guided tours introduce you to many unique attractions.\r\n\r\nThe popular evening markets on summer Thursdays from June to the end of August offer Finnish music performances, trade stalls, pancakes, second-hand goods and a flea market for children´s clothing.\r\n\r\nShoppers can enjoy individual and knowledge- able service in the many boutiques and shopping centres. Distances are short and parking is generally free of charge.\r\n\r\nAs accommodation, you can choose a hotel in the city centre, idyllic farm accommodation, a cottage or a \"million star accommodation\" under the sky!', 'Main info Paragraph');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `source` longtext NOT NULL,
  `comments` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `source`, `comments`) VALUES
(1, 'https://live.staticflickr.com/5213/5396915544_7cc661a4fe_b.jpg', 'River Boats'),
(2, 'https://upload.wikimedia.org/wikipedia/commons/c/cf/Matildanj%C3%A4rvi_Mathildedal_Perni%C3%B6_Salo_Finland_January_2015.jpg', 'Winter - Salo'),
(3, 'https://live.staticflickr.com/5098/5396912042_24fd70bd32_k.jpg', 'Night - Salo'),
(4, 'https://upload.wikimedia.org/wikipedia/commons/thumb/5/5b/Veturitalli.jpg/1280px-Veturitalli.jpg', 'Grassland - Salo'),
(5, 'https://www.tuas.fi/media-en/filer_public_thumbnails/filer_public/de/c2/dec26bea-255a-4834-9b62-5d956272656f/salo_iot_campus_1.jpg__678x300_q85_crop_subsampling-2_upscale.jpg', 'Salo IoT Campus'),
(6, 'https://im.mtv.fi/image/5228782/landscape16_9/1024/576/c7d2ed7643bf70b092e9948f29a0bde/It/salo-linja-autoasema.jpg', 'Salo Bus Station'),
(7, 'https://i.pinimg.com/564x/6c/72/e2/6c72e24b5367b9cdc18f28aa4325c319.jpg', 'Salo Train Station'),
(8, 'https://img.yle.fi/uutiset/kotimaa/article9569544.ece/ALTERNATES/w580/LKS%2018.4.2017%20taksi%20mielenosoitus%20helsinki', 'Salo Taxi Stand'),
(9, './images/pii.jpeg\"', 'Pii Hotel'),
(11, './images/hotel.jpg', 'Hotelli'),
(12, './images/ella hotel.jpg', 'Ella Hotel'),
(13, './images/hotel salora.jpg', 'Hotel Salora'),
(14, './images/scandic hotel.jpg', 'Hotel Scandic'),
(15, './images/opbank.jpg', 'OP Bank'),
(16, './images/danksebank.png', 'Dankse Bank'),
(17, './images/nordea.jpg', 'Nordea Bank'),
(18, './images/police.jpg', 'Police'),
(19, './images/Smarket.jpg', 'S Market'),
(20, './images/Kmarket.jpg', 'K Market'),
(21, './images/Rkioski.jpg', 'R Kioski'),
(22, './images/Lidl.jpg', 'Lidl'),
(23, './images/pub1.jpg', 'Pub1'),
(24, './images/pub2.png', 'Pub2'),
(25, './images/bar1.jpg', 'Bar1'),
(26, './images/club1.jpg', 'Club1'),
(27, './images/pub3.jpg', 'Pub3');

-- --------------------------------------------------------

--
-- Table structure for table `official_places_data`
--

CREATE TABLE `official_places_data` (
  `id` int(11) NOT NULL,
  `information` longtext NOT NULL,
  `comments` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `official_places_data`
--

INSERT INTO `official_places_data` (`id`, `information`, `comments`) VALUES
(1, 'Official Places', 'official_places_data'),
(2, 'Bank', 'official_places_bank'),
(3, 'OP bank is one of the most famous bank were people are quite intrested in creating an account, this is because they provide good schemes to their customer and you can find OP Bank office almost everywhere. People do suggest to create an account in this bank. They also have an app which makes transactions, and keeping a good record that where you have used your OP card. OP Bank has it\'s head office in Helsinki.There are more exciting features that is been provided by the OP Bank. Until you are 26 years old you are not recquired to pay extra for the app . You can also contact them for any other futher querry regarding your bank account on this number- 0303 0303 this is a Private and coperate customer number where they can help you.', 'op-bank'),
(4, 'Danske Bank is also another good option to choose.Creating a bank account in Danske Bank offers you many benefits levels which can make your business or your investment a good option to grow. You can find Danske Bank all over Finland and they even provide you with some international investment if you are intrested. You can contact Danske Bank on this number - 0200 2590 This is the customer service number where you can get more detailed information about their schemes.', 'danks bank'),
(5, 'When you need our expert advice, Nordea Customer Service is there to serve you in Finnish every day of the year round the clock. You can reach our advisers also in English on banking days 8.00 -18.00. If needed, we will also help you use our digital services – we are only one tap away in mobile bank! Find the best way to do your banking. We offer you varied and reliable banking services. You can pay your bills and purchases with your phone anytime, anywhere.', 'nordea bank'),
(6, 'Police', 'police-heading'),
(7, 'You can take care of the following through the police: - residence permit application, visa and extension of visa - registering a permanent residence permit of an EU citizen - passport and identity card - driving license - lost and found items - offences committed against you Salo police station contact information: Address: Kirkkokatu 1-3, PO Box 38, 24101 SALO 029 544 0501\r\n\r\nThe Register Office is in charge of registering in Finland. Salo Register Office contact information: Kirkkokatu 1-3 B, 3rd floor, PO Box 118, 24101 SALO Open: Mon - Fri 9:00 - 16:15 029 553 9441 info.​salo​@​maistraatti.​fi​', 'Police');

-- --------------------------------------------------------

--
-- Table structure for table `other_places_data`
--

CREATE TABLE `other_places_data` (
  `id` int(11) NOT NULL,
  `information` longtext NOT NULL,
  `comments` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `other_places_data`
--

INSERT INTO `other_places_data` (`id`, `information`, `comments`) VALUES
(1, 'GADGETS AND VIDEOGAMES', 'gadgets_data'),
(2, 'CLOTHES', 'clothes_bank'),
(3, 'SPORTS AND GYM', 'sportsandgym_bank'),
(4, 'SHOES', 'shoes_data');

-- --------------------------------------------------------

--
-- Table structure for table `travel_guide_data`
--

CREATE TABLE `travel_guide_data` (
  `id` int(11) NOT NULL,
  `information` longtext NOT NULL,
  `comments` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `travel_guide_data`
--

INSERT INTO `travel_guide_data` (`id`, `information`, `comments`) VALUES
(1, ' Guide for Salo', 'Starting heading (first Main)'),
(2, 'Salo IoT Campus', 'first_title_heading'),
(3, 'Check out the location of the Salo IoT Campus and how it connects to the rest of Salo!', 'first_title_info'),
(4, 'Bus Guide', 'second_title_heading'),
(5, 'Travel your next short distance trip in a comfortable bus!', 'second_title_info'),
(6, 'Train Guide', 'third_title_heading'),
(7, 'Arrive at your destination quickly by travelling in a fast and pleasant train!', 'third_title_info'),
(8, 'Taxi Guide', 'fourth_title_heading'),
(9, 'Plan out a leisure trip by booking a taxi!', 'fourth_title_info');

-- --------------------------------------------------------

--
-- Table structure for table `travel_guide_data_part1_data`
--

CREATE TABLE `travel_guide_data_part1_data` (
  `id` int(11) NOT NULL,
  `information` longtext NOT NULL,
  `comments` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `travel_guide_data_part1_data`
--

INSERT INTO `travel_guide_data_part1_data` (`id`, `information`, `comments`) VALUES
(1, 'The <span id=\'salo-span\'>Salo IoT Campus</span> is a community of businesses, researchers and educational institutions building smarter technologies for the future. Under the roof of the campus are both IoT industry leaders and the best service companies in their field. It is located near the well-known \'Pii Hotel\'. The proper address is Joensuunkatu-7, 24100 Salo.', 'Para1'),
(2, 'Salo IoT campus acts like a city-center as every needed places are approximately at the same distance from the building.', 'Para2'),
(3, 'For instance, the train station is approximately 1500m away from the building itself whereas the bus station is 1200m.', 'Para3'),
(4, 'For more information, visit this <a href=\"https://www.saloiotcampus.fi/en/\" class=\"salo-campus-link\" target=\"_blank\"> link</a>.', 'Para4'),
(5, 'When you are travelling to Salo from Helsinki, you can either board a bus from the central main station or you can take a train from the railway station.', 'Para5');

-- --------------------------------------------------------

--
-- Table structure for table `travel_guide_data_part2_data`
--

CREATE TABLE `travel_guide_data_part2_data` (
  `id` int(11) NOT NULL,
  `information` longtext NOT NULL,
  `comments` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `travel_guide_data_part2_data`
--

INSERT INTO `travel_guide_data_part2_data` (`id`, `information`, `comments`) VALUES
(1, 'The <span id=\"bus-span\">bus station </span>is located at about 1.2 Km from the Salo IoT Campus. The waiting time between two consecutive buses for the same place is mostly an hour, so you don\'t have to worry about not getting another bus if you missed the first one.  The arrival and departure time are also properly scheduled so you have to be there atlest 10 minutes before or you will miss the bus.', 'para1'),
(2, 'The time for bus to travel between Salo and Turku is about 55 minutes whereas for Salo and Helsinki is about 2 hours. But almost all the buses come with free Wi-Fi, so you are guaranteed a comfortable journey.', 'para2'),
(3, 'You can purchase the ticket either while entering the bus or online with this <a href=\"https://www.matkahuolto.fi/en\" class=\"bus-link\" target=\"_blank\"> link </a>.', 'para3'),
(4, 'Bus Station (Linja-Autoasema)', 'main Heading');

-- --------------------------------------------------------

--
-- Table structure for table `travel_guide_data_part3_data`
--

CREATE TABLE `travel_guide_data_part3_data` (
  `id` int(11) NOT NULL,
  `information` longtext NOT NULL,
  `comments` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `travel_guide_data_part3_data`
--

INSERT INTO `travel_guide_data_part3_data` (`id`, `information`, `comments`) VALUES
(1, 'The <span id=\"train-span\">train station </span>is located at about 1.5 Km from the Salo IoT Campus. The waiting time between two consecutive trains for the same place is mostly an hour, so you don\'t have to worry about not getting another one if you missed the first one.  The arrival and departure time are also properly scheduled so you have to be there atlest 10 minutes before or you will miss the train. ', 'para1'),
(2, 'The time for train to travel between Salo and Turku is about 35 minutes whereas for Salo and Helsinki is about 90 minutes. But all the trains come with free Wi-Fi, so you are guaranteed a comfortable journey.', 'para2'),
(3, 'You can purchase the ticket either in the train station (not is Salo) or online with this<a href=\"https://www.vr.fi/cs/vr/en/salo_en\" class=\"train-link\" target=\"_blank\"> link</a>.', 'para3'),
(4, 'Train Station', 'main Heading');

-- --------------------------------------------------------

--
-- Table structure for table `travel_guide_data_part4_data`
--

CREATE TABLE `travel_guide_data_part4_data` (
  `id` int(11) NOT NULL,
  `information` longtext NOT NULL,
  `comments` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `travel_guide_data_part4_data`
--

INSERT INTO `travel_guide_data_part4_data` (`id`, `information`, `comments`) VALUES
(0, 'Taxi Guide', 'main Heading'),
(1, 'Taxi in Salo can be booked by calling <span id = \"taxi-span\" >0210041 </span> or download the taxi app on your mobile phones. The waiting time for taxi within Salo is usually 15 minutes, so you don\'t have to wait that much. Since you ordered the taxi, therefore you don\'t have to worry about any schedule for travelling.', 'para1'),
(2, 'The time for taxi(moving at normal speed) to travel between Salo and Turku is about 35-40 minutes whereas for Salo and Helsinki is about 100 minutes. But you are guaranteed a comfortable journey.', 'para2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accommodation_data`
--
ALTER TABLE `accommodation_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `food_and_bar_data`
--
ALTER TABLE `food_and_bar_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `homepage_data`
--
ALTER TABLE `homepage_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `official_places_data`
--
ALTER TABLE `official_places_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `other_places_data`
--
ALTER TABLE `other_places_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `travel_guide_data`
--
ALTER TABLE `travel_guide_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `travel_guide_data_part1_data`
--
ALTER TABLE `travel_guide_data_part1_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `travel_guide_data_part2_data`
--
ALTER TABLE `travel_guide_data_part2_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `travel_guide_data_part3_data`
--
ALTER TABLE `travel_guide_data_part3_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `travel_guide_data_part4_data`
--
ALTER TABLE `travel_guide_data_part4_data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accommodation_data`
--
ALTER TABLE `accommodation_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `food_and_bar_data`
--
ALTER TABLE `food_and_bar_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `homepage_data`
--
ALTER TABLE `homepage_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `official_places_data`
--
ALTER TABLE `official_places_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `other_places_data`
--
ALTER TABLE `other_places_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `travel_guide_data`
--
ALTER TABLE `travel_guide_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `travel_guide_data_part1_data`
--
ALTER TABLE `travel_guide_data_part1_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `travel_guide_data_part2_data`
--
ALTER TABLE `travel_guide_data_part2_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `travel_guide_data_part3_data`
--
ALTER TABLE `travel_guide_data_part3_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
