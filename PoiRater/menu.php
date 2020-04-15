﻿<?php
session_start();
if (!isset($_SESSION['last_regeneration'])){
	$_SESSION['last_regeneration'] = 0;
}	
if (isset($_SESSION['username'])) {
    $usname = $_SESSION['username'];
    
    
} else {
    $usname = 'Guest';
    
}

if (++$_SESSION['last_regeneration'] >= 10) {
		
    $_SESSION['last_regeneration'] = 0;
		$_SESSION['visited']=0;
		$_SESSION['visited2']=0;
		
}
?>

<div class="w3-header blue">
	<p class="w3-right">Welcome <?php echo $usname;?><br>
		<?php
		if($usname=='Guest'){
		echo'<a href="#id01" class="w3-btn teal">Login</a><br>
		<a href="#id02">Εγγραφή</a><br>';}
	else{echo'<a href="logout.php">logout</a> </p>';}
		?>
  <h1>POIRATER</h1>
	</div>	
	<nav class="w3-topnav blue-d2">
	  <ul>
	    <li><a href="home.php">Αρχική</a></li>
	    <li><a href="mapsearch.php?poicat1=1&poicat2=2&poicat3=3&poicat4=4&poicat5=5">Αναζήτηση POI στον χάρτη</a></li>
	    <li><a href="searchpoi.php">Αναζήτηση POI</a></li>
	    <li><a href="top5.php">Top 5</a></li>
	    <?php
				if($usname!='Guest'){
				echo '<li><a href="addpoi.php">Καταχώρηση Νέου POI</a></li>';}
				?>
	    <li><a href="comm.php">Επικοινωνία</a></li>
	  </ul>
	</nav>
	<div id="id01" class="w3-modal">
  <div class="w3-modal-dialog">
    <div class="w3-modal-content w3-depth-3">
      <div class="w3-header teal"> 
        <a href="" class="w3-closebtn">&times;</a>
        <h4>Login</h4>
      </div>
      <div class="w3-container w3-center">
        <form name="formlog" id="formlog" action="index.php" method="post">
			<p class="text-black">Username<br><input required class="white" name="usr" id="usr" type="text"></p>
			<p class="text-black">Password<br><input required class="white" name="pass" id="pass" type="password"></p>
			<button type="submit" id="logbtn" name="logbtn" class="w3-btn w3-center teal">login</button>
			</form>	
      </div>
    </div>
  </div>
</div>
	<div id="id02" class="w3-modal">
  <div class="w3-modal-dialog">
    <div class="w3-modal-content w3-depth-3">
      <div class="w3-header teal"> 
        <a href="" class="w3-closebtn">&times;</a>
        <h4>Εγγραφή</h4>
      </div>
      <div class="w3-container w3-center">
     <form name="formreg" id="formreg" action="reg.php" method="post">
		<table class="text-black">
			<tr>
				<td>Username:</td>
				<td><input required name="usr" id="usr" type="text"></td>
			</tr>
			<tr>
				<td>Κωδικός:</td>
				<td><input required name="pas" id="pas" type="password"></td>
			</tr>
			<tr>
				<td>Επιβεβαίωση κωδικού:</td>
				<td><input required name="cpass" id="cpass" type="password" onkeyup="checkPass();" ></td>
			</tr>
			<tr>
				<td>Όνομα:</td>
				<td><input required name="name" id="name" type="text"></td>
			</tr>
			<tr>
				<td>Επίθετο:</td>
				<td><input required name="lastname" id="lastname" type="text"></td>
			</tr>
			<tr>
				<td>e-mail:</td>
				<td><input required name="email" id="email" type="email"></td>
			</tr>
			
			
		</table>
		<p class="text-black">Η συμπλήρωση όλων των πεδίων ειναι υποχρεωτική</p>
			<input class="w3-btn w3-center teal" type="submit" name="submit" id="submit" value="Εγγραφή"/>
			<input class="w3-btn w3-center teal-d3" type="reset" value="Καθαρισμός Πεδίων"/>
			
			</form>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
function checkPass()
	{
	    //Store the password field objects into variables ...
	    var pass1 = document.getElementById('pas');
	    var pass2 = document.getElementById('cpass');
	    //Store the Confimation Message Object ...
	    var message = document.getElementById('confirmMessage');
	    //Set the colors we will be using ...
	    var goodColor = "#66cc66";
	    var badColor = "#ff6666";
	    //Compare the values in the password field 
	    //and the confirmation field
	    if(pass1.value == pass2.value){
	        //The passwords match. 
	        //Set the color to the good color and inform
	        //the user that they have entered the correct password 
	        pass2.style.backgroundColor = goodColor;
	        document.getElementById("submit").disabled = false;
	        message.style.color = goodColor;
	        message.innerHTML = "Passwords Match!"
	        
	    }else{
	        //The passwords do not match.
	        //Set the color to the bad color and
	        //notify the user.
	        pass2.style.backgroundColor = badColor;
	        document.getElementById("submit").disabled = true;
	        message.style.color = badColor;
	        message.innerHTML = "Passwords Do Not Match!"
	        
	    }
	}  
</script>