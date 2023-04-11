<html>

<head>
    <title>Online Voting-Registration Form</title>
    <link rel="stylesheet" href="../index.css">
    <style>
        #photo{
            width:600px;
            background-color: white;
        }
    </style>
</head>

<body class="page">
    <header>
        <h1>Voting System</h1>
    </header>
    <div class="container">
        <h2>Register Account</h2>
        <form action="../actions/register.php" method="POST" enctype="multipart/form-data">
            <input type="text" name="name" id="name" placeholder="Enter Your Group/Voter Name"><br>
            <input type="text" name="phone" id="phone" placeholder="Enter Your Mobile Number"><br>
            <input type="text" name="aadhar" id="aadhar" placeholder="Enter Your Aadhar Number"><br>
            <input type="text" name="address" id="address" placeholder="Enter Your Address"><br>
            <input type="password" name="password" id="password" placeholder="Enter Your Password"><br>
            <input type="password" name="cpassword" id="cpassword" placeholder="Confirm Your Password"><br>
            <input type="file" name="photo" id="photo"><br>
            <select name="voter" id="voter">
                <option value="group">Group</option>
                <option value="voter">Voter</option>
            </select><br>
            <button id="btn" type="submit">Register</button>
        </form>
        <p>Already have an account?   <a href="../index.php">Login</a></p>
    </div>
   
</body>

</html>