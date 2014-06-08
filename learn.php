<?php
$page = learn;
$title = 'Learn Something New Everyday';
$description = 'Boompah is a User Interface &amp; Development Boutique founded by Ryan Bollenbach and based in Winnipeg, Canada.';
?>
<?php include 'inc/header.php' ?>
<div class="container">
  <h1><span class="light-base-header">学习新的东西每天</span><br />
  Learn Something New Everyday</h1>
  <p> On June 6<sup>th</sup>, 2014 I decided to take on the challenge to learn something new everyday for at least one year. Regardless of how big or small, I'm using this page to track articles I read and things I learn. In parallel to learning, I plan to implement things I learn into the development of this site! Fun stuff.</p>
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
  <h3>06.07.2014 - SASS Learning 02</h3>
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
  </ul>
  <h3>06.06.2014 - SASS Learning 01</h3>
  <ul>
    <li>Refreshing myself with mixins, extend / inheritence, and operators</li>
    <li>Using semantic variable names - <a href="http://thesassway.com/beginner/variable-naming" title="Choosing great variable names" target="_blank">source</a></li>
    <li><a href="http://thesassway.com/beginner/how-to-structure-a-sass-project" title="How to structure a SASS project" target="_blank">How to structure a SASS project</a></li>
    <li><a href="http://thesassway.com/beginner/the-inception-rule" title="Nested selectors: the inception rule" target="_blank">Nested selectors: the inception rule</a></li>
  </ul>
</div>
<?php include 'inc/footer.php' ?>