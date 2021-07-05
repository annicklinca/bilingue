-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 15, 2021 at 08:23 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `delicious`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `philosophy` text NOT NULL,
  `category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `title`, `image`, `philosophy`, `category`) VALUES
(1, 'Our Philosphy:', '', '“Always Putting Clients and Their Values First in Therapy.”	', 'kick'),
(2, 'Our Vision:', '', 'Anew Journey Counseling is dedicated to restoring, sustaining and enhancing our clients’ psychological and behavioral wellbeing. We maintain the highest level of professional standards to improve the lives of our patients and their families.', 'kill'),
(3, 'Why Choose us', '', '\"If you change the way you look at things,\r\nthe things you look at change.\"\r\n', 'soon'),
(4, 'Wayne Bishop is the founder and a practicing psychotherapist of A New Journey Counseling Services. ', '', 'He is a Licensed Associate Counselor with more than 6 years of experience and his practice includes adolescent, adult, group, and program setting Cognitive Behavioral therapy, Client-Centered therapy, Art therapy, and Family Systems therapy. ', 'wayne'),
(5, 'Background, Education', '', 'Wayne received his undergraduate degree Bachelors of Criminal Justice at Fairleigh Dickinson University located in Teaneck-Hackensack, NJ.  Wayne would later work with at-risk inner-city youth in Central New Jersey and Philadelphia before joining the Unites States Navy for 8 years of active duty service, where he developed an interest and passion for education himself therapy for trauma and depression with military members.  Wayne would complete his contract with Honorable discharge and later graduate from Argosy University Phoenix, AZ campus with his Master’s degree in Mental Health Counseling in2014. \r\nWayne began his therapeutic work with Mountain Valley Counseling providing clinical groups and individual sessions for maladaptive sexual behaviors, depression, substance use, and anxiety. He would later transition to working for multiple companies providing individual, group, and family therapy for the Gila River population. \r\n\r\n\r\nHe would open A New Journey Counseling Services in 2019.\r\n', 'wayne1');

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` int(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `title`, `description`, `category`) VALUES
(1, ' HOW CAN A COUNSELOR HELP ME?', 'Once you give yourself, or loved one, the gift of seeing a counselor - you will start to notice positive changes. As your psychotherapist, we will help build you up to be the best version of yourself. We will help you create realistic goals and get you to actually reach those goals. You will feel confident and ready to take on anything that comes your way!', 'one'),
(2, ' WHAT IS THE LENGTH OF THERAPY TREATMENT?', 'We are all looking to feel better right away. Coming in for counseling can help you get on that track to feeling better. Each person has a different outcome they want to get from therapy. Since you have your own specific goal, we cannot tell you an exact amount of sessions it will take to reach. In our professional experience, with a Cognitive-Behavioral Therapy (CBT) approach, we will typically spend about 3 months (or 12 sessions) to accomplish your goal. It is possible that after 3 months you will have more goals to accomplish and you will want to extend more sessions. We don’t have any set rules in therapy and we are aware things come up in life that add new stress that you may want to address.', 'two'),
(3, 'WHO DO YOU SPECIALIZE IN HELPLING?', '-Individual therapy for children (ages 6+)<br>\r\n-Teens <be>\r\n-Individual therapy for young adults (20’s and 50’s year olds)<br>\r\n-Parents (parenting and fatherhood issues)<br>\r\n-Public Services workers, e.g. police officers, military, veterans, fire fighters, teachers, etc.<br>\r\nContracted services for residential and outpatient programs/facilities\r\n', 'three'),
(4, 'WHAT ISSUES DO YOU PROVIDE SERVICES FOR?', '-Anxiety<br>\r\n-Depression<br>\r\n-Trauma<br>\r\n-Parenting (Assisting with child behavioral issues (in school, home, community settings)<br>\r\n-Grief<br>\r\n-Behavioral Issues<br>\r\n-Work Problems<br>\r\n-Anger Management<br>\r\n-Sexual Maladaptive/Unhealthy ------ <br>\r\n-Behaviors<br>\r\n-Development of Life goals/purpose<br>\r\n-Life transitions (applying to colleges or jobs, attending college, job change, getting married, getting pregnant, having a baby, identity seeking, going through a breakup, etc.)\r\n', 'four');

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `id` int(11) NOT NULL,
  `images` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`id`, `images`, `title`, `description`, `category`) VALUES
(1, '', 'Welcome to the A New Journey Counseling Services\r\n', 'A New Journey Counseling Services, located in Tempe, AZ, is a private practice offering mental health services to adolescents, adults, residential and outpatient programs and facilities located in Maricopa counties. Our team of highly qualified profession', 'new'),
(2, '', 'Welcome to the A New Journey Counseling Services', 'We utilize the most up-to-date psychotherapy techniques to improve the overall health and wellness of our patients and their families. A New Journey Counseling Services is committed to providing every client with prompt, courteous and complete care in a p', 'skills');

-- --------------------------------------------------------

--
-- Table structure for table `help`
--

