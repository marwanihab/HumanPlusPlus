-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 12, 2018 at 07:46 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `humanplusplus`
--

-- --------------------------------------------------------

--
-- Table structure for table `fields`
--

CREATE TABLE `fields` (
  `projectId` int(11) NOT NULL,
  `fieldsOfResearch` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fields`
--

INSERT INTO `fields` (`projectId`, `fieldsOfResearch`) VALUES
(281, 'astronomy'),
(281, 'education'),
(282, 'education'),
(282, 'medical'),
(283, 'ComputerScience'),
(283, 'engineering'),
(284, 'education'),
(285, 'engineering');

-- --------------------------------------------------------

--
-- Table structure for table `pictures`
--

CREATE TABLE `pictures` (
  `projectId` int(11) NOT NULL,
  `picture` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pictures`
--

INSERT INTO `pictures` (`projectId`, `picture`) VALUES
(281, 'projects/A1.jpg'),
(281, 'projects/A2.jpg'),
(281, 'projects/A3.jpg'),
(282, 'projects/M1.jpg'),
(282, 'projects/M2.jpg'),
(282, 'projects/M3.jpg'),
(282, 'projects/M4.jpg'),
(283, 'projects/C1.jpg'),
(283, 'projects/C2.jpg'),
(283, 'projects/C3.jpg'),
(283, 'projects/C4.jpg'),
(284, 'projects/E1.jpg'),
(284, 'projects/E2.jpg'),
(284, 'projects/E3.jpg'),
(285, 'projects/V1.jpg'),
(285, 'projects/V2.jpg'),
(285, 'projects/V3.jpg'),
(285, 'projects/V4.jpg'),
(285, 'projects/V5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `content` text NOT NULL,
  `picture` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `type` enum('blog','event','news') NOT NULL,
  `id` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`content`, `picture`, `title`, `type`, `id`, `date`) VALUES
('Before things get too heated, let us jump in and say that both sides make valid points. Using real content during design can distract designers and design review teams alike away from the design, and insisting on always using publication-ready content can be a real drag on the design process. On the other hand, if you use poorly formatted filler text you may get a completely false sense of how your design will interact with real content. We propose a compromise: Only use filler text that has been edited for length and format to match the characteristics of real content as closely as possible, and use real content where possible, and where it doesnâ€™t create too much distraction. Relax and do whatever fits with your design process. Donâ€™t set a lot of restrictive hard-and-fast rules. Use filler text where it helps your design process, but use real content if youâ€™ve got it, as long as it doesnâ€™t distract and slow down your design process. Design is an evolutionary process, and filler text is just one tool in your progress-pushing arsenal. Use it where it makes sense to use it, and pull it once the natural process indicates that itâ€™s time to roll out a descendant built with real content.', 'news/news1.jpg', 'News 1', 'news', 12, '2018-05-12 13:02:36'),
('Before things get too heated, let us jump in and say that both sides make valid points. Using real content during design can distract designers and design review teams alike away from the design, and insisting on always using publication-ready content can be a real drag on the design process. On the other hand, if you use poorly formatted filler text you may get a completely false sense of how your design will interact with real content. We propose a compromise: Only use filler text that has been edited for length and format to match the characteristics of real content as closely as possible, and use real content where possible, and where it doesnâ€™t create too much distraction. Relax and do whatever fits with your design process. Donâ€™t set a lot of restrictive hard-and-fast rules. Use filler text where it helps your design process, but use real content if youâ€™ve got it, as long as it doesnâ€™t distract and slow down your design process. Design is an evolutionary process, and filler text is just one tool in your progress-pushing arsenal. Use it where it makes sense to use it, and pull it once the natural process indicates that itâ€™s time to roll out a descendant built with real content.', 'news/news2.jpg', 'News 2', 'news', 13, '2018-05-12 13:02:48'),
('Before things get too heated, let us jump in and say that both sides make valid points. Using real content during design can distract designers and design review teams alike away from the design, and insisting on always using publication-ready content can be a real drag on the design process. On the other hand, if you use poorly formatted filler text you may get a completely false sense of how your design will interact with real content. We propose a compromise: Only use filler text that has been edited for length and format to match the characteristics of real content as closely as possible, and use real content where possible, and where it doesnâ€™t create too much distraction. Relax and do whatever fits with your design process. Donâ€™t set a lot of restrictive hard-and-fast rules. Use filler text where it helps your design process, but use real content if youâ€™ve got it, as long as it doesnâ€™t distract and slow down your design process. Design is an evolutionary process, and filler text is just one tool in your progress-pushing arsenal. Use it where it makes sense to use it, and pull it once the natural process indicates that itâ€™s time to roll out a descendant built with real content.', 'news/news3.jpg', 'News 3', 'news', 14, '2018-05-12 13:02:59'),
('Before things get too heated, let us jump in and say that both sides make valid points. Using real content during design can distract designers and design review teams alike away from the design, and insisting on always using publication-ready content can be a real drag on the design process. On the other hand, if you use poorly formatted filler text you may get a completely false sense of how your design will interact with real content. We propose a compromise: Only use filler text that has been edited for length and format to match the characteristics of real content as closely as possible, and use real content where possible, and where it doesnâ€™t create too much distraction. Relax and do whatever fits with your design process. Donâ€™t set a lot of restrictive hard-and-fast rules. Use filler text where it helps your design process, but use real content if youâ€™ve got it, as long as it doesnâ€™t distract and slow down your design process. Design is an evolutionary process, and filler text is just one tool in your progress-pushing arsenal. Use it where it makes sense to use it, and pull it once the natural process indicates that itâ€™s time to roll out a descendant built with real content.', 'events/event1.jpg', 'Event 1', 'event', 15, '2018-05-12 13:04:06'),
('Before things get too heated, let us jump in and say that both sides make valid points. Using real content during design can distract designers and design review teams alike away from the design, and insisting on always using publication-ready content can be a real drag on the design process. On the other hand, if you use poorly formatted filler text you may get a completely false sense of how your design will interact with real content. We propose a compromise: Only use filler text that has been edited for length and format to match the characteristics of real content as closely as possible, and use real content where possible, and where it doesnâ€™t create too much distraction. Relax and do whatever fits with your design process. Donâ€™t set a lot of restrictive hard-and-fast rules. Use filler text where it helps your design process, but use real content if youâ€™ve got it, as long as it doesnâ€™t distract and slow down your design process. Design is an evolutionary process, and filler text is just one tool in your progress-pushing arsenal. Use it where it makes sense to use it, and pull it once the natural process indicates that itâ€™s time to roll out a descendant built with real content.', 'events/event2.jpg', 'Event 2', 'event', 16, '2018-05-12 13:04:15'),
('Before things get too heated, let us jump in and say that both sides make valid points. Using real content during design can distract designers and design review teams alike away from the design, and insisting on always using publication-ready content can be a real drag on the design process. On the other hand, if you use poorly formatted filler text you may get a completely false sense of how your design will interact with real content. We propose a compromise: Only use filler text that has been edited for length and format to match the characteristics of real content as closely as possible, and use real content where possible, and where it doesnâ€™t create too much distraction. Relax and do whatever fits with your design process. Donâ€™t set a lot of restrictive hard-and-fast rules. Use filler text where it helps your design process, but use real content if youâ€™ve got it, as long as it doesnâ€™t distract and slow down your design process. Design is an evolutionary process, and filler text is just one tool in your progress-pushing arsenal. Use it where it makes sense to use it, and pull it once the natural process indicates that itâ€™s time to roll out a descendant built with real content.', 'events/event3.jpg', 'Event 3', 'event', 17, '2018-05-12 13:04:26'),
('Before things get too heated, let us jump in and say that both sides make valid points. Using real content during design can distract designers and design review teams alike away from the design, and insisting on always using publication-ready content can be a real drag on the design process. On the other hand, if you use poorly formatted filler text you may get a completely false sense of how your design will interact with real content. We propose a compromise: Only use filler text that has been edited for length and format to match the characteristics of real content as closely as possible, and use real content where possible, and where it doesnâ€™t create too much distraction. Relax and do whatever fits with your design process. Donâ€™t set a lot of restrictive hard-and-fast rules. Use filler text where it helps your design process, but use real content if youâ€™ve got it, as long as it doesnâ€™t distract and slow down your design process. Design is an evolutionary process, and filler text is just one tool in your progress-pushing arsenal. Use it where it makes sense to use it, and pull it once the natural process indicates that itâ€™s time to roll out a descendant built with real content.', 'blogs/blog1.jpg', 'Blog 1', 'blog', 19, '2018-05-12 13:05:15'),
('Before things get too heated, let us jump in and say that both sides make valid points. Using real content during design can distract designers and design review teams alike away from the design, and insisting on always using publication-ready content can be a real drag on the design process. On the other hand, if you use poorly formatted filler text you may get a completely false sense of how your design will interact with real content. We propose a compromise: Only use filler text that has been edited for length and format to match the characteristics of real content as closely as possible, and use real content where possible, and where it doesnâ€™t create too much distraction. Relax and do whatever fits with your design process. Donâ€™t set a lot of restrictive hard-and-fast rules. Use filler text where it helps your design process, but use real content if youâ€™ve got it, as long as it doesnâ€™t distract and slow down your design process. Design is an evolutionary process, and filler text is just one tool in your progress-pushing arsenal. Use it where it makes sense to use it, and pull it once the natural process indicates that itâ€™s time to roll out a descendant built with real content.', 'blogs/blog2.jpg', 'Blog 2', 'blog', 20, '2018-05-12 13:05:26'),
('Before things get too heated, let us jump in and say that both sides make valid points. Using real content during design can distract designers and design review teams alike away from the design, and insisting on always using publication-ready content can be a real drag on the design process. On the other hand, if you use poorly formatted filler text you may get a completely false sense of how your design will interact with real content. We propose a compromise: Only use filler text that has been edited for length and format to match the characteristics of real content as closely as possible, and use real content where possible, and where it doesnâ€™t create too much distraction. Relax and do whatever fits with your design process. Donâ€™t set a lot of restrictive hard-and-fast rules. Use filler text where it helps your design process, but use real content if youâ€™ve got it, as long as it doesnâ€™t distract and slow down your design process. Design is an evolutionary process, and filler text is just one tool in your progress-pushing arsenal. Use it where it makes sense to use it, and pull it once the natural process indicates that itâ€™s time to roll out a descendant built with real content.', 'blogs/blog3.jpg', 'Blog 3', 'blog', 21, '2018-05-12 13:05:37');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `videoLink` varchar(100) DEFAULT NULL,
  `id` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`title`, `description`, `videoLink`, `id`, `date`) VALUES
