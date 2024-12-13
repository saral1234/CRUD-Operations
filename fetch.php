<?php
$conn = mysqli_connect("localhost","root","","college");
$query = "SELECT * FROM student";
$result = mysqli_query($conn, $query);
$result_array = [];                
if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_array($result);
    foreach ($result as $row) {
        array_push($result_array, $row);
        # code...
    }
    header("content-type: application/json");
    echo json_encode($result_array);
}
else{
    echo"No record found";
}
?>