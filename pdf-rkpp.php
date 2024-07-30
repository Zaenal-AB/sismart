<?php

require_once __DIR__ . '/vendor/autoload.php';

include 'config/app.php';
$rkpp_7a = select("SELECT * FROM rkpp_7a");

$mpdf = new \Mpdf\Mpdf();

$html = '
<html>
<head>
    <style>
        .header {
            font-family: Calibri, sans-serif; 
            font-size:12px;
        }   
    
        .header img {
            height: 100px;        
            }
        
         .line {
            border-bottom: 2px solid white;
            margin-top: 0;
            margin-bottom: 20px;
        }

        .table {
            width: 100%;
            border-collapse: collapse;
        }
        .table, .table th, .table td {
            border: 1px solid black;
        }
        .table th, .table td {
            padding: 5px;
            text-align: center;
        }

    </style>
</head>
<body>
    <div class="header">
        <img src="assets/img/kop.png">
        <div class="line"></div>
    </div>

    <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <tr class="text-center">
                    <th>No</th>
                    <th>Hari</th>
                    <th>Mata Pelajaran</th>
                    <th>Rencana Pembelajaran</th>
                    <th>Tugas Siswa Dirumah</th>
                </tr>
            </thead>
            <tbody>';
                $no = 1;
                $rowspan_count = 6; // Jumlah baris per hari
                foreach ($rkpp_7a as $key => $row) {
                if ($key % $rowspan_count == 0) {
                    $html .= '<tr class="text-center">';
                    $html .= '<td rowspan="' . $rowspan_count . '">' . $no++ . '</td>';
                    $html .= '<td rowspan="' . $rowspan_count . '">' . $row['hari'] . '</td>';
                } else {
                    $html .= '<tr class="text-center">';
                }
                $html .= '<td>' . $row['mapel'] . '</td>';
                $html .= '<td><span>' . $row['rp'] . '</span></td>';
                $html .= '<td><span>' . $row['ts'] . '</span></td>';
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
