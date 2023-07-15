<!DOCTYPE html>
<html>
<head>
    <title>Choose your experience level</title>
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
        // Retrieve the selected experience level from the form data
        if (isset($_POST['experience_level'])) {
            $experienceLevel = $_POST['experience_level'];
            $_SESSION['experience_level'] = $experienceLevel;

            // Do something with the selected experience level, such as storing it in a database or performing further processing
            // For demonstration purposes, we'll just display a message with the selected experience level
            
            header("Location: goal.php");
            exit();
        } else {
            echo "<p class='error-message'>Please select your experience level</p>";
        }
    }
    ?>

    <h1>Choose your experience level</h1>

    <form action="" method="post">
        <div>
            <button name="experience_level" value="Beginner">Beginner</button>
            <button name="experience_level" value="Intermediate">Intermediate</button>
            <button name="experience_level" value="Experienced">Experienced</button>
        </div>
        <button type="submit">Next</button>
    </form>

</body>
</html>