<?php header('Content-type: text/html; charset=utf-8'); ?>
<!doctype html>
<html lang="en">
<head>
    <title>emwaw.me</title>

    <meta charset="utf-8">
    <meta name="author" content="Tim Pietrusky">
    <meta name="robots" content="index,follow">
    <meta name="revisit-after" content="1 days">
    <meta name="description" content="An awesome em framework!">

    <meta property="og:title" content="emwaw.me">
    <meta property="og:description" content="An awesome em framework!">
   <?php // <meta property="og:image" content="http://.com/img/.jpg">  ?>
    <meta property="og:url" content="http://emwaw.me">
    <meta name="viewport" content="width=device-width">

    <link rel="stylesheet" href="css/styles.css">
    <link rel="shortcut icon" href="images/emwaw.me.ico" type="image/x-icon">
</head>

<?php
  include('app/Emwawme.php');
?>

<body id="emwawme">
        <nav class="gw">
            <div class="g one-half medium-one-whole">
              <h1><a href="/">emwaw.me</a></h1>
            </div>
        
            <div class="g one-half medium-one-whole">
            
                <ul class="gw">
                  <li class="g one-quarter">
                    <a href="#what">What?</a>
                  </li>
                  
                  <li class="g one-quarter">
                    <a href="#good-concept">Concept</a>
                  </li>
                  
                  <li class="g one-quarter">
                    <a href="#use-it">Use it</a>
                  </li>
                  
                  <li class="g one-quarter">
                    <a href="#generate">Generate</a>
                  </li>
                </ul>
                
            </div>
        </nav>
        
        <span id="what"></span>
        
        <p>
            A concept which combines <a href="http://csswizardry.com/2013/01/mindbemding-getting-your-head-round-bem-syntax/" target="_blank">Harry Roberts "MindBEMding"</a> 
            with a collection of <b>reusable SCSS helper</b>.
        </p>
        
        <h2>
            What? 
        </h2>
        
        <p>
            You use <b>emwaw.me</b> to
        </p>
        
        <ul>
            <li>decapsulate your SCSS variables, extensions & mixins into one file</li>
            <li>get a uniform naming-pattern based on the greek alphabet</li>
        </ul>
        
        <h2>The Bad Example</h2>
        
        <p class="emw__element-alpha">
          <b>┌∩┐(◣_◢)┌∩┐</b>
        </p>

        <p class="emw__element-alpha">
            The <b>Bad Example</b> shows how you <b>shouldn't use</b> SCSS <b>variables, extensions and mixins</b> inside your project. 
        </p>
        
        <p>
            You want to use a SCSS variable to save the background-color of your body? You probably end up with a variable name like this...
        </p>
        
        <pre class="emw__element-alpha"><code class="language-scss">$body-background-color: #fff;
// OR  
$body-color: #fff;
// OR  
$my-color-1: #fff;
// OR  
$background: #fff;
</code></pre>
        

        <p class="emw__element-alpha">
            So you mastered to control the <b>background-color</b> of your body, 
            but what happens if you want to use the same color on an anchor?
        </p>
        <pre><code class="language-scss">body {
  background: $body-background-color;
}

a {
  color: darken($body-background-color, 20%);
}
</code></pre>

        <span id="good-concept"></span>

        <p>This makes no sense at all. But I'm trying to fix that with <b>emwaw.me</b></p>
        
        
        <h2>The Basic Concept</h2>
        
        <p class="emw__element-alpha">
__̴ı̴̴̡̡̡ ̡͌l̡̡̡ ̡͌l̡*̡̡ ̴̡ı̴̴̡ ̡̡͡|̲̲̲͡͡͡ ̲▫̲͡ ̲̲̲͡͡π̲̲͡͡ ̲̲͡▫̲̲͡͡ ̲|̡̡̡ ̡ ̴̡ı̴̡̡ ̡͌l̡̡̡̡.___
        </p>
        
        <p class="emw__element-alpha">
           <b>emwaw.me</b> gives you predefined names based on the greek alphabet, so that you can put your values inside them:
        </p>

        <pre><code class="language-scss">/**
 * Colors 
 */
$emw--color-alpha: #fff;
$emw--color-beta: darken($emw--color-alpha, 30%);
$emw--color-gamma: #cc0;

/**
 * Units 
 */
$emw--unit-alpha: 1em;
$emw--unit-beta: 1.5em;
$emw--unit-gamma: 10%;

/**
 * Lists
 */
$emw--list-alpha: $emw--color-alpha, $emw--color-beta 40%;

/**
 * Elements (class)
 */
.emw__element-alpha {
  margin-bottom: $emw--unit-epsilon / 4 !important;
  color: $emw--color-delta;
}

/**
 * Modifier (extension)
 */
%emw__modifier-alpha {
  margin: $emw--unit-gamma / 2 $emw--unit-gamma;
}

%emw__modifier-beta {
  margin-top: $emw--unit-beta;
  margin-bottom: $emw--unit-alpha;
}

/**
 * Mixins
 */
