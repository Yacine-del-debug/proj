
<!DOCTYPE html>
<html>
<head>
    <title>Choose your main goal</title>
    <meta charset="UTF-8">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f1f1f1;
            margin: 0;
            padding: 20px;
        }

        h1 {
            text-align: center;
        }

        form {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 30px;
        }

        div {
            display: flex;
            justify-content: center;
            margin-bottom: 10px;
        }

        button {
            display: flex;
            flex-direction: column;
            align-items: center;
            background-color: #ffffff;
            border: none;
            border-radius: 5px;
            padding: 10px;
            margin: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #e0e0e0;
        }


        button:focus {
            outline: none;
        }

        button::-moz-focus-inner {
            border: 0;
        }

        button[type="submit"] {
            background-color: #4caf50;
            color: #ffffff;
            padding: 10px 20px;
            margin-top: 20px;
            transition: background-color 0.3s ease;
        }

        button[type="submit"]:hover {
            background-color: #45a049;
        }

        .error-message {
            color: red;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <?php
    session_start();

    // Check if the form is submitted
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Retrieve the selected goal from the form data
        if (isset($_POST['goal'])) {
            $goal = $_POST['goal'];
            $_SESSION['goal'] = $goal;

            // Do something with the selected goal, such as storing it in a database or performing further processing
            // For demonstration purposes, we'll just display a message with the selected goal
            
        } else {
            echo "<p class='error-message'>Please select your goal</p>";
        }
        header("Location: image.php");
        exit();
    }
    ?>

    <h1>Choose your main goal</h1>

    <form action="" method="post">
        <div>
            <button name="goal" value="lose_weight">Lose Weight</button>
            <button name="goal" value="strength">Gain Strength</button>
        </div>
        <div>
            <button name="goal" value="build_muscle">Build Muscle</button>
        </div>
        <button type="submit">Next</button>
    </form>
</body>
</html>