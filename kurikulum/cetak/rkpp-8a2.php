<?php


include __DIR__ . '/../../config/app.php';
include __DIR__ . '/../../vendor/autoload.php';
$rkpp_8a2 = select("SELECT * FROM rkpp_8a2");
$data = select("SELECT * FROM data_8a2");

$mpdf = new \Mpdf\Mpdf();

$html = '
<html>
<head>
    <style>
        .judul{
            font-family: Calibri, sans-serif;
            font-size: 14px;
            text-align: center;
            margin:0;
        }   
    

        .tex {
            font-family: Calibri, sans-serif;
            font-size: 11;
       }   
        .width1{
            width: 10;
        }

        .width2{
            width: 15;
        }
        
        .width3{
            width: 50;
        }
    
        .header img {
            height: 100px;        
            }
        
         .line {
            border-bottom: 2px solid white;
            margin-top: 0;
            margin-bottom: 0px;
        }

        .table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }
        .table, .table th, .table td {
            border: 1px solid black;
        }

        .table th, .table td {
            padding: 5px;
            text-align: center;
        }
        .table2 {
            width: 100%;
            border: 1px solid black;
            justify-content:flex-start;
            padding: 5px;
        }
    
        .info-table td{
            vertical-align: top;
            padding: 10px;
        }

        .col1{
            width: 50%;
            text-align: left;
        }

        .col2{
            width: 300px;
            text-align: left;
        }

        .col3{
            width: 100;
            text-align: left;
        }
        .block-image{
        display: block;
        margin:0 auto;
        }

    </style>
</head>
<body>
    <div class="header">
        <img src="kop.png">
        <div class="line"></div>
    </div>

    <h3 class="judul">Rencana Kegiatan Pembelajaran Pekanan (RKPP) Kelas VIII-A</h3>
    <h3 class="judul">SMPIT Anak Sholeh Mataram </h3>

    <div class="info-table">';
foreach ($data as $row) {

    $html .= '
        <table>
            <tr>
                <td class="col1">
                    <p class="tex">Kelas</p>
                    <p class="tex">Semester/Tahun</p>
                </td>
                <td class="col1">
                    <p class="tex">: ' . $row['kelas'] . '</p>
                    <p class="tex">: ' . $row['semester'] . '</p>
                </td>
                <td class="col1">
                    <p class="tex">Pekan Ke</p>
                    <p class="tex">Periode</p>
                </td>
                <td class="col1">
                    <p class="tex">: ' . $row['pekan'] . '</p>
                    <p class="tex">: ' . $row['periode'] . '</p>
                </td>
            </tr>
        </table>
    </div>';
}
$html .= '
    <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <tr class="text-center">
                    <th class="tex width1">No</th>
                    <th class="tex width2">Hari</th>
                    <th class="tex width3">Mata Pelajaran</th>
                    <th class="tex">Rencana Pembelajaran</th>
                    <th class="tex">Tugas Siswa Dirumah</th>
                </tr>
            </thead>
            <tbody>';
$no = 1;
$rowspan_count = 6; // Jumlah baris per hari
foreach ($rkpp_8a2 as $key => $row) {
    if ($key % $rowspan_count == 0) {
        $html .= '<tr class="text-center">';
        $html .= '<td class="tex width1" rowspan="' . $rowspan_count . '">' . $no++ . '</td>';
        $html .= '<td class="tex width2" rowspan="' . $rowspan_count . '">' . $row['hari'] . '</td>';
    } else {
        $html .= '<tr class="text-center">';
    }
    $html .= '<td  class="tex width3">' . $row['mapel'] . '</td>';
    $html .= '<td class="tex"><span>' . $row['rp'] . '</span></td>';
    $html .= '<td class="tex"><span>' . $row['ts'] . '</span></td>';
    $html .= '</tr>';
}

$html .= '
            </tbody>
        </table>
    </div>
    <div class="info-table">
        <table>
            <tr>
                 <td class="col3">
                    <p class="tex"> </p>
                    <br>
                    <br>
                    <p class="tex">  </p>
                </td>';
foreach ($data as $row) {

    $html .= '
                <td class="col2">
                    <p class="tex">Mengetahui,</p>
                    <p class="tex">Wakil Kepala Sekolah Bidang Kurikulum</p>
                    <div>
                        <img style="height: 50px;" src="../ttd/' . $row['ttd_waka'] . '" alt="ttd">
                    </div>
                    <p class="tex">' . $row['nama_waka'] . '</p>
                </td>
                <td class="col1">
                    <p class="tex"> </p>
                    <br>
                    <br>
                    <p class="tex">  </p>
                </td>

                <td class="col2">
                    <p class="tex">' . $row['tanggal'] . '</p>
                    <p class="tex">Wali Kelas VIiI-A</p>
                    <div>
                        <img class="block-image" style="height: 50px;" src="../ttd/' . $row['ttd_walas'] . '" alt="ttd">
                    </div>
                    <p class="tex">' . $row['nama_walas'] . '</p>
                </td>
                <td class="col1">
                    <p class="tex"> </p>
                    <br>
                    <br>
                    <p class="tex">  </p>
                </td>
            </tr>
        </table>
    </div>';
}
$html .= '
</body>
</html>';

$mpdf->WriteHTML($html);
$mpdf->Output('RKPP VIII-A.pdf', \Mpdf\Output\Destination::INLINE);
