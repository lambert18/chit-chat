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
                            <li><a href="formLogin.php">Login</a></li>
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
              <div class="form-title">REGISTER</div>
              <form method="post" action="formLogin.php" onsubmit="return validateForm()">

                <!-- Input First Name -->
                <div class="form-item">First Name</div>
                <input type="text" name="firstName" required>

                <!-- Input Last Name -->
                <div class="form-item">Last Name</div>
                <input type="text" name="lastName" required>
                <br>
                <div class="form-item">Gender</div>
                    <div class="gender">
                    <select name="age">
                        <option value="select">Select Gender</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="other">Other</option>
                    </select>
                    </div>

                <div class="form-item">Username</div>
                <input type="text" name="username" required>
                <br>

                <div class="form-item">Email</div>
                <input type="email" name="email" required>
                <br>

                <div class="form-item">Born Date</div>
                <input type="date" name="date" required>

                <div class="form-item">Password</div>
                <input type="password" name="password" required>
                <br>

                <!-- Submit Button -->
                <input type="submit" value="Register" onclick="loadpage()">
              </form>

            </div>
          </div>
      <!-- =======  End of MAIN Content  ======= -->

      <!-- =======  FOOTER  ======= -->
        <footer>
            <div class="container">
                <div class="footer-logo">
                    <h4>&copy Copyright 2020</h4>
                    <div class="menu">
                        <ul>
                            <li><a href="#">ABOUT US</a></li>
                            <li><a href="#">CONTACT</a></li>
                            <li><a href="#">POLICY</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
      <!-- =======  End of FOOTER  ======= -->
    </body>
</html>