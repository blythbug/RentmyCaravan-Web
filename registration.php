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
					<li class="nav-item"><a href="login.php" class="nav-link">Log in</a></li>
                    <li class="nav-item"><a href="index.php#contact" class="nav-link">Contact Us</a></li>
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

	// go to resitration_code to see list of error codes
	window.onload = function() {
		const parameteres = new URLSearchParams(window.location.search); //reads the URL and gets the error
		const error = parameteres.get('status');
		//all available popup error messages
		if (error == 'e0'){
			window.location.href = 'http://localhost/caravan_rental/login.php?status=pass';
		} else if (error == 'e15'){
			alert('Passwords do not match, Please Retry');
		}else if (error == 'e16'){
			alert('Please enter your real date of birth');
		}else if (error == 'e17'){
			alert('You must be 18+ to use this site');		
		}else if (error == 'e404'){
			alert('Fatal unknown error has occured');		
		}else if (error == 'e1101'){
			alert('email is an invalid email');		
		}else if (error == 'e1062'){
			alert('User/Email Already in use');	
		}else if (error == 'e1406'){
			alert('Exceeds Character Limit');	
		}
	}
</script>

