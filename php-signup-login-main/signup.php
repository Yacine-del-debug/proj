<!DOCTYPE html>
<html>
<head>
	<title>SIGN UP</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <form action="signup-check.php" method="post">
     	<h2>SIGN UP</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

        <?php if (isset($_GET['success'])) { ?>
            <p class="success"><?php echo $_GET['success']; ?></p>
        <?php } ?>

        <label for="username">Username</label>
        <?php if (isset($_GET['username'])) { ?>
            <input type="text" name="username" id="username" placeholder="Username" value="<?php echo $_GET['username']; ?>"><br>
        <?php } else { ?>
            <input type="text" name="username" id="username" placeholder="Username"><br>
        <?php } ?>

        <label for="email">Email</label>
        <?php if (isset($_GET['email'])) { ?>
            <input type="text" name="email" id="email" placeholder="Email" value="<?php echo $_GET['email']; ?>"><br>
        <?php } else { ?>
            <input type="text" name="email" id="email" placeholder="Email"><br>
        <?php } ?>

        <label for="age">Age</label>
        <?php if (isset($_GET['age'])) { ?>
            <input type="number" name="age" id="age" placeholder="Age" value="<?php echo $_GET['age']; ?>"><br>
        <?php } else { ?>
            <input type="number" name="age" id="age" placeholder="Age"><br>
        <?php } ?>

     	<label for="password">Password</label>
     	<input type="password" name="password" id="password" placeholder="Password"><br>

        <label for="repassword">Re-enter Password</label>
        <input type="password" name="password_hash" id="repassword" placeholder="Re-enter Password"><br>

     	<button type="submit">Sign Up</button>
        <a href="index.php" class="ca">Already have an account?</a>
     </form>
</body>
</html>