<?php

    require('db_connect.php');

    $_search = $_POST['search'];

    $sql = "SELECT * FROM blogs WHERE header LIKE '%$_search%'";

    $result = mysqli_query($con, $sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Search Blogs Page</title>
</head>
<body>

<div class="container my-3">
    <div class="d-flex justify-content-end my-2">
        <a href="logout.php" class="btn btn-danger">Logout</a>
    </div>
    <div>
        <a href="create.php" class="btn btn-primary my-2">เพิ่มบทความใหม่</a>
    </div>

            <form action="search.php" method="post"> 
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="ค้นหาบทความ">
                    <div class="input-group-prepend">
                        <button class="btn btn-dark">Search</button>
                    </div>
                </div>
            </form>

    <div>
        <table class="table table-bordered my-3">
            <thead>
                <tr>
                    <th colspan="3">หัวข้อ <span class="badge bg-success"> คลิ๊กเพื่อดูเนื้อหา</span></th>
                </tr>
            </thead>
            <tbody>
                <?php while($result_row=mysqli_fetch_assoc($result)){ ?>
                    <tr>
                        <td><a style="text-decoration:none; color:black;" href="show.php?id=<?php echo $result_row['id']; ?>"><?php echo $result_row['header']; ?></a></td>
                        <td><a href="update.php?id=<?php echo $result_row['id']; ?>"><img style="width: 30px; height:30px;" src="icon/written-paper.png" alt=""></a></td>
                        <td><a href="delete.php?id=<?php echo $result_row['id']; ?>"
                        onclick = "return confirm('คุณต้องการลบ <?php echo 'บทความ'.$result_row['header']; ?> หรือไม่?')";><img style="width: 30px; height:30px;" src="icon/delete.png" alt=""></a></td>
                    </tr>
             <?php   } ?>
            </tbody>
        </table>
        <div>
        <center><a href="blogs.php" class="btn btn-success my-2">กลับสู่หน้าบทความ</a></center>
    </div>
    </div>
</div>
</body>
</html>