<?php

?>

<div id="tagthis<?php echo $postid;?>">
	<a onclick="ajaxAddTag(42,42);">Click here to add tags</a>
	</div>
	<div id="tagadder<?php echo $postid;?>" style="visibility:hidden;">
	<form method="GET" action="<?php echo get_option('home');?>/wp-content/plugins/tagthis/backend.php">
	<input type="text" name="tag">
	<input type="hidden" value="<?php echo $postid; ?>" name="postid">
	<input type="submit" value="Tag!">
	</form>
	</div>
	