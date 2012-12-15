<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="target-densitydpi=device-dpi, width=device-width, initial-scale=1.0, maximum-scale=1">
    <meta name="description" content="FriendShip 6.3 V2">
    <meta name="author" content="Azerdar Kusumoto">
    <link href="css/modern.css" rel="stylesheet">
    <link href="css/modern-responsive.css" rel="stylesheet">
    <title>We are 6.3 :: Phatthalung School 2012</title>
    
    <link href="css/theme-dark.css" rel="stylesheet" type="text/css">
    <link href="js/google-code-prettify/prettify.css" rel="stylesheet" type="text/css">
     <script type="text/javascript" src="js/assets/jquery-1.8.2.min.js"></script>
    <script type="text/javascript" src="js/assets/jquery.mousewheel.min.js"></script>

    <script type="text/javascript" src="js/modern/dropdown.js"></script>
    <script type="text/javascript" src="js/modern/accordion.js"></script>
    <script type="text/javascript" src="js/modern/buttonset.js"></script>
    <script type="text/javascript" src="js/modern/carousel.js"></script>
    <script type="text/javascript" src="js/modern/input-control.js"></script>
    <script type="text/javascript" src="js/modern/pagecontrol.js"></script>
    <script type="text/javascript" src="js/modern/rating.js"></script>
    <script type="text/javascript" src="js/modern/slider.js"></script>
    <script type="text/javascript" src="js/modern/tile-slider.js"></script>
    <script type="text/javascript" src="js/modern/tile-drag.js"></script>

    <script type="text/javascript" src="js/assets/github.info.js"></script>
    <script type="text/javascript" src="js/assets/google-analytics.js"></script>
    <script type="text/javascript" src="js/google-code-prettify/prettify.js"></script>
    <script src="js/sharrre/jquery.sharrre-1.3.4.min.js"></script>
    
     <script>
        function Resize(){
            var tiles_area = 0;
            $(".tile-group").each(function(){
                tiles_area += $(this).outerWidth() + 80;

            });

            $(".tiles").css("width", 120 + tiles_area + 20);

            $(".page").css({
                height: $(document).height() - 20,
                width: $(document).width()
            });
        }

        function AddMouseWheel(){
            $("body").mousewheel(function(event, delta){
                var scroll_value = delta * 50;
                if (jQuery.browser.webkit) {
                    this.scrollLeft -= scroll_value;

                } else {
                    document.documentElement.scrollLeft -= scroll_value;
                }
                return false;
            });
        }

        $(function(){

            Resize();
            AddMouseWheel();

        })


    </script>
     <style>
        body {
            background: #1d1d1d;
        }
    </style>
    </head>
   
<body lass="modern-ui" onresize="Resize()">
<div class="page secondary fixed-header" style="height: 650px; width: 3512px;">
<div class="page-header ">
<div class="page-header-content">
<div class="user-login">
<a href="#">
<div class="name">
<span class="first-name">We are 6.3</span>
<span class="last-name">Phatthalung School 2012</span>
</div>
<div class="avatar">
<img src="https://fbcdn-sphotos-d-a.akamaihd.net/hphotos-ak-ash3/552740_257675467677468_631290761_n.jpg">
</div>
</a>
</div>
<h1>Start</h1>
</div>
</div>
<center><div class="page-region">
			<div class="page-region-content">
				
<?php
include("config.inc.php");
mysql_connect($host,$user,$pass)or die("ไม่สามารถเชื่อมต่อฐานข้อมูลได้");
mysql_select_db($dbname);
mysql_query(" set NAMES utf8");

