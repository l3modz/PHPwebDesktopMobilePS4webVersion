<?php
//Source Code Detect:UNKNOWN, maybe stackoverflow
//Copyright [2025] [Parlindungan Isa Anshory Siregar]
//For Academic/Collage Computer Study Purpose
//edit copyright for GOODNESS, WISENESS as you want: edited by whitecat.

//edit, save, put at your Android car using AwebServer HTTP Apache PHP SQL
//edit condition if on file index.php make web desktop your family info/picture fhoto using Chrome that opening at android car.
//make your simple spotifi embed playlist by using Firefox on android cars.

//Licensed under the Apache License, Version 2.0 (the "License");
//you may not use this file except in compliance with the License.
//You may obtain a copy of the License at

//    http://www.apache.org/licenses/LICENSE-2.0

//Unless required by applicable law or agreed to in writing, software
//distributed under the License is distributed on an "AS IS" BASIS,
//WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
//See the License for the specific language governing permissions and
//limitations under the License.

function getBrowser() 
{ 
    $u_agent = $_SERVER['HTTP_USER_AGENT']; 
    $bname = 'Unknown';
    $platform = 'Unknown';
    $version= "";
  $ub="";

    if (preg_match('/linux/i', $u_agent)) {
        $platform = 'linux';
    }
    elseif (preg_match('/Macintosh|Mac OS X/i', $u_agent)) {
        $platform = 'Mac';
    }
    elseif (preg_match('/iOS/i', $u_agent)) {
        $platform = 'iOS';
    }
    elseif (preg_match('/windows|win32/i', $u_agent)) {
        $platform = 'windows';
    }
    elseif (preg_match('/android/i', $u_agent)) {
        $platform = 'android';
    }
    elseif (preg_match('/PlayStation/i', $u_agent)) {
        $platform = 'PlayStation';
    }
    elseif (preg_match('/Tesla/i', $u_agent)) {
        $platform = 'Tesla';
        //^_^ Tesla Cars
    }
    elseif (preg_match('/Lucid/i', $u_agent)) {
        $platform = 'Lucid';
        //^_^ Lucid Cars
    }
     elseif (preg_match('/Yotta/i', $u_agent)) {
        $platform = 'Yotta';
        //^_^ Toyota Cars
    
    }
    if(preg_match('/MSIE/i',$u_agent) && !preg_match('/Opera/i',$u_agent)) 
    { 
        $bname = 'Internet Explorer'; 
        $ub = "MSIE"; 
    } 
    elseif(preg_match('/Firefox/i',$u_agent)) 
    { 
        $bname = 'Mozilla Firefox'; 
        $ub = "Firefox"; 
    } 
    elseif(preg_match('/Chrome/i',$u_agent)) 
    { 
        $bname = 'Google Chrome'; 
        $ub = "Chrome"; 
    } 
    elseif(preg_match('/Safari/i',$u_agent)) 
    { 
        $bname = 'Apple Safari'; 
        $ub = "Safari"; 
    } 
    elseif(preg_match('/Opera/i',$u_agent)) 
    { 
        $bname = 'Opera'; 
        $ub = "Opera"; 
    } 
    elseif(preg_match('/Netscape/i',$u_agent)) 
    { 
        $bname = 'Netscape'; 
        $ub = "Netscape"; 
    } 
   
    $known = array('Version', $ub, 'other');
    $pattern = '#(?<browser>' . join('|', $known) .
    ')[/ ]+(?<version>[0-9.|a-zA-Z.]*)#';
    if (!preg_match_all($pattern, $u_agent, $matches)) {
     
    }
    
    $i = count($matches['browser']);
    if ($i != 1) {
       
        if (strripos($u_agent,"Version") < strripos($u_agent,$ub)){
            $version= $matches['version'][0];
        }
        else {
            $version= $matches['version'][1];
        }
    }
    else {
        $version= $matches['version'][0];
    }

    if ($version==null || $version=="") {$version="?";}
    
    return array(
        'userAgent' => $u_agent,
        'name'      => $bname,
        'version'   => $version,
        'platform'  => $platform,
        'pattern'    => $pattern
    );
} 



