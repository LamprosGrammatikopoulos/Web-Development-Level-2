-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Εξυπηρετητής: 127.0.0.1
-- Χρόνος δημιουργίας: 13 Ιουν 2021 στις 20:24:19
-- Έκδοση διακομιστή: 10.4.18-MariaDB
-- Έκδοση PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Βάση δεδομένων: `webpage_db`
--

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `multiple_choices`
--

CREATE TABLE `multiple_choices` (
  `id` bigint(20) NOT NULL,
  `question` varchar(200) NOT NULL,
  `ans1` varchar(50) NOT NULL,
  `ans2` varchar(50) NOT NULL,
  `ans3` varchar(50) NOT NULL,
  `ans4` varchar(50) NOT NULL,
  `correct_ans1` tinyint(1) NOT NULL,
  `correct_ans2` tinyint(1) NOT NULL,
  `correct_ans3` tinyint(1) NOT NULL,
  `correct_ans4` tinyint(1) NOT NULL,
  `difficulty` varchar(50) NOT NULL,
  `onhold` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Άδειασμα δεδομένων του πίνακα `multiple_choices`
--

INSERT INTO `multiple_choices` (`id`, `question`, `ans1`, `ans2`, `ans3`, `ans4`, `correct_ans1`, `correct_ans2`, `correct_ans3`, `correct_ans4`, `difficulty`, `onhold`) VALUES
(12, 'ggg', 'g', 'g', 'g', 'd', 1, 1, 0, 1, 'hard', 0),
(13, 'foo', 'r', 't', 'u', 'u', 0, 1, 1, 0, 'hard', 0),
(67591, 'Η Δικτατορία των Συνταγματαρχών είχε επικεφαλή τον ταξίαρχο Στυλιανό Παττακό και συνταγματάρχες τους...', 'Γ. Παπαδόπουλο', 'Π. Κανελλόπουλο', 'Ν. Μακαρέζο', 'Γ. Παπανδρέου', 1, 0, 1, 0, 'medium', 0),
(67592, 'Το ποίο γνωστό δίδυμο Αμερικανών εγληματιών είναι...', 'Bonnie E. P.', 'Clyde C. B.', 'Heisenberg', 'Jesse', 1, 1, 0, 0, 'easy', 0),
(67593, 'Ποία είναι τα δύο παιδία της Πριγκίπισσας Άννας του Ηνωμένου Βασιλείου;', 'P. Phillips', 'Βεατρίκη', 'Ευγενία', 'Z. Tindall', 1, 0, 0, 1, 'hard', 0),
(67594, 'Οι δυνάμεις του Άξονα του άξονα αποτελούταν απο την Γερμανία και τις...', 'Ισπανία', 'Πολωνία', 'Ιαπωνία', 'Ιταλία', 0, 0, 1, 1, 'easy', 0),
(67595, 'Μερικά από τα κυριότερα στρατόπεδα συγκέντρωσης Εβραίων κατά τον Β\' Παγκόσμιο πόλεμο ήταν:', 'Άουσβιτς', 'Τρεμπλίνκα', 'Ράβενσμπρικ', 'Μαουτχάουζεν', 1, 1, 0, 0, 'medium', 0),
(67596, 'Ποιά από τα παρακάτω αεροσκάφη είναι πολεμικά; ', 'Heinkel HeS 011', 'Airbus A300', 'Boeing 707', 'Boeing 707', 1, 0, 1, 0, 'hard', 0),
(67597, 'wert', 'a', 'b', 'c', 'd', 1, 0, 1, 0, 'medium', 1),
(67598, '1', '2', '3', '4', '5', 0, 1, 1, 0, 'hard', 0),
(67600, 'mc', '1', '2', '3', '4', 0, 1, 0, 1, 'medium', 1);

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `one_choice`
--

CREATE TABLE `one_choice` (
  `id` bigint(20) NOT NULL,
  `question` varchar(200) NOT NULL,
  `ans1` varchar(50) NOT NULL,
  `ans2` varchar(50) NOT NULL,
  `ans3` varchar(50) NOT NULL,
  `ans4` varchar(50) NOT NULL,
  `correct_answear` varchar(50) NOT NULL,
  `difficulty` varchar(50) NOT NULL,
  `onhold` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Άδειασμα δεδομένων του πίνακα `one_choice`
--

INSERT INTO `one_choice` (`id`, `question`, `ans1`, `ans2`, `ans3`, `ans4`, `correct_answear`, `difficulty`, `onhold`) VALUES
(1, 'Ποια χρονιά αναγνωρίζεται η ανεξαρτησία της Ελλάδας;', '1821', '1819', '1830', '1800', '1830', 'easy', 0),
(2, 'Ποια χρονιά μεταφέρεται η πρωτεύουσα της Ελλάδας από το Ναύπλιο στην Αθήνα;', '1834', '1855', '1821', '1855', '1834', 'easy', 0),
(3, 'Ποια χρονιά κηρύσσει ο Χαρίλαος Τρικούπης την ελληνική χρεοκοπία από το βήμα της βουλής;', '1883', '1873', '1893', '1873', '1893', 'hard', 0),
(4, 'Ποια χρονιά εγκαινιάστηκε ο αερολιμένας Αθηνών, Ελευθέριος Βενιζέλος;', '1999', '2001', '2000', '1999', '2000', 'medium', 0),
(5, 'Ποια χρονιά πραγματοποιήθηκε η πρώτη κλήση με κινητό τηλέφωνο στην Ελλάδα;', '1994', '1995', '1993', '1996', '1994', 'medium', 0),
(6, 'Ποια χρονιά απέκτησαν οι γυναίκες δικαίωμα ψήφου στις δημοτικές εκλογές στην Ελλάδα;', '1910', '1940', '1930', '1920', '1930', 'easy', 0),
(7, 'Ποια χρονιά διεξήχθησαν οι πρώτοι σύγχρονοι Ολυμπιακοί αγώνες στην Ελλάδα;', '1896', '1900', '2000', '2004', '1896', 'hard', 0),
(8, 'Ποια χρονιά γίνεται η Κύπρος, μέλος της Ευρωπαϊκής Ένωσης;', '2020', '2019', '2004', '2014', '2004', 'medium', 0),
(9, 'Ποια χρονιά εγκαινιάζεται η γέφυρα Ρίου – Αντιρίου, η μεγαλύτερη καλωδιωτή γέφυρα στον κόσμο;', '2004', '1995', '2000', '1999', '2004', 'medium', 0),
(10, 'Ποια χρονιά τελείωσε ο εμφύλιος πόλεμος στην Ελλάδα;', '1949', '1944', '1940', '1946', '1949', 'hard', 0),
(177, 'rwqe', 'a', 'b', 'c', 'd', 'c', 'hard', 1),
(178, 'edit', '1', '2', '3', '4', '4', 'easy', 0),
(180, 'oc', '1', '2', '3', '4', '3', 'hard', 1);

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `text_completion`
--

CREATE TABLE `text_completion` (
  `id` bigint(20) NOT NULL,
  `question` varchar(200) NOT NULL,
  `answear` varchar(50) NOT NULL,
  `difficulty` varchar(50) NOT NULL,
  `onhold` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Άδειασμα δεδομένων του πίνακα `text_completion`
--

INSERT INTO `text_completion` (`id`, `question`, `answear`, `difficulty`, `onhold`) VALUES
(3, 'a', 'a', 'easy', 0),
(5, 'a', 'b', 'hard', 1),
(6, 'Η Ελλάδα έγινε μέλος της Ε.Ο.Κ τη χρονιά ', '1981', 'easy', 0),
(7, 'Με τη συνθήκη των Σεβρών, η Ελλάδα αποκτούσε την Θράκη, την Ίμβρο και την Τένεδο η οποία υπεγράφη την χρονια ', '1920', 'hard', 0),
(8, 'Ο πρώην Έλληνας πρωθυπουργός Κωνσταντίνος Τσαλδάρης γεννήθηκε το 1884 στην πόλη της ', 'Αλεξάνδρειας', 'hard', 0),
(9, 'Οι φοιτητές που οχυρώθηκαν στο πολυτεχνείο κατά του καθεστώτος της χούντας αυτοαποκαλούνταν Ελεύθεροι ', 'πολιορκημένοι', 'easy', 0),
(11, 'Η Μικρασιατική καταστροφή συντελείται τη χρονιά  ', '1922', 'easy', 0),
(12, 'Ο Ιωάννης Καποδίστριας δολοφονήθηκε τη χρονιά ', '1831', 'medium', 0),
(13, 'Το ολοκαύτωμα της Μονής Αρκαδίου συνέβη τη χρονιά ', '1866', 'medium', 0),
(15, 'test', 'yes', 'hard', 0),
(16, 'c', '1', 'hard', 1),
(17, 'tc', '231', 'medium', 1);

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `true_false`
--

CREATE TABLE `true_false` (
  `id` bigint(20) NOT NULL,
  `question` varchar(200) NOT NULL,
  `answear` tinyint(1) NOT NULL,
  `difficulty` varchar(50) NOT NULL,
  `onhold` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Άδειασμα δεδομένων του πίνακα `true_false`
--

INSERT INTO `true_false` (`id`, `question`, `answear`, `difficulty`, `onhold`) VALUES
(5, 'asdfdfas', 1, 'easy', 0),
(6, 'a', 0, 'hard', 1),
(7, 'To 2009 η Αττική συγκλονίστηκε από σεισμό ο οποίος στοίχισε 100 νεκρούς και 400 τραυματίες.', 0, 'easy', 0),
(8, 'To 1973 έλαβε χώρα η εξέγερση του Πολυτεχνείου.', 1, 'easy', 0),
(9, 'To 1998 έφυγε από τη ζωή ο Κωνσταντίνος Καραμανλής.', 1, 'medium', 0),
(10, 'To 1977 βραβεύτηκε με βραβείο Νόμπελ Λογοτεχνίας, ο Οδυσσέας Ελύτης.', 0, 'hard', 0),
(11, 'Ο Νέλσον Μαντέλα αποφυλακίστηκε τo 1990.', 1, 'hard', 0),
(12, 'Το 1992 σκοτώθηκε από πυρα αστυνομικών ο βαρόνος των ναρκωτικών Πάμπλο Εσκομπάρ.', 0, 'hard', 0),
(13, 'Το 1979 ανακηρύχθηκε πρωθυπουργός της Μ.Βρετανίας η Μάργκαρετ Θάτσερ.', 1, 'medium', 0),
(14, 'adfsdfsadfsa', 0, 'medium', 1),
(15, 'test', 0, 'hard', 0),
(17, 'tf', 0, 'easy', 1);

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `users`
--

CREATE TABLE `users` (
  `id` bigint(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `sex` varchar(50) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `photo` varchar(1000) NOT NULL,
  `role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Άδειασμα δεδομένων του πίνακα `users`
--

INSERT INTO `users` (`id`, `name`, `lastname`, `date`, `sex`, `username`, `password`, `email`, `photo`, `role`) VALUES
(34, 'mod1', 'mod1', '2021-05-19', 'female', 'mod1', 'mod1', 'dit18038@go.uop.gr', '../media/mod1-fight.png', 'moderator'),
(58, 'user1', 'user1', '2021-04-29', 'male', 'user1', 'user1', 'user1@gmail.com', '../media/user1-black.jpg', 'user'),
(59, 'admin1', 'admin1', '2021-06-24', 'female', 'admin1', 'admin1', 'admin1@gmail.com', '../media/admin1-girl.jpg', 'admin'),
(60, 'admin2', 'admin2', '2021-06-10', 'male', 'admin2', 'admin2', 'admin2@gmail.com', '../media/admin2-dark.jpg', 'admin'),
(62, 'user2', 'user2', '2021-06-23', 'male', 'user2', 'user2', 'user1@gmail.com', '../media/user2-blue.jpg', 'user'),
(63, 'mod2', 'mod2 Lastname', '2021-06-14', 'female', 'mod2', 'mod2', 'mod2@gmail.com', '../media/mod2-ork.png', 'moderator'),
(64, 'quiz gamer', 'best player', '2021-06-17', 'male', 'ultra good', '123', 'player@someone.com', '../media/ultra good-afana.png', 'user'),
(65, 'test', 'test user', '2021-06-07', 'male', 'tester', '123', 'dit18038@uop.gr', '../media/tester-mars-rover.jpg', 'user'),
(70, 'test2', 'mmm', '2021-06-05', 'male', 'qwer', 'qwer', 'qwer@gmail.com', '../media/qwer-background2.jpg', 'user'),
(72, 'new', 'acc', '2021-06-15', 'male', 'new', '123', 'tree@cut.com', '../media/Default-user.png', 'user'),
(73, 'o', 'kanenas', '2021-06-01', 'male', 'kanenas', '123', 'kuklwpas@psilos.arxaiothta', '../media/Default-user.png', 'user');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `users_history`
--

CREATE TABLE `users_history` (
  `id` bigint(20) NOT NULL,
  `username` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `difficulty` varchar(50) NOT NULL,
  `score` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Άδειασμα δεδομένων του πίνακα `users_history`
--

INSERT INTO `users_history` (`id`, `username`, `date`, `difficulty`, `score`) VALUES
(27, 'a', '2021-05-17', 'easy', 0),
(28, 'a', '2021-05-17', 'easy', 0),
(29, 'a', '2021-05-17', 'easy', 0),
(30, 'i', '2021-05-28', 'easy', 2),
(31, 'i', '2021-06-06', 'easy', 3),
(32, 'ultra good', '2021-06-12', 'medium', 1),
(33, 'ultra good', '2021-06-12', 'hard', 1),
(34, 'ultra good', '2021-06-12', 'easy', 5),
(35, 'ultra good', '2021-06-12', 'easy', 0),
(36, 'ultra good', '2021-06-12', 'easy', 3),
(37, 'tester', '2021-06-12', 'easy', 3),
(38, 'tester', '2021-06-12', 'medium', 1),
(39, 'tester', '2021-06-12', 'hard', 2);

--
-- Ευρετήρια για άχρηστους πίνακες
--

--
-- Ευρετήρια για πίνακα `multiple_choices`
--
ALTER TABLE `multiple_choices`
  ADD PRIMARY KEY (`id`);

--
-- Ευρετήρια για πίνακα `one_choice`
--
ALTER TABLE `one_choice`
  ADD PRIMARY KEY (`id`);

--
-- Ευρετήρια για πίνακα `text_completion`
--
ALTER TABLE `text_completion`
  ADD PRIMARY KEY (`id`);

--
-- Ευρετήρια για πίνακα `true_false`
--
ALTER TABLE `true_false`
  ADD PRIMARY KEY (`id`);

--
-- Ευρετήρια για πίνακα `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Ευρετήρια για πίνακα `users_history`
--
ALTER TABLE `users_history`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT για άχρηστους πίνακες
--

--
-- AUTO_INCREMENT για πίνακα `multiple_choices`
--
ALTER TABLE `multiple_choices`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67601;

--
-- AUTO_INCREMENT για πίνακα `one_choice`
--
ALTER TABLE `one_choice`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=181;

--
-- AUTO_INCREMENT για πίνακα `text_completion`
--
ALTER TABLE `text_completion`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT για πίνακα `true_false`
--
ALTER TABLE `true_false`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT για πίνακα `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT για πίνακα `users_history`
--
ALTER TABLE `users_history`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
