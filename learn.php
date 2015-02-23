<?php
$page = learn;
$title = 'The Knowledge Cavern';
$description = 'Boompah is a User Interface &amp; Development Boutique founded by Ryan Bollenbach and based in Winnipeg, Canada.';
?>
<?php include 'inc/header.php' ?>
<div class="container">
  <h1><span class="light-base-header">学习新的东西每天</span><br />
  The Knowledge Cavern</h1>
  <p>I like to take notes on articles and books I read and decided to create a page for them!<br />
    Previously known as <em>Learn Something New Everyday</em></p>
</div>
<div class="row">
  <div class="container">
    <div class="half">
      <h3>Motivational Quotes</h3>
      <ol>
        <li><em>"Successful people do the things unsuccessful people don't want to do" - Anonymous</em></li>
        <li><em>“I fear not the man who has practiced 10,000 kicks once, but I fear the man who has practiced one kick 10,000 times.” -Bruce Lee</em></li>
        <li><em>“Work like there is someone working twenty-four hours a day to take it all away from you.” -Mark Cuban</em></li>
        <li><em>“Strive not to be a success, but rather to be of value.” –Albert Einstein</em></li>
     </ol>
    </div>
    <div class="half">
      <h3>Topics I Explore</h3>
      <p><strong>Current Focus:</strong> Pragmatic Programming</p>
      <ul>
        <li><span class="bold">Growth:</span> Business &amp; Product Development</li>
        <li><span class="bold">Development:</span> SASS, HTML, Javascript</li>
        <li><span class="bold">Design:</span> UX Design, Mobile App Design</li>
        <li><span class="bold">Social:</span> Instagram, Facebook, Twitter, Youtube</li>
      </ul>
    </div>
  </div>
  <!--
  <h3>Solid Resources</h3>
  <ul>
    <li><a href="http://lea.verou.me/" title="Lea Verou">Lea Verou</a></li>
    <li><a href="http://css-tricks.com" title="CSS Tricks" target="_blank">CSS Tricks<a></li>
    <li><a href="http://sass-lang.com/documentation/" title="Sass Lang Documentation" target="_blank">Sass Lang Documentation</a></li>
    <li><a href="https://github.com/dypsilon/frontend-dev-bookmarks" title="Github - Frontend Development Bookmarks">Github - Frontend Development Bookmarks</a></li>
  </ul>
  -->
