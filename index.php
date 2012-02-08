<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <title>Star in a Box</title>
    <meta http-equiv="X-UA-Compatible" content="chrome=IE8">
    <link rel="stylesheet" href="css/boilerplate.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="css/queryLoader.css" type="text/css">
    <link rel="stylesheet" href="css/smoothness/jquery-ui-1.8.6.custom.css" type="text/css">
    <link rel="stylesheet" href="css/ui.slider.extras.css" type="text/css">
    <!--[if lt IE 9]>
        <link rel="stylesheet" type="text/css" href="css/IE8.css" />
<![endif]-->
    <link rel="icon" type="image/ico" href="favicon.ico">
    <script type="text/javascript" 
   src="http://ajax.googleapis.com/ajax/libs/chrome-frame/1/CFInstall.min.js"></script>
    <script language="javascript" type="text/javascript" src="js/jquery-1.4.4.js"></script>
    <!--[if IE]><script language="javascript" type="text/javascript" src="js/excanvas.min.js"></script><![endif]-->
    <script language="javascript" type="text/javascript" src="js/jquery.canvas.js"></script>
    <script language="javascript" type="text/javascript" src="js/jquery.flot2.js"></script>
    <script language="javascript" type="text/javascript" src="js/jquery.flot.navigate.js"></script>
    <script language="javascript" type="text/javascript" src="js/jquery-ui-1.8.6.min.js"></script>
    <script language="javascript" type="text/javascript" src="js/selectToUISlider.jQuery.js"></script>
    <script language="javascript" type="text/javascript" src="js/raphael.js"></script>
    <script language="javascript" type="text/javascript" src="js/g.raphael-min.js"></script>
    <script language="javascript" type="text/javascript" src="js/g.pie.js"></script>
    <script language="javascript" type="text/javascript" src="js/queryLoader.js"></script>
    <script language="javascript" type="text/javascript" src="js/siab-ui.js"></script>
    <script language="javascript" type="text/javascript" src="js/siab.js"></script>
	<script type="text/javascript">

	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-2087713-2']);
	  _gaq.push(['_trackPageview']);

	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();

	</script>
</head>

<body>
		 <script>
   // You may want to place these lines inside an onload handler
   CFInstall.check({
     mode: "overlay",
     destination: "http://lcogt.net/siab/"
   });
  </script>
    <div id="loader" class=""></div>

    <div id="shadow"></div>

    <div id="vertical"></div>

    <div id="container">
    	<div id="menu"><a id="summary" href="#">Data table</a> | <a id="help" href="#help">Help</a> | <a id="about" href="#acknowldgments">Acknowledgments</a></div>
        <div id="box-lid">
        	<div id="welcome">
        	<div id="welcome-content">
        		<h1>Hello!</h1>
						<p>Explore the different stages in a star's life.</p>
						<p>You can see how it's brightness, size and mass compare to the current condition of the Sun. You can also animate it's evolution. </p>
						<p>All contained in this neat little box</p>
						</div>
												<div id="lid-open"><a href="#">&lsaquo; Open the Lid</a></div>

					</div>
        </div>

        <div id="inner-box">
            <div id="box-top"></div>

            <div id="box-sides"></div>

            <div id="box-left-lip"></div>

            <div id="box-bottom"></div>
        </div>

        <div id="content" class="closed">
            <div id="placeholder"></div>
						<div id="current-stage"></div>
            <div id="input">
                <div class="tab-top">
                    Starting Values
                </div>

                <div class="labels">
                    <p class="label">Mass:</p>

                    <p class="label">Stages:</p>
                </div>

                <div id="mass-slider"></div>

                <div id="stages">
                    <div id="stages">
                        <select class="stages" name="first-stage" id="first-stage">
                            </select> <select class="stages" name="last-stage" id="last-stage">
                            </select>
                    </div>
                </div>
            </div>

            <div id="animate">
                <div class="tab-bottom">
                    Animate
                </div><select id="evolve" name="evolve">
                    </select>

                <div id="evolveSpeedDiv">
                    Evolve Speed: <select id="evolveSpeed" name="evolve">
                        <option value="15">
                            Fast
                        </option>

                        <option value="30" selected="true">
                            Medium
                        </option>

                        <option value="60">
                            Slow
                        </option>
                    </select>
                </div><a href="" id="animateEvolve">Start</a> <a href="" id="animateEvolveReset">Reset</a>
            </div>

            <div id="nav">
                <a href="#" class="item 4 active" id="compare" title="Size Comparison"></a>

                <a href="#" class="item 3" id="pie" title="Stages in your star's life"></a>

                <a href="#" class="item 2" id="therm" title="Surface Temperature"></a>

                <a href="#" class="item 1" id="bulb" title="Brightness"></a>
            </div>

            <div id="right">
                <div id="slide">
                    <div id="rlum" class="section 4">
                        <div class="info"></div>

                        <div class="caption">
                            <h2>Brightness</h2>
                            How the brightness of your star changes, compared to the Sun.
                        </div>
                    </div>

                    <div id="thermometer" class="section 3">
                        <div class="info"></div>

                        <div class="caption">
                            <h2>Surface Temperature</h2>
							How surface temperature changes with time, compared to the Sun.
                        </div>
                    </div>

                    <div id="rPie" class="section 2">
                        <div id="pie"></div>

                        <div class="info"></div>

                        <div class="caption">
                            <h2>Stages in your star's life</h2>
							This is a clock face. At midnight the star begins its journey by joining the Main Sequence, and at midday its life ends.
                        </div>
                    </div>

                    <div id="rCanvas" class="section 1">
                        <div class="info"></div>

                        <div class="caption">
                            <h2>Size</h2>
                            How your star changes in size and colour, compared to the current conditions of the Sun.
                        </div>
                    </div>
                </div>
            </div>

            <div id="tevTime">
                Time: 0 Myrs
            </div>
        </div>
    </div>
</body>
</html>