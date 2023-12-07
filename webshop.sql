-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2023. Dec 07. 11:21
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
(1, 'cica kék szoknya', '10', '10000');

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
(1, 'Best friends-es polo', '10', '5000');

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
  `termeknev` varchar(100) NOT NULL,
  `termekdarab` varchar(100) NOT NULL,
  `termekar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_hungarian_ci;

--
-- A tábla adatainak kiíratása `termekek`
--

INSERT INTO `termekek` (`termekid`, `termeknev`, `termekdarab`, `termekar`) VALUES
(1, 'Best friends-es polo', '10', '5000'),
(2, 'cica kék szoknya', '10', '10000'),
(3, 'mikulás jelmez', '10', '12000'),
(4, 'nagytestu kutyahám', '10', '16000'),
(5, 'kék kutya kabát', '10', '15000'),
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
(20, 'nagytestű kutya hám barna', '10', '10000'),
(21, 'nagytestű kutya hám piros', '10', '11000'),
(22, 'nagytestű kutya hám terepmintás', '10', '10000'),
(23, 'kutya pulcsi lila', '10', '5000'),
(24, 'kutya pulcsi piros', '10', '4000'),
(25, 'kutya pulover sarga kek', '10', '3500'),
(26, 'kötött kutya pulover', '10', '4000'),
(27, 'kutya szoknya feher ', '10', '5000'),
(28, 'kutya pulover kacsas', '10', '3000'),
(29, 'pizzas macska pulover', '10', '5000'),
(30, 'macska kendo', '10', '2000'),
(31, 'kutya szoknya fekete es piros', '10', '6000');

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
(2, 'qwe@gmail.com', 'qwe', 'qwe');

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
  MODIFY `ctermekid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT a táblához `kutya_termekek`
--
ALTER TABLE `kutya_termekek`
  MODIFY `ktermekid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT a táblához `termekek`
--
ALTER TABLE `termekek`
  MODIFY `termekid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT a táblához `users`
--
ALTER TABLE `users`
  MODIFY `userid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
