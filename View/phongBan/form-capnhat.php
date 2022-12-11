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
        echo '
            <form action="../Controller/C_phongBan.php?action=update&IDPB='.$department->idpb.'" method="post">
                <table class="update">
                    <tr>
                        <td>
                            <label for="IDPB">IDPB</label>
                        </td>
                        <td>
                            <input type="text" name="ID" value="'.$department->idpb.'" readonly>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="tenPB">Tên phòng ban</label>
                        </td>
                        <td>
                            <input type="text" name="tenPB" value="'.$department->ten.'">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="Mota">Mô tả</label>
                        </td>
                        <td>
                            <input type="text" name="Mota" value="'.$department->mota.'">
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