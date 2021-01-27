<!DOCTYPE html>
<html>
<head>
	<title>Membuat Login Multi User Level Dengan PHP dan MySQLI</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h1>Membuat Login Multi User Level Dengan PHP dan MySQLi<br/>SMKN 7 BALEENDAH</h1>
<?php
  if(isset($_GET['pesan'])){
  	  if($_GET['pesan']=="gagal"){
  	  	  echo "<div class='alert'>Username dan password tidak sesuai !</div>";
  	  }
  }
?>
<div class="kotak_login">  
     <p class="tulisan_login">Silahkan login</p>
     <from action="cek_login.php"method="post">
    <tr> 
         <br><label>Username</label></br>
             <input type="text" nama="Username" class="form_login" placeholder="Username.." required="required">
    </tr>
    <tr>
         <br><label>Password</label></br>
             <input type="password" name="password" class="form_login" placeholder="password.." required="required">
    </tr>
    <tr>
         <br><input type="submit" class="tombol_login" value="LOGIN"></br>
    </tr>
       
       </form>
</div>       
</body>
</html>