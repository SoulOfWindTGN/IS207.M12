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
            <table>
                <tr>
                    <th>Ngày</th>
                    <td><input type="input" name="ngay" class="form-control"></td>
                </tr>
                <tr>
                    <th>Tháng</th>
                    <td><input type="input" name="thang" class="form-control"></td>
                </tr>
                <tr>
                    <th>Năm</th>
                    <td><input type="input" name="nam" class="form-control"></td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align: center;"><input type="Submit" value="Tổng" name="Submit" class="btn btn-primary"></td>
                </tr>
            </table>
        </div>
    </form>

    <?php
        function KTNN($nam){
            if ((($nam % 4 == 0) && ($nam % 100!= 0)) || ($nam%400 == 0))
            {
                return true;
            }
            else
            {
                return false;
            }
        }
    ?>

    <?php
        if(isset($_GET['Submit'])&&($_GET['Submit']=="Tổng"))
        {
            $ngay= (int)$_GET['ngay'];
            $thang= (int)$_GET['thang'];
            $nam= (int)$_GET['nam'];
            $s=$ngay;
            for($i=1; $i<$thang; $i++)
            {
                switch($i)
                {
                case 1: case 3: case 5: case 7: case 8: case 10: case 12: 
                    $s = $s+31;
                    break;
                case 4: case 6: case 9: case 11: 
                    $s=$s+30;
                    break;
                case 2:
                    if(KTNN($nam)==true)
                    {
                        $s=$s+29;
                    }
                    else
                    {
                        $s+=$s+28;
                    }
                }
            }
            echo "Tổng số ngày từ đầu năm:".$s."<br>";
        }
    ?>

    </body>
</html>