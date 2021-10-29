<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
    <?php
        echo "<h3>BẢNG ĐIỂM</h3>";
        $name = $_POST["tendangnhap"];
        $password = $_POST["matkhau"];
        echo "Tên: ".$name;
    ?>
        <table class="table" style="width: 500px">
            <thread>
                <th scope="col">STT</th>
                <th scope="col">Tên môn</th>
                <th scope="col">Điểm</th>
            </thread>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Cơ sở dữ liệu</td>
                    <td>7</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Phát triển ứng dụng web</td>
                    <td>8</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Lập trình Java</td>
                    <td>7.5</td>
                </tr>
            </tbody>
        </table>

        <a id="info-show" href="thongtinsinhvien.php?name=<?php echo $name?>&&pass=<?php echo $password?>">Xem thông tin sinh viên</a>
    </body>
</html>