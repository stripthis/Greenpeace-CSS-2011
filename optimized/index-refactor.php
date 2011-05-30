<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xmlns:og="http://opengraphprotocol.org/schema/" xmlns:fb="http://www.facebook.com/2008/fbml" lang="en" xml:lang="en">
<head>
    <title>Welcome | Greenpeace International</title>
    <base href="http://localhost/greenpeace/optimized/" /><!--
         __   _  __   __     __    ___   _____      __     __       __     _
       /'__`\/\`'__\/'__`\ /'__`\/' _ `\/\  __`\  /'__`\ /'__`\   /'__`\ /'__`\
      /\ \_\ \ \ \//\  __//\  __//\ \/\ \ \ \_\ \/\  __//\ \_\ \_/\ \__//\  __/
      \ \____ \ \_\\ \____\ \____\ \_\ \_\ \  __/\ \____\ \__/'\_\ \____\ \____\
       \/___L\ \/_/ \/____/\/____/\/_/\/_/\ \ \/  \/____/\/__/\/_/\/____/\/____/
         /\____/                           \ \_\
         \_/__/                             \/_/     ☮ & ♥ FTW!

   -->
    <meta name="copyright" content="Greenpeace (c) 1971-2011" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta http-equiv="Content-Style-Type" content="text/css" />
    <meta http-equiv="Content-Script-Type" content="text/javascript" />
    <meta name="content-language" content="en" />
    <meta name="robots" content="all" />
    <meta name="keywords" content="greenpeace,energy revolution,climate,nuke,forest,gmo,toxic,ocean,whales,peace&love" />
    <meta name="description" content="Greenpeace exists because this fragile Earth deserves a voice. It needs solutions. It needs change. It needs action. " /><!-- Facebook -->
    <meta property="og:type" content="website" />
    <meta property="og:site_name" content="Greenpeace International" />
    <meta property="fb:admins" content="7297163299" />
    <meta property="fb:app_id" content="206443473453" />
    <meta http-equiv="X-UA-Compatible" content="IE=8" /><!-- Shortcut Icon-->
    <link href="images/favicon.ico" type="image/x-icon" rel="icon" />
    <link href="images/favicon.ico" type="image/x-icon" rel="shortcut icon" /><!-- RSS Feeds -->
    <link rel="alternate" type="application/rss+xml" title="Greenpeace News RSS feed" href="http://feeds.feedburner.com/GreenpeaceNews" /><!-- SiteMap -->
    <link rel="start" href="/" title="home" />
    <link rel="search" href="/search/" title="search" />
    <link rel="help" href="/help" title="help" />
    <link rel="privacy" href="/privacy" title="privacy" />
    <link rel="copyright" href="/copyright" title="copyright" />
    <link rel="section" href="/donate/" title="donate" />
    <link rel="section" href="/campaigns/" title="campaigns" />
    <link rel="section" href="/multimedia/" title="Multimedia" />
    <link rel="section" href="/publication/" title="Publication" />
    <link rel="section" href="/contact/" title="contact" /><!-- Style Sheets -->
    <!-- 
    
    <link href="css/main.css" type="text/css" rel="stylesheet" media="screen" />
    <link href="css/home.css" type="text/css" rel="stylesheet" media="screen" />
    
    -->
    <link href="css/grid.css" type="text/css" rel="stylesheet" media="screen" />
    <link href="css/type.css" type="text/css" rel="stylesheet" media="screen" />
    <link href="css/theme.css" type="text/css" rel="stylesheet" media="screen" />
    <!--[if lte IE 8]><link href="css/ie8.css" type="text/css" rel="stylesheet" media="screen"/><![endif]-->
    <!--[if lte IE 7]><link href="css/ie7.css" type="text/css" rel="stylesheet" media="screen"/><![endif]-->
    <!--[if lte IE 6]><link href="css/ie6.css" type="text/css" rel="stylesheet" media="screen"/><![endif]-->
    <link href="css/print.css" type="text/css" rel="stylesheet" media="print" /><!-- Javascript -->

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js" type="text/javascript">
</script>
    <script src="js/main.js" type="text/javascript">
</script>
    <script src="js/home.js" type="text/javascript">
</script>
	<script src="js/debugger.js" type="text/javascript">
	</script>

</head>

