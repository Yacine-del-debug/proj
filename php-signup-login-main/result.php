<!DOCTYPE html>
<html>
<head>
    <title>Choose your main goal</title>
    <meta charset="UTF-8">
    <style>
        /* CSS styles here */
    </style>
</head>
<body>
    <h1>Choose your main goal</h1>

    <?php
    session_start();
    $weight = $_SESSION['weight'];
    $height = $_SESSION['height'];
    $bodyType = $_SESSION['body_type'];
    $experienceLevel = $_SESSION['experience_level'];
    $goal = $_SESSION['goal'];
    $option = $_SESSION['result'];
    $file = $_SESSION['image_url'];

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['result'])) {
            $option = $_POST['result'];
            $_SESSION['result'] = $option;

            // Do something with the selected goal option, such as storing it in a database or performing further processing
            // For demonstration purposes, we'll just display a message with the selected goal option
            echo "<p>You selected: $option</p>";
            header("Location: userinfo_process.php");
            exit();
        }
    }
    ?>

    <form action="userinfo_process.php" method="post">
        <div>
            <button name="result" value="workoutplan">Workout Plan</button>
            <button name="result" value="regimenplan">Regimen Plan</button>
        </div>
        <div>
            <button name="result" value="calintake">Calorie Intake</button>
        </div>
        <input type="hidden" name="weight" value="<?php echo $weight; ?>">
        <input type="hidden" name="height" value="<?php echo $height; ?>">
        <input type="hidden" name="body_type" value="<?php echo $bodyType; ?>">
        <input type="hidden" name="experience_level" value="<?php echo $experienceLevel; ?>">
        <input type="hidden" name="goal" value="<?php echo $goal; ?>">
        <input type="hidden" name="image_url" value="<?php echo $file; ?>">

        <button type="submit">Submit</button>
    </form>

</body>
</html>