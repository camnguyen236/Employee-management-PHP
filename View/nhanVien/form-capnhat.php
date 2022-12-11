<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .update {
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
            if($department->idpb == $staff->idpb) {
                $option .= "<option value='".$department->idpb."' selected>".$department->ten."</option>";
            }
            else {
                $option .= "<option value='".$department->idpb."'>".$department->ten."</option>";
            }
        }
        echo '
            <form action="../Controller/C_nhanVien.php?action=update&IDNV='.$staff->idnv.'" method="post">
                <table class="update">
                    <tr>
                        <td>
                            <label for="IDNV">IDNV</label>
                        </td>
                        <td>
                            <input type="text" name="ID" value="'.$staff->idnv.'" readonly>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="tenNV">Tên nhân viên</label>
                        </td>
                        <td>
                            <input type="text" name="tenNV" value="'.$staff->ten.'">
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
                            <input type="text" name="Diachi" value="'.$staff->diachi.'">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="submit" value="Update">
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