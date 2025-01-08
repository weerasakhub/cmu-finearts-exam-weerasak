<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Login Page</title>
</head>
<body>
    <div class="container" style="margin-top: 20px;">
    <form action="chk_user.php" method="post">
        <div class="card">
                <div class="card-body">
                    <center><h2 class="card-title">เข้าสู่ระบบ</h2></center>
                    <label for="" class="form-label">ผู้ใช้งาน</label>
                    <input class="form-control" type="text" name="username" required placeholder="username : test">
                    <br>
                    <label for="" class="form-label">รหัสผ่าน</label>
                    <input class="form-control" type="password" name="pwd" required placeholder="password : 12345">
                    <center><input class="btn btn-success mt-2" type="submit" value="เข้าสู่ระบบ"></center>
                </div>
            </div>
        </div>
    </form>
</body>
</html>