<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input data dengan CI</title>
</head>
<body>
    <center>
        <h1>Membuat CRUD dengan CI</h1>
        <h3>Tambah Data Baru</h3>
    </center>
    <form action="<?php echo base_url().'crud/tambah_aksi'; ?>" method="POST">
        <table style="margin: 20px auto;"s>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat" id=""></td>
            </tr>
            <tr>
                <td>Pekerjaan</td>
                <td><input type="text" name="pekerjaan" id=""></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Tambah"></td>
            </tr>
        </table>
    </form>
</body>
</html>