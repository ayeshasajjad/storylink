<html> 
<link rel="stylesheet" type="text/css" href="/~ccit1580/cct460/assets/style.css">
<link href='http://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800' rel='stylesheet' type='text/css'>
  <body> 
  <title><?php echo $title; ?></title> 
<div class="header"><h1 class="footer-text">A.S. Blog | "The greatest enemy of knowledge is not ignorance, it is the illusion of knowledge." - Stephen Hawking</h1></div>
<!-- header ends here -->
<center>
<div class="wrapper">
	<div class="titlebox">
	<h1 class="maintitle"><?php echo $title; ?></h1></div>
	<div class="box">
		<?php foreach($posts as $post): ?>
			<h2><?php echo $post['title']; ?></h2>
			<p align="left"><?php echo $post['content']; ?></p>
			<p class="categories"><label><strong>Categories: </strong></label><?php echo $post['categories']; ?></p><hr>
		<?php endforeach; ?></br></br>
</center>
</div>
</div>
</div>


<!-- footer begins here -->
<div class="footer">
    <div class="container">
      <div class="row">
	            <h1 class="footer-text">A.S. Blog | Prepared for Professor Michael Jones | CCT460</h1>
      </div>
    </div>
  </div>