# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.7.19)
# Database: library
# Generation Time: 2017-11-23 03:28:30 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table books
# ------------------------------------------------------------

DROP TABLE IF EXISTS `books`;

CREATE TABLE `books` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `author` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` int(11) NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `genres` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `barcode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `books` WRITE;
/*!40000 ALTER TABLE `books` DISABLE KEYS */;

INSERT INTO `books` (`id`, `author`, `title`, `year`, `file`, `genres`, `barcode`)
VALUES
	(1,'Branson, R.','Losing My Virginity',1998,'','Biography,Autobiography','9780307720740\n'),
	(2,'Mandela, N.','Long Walk to Freedom',2011,'','Biography,Autobiography','9780349106533\n'),
	(3,'Martinez, A','Chaos Monkeys; Obscene fortune and random failure in Silicon Valley',2016,'','Biography,Autobiography','9780062458193\n'),
	(4,'Trump, D.','Trump: The Art of the Deal',1987,'','Biography,Autobiography','9780345479174\n'),
	(5,'Vance, A.','Elon Musk: Tesla, SpaceX and the Quest for a Fantastic Future',2015,'','Biography,Autobiography','5\r'),
	(6,'Anderson, D.','Up Your Business! 7 Steps to Fix, Build or Stretch Your Organization',2007,'','Business Strategy','9780470068564\n'),
	(7,'Blank, S.','The Four Steps To The Epiphany',2013,'','Business Strategy','9780989200509\n'),
	(8,'Berger, R., Dutta, S., Raffel, T., Samuels, G.','Innovating at the Top: How Global CEOs Drive Innovation for Growth and Profit',2009,'','Business Strategy','9780230575738\n'),
	(9,'Beaumont, D.','Secrets of Male Entrepreneurs Exposed!',2005,'','Business Strategy','9780975797402\n'),
	(10,'Bock, Laszlo','Work Rules - Insights from inside Google that will transform how you live and lead',2015,'','Business Strategy','9781455554799\n'),
	(11,'Broughton, P.','What They Teach You at Harvard Business School',2008,'','Business Strategy','11\r'),
	(12,'Brown, S. & Eisenhardt, K.','Competing on the Edge: Strategy as Structured Chaos',1998,'','Business Strategy','9780875847542\n'),
	(13,'Cairnes, M.','Approaching the Corporate Heart: Breaking Through to New Horizons of Personal and Professional Success',2003,'','Business Strategy','9780980313215\n'),
	(14,'Chorn, N. & Hunter, T.','Strategic Alignment: How to Align the Organisation with its current and future environment',2004,'','Business Strategy','9781921606311\n'),
	(15,'Choudary, S.P.','Platform Scale',2015,'','Business Strategy','15\r'),
	(16,'Christensen, C. M.','The Innovator\'s Dilemma',2000,'','Business Strategy','16\r'),
	(17,'Christensen, C.M','Competing Against Luck',2016,'','Business Strategy','17\r'),
	(18,'Clark, D.','Alibaba: The House that Jack Ma Built',2016,'','Business Strategy','18\r'),
	(19,'Collins, J. & Hansen, M.','Great by Choice',2011,'','Business Strategy','9780062120991\n'),
	(20,'Collins, J.','Good to Great: Why Some Companies Take the Leap and Others Don\'t',2001,'','Business Strategy','20\r'),
	(21,'Cunningham, Keith J','The Ultimate Blueprint For An Insanely Successful Business',2013,'','Business Strategy','21\r'),
	(22,'Feld, B. & Mendelson, J.','Venture Deals',2013,'','Business Strategy','9781118443613\n'),
	(23,'Fisher, R. & Ury, W.','Getting to Yes : Negotiating an Agreement Without Giving In',1992,'','Business Strategy','23\r'),
	(24,'Ford, R. & Wiedemann, J.','Guidelines for Online Success: The Dos and Donts of the Internet from the best interactive agencies around the world',2008,'','Business Strategy','9783822823675\n'),
	(25,'Freiburg, K. & J.','Nuts! Southwest Airlines\' Crazy Recipe for Business and Personal Success',1998,'','Business Strategy','9780767901840\n'),
	(26,'Gerber, M.','The E Myth, Revisited: Why most small businesses don\'t work and what to do about it',2003,'','Business Strategy','9780060727710\n'),
	(27,'Goldsmith, M.','What Got You Here Won\'t Get You There',2007,'','Business Strategy','9781401301309\n'),
	(28,'Greenwald, B. & Kahn, J.','Competition Demystified: A Radically Simplified Approach to Business Strategy',2007,'','Business Strategy','9781591841807\n'),
	(29,'Harnish, V.','Mastering the Rockefeller Habits - What you Must Do to Increase the Value of Your Growing Firm',2002,'','Business Strategy','9780978774943\n'),
	(30,'Harnish, V. et. al','The Greatest Business Decisions of all Time: How Apple, Ford, IBM, Zappos, and Others Made Radical Choices That Changed the Course of Their Business',2012,'','Business Strategy','9781603200592\n'),
	(31,'Harnish, V.','Scaling Up: How a Few Companies Make It... and Why the Rest Don\'t',2014,'','Business Strategy','9780986019524\n'),
	(32,'Hsieh, T.','Delivering Happiness: A Path to Profits, Passion and Purpose',2010,'','Business Strategy','9781455508907\n'),
	(33,'Hsieh, T.','Delivering Happiness: A Path to Profits, Passion and Purpose',2010,'','Business Strategy','9780446563048\n'),
	(34,'Humphrey, N.','The Penguin Small Business Guide: The complete reference handbook for small to medium enterprises',2007,'','Business Strategy','9780143005520\n'),
	(35,'Ismail, S.','Exponential Organisations',2014,'','Business Strategy','9781626814233\n'),
	(36,'Kaufman, J.','The Personal MBA: Master the Art of Business',2012,'','Business Strategy','9781591845577\n'),
	(37,'Kaufman, R.','Uplifting Service: The Proven Path to Delighting Your Customers, Colleagues, and Everyone Else You Meet',2012,'','Business Strategy','37\r'),
	(38,'Kim, G, Behr, K & Spafford, G/','The Phoenix Project: A Novel About IT, DevOps, and Helping Your Business Win',2013,'','Business Strategy','38\r'),
	(39,'Kegan, R. & Lahey, L.','Immunity to Change: How to Overcome it and Unlock Your Potential in Yourself and Your Organization',2009,'','Business Strategy','9781422117361\n'),
	(40,'Knapp, Jake','Sprint - How to Solve Big Problems and Test New Ideas in Just Five Days',2016,'','Business Strategy','9781501121746\n'),
	(41,'Knight, P','Shoe Dog',2016,'','Business Strategy','9781471146718\n'),
	(42,'Larreche, J.','The Momentum Effect: How to Ignite Exceptional Growth',2008,'','Business Strategy','9780137067213\n'),
	(43,'Lencioni, P','The Advantage: Why Organizational Health Trumps Everything Else In Business',2012,'','Business Strategy','9780470941522\n'),
	(44,'Margo, J.','Frank Lowy: The Inside Story of the Man Who Powers Westfield',2001,'','Business Strategy','44\r'),
	(45,'Michalowicz, M.','Profit First',2014,'','Business Strategy','9780981808291\n'),
	(46,'Mulvey, P., McGoey, K., Kupersmith, K.','Business Analysis for Dummies',2013,'','Business Strategy','9781118510582\n'),
	(47,'Porter, M.','Competitive Strategy: Techniques for Analyzing Industries and Competitors',1998,'','Business Strategy','9780684841489\n'),
	(48,'Ross, A & Tyler, M.','Predictable Revenue',2012,'','Business Strategy','9780984380213\n'),
	(49,'Rumelt, R.','Good Strategy, Bad Strategy: The Difference and why it matters',2011,'','Business Strategy','9780307886231\n'),
	(50,'Schmidt, Eric & Rosenberg Jonathan','How Google Works',2014,'','Business Strategy','50\r'),
	(51,'Semler, R._','Maverick: The Success Story Behind the World\'s Most Unusual Workplace',1993,'','Business Strategy','9780446670555\n'),
	(52,'Solis, B.','The End of Business As Usual: Rewire the Way You Work to Succeed in the Consumer Revolution',2011,'','Business Strategy','9781118077559\n'),
	(53,'Stratten, S.','QR Codes kill kittens',2014,'','Business Strategy','9781118732755\n'),
	(54,'Thiel, P.','Zero to One',2014,'','Business Strategy','54\r'),
	(55,'Vide, D.','The Google Story: Inside the Hottest Business, Media and Technology Success of Our Time',2005,'','Business Strategy','9781405053716\n'),
	(56,'Wasserman, N.','The Founders Dilemma',2012,'','Business Strategy','56\r'),
	(57,'Weinberg, G & Mares, J.','Traction: How Any Startup Can Achieve Explosive Customer Growth',2015,'','Business Strategy','57\r'),
	(58,'Welch, J. & S.','Winning',2005,'','Business Strategy','9780007197675\n'),
	(59,'Yayici, E.','Business Analyst\'s Mentor Book',2013,'','Business Strategy','59\r'),
	(60,'Pape, S.','The Barefoot Investor: The Only Money Guide You\'ll Ever Need',2016,'','Business Strategy','60\r'),
	(61,'Peters, T. & Waterman R.','In Search of Excellence: Lessons from America\'s Best-Run Companies',2015,'','Business Strategy','9780060548780\n'),
	(62,'Watson, T. & Petre, P.','Father, Son & Co. My Life at IBM and Beyond',2000,'','Business Strategy','62\r'),
	(63,'Ferriss T.','Tools of Titan',2016,'','Business Strategy','63\r'),
	(64,'Greenwald B, Kahn, J. Sonkin, P.','Value Investing: From Graham to Buffett and Beyond',2004,'','Business Strategy','64\r'),
	(65,'Ben Horowitz','The Hard Think About Hard Things',2014,'','Business Strategy','65\r'),
	(66,'Raisel E.','The Mckinsey Way',1999,'','Business Strategy','66\r'),
	(67,'Morris, Kief','Infrastucture as Code - Managing servers in the cloud',2016,'','Cloud Platforms','9781491924358\n'),
	(68,'Adams, C. et.al.','Web Standards Creativity: Innovations in Web Design with XHTML, CSS, and DOM Scripting',2007,'','Design','9781590598030\n'),
	(69,'Beaird, J.','The Principles of Beautiful Web Design',2007,'','Design','9780980576894\n'),
	(70,'Ertel, C. & Solomo, L.','Moments of Impact: How to Design Strategic Conversations that Accelerate Change',2014,'','Design','9781451697629\n'),
	(71,'Goto, K. & Cotler, E.','Web ReDesign 2.0: Workflow That Works',2005,'','Design','9780735714335\n'),
	(72,'Mannino, M.','Database: Design, Application Development, and Administration (3rd ed)',2007,'','Design','9780072942200\n'),
	(73,'McNeil, P.','The Web Designer\'s Idea Book: The Ultimate Guide to Themes, Trends and Styles in Website Design',2008,'','Design','9781600610646\n'),
	(74,'n/a','Pantone Color Specifier: Coated chips',0,'','Design','74\r'),
	(75,'n/a','Pantone Color Specifier: Uncoated chips',0,'','Design','75\r'),
	(76,'Hurff, S.','Designing products people love',2015,'','Design','76\r'),
	(77,'Aalders, R.','The IT Outsourcing Guide',2001,'','Leadership,Management','9780471499350'),
	(78,'Aalders, R. & Hind, P.','The IT Manager\'s Survival Guide',2002,'','Leadership,Management','9780470844540\n'),
	(79,'Blanchard, K. & Johnson, S.','The One Minute Manager',1982,'','Leadership,Management','79\r'),
	(80,'Blanchard K & William Oncken Jr, Hal Burrows','The One Minute Manager Meets the Monkey',1989,'','Leadership,Management','80\r'),
	(81,'Bossidy, L. & Charan, R.','Execution: The Discipline of Getting Things Done',2002,'','Leadership,Management','9780609610572\n'),
	(82,'Blanchard, K.','Leading at a Higher Level',2010,'','Leadership,Management','9780137011704\n'),
	(83,'Carlzon, J','Moments of Truth',1989,'','Leadership,Management','9780060915803\n'),
	(84,'Charan, R, Drotter, S, Noel, J.','The Leadership Pipeline: How to Build the Leadership Powered Company',2011,'','Leadership,Management','tlphtbtlpc\n'),
	(85,'Covey, S.','The Speed of Trust',2006,'','Leadership,Management','9781416549000\n'),
	(86,'Freidman, S.','Total Leadership: Be a Better Leader, Have a Richer Life',2008,'','Leadership,Management','9781422103289\n'),
	(87,'Gallo, C.','The Presentation Secrets of Steve Jobs (Audio Book)',2010,'','Leadership,Management','87\r'),
	(88,'Ghosn, C','Shift - Inside Nissan\'s HIstoric Revival',2003,'','Leadership,Management','9780385512909\n'),
	(89,'Gold, A.','The Gold Strategy: Rules To Live By',2015,'','Leadership,Management','89\r'),
	(90,'Grant, J._','Hiring and Firing: The smart business guide to Australian employment law',2006,'','Leadership,Management','9781875889846'),
	(91,'Lam, P.','Born Strong',2015,'','Leadership,Management','91\r'),
	(92,'Lasater, I.','Words That Work In Business',2010,'','Leadership,Management','9781892005014\n'),
	(93,'Lencioni, P.','The Five Dysfunctions of a Team',2002,'','Leadership,Management','93\r'),
	(94,'Lencioni, P.','The Five Temptations of a CEO',1998,'','Leadership,Management','9780470267585\n'),
	(95,'Logan, D., King, J & Fischer-wright, H.','Tribal Leadership',2008,'','Leadership,Management','95\r'),
	(96,'Lundin, S., Paul, H. & Christensen, J.','Fish! A Remarkable Way to Boost Morale and Improve Results',2000,'','Leadership,Management','9780340819807\n'),
	(97,'Maister, D.','Managing the Professional Service Firm',1993,'','Leadership,Management','9780684834313\n'),
	(98,'Monteiro, M.','You\'re My Favourite Client',2014,'','Leadership,Management','98\r'),
	(99,'Rock, D.','Quiet Leadership: Six Steps to Transforming Performance at Work',2006,'','Leadership,Management','99\r'),
	(100,'Rubin, K.','Essential Scrum',2015,'','Leadership,Management','100\r'),
	(101,'Seiwert, L. & Woeltje, H.','Effective Time Management',2011,'','Leadership,Management','9780735660045\n'),
	(102,'Schiemann, W.','Reinventing Talent Management: How to Maximize Performance in the New Marketplace',2009,'','Leadership,Management','9780470452264\n'),
	(103,'Smart, G. & Street, R.','Who',2008,'','Leadership,Management','9780345504197\n'),
	(104,'Smith, P.','Lead With A Story',2012,'','Leadership,Management','104\r'),
	(105,'Stack, J.','The Great game of business - The only sensible way to run a company',2013,'','Leadership,Management','9780385348331\n\r'),
	(106,'Vaynerchuk, G.','#AskGaryVee: One Entrepeneur\'s take on Leadership, Social Media & Self Awareness',2016,'','Leadership,Management','9780062273123\n'),
	(107,'Wagner. R','12: The Elements of Great Managing',2006,'','Leadership,Management','9781595629982\n'),
	(108,'Weinberg, G. M.','The Secrets of Consulting',1985,'','Leadership,Management','9780932633019\n'),
	(109,'Willink, J. & Babin, L.','Extreme Ownership - How U.S Navy Seals Lead and Win',2015,'','Leadership,Management','9781250067050\n'),
	(110,'Wiseman, L. & McKeown, G.','Multipliers: How the Best Leaders Make Everyone Smarter',2010,'','Leadership,Management','110\r'),
	(111,'Jamison, S.','Wooden on Leadership',2005,'','Leadership,Management','9780071453394\n'),
	(112,'Zenger, J. & Folkman, J.','The Extraordinary Leader: Turning Good Managers into Great Leaders',2009,'','Leadership,Management','9780071628082\n'),
	(113,'Osherove, R.','Notes to a software team leader',2016,'','Leadership,Management','113\r'),
	(114,'Cohn, N.','Succeeding with Agile',2012,'','Leadership,Management','114\r'),
	(115,'Cohn, n.','User Stories Applied',2015,'','Leadership,Management','115\r'),
	(116,'Weinberg, Gerald.','Becoming A Technical Leader - An Organic Problem Solving Approach',1986,'','Leadership,Management','116\r'),
	(117,'Beckwith, H','Selling The Invisible - A Field Guide to Modern Marketing',2012,'','Marketing & Sales','9780446520942\n'),
	(118,'Cherry, P.','Questions that Sell: The Powerful Process for Discovering What Your Customer Really Wants',2006,'','Marketing & Sales','118\r'),
	(119,'Fox, Jeffrey J.','How To Become A Rainmaker. The Rules for Getting and Keeping Customers and Clients',2000,'','Marketing & Sales','9780786865956\n'),
	(120,'Gitomer, J.','The Sales Bible',2008,'','Marketing & Sales','120\r'),
	(121,'Gladwell, M.','The Tipping Point: How Little Things Can Make a Big Difference',2001,'','Marketing & Sales','121\r'),
	(122,'Godin, S.','Purple Cow',2002,'','Marketing & Sales','9781591843177\n'),
	(123,'Goodman, A.','Winning Results with Google Adwords',2009,'','Marketing & Sales','9780071496568\n'),
	(124,'Hiam, A.','Marketing For Dummies',2014,'','Marketing & Sales','9781118880807\n'),
	(125,'Kawasaki, G. & Fitzpatrick,','The Art of Social Media: Power Tips for Power Users',2014,'','Marketing & Sales','125\r'),
	(126,'Kellard, M. & Elliot, I.','Stop Bitching, Start Pitching: 9 Success Steps to Winning Business',2007,'','Marketing & Sales','126\r'),
	(127,'Kim, W. & Mauborgne, R.','Blue Ocean Strategy: How to Create Uncontested Market Space and Make the Competition Irrelevant',2005,'','Marketing & Sales','9781591396192\n'),
	(128,'Koetler, P., Armstrong, G., Brown, L., Stewart, A.','Marketing',1998,'','Marketing & Sales','9780724806867\n'),
	(129,'Koetler, P. & Keller, K.','A Framework for Marketing Management',2012,'','Marketing & Sales','9780132539302\n'),
	(130,'Layton, M.','Agile Project Management for Dummies',2012,'','Marketing & Sales','130\r'),
	(131,'Li, P.','JIRA Agile Essentials',2015,'','Marketing & Sales','131\r'),
	(132,'Mandino, O.','The Greatest Salesman in the World',0,'','Marketing & Sales','9780553277579\n'),
	(133,'McDonald, K.','Flat World Navigation: Collaboration and Networking in the Global Digital Economy',2015,'','Marketing & Sales','9780749473938\n'),
	(134,'Port, M.','Book Yourself Solid: The Fastest, Easiest and Most Reliable System for Getting More Clients Than You Can Handle Even if You Hate Marketing and Selling',2011,'','Marketing & Sales','134\r'),
	(135,'Rackham, N.','SPIN Selling',1988,'','Marketing & Sales','9780070511132\n'),
	(136,'Rix, P.','Marketing: A Practical Approach',2001,'','Marketing & Sales','9780074708583\n'),
	(137,'Singer, B.','Sales Dogs',2001,'','Marketing & Sales','137\r'),
	(138,'Southon, M. & West, C.','Sales On a Beermat',2005,'','Marketing & Sales','9781844138197\n'),
	(139,'Sugars, B.','Instant Sales: The Keys to Multiplying Your Business Profits',2004,'','Marketing & Sales','9780958093224\n'),
	(140,'Sugars, B.','Instant Referrals: The Keys to Multiplying Your Business Profits',2004,'','Marketing & Sales','9780975166710-1\n'),
	(141,'Sugars, B.','Instant Systems: The Keys to Multiplying Your Business Profits',2004,'','Marketing & Sales','9780958093286-1\n'),
	(142,'Sugars, B.','Instant Repeat Business: The Keys to Multiplying Your Business Profits',2004,'','Marketing & Sales','9780958093231\n'),
	(143,'Sugars, B','Instant Cashflow',2006,'','Marketing & Sales','9780071466592\n'),
	(144,'Iannarino, A','The Only Sales Guide You\'ll Ever Need',2016,'','Marketing & Sales','144\r'),
	(145,'Roberge, M.','The Sales Acceleration Formula',2015,'','Marketing & Sales','9781119047070\n'),
	(146,'Amoruso, S.','#Girlboss',2014,'','Personal Development','9780241217931\n'),
	(147,'Ariely, D.','Predictably Irrational - The hidden forces that shape our decisions',2008,'','Personal Development','9780061353246\n'),
	(148,'Burg, B.','The Go-Giver',2015,'','Personal Development','9781591848288\n'),
	(149,'Cain, S.','Quiet: The Power of Introverts in a World That Can\'t Stop Talking',2013,'','Personal Development','149\r'),
	(150,'Canfield, J.','The Success Principles: How to Get from Where You Are to Where You Want to Be',2007,'','Personal Development','9780060594893\n'),
	(151,'Carnegie, D.','How To Win Friends And Influence People',1936,'','Personal Development','9780671027032\n'),
	(152,'Cialdini, R.','Influence: The Psychology of Persuasion',2007,'','Personal Development','9780061241895\n\r'),
	(153,'Cialdini, R.','Influence: The Psychology of Persuasion',2007,'','Personal Development','9780061241895-1\n'),
	(154,'Gladwell, M.','Outliers: The Story of Success',2008,'','Personal Development','9780141036243\n'),
	(155,'Gladwell, M.','What the Dog Saw',2009,'','Personal Development','9780141044804\n'),
	(156,'Gordan, E.','Brain Revolution',2016,'','Personal Development','brsras-1'),
	(157,'Grant, A. & Greene, J.','Coach Yourself @ Work',2005,'','Personal Development','9780733313707\n'),
	(158,'Haidt, J.','The Happiness Hypothesis: Finding Modern Truth in Ancient Wisdom',2006,'','Personal Development','9780465028023\n'),
	(159,'Harris, S.','Lying',2013,'','Personal Development','9781940051000\n'),
	(160,'Hill, N','Think and Grow Rich',0,'','Personal Development','160\r'),
	(161,'Huffington, A.','Thrive',2014,'','Personal Development','9780804140843\n'),
	(162,'Jeffrey Gitomer','Little Red Book of Selling',2006,'','Personal Development','162\r'),
	(163,'Johnson, C.','The Information Diet',2011,'','Personal Development','9781491933398\n'),
	(164,'Johnson, S.','Who Moved My Cheese?',2015,'','Personal Development','9780399144462\n'),
	(165,'Kehoe, J.','Mind Power: Into the 21st Century',1996,'','Personal Development','9780973983005\n'),
	(166,'Kiyosaki, R. & Lechter, L.','Rich Dad, Poor Dad',2000,'','Personal Development','9780964385610\n'),
	(167,'Kiyosaki, R. & Lechter, L.','The Cashflow Quadrant: Rich Dad\'s Guide to Financial Freedom',1998,'','Personal Development','9780964385627\n'),
	(168,'Kotter, J.','Our Iceberg is Melting: Changing and Succeeding Under Any Conditions',2005,'','Personal Development','168\r'),
	(169,'McGee, S. & Wittry, J.','Take Back Your Life!',2007,'','Personal Development','9780735623439\n'),
	(170,'McGrath, J.','You Don\'t Have To Be Born Brilliant: How to Design a Magnificent Life',2000,'','Personal Development','9780733607967\n'),
	(171,'Medina, J','Brain Rules - 12 Principles for Surviving and Thriving at Work, Home, and School',2014,'','Personal Development','171\r'),
	(172,'Miller, J. A.','Power House CAA - The Untold Stories of Hollywood\'s Creative Artists Agency',2016,'','Personal Development','9780062441379\n'),
	(173,'Miller, M.','Enduring Words for Everyday Living',2006,'','Personal Development','9781741249446\n'),
	(174,'Miller, M.','Enduring Words for the Leader',2006,'','Personal Development','9781741249477\n'),
	(175,'Pink, D.','Drive: The Surprising Truth About What Motivates Us',2009,'','Personal Development','175\r'),
	(176,'Rath, T.','How Full is Your Bucket?',2007,'','Personal Development','176\r'),
	(177,'Reynolds, S.','Why People Fail: The 16 Obstacles to Success and How You Can Overcome Them',2010,'','Personal Development','177\r'),
	(178,'Robbins, A.','Notes From a Friend: A Simple, Step-by-step a guide to Taking Control of Your Life!',1991,'','Personal Development','9780743409377\n'),
	(179,'Silvester, T.','The Question is the Answer: Focusing on Solutions with Cognitive Hypnotherapy',2011,'','Personal Development','9780954366445\n'),
	(180,'Silvester, T.','The Question is the Answer',2006,'','Personal Development','180\r'),
	(181,'Sunstein, C. & Thaler, R.','Nudge: Improving decisions about health, wealth and happiness',2008,'','Personal Development','9780143115267\n'),
	(182,'Tan, C.','Search Inside Yourself: The unexpected path to achieving success, happiness (and world peace)',2012,'','Personal Development','9780062116932\n'),
	(183,'Ury, W.','The Power of a Positive No',2007,'','Personal Development','183\r'),
	(184,'Graham, B.','The Intelligent Investor',1973,'','Personal Development','9780060555665\n'),
	(185,'Bernstein J, W.','The Investor\'s Manifesto: Preparing for Prosperity, Armageddon, and Everything in Between',2009,'','Personal Development','9781118073766\n'),
	(186,'Sharma R.','The Monk Who Sold His Ferrari',1997,'','Personal Development','9780007848423\n'),
	(187,'Duckworth A.','Grit',2016,'','Personal Development','9781785040191\n'),
	(188,'Stanton B.','Humans of New York',0,'','Personal Development','188\r'),
	(189,'Stone B.','The Everything Store: Jeff Bezos and the Age of Amazon',2013,'','Personal Development','189\r'),
	(190,'Marquet, L D.','Turn the Ship Around: A True Story of Turning Followers Into Leaders',2015,'','Personal Development','9781591846406\n'),
	(191,'Gordon, E. Dr.','The Brain Revolution: Know and Train New Brain Habits',2016,'','Personal Development','191\r'),
	(192,'Allen, D.','How to Get Things Done: The Art of Stress-Free Productivity',2001,'','Productivity','9780143000181\n'),
	(193,'Bailey, C.','The Productivity Project',2016,'','Productivity','9781101904039\n'),
	(194,'De Bono, E.','Think! Before its Too Late',2009,'','Productivity','194\r'),
	(195,'Gladwell, M.','Blink: The Power of Thinking without Thinking',2005,'','Productivity','195\r'),
	(196,'Hudson, K.','Speed Thinking: How to Thrive in a Time-Poor World',2010,'','Productivity','9781741759952\n'),
	(197,'Kahneman, D.','Thinking Fast and Slow',2011,'','Productivity','197\r'),
	(198,'Rock, D.','Your Brain at Work: Strategies for Overcoming Distraction, Regaining Focus, and Working Smarter All Day Long',2009,'','Productivity','9780061771293\n\n'),
	(199,'Harvey, Greg PhD','Microsoft Excel 2013 For Dummies',0,'','Productivity','9781118510124\n'),
	(200,'Bishop, J.','C# 3.0 Design Patterns',2008,'','C# & .Net','200\r'),
	(201,'Crowe, A.','PMI-ACP Exam Prep',2012,'','C# & .Net','9781932735581\n'),
	(202,'Freeman, A.','Pro ASP .Net MVC 5',2013,'','C# & .Net','202\r'),
	(203,'Lakshmiraghavan, B.','Pro ASP.NET Web API Security',2013,'','C# & .Net','203\r'),
	(204,'Martin, R. & Martin, M.','Agile Principles, Patterns and Practices in C#',2007,'','C# & .Net','9780131857254'),
	(205,'Perry, S.','Aliens-La Ruche Terrestre',1999,'','C# & .Net','9782277240631\n'),
	(206,'Perry, S.','Core C# and .Net',2006,'','C# & .Net','9780131472273'),
	(207,'Robinson, S. et. al.','Professional C#',2004,'','C# & .Net','9780764557590\n'),
	(208,'Shepherd, G.','Microsoft Asp.Net 2.0: Step by Step',2005,'','C# & .Net','9780735622012\n'),
	(209,'Troelsen, A.','Pro C# 2008 and the .Net 3.5 Platform',2008,'','C# & .Net','9781590598849\n'),
	(210,'Penberthy, W.','Developing ASP.NET MVC 4 Web Applications',2013,'','C# & .Net','9780735677227\n'),
	(211,'Penberthy, W.','Developing ASP.NET MVC 4 Web Applications',2013,'','C# & .Net','211\r'),
	(212,'Brown, S.','Visual Basics 6 Complete',1999,'','C# & .Net','9780782124699\n'),
	(213,'Haishi, B. , Maier S. & Stolts D.','Architecting Microsoft Azure Solutions Exam Ref 70-534',2016,'','C# & .Net','213\r'),
	(214,'Gamma, E., Helm, R., Johnson, R. & Vlissides, J._','Design Patterns: Elements of Reusable Object-Oriented Software',2000,'','C# & .Net','214\r'),
	(215,'Sempf, B., Sphar, C., Randy Davis, S.','C# 5.0 All-In-One For Dummies',0,'','C# & .Net','cs5aio\n'),
	(216,'Andrew, R.','The CSS3 Anthology: Take Your Sights to New Heights',2012,'','CSS','9780987153029\n'),
	(217,'Budd, A.','CSS Mastery: Advanced Web Standards Solutions',2006,'','CSS','9781590596142\n'),
	(218,'n/a','Responsive Web Design HTML5 / CSS',2015,'','CSS','218\r'),
	(219,'n/a','Bootstrap by example',2016,'','CSS','219\r'),
	(220,'Holzschlag, Shea','The Zen of CSS Design',0,'','CSS','785342303476\n'),
	(221,'Castro, E.','Perl and CGI for the World Wide Web',1999,'','Perl','9780201353587\n'),
	(222,'Holzner, S.','Perl Core Language: The Essential Guide to Perl Programming',1999,'','Perl','9781576104262\n'),
	(223,'Gilmore, J.','Beginning PHP 5 and MySQL',2004,'','PHP','9781893115514\n'),
	(224,'Hartjes, Chris','The Grumpy Programmer\'s PHPUnit Cookbook',2015,'','PHP','224\r'),
	(225,'Hartjes, Chris','Minimum Viable Tests',2016,'','PHP','225\r'),
	(226,'Kofler, M.','The Definitive Guide to MySQL 5',2005,'','PHP','9781590595350'),
	(227,'MacGregor,_Allan','Magento PHP Developer\'s Guide - PDF',2013,'','PHP','227\r'),
	(228,'Lavin, P.','Object-Oriented PHP: Concepts, Techniques, and Code',2006,'','PHP','228\r'),
	(229,'Lecky-Thompson, E. et. al.','Professional PHP5',2005,'','PHP','9780764572821\n'),
	(230,'Shafik, D','Upgrading to PHP 7',2015,'','PHP','230\r'),
	(231,'Snyder, C. & Southwell, M.','Pro PHP Security',2005,'','PHP','9781590595084'),
	(232,'Mueller, John Paul.','Beginning Programming With Python',0,'','Python','bpwp\n'),
	(233,'n/a','Mastering JavaScript Promises',0,'','Javascript','233\r'),
	(234,'n/a','Mastering jQuery',0,'','Javascript','234\r'),
	(235,'n/a','Learning ECMAScript 6',2015,'','Javascript','235\r'),
	(236,'n/a','React.js Essentials',2015,'','Javascript','236\r'),
	(237,'n/a','Switching to Angular 2',2016,'','Javascript','237\r'),
	(238,'Ambler, T & Cloud, N.','Javascript: Frameworks for Modern Web Dev',2015,'','Misc Software','238\r'),
	(239,'Black, R., Veenendaal, E., Graham, D.','Foundations of Software Testing: ISTQB Certification',2015,'','Misc Software','239\r'),
	(240,'Bronson, G.','A First Book of ANSI C',2001,'','Misc Software','9780534379643\n'),
	(241,'Brooks, F.','The Mythical Man-Month: Essays on Software Engineering',1995,'','Misc Software','241\r'),
	(242,'Fowler, C._','The Passionate Programmer: Creating a Remarkable Career in Software Development',2009,'','Misc Software','242\r'),
	(243,'Good, N.','Regular Expression Recipes for Windows Developers: A Problem-Solution Approach',2005,'','Misc Software','689253594971\n'),
	(244,'Gunderloy, M.','Coder to Developer: Tools and Strategies for Delivering Your Software',2004,'','Misc Software','9780782143270\n'),
	(245,'Hawryszkiewycz, I.','Introduction to Systems Analysis and Design',2000,'','Misc Software','9781740092807\n'),
	(246,'Ingersoll, G, Morton, T & Farris, A.','Taming Text',2013,'','Misc Software','9781933988382\n'),
	(247,'Kelly, A.','Changing Software Development: Learning to Become Agile',2008,'','Misc Software','247\r'),
	(248,'McFedries, P.','Absolute Beginners Guide to VBA',2004,'','Misc Software','2120789730764'),
	(249,'Nayrolles, M','Magento Site Performance Optimization - Leverage the power of Magento to speed up your website',2014,'','Misc Software','9781783287055\n'),
	(250,'Paul, A & Nalwaya, A.','React Native for iOS Development',2016,'','Misc Software','9781484213964\n'),
	(251,'Seibel, P.','Coders At Work: Reflections on the Craft of Programming',2009,'','Misc Software','251\r'),
	(252,'Smart, J.','Jenkins: The Definitive Guide',2011,'','Misc Software','252\r'),
	(253,'Snook, J.','Accelerated DOM Scripting with Ajax, APIs, and Libraries',2007,'','Misc Software','9781590597644\n'),
	(254,'Spolsky, J.','Joel on Software (And on Diverse and Occasionally Related Matters that will Prove of Interest to Software Developers, Designers, and Manages, and to Those Who, Whether by Good Fortune, or Ill Luck, Work with Them in Some Capacity)',2004,'','Misc Software','9781590593899\n'),
	(255,'Spolsky, J.','More Joel on Software: Further Thoughts on Diverse and Occasionally Related Matters that will Prove of Interest to Software Developers, Designers, and Managers, and to Those Who, Whether By Good Fortune or Ill Luck, Work with Them in Some Capacity',2008,'','Misc Software','9781430209874\n'),
	(256,'Stallings, W.','Operating Systems: Internals and Design Principles',2001,'','Misc Software','9780130329868\n'),
	(257,'Williams, B.','Mastering Magento',2012,'','Misc Software','9781849516945\n'),
	(258,'Witting, A & Witting, M.','Amazon Web Services In Action',2016,'','Misc Software','258\r'),
	(259,'Wyke, R. & Gilliam, J.','JavaScript Unleashed',2002,'','Misc Software','9780672324314\n'),
	(260,'Delorme, R','Programming in HTML5 with JavaScript and CSS3',2014,'','Misc Software','9780735676633\n'),
	(261,'n/a','AWS Administration',0,'','Misc Software','261\r'),
	(262,'n/a','Machine learning with R',0,'','Misc Software','262\r'),
	(263,'n/a','Site Reliability Engineering Book',0,'','Misc Software','263\r'),
	(264,'Chambers, Mark L.','MacBook For Dummines (5th Edition)',0,'','Misc Software','mbfd\n'),
	(265,'Boyd, Barbara\rHutsko, Joe','Macs All-In-One (4th Edition)',0,'','Misc Software','maio4th\n'),
	(266,'Hart-Davis, Guy','Teach Yourself Visually - iMac (Third Edition)',0,'','Misc Software','tyvi\n'),
	(267,'Abraham, Nikhil','Coding For Dummies',0,'','Misc Software','cfdum\n'),
	(268,'Armstrong, L.','It\'s not about the bike: My Journey Back to Life',2000,'','Sport','9781865086798\n\r'),
	(269,'Karnazes, D.','Ultra marathon Man: Confessions of an All-Night Runner',2007,'','Sport','269\r'),
	(270,'Miller, M.','Enduring Words for the Athlete',2006,'','Sport','9781741249460\n'),
	(271,'Kotler, S','The Rise of Superman',2014,'','Sport','9781477800836\n'),
	(272,'n/a','Technology Review Magazine : January - February',2016,'','PANIC: What to do about Climate Change,Google\'s Great Virtual-Reality Experiment,Gene-Edited Dogs,The Fast Rise of AdBlockers,Taking Carbon from Air,Battery Firepower,Shared Robot Knowledge,','272\r'),
	(273,'n/a','Technology Review Magazine : March _ April',2016,'','10 Breakthrough Technologies,Google\'s Dream Machine,Have We Reached Peak Emissions?,The Chimera Contention,Smart Bandages,3 Questions for Mark Fields,A Boost for Solar,Q+A,Will Machines Eliminate Us?,','273\r'),
	(274,'n/a','Technology Review Magazine : May _ June',2016,'','Rogue Immune Cells That Wreck the Brain,WeChat Tranforms China\'s School Days,Sky-High Air ConditioningThe New Mosquito Menace,A Collar to Protect the Brain,Daredevil Drones,Flexible Glass,','274\r'),
	(275,'n/a','Technology Review Magazine : July _ August',2016,'','Free Money,The All-American iPhone,The Unbelievable Hyperloop Reality,Basic Income: A Sellout,Is This Fusion\'s Future,','074470013082\n'),
	(276,'n/a','Technology Review Magazine : September _ October',2016,'','35 Innovators Under 35,Al\'s Unspoken Problem,Fail-Safe Nuclear Power,The Quest for Better Painkillers,','276\r'),
	(277,'n/a','Technology Review Magazine : November _ December',2016,'','No Driver, No Problem?,Your Driverless Ride is Arriving,The One and Only Texas Wind Boom,Elon Musk\'s House of Gigacards,Learning to Prosper in a Factory Town,Will CRISPR Cure Ben Dupree,','277\r'),
	(278,'Cattaneo, A. et. al.','The Smashing Book',2009,'','Web Development','278\r'),
	(279,'Friedman, V. et. al.','#3 1/3 The Smashing Book Extension: Redesign the Web',2012,'','Web Development','279\r'),
	(280,'Heilmann, C. & Francis, M.','Web Development Solutions: Ajax, APIs, Libraries, and Hosted Services Made Easy',2007,'','Web Development','9781590598061\n'),
	(281,'Krug, S.','Don\'t Make Me Think: A Common Sense Approach to Web Usability',2006,'','Web Development','281\r'),
	(282,'Martin, R.','The Clean Coder',2011,'','Web Development','9780137081073\n'),
	(283,'Satzinger, J., Jackson, R., Burd, S.','Systems Analysis and Design in a Changing World',2000,'','Web Development','9780760058794'),
	(284,'Schwalbe, K.','Information Technology Project Management',2006,'','Web Development','9780619215262-1\n\n'),
	(285,'Stefanov, S.','JavaScript Patterns',2010,'','Web Development','285\r'),
	(286,'Duvall, P','Continuous Integration',2007,'','Web Development','9780321336385\n'),
	(287,'Humble, J & Farley, D','Continuous Delivery',2011,'','Web Development','9780321601919\n'),
	(288,'Holmes, S.','Getting MEAN with Mongo, Express Angular, and Node',2017,'','Web Development','9781617292033\n'),
	(289,'Brooks, J.','Business Adventures: Twelve Classic Tales from the World of Wall Street',2014,'','Misc','9781497644892\n'),
	(290,'Doar, M. B.','Practical JIRA Administration',2011,'','Misc','9781449305413\n'),
	(291,'Frankl, V.','Man\'s Search For Meaning',1959,'','Misc','291\r'),
	(292,'Graaf, J, Wann, D & Naylor, T.','Affluenza',2014,'','Misc','292\r'),
	(293,'Grassman, Tremblay','Logic and Discrete Mathematics: A Computer Science Perspective',1996,'','Misc','9780135012062\n'),
	(294,'Hemsath, D. & Yerkes, L.','301 Ways to Have Fun at Work',1997,'','Misc','9781576750193\n'),
	(295,'Horngren, I.','Accounting',2001,'','Misc','9780920351000\n'),
	(296,'Johnson, B.','The Churchill Factor',2014,'','Misc','9781594633027\n'),
	(297,'Karr, D. & Flannery, C.','Corporate Blogging for Dummies',2010,'','Misc','9780470604571\n'),
	(298,'Kinsmen, J.','Mr & Mrs Smith Hotel collection: European Coast and Country',2006,'','Misc','9780954496449\n'),
	(299,'Latimer, P.','Australian Business Law',2003,'','Misc','9781864686470\n'),
	(300,'Levine, J.& Young, M.','More Internet for Dummies',1994,'','Misc','9781568841649\n\r'),
	(301,'Tracy, B.','Eat That Frog!',2001,'','Misc','301\r'),
	(302,'Starnes, T.','The Deplorables Guide to Making America Great Again',2017,'','Misc','302\r'),
	(303,'Harari, Y.','Sapiens: A Brief History of Humankind',2011,'','Misc','303\r'),
	(304,'Willett, J.','Life of Galileo',1980,'','Misc','304\r'),
	(305,'Koestler, A.','The Ghost in the Machine',1967,'','Misc','305\r'),
	(306,'Dearin, C.','Camels, Sheikhs and Billionaires',2015,'','Misc','csab'),
	(307,'Johnson, S.','Who Moved My Cheese?',2015,'','Personal Development','9780399144462'),
	(308,'Schwalbe, K.','Information Technology Project Management',2006,'','Web Development','9780619215262\n'),
	(309,'Sugars, B.','Instant Referrals: The Keys to Multiplying Your Business Profits',2004,'','Marketing & Sales','9780975166710\n'),
	(310,'Sugars, B.','Instant Systems: The Keys to Multiplying Your Business Profits',2004,'','Marketing & Sales','9780958093286\n'),
	(311,'','Pantone Color Specifier: Coated chips',0,'','','9781881509820'),
	(312,'','Pantone Color Specifier: Uncoated chips',0,'','','9781881509820'),
	(313,'Mannino, M.','Database: Design, Application Development, and Administration (4th ed)',2007,'','Design','9780615231044\n'),
	(314,'Gordan, E.','Brain Revolution',2016,'','Personal Development','brsras\n'),
	(315,'Gordan, E.','Brain Revolution',2016,'','Personal Development','brsras-3\n'),
	(316,'Gordan, E.','Brain Revolution',2016,'','Personal Development','brsras-2\n'),
	(317,'Web Designer','50 HTML, CSS & JS Pro Tools',0,'','Design','9771745353003'),
	(318,'IIBA','Babok',0,'','Business Strategy','9781927584026'),
	(319,'Pullan P. & Archer J','Business Analysis & Leadership: Influencing Change',2013,'','Business Strategy, Leadership','9780749468620'),
	(320,'Ryan W. & Kort W. & Milton S.','Developing WIndows Azure and Web Services',2013,'','','9780735677241'),
	(321,'Beekhuyzen J.','Tech Girls are Superheros',0,'','Personal Development','tgas'),
	(322,'Liu S.','The World We See',2016,'','Leadership','9780646958804'),
	(323,'Wesley A.','Database Systems (Third Edition)',2002,'','Misc','9780201708578'),
	(324,'Sklar D. & Trachtenberg A.','PHP Cookbook',2006,'','PHP','phpcb'),
	(325,'Hamlyn P.','Snooker Billiards and Pool',1974,'','Sport','sbap'),
	(326,'Bogle J.','The Little Book of Common Sense Investing',2007,'','Misc','9781427201454'),
	(327,'Parragon','Pocket Reference Book: Card Tricks',0,'','Misc','9780752582542'),
	(328,'Yeshe L.','Life, Death, and After Death',2013,'','Personal Development','ldaad'),
	(329,'Viallet H.','Finance for Executives',2011,'','Business Strategy','9780538751346'),
	(330,'BRW.','50 Best Places To Work',2013,'','Misc','9770727745010'),
	(331,'BRW.','50 Best Places To Work',2013,'','Misc','5bptwb-1'),
	(332,'BRW.','50 Best Places To Work',2013,'','Misc','5bptwb-2'),
	(333,'Darkhorse','The Legend of Zelda: Hyrule Historia',2013,'','Misc','9781616550417');

/*!40000 ALTER TABLE `books` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table migrations
# ------------------------------------------------------------

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;

INSERT INTO `migrations` (`id`, `migration`, `batch`)
VALUES
	(55,'2014_10_12_100000_create_password_resets_table',1),
	(56,'2017_10_19_000204_create_users_table',1),
	(57,'2017_10_19_000353_create_books_table',1),
	(58,'2017_10_19_000925_create_user_books_table',1);

/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table password_resets
# ------------------------------------------------------------

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table user_books
# ------------------------------------------------------------

DROP TABLE IF EXISTS `user_books`;

CREATE TABLE `user_books` (
  `user` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `book` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_borrowed` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `team` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin` tinyint(1) NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;




/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
