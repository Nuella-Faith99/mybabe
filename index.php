<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
        
    <div class="parent">
        <div class="side">
        </div>
            <div class="mee">
    <fieldset>
    <form action="" method="post">
        
    <?php

        include("db_conn.php"); 
        error_reporting("E_ALL");
        if (isset($_REQUEST["submit"])){
        $fullname=$_REQUEST["fullname"];
        $phone=$_REQUEST["phone"];
        $email=$_REQUEST["email"];
        $dob=$_REQUEST["dob"];
        
             $sql= "INSERT INTO love (fullname, phone, email, dob) VALUES ('$fullname','$phone','$email','$dob')";
             mysqli_query($conn,$sql) or die (mysqli_error($conn));
                    $num=mysqli_insert_id($conn);
                    if(mysqli_affected_rows($conn)!=1){
                    $message= "Error inserting into DB";
                    }
       
        echo "<script> alert('your registration was successful')
        location.href='thankyou.php'</script>";
    } 
    
    ?>
    <legend>My Baby</legend> <br>
    

    <label for="">Fullname</label> <br>
    <input type="text" name="fullname" placeholder="fullname" class="babe" required> <br> <br>  <br>

    <label for="">Date of birth</label> <br>
    <input type="date" name="dob" placeholder="dateofbirth" class="babe" required> <br><br><br>

    <label for="">Phone</label> <br>
    <input type="number" name="phone" placeholder="0000000" class="babe" required> <br>  <br> <br>

    <label for="">Email Address</label> <br>
    <input type="email" name="email" placeholder="Email" class="babe" required> <br> <br> <br>
    
    <input type="submit" value="SUBMIT" name="submit"class="btn" required onclick ="return confirm('Are you sure you want to submit this form')">
    </form>
    </fieldset>
            
        </div>
    </div>
</body>
</html>