$ua=getBrowser();
//Source Code:UNKNOWN
$brow01 = $ua['name'];
$brows01 = "Google Chrome";
$brows02 = "Mozilla Firefox";
$brows03 = "Unknown";
$brows04 = "Safari";
$os01 = $ua['platform'];
$OS01 = "linux";
$OS02 = "windows";
$OS03 = "android";
$OS04 = "PlayStation";
$OS06 = "mac";
$OS05 = "iOS";
$OS07 = "Tesla";
$OS08 = "Lucid";
$OS09 = "Yotta";

//add proton and 46 manufacture from gtsport
//whether ip is from share internet
if (!empty($_SERVER['HTTP_CLIENT_IP']))   
  {
    $ip_address = $_SERVER['HTTP_CLIENT_IP'];
  }
//whether ip is from proxy
elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))  
  {
    $ip_address = $_SERVER['HTTP_X_FORWARDED_FOR'];
  }
//whether ip is from remote address
else
  {
    $ip_address = $_SERVER['REMOTE_ADDR'];
  }

//microsoft.com
$IP01="20.236.44.162";
//playstation.com
$IP02="52.9.75.205";
//show my ip
$IP03="110.232.86.x";
$IP043="103.16.79.x";
//
if (($brow01==$brows01 AND $os01==$OS01)  OR ($os01==$OS06))
{
echo "<! DOCTYPE html>";
echo '<html lang="en">';
echo '<head>
    <meta charset="utf-8">';
?>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-HDFYH5VFT0"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-HDFYH5VFT0');
    </script>
<?php
echo'
    <meta name="robots" content="index, follow">
    <meta name="keywords" content="Parlindungan Isa Ansshory Siregar, Parlindungan Isa Anshory, Parlindungan Isa">
    <meta name="google-site-verification" content="ItR-8ezlGHeB3pRTmsVoi8VvIXAgpFyRIKxlCC3H97c" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="Parlindungan Isa Anshory Siregar: A Lullaby Stories.. and a source code of prove.." />
        <meta name="author" content="Parlindungan Isa Anshory Siregar" />
        <title>pias</title>
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">
                <span class="d-block d-lg-none">pias</span>
                <span class="d-none d-lg-block"><img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="assets/img/Parlindungan_Isa_Anshory_Siregar_001.jpg" alt="" /></span>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#album01">Album 01</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#album02">Album 02</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#story">Story</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#gtsport">Gran Turismo</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#realracing3">Real Racing 3</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#mecharena">Mech Arena</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#marvel">MARVEL Future Fight</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="image/" target="_blank">Images</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#GoogleSearch">Google Search</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#getThisCode">Get This Code..</a></li>
                </ul>
            </div>
        </nav>
        <!-- Page Content-->
        <div class="container-fluid p-0">
            <!-- About-->
            <section class="resume-section" id="about">
                <div class="resume-section-content">
                    <h1 class="mb-0">
                        pias
                        
                    </h1>
                    <div>Parlindungan Isa Anshory Siregar<br />127.0.0.1 --- <a href="mailto:l3modz.microsoft@gmail.com">l3modz.microsoft@gmail.com</a>
                    </div>
                    <br />
                    <p class="lead mb-5">I am learn music, and consume it. Learn Apache, HTML, PHP, MySQL, all Linux Operating System also website, and i like it.<br />I played <a href="http://www.marvelfuturefight.com/" target="_blank">MARVEL Future Fight, <a href="https://www.gran-turismo.com/" target="_blank">Gran Turismo</a>, <a href="https://www.tekken.com" target="_blank">Tekken</a>, <a href="https://www.facebook.com/realracing" target="_blank">Real Racing 3</a>, <a href="https://www.facebook.com/MechArenaRobotShowdown" target="_blank">Mech Arena: Robot Showdown</a>, Android or <a href="https://plarium.com/en/game/mech-arena/" target="_blank">Plarium Store</a>.</p>
                    <div class="social-icons">
                        <a class="social-icon" href="https://www.facebook.com/parlindungan.isa.anshory.siregar" target="_blank"><i class="fab fa-facebook-f"></i></a>
						<a class="social-icon" href="https://www.youtube.com/channel/UCHQ917sfqv3rxhW8vg5QfYg" target="_blank"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </section>
            <hr class="m-0" />
            <!-- album01-->
            <section class="resume-section" id="album01">
                <div class="resume-section-content">
                    <h2 class="mb-5">Album 01</h2>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">Night Still Young</h3>
                            <iframe width="813" height="457" src="https://www.youtube.com/embed/ShjtUZ5uBSY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <p>2017 - 2020</p>
						</div>
                        </div>
                    <div class="d-flex flex-column flex-md-row justify-content-between">
                        
                    </div>
                </div>
            </section>
            <hr class="m-0" />
            <!-- album02-->
            <section class="resume-section" id="album02">
                <div class="resume-section-content">
                    <h2 class="mb-5">Journey</h2>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">Journey</h3>
                            <img width="813" height="457" src="image/Journey.jpg" title="GT7"><br />
                            still in progress, still in my mind, still in mumble, still in progress using Wireless Microphone Record... xeheheheheh, wish me luck.
                        <p>2020 - ';
                        ?>
                        <?php echo date("Y"); ?>
                        <?php
                        echo'
                        </p>
						</div>
                        </div>
                    <div class="d-flex flex-column flex-md-row justify-content-between">
                        
                    </div>
                </div>
            </section>
             <hr class="m-0" />
            <!-- Story -->
            <section class="resume-section" id="story">
                <div class="resume-section-content">
                    <h2 class="mb-5">Story</h2>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">A Lullaby Stories..</h3>                            
                            <div>Like hear instrumental music, Mozart, or Arabic Oud Instrumental. But ethnic instrumental I like hear and search it.</div>
                        <div class="flex-shrink-0"><span>2000 - '; ?><?php echo date("Y"); ?><?php
                        echo'</span></div>
                    </div>
                   
                </div>
            </section>
           <hr class="m-0" />
            <!-- gtsport -->
            <section class="resume-section" id="gtsport">
                <div class="resume-section-content">
                    <h2 class="mb-5">Gran Turismo</h2>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">Gran Turismo Sport</h3>
                            <img width="813" height="457" src="image/ps4/Gran%20Turismo®%207_20230325122242_25121981.jpg" title="GTSport">
                        <p>2021 - ';?><?php echo date("Y"); ?><?php echo'<br />The next project woman anime Decals,  Closed by Gran Turismo Sport Decals since 31 January 2024.</p>
						</div>
                        </div>
                    <div class="d-flex flex-column flex-md-row justify-content-between">
                    <!-- add new game line here -->
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">Gran Turismo 7</h3>
                            <img width="813" height="457" src="image/ps4/Gran%20Turismo®%207_20220924095715.jpg" title="GT7">
                        <p>2022 - 2024';?><?php echo'</p>
                        Dashboar clock syncrone with Network Time Protocol, is a networking protocol for clock synchronization between computer systems
						</div>
                        </div>
                    </div>
                   <!-- end of add new game line here -->
                   <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0"></h3>
                            <img width="813" height="457" src="image/ps4/Gran%20Turismo®%207_20220924095903.jpg" title="GT7">
                        <p>2022 - ';?><?php echo date("Y"); ?><?php echo'</p>
                        Porche 911 Turbo (930) 1981, red white decals not yet..
						</div>
                        </div>
                    </div>
                   <!-- end of add new game line here -->
                </div>
            </section>
            <hr class="m-0" />
            <!-- Real Racing 3 -->
           
            <!-- RealRacing3D -->
            <section class="resume-section" id="realracing3">
                <div class="resume-section-content">
                    <h2 class="mb-5">Real Racing 3</h2>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">Real Racing 3</h3>
                            <img width="813" height="351" src="image/Real_Racing_3D.jpg" title="Marvel">
                        <p>2014 - ';?><?php echo date("Y"); ?><?php echo'</p>
						</div>
                        </div>
                    <div class="d-flex flex-column flex-md-row justify-content-between">
                        
                    </div>
                </div>
            </section>
                        <div class="flex-shrink-0"><span>'; ?>

                        <?php
                        echo'</span></div>
                    </div>
             <hr class="m-0" />        
            <!-- mecharena -->
            <section class="resume-section" id="mecharena">
                <div class="resume-section-content">
                    <h2 class="mb-5">Mech Arena</h2>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">Mech Arena</h3>
                            <img width="813" height="351" src="image/MechArena.jpg" title="Mech Arena">
                        <p>2020 - ';?><?php echo date("Y"); ?><?php echo'</p>
						</div>
                        </div>
                    <div class="d-flex flex-column flex-md-row justify-content-between">
                        
                    </div>
                </div>
            </section>
                        <div class="flex-shrink-0"><span>'; ?>

                        <?php
                        echo'</span></div>
                    </div>        
                
            <hr class="m-0" />
            <!-- marvel -->
            <section class="resume-section" id="marvel">
                <div class="resume-section-content">
                    <h2 class="mb-5">MARVEL Future Fight</h2>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">MARVEL Future Fight</h3>
                            <img width="813" height="351" src="image/Marvel_Future_Fight.jpg" title="Marvel">
                        <p>2021 - ';?><?php echo '2022'; ?><?php echo'</p>
						</div>
                        </div>
                    <div class="d-flex flex-column flex-md-row justify-content-between">
                        
                    </div>
                </div>
            </section>
             <hr class="m-0" />
             <!-- GoogleSearch -->
            <section class="resume-section" id="GoogleSearch">
                <div class="resume-section-content">
                    <h2 class="mb-5">Google Search</h2>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0"></h3>
                            <form action="https://www.google.com/search" method="_GET" target="_blank">
                            <input type="text" name="q">
                            <button type="submit" value="Search">Search</button>
                            </form>
                        <p>2008 - ';?><?php echo date("Y"); ?><?php echo'</p>
						</div>
                        </div>
                    <div class="d-flex flex-column flex-md-row justify-content-between">
                        
                    </div>
                </div>
            </section>
                        <div class="flex-shrink-0"><span>'; ?>

                        <?php
                        echo'</span></div>
                    </div>        
                
            <hr class="m-0" />
            <!-- getThiscode-->
            <section class="resume-section" id="getThisCode">
                <div class="resume-section-content">
                    <h2 class="mb-5">Get This Code..</h2>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">Still..</h3>
                            This site base on PHP, pure PHP can see from Desktop, Android, Google Chrome, Firefox and PS4 from different version view but not yet have back end dashboard login.. you can edit it, it base on Apache License
                           Version 2.0, in my dream visi, it have a Dashboard login for add embed Youtube easyly..<br /><br />paypal : <a href="./detect/paypal-button.html" title="https://github.com/l3modz/PHPwebDesktopMobilePS4webVersion.html" target="_blank">@pias25</a>, $USD 2,543 [ two dollar, five four three sen ], for my coding spirit this code.. or buy my coffee as $USD 2,543 [ two dollar, five four three sen ], at paypal <a href="./detect/paypal-button.html" target="_blank" title="https://github.com/l3modz/PHPwebDesktopMobilePS4webVersion"> @pias25</a> ..<br /><br />Tested at Toyota Supra 2021, Tesla Ubuntu Video Audio System, using virtual/browser identifiers.. but my time was tiny time.<br /><br />
                        <p>2019 - ';
                        ?>
                        <?php echo date("Y"); ?>
                        <?php
                        echo'
                        </p>
						</div>
                        </div>
                    <div class="d-flex flex-column flex-md-row justify-content-between">
                        
                    </div>
                </div>
            </section>
        </div>
       
        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
	
	<br /><a href="http://pias251281.000webhostapp.com/" target="_blank">http://pias251281.000webhostapp.com/</a><br />';
echo '&copy; 2017 - '; 
echo date("Y");
echo "<br />pias</body></html>";
}
else
//detect ip
if (($IP01==$ip_address) OR ($IP02==$ip_address) OR ($IP03==$ip_address) OR ($IP043==$ip_address))
{
echo "<! DOCTYPE html>";
echo '<html lang="en">';
echo '<head>
<style>
table {
  border-collapse: collapse;
  border: 0px solid black;
} 
table.d {
  table-layout: fixed;
  width: 100%;  
}
.player01 {
  width: 525px;
}
div.b {
  font-size: large;
}
</style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=0.6">
    <meta name="Description" CONTENT="Author: Parlindungan Isa Anshory Siregar: A Lullaby Stories.. and a source code of prove..">';
?>
<!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-HDFYH5VFT0"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-FL25VFLMHN');
    </script>
<?php
echo'
    <meta name="robots" content="index, follow">
    <meta name="keywords" content="Parlindungan Isa Ansshory Siregar, Parlindungan Isa Anshory, Parlindungan Isa">
    <meta name="description" content="Parlindungan Isa Anshory Siregar: A Lullaby Stories.. and a source code of prove.." />
    <meta name="google-site-verification" content="ItR-8ezlGHeB3pRTmsVoi8VvIXAgpFyRIKxlCC3H97c" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
	<title>pias</title>
	</head>';
?>
<body><center>[ <a href="image/" target="_blank">image</a> ] [ <a href="https://www.youtube.com/channel/UCHQ917sfqv3rxhW8vg5QfYg" target="_blank">youtube</a> ]</center>
  <div class="player">
    <div class="details">
        <h3>A Lullaby Story..</h3><h3>Wellcome to root page ^_^ ^_^</h3>
     
<?php
echo '<br /><br /><hr /><font style="font-size:25px"><center>&copy; 2021 - ';
echo date("Y");
echo '<br />pias</font></center></body></html>';
}

