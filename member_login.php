<?php
require("config.inc.php");
$ref = $_REQUEST['ref'];
if (empty($ref)) {
		echo "Error!";
		exit;
		}
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
    <title><?php echo $config_title; ?> :: Member Login</title>
    
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

<div class="page">
	<div class="nav-bar">
		<div class="nav-bar-inner padding10">
			<span class="pull-menu"></span>
			<a href="/">
		<span class="element brand">
			FriendShip Online Windows 8 Style
			<small>2.0.0</small>
		</span>
		</a>
			<div class="divider"></div>
				<ul class="menu">
				<li>
				<a href="./">กลับหน้าแรก</a>
				</li>
			</div>
			</div>
	<div id="page-index" class="page">
		<div class="page-region">
			<div class="page-region-content">
			<div class="grid">
				<div class="row">
						<div class="bg-color-green text-center">
<form id="form1" name="form1" method="post" action="member_login2.php">
  <label>
  Password :: 
<input type="password" name="password" id="password" />
  </label>
  <input type="submit" name="button" id="button" value="Login" />
  <input name="ref" type="hidden" id="ref" value="<?php echo $ref; ?>" />
</form>
</div>
			
			</div>
		</div>
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
	</div>
</body>
</html>
