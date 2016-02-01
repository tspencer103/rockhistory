<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="google-site-verification" content="GiVcE27wS3LnZ27he3SJ2mYnuI96-VZLbHKMLwZh5MA" />
    <meta name="msvalidate.01" content="6312968DE883EE72D5EB89104DAE1760" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="classification" content="Music History">
    <meta name="description" content="Searchable rock and roll music history. Select a date or search by artist or keyword.">
    <meta name="keywords" content="Beatles, Led Zeppelin, Pink Floyd, Aerosmith, Police, Cars, Elvis Presley, Carl Perkins, Guns n Roses, Ozzy Osbourne, Black Sabbath, Bob Seger, Fleetwood Mac, Eagles, Steve Winwood, Stevie Nicks, Traffic, Tom Petty, Little Feat, Grateful Dead, Doobie Brothers, Blue Oyster Cult, Steely Dan, Alan Parsons, Steven Tyler, Billy Joel, ZZ Top, Stevie Ray Vaughan, Bad Company, Dire Straits, Mark Knopfler, Boston, Thin Lizzy, Lynyrd Skynyrd, Kansas, AC/DC, Peter Gabriel, Genesis, Phil Collins, Scorpions, Foreigner, Billy Squire, Elton John, Chuck Berry, Supertramp, Motley Crue, Judas Priest, Pretenders, REOSpeedwagon, John Mellencamp, David Byrne, Talking Heads, Iron Maiden, Journey, Van Halen, Bruce Springsteen, Styx, Cheap Trick, Bob Dylan, Byrds, Allman Brothers, Sex Pistols">
    <meta http-equiv="Content-Language" content="english">
    <meta name="author" content="Tim Spencer">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.9.3/js/bootstrap-select.min.js"></script>
    <script src="/rockhistory/rockhistory.js"></script>

    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.9.3/css/bootstrap-select.min.css">
    <link rel="stylesheet" type="text/css" href="/rockhistory/rockhistory.css" />
    <title>Today in Rock History</title>

    <?php include_once( "/home/babewe5/public_html/googleanalyticstracking.php") ?>

</head>

<body>

    <?php include_once( "/home/babewe5/public_html/googletagmanager.php"); ?>


    <div class="content">
        <div id="header">
            <!--  <div class="inHeaderLeft"> -->
            <div class="form-group">
                <div class="col-xs-6">
                    <form id="reg-form" name="reg-form" method="post">
                        <select class="form-control" name="month" required id="mo" size="1">
                            <option value="" disabled selected>MM</option>
                            <?php /* build month selector */ $mo=1 ; while($mo <= 12 ) { echo '<option value= "' . $mo . '">' . date( "M", mktime(0, 0, 0, $mo+1, 0, 0)) . '</option>'; echo "\n"; $mo++; } ?>
                        </select>
                        <select class="form-control" name="day" required id="day" size="1">
                            <option value="" disabled selected>DD</option>
                            <?php /* build day selector */ $da=1 ; while($da <= 31) { echo '<option value= "' . $da . '">' . date( "j", mktime(0, 0, 0, 0, $da, 0)) . '</option>'; echo "\n"; $da++; } ?>

                        </select>
                        <button type="submit" class="btn btn-default">Go</button>
                    </form>
                </div>

                <div class="col-xs-6">
                    <span class="pull-right">
              <form id="search-form" name="search-form" method="post">
                <input type="text" class="form-control" name="search" value="Search..." id="search-field">
              </form>
             </span>
                </div>


                <div class="col-xs-12">
                    <h1 class="headerText">ROCK HISTORY</h1>
                </div>
                <!-- <div class="inHeaderRight">ROCK AND ROLL HISTORY</div> -->
            </div>

            <div id="content">

            <p>&nbsp;</p>
                <!-- display results -->
                <div id="history"></div> 

                <br />
                
                <div class="col-xs-8"></div>
                <div class="col-xs-4"><p><small>V2.0 Copyright &copy; <? echo date("Y"); ?> <a href="/about">Tim Spencer</a></p></div>

                <div class="clear"></div>
            </div>
        </div>
</body>
</html>
        