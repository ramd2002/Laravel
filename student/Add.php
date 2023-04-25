<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Student</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <div class="row py-5  d-flex justify-content-center" >
            <div class="col-md-5">
                
                <h1>Add Student</h1>
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-md-5">
                <?php
                        if(isset($_POST['submit'])){
                            
                            $studentid = $_POST['studentid'];
                            $name = $_POST['name'];
                            
                            $sub = implode(",",$_POST['sub']);
                            $faculty = $_POST['faculty'];
                            try{
                                $conn = mysqli_connect("localhost","root","","student");
                                $sql = "INSERT INTO `student`(`studentid`, `name`, `marks`, `faculty_name`) VALUES ('$studentid','$name','$sub','$faculty')";
                                $result = mysqli_query($conn,$sql);
                                             
                                if($result){
                                    echo "<div class='alert alert-success' role='alert'>
                                    Data inserted successfully
                                </div>";
                                }
                                else{
                                    echo "<div class='alert alert-danger' role='alert'>
                                    Data not inserted
                                </div>";
                                }
                            }
                            catch(Exception $e){
                                echo "<div class='alert alert-danger' role='alert'>
                                Data not inserted
                            </div>";
                            }           

                        }
                    ?>
            </div>
        </div>
        <div class="row py-2 d-flex justify-content-center">
            <div class="col-md-5">
                <form method="POST" action="#">

                    <div class="mb-3">
                        <label for="studentid" class="form-label">Student ID</label>
                        <input type="number" class="form-control" id="studentid" name="studentid" >
                    </div>
                    
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name"name="name" >
                    </div>

                    <div class="mb-3">
                        <label for="sub[]" class="form-label">Subject 1</label>
                        <input type="text" class="form-control" id="sub[]" name="sub[]" >
                    </div>
                    
                    <div class="mb-3">
                        <label for="sub[]" class="form-label">Subject 2</label>
                        <input type="text" class="form-control" id="sub[]" name="sub[]" >
                    </div>
                    <div class="mb-3">
                        <label for="sub[]" class="form-label">Subject 3</label>
                        <input type="text" class="form-control" id="sub[]" name="sub[]" >
                    </div>
                    <div class="mb-3">
                        <label for="sub[]" class="form-label">Subject 4</label>
                        <input type="text" class="form-control" id="sub[]" name="sub[]" >
                    </div>
                    <div class="mb-3">
                        <label for="sub[]" class="form-label">Subject 5</label>
                        <input type="text" class="form-control" id="sub[]" name="sub[]" >
                    </div>
                    <div class="mb-3">
                        <label for="faculty" class="form-label">Faculty Name</label>
                        <input type="text" class="form-control" id="faculty" name="faculty" >
                    </div>

                    <div>
                        <input type="submit" name="submit" value="Insert"  class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
    
</body>
</html>