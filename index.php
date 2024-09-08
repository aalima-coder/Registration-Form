<h1>Registration Form</h1>
<style>
      h1{
      /* color:red; */
      text-align: center;
      /* background-color: orange; */
     font-size: 45px;
     

   }
</style>

<?php
if(isset($_POST['submit'])){

$name= $_POST['name'];
$email= $_POST['email'];
$password= $_POST['password'];
$query= "INSERT into user (name, email, password) VALUES ('$name','$email','$password')";
echo $query;
$run= mysqli_query($conn,$query);
if($run){
  echo "<script>";
  echo 'alert("Data Inserted")';
  echo "</script>";
  header("Location:login.php");
}else{
  echo "Something went wrong";
}
}else{
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Calculator</title>
</head>
<body>
<form action= "" method= "POST">
<label>Enter your Name:</label>
<input type="name" name="name" value=""><br><br>
<label>Enter your Email:</label>
<input type="email" name="email" value=""><br><br>
<label>Enter your Password:</label>
<input type="password" name="password" value=""><br><br>
<input type="submit" name="submit" value="Submit">
</form>
<?php }?>