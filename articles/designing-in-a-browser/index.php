<?php include("../../header.php"); ?>

<h1>Designing in a Browser</h1>

<p>When designing a new layout, there's nothing I enjoy more than taking it to the next level visually in HTML &amp; CSS. Sometimes when I'm designing in Illustrator <em>(preferred)</em> or Photoshop, a certain element will work nicely at first but once I code it out, my opinion changes. This usually applies to things like typography, spacing, borders, color and other properties. When you're able to code out your layouts, it opens up another creative stage which allows for further refinements. What commonly happens when passing off a layout to a front-end developer,  is that it gets to a 95% complete phase, it looks great but for some reason it's missing something. It's usually just a matter of some extra attention to detail. I believe this final 5% heavily relies on the instincts of a designer to fully achieve their desired result. Most designers understand the art of massaging pixels to iron out visual blemishes which is translated to CSS.</p>

<p>The main role of front-end developers is to nail down a layout's functionality and focus on things like jQuery, AJAX and integrating interfaces into backend technologies. They create things like functions, arrays, loops, variables, databases, etc. to build solutions that work. Developers have the right to think in black and white, if something does what it's suppose to <em>(like a button with a function that adds an item to a shopping cart)</em>, their job is done. They shouldn't have to focus on things like typographic principles, spacing, colour, composition and emotion. That's the role of the designer and not something developers typically specialize in. Of course in an ideal world, having a developer with a great sense of a design is a huge blessing.</p>

<p>Another advantage to coding your layouts is that you'll have a better understanding of the do's and don'ts to avoid designing layouts that have annoying markup. When initiating the layout design process, I like to remove any technical barriers and let my mind run free on projects. Then once I have a foundation established, I envision coding it and how the layout will perform. When you have a good understanding of HTML &amp; CSS, you'll have these considerations in place early on and you'll design layouts that are a pleasure to code. You'll also be able to experience the beauty of  clean markup which may allow for huge visual updates by simply changing CSS in future releases. Sometimes it's a lot more effective to make rapid design changes in CSS rather than taking a screenshot and revising the layout in Photoshop/Illustrator.</p>

<p>For those of you working with responsive design techniques, you may have already experienced that it can be a lot easier to create layouts for other resolutions when you design them on the fly in CSS. By creating responsive HTML wireframes, you can see what the layout will look like when elements are scaled and the grid transforms. You can take advantage of tools like firebug or alternative CSS inspectors to apply your changes by pasting them into a text editor like <a title="Coda" href="http://www.panic.com/coda/" target="_blank">coda</a>. When working with responsive wireframes, it also allows you to design with Illustrator or Photoshop in parallel to CSS. Once you've finalized your graphics and implemented all your CSS into the wireframe, the layout is complete and ready for a hand off to developers or deployment.</p>

<p>With responsive grid systems becoming more common, there may be a notion that pixel perfect layouts are becoming irrelevant due to how layouts scale and elements are positioned. However, there's still a ton of room for pixel level refinements in margins, padding, line-height, letter spacing, etc. When final CSS tweaks are done by designers, it can avoid a ton of back and fourth $ with developers.</p>

<p><strong>Things to watch out for when a layout is being coded</strong></p>

<strong>Typography</strong>
<ul>
	<li>Headers that are too big for or too far away from the paragraph below them.</li>
	<li>Headers and paragraphs that are too close to borders or containers and don't allow room for the content to breath.</li>
	<li>Paragraphs that are too tight because the line height isn't set which messes up leading.</li>
	<li>Text that looks odd due to letter spacing not being set properly. It may look squished together and mess up kerning.</li>
	<li>Link styles that perform oddly - <em>ex: a menu link turns bold on hover which shifts other elements in an ugly fashion.</em></li>
	<li>Hover and active states aren't set which doesn't allow for user feedback. I believe that active states are equally important as hover states to give users a sense of feedback that they've pressed something.</li>
</ul>
<strong>Spacing - Margins and Padding</strong>
<ul>
	<li>Consistant spacing throughout page elements.</li>
	<li>Around the logo and header area of the layout, things can look different once they're actually in a browser. Padding and margins need to be set accordingly to make sure they look nice.</li>
	<li>The footer is too close to the bottom of the browser which makes it look tight, simply add more padding or margin.</li>
</ul>
<strong>Buttons</strong>
<ul>
	<li>Button text that is off center, usually due to padding not being set correctly.</li>
	<li>Gradients that look weird. I find gradients are such a delicate property and when you're making them with CSS3, it's essential that they look exactly like the intended result, or just use an image.</li>
	<li>Drop shadows that look weird. It's essential that the size of a drop shadow is set properly to accurately represent the shadowed element. The colour and transparency are also hugely important to ensure they look as realistic as possible.</li>
	<li>Border radius that is set too high when they should be something like 4 pixels. I find it works out nice when border radiuses are set to either 4px, 6px, 8px, or -- half the size of the height of the button to create a full rounded look. If you go in between 8px and half the height of the button, you'll probably land up with an awkward looking button.</li>
</ul>
<strong>Navigation</strong>
<ul>
	<li>Font sizes that aren't proportional to the background size - <em>ex: background is too small</em>.</li>
	<li>Padding isn't set properly and makes the text look lob-sided.</li>
	<li>Navigation is too big for the content.</li>
