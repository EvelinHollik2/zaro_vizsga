-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2024. Ápr 08. 10:54
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
-- Tábla szerkezet ehhez a táblához `kosar`
--

CREATE TABLE `kosar` (
  `termekid` int(11) NOT NULL,
  `datum` timestamp NOT NULL DEFAULT current_timestamp(),
  `userid` int(11) NOT NULL,
  `mennyiseg` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
  `fajta` varchar(6) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `kollekcio` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- A tábla adatainak kiíratása `termekek`
--

INSERT INTO `termekek` (`termekid`, `termeknev`, `termekdb`, `termekar`, `fajta`, `kollekcio`) VALUES
(1, 'Cica szoknya', '10', '2300', 'macska', 'ruhák'),
(2, 'Mikulás jelmez', '10', '2500', 'macska', 'ruhák'),
(3, 'Pizzás macska pulóver', '10', '3500', 'macska', 'pulóverek'),
(4, 'Macska hámok', '10', '2000', 'macska', 'kiegészítő'),
(5, 'Macska hám', '10', '2000', 'macska', 'kiegészítő'),
(6, 'Fekete-sárga macska pulóver', '10', '3500', 'macska', 'pulóverek'),
(7, 'Lila macska pulóver', '10', '3500', 'macska', 'pulóverek'),
(8, 'Barna macska pulóver', '10', '3500', 'macska', 'pulóverek'),
(9, 'Rózsaszín macska pulóver', '10', '3500', 'macska', 'pulóverek'),
(10, 'Kék-rózsaszín macska pulóver', '10', '3500', 'macska', 'pulóverek'),
(11, 'Best friends-es póló', '10', '2000', 'kutya', 'polok'),
(12, 'Nagytestű kutya hám barna', '10', '2000', 'kutya', 'kiegészítő'),
(13, 'Kék kutya kabát', '10', '3900', 'kutya', 'kabátok'),
(14, 'Barna kutya kabát', '10', '3900', 'kutya', 'kabátok'),
(15, 'Piros kutya kabát', '10', '3900', 'kutya', 'kabátok'),
(16, 'Világos barna kutya kabát', '10', '3900', 'kutya', 'kabátok'),
(17, 'Zöld kutya kabát', '10', '3900', 'kutya', 'kabátok'),
(18, 'Szürke-kék kutya kabát', '10', '3900', 'kutya', 'kabátok'),
(19, 'Sötét kék kabát', '10', '3900', 'kutya', 'kabátok'),
(20, 'Virágos tavaszi kutya kabát', '10', '3900', 'kutya', 'kabátok'),
(21, 'Bézs kutya kabát', '10', '3900', 'kutya', 'kabátok'),
(22, 'Karácsonyi kutya pulóver', '10', '3900', 'kutya', 'pulóverek'),
(23, 'Kistestű kutya hám', '10', '2000', 'kutya', 'kiegészítő'),
(24, 'Kistestű kutya hám szürke', '10', '2000', 'kutya', 'kiegészítő'),
(25, 'Kistestü kutya hám rózsaszín', '10', '2000', 'kutya', 'kiegészítő'),
(26, 'Kistestű kutya hám barna', '10', '2000', 'kutya', 'kiegészítő'),
(27, 'Kistestű kutya hám piros', '10', '2000', 'kutya', 'kiegészítő'),
(28, 'Nagytestű kutya hám piros', '10', '2000', 'kutya', 'kiegészítő'),
(29, 'Nagytestű kutya hám terepmintás', '10', '2000', 'kutya', 'kiegészítő'),
(30, 'Kutya szoknya fehér', '10', '2300', 'kutya', 'ruhák'),
(31, 'Kutya kacsás pulóver', '10', '3500', 'kutya', 'pulóverek'),
(32, 'Kutya szoknya fekete-piros', '10', '2300', 'kutya', 'ruhák'),
(33, 'Piros kutya pulóver', '10', '3500', 'kutya', 'pulóverek'),
(35, 'Kistestű kutya hám kék', '10', '2000', 'kutya', 'kiegészítő'),
(36, 'Rénszarvas jelmez cicának', '10', '2500', 'macska', 'ruhák'),
(37, 'Türkizkék hám cicának', '10', '2000', 'macska', 'kiegészítő'),
(38, 'Kék virágos nyakörv cicának', '10', '1500', 'macska', 'kiegészítő'),
(39, 'Puha rózsaszín pulóver cicának', '10', '3500', 'macska', 'pulóverek'),
(40, 'Macis pulóver cicának', '10', '3000', 'macska', 'pulóverek'),
(41, 'Rózsaszín köves nyakörv cicának', '10', '2000', 'macska', 'kiegészítő'),
(42, 'Barna szőrmés pulóver cicának', '10', '3500', 'macska', 'pulóverek'),
(43, 'Szürke póló cicának', '10', '2000', 'macska', 'polok'),
(44, 'Rózsaszín hám cicának', '10', '2000', 'macska', 'kiegészítő'),
(45, 'Fluoreszkáló nyakörv cicának', '10', '1500', 'macska', 'kiegészítő'),
(46, 'Fekete fényvisszaverő hám cicának', '10', '2000', 'macska', 'kiegészítő'),
(47, 'Fekete-fehér kockás kabát cicának', '10', '2500', 'macska', 'kabátok'),
(48, 'Fekete-piros kockás kabát cicának', '10', '2500', 'macska', 'kabátok'),
(49, 'Lánc', '10', '2400', 'macska', 'kiegészítő');

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
(4, 'qwer', 'qwer@gmail.com', 'qwer'),
(5, 'Pisti', 'asd@gmail.eu', 'sziahelo');

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
  MODIFY `termekid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT a táblához `users`
--
ALTER TABLE `users`
  MODIFY `userid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
