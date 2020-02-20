<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data dengan CI</title>
</head>
<body>
    <center>
        <h3>edit data </h3>
    </center>
    <?php foreach($tb_user as $u) 
    {
    ?>
    <form action="<?php echo base_url(). 'crud/update';?>" method="POST">
        <table style="margin: 20px auto">
            <tr>
                <td>Nama</td>
                <td>
                    <input type="hidden" name="id" value="<?php echo $u->id; ?>">
                    <input type="text" name="nama" value="<?php echo $u->nama; ?>">
                </td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat" value="<?php echo $u->alamat; ?>"></td>
            </tr>
            <tr>
                <td>Pekerjaan</td>
                <td><input type="text" name="pekerjaan" value="<?php echo $u->pekerjaan; ?>"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="simpan"></td>
            </tr>
        </table>
    </form>
    <?php
    }  
    ?>
</body>
</html>