<?php 

// Simple function to render an include
function render($name)
{
    include_once('views' . DIRECTORY_SEPARATOR . $name . '.php');
}   
?>

<html>
<head>
    <title>P3 HTML5</title>
    <link href="css/screen.css" rel="stylesheet" type="text/css">
    <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.16/themes/ui-lightness/jquery-ui.css" rel="stylesheet" type="text/css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js" type="text/javascript">
</script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.16/jquery-ui.min.js" type="text/javascript">
</script>
    <script src="js/debugger.js" type="text/javascript">
</script>
</head>

<body class="ltr nojs">
    <?php render('debugger') ?>

    <header id="site_header">
        <div class="site_header_top fw">
            <div class="site_header_top_inner container">
                <div class="site_identity unit size1of2">
                    <h1 class="site_title unit"><a class="gp_logo_large" href="#">Greenpeace</a></h1>

                    <fieldset>
                        <h2 class="site_nro">Fooistan</h2><label class="screader_only" for="site_switcher">Our other sites</label> <select name="site_switcher">
                            <option>
                                Fooistan
                            </option>

                            <option>
                                Federation of Bar
                            </option>

                            <option>
                                Baztar
                            </option>

                            <option>
                                Gooland
                            </option>
                        </select>
                    </fieldset>
                </div>

                <div class="col2 unit size1of2">
                    <nav class="site_quicklinks unit_inv">
                        <ul class="h_list_inv">
                            <li><a href="#">Press</a></li>

                            <li><a href="#">login</a></li>
                        </ul>
                    </nav>

                    <nav class="site_search unit_inv"><label class="screader_only" for="ctl00$txtSearch">Search this site</label> <input type="text" class="text" id="ctl00_txtSearch" placeholder="search" name="ctl00$txtSearch"> <input type="submit" class="btn-search" id="ctl00_btnSearchSubmit" value="Search" name="ctl00$btnSearchSubmit"></nav>
                </div>
            </div>
        </div>

        <nav class="site_nav fw">
            <div class="container"> 
<?php render('dropdown'); ?> 
            </div>
        </nav>
    </header>

    <div id="big_open_space" class="fw">
        <div class="container">
<?php render('slider'); ?> 
        </div>
    </div>

    <div id="site_main">
        <div class="site_main_inner container">
            <div class="content unit">
                <nav class="breadcrumb_trail">
                    <ul class="breadcrumbs h_list">
                        <li class="crumb"><a href="#">Home &gt;</a></li>

                        <li class="crumb"><a href="#">News &gt;</a></li>

                        <li class="crumb"><a href="#">Polar bear devours Greenpeace activists</a></li>
                    </ul>
                </nav>
<?php render('feed'); ?> 
            </div>

            <aside class="sidebar unit_inv"></aside>
        </div>
    </div>

    <footer id="site_footer">
        <div class="footer_actions fw">
            <div class="footer_actions_inner container"></div>
        </div>

        <div class="footer_large fw">
            <div class="footer_large_inner container">
                <div class="line">
                    <div class="unit size1of4">
                        <dl class="campaigns">
                            <dt>Vad vi jobbar med</dt>

                            <dd><a href="/sweden/se/vad-vi-jobbar-for/klimat/" title="Klimat">Klimat</a></dd>

                            <dd><a href="/sweden/se/vad-vi-jobbar-for/skog/" title="Skydda skogen">Skog</a></dd>

                            <dd><a href="/sweden/se/vad-vi-jobbar-for/hav/">Hav</a></dd>

                            <dd><a href="/sweden/se/vad-vi-jobbar-for/gmo/" title="Hållbart jordbruk utan genmodiferade organismer">Genmodifierade organismer</a></dd>

                            <dd><a href="/sweden/se/vad-vi-jobbar-for/miljogifter/" title="Eliminera farliga miljögifter">Miljögifter</a></dd>

                            <dd><a href="/sweden/se/vad-vi-jobbar-for/karnkraft/" title="Avveckla kärnkraften">Kärnkraft</a></dd>

                            <dd><a href="/sweden/se/vad-vi-jobbar-for/fred-och-nedrustning/">Fred och nedrustning</a></dd>
                        </dl>
                    </div>

                    <div class="unit size1of4 about">
                        <dl class="no_bullets">
                            <dt>Om Greenpeace</dt>

                            <dd><a href="/sweden/se/om-oss/Greenpeace-historia/">Historia</a></dd>

                            <dd><a href="/sweden/se/om-oss/Greenpeace-framgangar1/">Framgångar</a></dd>

                            <dd><a href="/sweden/se/om-oss/Varderingar-och-kannetecken/">Värderingar och kännetecken</a></dd>

                            <dd><a href="/sweden/se/om-oss/Arbetsmetoder/">Arbetsmetoder</a></dd>

                            <dd><a href="/sweden/se/om-oss/Arsrapport/">Årsrapport</a></dd>

                            <dd><a href="/sweden/se/om-oss/Greenpeace-struktur/">Struktur</a></dd>

                            <dd><a href="/sweden/se/om-oss/Vara-fartyg/">Fartyg</a></dd>

                            <dd><a href="/sweden/se/om-oss/Lediga-jobb/">Arbeta för Greenpeace</a></dd>
                        </dl>
                    </div>

                    <div class="unit size1of4 donate">
                        <dl class="no_bullets">
                            <dt>Bilder och video</dt>

                            <dd><a href="/sweden/se/bilder-och-video/foto/">Foto</a></dd>

                            <dd><a href="/sweden/se/bilder-och-video/video/">Videor</a></dd>
                        </dl>
                    </div>

                    <div class="unit size1of4 agera">
                        <dl class="no_bullets">
                            <dt>Saker DU kan göra</dt>

                            <dd><a href="/sweden/se/agera/bli-frivillig/">Bli aktiv</a></dd>

                            <dd><a href="/sweden/se/agera/Forelasningsforfragan/">Föreläsningsförfrågan</a></dd>
                        </dl>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer_small fw">
            <div class="footer_small_inner container">
                <div class="legal unit size1of2">
                    <p>&copy; <span class="gp_logo_small">Greepeace</span> 2010 | <a href="http://www.greenpeace.org/international/Templates/Planet3/Pages/DetailPage.aspx?id=18314&amp;epslanguage=en-GB" title="copyright policy">Copyright</a> <a href="/international/en/Help/privacy/">Privacy policy</a></p>
                </div>

                <div class="links unit size1of2"></div>
            </div>
        </div>
    </footer>
</body>
</html>
