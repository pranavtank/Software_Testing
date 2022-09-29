 <html>
  <head>
  <title>Online Examination/feedback</title>
  </head>
<?php 
  include"header.php"
  ?>
  <form method="post" enctype="multipart/form-data">
<table align="center">
<div align="center">
	 <div style=" border-radius: 25px;
  border: 2px solid #73AD21;
  padding: 20px;
  width: 500px;
  height: 570px;
  border-color:blue;
   margin-top: 25px;
 margin-bottom: 25px;">   
<div class="feedback">
<h1 align="center">Feedback</h1>
<form action="" method="post" style="text-align:center;">
<input type="text" placeholder="User name" id="unm" name="unm" required><br/><br/>
<input type="email" placeholder="Email" id="email" name="email" required><br/><br/>
<input type="text" placeholder="Phone No" id="phno" name="phno" required><br/><br/>
<input type="text" placeholder="Contry" id="country" name="country" required><br/><br/>
<textarea placeholder="Suggestion" id="suggestion" name="suggestion" style="height:170px; width: 350px;" required></textarea><br/><br/>
<input type="Submit"name="Submit">

</table>
</form>
</body>
</html>

<?php
  include("connection.php");
  	if(isset($_REQUEST['Submit'])){
	   
		
		$unm=$_POST['unm'];
		$email=$_POST['email'];
		$phno=$_POST['phno'];
		
		$country=$_POST['country'];
	    $suggestion=$_POST['suggestion'];

		
		$iquery="insert into feedback(id,unm,email,phno,country,suggestion) values(NULL,'".$unm."','".$email."','".$phno."','".$country."','".$suggestion."')";
		
		$p1=mysqli_query($conn,$iquery)or die("Can't Insert".mysqli_error($conn));
		if($p1=1){
		  header("location: index.php? msg1=inserted");
		  }
		  if($p1=0){
		   echo"not inserted";
		   }
		   }
		   
?>
<?php
  include"footer.php"
  ?> 