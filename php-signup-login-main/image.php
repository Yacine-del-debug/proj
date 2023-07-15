<!DOCTYPE html>
<html>
<head>
    <title>Upload a picture</title>
    <meta charset="UTF-8">
</head>
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

        
        button[type="submit"] {
            background-color: #4caf50;
            border: none;
            border-radius: 5px;
            color: #ffffff;
            padding: 10px 20px;
            margin-top: 20px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
<body>

    
    <h1>Upload a Picture:</h1>

<p>The photos collected will be anonymous, stored securely. 
and not used for any other purpose than to support the project and 
create a dataset for future projects. If you do not wish to share a photo
Please press the skip button.</p>

<form action="upload.php" method="post">
<input type="file" id="image_url" name="image_url" accept="image/*">

<button type="submit">Next</button>
  </form>
<a href="result.php">
<button type="submit">Skip</button></a>
          		


</body>
</html>