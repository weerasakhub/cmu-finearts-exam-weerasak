<?php

    require('db_connect.php');

    $_id = $_GET['id'];

    $sql = "SELECT * FROM blogs WHERE id = $_id";
    $result = mysqli_query($con, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Create Page</title>
</head>
<body>
    <div class="container" style="margin-top: 20px;">
    <form action="updateData.php" method="post">
        <div class="card">
                <?php while($result_row=mysqli_fetch_assoc($result)){ ?>
                    <input type="hidden" name="id" value="<?php echo $result_row['id']; ?>">
                    <div class="card-body">
                    <h5 class="card-title">แก้ไขบทความ</h5>
                    <label for="" class="form-label">หัวข้อ</label>
                    <input class="form-control" type="text" name="header" value="<?php echo $result_row['header']; ?>">
                    <br>
                    <label for="" class="form-label">เนื้อหา</label>
                    <textarea class="form-control" name="content" id="" cols="20" rows="5"><?php echo $result_row['content']; ?></textarea>
                    <br>
                    <label for="" class="form-label">รูปภาพ</label>
                    <input class="form-control" type="file" name="image">
                    <center><input class="btn btn-primary mt-2" type="submit" value="update"></center>
                </div>
                <?php } ?>
            </div>
        </div>
    </form>
</body>
</html>