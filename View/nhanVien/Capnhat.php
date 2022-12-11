<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .table {
            border-collapse: collapse;
            width: 100%;
        }
        .caption {
            font-size: 24px;
            font-weight: bold;
            color: #454545;
            margin: 16px auto;
            padding: 0;
        }
        th, td {
            text-align: left;
            padding: 8px;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        th {
            background-color: #4CAF50;
            color: white;
        }
    </style>
</head>
<body>
    <?php
        echo '<table class="table" border="1" width="100%">';
        echo '<caption class="caption">Du lieu bang phong ban</caption>';
        echo '<tr><td>ID</td><td>Ten nhan vien</td><td>Phong ban</td><td>Dia chi</td><td>Cap nhat thong tin</td></tr>';
        foreach($staffList as $staff){
            echo '<tr><td>'.$staff->idnv.'</td><td>'.$staff->ten.'</td><td>'.$staff->idpb.'</td><td>'.$staff->diachi
                .'</td><td><a href="../Controller/C_nhanVien.php?action=update&IDNV='.$staff->idnv.'" target="main">Cập nhật</a></td></tr>';
        }
        echo '</table>';
    ?>
</body>
</html>