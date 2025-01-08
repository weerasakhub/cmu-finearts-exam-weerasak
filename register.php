<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
</head>
<body>
    <!-- สำหรับการ TEST เพื่อ Authentication เท่านั้น-->
    <form action="insert_user.php" method="post">
        <h2>Register Form</h2>
        <label for="">Username</label>
        <input type="text" name="username">
        <br>
        <label for="">Password</label>
        <input type="text" name="password">
        <br>
        <select name="lv" id="" hidden>
            <option value="user">ผู้ใช้งาน</option>
        </select>
        <br>
        <input type="submit" value="Register">
        <input type="reset" value="Cancel">
    </form>
</body>
</html>