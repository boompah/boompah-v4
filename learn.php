<?php
$page = learn;
$title = 'Learn Something New Everyday';
$description = 'Boompah is a User Interface &amp; Development Boutique founded by Ryan Bollenbach and based in Winnipeg, Canada.';
?>
<?php include 'inc/header.php' ?>
<div class="container">
  <h1><span class="light-base-header">学习新的东西每天</span><br />
  Learn Something New Everyday</h1>
  <p> On June 6<sup>th</sup>, 2014 I decided to take on the challenge to learn something new everyday for at least one year. Regardless of how big or small, I'm using this page to track articles I read and things I learn. In parallel to learning, I plan to implement new ideas into my current projects! Fun stuff.</p>
  <h3>Motivational Quotes</h3>
  <p><em>
    “Work like there is someone working twenty-four hours a day to take it all away from you.”<br />
    - Mark Cuban
  </em></p>
  <h3>Topics I Want to Explore</h3>
  <ul>
    <li><strong>Growth:</strong> Business &amp; Product Development</li>
    <li><strong>Development:</strong> SASS, HTML, Javascript, Angular</li>
    <li><strong>Design:</strong> UX Design, Mobile App Design</li>
    <li><strong>Social:</strong> Facebook, Twitter, Google+, Youtube</li>
  </ul>
  <!--
  <h3>Solid Resources</h3>
  <ul>
    <li><a href="http://lea.verou.me/" title="Lea Verou">Lea Verou</a></li>
  </ul>
  -->
  <h3>06.09.2014 - SASS Control Directives</h3>
  <ul>
    <li>As Adam Stacoviak mentions in his article <a href="http://thesassway.com/intermediate/if-for-each-while" title="Sass control directives: @if, @for, @each and @while" target="_blank">Sass control directives: @if, @for, @each and @while</a> “Sass control directives are the cornerstone of creating libraries for reuse and distribution, and need to be among the very first items on your list of things to learn when taking your Sass skills to the next level.” I felt it essential to take his advice and get my hands dirty. I also referenced the <a href="http://sass-lang.com/documentation/file.SASS_REFERENCE.html#control_directives__expressions" title="Sass Changelog">sass-lang documentation</a>.
      <ul>
        <li>
          <code class="language-scss">@if</code> - The @if directive takes a SassScript expression and uses the styles nested beneath it if the expression returns anything other than false or null.
          <pre class="language-scss">
            <code class="language-scss">
            $type: boomplay;
            p.if-test {
              @if $type == bbq {
                color: blue;
              } @else if $type == guitar {
                color: purple;
              } @else if $type == computer {
                color: yellow;
              } @else if $type == boomplay {
                color: red;
              }
            }
          </code>
        </pre>
        <p>Will compile to:</p>
        <pre class="language-scss">
          <code class="language-css">
            p.if-test {
              color: red;
            } // if you grep my CSS you'll see it for yourself! ;)
          </code>
        </pre>
        </li>
        <li>
          <code class="language-scss">@for</code> - The @for directive repeatedly outputs a set of styles. For each repetition, a counter variable is used to adjust the output. The directive has two forms: <code>@for $var from &lt;start&gt; through &lt;end&gt;</code> and <code>@for $var from &lt;start&gt; to &lt;end&gt;</code>
          <pre class="language-scss">
            <code class="language-scss">
              @for $i from 1 through 5 {
                .item-#{$i} { width: 1.5em * $i }
              }
            </code>
          </pre>
          Will compile to:
          <pre class="language-scss">
            <code class="language-scss">
              .fortest-1 {
                width: 1.5em; }

              .fortest-2 {
                width: 3em; }

              .fortest-3 {
                width: 4.5em; }

              .fortest-4 {
                width: 6em; }

              .fortest-5 {
                width: 7.5em; }
            </code>
          </pre>
        </li>
      </ul>
    </li>
    <li>
      <code class="language-scss">@each</code> - The @each directive usually has the form <code>@each $var &lt;list or map&gt;. $var</code> can be any variable name, like <code>$length</code> or <code>$name</code>, and <code>&lt;list or map&gt;</code> is a SassScript expression that returns a list or a map. The <code>@each</code> rule sets <code>$var</code> to each item in the list or map, then outputs the styles it contains using that value of <code>$var</code>.
      <pre class="language-scss">
        <code class="language-scss">
          @each $animal in cat, dog, fish, bird {
            .#{$animal}-icon {
              background-image: url('/images/#{$animal}.png');
            }
          }
        </code>
      </pre>
      Which compiles to:
      <pre class="language-scss">
        <code class="language-scss">
          .cat-icon {
            background-image: url("/images/cat.png"); }

          .dog-icon {
            background-image: url("/images/dog.png"); }

          .fish-icon {
            background-image: url("/images/fish.png"); }

          .bird-icon {
            background-image: url("/images/bird.png"); }
        </code>
      </pre>
    </li>
    <li>
      <code>@while</code> - The @while directive takes a SassScript expression and repeatedly outputs the nested styles until the statement evaluates to false. This can be used to achieve more complex looping than the @for statement is capable of.
      <pre class="language-scss">
        <code class="language-scss">
          $i: 8;
          @while $i > 0 {
            .item-#{$i} { width: 3em * $i }
            $i: $i -2;
          }
        </code>
      </pre>
      Will compile to:
      <pre class="language-css">
        <code class="language-css">
          .item-8 {
            width: 24em; }

          .item-6 {
            width: 18em; }

          .item-4 {
            width: 12em; }

          .item-2 {
            width: 6em; }
        </code>
      </pre>
    </li>
    <li>I had an issue updating SASS today on my rails stack and came across <a href="http://askubuntu.com/questions/92468/how-do-i-update-to-the-latest-version-of-sass" title="How do I update to the latest version of SASS?" target="_blank">this helpful article on askubuntu.com</a>.</li>
    <li>
      Discovered <a href="http://breakpoint-sass.com/" title="Breakpoint SASS" target="_blank">breakpoint-sass.com</a> - Really Simple, Organized, Media Queries with Sass. Thanks Tim!<br/>
      <blockquote class="twitter-tweet" data-conversation="none" lang="en"><p><a href="https://twitter.com/ryanboompah">@ryanboompah</a> Breakpoint by <a href="https://twitter.com/codingdesigner">@codingdesigner</a> and <a href="https://twitter.com/Snugug">@Snugug</a> is my go-to for media queries,&#10;(if only for the amazing site) <a href="http://t.co/ve4ww9aNIf">http://t.co/ve4ww9aNIf</a></p>&mdash; Tim Hettler (@timhettler) <a href="https://twitter.com/timhettler/statuses/476163278855348224">June 10, 2014</a></blockquote>
      <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
    </li>
  </ul>
  <h3>06.08.2014</h3>
  <ul>
    <li>
      <p>
        <a href="http://thesassway.com/intermediate/using-source-maps-with-sass" title="Source maps" target="_blank">Source maps</a> are amazingly helpful! Simply run this script in your command line:<br />
        <pre><code class="language-javascript">$ sass assets/sass/main.scss:inc/styles.css --sourcemap</code></pre>
      </p>
      <p>
        It'll poop out this at the bottom of your rendered CSS file:<br />
        <pre><code class="language-javascript">/*# sourceMappingURL=style.css.map */</code></pre>
        That's all there is to it! Now you'll be able to view which SASS file created the style you're inspecting through Chrome, Firefox or Safari. Be sure to enable CSS source maps.
      </p>
    </li>
    <li>
      <a href="http://thesassway.com/intermediate/a-standard-module-definition-for-sass" title="A standard module definition for Sass" target="_blank">A standard module definition for Sass</a>
      <ol>
        <li>A module is a unit of code contained in a partial</li>
        <li>Importing a module should never output code</li>
        <li>Each module should have a primary mixin</li>
        <li>The name of the primary mixin should inherit the name of the module</li>
        <li>
          Variable definitions should always be defaulted<br />
          <pre><code class="language-scss">
            $base-font-family: Helvetica, Arial, sans-serif !default;
            $fixed-font-family: monospace !default;
          </code></pre>
        </li>
        <li>Almost all project CSS should be written in modules</li>
      </ol>
    </li>
    <li>
      You can use <a href="http://thesassway.com/intermediate/interactive-sass-having-fun-on-the-terminal" title="Interactive Sass: having fun on the terminal" target="_blank">interactive Sass</a> to reduce a series of complex color functions to a color value. This can be useful for swapping colors while designing in a browser. Ex: <code>saturate(#113, 10%)</code>, <code>adjust-hue(green, 10deg)</code>, and <code>adjust-color(blue, $lightness: -20%, $hue: 20deg)</code>.
    </li>
  </ul>
  <h3>06.07.2014 - SASS Placeholders + Extend vs. Include</h3>
  <ul>
    <li>
      <a href="http://thesassway.com/intermediate/understanding-placeholder-selectors" title="Understanding placeholder selectors" target="_blank">Understanding placeholder selectors</a>
      <ul>
        <li>Define a placeholder selector like this:<br />
          <pre><code class="language-scss">%selector-name { // styles }</code></pre>
        </li>
        <li><strong>Limitations:</strong> <code class="language-scss">@extend</code> applied to placeholder selectors does not work between rules in different <code class="language-scss">@media</code> blocks</li>
        <li>The key difference between <code class="language-scss">@extend</code> and <code class="language-scss">@include</code> is how it generates CSS. <code class="language-scss">@extend</code> may be applied to several selectors within a single set of attributes. <code class="language-scss">@include</code> will render separately under each specified selector.</li>
      </ul>
    </li>
    <li>
      Discovered <a href="http://prismjs.com/" title="Prism">prism.js</a> for syntax highlighting in a browser
    </li>
    <li>
      <a href="http://thesassway.com/intermediate/mixins-for-semi-transparent-colors" title="Mixins for semi-transparent colors">Mixins for semi-transparent colors</a><br />
      <pre class="language-scss">
        <code class="language-scss">
          // Mixin
          @mixin alpha-attribute($attribute, $color, $background) {
            $percent: alpha($color) * 100%;
            $opaque: opacify($color, 1);
            $solid-color: mix($opaque, $background, $percent);
            #{$attribute}: $solid-color;
            #{$attribute}: $color;
          }

          // Code
          .button {
            @include alpha-attribute('background-color', rgba(black, 0.5), white);
          }
        </code>
      </pre>
    </li>
    <li>
      <strong>HTML5:</strong> <code class="language-markup">&lt;figure&gt;</code> - I noticed that <a href="http://thesassway.com/beginner/how-to-structure-a-sass-project" target="_blank">John Long's SASS structure</a> included a file for figures under the partials directory. After a quick google, I realized the figure element was introduced in HTML5. The figure element is typically used for <em>“an image, an illustration, a diagram, a code snippet, or a schema that is referenced in the main text, but that can be moved to another page or to an appendix without affecting the main flow.”</em><br />
      <a href="https://developer.mozilla.org/en-US/docs/Web/HTML/Element/figure" target="_blank">Source: &lt;figure&gt; HTML | MDN</a>
    </li>
  </ul>
  <h3>06.06.2014 - SASS Basics</h3>
  <ul>
    <li>Refreshing myself with mixins, extend / inheritence, and operators</li>
    <li>Using semantic variable names - <a href="http://thesassway.com/beginner/variable-naming" title="Choosing great variable names" target="_blank">source</a></li>
    <li><a href="http://thesassway.com/beginner/how-to-structure-a-sass-project" title="How to structure a SASS project" target="_blank">How to structure a SASS project</a> - implemented SASS structure into boompah.com</li>
    <li><a href="http://thesassway.com/beginner/the-inception-rule" title="Nested selectors: the inception rule" target="_blank">Nested selectors: the inception rule</a></li>
  </ul>
</div>
<?php include 'inc/footer.php' ?>