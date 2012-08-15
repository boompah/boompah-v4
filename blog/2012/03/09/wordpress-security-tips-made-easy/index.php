<?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/common/header.php";
   include_once($path);
?>

<h1>Wordpress Security Tips Made Easy</h1>

<p><em>photo by: <a title="David Goehring - Lock Photo" href="http://www.flickr.com/photos/carbonnyc/2294144289/" target="_blank">David Goehring</a></em></p>

<p>I had all of my Wordpress(WP) sites taken down around 6 or 7 months ago by a hacker that knew some old school Wordpress vulnerabilities. Luckily I was able to instantly launch a temporary landing page and then begun searching the depths of <a title="Wordpress Security" href="https://www.google.com/#hl=en&amp;sugexp=pfwe&amp;gs_nf=1&amp;tok=gw6DW5LvH85nu2oz0rfTeQ&amp;cp=14&amp;gs_id=1i&amp;xhr=t&amp;q=wordpress+security&amp;pf=p&amp;sclient=psy-ab&amp;oq=wordpress+secu&amp;aq=0&amp;aqi=g4&amp;aql=f&amp;gs_sm=&amp;gs_upl=&amp;gs_l=&amp;pbx=1&amp;bav=on.2,or.r_gc.r_pw.r_cp.r_qf.,cf.osb&amp;fp=6b8f6c2ef22f8dde&amp;biw=1456&amp;bih=837" target="_blank">Google</a>. After reviewing a ton of articles and trying a bunch of different tools and scripts, here are the most important tips that worked for me.</p>

<ol>
	<li>Make sure you're running the latest version of Wordpress.</li>
	<li>Add secret keys on Wordpress cookies: <a title="Wordpress Security Key" href="https://api.wordpress.org/secret-key/1.1/" target="_blank">https://api.wordpress.org/secret-key/1.1/</a> in wp-config.php.</li>
	<li><strong>./</strong>  +  <strong>wp-admin/</strong>  +  <strong>wp-content/</strong> should have <strong>755</strong> file permission and <strong>wp-includes</strong> should have <strong>555</strong> permission. <em>This can easily be set through FTP.</em></li>
	<li>Due to the WordPress architecture, it's not possible to block all directories. The main directory to block is wp-includes/. You can do this by adding the following line to .htaccess:
RewriteRule ^(wp-includes)\/.*$ ./ [NC,R=301,L]To block further directories, separate each directory with a pipe like so:
RewriteRule ^(wp-includes|another-dir)\/.*$ ./ [NC,R=301,L]
Source: <a title="semlabs.co.uk" href="http://semlabs.co.uk/journal/how-to-stop-your-wordpress-blog-getting-hacked" target="_blank">semlabs.co.uk</a>.</li>
	<li>Install the <a title="BulletProof Security" href="http://wordpress.org/extend/plugins/bulletproof-security/" target="_blank">BulletProof Security</a> plugin.</li>
	<li>Block search engine spiders from indexing the admin section by adding this to the robots.txt file on the root of the directory.
#
User-agent: *
Disallow: /cgi-bin
Disallow: /wp-admin
Disallow: /wp-includes
Disallow: /wp-content/plugins/
Disallow: /wp-content/cache/
Disallow: /wp-content/themes/
Disallow: */trackback/
Disallow: */feed/
Disallow: /*/feed/rss/$
Disallow: /category/*</li>
	<li><strong>Move the config data</strong>
a. Copy the contents of wp-config.php.
b. Create a new file in the wp-includes directory (e.g. wp-includes/conf-secret-name.php) and paste the entire contents of wp-config.php into it.
c. Require the location of the new config location:
Add: &lt;?php require_once( 'wp-includes/conf-secret-name.php' ); ?&gt; to your original wp-config.php located on the root.</li>
	<li>If you're managing a lot of content and are concerned about public wifi, you can use SSL with the <a title="Wordpress HTTPS" href="http://wordpress.org/extend/plugins/wordpress-https/" target="_blank">WordPress HTTPS (SSL)</a> plugin. I haven't used this yet but I might in the future.</li>
</ol>

<p>For an awesome guide on how to ban users, prevent anyone but you accessing your admin folder, how to prevent directory browsing, protecting your wp-config.php file, protecting your wp-content folder, protecting individual files and even protect your .htaccess file. Check out: <a title="Protect your WordPress site with .htaccess by Paul Maloney" href="http://www.netmagazine.com/tutorials/protect-your-wordpress-site-htaccess" target="_blank">Protect your WordPress site with .htaccess by Paul Maloney</a></p>

<p>Update (05/19/2012): For whatever reason, my site has been running slow lately. I've decided to cut down on the amount of plugins that I'm using. For security, I am now only using BPS security which I think will do just fine.</p>

<?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/common/footer.php";
   include_once($path);
?>