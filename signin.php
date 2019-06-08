
<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass,'registration');

if(isset($_POST['signin'])){
  $email=$_POST['email'];
  $pass=$_POST['pass'];


  if($email==''||$pass==''){
    echo "<script>alert('Please fill all the fields')</script>";
  }else{
  $query="select * from user where email='$email' and password='$pass'";
  $result=mysqli_query($conn,$query);
  $num=mysqli_num_rows($result);

  if($num==1){
    $_SESSION['username']=$email;
    header('Location:success.php');
  }else{

    header('Location:login.html');
  }
}

mysqli_close($conn);
?>
