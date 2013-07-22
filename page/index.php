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

<body>
        <nav class="gw">
            <div class="g one-half medium-one-whole">
              <h1><a href="/">emwaw.me</a></h1>
            </div>
        
            <div class="g one-half medium-one-whole">
            
                <ul class="gw">
                  <li class="g one-quarter medium-one-half">
                    <a href="#what">What?</a>
                  </li>
                  
                  <li class="g one-quarter medium-one-half">
                    <a href="#good-example">Example</a>
                  </li>
                  
                  <li class="g one-quarter medium-one-half">
                    <a href="#use-it">Use it</a>
                  </li>
                  
                  <li class="g one-quarter medium-one-half">
                    <a href="#code">Code</a>
                  </li>
                </ul>
                
            </div>
        </nav>
        
        <p>
            An framework which combines <a href="http://csswizardry.com/2013/01/mindbemding-getting-your-head-round-bem-syntax/" target="_blank">Harry Roberts "MindBEMding"</a> 
            and <a href="http://timpietrusky.com" target="_blank">my</a> idea for a <b>collection of reusable SCSS</b>:
        </p>
        
        <ul>
            <li>Colors</li>
            <li>Units</li>
            <li>Lists</li>
            <li>Elements</li>
            <li>Modifier</li>
            <li>Mixins</li>
        </ul>
        
        <span id="what"></span>
        
        <p>
            Those SCSS rules have a <b>100% reuse guarantee</b>. 
             
        </p>
        
        <h2>
            What does that mean?
        </h2>
        
        <p>
            You use <b>emwaw.me</b> to
        </p>
        
        <ul>
            <li>decapsulate your SCSS variables, extensions & mixins into one file</li>
            <li>get a uniform naming-pattern for your SCSS variables, extensions & mixins</li>
        </ul>
        
        <h2>The Bad Example</h2>

        <p class="emw__element-alpha">
            The <b>Bad Example</b> shows how you <b>shouldn't use SCSS variables extensions and mixins</b> inside your project. 
        </p>
        
        <p class="emw__element-alpha">
          <b>╭∩╮（︶︿︶）╭∩╮</b>
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
        

        <p>
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

        <span id="good-example"></span>

        <p>This makes no sense at all.</p>
        
        
        <h2>The Good Example</h2>
        
        <p class="emw__element-alpha">
__̴ı̴̴̡̡̡ ̡͌l̡̡̡ ̡͌l̡*̡̡ ̴̡ı̴̴̡ ̡̡͡|̲̲̲͡͡͡ ̲▫̲͡ ̲̲̲͡͡π̲̲͡͡ ̲̲͡▫̲̲͡͡ ̲|̡̡̡ ̡ ̴̡ı̴̡̡ ̡͌l̡̡̡̡.___
        </p>
        
        <p>
            Copy the predefined SCSS generated by <b>emwaw.me</b>:
        </p>

        <pre><code class="language-scss">// A color
$emw--color-alpha: #fff;
   
// A unit
$emw--unit-alpha: .5em;</code></pre>

        <p>
            Use it inside your SCSS:
        </p>
        
        <pre><code class="language-scss">body {
  background: $emw--color-alpha;
  margin: $emw--unit-alpha 0;
}

a {
  color: darken($emw--color-alpha, 20%);
}

footer {
  border-top: $emw--unit-alpha solid darken($emw--color-alpha, 20%);
}</code></pre>

        <span id="use-it"></span>

        <p class="emw__element-alpha">
            Oh yes, that looks very good!
        </p>
        
        
        <h2>
            
        </h2>


        <h2>
            How to add this to your project?
        </h2>
        <p>
            Get the parts of <b>emwaw.me</b> that are useful to you, put them inside a <b>_emwaw.me.scss</b> and 
            import that file into your SCSS.
        </p>
        
        <span id="code"></span>
        
        <pre><code class="language-scss">@import "emwaw.me";</code></pre>
        
        
        <h2>
            Grab your piece of the code
        </h2>
        
        <p class="emw__element-alpha">
            <b>龴ↀ◡ↀ龴</b>
            
            <form method="GET" action="#code">
                <label for="a" class="emw__element-alpha">Change the amount of the generated SCSS helper (up to 16): </label>
                <input name="a" type="number" value="<?php echo Emwawme::getUnitAlpha(); ?>"/>
                
                <button type="submit">generate</button>
            </form>
        </p>
        
        <pre><code class="language-scss"><?php Emwawme::generate(); ?></code></pre>
        
        <footer>
            <p>
                We love <a href="http://emmmmmm.com" target="_blank">em</a> so please (╯°□°）╯︵ ┻━┻ on every px you can find!
            </p>
            
            <br>
            
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
