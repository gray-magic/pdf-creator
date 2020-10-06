<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PDF Creator</title>
    <link href="theme.css" rel="stylesheet">
  </head>
  <body >
	
	<?php
		require_once("collector.php");
		$collector = new collector();
	?>

	<a id="export" href="#" onclick="Export_PDF(); return false;">Exporter en PDF</a>
	<input type="hidden" id="max" value="<?php echo $collector->Get_Max(); ?>" />
  
  <div class="target">
		<?php echo $collector->Get_Images(); ?>
	</div>		

  <div class="preview">
    <img id="maximize" src="" />
  </div>
	

	<script src="jquery_3_1_1.js"></script>
    <script type="text/javascript" src="jspdf.min.js"></script>
    <script type="text/javascript" src="init.js" defer></script>
   
  </body>
</html>