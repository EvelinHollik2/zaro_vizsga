-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2024. Jan 23. 09:13
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
-- Tábla szerkezet ehhez a táblához `rendeles`
--

CREATE TABLE `rendeles` (
  `userid` int(10) UNSIGNED NOT NULL,
  `termekid` int(10) UNSIGNED NOT NULL,
  `datum` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `darab` int(10) NOT NULL,
  `ar` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_hungarian_ci;

--
-- A tábla adatainak kiíratása `rendeles`
--

INSERT INTO `rendeles` (`userid`, `termekid`, `datum`, `darab`, `ar`) VALUES
(1, 26, '2024-01-18 07:09:20', 0, 0);

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
(1, 'Cica szoknya', '10', '2300', 'macska'),
(2, 'Mikulás jelmez', '10', '2500', 'macska'),
(3, 'Pizzás macska pulóver', '10', '3500', 'macska'),
(4, 'Macska hám', '10', '2000', 'macska'),
(5, 'Macska hám', '10', '2000', 'macska'),
(6, 'Fekete-sárga macska pulóver', '10', '3500', 'macska'),
(7, 'Lila macska pulóver', '10', '3500', 'macska'),
(8, 'Barna macska pulóver', '10', '3500', 'macska'),
(9, 'Rózsaszín macska pulóver', '10', '3500', 'macska'),
(10, 'Kék-rózsaszín macska pulóver', '10', '3500', 'macska'),
(11, 'Best friends-es póló', '10', '2000', 'kutya'),
(12, 'Nagytestű kutya barna hám', '10', '2000', 'kutya'),
(13, 'Kék kutya kabát', '10', '3900', 'kutya'),
(14, 'Barna kutya kabát', '10', '3900', 'kutya'),
(15, 'Piros kutya kabát', '10', '3900', 'kutya'),
(16, 'Világos barna kutya kabát', '10', '3900', 'kutya'),
(17, 'Zöld kutya kabát', '10', '3900', 'kutya'),
(18, 'Szürke-kék kutya kabát', '10', '3900', 'kutya'),
(19, 'Sötét kék kabát', '10', '3900', 'kutya'),
(20, 'Virágos tavaszi kutya kabát', '10', '3900', 'kutya'),
(21, 'Bézs kutya kabát', '10', '3900', 'kutya'),
(22, 'Karácsonyi kutya pulóver', '10', '3900', 'kutya'),
(23, 'Kistestű kutya hám', '10', '2000', 'kutya'),
(24, 'Kistestű kutya hám szürke', '10', '2000', 'kutya'),
(25, 'Kistestü kutya hám rózsaszín', '10', '2000', 'kutya'),
(26, 'Kistestű kutya hám barna', '10', '2000', 'kutya'),
(27, 'Kistestű kutya hám piros', '10', '2000', 'kutya'),
(28, 'Nagytestű kutya hám piros', '10', '2000', 'kutya'),
(29, 'Nagytestű kutya hám terepmintás', '10', '2000', 'kutya'),
(30, 'Kutya szoknya fehér', '10', '2300', 'kutya'),
(31, 'Kutya kacsás pulóver', '10', '3500', 'kutya'),
(32, 'Kutya szoknya fekete-piros', '10', '2300', 'kutya'),
(33, 'Piros kutya pulóver', '10', '3500', 'kutya'),
(34, 'Kistestű szürke kutya hám ', '10', '2000', 'kutya'),
(35, 'Kistestű kutya hám kék', '10', '2000', 'kutya');

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

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `rendeles`
--
ALTER TABLE `rendeles`
  ADD UNIQUE KEY `userid` (`userid`),
  ADD UNIQUE KEY `termekid` (`termekid`);

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
-- AUTO_INCREMENT a táblához `termekek`
--
ALTER TABLE `termekek`
  MODIFY `termekid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

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
  ADD CONSTRAINT `rendeles_ibfk_2` FOREIGN KEY (`termekid`) REFERENCES `termekek` (`termekid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
