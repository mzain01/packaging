-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 24, 2024 at 01:42 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `needpackaging`
--

-- --------------------------------------------------------

--
-- Table structure for table `custom`
--

CREATE TABLE `custom` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `custom`
--

INSERT INTO `custom` (`id`, `name`) VALUES
(1, ' Banners'),
(2, ' Brochures'),
(3, 'Catalogs & Magazines'),
(4, 'Envelopes'),
(5, ' Invitation Cards'),
(6, 'Posters'),
(7, 'Business Cards'),
(8, 'Flyers'),
(9, 'Labels & Stickers'),
(10, ' Paper Bags'),
(11, ' Post Cards'),
(12, ' Letterheads');

-- --------------------------------------------------------

--
-- Table structure for table `customproduct`
--

CREATE TABLE `customproduct` (
  `id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_short_desc` varchar(500) NOT NULL,
  `product_long_desc` varchar(1000) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `product_img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customproduct`
--

INSERT INTO `customproduct` (`id`, `product_name`, `product_short_desc`, `product_long_desc`, `cat_id`, `product_img`) VALUES
(9, 'Indoor Banner', 'Want to grab attention wherever you go? Well, Plus Printers has got you covered with our Indoor Banners. Whether you\'re hosting a trade show, exhibition, or a promotional event, our banners are sure to make a statement. And guess what? You won\'t have to worry about any hidden charges because our pricing is totally transparent. We make our Indoor Banners with high-quality materials, so they\'re super durable and have vibrant printing that really makes your message pop. When you choose Plus Printer', 'Want to grab attention wherever you go? Well, Plus Printers has got you covered with our Indoor Banners. Whether you\'re hosting a trade show, exhibition, or a promotional event, our banners are sure to make a statement. And guess what? You won\'t have to worry about any hidden charges because our pricing is totally transparent. We make our Indoor Banners with high-quality materials, so they\'re super durable and have vibrant printing that really makes your message pop. When you choose Plus Printers, you can easily create an eye-catching display that will make you stand out from the crowd.', 1, 'ban-2.webp'),
(10, 'Outdoor Banner', 'Outdoor Banners are designed to grab attention with their bright colors and clear images. And guess what? They\'re not just eye-catching, they\'re also super durable and can handle any kind of weather. The best part is, you can customize these banners to fit your needs perfectly. You can choose the design that\'s just right for you and make sure your message gets across loud and clear. Plus, with Plus Printers, you get free shipping, so you don\'t have to worry about any extra costs. Whether you\'re ', 'Outdoor Banners are designed to grab attention with their bright colors and clear images. And guess what? They\'re not just eye-catching, they\'re also super durable and can handle any kind of weather. The best part is, you can customize these banners to fit your needs perfectly. You can choose the design that\'s just right for you and make sure your message gets across loud and clear. Plus, with Plus Printers, you get free shipping, so you don\'t have to worry about any extra costs. Whether you\'re promoting an event, doing some advertising, or just want to get noticed, our Outdoor Banners will help you make a big impact without any hassle. So go ahead and get noticed with Plus Printers today!', 1, 'ban-1.webp'),
(11, 'Pole Banner', 'Looking for a way to advertise and get your message out there? Well, look no further! At Plus Printers, we\'ve got just what you need: custom pole banners. These banners are fully customizable, meaning you can pick the size and style that fits your vision perfectly. But here\'s the really cool part - our pole banners are made to go the distance. They\'re crafted with expertise to be super visible and durable, no matter what the weather is like. So whether you\'re a business, hosting an event, or any', 'Looking for a way to advertise and get your message out there? Well, look no further! At Plus Printers, we\'ve got just what you need: custom pole banners. These banners are fully customizable, meaning you can pick the size and style that fits your vision perfectly. But here\'s the really cool part - our pole banners are made to go the distance. They\'re crafted with expertise to be super visible and durable, no matter what the weather is like. So whether you\'re a business, hosting an event, or anything else, our pole banners can help you grab attention and make a statement. And guess what? You won\'t have to sacrifice quality. Our pole banners are top-notch and will effectively showcase your brand. So why wait? Choose Plus Printers for the highest quality pole banners that\'ll help you get noticed.', 1, 'ban-3.webp'),
(12, 'Vinyl Banner', 'Looking to get your message out there in a big way? Look no further than Vinyl Banners from Plus Printers. Our vinyl banners come in different sizes and designs to meet your specific needs. We\'ve got you covered whether you\'re promoting a sale, advertising an event, or trying to get more visibility for your brand. Our vinyl banners are made with top-quality materials and have eye-catching graphics that really grab attention. And the best part? You can customize your banner to match your vision e', 'Looking to get your message out there in a big way? Look no further than Vinyl Banners from Plus Printers. Our vinyl banners come in different sizes and designs to meet your specific needs. We\'ve got you covered whether you\'re promoting a sale, advertising an event, or trying to get more visibility for your brand. Our vinyl banners are made with top-quality materials and have eye-catching graphics that really grab attention. And the best part? You can customize your banner to match your vision exactly. So don\'t blend in with the crowd. Stand out and leave a lasting impression with Plus Printers\' customizable vinyl banners. Place your order now and let your message shine.', 1, 'ban-4.webp'),
(13, '10oz Vinyl Banner', 'Get your clients inspired and make your brand stand out with eye-catching and durable 10 oz vinyl banners from Plus Printers. These banners are a perfect match for your products, making them look even better. We use high-quality digital printing to bring out all the vibrant colors and intricate details of your products. These banners are super light and can withstand outdoor events and storefront displays with ease. And guess what? Our expert team is here to help you design your banner for free.', 'Get your clients inspired and make your brand stand out with eye-catching and durable 10 oz vinyl banners from Plus Printers. These banners are a perfect match for your products, making them look even better. We use high-quality digital printing to bring out all the vibrant colors and intricate details of your products. These banners are super light and can withstand outdoor events and storefront displays with ease. And guess what? Our expert team is here to help you design your banner for free. Don\'t settle for less when it comes to packaging. Boost your brand\'s visibility and grab attention with our premium vinyl banners from Plus Printers. Get yours today!', 1, 'ban-5.webp'),
(14, '12oz Vinyl Banner', 'Want to grab attention and make a lasting impression? Check out the Plus Printers 12oz Vinyl Banner. It\'s made with advanced printing technology, so your message will have vibrant colors and sharp details that really stand out. Plus, these banners are perfect for showing off your brand, promoting a special offer, announcing events, and more. They can handle the elements and last a long time, making them great for both indoor and outdoor use. With Plus Printers, you can confidently show off your ', 'Want to grab attention and make a lasting impression? Check out the Plus Printers 12oz Vinyl Banner. It\'s made with advanced printing technology, so your message will have vibrant colors and sharp details that really stand out. Plus, these banners are perfect for showing off your brand, promoting a special offer, announcing events, and more. They can handle the elements and last a long time, making them great for both indoor and outdoor use. With Plus Printers, you can confidently show off your message, knowing that your banner will make a big impact. So go ahead and order now to take your advertising to the next level with Plus Printers\' top-quality vinyl banners.', 1, 'ban-6.webp'),
(15, '11 x 17 Brochure', 'You can get the very best custom 11 x 17 Brochure Printing from our firm. We specialize in dealing with personalized custom 11 x 17 Brochure Printing. Which can be brought at a reasonable rate. These cheap custom 11 x 17 Brochure Printing will provide you with more value for your money. Custom 11 x 17 Brochure Printing printing will ensure that you get a design you are satisfied with. We also deal in wholesale custom 11 x 17 Brochure Printing. These custom boxes produced by us are much stronger ', 'You can get the very best custom 11 x 17 Brochure Printing from our firm. We specialize in dealing with personalized custom 11 x 17 Brochure Printing. Which can be brought at a reasonable rate. These cheap custom 11 x 17 Brochure Printing will provide you with more value for your money. Custom 11 x 17 Brochure Printing printing will ensure that you get a design you are satisfied with. We also deal in wholesale custom 11 x 17 Brochure Printing. These custom boxes produced by us are much stronger than normal retail 8.5 x 11 Brochure Printing.', 2, 'broch-1.webp'),
(16, '8.5 x 11 Brochure', 'Leaflets give awesome degree of profitability and are among the most favored advertising medium as far and wide as possible. They are basic, cheap yet appealing and yield situated items. Notwithstanding being traditional advertising items, leaflets are profoundly acknowledged even in the advanced time of computerized promoting. You can get the very best custom 8.5 x 11 Brochure Printing from our firm. We specialize in dealing with personalized custom Brochure Printing. Which can be brought at a ', 'Leaflets give awesome degree of profitability and are among the most favored advertising medium as far and wide as possible. They are basic, cheap yet appealing and yield situated items. Notwithstanding being traditional advertising items, leaflets are profoundly acknowledged even in the advanced time of computerized promoting. You can get the very best custom 8.5 x 11 Brochure Printing from our firm. We specialize in dealing with personalized custom Brochure Printing. Which can be brought at a reasonable rate. These cheap custom Brochure Printing will provide you with more value for your money. Custom Brochure Printing printing will ensure that you get a design you are satisfied with. We also deal in wholesale custom Brochure Printing. These custom boxes produced by us are much stronger than normal retail 8.5 x 11 Brochure Printing.', 2, 'broch-2.webp'),
(17, '8.5 x 14 Brochure', 'All dynamic organizations around the globe make utilization of leaflets as mandatory promoting parts. These devices are perfect decision to pitch your items to your imminent customers. The handouts ought to be printed with subtle elements that are satisfactory for settling on sound acquiring choices. Creative 8.5 x 14 Brochure Printing gives you a chance to specialty winning battles. These profoundly impactful marking apparatuses are composed and imprinted in different sizes and shapes utilizing', 'All dynamic organizations around the globe make utilization of leaflets as mandatory promoting parts. These devices are perfect decision to pitch your items to your imminent customers. The handouts ought to be printed with subtle elements that are satisfactory for settling on sound acquiring choices. Creative 8.5 x 14 Brochure Printing gives you a chance to specialty winning battles. These profoundly impactful marking apparatuses are composed and imprinted in different sizes and shapes utilizing various systems. In the event that you are eager to make utilization of flexible 8.5 x 14 leaflets for your next advertising', 2, 'broch-3.webp'),
(18, 'Custom Brochure Booklets', 'You can get the very best booklet printing from Plus Printers. We specialize in dealing with custom brochure booklets printing, which can be brought at a sensible rate. These cheap custom page booklet will provide you with more value for your money. Custom pages booklet printing will ensure that you get a design you are happy with. We likewise bargain in wholesale custom brochure booklets. These booklets', 'You can get the very best booklet printing from Plus Printers. We specialize in dealing with custom brochure booklets printing, which can be brought at a sensible rate. These cheap custom page booklet will provide you with more value for your money. Custom pages booklet printing will ensure that you get a design you are happy with. We likewise bargain in wholesale custom brochure booklets. These booklets', 2, 'broch-4.webp'),
(19, 'Travel Brochure', 'Are you ready for an awesome adventure? Plus Printers has a travel brochure that\'s gonna blow your mind. We have this special coating that makes the brochures look super nice. It\'s called an aqueous coating, and it does a lot of cool things. First, it protects the brochure so it doesn\'t get damaged easily. Second, it makes the colors and pictures on the brochure look even more amazing. It\'s like a glossy finish that catches everyone\'s eye. So, when people look at your travel brochures, they\'ll b', 'Are you ready for an awesome adventure? Plus Printers has a travel brochure that\'s gonna blow your mind. We have this special coating that makes the brochures look super nice. It\'s called an aqueous coating, and it does a lot of cool things. First, it protects the brochure so it doesn\'t get damaged easily. Second, it makes the colors and pictures on the brochure look even more amazing. It\'s like a glossy finish that catches everyone\'s eye. So, when people look at your travel brochures, they\'ll be so impressed and want to start their own adventure right away. Get your hands on Plus Printers\' travel brochure with the awesome aqueous coating and start inspiring people to explore the world today.', 2, 'broch-5.webp');

-- --------------------------------------------------------

--
-- Table structure for table `customproductreviews`
--

CREATE TABLE `customproductreviews` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `comment` varchar(100) NOT NULL,
  `product_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` varchar(20) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customproductreviews`
--

INSERT INTO `customproductreviews` (`id`, `name`, `email`, `comment`, `product_id`, `created_at`, `status`) VALUES
(2, '', '', 'testing', 2, '2024-09-19 01:28:11', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `industries`
--

CREATE TABLE `industries` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `industries`
--

INSERT INTO `industries` (`id`, `name`) VALUES
(3, 'Apparel '),
(6, 'Bakery boxes'),
(7, 'Cannabis'),
(8, 'Cosmetic'),
(9, 'E-Commerce'),
(10, 'Eco Friendly'),
(11, 'Food'),
(12, 'Gift'),
(13, 'Jewelry '),
(14, 'Shopping & mailer'),
(15, 'Electronics'),
(16, 'Pharmaceuticals'),
(17, 'Automotive'),
(18, 'Shipping');

-- --------------------------------------------------------

--
-- Table structure for table `material`
--

CREATE TABLE `material` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `material`
--

INSERT INTO `material` (`id`, `name`) VALUES
(9, 'Cardboard Boxes'),
(10, ' Corrugated Boxes'),
(11, 'Kraft Boxes'),
(12, ' Luxury Rigid Boxes'),
(13, ' Mylar Bags'),
(14, ' Paperboard Boxes'),
(15, ' Special Cardstock');

-- --------------------------------------------------------

--
-- Table structure for table `productcategory`
--

CREATE TABLE `productcategory` (
  `id` int(100) NOT NULL,
  `Parent_category` varchar(100) NOT NULL,
  `cat_child_01` varchar(100) NOT NULL,
  `cat_child_02` varchar(100) NOT NULL,
  `cat_child_03` varchar(100) NOT NULL,
  `cat_child_04` varchar(100) NOT NULL,
  `cat_child_05` varchar(100) NOT NULL,
  `cat_child_06` varchar(100) NOT NULL,
  `cat_child_07` varchar(100) NOT NULL,
  `cat_child_08` varchar(100) NOT NULL,
  `cat_child_09` varchar(100) NOT NULL,
  `cat_child_10` varchar(100) NOT NULL,
  `cat_child_11` varchar(100) NOT NULL,
  `cat_child_12` varchar(100) NOT NULL,
  `cat_child_13` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `productreviews`
--

CREATE TABLE `productreviews` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `comment` varchar(1000) NOT NULL,
  `product_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` varchar(50) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_short_desc` varchar(500) NOT NULL,
  `product_long_desc` varchar(1000) NOT NULL,
  `product_industry` int(11) NOT NULL,
  `product_style` int(11) NOT NULL,
  `product_material` int(11) NOT NULL,
  `product_img` varchar(100) NOT NULL,
  `tags` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `product_short_desc`, `product_long_desc`, `product_industry`, `product_style`, `product_material`, `product_img`, `tags`) VALUES
