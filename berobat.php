<?php require('header.php'); ?>

<div id="container">
    <div id="hero">
    <h2 align="center">Tabel Berobat Klinik Dr.Saya</h2>
    <br>
    <table class="table">
        <thead>
        <tr>
                <td>No</td>
                        <td>Id berobat</td>
                <td>id pasien</td>
                <td>id dokter</td>
                <td>tgl berobat</td>
                <td>keluhan pasien</td>
                <td>hasil diagnosa</td>
                <td>penatalaksaaan</td>             
        </tr>
        </thead>
        <?php
        include "koneksi.php";
        $no = 1;
        $query = mysqli_query($conn, 'SELECT * FROM berobat');
        while ($data = mysqli_fetch_array($query)) {
        ?>
            <tr>
                <td><?php echo $no++ ?></td>
                        <td><?php echo $data['id_berobat'] ?></td>
                <td><?php echo $data['id_pasien'] ?></td>
                <td><?php echo $data['id_dokter'] ?></td>
                <td><?php echo $data['tgl_berobat'] ?></td>
                <td><?php echo $data['keluhan_pasien'] ?></td>
                <td><?php echo $data['hasil_diagnosa'] ?></td>
                <td><?php echo $data['penatalaksanaan'] ?></td>
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