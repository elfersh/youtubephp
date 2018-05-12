<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title><?php echo APP_TITLE; ?></title>

<?php
		$patch_css = "lib/js/";
		$handle=opendir($patch_css);
		if($handle){
			while (false !== ($entry = readdir($handle)))  {
				if($entry!="." && $entry!=".."){
					$fullpath = $patch_css.$entry;
				if(!is_dir($fullpath)){
						echo "<script type='text/javascript' src='".APP_URL.$fullpath."'></script>";
					}
				}
			}
		closedir($handle);
		}
		?>
		<script src="<?php echo APP_URL; ?>lib\jquery_ui\jquery-ui.min.js"></script>
		<script src="<?php echo APP_URL; ?>lib/jquery/jquery.min.js"></script>
 	 <script src="<?php echo APP_URL; ?>lib/popper/popper.min.js"></script>
 	 <script src="lib/bootstrap/js/bootstrap.min.js"></script>
		<?php
    $patchjs = "lib/css/";
    		$handle=opendir($patchjs);
    		if($handle){
    			while (false !== ($entry = readdir($handle)))  {
    				if($entry!="." && $entry!=".."){
    					$fullpath = $patchjs.$entry;
    				if(!is_dir($fullpath)){
    						echo "<link rel='stylesheet' type='text/css' href='".APP_URL.$fullpath."' />";
    					}
    				}
    			}
    		closedir($handle);
    		}
	 ?>
	 <link rel="icon" href="<?php echo APP_URL; ?>lib/img/icon_yt.png">
	<link rel="stylesheet" href="<?php echo APP_URL; ?>lib/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo APP_URL; ?>lib\jquery_ui\jquery-ui.min.css">

 </head>
 <body id="body">
