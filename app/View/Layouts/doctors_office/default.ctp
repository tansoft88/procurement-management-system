<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<?php echo $html->charset('UTF-8')?>
<meta name="description" content="#" />
<meta name="keywords" content="#" />
<meta name="author" content="#" />
<?php echo $html->css('cake.forms', 'stylesheet', array("media"=>"all" ));?>
<?php echo $html->css('doctors_office', 'stylesheet', array("media"=>"screen" ));?>
<title>CakePHP : The PHP Rapid Development Framework :: <?php echo $title_for_layout?></title>
</head>
<body>
<div id="banner">
  <div class="top_links clearfix" id="topnav">
    <ul>
      <li><a href="http://jigsaw.w3.org/css-validator/validator-uri.html">CSS</a></li>
	  <li><a href="http://validator.w3.org/">XHTML</a></li>
      <li><a href="http://www.oswd.org/">OSWD</a></li>
    </ul>
  </div>
  <?php echo $html->image('header_logo.jpg', array('alt'=>"pumpkin"))?>
  <div class="page_title"><span id="page_title">Culture Shock: doctors Office</span><br />
    i'm not really a doctor, but i did see one on t.v. once</div>
</div>
<div class="leftcontent" id="nav"> 
<?php echo $html->image('left_bg_top.gif', array('alt'=>"bg image", 'border'=>"0"))?>
  <ul>
    <li><a href="http://cakephp.org/">Cake PHP Home</a></li>
      <li><a href="http://manual.cakephp.org">Manual</a></li>
      <li><a href="http://api.cakephp.org/">API</a></li>
      <li><a href="http://bakery.cakephp.org">Bakery</a></li>
      <li><a href="https://trac.cakephp.org">Trac</a></li>
      <li><a href="http://cakeforge.org">CakeForge</a></li>
  </ul>
  <div class="left_news">
    <p>&nbsp;</p>
    <p><span class="news_title">News Area?</span><br />
      A little area for some news, links or perhaps a profile?</p>
    <p><span class="news_title">Note About Above Links</span><br />
	The left navigation links above show a small blue box on hover, at least they show up in anything other than IE (of course).</p>
	
	<p>The other browsers show them alright, except that there was a small lag in Opera, but the image showed up fine after that.</p>
	
	<p>It's not a huge deal, but i wanted to note it anyway. </p>
  </div>
</div>
<div id="centercontent">
<?php if ($this->controller->Session->check('Message.flash')) $this->controller->Session->flash(); ?>
<?php echo $content_for_layout?>
  <p><span class="squares"><span>&#8250;&#8250;</span></span> <span class="news_title_grn">You Might Feel Some Slight Discomfort</span></p>
  <p>I promised myself that I would take a bit more time with a design and pay some attention to detail and generate a more complete layout. Hopefully this design does that.</p>
	<p>Based on my <em>Candy Corn</em> design, I swapped out some colors and design elements so that I'd come up with a more benign, albeit business-like design that could be applied to almost anything looking for a fluid, 3-column layout.</p>
	<p>If you like the design and use it or even if you think it sucks, drop me a line at <a href="#">rkrause[at]dbfnetwork[dot]info</a> to let me know.</p>
	 
	
	
  <p><span class="squares"><span>&#8250;&#8250;</span></span> <span class="news_title_grn">A Healthy Dose of Web Geek Information</span></p>
    <p><em>Doctors Office</em> was tested in Windows with Firefox1.0.7, IE6.0, Netscape7.2 and Opera7.54 with valid css and xhtml 1.0-strict</p>
    <p>As is, download time for 56k is 4.10 seconds; ISDN 128K at 1.39 seconds; T1 at .30 seconds.</p>

    <p>A total of 10 images amount to just a touch over 9KB. The image of the doctor against the green background in the upper left corner (header_logo.jpg) can be swapped out with a blank, green background (header_logo.gif) if/when you apply the design to your own site. The .psd image files are included in the ZIP file so you can play around with them.</p>
	

	
	<p><strong>Un-Ordered List Example</strong></p>
  	<ul id="list">
  	<li>List Item</li>
	<li>List Item
		<ul>
		<li class="sub">Sub-List Item</li>
		<li class="sub">Sub-List Item</li>
		</ul>
	</li>
	<li>List Item</li>
  	</ul>
	
  <p><strong>Blockquote Example</strong></p>
  <blockquote><p>Just a small bit of text to give you an idea what the style of a blockquote is set to.</p></blockquote>	
	
	<div class="footer" id="footer">
	Copyright &copy; 2005 (-site name-)&nbsp;&nbsp;
	Design by <a href="#">pogy366</a> 
	
	</div>


</div>
<div id="rightcontent">
  <div class="right_news">
    <p><span class="news_title">Some More News?</span><br />
      Well, what do you know, another area for news, images or maybe a profile.</p>
    <div class="center">
      <p>
<?php echo $html->image('sample.jpg', array('alt'=>"sample image"))?>
</p>
    </div>
    <p><span class="news_title">Other Designs</span><br />
      Chack out <a href="http://www.oswd.org/userinfo.phtml?user=pogy366">my other designs</a> at OSWD.<br />
	  <a href=""></a></p>
	<p><span class="news_title">Can I say Something?</span><br /> 
	The CSS-related bugs in IE can be so frustrating and unending. Please, make the Internet a better place and use Firefox.</p>
	
	<p>There, I said it. </p>
  </div>
</div>
<p>
 CakePHP : <a href="http://www.cakefoundation.org/pages/copyright/">&copy; 2006 Cake Software Foundation, Inc.</a>
</p>
<a href="http://www.w3c.org/" target="_new">
 <?php echo $html->image('w3c_css.png', array('alt'=>"valid css", 'border'=>"0"))?>
</a>
<a href="http://www.w3c.org/" target="_new">
 <?php echo $html->image('w3c_xhtml10.png', array('alt'=>"valid xhtml", 'border'=>"0"))?>
</a>
<a href="http://www.cakephp.org/" target="_new">
 <?php echo $html->image('cake.power.png', array('alt'=>"CakePHP : Rapid Development Framework", 'border'=>"0"))?>
</a>

<?php echo $cakeDebug;?>

</body>
</html>
