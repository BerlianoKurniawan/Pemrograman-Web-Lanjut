<?php
    require_once 'Database.php';
    $db = new Database();

    $id = $_GET['id'];
    $hasil = $db->users($id);

    while($row = $hasil->fetch_assoc()){
        $uname = $row['username'];
        $psw = $row['passwd'];
    }
?>
<!DOCTYPE html>
    <html lang="en">
        <head>
            <title>Edit</title>
        </head>
        <body>
            <h1>Form Edit Barang</h1>
            <form action="simpandata.php" method="post">
                <form method="post" action="simpandata.php">
                    <input type="text" name="username" placeholder="Isikan username"><br/>
                    <input type="password" name="passwd" placeholder="Isikan password"><br/>
                    <input type="submit" value="simpan">
                </form>
            </form> 
        </body>
    </html>
