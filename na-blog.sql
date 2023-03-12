-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 07, 2023 at 07:07 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `na-blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `blog_title` varchar(255) NOT NULL,
  `blog_desc` text DEFAULT NULL,
  `image` text DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `category_id`, `blog_title`, `blog_desc`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 3, 'PSG\'s Messi to be rested for French Cup match', 'Lionel Messi will be rested for Paris St Germain\'s French Cup game at third division side Chateauroux as the Argentine forward needs more time to recover from his world Cup winning campaign, coach Christophe Galtier said on Thursday.\r\n\r\nMessi, who lifted the World Cup on Dec. 18 at Lusail stadium in Qatar, took part in training over the last couple of days, but Galtier said he needed a bit more time to be ready to play competitively.\r\n\r\nLigue 1 leaders PSG, who suffered their first competitive loss this season when they were beaten 3-1 at second-placed RC Lens last Sunday, will be without their offensive trio.\r\n\r\nFrance forward Kylian Mbappe, who was on the losing side in the World Cup final, has been given a break and travelled to New York with friend and team mate Achraf Hakimi while Neymar skipped training on Thursday.\r\n\r\n\"We knew there would be absences after the World Cup. As for Neymar\'s absence in training, it had been scheduled after all players were assessed upon their return from the World Cup,\" said Galtier.\r\n\r\n\"We decided with the medical staff that Neymar, with everything he has experienced with his ankle problem (in Qatar), needed time. He won\'t play tomorrow.\"\r\n\r\nGaltier, however, insisted he would field a \"very competitive team\", with Costa Rica keeper Keylor Navas being handed a start in place of Gianluigi Donnarumma as PSG look to put their RC Lens loss behind them.\r\n\r\n\"There was disappointment, frustration and sometimes anger, but we want to bounce back with an important game as the Cup is one of the important goals of the club,\" Galtier, who won the Cup twice as an assistant coach with Sochaux and Olympique Lyonnais, said.\r\n\r\n\"Getting straight back into it is the best to eliminate that frustration.\"\r\n\r\nPSG will also be without midfielder Marco Verratti, who is suspended.', 'backend-assets/assets/db-img/blog-image/blog-image1673096143.jpg', 1, '2023-01-07 06:55:43', '2023-01-07 06:55:43'),
(2, 3, 'Ronaldo\'s Al-Nassr debut on hold', 'Portuguese superstar Cristiano Ronaldo faces a wait to make his Al Nassr debut because the Saudi club have exceeded their quota for foreign players, club sources told AFP on Thursday.\r\n\r\nWhen he was unveiled with great fanfare on Tuesday, the 37-year-old said he was keen to play as soon as possible, starting with Thursday\'s home game against Al Ta\'ee.\r\n\r\nPortuguese superstar Cristiano Ronaldo faces a wait to make his Al Nassr debut because the Saudi club have exceeded their quota for foreign players, club sources told AFP on Thursday.\r\n\r\nWhen he was unveiled with great fanfare on Tuesday, the 37-year-old said he was keen to play as soon as possible, starting with Thursday\'s home game against Al Ta\'ee.\r\n\r\n\"Al Nassr has not registered him yet because there is no vacancy for a foreign player,\" one Al Nassr official, who did not want to be named because he was not authorised to speak to media, told AFP.\r\n\r\n\"A foreign player must leave to register Ronaldo, either by selling or by terminating the contract by mutual consent,\" the official added.\r\n\r\nAl Nassr\'s foreign contingent includes Colombian goalkeeper David Ospina, Brazilian midfielder Luiz Gustavo and forwards Anderson Talisca of Brazil and Vincent Aboubakar of Cameroon.\r\n\r\nSaudi reports said Uzbek midfielder Jaloliddin Masharipov was most likely to make way for the five-time Ballon d\'Or winner and Champions League record scorer.\r\n\r\nA second club source confirmed that Ronaldo was not registered as of Thursday afternoon local time.\r\n\r\n\"There are ongoing negotiations to sell one of the players, but they have not reached their final stages yet,\" he said.\r\n\r\n- Two-match ban -\r\n\r\nAl Nassr\'s first game since Ronaldo\'s arrival will now be held on Friday at Mrsool Park, in the capital Riyadh, after an engineering report raised safety concerns, the Saudi Pro League said.\r\n\r\nThe stadium \"was unable to host the match, due to the heavy rain that led to electrical faults in lighting the stadium and the gates, based on the engineering report, and in the interest of the safety of the players and the attendees, the match was postponed\", a statement said.\r\n\r\nMrsool Park, where Ronaldo was unveiled to fireworks and deafening cheers from a capacity crowd on Tuesday, was sold out once again for Thursday\'s scheduled game.\r\n\r\nBoth club officials refused to confirm whether Ronaldo still needed to serve a two-match English Football Association ban issued in November for hitting a mobile phone out of a teenage fan\'s hand after Manchester United, his club at the time, lost to Everton.\r\n\r\nThe Saudi Football Association referred questions about the match ban to Al Nassr.\r\n\r\nOn Tuesday, the Portuguese forward said he was looking for a new challenge by coming to Saudi Arabia, adding that he had received offers from around the world.\r\n\r\n\"I\'m a unique player. It\'s good to come here, I broke all the records there (in Europe) and I want to break a few records here,\" Ronaldo said.\r\n\r\nAmnesty International urged him to speak out about human rights issues in the deeply conservative monarchy, calling his move part of a \"wider pattern of sportswashing\", or using sport to deflect criticism.', 'backend-assets/assets/db-img/blog-image/blog-image1673096223.jpg', 1, '2023-01-07 06:57:03', '2023-01-07 06:57:03'),
(3, 4, 'Dipjol-Misha ready to play ‘Kabadi’', 'Two popular \'villains\', Dipjol and Misha Sawdagar, will be sharing the screen together with the web series \"Kabadi\" directed by Rubayet Mahamud. Recently, the trailer of the web series was unveiled by the makers, and it has created excitement among viewers.\r\n\"It\'s a comedy thriller series, where four friends try to solve the mystery of video footage. They also try to find out the relationship between this mysterious video footage and 10 crore taka. The audience will love the comedy here. They will have so much fun watching this,\" said the director. \"Dipjol and Misha Sawdagor are both just amazing,\" he added. \r\nThe series also casts Sayed Zaman Shawon, Tamim Mridha, Khairul Basar, Sadia Ayman and Kamrun Nahar Dana, and Morshed Mishu among others.', 'backend-assets/assets/db-img/blog-image/blog-image1673096335.png', 1, '2023-01-07 06:58:55', '2023-01-07 06:58:55'),
(4, 4, '‘Hawa’ greets fans in four Indian states', 'Mejbaur Rahman Sumon directorial film \"Hawa\" greeted fans in multiple states of India, including Delhi, Haryana, Uttar Pradesh, and Maharashtra yesterday, under the banner of Reliance Entertainment.\r\n\r\nThough the film was supposed to be released in various Indian states last December 30, it reached the cinema halls a week later. The film\'s India distributor Reliance Entertainment shared the news on their official Facebook page.\r\n\"Hawa\" was previously screened in Kolkata and West Bengal on December 16 and managed to charm the audience into its marvelous narrative. The film has also been selected for nomination into the \'Best International Feature Film\' category of the 95th Academy Awards, by the Oscar Committee Bangladesh.\r\n\"Hawa\" stars Chanchal Chowdhury, Nazifa Tushi, Sariful Razz, Shohel Mondol, Nasir Uddin Khan and Rizvi Rizu, among many others.', 'backend-assets/assets/db-img/blog-image/blog-image1673096393.jpg', 1, '2023-01-07 06:59:53', '2023-01-07 06:59:53'),
(5, 4, '\'Wednesday\' renewed for season 2', 'It\'s time for more spookiness as Nevermore opens its door once again for the epic adventures of Wednesday Addams. \r\n\r\nAfter months of speculations, Netflix has finally confirmed the season 2 renewal of the goth mystery series. \r\nThe show\'s creators, Alfred Gough and Miles Millar, said in a statement that it has been amazing to produce a program that has resonated with viewers all over the world. \r\n\r\n\"I\'m excited to carry on with Wednesday\'s torturous season two voyage. We can\'t wait to explore the weird, eerie world of Nevermore in yet another season. We only need to confirm that Wednesday didn\'t empty the pool first,\" the post read.\r\nThe Tim Burton directional stars Jenna Ortega, Gwendoline Christie, Luis Guzmán, and Catherine Zeta-Jones. The series follows the Addams family\'s 16-year-old sardonic and unyielding, goth daughter as she enrolls in a new boarding school called Nevermore Academy—where she finds herself surrounded by enigmatic spirits and supernatural beings. \r\n\r\nThe first season of the Jenna Ortega-starring Netflix series \"Wednesday\", which debuted on November 23, has surpassed \"Stranger Things\" season four and \"Squid Game\" to rank as the third most watched series of all time. Additionally, the program twice surpassed the mark for the number of hours watched in a single week for an English-language TV program.', 'backend-assets/assets/db-img/blog-image/blog-image1673096458.jpg', 1, '2023-01-07 07:00:58', '2023-01-07 07:00:58'),
(6, 2, 'Stay alert', 'Prime Minister Sheikh Hasina has urged people to remain vigilant against the anti-liberation forces that are plotting to seize power through the backdoor.\r\n\r\n\"I would like to urge everyone to keep a watchful eye so that no one can snatch away the rights of the people through conspiracy. At the same time, everyone should be alert so that no one can create anarchy and damage the lives, livelihood and properties of the people in the name of movement,\" she said yesterday in her address to the nation aired on Bangladesh Television and Bangladesh Betar.\r\nThe next national election will be held at the end of this year or early next year, she said, adding that the anti-liberation, power-hungry plunderers were already trying to create chaos.\r\n\r\n\"Their aim is to… seize state power… and impede the progress of democracy.\"\r\n\r\nThe conspirators have hired intellectuals and orators at home and abroad with looted money to malign the ruling Awami League, she said in her 25-minute speech delivered at 7:30pm on the occasion of the 4th anniversary of the current government.\r\n\"They are trying to mislead people by spreading libels, false and fake information through social media.\"\r\n\r\nThe political parties and institutions that believe in democracy and the rule of law should reject ideas that undermine the constitutional process, she said.\r\n\r\n\"We expect a free, fair and impartial election.\"\r\n\r\nThe AL is a party of the people, she said. \"If people vote the Awami League to power again, the party will continue to carry out the responsibility of building the nation. But if they don\'t, we will remain with them and keep serving them.\r\n\r\n\"Today, no one refers to Bangladesh as a country of floods, droughts and disasters. Bangladesh is now an emerging economy and a role model of development.\"\r\n\r\nHasina said the AL has been in charge of governing the country for 14 years in a row after the formation of government in 2009.\r\n\r\n\"Our country has progressed a lot. But we have to take it forward further. Achieving a developed and prosperous Bangladesh is our goal. After building Digital Bangladesh, our next goal is to build a Smart Bangladesh.\"\r\n\r\nShe said the use of robotics, artificial intelligence, nanotechnology and digital devices will be ensured in all fields, including the industrial, health, education and agriculture sectors, to build Smart Bangladesh.\r\n\r\n\"Emphasis has been placed on research in all areas.\"\r\n\r\nThe PM focused on her government\'s successes in bringing the entire population under electricity coverage, strengthening road and rail connectivity, increasing food production, and  implementing large projects such as Padma Bridge, metro-rail, Bangabandhu Tunnel under the Karnaphuli river, Rooppur Nuclear Power Plant, Dhaka-Mawa-Jajira Expressway, Bangabandhu-1 Satellite, and setting up 100 economic zones.\r\n\r\nShe said the prices of daily essentials and fuel soared in Bangladesh like elsewhere due to the Russia-Ukraine war.\r\n\r\n\"We are purchasing some commodities at higher prices and distributing those at lower prices to the people with limited incomes.\"\r\n\r\nTen million families can purchase rice at Tk 30 a kg, and also edible oil, pulses and sugar at affordable rates through fair price cards, while five million families can buy rice at Tk 15 a kg once a month.\r\n\r\nPer capita income rose to $2,824 now from $543 in the 2005-2006 fiscal year, while poverty rate declined to 20 percent from 41.5 percent, the average life expectancy increased to 73 years from 64.5 years and the literacy rate to 75.2 percent from 45 percent.\r\n\r\nThe PM said the allocation for the social safety net programmes rose to Tk 113,576 crore in the current fiscal year from only Tk 373 crore in 2005-2006, while the subsidy to the agriculture sector went up to Tk 40,000 crore from Tk 592 crore.\r\n\r\nBangladesh is currently the 41st largest economy in the world, she said.\r\n\r\nNoting that the country has accomplished a remarkable feat in the communication sector, she said her government constructed and reconstructed hundreds of highways as well as bridges over major rivers.\r\n\r\nShe made mentions of the Padma Bridge, Bangabandhu Bridge, Teesta Bridge, Payra Bridge, 2nd Kanchpur Bridge, 2nd Meghna Bridge, and 2nd Gomti Bridge.\r\n\r\nHasina said some 100 bridges were simultaneously opened in a single day in November, while some 100 roads were inaugurated simultaneously in a day the following month.\r\n\r\n\"Today, the people have started reaping the benefits of our visionary plans.\"\r\n\r\nNoting that the Father of the Nation Bangabandhu Sheikh Mujibur Rahman dreamt of building Sonar Bangla free from exploitation and deprivation, she urged all to come forward to realise his dream by building a happy, prosperous and non-communal Bangladesh.', 'backend-assets/assets/db-img/blog-image/blog-image1673096635.jpg', 1, '2023-01-07 07:03:55', '2023-01-07 07:03:55'),
(7, 2, 'PM pays homage to Bangabandhu at Tungipara', 'Prime Minister Sheikh Hasina yesterday paid tributes and offered prayers at the mausoleum of Father of the Nation Bangabandhu Sheikh Mujibur Rahman at Tungipara of Gopalganj.\r\n\r\nAccompanied by her younger sister Sheikh Rehana and family members, the premier offered Fateha and joined a munajat (prayers) seeking eternal peace of the departed souls of Father of the Nation and other martyrs of August 15, 1975 carnage.\r\nThe prime minister also placed a wreath at Bangabandhu\'s mausoleum.\r\n\r\nAfter laying the wreath, she stood in solemn silence for some time as a mark of profound respect to the memory of the architect of the independence, who was brutally killed by some disgruntled army men on the dreadful night of August 15, 1975 along with most of his family members.\r\nThe premier reached Tungipara yesterday morning by road after crossing the Padma Bridge.\r\n\r\nThe premier is scheduled to spend the night at Tungipara.', 'backend-assets/assets/db-img/blog-image/blog-image1673096745.jpg', 1, '2023-01-07 07:05:45', '2023-01-07 07:05:45'),
(8, 1, 'Amazon job cuts to exceed 18,000 roles, CEO says', 'Amazon.com Inc\'s (AMZN.O) layoffs will now increase to more than 18,000 roles as part of a workforce reduction it previously disclosed, Chief Executive Andy Jassy said in a public staff note on Wednesday.\r\n\r\nThe layoff decisions, which Amazon will communicate starting Jan. 18, will largely impact the company\'s e-commerce and human-resources organizations, he said.\r\nThe cuts amount to 6 percent of Amazon\'s roughly 300,000-person corporate workforce and represent a swift turn for a retailer that recently doubled its base pay ceiling to compete more aggressively for talent.\r\n\r\nAmazon has more than 1.5 million workers including warehouse staff, making it America\'s second-largest private employer after Walmart Inc (WMT.N).\r\nIts stock rose 2 percent in after-hours trade.\r\n\r\nJassy said in the note that annual planning \"has been more difficult given the uncertain economy and that we\'ve hired rapidly over the last several years.\"\r\n\r\nAmazon has braced for likely slower growth as soaring inflation encouraged businesses and consumers to cut back spending and its share price has halved in the past year.\r\nThe company began letting staff go in November from its devices division, with a source telling Reuters at the time it was targeting around 10,000 cuts.\r\n\r\nThe tech industry shed more than 150,000 workers in 2022, according to tracking site Layoffs.fyi, a number that\'s continuing to grow. Salesforce Inc (CRM.N) said Wednesday it planned to eliminate about 10 percent of staff, which numbered nearly 8,000 as of October 31.\r\n\r\nThe reversal of Amazon\'s fortunes has been stark. It changed from a business deemed essential during the pandemic for delivering goods to locked-down homes, to a company that overbuilt for demand. Its layoffs now surpass the 11,000 cuts announced last year by Facebook-parent Meta Platforms Inc (META.O).\r\n\r\nJassy\'s note followed a report in the Wall Street Journal that the reduction would be more than 17,000 jobs. He said Amazon chose to disclose the news before informing affected staff because of a leak.\r\n\r\nAmazon still must file certain legal notices about mass layoffs, and it plans to pay severance.\r\n\r\nJassy said, \"Amazon has weathered uncertain and difficult economies in the past, and we will continue to do so.\"', 'backend-assets/assets/db-img/blog-image/blog-image1673097156.jpg', 1, '2023-01-07 07:12:36', '2023-01-07 07:12:36'),
(9, 1, 'Tesla slashes prices in Asian markets as sales stumble', 'Tesla (TSLA.O) cut prices in China for the second time in less than three months on Friday, fuelling forecasts of a wider price war amid weaker demand in the world\'s largest autos market.\r\n\r\nThe U.S. automaker also cut prices on its best-selling Model Y and Model 3 electric vehicles in Japan, South Korea and Australia in what a person with direct knowledge of the plan said was part of an effort to help stoke demand for output from its Shanghai factory, its single largest production hub.\r\nThe shift is the first major move by Tesla since appointing its lead executive for China and Asia, Tom Zhu, to oversee global output and deliveries that have been at the heart of the company\'s recent challenges after falling short of its 2022 delivery target.\r\n\r\nTesla shares closed up 2.5% at $113.06 on Friday. However, the stock has lost 70% of its value in the last year.\r\nAutomakers have long turned to incentives to control inventory, but, until late last year, Tesla had been able to keep prices steady or even raise them due to strong orders.\r\n\r\nBut last month CEO Elon Musk said \"radical interest rate changes\" had affected the affordability of all cars, new and used, and that Tesla could cut prices to sustain volume growth.\r\n\r\nThe latest cut in China, along with another in October and recent incentives for Chinese buyers, mean a 13% to 24% reduction in Tesla\'s prices from September in its second-largest market after the United States, Reuters calculations showed.\r\nTesla slashed prices for all its Model 3 and Model Y cars in China by between 6% to 13.5%, according to Reuters calculations based on the website prices. The starting price for the Model 3 was cut to 229,900 yuan ($33,427), from 265,900 yuan. Those models are now priced 24% to 32% lower than those in the United States, Tesla\'s largest market, Reuters calculations showed, reflecting several factors including material and labour costs.\r\n\r\nGrace Tao, Tesla\'s vice president in charge of external communications in China, said on Weibo that the price cuts in China reflected engineering innovation and answered Beijing\'s call to encourage economic development and consumption.\r\n\r\nDeliveries of Tesla\'s China-made cars hit their lowest in five months in December. Tesla\'s Shanghai plant, which was expanded last year, also exports vehicles to Europe.\r\n\r\nSo far, there has been no sign of Tesla cutting prices in Europe, where sales jumped 93% in November year-on-year, according to sales data from research group JATO Dynamics, and the Model Y was the top-selling car for the second time in 2022.\r\n\r\nTesla also saw its share of Europe\'s battery electric vehicle (BEV) market jump to 18.9% in November, from 12.3% in the same month a year earlier.\r\n\r\nSUBSIDIES END\r\n\r\nThe cuts came days after Beijing ended a subsidy programme, with softening demand forcing Tesla and rivals to absorb the brunt of the move.\r\n\r\nChina Merchants Bank International (CMBI) said that Tesla may have to do more, especially as competition with Chinese rivals intensifies.\r\n\r\n\"Tesla needs to further cut prices and expand its sales network in China\'s lower-tier cities amid ageing models,\" said CMBI analyst Shi Ji.\r\n\r\n\"We expect new EV production capacity in China to outpace new demand in 2023.\"\r\n\r\nBut Sun Shaojun, a popular China auto blogger, said on Weibo that Tesla\'s price cuts were so large that other automakers, including larger rival BYD (002594.SZ) would have to respond.\r\n\r\nBYD recently raised the prices for its best-selling models after the government\'s subsidies ended.\r\n\r\nAfter the price cut, Tesla\'s Model 3 was the equivalent of about $1,000 more that BYD\'s Seal, a model launched in July. The Model 3 is now the same price as BYD\'s best-selling Han EV.\r\n\r\nBYD declined to comment on competitors\' pricing, but said it would adjust its own according to changes in market demand.\r\n\r\nBYD, which sells both plug-in and pure electric vehicles, saw its retail sales in China double in December, while Tesla\'s fell 42%, according to data from CMBI.\r\n\r\nPROTESTS PLANNED\r\n\r\nSome Tesla owners in China who took delivery in recent months and did not qualify for the reduced prices said on Friday that they planned protests at its showrooms in Shenzhen and Henan, screenshots of social media chats seen by Reuters showed.\r\n\r\nTesla had no additional comment. A Tesla spokesperson referred Reuters to Tao\'s Weibo post.\r\n\r\nTesla also cut Model 3 and Model Y prices by about 10% each in Japan, the first time it had done so since 2021.\r\n\r\nIn the United States, the Model Y and Model 3 are eligible for up to $7,500 in clean vehicle tax credits as of this month under the Biden administration\'s Inflation Reduction Act, which became law in August.\r\n\r\nIn 2021, China accounted for just over a third of Tesla\'s overall sales', 'backend-assets/assets/db-img/blog-image/blog-image1673097228.jpg', 1, '2023-01-07 07:13:48', '2023-01-07 07:13:48'),
(10, 5, 'World food prices hit record in 2022: UN', 'World food prices fell for a ninth month in a row in December but hit their highest level on record for the full year in 2022, UN data showed yesterday.\r\n\r\nFood prices soared to a monthly record high in March after Russia invaded agricultural powerhouse Ukraine, a major supplier of wheat and cooking oil to the world.\r\nBut prices have dropped since then, with more relief brought by a deal brokered by Turkey and the United Nations in July that lifted a Russian naval blockade on Ukrainian grain exports.\r\n\r\nThe Food and Agriculture Organization yesterday said its price index, which tracks the monthly change in international prices of a basket of food commodities, fell to 132.4 points in December, a 1.9 percent drop from November.\r\nIt was also one percent lower than in December 2021.\r\n\r\nBut the index was 14.3 percent higher overall in 2022 compared to the previous year as it reached an all-time high of 143.7 points.\r\n\r\n\"Calmer food commodity prices are welcome after two very volatile years,\" FAO chief economist Maximo Torero said in a statement.\r\n\"It is important to remain vigilant and keep a strong focus on mitigating global food insecurity given that world food prices remain at elevated levels,\" he said.\r\n\r\nTorero said many staples are near record highs, with prices of rice rising and \"still many risks associated with future supplies\".\r\n\r\nWorld prices of maize were 24.8 percent higher on average in 2022 than in 2021, according to the FAO. Wheat was 15.6 percent more expensive.\r\n\r\nBut maize prices fell in December, mostly due to \"strong competition\" from Brazil, the FAO said.\r\n\r\nWheat was also down for the month \"as ongoing harvests in the southern hemisphere boosted supplies and competition among exporters remained strong\".\r\n\r\nThe FAO\'s vegetable oil price index reached a new record high in 2022 but fell 6.7 percent month-on-month in December to its lowest level since February 2021.\r\n\r\nDairy and meat prices hit their highest levels since 1990, the agency said. While meat prices fell 1.2 percent in December, those of dairy rose 1.1 percent for the month.', 'backend-assets/assets/db-img/blog-image/blog-image1673097427.jpg', 1, '2023-01-07 07:17:07', '2023-01-07 07:17:07'),
(11, 5, '29 killed during the arrest of El Chapo\'s son: Mexico', 'Ten soldiers and 19 criminal suspects were killed in the operation to arrest Ovidio Guzman, son of jailed drug trafficker Joaquin \"El Chapo\" Guzman, the Mexican government said yesterday.\r\n\r\nOvidio Guzman, nicknamed \"El Raton\" (The Mouse), had allegedly helped to run his father\'s operations since El Chapo was extradited to the United States in 2017.\r\nThe 32-year-old was rounded up Thursday in the northwestern city of Culiacan and flown to Mexico City on a military plane following six months of intelligence work to track him down, the government said.\r\n\r\n\"Ten members of the military... unfortunately lost their lives in the line of duty,\" Defense Secretary Luis Cresencio Sandoval told reporters, adding 19 \"lawbreakers\" were also killed in the operation.\r\nThe United States had a reward out of up to $5 million for information leading to Ovidio Guzman\'s capture. It accuses him of being a key player in the infamous Sinaloa cartel.', 'backend-assets/assets/db-img/blog-image/blog-image1673097487.jpg', 1, '2023-01-07 07:18:07', '2023-01-07 07:18:07');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Technology', 1, '2023-01-07 06:51:20', '2023-01-07 07:11:17'),
(2, 'Politics', 1, '2023-01-07 06:51:23', '2023-01-07 06:51:23'),
(3, 'Sports', 1, '2023-01-07 06:51:25', '2023-01-07 06:51:25'),
(4, 'Entertainment', 1, '2023-01-07 06:51:27', '2023-01-07 06:51:27'),
(5, 'International', 1, '2023-01-07 06:51:30', '2023-01-07 06:51:30');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `blog_id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `blog_id`, `username`, `email`, `message`, `created_at`, `updated_at`) VALUES
(2, 11, 'Nur Ahmed', 'nur@gmail.com', 'El chapo', '2023-01-07 08:05:23', '2023-01-07 08:05:23');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(8, '2014_10_12_000000_create_users_table', 1),
(9, '2014_10_12_100000_create_password_resets_table', 1),
(10, '2019_08_19_000000_create_failed_jobs_table', 1),
(11, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(15, '2022_12_24_130707_create_categories_table', 2),
(16, '2022_12_24_130735_create_blogs_table', 2),
(17, '2022_12_31_181212_create_comments_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Test', 'test@test.com', NULL, '$2y$10$mSCyQcQneEGUxWwJM2.hJuKAolc7ZviTIWL2ADnO6QlJVWrU3vXrK', NULL, '2023-01-07 06:51:06', '2023-01-07 06:51:06'),
(3, 'Nur', 'nur@gmail.com', NULL, '$2y$10$GF62kcfvM2IIx3Lcd/Sjfeuu3UAWNu3zyWbmSwsTjQfOkJTqAkOTG', NULL, '2023-01-07 09:02:19', '2023-01-07 09:02:19'),
(4, 'Test02', 'test02@test.com', NULL, '$2y$10$9KSEnWJdkNWg48U8r0EceuD7mamQJXqekLaot.hvICeQbRqHiyXaC', NULL, '2023-01-07 09:06:22', '2023-01-07 09:06:22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
