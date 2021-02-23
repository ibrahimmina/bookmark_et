<?php
use Illuminate\Database\Seeder;
class BookTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Book::create([
            'goodreads_book_id' => 21981841 , 
            'title' => 'Corrupt (Devil\'s Night, #1)' , 
            'isbn' => '1518783872' , 
            'isbn13' => '9781518783876' , 
            'kindle_asin' => 'B0181ONKDU' , 
            'marketplace_id' => 'A1F83G8C2ARO7P' , 
            'country_code' => 'GB' , 
            'image_url' => 'https://images.gr-assets.com/books/1398947518m/21981841.jpg' , 
            'small_image_url' => 'https://images.gr-assets.com/books/1398947518s/21981841.jpg' , 
            'publication_year' => 2015 , 
            'publication_month' => 11 , 
            'publication_day' => 17 , 
            'publisher' => 'CreateSpace Independent Publishing Platform' , 
            'language_code' => 'en-CA' , 
            'is_ebook' => false , 
            'description' => '<b> Erika </b><br /><br />I was told that dreams were our heart’s desires. My nightmares, however, became my obsession. <br /><br />His name is Michael Crist. <br /><br />My boyfriend’s older brother is like that scary movie that you peek through your hand to watch. He is handsome, strong, and completely terrifying. The star of his college’s basketball team and now gone pro, he’s more concerned with the dirt on his shoe than me. <br /><br />But I noticed him.<br /><br />I saw him. I heard him. The things that he did, and the deeds that he hid…For years, I bit my nails, unable to look away. <br /><br />Now, I’ve graduated high school and moved on to college, but I haven’t stopped watching Michael. He’s bad, and the dirt I’ve seen isn’t content to stay in my head anymore. <br /><br />Because he’s finally noticed me. <br /><br /><b>Michael</b><br /><br />Her name is Erika Fane, but everyone calls her Rika.<br /><br />My brother’s girlfriend grew up hanging around my house and is always at our dinner table. She looks down when I enter a room and stills when I am close. I can always feel the fear rolling off of her, and while I haven’t had her body, I know that I have her mind. That’s all I really want anyway. <br /><br />Until my brother leaves for the military, and I find Rika alone at college. <br /><br />In my city. <br /><br />Unprotected. <br /><br />The opportunity is too good to be true as well as the timing. Because you see, three years ago she put a few of my high school friends in prison, and now they’re out. <br /><br />We’ve waited. We’ve been patient. And now every last one of her nightmares will come true. <br /><br /><br />***Corrupt can be read as a stand-alone. No cliffhanger.' , 
            'num_pages' => 460 , 
            'format' => 'Paperback'
        ]);
        App\Book::create([
            'goodreads_book_id' => 1238684 , 
            'title' => 'The Stonekeeper (Amulet, #1)' , 
            'isbn' => '0439846803' , 
            'isbn13' => '9780439846806' , 
            'kindle_asin' => 'B00FFF7Q98' , 
            'marketplace_id' => 'A1F83G8C2ARO7P' , 
            'country_code' => 'GB' , 
            'image_url' => 'https://images.gr-assets.com/books/1327866356m/1238684.jpg' , 
            'small_image_url' => 'https://images.gr-assets.com/books/1327866356s/1238684.jpg' , 
            'publication_year' => 2008 , 
            'publication_month' => 1 , 
            'publication_day' => 1 , 
            'publisher' => 'Graphix' , 
            'language_code' => 'eng' , 
            'is_ebook' => false , 
            'description' => 'Graphic novel star Kazu Kibuishi creates a world of terrible, man-eating demons, a mechanical rabbit, a giant robot---and two ordinary children on a life-or-death mission.<br /><br />After the tragic death of their father, Emily and Navin move with their mother to the home of her deceased great-grandfather, but the strange house proves to be dangerous. Before long, a sinister creature lures the kids\' mom through a door in the basement. Em and Navin, desperate not to lose her, follow her into an underground world inhabited by demons, robots, and talking animals.<br /><br />Eventually, they enlist the help of a small mechanical rabbit named Miskit. Together with Miskit, they face the most terrifying monster of all, and Em finally has the chance to save someone she loves.' , 
            'num_pages' => 192 , 
            'format' => 'Hardcover'
        ]);
        App\Book::create([
            'goodreads_book_id' => 19030845 , 
            'title' => 'Batman: The Dark Knight Returns #1' , 
            'asin' => 'B00C2ICFSS' , 
            'country_code' => 'GB' , 
            'image_url' => 'https://s.gr-assets.com/assets/nophoto/book/111x148-bcc042a9c91a29c1d680899eff700a03.png' , 
            'small_image_url' => 'https://s.gr-assets.com/assets/nophoto/book/50x75-a91bf249278a81aabab721ef782c4a74.png' , 
            'language_code' => 'eng' , 
            'is_ebook' => true , 
            'num_pages' => 50
        ]);
        App\Book::create([
            'goodreads_book_id' => 15790842 , 
            'title' => 'Life After Life' , 
            'isbn' => '0316176486' , 
            'isbn13' => '9780316176484' , 
            'kindle_asin' => 'B00AQIFNGM' , 
            'marketplace_id' => 'A1F83G8C2ARO7P' , 
            'country_code' => 'GB' , 
            'image_url' => 'https://images.gr-assets.com/books/1358173808m/15790842.jpg' , 
            'small_image_url' => 'https://images.gr-assets.com/books/1358173808s/15790842.jpg' , 
            'publication_year' => 2013 , 
            'publication_month' => 4 , 
            'publication_day' => 2 , 
            'publisher' => 'Reagan Arthur Books' , 
            'language_code' => 'eng' , 
            'is_ebook' => false , 
            'description' => 'What if you could live again and again, until you got it right? <br /><br />On a cold and snowy night in 1910, Ursula Todd is born to an English banker and his wife. She dies before she can draw her first breath. On that same cold and snowy night, Ursula Todd is born, lets out a lusty wail, and embarks upon a life that will be, to say the least, unusual. For as she grows, she also dies, repeatedly, in a variety of ways, while the young century marches on towards its second cataclysmic world war. <br /><br />Does Ursula\'s apparently infinite number of lives give her the power to save the world from its inevitable destiny? And if she can - will she? <br /><br />Darkly comic, startlingly poignant, and utterly original - this is Kate Atkinson at her absolute best.' , 
            'num_pages' => 531 , 
            'format' => 'Hardcover'
        ]);
        App\Book::create([
            'goodreads_book_id' => 18718848 , 
            'title' => 'Mosquitoland' , 
            'asin' => 'B00KWG9LO8' , 
            'kindle_asin' => 'B00N9AVD7M' , 
            'marketplace_id' => 'A1F83G8C2ARO7P' , 
            'country_code' => 'GB' , 
            'image_url' => 'https://images.gr-assets.com/books/1402661616m/18718848.jpg' , 
            'small_image_url' => 'https://images.gr-assets.com/books/1402661616s/18718848.jpg' , 
            'publication_year' => 2015 , 
            'publication_month' => 3 , 
            'publication_day' => 3 , 
            'publisher' => 'Viking Children\'s' , 
            'language_code' => 'eng' , 
            'is_ebook' => true , 
            'description' => '<i>I am a collection of oddities, a circus of neurons and electrons: my heart is the ringmaster, my soul is the trapeze artist, and the world is my audience. It sounds strange because it is, and it is, because I am strange.</i><br /><br />After the sudden collapse of her family, Mim Malone is dragged from her home in northern Ohio to the "wastelands" of Mississippi, where she lives in a medicated milieu with her dad and new stepmom. Before the dust has a chance to settle, she learns her mother is sick back in Cleveland.<br /><br />So she ditches her new life and hops aboard a northbound Greyhound bus to her real home and her real mother, meeting a quirky cast of fellow travelers along the way. But when her thousand-mile journey takes a few turns she could never see coming, Mim must confront her own demons, redefining her notions of love, loyalty, and what it means to be sane.<br /><br />Told in an unforgettable, kaleidoscopic voice, <i>Mosquitoland</i> is a modern American odyssey, as hilarious as it is heartbreaking.' , 
            'num_pages' => 336 , 
            'format' => 'Kindle Edition'
        ]);
        App\Book::create([
            'goodreads_book_id' => 13167847 , 
            'title' => 'Most Talkative: Stories from the Front Lines of Pop Culture' , 
            'isbn' => '0805095837' , 
            'isbn13' => '9780805095838' , 
            'kindle_asin' => 'B0071NPT4Q' , 
            'marketplace_id' => 'A1F83G8C2ARO7P' , 
            'country_code' => 'GB' , 
            'image_url' => 'https://images.gr-assets.com/books/1335383485m/13167847.jpg' , 
            'small_image_url' => 'https://images.gr-assets.com/books/1335383485s/13167847.jpg' , 
            'is_ebook' => false , 
            'description' => 'The man behind the Real Housewives writes about his lifelong love affair with pop culture that brought him from the suburbs of St. Louis to his own television showFrom a young age, Andy Cohen knew two things: He was gay, and he loved television. Now presiding over Bravo\'s reality-TV empire, he started out as an overly talkative pop-culture obsessive, devoted to Charlie\'s Angels and All My Childrenand to his mother, who received daily letters from him while he was at summer camp, usually reminding her to tape the soaps. In retrospect, it\'s hard to believe that everyone didn\'t know that Andy was gay; still, he remained in the closet until college. Finally out, he embarked on making a career out of his passion for television. The journey begins with Andy interviewing his all-time idol Susan Lucci for his college newspaper and ends with him in a job where he has a hand in creating today\'s celebrity icons. In the witty, no-holds-barred style of his show Watch What Happens: Live, Cohen tells tales of absurd network-news mishaps, hilarious encounters with the heroines of his youth, and the real stories behind the Real Housewives. Dishy, funny, and full of heart, Most Talkative provides a one-of-a-kind glimpse into the world of television, from a fan who grew up watching the screen and is now inside the TV, both making shows and hosting his own.'
        ]);
        App\Book::create([
            'goodreads_book_id' => 2364284 , 
            'title' => 'أولاد حارتنا' , 
            'isbn' => '9770915343' , 
            'isbn13' => '9789770915349' , 
            'country_code' => 'GB' , 
            'image_url' => 'https://s.gr-assets.com/assets/nophoto/book/111x148-bcc042a9c91a29c1d680899eff700a03.png' , 
            'small_image_url' => 'https://s.gr-assets.com/assets/nophoto/book/50x75-a91bf249278a81aabab721ef782c4a74.png' , 
            'publication_year' => 2006 , 
            'publication_month' => 5 , 
            'publication_day' => 1 , 
            'publisher' => 'دار الشروق' , 
            'language_code' => 'ara' , 
            'is_ebook' => false , 
            'description' => 'رواية<br /><br />يجلس الجبلاوي في بيته الكبير المحاط بالحدائق واﻷسوار العالية ومن حوله أحفاده الذين يتنازعون للحصول على وقفه، ويقوم الفتوات بابعاد هؤلاء عن جنته اﻷرضية، حيث استقرت ذريته خارج أسوار البيت الكبير، وبالرغم من فقرهم الا انهم لم يكفو عن الدعاء بأن ينزل الجبلاوي اليهم ويترك عزلته ويوزع تركته ويخلصهم من بطش الفتوات فيسود الخير على الجميع، ويظهر في كل جيل هذا المخلص والذي يتعلق به الناس وينتفضو معه ضد الفتوات، ولكن الجشع والجهل يرجعهم في اخر المطاف الى ما كانت عليه الاوضاع ويبقى الفقر والمعاناة مصيرهم الذي لا مفر منه.<br />يصف محفوظ في هذه الرواية الرائعة القهر وشوق الناس إلى الخلاص من أنفسهم، وكيف ان المبادئ يمكن أن تتغير بتأرجح النفوس البشرية، وكيف ان الاعمال الخيرة تقع تحت يد الفساد والمفسدين.<br />تعد هذه الرواية من أشهر روايات اﻷديب الراحل وأكثرها إشكالية وقد نوهت اﻷكاديمية السويدية بها عندما منحت نجيب محفوظ جائزة نوبل للآداب.' , 
            'num_pages' => 600 , 
            'format' => 'Paperback'
        ]);
        App\Book::create([
            'goodreads_book_id' => 5489684 , 
            'title' => 'Vampire Kisses: The Beginning (Vampire Kisses, #1-3)' , 
            'isbn' => '006177894X' , 
            'isbn13' => '9780061778940' , 
            'country_code' => 'GB' , 
            'image_url' => 'https://s.gr-assets.com/assets/nophoto/book/111x148-bcc042a9c91a29c1d680899eff700a03.png' , 
            'small_image_url' => 'https://s.gr-assets.com/assets/nophoto/book/50x75-a91bf249278a81aabab721ef782c4a74.png' , 
            'language_code' => 'en-US' , 
            'is_ebook' => false , 
            'num_pages' => 562
        ]);
        App\Book::create([
            'goodreads_book_id' => 16033842 , 
            'title' => 'La Vérité sur l\'affaire Harry Quebert' , 
            'isbn' => '2877068161' , 
            'isbn13' => '9782877068161' , 
            'kindle_asin' => 'B00LGVMAR8' , 
            'marketplace_id' => 'A1F83G8C2ARO7P' , 
            'country_code' => 'GB' , 
            'image_url' => 'https://images.gr-assets.com/books/1347987605m/16033842.jpg' , 
            'small_image_url' => 'https://images.gr-assets.com/books/1347987605s/16033842.jpg' , 
            'publication_year' => 2012 , 
            'publication_month' => 11 , 
            'publisher' => 'De Fallois / L\'Âge d\'Homme' , 
            'language_code' => 'fre' , 
            'is_ebook' => false , 
            'description' => 'À New York, au printemps 2008, alors que l’Amérique bruisse des prémices de l’élection présidentielle, Marcus Goldman, jeune écrivain à succès, est dans la tourmente : il est incapable d’écrire le nouveau roman qu’il doit remettre à son éditeur d’ici quelques mois. Le délai est près d’expirer quand soudain tout bascule pour lui : son ami et ancien professeur d’université, Harry Quebert, l’un des écrivains les plus respectés du pays, est rattrapé par son passé et se retrouve accusé d’avoir assassiné, en 1975, Nola Kellergan, une jeune fille de 15 ans, avec qui il aurait eu une liaison. Convaincu de l’innocence de Harry, Marcus abandonne tout pour se rendre dans le New Hampshire et mener son enquête. Il est rapidement dépassé par les événements : l’enquête s’enfonce et il fait l’objet de menaces. Pour innocenter Harry et sauver sa carrière d’écrivain, il doit absolument répondre à trois questions : Qui a tué Nola Kellergan? Que s’est-il passé dans le New Hampshire à l’été 1975? Et comment écrit-on un roman à succès?' , 
            'num_pages' => 672 , 
            'format' => 'Paperback'
        ]);
        App\Book::create([
            'goodreads_book_id' => 1176884 , 
            'title' => 'Body Movers (Body Movers, #1)' , 
            'isbn' => '0778324826' , 
            'isbn13' => '9780778324829' , 
            'kindle_asin' => 'B0068WNNX0' , 
            'marketplace_id' => 'A1F83G8C2ARO7P' , 
            'country_code' => 'GB' , 
            'image_url' => 'https://s.gr-assets.com/assets/nophoto/book/111x148-bcc042a9c91a29c1d680899eff700a03.png' , 
            'small_image_url' => 'https://s.gr-assets.com/assets/nophoto/book/50x75-a91bf249278a81aabab721ef782c4a74.png' , 
            'publication_year' => 2007 , 
            'publication_month' => 6 , 
            'publication_day' => 19 , 
            'publisher' => 'Mira' , 
            'language_code' => 'eng' , 
            'is_ebook' => false , 
            'description' => 'Carlotta Wren\'s life hasn\'t turned out as she\'d planned. She didn\'t plan for her parents to skip bail for a white-collar crime, leaving her to raise her brother. She didn\'t plan on having the silver spoon ripped from her mouth and forgoing college to work retail. She didn\'t plan on her blue-blood fiancé dumping her. And she didn\'t plan on still being single ten years later, working at Neiman Marcus, with no idea where her fugitive parents are.<br /><br />She\'s coping. Until…<br />…her lovable brother is arrested, and the hunky cop decides to reopen her parents\' case.<br />…her brother becomes a body mover for the morgue and his sexy boss gets Carlotta involved.<br />…her former fiancé\'s wife is murdered, fingering Carlotta.<br /><br />With three men in her life, Carlotta has added motivation to help bag a murderer to keep her own well-dressed body from being next on the list!' , 
            'num_pages' => 384 , 
            'format' => 'Paperback'
        ]);
        App\Book::create([
            'goodreads_book_id' => 13519844 , 
            'title' => 'Independence (Significance, #4)' , 
            'isbn' => '1480207217' , 
            'kindle_asin' => 'B00AOYORDI' , 
            'marketplace_id' => 'A1F83G8C2ARO7P' , 
            'country_code' => 'GB' , 
            'image_url' => 'https://images.gr-assets.com/books/1498698039m/13519844.jpg' , 
            'small_image_url' => 'https://images.gr-assets.com/books/1498698039s/13519844.jpg' , 
            'publication_year' => 2012 , 
            'publication_month' => 12 , 
            'publication_day' => 18 , 
            'publisher' => 'Kiss Me Publications, LLC' , 
            'language_code' => 'eng' , 
            'is_ebook' => false , 
            'description' => 'In the fourth and final installment, Maggie and Caleb must tie up all the loose ends of their lives and make a way to be together completely on their own. With everything that happened with Bish and Maggie\'s father, she\'s almost reluctant to move on and move out. And now she must figure out all of this...stuff...with Haddock. But of course, nothing can stay simple for the Jacobsons. Enemies who were thought to be dissolved have decided to not go down so easily. And old flames come calling for more than just Maggie. Caleb is torn between leading his family and personal wants. Maggie is torn between Caleb and being the leader of their people. But neither will let what they need most to be pushed to the wayside. They are determined to make it all work, design a plan toward destiny, and make everything right again for themselves and their family.<br /><br />And then there\'s a wedding...' , 
            'num_pages' => 233
        ]);
        App\Book::create([
            'goodreads_book_id' => 2617684 , 
            'title' => 'Winnie the Pooh and Tigger Too (Disney\'s Wonderful World of Reading)' , 
            'isbn' => '0717287564' , 
            'isbn13' => '9780717287567' , 
            'country_code' => 'GB' , 
            'image_url' => 'https://images.gr-assets.com/books/1329390079m/2617684.jpg' , 
            'small_image_url' => 'https://images.gr-assets.com/books/1329390079s/2617684.jpg' , 
            'publication_year' => 1996 , 
            'publication_month' => 1 , 
            'publication_day' => 1 , 
            'publisher' => 'Grolier' , 
            'language_code' => 'eng' , 
            'is_ebook' => false , 
            'description' => 'Rabbit plans to unbounce Tigger, but he discovers he likes a bouncy Tigger best.' , 
            'num_pages' => 40 , 
            'format' => 'Hardcover' , 
            'edition_information' => 'Disney'
        ]);
        App\Book::create([
            'goodreads_book_id' => 24950845 , 
            'title' => 'Tricky Twenty-Two (Stephanie Plum, #22)' , 
            'isbn' => '0345542967' , 
            'isbn13' => '9780345542960' , 
            'country_code' => 'GB' , 
            'image_url' => 'https://images.gr-assets.com/books/1431363154m/24950845.jpg' , 
            'small_image_url' => 'https://images.gr-assets.com/books/1431363154s/24950845.jpg' , 
            'publication_year' => 2015 , 
            'publication_month' => 11 , 
            'publication_day' => 17 , 
            'publisher' => 'Bantam' , 
            'language_code' => 'eng' , 
            'is_ebook' => false , 
            'description' => 'Something big is brewing in Trenton, N.J., and it could blow at any minute.<br /><br />Stephanie Plum might not be the world\'s greatest bounty hunter, but she knows when she\'s being played. Ken Globovic (aka Gobbles), hailed as the Supreme Exalted Zookeeper of the animal house known as Zeta fraternity, has been arrested for beating up the dean of students at Kiltman College. Gobbles has missed his court date and gone into hiding. People have seen him on campus, but no one will talk. Things just aren\'t adding up, and Stephanie can\'t shake the feeling that something funny is going on at the college - and it\'s not just Zeta fraternity pranks.<br /><br />As much as people love Gobbles, they hate Doug Linken. When Linken is gunned down in his backyard it\'s good riddance, and the list of possible murder suspects is long. The only people who care about finding Linken\'s killer are Trenton cop Joe Morelli, who has been assigned the case, security expert Ranger, who was hired to protect Linken, and Stephanie, who has her eye on a cash prize and hopefully has some tricks up her sleeve.' , 
            'num_pages' => 282 , 
            'format' => 'Hardcover'
        ]);
        App\Book::create([
            'goodreads_book_id' => 19549841 , 
            'title' => 'Seraphina (Seraphina, #1)' , 
            'country_code' => 'GB' , 
            'image_url' => 'https://images.gr-assets.com/books/1387577872m/19549841.jpg' , 
            'small_image_url' => 'https://images.gr-assets.com/books/1387577872s/19549841.jpg' , 
            'publication_year' => 2013 , 
            'publisher' => 'Random House Books for Young Readers' , 
            'language_code' => 'eng' , 
            'is_ebook' => false , 
            'description' => '<i>Librarian Note: Alternate cover edition for ISBN 9780375866562.</i><br /><br />In her <i>New York Times</i> bestselling and Morris Award-winning debut, Rachel Hartman introduces mathematical dragons in an alternative-medieval world to fantasy and science-fiction readers of all ages. <i>Eragon</i>-author Christopher Paolini calls them, "Some of the most interesting dragons I\'ve read in fantasy."<br /><br />Four decades of peace have done little to ease the mistrust between humans and dragons in the kingdom of Goredd. Folding themselves into human shape, dragons attend court as ambassadors, and lend their rational, mathematical minds to universities as scholars and teachers. As the treaty\'s anniversary draws near, however, tensions are high.<br /><br />Seraphina Dombegh has reason to fear both sides. An unusually gifted musician, she joins the court just as a member of the royal family is murdered—in suspiciously draconian fashion. Seraphina is drawn into the investigation, partnering with the captain of the Queen\'s Guard, the dangerously perceptive Prince Lucian Kiggs. While they begin to uncover hints of a sinister plot to destroy the peace, Seraphina struggles to protect her own secret, the secret behind her musical gift, one so terrible that its discovery could mean her very life.' , 
            'num_pages' => 499 , 
            'format' => 'Hardcover'
        ]);
        App\Book::create([
            'goodreads_book_id' => 17565845 , 
            'title' => 'Panic (Panic, #1)' , 
            'isbn' => '0062014552' , 
            'isbn13' => '9780062014559' , 
            'kindle_asin' => 'B00FAT9HMI' , 
            'marketplace_id' => 'A1F83G8C2ARO7P' , 
            'country_code' => 'GB' , 
            'image_url' => 'https://images.gr-assets.com/books/1374066076m/17565845.jpg' , 
            'small_image_url' => 'https://images.gr-assets.com/books/1374066076s/17565845.jpg' , 
            'publication_year' => 2014 , 
            'publication_month' => 3 , 
            'publication_day' => 4 , 
            'publisher' => 'HarperCollins' , 
            'language_code' => 'eng' , 
            'is_ebook' => false , 
            'description' => 'Panic began as so many things do in Carp, a dead-end town of 12,000 people in the middle of nowhere: because it was summer, and there was nothing else to do.<br /><br />Heather never thought she would compete in Panic, a legendary game played by graduating seniors, where the stakes are high and the payoff is even higher. She’d never thought of herself as fearless, the kind of person who would fight to stand out. But when she finds something, and someone, to fight for, she will discover that she is braver than she ever thought.<br /><br />Dodge has never been afraid of Panic. His secret will fuel him, and get him all the way through the game, he’s sure of it. But what he doesn\'t know is that he’s not the only one with a secret. Everyone has something to play for.<br /><br />For Heather and Dodge, the game will bring new alliances, unexpected revelations, and the possibility of first love for each of them—and the knowledge that sometimes the very things we fear are those we need the most.' , 
            'num_pages' => 408 , 
            'format' => 'Hardcover'
        ]);
        App\Book::create([
            'goodreads_book_id' => 20883847 , 
            'title' => 'The Autumn Republic (Powder Mage, #3)' , 
            'isbn' => '0316219126' , 
            'isbn13' => '9780316219129' , 
            'kindle_asin' => 'B00LTUC3BY' , 
            'marketplace_id' => 'A1F83G8C2ARO7P' , 
            'country_code' => 'GB' , 
            'image_url' => 'https://images.gr-assets.com/books/1393261950m/20883847.jpg' , 
            'small_image_url' => 'https://images.gr-assets.com/books/1393261950s/20883847.jpg' , 
            'publication_year' => 2015 , 
            'publication_month' => 2 , 
            'publication_day' => 10 , 
            'publisher' => 'Orbit' , 
            'language_code' => 'eng' , 
            'is_ebook' => false , 
            'description' => '<b>The capital has fallen...</b><br />Field Marshal Tamas returns to his beloved country to find that for the first time in history, the capital city of Adro lies in the hands of a foreign invader. His son is missing, his allies are indistinguishable from his foes, and reinforcements are several weeks away.<br /><br /><b>An army divided...</b><br />With the Kez still bearing down upon them and without clear leadership, the Adran army has turned against itself. Inspector Adamat is drawn into the very heart of this new mutiny with promises of finding his kidnapped son.<br /><br /><b>All hope rests with one...</b><br />And Taniel Two-shot, hunted by men he once thought his friends, must safeguard the only chance Adro has of getting through this war without being destroyed...<br /><br />THE AUTUMN REPUBLIC is the epic conclusion that began with <i>Promise of Blood</i> and <i>The Crimson Campaign</i>.' , 
            'num_pages' => 580 , 
            'format' => 'Hardcover'
        ]);
        App\Book::create([
            'goodreads_book_id' => 12070846 , 
            'title' => 'Mile 81' , 
            'isbn' => '1451665601' , 
            'isbn13' => '9781451665604' , 
            'country_code' => 'GB' , 
            'image_url' => 'https://images.gr-assets.com/books/1407138212m/12070846.jpg' , 
            'small_image_url' => 'https://images.gr-assets.com/books/1407138212s/12070846.jpg' , 
            'publication_year' => 2011 , 
            'publication_month' => 9 , 
            'publication_day' => 1 , 
            'publisher' => 'Scribner' , 
            'language_code' => 'eng' , 
            'is_ebook' => true , 
            'description' => 'At Mile 81 on the Maine Turnpike is a boarded up rest stop on a highway in Maine. It\'s a place where high school kids drink and get into the kind of trouble high school kids have always gotten into. It\'s the place where Pete Simmons goes when his older brother, who\'s supposed to be looking out for him, heads off to the gravel pit to play "paratroopers over the side." Pete, armed only with the magnifying glass he got for his tenth birthday, finds a discarded bottle of vodka in the boarded up burger shack and drinks enough to pass out. <p><br />Not much later, a mud-covered station wagon (which is strange because there hadn\'t been any rain in New England for over a week) veers into the Mile 81 rest area, ignoring the sign that says "closed, no services." The driver\'s door opens but nobody gets out. </p><p><br />Doug Clayton, an insurance man from Bangor, is driving his Prius to a conference in Portland. On the backseat are his briefcase and suitcase and in the passenger bucket is a King James Bible, what Doug calls "the ultimate insurance manual," but it isn\'t going to save Doug when he decides to be the Good Samaritan and help the guy in the broken down wagon. He pulls up behind it, puts on his four-ways, and then notices that the wagon has no plates. </p><p><br />Ten minutes later, Julianne Vernon, pulling a horse trailer, spots the Prius and the wagon, and pulls over. Julianne finds Doug Clayton\'s cracked cell phone near the wagon door  and gets too close herself. By the time Pete Simmons wakes up from his vodka nap, there are a half a dozen cars at the Mile 81 rest stop. Two kids  Rachel and Blake Lussier  and one horse named Deedee are the only living left. Unless you maybe count the wagon...</p>' , 
            'num_pages' => 54 , 
            'format' => 'ebook'
        ]);
        App\Book::create([
            'goodreads_book_id' => 27161845 , 
            'title' => 'Here\'s to Us' , 
            'isbn' => '0316375144' , 
            'isbn13' => '9780316375146' , 
            'country_code' => 'GB' , 
            'image_url' => 'https://images.gr-assets.com/books/1460900079m/27161845.jpg' , 
            'small_image_url' => 'https://images.gr-assets.com/books/1460900079s/27161845.jpg' , 
            'publication_year' => 2016 , 
            'publication_month' => 6 , 
            'publication_day' => 14 , 
            'publisher' => 'Little, Brown and Company' , 
            'language_code' => 'eng' , 
            'is_ebook' => false , 
            'description' => '<b>Three romantic rivals. One crowded house. Plenty of room for jealousy. </b><br /><br />Laurel Thorpe, Belinda Rowe, and Scarlett Oliver share only two things; a love for the man they all married, Deacon Thorpe--a celebrity chef with an insatiable appetite for life--and a passionate dislike of one another. All three are remarkable, spirited women, but they couldn\'t be more different. Laurel: Deacon\'s high school sweetheart and an effortlessly beautiful social worker; Belinda: a high-maintenance Hollywood diva; and Scarlett: a sexy southern belle floating by on her family money and her fabulous looks. They\'ve established a delicate understanding over the years--they avoid each other at all costs.<br /><br />But their fragile detente threatens to come crashing down after Deacon\'s tragic death on his favorite place on earth: a ramshackle Nantucket summer cottage. Deacon\'s final wish was for his makeshift family to assemble on his beloved Nantucket to say good-bye. Begrudgingly, Laurel, Belinda, and Scarlett gather on the island as once again, as in each of their marriages, they\'re left to pick up Deacon\'s mess. Now they\'re trapped in the crowded cottage where they all made their own memories--a house that they now share in more ways than one--along with the children they raised with Deacon, and his best friend. Laurel, Belinda, and Scarlett each had an unbreakable bond with Deacon--and they all have secrets to hide. <br /><br />Before the weekend is over, there are enough accusations, lies, tears, and drama to turn even the best of friends--let alone three women who married the same man--into adversaries. As his unlikely family says good-bye to the man who brought them together--for better or worse--will they be able to put aside their differences long enough to raise a glass in Deacon\'s honor?' , 
            'num_pages' => 410 , 
            'format' => 'Hardcover'
        ]);
        App\Book::create([
            'goodreads_book_id' => 31140847 , 
            'title' => 'Bossman' , 
            'asin' => 'B01IMFDR9A' , 
            'kindle_asin' => 'B01IMFDR9A' , 
            'marketplace_id' => 'A1F83G8C2ARO7P' , 
            'country_code' => 'GB' , 
            'image_url' => 'https://s.gr-assets.com/assets/nophoto/book/111x148-bcc042a9c91a29c1d680899eff700a03.png' , 
            'small_image_url' => 'https://s.gr-assets.com/assets/nophoto/book/50x75-a91bf249278a81aabab721ef782c4a74.png' , 
            'language_code' => 'eng' , 
            'is_ebook' => true , 
            'description' => '<div>
  <b>THE #1 <i><b>NEW YORK TIMES</b></i> BESTSELLER </b>
</div><div>
  <b></b>
</div><div></div> <br /> From <b>
  <i>New York Times </i>
</b>Bestseller, Vi Keeland, comes a sexy new <b>standalone</b> novel.<br /><br />The first time I met Chase Parker, I didn\'t exactly make a good impression.<br /><br />I was hiding in the bathroom hallway of a restaurant, leaving a message for my best friend to save me from my awful date.<br /><br />He overheard and told me I was a bitch, then proceeded to offer me some dating advice.<br /><br />So I told him to mind his own damn business―his own tall, gorgeous, full-of-himself damn business―and went back to my miserable date.<br /><br />When he walked by my table, he smirked, and I watched his arrogant, sexy ass walk back to his date.<br /><br />I couldn\'t help but sneak hidden glances at the condescending jerk on the other side of the room. Of course, he caught me on more than one occasion, and winked.<br /><br />When the gorgeous stranger and his equally hot date suddenly appeared at our table, I thought he was going to rat me out.<br /><br />But instead, he pretended we knew each other and joined us―telling elaborate, embarrassing stories about our fake childhood.<br /><br />My date suddenly went from boring to bizarrely exciting.<br /><br />When it was over and we parted ways, I thought about him more than I would ever admit, even though I knew I\'d never see him again.<br /><br />I mean, what were the chances I\'d run into him again in a city with eight million people?Then again...<br /><br />What were the chances a month later he\'d wind up being my new sexy boss?' , 
            'num_pages' => 319
        ]);
        App\Book::create([
            'goodreads_book_id' => 13324841 , 
            'title' => 'Son (The Giver, #4)' , 
            'isbn' => '0547887205' , 
            'isbn13' => '9780547887203' , 
            'kindle_asin' => 'B00KA123K4' , 
            'marketplace_id' => 'A1F83G8C2ARO7P' , 
            'country_code' => 'GB' , 
            'image_url' => 'https://images.gr-assets.com/books/1349952095m/13324841.jpg' , 
            'small_image_url' => 'https://images.gr-assets.com/books/1349952095s/13324841.jpg' , 
            'publication_year' => 2012 , 
            'publication_month' => 10 , 
            'publication_day' => 2 , 
            'publisher' => 'HMH Books for Young Readers' , 
            'language_code' => 'eng' , 
            'is_ebook' => false , 
            'description' => 'They called her Water Claire. When she washed up on their shore, no one knew that she came from a society where emotions and colors didn’t exist. That she had become a Vessel at age thirteen. That she had carried a Product at age fourteen. That it had been stolen from her body. Claire had a son. But what became of him she never knew. What was his name? Was he even alive? She was supposed to forget him, but that was impossible. Now Claire will stop at nothing to find her child, even if it means making an unimaginable sacrifice. <br /><br /><i>Son</i> thrusts readers once again into the chilling world of the Newbery Medal winning book, <i>The Giver</i>, as well as <i>Gathering Blue</i> and <i>Messenger</i> where a new hero emerges. In this thrilling series finale, the startling and long-awaited conclusion to Lois Lowry’s epic tale culminates in a final clash between good and evil.' , 
            'num_pages' => 393 , 
            'format' => 'Hardcover'
        ]);
        App\Book::create([
            'goodreads_book_id' => 17406847 , 
            'title' => 'Defy (Defy, #1)' , 
            'asin' => 'B00ED05G9S' , 
            'country_code' => 'GB' , 
            'image_url' => 'https://images.gr-assets.com/books/1371226819m/17406847.jpg' , 
            'small_image_url' => 'https://images.gr-assets.com/books/1371226819s/17406847.jpg' , 
            'publication_year' => 2014 , 
            'publication_month' => 1 , 
            'publication_day' => 7 , 
            'publisher' => 'Scholastic Press' , 
            'language_code' => 'eng' , 
            'is_ebook' => true , 
            'description' => 'Alexa Hollen is a fighter. Forced to disguise herself as a boy and serve in the king\'s army, Alex uses her quick wit and fierce sword-fighting skills to earn a spot on the elite prince\'s guard. But when a powerful sorcerer sneaks into the palace in the dead of night, even Alex, who is virtually unbeatable, can\'t prevent him from abducting her, her fellow guard and friend Rylan, and Prince Damian, taking them through the treacherous wilds of the jungle and deep into enemy territory.<br /><br />The longer Alex is held captive with both Rylan and the prince, the more she realizes that she is not the only one who has been keeping dangerous secrets. And suddenly, after her own secret is revealed, Alex finds herself confronted with two men vying for her heart: the safe and steady Rylan, who has always cared for her, and the dark, intriguing Damian. With hidden foes lurking around every corner, is Alex strong enough to save herself and the kingdom she\'s sworn to protect?' , 
            'num_pages' => 336 , 
            'format' => 'Kindle Edition'
        ]);
        App\Book::create([
            'goodreads_book_id' => 28686840 , 
            'title' => 'Holding Up the Universe' , 
            'isbn' => '0385755929' , 
            'isbn13' => '9780385755924' , 
            'country_code' => 'GB' , 
            'image_url' => 'https://images.gr-assets.com/books/1463377718m/28686840.jpg' , 
            'small_image_url' => 'https://images.gr-assets.com/books/1463377718s/28686840.jpg' , 
            'language_code' => 'eng' , 
            'is_ebook' => false , 
            'description' => 'Everyone thinks they know Libby Strout, the girl once dubbed “America’s Fattest Teen.” But no one’s taken the time to look past her weight to get to know who she really is. Following her mom’s death, she’s been picking up the pieces in the privacy of her home, dealing with her heartbroken father and her own grief. Now, Libby’s ready: for high school, for new friends, for love, and for <i>every possibility life has to offer. In that moment, I know the part I want to play here at MVB High. I want to be the girl who can do anything. </i><br /><br />Everyone thinks they know Jack Masselin, too. Yes, he’s got swagger, but he’s also mastered the impossible art of giving people what they want, of fitting in. What no one knows is that Jack has a newly acquired secret: he can’t recognize faces. Even his own brothers are strangers to him. He’s the guy who can re-engineer and rebuild anything, but he can’t understand what’s going on with the inner workings of his brain. So he tells himself to play it cool: <i>Be charming. Be hilarious. Don’t get too close to anyone.</i><br /><br />Until he meets Libby. When the two get tangled up in a cruel high school game—which lands them in group counseling and community service—Libby and Jack are both pissed, and then surprised. Because the more time they spend together, the less alone they feel. <i>Because sometimes when you meet someone, it changes the world, theirs and yours.</i>' , 
            'num_pages' => 391
        ]);
        App\Book::create([
            'goodreads_book_id' => 1335184 , 
            'title' => 'Peter Pan (A Little Golden Book)' , 
            'isbn' => '0307001040' , 
            'isbn13' => '9780307001047' , 
            'country_code' => 'GB' , 
            'image_url' => 'https://s.gr-assets.com/assets/nophoto/book/111x148-bcc042a9c91a29c1d680899eff700a03.png' , 
            'small_image_url' => 'https://s.gr-assets.com/assets/nophoto/book/50x75-a91bf249278a81aabab721ef782c4a74.png' , 
            'language_code' => 'eng' , 
            'is_ebook' => false
        ]);
        App\Book::create([
            'goodreads_book_id' => 25883848 , 
            'title' => 'The Hating Game' , 
            'country_code' => 'GB' , 
            'image_url' => 'https://images.gr-assets.com/books/1467138679m/25883848.jpg' , 
            'small_image_url' => 'https://images.gr-assets.com/books/1467138679s/25883848.jpg' , 
            'publication_year' => 2016 , 
            'publication_month' => 8 , 
            'publication_day' => 9 , 
            'publisher' => 'William Morrow' , 
            'language_code' => 'eng' , 
            'is_ebook' => true , 
            'description' => '<blockquote>
  <i>Nemesis (n.) <br />1) An opponent or rival whom a person cannot best or overcome;<br />2) A person’s undoing;<br />3) Joshua Templeman.</i>
