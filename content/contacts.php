<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="keywords" content="Abhi, Abhi GMbH, Abhi registration" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Abhi GmbH</title>
    <link rel="stylesheet" href="../styles/mystyles.css">
    <link rel="stylesheet" href="../styles/abouts.css">
    <link rel="stylesheet" href="../styles/login.css">
    <link rel="stylesheet" href="../styles/registration.css">
    <link rel="stylesheet" href="../styles/themeButton.css">
    <script
        src="../JS_files/darkmode.js" defer>
    </script>
<script
        src="../JS_files/navbar.js" defer>
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
</head>

<body>
    <!--    Navigation bar-->
    <div class="container">
    <div id="navbar-container"></div>

    </div>




    <div class="mainContainer">
        <button id="themebutton", onclick="toggleMode()">test</button>
        <i class="fas fa-headset fa-3x" style=" margin-bottom: 10px;"></i>

        <h1 style="font-family: cursive">Contact form!</h1>
        <p style="margin-bottom: 5%;"> This enables our users to freely provide feedbacks and also any queries that
            needs to be assisted. Our support team will reach out to you as early as possible!</p>


        <div class="input-container">
            <i class="fas fa-envelope"></i>
            <input type="email" placeholder="Enter your email" class="input-field" />
        </div>
        <div class="input-container">
            <i class="fas fa-file-lines"></i>
            <input type="text" placeholder="Query subject" class="input-field" />
        </div>

        <div class="input-container">
            <i class="fas fa-regular fa-book"></i>
            <textarea type="text" placeholder="Query" class="input-field" rows="5" ></textarea>
        </div>

        <button class="btn">Send
            <i class="fas fa-paper-plane" style="color: aliceblue; margin-left: 5%;"></i></button>
        <br>
        <a href="about.php" class="register">Go back / cancel !</a>
        <div class="topFooter">
            <div class="footer-item">
                <i class="fas fa-gauge" style="color: #333;"></i>
                <span>Fast response</span>
            </div>
            <div class="footer-item">
                <i class="fas fa-users" style="color: #333;"></i>
                <span>Free assistance</span>
            </div>
            <div class="footer-item">
                <i class="fas fa-hand" style="color: #333;"></i>
                <span>Reliable and easy</span>
            </div>
        </div>
    </div>
    <!-- <footer>
      Abhi GMbH &#8226 Esplanade 10, Ingolstadt &nbsp;85049 &#8226 704-555-1151
  </footer> -->

    <!-- footer icons  -->
    <div class="icons">
        <i class="cls fa-brands fa-instagram"></i>
        <i class="cls fa-brands fa-facebook"></i>
        <i class="cls fa-brands fa-twitter"></i>
        <i class="cls fa-solid fa-envelope"></i>
    </div>
    <footer>
        Abhi GMbH &#8226 Esplanade 10, Ingolstadt &nbsp;85049 &#8226 704-555-1151
    </footer>

</body>

</html>