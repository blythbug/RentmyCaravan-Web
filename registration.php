<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Renting made Simple | Rent my Caravan</title> <!-- Website title -->
    <link rel="stylesheet" href="style.css"> <!-- Link to style sheet-->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'> <!-- Icons used in the website -->
</head>



<!-- Navigation bar / nav in css -->
<body>
    <header class="l-header">
        <nav class="nav bd-grid">
            <div>
                <a href="#" class="nav-logo">Rent my Caravan   <i class='bx bxs-truck'></i></a>  <!-- Website name -->
            </div>

            <!-- Navigation bar options -->
            <div class="nav-menu" id="nav-menu"> 
                <ul class="nav-list">
                    <li class="nav-item"><a href="#home" class="nav-link active">Home</a></li>
                    <li class="nav-item"><a href="#about" class="nav-link">About</a></li>
                    <li class="nav-item"><a href="#contact" class="nav-link">Contact Us</a></li>
                </ul>
            </div>


            <!-- Navigation bar toggle menu for mobile devices -->
            <div class="nav-toggle" id="nav-toggle">
                <i class='bx bx-menu'></i>
            </div>

        </nav>
    </header>
	
	
<!-- registration entry boxes -->
 <main class="registration-section">
	<div class="registration-entries">
		<h2>Registration</h2>
			<form action="registration_code.php" method="post">
			<input type="text" name="firstname" placeholder="First Name" required>
			<input type="text" name="surname" placeholder="Surname" required>
			<input type="email" name="email" placeholder="Email" required>
			<input type="text" name="username" placeholder="Username" required>
			<input type="password" name="password" placeholder="Password" required>
			<input type="password" name="checkpassword" placeholder="Confirm Password" required>
			<label for="dob">Date of Birth:</label>
			<input type="date" id="dob" name="dob" required>
			<button type="submit">Register</button>
			<a href="login.php" class="signup-link">Existing User?</a>
	</div>
 </main>
 
<!-- core popup box -->
    <div id="reg_popup" class="reg_popup">
        <h2 id="reg_popup-message"></h2>
        <button class="close-btn" onclick="closePopup()">Close</button>
    </div>

    <div id="overlay" class="overlay"></div>

    <script>
        // Function to display the popup based on URL query parameter
        window.onload = function () {
            const params = new URLSearchParams(window.location.search);
            const status = params.get('status');

            if (status === 'success') {
                document.getElementById('popup-message').innerText = "Registration successful! Redirecting to login page...";
                document.getElementById('popup').style.display = 'block';
                document.getElementById('overlay').style.display = 'block';
                setTimeout(() => {
                    window.location.href = 'login.php'; // Redirect to login page after 3 seconds
                }, 3000);
            } else if (status === 'error') {
                document.getElementById('popup-message').innerText = "Registration failed! Please try again.";
                document.getElementById('popup').style.display = 'block';
                document.getElementById('overlay').style.display = 'block';
            }
        }

        // Function to close the popup box
        function closePopup() {
            document.getElementById('popup').style.display = 'none';
            document.getElementById('overlay').style.display = 'none';
        }
    </script>



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
    <script src="main.js"></script>



</body>
</html>
