<?php


class Emwawme {
	
	public static function generate() {
		$theme = "emw";

		$alpha = "\n\n";

		$names = array(
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

		$names_length = count($names);

		//$names_length = 10;

		// Colors
		echo "/**\n * \n * Colors \n * \n */\n";
		for ($i = 0; $i < $names_length; $i++) { 
			echo "\$$theme--color-" . $names[$i] . ': 0;' . "\n";
		}

		echo $alpha;

		// Units
		echo "/**\n * \n * Units \n * \n */\n";
		for ($i = 0; $i < $names_length; $i++) { 
			echo "\$$theme--unit-" . $names[$i] . ': 0;' . "\n";
		}

		echo $alpha;

		// Lists
		echo "/**\n * \n * Lists \n * \n */\n";
		for ($i = 0; $i < $names_length; $i++) { 
			echo "\$$theme--list-" . $names[$i] . ': 0;' . "\n";
		}

		echo $alpha;

		// Elements 
		echo "/**\n * \n * Elements \n * \n */\n";
		for ($i = 0; $i < $names_length; $i++) { 
			echo ".$theme" . "__element-" . $names[$i] . " {}\n";
		}

		echo $alpha;

		// Modifier 
		echo "/**\n * \n * Modifier \n * \n */\n";
		for ($i = 0; $i < $names_length; $i++) { 
			echo "%$theme" . "__modifier-" . $names[$i] . " {}\n";
		}

		echo $alpha;

		// Mixins 
		echo "/**\n * \n * Mixins \n * \n */\n";
		for ($i = 0; $i < $names_length; $i++) { 
			echo "@mixin $theme" . "__mixin-" . $names[$i] . "() {}\n";
		}
	}
}

?>