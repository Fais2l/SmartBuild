<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <link rel="stylesheet" href="../css/sginin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <div class="signin-container">
        <h2>Creat Account</h2>
        <form action="signin.php" method="post">

            <div class="input-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username"placeholder="Enter your username" required>
            </div>

            <div class="input-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Enter your emaill" required>
            </div>

            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Enter your password" required>
            </div>

            <div class="input-group">
                <label for="password">Confirm Password</label>
                <input type="password" id="conpassword" name="conpassword" placeholder="Enter your Password again" required>
            </div>
            
            <div class="agree">
                <input type="checkbox">
                  <h5>Agree all the</h5>
                <h5><a href="https://policies.google.com/terms?hl=en-US">Ruls</a></h5>
            </div>
            <div class="Sign-in">
                <button type="submit">Creat Now</button>
            </div>
            
            
            <!--social media icons html-->

          
            <div class="social-icons">
                <a href="https://www.whatsapp.com" target="_blank" class="whatsapp">
                    <i class="fab fa-whatsapp"></i>
                </a>
                <a href="https://twitter.com/yourusername" target="_blank" class="twitter">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="mailto:wlcfaisall@gmail.com" target="_blank" class="Email">
                    <i class="fa-solid fa-envelope"></i>
                </a>
            </div>
            
        </form>
    </div>
</body>
</html>