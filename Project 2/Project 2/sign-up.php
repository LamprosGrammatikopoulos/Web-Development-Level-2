<?php
    session_start();
?>
<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale-1.0">
		<link rel="stylesheet" type="text/css" href="./styles/sign-up.css" />
		<link rel="stylesheet" type="text/css" href="./styles/navbar.css" />
		<script type="text/javascript" src="./scripts/quiz.js"></script>
		<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>   <!--Profile Icon-->
		<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
                <script type="text/javascript">
                                $(function(){
                                        $("#nav-placeholder").load("navbar.php");
                                });
                </script>
	</head>
	<body>
	 <!--===================================NavBar================================-->
         <div id="nav-placeholder">

        </div>
        <!--===================================Main================================-->
		<div class="row">
			<div class="col-6">
				
				<form  class="login" method="post" action="./php/CreateAccount.php" enctype="multipart/form-data">
					<h1>Create Account</h1>
					<input type="text" name="name" placeholder="Name" required />
					<input type="text" name="lastname" placeholder="Last name" required />
				
					<!-- Hmerominia--><input id="date1" type="date" name="date" required>
					<!-- Fylo-->
					<div class="radio">
						<input type="radio" name="sex" value="female" checked>
						<label  for="Female">Female</label>
				
						<input type="radio" name="sex" value="male" >
						<label for="Male">Male</label>
					</div>
						
					<input type="text" name="username" placeholder="Username"  />
					<input type="password" name="password" placeholder="Password" required />
					<input type="password" name="password1" placeholder="Confirm-Password" required />
					<input pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,62}$" type="email" name="email" placeholder="Email" required />
					<!-- Eikona-->
					<input type="file" id="img" name="uploadfile" accept="image/jpeg,image/png,image/jpg">
					
					<button type="submit" class="btn btn-white btn-animation-1">Create Account</button>

					<?php if( isset($_SESSION["SignUpErrors"])){ ?>
                            <p class="warning"><b><?php echo $_SESSION["SignUpErrors"] ?></b></p>
                    <?php } ?>
				</form>
			</div>
			

			<div class="col-6">
				<img src="./media/flag.png" >
			</div>
		</div>

		
	</body>
	</html>