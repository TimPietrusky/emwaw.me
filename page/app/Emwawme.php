<?php


class Emwawme {


	public static $names = array(
		'alpha',
		'beta',
		'gamma',
		'delta',
		'epsilon',
		'zeta',
		'eta',
		'theta',
		'iota',
		'kappa',
		'lambda',
		'my',
		'ny',
		'xi',
		'omikron',
		'pi'
	); 
	
	public static function generate() {
		$theme = "emw";
		$alpha = "\n\n\n";
		$names_length = Emwawme::getUnitAlpha();
		$names = Emwawme::$names;

		// Colors
		echo "/** \n * Colors \n */\n";
		for ($i = 0; $i < $names_length; $i++) { 
			echo "\$$theme--color-" . $names[$i] . ': 0;' . "\n";
		}

		echo $alpha;

		// Units
		echo "/** \n * Units \n */\n";
		for ($i = 0; $i < $names_length; $i++) { 
			echo "\$$theme--unit-" . $names[$i] . ': 0;' . "\n";
		}

		echo $alpha;

		// Lists
		echo "/** \n * Lists \n */\n";
		for ($i = 0; $i < $names_length; $i++) { 
			echo "\$$theme--list-" . $names[$i] . ': 0;' . "\n";
		}

		echo $alpha;

		// Elements 
		echo "/** \n * Elements \n */\n";
		for ($i = 0; $i < $names_length; $i++) { 
			echo ".$theme" . "__element-" . $names[$i] . " {}\n";
		}

		echo $alpha;

		// Modifier 
		echo "/** \n * Modifier \n */\n";
		for ($i = 0; $i < $names_length; $i++) { 
			echo "%$theme" . "__modifier-" . $names[$i] . " {}\n";
		}

		echo $alpha;

		// Mixins 
		echo "/** \n * Mixins \n */\n";
		for ($i = 0; $i < $names_length; $i++) { 
			echo "@mixin $theme" . "__mixin-" . $names[$i] . "() {}\n";
		}
	}

	public static function getUnitAlpha() {
		$names_length = count(Emwawme::$names);

		if (isset($_GET['a'])) {
			  $names_length = $_GET['a'] % ($names_length + 1);

			  if ($names_length <= 0) {
			  	$names_length = 1;
			  }
        } else {
        	$names_length = 4;
        	$_GET['a'] = 4;
        }

		return $names_length;
	}
}

?>