<!DOCTYPE html>

<html>

<head>

    <title>LOGIN</title>

    <link rel="stylesheet" type="text/css" href="style.css">

</head>

<body>
<br><br><br><br><br><br>
<br>
<div align="center">

<div id="content">


     <form action="login.php" method="post">

        <h2  style="font-family: Algerian;color:green;">LOGIN<br><br><br></h2>

        <?php if (isset($_GET['error'])) { ?>

            <p class="error"><?php echo $_GET['error']; ?></p><br><br>

        <?php } ?>

        <label> User---ID :</label>

        <input type="text" name="userid" placeholder="User ID" class="cap" size="25"><br><br><br><br>

        <label>User Name :</label>

        <input type="text" name="username" placeholder="User Name" class="cap" size="25"><br><br><br><br> 

        <button type="submit" class="btn">Login</button>

     </form>
        </div>
        </div>
     <form method="POST" action="registration.php">
	 <button type="submit"  class="btn" value="exit">Exit</button>
	 </form>

</body>

</html>