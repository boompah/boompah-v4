<?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/common/header.php";
   include_once($path);
?>

<h1>Responsive Web Design Frameworks, Grid Systems and Starter Kits</h1>

<img class="alignnone size-full wp-image-459" title="Responsive Web Design - Frameworks, Grid Systems and Starter Kits" src="http://boompah.com/wp-content/uploads/2012/03/01-Responsive-Web-Design.png" alt="Responsive Web Design - Frameworks, Grid Systems and Starter Kits" width="732" height="488" />

<p><em>Fonts used above: <a title="Dancing Script" href="http://www.impallari.com/dancing/" target="_blank">Dancing Script</a> by <a title="Pablo Impallari" href="http://www.impallari.com/" target="_blank">Pablo Impallari</a> &amp; <a title="Novecento" href="http://typography.synthview.com/" target="_blank">Novecento</a> by <a title="Snythview" href="http://www.synthview.com" target="_blank">Synthview</a></em></p>

<p>As <a title="AListApart - Responsive Web Design" href="http://www.alistapart.com/articles/responsive-web-design/" target="_blank">responsive web design</a> evolves, it's becoming a requirement rather than a feature that a website performs beautifully across desktops, tablets and mobile. It's important to make the right decision about which framework, grid system or technique to use on a project to ensure it's aligned with what you're trying to build. I've been researching several different techniques and I'm gaining a better understanding of each approach for various layout types. Responsive layouts can be a great alternative to the costs associated with a native app.</p>

<p>Frameworks typically come with a range of features including jQuery libraries, Ui controllers, and an endless amount of extensions. Whereas grid systems and starter kits are more simplified CSS files that serve as a foundation for your layout's CSS structure. It's important to understand what makes these solutions different from one another.</p>

<p><strong><span style="color: #333399;">Please note:</span></strong> This post will be updated to stay current with tools that are released and discontinued.</p>

<p>Last updated: May 14th, 2012.</p>

<p>Questions you may want to ask yourself before deciding on a direction:</p>

<ol>
	<li>What is your timeline? <em>You'll notice that some tools have a much smaller learning curve.</em></li>
	<li>Is the layout you're creating fairly standard on a 960 grid format?</li>
	<li>Would you prefer a gridless solution?</li>
	<li>Are you looking for a frameless grid so you can specify your column width, gutter width, etc. and infinitely repeat them? <em>A 'frame' meaning to have a wrapper div of 960px wide and storing all your content within that. Whereas frameless would span the entire browser.</em></li>
	<li>Will you need rapid prototyping capabilities?</li>
	<li>Are you prototyping a web app that you'll want to build upon in the future?</li>
	<li>Do you require a minimal grid system?</li>
	<li>Are you looking for a framework with jQuery and other technologies included?</li>
	<li>Which CMS are you working with? - Ex: Starter kits with Wordpress themes.</li>
	<li>Is there a lot of photos and videos in your project?</li>
	<li>How do you want the content to perform? Should it scale larger and smaller in a nice fluid fashion? Do you think it makes sense to display different layouts based on which resolution it's at? Also, r<em><em>ather than thinking '<a title="Mobile first by Luke Wroblewski" href="http://www.lukew.com/ff/entry.asp?933" target="_blank">mobile first</a>' you may consider mobile in parallel to design</em>.</em></li>
</ol>

<p><strong><a title="Skeleton" href="http://www.getskeleton.com/" target="_blank">
Skeleton</a></strong>  by <a href="http://davegamache.com/" target="_blank">Dave Gamache</a> - Currently one of my favourite frameworks, the CSS was a main selling point for me. You'll notice in the snippet below that it's <em>quite easy</em> to follow.</p>

