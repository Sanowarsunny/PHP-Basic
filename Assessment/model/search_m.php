<?php


require_once 'db_conn.php';
$db = new DBConnection();      
$conn = $db->getConnection();

// Perform a search based on the user's input
if (isset($_POST['search'])) {
    $searchText = mysqli_real_escape_string($conn, $_POST['search']);

    // Query to search events based on the title and description
    $query = "SELECT * FROM events
              WHERE title LIKE '%$searchText%' "; //use this if need (OR description LIKE '%$searchText%')

    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        // Display search results
        while ($row = mysqli_fetch_assoc($result)) {
            // Display event information without table headings
            echo "<table>";
            echo "<tr>";
            echo "<th>"."&nbsp;&nbsp;&nbsp;".$row['title']."&nbsp;&nbsp;"."</th>";
            // echo "<th>"."&nbsp;&nbsp;&nbsp;". $row['description'] ."&nbsp;&nbsp;&nbsp;"."</th>";
            // echo "<th>" ."&nbsp;&nbsp;&nbsp;". $row['location_name'] ."&nbsp;&nbsp;&nbsp;". "</th>";
            // echo "<th>" ."&nbsp;&nbsp;&nbsp;". $row['addresses'] ."&nbsp;&nbsp;&nbsp;". "</th>";
            // echo "<th>" ."&nbsp;&nbsp;&nbsp;". $row['event_date'] ."&nbsp;&nbsp;&nbsp;". "</th>";
            // echo "<th>" ."&nbsp;&nbsp;&nbsp;". $row['event_time'] ."&nbsp;&nbsp;&nbsp;". "</th>";
            echo "</tr>";
            echo "</br>";
            echo "</table>";
        }
    } else {
        // No matching events found
        echo "<p>No matching events found.</p>";
    }
}
?>