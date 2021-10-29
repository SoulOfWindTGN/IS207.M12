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
                    <td colspan="2" style="text-align: center; font-size:20px; font-weight:bold;">Giải phương trình bậc 2</td>
                </tr>
                <tr>
                    <th>Hệ số a</th>
                    <td><input type="input" name="a" class="form-control"></td>
                </tr>
                <tr>
                    <th>Hệ số b</th>
                    <td><input type="input" name="b" class="form-control"></td>
                </tr>
                <tr>
                    <th>Hệ số c</th>
                    <td><input type="input" name="c" class="form-control"></td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align: center;"><input type="Submit" value="Giải" name="Submit" class="btn btn-primary"></td>
                </tr>
            </table>
        </div>
    </form>
    <?php
        if(isset($_GET['Submit'])&&($_GET['Submit']=="Giải"))
        {
            $a= $_GET['a'];
            $b= $_GET['b'];
            $c = $_GET['c'];
            if($a!=""&&$b!=""&&$c!="")
            {
                $delta = ((float)$b)**2-4*(float)$a*(float)$c;
                if($delta<0)
                {
                    echo "Phương trình vô nghiệm";
                }
                else if($delta == 0)
                {
                    $x = -(float)$b/(2*(float)$a);
                    echo "Phương trình có nghiệm kép x1 = x2 = ".$x;
                }
                else
                {
                    $x1 = (-$b + sqrt($delta))/(2*$a);
                    $x2 = (-$b - sqrt($delta))/(2*$a);

                    echo "Phương trình có 2 nghiệm phân biệt"."<br>";
                    echo "x1 = ".$x1."<br>";
                    echo "x1 = ".$x2."<br>";
                }
            }
        }
    ?>

    </body>
</html>