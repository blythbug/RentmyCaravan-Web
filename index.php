<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Renting made Simple | Rent my Caravan</title> <!-- Website title -->
    <link rel="stylesheet" href="css/style.css"> <!-- Link to style sheet-->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'> <!-- Icons used in the website -->
</head>



<!-- Navigation bar / nav in css -->
<body>
    <header class="l-header">
        <nav class="nav bd-grid">
            <div>
                <a href="index.php#home" class="nav-logo">Rent my Caravan   <i class='bx bxs-truck'></i></a>  <!-- Website name -->
            </div>

            <!-- Navigation bar options -->
            <div class="nav-menu" id="nav-menu"> 
                <ul class="nav-list">
                    <li class="nav-item"><a href="#home" class="nav-link active">Home</a></li>
                    <li class="nav-item"><a href="#about" class="nav-link">About</a></li>
                    <li class="nav-item"><a href="registration.php" class="nav-link">Register</a></li>
                    <li class="nav-item"><a href="login.php" class="nav-link">Login</a></li>
                    <li class="nav-item"><a href="#contact" class="nav-link">Contact Us</a></li>
                </ul>
            </div>


            <!-- Navigation bar toggle menu for mobile devices -->
            <div class="nav-toggle" id="nav-toggle">
                <i class='bx bx-menu'></i>
            </div>

        </nav>
    </header>


<!-- Header and login button -->

    <main class="l-main">
        <section class = "home bd-grid" id="home">
            <div class = "home-data">
                <h1 class = "home-title">Renting Made <span class="home-title-color">Simple</span></h1>
          </div>
            <div class = "home-button">
               <a href="login.php" class="button">Let's go!</a>
          </div>

<!-- Sliding Images Gallery -->


            <div class="slider-wrap">
                <div class="slider-inner">
                    <div class="slider-item">
                        <!-- Images found in images folder / pls check if these work -->
                        <div class="slider-image" style="background-image: url(/images/caravan1.png)"></div>
                        <div class="slider-image slider-image-two" style="background-image: url(/images/caravan2.png)"></div>
                        <div class="slider-image slider-image-three" style="background-image: url(/images/caravan3.png)"></div>
                    </div>
                    <div class="slider-item">
                        <div class="slider-image" style="background-image: url(/images/caravan4.png)"></div>
                        <div class="slider-image slider-image-two" style="background-image: url(/images/caravan5.png)"></div>
                        <div class="slider-image slider-image-three" style="background-image: url(/images/caravan6.png)"></div>
                    </div>
                </div>
            </div>


        </section>


    <!-- About section -->

               <section class="about section" id="about">
            <h2 class="section-title">About</h2>
                <div>
                    <h2 class="about-subtitle">Welcome!</h2>
                    <p class="about-text">RentmyCaravan is your go-to platform for hassle-free caravan rentals. Whether you're planning a weekend escape, a long road trip, or simply want to try something new, we make it easy to find the perfect caravan for your adventure.

But we’re not just for travelers — if you own a caravan, you can list it on our platform and earn by sharing it with others. We connect caravan owners with renters in a secure, user-friendly space designed to make the process simple and rewarding for everyone.

At RentmyCaravan, we believe in making travel more flexible, affordable, and accessible — all while helping owners make the most of their vehicles. Start your journey with us today.</p>
                </div>
            </div>


            <!-- Contact email form-->

            <section class="contact section" id="contact">
                <h2 class="section-title">Contact</h2>

                <div class="contact-container bd-grid">
                    <form action="" class="contact-form">
                        <input type="text" placeholder="Name" class="contact-input">
                        <input type="email" placeholder="Email" class="contact-input">
                        <!-- Make text area for message adjustable-->
                        <textarea name="" id="" cols="0" rows="10" class="contact-input"></textarea>

                        <input type="button" value="Send" class="contact-button button">
                    </form>
                </div>
            </section>
    </main>


<!-- Website Footer -->

    <footer class="footer">
        <p class="footer-title">Rent my Caravan</p>

        <div class="footer-social">
            <i class='bx bxs-truck'></i></a>
        </div>

        <p>&#169; Something about Copyright here</p>
        <p>Images from Unsplash</p>
    </footer>




    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="js/script.js"></script>



</body>
</html>
