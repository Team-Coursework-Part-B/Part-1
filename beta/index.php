<!DOCTYPE html>
<head>
  <html lang="en">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Make-It-All Login</title>
  <link rel="stylesheet" href="login_page_style.css">
</head>
<body>

<script>
function validateForm() {
  let E = document.getElementById("email").value;
  let P = document.getElementById("password").value;
  if (!((E == "test@email.com" && P == "p") || (E == "manager@email.com" && P == "manager"))) {
    alert("Incorrect Email/Password");
    return false;
  }
}
</script>

<h1>Welcome to Make-It-All Ltd!</h1>
<p>Please Login Below</p>

<body class="MainForm" id="MainForm">
  <form method="post" action="page.php" onsubmit="return validateForm()">
  
    <div class="FormContainer">
      <label for="email"><b>Email</b></label>
      <br>
      <br>
      <input id ="email" type="email" placeholder="Enter Email" name="email" required>
      <br>
      <br>
      <label for="password"><b>Password</b></label>
      <br>
      <br>
      <input id="password" type="password" placeholder="Enter Password" name="password" required>
  
      
    </div>
  
    <div class="ButtonContainer">
      <button type="submit" class="LoginButton">Login</button>
    </div>
  </form> 
</body>

<body class="FormContainer">
<!--<form action="create_account.html" method="POST">-->
  <div class="ButtonContainer">
    <button type="submit" class="LoginButton" onclick="window.location.replace('create_account.html')">Create Account</button>
  </div>
</body>

</body>



</html>