else
if ( ($brow01==$brows02 AND $os01==$OS02) OR ($brow01==$brows01 AND $os01==$OS03) OR ($brow01==$brows02 AND $os01==$OS03) OR ($brow01==$brows01 AND $os01==$OS01) OR ($brow01==$brows04 AND $os01==$OS01) OR ($os01==$OS05) OR ($os01==$OS04) OR ($os01==$OS07) OR ($os01==$OS08) )
{
echo "<! DOCTYPE html>";
echo '<html lang="en">';
echo '<head>
<style>
table {
  border-collapse: collapse;
  border: 0px solid black;
} 
table.d {
  table-layout: fixed;
  width: 100%;  
}
.player01 {
  width: 525px;
}
div.b {
  font-size: large;
}
</style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=0.6">
    <meta name="Description" CONTENT="Author: Parlindungan Isa Anshory Siregar: A Lullaby Stories.. and a source code of prove..">';
?>
<!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-HDFYH5VFT0"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-HDFYH5VFT0');
    </script>
<?php
echo'
    <meta name="robots" content="index, follow">
    <meta name="keywords" content="Parlindungan Isa Ansshory Siregar, Parlindungan Isa Anshory, Parlindungan Isa">
    <meta name="description" content="Parlindungan Isa Anshory Siregar: A Lullaby Stories.. and a source code of prove.." />
    <meta name="google-site-verification" content="ItR-8ezlGHeB3pRTmsVoi8VvIXAgpFyRIKxlCC3H97c" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
	<title>pias</title>
	</head>';
?>
<body><center>[ <a href="image/" target="_blank">image</a> ] [ <a href="https://www.youtube.com/channel/UCHQ917sfqv3rxhW8vg5QfYg" target="_blank">youtube</a> ]</center>
  <div class="player">
    <div class="details">
        <h3>01. A Lullaby Story, 02. Journey..</h3>
      <div class="now-playing">PLAYING x OF y</div>
      <div class="track-art"></div>
      <div class="track-name">Track Name</div>
      <div class="track-artist">Track Artist</div>
    </div>
    <div class="buttons">
      <div class="prev-track" onclick="prevTrack()"><i class="fa fa-step-backward fa-2x"></i></div>
      <div class="playpause-track" onclick="playpauseTrack()"><i class="fa fa-play-circle fa-5x"></i></div>
      <div class="next-track" onclick="nextTrack()"><i class="fa fa-step-forward fa-2x"></i></div>
    </div>
    <div class="slider_container">
      <div class="current-time">00:00</div>
      <input type="range" min="1" max="100" value="0" class="seek_slider" onchange="seekTo()">
      <div class="total-duration">00:00</div>
    </div>
    <div class="slider_container">
      <i class="fa fa-volume-down"></i>
      <input type="range" min="1" max="100" value="99" class="volume_slider" onchange="setVolume()">
      <i class="fa fa-volume-up"></i>
    </div>
  </div>

  <!-- Load the main script for the music player -->
  <script src="main.js"></script>
<?php
echo '<br />

<iframe style="border-radius:12px" src="https://open.spotify.com/embed/playlist/0DkEkqFsoXzw1tiFq3PvJE?utm_source=generator" width="100%" height="352" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
<br /><hr /><font style="font-size:25px"><center>&copy; 2025 - ';
echo date("Y");
echo '<br />pias</font></center></body></html>';
}

