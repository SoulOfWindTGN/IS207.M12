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
                    <th>Nhập tên cần tìm</th>
                    <td><input type="input" name="tencantim" class="form-control"></td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align: center;"><input type="Submit" value="Tìm" name="Submit" class="btn btn-primary"></td>
                </tr>
            </table>
        </div>

        <?php
            function InMang($array){
                foreach($array as $ten => $tuoi)
                {
                    echo $ten."\t".$tuoi."<br>";
                }
            }
            function TimTen($array, $str)
            {
                foreach($array as $ten => $tuoi)
                {
                    if($ten==$str)
                    {
                        return true;
                    }
                }
                return false;
            }
        ?>    
    <?php
        $ban=array("Tuấn"=>21,"Tú"=>19,"Tâm"=>22,"Tùng"=>20);
        if(isset($_GET['Submit'])&&($_GET['Submit']=="Tìm"))
        {
            $ten = $_GET['tencantim'];
            if(TimTen($ban,$ten)==true)
            {
                echo "Tìm thấy ".$ten." trong mảng<br>";
            }
            else
            {
                echo "Tìm không thấy <br>";
            }
            echo "<h3>Xuất mảng</h3>";
            InMang($ban);
        }
    ?>
    </body>
</html>