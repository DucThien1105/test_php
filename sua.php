<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" >
    <title>Sửa thông tin</title>
</head>
<body>
    <?php 
        require_once 'ketnoi.php';
        if(isset($_GET['msv'])) {
            $id = $_GET['msv'];
            $query = "SELECT * FROM sinhvien2 WHERE Msv = $id";
            $result = mysqli_query($conn, $query);

            if(count((array)($result==1))) {
                    $row = $result->fetch_array();
                    $msv = $row['Msv'];
                    $hoten = $row['Hoten'];
                    $lop = $row['Lop'];
               };
        }
        if(isset($_POST['edit'])) {
            $msvup = $_POST['msv'];
            $hotenup = $_POST['hoten'];
            $lopup = $_POST['lop'];

            $sql = "UPDATE sinhvien2 SET Msv = '$msvup', Hoten='$hotenup', Lop='$lopup' WHERE Msv=$id";
                if (mysqli_query($conn, $sql)) {
                    echo 
                        "<script>
                            alert('Update thành công'); window.location='quanlysinhvien.php'
                        </script>";
                } else {
                    echo 
                        "<script>
                            alert('Update ko thành công');
                        </script>";
                }
        }
    ?>
        <div class="container">
                <form method = "POST" action = "" >
                    <div class="mb-3">
                        <label for="msv" class="form-label">Mã sinh viên</label>
                        <input name = "msv" class="form-control" value="<?php echo $msv;?>">
                    </div>
                    <div class="mb-3">
                        <label for="hoten" class="form-label">Họ tên</label>
                        <input name = "hoten" class="form-control" value="<?php echo $hoten;?>">
                    </div>
                    <div class="mb-3">
                        <label for="lop" class="form-label">Lớp</label>
                        <input name = "lop" class="form-control" value="<?php echo $lop;?>">
                    </div>
                    
                    <button type="submit" class="btn btn-primary" name = "edit">Sửa</button>
                </form>
            </div>
</body>
</html>
