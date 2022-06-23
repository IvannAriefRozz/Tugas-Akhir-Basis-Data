<!DOCTYPE html>
<html>
<head>
    <title>Menampilkan Data Dosen </title>
    <style>
        table,tr,td {
            border: 1px solid black;
        }
        thead {
            background-color: #cccddd;
        }
    </style>
    <br/>
    <a href="index.php">KEMBALI</a>
    <br/>
</head>
<body>
    <h2>Menampilkan Data Dosen</h2>
    <table>
        <thead>
            <tr>
                <td>No</td>
                <td>Nama Dosen</td>
                <td>No induk</td>
                <td>Hari/Tanggal</td>
                <td>Jam</td>
                <td>kelas</td>                
            </tr>
        </thead>
        <?php
        include "koneksi.php";
        $no = 1;
        $query = mysqli_query($koneksi, 'SELECT Dosen.nama_dosen, Dosen.noinduk, Jadwal.hari_tanggal, Jadwal.Jam, Jadwal.Kelas From Dosen Left Join Jadwal ON Jadwal.id = Dosen.id');
        while ($data = mysqli_fetch_array($query)) {
        ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $data['nama_dosen'] ?></td>
                <td><?php echo $data['noinduk'] ?></td>
                <td><?php echo $data['hari_tanggal'] ?></td>
                <td><?php echo $data['Jam'] ?></td>
                <td><?php echo $data['Kelas'] ?></td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>