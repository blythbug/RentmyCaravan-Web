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
	
	

<!-- Add a new Caravan -->
 <main class="registration-section">
   
	<div class="registration-entries">
    
		<h2>Register a new Caravan</h2>
			<form action="registration_code.php" method="post">
        
			<input type="text" name="model" placeholder="Model" required>
        
			<input type="text" name="rental_cost" placeholder="Rental Cost" required>
        
      <label for="toilet"> Is there a toilet?</label><br>
		  <input type="checkbox" name="toilet">
        
       <label for="toilet"> Is there a kitchen?</label><br>
		  <input type="checkbox" name="kitchen">

      <label for="available_start">Rental Start Date:</label>
			<input type="date" name="available_start" required>
        
      <label for="available_end">Rental End Date:</label>
			<input type="date" name="available_end" required>
        
			<button type="submit">Add Caravan</button>

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
    <script src="js/script.js"></script>



</body>
</html>
