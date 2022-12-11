<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .form-update{
            margin: 140px;
        }
        .select {
            width: 50%;
            display: inline-flex;
            justify-content: space-between;
        }
        .search-data{
            margin: 8px auto;
            width: 50%;
            /* text-align: center; */
        }
    </style>
</head>
<body>
    <form class="form-update" action="../Controller/C_nhanVien.php?action=search" method="POST">
        <div class="select">
            <div>
                <input type="radio" name="select" value="IDNV">
                <label for="IDNV">IDNV</label>
            </div>
            <div>
                <input type="radio" name="select" value="Hoten">
                <label for="Ten">Tên nhân viên</label>                
            </div>
            <div>
                <input type="radio" name="select" value="Diachi">
                <label for="Diachi">Địa chỉ</label>
            </div>
        </div>
        <br>
        <input class="search-data" type="text" name="value">
        <br>
        <input type="submit" value="Tìm kiếm">
    </form>    
</body>
</html>