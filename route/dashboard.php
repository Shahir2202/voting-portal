<?php
    session_start();
    if(!isset($_SESSION['userdata']))
    {
        header("location:../index.php");
    }

    $userdata=$_SESSION['userdata'];
    $groupdata=$_SESSION['groupdata'];
    if($_SESSION['userdata']['Status']==0)
    {
        $status='<b style="color:red">Not Voted</b>';
    }
    else
    {
        $status='<b style="color:green">Voted</b>';
    }
?>

<html>
    <head>
        <title>Online Voting-Dashboard</title>
        <link rel="stylesheet" href="../index.css">
        <style>
           #back{
            float:left;
            border-radius:5px;
            padding:8px;
            background-color: blue;
            color:white;
            font-size: 15px;
            cursor:pointer;
            margin:30px;
            width:70px;
           }
           #logout{
               float:right;
               border-radius:5px;
                padding:8px;
                background-color: blue;
                color:white;
                font-size: 15px;
                cursor:pointer;
                margin:30px;
                width:75px;
           }
           #profile{
               width:28%;
               padding:18px;
               background-color:bisque;
               margin:20px;
               float:left;
           }
           #profile #user{
               height:130px;
               width:130px;
               display:block;
               margin:auto;
           }
           #group{
                width:55%;
               padding:18px;
               background-color:bisque;
               margin:20px;
               float:right;
           }
           @media screen and (max-width:760px)
           {
               #profile{width:25%;}
               #group{width:50%};
           }
           #grpimg{
                height:110px;
               width:110px;
               float:right;
               margin:5px 30px;
           }
           #votebtn{
            width:75px;
            border-radius:5px;
            padding:8px;
            background-color: red;
            color:white;
            font-size: 15px;
            cursor:pointer;
            margin:12px 0px;
           }
           #voted{
            width:75px;
            border-radius:5px;
            padding:8px;
            background-color: green;
            color:white;
            font-size: 15px;
            cursor:pointer;
            margin:12px 0px;
           }
        </style>
    </head>
    
    <body class="page">
        <div class="heading">
            <a href="../index.php"><button id="back">Back</button></a>
            <a href="logout.php"><button id="logout">Logout</button></a>
            <h1>Voting System</h1>
        </div>
        <hr>
        
        <div id="profile">
            <img id="user" src="../uploads/<?php echo $userdata['Photo']?>"><br><br>
            <b>Name: </b><?php echo $userdata['Name'] ?><br><br>
            <b>Mobile: </b><?php echo $userdata['Mobile'] ?><br><br>
            <b>Address: </b><?php echo $userdata['Address'] ?><br><br>
            <b>Aadhar No. </b><?php echo $userdata['Aadhar'] ?><br><br>
            <b>Status: </b><?php echo $status ?>
        </div>
        <div id="group">
            <?php
                if(isset($_SESSION['groupdata']))
                {
                    for($i=0;$i<count($groupdata);$i++)
                    {
                    ?> 
                        <img id="grpimg" src="../uploads/<?php echo $groupdata[$i]['Photo']?>">
                        <b>Group Name: </b><?php echo $groupdata[$i]['Name']?><br><br>
                        <b>Votes: </b><?php echo $groupdata[$i]['Votes']?><br><br>
                        <form action="../actions/vote.php" method="POST">
                            <input type="hidden" name="gvotes" value="<?php echo $groupdata[$i]['Votes']?>">
                            <input type="hidden" name="gid" value="<?php echo $groupdata[$i]['Id']?>">
                            <?php
                                if($_SESSION['userdata']['Status']==0)
                                {
                                    ?>
                                   <input type="submit" value="Vote" id="votebtn" name="votebtn">
                                    <?php
                                }
                                else{
                                    ?>
                                     <button disabled id="voted">Voted</button>
                                    <?php
                                }
                                ?>
                        </form>
                        <hr><br><br>
                    <?php   
                    }
                }
                ?>
                
                
            
            
                    
                    
           
           
        </div>
        
    </body>
</html>