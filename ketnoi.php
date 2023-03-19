<?php 
    $severname = "localhost";
    $username = "root";
    $password = "";
    $database = "ducphp";

    $conn = mysqli_connect(
        $severname,
        $username,
        $password,
        $database,
    );
    if (!$conn) {
        echo ("connect fail");
    } else {
        echo ("connect done");
    }
    mysqli_set_charset($conn, 'UTF8');
    if (isset($_GET['delete'])) {
        $msv = $_GET['delete'];
        $conn -> query("DELETE FROM sinhvien2 WHERE Msv=$msv");
        header("Location: quanlysinhvien.php");
    }
?>

