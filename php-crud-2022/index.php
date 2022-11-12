<?php
require'dbCon.php';


?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-----Bootstrap CSS------>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Hello PHP</title>
  </head>
  <body>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h4>Student Details
                <a href="student-create.php" class="btn btn-primary float-end">Add students</a>
            </h4>
          </div>
          <div class="card-body">
                <table class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Student Name</th>
                      <th>Email</th>
                      <th>Phone</th>
                      <th>Course</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $query="SELECT * FROM students ";
                    $query_run=mysqli_query($con,$query);
                    
                    if(mysqli_num_rows($query_run)>0){
                            foreach($query_run as $student)
                            {
                                ?>
                              <tr>
                                <td><?=$student['id'];?></td>
                                <td><?=$student['name'];?></td>
                                <td><?=$student['email'];?></td>
                                <td><?=$student['phone'];?></td>
                                <td><?=$student['course'];?></td>
                                <td>
                                 <a href="" class="btn btn-info btn-sm">View</a>
                                  <a href="student-edit.php?<?=$student['id'];?>" class="btn btn-success btn-sm">Edit</a>
                                  <a href="" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                                <?php
                        
                            }
                    }else{
                      echo "<h5>No Record Found</h5>";
                    }

                    ?>
               
                  </tbody>
                </table>
          </div>
        </div>
      </div>
    </div>
  </div>
    
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>
