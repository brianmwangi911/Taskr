<?php

if (isset($_POST["taskname"])) {
    require 'DB.php';
    extract($_POST);

    $sql="INSERT INTO `tasks`(`task_id`, `taskname`, `datetime`, `status`)
 VALUES (null,'$taskname','$datetime','incomplete')";

    mysqli_query($conn,$sql) or die(mysqli_error($conn));
header("location:show.php");

//error msg

}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add my task</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>

<?php
require 'navbar.php';
?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-6">
            <div class="card">
                <div class="card-header">
                    Add a new task
                </div>
                <div class="card-body">


                    <form action="save.php" method="post" enctype="multipart/form-data">


                <div class="form-group">
                    <label for="title">Task</label>
                    <input type="text" class="form-control" name="taskname" required>
                </div>

                <div class="form-group">
                    <label for="title">Date for Task</label>
                    <input type="date" class="form-control" name="datetime" required>
                </div>

                </div>

                <button class="btn btn-info btn-block">Add task</button>
            </form>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>