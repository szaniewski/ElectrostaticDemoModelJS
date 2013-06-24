<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="js/dist/jquery.jqplot.css" />
        <style>
            body {
                padding-top: 60px;
                padding-bottom: 40px;
            }
        </style>
        <link rel="stylesheet" href="css/bootstrap-responsive.min.css">
        <link rel="stylesheet" href="css/main.css">

        <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>
    <body>
<h1>Electrostatic charges</h1>
<div class="row">
    
    <div class="span3">	
	<form class=""  name="electrostatic" id="electrostatic">
	    <fieldset>
		<legend>Charge</legend>
		<label>Q [C]:</label>
		<input value="1" type ="text" id="charge"> 

		<label>10<sup>x</sup>:</label>
		<input value="0" type ="number" id="exp" min="-100" max="100" step="1"> 

	    </fieldset>
	</form>	
	<ul class ="nav nav-tabs nav-stacked">

	    <li><a href="#canvas" id="mapForce"><span class="icon-chevron-right"></span> Electric field map</a></li>
	    <li><a href="#canvas" id ="mapPotential"><span class="icon-chevron-right"></span> Potential map</a></li>
	    <li><a href="#canvas" id ="reset" onclick="javascript:window.location.reload();"><span class="icon-repeat"></span> Reset</a></li>
	    <li><a href="#canvas" id ="download" onclick="javascript:window.location.reload();"><span class="icon-download"></span> Screen shot</a></li>

	</ul>
	<div class="well">
	    <p>Force field:</p>
	    <p><span id="forceStrength"></span>[N/C]</p>
	    <canvas id="pointerVector" style="width:100px;height:100px;background:#009900">
	    </canvas>			


	</div>
    </div>

    <canvas class ="well span8"  id ="canvas"></canvas>

</div>	
<!-- Main hero unit for a primary marketing message or call to action -->


<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.js"><\/script>')</script>

<script src="js/vendor/bootstrap.min.js"></script>
<script src="js/electrostatic/vector.js"></script>
<script src="js/electrostatic/physic.js"></script>
<script src="js/electrostatic/physics.js"></script>
<script src="js/electrostatic/view.js"></script>
<script src="js/electrostatic/controller.js"></script>
<script src="js/electrostatic/electrostatic.module.js"></script>
<script src="js/electrostatic/userInterface.js"></script>
<script src="js/electrostatic/main.js"></script>
<div class="row" id="help">
    <div class="well span11">
    <h2>Electrostatic - help</h2>
    <p>First of all - use Webkit based browser - such as Chromium QtWeb or Iron - this block don't work on other browsers</p>
    <p>In "Q" field enter value of a charge You want to put on canvas - You can use "-" sign if charge if You will to add negative charge. You also can use  "." to separate decimals.
    <br>In "10<sup>x</sup>" field You enter power of 10 in order to calibrate Your charge (I got best results for -4 or -3 ).
    <br>Now simply click somewhere on the canvas  - this will place the charge onto canvas. You can add multiple charges with diffrient parameters. Just have to remember that You always put charge with parameters determined by actual "Q" and "10<sup>x</sup>" fileds.</p> 
    <p><strong>Electric field map</strong> - draws map of electric field from charges You had put to the canvas</p>
    <p><strong>Potential map</strong> - draws map of potential from charges You had put to the canvas</p>
    <p><strong>Reset</strong> - restarts module</p>
    <p><strong>Screen shot</strong> - captures a png snapshot of Your current canvas - You can put it as profile picture on Your facebook :)</p>
    <h3>Technical blah blah...</h3>
    <p>On the green radar You can see an arrow which points the direction of Electric field on test charge at Your cursor position. The values above the radar is Electric field value at Your cursor. Colors used on map indicate value of Potential/Field,
	then lighter color You get than higher value it has. Blue is for negative values, and red is for positive values. Black areas are the ones where You get "0" value of mesured quantity.</p>
    <p>You can see that Field from single charge dissapears quicket than potential  - that is because it's equation has 1/r<sup>2</sup> factor in it, and Potential is 1/r quantity</p>
    <p>Have fun</p>
	
</div>
    </div>
    <hr>
</body>
</html>