</ul>
<strong>Image compression</strong>
<ul>
	<li>Images look too compressed which definitely effects a users perception and the overall UX. Grainy images can sometimes do a great job of making a layout look cheap.</li>
	<li>Make sure to use PNGs instead of JPGs when you can.</li>
	<li><em>Side note: with the third generation iPad being released, I have a prediction there will eventually be a demand for a new image format that will perform better according to higher resolutions. Raster graphics might not survive as time goes on - web designers need a scalable image that can withstand high compression.</em></li>
</ul>
<strong>Link behaviour</strong>

<p>If you have a link there should be some kind of indication that it has been hovered so it gives you a sense of responsiveness and something clicks in a users head that they've moused over it. There's a zillion options for anchor CSS, I like when links have an underline appear on hover or, switching from one colour to another. For colour-based hovers, there should be a decent contrast between the two colours established. Going from a nice blue to orange, grey to red, red to blue, orange to pink, etc. When links don't contrast enough, it may effect the UX on monitors with weaker colour rendering capabilities. Although going from a lighter gray to a darker gray (or the other way around) may look great on your macbook pro, it might not be the case on a cheaper LCD monitor.</p>

<strong>Things to consider when designing an interface</strong>

<strong>Fonts</strong>
<ul>
	<li>Try to avoid any text that requires to be saved as an image.</li>
	<li>This may sound obvious but, always try to think beyond web-safe fonts.</li>
	<li>When selecting a font, consider tools like <a title="Type Kit" href="http://www.typekit.com" target="_blank">Typekit</a>, <a title="Google Font API" href="http://www.google.com/webfonts" target="_blank">Google Font Api</a>, <a title="Font Deck" href="http://fontdeck.com/" target="_blank">Font Deck</a>, <a title="Web Type" href="http://www.webtype.com/" target="_blank">Webtype</a>, and <a title="Font Face - Web Fonts" href="http://www.fontspring.com/fontface" target="_blank">Font Spring</a> so it's easy to integrate them into your CSS.</li>
	<li>@font-face is a great self-hosted option too - <em>make sure the font you select isn't black-listed</em>.</li>
	<li>Check out the <a title="Font Face Generator" href="http://www.fontsquirrel.com/fontface/generator" target="_blank">@font-face generator</a> to have your fonts converted as needed.</li>
</ul>
<strong>CSS3 &amp; jQuery</strong>
<ul>
	<li>Take advantage of CSS3 where you can rather than using images for effects. Of course this is within context, sometimes images are more ideal and just look better.</li>
	<li>If you're unfamiliar with the capabilities of CSS3, get yourself up to speed and research them: <a title="CSS3 info" href="http://www.css3.info/" target="_blank">CSS3 info</a>, <a title="CSS Tricks" href="http://css-tricks.com/" target="_blank">CSS Tricks</a>, <a title="W3 CSS" href="http://www.w3.org/TR/CSS/" target="_blank">W3C CSS</a>, <a title="Mozilla Developer Network - CSS" href="https://developer.mozilla.org/en/CSS" target="_blank">Mozilla Developer Network - CSS</a>.</li>
	<li>The same applies for jQuery, when you understand its capabilities it's a lot easier to design for them: <a title="jQuery" href="http://jquery.com/" target="_blank">jQuery</a>, <a title="Mozilla Developer Network - Javascript" href="https://developer.mozilla.org/en/JavaScript" target="_blank">Mozilla Developer Network - Javascript</a>.</li>
	<li>Also check out pre-made jQuery plugins. Often times they only require basic HTML and CSS tweaking for a ton of customization options.</li>
	<li>Avoid designing things that produce more code complexity than provide visual aesthetic value. I think it's important to keep this balance in mind.</li>
	<li>Refining CSS effects should be the work of a designer. This way your ideas will translate clearly through understanding the properties of each element.</li>
	<li>Provide accurate feedback when giving developers revisions, they'll love you for it. Giving pixel/em amounts rather than saying things like "more space above the header" might be more efficient.</li>
</ul>
<strong>Document your Photoshop or Illustrator files</strong>

<ul>
	<li>Document CSS and jQuery functionality, transitions, behaviours, etc.</li>
	<li>Think of functionality in advance as to how you'd like a layout to perform so you can present ideas early on.</li>
	<li>Create a list of behaviours and functionality<em> (technical specifications)</em> so developers can understand how to produce the desired result.</li>
	<li>Page architecture and SEO - Explain to your clients or team why the design decisions you've made will have a positive impact on SEO. <em>Things like keywords, page titles, content strategy, etc. A plan of action and vision early on is so important.</em></li>
	<li>Business goals and site objectives - Explain how your layout is aligned with the objectives and goals of the project. <em>Ex: how do your call to actions intend to convert users, promote find-ability, or assist navigating through the site?</em></li>
</ul>
<strong>Graphic design  for content</strong>

<p>All too often I see layouts that look awesome and then when you scroll down to the content or click through to the blog page, the design falls flat. Rather than focusing only on designing a killer layout, you may also want to propose ways to enhance the actual content of the site. For example on a blog, 10 awesome post graphics might go a lot farther than a beautiful background texture. As we all know, contextual content is a massive driving factor in marketing and making content more visual can add enormous value to the overall UX.</p>

<p>These are my thoughts on designing in a browser which I hope will be beneficial to both designers and developers. I feel it's important to raise awareness towards attention to detail on these topics to take your projects to the next level.</p>

<?php include("../../footer.php"); ?>