('Project 1 Astronomy/education', 'If youâ€™re thinking that filler text seems pretty boring and uncontroversial, youâ€™d be wrong. Surprisingly, there is a very vocal faction of the design community that wants to see filler text banished to the original sources from whence it came. Perhaps not surprisingly, in an era of endless quibbling, there is an equally vocal contingent of designers leaping to defend the use of the time-honored tradition of greeking. The argument in favor of using filler text goes something like this: If you use real content in the design process, anytime you reach a review point youâ€™ll end up reviewing and negotiating the content itself and not the design. This will just slow down the design process. Design first, with real content in mind (of course!), but donâ€™t drop in the real content until the design is well on its way. Using filler text avoids the inevitable argumentation that accompanies the use of real content in the design process. Those opposed to using filler text of any sort counter by saying: The ultimate purpose of any digital product, whether a website, app, or HTML email, is to showcase real content, not to showcase great design. You canâ€™t get a true sense for how your content plays with your design unless you use the real thing!', 'videos/mermaid.mp4', 281, '2018-05-12 17:21:53'),
('Project 2 medical/education', 'If youâ€™re thinking that filler text seems pretty boring and uncontroversial, youâ€™d be wrong. Surprisingly, there is a very vocal faction of the design community that wants to see filler text banished to the original sources from whence it came. Perhaps not surprisingly, in an era of endless quibbling, there is an equally vocal contingent of designers leaping to defend the use of the time-honored tradition of greeking. The argument in favor of using filler text goes something like this: If you use real content in the design process, anytime you reach a review point youâ€™ll end up reviewing and negotiating the content itself and not the design. This will just slow down the design process. Design first, with real content in mind (of course!), but donâ€™t drop in the real content until the design is well on its way. Using filler text avoids the inevitable argumentation that accompanies the use of real content in the design process. Those opposed to using filler text of any sort counter by saying: The ultimate purpose of any digital product, whether a website, app, or HTML email, is to showcase real content, not to showcase great design. You canâ€™t get a true sense for how your content plays with your design unless you use the real thing!', 'videos/beauty.mp4', 282, '2018-05-12 17:21:53'),
('Project 3 ComputerScenice/engineering', 'If youâ€™re thinking that filler text seems pretty boring and uncontroversial, youâ€™d be wrong. Surprisingly, there is a very vocal faction of the design community that wants to see filler text banished to the original sources from whence it came. Perhaps not surprisingly, in an era of endless quibbling, there is an equally vocal contingent of designers leaping to defend the use of the time-honored tradition of greeking. The argument in favor of using filler text goes something like this: If you use real content in the design process, anytime you reach a review point youâ€™ll end up reviewing and negotiating the content itself and not the design. This will just slow down the design process. Design first, with real content in mind (of course!), but donâ€™t drop in the real content until the design is well on its way. Using filler text avoids the inevitable argumentation that accompanies the use of real content in the design process. Those opposed to using filler text of any sort counter by saying: The ultimate purpose of any digital product, whether a website, app, or HTML email, is to showcase real content, not to showcase great design. You canâ€™t get a true sense for how your content plays with your design unless you use the real thing!', 'videos/mermaid.mp4', 283, '2018-05-12 17:21:53'),
('Project 4 education', 'If youâ€™re thinking that filler text seems pretty boring and uncontroversial, youâ€™d be wrong. Surprisingly, there is a very vocal faction of the design community that wants to see filler text banished to the original sources from whence it came. Perhaps not surprisingly, in an era of endless quibbling, there is an equally vocal contingent of designers leaping to defend the use of the time-honored tradition of greeking. The argument in favor of using filler text goes something like this: If you use real content in the design process, anytime you reach a review point youâ€™ll end up reviewing and negotiating the content itself and not the design. This will just slow down the design process. Design first, with real content in mind (of course!), but donâ€™t drop in the real content until the design is well on its way. Using filler text avoids the inevitable argumentation that accompanies the use of real content in the design process. Those opposed to using filler text of any sort counter by saying: The ultimate purpose of any digital product, whether a website, app, or HTML email, is to showcase real content, not to showcase great design. You canâ€™t get a true sense for how your content plays with your design unless you use the real thing!', 'videos/mermaid.mp4', 284, '2018-05-12 17:21:53'),
('Project 5 Civil/engineering', 'If youâ€™re thinking that filler text seems pretty boring and uncontroversial, youâ€™d be wrong. Surprisingly, there is a very vocal faction of the design community that wants to see filler text banished to the original sources from whence it came. Perhaps not surprisingly, in an era of endless quibbling, there is an equally vocal contingent of designers leaping to defend the use of the time-honored tradition of greeking. The argument in favor of using filler text goes something like this: If you use real content in the design process, anytime you reach a review point youâ€™ll end up reviewing and negotiating the content itself and not the design. This will just slow down the design process. Design first, with real content in mind (of course!), but donâ€™t drop in the real content until the design is well on its way. Using filler text avoids the inevitable argumentation that accompanies the use of real content in the design process. Those opposed to using filler text of any sort counter by saying: The ultimate purpose of any digital product, whether a website, app, or HTML email, is to showcase real content, not to showcase great design. You canâ€™t get a true sense for how your content plays with your design unless you use the real thing!', 'videos/beauty.mp4', 285, '2018-05-12 17:21:53');

