-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2022 at 02:30 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `attribute`
--

CREATE TABLE `attribute` (
  `attribute_id` int(5) NOT NULL,
  `studentID` varchar(5) NOT NULL,
  `responsibility` varchar(20) NOT NULL COMMENT 'ความรับผิดชอบ',
  `diligence` varchar(20) NOT NULL COMMENT 'ความขยันหมั่นเพียร',
  `patience` varchar(20) NOT NULL COMMENT 'ความอดทน',
  `discipline` varchar(20) NOT NULL COMMENT 'ความมีระเบียบวินัย',
  `honesty` varchar(20) NOT NULL COMMENT 'ความซื่อสัตย์',
  `kindness` varchar(20) NOT NULL COMMENT 'ความมีน้ำใจ/เอื้ออาทร',
  `punctuality` varchar(20) NOT NULL COMMENT 'การตรงต่อเวลา',
  `selfconfidence` varchar(20) NOT NULL COMMENT 'ความมั่นใจในตนเอง',
  `pursuingknowledge` varchar(20) NOT NULL COMMENT 'การใฝ่หาความรู้',
  `freetime` varchar(20) NOT NULL COMMENT 'การใช้เวลาว่างให้เกิดประโยชน์'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `executive`
--

CREATE TABLE `executive` (
  `executiveID` varchar(5) NOT NULL,
  `executiveName` varchar(50) NOT NULL,
  `executivePhone` varchar(10) NOT NULL,
  `executiveAddress` varchar(100) NOT NULL,
  `executiveUser` varchar(20) NOT NULL,
  `executivePass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `executive`
--

INSERT INTO `executive` (`executiveID`, `executiveName`, `executivePhone`, `executiveAddress`, `executiveUser`, `executivePass`) VALUES
('00001', 'ผ.อ.ดำ', '0856553206', '7/45', 'wasd', '1234'),
('00002', 'ผ.อ.แดง', '0874786685', ' 7/4', 'แดงๆ', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `help`
--

CREATE TABLE `help` (
  `helpID` int(5) NOT NULL,
  `helpDate` date NOT NULL,
  `helpDetail` varchar(255) NOT NULL COMMENT 'รายละเอียด',
  `helpTeacher` varchar(50) NOT NULL COMMENT 'คนช่วย',
  `helpResult` varchar(100) NOT NULL COMMENT 'ผล',
  `studentID` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `help`
--

INSERT INTO `help` (`helpID`, `helpDate`, `helpDetail`, `helpTeacher`, `helpResult`, `studentID`) VALUES
(26, '2022-10-08', 'มอบทุน', 'ครูบาส', 'ดีขึ้น', '65001'),
(30, '2022-10-25', 'มอบทุน', 'ครูบาส', 'ดีขึ้น', '65002'),
(31, '2022-10-25', 'มอบทุน', 'ครูบาส', 'ดีขึ้น', '65002');

-- --------------------------------------------------------

--
-- Table structure for table `homevisit`
--

CREATE TABLE `homevisit` (
  `homevisitID` int(11) NOT NULL,
  `studentID` varchar(5) NOT NULL,
  `homevisitDate` date NOT NULL COMMENT 'วันที่เยี่ยมบ้าน',
  `informant` varchar(50) NOT NULL COMMENT 'ผู้ให้ข้อมูล',
  `homevisitAddress` varchar(50) NOT NULL COMMENT 'ที่อยู่',
  `mlat` varchar(50) NOT NULL,
  `mlog` varchar(50) NOT NULL,
  `familyMembers` varchar(50) NOT NULL COMMENT 'สมาชิกในครอบครัว',
  `relationship` varchar(50) NOT NULL COMMENT 'ความสัมพันธ์ของครอบครัว',
  `parentStatus` varchar(50) NOT NULL COMMENT 'สถานะของพ่อแม่',
  `live` varchar(50) NOT NULL COMMENT 'นักเรียนอาศัยอยู่กับใคร',
  `nurture` varchar(50) NOT NULL COMMENT 'การอบรมเลี้ยงดู',
  `parentOccupation` varchar(50) NOT NULL COMMENT 'อาชีพผู้ปกครอง',
  `income` varchar(50) NOT NULL COMMENT 'รายได้ครอบครัว',
  `expenses` varchar(50) NOT NULL COMMENT 'รายได้กับรายจ่ายของครอบครัว',
  `drug` varchar(50) NOT NULL COMMENT 'ยาเสพติด',
  `responsibilities` varchar(50) NOT NULL COMMENT 'หน้าที่ที่รับผิดชอบที่บ้าน',
  `parttime` varchar(50) NOT NULL COMMENT 'งานพิเศษ',
  `vehicle` varchar(50) NOT NULL COMMENT 'พาหนะ',
  `motorcycle` varchar(10) NOT NULL COMMENT 'ทะเบียนรถ',
  `distance` varchar(50) NOT NULL COMMENT 'ระยะทางจากบ้านถึงโรงเรียน',
  `taketrip` varchar(50) NOT NULL COMMENT 'ใช้เวลาเดินทาง',
  `moneytoSchool` varchar(50) NOT NULL COMMENT 'เงินที่ได้รับมาโรงเรียน',
  `money` varchar(50) NOT NULL COMMENT 'เงิน',
  `sleep` varchar(50) NOT NULL COMMENT 'การนอน',
  `wakeUp` varchar(50) NOT NULL COMMENT 'การตื่น',
  `sleepover` varchar(50) NOT NULL COMMENT 'นอนค้างบ้านเพื่อน',
  `nightOut` varchar(50) NOT NULL COMMENT 'เที่ยวกลางคืน',
  `watchTV` varchar(50) NOT NULL COMMENT 'ดูทีวี',
  `playGame` varchar(50) NOT NULL COMMENT 'เล่นเกม',
  `havePhone` varchar(50) NOT NULL COMMENT 'มีโทรศัพท์',
  `friendship` varchar(50) NOT NULL COMMENT 'เข้ากับเพื่อน',
  `leadership` varchar(50) NOT NULL COMMENT 'การเป็นผู้นำ',
  `longingforLife` varchar(50) NOT NULL COMMENT 'การมีชีวิต',
  `selfWorth` varchar(50) NOT NULL COMMENT 'นักเรียนรู้สึกว่าตนเอง',
  `furtherEducation` varchar(50) NOT NULL COMMENT 'ความต้องการของผู้ปกครอง',
  `futureCareer` varchar(50) NOT NULL COMMENT 'อาชีพในอนาคต',
  `homework` varchar(50) NOT NULL COMMENT 'การบ้าน',
  `studyConditions` varchar(200) NOT NULL COMMENT 'การเรียนในปัจจุบัน',
  `problemConsultant` varchar(50) NOT NULL COMMENT 'นักเรียนปรึกษาปัญหากับใคร',
  `problem` varchar(200) NOT NULL COMMENT 'ปัญหา',
  `behavior` varchar(50) NOT NULL COMMENT 'คุณลักษณะ',
  `file` varchar(255) NOT NULL COMMENT 'รูป',
  `parentHelp` varchar(50) NOT NULL COMMENT 'สิ่งที่ผู้ปกครองสามารถช่วยเหลือ',
  `feedback` varchar(100) NOT NULL COMMENT 'ข้อเสนอแนะ',
  `summarize` varchar(100) NOT NULL COMMENT 'สรุป',
  `responsibility` varchar(50) NOT NULL COMMENT 'ความรับผิดชอบ',
  `diligence` varchar(50) NOT NULL COMMENT 'ความขยันหมั่นเพียร',
  `patience` varchar(50) NOT NULL COMMENT 'ความอดทน',
  `discipline` varchar(50) NOT NULL COMMENT 'ความมีระเบียบวินัย',
  `honesty` varchar(50) NOT NULL COMMENT 'ความซื่อสัตย์',
  `kindness` varchar(50) NOT NULL COMMENT 'ความมีน้ำใจ/เอื้ออาทร',
  `punctuality` varchar(50) NOT NULL COMMENT 'การตรงต่อเวลา',
  `selfconfidence` varchar(50) NOT NULL COMMENT 'ความมั่นใจในตนเอง',
  `pursuingknowledge` varchar(50) NOT NULL COMMENT 'การใฝ่หาความรู้',
  `freetime` varchar(50) NOT NULL COMMENT 'การใช้เวลาว่างให้เกิดประโยชน์'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `homevisit`
--

INSERT INTO `homevisit` (`homevisitID`, `studentID`, `homevisitDate`, `informant`, `homevisitAddress`, `mlat`, `mlog`, `familyMembers`, `relationship`, `parentStatus`, `live`, `nurture`, `parentOccupation`, `income`, `expenses`, `drug`, `responsibilities`, `parttime`, `vehicle`, `motorcycle`, `distance`, `taketrip`, `moneytoSchool`, `money`, `sleep`, `wakeUp`, `sleepover`, `nightOut`, `watchTV`, `playGame`, `havePhone`, `friendship`, `leadership`, `longingforLife`, `selfWorth`, `furtherEducation`, `futureCareer`, `homework`, `studyConditions`, `problemConsultant`, `problem`, `behavior`, `file`, `parentHelp`, `feedback`, `summarize`, `responsibility`, `diligence`, `patience`, `discipline`, `honesty`, `kindness`, `punctuality`, `selfconfidence`, `pursuingknowledge`, `freetime`) VALUES
(347, '65001', '2022-10-25', 'นางกุศล คงทอง', '206/2', '', '', '4', 'รักใคร่กันดี', 'อยู่ด้วยกัน', 'บิดามารดา', 'ใช้เหตุผล', 'รับจ้าง', '72,000 บาทขึ้นไป', 'ไม่เพียงพอในบางครั้ง', 'บุหรี่', 'ทำครั้งคราว', 'ไม่มี', 'รถประจำทาง/รถประจำหมู่บ้าน', '', '20', '60', 'ได้ทุกวัน', '100', '22.00 - 24.00 น.', '05.00 - 06.00 น.', 'ครั้งคราว', 'ครั้งคราว', 'ครั้งคราว', 'บ่อยครั้ง', 'มี', 'ค่อนข้างง่าย', 'ผู้นำบางโอกาสผู้ตามบางโอกาส', 'น่าอยู่', 'มีค่า', 'ศึกษาต่อ', 'คนรวย', 'บางครั้ง', 'ไม่มีปัญหา', '', 'เรื่องการวางตัวในสังคม,เรื่องสุขภาพ,เรื่องการเลือกอาชีพ', '', '../upload/308960526_617559486497329_5279528756064106750_n.jpg', '-', ' -', ' -', 'ดี', 'ดี', 'ดี', 'ดี', 'ดี', 'ดี', 'ดี', 'ดี', 'ดี', 'ดี'),
(348, '65002', '0000-00-00', 'นายบาส', '206/2', '', '', '6', 'ขัดแย้งทะเลาะกันบางครั้ง', 'หย่าร้าง', 'บิดามารดา', '', 'ค้าขาย', 'น้อยกว่า 48,000 บาท', '', 'สุรา', 'ทำครั้งคราว', '', '', '', '', '', '', '', '', '', '', '', '', 'ประจำ', '', '', '', '', '', '', '', '', '', '', '', '', '../upload/', '', ' ', ' ', '', '', '', '', '', '', '', '', '', ''),
(349, '65001', '2022-11-01', 'นางกุศล คงทอง', '206/2', '', '', '4', 'รักใคร่กันดี', 'อยู่ด้วยกัน', 'ตามลำพัง', 'ตามใจ', 'รับจ้าง', '48,000 - 71,999 บาท', 'ไม่เพียงพอในบางครั้ง', 'ไม่มี', 'ทำครั้งคราว', 'ไม่มี', 'เดิน', '', '20', '60', 'ได้บางวัน', '100', '22.00 - 24.00 น.', '05.00 - 06.00 น.', 'บ่อยครั้ง', 'บ่อยครั้ง', 'บ่อยครั้ง', 'ประจำ', 'ไม่มี', 'ค่อนข้างง่าย', 'ผู้นำ', 'น่าอยู่', 'มีค่า', 'ศึกษาต่อ', 'คนรวย', 'บ่อยครั้ง', 'ไม่มีปัญหา', 'เก็บไว้คนเดียว', 'เรื่องการวางตัวในสังคม,เรื่องสุขภาพ,เรื่องการเลือกอาชีพ', '', '../upload/1223.jpg', '', ' ', ' ', 'ดี', 'ปานกลาง', 'ดี', 'ปานกลาง', 'ดี', 'ดี', 'ปานกลาง', 'ดี', 'ปานกลาง', 'ดี');

-- --------------------------------------------------------

--
-- Table structure for table `homevisitrecord`
--

CREATE TABLE `homevisitrecord` (
  `statusID` varchar(1) NOT NULL,
  `statusName` enum('เยี่ยมแล้ว','ยังไม่เยี่ยม') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `homevisitrecord`
--

INSERT INTO `homevisitrecord` (`statusID`, `statusName`) VALUES
('1', 'เยี่ยมแล้ว'),
('2', 'ยังไม่เยี่ยม');

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `location_id` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `lat` varchar(50) NOT NULL,
  `lon` varchar(50) NOT NULL,
  `studentID` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`location_id`, `name`, `lat`, `lon`, `studentID`) VALUES
(2, 'bas', '8.461673', '99.867354', ''),
(3, 'bas', '8.461673', '99.867354', '78'),
(4, 'เกียรติยศ  คงทอง', '8.462562', '99.859786', '001'),
(5, 'a', '8.462062', '99.859686', '0014'),
(6, 'test', '8.466455', '99.863991', '');

-- --------------------------------------------------------

--
-- Table structure for table `parent`
--

CREATE TABLE `parent` (
  `ID` int(5) NOT NULL,
  `parentID` varchar(13) NOT NULL,
  `parentName` varchar(50) NOT NULL,
  `parentPhone` varchar(10) NOT NULL,
  `parentAddress` varchar(100) NOT NULL,
  `usernameparent` varchar(20) NOT NULL,
  `passwordparent` varchar(20) NOT NULL,
  `userlevel` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `parent`
--

INSERT INTO `parent` (`ID`, `parentID`, `parentName`, `parentPhone`, `parentAddress`, `usernameparent`, `passwordparent`, `userlevel`) VALUES
(2, '1800701273185', 't', 't', 't', 't', 't', 'ผู้ปกครอง'),
(4, '1800701273000', 'นายดำ ดอมคอม', '0852364464', ' 212', 'ptest', 'ptest', '');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `roomID` int(5) NOT NULL,
  `class` enum('ม.1','ม.2','ม.3','ม.4','ม.5','ม.6') NOT NULL COMMENT 'ชั้น',
  `room1` enum('1','2','3','4','5','6','7','8','9','10') NOT NULL COMMENT 'ห้อง'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`roomID`, `class`, `room1`) VALUES
(1, 'ม.1', '1'),
(2, 'ม.2', '2'),
(3, 'ม.3', '3'),
(4, 'ม.4', '4'),
(5, 'ม.5', '5'),
(6, 'ม.6', '6');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `studentID` varchar(5) NOT NULL COMMENT 'รหัส',
  `studentName` varchar(50) NOT NULL COMMENT 'ชื่อ',
  `studentSex` enum('ชาย','หญิง') NOT NULL COMMENT 'เพศ',
  `studentPhone` varchar(10) NOT NULL COMMENT 'เบอร์',
  `studentAddress` varchar(100) NOT NULL COMMENT 'ที่อยู่',
  `class` enum('ม.1','ม.2','ม.3','ม.4','ม.5','ม.6') NOT NULL COMMENT 'ชั้น',
  `room1` enum('1','2','3','4','5','6','7','8','9','10') NOT NULL COMMENT 'ห้อง',
  `mlat` varchar(50) NOT NULL COMMENT 'ละติจูด',
  `mlog` varchar(50) NOT NULL COMMENT 'ลองติจูด',
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `userlevel` varchar(50) NOT NULL,
  `teacherID` varchar(5) NOT NULL,
  `parentID` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`studentID`, `studentName`, `studentSex`, `studentPhone`, `studentAddress`, `class`, `room1`, `mlat`, `mlog`, `username`, `password`, `userlevel`, `teacherID`, `parentID`) VALUES
('65001', 'เกียรติยศ คงทอง', 'ชาย', '0631035623', 'ชะอวด', 'ม.4', '1', '8.465938554000518', '99.87981951225586', 'bas', 'bas', 'นักเรียน', '', ''),
('65002', 'ฐาปกรณ์ คงแก้ว', 'ชาย', '0874786685', 'ชะอวด', 'ม.4', '1', '8.46', '99.86', 'few', 'few', 'นักเรียน', '', '1800701273000'),
('65003', 'ดช.ดี', 'ชาย', '0631035623', 'ชะอวด', 'ม.4', '2', '', '', '', '', 'นักเรียน', '65002', ''),
('65004', 'นิว', 'ชาย', '0874786685', ' ชะอวด', 'ม.4', '3', '8.453373824007343', '99.87183725822754', 'new', 'new', 'นักเรียน', '', ''),
('65005', 'บาส', 'ชาย', '0631035623', 'ชะอวด\r\n', 'ม.4', '2', '', '', '', '', 'นักเรียน', '65002', ''),
('65006', 'ทดสอบ', 'ชาย', '0631035623', '212', 'ม.4', '3', '', '', 'test', 'test', 'นักเรียน', '', '1800701273000');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `teacherID` varchar(5) NOT NULL,
  `teacherName` varchar(50) NOT NULL,
  `teacherPhone` varchar(10) NOT NULL,
  `teacherAddress` varchar(100) NOT NULL,
  `class` enum('ม.1','ม.2','ม.3','ม.4','ม.5','ม.6','-') NOT NULL,
  `room1` enum('1','2','3','4','5','6','7','8','9','10','-') NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `userlevel` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`teacherID`, `teacherName`, `teacherPhone`, `teacherAddress`, `class`, `room1`, `username`, `password`, `userlevel`) VALUES
('10001', 'admin', '0687478512', '     4/5', '-', '-', 'admin', 'admin', 'admin'),
('10002', 'ผ.อ.ฟิว', '0631035623', ' 206', '-', '-', 'few', '123456', 'ผู้บริหาร'),
('65001', 'สมศรี ดูแลดี', '0631035623', '      21/45', 'ม.4', '1', 'bas', '123456', 'ครู'),
('65002', 'ครูดำ', '0874786685', '   207', 'ม.4', '2', 'dam', '123456', 'ครู'),
('65003', 'ทดสอบ', '0645874587', '208', 'ม.4', '3', 'test', '123456', 'ครู');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(5) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(200) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `userlevel` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `firstname`, `lastname`, `userlevel`) VALUES
(1, 'admin', 'e10adc3949ba59abbe56e057f20f883e', 'adminbas', 'admin', 'admin'),
(2, 'bas', 'e10adc3949ba59abbe56e057f20f883e', 'Kiattiyot', 'Kongtong', 'student'),
(3, 'bas1', 'e10adc3949ba59abbe56e057f20f883e', 'น้องบาส', 'บาส', 'student'),
(4, 'bas2', 'e10adc3949ba59abbe56e057f20f883e', 'น้อง', 'บาส', 'student'),
(5, 'bas4', 'e10adc3949ba59abbe56e057f20f883e', 'Kiattiyot', 'บาส', 'student'),
(7, '1', '202cb962ac59075b964b07152d234b70', '123', '123', ''),
(8, '2', 'c81e728d9d4c2f636f067f89cc14862c', '2', '2', 'teacher');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attribute`
--
ALTER TABLE `attribute`
  ADD PRIMARY KEY (`attribute_id`);

--
-- Indexes for table `executive`
--
ALTER TABLE `executive`
  ADD PRIMARY KEY (`executiveID`);

--
-- Indexes for table `help`
--
ALTER TABLE `help`
  ADD PRIMARY KEY (`helpID`);

--
-- Indexes for table `homevisit`
--
ALTER TABLE `homevisit`
  ADD PRIMARY KEY (`homevisitID`);

--
-- Indexes for table `homevisitrecord`
--
ALTER TABLE `homevisitrecord`
  ADD PRIMARY KEY (`statusID`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`location_id`);

--
-- Indexes for table `parent`
--
ALTER TABLE `parent`
  ADD PRIMARY KEY (`ID`) USING BTREE;

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`roomID`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`studentID`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`teacherID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attribute`
--
ALTER TABLE `attribute`
  MODIFY `attribute_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `help`
--
ALTER TABLE `help`
  MODIFY `helpID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `homevisit`
--
ALTER TABLE `homevisit`
  MODIFY `homevisitID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=350;

--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `location_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `parent`
--
ALTER TABLE `parent`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `roomID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
