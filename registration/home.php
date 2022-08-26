<?php 

session_start();

if (isset($_SESSION['userid']) && isset($_SESSION['username'])) {

 ?>

<!DOCTYPE html>

<html>

<head>

    <title>HOME</title>

    <link rel="stylesheet" type="text/css" href="style.css">

</head>

<body>
<div align="center">

<div id="content">


     <h1 style="font-family: Algerian;color:orange">Hello, <?php echo $_SESSION['username']; ?></h1>
	 <h1 style="font-family: Algerian;color:drackbrown">Your  ID is: <?php echo $_SESSION['userid']; ?></h1>
        <br><br><br><br><br><br><br><br><br><br>
     <form method="POST" action="index1.php">
	 <button type="submit"  class="btn">Logout</button>
	 </form>
	 
	 
</div>
</div>

</body>

</html>

<?php 

}else{

     header("Location: index1.php");

     exit();

}

 ?>

