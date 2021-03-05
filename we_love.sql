-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2021. Már 05. 13:32
-- Kiszolgáló verziója: 10.4.17-MariaDB
-- PHP verzió: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `we_love`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `tasks`
--

CREATE TABLE `tasks` (
  `id` int(255) NOT NULL,
  `cim` varchar(255) NOT NULL,
  `leiras` varchar(255) NOT NULL,
  `statusz` varchar(255) NOT NULL,
  `knev` varchar(255) NOT NULL,
  `kemail` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- A tábla adatainak kiíratása `tasks`
--

INSERT INTO `tasks` (`id`, `cim`, `leiras`, `statusz`, `knev`, `kemail`) VALUES
(2, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'Phasellus porttitor molestie erat. Mauris vulputate at arcu at elementum. Etiam faucibus varius porta. Donec in magna in lorem congue varius vel in elit. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Sed sit', 'Fejlesztésre vár', 'Test Owner', 'test@test.io'),
(3, 'Pellentesque bibendum vehicula sapien, a molestie velit pharetra nec.', 'Donec eget neque nec eros interdum porta. Quisque quis tempor massa, et pellentesque dolor. Phasellus accumsan velit ut porttitor hendrerit. Donec sodales diam id vehicula aliquam. Praesent ut lorem quis neque aliquet tincidunt et a eros. Pellentesque non', 'Folyamatban', 'Test Owner', 'test@test.io'),
(4, 'Vestibulum sapien metus, feugiat non nunc sed, laoreet luctus dolor.', 'Vestibulum nibh urna, rutrum sit amet sem ut, rhoncus tristique lectus. Etiam laoreet efficitur tincidunt. In hac habitasse platea dictumst. Integer fringilla mi quam. Cras enim orci, pharetra eu blandit id, tincidunt at justo. Nunc sed leo a sapien laore', 'Kész', 'Test Owner', 'test@test.io');

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