<ul>
	<li>960 grid system with a <span style="text-decoration: underline;">12</span><span style="text-decoration: underline;"> column grid</span> - simply implement your already created 960 layouts.</li>
	<li>Includes pre-styled components for rapid prototyping (buttons, tabs, forms etc.).</li>
	<li>Easily adapt your CSS to your layout ideas and don't worry about changing your mind once you've begun CSS.</li>
	<li>Skeleton works well for rapid development and HTML wireframes.</li>
	<li>Includes a nice collection of buttons, tabs and forms as UI components.</li>
	<li>It works great when you rotate an iPad horizontally to vertical, it scales properly and locks into place. This doesn't sound like a big deal but, a lot of other tools fall flat with this.</li>
	<li>Download the <a href="http://demos.simplethemes.com/skeleton/" target="_blank">Skeleton Wordpress theme</a> by <a title="Simple Themes" href="http://www.simplethemes.com/" target="_blank">Simple Themes</a>. It's extremely extensive and even supports <a title="bbpress" href="http://bbpress.org/" target="_blank">bbpress</a>.</li>
	<li>I also created an <a href="http://bit.ly/xQEZZU" target="_blank">Illustrator template</a> for the Skeleton grid.</li>
</ul>

<p><strong><a href="http://www.lessframework.com"> Less Framework 4</a></strong> by <a title="Joni Korpi" href="http://jonikorpi.com/" target="_blank">Joni Korpi</a> - I created the current <em>boompah.com</em> layout using LF4. Instead of defining easy to use divs like Skeleton, LF4 provides pixel amounts for a 10 column layout that results in a default resolution of 992px.</p>

<ul>
	<li>LF4 is a lightweight solution.</li>
	<li>Based on a 10 column grid composed of 68px columns with 24px gutters.</li>
	<li>Includes retina media query.</li>
	<li>Optional <a title="HTML5 Shim" href="http://code.google.com/p/html5shim/" target="_blank">HTML5 Shim</a> support.</li>
</ul>

<p><strong><a title="Bootstrap" href="http://twitter.github.com/bootstrap/" target="_blank"> Bootstrap, from Twitter</a></strong> - If you're designing a web app or even just a content heavy site with extensive forms and interactions, Bootstrap may be a good fit.</p>

<ul>
	<li>12-column grid (940px wide) - also included: Fixed-width and Fluid-width layouts based on that system.</li>
	<li>Customize the grid: modify the number of columns, change the width of each column and negative space between columns.</li>
	<li>Designed first and foremost as a styleguide to document not only their features, but best practices and living, coded examples.</li>
	<li>Base CSS provided for typography, emphasis, blockquotes, lists, tables, forms, buttons and icons.</li>
	<li>Tons of different components for navigations, buttons, alerts, popovers, dropdowns, breadcrumbs, pagination, inline labels, badges, typography, thumbnails, progress bars and <a title="Bootstrap Components" href="http://twitter.github.com/bootstrap/components.html" target="_blank">much more</a>.</li>
	<li><a title="jQuery plugins" href="http://twitter.github.com/bootstrap/javascript.html" target="_blank">jQuery plugins</a> for modals, tooltips, collapse, dropdowns, popovers, carousel, scrollspy, alert messages, typeahead, togglable tabs, buttons and transitions.</li>
	<li>Created with <a title="Less CSS" href="http://lesscss.org/" target="_blank">Less CSS</a> - includes variables, mixins for reusable snippets of code, operations for simple math, nesting, and color functions.</li>
	<li>Make your grid, leading, and more super flexible by doing the math on the fly with operations. Multiply, divide, add, and subtract your way to CSS sanity.</li>
	<li>Customize your <a title="Download Bootstrap" href="http://twitter.github.com/bootstrap/download.html" target="_blank">download</a> to ensure that you get only the components, javascript plugins, and assets you need. This is really handy to keep your projects lightweight rather than having to download everything.</li>
	<li>Check out some <a title="Bootcamp examples" href="http://twitter.github.com/bootstrap/examples.html" target="_blank">bootcamp examples</a>.</li>
</ul>

<p><strong><a title="1140 CSS Grid" href="http://cssgrid.net/" target="_blank"> 1140 CSS Grid</a> </strong>by <a title="Catching Zebra" href="http://www.catchingzebra.com" target="_blank">Andy Taylor</a> <strong>- </strong>An awesome solution for a fluid layout designed for 1280 resolutions. If your browser statistics give you the green light to support 1280 x 800px as a default resolution, this might be a good fit.</p>

<ul>
	<li>12 column grid format.</li>
	<li>Includes a Photoshop Template.</li>
	<li>Alex Newman created the <a title="1140 Fluid Starkers Wordpress Theme" href="http://www.thedotmack.com/2011/07/19/1140-fluid-starkers-wordpress-theme/" target="_blank">1140 Fluid Starkers WordPress Theme</a> which seems cool.</li>
	<li>Browser support: Chrome, Safari, Firefox, IE7 &amp; IE8 and partially in ie6.</li>
