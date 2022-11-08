<!DOCTYPE html>
<head>
    <html lang="en">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, intital-scale=1">
        <title>Make-It-All Create Account</title>
        <link rel="stylesheet" href="create_account.css">
</head>

<script src = "create_account.js"></script>

<body class="form" id="form">
    <form action="page.html" method="POST">
        <div class="FormOutline">
            <ul class="list">
                <li><h1>Welcome to <br> Make-It-All Ltd!</h1></li>
                <li><p>Please fill out the following form to create your account...</p></li>
                <li><input type="text" id="name" placeholder="Full Name" required></li>
                <li><input type="text" id="email" placeholder="Email Address" required onkeyup="existing_check()"></li>
                <li><input type="password" id="password" placeholder="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}"
                    title="Must contain at least one number and one uppercase and lowercase letter. Must also be at least 6 or more characters." 
                    required onkeyup="check()"></li>
                <li><input type="password" id="confirm_password" placeholder="Confirm Password" required onkeyup="check()"></li>
                <span id="email_message"></span>
                <br>
                <span id="password_message"></span>
                <!-- Didn't know whether we needed a separate option for admin/user ...
                    <li><label for="option">Choose an option:</label> <select name="option" id="option"> 
                    <option value="Admin">Admin</option>
                    <option value="User">User</option>
                </select></li> -->
                <li><input type="submit" value="SUBMIT"></li>
            </ul>
        </div>
    </form>
    </body>
</html>