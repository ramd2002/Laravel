
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student management system</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <?php
        $conn = mysqli_connect("localhost","root","","student");
        $sql = "SELECT * FROM `student`";
        $results = mysqli_query($conn,$sql);
        
        
    ?>
</head>
<body>

    <div class="container">

        <div class="row py-5">
            <div class="col-md-12">
                <h1>Student Management System</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 ">
                <a href="add.php" class="btn btn-primary">Add Student</a>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Student ID</th>
                            <th>Student Name</th>
                            <th>Subject 1</th>
                            <th>Subject 2</th>
                            <th>Subject 3</th>
                            <th>Subject 4</th>
                            <th>Subject 5</th>
                            <th>Faculty Name</th>
                            <th>update</th>
                            <th>delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            while($row = mysqli_fetch_assoc($results)){
                                echo "<tr>";
                                echo "<td>".$row['studentid']."</td>";
                                echo "<td>".$row['name']."</td>";
                                $marks = explode(",",$row['marks']);
                                echo "<td>".$marks[0]."</td>";
                                echo "<td>".$marks[1]."</td>";
                                echo "<td>".$marks[2]."</td>";
                                echo "<td>".$marks[3]."</td>";
                                echo "<td>".$marks[4]."</td>";
                                echo "<td>".$row['faculty_name']."</td>";
                                echo "<td><a href='update.php?id=".$row['studentid']."' class='btn btn-primary'>Update</a></td>";
                                echo "<td><a href='delete.php?id=".$row['studentid']."' class='btn btn-danger'>Delete</a></td>";
                                echo "</tr>";
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
     
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
</body>
</html>