<?php
/*
FriendShip-Online-Windows-8-Style
---------------------------------------------------------
FriendShip Online Windows 8 Style for Student and School
Design for PHP and MYSQL
Programmer :: Kusumoto
Website :: http://kusumoto.co
This work is licensed under a Creative Commons Attribution-NonCommercial-NoDerivs 3.0 Unported License.
---------------------------------------------------------
*/

//include config file
include("config.inc.php");
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="target-densitydpi=device-dpi, width=device-width, initial-scale=1.0, maximum-scale=1">
    <meta name="description" content="FriendShip 6.3 V2">
    <meta name="author" content="Azerdar Kusumoto">
    <link href="css/modern.css" rel="stylesheet">
    <link href="css/modern-responsive.css" rel="stylesheet">
    <title><?php echo $config_title; ?></title>
    
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
<span class="first-name"><?php echo $config_firstname; ?></span>
<span class="last-name"><?php echo $config_lastname; ?></span>
</div>
<div class="avatar">
<img src="<?php echo $config_logo; ?>">
</div>
</a>
</div>
<h1>Start</h1>
</div>
</div>
<center><div class="page-region">
			<div class="page-region-content">
				
<?php
//connect to mysql server
mysql_connect($host,$user,$pass)or die("ไม่สามารถเชื่อมต่อฐานข้อมูลได้");
mysql_select_db($dbname);
mysql_query(" set NAMES utf8");

//query data in database
$sql = "SELECT * from friend_data";
$result1 = mysql_query( $sql);
$num_rows1 = mysql_num_rows( $result1);

//loop to query data in database
	$i=0;
		while ($i < $num_rows1) {
	$fetcharr1 = mysql_fetch_array($result1);
	$id = $fetcharr1['id'];
	$pic = $fetcharr1['pic'];

//show metro icon
 	echo "<div class=\"tile image outline-color-blue\">
					<div class=\"tile-content\">
						<a href=\"profile.php?id=$id\"><img alt=\"\" src=\"img/$pic.jpg\"></a>
					</div>
				</div>";
 	
		$i++;
	}
	//End php Script
		?>
			
				
			</div>
		</div></center>
		
		
</div>

<div class="nav-bar">
<div class="nav-bar-inner padding10">
<span class="element">
2012, FriendShip Version 2 © by
<a class="fg-color-white" href="mailto:admin@kusumoto.co">Kusumoto Computer</a>
</span>
</div>
</div>

</div>

</body>
</html>