﻿<!DOCTYPE html>
<html>
	<head>
	<link rel="shortcut icon" type="image/x-icon" href="images/fav.ico" />
	<title>Αρχική</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="w3full.css"/>
	
	<script src="http://code.jquery.com/jquery-1.8.2.min.js" type="text/javascript"></script>
		<script src="jquery.carouFredSel-6.0.4-packed.js" type="text/javascript"></script>
		<script type="text/javascript">
			$(function() {
				$('#carousel').carouFredSel({
					responsive: true,
					scroll: 1,
					items: {
						width: 300,
						height: '66%',
						visible: {
							min: 2,
							max: 5
						}
					}
				});
			});
		</script>
	<style type="text/css">
	
				
			#carousel img {
				height: auto;
				border: none;
				display: block;
				float: left;
				padding: 0 10px;
			}
			
			
		</style>
	</head>
	<body>
		<div class="blue">
		<?php include 'menu.php';?>
		</div>
		<div class="w3-header w3-large blue-d4">
			Αρχική
		</div>
	 
				<div id="carousel" class="photobanner" style="margin:3px">
					<?php
						$folder = 'uploads/';
						$filetype = '*.jpg';
						$files = glob($folder.$filetype);
						$count = count($files);
						for ($i = 0; $i < $count; $i++) {
					echo "<img src='".$files[$i]."' alt='' width='600' height='400' />";
				}
				?>
					
					
				
				</div>
		
		<div class="w3-container w3-xxlarge">
		<p>
		To <b>POIRATER</b> είναι μια διαδικτυακή εφαρμογή, που έχει ως σκοπό να
προβάλει τις καλοκαιρινές διακοπές και τις δυνατότητες διασκέδασης σε
διάφορους προορισμούς σε όλη την Ελλάδα και οχι μόνο , χρησιμοποιώντας
κατά κύριο λόγο την εμπειρία των ίδιων των χρηστών/επισκεπτών της
εφαρμογής.
		</p>   
		<p>Οι επισκέπτες μας μπορούν να περιηγηθούν ελεύθερα στο site, να αναζητήσουν
<b>poi (Point Of Interest)</b>, να δουν τα πιο δημοφιλή, καθώς και να κάνουν like
στο αγαπημένο τους. Οι χρήστες έχουν την δυνατότητα να εισάγουν το δικό
τους αγαπημένο προορισμό ή μαγαζί.</p> 
		</div>
		
		

	</body>
</html> 