$sql = "SELECT * from friend_data";
$dbquery = mysql_query($sql);
$num = mysql_num_rows($result);
	$i=0;
		while ($i < $num) {
	$fetcharr1 = mysql_fetch_array($dbquery);
	$id = $fetcharr1['id'];
	$pic = $fetcharr1['pic'];
	$name = $fetcharr1['name'];

 	echo "<div class=\"tile image outline-color-blue\">
					<div class=\"tile-content\">
						<a href=\"profile.php?id=$id\"><img alt=\"\" src=\"img\$pic.jpg\"></a>
					</div>
				</div>";
 	
		$i++;
	}
		?>
			<div class="tile image outline-color-blue">
					<div class="tile-content">
						<a href="profile.php?id=2"><img alt="" src="img/PIC_002.jpg"></a>
					</div>
				</div>
				<div class="tile image outline-color-blue">
					<div class="tile-content">
						<a href="profile.php?id=3"><img alt="" src="img/PIC_003.jpg"></a>
					</div>
				</div>
				<div class="tile image outline-color-blue">
					<div class="tile-content">
						<a href="profile.php?id=4"><img alt="" src="img/PIC_004.jpg"></a>
					</div>
				</div>
				<div class="tile image outline-color-blue">
					<div class="tile-content">
						<a href="profile.php?id=5"><img alt="" src="img/PIC_005.jpg"></a>
					</div>
				</div>
				<div class="tile image outline-color-blue">
					<div class="tile-content">
						<a href="profile.php?id=6"><img alt="" src="img/PIC_006.jpg"></a>
					</div>
				</div>
				<div class="tile image outline-color-blue">
					<div class="tile-content">
						<a href="profile.php?id=7"><img alt="" src="img/PIC_007.jpg"></a>
					</div>
				</div>
				<div class="tile image outline-color-blue">
					<div class="tile-content">
						<a href="profile.php?id=8"><img alt="" src="img/PIC_008.jpg"></a>
					</div>
				</div>
				<div class="tile image outline-color-blue">
					<div class="tile-content">
						<a href="profile.php?id=9"><img alt="" src="img/PIC_009.jpg"></a>
					</div>
				</div>
				<div class="tile image outline-color-blue">
					<div class="tile-content">
						<a href="profile.php?id=10"><img alt="" src="img/PIC_010.jpg"></a>
					</div>
				</div>
				<div class="tile image outline-color-blue">
					<div class="tile-content">
						<a href="profile.php?id=11"><img alt="" src="img/PIC_011.jpg"></a>
					</div>
				</div>
				<div class="tile image outline-color-blue">
					<div class="tile-content">
						<a href="profile.php?id=12"><img alt="" src="img/PIC_012.jpg"></a>
					</div>
				</div>
				<div class="tile image outline-color-blue">
					<div class="tile-content">
						<a href="profile.php?id=13"><img alt="" src="img/PIC_013.jpg"></a>
					</div>
				</div>
				<div class="tile image outline-color-blue">
					<div class="tile-content">
						<a href="profile.php?id=14"><img alt="" src="img/PIC_014.jpg"></a>
					</div>
				</div>
				<div class="tile image outline-color-blue">
					<div class="tile-content">
						<a href="profile.php?id=15"><img alt="" src="img/PIC_015.jpg"></a>
					</div>
				</div>
				<div class="tile image outline-color-blue">
					<div class="tile-content">
						<a href="profile.php?id=16"><img alt="" src="img/PIC_016.jpg"></a>
					</div>
				</div>
				<div class="tile image outline-color-blue">
					<div class="tile-content">
						<a href="profile.php?id=17"><img alt="" src="img/PIC_017.jpg"></a>
					</div>
				</div>
				<div class="tile image outline-color-blue">
					<div class="tile-content">
						<a href="profile.php?id=18"><img alt="" src="img/PIC_018.jpg"></a>
					</div>
				</div>
				<div class="tile image outline-color-blue">
					<div class="tile-content">
						<a href="profile.php?id=19"><img alt="" src="img/PIC_019.jpg"></a>
					</div>
				</div>
				<div class="tile image outline-color-blue">
					<div class="tile-content">
						<a href="profile.php?id=20"><img alt="" src="img/PIC_020.jpg"></a>
					</div>
				</div>
				<div class="tile image outline-color-blue">
					<div class="tile-content">
						<a href="profile.php?id=21"><img alt="" src="img/PIC_021.jpg"></a>
					</div>
				</div>
				<div class="tile image outline-color-blue">
					<div class="tile-content">
						<a href="profile.php?id=22"><img alt="" src="img/PIC_022.jpg"></a>
					</div>
				</div>
				<div class="tile image outline-color-blue">
					<div class="tile-content">
						<a href="profile.php?id=23"><img alt="" src="img/PIC_023.jpg"></a>
					</div>
				</div>
				<div class="tile image outline-color-blue">
					<div class="tile-content">
						<a href="profile.php?id=24"><img alt="" src="img/PIC_024.jpg"></a>
					</div>
				</div>
				<div class="tile image outline-color-blue">
					<div class="tile-content">
						<a href="profile.php?id=25"><img alt="" src="img/PIC_025.jpg"></a>
					</div>
				</div>
				<div class="tile image outline-color-blue">
					<div class="tile-content">
						<a href="profile.php?id=26"><img alt="" src="img/PIC_026.jpg"></a>
					</div>
				</div>
				<div class="tile image outline-color-blue">
					<div class="tile-content">
						<a href="profile.php?id=27"><img alt="" src="img/PIC_027.jpg"></a>
					</div>
				</div>
				<div class="tile image outline-color-blue">
					<div class="tile-content">
						<a href="profile.php?id=28"><img alt="" src="img/PIC_028.jpg"></a>
					</div>
				</div>
				<div class="tile image outline-color-blue">
					<div class="tile-content">
						<a href="profile.php?id=29"><img alt="" src="img/PIC_029.jpg"></a>
					</div>
				</div>
			<div class="tile image outline-color-blue">
					<div class="tile-content">
						<a href="profile.php?id=30"><img alt="" src="img/PIC_030.jpg"></a>
					</div>
				</div>
			<div class="tile image outline-color-blue">
					<div class="tile-content">
						<a href="profile.php?id=31"><img alt="" src="img/PIC_031.jpg"></a>
					</div>
				</div>
			<div class="tile image outline-color-blue">
					<div class="tile-content">
						<a href="profile.php?id=32"><img alt="" src="img/PIC_032.jpg"></a>
					</div>
				</div>
			<div class="tile image outline-color-blue">
					<div class="tile-content">
						<a href="profile.php?id=33"><img alt="" src="img/PIC_033.jpg"></a>
					</div>
				</div>
			<div class="tile image outline-color-blue">
					<div class="tile-content">
						<a href="profile.php?id=34"><img alt="" src="img/PIC_034.jpg"></a>
					</div>
				</div>
			<div class="tile image outline-color-blue">
					<div class="tile-content">
						<a href="profile.php?id=35"><img alt="" src="img/PIC_035.jpg"></a>
					</div>
				</div>
			<div class="tile image outline-color-blue">
					<div class="tile-content">
						<a href="profile.php?id=36"><img alt="" src="img/PIC_036.jpg"></a>
					</div>
				</div>
			<div class="tile image outline-color-blue">
					<div class="tile-content">
						<a href="profile.php?id=37"><img alt="" src="img/PIC_037.jpg"></a>
					</div>
				</div>
			<div class="tile image outline-color-blue">
					<div class="tile-content">
						<a href="profile.php?id=38"><img alt="" src="img/PIC_038.jpg"></a>
					</div>
				</div>
			<div class="tile image outline-color-blue">
					<div class="tile-content">
						<a href="profile.php?id=39"><img alt="" src="img/PIC_039.jpg"></a>
					</div>
				</div>
			<div class="tile image outline-color-blue">
					<div class="tile-content">
						<a href="profile.php?id=40"><img alt="" src="img/PIC_040.jpg"></a>
					</div>
				</div>
			<div class="tile image outline-color-blue">
					<div class="tile-content">
						<a href="profile.php?id=41"><img alt="" src="img/PIC_041.jpg"></a>
					</div>
				</div>
			<div class="tile image outline-color-blue">
					<div class="tile-content">
						<a href="profile.php?id=42"><img alt="" src="img/PIC_042.jpg"></a>
					</div>
				</div>
			<div class="tile image outline-color-blue">
					<div class="tile-content">
						<a href="profile.php?id=43"><img alt="" src="img/PIC_043.jpg"></a>
					</div>
				</div>
			<div class="tile image outline-color-blue">
					<div class="tile-content">
						<a href="profile.php?id=44"><img alt="" src="img/PIC_044.jpg"></a>
					</div>
				</div>
			
				
			</div>
		</div></center>
		
		
</div>
<div class="page">
<div class="nav-bar">
<div class="nav-bar-inner padding10">
<span class="element">
2012, FriendShip Version 2 © by
<a class="fg-color-white" href="mailto:admin@kusumoto.co">Kusumoto Computer</a>
</span>
</div>
</div>
</div>
</div>

</body>
</html>