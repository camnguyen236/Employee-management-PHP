<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .add {
            margin: 180px;
        }
        th, td {
            text-align: left;
            padding: 8px;
        }
        th {
            background-color: #4CAF50;
            color: white;
        }
    </style>
</head>
<body>
    <?php
        $option = "";
        foreach($departmentList as $department){
            $option .= "<option value='".$department->idpb."'>".$department->ten."</option>";
        }
        echo '
            <form action="../Controller/C_nhanVien.php?action=add" method="post">
                <table class="add">
                    <tr>
                        <td>
                            <label for="IDNV">IDNV</label>
                        </td>
                        <td>
                            <input type="text" name="IDNV" id="IDNV" required>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="Hoten">Họ tên</label>
                        </td>
                        <td>
                            <input type="text" name="Hoten" id="Hoten" required>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="PB">Phòng ban</label>
                        </td>
                        <td>
                            <select name="PB" id="PB">
                                '.$option.'
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="Diachi">Địa chỉ</label>
                        </td>
                        <td>
                            <input type="text" name="Diachi" id="Diachi" required>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="submit" value="Add">
                        </td>
                        <td>
                            <input type="reset" value="Reset">
                        </td>
                    </tr>
                </table>
            </form>
        ';
    ?>
</body>
</html>