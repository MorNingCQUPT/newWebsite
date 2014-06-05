<?php
	$htmlData = '';
	$selected = $_POST['selectArea'];
	if (!empty($_POST['content'])) {
		if (get_magic_quotes_gpc()) {
			$htmlData = stripslashes($_POST['content']);
		} else {
			$htmlData = $_POST['content'];
		}
	}
?>
	<?php echo $selected." ".$htmlData; ?>