</ul>

<p><strong><a title="Golden Grid System" href="http://goldengridsystem.com/" target="_blank"> Golden Grid System</a> </strong>by <a title="Joni Korpi" href="http://jonikorpi.com/" target="_blank">Joni Korpi</a> - A folding grid for responsive design. Golden Grid System (GGS) splits the screen into 18 even columns. The leftmost and rightmost columns are used as the outer margins of the grid, which leaves 16 columns for use in design.</p>

<ul>
	<li>A great starting point and a couple of guidelines<em> - not to be confused with a framework</em>.</li>
	<li>18 column grid system - <em>The leftmost and rightmost columns are used as the outer margins of the grid, which leaves 16 columns for use in design.</em></li>
	<li>The 16 columns can be combined, or folded, into 8 columns for tablet-sized screens, and into 4 columns for mobile-sized ones.</li>
	<li>GGS can easily cover any <strong>screen sizes from 240 up to 2560 pixels</strong>.</li>
	<li>While the column widths in GGS are proportional to the screen's width, the widths of its gutters (the spaces between columns) are proportional to the page's font-size, specified in ems.</li>
	<li>Zoomable baseline grid.</li>
	<li>GGS comes with Golden Gridlet, a little script that adds a button into the upper right corner of the page. When clicked or tapped, it overlays the GGS grid and a baseline grid of 1.5em onto the page, making it easy to visually check that design elements align up.</li>
</ul>

<p><strong><a title="inuit.css" href="http://csswizardry.com/inuitcss/" target="_blank"> inuit.css</a></strong> - by <a title="CSS Wizardry" href="http://csswizardry.com/" target="_blank">CSS Wizardry - Harry Roberts</a> - A fairly straightforward baseline CSS framework. It's a stripped back framework to allow you to build upon it the way you'd like. There's a ton of powerful plugins included to assist you with your projects.</p>

<h4>Included Plugins:</h4>
<ul>
	<li>breadcrumb.inuit.css - <em>Quickly create a breadcrumb trail navigation.</em></li>
	<li>ie6.inuit.css - <em>Make the grid system work fully in IE6.</em></li>
	<li>dropdown.inuit.css - <em>Create a simple, pure CSS dropdown menu out of a set of nested lists.</em></li>
	<li>12-col.inuit.css - <em>Run a 12 column layout with inuit.css instead of the default 16 column system.</em></li>
	<li>annotate.inuit.css -<em> Easily annotate the HTML5 &lt; figure &gt; element using this simple plugin.</em></li>
	<li>keywords.inuit.css - <em>Transform a simple list into a series of comma delimited keywords with one class.</em></li>
	<li>centred-nav.inuit.css - <em>Center a navigation menu in a similar fashion to text-align:center;.</em></li>
</ul>

<p><strong><a title="MQFramework" href="http://mqframework.com/" target="_blank"> MQFramework</a> </strong>by <a title="Chris Johnson Twitter" href="http://twitter.com/chrismj83" target="_blank">Chris Johnson</a></p>

<ul>
	<li><strong>VERY</strong> simple and minimal 12 column fixed &amp; fluid grid.</li>
</ul>

<p><strong><a title="Amazium" href="http://www.amazium.co.uk/" target="_blank"> Amazium</a> </strong>by <a title="Mike Ballan" href="http://www.mikeballan.co.uk/" target="_blank">Mike Ballan</a></p>

<ul>
	<li>960 grid system with 12 columns.</li>
	<li>PSD file which has the 960 grid setup for you based on 32px gutters/margins.</li>
	<li>Offsetting columns - if you need to position a column over by say 2 columns.</li>
	<li>Four main media queries:
1. browsers over 960px
2. iPad or other tablet Portrait (728px)
3. iPhone or mobile Portrait (300px)
4. iPhone or mobile Landscape (420px).</li>
	<li>Make your images responsive by adding: class="max-image".</li>
	<li>Make your videos responsive by wrapping your iFrame or object in a div with this class: "video-container".</li>
	<li>Includes a 404 error page.</li>