-- --------------------------------------------------------

--
-- Table structure for table `researcher`
--

CREATE TABLE `researcher` (
  `projectId` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `researcherId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `researcher`
--

INSERT INTO `researcher` (`projectId`, `name`, `researcherId`) VALUES
(281, 'default', 47),
(281, 'default', 48),
(281, 'default', 49),
(281, 'default', 50),
(282, 'default', 47),
(282, 'default', 49),
(282, 'default', 51),
(282, 'default', 52),
(283, 'default', 47),
(283, 'default', 48),
(283, 'default', 49),
(283, 'default', 52),
(284, 'default', 48),
(284, 'default', 51),
(284, 'default', 52),
(285, 'default', 47),
(285, 'default', 48),
(285, 'default', 49),
(285, 'default', 50),
(285, 'default', 51),
(285, 'default', 52);

-- --------------------------------------------------------

--
-- Table structure for table `researchfield`
--

CREATE TABLE `researchfield` (
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `researchfield`
--

INSERT INTO `researchfield` (`name`) VALUES
('astronomy'),
('ComputerScience'),
('education'),
('engineering'),
('medical');

-- --------------------------------------------------------

--
-- Table structure for table `teammembers`
--

CREATE TABLE `teammembers` (
  `fieldsOfResearch` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `researcherID` int(11) NOT NULL,
  `picture` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teammembers`
--

INSERT INTO `teammembers` (`fieldsOfResearch`, `name`, `title`, `researcherID`, `picture`) VALUES
('astronomy', 'Rachel Green', 'member1', 47, 'members/member3.jpg'),
('Computer', 'Phoebe Buffay', 'member2', 48, 'members/member4.jpg'),
('education', 'Joey Tribbiani', 'member3', 49, 'members/member6.jpg'),
('engineering', 'Chandler Bing', 'member4', 50, 'members/member1.jpg'),
('medical', 'Monica Geller', 'member5', 51, 'members/member5.jpg'),
('education', 'Ross Geller', 'member6', 52, 'members/member2.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fields`
--
ALTER TABLE `fields`
  ADD PRIMARY KEY (`projectId`,`fieldsOfResearch`),
  ADD KEY `fieldsOfResearch` (`fieldsOfResearch`);

--
-- Indexes for table `pictures`
--
ALTER TABLE `pictures`
  ADD PRIMARY KEY (`projectId`,`picture`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `researcher`
--
ALTER TABLE `researcher`
  ADD PRIMARY KEY (`projectId`,`researcherId`),
  ADD KEY `researcherId` (`researcherId`);

--
-- Indexes for table `researchfield`
--
ALTER TABLE `researchfield`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `teammembers`
--
ALTER TABLE `teammembers`
  ADD PRIMARY KEY (`researcherID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=287;

--
-- AUTO_INCREMENT for table `teammembers`
--
ALTER TABLE `teammembers`
  MODIFY `researcherID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `fields`
--
ALTER TABLE `fields`
  ADD CONSTRAINT `fields_ibfk_1` FOREIGN KEY (`projectId`) REFERENCES `project` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fields_ibfk_2` FOREIGN KEY (`fieldsOfResearch`) REFERENCES `researchfield` (`name`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `pictures`
--
ALTER TABLE `pictures`
  ADD CONSTRAINT `pictures_ibfk_1` FOREIGN KEY (`projectId`) REFERENCES `project` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `researcher`
--
ALTER TABLE `researcher`
  ADD CONSTRAINT `researcher_ibfk_1` FOREIGN KEY (`projectId`) REFERENCES `project` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `researcher_ibfk_2` FOREIGN KEY (`researcherId`) REFERENCES `teammembers` (`researcherID`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
