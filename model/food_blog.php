-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2016 at 09:38 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `food_blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_table`
--

CREATE TABLE IF NOT EXISTS `admin_table` (
  `admin_id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) CHARACTER SET utf8 NOT NULL,
  `email` varchar(100) CHARACTER SET utf8 NOT NULL,
  `password` varchar(100) CHARACTER SET utf16 NOT NULL,
  `status` int(5) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `commenttable`
--

CREATE TABLE IF NOT EXISTS `commenttable` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(25) CHARACTER SET utf8 NOT NULL,
  `comment` varchar(300) CHARACTER SET utf8 NOT NULL,
  `recepie_id` int(11) NOT NULL,
  `accept` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `commenttable`
--

INSERT INTO `commenttable` (`id`, `name`, `comment`, `recepie_id`, `accept`) VALUES
(1, 'mahrin', 'aaaaa', 2, 1),
(5, 'manha', 'aaaaaaaaaaaa', 4, 1),
(7, 'manah', 'ahahahahahah', 7, 1),
(8, 'mahadiya', 'hahahhaaha', 2, 1),
(9, 'kkkk', 'valo', 2, 1),
(11, 'new ', 'comments', 2, 1),
(12, 'MAHRIN', 'aaaaaaaaaaa', 2, 1),
(14, 'eshan', 'nice', 8, 1),
(15, 'tashin', 'nice', 8, 1),
(17, 'marshia', 'good', 29, 1),
(18, 'mahrin', 'gggg', 9, 1),
(19, 'hello', 'ami', 13, 1),
(20, 'hello', 'ami tasfe ,,', 29, 1),
(21, 'hello', 'ami tasfe ,,', 29, 0),
(22, 'anika', 'hello', 2, 0),
(24, 'here', 'THIS IS ME MAHRIN', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE IF NOT EXISTS `faq` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) CHARACTER SET utf8 NOT NULL,
  `comment` varchar(400) CHARACTER SET utf8 NOT NULL,
  `admin_reply` varchar(300) CHARACTER SET utf8 NOT NULL,
  `accept` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`id`, `name`, `comment`, `admin_reply`, `accept`) VALUES
(3, 'new', 'how r you', 'fine', 1),
(17, 'MAHRIN', 'HELLO YOU ARE YOU?', 'IM FINE', 1),
(18, 'MAHRIN', 'HELLO YOU ARE YOU?', 'IM FINE', 1),
(19, 'MAHRIN', 'HELLO YOU ARE YOU?', '0', 0),
(22, 'MAHRIN', 'HELLO YOU ARE YOU?', '0', 0),
(23, 'marshia', 'what are you eating??', 'noodles', 1);

-- --------------------------------------------------------

--
-- Table structure for table `guest_info`
--

CREATE TABLE IF NOT EXISTS `guest_info` (
  `username` varchar(10) CHARACTER SET utf8 NOT NULL,
  `f_name` varchar(30) CHARACTER SET utf8 NOT NULL,
  `l_name` varchar(30) CHARACTER SET utf8 NOT NULL,
  `email` varchar(40) CHARACTER SET utf8 NOT NULL,
  `contact` int(6) NOT NULL,
  `guest_id` int(6) NOT NULL AUTO_INCREMENT,
  `password` int(4) NOT NULL,
  PRIMARY KEY (`guest_id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `guest_info`
--

INSERT INTO `guest_info` (`username`, `f_name`, `l_name`, `email`, `contact`, `guest_id`, `password`) VALUES
('mahrin', 'mahrin', 'tasfe', '', 0, 1, 1234),
('fahim', 'fahim', 'aaaaaaaaaaaa', 'nicegollu@yahoo.com', 111111, 10, 2222),
('samia', 'samia', 'aa', 'mahnaj@gamil.com', 111111, 11, 1234),
('admin', 'admin', 'aaaaaaaaaaaa', 'mahrintasfe01@gmail.com', 111111, 12, 1111),
('marshia', 'marshia', 'marshia', 'gollubabu@yahoo.com', 11111, 13, 1111),
('tasfe', 'tasfe', 'aaa', 'mahnaj@gamil.com', 11111, 14, 1111),
('anika', 'mahrin', 'a', 'gollubabu@yahoo.com', 111111, 15, 1111);

-- --------------------------------------------------------

--
-- Table structure for table `ratingtable`
--

CREATE TABLE IF NOT EXISTS `ratingtable` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rate` int(11) NOT NULL DEFAULT '0',
  `recepie_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=145 ;

--
-- Dumping data for table `ratingtable`
--

INSERT INTO `ratingtable` (`id`, `rate`, `recepie_id`) VALUES
(3, 4, 33),
(6, 5, 2),
(9, 3, 6),
(26, 5, 7),
(28, 3, 9),
(37, 4, 13),
(104, 5, 14),
(110, 1, 23),
(114, 5, 18),
(115, 5, 8),
(121, 5, 4),
(129, 4, 19),
(131, 2, 28),
(132, 8, 29),
(133, 7, 30),
(136, 3, 34),
(138, 3, 24),
(142, 2, 31),
(143, 6, 32);

-- --------------------------------------------------------

--
-- Table structure for table `recepie`
--

CREATE TABLE IF NOT EXISTS `recepie` (
  `recepie_id` int(11) NOT NULL AUTO_INCREMENT,
  `recepie_name` varchar(100) CHARACTER SET utf8 NOT NULL,
  `ingredients` varchar(600) CHARACTER SET utf8 NOT NULL,
  `no_of_ingredients` int(10) NOT NULL,
  `cuisine` varchar(10) CHARACTER SET utf8 NOT NULL,
  `catagory` varchar(15) CHARACTER SET utf8 NOT NULL,
  `description` varchar(1000) CHARACTER SET utf8 NOT NULL,
  `price` int(11) NOT NULL,
  `upload_date` date NOT NULL,
  `main_copy` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`recepie_id`),
  UNIQUE KEY `recepie_name` (`recepie_name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=37 ;

--
-- Dumping data for table `recepie`
--

INSERT INTO `recepie` (`recepie_id`, `recepie_name`, `ingredients`, `no_of_ingredients`, `cuisine`, `catagory`, `description`, `price`, `upload_date`, `main_copy`) VALUES
(2, 'Agua de Jamaica (Hibiscus Tea)', '•	2 quarts water\r\n•	3/4 to 1 cup sugar (depending on how sweet you would like it to be)\r\n•	1 cup dried hibiscus flowers\r\n•	1/2 cinnamon stick (optional)\r\n•	A few thin slices ginger (optional)\r\n•	Allspice berries (optional)\r\n•	Lime juice (optional)\r\n•	Orange or lime slices for garnish\r\n', 8, 'american', 'drink', '1 Put 4 cups of the water and the sugar in a medium saucepan. Add cinnamon, ginger slices, and/or a few allspice berries if you would like. Heat until boiling and the sugar has dissolved. Remove from heat. Stir in the dried hibiscus flowers.\r\n\r\n2 Cover and let sit for 20 minutes. Strain into a pitcher and discard the used hibiscus flowers, ginger, cinnamon, and/or allspice berries.\r\n\r\n(At this point you can store ahead the concentrate, chilled, until ready to make the drink.)\r\n\r\n3 Add remaining 4 cups of water (or if you want to chill the drink quickly, ice and water) to the concentrate, and chill. Alternatively you can add ice and chilled soda water for a bubbly version. Add a little lime j', 230, '2016-11-01', 1),
(4, 'Rhubarb Sorbet', '•	3 1/2 cups of chopped fresh rhubarb stalks (4-5 stalks, do not use the poisonous leaves!)\r\n•	2 1/2 cups of water\r\n•	1 2/3 cups of white granulated sugar\r\n•	2 teaspoons of orange zest\r\n•	2 teaspoons of chopped fresh ginger\r\n•	1/4 teaspoon salt\r\n•	2 Tbsp of corn syrup\r\n\r\n', 7, 'american', 'dessert', '1 Put the chopped rhubarb, water, sugar, orange zest, ginger, and salt into a 3 to 4-quart pot. Heat on high heat to bring to a boil. Lower the heat to low to simmer, covered, for 5 minutes, or until the sugar has dissolved and the rhubarb is falling apart tender.\r\n\r\n2 Remove from heat and let cool for 10 minutes. Either use an immersion blender or work in batches with a standing blender to purée the mixture until smooth. Press the mixture through a fine mesh sieve to remove any of the stringy pulp. Stir in the corn syrup. Cover and refrigerate until totally chilled, several hours or overnight. (Can more quickly chill in the freezer if you check it and stir it every 15 minutes.)\r\n\r\n3 Process in your ice cream maker according to the manufacturer''s instructions. Note that right out of the ice cream maker the sorbet will have a soft consistency. If you would like it to be firmer, put it in a covered container and freeze it for a few hours. Once frozen, you may need to let it sit for a few', 800, '2016-11-01', 1),
(6, 'Cherry Ice Cream with Chocolate Chips', '1 1/2 cups pitted ripe sweet cherries (from about 3/4 lb cherries)\r\n    3/4 cup milk\r\n    1 3/4 cups cream\r\n    1/2 cup sugar\r\n    1 pinch salt\r\n    1 teaspoon lemon juice\r\n    2 Tbsp Amaretto, cherry liqueur, or rum (optional)\r\n    4 ounces bittersweet chocolate, chopped fine, keep in freezer until used\r\n', 8, 'american', 'dessert', '1 Put cherries, milk, one cup of the cream, sugar, and salt into a medium saucepan. Heat on medium heat until the mixture is steamy, then lower the heat to warm and just let sit for about 15 minutes. Remove from heat. Pour mixture into a blender, or use an immersion blender, and carefully purée. (Careful because you are dealing with a hot liquid. Make sure you hold the cap down on the top of the blender while puréeing.)\r\n\r\n2 Put mixture into a large bowl. Stir in the remaining 3/4 cup of cream. Chill for several hours in the refrigerator until completely cold. (Can also place bowl over an ice bath, to speed up the cooling process.)\r\n\r\n3 Before putting the mixture into your ice cream maker, stir in the lemon juice and the Amaretto or other liqueur if you are using. Note that you can skip the alcohol if you want, but the addition of it will help the ice cream from getting too icy, and the amaretto can add a nice flavor boost to the ice cream. Churn the ice cream in your ice cream maker a', 600, '2016-09-04', 1),
(8, 'Best Fresh Apple Bundt Cake', '    1 1/2 cups vegetable oil (we use grapeseed oil)\r\n    2 cups of sugar\r\n    3 eggs, slightly beaten\r\n    3 cups of white flour\r\n    1 1/2 teaspoon baking soda\r\n    1 teaspoon vanilla\r\n    1 teaspoon salt\r\n    1 teaspoon cinnamon\r\n    3 cups chopped, peeled apples (varieties that are good for baking - i.e. Granny Smith, Gravenstein, Fuji)\r\n    1 cup of coconut (the sweetened fresh grated, not the dried. If you use dried, soak first in water.)\r\n    1 cup of chopped nuts - walnuts or pecans\r\n\r\nGlaze:\r\n\r\n    1/2 stick sweet butter\r\n    1 cup brown sugar\r\n    3 tablespoons milk\r\n', 14, 'american', 'dessert', '1 Preheat oven to 350° F.\r\n\r\n2 Beat together the sugar and oil. Add the eggs. In a separate bowl, sift together the flour, baking soda, salt and cinnamon. Add dry ingredients to oil sugar eggs mixture in thirds, beating to incorporate after each addition. Mix in the vanilla, apples, coconut, and chopped nuts.\r\n\r\n3 Bake in a greased and floured bundt cake pan about 1 hour. Test around the centers with a long thin bamboo skewer or toothpick to make sure the cake is done.\r\n\r\n4 When cool enough to handle, gently remove from pan. Let sit on a rack to cool completely. If the dough has raised substantially around the middle areas of the bundt ring, you may need to use a bread knife to gently level off the cake so that it sits even.\r\n\r\n5 Blend glaze ingredients and cook until melted. Place the cake on its serving dish. Prick all around the top of the cake with a fork so that when the glaze is applied it easily seeps into the cake. Use a pastry brush to apply the glaze liberally around the surf', 1100, '2016-09-04', 1),
(9, 'Tempura Squid', '1 pound cleaned squid\r\n    1 egg yolk\r\n    1 cup ice cold sparkling water (the colder the better)\r\n    1/8 teaspoon baking soda\r\n    1 teaspoon salt\r\n    1/4 cup corn starch\r\n    3/4 cup rice or regular flour\r\n    Canola oil or peanut oil for frying (high smoke point vegetable oil\r\n', 8, 'japanese', 'appetizer', '1 Slice the squid tubes into rings about 1/2-inch to 3/4-inch wide. Leave the tentacles whole.\r\n\r\n2 This recipe was designed for a deep-fryer, but you can also fill a large, heavy-bottomed pot (keep a lid nearby, for safety reasons) halfway with oil, about 3 inches deep. Heat the oil to 360-370°F.\r\n\r\n3 While the oil is heating, mix all the dry ingredients together well.\r\n\r\n4 Once the oil has reached 360°F, take the sparkling water out of the refrigerator and mix it with the egg yolk. Immediately mix it in with the dry ingredients. Mix quickly. Do not worry if there are clumps or lumps. Over-mixing may cause the batter to become chewy when cooked.\r\n5 Working in small batches at a time (about 8 pieces), dip the squid pieces in the batter. Pick them up one by one and gently put them in the hot oil. (Note if your fingers are coated with the batter, it will help protect them from splatter.) When the squid pieces are in the oil, use a chopstick or the handle of a wooden spoon to dislodge any', 400, '2016-09-05', 1),
(13, 'Chiken lime soup', '•	1 to 1 1/2 cups canola or corn oil for frying\r\n•	6 corn tortillas\r\n•	1 1/4 cup chopped white onion\r\n•	3 cloves of garlic, minced\r\n•	1 habanero chile, seeded and minced\r\n•	1/4 teaspoon ground cinnamon\r\n•	Pinch of ground cloves\r\n•	1 pound tomatoes (2 large), cored, peeled, and chopped (or 1 cup of canned crushed tomatoes)\r\n•	2 quarts of chicken stock (homemade is best)\r\n•	1 teaspoon of dried oregano (preferably Mexican oregano if you have it)\r\n•	1 teaspoon salt (more to taste)\r\n•	1 1/2 pounds of skinless, boneless chicken thighs (or breasts if you prefer, we like the stronger taste of thighs),', 15, 'mexican', 'appetizer', '1 Heat oven to 350°F. Place tortillas in a single layer on a baking sheet and heat in the oven for 10 to 12 minutes, flipping over after the first 5 minutes. (This will help dry out the tortillas a bit before frying.) Remove from oven. Cut the tortillas into 1/4-inch wide strips.\r\n\r\n2 Pour oil into a large, thick-bottomed pot to 1/4-inch deep, about 1 to 1 1/2 cups. Heat the pot on medium high heat until the oil temperature reaches about 350°F or a small piece of tortilla place in the oil sizzles. Do not let the oil reach smoking point. Working in batches, gently scatter a handful of tortilla strips in the hot oil.  Turn with metal tongs so that the tortilla strips are separated.  Cook for a few minutes or until the strips just begin to color. Remove them to a paper towel lined plate.  When I make these after I add the tortilla strips I increase the heat of the burner to compensate for the tortilla strips lowering the temperature of the oil. Once the tortilla strips start to color I lo', 400, '2016-08-08', 1),
(14, 'Mexican ice cream', '    2 cups heavy whipping cream\r\n    1 cup milk\r\n    1/4 cup cocoa powder\r\n    4 ounces bittersweet or semi-sweet chocolate\r\n    1/2 cup sugar\r\n    2 teaspoons cinnamon\r\n    Pinch salt\r\n    Pinch cayenne\r\n    Pinch espresso powder (or instant coffee)\r\n    6 egg yolks, lightly beaten\r\n    1 teaspoon vanilla extract\r\n    2 Tbsp brandy (optional)\r\n', 12, 'mexican', 'dessert', '1 Heat one cup of cream in a small saucepan (1 qt). Whisk in cocoa powder. Bring to a simmer. Whisk until cocoa powder is well incorporated. Remove pot from heat. Stir in chocolate until completely incorporate.\r\n\r\n2 Put mixture into a metal bowl and add the remaining cup of cream. Set that bowl over a larger bowl half-filled with ice water to help cool it down. Place a mesh sieve over the bowl with the chocolate mixture.\r\n\r\n3 Put one cup of milk, the sugar, cinnamon, salt, cayenne, espresso powder (or instant coffee) into a saucepan and heat until steamy (not boiling), stirring to incorporate the spices and dissolve the sugar. Place egg yolks in a medium sized bowl. Slowly pour the heated milk and mixture into the egg yolks, whisking constantly so that the egg yolks are tempered by the heated milk, but not cooked by it. Use a rubber spatula to scrape the warmed egg yolks back into the saucepan.\r\n\r\n4 Stir the milk egg mixture constantly over medium heat with a wooden spoon, scraping the', 500, '2016-12-09', 1),
(18, 'Italian Meatballs', ' 1    pound ground beef (at least 16 percent fat)\r\n    1 pound ground pork\r\n    2/3 cup milk (whole or 2 percent)\r\n    3 slices of white bread, crusts removed (about 3 ounces)\r\n    1/4 cup ricotta cheese\r\n    1/4 cup grated parmesan or romano cheese\r\n    2 eggs\r\n    2 teaspoons Kosher salt\r\n    1 Tbsp chopped fresh parsley\r\n    2 teaspoons black pepper\r\n    1 teaspoon dried oregano or marjoram\r\n    2-3 garlic cloves, minced\r\n    About 1 cup of flour for dusting\r\n    1/3 cup olive oil\r\n    2 1/2 cups (24 ounces) of tomato sauce (make in step 1 of method or use already prepared)\r\n\r\nTomato Sauce:', 23, 'italian', 'main_course', '1 Start with the tomato sauce, which will simmer while you prepare the meatballs. Heat olive oil in a large skillet on medium heat. Add the onions, carrots, celery, and parsley. Stir to coat with the oil, reduce the heat to low and cover the pan. Cook for 15 to 20 minutes until the vegetables are soft and cooked through. Remove the cover, add the garlic, and increase the heat to medium high. Cook the garlic for half a minute, then add the tomatoes (if using whole canned, break up with your fingers as you add them to the pan.) Add the tomato paste and basil. Season with salt and pepper. Bring to a low simmer, reduce the heat to low and let cook uncovered until thickened while you prepare the meatballs, 15 to 30 minutes. Purée in a blender, or push through a food mill for a smooth consistency. Adjust seasonings.\r\n\r\n\r\n2 Heat the milk in a small pot until steamy. Turn off the heat, tear the bread into little pieces and soak it in the milk until it partially dissolves. Mash it until you get', 870, '2016-07-05', 1),
(19, 'Asian Noodle Salad', '    10 ounces Chinese noodles (for making chow mein)\r\n    1/3 cup soy sauce\r\n    2 - 3 cups raw bite-sized broccoli florets (from about 1 head of broccoli)\r\n    Salt\r\n    4 ounces mung bean sprouts (about 1 1/2 cups)\r\n    3 green onions, thinly sliced white and green parts\r\n    1 red bell pepper, cored and seeded, thinly sliced and cut into 1-inch long pieces\r\n    1/4 large purple cabbage, cored and thinly sliced (about 2 cups)\r\n    1 large carrot, peeled and slivered (just continue to peel with a peeler)\r\n\r\nDressing:*\r\n\r\n    1-inch piece of fresh ginger, peeled and roughly chopped\r\n    4 Tbsp', 16, 'chinese', 'appetizer', '1 Bring 4 quarts of water to a rolling boil in a large pot. If using Chinese noodles, do not add salt (they are already salted). If using soba or pasta noodles, add a tablespoon of salt to the water. Add the noodles to the pot. Stir the noodles frequently while they cook. Check the noodle package instructions, if using Chinese noodles, they should be done after 5 minutes of cooking. Drain the noodles, rinse with cold water to stop the cooking. Spread the noodles out on a sheet pan to air dry.\r\n\r\n\r\n2 Place a steamer rack in the bottom of a 3 to 4-quart pot. Add enough water to come up to the level of the steamer. Heat until boiling. Add the broccoli florets. Cover and steam cook for 4 minutes. Remove from the pot and rinse with cold water to stop the cooking. Set aside.\r\n\r\n\r\n3 Place the cooked noodles in a large serving bowl. Toss with soy sauce to coat completely. Let sit to absorb the soy sauce while you make the dressing.\r\n\r\n\r\n4 Place the ginger, sugar, garlic, and red pepper flakes ', 350, '2016-10-03', 1),
(23, 'Happy Shrimp Stir Fry', 'For the sauce (mix together in a bowl)\r\n\r\n    2 teaspoons sugar\r\n    1/2 cup chicken or vegetable broth\r\n    3 tablespoons ketchup\r\n    1 teaspoon rice vinegar (or white vinegar)\r\n    1/2 teaspoon sesame oil\r\n\r\nFor the shrimp\r\n\r\n    1 pound raw shrimp, deveined\r\n    2 teaspoons cornstarch\r\n    2 tablespoons canola, vegetable or peanut cooking oil\r\n    1 teaspoon grated fresh ginger\r\n    1-2 garlic cloves, finely minced\r\n    1 tablespoon finely sliced green onion\r\n    Handful of shredded iceberg lettuce\r\n', 12, 'chinese', 'appetizer', '1 Pat the shrimp very dry and place them in a bowl. Toss with the cornstarch.\r\n\r\n2 Heat a wok or large frying pan on high heat until a bead of water instantly sizzles and evaporates upon contact. Add the cooking oil and swirl to coat. Add the cornstarch coated shrimp to the wok and spread out in one layer. Let fry untouched for 1 minute. Flip and fry other side for another minute. Remove the shrimp from the frying pan, keeping as much oil in the pan as possible.\r\n\r\n3 Return the pan to the stove. Add an additional teaspoon of cooking oil to the pan if needed. When the pan is hot, turn the heat to medium and add the garlic and the ginger and fry for 15-30 seconds until fragrant.\r\n\r\n4 Pour in the sauce mixture and bring to boil. Add the cooked shrimp back into the wok and let simmer for an additional minute until the shrimp are cooked through. Serve on bed of shredded lettuce and top with garnish of sliced green onions.\r\n', 340, '2017-02-09', 1),
(24, 'Teriyaki Chicken Breasts', '    3/4 cup soy sauce* (or mix tamari** and water in equal proportions to make 3/4 cup)\r\n    3/4 cup sake\r\n    3/4 cup mirin\r\n    4 Tbsp sugar\r\n    A 1-inch piece of ginger, grated fine\r\n    4 skinless, boneless chicken breasts, about 1 1/4 to 1 1/2 pounds total (set out for 30 minutes to come to room temp)\r\n    2-3 Tbsp sesame seeds\r\n\r\n', 7, 'japanese', 'main_course', '1 Mix the grated ginger, sugar, soy sauce, sake and mirin in a pot and bring to a boil. Add the chicken breasts, return to a simmer, then lower the heat to the lowest possible setting (warm if you can), on your smallest burner, and cover. The idea is to cook the chicken as gently as possible, below a simmer. Cook for 20 minutes. If you are working with somewhat large chicken breasts, you may need to cook them longer, or cut them in half before cooking.\r\n\r\n2 While the chicken is poaching, toast the sesame seeds in a dry pan until they begin to brown. Move to a small bowl and set aside.\r\n\r\n3 Remove the chicken breasts from the teryaki sauce, set on a plate and wrap with foil. Bring the sauce back to a boil and boil vigorously until the sauce is reduced to a syrup, about 8-10 minutes. Keep an eye on the sauce, stirring it occasionally.\r\n\r\nTo serve, slice the chicken breasts, cover with the teriyaki sauce and sprinkle sesame seeds on them. Serve with plain white rice.\r\n', 770, '2016-09-04', 1),
(28, 'Easy Coconut Shrimp Curry', '\r\n    1 Tbsp olive oil\r\n    1 cup finely chopped onion\r\n    1/2 teaspoon mild yellow curry powder\r\n    Pinch of ground cardamom or the seeds from 1 cardamom pod, crushed\r\n    1/2 teaspoon Kosher salt\r\n    1 cup canned coconut milk (use regular coconut milk NOT light)\r\n    1/4 cup water\r\n    1 pound raw, peeled, deveined shrimp (with or without tail)\r\n    Cilantro for garnish\r\n', 9, 'indian', 'main_course', 'If you haven''t already defrosted your shrimp, if using frozen, do that while you prepare the sauce. The shrimp will be thawed and ready to cook by the time the sauce is done.\r\n\r\n\r\n1 Heat olive oil in a medium sized sauté pan on medium heat. Add the chopped onion. Cook until translucent, about 5 minutes. Add the curry powder, cardamom, and salt. Cook for two more minutes.\r\n\r\n\r\n2 Add the coconut milk and water, simmer for 5 to 10 minutes.\r\n\r\n\r\n3 Add the shrimp to the curry sauce and spread out evenly in the pan. Simmer for 5 minutes, stirring occasionally, until the shrimp has turned from grey to pink and is just cooked through. Do not overcook or the shrimp will be rubbery.\r\n\r\nServe with cilantro for garnish. Serve with basmati rice or better yet, coconut basmati rice.\r\n', 680, '2016-08-07', 1),
(29, 'Tandoori Chicken', '•	3 Tbsp vegetable oil\r\n•	1 teaspoon ground coriander\r\n•	1 teaspoon ground cumin\r\n•	1 teaspoon ground turmeric\r\n•	1 teaspoon cayenne\r\n•	1 Tbsp garam masala\r\n•	1 Tbsp sweet (not hot) paprika\r\n•	1 cup plain yogurt\r\n•	2 Tbsp lemon juice\r\n•	4 minced garlic cloves\r\n•	2 Tbsp minced fresh ginger\r\n•	1 teaspoon salt\r\n•	4 whole chicken legs (drumsticks and thighs), or its equivalent, skinless, bone-in\r\n', 13, 'indian', 'main_course', '1 Heat the oil in a small pan over medium heat, then cook the coriander, cumin, turmeric, cayenne, garam masala and paprika, stirring often, until fragrant (approximately 2-3 minutes). Let cool completely.\r\n\r\n2 Whisk in the cooled spice-oil mixture into the yogurt, then mix in the lemon juice, garlic, salt and ginger.\r\n\r\n3 Cut deep slashes (to the bone) in 3-4 places on the leg/thigh pieces. Just make 2-3 cuts if you are using separate drumsticks and thighs. Coat the chicken in the marinade, cover and chill for at least an hour (preferably 6 hours), no more than 8 hours.\r\n\r\n4 Prepare your grill so that one side is quite hot over direct heat, the other side cooler, not over direct heat. If using charcoal, leave one side of the grill without coals, so you have a hot side and a cooler side. If you are using a gas grill, just turn on one-half of the burners. Use tongs to wipe the grill grates with a paper towel soaked in vegetable oil. Take the chicken out of the marinade and shake off the', 350, '2016-10-02', 1),
(30, 'Cucumber Lime Mint Agua Fresca', '    1 lb of cucumbers (about 2 good sized cucumbers), ends trimmed, but peel still on, coarsely chopped\r\n    1/2 cup lime juice from fresh limes (from about 1 pound of limes, or 5 to 10 limes, depending on how juicy they are)\r\n    1 1/4 cup packed (spearmint) mint leaves (about a large handful), woody stems removed\r\n    1/2 cup sugar\r\n    Approximately 1 1/4 cup of water\r\n', 5, 'mexican', 'drink', '1 Put ingredients in blender, add enough water to fill 3/4 of blender. Hold the lid on the blender and purée until smooth. Place a fine mesh sieve over a bowl and pour the purée through it, pressing against the sieve with a rubber spatula or the back of a spoon to extract as much liquid out as possible.\r\n\r\n\r\n2 Fill a large pitcher halfway with ice cubes. Add the juice. Serve with sprigs of mint and slices of lime.\r\n', 350, '2016-11-07', 1),
(31, 'Mango Lassi ', '•	1 cup plain yogurt \r\n•	1/2 cup milk \r\n•	1 cup chopped mango (peeled and stone removed)\r\n•	4 teaspoons sugar, to taste\r\n•	A dash of ground cardamom (optional\r\n', 5, 'indian', 'drink', 'Put mango, yogurt, milk, sugar and cardamom into a blender and blend for 2 minutes, then pour into individual glasses, and serve. Can sprinkle with a little cardamom.\r\n\r\nThe lassi can be kept refrigerated for up to 24 hours.\r\n', 150, '2016-12-24', 1),
(32, 'Faluda', 'aaaaaaaaaaaaaaaaa', 4, 'indian', 'dessert', 'baadadadadad', 200, '2016-11-22', 1),
(33, 'Pasta', '1 pound cleaned squid\r\n    1 egg yolk\r\n    1 cup ice cold sparkling water (the colder the better)\r\n    1/8 teaspoon baking soda\r\n    1 teaspoon salt\r\n    1/4 cup corn starch\r\n    3/4 cup rice or regular flour\r\n    Canola oil or peanut oil for frying (high smoke point vegetable oil\r\n', 12, 'american', 'main_course', '1 Slice the squid tubes into rings about 1/2-inch to 3/4-inch wide. Leave the tentacles whole.\r\n\r\n2 This recipe was designed for a deep-fryer, but you can also fill a large, heavy-bottomed pot (keep a lid nearby, for safety reasons) halfway with oil, about 3 inches deep. Heat the oil to 360-370°F.\r\n\r\n3 While the oil is heating, mix all the dry ingredients together well.\r\n\r\n4 Once the oil has reached 360°F, take the sparkling water out of the refrigerator and mix it with the egg yolk. Immediately mix it in with the dry ingredients. Mix quickly. Do not worry if there are clumps or lumps. Over-mixing may cause the batter to become chewy when cooked.\r\n5 Working in small batches at a time (about 8 pieces), dip the squid pieces in the batter. Pick them up one by one and gently put them in the hot oil. (Note if your fingers are coated with the batter, it will help protect them from splatter.) When the squid pieces are in the oil, use a chopstick or the handle of a wooden spoon to dislodge any', 1222, '2016-08-09', 1),
(34, 'lasagna', '1 pound cleaned squid\r\n    1 egg yolk\r\n    1 cup ice cold sparkling water (the colder the better)\r\n    1/8 teaspoon baking soda\r\n    1 teaspoon salt\r\n    1/4 cup corn starch\r\n    3/4 cup rice or regular flour\r\n    Canola oil or peanut oil for frying (high smoke point vegetable oil\r\n', 10, 'american', 'main_course', '1 Slice the squid tubes into rings about 1/2-inch to 3/4-inch wide. Leave the tentacles whole.\r\n\r\n2 This recipe was designed for a deep-fryer, but you can also fill a large, heavy-bottomed pot (keep a lid nearby, for safety reasons) halfway with oil, about 3 inches deep. Heat the oil to 360-370°F.\r\n\r\n3 While the oil is heating, mix all the dry ingredients together well.\r\n\r\n4 Once the oil has reached 360°F, take the sparkling water out of the refrigerator and mix it with the egg yolk. Immediately mix it in with the dry ingredients. Mix quickly. Do not worry if there are clumps or lumps. Over-mixing may cause the batter to become chewy when cooked.\r\n5 Working in small batches at a time (about 8 pieces), dip the squid pieces in the batter. Pick them up one by one and gently put them in the hot oil. (Note if your fingers are coated with the batter, it will help protect them from splatter.) When the squid pieces are in the oil, use a chopstick or the handle of a wooden spoon to dislodge any', 1400, '2016-11-02', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