(22, 'Custom Lingerie Box', 'Need Packaging offer custom lingerie boxes so you can create an individual packing solution. We can design a lingerie box that represents the value of your company and sets your lingerie separate from the competition, using any color and shape. Companies trying to create a memorable unboxing experience, develop a strong brand presence, and encourage consumer loyalty will find our customized lingerie boxes to be ideal. You can design a packaging solution that accurately reflects the goals and mis', 'Need Packaging offer custom lingerie boxes so you can create an individual packing solution. We can design a lingerie box that represents the value of your company and sets your lingerie separate from the competition, using any color and shape. Companies trying to create a memorable unboxing experience, develop a strong brand presence, and encourage consumer loyalty will find our customized lingerie boxes to be ideal. You can design a packaging solution that accurately reflects the goals and mission of your company with the help of our custom lingerie boxes. Contact Need Packaging today to learn more about custom lingerie box.', 3, 0, 0, 'app-1.png', ''),
(23, 'Custom Footwear Box', 'Create a unique and custom packaging solution with Need Packaging custom footwear boxes. Need Packaging will assist you to create a footwear box that reflects your brand\'s identity and makes your shoes stand out from the competition. Our custom footwear boxes are perfect for brands that want to make a strong brand reputation, build customer loyalty and a lasting impression on their customers. With our custom footwear boxes, you can create a packaging solution that represents your brand\'s mission', 'Create a unique and custom packaging solution with Need Packaging custom footwear boxes. Need Packaging will assist you to create a footwear box that reflects your brand\'s identity and makes your shoes stand out from the competition. Our custom footwear boxes are perfect for brands that want to make a strong brand reputation, build customer loyalty and a lasting impression on their customers. With our custom footwear boxes, you can create a packaging solution that represents your brand\'s mission and values. Our custom footwear boxes are also great for special events or promotions and Plus Printers offer different design options to fit your specific needs.', 3, 0, 0, 'app-2.png', ''),
(24, 'Custom Watch Box', 'Improve your watch packaging with Plus Printersâ€™ custom watch boxes. Customize your watch boxes with your companyâ€™s name, initials, or label for an attractive appearance. Plus Printers provide custom watch boxes that are made with the finest materials like paperboard, cardboard and Kraft, ensuring a unique and stylish way to store your watches. Whether you use it personally or as a gift, Plus Printers custom watch boxes are the best way to improve your brand style. Choose from various shapes', 'Improve your watch packaging with Plus Printersâ€™ custom watch boxes. Customize your watch boxes with your companyâ€™s name, initials, or label for an attractive appearance. Plus Printers provide custom watch boxes that are made with the finest materials like paperboard, cardboard and Kraft, ensuring a unique and stylish way to store your watches. Whether you use it personally or as a gift, Plus Printers custom watch boxes are the best way to improve your brand style. Choose from various shapes, sizes, and designs to match your individual needs our custom watch boxes are truly special and make a memorable gift for any watch lover.', 3, 0, 0, 'app-3.png', ''),
(25, 'Custom Textile Box', 'Customize your textile box with your company name, messaging and labels to make it attractive. Plus Printers custom textile boxes are manufactured with finest paperboard, cardboard and Kraft materials with attention to minor details and ensuring its attractive appearance and durability. Whether you are looking for gift packaging or an easy way to store your own textiles, Plus Printers custom textile boxes are the perfect choice. With our customization options, you can create textile box that per', 'Customize your textile box with your company name, messaging and labels to make it attractive. Plus Printers custom textile boxes are manufactured with finest paperboard, cardboard and Kraft materials with attention to minor details and ensuring its attractive appearance and durability. Whether you are looking for gift packaging or an easy way to store your own textiles, Plus Printers custom textile boxes are the perfect choice. With our customization options, you can create textile box that perfectly reflects your brand style. Our custom textile boxes are also an excellent choice to show your creativity and individuality.', 3, 0, 0, 'app-4.png', ''),
(26, 'Custom Swimwear Box', 'Plus Printers provide custom swimwear box that is custom made with your specific requirements. From colors to shape, our team will design swimwear box that perfectly matches your brand\'s style and theme. Plus Printers will help you create swimwear box that reflects your brand\'s identity and makes your swimwear stand out from the competition. Our custom swimwear boxes are perfect for all types of businesses from a manufacturer to an individual. Our custom swimwear boxes will help you to make a st', 'Plus Printers provide custom swimwear box that is custom made with your specific requirements. From colors to shape, our team will design swimwear box that perfectly matches your brand\'s style and theme. Plus Printers will help you create swimwear box that reflects your brand\'s identity and makes your swimwear stand out from the competition. Our custom swimwear boxes are perfect for all types of businesses from a manufacturer to an individual. Our custom swimwear boxes will help you to make a strong brand presence, gain customer trust, and create a memorable experience of unboxing that will create a lasting impact on your customers.', 3, 0, 0, 'app-5.png', ''),
(27, 'Custom Sunglasses Box', 'You can customize your sunglasses storage with Plus Printers custom sunglasses boxes. Include your initials or brand name on your watch box to make it genuinely unique. Our custom boxes are made with finest paperboard, cardboard and Kraft materials and attention to detail, ensuring a luxury feel and quality. Whether you are searching for a special gift or a customized way to store your own sunglasses, our custom sunglasses boxes are the perfect choice. Our custom sunglasses box is an excellent w', 'You can customize your sunglasses storage with Plus Printers custom sunglasses boxes. Include your initials or brand name on your watch box to make it genuinely unique. Our custom boxes are made with finest paperboard, cardboard and Kraft materials and attention to detail, ensuring a luxury feel and quality. Whether you are searching for a special gift or a customized way to store your own sunglasses, our custom sunglasses boxes are the perfect choice. Our custom sunglasses box is an excellent way to give your house or office a luxurious feeling. With our customization options, you can create a box that perfectly reflect your personal or brand style.', 3, 0, 0, 'app-6.png', ''),
(28, 'Custom Socks Box', 'Create a unique and customized packaging solution with our custom socks boxes. Plus Printers expert team will customize socks box in any color and shapes to match your brand\'s style and personality. Plus Printers will create a socks box that reflects your brand\'s identity and makes your socks noticeable in the market. Our custom socks boxes are perfect for companies that want to develop a strong brand presence and build customer loyalty. Plus Printers offer different design options, including lo', 'Create a unique and customized packaging solution with our custom socks boxes. Plus Printers expert team will customize socks box in any color and shapes to match your brand\'s style and personality. Plus Printers will create a socks box that reflects your brand\'s identity and makes your socks noticeable in the market. Our custom socks boxes are perfect for companies that want to develop a strong brand presence and build customer loyalty. Plus Printers offer different design options, including logos, images, and text. Plus, our custom socks boxes are customizable with your branding and messaging, making them perfect to build your brand and stand above from the competition.', 3, 0, 0, 'app-7.png', ''),
(29, 'Custom Watch Boxes', 'Watches are one of the most popular accessories that people wear every day. Not only do they tell the time, but they also add a touch of style and elegance to any outfit. When it comes to gifting watches or displaying them in stores, custom watch boxes are an excellent packaging option.', 'Watches are one of the most popular accessories that people wear every day. Not only do they tell the time, but they also add a touch of style and elegance to any outfit. When it comes to gifting watches or displaying them in stores, custom watch boxes are an excellent packaging option.', 3, 0, 0, 'app-8.webp', ''),
(30, 'Custom Cufflink Boxes', 'Nothing beats an eye-catching cufflink boxes wholesale in this highly competitive marketplace when it comes to grasping the attention of fashion lovers. There are many important reasons behind their use, but some of them are noticeable. Like they provide huge safety to the goods packed inside. You donâ€™t have to go anywhere to buy these small cufflink boxes because we are here for your help. Need Packaging offers you the best cufflink boxes that benefit you, boost your brand sales, and open the', 'Nothing beats an eye-catching cufflink boxes wholesale in this highly competitive marketplace when it comes to grasping the attention of fashion lovers. There are many important reasons behind their use, but some of them are noticeable. Like they provide huge safety to the goods packed inside. You donâ€™t have to go anywhere to buy these small cufflink boxes because we are here for your help. Need Packaging offers you the best cufflink boxes that benefit you, boost your brand sales, and open the doors of success for your business ahead. So why wait for more? Grab the deals now before it ends!', 3, 0, 0, 'app-9.webp', ''),
(31, 'Apparel Pillow Box', 'Elevate your brand image and leave a lasting impression on your customers with our apparel pillow box packaging. We create lightweight, durable, and convenient pillow boxes for apparel. These boxes feature a layered cardboard layout which is both durable and long-lasting for long-distance deliveries. Our high-quality cardboard base offers limitless customization. We use digital, offset, and full-color or digital CMYK printing to boost the visual appeal. Improve aesthetics further on your custom-', 'Elevate your brand image and leave a lasting impression on your customers with our apparel pillow box packaging. We create lightweight, durable, and convenient pillow boxes for apparel. These boxes feature a layered cardboard layout which is both durable and long-lasting for long-distance deliveries. Our high-quality cardboard base offers limitless customization. We use digital, offset, and full-color or digital CMYK printing to boost the visual appeal. Improve aesthetics further on your custom-sized apparel pillow boxes with UV coating, spot UV, gloss coating, and matte lamination at Plus Printers. Leave customers with a memorable unboxing experience, try our luxurious apparel pillow boxes. Place a low MOQ order today!', 3, 0, 0, 'app-10.webp', ''),
(32, 'Rigid Apparel Box', 'Introduce luxury to your clothing line with our Rigid Apparel Box. This box is perfect for high-end apparel, accessories, or special garments, offering a robust yet elegant presentation. Crafted from sturdy materials, the Rigid Apparel Box ensures your products are protected and presented in a luxurious manner. At Need packaging, we capture the essence of your brand with exquisite printing. Customize with a glossy finish for a chic look, matte for understated elegance, or Spot UV for a unique, t', 'Introduce luxury to your clothing line with our Rigid Apparel Box. This box is perfect for high-end apparel, accessories, or special garments, offering a robust yet elegant presentation. Crafted from sturdy materials, the Rigid Apparel Box ensures your products are protected and presented in a luxurious manner. At Need packaging, we capture the essence of your brand with exquisite printing. Customize with a glossy finish for a chic look, matte for understated elegance, or Spot UV for a unique, tactile feel. The Rigid Apparel Box features a sleek design and can be lined with satin or velvet for an added touch of sophistication. Order now to elevate your apparel brand!', 3, 0, 0, 'app-11.webp', ''),
(33, 'Apparel Postage Box', 'Introducing our apparel postage box, crafted with care and quality in mind. Made from sturdy corrugated cardboard, it ensures your clothing arrives safely. Our printing techniques boast vibrant colors and crisp details, enhancing your brandâ€™s presence. Choose from matte or glossy finishes for that extra touch of elegance. This box isnâ€™t just packaging; itâ€™s an extension of your brand. Its durability protects your garments during transit, leaving customers impressed from the moment they rec', 'Introducing our apparel postage box, crafted with care and quality in mind. Made from sturdy corrugated cardboard, it ensures your clothing arrives safely. Our printing techniques boast vibrant colors and crisp details, enhancing your brandâ€™s presence. Choose from matte or glossy finishes for that extra touch of elegance. This box isnâ€™t just packaging; itâ€™s an extension of your brand. Its durability protects your garments during transit, leaving customers impressed from the moment they receive their order. With easy-to-open features, unboxing becomes a delightful experience. Elevate your business with our premium postage box. Order now and make every delivery a memorable moment for your customers!', 3, 0, 0, 'app-12.webp', ''),
(34, 'Branded Clothing Box', 'Introducing our signature branded clothing box, meticulously crafted to elevate your brand experience. Fashioned with premium materials such as sturdy cardboard and eco-friendly inks, our boxes boast durability and sustainability. Utilizing cutting-edge printing techniques, including lithography and digital printing, we ensure vibrant, eye-catching designs that captivate your audience. With options for matte or glossy finishes, your brand exudes sophistication and style. Our boxes not only safeg', 'Introducing our signature branded clothing box, meticulously crafted to elevate your brand experience. Fashioned with premium materials such as sturdy cardboard and eco-friendly inks, our boxes boast durability and sustainability. Utilizing cutting-edge printing techniques, including lithography and digital printing, we ensure vibrant, eye-catching designs that captivate your audience. With options for matte or glossy finishes, your brand exudes sophistication and style. Our boxes not only safeguard your garments but also serve as a powerful marketing tool, leaving a lasting impression on your customers. Elevate your brand presence and delight your clientele with every unboxing experience. Choose excellence. Choose distinction. Choose our branded clothing box for a journey of unparalleled elegance. Experience the difference order today!', 3, 0, 0, 'app-13.webp', ''),
(35, 'Custom Shoe Boxes', 'Introducing our custom shoe box, meticulously crafted to elevate your footwear presentation. Constructed with durable corrugated cardboard, our box ensures the safety of your shoes during transit and storage. Utilizing high-quality printing techniques, your brand logo and design will pop with vibrant colors and crisp clarity. Choose from matte or glossy finishing options to add a touch of elegance. Our custom shoe box not only safeguards your products but also enhances your brand image, leaving ', 'Introducing our custom shoe box, meticulously crafted to elevate your footwear presentation. Constructed with durable corrugated cardboard, our box ensures the safety of your shoes during transit and storage. Utilizing high-quality printing techniques, your brand logo and design will pop with vibrant colors and crisp clarity. Choose from matte or glossy finishing options to add a touch of elegance. Our custom shoe box not only safeguards your products but also enhances your brand image, leaving a lasting impression on your customers. Boost your shoe business with our packaging that is a game changer. Make your brand prominent on the shelves and in the minds of your buyers. Upgrade to our custom shoe box today!', 3, 0, 0, 'app-14.webp', ''),
(36, 'Custom Wallet Box', 'Earn distinction from the rest of the packaging with our luxurious custom wallet box. To improve the appearance of your box printing, we introduce spot UV to highlight your brand name and logo, making you obvious to potential consumers. To increase the attraction of your products, we consider gold or silver lamination, embossing and debossing to make your personalized custom wallet box stand out. This box is incorporated with eye-catching color combinations and artwork and patterns that will hel', 'Earn distinction from the rest of the packaging with our luxurious custom wallet box. To improve the appearance of your box printing, we introduce spot UV to highlight your brand name and logo, making you obvious to potential consumers. To increase the attraction of your products, we consider gold or silver lamination, embossing and debossing to make your personalized custom wallet box stand out. This box is incorporated with eye-catching color combinations and artwork and patterns that will help your business in a variety of ways. Order now to increase your sales by saving money on packaging with our competitive and affordable custom wallet box.', 3, 0, 0, 'app-15.webp', ''),
(37, 'Custom Product Box', 'Want to make your products look amazing? You\'re in luck! At Plus Printers, we\'ve got some super cool custom product boxes just for you. These boxes are all about showing off your products in a special way. You can make them look exactly how you want to match your brand perfectly. Here\'s what makes us different that we don\'t need a lot to get started. That means even small businesses can get their hands on our awesome packaging solutions. Trust us to give you top-quality and super creative custom', 'Want to make your products look amazing? You\'re in luck! At Plus Printers, we\'ve got some super cool custom product boxes just for you. These boxes are all about showing off your products in a special way. You can make them look exactly how you want to match your brand perfectly. Here\'s what makes us different that we don\'t need a lot to get started. That means even small businesses can get their hands on our awesome packaging solutions. Trust us to give you top-quality and super creative custom product boxes that will make your brand shine and help you stand out in the crowd. Ready to start your packaging adventure with Plus Printers? Try us out today and see how we can make a difference for your business.', 9, 0, 0, 'ecom-1.webp', ''),
(38, 'Custom Shipping Box', 'I\'ve got some great news to share from Plus Printers. They\'ve come up with some really awesome custom shipping boxes. These boxes are designed with a lot of care to not only keep your stuff safe, but also impress your customers. And guess what? They even have this special coating that gives the boxes a sleek and professional look that catches the eye. Plus Printers has lots of options for you to customize your shipping box and make it just right for your brand. You can totally trust them to prov', 'I\'ve got some great news to share from Plus Printers. They\'ve come up with some really awesome custom shipping boxes. These boxes are designed with a lot of care to not only keep your stuff safe, but also impress your customers. And guess what? They even have this special coating that gives the boxes a sleek and professional look that catches the eye. Plus Printers has lots of options for you to customize your shipping box and make it just right for your brand. You can totally trust them to provide packaging that\'s strong and attractive, making a real statement. When you choose Plus Printers for your custom cargo boxes, you\'re not only making a lasting impression, but also ensuring that your products get delivered safely. Why not give them a try? Go for it and see how Plus Printers can help your business.', 9, 0, 0, 'ecom-2.webp', ''),
(39, 'Ecommerce Shipping Box', 'The boom in ecommerce has compelled businesses to focus more on quality product packaging. Our ecommerce shipping box is designed to redefine your shipping experience with unbeatable quality. Made from durable sustainable corrugated material our boxes guarantee secure packaging during transit. The versatility in shapes, sizes, design, printing, and finishing shall accommodate everything your customer needs to see. We have the ultimate solution for reliable, affordable packaging in the digital ag', 'The boom in ecommerce has compelled businesses to focus more on quality product packaging. Our ecommerce shipping box is designed to redefine your shipping experience with unbeatable quality. Made from durable sustainable corrugated material our boxes guarantee secure packaging during transit. The versatility in shapes, sizes, design, printing, and finishing shall accommodate everything your customer needs to see. We have the ultimate solution for reliable, affordable packaging in the digital age with endless possibilities for customization. From clothing to electronics, our personalized ecommerce shipping box is a must-have for you. Take advantage of super-fast delivery by placing your order now.', 9, 0, 0, 'ecom-3.webp', ''),
(40, 'Ecommerce Gift Box', 'The development of the ecommerce sector has made businesses work hard on packaging their products. Regarding this, our specially designed e-commerce gift box is constructed from sturdy, environmentally friendly corrugated cardboard, considering the environmental effects. We supply various size dimensions with high-quality printing and finishing techniques to raise the bar in the industry. We add an ideal fusion of fashion, practicality, and genuine emotion to our gift box for a long lasting impr', 'The development of the ecommerce sector has made businesses work hard on packaging their products. Regarding this, our specially designed e-commerce gift box is constructed from sturdy, environmentally friendly corrugated cardboard, considering the environmental effects. We supply various size dimensions with high-quality printing and finishing techniques to raise the bar in the industry. We add an ideal fusion of fashion, practicality, and genuine emotion to our gift box for a long lasting impression. Every box is made to the premium standards, guaranteeing its security throughout shipping. Furthermore, choices for customization, such as designs, patterns, and shapes, are offered to be a showstopper for your business. Contact us today for a superb-quality ecommerce gift box with extra durability and functionality.', 9, 0, 0, 'ecom-4.webp', ''),
(41, 'Custom Ecommerce Box', 'Explore an extensive choice of packing solutions with our unique custom ecommerce box. Combined with robust, strong packing, the box is capable of overcoming any challenge, ensuring that your customers\' products arrive in excellent form. Custom ecommerce box is an expansive collection of environmentally safe shipping packaging materials. The bespoke custom ecommerce box is beautified with an aqueous, soft touch, and UV coating, which undoubtedly raises the bar for your business. Furthermore, the', 'Explore an extensive choice of packing solutions with our unique custom ecommerce box. Combined with robust, strong packing, the box is capable of overcoming any challenge, ensuring that your customers\' products arrive in excellent form. Custom ecommerce box is an expansive collection of environmentally safe shipping packaging materials. The bespoke custom ecommerce box is beautified with an aqueous, soft touch, and UV coating, which undoubtedly raises the bar for your business. Furthermore, the double walls provide further durability to protect your belongings. Customizable printing solutions that are tailored to the style of your brand make an outstanding impact. Contact us today to make every unwrapping experience special with our customizable custom ecommerce box.', 9, 0, 0, 'ecom-5.webp', ''),
(42, 'Ecommerce Foldable Box', 'Elevate your online retail experience with our Ecommerce Foldable Box, a perfect blend of convenience and style. This box is ingeniously designed for easy assembly and space-saving storage. Crafted from high-quality, foldable materials, the Ecommerce Foldable Box is both durable and user-friendly. Plus Printers utilizes advanced printing techniques to ensure your branding is vibrant and impactful. With various finishing options like matte, gloss, or soft-touch, each Ecommerce Foldable Box is tra', 'Elevate your online retail experience with our Ecommerce Foldable Box, a perfect blend of convenience and style. This box is ingeniously designed for easy assembly and space-saving storage. Crafted from high-quality, foldable materials, the Ecommerce Foldable Box is both durable and user-friendly. Plus Printers utilizes advanced printing techniques to ensure your branding is vibrant and impactful. With various finishing options like matte, gloss, or soft-touch, each Ecommerce Foldable Box is transformed into a bespoke piece. Add unique features such as magnetic closures or ribbon pulls for an enhanced unboxing experience. The Ecommerce Foldable Box from Plus Printers isn\'t just packaging; it\'s a streamlined, elegant solution for your online business.', 9, 0, 0, 'ecom-6.webp', ''),
(43, 'Eco Friendly Ecommerce Box', 'Make an environmentally-friendly statement with our Eco-Friendly Ecommerce Box, exclusively designed for your sustainable branding. This box combines functionality with environmental responsibility. Crafted from recyclable materials, the Eco-Friendly Ecommerce Box is sturdy and kind to the planet. Plus Printers is committed to eco-friendly practices, ensuring your packaging aligns with your green values. Our state-of-the-art printing technology gives your packaging vibrant and long-lasting color', 'Make an environmentally-friendly statement with our Eco-Friendly Ecommerce Box, exclusively designed for your sustainable branding. This box combines functionality with environmental responsibility. Crafted from recyclable materials, the Eco-Friendly Ecommerce Box is sturdy and kind to the planet. Plus Printers is committed to eco-friendly practices, ensuring your packaging aligns with your green values. Our state-of-the-art printing technology gives your packaging vibrant and long-lasting colors. Customize the Eco-Friendly Ecommerce Box with various finishes like natural matte or earthy textures. Enhance its appeal with eco-friendly inks and add-ons like plant-based laminates. The Eco-Friendly Ecommerce Box from Plus Printers is not just packaging; it\'s a testament to your brand\'s commitment to sustainability.', 9, 0, 0, 'ecom-7.webp', ''),
(44, 'Custom Bangle Box', 'Plus Printers custom bangle boxes are a unique and customized way to package your bangles. With our custom bangle boxes, you can choose from a wide range of materials, colors, and designs to create a bangle box according to your product requirements. Plus Printers can create a custom bangle box with custom design that reflects your brandâ€™s theme. Whether you are searching a bangle box for a special promotion or a unique way to display your bangles, our custom bangle boxes are the perfect. Furt', 'Plus Printers custom bangle boxes are a unique and customized way to package your bangles. With our custom bangle boxes, you can choose from a wide range of materials, colors, and designs to create a bangle box according to your product requirements. Plus Printers can create a custom bangle box with custom design that reflects your brandâ€™s theme. Whether you are searching a bangle box for a special promotion or a unique way to display your bangles, our custom bangle boxes are the perfect. Furthermore, our custom bangle boxes are made from high quality materials, to protect your bangles from damage.', 13, 0, 0, 'jewel-1.webp', ''),
(45, 'Custom Ornament Box', 'Plus Printers provide an attractive and customized way to package your ornaments with our custom ornament boxes. You can create a custom ornament box that reflects the concepts of your brand with options from a wide range of materials, colors, and designs available. Plus Printers professional ream will create a custom layout that fulfills your specific requirements and specifications. Our customized ornament boxes are the ideal choice if you are finding a special way to display your ornaments or', 'Plus Printers provide an attractive and customized way to package your ornaments with our custom ornament boxes. You can create a custom ornament box that reflects the concepts of your brand with options from a wide range of materials, colors, and designs available. Plus Printers professional ream will create a custom layout that fulfills your specific requirements and specifications. Our customized ornament boxes are the ideal choice if you are finding a special way to display your ornaments or a custom box for promotional offers. Plus Printers additionally provide completely customized custom ornament boxes, so you can customize the ornament box according to your product need.', 13, 0, 0, 'jewel-2.webp', '');

