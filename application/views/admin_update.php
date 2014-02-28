
<html> 
<link rel="stylesheet" type="text/css" href="/~ccit1580/cct460/assets/style.css">
<link href='http://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800' rel='stylesheet' type='text/css'>
  <body>
<head> 
  <title><?php echo $title; ?></title> 
</head> 
 <div class="header"><h1 class="footer-text">A.S. Blog | "The greatest enemy of knowledge is not ignorance, it is the illusion of knowledge." - Stephen Hawking</h1></div>
<div class="wrapper"> 
<div class="titlebox">
	<h1 class="maintitle"><?php echo $title; ?> | Admin</h1></div>
	<center>
		<?php foreach($post as $p): ?> 
		  <?php echo form_open('Admin/update_post/' . $p['id']) ?></br>
		    <table>
				<tr>
					<td align="right"><label>TITLE:</label></td> 
					<td align="left"><input type="text" name="title" value="<?php echo $p['title']; ?>"> </td>
				</tr>
				<tr>
					<td align="right"><label>CATEGORIES:</label></td>
				    <td align="left"><input type="text" name="categories" value="<?php echo $p['categories']; ?>">  </td>
				</tr>
				<tr>  
				    <td align="right"><label>CONTENT:</label></td>
				    <td align="left"><textarea name="content"><?php echo $p['content']; ?></textarea></td>
				</tr>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="submit" value="Save"> </tr></td>
				</tr>
			</table>
		</form> 
	<?php endforeach; ?>
</center>

</div>
<div class="footer">
    <div class="container">
      <div class="row">
	            <h1 class="footer-text">A.S. Blog | Prepared for Professor Michael Jones | CCT460</h1>
      </div>
    </div>
  </div>