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
                    <th>Chiều dài</th>
                    <td><input type="input" name="chieudai" class="form-control"></td>
                </tr>
                <tr>
                    <th>Chiều rộng</th>
                    <td><input type="input" name="chieurong" class="form-control"></td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align: center;"><input type="Submit" value="Tính" name="Submit" class="btn btn-primary"></td>
                </tr>
            </table>
        </div>
    </form>
    <?php
        class HinhChuNhat {
            private $dai, $rong;
            public function __construct($d, $r) {
                $this->dai = $d;
                $this->rong = $r;
            }
            public function DienTich(){
                return $this->dai*$this->rong;
            }
            public function ChuVi(){
                return ($this->dai+$this->rong)*2;
            }
        } 
    ?>

    <?php
        if(isset($_GET['Submit'])&&($_GET['Submit']=="Tính"))
        {
            $dai= (float)$_GET['chieudai'];
            $rong= (float)$_GET['chieurong'];
            $h1 = new HinhChuNhat($dai,$rong);
            $dientich=$h1->DienTich();
            $chuvi = $h1->ChuVi();
            echo "Diện tích:".$dientich."<br>";
            echo "Chu vi:".$chuvi;
        }
    ?>

    </body>
</html>