-- --------------------------------------------------------

--
-- Table structure for table `standard`
--

CREATE TABLE `standard` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `standard`
--

INSERT INTO `standard` (`id`, `name`) VALUES
(2, 'Box Packaging'),
(3, 'Material');

-- --------------------------------------------------------

--
-- Table structure for table `standardproduct`
--

CREATE TABLE `standardproduct` (
  `id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_short_desc` varchar(500) NOT NULL,
  `product_long_desc` varchar(1000) NOT NULL,
  `product_cat` varchar(100) NOT NULL,
  `product_img` varchar(100) NOT NULL,
  `tags` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `standardproduct`
--

INSERT INTO `standardproduct` (`id`, `product_name`, `product_short_desc`, `product_long_desc`, `product_cat`, `product_img`, `tags`) VALUES
(1, 'testing', 'testing', 'testing', '2', 'updated_logo.png', ''),
(2, 'UPLOAD STANDARD ', 'UPLOAD STANDARD', 'UPLOAD STANDARD ', '2', 'updated_logo_purple.png', '');

-- --------------------------------------------------------

--
-- Table structure for table `standardproductreviews`
--

CREATE TABLE `standardproductreviews` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `comment` varchar(1000) NOT NULL,
  `product_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` varchar(100) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `style`
--

CREATE TABLE `style` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `style`
--

INSERT INTO `style` (`id`, `name`) VALUES
(5, 'Boxes with Lid'),
(6, ' Display Boxes'),
(7, ' Hang Tab Boxes'),
(8, ' Pillow Boxes'),
(9, ' Two Piece Boxes'),
(10, ' Carriers'),
(11, 'Folding Cartons'),
(12, 'Mailer Boxes'),
(13, ' Sleeve Boxes'),
(14, 'Window Boxes');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `u_name` varchar(100) NOT NULL,
  `u_email` varchar(100) NOT NULL,
  `u_password` varchar(100) NOT NULL,
  `role_id` int(11) NOT NULL DEFAULT '2'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `u_name`, `u_email`, `u_password`, `role_id`) VALUES
