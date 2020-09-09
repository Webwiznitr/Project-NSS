--
-- Database: `phpsamples`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_image`
--

CREATE TABLE `tbl_image` (
  `id` int(8) NOT NULL,
  `name` varchar(255) NOT NULL,
  `path` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_image`
--

INSERT INTO `tbl_image` (`id`, `name`, `path`) VALUES
(1, 'Nature', 'gallery/photo1.jpeg'),
(2, 'water', 'gallery/photo8.jpeg'),
(3, 'water', 'gallery/photo2.jpeg'),
(4, 'sunny', 'gallery/photo3.jpeg'),
(5, 'Air', 'gallery/photo4.jpeg'),
(6, 'water', 'gallery/image9.jpg'),
(7, 'water', 'gallery/photo5.jpeg'),
(8, 'water', 'gallery/photo7.jpeg'),
(9, 'water', 'gallery/photo6.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_image`
--
ALTER TABLE `tbl_image`
  ADD PRIMARY KEY (`id`);
COMMIT;