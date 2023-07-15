<?php
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['username'])) {
    ?>
    <!DOCTYPE html>
    <html>
    <head>
        <title>HOME</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
    <h1>Hello, <?php echo $_SESSION['username']; ?></h1>
    <a href="logout.php">Logout</a>
    <?php
    // Check if the form is submitted
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['next'])) {
            $height = $_POST['height'];
            $weight = $_POST['weight'];

            if (empty($height) && empty($weight)) {
                echo "<p class='error-message'>Please enter your height and weight</p>";
            } elseif (empty($height)) {
                echo "<p class='error-message'>Please enter your height</p>";
            } elseif (empty($weight)) {
                echo "<p class='error-message'>Please enter your weight</p>";
            } else {
                $_SESSION['weight'] = $weight;
                $_SESSION['height'] = $height;
                header("Location: body_type.php");
                exit();
            }
        } elseif (isset($_POST['skip'])) {
            header("Location: body_type.php");
            exit();
        }
    }
    ?>

    <form action="" method="post">
        <div>
            <label for="height">Height</label>
            <input type="number" id="height" name="height">
        </div>

        <div>
            <label for="weight">Weight</label>
            <input type="number" id="weight" name="weight">
        </div>
        <button type="submit" name="skip">Skip</button>
        <button type="submit" name="next">Next</button>
    </form>
    </body>
    </html>
    <?php
} else {
    header("Location: index.php");
    exit();
}
?>