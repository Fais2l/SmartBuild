<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login Page</title>
    <link rel="stylesheet" href="../css/login.css">
    <!--sochal media icons-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <div class="forget-container">
        <h2>Reset password</h2>
        <form action="forget.php" method="post">
            <div class="input-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Enter your emaill" required>
            </div>
            <div class="home-page">
                <button type="button"><a href="index.php">Back to the Home Page</a></button>
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