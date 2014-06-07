<?php
$page = learn;
$title = 'Learn Something New Everyday';
$description = 'Boompah is a User Interface &amp; Development Boutique founded by Ryan Bollenbach and based in Winnipeg, Canada.';
?>
<?php include 'inc/header.php' ?>
<div class="container">
  <h1>Learn Something New Everyday</h1>
  <p> On June 6<sup>th</sup>, 2014 I decided to take on the challenge to learn something new everyday for at least one year. Regardless of how big or small, I'm using this page to track articles I read and things I learn. In parallel to learning, I plan to implement things I learn into the development of this site! Fun stuff.</p>
  <h3>Topics I Want to Explore</h3>
  <ul>
    <li><strong>Growth:</strong> Business &amp; Product Development</li>
    <li><strong>Development:</strong> SASS, HTML, Javascript, Angular</li>
    <li><strong>Design:</strong> UX Design, Mobile App Design</li>
    <li><strong>Social:</strong> Facebook, Twitter, Google+, Youtube</li>
  </ul>
  <h3>06.07.2014 - SASS Learning 02</h3>
  <ul>
    <li>
      <a href="http://thesassway.com/intermediate/understanding-placeholder-selectors" title="Understanding placeholder selectors">Understanding placeholder selectors</a>
      <ul>
        <li>Define a placeholder selector<br />
          <pre><code class="language-scss">%selector-name</code></pre>
        </li>
        <li>Limitations: <code class="language-scss">@extend</code> applied to placeholder selectors doesn't work between rules in different <code class="language-scss">@media</code> blocks</li>
      </ul>
    </li>
    <li>
      Discovered <a href="http://prismjs.com/" title="Prism">prism.js</a> for syntax highlighting in a browser
      <ul>
        <li><pre><code class="language-css">p { color: red; }</code></pre></li>
      </ul>
    </li>
  </ul>
  <h3>06.06.2014 - SASS Learning 01</h3>
  <ul>
    <li>Refreshing myself with mixins, extend / inheritence, and operators</li>
    <li>Using semantic variable names - <a href="http://thesassway.com/beginner/variable-naming" title="Choosing great variable names">source</a></li>
    <li><a href="http://thesassway.com/beginner/how-to-structure-a-sass-project" title="How to structure a SASS project">How to structure a SASS project</a></li>
    <li><a href="http://thesassway.com/beginner/the-inception-rule" title="Nested selectors: the inception rule">Nested selectors: the inception rule</a></li>
  </ul>
</div>
<?php include 'inc/footer.php' ?>