<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
    <style>
        table {
            width: 80%;
            border-collapse: collapse;
            margin: auto;
        }

        th,
        td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body>

    <h2 style="text-align: center;">Daftar Mahasiswa</h2>

    <table>
        <thead>
            <tr>
                <th>No.</th>
                <th>Nama Mahasiswa</th>
                <th>NIM</th>
                <th>Nilai</th>
                <th>Keterangan</th>
                <th>Grade</th>
                <th>Predikat</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Data mahasiswa
            $mahasiswa = [
                ["Jokowi", "123456", 85],
                ["Prabowo", "789012", 70],
                ["Amin", "345678", 60],
                ["Bob", "901234", 75],
                ["Charlie", "567890", 95],
                ["Anis", "123789", 26],
                ["Jose", "678901", 80],
                ["Tono", "234567", 65],
                ["Abdul", "890123", 90],
                ["Hannah", "456789", 72]
            ];

            // Variable untuk menyimpan nilai tertinggi, terendah, total nilai, dan jumlah mahasiswa
            $nilai_tertinggi = max(array_column($mahasiswa, 2));
            $nilai_terendah = min(array_column($mahasiswa, 2));
            $total_nilai = array_sum(array_column($mahasiswa, 2));
            $jumlah_mahasiswa = count($mahasiswa);

            // Menampilkan data mahasiswa
            foreach ($mahasiswa as $key => $data) {
                $no = $key + 1;
                $nama = $data[0];
                $nim = $data[1];
                $nilai = $data[2];
                $keterangan = ($nilai >= 65) ? "Lulus" : "Tidak Lulus";
                $grade = ($nilai >= 85) ? "A" : (($nilai >= 75) ? "B" : (($nilai >= 65) ? "C" : "D"));
                $predikat = ($grade == "A") ? "Sangat Memuaskan" : (($grade == "B") ? "Memuaskan" : (($grade == "C") ? "Cukup" : "Kurang"));

                echo "<tr>";
                echo "<td>$no</td>";
                echo "<td>$nama</td>";
                echo "<td>$nim</td>";
                echo "<td>$nilai</td>";
                echo "<td>$keterangan</td>";
                echo "<td>$grade</td>";
                echo "<td>$predikat</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
        <tfoot>
            <tr>
                <td style="text-align: center;" colspan="3">Nilai tertinggi</td>
                <td><?php echo $nilai_tertinggi; ?></td>
                <td colspan="3"></td>
            </tr>
            <tr>
                <td style="text-align: center;" colspan="3">Nilai terendah</td>
                <td><?php echo $nilai_terendah; ?></td>
                <td colspan="3"></td>
            </tr>
            <tr>
                <td style="text-align: center;" colspan="3">Nilai rata-rata</td>
                <td><?php echo number_format($total_nilai / $jumlah_mahasiswa, 2); ?></td>
                <td colspan="3"></td>
            </tr>
            <tr>
                <td style="text-align: center;" colspan="3">Jumlah nilai keseluruhan</td>
                <td><?php echo $total_nilai; ?></td>
                <td colspan="3"></td>
            </tr>
            <tr>
                <td style="text-align: center;" colspan="3">Jumlah mahasiswa</td>
                <td><?php echo $jumlah_mahasiswa; ?></td>
                <td colspan="3"></td>
            </tr>
        </tfoot>
    </table>

</body>

</html>