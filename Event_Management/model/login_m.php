<?php
class UserModel {
    public function validateUser($email, $password) {
        // Database connection
        require_once 'db_conn.php';
        $db = new DBConnection();
        $conn = $db->getConnection();

        // Sanitize input
        $email = mysqli_real_escape_string($conn, $email);
        $password = mysqli_real_escape_string($conn, $password);

        // Query to check if the user exists in the 'users' table
        $query = "SELECT * FROM users WHERE email = '$email' AND password = '$password' LIMIT 1";
        $result = mysqli_query($conn, $query);

        if (mysqli_num_rows($result) == 1) {
            // User found, return user data
            $user = mysqli_fetch_assoc($result);
            return $user;
        } else {
            // User not found
            return false;
        }
    }
}
?>

