
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Vibroarthrography</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0"/> 
<link rel="apple-touch-icon" href="favicon-114.png" />
<meta name="apple-mobile-web-app-capable" content="yes" /><!-- hide top bar in mobile safari-->
<!--<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" /> translucent top bar -->
<!--<link rel="stylesheet" type="text/css" media="screen" href="style.css" />-->
<link rel="shortcut icon" href="/favicon.ico">
<link rel="stylesheet" type="text/css" href="main.css">
</head>

<body>

	<div id="wrap">
	
	
		<div id="main">
		
			<div class="header">
				
				<a class="left" href="?">Back</a>
				<h1 class="title">Vibroarthrography</h1>
				<a class="right" href="?">Next</a>
				
			</div><!--header-->
			
			<div class="content">
			
				<h2 class="title">Patient's data</h2>
				<div class="box-white">
					<p>Mr. Some One<span class="detail">Details here</span><span>Edit</span></p>
					<p>Mr. Some One<span class="detail">Details here</span><span>Edit</span></p>
					<p>Mr. Some One<span class="detail">Details here</span><span>Edit</span></p>
					<p>Mr. Some One<span class="detail">Details here</span><span>Edit</span></p>
				</div><!--box-white-->

				<h2 class="title2">Heading second</h2>			
<p><?php
//run puthon script
$output = null; 
exec('python VAG_FEsignalplots_15me.py', $output, $return); 

//print output, just for testing
print_r($output); 
print_r($return); 
echo"<br \>";

//display the output picture
echo '<img src="test.png">';
?></p>
				<h2 class="title">Sensors data</h2>
				<div class="box-white">
					<p>Parameter 1<span>Value</span></p>
					<p>Parameter 2<span>Value</span></p>
					<p>Parameter 3<span>Value</span></p>
					<p><a href="?">PNG picture<span>Show<span class="arrow">&gt;</span></span></a></p>
					<!-- some more fields
					<p>Foo <span>Bar</span></p>
					<p>Lorem ipsum <span><a href="?">Click only this</a></span></p>
					-->
				</div><!--box-white-->
				
				
				<table>
					<thead>
						<tr><th>Table heading</th><th>Tweets</th><th>Following</th><th>Followers</th></tr>
					</thead>
					<tbody>
						<tr><td><a href="?">@xaviesteve</a></td><td><a href="?">Click</a></td><td>131</td><td>195</td></tr>
						<tr><td>@xaviesteve</td><td>622</td><td><a href="?">Click</a></td><td>195</td></tr>
						<tr><td>@xaviesteve</td><td>622</td><td>131</td><td><a href="?">Click</a></td></tr>
					</tbody>
				</table>
				
				<p class="note">You can follow me on Twitter for updates on this template at <a href="http://www.twitter.com/xaviesteve">@xaviesteve</a>.</p>
						
				<h2 class="title">Heading first</h2>

				<div class="box-white">
					<p class="center">Centered text in a white box</p>
				</div><!--box-white-->
				
		
				
				<p><input type="submit" class="button red" value="Delete Account" /></p>
							
			</div><!--content-->
		
		</div><!--main-->
	
	
	
	
	
		<div id="sidebar">
			
			<div class="header">
				<p class="title">iOS web app template</p>
			</div><!--header-->
			
			<div class="content">
				
				<ul class="nav">
					<li><a href="?"><span class="ico msg"></span>Normal item</a></li>
					<li><a href="?" class="active"><span class="ico msg"></span>Active section</a></li>
					<li><a href="?"><span class="ico msg"></span>Red circle<span class="info">5</span></a></li>
					<li><a href="?"><span class="ico msg"></span>Status indicator <span>On</span></a></li>
				</ul>

				<!--
				<p>iPad/iPhone template by <a class="strong" href="http://xaviesteve.com/">Xavi Esteve</a> made in pure HTML and CSS (without requiring JavaScript) that works perfectly on any modern browser. It uses responsive queries to hide the sidebar in iPad portrait mode and in the iPhone (you can disable that easily if you want to).</p>
				<p>The code has been developed so that there is no "divitis", completely optimized and minimal HTML code. There are no images or animations at all, everything has been coded using the latest CSS3 available features. Ready to download and start developing. These are some of the template's features:</p>
				<p><strong>App-ready:</strong> You can install this template as a normal app, removing the Safari top navigation bar and enjoying the full screen.</p>
				<p><strong>Responsive:</strong> Hides the sidebar in iPhone, mobiles and iPad portrait mode.</p>
				<p><strong>Heading styles:</strong> Two different heading styles: the main black one and the smaller blueish.</p>
				<p><strong>Anchor texts (links):</strong> The whole clickable area is active so that even fat fingers can click comfortably.</p>
				<p><strong>Scrollable:</strong> Both the sidebar and the main content can be scrolled separately.</p>
				<p><strong>Tables:</strong> Fully flexible and liquid tables that allow you to include more information while keeping the same look and feel as in any Apple app.</p>
				<p><strong>Forms:</strong> Fillable text and password fields, select dropdowns and buttons.</p>
				<p><strong>Tested in:</strong> iPhone 4, iPhone 3GS, iPad 2, Safari 5, Chrome 16 and Firefox 9.</p>
				<p><strong>License:</strong> Public Domain. It is free to use (commercially too) and you do not need to give me credits although I would appreciate them. It'll make my day if you send me a link to your creation.</p>
				<p>To download the most recent version of this template visit <a class="strong" href="http://xaviesteve.com/2899/ipad-iphone-mobile-html-css-template-for-web-apps/">xaviesteve.com</a>.</p>
				-->
			</div><!--content-->
			
		</div><!--sidebar-->
	
		
		

	</div><!--wrap-->


<!--<script type="text/javascript" src="script.js">-->
</body>
</html>
