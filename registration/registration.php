<?php 
include('config.php');
extract($_POST);

if(isset($save))
{
$sql=mysqli_query($al,"select * from user where username='$username'");

$r=mysqli_num_rows($sql);

if($r==true)
{
$err= "<font color='red'><h3 align='center'>This username already exists</h3></font>";
}
else
{
$query="insert into user values('$userid','$username')";
mysqli_query($al,$query);

$err="<font color='blue'><h3 align='center'>Registration successfull !!<h3></font>";

}
}

?>

<html>
    <head>
    <link href="style.css" rel="stylesheet" type="text/css">
</head>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<div align="center">
<div id="content">

		<form method="post" enctype="multipart/form-data">
		<table class="table" >
	<caption><h2 style="font-family: Algerian">Registration Form<br><br><br></h2></caption>
	<Tr>
		<Td colspan="2"><?php echo @$err;?>
    <br></Td>
	</Tr>	
				<tr>
					<td>User ID :<br><br></td>
					<Td><input  type="text" name="userid" class="cap" size="25" required/><br><br></td>
				</tr>
                
                <tr>
					<td>User Name : <br><br><br></td>
					<Td><input  type="text" name="username" class="cap" size="25" required/><br><br><br><br></td>
				</tr>
				
				<tr>          
                
                <br>
                <br>
                    <Td colspan="2" align="center">
                    <input type="submit" value="Save" class="btn" name="save"/>
                    
                    <input type="reset" value="Reset" class="btn"/>
					
	</td>
                    <br>         
                  
				</tr>
			</table>

		</form>
		</div>
		</div>
		<form method="POST" action="index1.php">
	 <button type="submit"  class="btn" value="login">Login</button>
	 </form>

	</body>
</html>