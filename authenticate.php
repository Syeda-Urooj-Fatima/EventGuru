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
  $username='admin1';
  $password='admin1';
  $database='event_gru';
  $conn= mysqli_connect($servername,$username,$password,$database,$port);
  if (!$conn)
  {
    die("Failed to connect to MySQL: " . mysqli_connect_error());
    header("Location:login.php");
  }

  $user = mysqli_real_escape_string($conn, $user);
  $pass = mysqli_real_escape_string($conn, $pass);
  //echo "<script>console.log('YES')</script>";
  $sql='SELECT * FROM Accounts Where UserName="'.$user.'"';

  if($result=mysqli_query($conn,$sql))
  {
    //echo "<script>console.log('YES')</script>";
    if(mysqli_num_rows($result)>0)
    {
      $row=mysqli_fetch_assoc($result);
      $pass1=$row["Password"];
      if($row["IsAdmin"]==1)
      {
        //echo "<script>console.log('YES')</script>";
        if($pass==$pass1)
        {
          $_SESSION["username"]=$user;
          $_SESSION["userinfo"]="correct";
          $_SESSION["admin"]=true;
          header("Location:index.php");
          mysqli_free_result($result);
          mysqli_close($conn);
          exit();
        }

        else
        {
          header("Location:test.php");
          $_SESSION["userinfo"]="wrong";
        }
      }

      else
      {
        if(password_verify($pass, $pass1)) {
          $_SESSION["username"]=$user;
          $_SESSION["userinfo"]="correct";
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
      
    }

    else
    {
      header("Location:login.php");
      $_SESSION["userinfo"]="wrong";

    }
  }

?>