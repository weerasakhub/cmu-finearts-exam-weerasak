<?php

    require('db_connect.php');

    $_id = $_GET['id'];

    $sql = "SELECT * FROM blogs WHERE id = $_id";
    $result = mysqli_query($con, $sql);

    $result_row = mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Blogs Page</title>
    <title><?php echo $result_row['header'] ?></title>
</head>
<body>
<div class="card d-auto">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $result_row['header'] ?></h5>
                    <br>
                    <img src="" alt="">
                    <br>
                    <textarea class="form-control" name="content" id="" cols="40" rows="10">
                        <?php echo $result_row['content'] ?>
                    </textarea>
                    <br>
                </div>
                    <a class="btn btn-primary" href="blogs.php">กลับสู่ Blogs Page</a>
            </div>
        </div>
</body>
</html>