CREATE TABLE `help` (
  `id` int(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `help`
--

INSERT INTO `help` (`id`, `title`, `description`, `category`) VALUES
(1, ' I DON’T FEEL LIKE I HAVE A MAJOR PROBLEM. CAN I STILLBENEFIT FROM THERAPY? ', 'Yes, definitely! Therapy can help you through life transitions or stressors that you are experiencing. Your counseling sessions can be a time that you give yourself self-care in which you are able to fully focus on yourself and your goals in life. Your counselor can also be someone who helps keep you accountable towards reaching your goals and will be there to support you along the way with any stressors or barriers come your way.', 'help1'),
(2, 'DO YOU ACCEPT HEALTHY INSURANCE?', 'While we currently don\'t accept insurance directly, we can provide you with a Superbill (like a detailed receipt) in which you can get reimbursed for sessions from your insurance company. Please contact your insurance to find out more about your out-of-network benefits, coinsurance, deductibles, and how many sessions they will cover. We understand how confusing and frustrating insurance benefits can be so we can help talk you through it so that we can help you get the maximum benefits possible out of your insurance plan. Our clients find it very easy to submit the Superbill and get reimbursed (usually around 60-80% per session) when they have out-of-network benefits. \r\n<br>\r\n• You can also use your HSA (Health Savings Account) or FSA (Flexible Spending Account) to pay for sessions.<br>\r\n• The benefits and value you gain from therapy will not end at our last session together - you can carry them with you for the rest of your life. When you accomplish the goals you set out in therapy, you will be able to take on anything that comes your way in the future. When you pay for therapy sessions, you are investing in a better life.\r\n', 'help2'),
(3, 'HOW DO I PAY FOR THERAPY SESSIONS?\r\n', 'Payment is due at the time of service. Payment methods accepted: Credit Cards, Debit Cards, Health Savings Account (HSA), and Flexible Savings Account (FSA).', 'help3'),
(4, 'WHAT IF I CANNOT MAKE IT TO A SESSION?', 'You have the flexibility to cancel or reschedule a session up to 24 hours before the appointment time. Cancellations made with less than 24 hours-notice will incur a fee.', 'help4'),
(5, ' WHERE ARE YOU LOCATED?', 'Our office is located in the Wells Fargo building, address; 64 East Broadway Road, Suite 200, Tempe, AZ. We also provide virtual, phone, in-home, and in-community sessions for individuals residing in the greater Phoenix area.', 'help5'),
(6, 'OKAY I THINKIN I’M INTERESTED, NOW WHAT?', 'The first step is to fill out the form below. This will give us a chance to get to know you and what you’re looking for help with in therapy. We can explain to you further how we can help you, your child, or facility (residential or outpatient). If we are a good fit then we will schedule an initial appointment. We provide in-person therapy sessions at out Tempe location as well as online, in-home, the community, or your facility program in the greater Phoenix, AZ. Once we meet, you will see that therapy isn’t so scary and that it really is just a place for you to feel calm and comfortable to speak your mind. Counseling gives you an opportunity and the skills to work towards feeling better. If the therapy is for your child, your child will feel safe to express themselves through play, art, and other forms of healthy self-expression.', 'help6');

-- --------------------------------------------------------

--
-- Table structure for table `special`
--

CREATE TABLE `special` (
  `id` int(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `special`
--

INSERT INTO `special` (`id`, `title`, `content`, `category`) VALUES
(1, '\r\nOur staff specializes in a variety of areas, including the following:\r\n', '•Family Issues	', 'kila'),
(2, '', '\r\n\r\n•Depression	\r\n\r\n	', 'kily'),
(3, '', '•Teen Counseling	', 'kili'),
(4, '', '•Anger/Mood Management	', 'kilu'),
(5, '', '•Contracted Residential program services', 'ok1'),
(6, '', '•Contracted Outpatient program services', 'ok2'),
(7, '', '•ADHD Assessment and Counseling', 'ok3'),
(8, '', '•Communication Skills', 'ok4'),
(9, '', '•Adolescent and Young Adult Therapy	', 'kil'),
(10, '', '•Anxiety Disorders	', 'kir'),
(11, '', '•Telehealth Services	', 'kik'),
(12, '', '•Sexual Maladaptive Behavior Counseling', 'ok5'),
(13, '', '•Individual/Group Counseling', 'ok6'),
(14, '', '•Domestic Violence Issues\r\n', 'ok7');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `testimony` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `title`, `testimony`, `image`, `category`) VALUES
(1, 'David Bryan', 'ANJCS helped me alot to put myself together', '', 'test1'),
(2, 'Kevin Durant', 'ANJCS is tbe best place for all counseling services', '', 'test2'),
(3, 'Rebecca Harden', 'the best specialist at counceling are found at ANJCS', '', 'test3'),
(4, 'Billy Counta', 'I owe ANJCS for rescuing me', '', 'test4'),
(5, 'Travis Malon', 'Dear parents ANJCS got you', '', 'test5');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `help`
--
ALTER TABLE `help`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `special`
--
ALTER TABLE `special`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `help`
--
ALTER TABLE `help`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `special`
--
ALTER TABLE `special`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
