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
        echo '
            <form action="../Controller/C_phongBan.php?action=add" method="post">
                <table class="add">
                    <tr>
                        <td>
                            <label for="IDPB">IDPB</label>
                        </td>
                        <td>
                            <input type="text" name="IDPB" id="IDPB" required>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="tenpb">Tên phòng ban</label>
                        </td>
                        <td>
                            <input type="text" name="tenpb" id="tenpb" required>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="mota">Mô tả</label>
                        </td>
                        <td>
                            <input type="text" name="mota" id="mota" required>
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