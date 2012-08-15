<?php include("../../header.php"); ?>

<h1>CSS for Grown Ups: Maturing Best Practices by Andy Hume</h1>

<script async class="speakerdeck-embed" data-id="4f5bea324b24ac0022005f50" data-ratio="1.299492385786802" src="//speakerdeck.com/assets/embed.js"></script>

<a title="CSS for Grown Ups: Maturing Best Practices - Andy Hume" href="http://schedule.sxsw.com/2012/events/event_IAP9410" target="_blank">Listen to this keynote</a>

<p>I'm confident in my CSS skills but since I'm working on a larger web app again, I wanted to polish up with some fresh CSS resources. <a title="Andy Hume" href="http://andyhume.net/" target="_blank">Andy Hume</a> <em>(currently working for The Guardian)</em> created this keynote which seemed like a good starting point to review some advanced techniques. This article contains my documentation of what I learned from the keynote, enjoy.</p>

<p>For larger websites and web applications, CSS is a difficult and complex component of the codebase to manage and maintain. It's difficult to document patterns, and it's difficult for developers unfamiliar with the code to contribute safely. Andy discusses some techniques to create a more precise, structured, engineering-driven approach to writing CSS to keep it bug-free, performant, and most importantly, maintainable. Andy believes that some of our "best practices" are killing us and communicates why.</p>

<p>The initial best practice myth Andy touches on is the idea that adding style classes to your markup is a bad approach. In a lot of instances, it can actually help to make your markup a lot cleaner (like the example he provides using classes for a twitter, facebook and linkedin icon classes). I actually add in classes like this all the time, I find it helps me scan the architecture of my pages and it's easier to re-use elements.</p>

<p>Code quality - correctness, reusability, reliability, performance, web 2.0 compliant, extensibility, and testability are fundamental characteristics of a solid codebase. However, making code that adapts well to change is significant factor when working with other developers and evolving your branding.</p>

<p>On slide 38 - 39, there's a cool example of how to declare font sizes on your header elements independent of their presentational markup (.h1 {font-size: 3em;}). Another approach is to create your own naming conventions appropriate to your content. Andy also promotes the concept of working with patterns that have contextual meaning to your documents and to ignore the dogma of "classitist" <em>(using too many classes within the markup for presentational means)</em>.</p>

<p>For responsive design, Andy has created <a title="selector-queries" href="https://github.com/ahume/selector-queries" target="_blank">selector-queries</a> for a different approach for making elements respond to different dimensions. This script allows you to apply different class values to an HTML element based on its width, check it out. It works in all modern browsers back to and including IE6. It's neat to see a different approach to media queries rather than specified resolutions forcing different layouts.</p>

<p>Andy closes with the importance of style guidelines and reviews some of the projects he's working on. I'm currently using Bootstrap to import existing layouts and it's a lot of fun, I love it.</p>

<h3>Style Guidelines</h3>
<ul>
	<li><a title="BBC - Global Experience Language (GEL)" href="http://www.bbc.co.uk/gel" target="_blank">BBC - Global Experience language (GEL)</a>.</li>
	<li><a title="Twitter Bootstrap" href="http://twitter.github.com/bootstrap/" target="_blank">Twitter Bootstrap</a></li>
	<li><a title="Paul Robert Lloyd - Style Guide" href="http://paulrobertlloyd.com/about/styleguide/" target="_blank">Paul Robert Lloyd - Style Guide</a></li>
</ul>

<?php include("../../footer.php"); ?>