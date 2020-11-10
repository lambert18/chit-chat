<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Chit Chat</title>
        <link rel="stylesheet" href="styles/login.css">
    </head>
    <body>
      <!-- =======  HEADER  ======= -->
        <header>
            <div class="container">
                <div class="header-logo">
                    <img src="images/chit-chat-logo.png" width="100">
                    <div class="menu">
                        <ul>
                            <li><a href="index.php">Login</a></li>
                            <li><a href="#">Home</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>
      <!-- =======  End of HEADER  ======= -->

      <!-- =======  MAIN Content  ======= -->
        <div class="main">
            <div class="contact-form">
              <div class="form-title">LOG IN</div>
              <form method="post" action="index.php" onsubmit="return validateForm()">

                <!-- Input Username -->
                <div class="form-item">Username</div>
                <input id="un" type="text" name="username" required>

                <!-- Input Password -->
                <div class="form-item">Password</div>
                <input id="pw" type="password" name="password" required>
                <br>

                <!-- Submit Button -->
                <input type="submit" value="Login" onclick="loadpage()">
              </form>

              <!-- When user forgot the password, this link used for recovery password -->
              <div class="pass-forgot">
                <a href="#">Forgot password?</a>
              </div>

              <!-- For new member -->
              <div class="register">
                <p>Don't have an account? <a href="formRegister.php">Register now</a></p>
              </div>

            </div>
          </div>
          <?php
              include_once("db/db.php");

              $firstName = $_POST['firstName'];
              $lastName = $_POST['lastName'];
              $age = $_POST['age'];
              $username = $_POST['username'];
              $email = $_POST['email'];
              $date = $_POST['date'];
              $password = $_POST['password'];

              $query="INSERT INTO member (firstName,lastName,gender,username,email,born_date,password)
                      VALUES ('$firstName', '$lastName', '$age', '$username', '$email', '$date', '$password')";
              $result = mysqli_query($conn, $query);
          ?>
      <!-- =======  End of MAIN Content  ======= -->

      <!-- =======  FOOTER  ======= -->
        <footer>

        </footer>
      <!-- =======  End of FOOTER  ======= -->
    </body>
</html>