<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" >

    <title>Quản lý sinh viên</title>
</head>
<body>
    <?php require_once 'ketnoi.php'?>;
    <?php $result = $conn -> query("SELECT * FROM sinhvien2");?>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Mã sinh viên</th>
                    <th scope="col">Họ tên</th>
                    <th scope="col">Lớp</th>
                    <th scope="col">Xóa</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_assoc($result)) : ?>
                    <tr>
                        <td><?php echo $row['Msv'];?></td>
                        <td><?php echo $row['Hoten'];?></td>
                        <td><?php echo $row['Lop'];?></td>
                        <td> 
                            <a href="ketnoi.php?delete=<?php echo $row['Msv'];?>">
                                Xóa
                            </a>
                            -
                            <a href="sua.php?msv=<?php echo $row['Msv'];?>">
                                Sửa
                            </a>
                        </td>
                    </tr>
                <?php endwhile; ?>    
            </tbody>
        </table>
    </div>
</body>
</html>