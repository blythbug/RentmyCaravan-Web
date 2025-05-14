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
                    <li class="nav-item"><a href="index.php" class="nav-link active">Home</a></li>
                    <li class="nav-item"><a href="index.php#about" class="nav-link">About</a></li>
                    <li class="nav-item"><a href="registration.php" class="nav-link">Register</a></li>
                    <li class="nav-item"><a href="index.php#contact" class="nav-link">Contact Us</a></li>
                </ul>
            </div>


            <!-- Navigation bar toggle menu for mobile devices -->
            <div class="nav-toggle" id="nav-toggle">
                <i class='bx bx-menu'></i>
            </div>

        </nav>
    </header>

<!-- Login Form Section -->
<main class="login-section">
    <div class="login-entries">
		<h2>Login</h2>
			<form action="login_code.php" method="post">
			<input type="text" name="username" placeholder="Username" required>
			<input type="password" name="password" placeholder="Password" required>
			<button type="submit">Login</button>
		</form>
		<div class="login-links">
			<a href="registration.php" class="signup-link">New User?</a>
			<span>|</span>
			<a href="forgot-password.php" class="forgot-link">Forgot Password?</a>
		</div>
    </div>
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
    <script src="main.js"></script>



</body>
</html>

<!-- JAVA SCRIP SECTION -->

<script>

	// go to resitration_code to see list of error codes or see documentation registration section
	window.onload = function() {
		const urlParams = new URLSearchParams(window.location.search); //reads the URL and gets the error
		const error = urlParams.get('status');
		//all available popup error messages
		if (status == 'e0'){
			alert('Registration Successful, Please Log In');
		}else if (error == 'e1'){
			alert('Incorrect Credentials');
		}else if (error == 'e2'){
			alert('User Does Not Exist');
		}else if (error == 'e404'){
			alert('Fatal unknown error has occured');		
		}
	}
	
	
	const loginButton = document.getElementById('loginBtn');
    if (loginButton) {
        loginButton.addEventListener('click', function () {
            console.log('Login button was clicked');
            // You can also show an alert:
            // alert("Login button clicked!");
        });
    }
};
</script>
</script>

