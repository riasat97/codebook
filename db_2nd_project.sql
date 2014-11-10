-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 29, 2013 at 07:56 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_2nd_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE IF NOT EXISTS `tbl_admin` (
  `admin_id` int(2) NOT NULL AUTO_INCREMENT,
  `admin_name` varchar(50) NOT NULL,
  `admin_email_address` varchar(256) NOT NULL,
  `admin_password` varchar(32) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `admin_name`, `admin_email_address`, `admin_password`) VALUES
(1, 'Sagar Biswas', 'sagar52@yah.com', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_blog`
--

CREATE TABLE IF NOT EXISTS `tbl_blog` (
  `blog_id` int(5) NOT NULL AUTO_INCREMENT,
  `blogger_id` int(5) NOT NULL,
  `category_id` int(2) NOT NULL,
  `blog_title` varchar(100) NOT NULL,
  `author_name` varchar(50) NOT NULL,
  `blog_short_description` text NOT NULL,
  `blog_long_description` text NOT NULL,
  `publication_status` tinyint(1) NOT NULL,
  `created_date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `view_count` int(5) NOT NULL DEFAULT '0',
  PRIMARY KEY (`blog_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `tbl_blog`
--

INSERT INTO `tbl_blog` (`blog_id`, `blogger_id`, `category_id`, `blog_title`, `author_name`, `blog_short_description`, `blog_long_description`, `publication_status`, `created_date_time`, `view_count`) VALUES
(1, 1, 8, 'ঢাকা-চট্টগ্রাম মহাসড়কে ধর্মঘটের ডাক', 'archita', '<div id="gallery_page_customize">\r\n <div class="widget slideshowFrontpage default widget-editable viziwyg-section-104 inpage-widget-646148" id="single_gallery_customize">\r\n  <div class="inner" id="slideshowFrontpage-646148">\r\n   <div id="gallery_slide_customize">\r\n    <ul>\r\n     <li id="1">\r\n      <div class="gallery-image-box">\r\n       <div class="media">\r\n        <img alt="" src="http://d30fl32nd2baj9.cloudfront.net/media/2013/09/24/ctg_shtakunda_barked_photo_4.jpg/ALTERNATES/w620/ctg_Shtakunda_barked_Photo_4.jpg" /></div>\r\n       <p class="caption">\r\n        &nbsp;</p>\r\n      </div>\r\n     </li>\r\n    </ul>\r\n   </div>\r\n  </div>\r\n </div>\r\n</div>\r\n<div class="widget storyContent article widget-editable viziwyg-section-104 inpage-widget-85 article_lead_text">\r\n <h5 class="print-only">\r\n  যানবাহন ভাংচুর এবং জ্বালাও- পোড়াওয়ের প্রতিবাদে ঢাকা-চট্টগ্রাম মহাসড়কে বুধবার ভোর থেকে ২৪ ঘণ্টার ধর্মঘট ডেকেছে বাস মালিক ও শ্রমিকরা।</h5>\r\n <p>\r\n  মঙ্গলবার দুপুরে বন্দরনগরীর বিআরটিসিতে বাস মালিক ও শ্রমিক নেতাদের এক যৌথ সভায় এই সিদ্ধান্ত হয়।</p>\r\n <p>\r\n  আন্তঃজেলা বাস মালিক সমিতির সাধারণ সম্পাদক কফিল উদ্দিন বিডিনিউজ টোয়েন্টিফোর ডটকমকে বলেন, বুধবার ভোর ৬টা থেকে বৃহস্পতিবার ভোর ৬টা পর্যন্ত এ ধর্মঘট চলবে।</p>\r\n</div>\r\n', '<div id="gallery_page_customize">\r\n <div class="widget slideshowFrontpage default widget-editable viziwyg-section-104 inpage-widget-646148" id="single_gallery_customize">\r\n  <div class="inner" id="slideshowFrontpage-646148">\r\n   <div id="gallery_slide_customize">\r\n    <ul>\r\n     <li id="1">\r\n      <div class="gallery-image-box">\r\n       <div class="media">\r\n        <img alt="" src="http://d30fl32nd2baj9.cloudfront.net/media/2013/09/24/ctg_shtakunda_barked_photo_4.jpg/ALTERNATES/w620/ctg_Shtakunda_barked_Photo_4.jpg" /></div>\r\n       <p class="caption">\r\n        &nbsp;</p>\r\n      </div>\r\n     </li>\r\n    </ul>\r\n   </div>\r\n  </div>\r\n </div>\r\n</div>\r\n<div class="widget storyContent article widget-editable viziwyg-section-104 inpage-widget-85 article_lead_text">\r\n <h5 class="print-only">\r\n  যানবাহন ভাংচুর এবং জ্বালাও- পোড়াওয়ের প্রতিবাদে ঢাকা-চট্টগ্রাম মহাসড়কে বুধবার ভোর থেকে ২৪ ঘণ্টার ধর্মঘট ডেকেছে বাস মালিক ও শ্রমিকরা।</h5>\r\n <p>\r\n  মঙ্গলবার দুপুরে বন্দরনগরীর বিআরটিসিতে বাস মালিক ও শ্রমিক নেতাদের এক যৌথ সভায় এই সিদ্ধান্ত হয়।</p>\r\n <p>\r\n  আন্তঃজেলা বাস মালিক সমিতির সাধারণ সম্পাদক কফিল উদ্দিন বিডিনিউজ টোয়েন্টিফোর ডটকমকে বলেন, বুধবার ভোর ৬টা থেকে বৃহস্পতিবার ভোর ৬টা পর্যন্ত এ ধর্মঘট চলবে।</p>\r\n</div>\r\n', 0, '2013-09-24 13:27:24', 7),
(4, 1, 1, 'এবার ব্রাজিল বিশ্বকাপ নিয়ে প্রশ্ন', 'Archita', '<h5 class="print-only">\r\n কাতারে ২০২২ সালের বিশ্বকাপের সূচি গ্রীষ্মকালের বদলে শীতকালে সরিয়ে নেয়া নিয়ে কম আলোচনা হচ্ছে না। এরই মধ্যে বিশ্বের ফুটবলারদের সংগঠন এফআইএফপ্রো কাতারের বদলে আগামী বছরের ব্রাজিল বিশ্বকাপের দিকে নজর দিতে ফিফাকে আহ্বান জানিয়েছেন।</h5>\r\n', '<div class="wrappingContent ">\r\n <div class="widget storyContent article widget-editable viziwyg-section-104 inpage-widget-84 article_body">\r\n  <div class="body  print-only">\r\n   <p>\r\n    সোমবার এফআইএফপ্রোর মহাসচিব থিও ফন সেগেলেন রয়টার্সকে এক সাক্ষাতকারে বলেন, &quot;আমি অবাক হয়ে যাচ্ছি যে, গণমাধ্যমগুলো নয় বছর পরের কাতার বিশ্বকাপ নিয়ে এখন মেতে আছে। ২০১৪ সালের বিশ্বকাপ নিয়ে তাদের মাথাব্যথা নেই বলে মনে হচ্ছে।&quot;</p>\r\n   <p>\r\n    ব্রাজিলের স্থানীয় সময় দুপুর একটায় বিশ্বকাপের কিছু ম্যাচ রাখায় উদ্বেগ প্রকাশ করেছে ফুটবলারদের সংগঠনটি। কয়েক মাস আগে কনফেডারশেন্স কাপের সময় গরমের কারণে খেলোয়াড়দের অসুবিধা হয়েছে বলে তারা দাবি করে। বিশেষ করে ফরতালেজায় ইতালি ও স্পেনের সেমিফাইনালটি অতিরিক্ত সময়ে গড়ানোর পর ফুটবলারদের ভুগতে হয়েছে বলে সংগঠনটি উল্লেখ করে।</p>\r\n   <p>\r\n    সেগেলেন বলেন, &quot;আমি ইতালি ও স্পেনের খেলোয়াড়দের সঙ্গে কথা বলেছি ম্যাচের পর। তারা বলেছে গরমের কারণে অতিরিক্তি সময়ে খেলাটা অসম্ভব হয়ে পড়ে।&quot;</p>\r\n   <p>\r\n    &quot;আমাদের বুঝতে হবে যে এতে শুধু খেলার মানই কমে যায় না, সঙ্গে সঙ্গে খেলোয়াড়দের স্বাস্থ্যও ক্ষতিগ্রস্ত হতে পারে&quot;, যোগ করেন তিনি।</p>\r\n   <p>\r\n    বিশাল দেশ ব্রাজিলের বিভিন্ন ভেন্যুতে খেলার জন্য যাতায়াতটাকেও সমস্যা হিসেবে দেখছেন এফআইএফপ্রোর মহাসচিব।</p>\r\n   <p>\r\n    &quot;কিছু কিছু ক্ষেত্রে আপনার চার ঘণ্টার ফ্লাইটে এক ভেন্যু থেকে অন্য ভেন্যুতে যেতে হবে। একটা শক্ত ম্যাচ খেলার পর অনেক ক্ষেত্রে এ ধরণের যাতায়াতটা সমস্যা হয়ে দেখা দেবে।&quot;</p>\r\n   <p>\r\n    তিনি জানান, ব্রাজিলের বিশ্বকাপ নিয়ে বিস্তারিত প্রতিবেদন হাতে পাওয়ার পর এ সমস্যাগুলো নিয়ে তারা ফিফার সঙ্গে বসবেন।</p>\r\n   <p>\r\n    ফিফার সঙ্গে এখন এফআইএফপ্রোর ভালো সম্পর্ক থাকলেও, বিশ্ব ফুটবলের নিয়ন্ত্রক সংস্থাটি যদি ২০১৪ সালের বিশ্বকাপ পরিকল্পনা নিয়ে খেলোয়াড়দের সঙ্গে আলোচনা না করে, তবে তারা ভবিষ্যতে কঠোর অবস্থান নেবেন বলে হুশিয়ারি দেন সেগেলেন।</p>\r\n   <p>\r\n    &quot;দুর্ভাগ্যজনকভাবে আমাদের তখন কঠোর খেলা খেলতে হবে। আমরা তা চাই না, কিন্তু তখন আমাদের আর কোনো উপায় থাকবে না।&quot;</p>\r\n  </div>\r\n </div>\r\n</div>\r\n', 1, '2013-09-24 13:33:04', 1),
(5, 1, 5, 'ভক্তের পাশে টেইলর', 'Archita', '<h5 class="print-only">\r\n কনসার্ট দেখতে এসে গাড়ি চাপা পড়ে আহত এক ভক্তের সঙ্গে দেখা করে তাকে চমকে দিয়েছেন গায়িকা টেইলর সুইফট।</h5>\r\n', '<div class="wrappingContent ">\r\n <div class="widget storyContent article widget-editable viziwyg-section-104 inpage-widget-84 article_body">\r\n  <div class="body  print-only">\r\n   <p>\r\n    কন্টাক্টমিউজিকের খবর অনুযায়ী, ১০ অগাস্ট টেইলরের কনসার্ট দেখার জন্য বাবার সঙ্গে যাচ্ছিলেন সাত বছর বয়সী গ্রেস মারকেল। কিন্তু ট্যাক্সি থেকে নামার সময় একটি গাড়ি ছোট্ট গ্রেসকে ধাক্কা দিয়ে যায়, ওই যাত্রা আর টেইলরের কনসার্ট দেখা হয়ে ওঠে না তার।</p>\r\n   <p>\r\n    পিপল ডটকম জানিয়েছে, মাথার দুই জায়গায় ব্যথা পেয়ে দুদিন হাসপাতালে ভর্তি ছিলেন গ্রেস। শরীরের বেশ কিছু স্থানে আঘাত লেগেছে তার।</p>\r\n   <p>\r\n    অবশেষে সুস্থ হওয়ার পর গ্রেসকে তার বাবা-মা টেইলরের নতুন কনসার্টের টিকেট কিনে দেন। ২১ সেপ্টেম্বর টেনেসি রাজ্যের ন্যাশভিল শহরে অনুষ্ঠিত ওই কনসার্টে মঞ্চের পেছনে গ্রেসের সঙ্গে ব্যক্তিগতভাবে সােৎ করেন তার প্রিয় শিল্পী টেইলর।</p>\r\n   <p>\r\n    গ্রেসের মা এমি বলেন, &ldquo;টেইলর গ্রেসের সঙ্গে দেখা করার সঙ্গে সঙ্গে গ্রেসকে জড়িয়ে ধরেন। তিনি গ্রেসকে বলেন, তার আজ সর্দি লেগেছে, তাই গ্রেস যেন তার পারফরম্যান্সের সময় তার সঙ্গে গলা মিলিয়ে গান গায়, এতে তার গাইতে সুবিধা হবে।&rdquo;</p>\r\n   <p>\r\n    এমি আরও জানান, তাদের মধ্যে এত সুন্দর একটি সাক্ষাৎ হয়েছিল, মনে হচ্ছিল সময় যেন ওখানেই থেমে গেছে।</p>\r\n  </div>\r\n </div>\r\n</div>\r\n', 1, '2013-09-24 13:34:21', 9),
(7, 3, 8, 'vingroho', 'aqua', '<p>\r\n i nd u</p>\r\n', '<p>\r\n i nd u i nd u i nd ui nd u i nd uv i nd u</p>\r\n<p>\r\n i nd u i nd u i nd ui nd u i nd uv i nd u</p>\r\n<p>\r\n i nd u i nd u i nd ui nd u i nd uv i nd u<strong>bfbfbi nd u i nd u i nd ui nd u i nd uv i nd u</strong></p>\r\n<p>\r\n <strong>bi nd u i nd u i nd ui nd u i nd uv i nd u</strong></p>\r\n<p>\r\n <strong>bi nd u i nd u i nd ui nd u i nd uv i nd u</strong></p>\r\n', 1, '2013-10-03 13:12:05', 9),
(9, 3, 8, 'দা-কুড়ালের হুমকি বিএনপির', 'aqua', '<p>\r\n &lt;p&gt;<br />\r\n &nbsp; &lt;span class=&quot;jw_media_holder jwMediaContent alignleft&quot; id=&quot;media_0&quot; &gt;&lt;img alt=&quot;সাদেক হোসেন খোকা&quot; src=&quot;http://paimages.prothom-alo.com/contents/cache/images/300x0x1/uploads/media/2013/10/14/525bd9f0ed0bf-Sadeque-Hossain-Khoka-26Nov2011.jpg&quot; width=&quot;116&quot; /&gt;&lt;/span&gt;&lt;/p&gt;<br />\r\n &lt;p&gt;<br />\r\n &nbsp;&amp;lsquo;আক্রমণ প্রতিহত করতে&amp;rsquo; ঢাকায় ২৫ অক্টোবরের সমাবেশে নেতা-কর্মীদের দা-কুড়াল নিয়ে আসতে বলেছে বিএনপি। দলটি মনে করছে, ওই দিন তাদের ওপর সরকারি দল আক্রমণ করবে। ওই আক্রমণ প্রতিহত করতে না পারলে বিএনপি টিকে থাকতে পারবে না।&lt;br /&gt;<br />\r\n &nbsp;&lt;br /&gt;<br />\r\n &nbsp;গতকাল সোমবার ঢাকা মহানগর বিএনপির এক যৌথ সভায় ২৫ অক্টোবরের সমাবেশে সর্বোচ্চ জনসমাগম নিশ্চিত করার পাশাপাশি আক্রমণ প্রতিহত করতে প্রস্তুত থাকার জন্য দলের নেতাদের নির্দেশনা দেওয়া হয়েছে।&lt;/p&gt;</p>\r\n', '<p>\r\n &lt;p&gt;<br />\r\n &nbsp; &lt;span class=&quot;jw_media_holder jwMediaContent alignleft&quot; id=&quot;media_0&quot; &gt;&lt;img alt=&quot;সাদেক হোসেন খোকা&quot; src=&quot;http://paimages.prothom-alo.com/contents/cache/images/300x0x1/uploads/media/2013/10/14/525bd9f0ed0bf-Sadeque-Hossain-Khoka-26Nov2011.jpg&quot; width=&quot;116&quot; /&gt;&lt;/span&gt;&lt;/p&gt;<br />\r\n &lt;p&gt;<br />\r\n &nbsp;&amp;lsquo;আক্রমণ প্রতিহত করতে&amp;rsquo; ঢাকায় ২৫ অক্টোবরের সমাবেশে নেতা-কর্মীদের দা-কুড়াল নিয়ে আসতে বলেছে বিএনপি। দলটি মনে করছে, ওই দিন তাদের ওপর সরকারি দল আক্রমণ করবে। ওই আক্রমণ প্রতিহত করতে না পারলে বিএনপি টিকে থাকতে পারবে না।&lt;br /&gt;<br />\r\n &nbsp;&lt;br /&gt;<br />\r\n &nbsp;গতকাল সোমবার ঢাকা মহানগর বিএনপির এক যৌথ সভায় ২৫ অক্টোবরের সমাবেশে সর্বোচ্চ জনসমাগম নিশ্চিত করার পাশাপাশি আক্রমণ প্রতিহত করতে প্রস্তুত থাকার জন্য দলের নেতাদের নির্দেশনা দেওয়া হয়েছে।&lt;/p&gt;<br />\r\n &amp;lsquo;আক্রমণ প্রতিহত করতে&amp;rsquo; ঢাকায় ২৫ অক্টোবরের সমাবেশে নেতা-কর্মীদের দা-কুড়াল নিয়ে আসতে বলেছে বিএনপি। দলটি মনে করছে, ওই দিন তাদের ওপর সরকারি দল আক্রমণ করবে। ওই আক্রমণ প্রতিহত করতে না পারলে বিএনপি টিকে থাকতে পারবে না।&lt;br /&gt;<br />\r\n &nbsp;&lt;br /&gt;<br />\r\n &nbsp;গতকাল সোমবার ঢাকা মহানগর বিএনপির এক যৌথ সভায় ২৫ অক্টোবরের সমাবেশে সর্বোচ্চ জনসমাগম নিশ্চিত করার পাশাপাশি আক্রমণ প্রতিহত করতে প্রস্তুত থাকার জন্য দলের নেতাদের নির্দেশনা দেওয়া হয়েছে।&lt;/p&gt;<br />\r\n <br />\r\n &amp;lsquo;আক্রমণ প্রতিহত করতে&amp;rsquo; ঢাকায় ২৫ অক্টোবরের সমাবেশে নেতা-কর্মীদের দা-কুড়াল নিয়ে আসতে বলেছে বিএনপি। দলটি মনে করছে, ওই দিন তাদের ওপর সরকারি দল আক্রমণ করবে। ওই আক্রমণ প্রতিহত করতে না পারলে বিএনপি টিকে থাকতে পারবে না।&lt;br /&gt;<br />\r\n &nbsp;&lt;br /&gt;<br />\r\n &nbsp;গতকাল সোমবার ঢাকা মহানগর বিএনপির এক যৌথ সভায় ২৫ অক্টোবরের সমাবেশে সর্বোচ্চ জনসমাগম নিশ্চিত করার পাশাপাশি আক্রমণ প্রতিহত করতে প্রস্তুত থাকার জন্য দলের নেতাদের নির্দেশনা দেওয়া হয়েছে।&lt;/p&gt;</p>\r\n', 1, '2013-10-27 12:21:36', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_blogger`
--

CREATE TABLE IF NOT EXISTS `tbl_blogger` (
  `blogger_id` int(5) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(25) NOT NULL,
  `last_name` varchar(25) NOT NULL,
  `email_address` varchar(256) NOT NULL,
  `password` varchar(32) NOT NULL,
  `mobile_no` varchar(14) NOT NULL,
  `address` text NOT NULL,
  `gender` varchar(6) NOT NULL,
  `city` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `zip_code` varchar(5) NOT NULL,
  PRIMARY KEY (`blogger_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_blogger`
--

INSERT INTO `tbl_blogger` (`blogger_id`, `first_name`, `last_name`, `email_address`, `password`, `mobile_no`, `address`, `gender`, `city`, `country`, `zip_code`) VALUES
(1, 'archita', 'biswas', 'ar@sm.com', '202cb962ac59075b964b07152d234b70', '01711303', '33/2 Ahmedbagh', 'Male', 'Dhaka', 'Bangladesh', '1214'),
(3, 'aqua', 'primera', 'aqua@yahoo.com', '84ae8ba06974fc2bb529a91efb97bd66', '016795485', '33/2 ahmedbagh', 'Male', 'comilla', 'bangladesh', '1214');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE IF NOT EXISTS `tbl_category` (
  `category_id` int(2) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(100) NOT NULL,
  `category_description` text NOT NULL,
  `publication_status` tinyint(1) NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`category_id`, `category_name`, `category_description`, `publication_status`) VALUES
(1, 'Sports', 'Sports category description', 1),
(5, 'Sony Camera', 'This is Sony category description...................', 1),
(8, 'Computer', '...................................', 1),
(9, 'Baby Food', '--------------------------', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_comments`
--

CREATE TABLE IF NOT EXISTS `tbl_comments` (
  `comments_id` int(6) NOT NULL AUTO_INCREMENT,
  `blog_id` int(5) NOT NULL,
  `comments_author_name` varchar(100) NOT NULL,
  `comments_author_email` varchar(100) NOT NULL,
  `comments_description` text NOT NULL,
  `publication_status` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`comments_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tbl_comments`
--

INSERT INTO `tbl_comments` (`comments_id`, `blog_id`, `comments_author_name`, `comments_author_email`, `comments_description`, `publication_status`) VALUES
(1, 1, 'sagar', 'sagar@hd.com', 'বুধবার ভোর ৬টা', 1),
(2, 1, 'biswas', '123@hju.com', 'সাধারণ সম্পাদক কফিল উদ্দিন বিডিনি সাধারণ সম্পাদক কফিল উদ্দিন বিডিনি সাধারণ সম্পাদক কফিল উদ্দিন বিডিনিসাধারণ সম্পাদক কফিল উদ্দিন বিডিনি সাধারণ সম্পাদক কফিল উদ্দিন বিডিনি সাধারণ সম্পাদক কফিল উদ্দিন বিডিনি সাধারণ সম্পাদক কফিল উদ্দিন বিডিনি সাধারণ সম্পাদক কফিল উদ্দিন বিডিনি', 1),
(3, 4, 'talha', 'dsd@fdj.com', 'কিছু কিছু ক্ষেত্রে আপনার চার ঘণ্টার ', 1),
(4, 5, 'majnu', 'mauh@y7.com', 'taylor,u suck', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
