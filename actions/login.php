<?php
    session_start();
    include("connect.php");

    $name=$_POST['name'];
    $phone=$_POST['phone'];
    $password=$_POST['password'];
    $role=$_POST['voter'];
    $sql="select * from `user data` where Name='$name' and Mobile='$phone' and Password='$password' and Role='$role' ";
    $check=mysqli_query($con,$sql);

    if(mysqli_num_rows($check)>0)
    {
        $userdata=mysqli_fetch_array($check);
        $sql1="select * from `user data` where Role='Group'";
        $group=mysqli_query($con,$sql1);
        $groupdata=mysqli_fetch_all($group,MYSQLI_ASSOC);

        $_SESSION['userdata']=$userdata;
        $_SESSION['groupdata']=$groupdata;

        echo '
        <script>
            window.location="../route/dashboard.php";
        </script>';
    }
    else{
        echo '
        <script>
            alert("Invalid Credentials");
            window.location="../index.php";
        </script>';
    }

?>