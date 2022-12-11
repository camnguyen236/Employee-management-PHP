<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color: #f2f2f2;
        }

        .item {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            align-items: center;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin: 4px;
        }

        .item:hover {
            background-color: #e6e6e6;
        }

        .link-item {
            padding: 0 10px;
            text-decoration: none;
            color: #000;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <td class="item">
                <a class="link-item" href="../Controller/C_nhanVien.php" target="main">Xem TT Nhân viên</a>
            </td>
        </tr>
        <tr>
            <td class="item">
                <a class="link-item" href="../Controller/C_phongBan.php" target="main">Xem TT Phòng ban</a>
            </td>
        </tr>
        <tr>
            <td class="item">
                <a class="link-item" href="../Controller/C_nhanVien.php?action=search" target="main">Tìm kiếm TT Nhân viên</a>
            </td>
        </tr>
        <tr>
            <td class="item">
                <a class="link-item" href="../Controller/C_nhanVien.php?action=update" target="main">Cập nhật nhân viên</a>
            </td>
        </tr>
        <tr>
            <td class="item">
                <a class="link-item" href="../Controller/C_phongBan.php?action=update" target="main">Cập nhật phòng ban</a>
            </td>
        </tr>
        <tr>
            <td class="item">
                <a class="link-item" href="../Controller/C_nhanVien.php?action=delete" target="main">Xóa TT nhân viên</a>
            </td>
        </tr>
        <tr>
            <td class="item">
                <a class="link-item" href="../Controller/C_nhanVien.php?action=deleteMany" target="main">Xóa nhiều nhân viên</a>
            </td>
        </tr>
        <tr>
            <td class="item">
                <a class="link-item" href="../Controller/C_phongBan.php?action=delete" target="main">Xóa TT phòng ban</a>
            </td>
        </tr>
        <tr>
            <td class="item">
                <a class="link-item" href="../Controller/C_phongBan.php?action=deleteMany" target="main">Xóa nhiều phòng ban</a>
            </td>
        </tr>
        <tr>
            <td class="item">
                <a class="link-item" href="../Controller/C_nhanVien.php?action=add" target="main">Chèn TT Nhân viên</a>
            </td>
        </tr>
        <tr>
            <td class="item">
                <a class="link-item" href="../Controller/C_phongBan.php?action=add" target="main">Chèn TT Phòng ban</a>
            </td>
        </tr>
        <tr>
            <td class="item">
                <a class="link-item" href="../Controller/C_auth.php?action=logout" target="main">Log out</a>
            </td>
        </tr>
    </table>
</body>
</html>