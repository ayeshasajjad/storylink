
<center>
	<div class="titlebox">
    <h1 class="maintitle"><?php echo $title; ?> | Admin</h1>
	</div>
	<h3 class="maintitle">What's your story?</h3>
	<?php echo form_open('Admin/create') ?>
	<table>
		<tr>
			<td align="right"><label>TITLE:</label></td>
			<td align="left"><input placeholder="Name your creation" type="text" name="title"></td>
		</tr>
		<tr>
			<td align="right"><label>CATEGORIES:</label></td>
			<td align="left"><input placeholder="Add related categories/tags" type="text" name="categories"></td>
		</tr>
		<tr>
			<td align="right"><label>CONTENT:</label></td>
			<td align="left"><textarea placeholder="Write your story" name="content"></textarea></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="submit" value="Create"></tr></td>
		</tr>
	</table>
	</form>


<h2 class="maintitle">Edit Posts</h2>
<table>
	<tr>
  <?php foreach($posts as $post): ?> 
   <td align="right"><a href="/~ccit1580/cct460/index.php/Admin/update/<?php echo $post['id']; ?>"><?php echo $post['title']; ?></a> | <a href="/~ccit1580/cct460/index.php/Admin/delete/<?php echo $post['id']; ?>">Delete Post</a></td>
</tr>
  <?php endforeach; ?> 
<td>
</table>

</br></br></br></br></br></ul>
</center>
