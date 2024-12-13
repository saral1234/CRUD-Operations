<?php
$conn = mysqli_connect("localhost","root","","college");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
if(isset($_POST["checking_add"])){
    
    $name = $_POST['name'];
    $class = $_POST['class'];
    $section = $_POST['section'];
    $sql = "INSERT INTO student (name,class,section) VALUES ('$name','$class','$section')";
    $result = mysqli_query($conn,$sql);
    while($row = mysqli_fetch_array($result)){
        $id = $id + 1;
        echo "<tr>
            <th scope='row'>" . $id . "</th>
            <td>" .$row['name']."</td>
            <td>" .$row['class']."</td>
            <td>".$row['section']."</td>
            </tr>";
    }
    if($result){
        echo $return = "Successfully Stored";
    }
    else{
        echo $return = "Something went wrong";
    }
}

if(isset($_POST["checking_view"])){
    //echo $return = "Welcome";
    $stud_id = $_POST["stud_id"];
    $query = "SELECT * FROM student WHERE id = '$stud_id' ";
    $result = mysqli_query($conn,$query);
    $result_array = [];
    if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_array($result);
        foreach($result as $row){
            array_push( $result_array, $row );
        }
        header("content-type: application/json");
        echo json_encode($result_array);

    }
    else{
        echo $return = "No record found";
    }

}

if(isset($_POST["checking_edit"])){
    //echo $return = "Welcome";
    $stud_id = $_POST["stud_id"];
    $query = "SELECT * FROM student WHERE id = '$stud_id' ";
    $result = mysqli_query($conn,$query);
    $result_array = [];
    if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_array($result);
        foreach($result as $row){
            array_push( $result_array, $row );
        }
        header("content-type: application/json");
        echo json_encode($result_array);

    }
    else{
        echo $return = "No record found";
    }

}
if(isset($_POST["checking_update"])){
    $id = $_POST['stud_id'];
    $name = $_POST['name'];
    $class = $_POST['class'];
    $section = $_POST['section'];
    $query = "UPDATE student SET name='$name', class='$class', section='$section' WHERE id = '$id'";
    $result = mysqli_query($conn,$query);
    if($result){
        echo $return = "Successfully Updated";
    }
    else{
        echo $return = "No record found";
    }
}

if(isset($_POST["checking_delete"])){
    $id = $_POST["stud_id"];
    $query = "DELETE FROM student WHERE id = '$id'";
    $result = mysqli_query($conn,$query);
    if($result){
        echo $return = "Successfully Deleted";
    }
    else{
        echo $return = "SOmething Went Wrong";
    }
}
?>