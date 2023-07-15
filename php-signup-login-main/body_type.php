
<!DOCTYPE html>
<html>
<head>
    <title>Choose your body type</title>
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

        button img {
            width: 100px;
            height: 100px;
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
    <h1>Choose your body type</h1>

    <?php
    session_start();

    // Check if the form is submitted
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Retrieve the selected body type from the form data
        if (isset($_POST['body_type'])) {
            $BodyType = $_POST['body_type'];
            $_SESSION['body_type'] = $_POST['body_type'];

            // Do something with the selected body type, such as storing it in a database or performing further processing
            // For demonstration purposes, we'll just display a message with the selected body type
            echo "<p>You selected: $BodyType</p>";
            header("Location: experience_level.php");
            exit();
        } else {
            echo "<p class='error-message'>Please select a body type.</p>";
        }
    }
    ?>

    <form action="" method="post">
        <div>
            <button name="body_type" value="Slender">
                <img src="">
            </button>
            <button name="body_type" value="Skinny fat">
                <img src="">
            </button>
            <button name="body_type" value="Stocky">
                <img src="">
            </button>
        </div>
        <div>
            <button name="body_type" value="Trapezoid">
                <img src="">
            </button>
            <button name="body_type" value="Muscular">
                <img src="">
            </button>
            <button name="body_type" value="Overweight">
                <img src="">
            </button>
        </div>
        <div>
            <button name="body_type" value="Obese">
                <img src="">
            </button>
        </div>
        <button type="submit">Next</button>
    </form>
</body>
</html>