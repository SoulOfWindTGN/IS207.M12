<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
        <form action="bangdiem.php" method="post">
            <div class="form-group">
                <table>
                    <th colspan="2" style="text-align: center;">Đăng nhập hệ thống xem điểm</th>
                    <tr>
                        <th>Tên đăng nhập</th>
                        <td><input type="input" name="tendangnhap" class="form-control"></td>
                    </tr>
                    <tr>
                        <th>Mật khâủ</th>
                        <td><input type="password" name="matkhau" class="form-control"></td>
                    </tr>
                    <tr>
                        <td colspan="2" style="text-align: center;"><input type="Submit" value="Đăng nhập" name="Submit" class="btn btn-primary"></td>
                    </tr>
                </table>
            </div>
        </form>
    </body>
</html>