<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="keywords" content="Abhi, Abhi GMbH" />
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Abhi GMbH </title>
    <!-- CSS stylesheets -->
    <link rel="stylesheet" href="../styles/mystyles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../styles/abouts.css">
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
    <header>
        <div id="navbar-container"></div>
        <nav class="horizontal">
            <ul>
                <!-- yet to add the link conditionally if the user is logged in, it shows his profile and if not it woill take user to its login page  -->
                <li><a href="customerDetails.php" class="profilePage"><i class="fa fa-user" aria-hidden="true"></i> Profile</a></li>
              </ul>
        </nav>
        
    </header>
    <!--    Navigation bar-->
    
    <div class="container">
    

    <div class="content">
    <button id="themebutton", onclick="toggleMode()">test</button>
    <article class="about">
        <h1>About Us</h1><br>
        <p><strong>Abhi GMbH.</strong> We are a small company created by the students of THI. </p>
        <p class = "aboutText">Welcome to Abhi GmbH, where craftsmanship meets passion and creativity. Inspired by a deep love for the art
            of woodworking, Abhi GmbH was born from the realization that wooden figures captivate people in a unique and
            timeless way. Each of our handcrafted wooden pieces is meticulously designed to reflect both quality and
            authenticity, combining the natural beauty of wood with artisanal skill. Our team of artisans dedicates
            hours to perfecting each figure, ensuring that every item is not only a beautiful addition to your home but
            also a long-lasting treasure. We pride ourselves on using sustainably sourced wood, celebrating nature's
            gifts while maintaining a commitment to environmentally responsible practices.
        </p>
        <p class = "aboutText">
        At Abhi GmbH, our customers' satisfaction is at the heart of what we do. We understand the importance of
        creating not just products but experiences; that's why we offer personalized customer service from the moment
        you browse our online store to the arrival of your unique piece. Whether you're looking to add a charming accent
        to your space or searching for a thoughtful gift, our collection of handcrafted wooden figures will speak to
        those who appreciate quality, artistry, and authenticity. Discover the beauty of wood with us - let Abhi GmbH
        bring a touch of warmth and elegance into your world..</p>
<hr>
        <!-- feature section  -->
        <section id="features">
            <div class="row">
                <div class="feature-box col-lg-4 col-md-12">
                    <i class="fa-solid fa-circle-check fa-4x"></i>
                    <h3>Easy to use.</h3>
                    <p>So easy to use, even your dog could do it.</p>
                </div>

                <div class="feature-box col-lg-4 col-md-12">
                    <i class="fa-solid fa-bullseye fa-4x"></i>
                    <h3>Elite Clientele</h3>
                    <p>We have all the crafted products that you could imagine.</p>
                </div>
                <div class="feature-box col-lg-4 col-md-12 ">
                    <i class="fa-solid fa-heart fa-4x"></i>
                    <h3>Guaranteed product</h3>
                    <p>Find the real crafted products or get your money back.</p>
                </div>
            </div>
        </section>

        <!-- team section  -->
        <h3>Team Members</h3>
        <hr>
        <div class="row team">
            <div class="feature-box col-lg-4 col-md-12">

                <img src="../images/Hindustan.jpg" alt="Hindustan" class="teamImg" />
                <h3>Abhishek(Abhi)</h3>
            </div>

            <div class="feature-box col-lg-4 col-md-12">

                <img src="../images/Ukraine.jpg" alt="Ukraine" class="teamImg" />
                <h3>Oleksandr(Alex)</h3>
            </div>
            <div class="feature-box col-lg-4 col-md-12 ">

                <img src="../images/Thailand.jpg" alt="Thailand" class="teamImg" />
                <h3>Ratapakorn(Riw)</h3>
                </ul>
            </div>
    </article>
    <hr>
    <div class="joinTeam">
        <h4>
            Wanna join our dynamic and diverse team?
           <a href="careerPage.php"> <button class="join"><i class="fa fa-users"></i> careers page  <i class="fa fa-external-link"></i></button></a>
        </h4>
    </div>
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
    </div>
    </div>

</body>

</html>
