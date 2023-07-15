<?php
session_start();
include "db_conn.php";

// Check if a file is uploaded
if (isset($_FILES['image_url'])) {
    $file = $_FILES['image_url'];

    // Check if there was no error during the upload
    if ($file['error'] === UPLOAD_ERR_OK) {
        // Generate a unique name for the uploaded file
        $filename = uniqid() . '_' . $file['name'];

        // Define the destination folder for the uploaded files
        $destinationFolder = 'uploads/';

        // Create the destination path
        $destination = $destinationFolder . $filename;

        // Move the uploaded file to the destination folder
        if (move_uploaded_file($file['tmp_name'], $destination)) {
            // File upload was successful
            echo "File uploaded successfully!";

            // Store the image URL in the database
            $stmt = $conn->prepare("UPDATE userinfo SET image_url = ? WHERE username = ?");
            $stmt->bind_param("ss", $destination, $_SESSION['username']);
            if ($stmt->execute()) {
                // Redirect to another PHP page
                header("Location: result.php");
                exit();
            } else {
                echo "Error storing the image URL in the database.";
            }
        } else {
            echo "Error moving the uploaded file.";
        }
    } else {
        echo "Error uploading the file.";
    }
}
?>