</ul>

<p><strong><a title="The Goldilocks Approach" href="http://goldilocksapproach.com/" target="_blank"> The Goldilocks Approach</a></strong> by <a title="Design by Front" href="http://www.designbyfront.com/" target="_blank">Front</a> - The Goldilocks Approach uses a combination of Ems, Max-Width, Media Queries and Pattern Translations to consider just three states that allow your designs to be resolution independent.</p>

<ul>
	<li>2 well commented CSS files that consider 3 CSS Media Query increments; multi column, narrow column and single column.</li>
	<li>Good typographic defaults out of the box (including print contexts).</li>
	<li>Barebones - customization-friendly tool.</li>
</ul>

<p><strong><a title="320andup" href="http://stuffandnonsense.co.uk/projects/320andup/" target="_blank"> 320andup</a> </strong>by <a title="stuffandnonsense.co.uk" href="http://stuffandnonsense.co.uk/" target="_blank">Andy Clarke</a> - ‘320 and Up’ prevents mobile devices from downloading desktop assets by using a tiny screen’s stylesheet as its starting point.</p>

<ul>
	<li>Contains only reset, colour and typography styles.</li>
	<li>Five Media Query increments: 480, 600, 768, 992 and 1382px.</li>
	<li>Vertical grid based on Less Framework 4.</li>
	<li>Two versions: multiple linked stylesheets, or a single stylesheet with multiple Media Queries.</li>
	<li><a title="imgsizer.js" href="http://unstoppablerobotninja.com/entry/fluid-images/" target="_blank">imgsizer.js</a>: improve IE’s rendering of resizable images.</li>
	<li><a title="selectivizr.js" href="http://selectivizr.com/" target="_blank">selectivizr.js</a>: bootstrap CSS3 selector support.</li>
	<li><a title="jquery-extra-selectors.js" href="https://github.com/keithclark/JQuery-Extended-Selectors" target="_blank">jquery-extra-selectors.js</a> to boost Selectivizr.</li>
</ul>

<p><strong><a title="Fluid Baseline Grid" href="http://fluidbaselinegrid.com/" target="_blank"> Fluid Baseline Grid</a></strong> by <a title="Josh Hopkins" href="http://twitter.com/thedayhascome" target="_blank">Josh Hopkins</a> - The Fluid Baseline Grid System is an HTML5 &amp; CSS3 development kit that provides a solid foundation to quickly design websites with ease.</p>

<ul>
	<li>FBG is defaulted to a minimal 3-column folding grid, which is easy to work with and divided into equal portions, 31.333% wide with 2% wide gutters between columns.</li>
	<li>Built with typographic standards in mind.</li>
	<li>It's packed with CSS normalization, beautiful typographic standards, corrected bugs, common browser inconsistencies and improved usability.</li>
	<li>This is a starting point, not a standard, so they encourage you to change the columns as your project requires.</li>
	<li>The FBG is designed for mobile first. CSS styles are scaled up from the minimum instead of scaled down from the maximum through the use of media queries.</li>
	<li>IE6/7/8 do not support media queries, so <a href="https://github.com/scottjehl/Respond/" target="_blank">Respond.js</a> is used to polyfill.</li>
	<li>Common breakpoints:
320 px — Mobile portrait
480 px — Mobile landscape
600 px — Small tablet
768 px — Tablet portrait
1024 px — Tablet landscape/Netbook
1280 px &amp; greater — Desktop.</li>
	<li>Normalize CSS - Reset vs. Normalize? Most web designers use either the <a title="Eric Meyer Reset" href="http://meyerweb.com/eric/tools/css/reset/" target="_blank">Eric Meyer Reset</a> or the <a title="YUI Reset" href="http://developer.yahoo.com/yui/reset/" target="_blank">YUI Reset</a>, but a reset doesn't fix cross-browser inconsistencies or preserve useful defaults. <a title="Normalizing CSS" href="http://necolas.github.com/normalize.css/" target="_blank">Normalizing CSS</a> allows for the preservation of useful defaults, while correcting bugs, fixing common browser inconsistencies and improving usability.</li>
	<li>The code for FBG is simple, lightweight, and non-obtrusive, which allows it to be easily modified for each project. The default is based on a 3-column folding layout</li>
