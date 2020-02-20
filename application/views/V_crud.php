<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membuat CRUD dengan CI</title>
</head>
<body>
    <center><h1>Membuat CRUD CI</h1></center>
    <center><?php echo anchor('crud/tambah','Tambah Data '); ?></center>

    <table style="margin: 20px auto;" border="1" >
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Pekerjaan</th>
            <th>Action</th>
        </tr>
        <?php
        $no = 1;
        foreach($user as $u)
        {
        ?>
        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $u->nama ?></td>
            <td><?php echo $u->alamat ?></td>
            <td><?php echo $u->pekerjaan ?></td>
            <td>
                <?php echo anchor('crud/edit/'.$u->id, 'Edit'); ?>    
                <?php echo anchor('crud/hapus/'.$u->id,'Hapus');?>
            </td>
        </tr>
        <?php 
        } 
        ?>
    </table>
</body>
</html>