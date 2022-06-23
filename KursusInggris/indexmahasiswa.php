<!DOCTYPE html>
<html>
<head>
    <title>Menampilkan Data Mahasiswa </title>
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
    <h2>Menampilkan Data Mahasiswa</h2>
    <table>
        <thead>
            <tr>
                <td>No</td>
                <td>Nama Mahasiswa</td>
                <td>Kelas</td>
                <td>Hari - Tanggal</td>
                <td>Jam</td>
                <td>Nama Dosen</td>

            </tr>
        </thead>
        <?php
        include "koneksi.php";
        $no = 1;
        $query = mysqli_query($koneksi, 'SELECT Mahasiswa.nama_mahasiswa, Jadwal.Kelas, Jadwal.hari_tanggal, Jadwal.jam, Dosen.nama_dosen FROM Mahasiswa LEFT JOIN Jadwal ON Mahasiswa.id_jadwal = Jadwal.id LEFT JOIN Dosen ON Mahasiswa.id_dosen = Dosen.id');
        while ($data = mysqli_fetch_array($query)) {
        ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $data['nama_mahasiswa'] ?></td>
                <td><?php echo $data['Kelas'] ?></td>
                <td><?php echo $data['hari_tanggal'] ?></td>
                <td><?php echo $data['jam'] ?></td>
                <td><?php echo $data['nama_dosen'] ?></td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>