<body>
	<div id="debugger">
		<input id="dir_switch" type="button" value="LTR"/>		
	</div>

    <div id="container" class="ltr home">
        <!-- Topmost bar of header -->

        <div id="header-first" class="header-holder first line">
            <div class="header-inner first full-width line">
                <div class="logo unit">
                    <a href="#" title="Greenpeace"><span class="screenreader">Greenpeace</span></a>
                </div>

                <div class="select-website form unit line">
                    <select id="select-website">
                        <?php
                        // Little PHP cheat here to print out the websites...
                        include 'php_partials/websites.php';
                        foreach ($websites as $key => $value): ?>
                        <option class="website" value="<?php echo $key; ?>"><?php echo $value; ?></option>
                        <?php   endforeach; ?>
                    </select> 
                    <input type="submit" value="go" />
                </div><!-- / .select-website -->

                <div class="top-actions unit">
                    <!-- Shortcuts at top of page such as press -->

                    <ul class="top-actions-nav nav line invert-h-list">
                        <li class="first"><a href="#">Press</a></li>

                        <li><a href="#">Publications</a></li>
                    </ul><!-- Search form -->

                    <div id="header_search" class="search-box form line">
                        <input id="header_search_field" class="input text searchfield" type="text" value="search" /> <input id="header_search_submit" type="submit" class="submit" value="search" />
                    </div>
                </div><!-- /.top-actions -->
            </div><!-- / .header.first -->
        </div><!-- / .header-holder.first -->
        <!-- second bar of header -->

        <div id="header-last" class="header-holder last line">
            <div class="header-inner last full-width">
                <!-- Main Navigation -->

                <div id="main-navigation" class="navigation-main">
                    <ul class="dropdown-nav h-list line">
                        <?php include 'php_partials/main_menu_links.php'?>
                    </ul>
                </div><!-- Register and Login -->

                <div class="navigation authentication">
                    <ul class="nav authenication h-list inv-unit">
                        <li class="login"><a href="#">Sign in</a></li>

                        <li class="register"><span>New here?</span> <a href="#">Sign up!</a></li>
                    </ul>
                </div>
            </div>
        </div><!-- Open Space -->

        <div id="openspace" class="openspace-holder line">
            <div class="openspace-inner line full-width">
                <div class="openspace-item pictureonly">
                    <a href="#"><img src="images/openspace/bigspace-newwarrior01.jpg" alt="a new warrior" /></a>
                </div>
            </div>
        </div><!-- Main Content -->

        <div id="main" class="main-holder line">
            <div class="main-inner line full-width">
                <div class="maincol-holder">
                    <div class="maincol-inner">
                        <!-- Recent activity widget -->

                        <div class="recent-activity paperbox widget line">
                            <h2 class="widget-title">Recent activity</h2>

                            <h3 class="widget-subtitle">All the latest</h3>

                            <ul class="activity">
                                <li class="unit size1of3 petition first"><span><strong>Ronald</strong> supports a global network of marine reserves. And now feels much better about it you wouldn't believe.</span> <a class="act big" href="#">Add your signature!</a></li>

                                <li class="unit size1of3 donate second"><span><strong>Margarett</strong> just donated INR 300.</span> <a class="act big" href="#">Also want to donate?</a></li>

                                <li class="unit size1of3 tell-a-friend last"><span><strong>Biloute</strong> just sent a "Get involved" message to a friend.</span> <a class="more big" href="#">Spread the word!</a></li>
                            </ul>
                        </div><!-- Victories widget -->

                        <div class="victories widget line">
                            <h2 class="widget-title">Success Story</h2>

                            <div class="m-item">
                                <!-- Markup here was invalid -->

                                <div class="m-item-media">
                                    <a href="#"><img src="http://www.greenpeace.org/international/ReSizes/SuccessStory/PageFiles/22385/vic-antarctica.jpg" /></a>
                                </div>

                                <div class="m-item-content">
                                    <h4><a href="#"><span class="overlay">WorldPark Antartica</span></a></h4>
                                </div>
                            </div>
                        </div><!-- Latest Updates widget -->

                        <div class="latest-updates widget line">
                            <h1 class="widget-title">Greenpeace latest updates</h1><!-- Content Type Switcher -->

                            <div class="navigation by-content-type with-tabs">
                                <ul class="tabs nav h-list line">
                                    <li class="all selected"><a href="#">All</a></li>

                                    <li class="news"><a href="#">News</a></li>

                                    <li class="photos"><a href="#">Photos</a></li>

                                    <li class="video"><a href="#">Videos</a></li>

                                    <li class="publication"><a href="#">Publications</a></li>
                                </ul>
                            </div><!-- Content Category Switcher -->

                            <div class="navigation by-category form line">
                                <select class="category-select inv-unit">
                                    <option selected="selected" value="all cateogory">
                                        all categories
                                    </option>

                                    <option value="About Us">
                                        About Us
                                    </option>

                                    <option value="Agriculture">
                                        Agriculture
                                    </option>

                                    <option value="Climate change">
                                        Climate change
                                    </option>

                                    <option value="Forests">
                                        Forests
                                    </option>

                                    <option value="Nuclear">
                                        Nuclear
                                    </option>

                                    <option value="Oceans">
                                        Oceans
                                    </option>

                                    <option value="Other issues">
                                        Other issues
                                    </option>

                                    <option value="Toxics">
                                        Toxics
                                    </option>
                                </select>
                            </div>

                            <div class="posts line">
                                <?php  // Output the following number of dummy posts
                                                        $max_posts = 9;
                                                        include 'php_partials/sample_posts.php';
                                                        while ($c <= $max_posts):
                                                            $article = $articles[$x];
                                                        // Loop up $max_posts number of giberish posts. ?><!-- Start post # <?php echo $c ?> -->

                                <div class="post article m-item">
                                    <div class="image-holder m-item-media">
                                        <a href="#" title="<?php echo $article['title']; ?>"><img src="<?php echo $article['image_url']; ?>" alt="<?php echo $article['title']; ?>" /></a>
                                    </div>

                                    <div class="post-content m-item-text">
                                        <h2 class="post-title"><a href="#" title="<?php echo $article['title']; ?>"><?php echo $article['title']; ?></a></h2>

                                        <div class="post-meta">
                                            <span class="content-type"><?php echo $article["content-type"]; ?></span> <span class="author">by <?php echo $article["author"]; ?></span><span class="pub-date"><?php echo $article["date"]; ?></span><span class="comments"><?php echo $article["comments"]; ?></span>
                                        </div>

                                        <div class="post-teaser">
                                            <?php echo $article["teaser-text"]; ?>
                                        </div>
                                    </div>
                                </div><!-- end post -->
                                <?php
                                                        // Increment counter ...
                                                        $c++;
                                                        $x++;
                                                        if ($x >= (count($articles))) { $x = 0; };
                                                        // End posts loop
                                                        endwhile;
                                                        ?>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="sidebar-holder">
                    <div class="sidebar-inner">
                        <!-- Newsletter sign up widget -->

                        <div class="form widget sign-up sidebar-box line">
                            <h3 class="widget-title">Sign Up for Action Alert</h3>

                            <fieldset>
                                <legend>Please enter your details bellow</legend>

                                <div class="input text required name">
                                    <label for="Name">Your name<span class="required">*</span></label> <input name="data[User][name]" class="required" maxlength="150" id="UserName" type="text" /> <span class="help tooltip">Please enter your full name, example: Mr. Splashy Pant</span>
                                </div>

                                <div class="input text required email">
                                    <label for="Name">Your email<span class="required">*</span></label> <input name="data[User][email]" class="required" maxlength="150" id="UserEmail" type="text" /> <span class="help tooltip">Please enter your email address, example: splashy.pant@greenpeace.org</span>
                                </div>

                                <div class="input select required county">
                                    <label for="Country">Select a country<span class="required">*</span></label> <select class="county-selector">
                                        <?php   // Loop over array of countries...
                                                                                include 'php_partials/countries.php';
                                                                                foreach ($countries as $iso => $long):
                                                                                ?>

                                        <option value="<?php echo $iso ?>">
                                            <?php echo $long ?>
                                        </option><?php
                                                                                    endforeach; ?>
                                    </select>
                                </div>

                                <div class="input submit button inv-unit">
                                    <input type="submit" value="Sign Up ›" />
                                </div>
                            </fieldset>
                        </div><!-- Latest Photos widget -->

                        <div class="widget latest-photos sidebar-box line">
                            <h3 class="widget-title">Latest photos</h3>

                            <ul class="photos widget-content">
                                <?php       include "php_partials/latest_photos.php";
                                                                foreach ($latest_photos as $photo):              ?>

                                <li class="photo unit"><a title="<?php echo $photo['title'] ?>" href="#"><img src="<?php echo $photo['src'] ?>" alt="<?php echo $photo['title'] ?>" /></a></li><?php       endforeach; ?>
                            </ul>
                        </div>

                        <div class="widget latest-actions sidebar-box line">
                            <h3 class="widget-title">Things you can do:</h3>

                            <ul class="act">
                                <?php
                                                                include "php_partials/footer-links.php";
                                                                foreach ($footer_links["Take Actions"] as $action): ?>

                                <li><a href="#"><?php echo $action ?></a></li><?php
                                                                    endforeach;
                                                                ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- False Footer Last Events -->

        <div id="footer-first" class="footer-holder first line">
            <div class="footer-first-inner footer highlight line full-width">
                <ul class="m-list">
                    <li class="m-item unit size1of3">
                        <div class="m-item-media">
                        	<img src="http://www.greenpeace.org/international/Global/international/artwork/other/2011/footer/unfriendcoal_btn.jpg" alt="Help get Facebook to unfriend coal" height="71" width="72" />
                        	</div>		

                        <div>
                            Help get Facebook to unfriend coal
                        </div>
                    </li>
                </ul>

                <ul class="m-list">
                    <li class="m-item unit size1of3">
                        <div class="m-item-media">
                        	<img src="http://www.greenpeace.org/africa/Templates/Planet3/Styles/images/temp/img4.gif" alt="Deep Green" height="71" width="72" />
                        </div>

                        <div class="m-item-text">
                            Monthly feature from Greepeace's unofficial historian, Rex Weyler
                        </div>
                    </li>
                </ul>

                <ul class="m-list">
                    <li class="m-item unit size1of3">
                        <div class="m-item-media">
                        	<img src="http://www.greenpeace.org/international/Templates/Planet3/Styles/images/temp/img2.gif" alt="Marine reserves" height="71" width="72" />
                        </div>

                        <div class="m-item-text">
                            <span contenteditable="inherit">Save whales &amp; sharks - Marine reserves now!</span>
                        </div>
                    </li>
                </ul>
            </div>
        </div><!-- False Footer Sitemaps & Facts -->

        <div id="footer-second" class="footer-holder second line">
            <div class="footer-first-inner footer sitemap full-width">
                <div class="links">
                    <dl class="what-we-do unit size 1of6">
                        <dt>What we do</dt><?php echo print_links_dd($footer_links["About us"]); ?>
                    </dl>

                    <dl class="multimedia unit size 1of6">
                        <dt>Multimedia</dt><?php echo print_links_dd($footer_links["Multimedia"]); ?>
                    </dl>

                    <dl class="sites-in-english unit size 1of6">
                        <dt>About us</dt><?php echo print_links_dd($footer_links["About us"]); ?>
                    </dl>

                    <div class="facts" unit="" size2of6="">
                        <dl class="organization unit size1of2">
                            <dt>Facts & Figures</dt>

                            <dd>Founded in 1971</dd>

                            <dd>Three ships in the oceans</dd>

                            <dd>Offices in 40 countries</dd>

                            <dd class="number-of-supporters">Millions of supporters world-wide</dd>

                            <dd><a href="#">Become a supporter too!</a></dd>
                        </dl>

                        <ul class="ships unit size1of2">
                            <li class="ship rainbow-warrior"><span class="name">Rainbow Warrior</span> <span class="class">sailing vessel,</span> <span class="active-since">active since 1989.</span></li>

                            <li class="ship artic-sunrise"><span class="name">Artic Sunrise</span> <span class="class">ice breaker,</span> <span class="active-since">active since 1997.</span></li>

                            <li class="ship esperanza"><span class="name">Esperanza</span> <span class="name-meaning">means "hope",</span> <span class="active-since">active since 2002.</span></li>
                        </ul>
                    </div>

                    <dl class="take-action unit size 1of6">
                        <dt>National and regional website in English</dt><?php echo print_links_dd($footer_links["National and regional wbsite in English"]); ?>
                    </dl>

                    <dl class="hot-this-month unit size 1of6">
                        <dt>Hot this month</dt><?php echo print_links_dd($footer_links["Hot this month"]); ?>
                    </dl>

                    <dl class="greenpeace-online social unit size 1of6">
                        <dt>Greenpeace Online</dt><?php echo print_links_dd($footer_links["Greenpeace Online"]); ?>
                    </dl>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
