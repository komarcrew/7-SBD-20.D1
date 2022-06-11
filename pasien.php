<?php require('header.php'); ?>

<div id="container">
    <div id="hero">
    <h2 align="center">Tabel Pasien Klinik Dr.Saya</h2>
    <br>
    <table class="table">
        <thead>
            <tr>
                <td>No</td>
                <td>Id Pasien</td>
                <td>Nama Pasien</td>
                <td>Jenis Kelamin</td>
                <td>Umur</td>                
            </tr>
        </thead>
        <?php
        include "koneksi.php";
        $no = 1;
        $query = mysqli_query($conn, 'SELECT * FROM pasien');
        while ($data = mysqli_fetch_array($query)) {
        ?>
             <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $data['id_pasien'] ?></td>
                <td><?php echo $data['nama_pasien'] ?></td>
                <td><?php echo $data['jenis_kelamin'] ?></td>
                <td><?php echo $data['umur'] ?></td>
            </tr>
        <?php } ?>
    </table>
    <style css >
/* navigasi */
body {
    min-height: 95vh;
    background-image: linear-gradient(-20deg,#ff2846 0%, #6944ff 100%);
    background: url(Uni.png)no-repeat;
    background-size: cover;
    font-family: 'Quicksand',sans-serif;

}
table {
    font-weight: bold;
    color: #6944ff;
    border-collapse: collapse

}
th, td {
    background-color: #ffff; 
    font-size: 15px; 
    border: 1px solid #DEDEDE; 
    padding: 3px 5px; 
    color: #303030
}
th {
    background: #CCCCCC; 
    font-size: 12px; 
    border-color:#B0B0B0
}

.text {
    text-align: center;
    font-size: 15px;
    margin: 0;
    color: #324e63;
}
h1 {
    text-align: center;
    font-size: 30px;
    margin: 0;
    font-weight: bold;
    color: #6944ff;
}


</style>
    </div>
</div>
<?php require('footer.php'); ?>