else
{
echo"<?xml version=\"1.0\" encoding=\"UTF-8\"?>";
echo '<meta name="Description" CONTENT="Author: Parlindungan Isa Anshory Siregar: A Lullaby Stories.. and a source code of prove..">';
?>
<!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-HDFYH5VFT0"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-HDFYH5VFT0');
    </script>
<?php
echo'
    <meta name="robots" content="index, follow">';
    

echo "<! DOCTYPE html>";
echo '<html lang="en">';
echo '<head>
    <meta charset="utf-8">';
?>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-HDFYH5VFT0"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-HDFYH5VFT0');
    </script>
<?php
echo'
    <meta name="robots" content="index, follow">
    <meta name="keywords" content="Parlindungan Isa Ansshory Siregar, Parlindungan Isa Anshory, Parlindungan Isa">
    <meta name="google-site-verification" content="ItR-8ezlGHeB3pRTmsVoi8VvIXAgpFyRIKxlCC3H97c" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="Parlindungan Isa Anshory Siregar: A Lullaby Stories.. and a source code of prove.." />
        <meta name="author" content="Parlindungan Isa Anshory Siregar" />
        <title>pias</title>
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">
                <span class="d-block d-lg-none">pias</span>
                <span class="d-none d-lg-block"><img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="assets/img/Parlindungan_Isa_Anshory_Siregar_001.jpg" alt="" /></span>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#album01">Album 01</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#album02">Album 02</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#story">Story</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#gtsport">Gran Turismo</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#realracing3">Real Racing 3</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#mecharena">Mech Arena</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#marvel">MARVEL Future Fight</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="image/" target="_blank">Images</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#GoogleSearch">Google Search</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#getThisCode">Get This Code..</a></li>
                </ul>
            </div>
        </nav>
        <!-- Page Content-->
        <div class="container-fluid p-0">
            <!-- About-->
            <section class="resume-section" id="about">
                <div class="resume-section-content">
                    <h1 class="mb-0">
                        pias
                        
                    </h1>
                    <div>Parlindungan Isa Anshory Siregar<br />127.0.0.1 --- <a href="mailto:l3modz.microsoft@gmail.com">l3modz.microsoft@gmail.com</a>
                    </div>
                    <br />
                    <p class="lead mb-5">I am learn music, and consume it. Learn Apache, HTML, PHP, MySQL, all Linux Operating System also website, and i like it.<br />I played <a href="http://www.marvelfuturefight.com/" target="_blank">MARVEL Future Fight, <a href="https://www.gran-turismo.com/" target="_blank">Gran Turismo</a>, <a href="https://www.tekken.com" target="_blank">Tekken</a>, <a href="https://www.facebook.com/realracing" target="_blank">Real Racing 3</a>, <a href="https://www.facebook.com/MechArenaRobotShowdown" target="_blank">Mech Arena: Robot Showdown</a>, Android or <a href="https://plarium.com/en/game/mech-arena/" target="_blank">Plarium Store</a>.</p>
                    <div class="social-icons">
                        <a class="social-icon" href="https://www.facebook.com/parlindungan.isa.anshory.siregar" target="_blank"><i class="fab fa-facebook-f"></i></a>
						<a class="social-icon" href="https://www.youtube.com/channel/UCHQ917sfqv3rxhW8vg5QfYg" target="_blank"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </section>
            <hr class="m-0" />
            <!-- album01-->
            <section class="resume-section" id="album01">
                <div class="resume-section-content">
                    <h2 class="mb-5">Album 01</h2>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">Night Still Young</h3>
                            <iframe width="813" height="457" src="https://www.youtube.com/embed/ShjtUZ5uBSY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <p>2017 - 2020</p>
						</div>
                        </div>
                    <div class="d-flex flex-column flex-md-row justify-content-between">
                        
                    </div>
                </div>
            </section>
            <hr class="m-0" />
            <!-- album02-->
            <section class="resume-section" id="album02">
                <div class="resume-section-content">
                    <h2 class="mb-5">Journey</h2>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">Journey</h3>
                            <img width="813" height="457" src="image/Journey.jpg" title="GT7"><br />
                            still in progress, still in my mind, still in mumble.. wish me luck.
                        <p>2020 - ';
                        ?>
                        <?php echo '2023'; ?>
                        <?php
                        echo'
                        </p>
						</div>
                        </div>
                    <div class="d-flex flex-column flex-md-row justify-content-between">
                        
                    </div>
                </div>
            </section>
             <hr class="m-0" />
            <!-- Story -->
            <section class="resume-section" id="story">
                <div class="resume-section-content">
                    <h2 class="mb-5">Story</h2>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">A Lullaby Stories..</h3>                            
                            <div>Like hear instrumental music, Mozart, or Arabic Oud Instrumental. But ethnic instrumental I like hear and search it.</div>
                        <div class="flex-shrink-0"><span>2000 - '; ?><?php echo date("Y"); ?><?php
                        echo'</span></div>
                    </div>
                   
                </div>
            </section>
           <hr class="m-0" />
            <!-- gtsport -->
            <section class="resume-section" id="gtsport">
                <div class="resume-section-content">
                    <h2 class="mb-5">Gran Turismo</h2>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">Gran Turismo Sport</h3>
                            <img width="813" height="457" src="image/ps4/Gran%20Turismo®%207_20230325122242_249.jpg" title="GTSport">
                        <p>2021 - ';?><?php echo date("Y"); ?><?php echo'<br />The next project woman anime Decals.</p>
						</div>
                        </div>
                    <div class="d-flex flex-column flex-md-row justify-content-between">
                    <!-- add new game line here -->
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">Gran Turismo 7</h3>
                            <img width="813" height="457" src="image/ps4/Gran%20Turismo®%207_20220924095715.jpg" title="GT7">
                        <p>2022 - ';?><?php echo date("Y"); ?><?php echo'</p>
                        Dashboar clock syncrone with Network Time Protocol, is a networking protocol for clock synchronization between computer systems
						</div>
                        </div>
                    </div>
                   <!-- end of add new game line here -->
                   <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0"></h3>
                            <img width="813" height="457" src="image/ps4/Gran%20Turismo®%207_20220924095903.jpg" title="GT7">
                        <p>2022 - ';?><?php echo date("Y"); ?><?php echo'</p>
                        Porche 911 Turbo (930) 1981, red white decals not yet..
						</div>
                        </div>
                    </div>
                   <!-- end of add new game line here -->
                </div>
            </section>
            <hr class="m-0" />
            <!-- Real Racing 3 -->
           
            <!-- RealRacing3D -->
            <section class="resume-section" id="realracing3">
                <div class="resume-section-content">
                    <h2 class="mb-5">Real Racing 3</h2>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">Real Racing 3</h3>
                            <img width="813" height="351" src="image/Real_Racing_3D.jpg" title="Marvel">
                        <p>2014 - ';?><?php echo date("Y"); ?><?php echo'</p>
						</div>
                        </div>
                    <div class="d-flex flex-column flex-md-row justify-content-between">
                        
                    </div>
                </div>
            </section>
                        <div class="flex-shrink-0"><span>'; ?>

                        <?php
                        echo'</span></div>
                    </div>
             <hr class="m-0" />        
            <!-- mecharena -->
            <section class="resume-section" id="mecharena">
                <div class="resume-section-content">
                    <h2 class="mb-5">Mech Arena</h2>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">Mech Arena</h3>
                            <img width="813" height="351" src="image/MechArena.jpg" title="Mech Arena">
                        <p>2020 - ';?><?php echo date("Y"); ?><?php echo'</p>
						</div>
                        </div>
                    <div class="d-flex flex-column flex-md-row justify-content-between">
                        
                    </div>
                </div>
            </section>
                        <div class="flex-shrink-0"><span>'; ?>

                        <?php
                        echo'</span></div>
                    </div>        
                
            <hr class="m-0" />
            <!-- marvel -->
            <section class="resume-section" id="marvel">
                <div class="resume-section-content">
                    <h2 class="mb-5">MARVEL Future Fight</h2>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">MARVEL Future Fight</h3>
                            <img width="813" height="351" src="image/Marvel_Future_Fight.jpg" title="Marvel">
                        <p>2021 - ';?><?php echo '2022'; ?><?php echo'</p>
						</div>
                        </div>
                    <div class="d-flex flex-column flex-md-row justify-content-between">
                        
                    </div>
                </div>
            </section>
             <hr class="m-0" />
             <!-- GoogleSearch -->
            <section class="resume-section" id="GoogleSearch">
                <div class="resume-section-content">
                    <h2 class="mb-5">Google Search</h2>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0"></h3>
                            <form action="https://www.google.com/search" method="_GET" target="_blank">
                            <input type="text" name="q">
                            <button type="submit" value="Search">Search</button>
                            </form>
                        <p>2008 - ';?><?php echo date("Y"); ?><?php echo'</p>
						</div>
                        </div>
                    <div class="d-flex flex-column flex-md-row justify-content-between">
                        
                    </div>
                </div>
            </section>
                        <div class="flex-shrink-0"><span>'; ?>

                        <?php
                        echo'</span></div>
                    </div>        
                
            <hr class="m-0" />
            <!-- getThiscode-->
            <section class="resume-section" id="getThisCode">
                <div class="resume-section-content">
                    <h2 class="mb-5">Get This Code..</h2>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">Still..</h3>
                            This site base on PHP, pure PHP can see from Desktop, Android, Google Chrome, Firefox and PS4 from different version view but not yet have back end dashboard login.. you can edit it, it base on Apache License
                           Version 2.0, in my dream visi, it have a Dashboard login for add embed Youtube easyly..<br /><br />paypal : <a href="./detect/paypal-button.html" title="https://github.com/l3modz/PHPwebDesktopMobilePS4webVersion.html" target="_blank">@pias25</a>, $USD 4.325 [ 4 dollar, three two five cents ], for my coding spirit this code.. or buy my coffee as $USD 2,543 [ two dollar, five four three sen ], at paypal <a href="./detect/paypal-button.html" target="_blank" title="https://github.com/l3modz/PHPwebDesktopMobilePS4webVersion"> @pias25</a> ..<br /><br />Tested at Toyota Supra 2021, Tesla Ubuntu Video Audio System, using virtual/browser identifiers.. but my time was tiny time.<br /><br />
                        <br />2017 - ';
                        ?>
                        <?php echo date("Y"); ?>
                        <?php
                        echo'
                      
						</div>
                        </div>
                    <div class="d-flex flex-column flex-md-row justify-content-between">
                        
                    </div>
                </div>
            </section>
        </div>
       
        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
	
	<br /><a href="http://pias251281.000webhostapp.com/" target="_blank">http://pias251281.000webhostapp.com/</a><br />';
echo '&copy; 2017 - '; 
echo date("Y");
//i hate you lookin to those eyes

//secret that car I love
echo "</center></body></html>";
}
?>
