<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $weight = $_POST['weight'];
    $height = $_POST['height'];
    $goal = $_POST['goal'];
    $age = $_SESSION['age'];
    $experiencelevel = $_POST['experience_level'];
    
    $BMR = (10 * $weight) + (6.25 * $height) - (5 * $age) + 5;

    if ($experiencelevel === "Beginner" && $goal === "strength") {
        $gender = 1.1 * $BMR;
        $ci = 1.1 * $BMR;
        $pi1 = 1.2 * $weight;
        $pi2 = 1.7 * $weight;
    } elseif ($experiencelevel === "Intermediate" && $goal === "strength") {
        $gender = 1.55 * $BMR;
        $ci = 1.55 * $BMR;
        $pi1 = 1.2 * $weight;
        $pi2 = 1.7 * $weight;
    } elseif ($experiencelevel === "Experienced" && $goal === "strength") {
        $gender = 1.9 * $BMR;
        $ci = 1.9 * $BMR;
        $pi1 = 1.2 * $weight;
        $pi2 = 1.7 * $weight;
    } elseif ($experiencelevel === "Beginner" && $goal === "build_muscle") {
        $gender = 1.1 * $BMR + 0.2 * (1.1 * $BMR);
        $ci = 1.1 * $BMR;
        $pi1 = 0.8 * $weight;
        $pi2 = 2 * $weight;
    } elseif ($experiencelevel === "Intermediate" && $goal === "build_muscle") {
        $gender = 1.55 * $BMR + 0.2 * (1.55 * $BMR);
        $ci = 1.55 * $BMR;
        $pi1 = 0.8 * $weight;
        $pi2 = 2 * $weight;
    } elseif ($experiencelevel === "Experienced" && $goal === "build_muscle") {
        $gender = 1.9 * $BMR + 0.2 * (1.9 * $BMR);
        $ci = 1.9 * $BMR;
        $pi1 = 0.8 * $weight;
        $pi2 = 2 * $weight;
    } elseif ($experiencelevel === "Beginner" && $goal === "lose_weight") {
        $gender = 1.1 * $BMR - 0.2 * (1.1 * $BMR);
        $ci = 1.1 * $BMR;
        $pi1 = 1.6 * $weight;
        $pi2 = 2.2 * $weight;
    } elseif ($experiencelevel === "Intermediate" && $goal === "lose_weight") {
        $gender = 1.55 * $BMR - 0.2 * (1.55 * $BMR);
        $ci = 1.55 * $BMR;
        $pi1 = 1.6 * $weight;
        $pi2 = 2.2 * $weight;
    } elseif ($experiencelevel === "Experienced" && $goal === "lose_weight") {
        $gender = 1.9 * $BMR - 0.2 * (1.9 * $BMR);
        $ci = 1.9 * $BMR;
        $pi1 = 1.6 * $weight;
        $pi2 = 2.2 * $weight;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Calorie Intake Page</title>
    <style>
        h1 {
            font-family: "Forte", cursive;
            text-align: center;
        }
    </style>
</head>
<body>
    <center>
        <h1>Calorie Intake Page</h1>

        <?php if ($_SERVER['REQUEST_METHOD'] === 'POST') { ?>
            <p>Your estimated daily metabolic rate is <?php echo $ci; ?>calories </p>
            <p>This means that you need roughly <?php echo $gender; ?> calories a day to reach your goal.</p>
            <p>And your estimated daily protein intake ranges between <?php echo $pi1; ?> and <?php echo $pi2; ?> grams</p>
        <?php } else { ?>
            <p>No data available. Please submit the form.</p>
        <?php } ?>
    </center>
</body>
</html>