(1, 'Admin', 'admin@gmail.com', 'Packaging!@#$', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `custom`
--
ALTER TABLE `custom`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customproduct`
--
ALTER TABLE `customproduct`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customproductreviews`
--
ALTER TABLE `customproductreviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `industries`
--
ALTER TABLE `industries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `material`
--
ALTER TABLE `material`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `productcategory`
--
ALTER TABLE `productcategory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `productreviews`
--
ALTER TABLE `productreviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_industry` (`product_industry`),
  ADD KEY `product_material` (`product_material`),
  ADD KEY `product_style` (`product_style`);

--
-- Indexes for table `standard`
--
ALTER TABLE `standard`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `standardproduct`
--
ALTER TABLE `standardproduct`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `standardproductreviews`
--
ALTER TABLE `standardproductreviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `style`
--
ALTER TABLE `style`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `custom`
--
ALTER TABLE `custom`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `customproduct`
--
ALTER TABLE `customproduct`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `customproductreviews`
--
ALTER TABLE `customproductreviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `industries`
--
ALTER TABLE `industries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `material`
--
ALTER TABLE `material`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `productcategory`
--
ALTER TABLE `productcategory`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `productreviews`
--
ALTER TABLE `productreviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `standard`
--
ALTER TABLE `standard`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `standardproduct`
--
ALTER TABLE `standardproduct`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `standardproductreviews`
--
ALTER TABLE `standardproductreviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `style`
--
ALTER TABLE `style`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