@mixin emw__mixin-alpha($alpha, $beta) {
  padding-left: $alpha;
  padding-right: $alpha;

  @include breakpoint(medium) {
    padding-left: $beta;
    padding-right: $beta;
  }
}</code></pre>

        <p class="emw__element-alpha">
            Only use the project specific <b>$emw</b> SCSS helper from now on.
        </p>
        
        <pre><code class="language-scss">body {
  @extend %emw__modifier-alpha;
  
  font: $emw--unit-alpha sans-serif;
  color: $emw--color-gamma;
  
  @include emw__mixin-alpha($emw--unit-beta, $emw--unit-alpha);
  @include background(
    linear-gradient(to bottom, $emw--list-alpha)
  );
}

h1 {
  @extend %emw__modifier-beta;

  font-size: $emw--unit-beta * 2;
  color: $emw--color-beta;
}

a {
  color: $emw--color-beta;
}

footer {
  padding-top: $emw--unit-gamma;
  border-top: $emw--unit-alpha solid darken($emw--color-alpha, 20%);
}</code></pre>



        <h2>The Extented Concept</h2>
        
        <p class="emw__element-alpha">
          Instead of using <b>$emw</b> inside our project, we declare individual names that make sense. 
        </p>
        
<pre><code class="language-scss">/**
 * Colors 
 */
$emw--color-alpha: #fff;
$emw--color-beta: darken($emw--color-alpha, 30%);

/**
 * Units 
 */
$emw--unit-alpha: 1em;



/**
 * 
 * Project specific names
 * These names are connected with properties.
 *
 */
 $background-color: $emw--color-alpha;
 $link-color: $emw--color-beta;
 $footer-unit-alpha: $emw--unit-alpha;
 $border-color: $emw--color-beta;
</code></pre></p>
          
    <h3>╚(ಠ_ಠ)=┐</h3>
    
    <p>
        <pre><code class="language-scss">body {
  background-color: $background-color;
}

a {
  color:  $link-color;
}

footer {
  padding-top: $footer-unit-alpha;
  border-top: $footer-unit-alpha / 2 solid $border-color;
}</code></pre>
        </p>

        <span id="use-it"></span>


        <h2>
            How to add this to your project?
        </h2>
        <p>
            Get the parts of <b>emwaw.me</b> that are useful to you, put them inside a <b>_emwaw.me.scss</b> and 
            import that file into your SCSS.
        </p>
        
        <span id="generate"></span>
        
        <pre><code class="language-scss">@import "emwaw.me";</code></pre>
        
        
        <h2>
            Grab your piece of the code
        </h2>
        
        <p class="emw__element-alpha">
            <b>龴ↀ◡ↀ龴</b>
            
            <form method="GET" action="#generate">
                <label for="a" class="emw__element-beta">How many <a href="#emwawme">SCSS helper</a> do you need? (up to 16): </label>
                <input name="a" class="emw__element-beta" type="number" min="1" max="16" value="<?php echo Emwawme::getUnitAlpha(); ?>"/>
                
                <div class="gw">
                    <div class="g one-half">
                         <button class="button" type="submit">generate</button>
                    </div>
                    
                    <div class="g one-half">
                    <a href="raw.php?a=<?php echo Emwawme::getUnitAlpha(); ?>" target="_blank" class="button button__alpha">
                         download
                    </a>
                    </div>
                </div>
               
            </form>
        </p>
        
        <pre><code class="language-scss"><?php Emwawme::generate(); ?></code></pre>
        
        <p class="emw__element-alpha"></p>
        
        <h2>Demos</h2>
        
        <h3>Pricing Table</h3>
        
        <p class="emw__element-alpha">
          A responsive <a href="http://codepen.io/TimPietrusky/pen/IqnbJ" target="_blank">Webs Pricing Table</a> with CSS transformations.
        </p>
        
        <p class="emw__element-alpha"></p>
        
        <h3>interweb★s</h3>
        
        <p class="emw__element-alpha">
          The logo of the <a href="http://codepen.io/TimPietrusky/pen/pusDd" target="_blank">interweb★s</a>.
        </p>
        
        <footer>
            <p class="emw__element-alpha">
                We love <a href="http://emmmmmm.com" target="_blank">em</a> so please (╯°□°）╯︵ ┻━┻ on every px you can find!
            </p>
            
            <p class="emw__element-alpha">
                <a href="http://www.reddit.com/r/web_design/comments/1itc56/a_scss_framework_based_on_reusable_components/" target="_blank">
                    Please vote for us on Reddit!
                </a>
            </p>
            
            <p>
                2013 by <a href="http://timpietrusky.com" target="_blank">Tim Pietrusky</a>. You should
                <a href="https://github.com/TimPietrusky/emwaw.me" target="_blank">fork me on GitHub</a>.
            </p>

        </footer>
        
        <a href="https://github.com/TimPietrusky/emwaw.me" class="ribbon ribbon--top-right" target="_blank">
          Fork me on GitHub
        </a>
</body>

<script src="js/main.js"></script>

</html>
