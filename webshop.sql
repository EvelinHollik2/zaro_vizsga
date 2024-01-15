-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2024. Jan 15. 12:01
-- Kiszolgáló verziója: 10.4.28-MariaDB
-- PHP verzió: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `webshop`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `cica_termekek`
--

CREATE TABLE `cica_termekek` (
  `ctermekid` int(10) UNSIGNED NOT NULL,
  `ctermeknev` varchar(100) NOT NULL,
  `ctermekdarab` varchar(100) NOT NULL,
  `ctermekar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_hungarian_ci;

--
-- A tábla adatainak kiíratása `cica_termekek`
--

INSERT INTO `cica_termekek` (`ctermekid`, `ctermeknev`, `ctermekdarab`, `ctermekar`) VALUES
(1, 'cica kék szoknya', '10', '10000'),
(2, 'mikulás jelmez', '10', '12000'),
(3, 'pizzas macska pulover', '10', '5000'),
(4, 'macska kendo', '10', '2000'),
(5, 'macska hám', '10', '5000'),
(6, 'fekete sárga macska pulóver', '10', '5000'),
(7, 'lila macska pulóver', '10', '5000'),
(8, 'barna macska pulóver', '10', '5000'),
(9, 'rózsaszín macska pulóver', '10', '5000'),
(10, 'kék rózsaszín macska pulóver', '10', '5000');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `kutya_termekek`
--

CREATE TABLE `kutya_termekek` (
  `ktermekid` int(10) UNSIGNED NOT NULL,
  `ktermeknev` varchar(100) NOT NULL,
  `ktermekdarab` varchar(100) NOT NULL,
  `ktermekar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_hungarian_ci;

--
-- A tábla adatainak kiíratása `kutya_termekek`
--

INSERT INTO `kutya_termekek` (`ktermekid`, `ktermeknev`, `ktermekdarab`, `ktermekar`) VALUES
(1, 'Best friends-es polo', '10', '5000'),
(2, 'nagytestű kutya hám barna', '10', '16000'),
(3, 'kék kutya kabát', '10', '15000'),
(6, 'barna kutya kabat', '10', '11000'),
(7, 'piros kutya kabát', '10', '13000'),
(8, 'világos barna kutya kabát', '10', '14000'),
(9, 'zöld kutya kabát', '10', '10000'),
(10, 'szürke-kék kutya kabát', '10', '15000'),
(11, 'sötét kék kabat', '10', '12000'),
(12, 'virágos tavaszi kutya kabát', '10', '15000'),
(13, 'bézs kutya kabát', '10', '13000'),
(14, 'karacsonyi kutya pulover', '10', '16000'),
(15, 'kistestű kutya hám', '10', '5000'),
(16, 'kistestű kutya hám szürke', '10', '6000'),
(17, 'kistestü kutya hám rózsaszín', '10', '7000'),
(18, 'kistestű kutya hám barna', '10', '4000'),
(19, 'kistestű kutya hám piros', '10', '5000'),
(20, 'nagytestű kutya hám piros', '10', '10000'),
(21, 'nagytestű kutya hám terepmintás', '10', '10000'),
(22, 'kutya szoknya feher', '10', '5000'),
(23, 'kutya pulover kacsas', '10', '5000'),
(24, 'kutya szoknya fekete es piros', '10', '5000'),
(25, 'piros kutya pulóver', '10', '5000');

-- --------------------------------------------------------

--
-- A nézet helyettes szerkezete `macskak`
-- (Lásd alább az aktuális nézetet)
--
CREATE TABLE `macskak` (
`termekid` int(10) unsigned
,`termeknev` varchar(100)
,`termekdb` varchar(100)
,`termekar` varchar(100)
,`fajta` varchar(6)
);

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `rendeles`
--

CREATE TABLE `rendeles` (
  `userid` int(10) UNSIGNED NOT NULL,
  `ctermekid` int(10) UNSIGNED NOT NULL,
  `ktermekid` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_hungarian_ci;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `termekek`
--

CREATE TABLE `termekek` (
  `termekid` int(10) UNSIGNED NOT NULL,
  `termeknev` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_hungarian_ci NOT NULL,
  `termekdb` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_hungarian_ci NOT NULL,
  `termekar` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_hungarian_ci NOT NULL,
  `fajta` varchar(6) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- A tábla adatainak kiíratása `termekek`
--

INSERT INTO `termekek` (`termekid`, `termeknev`, `termekdb`, `termekar`, `fajta`) VALUES
(1, 'cica kék szoknya', '10', '10000', 'macska'),
(2, 'mikulás jelmez', '10', '12000', 'macska'),
(3, 'pizzas macska pulover', '10', '5000', 'macska'),
(4, 'macska kendo', '10', '2000', 'macska'),
(5, 'macska hám', '10', '5000', 'macska'),
(6, 'fekete sárga macska pulóver', '10', '5000', 'macska'),
(7, 'lila macska pulóver', '10', '5000', 'macska'),
(8, 'barna macska pulóver', '10', '5000', 'macska'),
(9, 'rózsaszín macska pulóver', '10', '5000', 'macska'),
(10, 'kék rózsaszín macska pulóver', '10', '5000', 'macska'),
(11, 'Best friends-es polo', '10', '5000', 'kutya'),
(12, 'nagytestű kutya hám barna', '10', '16000', 'kutya'),
(13, 'kék kutya kabát', '10', '15000', 'kutya'),
(14, 'barna kutya kabat', '10', '11000', 'kutya'),
(15, 'piros kutya kabát', '10', '13000', 'kutya'),
(16, 'világos barna kutya kabát', '10', '14000', 'kutya'),
(17, 'zöld kutya kabát', '10', '10000', 'kutya'),
(18, 'szürke-kék kutya kabát', '10', '15000', 'kutya'),
(19, 'sötét kék kabat', '10', '12000', 'kutya'),
(20, 'virágos tavaszi kutya kabát', '10', '15000', 'kutya'),
(21, 'bézs kutya kabát', '10', '13000', 'kutya'),
(22, 'karacsonyi kutya pulover', '10', '16000', 'kutya'),
(23, 'kistestű kutya hám', '10', '5000', 'kutya'),
(24, 'kistestű kutya hám szürke', '10', '6000', 'kutya'),
(25, 'kistestü kutya hám rózsaszín', '10', '7000', 'kutya'),
(26, 'kistestű kutya hám barna', '10', '4000', 'kutya'),
(27, 'kistestű kutya hám piros', '10', '5000', 'kutya'),
(28, 'nagytestű kutya hám piros', '10', '10000', 'kutya'),
(29, 'nagytestű kutya hám terepmintás', '10', '10000', 'kutya'),
(30, 'kutya szoknya feher', '10', '5000', 'kutya'),
(31, 'kutya pulover kacsas', '10', '5000', 'kutya'),
(32, 'kutya szoknya fekete es piros', '10', '5000', 'kutya'),
(33, 'piros kutya pulóver', '10', '5000', 'kutya');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `users`
--

CREATE TABLE `users` (
  `userid` int(10) UNSIGNED NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_hungarian_ci;

--
-- A tábla adatainak kiíratása `users`
--

INSERT INTO `users` (`userid`, `username`, `email`, `password`) VALUES
(1, 'asd', 'asd@gmail.com', 'asd'),
(4, 'qwe', 'qwe@gmail.com', 'qwe');

-- --------------------------------------------------------

--
-- Nézet szerkezete `macskak`
--
DROP TABLE IF EXISTS `macskak`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `macskak`  AS SELECT `termekek`.`termekid` AS `termekid`, `termekek`.`termeknev` AS `termeknev`, `termekek`.`termekdb` AS `termekdb`, `termekek`.`termekar` AS `termekar`, `termekek`.`fajta` AS `fajta` FROM `termekek` WHERE `termekek`.`fajta` = 'macska' ;

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `cica_termekek`
--
ALTER TABLE `cica_termekek`
  ADD PRIMARY KEY (`ctermekid`);

--
-- A tábla indexei `kutya_termekek`
--
ALTER TABLE `kutya_termekek`
  ADD PRIMARY KEY (`ktermekid`);

--
-- A tábla indexei `rendeles`
--
ALTER TABLE `rendeles`
  ADD UNIQUE KEY `userid` (`userid`),
  ADD UNIQUE KEY `termekid` (`ctermekid`),
  ADD UNIQUE KEY `ktermekid` (`ktermekid`);

--
-- A tábla indexei `termekek`
--
ALTER TABLE `termekek`
  ADD PRIMARY KEY (`termekid`);

--
-- A tábla indexei `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `cica_termekek`
--
ALTER TABLE `cica_termekek`
  MODIFY `ctermekid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT a táblához `kutya_termekek`
--
ALTER TABLE `kutya_termekek`
  MODIFY `ktermekid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT a táblához `termekek`
--
ALTER TABLE `termekek`
  MODIFY `termekid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT a táblához `users`
--
ALTER TABLE `users`
  MODIFY `userid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Megkötések a kiírt táblákhoz
--

--
-- Megkötések a táblához `rendeles`
--
ALTER TABLE `rendeles`
  ADD CONSTRAINT `rendeles_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `users` (`userid`),
  ADD CONSTRAINT `rendeles_ibfk_2` FOREIGN KEY (`ctermekid`) REFERENCES `cica_termekek` (`ctermekid`),
  ADD CONSTRAINT `rendeles_ibfk_3` FOREIGN KEY (`ktermekid`) REFERENCES `kutya_termekek` (`ktermekid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
