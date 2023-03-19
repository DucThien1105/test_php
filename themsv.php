<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" >
    <title>Thêm sinh viên</title>
</head>
<body>
    <?php require_once 'ketnoi.php'?>;
    <?php 
        if(isset($_POST['add'])) {
            $msv = $_POST['msv'];
            $hoten = $_POST['hoten'];
            $lop = $_POST['lop'];

            if ($conn -> query("INSERT INTO sinhvien2 (Msv, Hoten, Lop) VALUES (N'$msv', N'$hoten', N'$lop')")) {
                echo "<script>alert('Them thanh cong');</script>";
            } else {
                echo "<script>alert('Them that bai');</script>";
            }    
        }
        $conn -> close();
    ?>
    

    <div class="container">
        <form method = "POST" action = "" >
            <div class="mb-3">
                <label for="msv" class="form-label">Mã sinh viên</label>
                <input name = "msv" class="form-control">
            </div>
            <div class="mb-3">
                <label for="hoten" class="form-label">Họ tên</label>
                <input name = "hoten" class="form-control" >
            </div>
            <div class="mb-3">
                <label for="lop" class="form-label">Lớp</label>
                <input name = "lop" class="form-control" >
            </div>
            
            <button type="submit" class="btn btn-primary" name = "add">Thêm</button>
        </form>
    </div>
</body>
</html>