</div>
<div class="container">
  <div class="row">
    <h3>08.29.2014 - SASS Lint</h3>
    <ul>
      <li>
        <a href="http://www.theguardian.com/info/developer-blog/2014/may/13/improving-sass-code-quality-on-theguardiancom" title="Improving Sass code quality on theguardian.com">Improving Sass code quality on theguardian.com</a>
        <ul>
          <li>Some great points covered about code quality.</li>
          <li><a href="https://github.com/causes/scss-lint" Title="scss-lint">scss-lint - Configurable tool for writing clean and consistent SCSS</a></li>
          <li>Lint your Sass codebase with your own coding conventions</li>
          <li>Automation with <a href="https://github.com/ahmednuaman/grunt-scss-lint" title="grunt-scss-lint">grunt-scss-lint</a></li>
        </ul>
      </li>
    </ul>
    <h3>08.04.2014</h3>
    <ul>
      <li>Semantic - We name items based on what they do, not what they look like. I'm guility of using colors in button names but, this could easily be extended.</li>
      <li><a href="http://playbook.thoughtbot.com/" title="PLAYBOOK - Written by Thoughtbot" target="_blank">PLAYBOOK - Written by Thoughtbot</a></li>
    </ul>
    <h3>06.26.2014 - CASL</h3>
    <ul>
      <li>
        <p><a href="http://www.lashback.com/what-you-need-to-know-about-casl/">What You Need to Know About CASL</a> - A lot of people have been discussing their concerns with CASL. From what I've read, it mainly applies to people who have illegitimately recieved emails or are trying to install something onto your computer.</p>

        <p>Most newsletter services like <a href="http://mailchimp.com/" title="Mailchimp" target="_blank">Mailchimp</a> offer subscribers the option to unsubscribe which is important.</p>

        <p>Another great resource: <a href="http://business.financialpost.com/2014/05/28/will-you-be-in-compliance-with-canadas-new-anti-spam-legislation-come-july-1/" title="Will you be in compliance with Canada’s new anti-spam legislation come July 1?" target="_blank">Will you be in compliance with Canada’s new anti-spam legislation come July 1?</a>
      </li>
    </ul>
    <h3>06.15.2014 - Modular CSS</h3>
    <ul>
      <li>
        <p><a class="bold" href="http://thesassway.com/advanced/modular-css-typography" title="Modular CSS typography" target="_blank">Modular CSS typography</a> - Great tips on organizing a Sass project from scratch. John discusses a solid strategy to setting up all of your typographic elements from Compass' reset. I'm planning to implement this into boompah.com when it makes sense, it'll be a decent workaround from where I'm currently at with Bourbon and font styles I've established.</p>
      </li>
    </ul>
    <h3>06.14.2014 - Sass - Exploring Bourbon and Compass</h3>
    <ul>
      <li><a class="bold" href="http://bourbon.io/docs/" title="Bourbon Documentation" target="_blank">Bourbon Documentation</a> - The powers of Bourbon!
        <ul>
          <li>After a few hours of research on <a href="http://stackoverflow.com/questions/7666572/compass-vs-bourbon-frameworks" title="Compass vs Bourbon Frameworks" target="_blank">Compass vs Bourbon</a>, I've decided to stick with Bourbon for SASS mixins. It's a touch more simple than Compass and all that I need really. I also went through the install process and found it quite restrictive in comparison to Bourbon. Making them playing nicely together would've required some workaround.
          </li>
        </ul>
      </li>
      <li><a class="bold" href="http://thesassway.com/intermediate/leveraging-sass-mixins-for-cleaner-code" title="Leveraging Sass mixins for cleaner code" target="_blank">Leveraging Sass mixins for cleaner code</a> - Remember to set defaults in mixins when nessessary:
        <pre class="language-scss">
          <code class="language-scss">
            $default-border-radius: 5px !default;
            @mixin border-radius($radius: $default-border-radius) {
              ...
            }
          </code>
        </pre>
        <p>Using <code class="language-scss">@if</code> conditionals with arguments in mixins</p>
        <pre class="language-scss">
          <code class="language-scss">
            @mixin border-radius($radius: 5px, $moz: true, $webkit: true, $ms: true) {
              @if $moz    { -moz-border-radius:    $radius; }
              @if $webkit { -webkit-border-radius: $radius; }
              @if $ms     { -ms-border-radius:     $radius; }
              border-radius: $radius;
            }
          </code>
        </pre>
        <p>Since all of the arguments have default values, you could turn off support for just Internet Explorer by calling the mixin like this:</p>
        <pre class="language-scss">
          <code class="language-scss">
            @include border-radius($ms: false);
          </code>
        </pre>
        <p>*With keyword arguments, you don't have to call out to the mixin with the arguments in the same order they were declared.</p>
      </li>
      <li>
        <a href="http://thesassway.com/intermediate/referencing-parent-selectors-using-ampersand" title="Referencing parent selectors using the ampersand character" target="_blank">Referencing parent selectors using the ampersand character</a>
        <p>Example:</p>
        <pre class="language-scss">
          <code class="language-scss">
            h3 {
              font-size: 20px
              margin-bottom: 10px

              // appending a class to the selector
              &.some-selector {
                font-size: 24px
                margin-bottom: 20px
              }
              // Adding a parent selector
              .some-parent-selector & {
                font-size: 36px
                margin-bottom: 30px
              }
            }
          </code>
        </pre>
        <p>et voila!</p>
        <pre class="language-css">
          <code class="language-css">
            h3 {
              font-size: 20px;
              margin-bottom: 10px;
            }
            h3.some-selector {
              font-size: 24px;
              margin-bottom: 20px;
            }
            .some-parent-selector h3 {
              font-size: 36px
              margin-bottom: 30px
            }
          </code>
        </pre>
        <pre class="language-scss">
          <code class="language-scss">
            /* scss */
            @mixin quicksandlight() {
              visibility: hidden;
              .wf-active &, .msie.wf-loading &, .msie.wf-inactive &  {
                visibility:visible; 
                font-family: 'QuicksandLight', Arial, sans-serif;
              }
            }
            #sample span { @include quicksandlight; }
             
            /* output */
            #sample span { visibility: hidden; }
             
            .wf-active #sample span, 
            .msie.wf-loading #sample span, 
            .msie.wf-inactive #sample span {
              visibility: visible;
              font-family: 'QuicksandLight', Arial, sans-serif;
            }
          </code>
        </pre>
      </li>
    </ul>
    <h3>06.13.2014 - SASS Functions</h3>
    <ul>
      <li>An important question to always ask: Which control directive makes most sense given the current circumstances: <code class="language-scss">@extend</code>, <code class="language-scss">@mixin</code>, <code class="language-scss">@each</code>, <code class="language-scss">@for</code>, <code class="language-scss">@include</code>?</li>
      <li><a href="http://css-tricks.com/complete-guide-table-element/" title="A Complete Guide to the Table Element - CSS Tricks" target="_blank">A Complete Guide to the Table Element - CSS Tricks</a> - tons of great tidbits about styling tables.</li>
      <li><a href="http://css-tricks.com/snippets/css/simple-and-nice-blockquote-styling/" title="Simple and Nice Blockquote Styling" target="_blank">Simple and Nice Blockquote Styling</a> - I decided to add blockquotes to this page and was looking for a quick fix. Presto! Thanks Chris.</li>
      <li><a href="http://sass-lang.com/documentation/file.SASS_REFERENCE.html#function_directives" title="Sass Documention - Function Directives">Sass Documention - Function Directives</a></li>
      <ul>
        <li><span class="bold">Function Example</span>
          <pre class="language-scss">
            <code class="language-scss">
              $grid-width: 40px;
              $gutter-width: 10px;

              @function grid-width($n) {
                @return $n * $grid-width + ($n - 1) * $gutter-width;
              }

              #plsidebar { width: grid-width(5); }
            </code>
          </pre>
          <pre class="language-css">
            <code class="language-css">
              #playground-sidebar {
                width: 240px; }
            </code>
          </pre>
        </li>
      </ul>
      <li><span class="bold">Interpolation</span>
        <pre class="language-scss">
          <code class="language-scss">
            $name: foo;
            $attr: border;
            p.#{$name} {
              #{$attr}-color: blue;
            }
          </code>
        </pre>
        <pre class="language-css">
          <code class="language-css">
            p.foo {
            border-color: blue; }
          </code>
        </pre>
      </li>
      <li><span class="bold">Inline Functions</span>
        <pre class="language-scss">
          <code class="language-scss">
            p {
              color: hsl(0, 100%, 50%);
            }

            // Explicit Keyword Arguments
            p {
              color: hsl($hue: 0, $saturation: 100%, $lightness: 50%);
            }
          </code>
        </pre>
        <pre class="language-css">
          <code class="language-css">
            p {
              color: #ff0000; }
          </code>
        </pre>
      </li>
      <li><span class="bold">Use <code class="language-scss">#{}</code> to put SassScript into property values.</span>
        <pre class="language-scss">
          <code class="language-scss">
            p {
              $font-size: 12px;
              $line-height: 30px;
              font: #{$font-size}/#{$line-height};
            }
          </code>
        </pre>
        Will compile to:
        <pre class="language-css">
          <code class="language-css">
            p {
            font: 12px/30px; }
          </code>
        </pre>
      </li>
    </ul>
    <h3>06.12.2014 - SASS Mixins</h3>
    <ul>
      <li>
        <a href="http://sass-lang.com/documentation/file.SASS_REFERENCE.html#mixins" title="SASS Documentaiton - Mixin Directives" target="_blank">Documentaiton - Mixin Directives</a> - <code class="language-scss">@mixin</code>s allow you to define styles that can be re-used throughout the stylesheet without needing to resort to a non-sematic classes like .float-left. Mixing can also contain full CSS rules, and anything else allowed elsewhere in a Sass document. They can also take <a href="http://sass-lang.com/documentation/file.SASS_REFERENCE.html#mixin-arguments" title="Sass Documentation - Arguments" target="_blank">arguments</a>.
      </li>
      <li>Mixin definitions can also include other mixins.</li>
      <li>Mixins that only define descendent selectors can be safely mixed into the top most level of a document.</li>
      <li>
        <p>Defining a <code class="language-scss">@mixin</code>:</p>
        <pre class="language-scss">
          <code class="language-scss">
            @mixin large-text {
              font: {
                family: $default-font;
                size: 20px;
                weight: bold;
              }
              color: $black;
            }
          </code>
        </pre>
        <p>Including a Mixin: <code class="language-scss">@include</code></p>
        <pre class="language-scss">
          <code class="language-scss">
            .page-title {
              @include large-text;
              padding: 4px;
              margin-top: 10px;
            }
          </code>
        </pre>
        <p>Will compile to:</p>
        <pre class="language-scss">
          <code class="language-scss">
            .page-title {
              font-family: Arial;
              font-size: 20px;
              font-weight: bold;
              color: #ff0000;
              padding: 4px;
              margin-top: 10px;
            }
          </code>
        </pre>
      </li>
      <li>
        <span class="bold">Arguments</span>
        <p>Mixins can take arguments SassScript values as arguments, which are given when the mixin is included and made available within the mixin as variables</p>
        <p>When defining and mixin, the arguments are written as variable names separated by commas, all in parentheses after the name. Then when including the mixin, values can be passed in the same manner.</p>
        <pre class="language-scss">
          <code class="language-scss">
            // A default value has been added for width but, it's not required.
            @mixin awesome-border($color, $width: 5px) {
              border: {
                color: $color;
                width: $width;
                style: dashed;
              }
            }

            p { @include awesome-border(orange); }
            h1 { @include awesome-border(red, 10px); }
          </code>
        </pre>
        <p>Will compile to:</p>
        <pre class="language-scss">
          <code class="language-scss">
            p {
              border-color: blue;
              border-width: 5px;
              border-style: dashed;
            }
            h1 {
              border-color: blue;
              border-width: 10px;
              border-style: dashed;
            }
          </code>
        </pre>
      </li>
      <li>
        <span class="bold">Variable Arguments</span>
        <pre class="language-scss">
          <code class="language-scss">
            @mixin box-shadow($shadows...) {
              -moz-box-shadow: $shadows;
              -webkit-box-shadow: $shadows;
              box-shadow: $shadows;
            }

            .shadows {
              @include box-shadow( 0px 4px 5px #666, 2px 6px 10px #999 );
            }
          </code>
        </pre>
        <p>Will compile to:</p>
        <pre class="language-css">
          <code class="language-css">
            .shadows {
              -moz-box-shadow: 0px 4px 5px #666, 2px 6px 10px #999;
              -webkit-box-shadow: 0px 4px 5px #666, 2px 6px 10px #999;
              box-shadow: 0px 4px 5px #666, 2px 6px 10px #999;
            }
          </code>
        </pre>
        <p>Variable arguments also contain any keyword arguments passed to the mixin or function. These can be accessed using the keywords($args) funcion, which returns them as a map from strings (without $) to values.</p>
        <p>Variable arguments can also be used when calling a mixin. Using the same syntax, you can expand a list of values so that each value is passed as a separate argument, or expand a map of values so that each pair is treated as a keyword argument.</p>
        <pre class="language-scss">
          <code class="language-scss">
            @mixin colors($text, $background, $border) {
              color: $text;
              background-color: $background;
              border-color: $border;
            }

            $values: #ff0000, #00ff00, #0000ff;
            .primary {
              @include colors($values...);
            }

            $value-map: (text: #00ff00, background: #0000ff, border: #ff0000);
            .secondary {
              @include colors($value-map...);
            }
          </code>
        </pre>
        <p>Will compile to:</p>
        <pre class="language-css">
          <code class="language-css">
            .primary {
              color: red;
              background-color: lime;
              border-color: blue; }

            .secondary {
              color: lime;
              background-color: blue;
              border-color: red; }
          </code>
        </pre>
        <p>You can pass both an argument list and a map as long as the list comes before the map, as in <code>@include colors($values..., $map...)</code>.</p>
        <p>You can use the variable arguments to wrap a mixin and add additional styles without changing the argument signature of the mixin. If you do, keyboard arguments will get directly passed through to the wrapped mixing. For example:</p>
        <pre class="language-scss">
          <code class="language-scss">

            // This throws an error.

            @mixin wrapped-awesome-mixin($args...) {
              font-weight: bold;
              @include awesome-mixin($args...);
            }

            .stylish {
              // The $width argument will get passed on to "stylish-mixin" as a keyword
              @include wrapped-stylish-mixin(#00ff00, $width: 100px);
            }
          </code>
        </pre>
      </li>
      <li>
        <span class="bold">Passing Content Blocks to a <code class="language-scss">@mixin</code></span>
        <pre class="language-scss">
          <code class="language-scss">
            @mixin apply-to-about-only {
              .about_en {
                @content;
              }
            }
            @include apply-to-about-only {
              #logo {
                border: 1px solid red;
              }
            }
          </code>
        </pre>
        <pre class="language-css">
          <code class="language-css">
            .about_en #logo {
              border: 1px solid red; }
          </code>
        </pre>
      </li>
      <li><span class="bold">Variable Scope and Content Blocks</span>
        <pre class="language-scss">
          <code class="language-scss">
            $color: black;
            @mixin colors($color: red) {
              $background-color: $color;
              @content;
              $border-color: $color;
            }
            .colors {
              @include colors { color: $color; }
            }
          </code>
        </pre>
        <p>Will compile to:</p>
        <pre class="language-css">
          <code class="language-css">
            .colors {
              background-color: red;
              color: black;
              border-color: red;
            }
          </code>
        </pre>
      </li>
    </ul>
    <h3>06.11.2014 - CSS nth-child</h3>
    <ul>
      <li>
        <p><a href="http://css-tricks.com/how-nth-child-works/" title="How nth-child Works" target="_blank">How nth-child Works - CSS Tricks</a> - This pseudo-class selector matches elements on the basis of their positions within a parent element’s list of child elements. A very handy <a href="http://css-tricks.com/examples/nth-child-tester/" title=":nth Tester by CSS Tricks." target="_blank">:nth Tester by CSS Tricks.</a></p>
      </li>
      <li><a href="http://www.sitepoint.com/web-foundations/understanding-nth-child-pseudo-class-expressions/" title="Understanding :nth-child Pseudo-class Expressions - Site Point" target="_blank">Understanding :nth-child Pseudo-class Expressions - Site Point</a>
        <p><span class="bold">:nth-child(N)</span></p>
        <pre class="language-css">
          <code class="language-css">
            // numbers
            ul li:nth-child(1) {  
              color: #ccc;
            }

            // expressions - select every third element
            ul li:nth-child(3n+3) {  
              color: #ccc;
            }

            // This example selector will match the first three rows of any table
            tr:nth-child(-n+3) {
              border: 1px solid red;
            }

            // All odd values 
            // ul li:nth-child(odd) {
              border: 1px solid red;
            }
          </code>
        </pre>
        <p><span class="bold">:nth-last-child(N)</span></p>
        <pre class="language-css">
          <code class="language-css">
            // This example selector will match the last four list items in any list, be it ordered or unordered:
            li:nth-last-child(-n+4) {
              declarations
            }
          </code>
        </pre>
        <p><span class="bold">:nth-of-type(N)</span></p>
        <pre class="language-css">
          <code class="language-css">
            // The following example selector matches the second, fifth, eighth, and so on, paragraphs in a div element, ignoring any children that aren’t paragraphs:
            div>p:nth-of-type(3n-1) {
              declarations
            }

            // The following example selectors will allow the application of different CSS styles to the odd- and even-numbered image elements that are children of the element whose id attribute value matches “gallery”:
            #gallery>img:nth-of-type(odd) {
              declarations
            }
            #gallery>img:nth-of-type(even) {
              declarations
            }
          </code>
        </pre>
        <p class="bold">:nth-last-of-type(N)</p>
        <pre class="language-css">
          <code class="language-css">
            // The following example selector will match the last three image elements that are children of the element whose id attribute value matches "gallery":
            #gallery>img:nth-last-of-type(-n+3) {
              declarations
            }

            // The following example selector matches the penultimate term in a definition list:
            dt:nth-last-of-type(2) {
              declarations
            }
          </code>
        </pre>
        <p>Here's a handy table from <a href="http://www.sitepoint.com/web-foundations/understanding-nth-child-pseudo-class-expressions/" title="Understanding :nth-child Pseudo-class Expressions" target="_blank">sitepoint</a>:</p>
        <table>
          <thead align="left">
          <tr>
          <th>n</th>
          <th>2n+1</th>
          <th>4n+1</th>
          <th>4n+4</th>
          <th>4n</th>
          <th>5n-2</th>
          <th>-n+3</th>
          </tr>
          </thead>
          <tbody>
          <tr>
          <th>0</th>
          <th>1</th>
          <th>1</th>
          <th>4</th>
          <th>-</th>
          <th>-</th>
          <th>3</th>
          </tr>
          <tr>
          <th>1</th>
          <th>3</th>
          <th>5</th>
          <th>8</th>
          <th>4</th>
          <th>3</th>
          <th>2</th>
          </tr>
          <tr>
          <th>2</th>
          <th>5</th>
          <th>9</th>
          <th>12</th>
          <th>8</th>
          <th>8</th>
          <th>1</th>
          </tr>
          <tr>
          <th>3</th>
          <th>7</th>
          <th>13</th>
          <th>16</th>
          <th>12</th>
          <th>13</th>
          <th>-</th>
          </tr>
          <tr>
          <th>4</th>
          <th>9</th>
          <th>17</th>
          <th>20</th>
          <th>16</th>
          <th>18</th>
          <th>-</th>
          </tr>
          <tr>
          <th>5</th>
          <th>11</th>
          <th>21</th>
          <th>24</th>
          <th>20</th>
          <th>23</th>
          <th>-</th>
          </tr>
          </tbody>
        </table>
      </li>
    </ul>
    <h3>06.10.2014 - CSS Specificity, :not() CSS pseudo-class</h3>
    <ul>
      <li>
        <p><a href="http://css-tricks.com/specifics-on-css-specificity/" title="Specifics on CSS Specificity" target="_blank">Specifics on CSS Specificity - CSS Tricks</a> - This is the first time I've come across <code class="language-css">:not()</code> example: <code class="language-css">#footer *:not(nav) li</code></p>

        <p>Decided to dive a little deeper - <a href="https://developer.mozilla.org/en/docs/Web/CSS/:not" title="HTML :not() - MDN" target="_blank">HTML :not() - MDN</a> and hack around with their example.</p>
        <pre class="language-css">
          <code class="language-css">
            p:not(.ice-ice-baby) { color: red; }
            body :not(p) { color: green; }
          </code>
        </pre>
        <span class="bold">Markup:</span>
        <pre class="language-markup">
          <code class="language-markup">
            &lt;p&gt;Check out this Markup&lt;/p&gt;
            &lt;p&gt; class="ice-ice-baby">One mo time!&lt;/p&gt;
            &lt;span&gt;Oh yeeeeeah!&lt;/span&gt;
          </code>
        </pre>
        <p class="bold">Will compile to:</p>
        <p style="color: red;">Check out this Markup</p>
        <p>One mo time<p>
        <span style="color: green;">Oh yeeeeeah!</span></p>
      </li>
      <li>
        <a href="http://css-tricks.com/how-nth-child-works/" title="Efficiently Rendering CSS" target="_blank">Efficiently Rendering CSS - CSS Tricks</a>
        <ul>
          <li><span class="bold">Right to Left</span> - One of the important things to understand about how browsers read your CSS selectors, is that they read them from right to left.</li>
          <li>ID's are the most efficient, Universal are the least</li>
          <li><span class="bold">Don't tag-qualify</span>Never do this: ul#main-navigation { } - ID's are unique, so they don't need a tag name to go along with it. Doing so makes the selector less efficient.</li>
          <li>Descendant selectors are the worst</li>
          <li><span class="bold">Consider why you are writing the selector</span> - things like <code class="language-css">font-family</code> will cascade down various elements from an ul to an a.</li>
          <li>
            <span class="bold">CSS3 and Efficiency</span> - sad news from David Hyatt:
            <blockquote>The sad truth about CSS3 selectors is that they really shouldn’t be used at all if you care about page performance.</blockquote>
          </li>
        </ul>
      </li>
    </ul>
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
    <h3>06.08.2014 - SASS Source Map and Definition</h3>
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
          <li><span class="bold">Limitations:</span> <code class="language-scss">@extend</code> applied to placeholder selectors does not work between rules in different <code class="language-scss">@media</code> blocks</li>
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
        <span class="bold">HTML5:</span> <code class="language-markup">&lt;figure&gt;</code> - I noticed that <a href="http://thesassway.com/beginner/how-to-structure-a-sass-project" target="_blank">John Long's SASS structure</a> included a file for figures under the partials directory. After a quick google, I realized the figure element was introduced in HTML5. The figure element is typically used for <em>“an image, an illustration, a diagram, a code snippet, or a schema that is referenced in the main text, but that can be moved to another page or to an appendix without affecting the main flow.”</em><br />
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
</div>
<?php include 'inc/footer.php' ?>