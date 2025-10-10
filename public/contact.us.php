<?php include '../Includes/header.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/home.css">
    <title>Contact Us</title>
</head>
<body>

<main>

 <section class="Contact-Us" id="Contact-Us">
       <div class="contact-tital">
          <h1>Contact Us</h1>
          <p>We are always happy to hear from you.</p>
       </div>
       <form action=".">
          <div class="input-group">
             <label for="yourname">Have a question? Do not hesitate ask us now!</label>
             <input type="text" name="yourname" id="yourname" placeholder=" Inter Your Name">
          </div>
          <div class="input-group">
             <input type="text" name="email" id="email" placeholder=" Inter Your Email">
          </div>
          <div class="input-group">
             <textarea name="message" rows="10" cols="30" placeholder="Write Here.."></textarea>
          </div>
          <div class="send">
             <input type="submit" value="send">
          </div>
       </form>
    </section>






</body>
</html>
<?php include '../Includes/footer.php'?>