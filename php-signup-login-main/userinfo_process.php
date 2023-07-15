<?php
session_start();
include "db_conn.php";

function generateAnswer($age, $bodyType, $experienceLevel, $goal, $option)
{
    if ($age > 40 && $bodyType === 'Stocky' && $experienceLevel === 'Intermediate' && $goal === 'build_muscle') {
        if ($option === 'workoutplan') {
            return 'page1.php';
        } elseif ($option === 'regimenplan') {
            return 'page11.php';
        }
    } elseif ($age < 40 && $bodyType === 'Skinny fat' && $experienceLevel === 'Beginner' && $goal === 'lose_weight') {
        if ($option === 'workoutplan') {
            return 'page2.php';
        } elseif ($option === 'regimenplan') {
            return 'page21.php';
        }
    } elseif ($age < 40 && $bodyType === 'Muscular' && $experienceLevel === 'Experienced' && $goal === 'strength') {
        if ($option === 'workoutplan') {
            return 'page3.php';
        } elseif ($option === 'regimenplan') {
            return 'page31.php';
        }
    } elseif ($option === 'calintake') {
        return 'page111.php';
    }
    
    return '';
}

if (isset($_SESSION['age']) && isset($_SESSION['id']) && isset($_SESSION['username'])) {
    $age = $_SESSION['age'];
    $username = $_SESSION['username'];

    if (
        isset($_POST['weight']) && isset($_POST['height'])
        && isset($_POST['body_type']) && isset($_POST['experience_level']) && isset($_POST['goal']) && isset($_POST['result'])
    ) {
        $weight = $_POST["weight"];
        $height = $_POST["height"];
        $bodyType = $_POST["body_type"];
        $experienceLevel = $_POST["experience_level"];
        $goal = $_POST["goal"];
        $option = $_POST["result"];
        $file = isset($_POST["image_url"]) ? $_POST["image_url"] : "";

        $stmt = $conn->prepare("INSERT INTO userinfo (username, weight, height, body_type, experience_level, goal, image_url, age, result)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");

        if (!$stmt) {
            die("SQL error: " . $conn->error);
        }

        $stmt->bind_param(
            "sssssssis",
            $username,
            $weight,
            $height,
            $bodyType,
            $experienceLevel,
            $goal,
            $file,
            $age,
            $option
        );

        if ($stmt->execute()) {
            $redirectPage = generateAnswer($age, $bodyType, $experienceLevel, $goal, $option);
            if (!empty($redirectPage)) {
                header("Location: $redirectPage");
                exit();
            } else {
                echo "No matching conditions found for redirection.";
            }
        } else {
            echo "Error executing the SQL statement: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "Required form fields are not set.";
    }
} else {
    echo "Age is not set in the session.";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Automatic Form Submission</title>
</head>
<body>
    <form id="myForm" action="page111.php" method="post">
        <!-- Your input fields here -->
        <input type="hidden" name="weight" value="<?php echo isset($weight) ? $weight : ''; ?>">
        <input type="hidden" name="height" value="<?php echo isset($height) ? $height : ''; ?>">
        <input type="hidden" name="goal" value="<?php echo isset($goal) ? $goal : ''; ?>">
        <input type="hidden" name="experience_level" value="<?php echo isset($experienceLevel) ? $experienceLevel : ''; ?>">
        <button type="submit">Submit</button>
    </form>
    <script>
        document.getElementById('myForm').submit();
    </script>
</body>
</html>