</blockquote>Lucy Hutton and Joshua Templeman hate each other. Not dislike. Not begrudgingly tolerate. Hate. And they have no problem displaying their feelings through a series of ritualistic passive aggressive maneuvers as they sit across from each other, executive assistants to co-CEOs of a publishing company. Lucy can’t understand Joshua’s joyless, uptight, meticulous approach to his job. Joshua is clearly baffled by Lucy’s overly bright clothes, quirkiness, and Pollyanna attitude.<br /><br />Now up for the same promotion, their battle of wills has come to a head and Lucy refuses to back down when their latest game could cost her her dream job…But the tension between Lucy and Joshua has also reached its boiling point, and Lucy is discovering that maybe she doesn’t hate Joshua. And maybe, he doesn’t hate her either. Or maybe this is just another game.' , 
            'num_pages' => 384 , 
            'format' => 'ebook'
        ]);
        App\Book::create([
            'goodreads_book_id' => 2292384 , 
            'title' => 'Fearless Fourteen (Stephanie Plum, #14)' , 
            'isbn' => '0312349513' , 
            'isbn13' => '9780312349516' , 
            'kindle_asin' => 'B005OKTPAW' , 
            'marketplace_id' => 'A1F83G8C2ARO7P' , 
            'country_code' => 'GB' , 
            'image_url' => 'https://s.gr-assets.com/assets/nophoto/book/111x148-bcc042a9c91a29c1d680899eff700a03.png' , 
            'small_image_url' => 'https://s.gr-assets.com/assets/nophoto/book/50x75-a91bf249278a81aabab721ef782c4a74.png' , 
            'language_code' => 'en-US' , 
            'is_ebook' => false , 
            'description' => '<b>Personal vendettas, hidden treasure, and a monkey named Carl will send bounty hunter Stephanie Plum on her most explosive adventure yet.</b><br /><br /><b>The Crime: </b>Armed robbery to the tune of nine million dollars<br /><br />Dom Rizzi robbed a bank, stashed the money, and did the time. His family couldn\'t be more proud. He always was the smart one.<br /><br /><b>The Cousin: </b>Joe Morelli<br /><br />Joe Morelli, Dom Rizzi, and Dom\'s sister, Loretta, are cousins. Morelli is a cop, Rizzi robs banks, and Loretta is a single mother waiting tables at the firehouse. The all-American family.<br /><br /><b>The Complications: </b>Murder, kidnapping, destruction of personal property, and acid reflux<br /><br />Less than a week after Dom\'s release from prison, Joe Morelli has shadowy figures breaking into his house and dying in his basement. He\'s getting threatening messages, Loretta is kidnapped, and Dom is missing.<br /><br /><b>The Catastrophe: </b>Moonman<br /><br />Morelli hires Walter "Mooner" Dunphy, stoner and "inventor" turned crime fighter, to protect his house. Morelli can\'t afford a lot on a cop\'s salary, and Mooner will work for potatoes.<br /><br /><b>The Cupcake: </b>Stephanie Plum<br /><br />Stephanie and Morelli have a long-standing relationship that involves sex, affection, and driving each other nuts. She\'s a bond enforcement agent with more luck than talent, and she\'s involved in this bank-robbery-gone-bad disaster from day one.<br /><br /><b>The Crisis</b>: A favor for Ranger<br /><br />Security expert Carlos Manoso, street name Ranger, has a job for Stephanie that will involve night work. Morelli has his own ideas regarding Stephanie\'s evening activities.<br /><br /><b>The Conclusion: </b>Only the fearless should read <i>Fourteen</i>.<br /><br />Thrills, chills, and incontinence may result.' , 
            'num_pages' => 310 , 
            'edition_information' => '1st Edition'
        ]);
        App\Book::create([
            'goodreads_book_id' => 1541884 , 
            'title' => 'Personal Demon (Women of the Otherworld, #8)' , 
            'isbn' => '0553806610' , 
            'isbn13' => '9780553806618' , 
            'kindle_asin' => 'B002TXZQYG' , 
            'marketplace_id' => 'A1F83G8C2ARO7P' , 
            'country_code' => 'GB' , 
            'image_url' => 'https://s.gr-assets.com/assets/nophoto/book/111x148-bcc042a9c91a29c1d680899eff700a03.png' , 
            'small_image_url' => 'https://s.gr-assets.com/assets/nophoto/book/50x75-a91bf249278a81aabab721ef782c4a74.png' , 
            'language_code' => 'eng' , 
            'is_ebook' => false , 
            'description' => 'Tabloid reporter Hope Adams appears to live the life of an ordinary working girl. But in addition to possessing the beauty of a Bolly-wood princess, Hope has other unique traits. For she is a half demon- a human fathered by a demon. And she\'s inherited not only a gift for seeing the past but a hunter for chaos- along with a talent for finding it wherever she can. Naturally, when she\'s chosen by a very dangerous group for a very dangerous mission, she jumps at the chance...<br />The head of the powerful Cortez Cabal- a family that makes the mob look like amateurs- has a little problem in Miami: a gang of wealthy, bored offspring of supernaturals is getting out of hand, and Hope is needed to infiltrated. As spells, astral projections, and pheromones soar across South Beach, Hope weaves her way through its elite hot spots, posing as upscale eye candy and reading the auras of the clientele- and potential marks.' , 
            'num_pages' => 371
        ]);
        App\Book::create([
            'goodreads_book_id' => 17336849 , 
            'title' => 'Lost & Found (Lost & Found, #1)' , 
            'isbn' => '1484148037' , 
            'isbn13' => '9781484148037' , 
            'kindle_asin' => 'B00CODYP5C' , 
            'marketplace_id' => 'A1F83G8C2ARO7P' , 
            'country_code' => 'GB' , 
            'image_url' => 'https://images.gr-assets.com/books/1365394535m/17336849.jpg' , 
            'small_image_url' => 'https://images.gr-assets.com/books/1365394535s/17336849.jpg' , 
            'publication_year' => 2013 , 
            'publication_month' => 5 , 
            'publication_day' => 7 , 
            'publisher' => 'Smashwords Edition' , 
            'language_code' => 'eng' , 
            'is_ebook' => false , 
            'description' => 'There’s complicated. And there’s Rowen Sterling.<br /><br />After numbing pain for the past five years with boys, alcohol, and all-around apathy, she finds herself on a Greyhound bus to nowhere Montana the summer after she graduates high school. Her mom agreed to front the bill to Rowen’s dream art school only if Rowen proves she can work hard and stay out of trouble at Willow Springs Ranch. Cooking breakfast at the crack of dawn for a couple dozen ranch hands and mucking out horse stalls are the last things in the world Rowen wants to spend her summer doing.<br /><br />Until Jesse Walker saunters into her life wearing a pair of painted-on jeans, a cowboy hat, and a grin that makes something in her chest she’d thought was frozen go boom-boom. Jesse’s like no one else, and certainly nothing like her. He’s the bright and shiny to her dark and jaded.<br /><br />Rowen knows there’s no happily-ever-after for the golden boy and the rebel girl—happily-right-now is a stretch—so she tries to forget and ignore the boy who makes her feel things she’s not sure she’s ready to feel. But the more she pushes him away, the closer he seems to get. The more she convinces herself she doesn’t care, the harder she falls.<br /><br />When her dark secrets refuse to stay locked behind the walls she’s kept up for years, Rowen realizes it’s not just everyone else she needs to be honest with. It’s herself.' , 
            'num_pages' => 353 , 
            'format' => 'Paperback'
        ]);
        App\Book::create([
            'goodreads_book_id' => 2579284 , 
            'title' => 'Six Days of the Condor' , 
            'isbn' => '0393086925' , 
            'isbn13' => '9780393086928' , 
            'kindle_asin' => 'B00KFDWX98' , 
            'marketplace_id' => 'A1F83G8C2ARO7P' , 
            'country_code' => 'GB' , 
            'image_url' => 'https://images.gr-assets.com/books/1313011780m/2579284.jpg' , 
            'small_image_url' => 'https://images.gr-assets.com/books/1313011780s/2579284.jpg' , 
            'publication_year' => 1974 , 
            'publication_month' => 5 , 
            'publisher' => 'W. W. Norton & Company' , 
            'language_code' => 'eng' , 
            'is_ebook' => false , 
            'description' => 'Narrated by: Nick Sullivan<br /><br />When CIA operative Malcolm, code-named Condor, discovers his colleagues butchered in a blood-spattered office, he realizes that only an oversight by the assassins has saved his life. He contacts CIA headquarters for help, but when an attempted rendezvous goes wrong, it quickly becomes clear that no one can be trusted.<br /><br />Malcolm disappears into the streets of Washington, hoping to evade the killers long enough to unravel the conspiracy - but will that be enough to save his life?<br /><br />BONUS AUDIO: Includes an exclusive introduction written and read by author James Grady.' , 
            'num_pages' => 192 , 
            'format' => 'Hardcover'
        ]);
        App\Book::create([
            'goodreads_book_id' => 13163846 , 
            'title' => 'Darth Vader and Son' , 
            'isbn' => '145210655X' , 
            'isbn13' => '9781452106557' , 
            'kindle_asin' => 'B00V9G41KY' , 
            'marketplace_id' => 'A1F83G8C2ARO7P' , 
            'country_code' => 'GB' , 
            'image_url' => 'https://images.gr-assets.com/books/1392020416m/13163846.jpg' , 
            'small_image_url' => 'https://images.gr-assets.com/books/1392020416s/13163846.jpg' , 
            'language_code' => 'eng' , 
            'is_ebook' => false , 
            'description' => 'What if Darth Vader took an active role in raising his son? What if "Luke, I am your father" was just a stern admonishment from an annoyed dad? In this hilarious and sweet comic reimagining, Darth Vader is a dad like any other except with all the baggage of being the Dark Lord of the Sith. <br /><br />Celebrated artist Jeffrey Brown\'s delightful illustrations give classic <i>Star Wars</i> moments a fresh twist, presenting the trials and joys of parenting through the lens of a galaxy far, far away. Life lessons include lightsaber batting practice, using the Force to raid the cookie jar, Take Your Child to Work Day on the Death Star ("Er, he looks just like you, Lord Vader!"), and the special bond shared between any father and son.'
        ]);
        App\Book::create([
            'goodreads_book_id' => 13580846 , 
            'title' => 'My Life with the Walter Boys (My Life with the Walter Boys #1)' , 
            'asin' => 'B00HYGRVRI' , 
            'kindle_asin' => 'B00HYGRVRI' , 
            'marketplace_id' => 'A1F83G8C2ARO7P' , 
            'country_code' => 'GB' , 
            'image_url' => 'https://images.gr-assets.com/books/1486398662m/13580846.jpg' , 
            'small_image_url' => 'https://images.gr-assets.com/books/1486398662s/13580846.jpg' , 
            'publication_year' => 2014 , 
            'publication_month' => 3 , 
            'publication_day' => 1 , 
            'publisher' => 'Sourcebooks Fire' , 
            'language_code' => 'eng' , 
            'is_ebook' => true , 
            'description' => 'My Life with the Walter Boys centers on the prim, proper, and always perfect Jackie Howard. When her world is turned upside down by tragedy, Jackie must learn to cut loose and be part of a family again.<br /><br />Jackie does not like surprises. Chaos is the enemy! The best way to get her successful, busy parents to notice her is to be perfect. The perfect look, the perfect grades-the perfect daughter. And then...<br /><br />Surprise #1: Jackie\'s family dies in a freak car accident.<br /><br />Surprise #2: Jackie has to move cross-country to live with the Walters-her new guardians.<br /><br />Surprise #3: The Walters have twelve sons. (Well, eleven, but Parker acts like a boy anyway)<br /><br />Now Jackie must trade in her Type A personality and New York City apartment for a Colorado ranch and all the wild Walter boys who come with it. Jackie is surrounded by the enemy-loud, dirty, annoying boys who have no concept of personal space. Okay, several of the oldest guys are flat-out gorgeous. But still annoying. She\'s not stuck-up or boring-no matter what they say. But proving it is another matter. How can she fit in and move on when she needs to keep her parents\' memory alive by living up to the promise of perfect?' , 
            'num_pages' => 368 , 
            'format' => 'Kindle Edition'
        ]);
        App\Book::create([
            'goodreads_book_id' => 2230284 , 
            'title' => 'The Broken Window (Lincoln Rhyme, #8)' , 
            'isbn' => '1416549978' , 
            'isbn13' => '9781416549970' , 
            'kindle_asin' => 'B002S0KB18' , 
            'marketplace_id' => 'A1F83G8C2ARO7P' , 
            'country_code' => 'GB' , 
            'image_url' => 'https://s.gr-assets.com/assets/nophoto/book/111x148-bcc042a9c91a29c1d680899eff700a03.png' , 
            'small_image_url' => 'https://s.gr-assets.com/assets/nophoto/book/50x75-a91bf249278a81aabab721ef782c4a74.png' , 
            'publication_year' => 2008 , 
            'publication_month' => 6 , 
            'publication_day' => 10 , 
            'publisher' => 'Simon & Schuster' , 
            'language_code' => 'eng' , 
            'is_ebook' => false , 
            'description' => 'Bestselling master of suspense Jeffery Deaver is back with a brand-new Lincoln Rhyme thriller.Lincoln Rhyme and partner/paramour Amelia Sachs return to face a criminal whose ingenious staging of crimes is enabled by a terrifying access to information....<br /><br />When Lincoln\'s estranged cousin Arthur Rhyme is arrested on murder charges, the case is perfect -- too perfect. Forensic evidence from Arthur\'s home is found all over the scene of the crime, and it looks like the fate of Lincoln\'s relative is sealed.<br /><br />At the behest of Arthur\'s wife, Judy, Lincoln grudgingly agrees to investigate the case. Soon Lincoln and Amelia uncover a string of similar murders and rapes with perpetrators claiming innocence and ignorance -- despite ironclad evidence at the scenes of the crime. Rhyme\'s team realizes this "perfect" evidence may actually be the result of masterful identity theft and manipulation.<br /><br />An information service company -- the huge data miner Strategic Systems Datacorp -- seems to have all the answers but is reluctant to help the police. Still, Rhyme and Sachs and their assembled team begin uncovering a chilling pattern of vicious crimes and coverups, and their investigation points to one master criminal, whom they dub "522."<br /><br />When "522" learns the identities of the crime-fighting team, the hunters become the hunted. Full of Deaver\'s trademark plot twists, "The Broken Window" will put the partnership of Lincoln Rhyme and Amelia Sachs to the ultimate test.' , 
            'num_pages' => 414 , 
            'format' => 'Hardcover'
        ]);
        App\Book::create([
            'goodreads_book_id' => 13096848 , 
            'title' => 'Avatar: The Last Airbender (The Promise, #2)' , 
            'isbn' => '1595828753' , 
            'isbn13' => '9781595828750' , 
            'country_code' => 'GB' , 
            'image_url' => 'https://images.gr-assets.com/books/1335027722m/13096848.jpg' , 
            'small_image_url' => 'https://images.gr-assets.com/books/1335027722s/13096848.jpg' , 
            'publication_year' => 2012 , 
            'publication_month' => 5 , 
            'publication_day' => 30 , 
            'language_code' => 'eng' , 
            'is_ebook' => false , 
            'description' => '<b>The Avatar\'s greatest adventure continues!</b><br /><br />Aang and Katara work tirelessly to prevent a dispute between Fire Lord Zuko and Earth King Kuei that could plunge the world back into war! Meanwhile, Sokka helps Toph prepare her hapless first class of metalbending students to defend their school against a rival class of firebenders!' , 
            'num_pages' => 76
        ]);
        App\Book::create([
            'goodreads_book_id' => 3054684 , 
            'title' => 'Stargazer (Evernight, #2)' , 
            'isbn' => '0061284408' , 
            'isbn13' => '9780061284403' , 
            'kindle_asin' => 'B003LSSE10' , 
            'marketplace_id' => 'A1F83G8C2ARO7P' , 
            'country_code' => 'GB' , 
            'image_url' => 'https://images.gr-assets.com/books/1306376986m/3054684.jpg' , 
            'small_image_url' => 'https://images.gr-assets.com/books/1306376986s/3054684.jpg' , 
            'publication_year' => 2009 , 
            'publication_month' => 3 , 
            'publication_day' => 24 , 
            'publisher' => 'HarperTeen' , 
            'language_code' => 'eng' , 
            'is_ebook' => false , 
            'description' => '<i>
  <b>The vampire in me was closer to the surface...</b>
</i><br /><br />Evernight Academy: an exclusive boarding school for the most beautiful, dangerous students of all—vampires. Bianca, born to two vampires, has always been told her destiny is to become one of them.<br /><br />But Bianca fell in love with Lucas—a vampire hunter sworn to destroy her kind. They were torn apart when his true identity was revealed, forcing him to flee the school.<br /><br />Although they may be separated, Bianca and Lucas will not give each other up. She will risk anything for the chance to see him again, even if it means coming face-to-face with the vampire hunters of Black Cross—or deceiving the powerful vampires of Evernight. Bianca\'s secrets will force her to live a life of lies.<br /><br />Yet Bianca isn\'t the only one keeping secrets. When Evernight is attacked by an evil force that seems to target her, she discovers the truth she thought she knew is only the beginning....' , 
            'num_pages' => 329 , 
            'edition_information' => 'First Edition'
        ]);
        App\Book::create([
            'goodreads_book_id' => 13516846 , 
            'title' => 'Dodger' , 
            'isbn' => '0062009494' , 
            'isbn13' => '9780062009494' , 
            'kindle_asin' => 'B007C5AS26' , 
            'marketplace_id' => 'A1F83G8C2ARO7P' , 
            'country_code' => 'GB' , 
            'image_url' => 'https://images.gr-assets.com/books/1343828971m/13516846.jpg' , 
            'small_image_url' => 'https://images.gr-assets.com/books/1343828971s/13516846.jpg' , 
            'publication_year' => 2012 , 
            'publication_month' => 9 , 
            'publication_day' => 13 , 
            'publisher' => 'HarperCollins Publishers' , 
            'language_code' => 'eng' , 
            'is_ebook' => false , 
            'description' => '<b>A storm.</b> Rain-lashed city streets. A flash of lightning. A scruffy lad sees a girl leap desperately from a horse-drawn carriage in a vain attempt to escape her captors. Can the lad stand by and let her be caught again? Of course not, because he\'s...Dodger.<br /><br />Seventeen-year-old Dodger may be a street urchin, but he gleans a living from London\'s sewers, and he knows a jewel when he sees one. He\'s not about to let anything happen to the unknown girl--not even if her fate impacts some of the most powerful people in England.<br /><br />From Dodger\'s encounter with the mad barber Sweeney Todd to his meetings with the great writer Charles Dickens and the calculating politician Benjamin Disraeli, history and fantasy intertwine in a breathtaking account of adventure and mystery.<br /><br />Beloved and bestselling author Sir Terry Pratchett combines high comedy with deep wisdom in this tale of an unexpected coming-of-age and one remarkable boy\'s rise in a complex and fascinating world.' , 
            'num_pages' => 360 , 
            'format' => 'Hardcover' , 
            'edition_information' => 'First Edition'
        ]);
        App\Book::create([
            'goodreads_book_id' => 13323842 , 
            'title' => 'Predestined (Existence Trilogy, #2)' , 
            'asin' => 'B007Q3O7C6' , 
            'kindle_asin' => 'B007Q3O7C6' , 
            'marketplace_id' => 'A1F83G8C2ARO7P' , 
            'country_code' => 'GB' , 
            'image_url' => 'https://images.gr-assets.com/books/1327068385m/13323842.jpg' , 
            'small_image_url' => 'https://images.gr-assets.com/books/1327068385s/13323842.jpg' , 
            'publication_year' => 2012 , 
            'publication_month' => 3 , 
            'publication_day' => 29 , 
            'language_code' => 'en-GB' , 
            'is_ebook' => true , 
            'description' => 'You would think after helping save her boyfriend from an eternity in Hell that things would go back to normal. Well, as normal as life can be when you can see souls and your boyfriend is Death. But for Pagan Moore, things are just getting weirder. <br /><br />The high school quarterback and reigning heartthrob, Leif Montgomery, is missing. While the town is in a frenzy of worry, Pagan is a nervous wreck for other reasons. Apparently good ‘ol Leif isn’t your average teenage boy. He isn’t even human. According to Death, Leif doesn’t have a soul. The quarterback may have skipped town but he’s still showing up in Pagan’s dreams... uninvited. <br /><br />Dank has known from the beginning Leif wasn’t human. But he hadn’t worried about a simple soulless creature. Now, he realizes he made a grave mistake. Pagan’s soul has been marked since birth as a restitution, to a spirit so dark not even Death walks near it. Dank knows saving Pagan’s soul won’t be easy but Pagan is his. And he’s already proven he’ll defy Heaven to keep her. If Hell wants a piece of him too, then bring it on.' , 
            'num_pages' => 213 , 
            'format' => 'Kindle Edition'
        ]);
        App\Book::create([
            'goodreads_book_id' => 5056084 , 
            'title' => 'Wings (Wings, #1)' , 
            'isbn' => '0061668036' , 
            'isbn13' => '9780061668036' , 
            'kindle_asin' => 'B0036FOGMO' , 
            'marketplace_id' => 'A1F83G8C2ARO7P' , 
            'country_code' => 'GB' , 
            'image_url' => 'https://images.gr-assets.com/books/1327983077m/5056084.jpg' , 
            'small_image_url' => 'https://images.gr-assets.com/books/1327983077s/5056084.jpg' , 
            'publisher' => 'HarperTeen' , 
            'language_code' => 'en-US' , 
            'is_ebook' => false , 
            'description' => 'Laurel was mesmerized, staring at the pale things with wide eyes. They were terrifyingly beautiful - too beautiful for words.<br /><br />Laurel turned to the mirror again, her eyes on the hovering petals that floated beside her head. They looked almost like wings.<br /><br />In this extraordinary tale of magic and intrigue, romance and danger, everything you thought you knew about faeries will be changed forever.' , 
            'num_pages' => 290 , 
            'edition_information' => '1st Edition'
        ]);
        App\Book::create([
            'goodreads_book_id' => 2474084 , 
            'title' => 'The Work of Art in the Age of Its Technological Reproducibility, and Other Writings on Media' , 
            'isbn' => '0674024451' , 
            'isbn13' => '9780674024458' , 
            'country_code' => 'GB' , 
            'image_url' => 'https://s.gr-assets.com/assets/nophoto/book/111x148-bcc042a9c91a29c1d680899eff700a03.png' , 
            'small_image_url' => 'https://s.gr-assets.com/assets/nophoto/book/50x75-a91bf249278a81aabab721ef782c4a74.png' , 
            'publication_year' => 2008 , 
            'publication_month' => 6 , 
            'publication_day' => 3 , 
            'publisher' => 'Belknap Press' , 
            'language_code' => 'eng' , 
            'is_ebook' => false , 
            'description' => '<p> Benjamin’s famous \'Work of Art\' essay sets out his boldest thoughts--on media and on culture in general--in their most realized form, while retaining an edge that gets under the skin of everyone who reads it. In this essay the visual arts of the machine age morph into literature and theory and then back again to images, gestures, and thought.</p><p> This essay, however, is only the beginning of a vast collection of writings that the editors have assembled to demonstrate what was revolutionary about Benjamin\'s explorations on media. Long before Marshall McLuhan, Benjamin saw that the way a bullet rips into its victim is exactly the way a movie or pop song lodges in the soul. </p><p> This book contains the second, and most daring, of the four versions of the \'Work of Art\' essay the one that addresses the utopian developments of the modern media. The collection tracks Benjamin\'s observations on the media as they are revealed in essays on the production and reception of art; on film, radio, and photography; and on the modern transformations of literature and painting. The volume contains some of Benjamin\'s best-known work alongside fascinating, little-known essays--some appearing for the first time in English. In the context of his passionate engagement with questions of aesthetics, the scope of Benjamin\'s media theory can be fully appreciated. </p>' , 
            'num_pages' => 374 , 
            'format' => 'Paperback'
        ]);
        App\Book::create([
            'goodreads_book_id' => 17607848 , 
            'title' => 'Afterburn (Jax & Gia, #1)' , 
            'isbn' => '1459245954' , 
            'isbn13' => '9781459245952' , 
            'country_code' => 'GB' , 
            'image_url' => 'https://images.gr-assets.com/books/1369326801m/17607848.jpg' , 
            'small_image_url' => 'https://images.gr-assets.com/books/1369326801s/17607848.jpg' , 
            'publication_year' => 2013 , 
            'publication_month' => 8 , 
            'publication_day' => 15 , 
            'publisher' => 'Cosmo Red Hot Reads from Harlequin' , 
            'language_code' => 'eng' , 
            'is_ebook' => true , 
            'description' => '#1 <i>New York Times</i> bestselling author Sylvia Day, America’s premier author of provocative fiction, delivers the debut novel from <i>Cosmo</i> Red-Hot Reads from Harlequin.<br /><br />The realization that Jax still affected me so strongly was a jagged pill to swallow. He’d only been part of my life for five short weeks two years ago. But now he was back. Walking into a deal I’d worked hard to close. And God, he was magnificent. His eyes were a brown so dark they were nearly black. Thickly lashed, they were relentless in their intensity. Had I really thought they were soft and warm? There was nothing soft about Jackson Rutledge. He was a hard and jaded man, cut from a ruthless cloth.<br /><br />In that moment I understood how badly I wanted to unravel the mystery of Jax. Bad enough that I didn’t mind how much it was going to cost me...' , 
            'num_pages' => 99 , 
            'format' => 'ebook'
        ]);
    }
}
