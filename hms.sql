-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 04, 2021 at 02:33 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hms`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `sno` int(11) NOT NULL,
  `user_emailid` varchar(30) NOT NULL,
  `doc_emailid` varchar(30) NOT NULL,
  `specialization` varchar(30) NOT NULL,
  `disease` varchar(30) NOT NULL,
  `appointmentdate` date NOT NULL,
  `appointmenttime` time NOT NULL,
  `consultancyfees` varchar(30) NOT NULL,
  `userstatus` int(11) NOT NULL,
  `doctorstatus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`sno`, `user_emailid`, `doc_emailid`, `specialization`, `disease`, `appointmentdate`, `appointmenttime`, `consultancyfees`, `userstatus`, `doctorstatus`) VALUES
(1, 'ganapathy5@gmail.com', 'venky@gmail.com', 'Dermatology', 'Acne(10days)', '2021-07-30', '16:00:00', '1000', 1, 2),
(2, 'ganapathy5@gmail.com', 'kabilan@gmail.com', 'Dermatology', 'fever(10days)', '2021-07-23', '15:00:00', '1000', 0, 1),
(3, 'ganapathy5@gmail.com', 'kabilan@gmail.com', 'Dermatology', 'fever(15days)', '2021-07-24', '15:00:00', '1000', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `id` int(30) NOT NULL,
  `depart_name` varchar(30) NOT NULL,
  `depart_img` text NOT NULL,
  `depart_para1` text NOT NULL,
  `depart_para2` text NOT NULL,
  `depart_amt` int(11) NOT NULL,
  `depart_mrgtime` time NOT NULL,
  `depart_evetime` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `depart_name`, `depart_img`, `depart_para1`, `depart_para2`, `depart_amt`, `depart_mrgtime`, `depart_evetime`) VALUES
