<?php
include "../../koneksi.php"; // Include your database connection file.

// Check if the 'nis' parameter exists in the POST request.
if(isset($_POST['nis'])) {
    $nis = $_POST['nis'];

    // Use prepared statements to prevent SQL injection.
    $stmt = mysqli_prepare($koneksi, "SELECT * FROM siswa WHERE nis = ?");
    
    if ($stmt) {
        mysqli_stmt_bind_param($stmt, 's', $nis); // Assuming 'nis' is a string.

        // Execute the prepared statement.
        if (mysqli_stmt_execute($stmt)) {
            $result = mysqli_stmt_get_result($stmt);
            
            if ($result) {
                $data = mysqli_fetch_assoc($result);

                // Check if data was found.
                if ($data !== null) {
                    echo json_encode($data);
                } else {
                    echo json_encode(array('error' => 'No data found for the given nis.'));
                }
            } else {
                echo json_encode(array('error' => 'Error fetching data.'));
            }
        } else {
            echo json_encode(array('error' => 'Error executing the query.'));
        }

        mysqli_stmt_close($stmt);
    } else {
        echo json_encode(array('error' => 'Error preparing the query.'));
    }
} else {
    echo json_encode(array('error' => 'No "nis" parameter received in POST.'));
}

// Close the database connection.
mysqli_close($koneksi);
?>