</ul>

<p><strong><a title="Foundation" href="http://foundation.zurb.com/docs/" target="_blank"> Foundation</a></strong> by <a title="Zurb" href="http://www.zurb.com/" target="_blank">Zurb</a> - Easy to use, powerful, and flexible framework for building prototypes and production code on any kind of device.</p>

<ul>
	<li>12 column grid which can be whatever size you need - <em>it's easily adapted to any size screens, from phones to TVs</em>.</li>
	<li>Allows for rapid prototyping.</li>
	<li>Includes dozens of styles and elements to help you quickly put together clickable prototypes, that can then be adapted and styled into polished production code. Forms, buttons, tabs, and more.</li>
	<li>Offsets - Offsets allow you to create additional space between columns in a row. The offsets run from offset-by-one all the way up to offset-by-eleven. Like the rest of the grid they're nest-able.</li>
	<li>Centered columns are placed in the middle of the row. This does not center their content, but centers the grid element itself. This is a convenient way to make sure a block is centered, even if you change the number of columns it contains.</li>
	<li>Includes: <a title="Foundation Orbit" href="http://foundation.zurb.com/docs/orbit.php" target="_blank">Orbit</a> - Awesome lightweight slider for images &amp; content.</li>
	<li>Includes: <a title="Foundation Reveal" href="http://foundation.zurb.com/docs/reveal.php" target="_blank">Reveal</a> - Foundation's new light-weight, simple, and totally flexible modal plugin.</li>
	<li>Includes: <a title="Compass Gem" href="http://foundation.zurb.com/docs/gems.php#compass" target="_blank">Compass Gem</a> - makes it really easy to create a project that uses Compass and SASS to add to the speed and flexibility of Foundation. The Compass Gem<strong> defaults to SCSS</strong>, but can easily be switched to SASS. There's also a <a title="Rails Gem" href="http://foundation.zurb.com/docs/gems.php#rails" target="_blank">Rails Gem</a>.</li>
	<li>Supports: ie7, ie8, ie9, Safari, Firefox, Chrome, Mobile Webkit and Android Browser.</li>
</ul>

<p><strong><a title="The Semantic Grid System" href="http://semantic.gs/" target="_blank"> The Semantic Grid System</a></strong> - Set column and gutter widths, choose the number of columns, and switch between pixels and percentages. Runs on <a title="lesscss" href="http://lesscss.org/" target="_blank">LESS</a>, <a title="SCSS" href="http://sass-lang.com/" target="_blank">SCSS</a>, or <a title="Stylus" href="http://learnboost.github.com/stylus/" target="_blank">Stylus</a>. Read up on <a title="Smashing magazine - The Semantic Grid System: Page Layout For Tomorrow" href="http://coding.smashingmagazine.com/2011/08/23/the-semantic-grid-system-page-layout-for-tomorrow/" target="_blank">Smashing Mag</a>.</p>

<ul>
	<li>12 column, 960 pixel grid system.</li>
	<li>It’s semantic.</li>
	<li>It can be either fixed or fluid and is responsive.</li>
	<li>It allows the number of columns, column widths and gutter widths to be modified instantly, directly in the style sheet.</li>
	<li>Customize the columns and gutters by overriding these three variables.</li>
	<li>To use a fluid (percentage-based) grid rather than a fixed pixels, simply override one additional variable: @total-width: 100%;.</li>
</ul>

<p><strong><a title="Gridless" href="http://thatcoolguy.github.com/gridless-boilerplate/" target="_blank"> Gridless</a></strong> by <a title="That Cool Guy" href="http://github.com/thatcoolguy">That Cool Guy</a> - A gridless responsive solution - Gridless is an optionated HTML5 and CSS3 boilerplate for making mobile first responsive, cross-browser websites with beautiful typography.</p>