(1, 'Dermatology', 'dermatology.jpg', 'Dermatology is the branch of medicine dealing with the skin. It is a specialty with both medical and surgical aspects. A dermatologist is a specialist doctor who manages diseases related to skin, hair, and nails, and some cosmetic problems.', 'Dermatologists have been leaders in the field of cosmetic surgery. Some dermatologists complete fellowships in surgical dermatology. Many are trained in their residency on the use of botulinum toxin, fillers, and laser surgery. Some dermatologists perform cosmetic procedures including liposuction, blepharoplasty, and facelifts. Most dermatologists limit their cosmetic practice to minimally invasive procedures. Despite an absence of formal guidelines from the American Board of Dermatology, many cosmetic fellowships are offered in both surgery and laser medicine.', 1000, '10:00:00', '15:00:00'),
(2, 'Orthopedic', 'Orthopedic.jpg', 'According to applications for board certification from 1999 to 2003, the top 25 most common procedures (in order) performed by orthopedic surgeons are as follows:', '1.Knee arthroscopy and meniscectomy\r\n\r\n2.Shoulder arthroscopy and decompression\r\n\r\n3.Carpal tunnel release\r\n\r\n4.Knee arthroscopy and chondroplasty\r\n\r\n5.Removal of support implant\r\n\r\n6.Knee arthroscopy and anterior cruciate ligament reconstruction\r\n\r\n7.Knee replacement\r\n\r\n8.Repair of femoral neck fracture\r\n\r\n9.Repair of trochanteric fracture\r\n\r\n10.Debridement of skin/muscle/bone/fracture', 1200, '11:00:00', '15:00:00'),
(3, 'Neurology', 'neurology.jpg', 'Neurology is a branch of medicine dealing with disorders of the nervous system. Neurology deals with the diagnosis and treatment of all categories of conditions and diseases involving the central and peripheral nervous systems (and their subdivisions, the autonomic and somatic nervous systems), including their coverings, blood vessels, and all effector tissue, such as muscle. Neurological practice relies heavily on the field of neuroscience, the scientific study of the nervous system.', 'Neurologists are responsible for the diagnosis, treatment, and management of all the conditions mentioned above. When surgical or endovascular intervention is required, the neurologist may refer the patient to a neurosurgeon or an interventional neuroradiologist. In some countries, additional legal responsibilities of a neurologist may include making a finding of brain death when it is suspected that a patient has died. Neurologists frequently care for people with hereditary (genetic) diseases when the major manifestations are neurological, as is frequently the case. Lumbar punctures are frequently performed by neurologists. Some neurologists may develop an interest in particular subfields, such as stroke, dementia, movement disorders, neurointensive care, headaches, epilepsy, sleep disorders, chronic pain management, multiple sclerosis, or neuromuscular diseases.', 1300, '08:00:00', '13:00:00'),
(5, 'Cardiology', 'Cardiology.jpg', 'Cardiology is a branch of medicine that deals with the disorders of the heart as well as some parts of the circulatory system. The field includes medical diagnosis and treatment of congenital heart defects, coronary artery disease, heart failure, valvular heart disease and electrophysiology. Physicians who specialize in this field of medicine are called cardiologists, a specialty of internal medicine. Pediatric cardiologists are pediatricians who specialize in cardiology. Physicians who specialize in cardiac surgery are called cardiothoracic surgeons or cardiac surgeons, a specialty of general surgery.', 'Cardiac electrophysiology is the science of elucidating, diagnosing, and treating the electrical activities of the heart. The term is usually used to describe studies of such phenomena by invasive (intracardiac) catheter recording of spontaneous activity as well as of cardiac responses to programmed electrical stimulation (PES). These studies are performed to assess complex arrhythmias, elucidate symptoms, evaluate abnormal electrocardiograms, assess risk of developing arrhythmias in the future, and design treatment. These procedures increasingly include therapeutic methods (typically radiofrequency ablation, or cryoablation) in addition to diagnostic and prognostic procedures. Other therapeutic modalities employed in this field include antiarrhythmic drug therapy and implantation of pacemakers and automatic implantable cardioverter-defibrillators (AICD).', 3500, '08:00:00', '15:00:00'),
(6, 'Emergency', 'Emergency.jpg', 'An emergency department (ED), also known as an accident & emergency department (A&E), emergency room (ER), emergency ward (EW), or casualty department, is a medical treatment facility specializing in emergency medicine, the acute care of patients who present without prior appointment either by their own means or by that of an ambulance. The emergency department is usually found in a hospital or other primary care center.', 'Due to the unplanned nature of patient attendance, the department must provide initial treatment for a broad spectrum of illnesses and injuries, some of which may be life-threatening and require immediate attention. In some countries, emergency departments have become important entry points for those without other means of access to medical\r\nThe emergency departments of most hospitals operate 24 hours a day, although staffing levels may be varied in an attempt to reflect patient volume.', 500, '08:00:00', '16:00:00'),
(7, 'Audiology', 'Audiology.jpg', 'The Audiologist is the professional responsible for the identification of impairments and dysfunction of the Auditory, balance, and other related systems. Their unique education and training provides them with the skills to assess and diagnose dysfunction in hearing, auditory function, balance, and related disorders', 'Audiologists are health care professionals who diagnose, manage and treat hearing, balance, or ear problems. They work in the field of audiology, which is the science of hearing and balance. They determine the severity and type of hearing loss a patient has and develop a plan for treatment .', 3500, '08:00:00', '14:00:00'),
(8, 'Physiotheraphy', 'Physiotheraphy.jpg', 'Cardiovascular and pulmonary rehabilitation respiratory practitioners and physical therapists offer therapy for a wide variety of cardiopulmonary disorders or pre and postcardiac or pulmonary surgery. An example of cardiac surgery is coronary bypass surgery. The primary goals of this specialty include increasing endurance and functional independence. Manual therapy is used in this field to assist in clearing lung secretions experienced with cystic fibrosis. Pulmonary disorders, heart attacks, post coronary bypass surgery, chronic obstructive pulmonary disease, and pulmonary fibrosis, treatments can benefit[citation needed] from cardiovascular and pulmonary specialized physical therapists.', 'Physical therapy (PT), also known as physiotherapy, is one of the healthcare professions. Physical therapy is provided by physical therapists who promote, maintain, or restore health through physical examination, diagnosis, prognosis, patient education, physical intervention, rehabilitation, disease prevention, and health promotion. Physical therapists are known as physiotherapists in many countries', 2000, '10:00:00', '15:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `doctable`
--

CREATE TABLE `doctable` (
  `doc_emailid` varchar(30) NOT NULL,
  `docname` varchar(50) NOT NULL,
  `docnum` bigint(10) NOT NULL,
  `docgender` varchar(30) NOT NULL,
  `specilaization` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `confirmpassword` varchar(50) NOT NULL,
  `consultancyfees` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctable`
--

INSERT INTO `doctable` (`doc_emailid`, `docname`, `docnum`, `docgender`, `specilaization`, `password`, `confirmpassword`, `consultancyfees`) VALUES
('deanthomas@gmail.com', 'Dr.Dean Thomas', 6548790123, 'Male', 'Cardiology', '123', '123', '2000'),
('dharma@gmail.com', 'Dharma Devan', 6879054112, 'Male', 'Neurology', '123', '123', '2000'),
('jagadesan@gmail.com', 'Jagadesan', 6791223290, 'Male', 'Neurology', '123', '123', '2000'),
('jerry@gmail.com', 'Dr.Jerry McStanton', 6357678378, 'Male', 'Emergency', '123', '123', '500'),
('kabilan@gmail.com', 'kabilan', 6789563489, 'Male', 'Dermatology', '123', '123', '1000'),
('krishna@gmail.com', 'krishna', 8679097901, 'Male', 'Cardiology', '123', '123', '2000'),
('lewisparole@gmail.com', 'Dr.Lewis Parole', 9875451218, 'Male', 'Orthopedic', '123', '123', '1200'),
('maryedward@gmail.com', 'Dr.Mary Edwards Walker', 8967543290, 'Male', 'Physiotheraphy', '123', '123', '2000'),
('praveen@gmail.com', 'Praveen', 8942865543, ' Male', 'Cardiology', '123', '123', '2000'),
('raji@gmail.com', 'Raji Lakshmi', 6798543290, 'Female', 'Emergency', '123', '123', '500'),
('rajini@gmail.com', 'Rajinimurugan', 8273890045, ' Male', 'Dermatology', '123', '123', '1000'),
('selwin@gmail.com', 'Selwin landis', 6754918712, 'Male', 'Emergency', '123', '123', '500'),
('tamilan@gmail.com', 'Tamilan', 7896570033, ' Male', 'Dermatology', '123', '123', '1000'),
('tom@gmail.com', 'Dr.Tom Neville', 6798549019, 'Male', 'Emergency', '123', '123', '500'),
('venky@gmail.com', 'vengadesh K S', 6798571726, 'Male', 'Dermatology', '123', '123', '1000');

-- --------------------------------------------------------

--
-- Table structure for table `pattable`
--

CREATE TABLE `pattable` (
  `fullname` varchar(30) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phoneno` bigint(10) NOT NULL,
  `password` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pattable`
--

INSERT INTO `pattable` (`fullname`, `email`, `phoneno`, `password`, `gender`) VALUES
('Bagadeesh kumar', 'bagi@gmail.com', 8098107760, '123', 'Male'),
('Ganapathy Subramanian', 'ganapathy5@gmail.com', 6385470031, '123', 'male'),
('Kamesh Babu', 'kamesh212@gmail.com', 8097654320, '123', 'Male'),
('Krishna', 'krishna@gmail.com', 6384790045, '123', 'Male'),
('Nani', 'nani@gmail.com', 7892392256, '123', 'Male'),
('Rahul', 'Rahul@gmail.com', 8098108869, '123', 'Male'),
('Rama', 'rama@gmail.com', 8434037853, '123', 'Male'),
('Kanaga Lakshmi.R', 'rkl2000srtrk@gmail.com', 8695845296, '123456', 'Female'),
('Sakshi', 'sakshishantilal@gmail.com', 8220597658, 'sak', 'Female'),
('Sharmila', 'sharmaila@gmail.com', 123457890, '123', 'female'),
('velmurugan', 'vel@gmail.com', 6789032567, '123', 'Male'),
('vengadesh', 'venky@gmail.com', 8098108869, '123', 'male');

-- --------------------------------------------------------

--
-- Table structure for table `prescription`
--

CREATE TABLE `prescription` (
  `sno` int(11) NOT NULL,
  `doc_emailid` varchar(50) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `user_emailid` varchar(50) NOT NULL,
  `mobile` bigint(10) NOT NULL,
  `adate` date NOT NULL,
  `atime` time NOT NULL,
  `gender` varchar(10) NOT NULL,
  `cfees` varchar(50) NOT NULL,
  `disease` varchar(50) NOT NULL,
  `medicine` varchar(50) NOT NULL,
  `meet` varchar(50) NOT NULL,
  `message` varchar(255) NOT NULL,
  `status` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prescription`
--

INSERT INTO `prescription` (`sno`, `doc_emailid`, `fullname`, `user_emailid`, `mobile`, `adate`, `atime`, `gender`, `cfees`, `disease`, `medicine`, `meet`, `message`, `status`) VALUES
(11, 'venky@gmail.com', 'Ganapathy Subramanian', 'ganapathy5@gmail.com', 6385470031, '2021-07-30', '16:00:00', 'male', '1000', 'Acne(10days)', 'Acne Vanishing Combo', 'Not need', 'Bought the product online and use daily at early morning', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctable`
--
ALTER TABLE `doctable`
  ADD PRIMARY KEY (`doc_emailid`);

--
-- Indexes for table `pattable`
--
ALTER TABLE `pattable`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `prescription`
--
ALTER TABLE `prescription`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `prescription`
--
ALTER TABLE `prescription`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
