<?php
    session_start();
    include("connect.php");

    $votes = $_POST['gvotes'];
    $total_votes= $votes+1;
    $gid = $_POST['gid'];
    $uid = $_SESSION['userdata']['Id'];

    $update_votes = mysqli_query($con, "update `user data` set Votes='$total_votes' where Id='$gid'");
    $update_status = mysqli_query($con, "update `user data` set Status=1 where Id='$uid'");

    if($update_status and $update_votes){
        $sql="select * from  `user data` where Role='Group'";
        $group = mysqli_query($con,$sql);
        $groupdata = mysqli_fetch_all($group, MYSQLI_ASSOC);
        $_SESSION['groupdata'] = $groupdata;
        $_SESSION['userdata']['Status'] = 1;
        echo '<script>
                    alert("Voting successfull!");
                    window.location = "../route/dashboard.php";
                </script>';
    }
    else{
        echo '<script>
        alert("Voting Failed! Try After Some Time");
        window.location = "../route/dashboard.php";
        </script>';
    }
    
?>