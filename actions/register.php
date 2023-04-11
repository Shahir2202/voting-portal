<?php
    include('connect.php');
    $name=$_POST['name'];
    $phone=$_POST['phone'];
    $aadhar=$_POST['aadhar'];
    $address=$_POST['address'];
    $password=$_POST['password'];
    $cpassword=$_POST['cpassword'];
    $image=$_FILES['photo']['name'];
    $tmp_name=$_FILES['photo']['tmp_name'];
    $role=$_POST['voter'];
    
    if($password!=$cpassword)
    {
        echo '
            <script>
                alert("Password and Confirm Password does not match!");
                window.location="../route/registration.php";
            </script>';
        
    }
    else
    {
        move_uploaded_file($tmp_name,"../uploads/$image");
        $sql="insert into `user data` (Name,Mobile,Aadhar,Address,Password,Role,Status,Votes,Photo)
              values('$name','$phone','$aadhar','$address','$password','$role',0,0,'$image')";
        $result=mysqli_query($con,$sql);
        if($result)
        {
            echo '
            <script>
                alert("Registration Successfull!");
                window.location="../";
            </script>';
            
        }
        else
        {
            echo '
            <script>
                alert("Some Error Occured!");
                window.location="../route/registration.php";
            </script>';
        
        }
              
    }
    
?>