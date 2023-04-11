<html>
<head>
    <title>Online Voting Portal</title>
    <link rel="stylesheet" href="index.css">
</head>

<body class="page">
    <header>
        <h1>Voting System</h1>
    </header>
    <div class="container">
        <h2>Login</h2>
        <form action="actions/login.php" method="POST">
            <input type="text" name="name" id="name" placeholder="Enter Your Group/Voter Name"><br>
            <input type="text" name="phone" id="phone" placeholder="Enter Your Mobile Number"><br>
            <input type="password" name="password" id="password" placeholder="Enter Your Password"><br>
            <select name="voter" id="voter">
                <option value="group">Group</option>
                <option value="voter">Voter</option>
            </select><br>
            <button id="btn" type="submit">Login</button>
        </form>
        <p>Don't have an account?   <a href="route/registration.php">Register here</a></p>
    </div>
   
</body>

</html>