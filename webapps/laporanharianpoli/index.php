<?php
    // include "koneksi.php";
    require_once('koneksi.php');
    include "hari.php";
    include "query.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <!-- <link rel="stylesheet" href="index.css"> -->
    <title>LAPORAN POLI HARIAN</title>
</head>
<body>
    <div class="container">
        <h1 class="text-center">LAPORAN SENSUS HARIAN</h1>
        <?php $tgl=date('d-m-Y'); echo "<h2 class='text-center'>".hari_ini().", $tgl</h2>"; ?>
        <br><br>
         <div class="row">
             <div class="col text-center">
                <a class="btn btn-primary" href="exporttoexcel.php"> Export Ke Excel</a>
             </div>
         </div>
         <br><br>
   
    <table class="table table-bordered">
        <thead class="thead-light">
            <tr>
                <th class="text-center align-middle" rowspan="3">No.</th>
                <th class="text-center align-middle" rowspan="3">Poliklinik</th>
                <th class="text-center" colspan="4">Umum</th>
                <th class="text-center" colspan="4">BPJS</th>
                <th class="text-center" colspan="4">Jasa Raharja / YanKes</th>
                <th class="text-center align-middle" rowspan="3">TOTAL</th>
            </tr>
            <tr>
                <th class="text-center" colspan="2" align="center">Baru</th>
                <th class="text-center" colspan="2" align="center">Lama</th>
                <th class="text-center" colspan="2" align="center">Baru</th>
                <th class="text-center" colspan="2" align="center">Lama</th>
                <th class="text-center" colspan="2" align="center">Baru</th>
                <th class="text-center" colspan="2" align="center">Lama</th>
            </tr>
            <tr>
                <th class="text-center" align="center">L</th>
                <th class="text-center" align="center">P</th>
                <th class="text-center" align="center">L</th>
                <th class="text-center" align="center">P</th>
                <th class="text-center" align="center">L</th>
                <th class="text-center" align="center">P</th>
                <th class="text-center" align="center">L</th>
                <th class="text-center" align="center">P</th>
                <th class="text-center" align="center">L</th>
                <th class="text-center" align="center">P</th>
                <th class="text-center" align="center">L</th>
                <th class="text-center" align="center">P</th>
            </tr>
        </thead>
       <?php           
            // IGD
            echo "<tr>";
            echo "<td align='center'>1</td>";
            echo "<td>INSTALASI GAWAT DARURAT</td>";
            // IGD UMUM BARU
            while ($row_igdumumlbru = $hasil_igdumumlbru->fetch_assoc()) {
                echo "<td align='center'>".$row_igdumumlbru['IGDUMUMLBRU']."</td>";                
            }
            while ($row_igdumumpbru = $hasil_igdumumpbru->fetch_assoc()) {
                echo "<td align='center'>".$row_igdumumpbru['IGDUMUMPBRU']."</td>";                
            }

            // IGD UMUM LAMA
            while ($row_igdumumllma = $hasil_igdumumllma->fetch_assoc()) {
                echo "<td align='center'>".$row_igdumumllma['IGDUMUMLLMA']."</td>";                
            }
            while ($row_igdumumplma = $hasil_igdumumplma->fetch_assoc()) {
                echo "<td align='center'>".$row_igdumumplma['IGDUMUMPLMA']."</td>";                
            }


            // IGD BPJS BARU
            while ($row_igdbpjslbru = $hasil_igdbpjslbru->fetch_assoc()) {
                echo "<td align='center'>".$row_igdbpjslbru['IGDBPJSLBRU']."</td>";                
            }
            while ($row_igdbpjspbru = $hasil_igdbpjspbru->fetch_assoc()) {
                echo "<td align='center'>".$row_igdbpjspbru['IGDBPJSPBRU']."</td>";                
            }

            // IGD BPJS LAMA
            while ($row_igdbpjsllma = $hasil_igdbpjsllma->fetch_assoc()) {
                echo "<td align='center'>".$row_igdbpjsllma['IGDBPJSLLMA']."</td>";                
            }
            while ($row_igdbpjsplma = $hasil_igdbpjsplma->fetch_assoc()) {
                echo "<td align='center'>".$row_igdbpjsplma['IGDBPJSPLMA']."</td>";                
            }

            // IGD JASA RAHARJA BARU
            while ($row_igdjasaraharjalbru = $hasil_igdjasaraharjalbru->fetch_assoc()) {
                echo "<td align='center'>".$row_igdjasaraharjalbru['IGDJASARAHARJALBRU']."</td>";                
            }
            while ($row_igdjasaraharjapbru = $hasil_igdjasaraharjapbru->fetch_assoc()) {
                echo "<td align='center'>".$row_igdjasaraharjapbru['IGDJASARAHARJAPBRU']."</td>";                
            }

            // IGD JASA RAHARJA LAMA
            while ($row_igdjasaraharjallma = $hasil_igdjasaraharjallma->fetch_assoc()) {
                echo "<td align='center'>".$row_igdjasaraharjallma['IGDJASARAHARJALLMA']."</td>";                
            }
            while ($row_igdjasaraharjaplma = $hasil_igdjasaraharjaplma->fetch_assoc()) {
                echo "<td align='center'>".$row_igdjasaraharjaplma['IGDJASARAHARJAPLMA']."</td>";                
            }

            // IGD TOTAL
            while ($row_igdtotal = $hasil_igdtotal->fetch_assoc()) {
                echo "<td align='center'>".$row_igdtotal['IGDTOTAL']."</td>";
            }

            echo "</tr>";

            echo "<tr>";
            echo "<td align='center'>2</td>";
            echo "<td>KLINIK SP. BEDAH UMUM</td>";
            // KLINIK SP. BEDAH UMUM UMUM BARU
            while ($row_bedahumumlbru = $hasil_bedahumumlbru->fetch_assoc()) {
                echo "<td align='center'>".$row_bedahumumlbru['BEDAHUMUMUMUMLBRU']."</td>";                
            }
            while ($row_bedahumumpbru = $hasil_bedahumumpbru->fetch_assoc()) {
                echo "<td align='center'>".$row_bedahumumpbru['BEDAHUMUMUMUMPBRU']."</td>";                
            }

            // KLINIK SP. BEDAH UMUM UMUM LAMA
            while ($row_bedahumumllma = $hasil_bedahumumllma->fetch_assoc()) {
                echo "<td align='center'>".$row_bedahumumllma['BEDAHUMUMUMUMLLMA']."</td>";                
            }
            while ($row_bedahumumplma = $hasil_bedahumumplma->fetch_assoc()) {
                echo "<td align='center'>".$row_bedahumumplma['BEDAHUMUMUMUMPLMA']."</td>";                
            }

            // KLINIK SP. BEDAH UMUM BPJS BARU
            while ($row_bedahumumbpjslbru = $hasil_bedahumumbpjslbru->fetch_assoc()) {
                echo "<td align='center'>".$row_bedahumumbpjslbru['BEDAHUMUMBPJSLBRU']."</td>";                
            }
            while ($row_bedahumumbpjspbru = $hasil_bedahumumbpjspbru->fetch_assoc()) {
                echo "<td align='center'>".$row_bedahumumbpjspbru['BEDAHUMUMBPJSPBRU']."</td>";                
            }

            // KLINIK SP. BEDAH UMUM BPJS LAMA
            while ($row_bedahumumbpjsllma = $hasil_bedahumumbpjsllma->fetch_assoc()) {
                echo "<td align='center'>".$row_bedahumumbpjsllma['BEDAHUMUMBPJSLLMA']."</td>";                
            }
            while ($row_bedahumumbpjsplma = $hasil_bedahumumbpjsplma->fetch_assoc()) {
                echo "<td align='center'>".$row_bedahumumbpjsplma['BEDAHUMUMBPJSPLMA']."</td>";                
            }

            // KLINIK SP. BEDAH UMUM JASA RAHARJA BARU
            while ($row_bedahumumjasaraharjalbru = $hasil_bedahumumjasaraharjalbru->fetch_assoc()) {
                echo "<td align='center'>".$row_bedahumumjasaraharjalbru['BEDAHUMUMJASARAHARJALBRU']."</td>";                
            }
            while ($row_bedahumumjasaraharjapbru = $hasil_bedahumumjasaraharjapbru->fetch_assoc()) {
                echo "<td align='center'>".$row_bedahumumjasaraharjapbru['BEDAHUMUMJASARAHARJAPBRU']."</td>";                
            }

            // KLINIK SP. BEDAH UMUM JASA RAHARJA LAMA
            while ($row_bedahumumjasaraharjallma = $hasil_bedahumumjasaraharjallma->fetch_assoc()) {
                echo "<td align='center'>".$row_bedahumumjasaraharjallma['BEDAHUMUMJASARAHARJALLMA']."</td>";                
            }
            while ($row_bedahumumjasaraharjaplma = $hasil_bedahumumjasaraharjaplma->fetch_assoc()) {
                echo "<td align='center'>".$row_bedahumumjasaraharjaplma['BEDAHUMUMJASARAHARJAPLMA']."</td>";                
            }
                
            // BEDAH UMUM TOTAL
            while ($row_bedahumumtotal = $hasil_bedahumumtotal->fetch_assoc()) {
                echo "<td align='center'>".$row_bedahumumtotal['BEDAHUMUMTOTAL']."</td>";
            }
            echo "</tr>";

            // 	KLINIK SP. BEDAH DIGESTIF
            echo "<tr>";
            echo "<td align='center'>3</td>";
            echo "<td>KLINIK SP. BEDAH DIGESTIF</td>";

            // KLINIK SP. BEDAH DIGESTIF UMUM BARU
            while ($row_digestifumumlbru = $hasil_digestifumumlbru->fetch_assoc()) {
                echo "<td align='center'>".$row_digestifumumlbru['DIGESTIFUMUMLBRU']."</td>";                
            }
            while ($row_digestifumumpbru = $hasil_digestifumumpbru->fetch_assoc()) {
                echo "<td align='center'>".$row_digestifumumpbru['DIGESTIFUMUMPBRU']."</td>";                
            }

            // KLINIK SP. BEDAH DIGESTIF UMUM LAMA
            while ($row_digestifumumllma = $hasil_digestifumumllma->fetch_assoc()) {
                echo "<td align='center'>".$row_digestifumumllma['DIGESTIFUMUMLLMA']."</td>";                
            }
            while ($row_digestifumumplma = $hasil_digestifumumplma->fetch_assoc()) {
                echo "<td align='center'>".$row_digestifumumplma['DIGESTIFUMUMPLMA']."</td>";                
            }

            // KLINIK SP. BEDAH DIGESTIF BPJS BARU
            while ($row_digestifbpjslbru = $hasil_digestifbpjslbru->fetch_assoc()) {
                echo "<td align='center'>".$row_digestifbpjslbru['DIGESTIFBPJSLBRU']."</td>";                
            }
            while ($row_digestifbpjspbru = $hasil_digestifbpjspbru->fetch_assoc()) {
                echo "<td align='center'>".$row_digestifbpjspbru['DIGESTIFBPJSPBRU']."</td>";                
            }

            // KLINIK SP. BEDAH DIGESTIF BPJS LAMA
            while ($row_digestifbpjsllma = $hasil_digestifbpjsllma->fetch_assoc()) {
                echo "<td align='center'>".$row_digestifbpjsllma['DIGESTIFBPJSLLMA']."</td>";                
            }
            while ($row_digestifbpjsplma = $hasil_digestifbpjsplma->fetch_assoc()) {
                echo "<td align='center'>".$row_digestifbpjsplma['DIGESTIFBPJSPLMA']."</td>";                
            }

            // KLINIK SP. BEDAH DIGESTIF JASA RAHARJA BARU
            while ($row_digestifjasaraharjalbru = $hasil_digestifjasaraharjalbru->fetch_assoc()) {
                echo "<td align='center'>".$row_digestifjasaraharjalbru['DIGESTIFJASARAHARJALBRU']."</td>";                
            }
            while ($row_digestifjasaraharjapbru = $hasil_digestifjasaraharjapbru->fetch_assoc()) {
                echo "<td align='center'>".$row_digestifjasaraharjapbru['DIGESTIFJASARAHARJAPBRU']."</td>";                
            }

            // KLINIK SP. BEDAH DIGESTIF JASA RAHARJA LAMA
            while ($row_digestifjasaraharjallma = $hasil_digestifjasaraharjallma->fetch_assoc()) {
                echo "<td align='center'>".$row_digestifjasaraharjallma['DIGESTIFJASARAHARJALLMA']."</td>";                
            }
            while ($row_digestifjasaraharjaplma = $hasil_digestifjasaraharjaplma->fetch_assoc()) {
                echo "<td align='center'>".$row_digestifjasaraharjaplma['DIGESTIFJASARAHARJAPLMA']."</td>";                
            }
                
            // BEDAH DIGESTIF TOTAL
            while ($row_digestiftotal = $hasil_digestiftotal->fetch_assoc()) {
                echo "<td align='center'>".$row_digestiftotal['DIGESTIFTOTAL']."</td>";
            }
            echo "</tr>";

            // KLINIK SP. BEDAH VASKULER
            echo "<tr>";
            echo "<td align='center'>4</td>";
            echo "<td>KLINIK SP. BEDAH VASKULER</td>";

            // KLINIK SP. BEDAH VASKULER UMUM BARU
            while ($row_vaskulerumumlbru = $hasil_vaskulerumumlbru->fetch_assoc()) {
                echo "<td align='center'>".$row_vaskulerumumlbru['VASKULERUMUMLBRU']."</td>";                
            }
            while ($row_vaskulerumumpbru = $hasil_vaskulerumumpbru->fetch_assoc()) {
                echo "<td align='center'>".$row_vaskulerumumpbru['VASKULERUMUMPBRU']."</td>";                
            }

            // KLINIK SP. BEDAH VASKULER UMUM LAMA
            while ($row_vaskulerumumllma = $hasil_vaskulerumumllma->fetch_assoc()) {
                echo "<td align='center'>".$row_vaskulerumumllma['VASKULERUMUMLLMA']."</td>";                
            }
            while ($row_vaskulerumumplma = $hasil_vaskulerumumplma->fetch_assoc()) {
                echo "<td align='center'>".$row_vaskulerumumplma['VASKULERUMUMPLMA']."</td>";                
            }

            // KLINIK SP. BEDAH VASKULER BPJS BARU
            while ($row_vaskulerbpjslbru = $hasil_vaskulerbpjslbru->fetch_assoc()) {
                echo "<td align='center'>".$row_vaskulerbpjslbru['VASKULERBPJSLBRU']."</td>";                
            }
            while ($row_vaskulerbpjspbru = $hasil_vaskulerbpjspbru->fetch_assoc()) {
                echo "<td align='center'>".$row_vaskulerbpjspbru['VASKULERBPJSPBRU']."</td>";                
            }

            // KLINIK SP. BEDAH VASKULER BPJS LAMA
            while ($row_vaskulerbpjsllma = $hasil_vaskulerbpjsllma->fetch_assoc()) {
                echo "<td align='center'>".$row_vaskulerbpjsllma['VASKULERBPJSLLMA']."</td>";                
            }
            while ($row_vaskulerbpjsplma = $hasil_vaskulerbpjsplma->fetch_assoc()) {
                echo "<td align='center'>".$row_vaskulerbpjsplma['VASKULERBPJSPLMA']."</td>";                
            }

            // KLINIK SP. BEDAH VASKULER JASA RAHARJA BARU
            while ($row_vaskulerjasaraharjalbru = $hasil_vaskulerjasaraharjalbru->fetch_assoc()) {
                echo "<td align='center'>".$row_vaskulerjasaraharjalbru['VASKULERJASARAHARJALBRU']."</td>";                
            }
            while ($row_vaskulerjasaraharjapbru = $hasil_vaskulerjasaraharjapbru->fetch_assoc()) {
                echo "<td align='center'>".$row_vaskulerjasaraharjapbru['VASKULERJASARAHARJAPBRU']."</td>";                
            }

            // KLINIK SP. BEDAH VASKULER JASA RAHARJA LAMA
            while ($row_vaskulerjasaraharjallma = $hasil_vaskulerjasaraharjallma->fetch_assoc()) {
                echo "<td align='center'>".$row_vaskulerjasaraharjallma['VASKULERJASARAHARJALLMA']."</td>";                
            }
            while ($row_vaskulerjasaraharjaplma = $hasil_vaskulerjasaraharjaplma->fetch_assoc()) {
                echo "<td align='center'>".$row_vaskulerjasaraharjaplma['VASKULERJASARAHARJAPLMA']."</td>";                
            }
                
            // BEDAH VASKULER TOTAL
            while ($row_vaskulertotal = $hasil_vaskulertotal->fetch_assoc()) {
                echo "<td align='center'>".$row_vaskulertotal['VASKULERTOTAL']."</td>";
            }

            echo"</tr>";


            // KLINIK SP. BEDAH ANAK
            echo "<tr>";
            echo "<td align='center'>5</td>";
            echo "<td>KLINIK SP. BEDAH ANAK</td>";

            // KLINIK SP. BEDAH ANAK UMUM BARU
            while ($row_bdhanakumumlbru = $hasil_bdhanakumumlbru->fetch_assoc()) {
                echo "<td align='center'>".$row_bdhanakumumlbru['BDHANAKUMUMLBRU']."</td>";                
            }
            while ($row_bdhanakumumpbru = $hasil_bdhanakumumpbru->fetch_assoc()) {
                echo "<td align='center'>".$row_bdhanakumumpbru['BDHANAKUMUMPBRU']."</td>";                
            }

            // KLINIK SP. BEDAH ANAK UMUM LAMA
            while ($row_bdhanakumumllma = $hasil_bdhanakumumllma->fetch_assoc()) {
                echo "<td align='center'>".$row_bdhanakumumllma['BDHANAKUMUMLLMA']."</td>";                
            }
            while ($row_bdhanakumumplma = $hasil_bdhanakumumplma->fetch_assoc()) {
                echo "<td align='center'>".$row_bdhanakumumplma['BDHANAKUMUMPLMA']."</td>";                
            }

            // KLINIK SP. BEDAH ANAK BPJS BARU
            while ($row_bdhanakbpjslbru = $hasil_bdhanakbpjslbru->fetch_assoc()) {
                echo "<td align='center'>".$row_bdhanakbpjslbru['BDHANAKBPJSLBRU']."</td>";                
            }
            while ($row_bdhanakbpjspbru = $hasil_bdhanakbpjspbru->fetch_assoc()) {
                echo "<td align='center'>".$row_bdhanakbpjspbru['BDHANAKBPJSPBRU']."</td>";                
            }

            // KLINIK SP. BEDAH ANAK BPJS LAMA
            while ($row_bdhanakbpjsllma = $hasil_bdhanakbpjsllma->fetch_assoc()) {
                echo "<td align='center'>".$row_bdhanakbpjsllma['BDHANAKBPJSLLMA']."</td>";                
            }
            while ($row_bdhanakbpjsplma = $hasil_bdhanakbpjsplma->fetch_assoc()) {
                echo "<td align='center'>".$row_bdhanakbpjsplma['BDHANAKBPJSPLMA']."</td>";                
            }

            // KLINIK SP. BEDAH ANAK JASA RAHARJA BARU
            while ($row_bdhanakjasaraharjalbru = $hasil_bdhanakjasaraharjalbru->fetch_assoc()) {
                echo "<td align='center'>".$row_bdhanakjasaraharjalbru['BDHANAKJASARAHARJALBRU']."</td>";                
            }
            while ($row_bdhanakjasaraharjapbru = $hasil_bdhanakjasaraharjapbru->fetch_assoc()) {
                echo "<td align='center'>".$row_bdhanakjasaraharjapbru['BDHANAKJASARAHARJAPBRU']."</td>";                
            }

            // KLINIK SP. BEDAH ANAK JASA RAHARJA LAMA
            while ($row_bdhanakjasaraharjallma = $hasil_bdhanakjasaraharjallma->fetch_assoc()) {
                echo "<td align='center'>".$row_bdhanakjasaraharjallma['BDHANAKJASARAHARJALLMA']."</td>";                
            }
            while ($row_bdhanakjasaraharjaplma = $hasil_bdhanakjasaraharjaplma->fetch_assoc()) {
                echo "<td align='center'>".$row_bdhanakjasaraharjaplma['BDHANAKJASARAHARJAPLMA']."</td>";                
            }
                
            // BEDAH ANAK TOTAL
            while ($row_bdhanaktotal = $hasil_bdhanaktotal->fetch_assoc()) {
                echo "<td align='center'>".$row_bdhanaktotal['BDHANAKTOTAL']."</td>";
            }

            echo"</tr>";


            // KLINIK SP. BEDAH PLASTIK
            echo "<tr>";
            echo "<td align='center'>6</td>";
            echo "<td>KLINIK SP. BEDAH PLASTIK</td>";

            // KLINIK SP. BEDAH PLASTIK UMUM BARU
            while ($row_bdhplskumumlbru = $hasil_bdhplskumumlbru->fetch_assoc()) {
                echo "<td align='center'>".$row_bdhplskumumlbru['BDHPLSKUMUMLBRU']."</td>";                
            }
            while ($row_bdhplskumumpbru = $hasil_bdhplskumumpbru->fetch_assoc()) {
                echo "<td align='center'>".$row_bdhplskumumpbru['BDHPLSKUMUMPBRU']."</td>";                
            }

            // KLINIK SP. BEDAH PLASTIK UMUM LAMA
            while ($row_bdhplskumumllma = $hasil_bdhplskumumllma->fetch_assoc()) {
                echo "<td align='center'>".$row_bdhplskumumllma['BDHPLSKUMUMLLMA']."</td>";                
            }
            while ($row_bdhplskumumplma = $hasil_bdhplskumumplma->fetch_assoc()) {
                echo "<td align='center'>".$row_bdhplskumumplma['BDHPLSKUMUMPLMA']."</td>";                
            }

            // KLINIK SP. BEDAH PLASTIK BPJS BARU
            while ($row_bdhplskbpjslbru = $hasil_bdhplskbpjslbru->fetch_assoc()) {
                echo "<td align='center'>".$row_bdhplskbpjslbru['BDHPLSKBPJSLBRU']."</td>";                
            }
            while ($row_bdhplskbpjspbru = $hasil_bdhplskbpjspbru->fetch_assoc()) {
                echo "<td align='center'>".$row_bdhplskbpjspbru['BDHPLSKBPJSPBRU']."</td>";                
            }

            // KLINIK SP. BEDAH PLASTIK BPJS LAMA
            while ($row_bdhplskbpjsllma = $hasil_bdhplskbpjsllma->fetch_assoc()) {
                echo "<td align='center'>".$row_bdhplskbpjsllma['BDHPLSKBPJSLLMA']."</td>";                
            }
            while ($row_bdhplskbpjsplma = $hasil_bdhplskbpjsplma->fetch_assoc()) {
                echo "<td align='center'>".$row_bdhplskbpjsplma['BDHPLSKBPJSPLMA']."</td>";                
            }

            // KLINIK SP. BEDAH PLASTIK JASA RAHARJA BARU
            while ($row_bdhplskjasaraharjalbru = $hasil_bdhplskjasaraharjalbru->fetch_assoc()) {
                echo "<td align='center'>".$row_bdhplskjasaraharjalbru['BDHPLSKJASARAHARJALBRU']."</td>";                
            }
            while ($row_bdhplskjasaraharjapbru = $hasil_bdhplskjasaraharjapbru->fetch_assoc()) {
                echo "<td align='center'>".$row_bdhplskjasaraharjapbru['BDHPLSKJASARAHARJAPBRU']."</td>";                
            }

            // KLINIK SP. BEDAH PLASTIK JASA RAHARJA LAMA
            while ($row_bdhplskjasaraharjallma = $hasil_bdhplskjasaraharjallma->fetch_assoc()) {
                echo "<td align='center'>".$row_bdhplskjasaraharjallma['BDHPLSKJASARAHARJALLMA']."</td>";                
            }
            while ($row_bdhplskjasaraharjaplma = $hasil_bdhplskjasaraharjaplma->fetch_assoc()) {
                echo "<td align='center'>".$row_bdhplskjasaraharjaplma['BDHPLSKJASARAHARJAPLMA']."</td>";                
            }
                
            // BEDAH PLASTIK TOTAL
            while ($row_bdhplsktotal = $hasil_bdhplsktotal->fetch_assoc()) {
                echo "<td align='center'>".$row_bdhplsktotal['BDHPLSKTOTAL']."</td>";
            }

            echo"</tr>";


            // KLINIK SP. BEDAH SARAF
            echo "<tr>";
            echo "<td align='center'>7</td>";
            echo "<td>KLINIK SP. BEDAH SARAF</td>";

            // KLINIK SP. BEDAH SARAF UMUM BARU
            while ($row_bdhsrfumumlbru = $hasil_bdhsrfumumlbru->fetch_assoc()) {
                echo "<td align='center'>".$row_bdhsrfumumlbru['BDHSRFUMUMLBRU']."</td>";                
            }
            while ($row_bdhsrfumumpbru = $hasil_bdhsrfumumpbru->fetch_assoc()) {
                echo "<td align='center'>".$row_bdhsrfumumpbru['BDHSRFUMUMPBRU']."</td>";                
            }

            // KLINIK SP. BEDAH SARAF UMUM LAMA
            while ($row_bdhsrfumumllma = $hasil_bdhsrfumumllma->fetch_assoc()) {
                echo "<td align='center'>".$row_bdhsrfumumllma['BDHSRFUMUMLLMA']."</td>";                
            }
            while ($row_bdhsrfumumplma = $hasil_bdhsrfumumplma->fetch_assoc()) {
                echo "<td align='center'>".$row_bdhsrfumumplma['BDHSRFUMUMPLMA']."</td>";                
            }

            // KLINIK SP. BEDAH SARAF BPJS BARU
            while ($row_bdhsrfbpjslbru = $hasil_bdhsrfbpjslbru->fetch_assoc()) {
                echo "<td align='center'>".$row_bdhsrfbpjslbru['BDHSRFBPJSLBRU']."</td>";                
            }
            while ($row_bdhsrfbpjspbru = $hasil_bdhsrfbpjspbru->fetch_assoc()) {
                echo "<td align='center'>".$row_bdhsrfbpjspbru['BDHSRFBPJSPBRU']."</td>";                
            }

            // KLINIK SP. BEDAH SARAF BPJS LAMA
            while ($row_bdhsrfbpjsllma = $hasil_bdhsrfbpjsllma->fetch_assoc()) {
                echo "<td align='center'>".$row_bdhsrfbpjsllma['BDHSRFBPJSLLMA']."</td>";                
            }
            while ($row_bdhsrfbpjsplma = $hasil_bdhsrfbpjsplma->fetch_assoc()) {
                echo "<td align='center'>".$row_bdhsrfbpjsplma['BDHSRFBPJSPLMA']."</td>";                
            }

            // KLINIK SP. BEDAH SARAF JASA RAHARJA BARU
            while ($row_bdhsrfjasaraharjalbru = $hasil_bdhsrfjasaraharjalbru->fetch_assoc()) {
                echo "<td align='center'>".$row_bdhsrfjasaraharjalbru['BDHSRFJASARAHARJALBRU']."</td>";                
            }
            while ($row_bdhsrfjasaraharjapbru = $hasil_bdhsrfjasaraharjapbru->fetch_assoc()) {
                echo "<td align='center'>".$row_bdhsrfjasaraharjapbru['BDHSRFJASARAHARJAPBRU']."</td>";                
            }

            // KLINIK SP. BEDAH SARAF JASA RAHARJA LAMA
            while ($row_bdhsrfjasaraharjallma = $hasil_bdhsrfjasaraharjallma->fetch_assoc()) {
                echo "<td align='center'>".$row_bdhsrfjasaraharjallma['BDHSRFJASARAHARJALLMA']."</td>";                
            }
            while ($row_bdhsrfjasaraharjaplma = $hasil_bdhsrfjasaraharjaplma->fetch_assoc()) {
                echo "<td align='center'>".$row_bdhsrfjasaraharjaplma['BDHSRFJASARAHARJAPLMA']."</td>";                
            }
                
            // BEDAH SARAF TOTAL
            while ($row_bdhsrftotal = $hasil_bdhsrftotal->fetch_assoc()) {
                echo "<td align='center'>".$row_bdhsrftotal['BDHSRFTOTAL']."</td>";
            }

            echo"</tr>";


            // KLINIK SP. BEDAH THORAX KV
            echo "<tr>";
            echo "<td align='center'>8</td>";
            echo "<td>KLINIK SP. BEDAH THORAX KV</td>";

            // 	KLINIK SP. BEDAH THORAX KV UMUM BARU
            while ($row_bdhthrxkvumumlbru = $hasil_bdhthrxkvumumlbru->fetch_assoc()) {
                echo "<td align='center'>".$row_bdhthrxkvumumlbru['BDHTHRXKVUMUMLBRU']."</td>";                
            }
            while ($row_bdhthrxkvumumpbru = $hasil_bdhthrxkvumumpbru->fetch_assoc()) {
                echo "<td align='center'>".$row_bdhthrxkvumumpbru['BDHTHRXKVUMUMPBRU']."</td>";                
            }

            // 	KLINIK SP. BEDAH THORAX KV UMUM LAMA
            while ($row_bdhthrxkvumumllma = $hasil_bdhthrxkvumumllma->fetch_assoc()) {
                echo "<td align='center'>".$row_bdhthrxkvumumllma['BDHTHRXKVUMUMLLMA']."</td>";                
            }
            while ($row_bdhthrxkvumumplma = $hasil_bdhthrxkvumumplma->fetch_assoc()) {
                echo "<td align='center'>".$row_bdhthrxkvumumplma['BDHTHRXKVUMUMPLMA']."</td>";                
            }

            // 	KLINIK SP. BEDAH THORAX KV BPJS BARU
            while ($row_bdhthrxkvbpjslbru = $hasil_bdhthrxkvbpjslbru->fetch_assoc()) {
                echo "<td align='center'>".$row_bdhthrxkvbpjslbru['BDHTHRXKVBPJSLBRU']."</td>";                
            }
            while ($row_bdhthrxkvbpjspbru = $hasil_bdhthrxkvbpjspbru->fetch_assoc()) {
                echo "<td align='center'>".$row_bdhthrxkvbpjspbru['BDHTHRXKVBPJSPBRU']."</td>";                
            }

            // 	KLINIK SP. BEDAH THORAX KV BPJS LAMA
            while ($row_bdhthrxkvbpjsllma = $hasil_bdhthrxkvbpjsllma->fetch_assoc()) {
                echo "<td align='center'>".$row_bdhthrxkvbpjsllma['BDHTHRXKVBPJSLLMA']."</td>";                
            }
            while ($row_bdhthrxkvbpjsplma = $hasil_bdhthrxkvbpjsplma->fetch_assoc()) {
                echo "<td align='center'>".$row_bdhthrxkvbpjsplma['BDHTHRXKVBPJSPLMA']."</td>";                
            }

            // 	KLINIK SP. BEDAH THORAX KV JASA RAHARJA BARU
            while ($row_bdhthrxkvjasaraharjalbru = $hasil_bdhthrxkvjasaraharjalbru->fetch_assoc()) {
                echo "<td align='center'>".$row_bdhthrxkvjasaraharjalbru['BDHTHRXKVJASARAHARJALBRU']."</td>";                
            }
            while ($row_bdhthrxkvjasaraharjapbru = $hasil_bdhthrxkvjasaraharjapbru->fetch_assoc()) {
                echo "<td align='center'>".$row_bdhthrxkvjasaraharjapbru['BDHTHRXKVJASARAHARJAPBRU']."</td>";                
            }

            // 	KLINIK SP. BEDAH THORAX KV JASA RAHARJA LAMA
            while ($row_bdhthrxkvjasaraharjallma = $hasil_bdhthrxkvjasaraharjallma->fetch_assoc()) {
                echo "<td align='center'>".$row_bdhthrxkvjasaraharjallma['BDHTHRXKVJASARAHARJALLMA']."</td>";                
            }
            while ($row_bdhthrxkvjasaraharjaplma = $hasil_bdhthrxkvjasaraharjaplma->fetch_assoc()) {
                echo "<td align='center'>".$row_bdhthrxkvjasaraharjaplma['BDHTHRXKVJASARAHARJAPLMA']."</td>";                
            }
                
            // BEDAH THORAX KV TOTAL
            while ($row_bdhthrxkvtotal = $hasil_bdhthrxkvtotal->fetch_assoc()) {
                echo "<td align='center'>".$row_bdhthrxkvtotal['BDHTHRXKVTOTAL']."</td>";
            }

            echo"</tr>";


            // KLINIK SP. GIGI BEDAH MULUT
            echo "<tr>";
            echo "<td align='center'>9</td>";
            echo "<td>KLINIK SP. GIGI BEDAH MULUT</td>";

            // 	KLINIK SP. GIGI BEDAH MULUT UMUM BARU
            while ($row_ggbdhmltumumlbru = $hasil_ggbdhmltumumlbru->fetch_assoc()) {
                echo "<td align='center'>".$row_ggbdhmltumumlbru['GGBDHMLTUMUMLBRU']."</td>";                
            }
            while ($row_ggbdhmltumumpbru = $hasil_ggbdhmltumumpbru->fetch_assoc()) {
                echo "<td align='center'>".$row_ggbdhmltumumpbru['GGBDHMLTUMUMPBRU']."</td>";                
            }

            // 	KLINIK SP. GIGI BEDAH MULUT UMUM LAMA
            while ($row_ggbdhmltumumllma = $hasil_ggbdhmltumumllma->fetch_assoc()) {
                echo "<td align='center'>".$row_ggbdhmltumumllma['GGBDHMLTUMUMLLMA']."</td>";                
            }
            while ($row_ggbdhmltumumplma = $hasil_ggbdhmltumumplma->fetch_assoc()) {
                echo "<td align='center'>".$row_ggbdhmltumumplma['GGBDHMLTUMUMPLMA']."</td>";                
            }

            // 	KLINIK SP. GIGI BEDAH MULUT BPJS BARU
            while ($row_ggbdhmltbpjslbru = $hasil_ggbdhmltbpjslbru->fetch_assoc()) {
                echo "<td align='center'>".$row_ggbdhmltbpjslbru['GGBDHMLTBPJSLBRU']."</td>";                
            }
            while ($row_ggbdhmltbpjspbru = $hasil_ggbdhmltbpjspbru->fetch_assoc()) {
                echo "<td align='center'>".$row_ggbdhmltbpjspbru['GGBDHMLTBPJSPBRU']."</td>";                
            }

            // 	KLINIK SP. GIGI BEDAH MULUT BPJS LAMA
            while ($row_ggbdhmltbpjsllma = $hasil_ggbdhmltbpjsllma->fetch_assoc()) {
                echo "<td align='center'>".$row_ggbdhmltbpjsllma['GGBDHMLTBPJSLLMA']."</td>";                
            }
            while ($row_ggbdhmltbpjsplma = $hasil_ggbdhmltbpjsplma->fetch_assoc()) {
                echo "<td align='center'>".$row_ggbdhmltbpjsplma['GGBDHMLTBPJSPLMA']."</td>";                
            }

            // 	KLINIK SP. GIGI BEDAH MULUT JASA RAHARJA BARU
            while ($row_ggbdhmltjasaraharjalbru = $hasil_ggbdhmltjasaraharjalbru->fetch_assoc()) {
                echo "<td align='center'>".$row_ggbdhmltjasaraharjalbru['GGBDHMLTJASARAHARJALBRU']."</td>";                
            }
            while ($row_ggbdhmltjasaraharjapbru = $hasil_ggbdhmltjasaraharjapbru->fetch_assoc()) {
                echo "<td align='center'>".$row_ggbdhmltjasaraharjapbru['GGBDHMLTJASARAHARJAPBRU']."</td>";                
            }

            // 	KLINIK SP. GIGI BEDAH MULUT JASA RAHARJA LAMA
            while ($row_ggbdhmltjasaraharjallma = $hasil_ggbdhmltjasaraharjallma->fetch_assoc()) {
                echo "<td align='center'>".$row_ggbdhmltjasaraharjallma['GGBDHMLTJASARAHARJALLMA']."</td>";                
            }
            while ($row_ggbdhmltjasaraharjaplma = $hasil_ggbdhmltjasaraharjaplma->fetch_assoc()) {
                echo "<td align='center'>".$row_ggbdhmltjasaraharjaplma['GGBDHMLTJASARAHARJAPLMA']."</td>";                
            }
                
            // GIGI BEDAH MULUT TOTAL
            while ($row_ggbdhmlttotal = $hasil_ggbdhmlttotal->fetch_assoc()) {
                echo "<td align='center'>".$row_ggbdhmlttotal['GGBDHMLTTOTAL']."</td>";
            }

            echo"</tr>";


            // KLINIK SP. PENYAKIT DALAM
            echo "<tr>";
            echo "<td align='center'>10</td>";
            echo "<td>KLINIK SP. PENYAKIT DALAM</td>";

            // 	KLINIK SP. PENYAKIT DALAM UMUM BARU
            while ($row_pdlmumumlbru = $hasil_pdlmumumlbru->fetch_assoc()) {
                echo "<td align='center'>".$row_pdlmumumlbru['PDLMUMUMLBRU']."</td>";                
            }
            while ($row_pdlmumumpbru = $hasil_pdlmumumpbru->fetch_assoc()) {
                echo "<td align='center'>".$row_pdlmumumpbru['PDLMUMUMPBRU']."</td>";                
            }

            // 	KLINIK SP. PENYAKIT DALAM UMUM LAMA
            while ($row_pdlmumumllma = $hasil_pdlmumumllma->fetch_assoc()) {
                echo "<td align='center'>".$row_pdlmumumllma['PDLMUMUMLLMA']."</td>";                
            }
            while ($row_pdlmumumplma = $hasil_pdlmumumplma->fetch_assoc()) {
                echo "<td align='center'>".$row_pdlmumumplma['PDLMUMUMPLMA']."</td>";                
            }

            // 	KLINIK SP. PENYAKIT DALAM BPJS BARU
            while ($row_pdlmbpjslbru = $hasil_pdlmbpjslbru->fetch_assoc()) {
                echo "<td align='center'>".$row_pdlmbpjslbru['PDLMBPJSLBRU']."</td>";                
            }
            while ($row_pdlmbpjspbru = $hasil_pdlmbpjspbru->fetch_assoc()) {
                echo "<td align='center'>".$row_pdlmbpjspbru['PDLMBPJSPBRU']."</td>";                
            }

            // 	KLINIK SP. PENYAKIT DALAM BPJS LAMA
            while ($row_pdlmbpjsllma = $hasil_pdlmbpjsllma->fetch_assoc()) {
                echo "<td align='center'>".$row_pdlmbpjsllma['PDLMBPJSLLMA']."</td>";                
            }
            while ($row_pdlmbpjsplma = $hasil_pdlmbpjsplma->fetch_assoc()) {
                echo "<td align='center'>".$row_pdlmbpjsplma['PDLMBPJSPLMA']."</td>";                
            }

            // 	KLINIK SP. PENYAKIT DALAM JASA RAHARJA BARU
            while ($row_pdlmjasaraharjalbru = $hasil_pdlmjasaraharjalbru->fetch_assoc()) {
                echo "<td align='center'>".$row_pdlmjasaraharjalbru['PDLMJASARAHARJALBRU']."</td>";                
            }
            while ($row_pdlmjasaraharjapbru = $hasil_pdlmjasaraharjapbru->fetch_assoc()) {
                echo "<td align='center'>".$row_pdlmjasaraharjapbru['PDLMJASARAHARJAPBRU']."</td>";                
            }

            // 	KLINIK SP. PENYAKIT DALAM JASA RAHARJA LAMA
            while ($row_pdlmjasaraharjallma = $hasil_pdlmjasaraharjallma->fetch_assoc()) {
                echo "<td align='center'>".$row_pdlmjasaraharjallma['PDLMJASARAHARJALLMA']."</td>";                
            }
            while ($row_pdlmjasaraharjaplma = $hasil_pdlmjasaraharjaplma->fetch_assoc()) {
                echo "<td align='center'>".$row_pdlmjasaraharjaplma['PDLMJASARAHARJAPLMA']."</td>";                
            }
                
            // PENYAKIT DALAM TOTAL
            while ($row_pdlmtotal = $hasil_pdlmtotal->fetch_assoc()) {
                echo "<td align='center'>".$row_pdlmtotal['PDLMTOTAL']."</td>";
            }

            echo"</tr>";
            
            // KLINIK SP. PENYAKIT DALAM - KGH
            echo "<tr>";
            echo "<td align='center'>11</td>";
            echo "<td>KLINIK SP. PENYAKIT DALAM - KGH</td>";

            // 	KLINIK SP. PENYAKIT DALAM - KGH UMUM BARU
            while ($row_pdlmkghumumlbru = $hasil_pdlmkghumumlbru->fetch_assoc()) {
                echo "<td align='center'>".$row_pdlmkghumumlbru['PDLMKGHUMUMLBRU']."</td>";                
            }
            while ($row_pdlmkghumumpbru = $hasil_pdlmkghumumpbru->fetch_assoc()) {
                echo "<td align='center'>".$row_pdlmkghumumpbru['PDLMKGHUMUMPBRU']."</td>";                
            }

            // 	KLINIK SP. PENYAKIT DALAM - KGH UMUM LAMA
            while ($row_pdlmkghumumllma = $hasil_pdlmkghumumllma->fetch_assoc()) {
                echo "<td align='center'>".$row_pdlmkghumumllma['PDLMKGHUMUMLLMA']."</td>";                
            }
            while ($row_pdlmkghumumplma = $hasil_pdlmkghumumplma->fetch_assoc()) {
                echo "<td align='center'>".$row_pdlmkghumumplma['PDLMKGHUMUMPLMA']."</td>";                
            }

            // 	KLINIK SP. PENYAKIT DALAM - KGH BPJS BARU
            while ($row_pdlmkghbpjslbru = $hasil_pdlmkghbpjslbru->fetch_assoc()) {
                echo "<td align='center'>".$row_pdlmkghbpjslbru['PDLMKGHBPJSLBRU']."</td>";                
            }
            while ($row_pdlmkghbpjspbru = $hasil_pdlmkghbpjspbru->fetch_assoc()) {
                echo "<td align='center'>".$row_pdlmkghbpjspbru['PDLMKGHBPJSPBRU']."</td>";                
            }

            // 	KLINIK SP. PENYAKIT DALAM - KGEH BPJS LAMA
            while ($row_pdlmkghbpjsllma = $hasil_pdlmkghbpjsllma->fetch_assoc()) {
                echo "<td align='center'>".$row_pdlmkghbpjsllma['PDLMKGHBPJSLLMA']."</td>";                
            }
            while ($row_pdlmkghbpjsplma = $hasil_pdlmkghbpjsplma->fetch_assoc()) {
                echo "<td align='center'>".$row_pdlmkghbpjsplma['PDLMKGHBPJSPLMA']."</td>";                
            }

            // 	KLINIK SP. PENYAKIT DALAM - KGH JASA RAHARJA BARU
            while ($row_pdlmkghjasaraharjalbru = $hasil_pdlmkghjasaraharjalbru->fetch_assoc()) {
                echo "<td align='center'>".$row_pdlmkghjasaraharjalbru['PDLMKGHJASARAHARJALBRU']."</td>";                
            }
            while ($row_pdlmkghjasaraharjapbru = $hasil_pdlmkghjasaraharjapbru->fetch_assoc()) {
                echo "<td align='center'>".$row_pdlmkghjasaraharjapbru['PDLMKGHJASARAHARJAPBRU']."</td>";                
            }

            // 	KLINIK SP. PENYAKIT DALAM - KGH JASA RAHARJA LAMA
            while ($row_pdlmkghjasaraharjallma = $hasil_pdlmkghjasaraharjallma->fetch_assoc()) {
                echo "<td align='center'>".$row_pdlmkghjasaraharjallma['PDLMKGHJASARAHARJALLMA']."</td>";                
            }
            while ($row_pdlmkghjasaraharjaplma = $hasil_pdlmkghjasaraharjaplma->fetch_assoc()) {
                echo "<td align='center'>".$row_pdlmkghjasaraharjaplma['PDLMKGHJASARAHARJAPLMA']."</td>";                
            }
                
            // PENYAKIT DALAM - KGH TOTAL
            while ($row_pdlmkghtotal = $hasil_pdlmkghtotal->fetch_assoc()) {
                echo "<td align='center'>".$row_pdlmkghtotal['PDLMKGHTOTAL']."</td>";
            }


            // KLINIK SP. PENYAKIT DALAM - KGEH
            echo "<tr>";
            echo "<td align='center'>11</td>";
            echo "<td>KLINIK SP. PENYAKIT DALAM - KGEH</td>";

            // 	KLINIK SP. PENYAKIT DALAM - KGEH UMUM BARU
            while ($row_pdlmkgehumumlbru = $hasil_pdlmkgehumumlbru->fetch_assoc()) {
                echo "<td align='center'>".$row_pdlmkgehumumlbru['PDLMKGEHUMUMLBRU']."</td>";                
            }
            while ($row_pdlmkgehumumpbru = $hasil_pdlmkgehumumpbru->fetch_assoc()) {
                echo "<td align='center'>".$row_pdlmkgehumumpbru['PDLMKGEHUMUMPBRU']."</td>";                
            }

            // 	KLINIK SP. PENYAKIT DALAM - KGEH UMUM LAMA
            while ($row_pdlmkgehumumllma = $hasil_pdlmkgehumumllma->fetch_assoc()) {
                echo "<td align='center'>".$row_pdlmkgehumumllma['PDLMKGEHUMUMLLMA']."</td>";                
            }
            while ($row_pdlmkgehumumplma = $hasil_pdlmkgehumumplma->fetch_assoc()) {
                echo "<td align='center'>".$row_pdlmkgehumumplma['PDLMKGEHUMUMPLMA']."</td>";                
            }

            // 	KLINIK SP. PENYAKIT DALAM - KGEH BPJS BARU
            while ($row_pdlmkgehbpjslbru = $hasil_pdlmkgehbpjslbru->fetch_assoc()) {
                echo "<td align='center'>".$row_pdlmkgehbpjslbru['PDLMKGEHBPJSLBRU']."</td>";                
            }
            while ($row_pdlmkgehbpjspbru = $hasil_pdlmkgehbpjspbru->fetch_assoc()) {
                echo "<td align='center'>".$row_pdlmkgehbpjspbru['PDLMKGEHBPJSPBRU']."</td>";                
            }

            // 	KLINIK SP. PENYAKIT DALAM - KGEH BPJS LAMA
            while ($row_pdlmkgehbpjsllma = $hasil_pdlmkgehbpjsllma->fetch_assoc()) {
                echo "<td align='center'>".$row_pdlmkgehbpjsllma['PDLMKGEHBPJSLLMA']."</td>";                
            }
            while ($row_pdlmkgehbpjsplma = $hasil_pdlmkgehbpjsplma->fetch_assoc()) {
                echo "<td align='center'>".$row_pdlmkgehbpjsplma['PDLMKGEHBPJSPLMA']."</td>";                
            }

            // 	KLINIK SP. PENYAKIT DALAM - KGEH JASA RAHARJA BARU
            while ($row_pdlmkgehjasaraharjalbru = $hasil_pdlmkgehjasaraharjalbru->fetch_assoc()) {
                echo "<td align='center'>".$row_pdlmkgehjasaraharjalbru['PDLMKGEHJASARAHARJALBRU']."</td>";                
            }
            while ($row_pdlmkgehjasaraharjapbru = $hasil_pdlmkgehjasaraharjapbru->fetch_assoc()) {
                echo "<td align='center'>".$row_pdlmkgehjasaraharjapbru['PDLMKGEHJASARAHARJAPBRU']."</td>";                
            }

            // 	KLINIK SP. PENYAKIT DALAM - KGEH JASA RAHARJA LAMA
            while ($row_pdlmkgehjasaraharjallma = $hasil_pdlmkgehjasaraharjallma->fetch_assoc()) {
                echo "<td align='center'>".$row_pdlmkgehjasaraharjallma['PDLMKGEHJASARAHARJALLMA']."</td>";                
            }
            while ($row_pdlmkgehjasaraharjaplma = $hasil_pdlmkgehjasaraharjaplma->fetch_assoc()) {
                echo "<td align='center'>".$row_pdlmkgehjasaraharjaplma['PDLMKGEHJASARAHARJAPLMA']."</td>";                
            }
                
            // PENYAKIT DALAM - KGEH TOTAL
            while ($row_pdlmkgehtotal = $hasil_pdlmkgehtotal->fetch_assoc()) {
                echo "<td align='center'>".$row_pdlmkgehtotal['PDLMKGEHTOTAL']."</td>";
            }

            echo"</tr>";            

            // KLINIK SP. ANAK
            echo "<tr>";
            echo "<td align='center'>12</td>";
            echo "<td>KLINIK SP. ANAK</td>";

            // KLINIK SP. ANAK UMUM BARU
            while ($row_spanakumumlbru = $hasil_spanakumumlbru->fetch_assoc()) {
                echo "<td align='center'>".$row_spanakumumlbru['SPANAKUMUMLBRU']."</td>";                
            }
            while ($row_spanakumumpbru = $hasil_spanakumumpbru->fetch_assoc()) {
                echo "<td align='center'>".$row_spanakumumpbru['SPANAKUMUMPBRU']."</td>";                
            }

            // KLINIK SP. ANAK UMUM LAMA
            while ($row_spanakumumllma = $hasil_spanakumumllma->fetch_assoc()) {
                echo "<td align='center'>".$row_spanakumumllma['SPANAKUMUMLLMA']."</td>";                
            }
            while ($row_spanakumumplma = $hasil_spanakumumplma->fetch_assoc()) {
                echo "<td align='center'>".$row_spanakumumplma['SPANAKUMUMPLMA']."</td>";                
            }

            // KLINIK SP. ANAK BPJS BARU
            while ($row_spanakbpjslbru = $hasil_spanakbpjslbru->fetch_assoc()) {
                echo "<td align='center'>".$row_spanakbpjslbru['SPANAKBPJSLBRU']."</td>";                
            }
            while ($row_spanakbpjspbru = $hasil_spanakbpjspbru->fetch_assoc()) {
                echo "<td align='center'>".$row_spanakbpjspbru['SPANAKBPJSPBRU']."</td>";                
            }

            // KLINIK SP. ANAK BPJS LAMA
            while ($row_spanakbpjsllma = $hasil_spanakbpjsllma->fetch_assoc()) {
                echo "<td align='center'>".$row_spanakbpjsllma['SPANAKBPJSLLMA']."</td>";                
            }
            while ($row_spanakbpjsplma = $hasil_spanakbpjsplma->fetch_assoc()) {
                echo "<td align='center'>".$row_spanakbpjsplma['SPANAKBPJSPLMA']."</td>";                
            }

            // KLINIK SP. ANAK JASA RAHARJA BARU
            while ($row_spanakjasaraharjalbru = $hasil_spanakjasaraharjalbru->fetch_assoc()) {
                echo "<td align='center'>".$row_spanakjasaraharjalbru['SPANAKJASARAHARJALBRU']."</td>";                
            }
            while ($row_spanakjasaraharjapbru = $hasil_spanakjasaraharjapbru->fetch_assoc()) {
                echo "<td align='center'>".$row_spanakjasaraharjapbru['SPANAKJASARAHARJAPBRU']."</td>";                
            }

            // KLINIK SP. ANAK JASA RAHARJA LAMA
            while ($row_spanakjasaraharjallma = $hasil_spanakjasaraharjallma->fetch_assoc()) {
                echo "<td align='center'>".$row_spanakjasaraharjallma['SPANAKJASARAHARJALLMA']."</td>";                
            }
            while ($row_spanakjasaraharjaplma = $hasil_spanakjasaraharjaplma->fetch_assoc()) {
                echo "<td align='center'>".$row_spanakjasaraharjaplma['SPANAKJASARAHARJAPLMA']."</td>";                
            }
                
            // SP. ANAK TOTAL
            while ($row_spanaktotal = $hasil_spanaktotal->fetch_assoc()) {
                echo "<td align='center'>".$row_spanaktotal['SPANAKTOTAL']."</td>";
            }

            echo"</tr>";


            // KLINIK SP. OBGYN
            echo "<tr>";
            echo "<td align='center'>13</td>";
            echo "<td>KLINIK SP. OBGYN</td>";

            // KLINIK SP. OBGYN UMUM BARU
            while ($row_spobgynumumlbru = $hasil_spobgynumumlbru->fetch_assoc()) {
                echo "<td align='center'>".$row_spobgynumumlbru['SPOBGYNUMUMLBRU']."</td>";                
            }
            while ($row_spobgynumumpbru = $hasil_spobgynumumpbru->fetch_assoc()) {
                echo "<td align='center'>".$row_spobgynumumpbru['SPOBGYNUMUMPBRU']."</td>";                
            }

            // KLINIK SP. OBGYN UMUM LAMA
            while ($row_spobgynumumllma = $hasil_spobgynumumllma->fetch_assoc()) {
                echo "<td align='center'>".$row_spobgynumumllma['SPOBGYNUMUMLLMA']."</td>";                
            }
            while ($row_spobgynumumplma = $hasil_spobgynumumplma->fetch_assoc()) {
                echo "<td align='center'>".$row_spobgynumumplma['SPOBGYNUMUMPLMA']."</td>";                
            }

            // KLINIK SP. OBGYN BPJS BARU
            while ($row_spobgynbpjslbru = $hasil_spobgynbpjslbru->fetch_assoc()) {
                echo "<td align='center'>".$row_spobgynbpjslbru['SPOBGYNBPJSLBRU']."</td>";                
            }
            while ($row_spobgynbpjspbru = $hasil_spobgynbpjspbru->fetch_assoc()) {
                echo "<td align='center'>".$row_spobgynbpjspbru['SPOBGYNBPJSPBRU']."</td>";                
            }

            // KLINIK SP. OBGYN BPJS LAMA
            while ($row_spobgynbpjsllma = $hasil_spobgynbpjsllma->fetch_assoc()) {
                echo "<td align='center'>".$row_spobgynbpjsllma['SPOBGYNBPJSLLMA']."</td>";                
            }
            while ($row_spobgynbpjsplma = $hasil_spobgynbpjsplma->fetch_assoc()) {
                echo "<td align='center'>".$row_spobgynbpjsplma['SPOBGYNBPJSPLMA']."</td>";                
            }

            // KLINIK SP. OBGYN JASA RAHARJA BARU
            while ($row_spobgynjasaraharjalbru = $hasil_spobgynjasaraharjalbru->fetch_assoc()) {
                echo "<td align='center'>".$row_spobgynjasaraharjalbru['SPOBGYNJASARAHARJALBRU']."</td>";                
            }
            while ($row_spobgynjasaraharjapbru = $hasil_spobgynjasaraharjapbru->fetch_assoc()) {
                echo "<td align='center'>".$row_spobgynjasaraharjapbru['SPOBGYNJASARAHARJAPBRU']."</td>";                
            }

            // KLINIK SP. OBGYN JASA RAHARJA LAMA
            while ($row_spobgynjasaraharjallma = $hasil_spobgynjasaraharjallma->fetch_assoc()) {
                echo "<td align='center'>".$row_spobgynjasaraharjallma['SPOBGYNJASARAHARJALLMA']."</td>";                
            }
            while ($row_spobgynjasaraharjaplma = $hasil_spobgynjasaraharjaplma->fetch_assoc()) {
                echo "<td align='center'>".$row_spobgynjasaraharjaplma['SPOBGYNJASARAHARJAPLMA']."</td>";                
            }
                
            // SP. OBGYN TOTAL
            while ($row_spobgyntotal = $hasil_spobgyntotal->fetch_assoc()) {
                echo "<td align='center'>".$row_spobgyntotal['SPOBGYNTOTAL']."</td>";
            }

            echo"</tr>";


            // KLINIK SP. OBGYN - KFER
            echo "<tr>";
            echo "<td align='center'>14</td>";
            echo "<td>KLINIK SP. OBGYN - KFER</td>";

            // KLINIK SP. OBGYN - KFER UMUM BARU
            while ($row_spobgynkferumumlbru = $hasil_spobgynkferumumlbru->fetch_assoc()) {
                echo "<td align='center'>".$row_spobgynkferumumlbru['SPOBGYNKFERUMUMLBRU']."</td>";                
            }
            while ($row_spobgynkferumumpbru = $hasil_spobgynkferumumpbru->fetch_assoc()) {
                echo "<td align='center'>".$row_spobgynkferumumpbru['SPOBGYNKFERUMUMPBRU']."</td>";                
            }

            // KLINIK SP. OBGYN - KFER UMUM LAMA
            while ($row_spobgynkferumumllma = $hasil_spobgynkferumumllma->fetch_assoc()) {
                echo "<td align='center'>".$row_spobgynkferumumllma['SPOBGYNKFERUMUMLLMA']."</td>";                
            }
            while ($row_spobgynkferumumplma = $hasil_spobgynkferumumplma->fetch_assoc()) {
                echo "<td align='center'>".$row_spobgynkferumumplma['SPOBGYNKFERUMUMPLMA']."</td>";                
            }

            // KLINIK SP. OBGYN - KFER BPJS BARU
            while ($row_spobgynkferbpjslbru = $hasil_spobgynkferbpjslbru->fetch_assoc()) {
                echo "<td align='center'>".$row_spobgynkferbpjslbru['SPOBGYNKFERBPJSLBRU']."</td>";                
            }
            while ($row_spobgynkferbpjspbru = $hasil_spobgynkferbpjspbru->fetch_assoc()) {
                echo "<td align='center'>".$row_spobgynkferbpjspbru['SPOBGYNKFERBPJSPBRU']."</td>";                
            }

            // KLINIK SP. OBGYN - KFER BPJS LAMA
            while ($row_spobgynkferbpjsllma = $hasil_spobgynkferbpjsllma->fetch_assoc()) {
                echo "<td align='center'>".$row_spobgynkferbpjsllma['SPOBGYNKFERBPJSLLMA']."</td>";                
            }
            while ($row_spobgynkferbpjsplma = $hasil_spobgynkferbpjsplma->fetch_assoc()) {
                echo "<td align='center'>".$row_spobgynkferbpjsplma['SPOBGYNKFERBPJSPLMA']."</td>";                
            }

            // KLINIK SP. OBGYN - KFER JASA RAHARJA BARU
            while ($row_spobgynkferjasaraharjalbru = $hasil_spobgynkferjasaraharjalbru->fetch_assoc()) {
                echo "<td align='center'>".$row_spobgynkferjasaraharjalbru['SPOBGYNKFERJASARAHARJALBRU']."</td>";                
            }
            while ($row_spobgynkferjasaraharjapbru = $hasil_spobgynkferjasaraharjapbru->fetch_assoc()) {
                echo "<td align='center'>".$row_spobgynkferjasaraharjapbru['SPOBGYNKFERJASARAHARJAPBRU']."</td>";                
            }

            // KLINIK SP. OBGYN - KFER JASA RAHARJA LAMA
            while ($row_spobgynkferjasaraharjallma = $hasil_spobgynkferjasaraharjallma->fetch_assoc()) {
                echo "<td align='center'>".$row_spobgynkferjasaraharjallma['SPOBGYNKFERJASARAHARJALLMA']."</td>";                
            }
            while ($row_spobgynkferjasaraharjaplma = $hasil_spobgynkferjasaraharjaplma->fetch_assoc()) {
                echo "<td align='center'>".$row_spobgynkferjasaraharjaplma['SPOBGYNKFERJASARAHARJAPLMA']."</td>";                
            }
                
            // SP. OBGYN - KFER TOTAL
            while ($row_spobgynkfertotal = $hasil_spobgynkfertotal->fetch_assoc()) {
                echo "<td align='center'>".$row_spobgynkfertotal['SPOBGYNKFERTOTAL']."</td>";
            }

            echo"</tr>";


            // KLINIK SP. JANTUNG & PEMBULUH DARAH
            echo "<tr>";
            echo "<td align='center'>15</td>";
            echo "<td>KLINIK SP. JANTUNG & PEMBULUH DARAH</td>";

            // 	KLINIK SP. JANTUNG & PEMBULUH DARAH UMUM BARU
            while ($row_jantungumumlbru = $hasil_jantungumumlbru->fetch_assoc()) {
                echo "<td align='center'>".$row_jantungumumlbru['JANTUNGUMUMLBRU']."</td>";                
            }
            while ($row_jantungumumpbru = $hasil_jantungumumpbru->fetch_assoc()) {
                echo "<td align='center'>".$row_jantungumumpbru['JANTUNGUMUMPBRU']."</td>";                
            }

            // 	KLINIK SP. JANTUNG & PEMBULUH DARAH UMUM LAMA
            while ($row_jantungumumllma = $hasil_jantungumumllma->fetch_assoc()) {
                echo "<td align='center'>".$row_jantungumumllma['JANTUNGUMUMLLMA']."</td>";                
            }
            while ($row_jantungumumplma = $hasil_jantungumumplma->fetch_assoc()) {
                echo "<td align='center'>".$row_jantungumumplma['JANTUNGUMUMPLMA']."</td>";                
            }

            // 	KLINIK SP. JANTUNG & PEMBULUH DARAH BPJS BARU
            while ($row_jantungbpjslbru = $hasil_jantungbpjslbru->fetch_assoc()) {
                echo "<td align='center'>".$row_jantungbpjslbru['JANTUNGBPJSLBRU']."</td>";                
            }
            while ($row_jantungbpjspbru = $hasil_jantungbpjspbru->fetch_assoc()) {
                echo "<td align='center'>".$row_jantungbpjspbru['JANTUNGBPJSPBRU']."</td>";                
            }

            // 	KLINIK SP. JANTUNG & PEMBULUH DARAH BPJS LAMA
            while ($row_jantungbpjsllma = $hasil_jantungbpjsllma->fetch_assoc()) {
                echo "<td align='center'>".$row_jantungbpjsllma['JANTUNGBPJSLLMA']."</td>";                
            }
            while ($row_jantungbpjsplma = $hasil_jantungbpjsplma->fetch_assoc()) {
                echo "<td align='center'>".$row_jantungbpjsplma['JANTUNGBPJSPLMA']."</td>";                
            }

            // 	KLINIK SP. JANTUNG & PEMBULUH DARAH JASA RAHARJA BARU
            while ($row_jantungjasaraharjalbru = $hasil_jantungjasaraharjalbru->fetch_assoc()) {
                echo "<td align='center'>".$row_jantungjasaraharjalbru['JANTUNGJASARAHARJALBRU']."</td>";                
            }
            while ($row_jantungjasaraharjapbru = $hasil_jantungjasaraharjapbru->fetch_assoc()) {
                echo "<td align='center'>".$row_jantungjasaraharjapbru['JANTUNGJASARAHARJAPBRU']."</td>";                
            }

            // 	KLINIK SP. JANTUNG & PEMBULUH DARAH JASA RAHARJA LAMA
            while ($row_jantungjasaraharjallma = $hasil_jantungjasaraharjallma->fetch_assoc()) {
                echo "<td align='center'>".$row_jantungjasaraharjallma['JANTUNGJASARAHARJALLMA']."</td>";                
            }
            while ($row_jantungjasaraharjaplma = $hasil_jantungjasaraharjaplma->fetch_assoc()) {
                echo "<td align='center'>".$row_jantungjasaraharjaplma['JANTUNGJASARAHARJAPLMA']."</td>";                
            }
                
            // SP. JANTUNG & PEMBULUH DARAH - KFER TOTAL
            while ($row_jantungtotal = $hasil_jantungtotal->fetch_assoc()) {
                echo "<td align='center'>".$row_jantungtotal['JANTUNGTOTAL']."</td>";
            }

            echo"</tr>";


            // KLINIK SP. KESEHATAN JIWA
            echo "<tr>";
            echo "<td align='center'>16</td>";
            echo "<td>KLINIK SP. KESEHATAN JIWA</td>";
        
            // KLINIK SP. KESEHATAN JIWA UMUM BARU
            while ($row_jiwaumumlbru = $hasil_jiwaumumlbru->fetch_assoc()) {
                echo "<td align='center'>".$row_jiwaumumlbru['JIWAUMUMLBRU']."</td>";                
            }
            while ($row_jiwaumumpbru = $hasil_jiwaumumpbru->fetch_assoc()) {
                echo "<td align='center'>".$row_jiwaumumpbru['JIWAUMUMPBRU']."</td>";                
            }

            // KLINIK SP. KESEHATAN JIWA UMUM LAMA
            while ($row_jiwaumumllma = $hasil_jiwaumumllma->fetch_assoc()) {
                echo "<td align='center'>".$row_jiwaumumllma['JIWAUMUMLLMA']."</td>";                
            }
            while ($row_jiwaumumplma = $hasil_jiwaumumplma->fetch_assoc()) {
                echo "<td align='center'>".$row_jiwaumumplma['JIWAUMUMPLMA']."</td>";                
            }

            // KLINIK SP. KESEHATAN JIWA BPJS BARU
            while ($row_jiwabpjslbru = $hasil_jiwabpjslbru->fetch_assoc()) {
                echo "<td align='center'>".$row_jiwabpjslbru['JIWABPJSLBRU']."</td>";                
            }
            while ($row_jiwabpjspbru = $hasil_jiwabpjspbru->fetch_assoc()) {
                echo "<td align='center'>".$row_jiwabpjspbru['JIWABPJSPBRU']."</td>";                
            }

            // KLINIK SP. KESEHATAN JIWA BPJS LAMA
            while ($row_jiwabpjsllma = $hasil_jiwabpjsllma->fetch_assoc()) {
                echo "<td align='center'>".$row_jiwabpjsllma['JIWABPJSLLMA']."</td>";                
            }
            while ($row_jiwabpjsplma = $hasil_jiwabpjsplma->fetch_assoc()) {
                echo "<td align='center'>".$row_jiwabpjsplma['JIWABPJSPLMA']."</td>";                
            }

            // KLINIK SP. KESEHATAN JIWA JASA RAHARJA BARU
            while ($row_jiwajasaraharjalbru = $hasil_jiwajasaraharjalbru->fetch_assoc()) {
                echo "<td align='center'>".$row_jiwajasaraharjalbru['JIWAJASARAHARJALBRU']."</td>";                
            }
            while ($row_jiwajasaraharjapbru = $hasil_jiwajasaraharjapbru->fetch_assoc()) {
                echo "<td align='center'>".$row_jiwajasaraharjapbru['JIWAJASARAHARJAPBRU']."</td>";                
            }

            // KLINIK SP. KESEHATAN JIWA JASA RAHARJA LAMA
            while ($row_jiwajasaraharjallma = $hasil_jiwajasaraharjallma->fetch_assoc()) {
                echo "<td align='center'>".$row_jiwajasaraharjallma['JIWAJASARAHARJALLMA']."</td>";                
            }
            while ($row_jiwajasaraharjaplma = $hasil_jiwajasaraharjaplma->fetch_assoc()) {
                echo "<td align='center'>".$row_jiwajasaraharjaplma['JIWAJASARAHARJAPLMA']."</td>";                
            }
                
            // SP. KESEHATAN JIWA TOTAL
            while ($row_jiwatotal = $hasil_jiwatotal->fetch_assoc()) {
                echo "<td align='center'>".$row_jiwatotal['JIWATOTAL']."</td>";
            }

            echo"</tr>";
            

            // 	KLINIK SP. ORTHOPEDI
            echo "<tr>";
            echo "<td align='center'>17</td>";
            echo "<td>	KLINIK SP. ORTHOPEDI</td>";

            // KLINIK SP. ORTHOPEDI UMUM BARU
            while ($row_orthoumumlbru = $hasil_orthoumumlbru->fetch_assoc()) {
                echo "<td align='center'>".$row_orthoumumlbru['ORTHOUMUMLBRU']."</td>";                
            }
            while ($row_orthoumumpbru = $hasil_orthoumumpbru->fetch_assoc()) {
                echo "<td align='center'>".$row_orthoumumpbru['ORTHOUMUMPBRU']."</td>";                
            }

            // KLINIK SP. ORTHOPEDI UMUM LAMA
            while ($row_orthoumumllma = $hasil_orthoumumllma->fetch_assoc()) {
                echo "<td align='center'>".$row_orthoumumllma['ORTHOUMUMLLMA']."</td>";                
            }
            while ($row_orthoumumplma = $hasil_orthoumumplma->fetch_assoc()) {
                echo "<td align='center'>".$row_orthoumumplma['ORTHOUMUMPLMA']."</td>";                
            }

            // KLINIK SP. ORTHOPEDI BPJS BARU
            while ($row_orthobpjslbru = $hasil_orthobpjslbru->fetch_assoc()) {
                echo "<td align='center'>".$row_orthobpjslbru['ORTHOBPJSLBRU']."</td>";                
            }
            while ($row_orthobpjspbru = $hasil_orthobpjspbru->fetch_assoc()) {
                echo "<td align='center'>".$row_orthobpjspbru['ORTHOBPJSPBRU']."</td>";                
            }

            // KLINIK SP. ORTHOPEDI BPJS LAMA
            while ($row_orthobpjsllma = $hasil_orthobpjsllma->fetch_assoc()) {
                echo "<td align='center'>".$row_orthobpjsllma['ORTHOBPJSLLMA']."</td>";                
            }
            while ($row_orthobpjsplma = $hasil_orthobpjsplma->fetch_assoc()) {
                echo "<td align='center'>".$row_orthobpjsplma['ORTHOBPJSPLMA']."</td>";                
            }

            // KLINIK SP. ORTHOPEDI JASA RAHARJA BARU
            while ($row_orthojasaraharjalbru = $hasil_orthojasaraharjalbru->fetch_assoc()) {
                echo "<td align='center'>".$row_orthojasaraharjalbru['ORTHOJASARAHARJALBRU']."</td>";                
            }
            while ($row_orthojasaraharjapbru = $hasil_orthojasaraharjapbru->fetch_assoc()) {
                echo "<td align='center'>".$row_orthojasaraharjapbru['ORTHOJASARAHARJAPBRU']."</td>";                
            }

            // KLINIK SP. ORTHOPEDI JASA RAHARJA LAMA
            while ($row_orthojasaraharjallma = $hasil_orthojasaraharjallma->fetch_assoc()) {
                echo "<td align='center'>".$row_orthojasaraharjallma['ORTHOJASARAHARJALLMA']."</td>";                
            }
            while ($row_orthojasaraharjaplma = $hasil_orthojasaraharjaplma->fetch_assoc()) {
                echo "<td align='center'>".$row_orthojasaraharjaplma['ORTHOJASARAHARJAPLMA']."</td>";                
            }
                
            // ORTHOPEDI TOTAL
            while ($row_orthototal = $hasil_orthototal->fetch_assoc()) {
                echo "<td align='center'>".$row_orthototal['ORTHOTOTAL']."</td>";
            }

            echo"</tr>";


            // 	KLINIK SP. PARU
            echo "<tr>";
            echo "<td align='center'>18</td>";
            echo "<td>	KLINIK SP. PARU</td>";

            // KLINIK SP. PARU UMUM BARU
            while ($row_paruumumlbru = $hasil_paruumumlbru->fetch_assoc()) {
                echo "<td align='center'>".$row_paruumumlbru['PARUUMUMLBRU']."</td>";                
            }
            while ($row_paruumumpbru = $hasil_paruumumpbru->fetch_assoc()) {
                echo "<td align='center'>".$row_paruumumpbru['PARUUMUMPBRU']."</td>";                
            }

            // KLINIK SP. PARU UMUM LAMA
            while ($row_paruumumllma = $hasil_paruumumllma->fetch_assoc()) {
                echo "<td align='center'>".$row_paruumumllma['PARUUMUMLLMA']."</td>";                
            }
            while ($row_paruumumplma = $hasil_paruumumplma->fetch_assoc()) {
                echo "<td align='center'>".$row_paruumumplma['PARUUMUMPLMA']."</td>";                
            }

            // KLINIK SP. PARU BPJS BARU
            while ($row_parubpjslbru = $hasil_parubpjslbru->fetch_assoc()) {
                echo "<td align='center'>".$row_parubpjslbru['PARUBPJSLBRU']."</td>";                
            }
            while ($row_parubpjspbru = $hasil_parubpjspbru->fetch_assoc()) {
                echo "<td align='center'>".$row_parubpjspbru['PARUBPJSPBRU']."</td>";                
            }

            // KLINIK SP. PARU BPJS LAMA
            while ($row_parubpjsllma = $hasil_parubpjsllma->fetch_assoc()) {
                echo "<td align='center'>".$row_parubpjsllma['PARUBPJSLLMA']."</td>";                
            }
            while ($row_parubpjsplma = $hasil_parubpjsplma->fetch_assoc()) {
                echo "<td align='center'>".$row_parubpjsplma['PARUBPJSPLMA']."</td>";                
            }

            // KLINIK SP. PARU JASA RAHARJA BARU
            while ($row_parujasaraharjalbru = $hasil_parujasaraharjalbru->fetch_assoc()) {
                echo "<td align='center'>".$row_parujasaraharjalbru['PARUJASARAHARJALBRU']."</td>";                
            }
            while ($row_parujasaraharjapbru = $hasil_parujasaraharjapbru->fetch_assoc()) {
                echo "<td align='center'>".$row_parujasaraharjapbru['PARUJASARAHARJAPBRU']."</td>";                
            }

            // KLINIK SP. PARU JASA RAHARJA LAMA
            while ($row_parujasaraharjallma = $hasil_parujasaraharjallma->fetch_assoc()) {
                echo "<td align='center'>".$row_parujasaraharjallma['PARUJASARAHARJALLMA']."</td>";                
            }
            while ($row_parujasaraharjaplma = $hasil_parujasaraharjaplma->fetch_assoc()) {
                echo "<td align='center'>".$row_parujasaraharjaplma['PARUJASARAHARJAPLMA']."</td>";                
            }
                
            // PARU TOTAL
            while ($row_parutotal = $hasil_parutotal->fetch_assoc()) {
                echo "<td align='center'>".$row_parutotal['PARUTOTAL']."</td>";
            }

            echo"</tr>";


            // 	KLINIK SP. SARAF
            echo "<tr>";
            echo "<td align='center'>19</td>";
            echo "<td>KLINIK SP. SARAF</td>";

            // KLINIK SP. SARAF UMUM BARU
            while ($row_spsrfumumlbru = $hasil_spsrfumumlbru->fetch_assoc()) {
                echo "<td align='center'>".$row_spsrfumumlbru['SPSRFUMUMLBRU']."</td>";                
            }
            while ($row_spsrfumumpbru = $hasil_spsrfumumpbru->fetch_assoc()) {
                echo "<td align='center'>".$row_spsrfumumpbru['SPSRFUMUMPBRU']."</td>";                
            }

            // KLINIK SP. SARAF UMUM LAMA
            while ($row_spsrfumumllma = $hasil_spsrfumumllma->fetch_assoc()) {
                echo "<td align='center'>".$row_spsrfumumllma['SPSRFUMUMLLMA']."</td>";                
            }
            while ($row_spsrfumumplma = $hasil_spsrfumumplma->fetch_assoc()) {
                echo "<td align='center'>".$row_spsrfumumplma['SPSRFUMUMPLMA']."</td>";                
            }

            // KLINIK SP. SARAF BPJS BARU
            while ($row_spsrfbpjslbru = $hasil_spsrfbpjslbru->fetch_assoc()) {
                echo "<td align='center'>".$row_spsrfbpjslbru['SPSRFBPJSLBRU']."</td>";                
            }
            while ($row_spsrfbpjspbru = $hasil_spsrfbpjspbru->fetch_assoc()) {
                echo "<td align='center'>".$row_spsrfbpjspbru['SPSRFBPJSPBRU']."</td>";                
            }

            // KLINIK SP. SARAF BPJS LAMA
            while ($row_spsrfbpjsllma = $hasil_spsrfbpjsllma->fetch_assoc()) {
                echo "<td align='center'>".$row_spsrfbpjsllma['SPSRFBPJSLLMA']."</td>";                
            }
            while ($row_spsrfbpjsplma = $hasil_spsrfbpjsplma->fetch_assoc()) {
                echo "<td align='center'>".$row_spsrfbpjsplma['SPSRFBPJSPLMA']."</td>";                
            }

            // KLINIK SP. SARAF JASA RAHARJA BARU
            while ($row_spsrfjasaraharjalbru = $hasil_spsrfjasaraharjalbru->fetch_assoc()) {
                echo "<td align='center'>".$row_spsrfjasaraharjalbru['SPSRFJASARAHARJALBRU']."</td>";                
            }
            while ($row_spsrfjasaraharjapbru = $hasil_spsrfjasaraharjapbru->fetch_assoc()) {
                echo "<td align='center'>".$row_spsrfjasaraharjapbru['SPSRFJASARAHARJAPBRU']."</td>";                
            }

            // KLINIK SP. SARAF JASA RAHARJA LAMA
            while ($row_spsrfjasaraharjallma = $hasil_spsrfjasaraharjallma->fetch_assoc()) {
                echo "<td align='center'>".$row_spsrfjasaraharjallma['SPSRFJASARAHARJALLMA']."</td>";                
            }
            while ($row_spsrfjasaraharjaplma = $hasil_spsrfjasaraharjaplma->fetch_assoc()) {
                echo "<td align='center'>".$row_spsrfjasaraharjaplma['SPSRFJASARAHARJAPLMA']."</td>";                
            }
                
            // SP. SARAF TOTAL
            while ($row_spsrftotal = $hasil_spsrftotal->fetch_assoc()) {
                echo "<td align='center'>".$row_spsrftotal['SPSRFTOTAL']."</td>";
            }

            echo"</tr>";


            // KLINIK SP. MATA
            echo "<tr>";
            echo "<td align='center'>20</td>";
            echo "<td>KLINIK SP. MATA</td>";

            // KLINIK SP. MATA UMUM BARU
            while ($row_spmataumumlbru = $hasil_spmataumumlbru->fetch_assoc()) {
                echo "<td align='center'>".$row_spmataumumlbru['SPMATAUMUMLBRU']."</td>";                
            }
            while ($row_spmataumumpbru = $hasil_spmataumumpbru->fetch_assoc()) {
                echo "<td align='center'>".$row_spmataumumpbru['SPMATAUMUMPBRU']."</td>";                
            }

            // KLINIK SP. MATA UMUM LAMA
            while ($row_spmataumumllma = $hasil_spmataumumllma->fetch_assoc()) {
                echo "<td align='center'>".$row_spmataumumllma['SPMATAUMUMLLMA']."</td>";                
            }
            while ($row_spmataumumplma = $hasil_spmataumumplma->fetch_assoc()) {
                echo "<td align='center'>".$row_spmataumumplma['SPMATAUMUMPLMA']."</td>";                
            }

            // KLINIK SP. MATA BPJS BARU
            while ($row_spmatabpjslbru = $hasil_spmatabpjslbru->fetch_assoc()) {
                echo "<td align='center'>".$row_spmatabpjslbru['SPMATABPJSLBRU']."</td>";                
            }
            while ($row_spmatabpjspbru = $hasil_spmatabpjspbru->fetch_assoc()) {
                echo "<td align='center'>".$row_spmatabpjspbru['SPMATABPJSPBRU']."</td>";                
            }

            // KLINIK SP. MATA BPJS LAMA
            while ($row_spmatabpjsllma = $hasil_spmatabpjsllma->fetch_assoc()) {
                echo "<td align='center'>".$row_spmatabpjsllma['SPMATABPJSLLMA']."</td>";                
            }
            while ($row_spmatabpjsplma = $hasil_spmatabpjsplma->fetch_assoc()) {
                echo "<td align='center'>".$row_spmatabpjsplma['SPMATABPJSPLMA']."</td>";                
            }

            // KLINIK SP. MATA JASA RAHARJA BARU
            while ($row_spmatajasaraharjalbru = $hasil_spmatajasaraharjalbru->fetch_assoc()) {
                echo "<td align='center'>".$row_spmatajasaraharjalbru['SPMATAJASARAHARJALBRU']."</td>";                
            }
            while ($row_spmatajasaraharjapbru = $hasil_spmatajasaraharjapbru->fetch_assoc()) {
                echo "<td align='center'>".$row_spmatajasaraharjapbru['SPMATAJASARAHARJAPBRU']."</td>";                
            }

            // KLINIK SP. MATA JASA RAHARJA LAMA
            while ($row_spmatajasaraharjallma = $hasil_spmatajasaraharjallma->fetch_assoc()) {
                echo "<td align='center'>".$row_spmatajasaraharjallma['SPMATAJASARAHARJALLMA']."</td>";                
            }
            while ($row_spmatajasaraharjaplma = $hasil_spmatajasaraharjaplma->fetch_assoc()) {
                echo "<td align='center'>".$row_spmatajasaraharjaplma['SPMATAJASARAHARJAPLMA']."</td>";                
            }
                
            // MATA TOTAL
            while ($row_spmatatotal = $hasil_spmatatotal->fetch_assoc()) {
                echo "<td align='center'>".$row_spmatatotal['SPMATATOTAL']."</td>";
            }

            echo"</tr>";


            // KLINIK SP. KULIT & KELAMIN
            echo "<tr>";
            echo "<td align='center'>21</td>";
            echo "<td>KLINIK SP. KULIT & KELAMIN</td>";

            // KLINIK SP. KULIT & KELAMIN UMUM BARU
            while ($row_spklkumumlbru = $hasil_spklkumumlbru->fetch_assoc()) {
                echo "<td align='center'>".$row_spklkumumlbru['SPKLKUMUMLBRU']."</td>";                
            }
            while ($row_spklkumumpbru = $hasil_spklkumumpbru->fetch_assoc()) {
                echo "<td align='center'>".$row_spklkumumpbru['SPKLKUMUMPBRU']."</td>";                
            }

            // KLINIK SP. KULIT & KELAMIN UMUM LAMA
            while ($row_spklkumumllma = $hasil_spklkumumllma->fetch_assoc()) {
                echo "<td align='center'>".$row_spklkumumllma['SPKLKUMUMLLMA']."</td>";                
            }
            while ($row_spklkumumplma = $hasil_spklkumumplma->fetch_assoc()) {
                echo "<td align='center'>".$row_spklkumumplma['SPKLKUMUMPLMA']."</td>";                
            }

            // KLINIK SP. KULIT & KELAMIN BPJS BARU
            while ($row_spklkbpjslbru = $hasil_spklkbpjslbru->fetch_assoc()) {
                echo "<td align='center'>".$row_spklkbpjslbru['SPKLKBPJSLBRU']."</td>";                
            }
            while ($row_spklkbpjspbru = $hasil_spklkbpjspbru->fetch_assoc()) {
                echo "<td align='center'>".$row_spklkbpjspbru['SPKLKBPJSPBRU']."</td>";                
            }

            // KLINIK SP. KULIT & KELAMIN BPJS LAMA
            while ($row_spklkbpjsllma = $hasil_spklkbpjsllma->fetch_assoc()) {
                echo "<td align='center'>".$row_spklkbpjsllma['SPKLKBPJSLLMA']."</td>";                
            }
            while ($row_spklkbpjsplma = $hasil_spklkbpjsplma->fetch_assoc()) {
                echo "<td align='center'>".$row_spklkbpjsplma['SPKLKBPJSPLMA']."</td>";                
            }

            // KLINIK SP. KULIT & KELAMIN JASA RAHARJA BARU
            while ($row_spklkjasaraharjalbru = $hasil_spklkjasaraharjalbru->fetch_assoc()) {
                echo "<td align='center'>".$row_spklkjasaraharjalbru['SPKLKJASARAHARJALBRU']."</td>";                
            }
            while ($row_spklkjasaraharjapbru = $hasil_spklkjasaraharjapbru->fetch_assoc()) {
                echo "<td align='center'>".$row_spklkjasaraharjapbru['SPKLKJASARAHARJAPBRU']."</td>";                
            }

            // KLINIK SP. KULIT & KELAMIN JASA RAHARJA LAMA
            while ($row_spklkjasaraharjallma = $hasil_spklkjasaraharjallma->fetch_assoc()) {
                echo "<td align='center'>".$row_spklkjasaraharjallma['SPKLKJASARAHARJALLMA']."</td>";                
            }
            while ($row_spklkjasaraharjaplma = $hasil_spklkjasaraharjaplma->fetch_assoc()) {
                echo "<td align='center'>".$row_spklkjasaraharjaplma['SPKLKJASARAHARJAPLMA']."</td>";                
            }
                
            // SP. KULIT & KELAMIN TOTAL
            while ($row_spklktotal = $hasil_spklktotal->fetch_assoc()) {
                echo "<td align='center'>".$row_spklktotal['SPKLKTOTAL']."</td>";
            }

            echo"</tr>";


            // KLINIK SP. THT - KL
            echo "<tr>";
            echo "<td align='center'>22</td>";
            echo "<td>KLINIK SP. THT - KL</td>";

            // KLINIK SP. THT - KL UMUM BARU
            while ($row_spthtklumumlbru = $hasil_spthtklumumlbru->fetch_assoc()) {
                echo "<td align='center'>".$row_spthtklumumlbru['SPTHTKLUMUMLBRU']."</td>";                
            }
            while ($row_spthtklumumpbru = $hasil_spthtklumumpbru->fetch_assoc()) {
                echo "<td align='center'>".$row_spthtklumumpbru['SPTHTKLUMUMPBRU']."</td>";                
            }

            // KLINIK SP. THT - KL UMUM LAMA
            while ($row_spthtklumumllma = $hasil_spthtklumumllma->fetch_assoc()) {
                echo "<td align='center'>".$row_spthtklumumllma['SPTHTKLUMUMLLMA']."</td>";                
            }
            while ($row_spthtklumumplma = $hasil_spthtklumumplma->fetch_assoc()) {
                echo "<td align='center'>".$row_spthtklumumplma['SPTHTKLUMUMPLMA']."</td>";                
            }

            // KLINIK SP. THT - KL BPJS BARU
            while ($row_spthtklbpjslbru = $hasil_spthtklbpjslbru->fetch_assoc()) {
                echo "<td align='center'>".$row_spthtklbpjslbru['SPTHTKLBPJSLBRU']."</td>";                
            }
            while ($row_spthtklbpjspbru = $hasil_spthtklbpjspbru->fetch_assoc()) {
                echo "<td align='center'>".$row_spthtklbpjspbru['SPTHTKLBPJSPBRU']."</td>";                
            }

            // KLINIK SP. THT - KL BPJS LAMA
            while ($row_spthtklbpjsllma = $hasil_spthtklbpjsllma->fetch_assoc()) {
                echo "<td align='center'>".$row_spthtklbpjsllma['SPTHTKLBPJSLLMA']."</td>";                
            }
            while ($row_spthtklbpjsplma = $hasil_spthtklbpjsplma->fetch_assoc()) {
                echo "<td align='center'>".$row_spthtklbpjsplma['SPTHTKLBPJSPLMA']."</td>";                
            }

            // KLINIK SP. THT - KL JASA RAHARJA BARU
            while ($row_spthtkljasaraharjalbru = $hasil_spthtkljasaraharjalbru->fetch_assoc()) {
                echo "<td align='center'>".$row_spthtkljasaraharjalbru['SPTHTKLJASARAHARJALBRU']."</td>";                
            }
            while ($row_spthtkljasaraharjapbru = $hasil_spthtkljasaraharjapbru->fetch_assoc()) {
                echo "<td align='center'>".$row_spthtkljasaraharjapbru['SPTHTKLJASARAHARJAPBRU']."</td>";                
            }

            // KLINIK SP. THT - KL JASA RAHARJA LAMA
            while ($row_spthtkljasaraharjallma = $hasil_spthtkljasaraharjallma->fetch_assoc()) {
                echo "<td align='center'>".$row_spthtkljasaraharjallma['SPTHTKLJASARAHARJALLMA']."</td>";                
            }
            while ($row_spthtkljasaraharjaplma = $hasil_spthtkljasaraharjaplma->fetch_assoc()) {
                echo "<td align='center'>".$row_spthtkljasaraharjaplma['SPTHTKLJASARAHARJAPLMA']."</td>";                
            }
                
            // SP THT - KL TOTAL
            while ($row_spthtkltotal = $hasil_spthtkltotal->fetch_assoc()) {
                echo "<td align='center'>".$row_spthtkltotal['SPTHTKLTOTAL']."</td>";
            }    

            echo"</tr>";


            // KLINIK SP. UROLOGI
            echo "<tr>";
            echo "<td align='center'>23</td>";
            echo "<td>KLINIK SP. UROLOGI</td>";

            // KLINIK SP. UROLOGI UMUM BARU
            while ($row_urologiumumlbru = $hasil_urologiumumlbru->fetch_assoc()) {
                echo "<td align='center'>".$row_urologiumumlbru['UROLOGIUMUMLBRU']."</td>";                
            }
            while ($row_urologiumumpbru = $hasil_urologiumumpbru->fetch_assoc()) {
                echo "<td align='center'>".$row_urologiumumpbru['UROLOGIUMUMPBRU']."</td>";                
            }

            // KLINIK SP. UROLOGI UMUM LAMA
            while ($row_urologiumumllma = $hasil_urologiumumllma->fetch_assoc()) {
                echo "<td align='center'>".$row_urologiumumllma['UROLOGIUMUMLLMA']."</td>";                
            }
            while ($row_urologiumumplma = $hasil_urologiumumplma->fetch_assoc()) {
                echo "<td align='center'>".$row_urologiumumplma['UROLOGIUMUMPLMA']."</td>";                
            }

            // KLINIK SP. UROLOGI BPJS BARU
            while ($row_urologibpjslbru = $hasil_urologibpjslbru->fetch_assoc()) {
                echo "<td align='center'>".$row_urologibpjslbru['UROLOGIBPJSLBRU']."</td>";                
            }
            while ($row_urologibpjspbru = $hasil_urologibpjspbru->fetch_assoc()) {
                echo "<td align='center'>".$row_urologibpjspbru['UROLOGIBPJSPBRU']."</td>";                
            }

            // KLINIK SP. UROLOGI BPJS LAMA
            while ($row_urologibpjsllma = $hasil_urologibpjsllma->fetch_assoc()) {
                echo "<td align='center'>".$row_urologibpjsllma['UROLOGIBPJSLLMA']."</td>";                
            }
            while ($row_urologibpjsplma = $hasil_urologibpjsplma->fetch_assoc()) {
                echo "<td align='center'>".$row_urologibpjsplma['UROLOGIBPJSPLMA']."</td>";                
            }

            // KLINIK SP. UROLOGI JASA RAHARJA BARU
            while ($row_urologijasaraharjalbru = $hasil_urologijasaraharjalbru->fetch_assoc()) {
                echo "<td align='center'>".$row_urologijasaraharjalbru['UROLOGIJASARAHARJALBRU']."</td>";                
            }
            while ($row_urologijasaraharjapbru = $hasil_urologijasaraharjapbru->fetch_assoc()) {
                echo "<td align='center'>".$row_urologijasaraharjapbru['UROLOGIJASARAHARJAPBRU']."</td>";                
            }

            // KLINIK SP. UROLOGI JASA RAHARJA LAMA
            while ($row_urologijasaraharjallma = $hasil_urologijasaraharjallma->fetch_assoc()) {
                echo "<td align='center'>".$row_urologijasaraharjallma['UROLOGIJASARAHARJALLMA']."</td>";                
            }
            while ($row_urologijasaraharjaplma = $hasil_urologijasaraharjaplma->fetch_assoc()) {
                echo "<td align='center'>".$row_urologijasaraharjaplma['UROLOGIJASARAHARJAPLMA']."</td>";                
            }
                
            // UROLOGI TOTAL
            while ($row_urologitotal = $hasil_urologitotal->fetch_assoc()) {
                echo "<td align='center'>".$row_urologitotal['UROLOGITOTAL']."</td>";
            }


            echo"</tr>";

            // KLINIK SP. PATOLOGI KLINIK
            echo "<tr>";
            echo "<td align='center'>24</td>";
            echo "<td>KLINIK SP. PATOLOGI KLINIK</td>";

            // KLINIK SP. PATOLOGI KLINIK UMUM BARU
            while ($row_patologiumumlbru = $hasil_patologiumumlbru->fetch_assoc()) {
                echo "<td align='center'>".$row_patologiumumlbru['PATOLOGIUMUMLBRU']."</td>";                
            }
            while ($row_patologiumumpbru = $hasil_patologiumumpbru->fetch_assoc()) {
                echo "<td align='center'>".$row_patologiumumpbru['PATOLOGIUMUMPBRU']."</td>";                
            }

            // KLINIK SP. PATOLOGI KLINIK UMUM LAMA
            while ($row_patologiumumllma = $hasil_patologiumumllma->fetch_assoc()) {
                echo "<td align='center'>".$row_patologiumumllma['PATOLOGIUMUMLLMA']."</td>";                
            }
            while ($row_patologiumumplma = $hasil_patologiumumplma->fetch_assoc()) {
                echo "<td align='center'>".$row_patologiumumplma['PATOLOGIUMUMPLMA']."</td>";                
            }

            // KLINIK SP. PATOLOGI KLINIK BPJS BARU
            while ($row_patologibpjslbru = $hasil_patologibpjslbru->fetch_assoc()) {
                echo "<td align='center'>".$row_patologibpjslbru['PATOLOGIBPJSLBRU']."</td>";                
            }
            while ($row_patologibpjspbru = $hasil_patologibpjspbru->fetch_assoc()) {
                echo "<td align='center'>".$row_patologibpjspbru['PATOLOGIBPJSPBRU']."</td>";                
            }

            // KLINIK SP. PATOLOGI KLINIK BPJS LAMA
            while ($row_patologibpjsllma = $hasil_patologibpjsllma->fetch_assoc()) {
                echo "<td align='center'>".$row_patologibpjsllma['PATOLOGIBPJSLLMA']."</td>";                
            }
            while ($row_patologibpjsplma = $hasil_patologibpjsplma->fetch_assoc()) {
                echo "<td align='center'>".$row_patologibpjsplma['PATOLOGIBPJSPLMA']."</td>";                
            }

            // KLINIK SP. PATOLOGI KLINIK JASA RAHARJA BARU
            while ($row_patologijasaraharjalbru = $hasil_patologijasaraharjalbru->fetch_assoc()) {
                echo "<td align='center'>".$row_patologijasaraharjalbru['PATOLOGIJASARAHARJALBRU']."</td>";                
            }
            while ($row_patologijasaraharjapbru = $hasil_patologijasaraharjapbru->fetch_assoc()) {
                echo "<td align='center'>".$row_patologijasaraharjapbru['PATOLOGIJASARAHARJAPBRU']."</td>";                
            }

            // KLINIK SP. PATOLOGI KLINIK JASA RAHARJA LAMA
            while ($row_patologijasaraharjallma = $hasil_patologijasaraharjallma->fetch_assoc()) {
                echo "<td align='center'>".$row_patologijasaraharjallma['PATOLOGIJASARAHARJALLMA']."</td>";                
            }
            while ($row_patologijasaraharjaplma = $hasil_patologijasaraharjaplma->fetch_assoc()) {
                echo "<td align='center'>".$row_patologijasaraharjaplma['PATOLOGIJASARAHARJAPLMA']."</td>";                
            }
                
            // PATOLOGI KLINIK TOTAL
            while ($row_patologitotal = $hasil_patologitotal->fetch_assoc()) {
                echo "<td align='center'>".$row_patologitotal['PATOLOGITOTAL']."</td>";
            }

            echo"</tr>";


            // KLINIK SP. ANASTESI
            echo "<tr>";
            echo "<td align='center'>25</td>";
            echo "<td>KLINIK SP. ANASTESI</td>";

            // KLINIK SP. ANASTESI UMUM BARU
            while ($row_spanastumumlbru = $hasil_spanastumumlbru->fetch_assoc()) {
                echo "<td align='center'>".$row_spanastumumlbru['SPANASTUMUMLBRU']."</td>";                
            }
            while ($row_spanastumumpbru = $hasil_spanastumumpbru->fetch_assoc()) {
                echo "<td align='center'>".$row_spanastumumpbru['SPANASTUMUMPBRU']."</td>";                
            }

            // KLINIK SP. ANASTESI UMUM LAMA
            while ($row_spanastumumllma = $hasil_spanastumumllma->fetch_assoc()) {
                echo "<td align='center'>".$row_spanastumumllma['SPANASTUMUMLLMA']."</td>";                
            }
            while ($row_spanastumumplma = $hasil_spanastumumplma->fetch_assoc()) {
                echo "<td align='center'>".$row_spanastumumplma['SPANASTUMUMPLMA']."</td>";                
            }

            // KLINIK SP. ANASTESI BPJS BARU
            while ($row_spanastbpjslbru = $hasil_spanastbpjslbru->fetch_assoc()) {
                echo "<td align='center'>".$row_spanastbpjslbru['SPANASTBPJSLBRU']."</td>";                
            }
            while ($row_spanastbpjspbru = $hasil_spanastbpjspbru->fetch_assoc()) {
                echo "<td align='center'>".$row_spanastbpjspbru['SPANASTBPJSPBRU']."</td>";                
            }

            // KLINIK SP. ANASTESI BPJS LAMA
            while ($row_spanastbpjsllma = $hasil_spanastbpjsllma->fetch_assoc()) {
                echo "<td align='center'>".$row_spanastbpjsllma['SPANASTBPJSLLMA']."</td>";                
            }
            while ($row_spanastbpjsplma = $hasil_spanastbpjsplma->fetch_assoc()) {
                echo "<td align='center'>".$row_spanastbpjsplma['SPANASTBPJSPLMA']."</td>";                
            }

            // KLINIK SP. ANASTESI JASA RAHARJA BARU
            while ($row_spanastjasaraharjalbru = $hasil_spanastjasaraharjalbru->fetch_assoc()) {
                echo "<td align='center'>".$row_spanastjasaraharjalbru['SPANASTJASARAHARJALBRU']."</td>";                
            }
            while ($row_spanastjasaraharjapbru = $hasil_spanastjasaraharjapbru->fetch_assoc()) {
                echo "<td align='center'>".$row_spanastjasaraharjapbru['SPANASTJASARAHARJAPBRU']."</td>";                
            }

            // KLINIK SP. ANASTESI JASA RAHARJA LAMA
            while ($row_spanastjasaraharjallma = $hasil_spanastjasaraharjallma->fetch_assoc()) {
                echo "<td align='center'>".$row_spanastjasaraharjallma['SPANASTJASARAHARJALLMA']."</td>";                
            }
            while ($row_spanastjasaraharjaplma = $hasil_spanastjasaraharjaplma->fetch_assoc()) {
                echo "<td align='center'>".$row_spanastjasaraharjaplma['SPANASTJASARAHARJAPLMA']."</td>";                
            }
                
            // ANASTESI KLINIK TOTAL
            while ($row_spanasttotal = $hasil_spanasttotal->fetch_assoc()) {
                echo "<td align='center'>".$row_spanasttotal['SPANASTTOTAL']."</td>";
            }

            echo"</tr>";


            // KLINIK SP. REHABILITASI MEDIK
            echo "<tr>";
            echo "<td align='center'>26</td>";
            echo "<td>KLINIK SP. REHABILITASI MEDIK</td>";

            // KLINIK SP. REHABILITASI MEDIK UMUM BARU
            while ($row_rehabmedikumumlbru = $hasil_rehabmedikumumlbru->fetch_assoc()) {
                echo "<td align='center'>".$row_rehabmedikumumlbru['REHABMEDIKUMUMLBRU']."</td>";                
            }
            while ($row_rehabmedikumumpbru = $hasil_rehabmedikumumpbru->fetch_assoc()) {
                echo "<td align='center'>".$row_rehabmedikumumpbru['REHABMEDIKUMUMPBRU']."</td>";                
            }

            // KLINIK SP. REHABILITASI MEDIK UMUM LAMA
            while ($row_rehabmedikumumllma = $hasil_rehabmedikumumllma->fetch_assoc()) {
                echo "<td align='center'>".$row_rehabmedikumumllma['REHABMEDIKUMUMLLMA']."</td>";                
            }
            while ($row_rehabmedikumumplma = $hasil_rehabmedikumumplma->fetch_assoc()) {
                echo "<td align='center'>".$row_rehabmedikumumplma['REHABMEDIKUMUMPLMA']."</td>";                
            }

            // KLINIK SP. REHABILITASI MEDIK BPJS BARU
            while ($row_rehabmedikbpjslbru = $hasil_rehabmedikbpjslbru->fetch_assoc()) {
                echo "<td align='center'>".$row_rehabmedikbpjslbru['REHABMEDIKBPJSLBRU']."</td>";                
            }
            while ($row_rehabmedikbpjspbru = $hasil_rehabmedikbpjspbru->fetch_assoc()) {
                echo "<td align='center'>".$row_rehabmedikbpjspbru['REHABMEDIKBPJSPBRU']."</td>";                
            }

            // KLINIK SP. REHABILITASI MEDIK BPJS LAMA
            while ($row_rehabmedikbpjsllma = $hasil_rehabmedikbpjsllma->fetch_assoc()) {
                echo "<td align='center'>".$row_rehabmedikbpjsllma['REHABMEDIKBPJSLLMA']."</td>";                
            }
            while ($row_rehabmedikbpjsplma = $hasil_rehabmedikbpjsplma->fetch_assoc()) {
                echo "<td align='center'>".$row_rehabmedikbpjsplma['REHABMEDIKBPJSPLMA']."</td>";                
            }

            // KLINIK SP. REHABILITASI MEDIK JASA RAHARJA BARU
            while ($row_rehabmedikjasaraharjalbru = $hasil_rehabmedikjasaraharjalbru->fetch_assoc()) {
                echo "<td align='center'>".$row_rehabmedikjasaraharjalbru['REHABMEDIKJASARAHARJALBRU']."</td>";                
            }
            while ($row_rehabmedikjasaraharjapbru = $hasil_rehabmedikjasaraharjapbru->fetch_assoc()) {
                echo "<td align='center'>".$row_rehabmedikjasaraharjapbru['REHABMEDIKJASARAHARJAPBRU']."</td>";                
            }

            // KLINIK SP. REHABILITASI MEDIK JASA RAHARJA LAMA
            while ($row_rehabmedikjasaraharjallma = $hasil_rehabmedikjasaraharjallma->fetch_assoc()) {
                echo "<td align='center'>".$row_rehabmedikjasaraharjallma['REHABMEDIKJASARAHARJALLMA']."</td>";                
            }
            while ($row_rehabmedikjasaraharjaplma = $hasil_rehabmedikjasaraharjaplma->fetch_assoc()) {
                echo "<td align='center'>".$row_rehabmedikjasaraharjaplma['REHABMEDIKJASARAHARJAPLMA']."</td>";                
            }
                
            // REHABILITASI MEDIK TOTAL
            while ($row_rehabmediktotal = $hasil_rehabmediktotal->fetch_assoc()) {
                echo "<td align='center'>".$row_rehabmediktotal['REHABMEDIKTOTAL']."</td>";
            }

            echo"</tr>";


            // 	KLINIK GIGI
            echo "<tr>";
            echo "<td align='center'>27</td>";
            echo "<td>KLINIK GIGI</td>";

            // KLINIK GIGI UMUM BARU
            while ($row_spgigiumumlbru = $hasil_spgigiumumlbru->fetch_assoc()) {
                echo "<td align='center'>".$row_spgigiumumlbru['SPGIGIUMUMLBRU']."</td>";                
            }
            while ($row_spgigiumumpbru = $hasil_spgigiumumpbru->fetch_assoc()) {
                echo "<td align='center'>".$row_spgigiumumpbru['SPGIGIUMUMPBRU']."</td>";                
            }

            // KLINIK GIGI UMUM LAMA
            while ($row_spgigiumumllma = $hasil_spgigiumumllma->fetch_assoc()) {
                echo "<td align='center'>".$row_spgigiumumllma['SPGIGIUMUMLLMA']."</td>";                
            }
            while ($row_spgigiumumplma = $hasil_spgigiumumplma->fetch_assoc()) {
                echo "<td align='center'>".$row_spgigiumumplma['SPGIGIUMUMPLMA']."</td>";                
            }

            // KLINIK GIGI BPJS BARU
            while ($row_spgigibpjslbru = $hasil_spgigibpjslbru->fetch_assoc()) {
                echo "<td align='center'>".$row_spgigibpjslbru['SPGIGIBPJSLBRU']."</td>";                
            }
            while ($row_spgigibpjspbru = $hasil_spgigibpjspbru->fetch_assoc()) {
                echo "<td align='center'>".$row_spgigibpjspbru['SPGIGIBPJSPBRU']."</td>";                
            }

            // KLINIK GIGI BPJS LAMA
            while ($row_spgigibpjsllma = $hasil_spgigibpjsllma->fetch_assoc()) {
                echo "<td align='center'>".$row_spgigibpjsllma['SPGIGIBPJSLLMA']."</td>";                
            }
            while ($row_spgigibpjsplma = $hasil_spgigibpjsplma->fetch_assoc()) {
                echo "<td align='center'>".$row_spgigibpjsplma['SPGIGIBPJSPLMA']."</td>";                
            }

            // KLINIK GIGI JASA RAHARJA BARU
            while ($row_spgigijasaraharjalbru = $hasil_spgigijasaraharjalbru->fetch_assoc()) {
                echo "<td align='center'>".$row_spgigijasaraharjalbru['SPGIGIJASARAHARJALBRU']."</td>";                
            }
            while ($row_spgigijasaraharjapbru = $hasil_spgigijasaraharjapbru->fetch_assoc()) {
                echo "<td align='center'>".$row_spgigijasaraharjapbru['SPGIGIJASARAHARJAPBRU']."</td>";                
            }

            // KLINIK GIGI JASA RAHARJA LAMA
            while ($row_spgigijasaraharjallma = $hasil_spgigijasaraharjallma->fetch_assoc()) {
                echo "<td align='center'>".$row_spgigijasaraharjallma['SPGIGIJASARAHARJALLMA']."</td>";                
            }
            while ($row_spgigijasaraharjaplma = $hasil_spgigijasaraharjaplma->fetch_assoc()) {
                echo "<td align='center'>".$row_spgigijasaraharjaplma['SPGIGIJASARAHARJAPLMA']."</td>";                
            }
                
            // SP. GIGI TOTAL
            while ($row_spgigitotal = $hasil_spgigitotal->fetch_assoc()) {
                echo "<td align='center'>".$row_spgigitotal['SPGIGITOTAL']."</td>";
            }

            echo"</tr>";


            // 	KLINIK DOKTER UMUM
            echo "<tr>";
            echo "<td align='center'>28</td>";
            echo "<td>KLINIK DOKTER UMUM</td>";

            // KLINIK DOKTER UMUM UMUM BARU
            while ($row_spdokumumumlbru = $hasil_spdokumumumlbru->fetch_assoc()) {
                echo "<td align='center'>".$row_spdokumumumlbru['SPDOKUMUMUMLBRU']."</td>";                
            }
            while ($row_spdokumumumpbru = $hasil_spdokumumumpbru->fetch_assoc()) {
                echo "<td align='center'>".$row_spdokumumumpbru['SPDOKUMUMUMPBRU']."</td>";                
            }

            // KLINIK DOKTER UMUM UMUM LAMA
            while ($row_spdokumumumllma = $hasil_spdokumumumllma->fetch_assoc()) {
                echo "<td align='center'>".$row_spdokumumumllma['SPDOKUMUMUMLLMA']."</td>";                
            }
            while ($row_spdokumumumplma = $hasil_spdokumumumplma->fetch_assoc()) {
                echo "<td align='center'>".$row_spdokumumumplma['SPDOKUMUMUMPLMA']."</td>";                
            }

            // KLINIK DOKTER UMUM BPJS BARU
            while ($row_spdokumbpjslbru = $hasil_spdokumbpjslbru->fetch_assoc()) {
                echo "<td align='center'>".$row_spdokumbpjslbru['SPDOKUMBPJSLBRU']."</td>";                
            }
            while ($row_spdokumbpjspbru = $hasil_spdokumbpjspbru->fetch_assoc()) {
                echo "<td align='center'>".$row_spdokumbpjspbru['SPDOKUMBPJSPBRU']."</td>";                
            }

            // KLINIK DOKTER UMUM BPJS LAMA
            while ($row_spdokumbpjsllma = $hasil_spdokumbpjsllma->fetch_assoc()) {
                echo "<td align='center'>".$row_spdokumbpjsllma['SPDOKUMBPJSLLMA']."</td>";                
            }
            while ($row_spdokumbpjsplma = $hasil_spdokumbpjsplma->fetch_assoc()) {
                echo "<td align='center'>".$row_spdokumbpjsplma['SPDOKUMBPJSPLMA']."</td>";                
            }

            // KLINIK DOKTER UMUM JASA RAHARJA BARU
            while ($row_spdokumjasaraharjalbru = $hasil_spdokumjasaraharjalbru->fetch_assoc()) {
                echo "<td align='center'>".$row_spdokumjasaraharjalbru['SPDOKUMJASARAHARJALBRU']."</td>";                
            }
            while ($row_spdokumjasaraharjapbru = $hasil_spdokumjasaraharjapbru->fetch_assoc()) {
                echo "<td align='center'>".$row_spdokumjasaraharjapbru['SPDOKUMJASARAHARJAPBRU']."</td>";                
            }

            // KLINIK DOKTER UMUM JASA RAHARJA LAMA
            while ($row_spdokumjasaraharjallma = $hasil_spdokumjasaraharjallma->fetch_assoc()) {
                echo "<td align='center'>".$row_spdokumjasaraharjallma['SPDOKUMJASARAHARJALLMA']."</td>";                
            }
            while ($row_spdokumjasaraharjaplma = $hasil_spdokumjasaraharjaplma->fetch_assoc()) {
                echo "<td align='center'>".$row_spdokumjasaraharjaplma['SPDOKUMJASARAHARJAPLMA']."</td>";                
            }
                
            // SP. DOKTER UMUM TOTAL
            while ($row_spdokumtotal = $hasil_spdokumtotal->fetch_assoc()) {
                echo "<td align='center'>".$row_spdokumtotal['SPDOKUMTOTAL']."</td>";
            }

            echo"</tr>";


            // 	KLINIK SP. KECANTIKAN
            echo "<tr>";
            echo "<td align='center'>29</td>";
            echo "<td>KLINIK SP. KECANTIKAN</td>";

            // KLINIK SP. KECANTIKAN UMUM BARU
            while ($row_spcntkumumlbru = $hasil_spcntkumumlbru->fetch_assoc()) {
                echo "<td align='center'>".$row_spcntkumumlbru['SPCNTKUMUMLBRU']."</td>";                
            }
            while ($row_spcntkumumpbru = $hasil_spcntkumumpbru->fetch_assoc()) {
                echo "<td align='center'>".$row_spcntkumumpbru['SPCNTKUMUMPBRU']."</td>";                
            }

            // KLINIK SP. KECANTIKAN UMUM LAMA
            while ($row_spcntkumumllma = $hasil_spcntkumumllma->fetch_assoc()) {
                echo "<td align='center'>".$row_spcntkumumllma['SPCNTKUMUMLLMA']."</td>";                
            }
            while ($row_spcntkumumplma = $hasil_spcntkumumplma->fetch_assoc()) {
                echo "<td align='center'>".$row_spcntkumumplma['SPCNTKUMUMPLMA']."</td>";                
            }

            // KLINIK SP. KECANTIKAN BPJS BARU
            while ($row_spcntkbpjslbru = $hasil_spcntkbpjslbru->fetch_assoc()) {
                echo "<td align='center'>".$row_spcntkbpjslbru['SPCNTKBPJSLBRU']."</td>";                
            }
            while ($row_spcntkbpjspbru = $hasil_spcntkbpjspbru->fetch_assoc()) {
                echo "<td align='center'>".$row_spcntkbpjspbru['SPCNTKBPJSPBRU']."</td>";                
            }

            // KLINIK SP. KECANTIKAN BPJS LAMA
            while ($row_spcntkbpjsllma = $hasil_spcntkbpjsllma->fetch_assoc()) {
                echo "<td align='center'>".$row_spcntkbpjsllma['SPCNTKBPJSLLMA']."</td>";                
            }
            while ($row_spcntkbpjsplma = $hasil_spcntkbpjsplma->fetch_assoc()) {
                echo "<td align='center'>".$row_spcntkbpjsplma['SPCNTKBPJSPLMA']."</td>";                
            }

            // KLINIK SP. KECANTIKAN JASA RAHARJA BARU
            while ($row_spcntkjasaraharjalbru = $hasil_spcntkjasaraharjalbru->fetch_assoc()) {
                echo "<td align='center'>".$row_spcntkjasaraharjalbru['SPCNTKJASARAHARJALBRU']."</td>";                
            }
            while ($row_spcntkjasaraharjapbru = $hasil_spcntkjasaraharjapbru->fetch_assoc()) {
                echo "<td align='center'>".$row_spcntkjasaraharjapbru['SPCNTKJASARAHARJAPBRU']."</td>";                
            }

            // KLINIK SP. KECANTIKAN JASA RAHARJA LAMA
            while ($row_spcntkjasaraharjallma = $hasil_spcntkjasaraharjallma->fetch_assoc()) {
                echo "<td align='center'>".$row_spcntkjasaraharjallma['SPCNTKJASARAHARJALLMA']."</td>";                
            }
            while ($row_spcntkjasaraharjaplma = $hasil_spcntkjasaraharjaplma->fetch_assoc()) {
                echo "<td align='center'>".$row_spcntkjasaraharjaplma['SPCNTKJASARAHARJAPLMA']."</td>";                
            }
                
            // SP. KECANTIKAN TOTAL
            while ($row_spcntktotal = $hasil_spcntktotal->fetch_assoc()) {
                echo "<td align='center'>".$row_spcntktotal['SPCNTKTOTAL']."</td>";
            }

            echo"</tr>";


            // KLINIK MEDICAL CHEK-UP
            echo "<tr>";
            echo "<td align='center'>30</td>";
            echo "<td>KLINIK MEDICAL CHEK-UP</td>";
        
            // KLINIK MEDICAL CHEK-UP UMUM BARU
            while ($row_medchkumumlbru = $hasil_medchkumumlbru->fetch_assoc()) {
                echo "<td align='center'>".$row_medchkumumlbru['MEDCHKUMUMLBRU']."</td>";                
            }
            while ($row_medchkumumpbru = $hasil_medchkumumpbru->fetch_assoc()) {
                echo "<td align='center'>".$row_medchkumumpbru['MEDCHKUMUMPBRU']."</td>";                
            }

            // KLINIK MEDICAL CHEK-UP UMUM LAMA
            while ($row_medchkumumllma = $hasil_medchkumumllma->fetch_assoc()) {
                echo "<td align='center'>".$row_medchkumumllma['MEDCHKUMUMLLMA']."</td>";                
            }
            while ($row_medchkumumplma = $hasil_medchkumumplma->fetch_assoc()) {
                echo "<td align='center'>".$row_medchkumumplma['MEDCHKUMUMPLMA']."</td>";                
            }

            // KLINIK MEDICAL CHEK-UP BPJS BARU
            while ($row_medchkbpjslbru = $hasil_medchkbpjslbru->fetch_assoc()) {
                echo "<td align='center'>".$row_medchkbpjslbru['MEDCHKBPJSLBRU']."</td>";                
            }
            while ($row_medchkbpjspbru = $hasil_medchkbpjspbru->fetch_assoc()) {
                echo "<td align='center'>".$row_medchkbpjspbru['MEDCHKBPJSPBRU']."</td>";                
            }

            // KLINIK MEDICAL CHEK-UP BPJS LAMA
            while ($row_medchkbpjsllma = $hasil_medchkbpjsllma->fetch_assoc()) {
                echo "<td align='center'>".$row_medchkbpjsllma['MEDCHKBPJSLLMA']."</td>";                
            }
            while ($row_medchkbpjsplma = $hasil_medchkbpjsplma->fetch_assoc()) {
                echo "<td align='center'>".$row_medchkbpjsplma['MEDCHKBPJSPLMA']."</td>";                
            }

            // KLINIK MEDICAL CHEK-UP JASA RAHARJA BARU
            while ($row_medchkjasaraharjalbru = $hasil_medchkjasaraharjalbru->fetch_assoc()) {
                echo "<td align='center'>".$row_medchkjasaraharjalbru['MEDCHKJASARAHARJALBRU']."</td>";                
            }
            while ($row_medchkjasaraharjapbru = $hasil_medchkjasaraharjapbru->fetch_assoc()) {
                echo "<td align='center'>".$row_medchkjasaraharjapbru['MEDCHKJASARAHARJAPBRU']."</td>";                
            }

            // KLINIK MEDICAL CHEK-UP JASA RAHARJA LAMA
            while ($row_medchkjasaraharjallma = $hasil_medchkjasaraharjallma->fetch_assoc()) {
                echo "<td align='center'>".$row_medchkjasaraharjallma['MEDCHKJASARAHARJALLMA']."</td>";                
            }
            while ($row_medchkjasaraharjaplma = $hasil_medchkjasaraharjaplma->fetch_assoc()) {
                echo "<td align='center'>".$row_medchkjasaraharjaplma['MEDCHKJASARAHARJAPLMA']."</td>";                
            }
                
            // MEDICAL CHECK-UP
            while ($row_medchktotal = $hasil_medchktotal->fetch_assoc()) {
                echo "<td align='center'>".$row_medchktotal['MEDCHKTOTAL']."</td>";
            }

            echo"</tr>";



            // KLINIK SP. ANAK NEUROLOGI
            echo "<tr>";
            echo "<td align='center'>31</td>";
            echo "<td>KLINIK SP. ANAK NEUROLOGI</td>";

            // KLINIK SP. ANAK NEUROLOGI UMUM BARU
            while ($row_spanakneurologiumumlbru = $hasil_spanakneurologiumumlbru->fetch_assoc()) {
                echo "<td align='center'>".$row_spanakneurologiumumlbru['SPANAKNEUROLOGIUMUMLBRU']."</td>";                
            }
            while ($row_spanakneurologiumumpbru = $hasil_spanakneurologiumumpbru->fetch_assoc()) {
                echo "<td align='center'>".$row_spanakneurologiumumpbru['SPANAKNEUROLOGIUMUMPBRU']."</td>";                
            }

            // KLINIK SP. ANAK NEUROLOGI UMUM LAMA
            while ($row_spanakneurologiumumllma = $hasil_spanakneurologiumumllma->fetch_assoc()) {
                echo "<td align='center'>".$row_spanakneurologiumumllma['SPANAKNEUROLOGIUMUMLLMA']."</td>";                
            }
            while ($row_spanakneurologiumumplma = $hasil_spanakneurologiumumplma->fetch_assoc()) {
                echo "<td align='center'>".$row_spanakneurologiumumplma['SPANAKNEUROLOGIUMUMPLMA']."</td>";                
            }

            // KLINIK SP. ANAK NEUROLOGI BPJS BARU
            while ($row_spanakneurologibpjslbru = $hasil_spanakneurologibpjslbru->fetch_assoc()) {
                echo "<td align='center'>".$row_spanakneurologibpjslbru['SPANAKNEUROLOGIBPJSLBRU']."</td>";                
            }
            while ($row_spanakneurologibpjspbru = $hasil_spanakneurologibpjspbru->fetch_assoc()) {
                echo "<td align='center'>".$row_spanakneurologibpjspbru['SPANAKNEUROLOGIBPJSPBRU']."</td>";                
            }

            // KLINIK SP. ANAK NEUROLOGI BPJS LAMA
            while ($row_spanakneurologibpjsllma = $hasil_spanakneurologibpjsllma->fetch_assoc()) {
                echo "<td align='center'>".$row_spanakneurologibpjsllma['SPANAKNEUROLOGIBPJSLLMA']."</td>";                
            }
            while ($row_spanakneurologibpjsplma = $hasil_spanakneurologibpjsplma->fetch_assoc()) {
                echo "<td align='center'>".$row_spanakneurologibpjsplma['SPANAKNEUROLOGIBPJSPLMA']."</td>";                
            }

            // KLINIK SP. ANAK NEUROLOGI JASA RAHARJA BARU
            while ($row_spanakneurologijasaraharjalbru = $hasil_spanakneurologijasaraharjalbru->fetch_assoc()) {
                echo "<td align='center'>".$row_spanakneurologijasaraharjalbru['SPANAKNEUROLOGIJASARAHARJALBRU']."</td>";                
            }
            while ($row_spanakneurologijasaraharjapbru = $hasil_spanakneurologijasaraharjapbru->fetch_assoc()) {
                echo "<td align='center'>".$row_spanakneurologijasaraharjapbru['SPANAKNEUROLOGIJASARAHARJAPBRU']."</td>";                
            }

            // KLINIK SP. ANAK NEUROLOGI JASA RAHARJA LAMA
            while ($row_spanakneurologijasaraharjallma = $hasil_spanakneurologijasaraharjallma->fetch_assoc()) {
                echo "<td align='center'>".$row_spanakneurologijasaraharjallma['SPANAKNEUROLOGIJASARAHARJALLMA']."</td>";                
            }
            while ($row_spanakneurologijasaraharjaplma = $hasil_spanakneurologijasaraharjaplma->fetch_assoc()) {
                echo "<td align='center'>".$row_spanakneurologijasaraharjaplma['SPANAKNEUROLOGIJASARAHARJAPLMA']."</td>";                
            }
                
            // SP. ANAK NEUROLOGI
            while ($row_spanakneurologitotal = $hasil_spanakneurologitotal->fetch_assoc()) {
                echo "<td align='center'>".$row_spanakneurologitotal['SPANAKNEUROLOGITOTAL']."</td>";
            }

            echo"</tr>";


            // KLINIK SP. ANAK NEFROLOGI
            echo "<tr>";
            echo "<td align='center'>32</td>";
            echo "<td>KLINIK SP. ANAK NEFROLOGI</td>";

            // KLINIK SP. ANAK NEFROLOGI UMUM BARU
            while ($row_spanaknefrologiumumlbru = $hasil_spanaknefrologiumumlbru->fetch_assoc()) {
                echo "<td align='center'>".$row_spanaknefrologiumumlbru['SPANAKNEFROLOGIUMUMLBRU']."</td>";                
            }
            while ($row_spanaknefrologiumumpbru = $hasil_spanaknefrologiumumpbru->fetch_assoc()) {
                echo "<td align='center'>".$row_spanaknefrologiumumpbru['SPANAKNEFROLOGIUMUMPBRU']."</td>";                
            }

            // KLINIK SP. ANAK NEFROLOGI UMUM LAMA
            while ($row_spanaknefrologiumumllma = $hasil_spanaknefrologiumumllma->fetch_assoc()) {
                echo "<td align='center'>".$row_spanaknefrologiumumllma['SPANAKNEFROLOGIUMUMLLMA']."</td>";                
            }
            while ($row_spanaknefrologiumumplma = $hasil_spanaknefrologiumumplma->fetch_assoc()) {
                echo "<td align='center'>".$row_spanaknefrologiumumplma['SPANAKNEFROLOGIUMUMPLMA']."</td>";                
            }

            // KLINIK SP. ANAK NEFROLOGI BPJS BARU
            while ($row_spanaknefrologibpjslbru = $hasil_spanaknefrologibpjslbru->fetch_assoc()) {
                echo "<td align='center'>".$row_spanaknefrologibpjslbru['SPANAKNEFROLOGIBPJSLBRU']."</td>";                
            }
            while ($row_spanaknefrologibpjspbru = $hasil_spanaknefrologibpjspbru->fetch_assoc()) {
                echo "<td align='center'>".$row_spanaknefrologibpjspbru['SPANAKNEFROLOGIBPJSPBRU']."</td>";                
            }

            // KLINIK SP. ANAK NEFROLOGI BPJS LAMA
            while ($row_spanaknefrologibpjsllma = $hasil_spanaknefrologibpjsllma->fetch_assoc()) {
                echo "<td align='center'>".$row_spanaknefrologibpjsllma['SPANAKNEFROLOGIBPJSLLMA']."</td>";                
            }
            while ($row_spanaknefrologibpjsplma = $hasil_spanaknefrologibpjsplma->fetch_assoc()) {
                echo "<td align='center'>".$row_spanaknefrologibpjsplma['SPANAKNEFROLOGIBPJSPLMA']."</td>";                
            }

            // KLINIK SP. ANAK NEFROLOGI JASA RAHARJA BARU
            while ($row_spanaknefrologijasaraharjalbru = $hasil_spanaknefrologijasaraharjalbru->fetch_assoc()) {
                echo "<td align='center'>".$row_spanaknefrologijasaraharjalbru['SPANAKNEFROLOGIJASARAHARJALBRU']."</td>";                
            }
            while ($row_spanaknefrologijasaraharjapbru = $hasil_spanaknefrologijasaraharjapbru->fetch_assoc()) {
                echo "<td align='center'>".$row_spanaknefrologijasaraharjapbru['SPANAKNEFROLOGIJASARAHARJAPBRU']."</td>";                
            }

            // KLINIK SP. ANAK NEFROLOGI JASA RAHARJA LAMA
            while ($row_spanaknefrologijasaraharjallma = $hasil_spanaknefrologijasaraharjallma->fetch_assoc()) {
                echo "<td align='center'>".$row_spanaknefrologijasaraharjallma['SPANAKNEFROLOGIJASARAHARJALLMA']."</td>";                
            }
            while ($row_spanaknefrologijasaraharjaplma = $hasil_spanaknefrologijasaraharjaplma->fetch_assoc()) {
                echo "<td align='center'>".$row_spanaknefrologijasaraharjaplma['SPANAKNEFROLOGIJASARAHARJAPLMA']."</td>";                
            }
                
            // SP. ANAK NEFROLOGI
            while ($row_spanaknefrologitotal = $hasil_spanaknefrologitotal->fetch_assoc()) {
                echo "<td align='center'>".$row_spanaknefrologitotal['SPANAKNEFROLOGITOTAL']."</td>";
            }

            echo"</tr>";


            // 	KLINIK SP. ANAK NUTRISI & PENY. METABOLIK
            echo "<tr>";
            echo "<td align='center'>33</td>";
            echo "<td>KLINIK SP. ANAK NUTRISI & PENY. METABOLIK</td>";

            // KLINIK SP. ANAK NUTRISI & PENY. METABOLIK UMUM BARU
            while ($row_spanaknutrisiumumlbru = $hasil_spanaknutrisiumumlbru->fetch_assoc()) {
                echo "<td align='center'>".$row_spanaknutrisiumumlbru['SPANAKNUTRISIUMUMLBRU']."</td>";                
            }
            while ($row_spanaknutrisiumumpbru = $hasil_spanaknutrisiumumpbru->fetch_assoc()) {
                echo "<td align='center'>".$row_spanaknutrisiumumpbru['SPANAKNUTRISIUMUMPBRU']."</td>";                
            }

            // KLINIK SP. ANAK NUTRISI & PENY. METABOLIK UMUM LAMA
            while ($row_spanaknutrisiumumllma = $hasil_spanaknutrisiumumllma->fetch_assoc()) {
                echo "<td align='center'>".$row_spanaknutrisiumumllma['SPANAKNUTRISIUMUMLLMA']."</td>";                
            }
            while ($row_spanaknutrisiumumplma = $hasil_spanaknutrisiumumplma->fetch_assoc()) {
                echo "<td align='center'>".$row_spanaknutrisiumumplma['SPANAKNUTRISIUMUMPLMA']."</td>";                
            }

            // KLINIK SP. ANAK NUTRISI & PENY. METABOLIK BPJS BARU
            while ($row_spanaknutrisibpjslbru = $hasil_spanaknutrisibpjslbru->fetch_assoc()) {
                echo "<td align='center'>".$row_spanaknutrisibpjslbru['SPANAKNUTRISIBPJSLBRU']."</td>";                
            }
            while ($row_spanaknutrisibpjspbru = $hasil_spanaknutrisibpjspbru->fetch_assoc()) {
                echo "<td align='center'>".$row_spanaknutrisibpjspbru['SPANAKNUTRISIBPJSPBRU']."</td>";                
            }

            // KLINIK SP. ANAK NUTRISI & PENY. METABOLIK BPJS LAMA
            while ($row_spanaknutrisibpjsllma = $hasil_spanaknutrisibpjsllma->fetch_assoc()) {
                echo "<td align='center'>".$row_spanaknutrisibpjsllma['SPANAKNUTRISIBPJSLLMA']."</td>";                
            }
            while ($row_spanaknutrisibpjsplma = $hasil_spanaknutrisibpjsplma->fetch_assoc()) {
                echo "<td align='center'>".$row_spanaknutrisibpjsplma['SPANAKNUTRISIBPJSPLMA']."</td>";                
            }

            // KLINIK SP. ANAK NUTRISI & PENY. METABOLIK JASA RAHARJA BARU
            while ($row_spanaknutrisijasaraharjalbru = $hasil_spanaknutrisijasaraharjalbru->fetch_assoc()) {
                echo "<td align='center'>".$row_spanaknutrisijasaraharjalbru['SPANAKNUTRISIJASARAHARJALBRU']."</td>";                
            }
            while ($row_spanaknutrisijasaraharjapbru = $hasil_spanaknutrisijasaraharjapbru->fetch_assoc()) {
                echo "<td align='center'>".$row_spanaknutrisijasaraharjapbru['SPANAKNUTRISIJASARAHARJAPBRU']."</td>";                
            }

            // KLINIK SP. ANAK NUTRISI & PENY. METABOLIK JASA RAHARJA LAMA
            while ($row_spanaknutrisijasaraharjallma = $hasil_spanaknutrisijasaraharjallma->fetch_assoc()) {
                echo "<td align='center'>".$row_spanaknutrisijasaraharjallma['SPANAKNUTRISIJASARAHARJALLMA']."</td>";                
            }
            while ($row_spanaknutrisijasaraharjaplma = $hasil_spanaknutrisijasaraharjaplma->fetch_assoc()) {
                echo "<td align='center'>".$row_spanaknutrisijasaraharjaplma['SPANAKNUTRISIJASARAHARJAPLMA']."</td>";                
            }
                
            // SP. NUTRISI & PENY. METABOLIK NEFROLOGI
            while ($row_spanaknutrisitotal = $hasil_spanaknutrisitotal->fetch_assoc()) {
                echo "<td align='center'>".$row_spanaknutrisitotal['SPANAKNUTRISITOTAL']."</td>";
            }

            echo"</tr>";


            // KLINIK SP. ANAK KARDIOLOGI
            echo "<tr>";
            echo "<td align='center'>34</td>";
            echo "<td>KLINIK SP. ANAK KARDIOLOGI</td>";

            // KLINIK SP. ANAK KARDIOLOGI UMUM BARU
            while ($row_spanakkardioumumlbru = $hasil_spanakkardioumumlbru->fetch_assoc()) {
                echo "<td align='center'>".$row_spanakkardioumumlbru['SPANAKKARDIOUMUMLBRU']."</td>";                
            }
            while ($row_spanakkardioumumpbru = $hasil_spanakkardioumumpbru->fetch_assoc()) {
                echo "<td align='center'>".$row_spanakkardioumumpbru['SPANAKKARDIOUMUMPBRU']."</td>";                
            }

            // KLINIK SP. ANAK KARDIOLOGI UMUM LAMA
            while ($row_spanakkardioumumllma = $hasil_spanakkardioumumllma->fetch_assoc()) {
                echo "<td align='center'>".$row_spanakkardioumumllma['SPANAKKARDIOUMUMLLMA']."</td>";                
            }
            while ($row_spanakkardioumumplma = $hasil_spanakkardioumumplma->fetch_assoc()) {
                echo "<td align='center'>".$row_spanakkardioumumplma['SPANAKKARDIOUMUMPLMA']."</td>";                
            }

            // KLINIK SP. ANAK KARDIOLOGI BPJS BARU
            while ($row_spanakkardiobpjslbru = $hasil_spanakkardiobpjslbru->fetch_assoc()) {
                echo "<td align='center'>".$row_spanakkardiobpjslbru['SPANAKKARDIOBPJSLBRU']."</td>";                
            }
            while ($row_spanakkardiobpjspbru = $hasil_spanakkardiobpjspbru->fetch_assoc()) {
                echo "<td align='center'>".$row_spanakkardiobpjspbru['SPANAKKARDIOBPJSPBRU']."</td>";                
            }

            // KLINIK SP. ANAK KARDIOLOGI BPJS LAMA
            while ($row_spanakkardiobpjsllma = $hasil_spanakkardiobpjsllma->fetch_assoc()) {
                echo "<td align='center'>".$row_spanakkardiobpjsllma['SPANAKKARDIOBPJSLLMA']."</td>";                
            }
            while ($row_spanakkardiobpjsplma = $hasil_spanakkardiobpjsplma->fetch_assoc()) {
                echo "<td align='center'>".$row_spanakkardiobpjsplma['SPANAKKARDIOBPJSPLMA']."</td>";                
            }

            // KLINIK SP. ANAK KARDIOLOGI JASA RAHARJA BARU
            while ($row_spanakkardiojasaraharjalbru = $hasil_spanakkardiojasaraharjalbru->fetch_assoc()) {
                echo "<td align='center'>".$row_spanakkardiojasaraharjalbru['SPANAKKARDIOJASARAHARJALBRU']."</td>";                
            }
            while ($row_spanakkardiojasaraharjapbru = $hasil_spanakkardiojasaraharjapbru->fetch_assoc()) {
                echo "<td align='center'>".$row_spanakkardiojasaraharjapbru['SPANAKKARDIOJASARAHARJAPBRU']."</td>";                
            }

            // KLINIK SP. ANAK KARDIOLOGI JASA RAHARJA LAMA
            while ($row_spanakkardiojasaraharjallma = $hasil_spanakkardiojasaraharjallma->fetch_assoc()) {
                echo "<td align='center'>".$row_spanakkardiojasaraharjallma['SPANAKKARDIOJASARAHARJALLMA']."</td>";                
            }
            while ($row_spanakkardiojasaraharjaplma = $hasil_spanakkardiojasaraharjaplma->fetch_assoc()) {
                echo "<td align='center'>".$row_spanakkardiojasaraharjaplma['SPANAKKARDIOJASARAHARJAPLMA']."</td>";                
            }
                
            // SP. ANAK KARDIOLOGI
            while ($row_spanakkardiototal = $hasil_spanakkardiototal->fetch_assoc()) {
                echo "<td align='center'>".$row_spanakkardiototal['SPANAKKARDIOTOTAL']."</td>";
            }

            echo"</tr>";


            // 	KLINIK SP. ANAK RESPIROLOGI
            echo "<tr>";
            echo "<td align='center'>35</td>";
            echo "<td>KLINIK SP. ANAK RESPIROLOGI</td>";

            // KLINIK SP. ANAK RESPIROLOGI UMUM BARU
            while ($row_spanakrespiumumlbru = $hasil_spanakrespiumumlbru->fetch_assoc()) {
                echo "<td align='center'>".$row_spanakrespiumumlbru['SPANAKRESPIUMUMLBRU']."</td>";                
            }
            while ($row_spanakrespiumumpbru = $hasil_spanakrespiumumpbru->fetch_assoc()) {
                echo "<td align='center'>".$row_spanakrespiumumpbru['SPANAKRESPIUMUMPBRU']."</td>";                
            }

            // KLINIK SP. ANAK RESPIROLOGI UMUM LAMA
            while ($row_spanakrespiumumllma = $hasil_spanakrespiumumllma->fetch_assoc()) {
                echo "<td align='center'>".$row_spanakrespiumumllma['SPANAKRESPIUMUMLLMA']."</td>";                
            }
            while ($row_spanakrespiumumplma = $hasil_spanakrespiumumplma->fetch_assoc()) {
                echo "<td align='center'>".$row_spanakrespiumumplma['SPANAKRESPIUMUMPLMA']."</td>";                
            }

            // KLINIK SP. ANAK RESPIROLOGI BPJS BARU
            while ($row_spanakrespibpjslbru = $hasil_spanakrespibpjslbru->fetch_assoc()) {
                echo "<td align='center'>".$row_spanakrespibpjslbru['SPANAKRESPIBPJSLBRU']."</td>";                
            }
            while ($row_spanakrespibpjspbru = $hasil_spanakrespibpjspbru->fetch_assoc()) {
                echo "<td align='center'>".$row_spanakrespibpjspbru['SPANAKRESPIBPJSPBRU']."</td>";                
            }

            // KLINIK SP. ANAK RESPIROLOGI BPJS LAMA
            while ($row_spanakrespibpjsllma = $hasil_spanakrespibpjsllma->fetch_assoc()) {
                echo "<td align='center'>".$row_spanakrespibpjsllma['SPANAKRESPIBPJSLLMA']."</td>";                
            }
            while ($row_spanakrespibpjsplma = $hasil_spanakrespibpjsplma->fetch_assoc()) {
                echo "<td align='center'>".$row_spanakrespibpjsplma['SPANAKRESPIBPJSPLMA']."</td>";                
            }

            // KLINIK SP. ANAK RESPIROLOGI JASA RAHARJA BARU
            while ($row_spanakrespijasaraharjalbru = $hasil_spanakrespijasaraharjalbru->fetch_assoc()) {
                echo "<td align='center'>".$row_spanakrespijasaraharjalbru['SPANAKRESPIJASARAHARJALBRU']."</td>";                
            }
            while ($row_spanakrespijasaraharjapbru = $hasil_spanakrespijasaraharjapbru->fetch_assoc()) {
                echo "<td align='center'>".$row_spanakrespijasaraharjapbru['SPANAKRESPIJASARAHARJAPBRU']."</td>";                
            }

            // KLINIK SP. ANAK RESPIROLOGI JASA RAHARJA LAMA
            while ($row_spanakrespijasaraharjallma = $hasil_spanakrespijasaraharjallma->fetch_assoc()) {
                echo "<td align='center'>".$row_spanakrespijasaraharjallma['SPANAKRESPIJASARAHARJALLMA']."</td>";                
            }
            while ($row_spanakrespijasaraharjaplma = $hasil_spanakrespijasaraharjaplma->fetch_assoc()) {
                echo "<td align='center'>".$row_spanakrespijasaraharjaplma['SPANAKRESPIJASARAHARJAPLMA']."</td>";                
            }
                
            // SP. ANAK RESPIROLOGI
            while ($row_spanakrespitotal = $hasil_spanakrespitotal->fetch_assoc()) {
                echo "<td align='center'>".$row_spanakrespitotal['SPANAKRESPITOTAL']."</td>";
            }

            echo"</tr>";


            // KLINIK SP. ANAK PERINATOLOGI
            echo "<tr>";
            echo "<td align='center'>36</td>";
            echo "<td>KLINIK SP. ANAK PERINATOLOGI</td>";

            // KLINIK SP. ANAK PERINATOLOGI UMUM BARU
            while ($row_spanakperinaumumlbru = $hasil_spanakperinaumumlbru->fetch_assoc()) {
                echo "<td align='center'>".$row_spanakperinaumumlbru['SPANAKPERINAUMUMLBRU']."</td>";                
            }
            while ($row_spanakperinaumumpbru = $hasil_spanakperinaumumpbru->fetch_assoc()) {
                echo "<td align='center'>".$row_spanakperinaumumpbru['SPANAKPERINAUMUMPBRU']."</td>";                
            }

            // KLINIK SP. ANAK PERINATOLOGI UMUM LAMA
            while ($row_spanakperinaumumllma = $hasil_spanakperinaumumllma->fetch_assoc()) {
                echo "<td align='center'>".$row_spanakperinaumumllma['SPANAKPERINAUMUMLLMA']."</td>";                
            }
            while ($row_spanakperinaumumplma = $hasil_spanakperinaumumplma->fetch_assoc()) {
                echo "<td align='center'>".$row_spanakperinaumumplma['SPANAKPERINAUMUMPLMA']."</td>";                
            }

            // KLINIK SP. ANAK PERINATOLOGI BPJS BARU
            while ($row_spanakperinabpjslbru = $hasil_spanakperinabpjslbru->fetch_assoc()) {
                echo "<td align='center'>".$row_spanakperinabpjslbru['SPANAKPERINABPJSLBRU']."</td>";                
            }
            while ($row_spanakperinabpjspbru = $hasil_spanakperinabpjspbru->fetch_assoc()) {
                echo "<td align='center'>".$row_spanakperinabpjspbru['SPANAKPERINABPJSPBRU']."</td>";                
            }

            // KLINIK SP. ANAK PERINATOLOGI BPJS LAMA
            while ($row_spanakperinabpjsllma = $hasil_spanakperinabpjsllma->fetch_assoc()) {
                echo "<td align='center'>".$row_spanakperinabpjsllma['SPANAKPERINABPJSLLMA']."</td>";                
            }
            while ($row_spanakperinabpjsplma = $hasil_spanakperinabpjsplma->fetch_assoc()) {
                echo "<td align='center'>".$row_spanakperinabpjsplma['SPANAKPERINABPJSPLMA']."</td>";                
            }

            // KLINIK SP. ANAK PERINATOLOGI JASA RAHARJA BARU
            while ($row_spanakperinajasaraharjalbru = $hasil_spanakperinajasaraharjalbru->fetch_assoc()) {
                echo "<td align='center'>".$row_spanakperinajasaraharjalbru['SPANAKPERINAJASARAHARJALBRU']."</td>";                
            }
            while ($row_spanakperinajasaraharjapbru = $hasil_spanakperinajasaraharjapbru->fetch_assoc()) {
                echo "<td align='center'>".$row_spanakperinajasaraharjapbru['SPANAKPERINAJASARAHARJAPBRU']."</td>";                
            }

            // KLINIK SP. ANAK PERINATOLOGI JASA RAHARJA LAMA
            while ($row_spanakperinajasaraharjallma = $hasil_spanakperinajasaraharjallma->fetch_assoc()) {
                echo "<td align='center'>".$row_spanakperinajasaraharjallma['SPANAKPERINAJASARAHARJALLMA']."</td>";                
            }
            while ($row_spanakperinajasaraharjaplma = $hasil_spanakperinajasaraharjaplma->fetch_assoc()) {
                echo "<td align='center'>".$row_spanakperinajasaraharjaplma['SPANAKPERINAJASARAHARJAPLMA']."</td>";                
            }
                
            // SP. ANAK PERINATOLOGI
            while ($row_spanakperinatotal = $hasil_spanakperinatotal->fetch_assoc()) {
                echo "<td align='center'>".$row_spanakperinatotal['SPANAKPERINATOTAL']."</td>";
            }

            echo"</tr>";


            // KLINIK SP. PSIKIATRI
            echo "<tr>";
            echo "<td align='center'>37</td>";
            echo "<td>KLINIK SP. PSIKIATRI</td>";

            // KLINIK SP. PSIKIATRI UMUM BARU
            while ($row_sppsikiatriumumlbru = $hasil_sppsikiatriumumlbru->fetch_assoc()) {
                echo "<td align='center'>".$row_sppsikiatriumumlbru['SPPSIKIATRIUMUMLBRU']."</td>";                
            }
            while ($row_sppsikiatriumumpbru = $hasil_sppsikiatriumumpbru->fetch_assoc()) {
                echo "<td align='center'>".$row_sppsikiatriumumpbru['SPPSIKIATRIUMUMPBRU']."</td>";                
            }

            // KLINIK SP. PSIKIATRI UMUM LAMA
            while ($row_sppsikiatriumumllma = $hasil_sppsikiatriumumllma->fetch_assoc()) {
                echo "<td align='center'>".$row_sppsikiatriumumllma['SPPSIKIATRIUMUMLLMA']."</td>";                
            }
            while ($row_sppsikiatriumumplma = $hasil_sppsikiatriumumplma->fetch_assoc()) {
                echo "<td align='center'>".$row_sppsikiatriumumplma['SPPSIKIATRIUMUMPLMA']."</td>";                
            }

            // KLINIK SP. PSIKIATRI BPJS BARU
            while ($row_sppsikiatribpjslbru = $hasil_sppsikiatribpjslbru->fetch_assoc()) {
                echo "<td align='center'>".$row_sppsikiatribpjslbru['SPPSIKIATRIBPJSLBRU']."</td>";                
            }
            while ($row_sppsikiatribpjspbru = $hasil_sppsikiatribpjspbru->fetch_assoc()) {
                echo "<td align='center'>".$row_sppsikiatribpjspbru['SPPSIKIATRIBPJSPBRU']."</td>";                
            }

            // KLINIK SP. PSIKIATRI BPJS LAMA
            while ($row_sppsikiatribpjsllma = $hasil_sppsikiatribpjsllma->fetch_assoc()) {
                echo "<td align='center'>".$row_sppsikiatribpjsllma['SPPSIKIATRIBPJSLLMA']."</td>";                
            }
            while ($row_sppsikiatribpjsplma = $hasil_sppsikiatribpjsplma->fetch_assoc()) {
                echo "<td align='center'>".$row_sppsikiatribpjsplma['SPPSIKIATRIBPJSPLMA']."</td>";                
            }

            // KLINIK SP. PSIKIATRI JASA RAHARJA BARU
            while ($row_sppsikiatrijasaraharjalbru = $hasil_sppsikiatrijasaraharjalbru->fetch_assoc()) {
                echo "<td align='center'>".$row_sppsikiatrijasaraharjalbru['SPPSIKIATRIJASARAHARJALBRU']."</td>";                
            }
            while ($row_sppsikiatrijasaraharjapbru = $hasil_sppsikiatrijasaraharjapbru->fetch_assoc()) {
                echo "<td align='center'>".$row_sppsikiatrijasaraharjapbru['SPPSIKIATRIJASARAHARJAPBRU']."</td>";                
            }

            // KLINIK SP. PSIKIATRI JASA RAHARJA LAMA
            while ($row_sppsikiatrijasaraharjallma = $hasil_sppsikiatrijasaraharjallma->fetch_assoc()) {
                echo "<td align='center'>".$row_sppsikiatrijasaraharjallma['SPPSIKIATRIJASARAHARJALLMA']."</td>";                
            }
            while ($row_sppsikiatrijasaraharjaplma = $hasil_sppsikiatrijasaraharjaplma->fetch_assoc()) {
                echo "<td align='center'>".$row_sppsikiatrijasaraharjaplma['SPPSIKIATRIJASARAHARJAPLMA']."</td>";                
            }
                
            // SP. PSIKIATRI
            while ($row_sppsikiatritotal = $hasil_sppsikiatritotal->fetch_assoc()) {
                echo "<td align='center'>".$row_sppsikiatritotal['SPPSIKIATRITOTAL']."</td>";
            }
            
            // 	INSTALASI HEMODIALISA
            echo "<tr>";
            echo "<td align='center'>38</td>";
            echo "<td>INSTALASI HEMODIALISA</td>";

            // INSTALASI HEMODIALISA UMUM BARU
            while ($row_hemodialisaumumlbru = $hasil_hemodialisaumumlbru->fetch_assoc()) {
                echo "<td align='center'>".$row_hemodialisaumumlbru['HEMODIALISAUMUMLBRU']."</td>";                
            }
            while ($row_hemodialisaumumpbru = $hasil_hemodialisaumumpbru->fetch_assoc()) {
                echo "<td align='center'>".$row_hemodialisaumumpbru['HEMODIALISAUMUMPBRU']."</td>";                
            }

            // INSTALASI HEMODIALISA UMUM LAMA
            while ($row_hemodialisaumumllma = $hasil_hemodialisaumumllma->fetch_assoc()) {
                echo "<td align='center'>".$row_hemodialisaumumllma['HEMODIALISAUMUMLLMA']."</td>";                
            }
            while ($row_hemodialisaumumplma = $hasil_hemodialisaumumplma->fetch_assoc()) {
                echo "<td align='center'>".$row_hemodialisaumumplma['HEMODIALISAUMUMPLMA']."</td>";                
            }

            // INSTALASI HEMODIALISA BPJS BARU
            while ($row_hemodialisabpjslbru = $hasil_hemodialisabpjslbru->fetch_assoc()) {
                echo "<td align='center'>".$row_hemodialisabpjslbru['HEMODIALISABPJSLBRU']."</td>";                
            }
            while ($row_hemodialisabpjspbru = $hasil_hemodialisabpjspbru->fetch_assoc()) {
                echo "<td align='center'>".$row_hemodialisabpjspbru['HEMODIALISABPJSPBRU']."</td>";                
            }

            // INSTALASI HEMODIALISA BPJS LAMA
            while ($row_hemodialisabpjsllma = $hasil_hemodialisabpjsllma->fetch_assoc()) {
                echo "<td align='center'>".$row_hemodialisabpjsllma['HEMODIALISABPJSLLMA']."</td>";                
            }
            while ($row_hemodialisabpjsplma = $hasil_hemodialisabpjsplma->fetch_assoc()) {
                echo "<td align='center'>".$row_hemodialisabpjsplma['HEMODIALISABPJSPLMA']."</td>";                
            }

            // INSTALASI HEMODIALISA JASA RAHARJA BARU
            while ($row_hemodialisajasaraharjalbru = $hasil_hemodialisajasaraharjalbru->fetch_assoc()) {
                echo "<td align='center'>".$row_hemodialisajasaraharjalbru['HEMODIALISAJASARAHARJALBRU']."</td>";                
            }
            while ($row_hemodialisajasaraharjapbru = $hasil_hemodialisajasaraharjapbru->fetch_assoc()) {
                echo "<td align='center'>".$row_hemodialisajasaraharjapbru['HEMODIALISAJASARAHARJAPBRU']."</td>";                
            }

            // INSTALASI HEMODIALISA JASA RAHARJA LAMA
            while ($row_hemodialisajasaraharjallma = $hasil_hemodialisajasaraharjallma->fetch_assoc()) {
                echo "<td align='center'>".$row_hemodialisajasaraharjallma['HEMODIALISAJASARAHARJALLMA']."</td>";                
            }
            while ($row_hemodialisajasaraharjaplma = $hasil_hemodialisajasaraharjaplma->fetch_assoc()) {
                echo "<td align='center'>".$row_hemodialisajasaraharjaplma['HEMODIALISAJASARAHARJAPLMA']."</td>";                
            }
                
            // INSTALASI HEMODIALISA TOTAL
            while ($row_hemodialisatotal = $hasil_hemodialisatotal->fetch_assoc()) {
                echo "<td align='center'>".$row_hemodialisatotal['HEMODIALISATOTAL']."</td>";
            }

            echo"</tr>";            
        ?>
        <?php
        // <tr>
        //     <td colspan="2" align="center">TOTAL</td>
        //     <td align="center">0</td>
        //     <td align="center">0</td>
        //     <td align="center">0</td>
        //     <td align="center">0</td>
        //     <td align="center">0</td>
        //     <td align="center">0</td>
        //     <td align="center">0</td>
        //     <td align="center">0</td>
        //     <td align="center">0</td>
        //     <td align="center">0</td>
        //     <td align="center">0</td>
        //     <td align="center">0</td>
        //     <td align="center">0</td>
        // </tr>

            echo "<tr>";
            echo "<td colspan='2' align='center'><b>TOTAL</b></td>";
            // TOTAL UMUM BARU L
            while ($row_totalumumlbru = $hasil_totalumumlbru->fetch_assoc()) {
                echo "<td align='center'>".$row_totalumumlbru['TOTALUMUMLBRU']."</td>";                
            }
            // TOTAL UMUM BARU P
            while ($row_totalumumpbru = $hasil_totalumumpbru->fetch_assoc()) {
                echo "<td align='center'>".$row_totalumumpbru['TOTALUMUMPBRU']."</td>";                
            }

            // TOTAL UMUM LAMA L
            while ($row_totalumumllma = $hasil_totalumumllma->fetch_assoc()) {
                echo "<td align='center'>".$row_totalumumllma['TOTALUMUMLLMA']."</td>";                
            }
            // TOTAL UMUM LAMA P
            while ($row_totalumumplma = $hasil_totalumumplma->fetch_assoc()) {
                echo "<td align='center'>".$row_totalumumplma['TOTALUMUMPLMA']."</td>";                
            }

            // TOTAL BPJS BARU L
            while ($row_totalbpjslbru = $hasil_totalbpjslbru->fetch_assoc()) {
                echo "<td align='center'>".$row_totalbpjslbru['TOTALBPJSLBRU']."</td>";                
            }
            // TOTAL BPJS BARU P
            while ($row_totalbpjspbru = $hasil_totalbpjspbru->fetch_assoc()) {
                echo "<td align='center'>".$row_totalbpjspbru['TOTALBPJSPBRU']."</td>";                
            }

            // TOTAL BPJS LAMA L
            while ($row_totalbpjsllma = $hasil_totalbpjsllma->fetch_assoc()) {
                echo "<td align='center'>".$row_totalbpjsllma['TOTALBPJSLLMA']."</td>";                
            }
            // TOTAL BPJS LAMA P
            while ($row_totalbpjsplma = $hasil_totalbpjsplma->fetch_assoc()) {
                echo "<td align='center'>".$row_totalbpjsplma['TOTALBPJSPLMA']."</td>";                
            }

            // TOTAL JASA RAHARJA BARU L
            while ($row_totaljasaraharjalbru = $hasil_totaljasaraharjalbru->fetch_assoc()) {
                echo "<td align='center'>".$row_totaljasaraharjalbru['TOTALJASARAHARJALBRU']."</td>";                
            }
            // TOTAL JASA RAHARJA BARU P
            while ($row_totaljasaraharjapbru = $hasil_totaljasaraharjapbru->fetch_assoc()) {
                echo "<td align='center'>".$row_totaljasaraharjapbru['TOTALJASARAHARJAPBRU']."</td>";                
            }

            // TOTAL JASA RAHARJA LAMA L
            while ($row_totaljasaraharjallma = $hasil_totaljasaraharjallma->fetch_assoc()) {
                echo "<td align='center'>".$row_totaljasaraharjallma['TOTALJASARAHARJALLMA']."</td>";                
            }
            // TOTAL JASA RAHARJA LAMA P
            while ($row_totaljasaraharjaplma = $hasil_totaljasaraharjaplma->fetch_assoc()) {
                echo "<td align='center'>".$row_totaljasaraharjaplma['TOTALJASARAHARJAPLMA']."</td>";                
            }

            // TOTAL JASA RAHARJA LAMA P
            while ($row_totalpoli = $hasil_totalpoli->fetch_assoc()) {
                echo "<td align='center'>".$row_totalpoli['TOTALPOLI']."</td>";                
            }

            echo "</tr>";
        ?>
    </table>
    </div>

    <script src="bootstrap/js/jquery-3.5.1.slim.min.js"></script>
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>