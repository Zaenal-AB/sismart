<?php


include __DIR__ . '/../../config/app.php';
include __DIR__ . '/../../vendor/autoload.php';
$rkpp_7a = select("SELECT * FROM rkpp_7a");

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
            text-align: left;
        }
        .table2 {
            width: 100%;
            border: 1px solid black;
            justify-content:flex-start;
            padding: 5px;

        }
    

    </style>
</head>
<body>
    <div class="header">
        <img src="kop.png">
        <div class="line"></div>
    </div>

    <h3 class="judul">Rencana Kegiatan Pembelajaran Pekanan (RKPP) Kelas VII-A</h3>
    <h3 class="judul">SMPIT Anak Sholeh Mataram</h3>

     <div class="card-body">
        <table class="table2">
            <thead>
                <tr class="text-center">
                    <th class="tex">Rencana Pembelajaran</th>
                    <th class="tex">Tugas Siswa Dirumah</th>
                </tr>
            </thead>
            
        </table>
    </div>

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
foreach ($rkpp_7a as $key => $row) {
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
</body>
</html>';

$mpdf->WriteHTML($html);
$mpdf->Output('RencanaPembelajaran.pdf', \Mpdf\Output\Destination::INLINE);
