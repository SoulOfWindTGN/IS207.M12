<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
    <form method="get" action="#">
        <div class="form-group">
            <table style="width:500px;background-color:orange;"
                <tr>
                    <th>Mã nhân viên</th>
                    <td><input type="text" class="form-control" name="id"></td>
                </tr>
                <tr>
                    <th>Tên nhân viên</th>
                    <td><input type="text" class="form-control" name="name"></td>
                </tr>
                <tr>
                    <th>Số ngày làm việc</th>
                    <td><input type="number" min="0" class="form-control" name="day"></td>
                </tr>
                <tr>
                    <th>Lương ngày</th>
                    <td><input type="number" class="form-control" name="salary"></td>
                </tr>
                <tr>
                    <th><label  for="nvql"> Nhân viên quản lý</label></th>
                    <td><input  type="checkbox" name="nvql" id="nvql"></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" class="btn btn-info" name="submit" value="Lương tháng"></td>
                </tr>
            </table>
        </div>
    </form>

    <?php
        if(isset($_GET['submit'])&&($_GET['submit']=="Lương tháng"))
        {
            include 'nhanvien.php';
            $id = $_GET['id'];
            $name = $_GET['name'];
            $day = $_GET['day'];
            $salary = $_GET['salary'];
            $is_nvql = isset($_GET['nvql']);
            
            if($is_nvql)
            {
                $NV = new nhanvienQL();
                $NV->Gan($id,$name,$day,$salary);
                $luongthang = $NV->TinhLuong();
                $NV->InNhanVien();
                echo "Lương tháng: ".$luongthang;
            }
            else{
                $NV = new nhanvien();
                $NV->Gan($id,$name,$day,$salary);
                $luongthang = $NV->TinhLuong();
                $NV->InNhanVien();
                echo "Lương tháng: ".$luongthang;
            }
        }
    ?>
    </body>
</html>