<ul>
	<li>Gridless is extremely simple and straightforward. It doesn't come with any predefined grid systems or non-semantic classes.</li>
	<li>Includes: <a title="CSS Normalization" href="http://necolas.github.com/normalize.css/" target="_blank">CSS Normalization</a>, <a href="http://www.informationarchitects.jp/en/100e2r/">beautiful typography</a>, a well-organized folder structure, <a title="IE bugfixes" href="http://mathiasbynens.be/notes/safe-css-hacks" target="_blank">IE bugfixes</a> and other nice tricks.</li>
	<li>Gridless uses mobile first responsive web design to adapt itself to the device's width. This means it'll work anywhere: old feature phones, newer smartphones, tablets, notebooks and bigger desktops</li>
	<li><a title="Respond.js" href="https://github.com/scottjehl/Respond/" target="_blank">Respond.js</a> for ie6/7/8.</li>
</ul>

<p><strong><a title="Frameless" href="http://framelessgrid.com/" target="_blank"> Frameless</a></strong> by <a title="Joni Korpi" href="http://jonikorpi.com/" target="_blank">Joni Korpi</a> -  Specify your column width, gutter width, etc. and infinitely repeat them across the browser.</p>

<ul>
	<li>Infinite column grid (completely customizable).</li>
	<li>LESS template - Contains a small CSS reset, some consistency fixes, as well as some super-basic customizable variables and functions for starting off a Frameless grid. A good starting point for LESS users.</li>
	<li>SCSS template - The same as the LESS version above, but written in SCSS instead. It makes for a nice starting point for SASS users.</li>
	<li>HTML starting point - Contains some basic HTML5, including Paul Irish’s conditional classes, the HTML5 Shim, and a proper meta viewport tag.</li>
	<li>Photoshop template - A basic template for a Frameless grid with 48 px columns and 24 px gutters — same as the grid used on this site. Includes columns marked up with guides up to 2560px, and overlay masks for some common screen sizes.</li>
</ul>

<p><strong><a title="SimpleGrid" href="http://simplegrid.info/" target="_blank"> SimpleGrid</a> </strong>by <a title="Conor Muirhead" href="http://conor.cc/" target="_blank">Conor Muirhead</a> - Responsive. Infinite nesting. One class per element. Simple.</p>

<ul>
	<li>4 and 6 Column Grid</li>
	<li>Prepared for 4 distinct ranges of screen size:
1. screens &lt; 720px
2. screens &gt; 720px
3. screens &gt; than 985px
4. screens &gt; than 1235px</li>
	<li>Self-Aware - Most grid systems use one class for all units of a single size, leaving units oblivious to where they fit into the grid. That leaves you with .first and .last classes. With SG each slot knows whether it's first, middle, or last in its respective row; no extra classes needed.</li>
	<li>Sensible - Creating the code for your grid should be the least of your problems when building a site. That's why SG keeps things simple and straightforward with as little markup and classes as possible. Even nesting grid slots doesn't require extra classes.</li>
</ul>

<p><strong><a title="Columnal" href="http://www.columnal.com/" target="_blank"> Columnal</a></strong> by <a title="Pulp+Pixels" href="http://www.pulpandpixels.com" target="_blank">Pulp+Pixels</a> - It's 1140px wide, but since it's fluid, it'll respond to the width of most browsers.</p>

<ul>
	<li>12 column grid system.</li>
	<li>Built-in debugging CSS to show the structure of any pages being built.</li>
	<li>Sub-columns (columns within columns) for more layout options.</li>
	<li>Prefix and suffix for extra space within a column before or after content.</li>
	<li>Vertical spacing CSS classes.</li>
	<li>PDF of grid system for sketching out site before building.</li>
	<li>Wireframing templates.</li>
	<li>Columnal is in active development and you may run across bugs.</li>
	<li>There are two fixed pixel dimensions to use for Internet Explorer 6 and 7.</li>
</ul>

<p><strong><a title="Tiny Fluid Grid" href="http://www.tinyfluidgrid.com/" target="_blank"> Tiny Fluid Grid</a></strong> by <a title="Girlfriend NYC" href="http://www.girlfriendnyc.com/" target="_blank">Girlfriend</a></p>

<ul>
	<li>Simply specify the number of columns, gutter percentage and min &amp; max width with some really simple, visual sliders.</li>
	<li>Inspired by <a title="1kbGrid" href="http://www.1kbgrid.com/" target="_blank">1kbGrid</a> which is also very similar to <a title="CSS Wizardry Fluid Grids" href="http://csswizardry.com/fluid-grids/" target="_blank">CSS Wizzardry's Fluid Grids</a>.</li>
