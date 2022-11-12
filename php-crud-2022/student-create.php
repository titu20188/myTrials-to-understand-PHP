<?php
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hello World</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>    

<div class="container mt-5">
<!-- <div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Holy guacamole!</strong> You should check in on some of those fields below.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div> -->
<?php include('message.php');?>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Student Add
                        <a href="index.php" class="btn btn-danger float-end">BACK</a>
                    </h4>
                </div>
                <div class="card-body">
                    <form action="code.php" method="POST">
                       <div class="mb-3">
                       <label >Student Name</label>
                         <input type="text" name="name" class="form-control">
                       </div>
                       <div class="mb-3">
                       <label >Student Email</label>
                         <input type="email" name="email" class="form-control">
                       </div>
                       <div class="mb-3">
                       <label >Student Phone</label>
                         <input type="text" name="phone" class="form-control">
                       </div>
                       <div class="mb-3">
                       <label >Student Course</label>
                         <input type="text" name="course" class="form-control">
                       </div>
                       <div class="mb-3">
                        <button type="submit" name="save-student" class="btn btn-primary">Save Student</button>
                       </div>
                    </form>
                </div>
            </div>
        </div>
                
    </div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>
