<!DOCTYPE html>
<html>
<head>
	<title>Fight the Dragon!</title>
	<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
	<!--[if lte IE 8]>
    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/grids-responsive-old-ie-min.css">
	<![endif]-->
	<!--[if gt IE 8]><!-->
    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/grids-responsive-min.css">
	<!--<![endif]-->
	<link rel="stylesheet" type="text/css" href="assets/stylesheets/style.css">
</head>
<body>

	<?php
		$rolled = false;
		$rand_die_1 = rand(1,6); 
		$rand_die_2 = rand(1,6);

		$chooseFight = function() {
			print '<a class="pure-button" href="index.php?roll=true">Roll the dice</a>';
		};

		$chooseRun = function() {
			print '<div class="image-wrapper">' .
				'<img src="assets/images/fleeing.png">' .
				'</div>';
		};

		$roll = function() {
			$rolled = true;
			$rand_die_1 = rand(1,6); 
			$rand_die_2 = rand(1,6);
			print '<style type="text/css">
        		.die-wrapper {
            		display: block;
        		}
        		</style>';
        	if ($rand_die_1 + $rand_die_2 > 6){
				print '<h3>You defeated the dragon!</h3>';
			} else {
				print '<h3>You were slain by the dragon!</h3>';
			}
		};

		if (isset($_GET['fight'])) {
			$chooseFight();
		} else if (isset($_GET['runaway'])) {
			$chooseRun();
		} else if (isset($_GET['roll'])) {
			$roll();
		}
	?>

	<div class="pure-g">
		<div class="pure-u-1-4 panel">
			<div class="pure-u-1">
				<div class="pure-u-1-3">
					<div class="die-wrapper">
						<img src="<?php print "/assets/images/d" . $rand_die_1 . ".gif"; ?>" name="myDie1">
					</div>
				</div>
				<div class="pure-u-1-3">
					<div class="die-wrapper">
						<img src="<?php print "/assets/images/d" . $rand_die_2 . ".gif"; ?>" name="myDie2">
					</div>
				</div>
				<h1>Your Roll</h1>
			</div>
			<div class="pure-u-1">
				<div class="message">
					<h3>You encounter a dragon...</h3>
				</div>
				<a class="pure-button" href="index.php?fight=true">Fight the dragon</a>
				<a class="pure-button" href="index.php?runaway=true">Run away</a>
			</div>
		</div>
		<div class="pure-u-3-4 panel">
			<div class="image-wrapper">
				<img src="assets/images/dragon.png">
			</div>
		</div>
	</div>
</body>
</html>