</ul>

<p><strong><a title="YAML 4" href="http://www.yaml.de" target="_blank"> YAML 4</a></strong> - by Dirk Jesse <em>(created in 2005)</em> - A modular CSS framework for truly flexible, accessible and responsive websites.</p>

<ul>
	<li>Flexible forms toolkit with theme-support.</li>
	<li>Focussed on web standards &amp; accessibility.</li>
	<li>Optimized typography for all standard elements.</li>
	<li>Matched building blocks for rapid prototyping.</li>
	<li>Namespacing avoids conflicts.</li>
	<li>YAML provides a complete set of matched building blocks to create complex websites. Grids, navigation, forms, typography module and all provided add-ons work seamlessly together.</li>
	<li>Very extensive <a title="YAML Documentation" href="http://www.yaml.de/docs/index.html" target="_blank">documentation</a> covering Layouts, Grids, Columns, Forms, Floats, Accessibility, Navigation Typography and Add-ons.</li>
</ul>

<p><strong><a title="Responsive Grid System" href="http://responsive.gs/" target="_blank">Responsive Grid System</a></strong> - CSS framework for fast, intuitive development of responsive websites.</p>

<ul>
	<li>12, 16, and 24 Column Grid</li>
	<li>Simple and lightweight</li>
</ul>

<p><strong><a title="The Heads-Up Grid" href="http://bohemianalps.com/tools/grid/" target="_blank">The Heads-Up Grid</a></strong> by <a title="Jason Simanek - About" href="http://bohemianalps.com/about.php" target="_blank">Jason Simanek</a> - The Heads-Up Grid is an overlay grid for in-browser website development, built with HTML + CSS + JavaScript.</p>

<ul>
	<li>Available Properties: pageUnits (px, %), colUnits (px, %), gridonload (on, off), pagewidth (number in pageUnits), columns (number of columns), columnwidth (number in colUnits), gutterwidth (number in colUnits), pagetopmargin (number in pixels), rowheight (number in pixels), pageleftmargin (number in pageUnits), pagerightmargin (number in pageUnits).</li>
	<li>Easily customizable with Javascript.</li>
</ul>

<p><strong><a title="Adaptive Images" href="http://adaptive-images.com/" target="_blank">Adaptive Images</a></strong> by Matt Wilcox - Adaptive Images detects your visitor's screen size and automatically creates, caches, and delivers device appropriate re-scaled versions of your web page's embeded HTML images. No mark-up changes needed. It is intended for use with Responsive Designs and to be combined with Fluid Image techniques.</p>

<ul>
	<li>Why? Because your site is being increasingly viewed on smaller, slower, low bandwidth devices. On those devices your desktop-centric images load slowly, cause UI lag, and cost you and your visitors un-necessary bandwidth and money. Adaptive Images fixes that.</li>
	<li>Set-up - Add .htaccess and adaptive-images.php to your document-root folder. Add one line of JavaScript into the &lt;head&gt; of your site. Add your CSS Media Query values into $resolutions in the PHP file.</li>
	<li><a title="Adaptive Images - Details" href="http://adaptive-images.com/details.htm" target="_blank">Read More Details</a></li>
</ul>

<p>If you'd like to try some cool tools for testing out your layout without having to look at it on multiple devices, you may want to check out <a title="Screenfly" href="http://quirktools.com/screenfly/" target="_blank">Screenfly</a> by <a title="Quirk Tools" href="http://quirktools.com/" target="_blank">Quirktools</a> or <a title="Responsive by Matt Kersley" href="http://mattkersley.com/responsive/ " target="_blank">Responsive</a> by <a title="Matt Kersley" href="http://mattkersley.com/" target="_blank">Matt Kersley</a>. For some awesome inspiration on your next responsive project, <a title="Media Queries" href="http://mediaqueri.es/" target="_blank">Media Queries</a> is an amazing responsive-only website gallery - super handy.</p>

<p>If you have any responsive web design questions, feel free to throw up a comment, <a href="mailto:hello@boompah.com?subject=Responsive Framework Question">email me</a>, or tweet me <a href="http://twitter.com/gotboompah" target="_blank">@gotboompah</a>.</p>

<?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/common/footer.php";
   include_once($path);
?>