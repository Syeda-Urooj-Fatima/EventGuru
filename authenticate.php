 <?php
  
  session_start();
  if($_SERVER["REQUEST_METHOD"]=="POST")
  {
    $user=$_POST["log-username"];
    $pass=$_POST["log-password"];
    // $user=preg_replace('/\s+/', '', $user);
    // $pass=preg_replace('/\s+/', '', $pass);

    
  }
  $servername='localhost';
  $port='3306';
  $username='root';
  $password='';
  $database='signup';
  $conn= mysqli_connect($servername,$username,$password,$database,$port);
  if (!$conn)
  {
   die("Failed to connect to MySQL: " . mysqli_connect_error());
   header("Location:login.php");
  }

  $user = mysqli_real_escape_string($conn, $user);
  $pass = mysqli_real_escape_string($conn, $pass);
   $sql='SELECT * FROM Accounts Where UserName="'.$user.'" and Password="'.$pass.'" ';

  if($result=mysqli_query($conn,$sql))
  {
    if(mysqli_num_rows($result)>0)
    {
      $_SESSION["username"]=$user;
      $_SESSION["userinfo"]="correct";
      $row=mysqli_fetch_assoc($result);
      if($row["IsAdmin"]==1)
      {
        $_SESSION["admin"]=true;
      }
      header("Location:index.php");
      mysqli_free_result($result);
      mysqli_close($conn);
      exit();
    }
    else
    {
      header("Location:login.php");
      $_SESSION["userinfo"]="wrong";
  
    }
  }

?>