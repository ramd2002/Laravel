<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <?php

        $conn = mysqli_connect("localhost","root","","student");
        $sql = "SELECT * FROM `student` where studentid = {$_GET['id']}";
        $results = mysqli_query($conn,$sql);
        $results = mysqli_fetch_assoc($results);
        $studentid = $results['studentid'];
        $name = $results['name'];
        $marks = explode(",",$results['marks']);
        $faculty = $results['faculty_name'];
    ?>
</head>
<body>
    <div class="container">
        <div class="row d-flex justify-content-center py-5">
            <div class="col-md-5">
                <h1 class="heading-1">Update</h1>
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-md-5">
                <?php
                    if(isset($_POST['submit'])){
                        $name = $_POST['name'];
                        $marks = $_POST['sub'];
                        $marks = implode(",",$marks);
                        $faculty = $_POST['faculty'];
                        $sql = "UPDATE `student` SET `name` = '$name', `marks` = '$marks', `faculty_name` = '$faculty' WHERE `student`.`studentid` = $studentid";
                        $results = mysqli_query($conn,$sql);
                        if($results){
                            $url = "index.php";
                            header("Location: $url");

                        }
                        else{
                            echo "<div class='alert alert-danger' role='alert'>
                            Student not updated
                          </div>";
                        }
                    }
                ?>

            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-md-5">

                <form method="POST" action="#">

                    <div class="mb-3">
                        <label for="studentid" class="form-label">Student ID</label>
                        <input type="number" class="form-control" id="studentid" name="studentid" disabled value=<?php echo $studentid ?>>
                    </div>

                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name"name="name" value=<?php echo $name ?> >
                    </div>

                    <div class="mb-3">
                        <label for="sub[]" class="form-label">Subject 1</label>
                        <input type="text" class="form-control" id="sub[]" name="sub[]"  value=<?php echo$marks[0] ?> >
                    </div>

                    <div class="mb-3">
                        <label for="sub[]" class="form-label">Subject 2</label>
                        <input type="text" class="form-control" id="sub[]" name="sub[]" value=<?php echo$marks[1] ?>>
                    </div>
                    <div class="mb-3">
                        <label for="sub[]" class="form-label">Subject 3</label>
                        <input type="text" class="form-control" id="sub[]" name="sub[]" value=<?php echo$marks[2] ?>>
                    </div>
                    <div class="mb-3">
                        <label for="sub[]" class="form-label">Subject 4</label>
                        <input type="text" class="form-control" id="sub[]" name="sub[]" value=<?php echo$marks[3] ?>>
                    </div>
                    <div class="mb-3">
                        <label for="sub[]" class="form-label">Subject 5</label>
                        <input type="text" class="form-control" id="sub[]" name="sub[]" value=<?php echo$marks[4] ?>>
                    </div>
                    <div class="mb-3">
                        <label for="faculty" class="form-label">Faculty Name</label>
                        <input type="text" class="form-control" id="faculty" name="faculty" value=<?php echo$faculty ?>>
                    </div>

                    <div>
                        <input type="submit" name="submit" value="Update"  class="btn btn-primary">
                    </div>
                    </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
    
</body>
</html>