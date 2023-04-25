<?php

    $conn = mysqli_connect("localhost","root","","student");
    if(!$conn){
        die("Connection failed: ".mysqli_connect_error());
    }

    $id = $_GET['id'];

    $sql = "DELETE FROM student WHERE studentid = $id";

    if(mysqli_query($conn,$sql)){
        header("Location: index.php");
    }
    else{
        echo "Error deleting record: ".mysqli_error($conn);
    }

    mysqli_close($conn);

?>