-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Gép: localhost
-- Létrehozás ideje: 2020. Nov 09. 19:37
-- Kiszolgáló verziója: 10.3.25-MariaDB-0+deb10u1-log
-- PHP verzió: 7.3.19-1~deb10u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `parker`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `dolgozok`
--

CREATE TABLE `dolgozok` (
  `az` int(11) NOT NULL,
  `nev` varchar(100) COLLATE utf8_hungarian_ci NOT NULL,
  `telepules` varchar(100) COLLATE utf8_hungarian_ci NOT NULL,
  `fizetes` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `dolgozok`
--

INSERT INTO `dolgozok` (`az`, `nev`, `telepules`, `fizetes`) VALUES
(1, 'Piros Béla', 'Szeged', 2860000),
(2, 'Csapos Ferenc', 'Miskolc', 1860000),
(3, 'Nagy János', 'Szolnok', 2850000);

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `dolgozok`
--
ALTER TABLE `dolgozok`
  ADD PRIMARY KEY (`az`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `dolgozok`
--
ALTER TABLE `dolgozok`
  MODIFY `az` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
