 <?php   
    require_once('koneksi.php');

            // IGD UMUM L & P BARU
            $query_igdumumlbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as IGDUMUMLBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'UMU' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'INSTALASI GAWAT DARURAT' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $query_igdumumpbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as IGDUMUMPBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'UMU' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'INSTALASI GAWAT DARURAT' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $hasil_igdumumlbru = $koneksi->query($query_igdumumlbru);
            $hasil_igdumumpbru = $koneksi->query($query_igdumumpbru);

            // IGD UMUM L & P LAMA
            $query_igdumumllma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as IGDUMUMLLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'UMU' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'INSTALASI GAWAT DARURAT' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $query_igdumumplma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as IGDUMUMPLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'UMU' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'INSTALASI GAWAT DARURAT' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $hasil_igdumumllma = $koneksi->query($query_igdumumllma);
            $hasil_igdumumplma = $koneksi->query($query_igdumumplma);

            // IGD BPJS L & P BARU
            $query_igdbpjslbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as IGDBPJSLBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'BPJ' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'INSTALASI GAWAT DARURAT' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $query_igdbpjspbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as IGDBPJSPBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'BPJ' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'INSTALASI GAWAT DARURAT' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $hasil_igdbpjslbru = $koneksi->query($query_igdbpjslbru);
            $hasil_igdbpjspbru = $koneksi->query($query_igdbpjspbru);

            // IGD BPJS L & P LAMA
            $query_igdbpjsllma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as IGDBPJSLLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'BPJ' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'INSTALASI GAWAT DARURAT' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $query_igdbpjsplma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as IGDBPJSPLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'BPJ' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'INSTALASI GAWAT DARURAT' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $hasil_igdbpjsllma = $koneksi->query($query_igdbpjsllma);
            $hasil_igdbpjsplma = $koneksi->query($query_igdbpjsplma);

            // IGD JASA RAHARJA L & P BARU
            $query_igdjasaraharjalbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as IGDJASARAHARJALBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'JSR' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'INSTALASI GAWAT DARURAT' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $query_igdjasaraharjapbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as IGDJASARAHARJAPBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'JSR' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'INSTALASI GAWAT DARURAT' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $hasil_igdjasaraharjalbru = $koneksi->query($query_igdjasaraharjalbru);
            $hasil_igdjasaraharjapbru = $koneksi->query($query_igdjasaraharjapbru);
            
            // IGD JASA RAHARJA L & P LAMA
            $query_igdjasaraharjallma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as IGDJASARAHARJALLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'JSR' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'INSTALASI GAWAT DARURAT' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $query_igdjasaraharjaplma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as IGDJASARAHARJAPLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'JSR' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'INSTALASI GAWAT DARURAT' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $hasil_igdjasaraharjallma = $koneksi->query($query_igdjasaraharjallma);
            $hasil_igdjasaraharjaplma = $koneksi->query($query_igdjasaraharjaplma);

            // IGD TOTAL KESELURUHAN
            $query_igdtotal = "SELECT poliklinik.nm_poli, COUNT(reg_periksa.no_rkm_medis) as IGDTOTAL FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien INNER JOIN penjab WHERE reg_periksa.kd_pj = penjab.kd_pj AND poliklinik.nm_poli = 'INSTALASI GAWAT DARURAT' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli" ;
            $hasil_igdtotal = $koneksi->query($query_igdtotal);

            // 	KLINIK SP. BEDAH UMUM UMUM L & P BARU
            $query_bedahumumlbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as BEDAHUMUMUMUMLBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'UMU' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK SP. BEDAH UMUM' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $query_bedahumumpbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as BEDAHUMUMUMUMPBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'UMU' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK SP. BEDAH UMUM' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $hasil_bedahumumlbru = $koneksi->query($query_bedahumumlbru);
            $hasil_bedahumumpbru = $koneksi->query($query_bedahumumpbru);

            // 	KLINIK SP. BEDAH UMUM UMUM L & P LAMA
            $query_bedahumumllma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as BEDAHUMUMUMUMLLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'UMU' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK SP. BEDAH UMUM' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $query_bedahumumplma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as BEDAHUMUMUMUMPLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'UMU' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK SP. BEDAH UMUM' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $hasil_bedahumumllma = $koneksi->query($query_bedahumumllma);
            $hasil_bedahumumplma = $koneksi->query($query_bedahumumplma);

            // 	KLIbedah SP. BEDAH UMUM BPJS L & P BARU
            $query_bedahumumbpjslbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as BEDAHUMUMBPJSLBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'BPJ' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK SP. BEDAH UMUM' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $query_bedahumumbpjspbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as BEDAHUMUMBPJSPBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'BPJ' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK SP. BEDAH UMUM' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $hasil_bedahumumbpjslbru = $koneksi->query($query_bedahumumbpjslbru);
            $hasil_bedahumumbpjspbru = $koneksi->query($query_bedahumumbpjspbru);

            // 	KLINIK SP. BEDAH UMUM BPJS L & P LAMA
            $query_bedahumumbpjsllma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as BEDAHUMUMBPJSLLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'BPJ' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK SP. BEDAH UMUM' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $query_bedahumumbpjsplma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as BEDAHUMUMBPJSPLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'BPJ' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK SP. BEDAH UMUM' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $hasil_bedahumumbpjsllma = $koneksi->query($query_bedahumumbpjsllma);
            $hasil_bedahumumbpjsplma = $koneksi->query($query_bedahumumbpjsplma);

            // 	KLINIK SP. BEDAH UMUM JASA RAHARJA L & P BARU
            $query_bedahumumjasaraharjalbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as BEDAHUMUMJASARAHARJALBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'JSR' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK SP. BEDAH UMUM' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $query_bedahumumjasaraharjapbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as BEDAHUMUMJASARAHARJAPBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'JSR' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK SP. BEDAH UMUM' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $hasil_bedahumumjasaraharjalbru = $koneksi->query($query_bedahumumjasaraharjalbru);
            $hasil_bedahumumjasaraharjapbru = $koneksi->query($query_bedahumumjasaraharjapbru);
            
            // 	KLINIK SP. BEDAH UMUM JASA RAHARJA L & P LAMA
            $query_bedahumumjasaraharjallma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as BEDAHUMUMJASARAHARJALLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'JSR' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK SP. BEDAH UMUM' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $query_bedahumumjasaraharjaplma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as BEDAHUMUMJASARAHARJAPLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'JSR' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK SP. BEDAH UMUM' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $hasil_bedahumumjasaraharjallma = $koneksi->query($query_bedahumumjasaraharjallma);
            $hasil_bedahumumjasaraharjaplma = $koneksi->query($query_bedahumumjasaraharjaplma);

            // KLINIK SP. BEDAH UMUM TOTAL KESELURUHAN
            $query_bedahumumtotal = "SELECT poliklinik.nm_poli, COUNT(reg_periksa.no_rkm_medis) as BEDAHUMUMTOTAL FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien INNER JOIN penjab WHERE reg_periksa.kd_pj = penjab.kd_pj AND poliklinik.nm_poli = 'KLINIK SP. BEDAH UMUM' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli" ;
            $hasil_bedahumumtotal = $koneksi->query($query_bedahumumtotal);


            // KLINIK SP. BEDAH DIGESTIF
            // KLINIK SP. BEDAH DIGESTIF UMUM L & P BARU
            $query_digestifumumlbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as DIGESTIFUMUMLBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'UMU' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK SP. BEDAH DIGESTIF' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $query_digestifumumpbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as DIGESTIFUMUMPBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'UMU' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK SP. BEDAH DIGESTIF' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $hasil_digestifumumlbru = $koneksi->query($query_digestifumumlbru);
            $hasil_digestifumumpbru = $koneksi->query($query_digestifumumpbru);

            // KLINIK SP. BEDAH DIGESTIF UMUM L & P LAMA
            $query_digestifumumllma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as DIGESTIFUMUMLLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'UMU' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK SP. BEDAH DIGESTIF' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $query_digestifumumplma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as DIGESTIFUMUMPLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'UMU' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK SP. BEDAH DIGESTIF' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $hasil_digestifumumllma = $koneksi->query($query_digestifumumllma);
            $hasil_digestifumumplma = $koneksi->query($query_digestifumumplma);

            // KLINIK SP. BEDAH DIGESTIF BPJS L & P BARU
            $query_digestifbpjslbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as DIGESTIFBPJSLBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'BPJ' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK SP. BEDAH DIGESTIF' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $query_digestifbpjspbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as DIGESTIFBPJSPBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'BPJ' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK SP. BEDAH DIGESTIF' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $hasil_digestifbpjslbru = $koneksi->query($query_digestifbpjslbru);
            $hasil_digestifbpjspbru = $koneksi->query($query_digestifbpjspbru);

            // KLINIK SP. BEDAH DIGESTIF BPJS L & P LAMA
            $query_digestifbpjsllma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as DIGESTIFBPJSLLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'BPJ' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK SP. BEDAH DIGESTIF' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $query_digestifbpjsplma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as DIGESTIFBPJSPLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'BPJ' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK SP. BEDAH DIGESTIF' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $hasil_digestifbpjsllma = $koneksi->query($query_digestifbpjsllma);
            $hasil_digestifbpjsplma = $koneksi->query($query_digestifbpjsplma);

            // KLINIK SP. BEDAH DIGESTIF JASA RAHARJA L & P BARU
            $query_digestifjasaraharjalbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as DIGESTIFJASARAHARJALBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'JSR' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK SP. BEDAH DIGESTIF' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $query_digestifjasaraharjapbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as DIGESTIFJASARAHARJAPBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'JSR' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK SP. BEDAH DIGESTIF' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $hasil_digestifjasaraharjalbru = $koneksi->query($query_digestifjasaraharjalbru);
            $hasil_digestifjasaraharjapbru = $koneksi->query($query_digestifjasaraharjapbru);
            
            // KLINIK SP. BEDAH DIGESTIF JASA RAHARJA L & P LAMA
            $query_digestifjasaraharjallma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as DIGESTIFJASARAHARJALLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'JSR' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK SP. BEDAH DIGESTIF' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $query_digestifjasaraharjaplma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as DIGESTIFJASARAHARJAPLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'JSR' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK SP. BEDAH DIGESTIF' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $hasil_digestifjasaraharjallma = $koneksi->query($query_digestifjasaraharjallma);
            $hasil_digestifjasaraharjaplma = $koneksi->query($query_digestifjasaraharjaplma);

            // KLINIK SP. BEDAH DIGESTIF TOTAL KESELURUHAN
            $query_digestiftotal = "SELECT poliklinik.nm_poli, COUNT(reg_periksa.no_rkm_medis) as DIGESTIFTOTAL FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien INNER JOIN penjab WHERE reg_periksa.kd_pj = penjab.kd_pj AND poliklinik.nm_poli = 'KLINIK SP. BEDAH DIGESTIF' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli" ;
            $hasil_digestiftotal = $koneksi->query($query_digestiftotal);



            // KLINIK SP. BEDAH VASKULER
            // KLINIK SP. BEDAH VASKULER UMUM L & P BARU
            $query_vaskulerumumlbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as VASKULERUMUMLBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'UMU' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK SP. BEDAH VASKULER' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $query_vaskulerumumpbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as VASKULERUMUMPBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'UMU' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK SP. BEDAH VASKULER' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $hasil_vaskulerumumlbru = $koneksi->query($query_vaskulerumumlbru);
            $hasil_vaskulerumumpbru = $koneksi->query($query_vaskulerumumpbru);

            // KLINIK SP. BEDAH VASKULER UMUM L & P LAMA
            $query_vaskulerumumllma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as VASKULERUMUMLLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'UMU' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK SP. BEDAH VASKULER' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $query_vaskulerumumplma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as VASKULERUMUMPLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'UMU' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK SP. BEDAH VASKULER' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $hasil_vaskulerumumllma = $koneksi->query($query_vaskulerumumllma);
            $hasil_vaskulerumumplma = $koneksi->query($query_vaskulerumumplma);

            // KLINIK SP. BEDAH VASKULER BPJS L & P BARU
            $query_vaskulerbpjslbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as VASKULERBPJSLBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'BPJ' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK SP. BEDAH VASKULER' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $query_vaskulerbpjspbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as VASKULERBPJSPBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'BPJ' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK SP. BEDAH VASKULER' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $hasil_vaskulerbpjslbru = $koneksi->query($query_vaskulerbpjslbru);
            $hasil_vaskulerbpjspbru = $koneksi->query($query_vaskulerbpjspbru);

            // KLINIK SP. BEDAH VASKULER BPJS L & P LAMA
            $query_vaskulerbpjsllma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as VASKULERBPJSLLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'BPJ' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK SP. BEDAH VASKULER' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $query_vaskulerbpjsplma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as VASKULERBPJSPLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'BPJ' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK SP. BEDAH VASKULER' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $hasil_vaskulerbpjsllma = $koneksi->query($query_vaskulerbpjsllma);
            $hasil_vaskulerbpjsplma = $koneksi->query($query_vaskulerbpjsplma);

            // KLINIK SP. BEDAH VASKULER JASA RAHARJA L & P BARU
            $query_vaskulerjasaraharjalbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as VASKULERJASARAHARJALBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'JSR' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK SP. BEDAH VASKULER' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $query_vaskulerjasaraharjapbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as VASKULERJASARAHARJAPBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'JSR' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK SP. BEDAH VASKULER' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $hasil_vaskulerjasaraharjalbru = $koneksi->query($query_vaskulerjasaraharjalbru);
            $hasil_vaskulerjasaraharjapbru = $koneksi->query($query_vaskulerjasaraharjapbru);
            
            // KLINIK SP. BEDAH VASKULER JASA RAHARJA L & P LAMA
            $query_vaskulerjasaraharjallma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as VASKULERJASARAHARJALLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'JSR' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK SP. BEDAH VASKULER' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $query_vaskulerjasaraharjaplma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as VASKULERJASARAHARJAPLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'JSR' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK SP. BEDAH VASKULER' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $hasil_vaskulerjasaraharjallma = $koneksi->query($query_vaskulerjasaraharjallma);
            $hasil_vaskulerjasaraharjaplma = $koneksi->query($query_vaskulerjasaraharjaplma);

            // KLINIK SP. BEDAH VASKULER TOTAL KESELURUHAN
            $query_vaskulertotal = "SELECT poliklinik.nm_poli, COUNT(reg_periksa.no_rkm_medis) as VASKULERTOTAL FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien INNER JOIN penjab WHERE reg_periksa.kd_pj = penjab.kd_pj AND poliklinik.nm_poli = 'KLINIK SP. BEDAH VASKULER' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli" ;
            $hasil_vaskulertotal = $koneksi->query($query_vaskulertotal);



            // KLINIK SP. BEDAH ANAK
            // KLINIK SP. BEDAH ANAK UMUM L & P BARU
            $query_bdhanakumumlbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as BDHANAKUMUMLBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'UMU' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK SP. UROLOGI' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $query_bdhanakumumpbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as BDHANAKUMUMPBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'UMU' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK SP. UROLOGI' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $hasil_bdhanakumumlbru = $koneksi->query($query_bdhanakumumlbru);
            $hasil_bdhanakumumpbru = $koneksi->query($query_bdhanakumumpbru);

            // KLINIK SP. BEDAH ANAK UMUM L & P LAMA
            $query_bdhanakumumllma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as BDHANAKUMUMLLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'UMU' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK SP. BEDAH ANAK' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $query_bdhanakumumplma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as BDHANAKUMUMPLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'UMU' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK SP. BEDAH ANAK' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $hasil_bdhanakumumllma = $koneksi->query($query_bdhanakumumllma);
            $hasil_bdhanakumumplma = $koneksi->query($query_bdhanakumumplma);

            // KLINIK SP. BEDAH ANAK BPJS L & P BARU
            $query_bdhanakbpjslbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as BDHANAKBPJSLBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'BPJ' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK SP. BEDAH ANAK' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $query_bdhanakbpjspbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as BDHANAKBPJSPBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'BPJ' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK SP. BEDAH ANAK' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $hasil_bdhanakbpjslbru = $koneksi->query($query_bdhanakbpjslbru);
            $hasil_bdhanakbpjspbru = $koneksi->query($query_bdhanakbpjspbru);

            // KLINIK SP. BEDAH ANAK BPJS L & P LAMA
            $query_bdhanakbpjsllma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as BDHANAKBPJSLLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'BPJ' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK SP. BEDAH ANAK' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $query_bdhanakbpjsplma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as BDHANAKBPJSPLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'BPJ' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK SP. BEDAH ANAK' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $hasil_bdhanakbpjsllma = $koneksi->query($query_bdhanakbpjsllma);
            $hasil_bdhanakbpjsplma = $koneksi->query($query_bdhanakbpjsplma);

            // KLINIK SP. BEDAH ANAK JASA RAHARJA L & P BARU
            $query_bdhanakjasaraharjalbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as BDHANAKJASARAHARJALBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'JSR' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK SP. BEDAH ANAK' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $query_bdhanakjasaraharjapbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as BDHANAKJASARAHARJAPBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'JSR' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK SP. BEDAH ANAK' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $hasil_bdhanakjasaraharjalbru = $koneksi->query($query_bdhanakjasaraharjalbru);
            $hasil_bdhanakjasaraharjapbru = $koneksi->query($query_bdhanakjasaraharjapbru);
            
            // KLINIK SP. BEDAH ANAK JASA RAHARJA L & P LAMA
            $query_bdhanakjasaraharjallma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as BDHANAKJASARAHARJALLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'JSR' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK SP. BEDAH ANAK' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $query_bdhanakjasaraharjaplma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as BDHANAKJASARAHARJAPLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'JSR' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK SP. BEDAH ANAK' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $hasil_bdhanakjasaraharjallma = $koneksi->query($query_bdhanakjasaraharjallma);
            $hasil_bdhanakjasaraharjaplma = $koneksi->query($query_bdhanakjasaraharjaplma);

            // KLINIK SP. BEDAH ANAK TOTAL KESELURUHAN
            $query_bdhanaktotal = "SELECT poliklinik.nm_poli, COUNT(reg_periksa.no_rkm_medis) as BDHANAKTOTAL FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien INNER JOIN penjab WHERE reg_periksa.kd_pj = penjab.kd_pj AND poliklinik.nm_poli = 'KLINIK SP. BEDAH ANAK' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli" ;
            $hasil_bdhanaktotal = $koneksi->query($query_bdhanaktotal);


            // KLINIK SP. BEDAH PLASTIK
            // KLINIK SP. BEDAH PLASTIK UMUM L & P BARU
            $query_bdhplskumumlbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as BDHPLSKUMUMLBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'UMU' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK SP. BEDAH PLASTIK' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $query_bdhplskumumpbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as BDHPLSKUMUMPBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'UMU' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK SP. BEDAH PLASTIK' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $hasil_bdhplskumumlbru = $koneksi->query($query_bdhplskumumlbru);
            $hasil_bdhplskumumpbru = $koneksi->query($query_bdhplskumumpbru);

            // KLINIK SP. BEDAH PLASTIK UMUM L & P LAMA
            $query_bdhplskumumllma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as BDHPLSKUMUMLLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'UMU' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK SP. BEDAH PLASTIK' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $query_bdhplskumumplma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as BDHPLSKUMUMPLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'UMU' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK SP. BEDAH PLASTIK' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $hasil_bdhplskumumllma = $koneksi->query($query_bdhplskumumllma);
            $hasil_bdhplskumumplma = $koneksi->query($query_bdhplskumumplma);

            // KLINIK SP. BEDAH PLASTIK BPJS L & P BARU
            $query_bdhplskbpjslbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as BDHPLSKBPJSLBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'BPJ' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK SP. BEDAH PLASTIK' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $query_bdhplskbpjspbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as BDHPLSKBPJSPBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'BPJ' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK SP. BEDAH PLASTIK' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $hasil_bdhplskbpjslbru = $koneksi->query($query_bdhplskbpjslbru);
            $hasil_bdhplskbpjspbru = $koneksi->query($query_bdhplskbpjspbru);

            // KLINIK SP. BEDAH PLASTIK BPJS L & P LAMA
            $query_bdhplskbpjsllma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as BDHPLSKBPJSLLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'BPJ' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK SP. BEDAH PLASTIK' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $query_bdhplskbpjsplma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as BDHPLSKBPJSPLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'BPJ' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK SP. BEDAH PLASTIK' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $hasil_bdhplskbpjsllma = $koneksi->query($query_bdhplskbpjsllma);
            $hasil_bdhplskbpjsplma = $koneksi->query($query_bdhplskbpjsplma);

            // KLINIK SP. BEDAH PLASTIK JASA RAHARJA L & P BARU
            $query_bdhplskjasaraharjalbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as BDHPLSKJASARAHARJALBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'JSR' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK SP. BEDAH PLASTIK' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $query_bdhplskjasaraharjapbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as BDHPLSKJASARAHARJAPBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'JSR' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK SP. BEDAH PLASTIK' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $hasil_bdhplskjasaraharjalbru = $koneksi->query($query_bdhplskjasaraharjalbru);
            $hasil_bdhplskjasaraharjapbru = $koneksi->query($query_bdhplskjasaraharjapbru);
            
            // KLINIK SP. BEDAH PLASTIK JASA RAHARJA L & P LAMA
            $query_bdhplskjasaraharjallma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as BDHPLSKJASARAHARJALLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'JSR' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK SP. BEDAH PLASTIK' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $query_bdhplskjasaraharjaplma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as BDHPLSKJASARAHARJAPLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'JSR' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK SP. BEDAH PLASTIK' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $hasil_bdhplskjasaraharjallma = $koneksi->query($query_bdhplskjasaraharjallma);
            $hasil_bdhplskjasaraharjaplma = $koneksi->query($query_bdhplskjasaraharjaplma);

            // KLINIK SP. BEDAH PLASTIK TOTAL KESELURUHAN
            $query_bdhplsktotal = "SELECT poliklinik.nm_poli, COUNT(reg_periksa.no_rkm_medis) as BDHPLSKTOTAL FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien INNER JOIN penjab WHERE reg_periksa.kd_pj = penjab.kd_pj AND poliklinik.nm_poli = 'KLINIK SP. BEDAH PLASTIK' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli" ;
            $hasil_bdhplsktotal = $koneksi->query($query_bdhplsktotal);


            // KLINIK SP. BEDAH SARAF
            // KLINIK SP. BEDAH SARAF UMUM L & P BARU
            $query_bdhsrfumumlbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as BDHSRFUMUMLBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'UMU' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK SP. BEDAH SARAF' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $query_bdhsrfumumpbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as BDHSRFUMUMPBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'UMU' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK SP. BEDAH SARAF' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $hasil_bdhsrfumumlbru = $koneksi->query($query_bdhsrfumumlbru);
            $hasil_bdhsrfumumpbru = $koneksi->query($query_bdhsrfumumpbru);

            // KLINIK SP. BEDAH SARAF UMUM L & P LAMA
            $query_bdhsrfumumllma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as BDHSRFUMUMLLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'UMU' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK SP. BEDAH SARAF' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $query_bdhsrfumumplma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as BDHSRFUMUMPLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'UMU' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK SP. BEDAH SARAF' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $hasil_bdhsrfumumllma = $koneksi->query($query_bdhsrfumumllma);
            $hasil_bdhsrfumumplma = $koneksi->query($query_bdhsrfumumplma);

            // KLINIK SP. BEDAH SARAF BPJS L & P BARU
            $query_bdhsrfbpjslbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as BDHSRFBPJSLBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'BPJ' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK SP. BEDAH SARAF' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $query_bdhsrfbpjspbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as BDHSRFBPJSPBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'BPJ' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK SP. BEDAH SARAF' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $hasil_bdhsrfbpjslbru = $koneksi->query($query_bdhsrfbpjslbru);
            $hasil_bdhsrfbpjspbru = $koneksi->query($query_bdhsrfbpjspbru);

            // KLINIK SP. BEDAH SARAF BPJS L & P LAMA
            $query_bdhsrfbpjsllma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as BDHSRFBPJSLLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'BPJ' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK SP. BEDAH SARAF' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $query_bdhsrfbpjsplma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as BDHSRFBPJSPLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'BPJ' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK SP. BEDAH SARAF' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $hasil_bdhsrfbpjsllma = $koneksi->query($query_bdhsrfbpjsllma);
            $hasil_bdhsrfbpjsplma = $koneksi->query($query_bdhsrfbpjsplma);

            // KLINIK SP. BEDAH SARAF JASA RAHARJA L & P BARU
            $query_bdhsrfjasaraharjalbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as BDHSRFJASARAHARJALBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'JSR' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK SP. BEDAH SARAF' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $query_bdhsrfjasaraharjapbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as BDHSRFJASARAHARJAPBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'JSR' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK SP. BEDAH SARAF' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $hasil_bdhsrfjasaraharjalbru = $koneksi->query($query_bdhsrfjasaraharjalbru);
            $hasil_bdhsrfjasaraharjapbru = $koneksi->query($query_bdhsrfjasaraharjapbru);
            
            // KLINIK SP. BEDAH SARAF JASA RAHARJA L & P LAMA
            $query_bdhsrfjasaraharjallma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as BDHSRFJASARAHARJALLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'JSR' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK SP. BEDAH SARAF' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $query_bdhsrfjasaraharjaplma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as BDHSRFJASARAHARJAPLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'JSR' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK SP. BEDAH SARAF' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $hasil_bdhsrfjasaraharjallma = $koneksi->query($query_bdhsrfjasaraharjallma);
            $hasil_bdhsrfjasaraharjaplma = $koneksi->query($query_bdhsrfjasaraharjaplma);

            // KLINIK SP. BEDAH SARAF TOTAL KESELURUHAN
            $query_bdhsrftotal = "SELECT poliklinik.nm_poli, COUNT(reg_periksa.no_rkm_medis) as BDHSRFTOTAL FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien INNER JOIN penjab WHERE reg_periksa.kd_pj = penjab.kd_pj AND poliklinik.nm_poli = 'KLINIK SP. BEDAH SARAF' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli" ;
            $hasil_bdhsrftotal = $koneksi->query($query_bdhsrftotal);


            // 	KLINIK SP. BEDAH THORAX KV
            // 	KLINIK SP. BEDAH THORAX KV UMUM L & P BARU
            $query_bdhthrxkvumumlbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as BDHTHRXKVUMUMLBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'UMU' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK SP. BEDAH THORAX KV' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $query_bdhthrxkvumumpbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as BDHTHRXKVUMUMPBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'UMU' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK SP. BEDAH THORAX KV' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $hasil_bdhthrxkvumumlbru = $koneksi->query($query_bdhthrxkvumumlbru);
            $hasil_bdhthrxkvumumpbru = $koneksi->query($query_bdhthrxkvumumpbru);

            // 	KLINIK SP. BEDAH THORAX KV UMUM L & P LAMA
            $query_bdhthrxkvumumllma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as BDHTHRXKVUMUMLLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'UMU' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK SP. BEDAH THORAX KV' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $query_bdhthrxkvumumplma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as BDHTHRXKVUMUMPLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'UMU' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK SP. BEDAH THORAX KV' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $hasil_bdhthrxkvumumllma = $koneksi->query($query_bdhthrxkvumumllma);
            $hasil_bdhthrxkvumumplma = $koneksi->query($query_bdhthrxkvumumplma);

            // 	KLINIK SP. BEDAH THORAX KV BPJS L & P BARU
            $query_bdhthrxkvbpjslbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as BDHTHRXKVBPJSLBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'BPJ' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK SP. BEDAH THORAX KV' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $query_bdhthrxkvbpjspbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as BDHTHRXKVBPJSPBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'BPJ' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK SP. BEDAH THORAX KV' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $hasil_bdhthrxkvbpjslbru = $koneksi->query($query_bdhthrxkvbpjslbru);
            $hasil_bdhthrxkvbpjspbru = $koneksi->query($query_bdhthrxkvbpjspbru);

            // 	KLINIK SP. BEDAH THORAX KV BPJS L & P LAMA
            $query_bdhthrxkvbpjsllma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as BDHTHRXKVBPJSLLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'BPJ' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK SP. BEDAH THORAX KV' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $query_bdhthrxkvbpjsplma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as BDHTHRXKVBPJSPLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'BPJ' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK SP. BEDAH THORAX KV' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $hasil_bdhthrxkvbpjsllma = $koneksi->query($query_bdhthrxkvbpjsllma);
            $hasil_bdhthrxkvbpjsplma = $koneksi->query($query_bdhthrxkvbpjsplma);

            // 	KLINIK SP. BEDAH THORAX KV JASA RAHARJA L & P BARU
            $query_bdhthrxkvjasaraharjalbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as BDHTHRXKVJASARAHARJALBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'JSR' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK SP. BEDAH THORAX KV' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $query_bdhthrxkvjasaraharjapbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as BDHTHRXKVJASARAHARJAPBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'JSR' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK SP. BEDAH THORAX KV' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $hasil_bdhthrxkvjasaraharjalbru = $koneksi->query($query_bdhthrxkvjasaraharjalbru);
            $hasil_bdhthrxkvjasaraharjapbru = $koneksi->query($query_bdhthrxkvjasaraharjapbru);
            
            // 	KLINIK SP. BEDAH THORAX KV JASA RAHARJA L & P LAMA
            $query_bdhthrxkvjasaraharjallma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as BDHTHRXKVJASARAHARJALLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'JSR' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK SP. BEDAH THORAX KV' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $query_bdhthrxkvjasaraharjaplma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as BDHTHRXKVJASARAHARJAPLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'JSR' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK SP. BEDAH THORAX KV' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $hasil_bdhthrxkvjasaraharjallma = $koneksi->query($query_bdhthrxkvjasaraharjallma);
            $hasil_bdhthrxkvjasaraharjaplma = $koneksi->query($query_bdhthrxkvjasaraharjaplma);

            // 	KLINIK SP. BEDAH THORAX KV TOTAL KESELURUHAN
            $query_bdhthrxkvtotal = "SELECT poliklinik.nm_poli, COUNT(reg_periksa.no_rkm_medis) as BDHTHRXKVTOTAL FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien INNER JOIN penjab WHERE reg_periksa.kd_pj = penjab.kd_pj AND poliklinik.nm_poli = 'KLINIK SP. BEDAH THORAX KV' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli" ;
            $hasil_bdhthrxkvtotal = $koneksi->query($query_bdhthrxkvtotal);


            // KLINIK SP. GIGI BEDAH MULUT
            // KLINIK SP. GIGI BEDAH MULUT UMUM L & P BARU
            $query_ggbdhmltumumlbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as GGBDHMLTUMUMLBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'UMU' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK SP. GIGI BEDAH MULUT' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $query_ggbdhmltumumpbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as GGBDHMLTUMUMPBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'UMU' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK SP. GIGI BEDAH MULUT' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $hasil_ggbdhmltumumlbru = $koneksi->query($query_ggbdhmltumumlbru);
            $hasil_ggbdhmltumumpbru = $koneksi->query($query_ggbdhmltumumpbru);

            // KLINIK SP. GIGI BEDAH MULUT UMUM L & P LAMA
            $query_ggbdhmltumumllma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as GGBDHMLTUMUMLLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'UMU' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK SP. GIGI BEDAH MULUT' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $query_ggbdhmltumumplma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as GGBDHMLTUMUMPLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'UMU' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK SP. GIGI BEDAH MULUT' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $hasil_ggbdhmltumumllma = $koneksi->query($query_ggbdhmltumumllma);
            $hasil_ggbdhmltumumplma = $koneksi->query($query_ggbdhmltumumplma);

            // KLINIK SP. GIGI BEDAH MULUT BPJS L & P BARU
            $query_ggbdhmltbpjslbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as GGBDHMLTBPJSLBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'BPJ' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK SP. GIGI BEDAH MULUT' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $query_ggbdhmltbpjspbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as GGBDHMLTBPJSPBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'BPJ' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK SP. GIGI BEDAH MULUT' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $hasil_ggbdhmltbpjslbru = $koneksi->query($query_ggbdhmltbpjslbru);
            $hasil_ggbdhmltbpjspbru = $koneksi->query($query_ggbdhmltbpjspbru);

            // KLINIK SP. GIGI BEDAH MULUT BPJS L & P LAMA
            $query_ggbdhmltbpjsllma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as GGBDHMLTBPJSLLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'BPJ' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK SP. GIGI BEDAH MULUT' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $query_ggbdhmltbpjsplma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as GGBDHMLTBPJSPLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'BPJ' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK SP. GIGI BEDAH MULUT' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $hasil_ggbdhmltbpjsllma = $koneksi->query($query_ggbdhmltbpjsllma);
            $hasil_ggbdhmltbpjsplma = $koneksi->query($query_ggbdhmltbpjsplma);

            // KLINIK SP. GIGI BEDAH MULUT JASA RAHARJA L & P BARU
            $query_ggbdhmltjasaraharjalbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as GGBDHMLTJASARAHARJALBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'JSR' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK SP. GIGI BEDAH MULUT' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $query_ggbdhmltjasaraharjapbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as GGBDHMLTJASARAHARJAPBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'JSR' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK SP. GIGI BEDAH MULUT' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $hasil_ggbdhmltjasaraharjalbru = $koneksi->query($query_ggbdhmltjasaraharjalbru);
            $hasil_ggbdhmltjasaraharjapbru = $koneksi->query($query_ggbdhmltjasaraharjapbru);
            
            // KLINIK SP. GIGI BEDAH MULUT JASA RAHARJA L & P LAMA
            $query_ggbdhmltjasaraharjallma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as GGBDHMLTJASARAHARJALLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'JSR' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK SP. GIGI BEDAH MULUT' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $query_ggbdhmltjasaraharjaplma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as GGBDHMLTJASARAHARJAPLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'JSR' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK SP. GIGI BEDAH MULUT' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $hasil_ggbdhmltjasaraharjallma = $koneksi->query($query_ggbdhmltjasaraharjallma);
            $hasil_ggbdhmltjasaraharjaplma = $koneksi->query($query_ggbdhmltjasaraharjaplma);

            // KLINIK SP. GIGI BEDAH MULUT TOTAL KESELURUHAN
            $query_ggbdhmlttotal = "SELECT poliklinik.nm_poli, COUNT(reg_periksa.no_rkm_medis) as GGBDHMLTTOTAL FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien INNER JOIN penjab WHERE reg_periksa.kd_pj = penjab.kd_pj AND poliklinik.nm_poli = 'KLINIK SP. GIGI BEDAH MULUT' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli" ;
            $hasil_ggbdhmlttotal = $koneksi->query($query_ggbdhmlttotal);


            // KLINIK SP. PENYAKIT DALAM
            // KLINIK SP. PENYAKIT DALAM UMUM L & P BARU
            $query_pdlmumumlbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as PDLMUMUMLBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'UMU' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK SP. PENYAKIT DALAM' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $query_pdlmumumpbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as PDLMUMUMPBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'UMU' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK SP. PENYAKIT DALAM' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $hasil_pdlmumumlbru = $koneksi->query($query_pdlmumumlbru);
            $hasil_pdlmumumpbru = $koneksi->query($query_pdlmumumpbru);

            // KLINIK SP. PENYAKIT DALAM UMUM L & P LAMA
            $query_pdlmumumllma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as PDLMUMUMLLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'UMU' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK SP. PENYAKIT DALAM' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $query_pdlmumumplma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as PDLMUMUMPLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'UMU' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK SP. PENYAKIT DALAM' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $hasil_pdlmumumllma = $koneksi->query($query_pdlmumumllma);
            $hasil_pdlmumumplma = $koneksi->query($query_pdlmumumplma);

            // KLINIK SP. PENYAKIT DALAM BPJS L & P BARU
            $query_pdlmbpjslbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as PDLMBPJSLBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'BPJ' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK SP. PENYAKIT DALAM' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $query_pdlmbpjspbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as PDLMBPJSPBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'BPJ' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK SP. PENYAKIT DALAM' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $hasil_pdlmbpjslbru = $koneksi->query($query_pdlmbpjslbru);
            $hasil_pdlmbpjspbru = $koneksi->query($query_pdlmbpjspbru);

            // KLINIK SP. PENYAKIT DALAM BPJS L & P LAMA
            $query_pdlmbpjsllma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as PDLMBPJSLLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'BPJ' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK SP. PENYAKIT DALAM' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $query_pdlmbpjsplma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as PDLMBPJSPLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'BPJ' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK SP. PENYAKIT DALAM' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $hasil_pdlmbpjsllma = $koneksi->query($query_pdlmbpjsllma);
            $hasil_pdlmbpjsplma = $koneksi->query($query_pdlmbpjsplma);

            // KLINIK SP. PENYAKIT DALAM JASA RAHARJA L & P BARU
            $query_pdlmjasaraharjalbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as PDLMJASARAHARJALBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'JSR' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK SP. PENYAKIT DALAM' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $query_pdlmjasaraharjapbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as PDLMJASARAHARJAPBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'JSR' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK SP. PENYAKIT DALAM' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $hasil_pdlmjasaraharjalbru = $koneksi->query($query_pdlmjasaraharjalbru);
            $hasil_pdlmjasaraharjapbru = $koneksi->query($query_pdlmjasaraharjapbru);
            
            // KLINIK SP. PENYAKIT DALAM JASA RAHARJA L & P LAMA
            $query_pdlmjasaraharjallma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as PDLMJASARAHARJALLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'JSR' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK SP. PENYAKIT DALAM' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $query_pdlmjasaraharjaplma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as PDLMJASARAHARJAPLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'JSR' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK SP. PENYAKIT DALAM' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $hasil_pdlmjasaraharjallma = $koneksi->query($query_pdlmjasaraharjallma);
            $hasil_pdlmjasaraharjaplma = $koneksi->query($query_pdlmjasaraharjaplma);

            // KLINIK SP. PENYAKIT DALAM TOTAL KESELURUHAN
            $query_pdlmtotal = "SELECT poliklinik.nm_poli, COUNT(reg_periksa.no_rkm_medis) as PDLMTOTAL FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien INNER JOIN penjab WHERE reg_periksa.kd_pj = penjab.kd_pj AND poliklinik.nm_poli = 'KLINIK SP. PENYAKIT DALAM' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli" ;
            $hasil_pdlmtotal = $koneksi->query($query_pdlmtotal);
            

            // KLINIK SP. PENYAKIT DALAM - KGH
            // KLINIK SP. PENYAKIT DALAM - KGH UMUM L & P BARU
            $query_pdlmkghumumlbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as PDLMKGHUMUMLBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'UMU' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK SP. PENYAKIT DALAM KGH' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $query_pdlmkghumumpbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as PDLMKGHUMUMPBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'UMU' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK SP. PENYAKIT DALAM KGH' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $hasil_pdlmkghumumlbru = $koneksi->query($query_pdlmkghumumlbru);
            $hasil_pdlmkghumumpbru = $koneksi->query($query_pdlmkghumumpbru);

            // KLINIK SP. PENYAKIT DALAM - KGH UMUM L & P LAMA
            $query_pdlmkghumumllma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as PDLMKGHUMUMLLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'UMU' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK SP. PENYAKIT DALAM - KGEH' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $query_pdlmkghumumplma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as PDLMKGHUMUMPLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'UMU' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK SP. PENYAKIT DALAM - KGEH' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $hasil_pdlmkghumumllma = $koneksi->query($query_pdlmkghumumllma);
            $hasil_pdlmkghumumplma = $koneksi->query($query_pdlmkghumumplma);

            // KLINIK SP. PENYAKIT DALAM - KGEH BPJS L & P BARU
            $query_pdlmkgehbpjslbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as PDLMKGEHBPJSLBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'BPJ' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK SP. PENYAKIT DALAM - KGEH' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $query_pdlmkgehbpjspbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as PDLMKGEHBPJSPBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'BPJ' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK SP. PENYAKIT DALAM - KGEH' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $hasil_pdlmkgehbpjslbru = $koneksi->query($query_pdlmkgehbpjslbru);
            $hasil_pdlmkgehbpjspbru = $koneksi->query($query_pdlmkgehbpjspbru);

            // KLINIK SP. PENYAKIT DALAM - KGEH BPJS L & P LAMA
            $query_pdlmkgehbpjsllma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as PDLMKGEHBPJSLLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'BPJ' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK SP. PENYAKIT DALAM - KGEH' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $query_pdlmkgehbpjsplma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as PDLMKGEHBPJSPLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'BPJ' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK SP. PENYAKIT DALAM - KGEH' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $hasil_pdlmkgehbpjsllma = $koneksi->query($query_pdlmkgehbpjsllma);
            $hasil_pdlmkgehbpjsplma = $koneksi->query($query_pdlmkgehbpjsplma);

            // KLINIK SP. PENYAKIT DALAM - KGEH JASA RAHARJA L & P BARU
            $query_pdlmkgehjasaraharjalbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as PDLMKGEHJASARAHARJALBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'JSR' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK SP. PENYAKIT DALAM - KGEH' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $query_pdlmkgehjasaraharjapbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as PDLMKGEHJASARAHARJAPBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'JSR' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK SP. PENYAKIT DALAM - KGEH' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $hasil_pdlmkgehjasaraharjalbru = $koneksi->query($query_pdlmkgehjasaraharjalbru);
            $hasil_pdlmkgehjasaraharjapbru = $koneksi->query($query_pdlmkgehjasaraharjapbru);
            
            // KLINIK SP. PENYAKIT DALAM - KGEH JASA RAHARJA L & P LAMA
            $query_pdlmkgehjasaraharjallma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as PDLMKGEHJASARAHARJALLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'JSR' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK SP. PENYAKIT DALAM - KGEH' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $query_pdlmkgehjasaraharjaplma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as PDLMKGEHJASARAHARJAPLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'JSR' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK SP. PENYAKIT DALAM - KGEH' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $hasil_pdlmkgehjasaraharjallma = $koneksi->query($query_pdlmkgehjasaraharjallma);
            $hasil_pdlmkgehjasaraharjaplma = $koneksi->query($query_pdlmkgehjasaraharjaplma);

            // KLINIK SP. PENYAKIT DALAM - KGEH TOTAL KESELURUHAN
            $query_pdlmkgehtotal = "SELECT poliklinik.nm_poli, COUNT(reg_periksa.no_rkm_medis) as PDLMKGEHTOTAL FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien INNER JOIN penjab WHERE reg_periksa.kd_pj = penjab.kd_pj AND poliklinik.nm_poli = 'KLINIK SP. PENYAKIT DALAM - KGEH' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli" ;
            $hasil_pdlmkgehtotal = $koneksi->query($query_pdlmkgehtotal);
            
            
            // KLINIK SP. PENYAKIT DALAM - KGEH
            // KLINIK SP. PENYAKIT DALAM - KGEH UMUM L & P BARU
            $query_pdlmkgehumumlbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as PDLMKGEHUMUMLBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'UMU' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK SP. PENYAKIT DALAM - KGEH' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $query_pdlmkgehumumpbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as PDLMKGEHUMUMPBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'UMU' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK SP. PENYAKIT DALAM - KGEH' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $hasil_pdlmkgehumumlbru = $koneksi->query($query_pdlmkgehumumlbru);
            $hasil_pdlmkgehumumpbru = $koneksi->query($query_pdlmkgehumumpbru);

            // KLINIK SP. PENYAKIT DALAM - KGEH UMUM L & P LAMA
            $query_pdlmkgehumumllma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as PDLMKGEHUMUMLLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'UMU' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK SP. PENYAKIT DALAM - KGEH' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $query_pdlmkgehumumplma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as PDLMKGEHUMUMPLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'UMU' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK SP. PENYAKIT DALAM - KGEH' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $hasil_pdlmkgehumumllma = $koneksi->query($query_pdlmkgehumumllma);
            $hasil_pdlmkgehumumplma = $koneksi->query($query_pdlmkgehumumplma);

            // KLINIK SP. PENYAKIT DALAM - KGEH BPJS L & P BARU
            $query_pdlmkgehbpjslbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as PDLMKGEHBPJSLBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'BPJ' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK SP. PENYAKIT DALAM - KGEH' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $query_pdlmkgehbpjspbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as PDLMKGEHBPJSPBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'BPJ' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK SP. PENYAKIT DALAM - KGEH' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $hasil_pdlmkgehbpjslbru = $koneksi->query($query_pdlmkgehbpjslbru);
            $hasil_pdlmkgehbpjspbru = $koneksi->query($query_pdlmkgehbpjspbru);

            // KLINIK SP. PENYAKIT DALAM - KGEH BPJS L & P LAMA
            $query_pdlmkgehbpjsllma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as PDLMKGEHBPJSLLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'BPJ' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK SP. PENYAKIT DALAM - KGEH' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $query_pdlmkgehbpjsplma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as PDLMKGEHBPJSPLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'BPJ' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK SP. PENYAKIT DALAM - KGEH' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $hasil_pdlmkgehbpjsllma = $koneksi->query($query_pdlmkgehbpjsllma);
            $hasil_pdlmkgehbpjsplma = $koneksi->query($query_pdlmkgehbpjsplma);

            // KLINIK SP. PENYAKIT DALAM - KGEH JASA RAHARJA L & P BARU
            $query_pdlmkgehjasaraharjalbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as PDLMKGEHJASARAHARJALBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'JSR' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK SP. PENYAKIT DALAM - KGEH' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $query_pdlmkgehjasaraharjapbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as PDLMKGEHJASARAHARJAPBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'JSR' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK SP. PENYAKIT DALAM - KGEH' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $hasil_pdlmkgehjasaraharjalbru = $koneksi->query($query_pdlmkgehjasaraharjalbru);
            $hasil_pdlmkgehjasaraharjapbru = $koneksi->query($query_pdlmkgehjasaraharjapbru);
            
            // KLINIK SP. PENYAKIT DALAM - KGEH JASA RAHARJA L & P LAMA
            $query_pdlmkgehjasaraharjallma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as PDLMKGEHJASARAHARJALLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'JSR' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK SP. PENYAKIT DALAM - KGEH' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $query_pdlmkgehjasaraharjaplma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as PDLMKGEHJASARAHARJAPLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'JSR' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK SP. PENYAKIT DALAM - KGEH' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $hasil_pdlmkgehjasaraharjallma = $koneksi->query($query_pdlmkgehjasaraharjallma);
            $hasil_pdlmkgehjasaraharjaplma = $koneksi->query($query_pdlmkgehjasaraharjaplma);

            // KLINIK SP. PENYAKIT DALAM - KGEH TOTAL KESELURUHAN
            $query_pdlmkgehtotal = "SELECT poliklinik.nm_poli, COUNT(reg_periksa.no_rkm_medis) as PDLMKGEHTOTAL FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien INNER JOIN penjab WHERE reg_periksa.kd_pj = penjab.kd_pj AND poliklinik.nm_poli = 'KLINIK SP. PENYAKIT DALAM - KGEH' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli" ;
            $hasil_pdlmkgehtotal = $koneksi->query($query_pdlmkgehtotal);


            // KLINIK SP. ANAK
            // KLINIK SP. ANAK UMUM L & P BARU
            $query_spanakumumlbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPANAKUMUMLBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'UMU' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK SP. ANAK' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $query_spanakumumpbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPANAKUMUMPBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'UMU' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK SP. ANAK' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $hasil_spanakumumlbru = $koneksi->query($query_spanakumumlbru);
            $hasil_spanakumumpbru = $koneksi->query($query_spanakumumpbru);

            // KLINIK SP. ANAK UMUM L & P LAMA
            $query_spanakumumllma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPANAKUMUMLLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'UMU' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK SP. ANAK' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $query_spanakumumplma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPANAKUMUMPLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'UMU' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK SP. ANAK' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $hasil_spanakumumllma = $koneksi->query($query_spanakumumllma);
            $hasil_spanakumumplma = $koneksi->query($query_spanakumumplma);

            // KLINIK SP. ANAK BPJS L & P BARU
            $query_spanakbpjslbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPANAKBPJSLBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'BPJ' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK SP. ANAK' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $query_spanakbpjspbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPANAKBPJSPBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'BPJ' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK SP. ANAK' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $hasil_spanakbpjslbru = $koneksi->query($query_spanakbpjslbru);
            $hasil_spanakbpjspbru = $koneksi->query($query_spanakbpjspbru);

            // KLINIK SP. ANAK BPJS L & P LAMA
            $query_spanakbpjsllma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPANAKBPJSLLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'BPJ' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK SP. ANAK' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $query_spanakbpjsplma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPANAKBPJSPLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'BPJ' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK SP. ANAK' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $hasil_spanakbpjsllma = $koneksi->query($query_spanakbpjsllma);
            $hasil_spanakbpjsplma = $koneksi->query($query_spanakbpjsplma);

            // KLINIK SP. ANAK JASA RAHARJA L & P BARU
            $query_spanakjasaraharjalbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPANAKJASARAHARJALBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'JSR' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK SP. ANAK' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $query_spanakjasaraharjapbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPANAKJASARAHARJAPBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'JSR' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK SP. ANAK' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $hasil_spanakjasaraharjalbru = $koneksi->query($query_spanakjasaraharjalbru);
            $hasil_spanakjasaraharjapbru = $koneksi->query($query_spanakjasaraharjapbru);
            
            // KLINIK SP. ANAK JASA RAHARJA L & P LAMA
            $query_spanakjasaraharjallma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPANAKJASARAHARJALLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'JSR' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK SP. ANAK' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $query_spanakjasaraharjaplma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPANAKJASARAHARJAPLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'JSR' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK SP. ANAK' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $hasil_spanakjasaraharjallma = $koneksi->query($query_spanakjasaraharjallma);
            $hasil_spanakjasaraharjaplma = $koneksi->query($query_spanakjasaraharjaplma);

            // KLINIK SP. ANAK TOTAL KESELURUHAN
            $query_spanaktotal = "SELECT poliklinik.nm_poli, COUNT(reg_periksa.no_rkm_medis) as SPANAKTOTAL FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien INNER JOIN penjab WHERE reg_periksa.kd_pj = penjab.kd_pj AND poliklinik.nm_poli = 'KLINIK SP. ANAK' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli" ;
            $hasil_spanaktotal = $koneksi->query($query_spanaktotal);


            // KLINIK SP. OBGYN
            // KLINIK SP. OBGYN UMUM L & P BARU
            $query_spobgynumumlbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPOBGYNUMUMLBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'UMU' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK SP. OBGYN' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $query_spobgynumumpbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPOBGYNUMUMPBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'UMU' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK SP. OBGYN' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $hasil_spobgynumumlbru = $koneksi->query($query_spobgynumumlbru);
            $hasil_spobgynumumpbru = $koneksi->query($query_spobgynumumpbru);

            // KLINIK SP. OBGYN UMUM L & P LAMA
            $query_spobgynumumllma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPOBGYNUMUMLLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'UMU' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK SP. OBGYN' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $query_spobgynumumplma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPOBGYNUMUMPLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'UMU' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK SP. OBGYN' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $hasil_spobgynumumllma = $koneksi->query($query_spobgynumumllma);
            $hasil_spobgynumumplma = $koneksi->query($query_spobgynumumplma);

            // KLINIK SP. OBGYN BPJS L & P BARU
            $query_spobgynbpjslbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPOBGYNBPJSLBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'BPJ' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK SP. OBGYN' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $query_spobgynbpjspbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPOBGYNBPJSPBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'BPJ' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK SP. OBGYN' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $hasil_spobgynbpjslbru = $koneksi->query($query_spobgynbpjslbru);
            $hasil_spobgynbpjspbru = $koneksi->query($query_spobgynbpjspbru);

            // KLINIK SP. OBGYN BPJS L & P LAMA
            $query_spobgynbpjsllma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPOBGYNBPJSLLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'BPJ' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK SP. OBGYN' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $query_spobgynbpjsplma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPOBGYNBPJSPLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'BPJ' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK SP. OBGYN' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $hasil_spobgynbpjsllma = $koneksi->query($query_spobgynbpjsllma);
            $hasil_spobgynbpjsplma = $koneksi->query($query_spobgynbpjsplma);

            // KLINIK SP. OBGYN JASA RAHARJA L & P BARU
            $query_spobgynjasaraharjalbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPOBGYNJASARAHARJALBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'JSR' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK SP. OBGYN' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $query_spobgynjasaraharjapbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPOBGYNJASARAHARJAPBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'JSR' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK SP. OBGYN' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $hasil_spobgynjasaraharjalbru = $koneksi->query($query_spobgynjasaraharjalbru);
            $hasil_spobgynjasaraharjapbru = $koneksi->query($query_spobgynjasaraharjapbru);
            
            // KLINIK SP. OBGYN JASA RAHARJA L & P LAMA
            $query_spobgynjasaraharjallma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPOBGYNJASARAHARJALLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'JSR' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK SP. OBGYN' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $query_spobgynjasaraharjaplma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPOBGYNJASARAHARJAPLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'JSR' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK SP. OBGYN' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $hasil_spobgynjasaraharjallma = $koneksi->query($query_spobgynjasaraharjallma);
            $hasil_spobgynjasaraharjaplma = $koneksi->query($query_spobgynjasaraharjaplma);

            // KLINIK SP. OBGYN TOTAL KESELURUHAN
            $query_spobgyntotal = "SELECT poliklinik.nm_poli, COUNT(reg_periksa.no_rkm_medis) as SPOBGYNTOTAL FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien INNER JOIN penjab WHERE reg_periksa.kd_pj = penjab.kd_pj AND poliklinik.nm_poli = 'KLINIK SP. OBGYN' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli" ;
            $hasil_spobgyntotal = $koneksi->query($query_spobgyntotal);    


            // KLINIK SP. OBGYN - KFER
            // KLINIK SP. OBGYN - KFER UMUM L & P BARU
            $query_spobgynkferumumlbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPOBGYNKFERUMUMLBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'UMU' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK SP. OBGYN - KFER' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $query_spobgynkferumumpbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPOBGYNKFERUMUMPBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'UMU' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK SP. OBGYN - KFER' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $hasil_spobgynkferumumlbru = $koneksi->query($query_spobgynkferumumlbru);
            $hasil_spobgynkferumumpbru = $koneksi->query($query_spobgynkferumumpbru);

            // KLINIK SP. OBGYN - KFER UMUM L & P LAMA
            $query_spobgynkferumumllma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPOBGYNKFERUMUMLLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'UMU' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK SP. OBGYN - KFER' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $query_spobgynkferumumplma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPOBGYNKFERUMUMPLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'UMU' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK SP. OBGYN - KFER' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $hasil_spobgynkferumumllma = $koneksi->query($query_spobgynkferumumllma);
            $hasil_spobgynkferumumplma = $koneksi->query($query_spobgynkferumumplma);

            // KLINIK SP. OBGYN - KFER BPJS L & P BARU
            $query_spobgynkferbpjslbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPOBGYNKFERBPJSLBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'BPJ' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK SP. OBGYN - KFER' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $query_spobgynkferbpjspbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPOBGYNKFERBPJSPBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'BPJ' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK SP. OBGYN - KFER' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $hasil_spobgynkferbpjslbru = $koneksi->query($query_spobgynkferbpjslbru);
            $hasil_spobgynkferbpjspbru = $koneksi->query($query_spobgynkferbpjspbru);

            // KLINIK SP. OBGYN - KFER BPJS L & P LAMA
            $query_spobgynkferbpjsllma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPOBGYNKFERBPJSLLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'BPJ' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK SP. OBGYN - KFER' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $query_spobgynkferbpjsplma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPOBGYNKFERBPJSPLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'BPJ' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK SP. OBGYN - KFER' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $hasil_spobgynkferbpjsllma = $koneksi->query($query_spobgynkferbpjsllma);
            $hasil_spobgynkferbpjsplma = $koneksi->query($query_spobgynkferbpjsplma);

            // KLINIK SP. OBGYN - KFER JASA RAHARJA L & P BARU
            $query_spobgynkferjasaraharjalbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPOBGYNKFERJASARAHARJALBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'JSR' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK SP. OBGYN - KFER' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $query_spobgynkferjasaraharjapbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPOBGYNKFERJASARAHARJAPBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'JSR' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK SP. OBGYN - KFER' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $hasil_spobgynkferjasaraharjalbru = $koneksi->query($query_spobgynkferjasaraharjalbru);
            $hasil_spobgynkferjasaraharjapbru = $koneksi->query($query_spobgynkferjasaraharjapbru);
            
            // KLINIK SP. OBGYN - KFER JASA RAHARJA L & P LAMA
            $query_spobgynkferjasaraharjallma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPOBGYNKFERJASARAHARJALLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'JSR' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK SP. OBGYN - KFER' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $query_spobgynkferjasaraharjaplma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPOBGYNKFERJASARAHARJAPLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'JSR' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK SP. OBGYN - KFER' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $hasil_spobgynkferjasaraharjallma = $koneksi->query($query_spobgynkferjasaraharjallma);
            $hasil_spobgynkferjasaraharjaplma = $koneksi->query($query_spobgynkferjasaraharjaplma);

            // KLINIK SP. OBGYN - KFER TOTAL KESELURUHAN
            $query_spobgynkfertotal = "SELECT poliklinik.nm_poli, COUNT(reg_periksa.no_rkm_medis) as SPOBGYNKFERTOTAL FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien INNER JOIN penjab WHERE reg_periksa.kd_pj = penjab.kd_pj AND poliklinik.nm_poli = 'KLINIK SP. OBGYN - KFER' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli" ;
            $hasil_spobgynkfertotal = $koneksi->query($query_spobgynkfertotal);


            // KLINIK SP. JANTUNG & PEMBULUH DARAH
            // KLINIK SP. JANTUNG & PEMBULUH DARAH UMUM L & P BARU
            $query_jantungumumlbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as JANTUNGUMUMLBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'UMU' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK SP. JANTUNG DAN PEMBULUH DARAH' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $query_jantungumumpbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as JANTUNGUMUMPBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'UMU' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK SP. JANTUNG DAN PEMBULUH DARAH' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $hasil_jantungumumlbru = $koneksi->query($query_jantungumumlbru);
            $hasil_jantungumumpbru = $koneksi->query($query_jantungumumpbru);

            // KLINIK SP. JANTUNG & PEMBULUH DARAH UMUM L & P LAMA
            $query_jantungumumllma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as JANTUNGUMUMLLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'UMU' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK SP. JANTUNG DAN PEMBULUH DARAH' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $query_jantungumumplma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as JANTUNGUMUMPLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'UMU' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK SP. JANTUNG DAN PEMBULUH DARAH' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $hasil_jantungumumllma = $koneksi->query($query_jantungumumllma);
            $hasil_jantungumumplma = $koneksi->query($query_jantungumumplma);

            // KLINIK SP. JANTUNG & PEMBULUH DARAH BPJS L & P BARU
            $query_jantungbpjslbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as JANTUNGBPJSLBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'BPJ' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK SP. JANTUNG DAN PEMBULUH DARAH' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $query_jantungbpjspbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as JANTUNGBPJSPBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'BPJ' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK SP. JANTUNG DAN PEMBULUH DARAH' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $hasil_jantungbpjslbru = $koneksi->query($query_jantungbpjslbru);
            $hasil_jantungbpjspbru = $koneksi->query($query_jantungbpjspbru);

            // KLINIK SP. JANTUNG & PEMBULUH DARAH BPJS L & P LAMA
            $query_jantungbpjsllma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as JANTUNGBPJSLLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'BPJ' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK SP. JANTUNG DAN PEMBULUH DARAH' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $query_jantungbpjsplma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as JANTUNGBPJSPLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'BPJ' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK SP. JANTUNG DAN PEMBULUH DARAH' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $hasil_jantungbpjsllma = $koneksi->query($query_jantungbpjsllma);
            $hasil_jantungbpjsplma = $koneksi->query($query_jantungbpjsplma);

            // KLINIK SP. JANTUNG & PEMBULUH DARAH JASA RAHARJA L & P BARU
            $query_jantungjasaraharjalbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as JANTUNGJASARAHARJALBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'JSR' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK SP. JANTUNG DAN PEMBULUH DARAH' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $query_jantungjasaraharjapbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as JANTUNGJASARAHARJAPBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'JSR' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK SP. JANTUNG DAN PEMBULUH DARAH' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $hasil_jantungjasaraharjalbru = $koneksi->query($query_jantungjasaraharjalbru);
            $hasil_jantungjasaraharjapbru = $koneksi->query($query_jantungjasaraharjapbru);
            
            // KLINIK SP. JANTUNG & PEMBULUH DARAH JASA RAHARJA L & P LAMA
            $query_jantungjasaraharjallma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as JANTUNGJASARAHARJALLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'JSR' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK SP. JANTUNG DAN PEMBULUH DARAH' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $query_jantungjasaraharjaplma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as JANTUNGJASARAHARJAPLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'JSR' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK SP. JANTUNG DAN PEMBULUH DARAH' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $hasil_jantungjasaraharjallma = $koneksi->query($query_jantungjasaraharjallma);
            $hasil_jantungjasaraharjaplma = $koneksi->query($query_jantungjasaraharjaplma);

            // KLINIK SP. JANTUNG & PEMBULUH DARAH TOTAL KESELURUHAN
            $query_jantungtotal = "SELECT poliklinik.nm_poli, COUNT(reg_periksa.no_rkm_medis) as JANTUNGTOTAL FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien INNER JOIN penjab WHERE reg_periksa.kd_pj = penjab.kd_pj AND poliklinik.nm_poli = 'KLINIK SP. JANTUNG DAN PEMBULUH DARAH' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli" ;
            $hasil_jantungtotal = $koneksi->query($query_jantungtotal);


            // KLINIK SP. KESEHATAN JIWA
            // KLINIK SP. KESEHATAN JIWA UMUM L & P BARU
            $query_jiwaumumlbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as JIWAUMUMLBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'UMU' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK SP. KESEHATAN JIWA' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $query_jiwaumumpbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as JIWAUMUMPBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'UMU' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK SP. KESEHATAN JIWA' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $hasil_jiwaumumlbru = $koneksi->query($query_jiwaumumlbru);
            $hasil_jiwaumumpbru = $koneksi->query($query_jiwaumumpbru);

            // KLINIK SP. KESEHATAN JIWA UMUM L & P LAMA
            $query_jiwaumumllma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as JIWAUMUMLLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'UMU' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK SP. KESEHATAN JIWA' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $query_jiwaumumplma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as JIWAUMUMPLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'UMU' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK SP. KESEHATAN JIWA' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $hasil_jiwaumumllma = $koneksi->query($query_jiwaumumllma);
            $hasil_jiwaumumplma = $koneksi->query($query_jiwaumumplma);

            // KLINIK SP. KESEHATAN JIWA BPJS L & P BARU
            $query_jiwabpjslbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as JIWABPJSLBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'BPJ' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK SP. KESEHATAN JIWA' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $query_jiwabpjspbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as JIWABPJSPBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'BPJ' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK SP. KESEHATAN JIWA' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $hasil_jiwabpjslbru = $koneksi->query($query_jiwabpjslbru);
            $hasil_jiwabpjspbru = $koneksi->query($query_jiwabpjspbru);

            // KLINIK SP. KESEHATAN JIWA BPJS L & P LAMA
            $query_jiwabpjsllma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as JIWABPJSLLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'BPJ' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK SP. KESEHATAN JIWA' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $query_jiwabpjsplma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as JIWABPJSPLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'BPJ' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK SP. KESEHATAN JIWA' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $hasil_jiwabpjsllma = $koneksi->query($query_jiwabpjsllma);
            $hasil_jiwabpjsplma = $koneksi->query($query_jiwabpjsplma);

            // KLINIK SP. KESEHATAN JIWA JASA RAHARJA L & P BARU
            $query_jiwajasaraharjalbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as JIWAJASARAHARJALBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'JSR' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK SP. KESEHATAN JIWA' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $query_jiwajasaraharjapbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as JIWAJASARAHARJAPBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'JSR' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK SP. KESEHATAN JIWA' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $hasil_jiwajasaraharjalbru = $koneksi->query($query_jiwajasaraharjalbru);
            $hasil_jiwajasaraharjapbru = $koneksi->query($query_jiwajasaraharjapbru);
            
            // KLINIK SP. KESEHATAN JIWA JASA RAHARJA L & P LAMA
            $query_jiwajasaraharjallma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as JIWAJASARAHARJALLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'JSR' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK SP. KESEHATAN JIWA' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $query_jiwajasaraharjaplma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as JIWAJASARAHARJAPLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'JSR' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK SP. KESEHATAN JIWA' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $hasil_jiwajasaraharjallma = $koneksi->query($query_jiwajasaraharjallma);
            $hasil_jiwajasaraharjaplma = $koneksi->query($query_jiwajasaraharjaplma);

            // KLINIK SP. KESEHATAN JIWA TOTAL KESELURUHAN
            $query_jiwatotal = "SELECT poliklinik.nm_poli, COUNT(reg_periksa.no_rkm_medis) as JIWATOTAL FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien INNER JOIN penjab WHERE reg_periksa.kd_pj = penjab.kd_pj AND poliklinik.nm_poli = 'KLINIK SP. KESEHATAN JIWA' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli" ;
            $hasil_jiwatotal = $koneksi->query($query_jiwatotal);


            // KLINIK SP. ORTHOPEDI
            // KLINIK SP. ORTHOPEDI UMUM L & P BARU
            $query_orthoumumlbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as ORTHOUMUMLBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'UMU' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK SP. ORTHOPEDI' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $query_orthoumumpbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as ORTHOUMUMPBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'UMU' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK SP. ORTHOPEDI' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $hasil_orthoumumlbru = $koneksi->query($query_orthoumumlbru);
            $hasil_orthoumumpbru = $koneksi->query($query_orthoumumpbru);

            // KLINIK SP. ORTHOPEDI UMUM L & P LAMA
            $query_orthoumumllma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as ORTHOUMUMLLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'UMU' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK SP. ORTHOPEDI' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $query_orthoumumplma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as ORTHOUMUMPLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'UMU' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK SP. ORTHOPEDI' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $hasil_orthoumumllma = $koneksi->query($query_orthoumumllma);
            $hasil_orthoumumplma = $koneksi->query($query_orthoumumplma);

            // KLINIK SP. ORTHOPEDI BPJS L & P BARU
            $query_orthobpjslbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as ORTHOBPJSLBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'BPJ' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK SP. ORTHOPEDI' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $query_orthobpjspbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as ORTHOBPJSPBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'BPJ' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK SP. ORTHOPEDI' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $hasil_orthobpjslbru = $koneksi->query($query_orthobpjslbru);
            $hasil_orthobpjspbru = $koneksi->query($query_orthobpjspbru);

            // KLINIK SP. ORTHOPEDI BPJS L & P LAMA
            $query_orthobpjsllma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as ORTHOBPJSLLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'BPJ' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK SP. ORTHOPEDI' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $query_orthobpjsplma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as ORTHOBPJSPLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'BPJ' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK SP. ORTHOPEDI' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $hasil_orthobpjsllma = $koneksi->query($query_orthobpjsllma);
            $hasil_orthobpjsplma = $koneksi->query($query_orthobpjsplma);

            // KLINIK SP. ORTHOPEDI JASA RAHARJA L & P BARU
            $query_orthojasaraharjalbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as ORTHOJASARAHARJALBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'JSR' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK SP. ORTHOPEDI' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $query_orthojasaraharjapbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as ORTHOJASARAHARJAPBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'JSR' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK SP. ORTHOPEDI' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $hasil_orthojasaraharjalbru = $koneksi->query($query_orthojasaraharjalbru);
            $hasil_orthojasaraharjapbru = $koneksi->query($query_orthojasaraharjapbru);
            
            // KLINIK SP. ORTHOPEDI JASA RAHARJA L & P LAMA
            $query_orthojasaraharjallma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as ORTHOJASARAHARJALLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'JSR' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK SP. ORTHOPEDI' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $query_orthojasaraharjaplma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as ORTHOJASARAHARJAPLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'JSR' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK SP. ORTHOPEDI' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $hasil_orthojasaraharjallma = $koneksi->query($query_orthojasaraharjallma);
            $hasil_orthojasaraharjaplma = $koneksi->query($query_orthojasaraharjaplma);

            // KLINIK SP. ORTHOPEDI TOTAL KESELURUHAN
            $query_orthototal = "SELECT poliklinik.nm_poli, COUNT(reg_periksa.no_rkm_medis) as ORTHOTOTAL FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien INNER JOIN penjab WHERE reg_periksa.kd_pj = penjab.kd_pj AND poliklinik.nm_poli = 'KLINIK SP. ORTHOPEDI' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli" ;
            $hasil_orthototal = $koneksi->query($query_orthototal);


            // KLINIK SP. PARU
            // KLINIK SP. PARU UMUM L & P BARU
            $query_paruumumlbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as PARUUMUMLBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'UMU' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK SP. PARU' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $query_paruumumpbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as PARUUMUMPBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'UMU' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK SP. PARU' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $hasil_paruumumlbru = $koneksi->query($query_paruumumlbru);
            $hasil_paruumumpbru = $koneksi->query($query_paruumumpbru);

            // KLINIK SP. PARU UMUM L & P LAMA
            $query_paruumumllma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as PARUUMUMLLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'UMU' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK SP. PARU' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $query_paruumumplma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as PARUUMUMPLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'UMU' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK SP. PARU' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $hasil_paruumumllma = $koneksi->query($query_paruumumllma);
            $hasil_paruumumplma = $koneksi->query($query_paruumumplma);

            // KLINIK SP. PARU BPJS L & P BARU
            $query_parubpjslbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as PARUBPJSLBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'BPJ' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK SP. PARU' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $query_parubpjspbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as PARUBPJSPBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'BPJ' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK SP. PARU' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $hasil_parubpjslbru = $koneksi->query($query_parubpjslbru);
            $hasil_parubpjspbru = $koneksi->query($query_parubpjspbru);

            // KLINIK SP. PARU BPJS L & P LAMA
            $query_parubpjsllma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as PARUBPJSLLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'BPJ' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK SP. PARU' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $query_parubpjsplma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as PARUBPJSPLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'BPJ' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK SP. PARU' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $hasil_parubpjsllma = $koneksi->query($query_parubpjsllma);
            $hasil_parubpjsplma = $koneksi->query($query_parubpjsplma);

            // KLINIK SP. PARU JASA RAHARJA L & P BARU
            $query_parujasaraharjalbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as PARUJASARAHARJALBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'JSR' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK SP. PARU' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $query_parujasaraharjapbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as PARUJASARAHARJAPBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'JSR' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK SP. PARU' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $hasil_parujasaraharjalbru = $koneksi->query($query_parujasaraharjalbru);
            $hasil_parujasaraharjapbru = $koneksi->query($query_parujasaraharjapbru);
            
            // KLINIK SP. PARU JASA RAHARJA L & P LAMA
            $query_parujasaraharjallma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as PARUJASARAHARJALLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'JSR' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK SP. PARU' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $query_parujasaraharjaplma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as PARUJASARAHARJAPLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'JSR' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK SP. PARU' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $hasil_parujasaraharjallma = $koneksi->query($query_parujasaraharjallma);
            $hasil_parujasaraharjaplma = $koneksi->query($query_parujasaraharjaplma);

            // KLINIK SP. PARU TOTAL KESELURUHAN
            $query_parutotal = "SELECT poliklinik.nm_poli, COUNT(reg_periksa.no_rkm_medis) as PARUTOTAL FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien INNER JOIN penjab WHERE reg_periksa.kd_pj = penjab.kd_pj AND poliklinik.nm_poli = 'KLINIK SP. PARU' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli" ;
            $hasil_parutotal = $koneksi->query($query_parutotal);


            // KLINIK SP. SARAF
            // KLINIK SP. SARAF UMUM L & P BARU
            $query_spsrfumumlbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPSRFUMUMLBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'UMU' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK SP. SARAF' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $query_spsrfumumpbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPSRFUMUMPBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'UMU' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK SP. SARAF' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $hasil_spsrfumumlbru = $koneksi->query($query_spsrfumumlbru);
            $hasil_spsrfumumpbru = $koneksi->query($query_spsrfumumpbru);

            // KLINIK SP. SARAF UMUM L & P LAMA
            $query_spsrfumumllma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPSRFUMUMLLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'UMU' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK SP. SARAF' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $query_spsrfumumplma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPSRFUMUMPLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'UMU' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK SP. SARAF' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $hasil_spsrfumumllma = $koneksi->query($query_spsrfumumllma);
            $hasil_spsrfumumplma = $koneksi->query($query_spsrfumumplma);

            // KLINIK SP. SARAF BPJS L & P BARU
            $query_spsrfbpjslbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPSRFBPJSLBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'BPJ' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK SP. SARAF' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $query_spsrfbpjspbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPSRFBPJSPBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'BPJ' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK SP. SARAF' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $hasil_spsrfbpjslbru = $koneksi->query($query_spsrfbpjslbru);
            $hasil_spsrfbpjspbru = $koneksi->query($query_spsrfbpjspbru);

            // KLINIK SP. SARAF BPJS L & P LAMA
            $query_spsrfbpjsllma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPSRFBPJSLLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'BPJ' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK SP. SARAF' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $query_spsrfbpjsplma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPSRFBPJSPLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'BPJ' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK SP. SARAF' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $hasil_spsrfbpjsllma = $koneksi->query($query_spsrfbpjsllma);
            $hasil_spsrfbpjsplma = $koneksi->query($query_spsrfbpjsplma);

            // KLINIK SP. SARAF JASA RAHARJA L & P BARU
            $query_spsrfjasaraharjalbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPSRFJASARAHARJALBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'JSR' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK SP. SARAF' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $query_spsrfjasaraharjapbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPSRFJASARAHARJAPBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'JSR' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK SP. SARAF' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $hasil_spsrfjasaraharjalbru = $koneksi->query($query_spsrfjasaraharjalbru);
            $hasil_spsrfjasaraharjapbru = $koneksi->query($query_spsrfjasaraharjapbru);
            
            // KLINIK SP. SARAF JASA RAHARJA L & P LAMA
            $query_spsrfjasaraharjallma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPSRFJASARAHARJALLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'JSR' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK SP. SARAF' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $query_spsrfjasaraharjaplma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPSRFJASARAHARJAPLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'JSR' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK SP. SARAF' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $hasil_spsrfjasaraharjallma = $koneksi->query($query_spsrfjasaraharjallma);
            $hasil_spsrfjasaraharjaplma = $koneksi->query($query_spsrfjasaraharjaplma);

            // KLINIK SP. SARAF TOTAL KESELURUHAN
            $query_spsrftotal = "SELECT poliklinik.nm_poli, COUNT(reg_periksa.no_rkm_medis) as SPSRFTOTAL FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien INNER JOIN penjab WHERE reg_periksa.kd_pj = penjab.kd_pj AND poliklinik.nm_poli = 'KLINIK SP. SARAF' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli" ;
            $hasil_spsrftotal = $koneksi->query($query_spsrftotal);


            // KLINIK SP. MATA
            // KLINIK SP. MATA UMUM L & P BARU
            $query_spmataumumlbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPMATAUMUMLBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'UMU' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK SP. MATA' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $query_spmataumumpbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPMATAUMUMPBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'UMU' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK SP. MATA' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $hasil_spmataumumlbru = $koneksi->query($query_spmataumumlbru);
            $hasil_spmataumumpbru = $koneksi->query($query_spmataumumpbru);

            // KLINIK SP. MATA UMUM L & P LAMA
            $query_spmataumumllma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPMATAUMUMLLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'UMU' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK SP. MATA' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $query_spmataumumplma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPMATAUMUMPLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'UMU' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK SP. MATA' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $hasil_spmataumumllma = $koneksi->query($query_spmataumumllma);
            $hasil_spmataumumplma = $koneksi->query($query_spmataumumplma);

            // KLINIK SP. MATA BPJS L & P BARU
            $query_spmatabpjslbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPMATABPJSLBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'BPJ' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK SP. MATA' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $query_spmatabpjspbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPMATABPJSPBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'BPJ' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK SP. MATA' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $hasil_spmatabpjslbru = $koneksi->query($query_spmatabpjslbru);
            $hasil_spmatabpjspbru = $koneksi->query($query_spmatabpjspbru);

            // KLINIK SP. MATA BPJS L & P LAMA
            $query_spmatabpjsllma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPMATABPJSLLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'BPJ' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK SP. MATA' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $query_spmatabpjsplma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPMATABPJSPLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'BPJ' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK SP. MATA' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $hasil_spmatabpjsllma = $koneksi->query($query_spmatabpjsllma);
            $hasil_spmatabpjsplma = $koneksi->query($query_spmatabpjsplma);

            // KLINIK SP. MATA JASA RAHARJA L & P BARU
            $query_spmatajasaraharjalbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPMATAJASARAHARJALBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'JSR' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK SP. MATA' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $query_spmatajasaraharjapbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPMATAJASARAHARJAPBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'JSR' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK SP. MATA' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $hasil_spmatajasaraharjalbru = $koneksi->query($query_spmatajasaraharjalbru);
            $hasil_spmatajasaraharjapbru = $koneksi->query($query_spmatajasaraharjapbru);
            
            // KLINIK SP. MATA JASA RAHARJA L & P LAMA
            $query_spmatajasaraharjallma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPMATAJASARAHARJALLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'JSR' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK SP. MATA' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $query_spmatajasaraharjaplma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPMATAJASARAHARJAPLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'JSR' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK SP. MATA' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $hasil_spmatajasaraharjallma = $koneksi->query($query_spmatajasaraharjallma);
            $hasil_spmatajasaraharjaplma = $koneksi->query($query_spmatajasaraharjaplma);

            // KLINIK SP. MATA TOTAL KESELURUHAN
            $query_spmatatotal = "SELECT poliklinik.nm_poli, COUNT(reg_periksa.no_rkm_medis) as SPMATATOTAL FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien INNER JOIN penjab WHERE reg_periksa.kd_pj = penjab.kd_pj AND poliklinik.nm_poli = 'KLINIK SP. MATA' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli" ;
            $hasil_spmatatotal = $koneksi->query($query_spmatatotal);


            // KLINIK SP. KULIT & KELAMIN
            // KLINIK SP. KULIT & KELAMIN UMUM L & P BARU
            $query_spklkumumlbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPKLKUMUMLBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'UMU' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK SP. KULIT & KELAMIN' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $query_spklkumumpbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPKLKUMUMPBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'UMU' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK SP. KULIT & KELAMIN' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $hasil_spklkumumlbru = $koneksi->query($query_spklkumumlbru);
            $hasil_spklkumumpbru = $koneksi->query($query_spklkumumpbru);

            // KLINIK SP. KULIT & KELAMIN UMUM L & P LAMA
            $query_spklkumumllma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPKLKUMUMLLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'UMU' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK SP. KULIT & KELAMIN' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $query_spklkumumplma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPKLKUMUMPLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'UMU' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK SP. KULIT & KELAMIN' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $hasil_spklkumumllma = $koneksi->query($query_spklkumumllma);
            $hasil_spklkumumplma = $koneksi->query($query_spklkumumplma);

            // KLINIK SP. KULIT & KELAMIN BPJS L & P BARU
            $query_spklkbpjslbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPKLKBPJSLBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'BPJ' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK SP. KULIT & KELAMIN' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $query_spklkbpjspbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPKLKBPJSPBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'BPJ' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK SP. KULIT & KELAMIN' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $hasil_spklkbpjslbru = $koneksi->query($query_spklkbpjslbru);
            $hasil_spklkbpjspbru = $koneksi->query($query_spklkbpjspbru);

            // KLINIK SP. KULIT & KELAMIN BPJS L & P LAMA
            $query_spklkbpjsllma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPKLKBPJSLLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'BPJ' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK SP. KULIT & KELAMIN' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $query_spklkbpjsplma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPKLKBPJSPLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'BPJ' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK SP. KULIT & KELAMIN' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $hasil_spklkbpjsllma = $koneksi->query($query_spklkbpjsllma);
            $hasil_spklkbpjsplma = $koneksi->query($query_spklkbpjsplma);

            // KLINIK SP. KULIT & KELAMIN JASA RAHARJA L & P BARU
            $query_spklkjasaraharjalbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPKLKJASARAHARJALBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'JSR' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK SP. KULIT & KELAMIN' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $query_spklkjasaraharjapbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPKLKJASARAHARJAPBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'JSR' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK SP. KULIT & KELAMIN' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $hasil_spklkjasaraharjalbru = $koneksi->query($query_spklkjasaraharjalbru);
            $hasil_spklkjasaraharjapbru = $koneksi->query($query_spklkjasaraharjapbru);
            
            // KLINIK SP. KULIT & KELAMIN JASA RAHARJA L & P LAMA
            $query_spklkjasaraharjallma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPKLKJASARAHARJALLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'JSR' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK SP. KULIT & KELAMIN' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $query_spklkjasaraharjaplma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPKLKJASARAHARJAPLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'JSR' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK SP. KULIT & KELAMIN' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $hasil_spklkjasaraharjallma = $koneksi->query($query_spklkjasaraharjallma);
            $hasil_spklkjasaraharjaplma = $koneksi->query($query_spklkjasaraharjaplma);

            // KLINIK SP. KULIT & KELAMIN TOTAL KESELURUHAN
            $query_spklktotal = "SELECT poliklinik.nm_poli, COUNT(reg_periksa.no_rkm_medis) as SPKLKTOTAL FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien INNER JOIN penjab WHERE reg_periksa.kd_pj = penjab.kd_pj AND poliklinik.nm_poli = 'KLINIK SP. KULIT & KELAMIN' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli" ;
            $hasil_spklktotal = $koneksi->query($query_spklktotal);


            // KLINIK SP. THT - KL
            // KLINIK SP. THT - KL UMUM L & P BARU
            $query_spthtklumumlbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPTHTKLUMUMLBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'UMU' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK SP. THT - KL' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $query_spthtklumumpbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPTHTKLUMUMPBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'UMU' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK SP. THT - KL' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $hasil_spthtklumumlbru = $koneksi->query($query_spthtklumumlbru);
            $hasil_spthtklumumpbru = $koneksi->query($query_spthtklumumpbru);

            // KLINIK SP. THT - KL UMUM L & P LAMA
            $query_spthtklumumllma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPTHTKLUMUMLLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'UMU' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK SP. THT - KL' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $query_spthtklumumplma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPTHTKLUMUMPLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'UMU' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK SP. THT - KL' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $hasil_spthtklumumllma = $koneksi->query($query_spthtklumumllma);
            $hasil_spthtklumumplma = $koneksi->query($query_spthtklumumplma);

            // KLINIK SP. THT - KL BPJS L & P BARU
            $query_spthtklbpjslbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPTHTKLBPJSLBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'BPJ' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK SP. THT - KL' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $query_spthtklbpjspbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPTHTKLBPJSPBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'BPJ' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK SP. THT - KL' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $hasil_spthtklbpjslbru = $koneksi->query($query_spthtklbpjslbru);
            $hasil_spthtklbpjspbru = $koneksi->query($query_spthtklbpjspbru);

            // KLINIK SP. THT - KL BPJS L & P LAMA
            $query_spthtklbpjsllma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPTHTKLBPJSLLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'BPJ' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK SP. THT - KL' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $query_spthtklbpjsplma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPTHTKLBPJSPLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'BPJ' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK SP. THT - KL' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $hasil_spthtklbpjsllma = $koneksi->query($query_spthtklbpjsllma);
            $hasil_spthtklbpjsplma = $koneksi->query($query_spthtklbpjsplma);

            // KLINIK SP. THT - KL JASA RAHARJA L & P BARU
            $query_spthtkljasaraharjalbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPTHTKLJASARAHARJALBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'JSR' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK SP. THT - KL' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $query_spthtkljasaraharjapbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPTHTKLJASARAHARJAPBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'JSR' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK SP. THT - KL' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $hasil_spthtkljasaraharjalbru = $koneksi->query($query_spthtkljasaraharjalbru);
            $hasil_spthtkljasaraharjapbru = $koneksi->query($query_spthtkljasaraharjapbru);
            
            // KLINIK SP. THT - KL JASA RAHARJA L & P LAMA
            $query_spthtkljasaraharjallma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPTHTKLJASARAHARJALLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'JSR' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK SP. THT - KL' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $query_spthtkljasaraharjaplma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPTHTKLJASARAHARJAPLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'JSR' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK SP. THT - KL' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $hasil_spthtkljasaraharjallma = $koneksi->query($query_spthtkljasaraharjallma);
            $hasil_spthtkljasaraharjaplma = $koneksi->query($query_spthtkljasaraharjaplma);

            // KLINIK SP. THT - KL TOTAL KESELURUHAN
            $query_spthtkltotal = "SELECT poliklinik.nm_poli, COUNT(reg_periksa.no_rkm_medis) as SPTHTKLTOTAL FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien INNER JOIN penjab WHERE reg_periksa.kd_pj = penjab.kd_pj AND poliklinik.nm_poli = 'KLINIK SP. THT - KL' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli" ;
            $hasil_spthtkltotal = $koneksi->query($query_spthtkltotal);


            // KLINIK SP. UROLOGI
            // KLINIK SP. UROLOGI UMUM L & P BARU
            $query_urologiumumlbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as UROLOGIUMUMLBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'UMU' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK SP. UROLOGI' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $query_urologiumumpbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as UROLOGIUMUMPBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'UMU' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK SP. UROLOGI' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $hasil_urologiumumlbru = $koneksi->query($query_urologiumumlbru);
            $hasil_urologiumumpbru = $koneksi->query($query_urologiumumpbru);

            // KLINIK SP. UROLOGI UMUM L & P LAMA
            $query_urologiumumllma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as UROLOGIUMUMLLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'UMU' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK SP. UROLOGI' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $query_urologiumumplma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as UROLOGIUMUMPLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'UMU' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK SP. UROLOGI' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $hasil_urologiumumllma = $koneksi->query($query_urologiumumllma);
            $hasil_urologiumumplma = $koneksi->query($query_urologiumumplma);

            // KLINIK SP. UROLOGI BPJS L & P BARU
            $query_urologibpjslbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as UROLOGIBPJSLBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'BPJ' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK SP. UROLOGI' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $query_urologibpjspbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as UROLOGIBPJSPBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'BPJ' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK SP. UROLOGI' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $hasil_urologibpjslbru = $koneksi->query($query_urologibpjslbru);
            $hasil_urologibpjspbru = $koneksi->query($query_urologibpjspbru);

            // KLINIK SP. UROLOGI BPJS L & P LAMA
            $query_urologibpjsllma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as UROLOGIBPJSLLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'BPJ' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK SP. UROLOGI' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $query_urologibpjsplma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as UROLOGIBPJSPLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'BPJ' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK SP. UROLOGI' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $hasil_urologibpjsllma = $koneksi->query($query_urologibpjsllma);
            $hasil_urologibpjsplma = $koneksi->query($query_urologibpjsplma);

            // KLINIK SP. UROLOGI JASA RAHARJA L & P BARU
            $query_urologijasaraharjalbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as UROLOGIJASARAHARJALBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'JSR' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK SP. UROLOGI' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $query_urologijasaraharjapbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as UROLOGIJASARAHARJAPBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'JSR' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK SP. UROLOGI' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $hasil_urologijasaraharjalbru = $koneksi->query($query_urologijasaraharjalbru);
            $hasil_urologijasaraharjapbru = $koneksi->query($query_urologijasaraharjapbru);
            
            // KLINIK SP. UROLOGI JASA RAHARJA L & P LAMA
            $query_urologijasaraharjallma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as UROLOGIJASARAHARJALLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'JSR' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK SP. UROLOGI' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $query_urologijasaraharjaplma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as UROLOGIJASARAHARJAPLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'JSR' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK SP. UROLOGI' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $hasil_urologijasaraharjallma = $koneksi->query($query_urologijasaraharjallma);
            $hasil_urologijasaraharjaplma = $koneksi->query($query_urologijasaraharjaplma);

            // KLINIK SP. UROLOGI TOTAL KESELURUHAN
            $query_urologitotal = "SELECT poliklinik.nm_poli, COUNT(reg_periksa.no_rkm_medis) as UROLOGITOTAL FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien INNER JOIN penjab WHERE reg_periksa.kd_pj = penjab.kd_pj AND poliklinik.nm_poli = 'KLINIK SP. UROLOGI' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli" ;
            $hasil_urologitotal = $koneksi->query($query_urologitotal);


            // KLINIK SP. PATOLOGI KLINIK
            // KLINIK SP. PATOLOGI KLINIK UMUM L & P BARU
            $query_patologiumumlbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as PATOLOGIUMUMLBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'UMU' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK SP. PATOLOGI KLINIK' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $query_patologiumumpbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as PATOLOGIUMUMPBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'UMU' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK SP. PATOLOGI KLINIK' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $hasil_patologiumumlbru = $koneksi->query($query_patologiumumlbru);
            $hasil_patologiumumpbru = $koneksi->query($query_patologiumumpbru);

            // KLINIK SP. PATOLOGI KLINIK UMUM L & P LAMA
            $query_patologiumumllma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as PATOLOGIUMUMLLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'UMU' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK SP. PATOLOGI KLINIK' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $query_patologiumumplma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as PATOLOGIUMUMPLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'UMU' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK SP. PATOLOGI KLINIK' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $hasil_patologiumumllma = $koneksi->query($query_patologiumumllma);
            $hasil_patologiumumplma = $koneksi->query($query_patologiumumplma);

            // KLINIK SP. PATOLOGI KLINIK BPJS L & P BARU
            $query_patologibpjslbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as PATOLOGIBPJSLBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'BPJ' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK SP. PATOLOGI KLINIK' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $query_patologibpjspbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as PATOLOGIBPJSPBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'BPJ' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK SP. PATOLOGI KLINIK' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $hasil_patologibpjslbru = $koneksi->query($query_patologibpjslbru);
            $hasil_patologibpjspbru = $koneksi->query($query_patologibpjspbru);

            // KLINIK SP. PATOLOGI KLINIK BPJS L & P LAMA
            $query_patologibpjsllma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as PATOLOGIBPJSLLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'BPJ' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK SP. PATOLOGI KLINIK' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $query_patologibpjsplma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as PATOLOGIBPJSPLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'BPJ' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK SP. PATOLOGI KLINIK' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $hasil_patologibpjsllma = $koneksi->query($query_patologibpjsllma);
            $hasil_patologibpjsplma = $koneksi->query($query_patologibpjsplma);

            // KLINIK SP. PATOLOGI KLINIK JASA RAHARJA L & P BARU
            $query_patologijasaraharjalbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as PATOLOGIJASARAHARJALBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'JSR' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK SP. PATOLOGI KLINIK' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $query_patologijasaraharjapbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as PATOLOGIJASARAHARJAPBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'JSR' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK SP. PATOLOGI KLINIK' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $hasil_patologijasaraharjalbru = $koneksi->query($query_patologijasaraharjalbru);
            $hasil_patologijasaraharjapbru = $koneksi->query($query_patologijasaraharjapbru);
            
            // KLINIK SP. PATOLOGI KLINIK JASA RAHARJA L & P LAMA
            $query_patologijasaraharjallma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as PATOLOGIJASARAHARJALLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'JSR' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK SP. PATOLOGI KLINIK' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $query_patologijasaraharjaplma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as PATOLOGIJASARAHARJAPLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'JSR' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK SP. PATOLOGI KLINIK' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $hasil_patologijasaraharjallma = $koneksi->query($query_patologijasaraharjallma);
            $hasil_patologijasaraharjaplma = $koneksi->query($query_patologijasaraharjaplma);

            // KLINIK SP. PATOLOGI KLINIK TOTAL KESELURUHAN
            $query_patologitotal = "SELECT poliklinik.nm_poli, COUNT(reg_periksa.no_rkm_medis) as PATOLOGITOTAL FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien INNER JOIN penjab WHERE reg_periksa.kd_pj = penjab.kd_pj AND poliklinik.nm_poli = 'KLINIK SP. PATOLOGI KLINIK' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli" ;
            $hasil_patologitotal = $koneksi->query($query_patologitotal);

            // KLINIK SP. ANASTESI
            // KLINIK SP. ANASTESI UMUM L & P BARU
            $query_spanastumumlbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPANASTUMUMLBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'UMU' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK SP. ANASTESI' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $query_spanastumumpbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPANASTUMUMPBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'UMU' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK SP. ANASTESI' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $hasil_spanastumumlbru = $koneksi->query($query_spanastumumlbru);
            $hasil_spanastumumpbru = $koneksi->query($query_spanastumumpbru);

            // KLINIK SP. ANASTESI UMUM L & P LAMA
            $query_spanastumumllma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPANASTUMUMLLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'UMU' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK SP. ANASTESI' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $query_spanastumumplma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPANASTUMUMPLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'UMU' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK SP. ANASTESI' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $hasil_spanastumumllma = $koneksi->query($query_spanastumumllma);
            $hasil_spanastumumplma = $koneksi->query($query_spanastumumplma);

            // KLINIK SP. ANASTESI BPJS L & P BARU
            $query_spanastbpjslbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPANASTBPJSLBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'BPJ' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK SP. ANASTESI' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $query_spanastbpjspbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPANASTBPJSPBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'BPJ' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK SP. ANASTESI' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $hasil_spanastbpjslbru = $koneksi->query($query_spanastbpjslbru);
            $hasil_spanastbpjspbru = $koneksi->query($query_spanastbpjspbru);

            // KLINIK SP. ANASTESI BPJS L & P LAMA
            $query_spanastbpjsllma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPANASTBPJSLLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'BPJ' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK SP. ANASTESI' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $query_spanastbpjsplma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPANASTBPJSPLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'BPJ' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK SP. ANASTESI' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $hasil_spanastbpjsllma = $koneksi->query($query_spanastbpjsllma);
            $hasil_spanastbpjsplma = $koneksi->query($query_spanastbpjsplma);

            // KLINIK SP. ANASTESI JASA RAHARJA L & P BARU
            $query_spanastjasaraharjalbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPANASTJASARAHARJALBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'JSR' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK SP. ANASTESI' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $query_spanastjasaraharjapbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPANASTJASARAHARJAPBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'JSR' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK SP. ANASTESI' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $hasil_spanastjasaraharjalbru = $koneksi->query($query_spanastjasaraharjalbru);
            $hasil_spanastjasaraharjapbru = $koneksi->query($query_spanastjasaraharjapbru);
            
            // KLINIK SP. ANASTESI JASA RAHARJA L & P LAMA
            $query_spanastjasaraharjallma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPANASTJASARAHARJALLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'JSR' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK SP. ANASTESI' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $query_spanastjasaraharjaplma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPANASTJASARAHARJAPLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'JSR' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK SP. ANASTESI' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $hasil_spanastjasaraharjallma = $koneksi->query($query_spanastjasaraharjallma);
            $hasil_spanastjasaraharjaplma = $koneksi->query($query_spanastjasaraharjaplma);

            // KLINIK SP. ANASTESI TOTAL KESELURUHAN
            $query_spanasttotal = "SELECT poliklinik.nm_poli, COUNT(reg_periksa.no_rkm_medis) as SPANASTTOTAL FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien INNER JOIN penjab WHERE reg_periksa.kd_pj = penjab.kd_pj AND poliklinik.nm_poli = 'KLINIK SP. ANASTESI' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli" ;
            $hasil_spanasttotal = $koneksi->query($query_spanasttotal);

            // KLINIK SP. REHABILITASI MEDIK
            // KLINIK SP. REHABILITASI MEDIK UMUM L & P BARU
            $query_rehabmedikumumlbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as REHABMEDIKUMUMLBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'UMU' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK SP. REHABILITASI MEDIK' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $query_rehabmedikumumpbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as REHABMEDIKUMUMPBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'UMU' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK SP. REHABILITASI MEDIK' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $hasil_rehabmedikumumlbru = $koneksi->query($query_rehabmedikumumlbru);
            $hasil_rehabmedikumumpbru = $koneksi->query($query_rehabmedikumumpbru);

            // KLINIK SP. REHABILITASI MEDIK UMUM L & P LAMA
            $query_rehabmedikumumllma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as REHABMEDIKUMUMLLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'UMU' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK SP. REHABILITASI MEDIK' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $query_rehabmedikumumplma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as REHABMEDIKUMUMPLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'UMU' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK SP. REHABILITASI MEDIK' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $hasil_rehabmedikumumllma = $koneksi->query($query_rehabmedikumumllma);
            $hasil_rehabmedikumumplma = $koneksi->query($query_rehabmedikumumplma);

            // KLINIK SP. REHABILITASI MEDIK BPJS L & P BARU
            $query_rehabmedikbpjslbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as REHABMEDIKBPJSLBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'BPJ' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK SP. REHABILITASI MEDIK' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $query_rehabmedikbpjspbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as REHABMEDIKBPJSPBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'BPJ' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK SP. REHABILITASI MEDIK' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $hasil_rehabmedikbpjslbru = $koneksi->query($query_rehabmedikbpjslbru);
            $hasil_rehabmedikbpjspbru = $koneksi->query($query_rehabmedikbpjspbru);

            // KLINIK SP. REHABILITASI MEDIK BPJS L & P LAMA
            $query_rehabmedikbpjsllma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as REHABMEDIKBPJSLLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'BPJ' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK SP. REHABILITASI MEDIK' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $query_rehabmedikbpjsplma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as REHABMEDIKBPJSPLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'BPJ' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK SP. REHABILITASI MEDIK' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $hasil_rehabmedikbpjsllma = $koneksi->query($query_rehabmedikbpjsllma);
            $hasil_rehabmedikbpjsplma = $koneksi->query($query_rehabmedikbpjsplma);

            // KLINIK SP. REHABILITASI MEDIK JASA RAHARJA L & P BARU
            $query_rehabmedikjasaraharjalbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as REHABMEDIKJASARAHARJALBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'JSR' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK SP. REHABILITASI MEDIK' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $query_rehabmedikjasaraharjapbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as REHABMEDIKJASARAHARJAPBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'JSR' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK SP. REHABILITASI MEDIK' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $hasil_rehabmedikjasaraharjalbru = $koneksi->query($query_rehabmedikjasaraharjalbru);
            $hasil_rehabmedikjasaraharjapbru = $koneksi->query($query_rehabmedikjasaraharjapbru);
            
            // KLINIK SP. REHABILITASI MEDIK JASA RAHARJA L & P LAMA
            $query_rehabmedikjasaraharjallma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as REHABMEDIKJASARAHARJALLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'JSR' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK SP. REHABILITASI MEDIK' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $query_rehabmedikjasaraharjaplma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as REHABMEDIKJASARAHARJAPLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'JSR' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK SP. REHABILITASI MEDIK' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $hasil_rehabmedikjasaraharjallma = $koneksi->query($query_rehabmedikjasaraharjallma);
            $hasil_rehabmedikjasaraharjaplma = $koneksi->query($query_rehabmedikjasaraharjaplma);

            // KLINIK SP. REHABILITASI MEDIK TOTAL KESELURUHAN
            $query_rehabmediktotal = "SELECT poliklinik.nm_poli, COUNT(reg_periksa.no_rkm_medis) as REHABMEDIKTOTAL FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien INNER JOIN penjab WHERE reg_periksa.kd_pj = penjab.kd_pj AND poliklinik.nm_poli = 'KLINIK SP. REHABILITASI MEDIK' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli" ;
            $hasil_rehabmediktotal = $koneksi->query($query_rehabmediktotal);


            // KLINIK GIGI
            // KLINIK GIGI UMUM L & P BARU
            $query_spgigiumumlbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPGIGIUMUMLBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'UMU' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK GIGI' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $query_spgigiumumpbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPGIGIUMUMPBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'UMU' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK GIGI' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $hasil_spgigiumumlbru = $koneksi->query($query_spgigiumumlbru);
            $hasil_spgigiumumpbru = $koneksi->query($query_spgigiumumpbru);

            // KLINIK GIGI UMUM L & P LAMA
            $query_spgigiumumllma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPGIGIUMUMLLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'UMU' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK GIGI' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $query_spgigiumumplma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPGIGIUMUMPLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'UMU' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK GIGI' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $hasil_spgigiumumllma = $koneksi->query($query_spgigiumumllma);
            $hasil_spgigiumumplma = $koneksi->query($query_spgigiumumplma);

            // KLINIK GIGI BPJS L & P BARU
            $query_spgigibpjslbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPGIGIBPJSLBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'BPJ' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK GIGI' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $query_spgigibpjspbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPGIGIBPJSPBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'BPJ' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK GIGI' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $hasil_spgigibpjslbru = $koneksi->query($query_spgigibpjslbru);
            $hasil_spgigibpjspbru = $koneksi->query($query_spgigibpjspbru);

            // KLINIK GIGI BPJS L & P LAMA
            $query_spgigibpjsllma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPGIGIBPJSLLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'BPJ' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK GIGI' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $query_spgigibpjsplma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPGIGIBPJSPLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'BPJ' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK GIGI' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $hasil_spgigibpjsllma = $koneksi->query($query_spgigibpjsllma);
            $hasil_spgigibpjsplma = $koneksi->query($query_spgigibpjsplma);

            // KLINIK GIGI JASA RAHARJA L & P BARU
            $query_spgigijasaraharjalbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPGIGIJASARAHARJALBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'JSR' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK GIGI' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $query_spgigijasaraharjapbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPGIGIJASARAHARJAPBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'JSR' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK GIGI' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $hasil_spgigijasaraharjalbru = $koneksi->query($query_spgigijasaraharjalbru);
            $hasil_spgigijasaraharjapbru = $koneksi->query($query_spgigijasaraharjapbru);
            
            // KLINIK GIGI JASA RAHARJA L & P LAMA
            $query_spgigijasaraharjallma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPGIGIJASARAHARJALLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'JSR' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK GIGI' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $query_spgigijasaraharjaplma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPGIGIJASARAHARJAPLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'JSR' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK GIGI' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $hasil_spgigijasaraharjallma = $koneksi->query($query_spgigijasaraharjallma);
            $hasil_spgigijasaraharjaplma = $koneksi->query($query_spgigijasaraharjaplma);

            // KLINIK GIGI TOTAL KESELURUHAN
            $query_spgigitotal = "SELECT poliklinik.nm_poli, COUNT(reg_periksa.no_rkm_medis) as SPGIGITOTAL FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien INNER JOIN penjab WHERE reg_periksa.kd_pj = penjab.kd_pj AND poliklinik.nm_poli = 'KLINIK GIGI' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli" ;
            $hasil_spgigitotal = $koneksi->query($query_spgigitotal);


            // KLINIK DOKTER UMUM
            // KLINIK DOKTER UMUM UMUM L & P BARU
            $query_spdokumumumlbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPDOKUMUMUMLBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'UMU' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK DOKTER UMUM' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $query_spdokumumumpbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPDOKUMUMUMPBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'UMU' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK DOKTER UMUM' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $hasil_spdokumumumlbru = $koneksi->query($query_spdokumumumlbru);
            $hasil_spdokumumumpbru = $koneksi->query($query_spdokumumumpbru);

            // KLINIK DOKTER UMUM UMUM L & P LAMA
            $query_spdokumumumllma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPDOKUMUMUMLLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'UMU' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK DOKTER UMUM' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $query_spdokumumumplma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPDOKUMUMUMPLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'UMU' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK DOKTER UMUM' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $hasil_spdokumumumllma = $koneksi->query($query_spdokumumumllma);
            $hasil_spdokumumumplma = $koneksi->query($query_spdokumumumplma);

            // KLINIK DOKTER UMUM BPJS L & P BARU
            $query_spdokumbpjslbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPDOKUMBPJSLBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'BPJ' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK DOKTER UMUM' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $query_spdokumbpjspbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPDOKUMBPJSPBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'BPJ' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK DOKTER UMUM' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $hasil_spdokumbpjslbru = $koneksi->query($query_spdokumbpjslbru);
            $hasil_spdokumbpjspbru = $koneksi->query($query_spdokumbpjspbru);

            // KLINIK DOKTER UMUM BPJS L & P LAMA
            $query_spdokumbpjsllma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPDOKUMBPJSLLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'BPJ' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK DOKTER UMUM' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $query_spdokumbpjsplma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPDOKUMBPJSPLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'BPJ' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK DOKTER UMUM' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $hasil_spdokumbpjsllma = $koneksi->query($query_spdokumbpjsllma);
            $hasil_spdokumbpjsplma = $koneksi->query($query_spdokumbpjsplma);

            // KLINIK DOKTER UMUM JASA RAHARJA L & P BARU
            $query_spdokumjasaraharjalbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPDOKUMJASARAHARJALBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'JSR' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK DOKTER UMUM' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $query_spdokumjasaraharjapbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPDOKUMJASARAHARJAPBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'JSR' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK DOKTER UMUM' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $hasil_spdokumjasaraharjalbru = $koneksi->query($query_spdokumjasaraharjalbru);
            $hasil_spdokumjasaraharjapbru = $koneksi->query($query_spdokumjasaraharjapbru);
            
            // KLINIK DOKTER UMUM JASA RAHARJA L & P LAMA
            $query_spdokumjasaraharjallma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPDOKUMJASARAHARJALLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'JSR' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK DOKTER UMUM' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $query_spdokumjasaraharjaplma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPDOKUMJASARAHARJAPLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'JSR' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK DOKTER UMUM' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $hasil_spdokumjasaraharjallma = $koneksi->query($query_spdokumjasaraharjallma);
            $hasil_spdokumjasaraharjaplma = $koneksi->query($query_spdokumjasaraharjaplma);

            // KLINIK DOKTER UMUM TOTAL KESELURUHAN
            $query_spdokumtotal = "SELECT poliklinik.nm_poli, COUNT(reg_periksa.no_rkm_medis) as SPDOKUMTOTAL FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien INNER JOIN penjab WHERE reg_periksa.kd_pj = penjab.kd_pj AND poliklinik.nm_poli = 'KLINIK DOKTER UMUM' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli" ;
            $hasil_spdokumtotal = $koneksi->query($query_spdokumtotal);   


            // KLINIK SP. KECANTIKAN
            // KLINIK SP. KECANTIKAN UMUM L & P BARU
            $query_spcntkumumlbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPCNTKUMUMLBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'UMU' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK SP. KECANTIKAN' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $query_spcntkumumpbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPCNTKUMUMPBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'UMU' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK SP. KECANTIKAN' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $hasil_spcntkumumlbru = $koneksi->query($query_spcntkumumlbru);
            $hasil_spcntkumumpbru = $koneksi->query($query_spcntkumumpbru);

            // KLINIK SP. KECANTIKAN UMUM L & P LAMA
            $query_spcntkumumllma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPCNTKUMUMLLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'UMU' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK SP. KECANTIKAN' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $query_spcntkumumplma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPCNTKUMUMPLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'UMU' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK SP. KECANTIKAN' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $hasil_spcntkumumllma = $koneksi->query($query_spcntkumumllma);
            $hasil_spcntkumumplma = $koneksi->query($query_spcntkumumplma);

            // KLINIK SP. KECANTIKAN BPJS L & P BARU
            $query_spcntkbpjslbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPCNTKBPJSLBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'BPJ' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK SP. KECANTIKAN' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $query_spcntkbpjspbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPCNTKBPJSPBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'BPJ' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK SP. KECANTIKAN' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $hasil_spcntkbpjslbru = $koneksi->query($query_spcntkbpjslbru);
            $hasil_spcntkbpjspbru = $koneksi->query($query_spcntkbpjspbru);

            // KLINIK SP. KECANTIKAN BPJS L & P LAMA
            $query_spcntkbpjsllma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPCNTKBPJSLLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'BPJ' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK SP. KECANTIKAN' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $query_spcntkbpjsplma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPCNTKBPJSPLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'BPJ' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK SP. KECANTIKAN' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $hasil_spcntkbpjsllma = $koneksi->query($query_spcntkbpjsllma);
            $hasil_spcntkbpjsplma = $koneksi->query($query_spcntkbpjsplma);

            // KLINIK SP. KECANTIKAN JASA RAHARJA L & P BARU
            $query_spcntkjasaraharjalbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPCNTKJASARAHARJALBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'JSR' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK SP. KECANTIKAN' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $query_spcntkjasaraharjapbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPCNTKJASARAHARJAPBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'JSR' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK SP. KECANTIKAN' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $hasil_spcntkjasaraharjalbru = $koneksi->query($query_spcntkjasaraharjalbru);
            $hasil_spcntkjasaraharjapbru = $koneksi->query($query_spcntkjasaraharjapbru);
            
            // KLINIK SP. KECANTIKAN JASA RAHARJA L & P LAMA
            $query_spcntkjasaraharjallma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPCNTKJASARAHARJALLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'JSR' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK SP. KECANTIKAN' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $query_spcntkjasaraharjaplma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPCNTKJASARAHARJAPLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'JSR' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK SP. KECANTIKAN' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $hasil_spcntkjasaraharjallma = $koneksi->query($query_spcntkjasaraharjallma);
            $hasil_spcntkjasaraharjaplma = $koneksi->query($query_spcntkjasaraharjaplma);

            // KLINIK SP. KECANTIKAN TOTAL KESELURUHAN
            $query_spcntktotal = "SELECT poliklinik.nm_poli, COUNT(reg_periksa.no_rkm_medis) as SPCNTKTOTAL FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien INNER JOIN penjab WHERE reg_periksa.kd_pj = penjab.kd_pj AND poliklinik.nm_poli = 'KLINIK SP. KECANTIKAN' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli" ;
            $hasil_spcntktotal = $koneksi->query($query_spcntktotal);


            // KLINIK MEDICAL CHEK-UP
            // KLINIK MEDICAL CHEK-UP UMUM L & P BARU
            $query_medchkumumlbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as MEDCHKUMUMLBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'UMU' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK MEDICAL CHEK-UP' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $query_medchkumumpbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as MEDCHKUMUMPBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'UMU' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK MEDICAL CHEK-UP' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $hasil_medchkumumlbru = $koneksi->query($query_medchkumumlbru);
            $hasil_medchkumumpbru = $koneksi->query($query_medchkumumpbru);

            // KLINIK MEDICAL CHEK-UP UMUM L & P LAMA
            $query_medchkumumllma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as MEDCHKUMUMLLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'UMU' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK MEDICAL CHEK-UP' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $query_medchkumumplma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as MEDCHKUMUMPLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'UMU' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK MEDICAL CHEK-UP' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $hasil_medchkumumllma = $koneksi->query($query_medchkumumllma);
            $hasil_medchkumumplma = $koneksi->query($query_medchkumumplma);

            // KLINIK MEDICAL CHEK-UP BPJS L & P BARU
            $query_medchkbpjslbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as MEDCHKBPJSLBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'BPJ' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK MEDICAL CHEK-UP' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $query_medchkbpjspbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as MEDCHKBPJSPBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'BPJ' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK MEDICAL CHEK-UP' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $hasil_medchkbpjslbru = $koneksi->query($query_medchkbpjslbru);
            $hasil_medchkbpjspbru = $koneksi->query($query_medchkbpjspbru);

            // KLINIK MEDICAL CHEK-UP BPJS L & P LAMA
            $query_medchkbpjsllma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as MEDCHKBPJSLLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'BPJ' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK MEDICAL CHEK-UP' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $query_medchkbpjsplma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as MEDCHKBPJSPLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'BPJ' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK MEDICAL CHEK-UP' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $hasil_medchkbpjsllma = $koneksi->query($query_medchkbpjsllma);
            $hasil_medchkbpjsplma = $koneksi->query($query_medchkbpjsplma);

            // KLINIK MEDICAL CHEK-UP JASA RAHARJA L & P BARU
            $query_medchkjasaraharjalbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as MEDCHKJASARAHARJALBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'JSR' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK MEDICAL CHEK-UP' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $query_medchkjasaraharjapbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as MEDCHKJASARAHARJAPBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'JSR' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK MEDICAL CHEK-UP' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $hasil_medchkjasaraharjalbru = $koneksi->query($query_medchkjasaraharjalbru);
            $hasil_medchkjasaraharjapbru = $koneksi->query($query_medchkjasaraharjapbru);
            
            // KLINIK MEDICAL CHEK-UP JASA RAHARJA L & P LAMA
            $query_medchkjasaraharjallma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as MEDCHKJASARAHARJALLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'JSR' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK MEDICAL CHEK-UP' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $query_medchkjasaraharjaplma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as MEDCHKJASARAHARJAPLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'JSR' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK MEDICAL CHEK-UP' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $hasil_medchkjasaraharjallma = $koneksi->query($query_medchkjasaraharjallma);
            $hasil_medchkjasaraharjaplma = $koneksi->query($query_medchkjasaraharjaplma);

            // KLINIK MEDICAL CHEK-UP TOTAL KESELURUHAN
            $query_medchktotal = "SELECT poliklinik.nm_poli, COUNT(reg_periksa.no_rkm_medis) as MEDCHKTOTAL FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien INNER JOIN penjab WHERE reg_periksa.kd_pj = penjab.kd_pj AND poliklinik.nm_poli = 'KLINIK MEDICAL CHEK-UP' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli" ;
            $hasil_medchktotal = $koneksi->query($query_medchktotal);


            // KLINIK SP. ANAK NEUROLOGI
            // KLINIK SP. ANAK NEUROLOGI UMUM L & P BARU
            $query_spanakneurologiumumlbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPANAKNEUROLOGIUMUMLBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'UMU' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK SP. ANAK NEUROLOGI' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $query_spanakneurologiumumpbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPANAKNEUROLOGIUMUMPBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'UMU' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK SP. ANAK NEUROLOGI' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $hasil_spanakneurologiumumlbru = $koneksi->query($query_spanakneurologiumumlbru);
            $hasil_spanakneurologiumumpbru = $koneksi->query($query_spanakneurologiumumpbru);

            // KLINIK SP. ANAK NEUROLOGI UMUM L & P LAMA
            $query_spanakneurologiumumllma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPANAKNEUROLOGIUMUMLLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'UMU' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK SP. ANAK NEUROLOGI' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $query_spanakneurologiumumplma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPANAKNEUROLOGIUMUMPLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'UMU' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK SP. ANAK NEUROLOGI' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $hasil_spanakneurologiumumllma = $koneksi->query($query_spanakneurologiumumllma);
            $hasil_spanakneurologiumumplma = $koneksi->query($query_spanakneurologiumumplma);

            // KLINIK SP. ANAK NEUROLOGI BPJS L & P BARU
            $query_spanakneurologibpjslbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPANAKNEUROLOGIBPJSLBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'BPJ' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK SP. ANAK NEUROLOGI' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $query_spanakneurologibpjspbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPANAKNEUROLOGIBPJSPBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'BPJ' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK SP. ANAK NEUROLOGI' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $hasil_spanakneurologibpjslbru = $koneksi->query($query_spanakneurologibpjslbru);
            $hasil_spanakneurologibpjspbru = $koneksi->query($query_spanakneurologibpjspbru);

            // KLINIK SP. ANAK NEUROLOGI BPJS L & P LAMA
            $query_spanakneurologibpjsllma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPANAKNEUROLOGIBPJSLLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'BPJ' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK SP. ANAK NEUROLOGI' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $query_spanakneurologibpjsplma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPANAKNEUROLOGIBPJSPLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'BPJ' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK SP. ANAK NEUROLOGI' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $hasil_spanakneurologibpjsllma = $koneksi->query($query_spanakneurologibpjsllma);
            $hasil_spanakneurologibpjsplma = $koneksi->query($query_spanakneurologibpjsplma);

            // KLINIK SP. ANAK NEUROLOGI JASA RAHARJA L & P BARU
            $query_spanakneurologijasaraharjalbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPANAKNEUROLOGIJASARAHARJALBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'JSR' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK SP. ANAK NEUROLOGI' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $query_spanakneurologijasaraharjapbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPANAKNEUROLOGIJASARAHARJAPBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'JSR' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK SP. ANAK NEUROLOGI' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $hasil_spanakneurologijasaraharjalbru = $koneksi->query($query_spanakneurologijasaraharjalbru);
            $hasil_spanakneurologijasaraharjapbru = $koneksi->query($query_spanakneurologijasaraharjapbru);
            
            // KLINIK SP. ANAK NEUROLOGI JASA RAHARJA L & P LAMA
            $query_spanakneurologijasaraharjallma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPANAKNEUROLOGIJASARAHARJALLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'JSR' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK SP. ANAK NEUROLOGI' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $query_spanakneurologijasaraharjaplma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPANAKNEUROLOGIJASARAHARJAPLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'JSR' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK SP. ANAK NEUROLOGI' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $hasil_spanakneurologijasaraharjallma = $koneksi->query($query_spanakneurologijasaraharjallma);
            $hasil_spanakneurologijasaraharjaplma = $koneksi->query($query_spanakneurologijasaraharjaplma);

            // KLINIK SP. ANAK NEUROLOGI TOTAL KESELURUHAN
            $query_spanakneurologitotal = "SELECT poliklinik.nm_poli, COUNT(reg_periksa.no_rkm_medis) as SPANAKNEUROLOGITOTAL FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien INNER JOIN penjab WHERE reg_periksa.kd_pj = penjab.kd_pj AND poliklinik.nm_poli = 'KLINIK SP. ANAK NEUROLOGI' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli" ;
            $hasil_spanakneurologitotal = $koneksi->query($query_spanakneurologitotal);


            // KLINIK SP. ANAK NEFROLOGI
            // KLINIK SP. ANAK NEFROLOGI UMUM L & P BARU
            $query_spanaknefrologiumumlbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPANAKNEFROLOGIUMUMLBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'UMU' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK SP. ANAK NEFROLOGI' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $query_spanaknefrologiumumpbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPANAKNEFROLOGIUMUMPBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'UMU' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK SP. ANAK NEFROLOGI' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $hasil_spanaknefrologiumumlbru = $koneksi->query($query_spanaknefrologiumumlbru);
            $hasil_spanaknefrologiumumpbru = $koneksi->query($query_spanaknefrologiumumpbru);

            // KLINIK SP. ANAK NEFROLOGI UMUM L & P LAMA
            $query_spanaknefrologiumumllma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPANAKNEFROLOGIUMUMLLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'UMU' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK SP. ANAK NEFROLOGI' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $query_spanaknefrologiumumplma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPANAKNEFROLOGIUMUMPLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'UMU' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK SP. ANAK NEFROLOGI' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $hasil_spanaknefrologiumumllma = $koneksi->query($query_spanaknefrologiumumllma);
            $hasil_spanaknefrologiumumplma = $koneksi->query($query_spanaknefrologiumumplma);

            // KLINIK SP. ANAK NEFROLOGI BPJS L & P BARU
            $query_spanaknefrologibpjslbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPANAKNEFROLOGIBPJSLBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'BPJ' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK SP. ANAK NEFROLOGI' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $query_spanaknefrologibpjspbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPANAKNEFROLOGIBPJSPBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'BPJ' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK SP. ANAK NEFROLOGI' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $hasil_spanaknefrologibpjslbru = $koneksi->query($query_spanaknefrologibpjslbru);
            $hasil_spanaknefrologibpjspbru = $koneksi->query($query_spanaknefrologibpjspbru);

            // KLINIK SP. ANAK NEFROLOGI BPJS L & P LAMA
            $query_spanaknefrologibpjsllma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPANAKNEFROLOGIBPJSLLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'BPJ' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK SP. ANAK NEFROLOGI' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $query_spanaknefrologibpjsplma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPANAKNEFROLOGIBPJSPLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'BPJ' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK SP. ANAK NEFROLOGI' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $hasil_spanaknefrologibpjsllma = $koneksi->query($query_spanaknefrologibpjsllma);
            $hasil_spanaknefrologibpjsplma = $koneksi->query($query_spanaknefrologibpjsplma);

            // KLINIK SP. ANAK NEFROLOGI JASA RAHARJA L & P BARU
            $query_spanaknefrologijasaraharjalbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPANAKNEFROLOGIJASARAHARJALBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'JSR' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK SP. ANAK NEFROLOGI' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $query_spanaknefrologijasaraharjapbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPANAKNEFROLOGIJASARAHARJAPBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'JSR' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK SP. ANAK NEFROLOGI' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $hasil_spanaknefrologijasaraharjalbru = $koneksi->query($query_spanaknefrologijasaraharjalbru);
            $hasil_spanaknefrologijasaraharjapbru = $koneksi->query($query_spanaknefrologijasaraharjapbru);
            
            // KLINIK SP. ANAK NEFROLOGI JASA RAHARJA L & P LAMA
            $query_spanaknefrologijasaraharjallma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPANAKNEFROLOGIJASARAHARJALLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'JSR' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK SP. ANAK NEFROLOGI' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $query_spanaknefrologijasaraharjaplma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPANAKNEFROLOGIJASARAHARJAPLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'JSR' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK SP. ANAK NEFROLOGI' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $hasil_spanaknefrologijasaraharjallma = $koneksi->query($query_spanaknefrologijasaraharjallma);
            $hasil_spanaknefrologijasaraharjaplma = $koneksi->query($query_spanaknefrologijasaraharjaplma);

            // KLINIK SP. ANAK NEFROLOGI TOTAL KESELURUHAN
            $query_spanaknefrologitotal = "SELECT poliklinik.nm_poli, COUNT(reg_periksa.no_rkm_medis) as SPANAKNEFROLOGITOTAL FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien INNER JOIN penjab WHERE reg_periksa.kd_pj = penjab.kd_pj AND poliklinik.nm_poli = 'KLINIK SP. ANAK NEFROLOGI' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli" ;
            $hasil_spanaknefrologitotal = $koneksi->query($query_spanaknefrologitotal);


            // KLINIK SP. ANAK NUTRISI & PENY. METABOLIK
            // KLINIK SP. ANAK NUTRISI & PENY. METABOLIK UMUM L & P BARU
            $query_spanaknutrisiumumlbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPANAKNUTRISIUMUMLBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'UMU' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK SP. ANAK NUTRISI & PENY. METABOLIK' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $query_spanaknutrisiumumpbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPANAKNUTRISIUMUMPBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'UMU' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK SP. ANAK NUTRISI & PENY. METABOLIK' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $hasil_spanaknutrisiumumlbru = $koneksi->query($query_spanaknutrisiumumlbru);
            $hasil_spanaknutrisiumumpbru = $koneksi->query($query_spanaknutrisiumumpbru);

            // KLINIK SP. ANAK NUTRISI & PENY. METABOLIK UMUM L & P LAMA
            $query_spanaknutrisiumumllma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPANAKNUTRISIUMUMLLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'UMU' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK SP. ANAK NUTRISI & PENY. METABOLIK' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $query_spanaknutrisiumumplma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPANAKNUTRISIUMUMPLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'UMU' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK SP. ANAK NUTRISI & PENY. METABOLIK' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $hasil_spanaknutrisiumumllma = $koneksi->query($query_spanaknutrisiumumllma);
            $hasil_spanaknutrisiumumplma = $koneksi->query($query_spanaknutrisiumumplma);

            // KLINIK SP. ANAK NUTRISI & PENY. METABOLIK BPJS L & P BARU
            $query_spanaknutrisibpjslbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPANAKNUTRISIBPJSLBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'BPJ' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK SP. ANAK NUTRISI & PENY. METABOLIK' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $query_spanaknutrisibpjspbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPANAKNUTRISIBPJSPBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'BPJ' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK SP. ANAK NUTRISI & PENY. METABOLIK' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $hasil_spanaknutrisibpjslbru = $koneksi->query($query_spanaknutrisibpjslbru);
            $hasil_spanaknutrisibpjspbru = $koneksi->query($query_spanaknutrisibpjspbru);

            // KLINIK SP. ANAK NUTRISI & PENY. METABOLIK BPJS L & P LAMA
            $query_spanaknutrisibpjsllma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPANAKNUTRISIBPJSLLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'BPJ' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK SP. ANAK NUTRISI & PENY. METABOLIK' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $query_spanaknutrisibpjsplma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPANAKNUTRISIBPJSPLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'BPJ' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK SP. ANAK NUTRISI & PENY. METABOLIK' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $hasil_spanaknutrisibpjsllma = $koneksi->query($query_spanaknutrisibpjsllma);
            $hasil_spanaknutrisibpjsplma = $koneksi->query($query_spanaknutrisibpjsplma);

            // KLINIK SP. ANAK NUTRISI & PENY. METABOLIK JASA RAHARJA L & P BARU
            $query_spanaknutrisijasaraharjalbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPANAKNUTRISIJASARAHARJALBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'JSR' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK SP. ANAK NUTRISI & PENY. METABOLIK' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $query_spanaknutrisijasaraharjapbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPANAKNUTRISIJASARAHARJAPBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'JSR' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK SP. ANAK NUTRISI & PENY. METABOLIK' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $hasil_spanaknutrisijasaraharjalbru = $koneksi->query($query_spanaknutrisijasaraharjalbru);
            $hasil_spanaknutrisijasaraharjapbru = $koneksi->query($query_spanaknutrisijasaraharjapbru);
            
            // KLINIK SP. ANAK NUTRISI & PENY. METABOLIK JASA RAHARJA L & P LAMA
            $query_spanaknutrisijasaraharjallma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPANAKNUTRISIJASARAHARJALLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'JSR' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK SP. ANAK NUTRISI & PENY. METABOLIK' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $query_spanaknutrisijasaraharjaplma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPANAKNUTRISIJASARAHARJAPLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'JSR' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK SP. ANAK NUTRISI & PENY. METABOLIK' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $hasil_spanaknutrisijasaraharjallma = $koneksi->query($query_spanaknutrisijasaraharjallma);
            $hasil_spanaknutrisijasaraharjaplma = $koneksi->query($query_spanaknutrisijasaraharjaplma);

            // KLINIK SP. ANAK NUTRISI & PENY. METABOLIK TOTAL KESELURUHAN
            $query_spanaknutrisitotal = "SELECT poliklinik.nm_poli, COUNT(reg_periksa.no_rkm_medis) as SPANAKNUTRISITOTAL FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien INNER JOIN penjab WHERE reg_periksa.kd_pj = penjab.kd_pj AND poliklinik.nm_poli = 'KLINIK SP. ANAK NUTRISI & PENY. METABOLIK' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli" ;
            $hasil_spanaknutrisitotal = $koneksi->query($query_spanaknutrisitotal);

            
            // KLINIK SP. ANAK KARDIOLOGI
            // KLINIK SP. ANAK KARDIOLOGI UMUM L & P BARU
            $query_spanakkardioumumlbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPANAKKARDIOUMUMLBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'UMU' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK SP. ANAK KARDIOLOGI' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $query_spanakkardioumumpbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPANAKKARDIOUMUMPBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'UMU' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK SP. ANAK KARDIOLOGI' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $hasil_spanakkardioumumlbru = $koneksi->query($query_spanakkardioumumlbru);
            $hasil_spanakkardioumumpbru = $koneksi->query($query_spanakkardioumumpbru);

            // KLINIK SP. ANAK KARDIOLOGI UMUM L & P LAMA
            $query_spanakkardioumumllma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPANAKKARDIOUMUMLLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'UMU' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK SP. ANAK KARDIOLOGI' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $query_spanakkardioumumplma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPANAKKARDIOUMUMPLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'UMU' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK SP. ANAK KARDIOLOGI' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $hasil_spanakkardioumumllma = $koneksi->query($query_spanakkardioumumllma);
            $hasil_spanakkardioumumplma = $koneksi->query($query_spanakkardioumumplma);

            // KLINIK SP. ANAK KARDIOLOGI BPJS L & P BARU
            $query_spanakkardiobpjslbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPANAKKARDIOBPJSLBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'BPJ' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK SP. ANAK KARDIOLOGI' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $query_spanakkardiobpjspbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPANAKKARDIOBPJSPBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'BPJ' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK SP. ANAK KARDIOLOGI' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $hasil_spanakkardiobpjslbru = $koneksi->query($query_spanakkardiobpjslbru);
            $hasil_spanakkardiobpjspbru = $koneksi->query($query_spanakkardiobpjspbru);

            // KLINIK SP. ANAK KARDIOLOGI BPJS L & P LAMA
            $query_spanakkardiobpjsllma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPANAKKARDIOBPJSLLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'BPJ' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK SP. ANAK KARDIOLOGI' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $query_spanakkardiobpjsplma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPANAKKARDIOBPJSPLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'BPJ' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK SP. ANAK KARDIOLOGI' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $hasil_spanakkardiobpjsllma = $koneksi->query($query_spanakkardiobpjsllma);
            $hasil_spanakkardiobpjsplma = $koneksi->query($query_spanakkardiobpjsplma);

            // KLINIK SP. ANAK KARDIOLOGI JASA RAHARJA L & P BARU
            $query_spanakkardiojasaraharjalbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPANAKKARDIOJASARAHARJALBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'JSR' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK SP. ANAK KARDIOLOGI' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $query_spanakkardiojasaraharjapbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPANAKKARDIOJASARAHARJAPBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'JSR' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK SP. ANAK KARDIOLOGI' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $hasil_spanakkardiojasaraharjalbru = $koneksi->query($query_spanakkardiojasaraharjalbru);
            $hasil_spanakkardiojasaraharjapbru = $koneksi->query($query_spanakkardiojasaraharjapbru);
            
            // KLINIK SP. ANAK KARDIOLOGI JASA RAHARJA L & P LAMA
            $query_spanakkardiojasaraharjallma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPANAKKARDIOJASARAHARJALLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'JSR' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK SP. ANAK KARDIOLOGI' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $query_spanakkardiojasaraharjaplma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPANAKKARDIOJASARAHARJAPLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'JSR' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK SP. ANAK KARDIOLOGI' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $hasil_spanakkardiojasaraharjallma = $koneksi->query($query_spanakkardiojasaraharjallma);
            $hasil_spanakkardiojasaraharjaplma = $koneksi->query($query_spanakkardiojasaraharjaplma);

            // KLINIK SP. ANAK KARDIOLOGI TOTAL KESELURUHAN
            $query_spanakkardiototal = "SELECT poliklinik.nm_poli, COUNT(reg_periksa.no_rkm_medis) as SPANAKKARDIOTOTAL FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien INNER JOIN penjab WHERE reg_periksa.kd_pj = penjab.kd_pj AND poliklinik.nm_poli = 'KLINIK SP. ANAK KARDIOLOGI' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli" ;
            $hasil_spanakkardiototal = $koneksi->query($query_spanakkardiototal);


            // KLINIK SP. ANAK RESPIROLOGI
            // KLINIK SP. ANAK RESPIROLOGI UMUM L & P BARU
            $query_spanakrespiumumlbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPANAKRESPIUMUMLBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'UMU' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK SP. ANAK RESPIROLOGI' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $query_spanakrespiumumpbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPANAKRESPIUMUMPBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'UMU' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK SP. ANAK RESPIROLOGI' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $hasil_spanakrespiumumlbru = $koneksi->query($query_spanakrespiumumlbru);
            $hasil_spanakrespiumumpbru = $koneksi->query($query_spanakrespiumumpbru);

            // KLINIK SP. ANAK RESPIROLOGI UMUM L & P LAMA
            $query_spanakrespiumumllma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPANAKRESPIUMUMLLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'UMU' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK SP. ANAK RESPIROLOGI' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $query_spanakrespiumumplma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPANAKRESPIUMUMPLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'UMU' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK SP. ANAK RESPIROLOGI' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $hasil_spanakrespiumumllma = $koneksi->query($query_spanakrespiumumllma);
            $hasil_spanakrespiumumplma = $koneksi->query($query_spanakrespiumumplma);

            // KLINIK SP. ANAK RESPIROLOGI BPJS L & P BARU
            $query_spanakrespibpjslbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPANAKRESPIBPJSLBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'BPJ' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK SP. ANAK RESPIROLOGI' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $query_spanakrespibpjspbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPANAKRESPIBPJSPBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'BPJ' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK SP. ANAK RESPIROLOGI' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $hasil_spanakrespibpjslbru = $koneksi->query($query_spanakrespibpjslbru);
            $hasil_spanakrespibpjspbru = $koneksi->query($query_spanakrespibpjspbru);

            // KLINIK SP. ANAK RESPIROLOGI BPJS L & P LAMA
            $query_spanakrespibpjsllma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPANAKRESPIBPJSLLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'BPJ' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK SP. ANAK RESPIROLOGI' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $query_spanakrespibpjsplma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPANAKRESPIBPJSPLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'BPJ' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK SP. ANAK RESPIROLOGI' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $hasil_spanakrespibpjsllma = $koneksi->query($query_spanakrespibpjsllma);
            $hasil_spanakrespibpjsplma = $koneksi->query($query_spanakrespibpjsplma);

            // KLINIK SP. ANAK RESPIROLOGI JASA RAHARJA L & P BARU
            $query_spanakrespijasaraharjalbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPANAKRESPIJASARAHARJALBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'JSR' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK SP. ANAK RESPIROLOGI' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $query_spanakrespijasaraharjapbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPANAKRESPIJASARAHARJAPBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'JSR' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK SP. ANAK RESPIROLOGI' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $hasil_spanakrespijasaraharjalbru = $koneksi->query($query_spanakrespijasaraharjalbru);
            $hasil_spanakrespijasaraharjapbru = $koneksi->query($query_spanakrespijasaraharjapbru);
            
            // KLINIK SP. ANAK RESPIROLOGI JASA RAHARJA L & P LAMA
            $query_spanakrespijasaraharjallma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPANAKRESPIJASARAHARJALLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'JSR' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK SP. ANAK RESPIROLOGI' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $query_spanakrespijasaraharjaplma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPANAKRESPIJASARAHARJAPLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'JSR' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK SP. ANAK RESPIROLOGI' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $hasil_spanakrespijasaraharjallma = $koneksi->query($query_spanakrespijasaraharjallma);
            $hasil_spanakrespijasaraharjaplma = $koneksi->query($query_spanakrespijasaraharjaplma);

            // KLINIK SP. ANAK RESPIROLOGI TOTAL KESELURUHAN
            $query_spanakrespitotal = "SELECT poliklinik.nm_poli, COUNT(reg_periksa.no_rkm_medis) as SPANAKRESPITOTAL FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien INNER JOIN penjab WHERE reg_periksa.kd_pj = penjab.kd_pj AND poliklinik.nm_poli = 'KLINIK SP. ANAK RESPIROLOGI' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli" ;
            $hasil_spanakrespitotal = $koneksi->query($query_spanakrespitotal);


            // KLINIK SP. ANAK PERINATOLOGI
            // KLINIK SP. ANAK PERINATOLOGI UMUM L & P BARU
            $query_spanakperinaumumlbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPANAKPERINAUMUMLBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'UMU' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK SP. ANAK PERINATOLOGI' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $query_spanakperinaumumpbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPANAKPERINAUMUMPBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'UMU' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK SP. ANAK PERINATOLOGI' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $hasil_spanakperinaumumlbru = $koneksi->query($query_spanakperinaumumlbru);
            $hasil_spanakperinaumumpbru = $koneksi->query($query_spanakperinaumumpbru);

            // KLINIK SP. ANAK PERINATOLOGI UMUM L & P LAMA
            $query_spanakperinaumumllma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPANAKPERINAUMUMLLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'UMU' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK SP. ANAK PERINATOLOGI' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $query_spanakperinaumumplma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPANAKPERINAUMUMPLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'UMU' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK SP. ANAK PERINATOLOGI' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $hasil_spanakperinaumumllma = $koneksi->query($query_spanakperinaumumllma);
            $hasil_spanakperinaumumplma = $koneksi->query($query_spanakperinaumumplma);

            // KLINIK SP. ANAK PERINATOLOGI BPJS L & P BARU
            $query_spanakperinabpjslbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPANAKPERINABPJSLBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'BPJ' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK SP. ANAK PERINATOLOGI' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $query_spanakperinabpjspbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPANAKPERINABPJSPBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'BPJ' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK SP. ANAK PERINATOLOGI' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $hasil_spanakperinabpjslbru = $koneksi->query($query_spanakperinabpjslbru);
            $hasil_spanakperinabpjspbru = $koneksi->query($query_spanakperinabpjspbru);

            // KLINIK SP. ANAK PERINATOLOGI BPJS L & P LAMA
            $query_spanakperinabpjsllma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPANAKPERINABPJSLLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'BPJ' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK SP. ANAK PERINATOLOGI' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $query_spanakperinabpjsplma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPANAKPERINABPJSPLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'BPJ' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK SP. ANAK PERINATOLOGI' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $hasil_spanakperinabpjsllma = $koneksi->query($query_spanakperinabpjsllma);
            $hasil_spanakperinabpjsplma = $koneksi->query($query_spanakperinabpjsplma);

            // KLINIK SP. ANAK PERINATOLOGI JASA RAHARJA L & P BARU
            $query_spanakperinajasaraharjalbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPANAKPERINAJASARAHARJALBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'JSR' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK SP. ANAK PERINATOLOGI' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $query_spanakperinajasaraharjapbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPANAKPERINAJASARAHARJAPBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'JSR' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK SP. ANAK PERINATOLOGI' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $hasil_spanakperinajasaraharjalbru = $koneksi->query($query_spanakperinajasaraharjalbru);
            $hasil_spanakperinajasaraharjapbru = $koneksi->query($query_spanakperinajasaraharjapbru);
            
            // KLINIK SP. ANAK PERINATOLOGI JASA RAHARJA L & P LAMA
            $query_spanakperinajasaraharjallma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPANAKPERINAJASARAHARJALLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'JSR' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK SP. ANAK PERINATOLOGI' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $query_spanakperinajasaraharjaplma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPANAKPERINAJASARAHARJAPLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'JSR' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK SP. ANAK PERINATOLOGI' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $hasil_spanakperinajasaraharjallma = $koneksi->query($query_spanakperinajasaraharjallma);
            $hasil_spanakperinajasaraharjaplma = $koneksi->query($query_spanakperinajasaraharjaplma);

            // KLINIK SP. ANAK PERINATOLOGI TOTAL KESELURUHAN
            $query_spanakperinatotal = "SELECT poliklinik.nm_poli, COUNT(reg_periksa.no_rkm_medis) as SPANAKPERINATOTAL FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien INNER JOIN penjab WHERE reg_periksa.kd_pj = penjab.kd_pj AND poliklinik.nm_poli = 'KLINIK SP. ANAK PERINATOLOGI' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli" ;
            $hasil_spanakperinatotal = $koneksi->query($query_spanakperinatotal);


            // KLINIK SP. PSIKIATRI
            // KLINIK SP. PSIKIATRI UMUM L & P BARU
            $query_sppsikiatriumumlbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPPSIKIATRIUMUMLBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'UMU' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK SP. PSIKIATRI' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $query_sppsikiatriumumpbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPPSIKIATRIUMUMPBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'UMU' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK SP. PSIKIATRI' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $hasil_sppsikiatriumumlbru = $koneksi->query($query_sppsikiatriumumlbru);
            $hasil_sppsikiatriumumpbru = $koneksi->query($query_sppsikiatriumumpbru);

            // KLINIK SP. PSIKIATRI UMUM L & P LAMA
            $query_sppsikiatriumumllma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPPSIKIATRIUMUMLLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'UMU' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK SP. PSIKIATRI' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $query_sppsikiatriumumplma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPPSIKIATRIUMUMPLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'UMU' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK SP. PSIKIATRI' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $hasil_sppsikiatriumumllma = $koneksi->query($query_sppsikiatriumumllma);
            $hasil_sppsikiatriumumplma = $koneksi->query($query_sppsikiatriumumplma);

            // KLINIK SP. PSIKIATRI BPJS L & P BARU
            $query_sppsikiatribpjslbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPPSIKIATRIBPJSLBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'BPJ' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK SP. PSIKIATRI' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $query_sppsikiatribpjspbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPPSIKIATRIBPJSPBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'BPJ' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK SP. PSIKIATRI' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $hasil_sppsikiatribpjslbru = $koneksi->query($query_sppsikiatribpjslbru);
            $hasil_sppsikiatribpjspbru = $koneksi->query($query_sppsikiatribpjspbru);

            // KLINIK SP. PSIKIATRI BPJS L & P LAMA
            $query_sppsikiatribpjsllma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPPSIKIATRIBPJSLLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'BPJ' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK SP. PSIKIATRI' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $query_sppsikiatribpjsplma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPPSIKIATRIBPJSPLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'BPJ' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK SP. PSIKIATRI' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $hasil_sppsikiatribpjsllma = $koneksi->query($query_sppsikiatribpjsllma);
            $hasil_sppsikiatribpjsplma = $koneksi->query($query_sppsikiatribpjsplma);

            // KLINIK SP. PSIKIATRI JASA RAHARJA L & P BARU
            $query_sppsikiatrijasaraharjalbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPPSIKIATRIJASARAHARJALBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'JSR' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK SP. PSIKIATRI' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $query_sppsikiatrijasaraharjapbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPPSIKIATRIJASARAHARJAPBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'JSR' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK SP. PSIKIATRI' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $hasil_sppsikiatrijasaraharjalbru = $koneksi->query($query_sppsikiatrijasaraharjalbru);
            $hasil_sppsikiatrijasaraharjapbru = $koneksi->query($query_sppsikiatrijasaraharjapbru);
            
            // KLINIK SP. PSIKIATRI JASA RAHARJA L & P LAMA
            $query_sppsikiatrijasaraharjallma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPPSIKIATRIJASARAHARJALLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'JSR' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'KLINIK SP. PSIKIATRI' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $query_sppsikiatrijasaraharjaplma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as SPPSIKIATRIJASARAHARJAPLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'JSR' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'KLINIK SP. PSIKIATRI' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $hasil_sppsikiatrijasaraharjallma = $koneksi->query($query_sppsikiatrijasaraharjallma);
            $hasil_sppsikiatrijasaraharjaplma = $koneksi->query($query_sppsikiatrijasaraharjaplma);

            // KLINIK SP. PSIKIATRI TOTAL KESELURUHAN
            $query_sppsikiatritotal = "SELECT poliklinik.nm_poli, COUNT(reg_periksa.no_rkm_medis) as SPPSIKIATRITOTAL FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien INNER JOIN penjab WHERE reg_periksa.kd_pj = penjab.kd_pj AND poliklinik.nm_poli = 'KLINIK SP. PSIKIATRI' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli" ;
            $hasil_sppsikiatritotal = $koneksi->query($query_sppsikiatritotal);


            // UNIT RADIOLOGI
            // UNIT RADIOLOGI UMUM L & P BARU
            $query_radiologiumumlbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as RADIOLOGIUMUMLBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'UMU' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'UNIT RADIOLOGI' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $query_radiologiumumpbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as RADIOLOGIUMUMPBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'UMU' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'UNIT RADIOLOGI' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $hasil_radiologiumumlbru = $koneksi->query($query_radiologiumumlbru);
            $hasil_radiologiumumpbru = $koneksi->query($query_radiologiumumpbru);

            // UNIT RADIOLOGI UMUM L & P LAMA
            $query_radiologiumumllma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as RADIOLOGIUMUMLLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'UMU' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'UNIT RADIOLOGI' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $query_radiologiumumplma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as RADIOLOGIUMUMPLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'UMU' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'UNIT RADIOLOGI' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $hasil_radiologiumumllma = $koneksi->query($query_radiologiumumllma);
            $hasil_radiologiumumplma = $koneksi->query($query_radiologiumumplma);

            // UNIT RADIOLOGI BPJS L & P BARU
            $query_radiologibpjslbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as RADIOLOGIBPJSLBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'BPJ' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'UNIT RADIOLOGI' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $query_radiologibpjspbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as RADIOLOGIBPJSPBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'BPJ' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'UNIT RADIOLOGI' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $hasil_radiologibpjslbru = $koneksi->query($query_radiologibpjslbru);
            $hasil_radiologibpjspbru = $koneksi->query($query_radiologibpjspbru);

            // UNIT RADIOLOGI BPJS L & P LAMA
            $query_radiologibpjsllma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as RADIOLOGIBPJSLLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'BPJ' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'UNIT RADIOLOGI' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $query_radiologibpjsplma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as RADIOLOGIBPJSPLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'BPJ' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'UNIT RADIOLOGI' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $hasil_radiologibpjsllma = $koneksi->query($query_radiologibpjsllma);
            $hasil_radiologibpjsplma = $koneksi->query($query_radiologibpjsplma);

            // UNIT RADIOLOGI JASA RAHARJA L & P BARU
            $query_radiologijasaraharjalbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as RADIOLOGIJASARAHARJALBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'JSR' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'UNIT RADIOLOGI' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $query_radiologijasaraharjapbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as RADIOLOGIJASARAHARJAPBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'JSR' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'UNIT RADIOLOGI' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $hasil_radiologijasaraharjalbru = $koneksi->query($query_radiologijasaraharjalbru);
            $hasil_radiologijasaraharjapbru = $koneksi->query($query_radiologijasaraharjapbru);
            
            // UNIT RADIOLOGI JASA RAHARJA L & P LAMA
            $query_radiologijasaraharjallma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as RADIOLOGIJASARAHARJALLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'JSR' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'UNIT RADIOLOGI' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $query_radiologijasaraharjaplma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as RADIOLOGIJASARAHARJAPLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'JSR' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'UNIT RADIOLOGI' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $hasil_radiologijasaraharjallma = $koneksi->query($query_radiologijasaraharjallma);
            $hasil_radiologijasaraharjaplma = $koneksi->query($query_radiologijasaraharjaplma);

            // UNIT RADIOLOGI TOTAL KESELURUHAN
            $query_radiologitotal = "SELECT poliklinik.nm_poli, COUNT(reg_periksa.no_rkm_medis) as RADIOLOGITOTAL FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien INNER JOIN penjab WHERE reg_periksa.kd_pj = penjab.kd_pj AND poliklinik.nm_poli = 'UNIT RADIOLOGI' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli" ;
            $hasil_radiologitotal = $koneksi->query($query_radiologitotal);


            // UNIT CSSD
            // UNIT CSSD UMUM L & P BARU
            $query_cssdumumlbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as CSSDUMUMLBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'UMU' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'UNIT CSSD' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $query_cssdumumpbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as CSSDUMUMPBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'UMU' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'UNIT CSSD' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $hasil_cssdumumlbru = $koneksi->query($query_cssdumumlbru);
            $hasil_cssdumumpbru = $koneksi->query($query_cssdumumpbru);

            // UNIT CSSD UMUM L & P LAMA
            $query_cssdumumllma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as CSSDUMUMLLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'UMU' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'UNIT CSSD' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $query_cssdumumplma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as CSSDUMUMPLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'UMU' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'UNIT CSSD' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $hasil_cssdumumllma = $koneksi->query($query_cssdumumllma);
            $hasil_cssdumumplma = $koneksi->query($query_cssdumumplma);

            // UNIT CSSD BPJS L & P BARU
            $query_cssdbpjslbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as CSSDBPJSLBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'BPJ' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'UNIT CSSD' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $query_cssdbpjspbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as CSSDBPJSPBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'BPJ' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'UNIT CSSD' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $hasil_cssdbpjslbru = $koneksi->query($query_cssdbpjslbru);
            $hasil_cssdbpjspbru = $koneksi->query($query_cssdbpjspbru);

            // UNIT CSSD BPJS L & P LAMA
            $query_cssdbpjsllma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as CSSDBPJSLLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'BPJ' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'UNIT CSSD' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $query_cssdbpjsplma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as CSSDBPJSPLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'BPJ' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'UNIT CSSD' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $hasil_cssdbpjsllma = $koneksi->query($query_cssdbpjsllma);
            $hasil_cssdbpjsplma = $koneksi->query($query_cssdbpjsplma);

            // UNIT CSSD JASA RAHARJA L & P BARU
            $query_cssdjasaraharjalbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as CSSDJASARAHARJALBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'JSR' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'UNIT CSSD' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $query_cssdjasaraharjapbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as CSSDJASARAHARJAPBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'JSR' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'UNIT CSSD' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $hasil_cssdjasaraharjalbru = $koneksi->query($query_cssdjasaraharjalbru);
            $hasil_cssdjasaraharjapbru = $koneksi->query($query_cssdjasaraharjapbru);
            
            // UNIT CSSD JASA RAHARJA L & P LAMA
            $query_cssdjasaraharjallma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as CSSDJASARAHARJALLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'JSR' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'UNIT CSSD' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $query_cssdjasaraharjaplma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as CSSDJASARAHARJAPLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'JSR' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'UNIT CSSD' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $hasil_cssdjasaraharjallma = $koneksi->query($query_cssdjasaraharjallma);
            $hasil_cssdjasaraharjaplma = $koneksi->query($query_cssdjasaraharjaplma);

            // UNIT CSSD TOTAL KESELURUHAN
            $query_cssdtotal = "SELECT poliklinik.nm_poli, COUNT(reg_periksa.no_rkm_medis) as CSSDTOTAL FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien INNER JOIN penjab WHERE reg_periksa.kd_pj = penjab.kd_pj AND poliklinik.nm_poli = 'UNIT CSSD' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli" ;
            $hasil_cssdtotal = $koneksi->query($query_cssdtotal);


            // INSTALASI FARMASI
            // INSTALASI FARMASI UMUM L & P BARU
            $query_farmasiumumlbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as FARMASIUMUMLBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'UMU' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'INSTALASI FARMASI' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $query_farmasiumumpbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as FARMASIUMUMPBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'UMU' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'INSTALASI FARMASI' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $hasil_farmasiumumlbru = $koneksi->query($query_farmasiumumlbru);
            $hasil_farmasiumumpbru = $koneksi->query($query_farmasiumumpbru);

            // INSTALASI FARMASI UMUM L & P LAMA
            $query_farmasiumumllma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as FARMASIUMUMLLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'UMU' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'INSTALASI FARMASI' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $query_farmasiumumplma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as FARMASIUMUMPLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'UMU' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'INSTALASI FARMASI' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $hasil_farmasiumumllma = $koneksi->query($query_farmasiumumllma);
            $hasil_farmasiumumplma = $koneksi->query($query_farmasiumumplma);

            // INSTALASI FARMASI BPJS L & P BARU
            $query_farmasibpjslbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as FARMASIBPJSLBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'BPJ' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'INSTALASI FARMASI' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $query_farmasibpjspbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as FARMASIBPJSPBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'BPJ' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'INSTALASI FARMASI' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $hasil_farmasibpjslbru = $koneksi->query($query_farmasibpjslbru);
            $hasil_farmasibpjspbru = $koneksi->query($query_farmasibpjspbru);

            // INSTALASI FARMASI BPJS L & P LAMA
            $query_farmasibpjsllma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as FARMASIBPJSLLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'BPJ' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'INSTALASI FARMASI' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $query_farmasibpjsplma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as FARMASIBPJSPLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'BPJ' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'INSTALASI FARMASI' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $hasil_farmasibpjsllma = $koneksi->query($query_farmasibpjsllma);
            $hasil_farmasibpjsplma = $koneksi->query($query_farmasibpjsplma);

            // INSTALASI FARMASI JASA RAHARJA L & P BARU
            $query_farmasijasaraharjalbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as FARMASIJASARAHARJALBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'JSR' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'INSTALASI FARMASI' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $query_farmasijasaraharjapbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as FARMASIJASARAHARJAPBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'JSR' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'INSTALASI FARMASI' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $hasil_farmasijasaraharjalbru = $koneksi->query($query_farmasijasaraharjalbru);
            $hasil_farmasijasaraharjapbru = $koneksi->query($query_farmasijasaraharjapbru);
            
            // INSTALASI FARMASI JASA RAHARJA L & P LAMA
            $query_farmasijasaraharjallma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as FARMASIJASARAHARJALLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'JSR' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'INSTALASI FARMASI' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $query_farmasijasaraharjaplma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as FARMASIJASARAHARJAPLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'JSR' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'INSTALASI FARMASI' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $hasil_farmasijasaraharjallma = $koneksi->query($query_farmasijasaraharjallma);
            $hasil_farmasijasaraharjaplma = $koneksi->query($query_farmasijasaraharjaplma);

            // INSTALASI FARMASI TOTAL KESELURUHAN
            $query_farmasitotal = "SELECT poliklinik.nm_poli, COUNT(reg_periksa.no_rkm_medis) as FARMASITOTAL FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien INNER JOIN penjab WHERE reg_periksa.kd_pj = penjab.kd_pj AND poliklinik.nm_poli = 'INSTALASI FARMASI' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli" ;
            $hasil_farmasitotal = $koneksi->query($query_farmasitotal);


            // INSTALASI HEMODIALISA
            // INSTALASI HEMODIALISA UMUM L & P BARU
            $query_hemodialisaumumlbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as HEMODIALISAUMUMLBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'UMU' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'INSTALASI HEMODIALISA' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $query_hemodialisaumumpbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as HEMODIALISAUMUMPBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'UMU' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'INSTALASI HEMODIALISA' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $hasil_hemodialisaumumlbru = $koneksi->query($query_hemodialisaumumlbru);
            $hasil_hemodialisaumumpbru = $koneksi->query($query_hemodialisaumumpbru);

            // INSTALASI HEMODIALISA UMUM L & P LAMA
            $query_hemodialisaumumllma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as HEMODIALISAUMUMLLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'UMU' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'INSTALASI HEMODIALISA' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $query_hemodialisaumumplma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as HEMODIALISAUMUMPLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'UMU' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'INSTALASI HEMODIALISA' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $hasil_hemodialisaumumllma = $koneksi->query($query_hemodialisaumumllma);
            $hasil_hemodialisaumumplma = $koneksi->query($query_hemodialisaumumplma);

            // INSTALASI HEMODIALISA BPJS L & P BARU
            $query_hemodialisabpjslbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as HEMODIALISABPJSLBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'BPJ' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'INSTALASI HEMODIALISA' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $query_hemodialisabpjspbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as HEMODIALISABPJSPBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'BPJ' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'INSTALASI HEMODIALISA' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $hasil_hemodialisabpjslbru = $koneksi->query($query_hemodialisabpjslbru);
            $hasil_hemodialisabpjspbru = $koneksi->query($query_hemodialisabpjspbru);

            // INSTALASI HEMODIALISA BPJS L & P LAMA
            $query_hemodialisabpjsllma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as HEMODIALISABPJSLLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'BPJ' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'INSTALASI HEMODIALISA' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $query_hemodialisabpjsplma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as HEMODIALISABPJSPLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'BPJ' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'INSTALASI HEMODIALISA' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $hasil_hemodialisabpjsllma = $koneksi->query($query_hemodialisabpjsllma);
            $hasil_hemodialisabpjsplma = $koneksi->query($query_hemodialisabpjsplma);

            // INSTALASI HEMODIALISA JASA RAHARJA L & P BARU
            $query_hemodialisajasaraharjalbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as HEMODIALISAJASARAHARJALBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'JSR' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'INSTALASI HEMODIALISA' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $query_hemodialisajasaraharjapbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as HEMODIALISAJASARAHARJAPBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'JSR' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'INSTALASI HEMODIALISA' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $hasil_hemodialisajasaraharjalbru = $koneksi->query($query_hemodialisajasaraharjalbru);
            $hasil_hemodialisajasaraharjapbru = $koneksi->query($query_hemodialisajasaraharjapbru);
            
            // INSTALASI HEMODIALISA JASA RAHARJA L & P LAMA
            $query_hemodialisajasaraharjallma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as HEMODIALISAJASARAHARJALLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'JSR' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'INSTALASI HEMODIALISA' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $query_hemodialisajasaraharjaplma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as HEMODIALISAJASARAHARJAPLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'JSR' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'INSTALASI HEMODIALISA' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $hasil_hemodialisajasaraharjallma = $koneksi->query($query_hemodialisajasaraharjallma);
            $hasil_hemodialisajasaraharjaplma = $koneksi->query($query_hemodialisajasaraharjaplma);

            // INSTALASI HEMODIALISA TOTAL KESELURUHAN
            $query_hemodialisatotal = "SELECT poliklinik.nm_poli, COUNT(reg_periksa.no_rkm_medis) as HEMODIALISATOTAL FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien INNER JOIN penjab WHERE reg_periksa.kd_pj = penjab.kd_pj AND poliklinik.nm_poli = 'INSTALASI HEMODIALISA' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli" ;
            $hasil_hemodialisatotal = $koneksi->query($query_hemodialisatotal);


            // INSTALASI NEONATUS
            // INSTALASI NEONATUS UMUM L & P BARU
            $query_neonatusumumlbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as NEONATUSUMUMLBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'UMU' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'INSTALASI NEONATUS' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $query_neonatusumumpbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as NEONATUSUMUMPBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'UMU' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'INSTALASI NEONATUS' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $hasil_neonatusumumlbru = $koneksi->query($query_neonatusumumlbru);
            $hasil_neonatusumumpbru = $koneksi->query($query_neonatusumumpbru);

            // INSTALASI NEONATUS UMUM L & P LAMA
            $query_neonatusumumllma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as NEONATUSUMUMLLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'UMU' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'INSTALASI NEONATUS' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $query_neonatusumumplma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as NEONATUSUMUMPLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'UMU' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'INSTALASI NEONATUS' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $hasil_neonatusumumllma = $koneksi->query($query_neonatusumumllma);
            $hasil_neonatusumumplma = $koneksi->query($query_neonatusumumplma);

            // INSTALASI NEONATUS BPJS L & P BARU
            $query_neonatusbpjslbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as NEONATUSBPJSLBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'BPJ' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'INSTALASI NEONATUS' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $query_neonatusbpjspbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as NEONATUSBPJSPBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'BPJ' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'INSTALASI NEONATUS' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $hasil_neonatusbpjslbru = $koneksi->query($query_neonatusbpjslbru);
            $hasil_neonatusbpjspbru = $koneksi->query($query_neonatusbpjspbru);

            // INSTALASI NEONATUS BPJS L & P LAMA
            $query_neonatusbpjsllma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as NEONATUSBPJSLLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'BPJ' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'INSTALASI NEONATUS' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $query_neonatusbpjsplma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as NEONATUSBPJSPLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'BPJ' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'INSTALASI NEONATUS' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $hasil_neonatusbpjsllma = $koneksi->query($query_neonatusbpjsllma);
            $hasil_neonatusbpjsplma = $koneksi->query($query_neonatusbpjsplma);

            // INSTALASI NEONATUS JASA RAHARJA L & P BARU
            $query_neonatusjasaraharjalbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as NEONATUSJASARAHARJALBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'JSR' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'INSTALASI NEONATUS' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $query_neonatusjasaraharjapbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as NEONATUSJASARAHARJAPBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'JSR' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'INSTALASI NEONATUS' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $hasil_neonatusjasaraharjalbru = $koneksi->query($query_neonatusjasaraharjalbru);
            $hasil_neonatusjasaraharjapbru = $koneksi->query($query_neonatusjasaraharjapbru);
            
            // INSTALASI NEONATUS JASA RAHARJA L & P LAMA
            $query_neonatusjasaraharjallma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as NEONATUSJASARAHARJALLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'JSR' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'INSTALASI NEONATUS' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $query_neonatusjasaraharjaplma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as NEONATUSJASARAHARJAPLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'JSR' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'INSTALASI NEONATUS' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $hasil_neonatusjasaraharjallma = $koneksi->query($query_neonatusjasaraharjallma);
            $hasil_neonatusjasaraharjaplma = $koneksi->query($query_neonatusjasaraharjaplma);

            // INSTALASI NEONATUS TOTAL KESELURUHAN
            $query_neonatustotal = "SELECT poliklinik.nm_poli, COUNT(reg_periksa.no_rkm_medis) as NEONATUSTOTAL FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien INNER JOIN penjab WHERE reg_periksa.kd_pj = penjab.kd_pj AND poliklinik.nm_poli = 'INSTALASI NEONATUS' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli" ;
            $hasil_neonatustotal = $koneksi->query($query_neonatustotal);


            // 	INSTALASI INTENSIVE CARE UNIT
            // 	INSTALASI INTENSIVE CARE UNIT UMUM L & P BARU
            $query_icuumumlbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as ICUUMUMLBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'UMU' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'INSTALASI INTENSIVE CARE UNIT' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $query_icuumumpbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as ICUUMUMPBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'UMU' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'INSTALASI INTENSIVE CARE UNIT' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $hasil_icuumumlbru = $koneksi->query($query_icuumumlbru);
            $hasil_icuumumpbru = $koneksi->query($query_icuumumpbru);

            // 	INSTALASI INTENSIVE CARE UNIT UMUM L & P LAMA
            $query_icuumumllma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as ICUUMUMLLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'UMU' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'INSTALASI INTENSIVE CARE UNIT' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $query_icuumumplma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as ICUUMUMPLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'UMU' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'INSTALASI INTENSIVE CARE UNIT' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $hasil_icuumumllma = $koneksi->query($query_icuumumllma);
            $hasil_icuumumplma = $koneksi->query($query_icuumumplma);

            // 	INSTALASI INTENSIVE CARE UNIT BPJS L & P BARU
            $query_icubpjslbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as ICUBPJSLBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'BPJ' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'INSTALASI INTENSIVE CARE UNIT' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $query_icubpjspbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as ICUBPJSPBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'BPJ' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'INSTALASI INTENSIVE CARE UNIT' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $hasil_icubpjslbru = $koneksi->query($query_icubpjslbru);
            $hasil_icubpjspbru = $koneksi->query($query_icubpjspbru);

            // 	INSTALASI INTENSIVE CARE UNIT BPJS L & P LAMA
            $query_icubpjsllma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as ICUBPJSLLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'BPJ' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'INSTALASI INTENSIVE CARE UNIT' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $query_icubpjsplma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as ICUBPJSPLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'BPJ' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'INSTALASI INTENSIVE CARE UNIT' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $hasil_icubpjsllma = $koneksi->query($query_icubpjsllma);
            $hasil_icubpjsplma = $koneksi->query($query_icubpjsplma);

            // 	INSTALASI INTENSIVE CARE UNIT JASA RAHARJA L & P BARU
            $query_icujasaraharjalbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as ICUJASARAHARJALBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'JSR' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'INSTALASI INTENSIVE CARE UNIT' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $query_icujasaraharjapbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as ICUJASARAHARJAPBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'JSR' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'INSTALASI INTENSIVE CARE UNIT' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $hasil_icujasaraharjalbru = $koneksi->query($query_icujasaraharjalbru);
            $hasil_icujasaraharjapbru = $koneksi->query($query_icujasaraharjapbru);
            
            // 	INSTALASI INTENSIVE CARE UNIT JASA RAHARJA L & P LAMA
            $query_icujasaraharjallma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as ICUJASARAHARJALLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'JSR' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'INSTALASI INTENSIVE CARE UNIT' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $query_icujasaraharjaplma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as ICUJASARAHARJAPLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'JSR' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'INSTALASI INTENSIVE CARE UNIT' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $hasil_icujasaraharjallma = $koneksi->query($query_icujasaraharjallma);
            $hasil_icujasaraharjaplma = $koneksi->query($query_icujasaraharjaplma);

            // 	INSTALASI INTENSIVE CARE UNIT TOTAL KESELURUHAN
            $query_icutotal = "SELECT poliklinik.nm_poli, COUNT(reg_periksa.no_rkm_medis) as ICUTOTAL FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien INNER JOIN penjab WHERE reg_periksa.kd_pj = penjab.kd_pj AND poliklinik.nm_poli = 'INSTALASI INTENSIVE CARE UNIT' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli" ;
            $hasil_icutotal = $koneksi->query($query_icutotal);


            //  INSTALASI KAMAR BEDAH
            //  INSTALASI KAMAR BEDAH UMUM L & P BARU
            $query_kmrbedahumumlbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as KMRBEDAHUMUMLBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'UMU' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'INSTALASI KAMAR BEDAH' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $query_kmrbedahumumpbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as KMRBEDAHUMUMPBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'UMU' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'INSTALASI KAMAR BEDAH' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $hasil_kmrbedahumumlbru = $koneksi->query($query_kmrbedahumumlbru);
            $hasil_kmrbedahumumpbru = $koneksi->query($query_kmrbedahumumpbru);

            //  INSTALASI KAMAR BEDAH UMUM L & P LAMA
            $query_kmrbedahumumllma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as KMRBEDAHUMUMLLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'UMU' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'INSTALASI KAMAR BEDAH' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $query_kmrbedahumumplma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as KMRBEDAHUMUMPLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'UMU' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'INSTALASI KAMAR BEDAH' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $hasil_kmrbedahumumllma = $koneksi->query($query_kmrbedahumumllma);
            $hasil_kmrbedahumumplma = $koneksi->query($query_kmrbedahumumplma);

            //  INSTALASI KAMAR BEDAH BPJS L & P BARU
            $query_kmrbedahbpjslbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as KMRBEDAHBPJSLBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'BPJ' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'INSTALASI KAMAR BEDAH' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $query_kmrbedahbpjspbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as KMRBEDAHBPJSPBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'BPJ' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'INSTALASI KAMAR BEDAH' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $hasil_kmrbedahbpjslbru = $koneksi->query($query_kmrbedahbpjslbru);
            $hasil_kmrbedahbpjspbru = $koneksi->query($query_kmrbedahbpjspbru);

            //  INSTALASI KAMAR BEDAH BPJS L & P LAMA
            $query_kmrbedahbpjsllma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as KMRBEDAHBPJSLLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'BPJ' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'INSTALASI KAMAR BEDAH' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $query_kmrbedahbpjsplma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as KMRBEDAHBPJSPLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'BPJ' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'INSTALASI KAMAR BEDAH' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $hasil_kmrbedahbpjsllma = $koneksi->query($query_kmrbedahbpjsllma);
            $hasil_kmrbedahbpjsplma = $koneksi->query($query_kmrbedahbpjsplma);

            //  INSTALASI KAMAR BEDAH JASA RAHARJA L & P BARU
            $query_kmrbedahjasaraharjalbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as KMRBEDAHJASARAHARJALBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'JSR' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'INSTALASI KAMAR BEDAH' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $query_kmrbedahjasaraharjapbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as KMRBEDAHJASARAHARJAPBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'JSR' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'INSTALASI KAMAR BEDAH' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $hasil_kmrbedahjasaraharjalbru = $koneksi->query($query_kmrbedahjasaraharjalbru);
            $hasil_kmrbedahjasaraharjapbru = $koneksi->query($query_kmrbedahjasaraharjapbru);
            
            //  INSTALASI KAMAR BEDAH JASA RAHARJA L & P LAMA
            $query_kmrbedahjasaraharjallma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as KMRBEDAHJASARAHARJALLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'JSR' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'INSTALASI KAMAR BEDAH' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $query_kmrbedahjasaraharjaplma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as KMRBEDAHJASARAHARJAPLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'JSR' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'INSTALASI KAMAR BEDAH' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $hasil_kmrbedahjasaraharjallma = $koneksi->query($query_kmrbedahjasaraharjallma);
            $hasil_kmrbedahjasaraharjaplma = $koneksi->query($query_kmrbedahjasaraharjaplma);

            //  INSTALASI KAMAR BEDAH TOTAL KESELURUHAN
            $query_kmrbedahtotal = "SELECT poliklinik.nm_poli, COUNT(reg_periksa.no_rkm_medis) as KMRBEDAHTOTAL FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien INNER JOIN penjab WHERE reg_periksa.kd_pj = penjab.kd_pj AND poliklinik.nm_poli = 'INSTALASI KAMAR BEDAH' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli" ;
            $hasil_kmrbedahtotal = $koneksi->query($query_kmrbedahtotal);


            //  INSTALSAI LABORATORIUM
            //  INSTALSAI LABORATORIUM UMUM L & P BARU
            $query_labumumlbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as LABUMUMLBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'UMU' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'INSTALSAI LABORATORIUM' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $query_labumumpbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as LABUMUMPBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'UMU' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'INSTALSAI LABORATORIUM' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $hasil_labumumlbru = $koneksi->query($query_labumumlbru);
            $hasil_labumumpbru = $koneksi->query($query_labumumpbru);

            //  INSTALSAI LABORATORIUM UMUM L & P LAMA
            $query_labumumllma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as LABUMUMLLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'UMU' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'INSTALSAI LABORATORIUM' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $query_labumumplma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as LABUMUMPLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'UMU' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'INSTALSAI LABORATORIUM' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $hasil_labumumllma = $koneksi->query($query_labumumllma);
            $hasil_labumumplma = $koneksi->query($query_labumumplma);

            //  INSTALSAI LABORATORIUM BPJS L & P BARU
            $query_labbpjslbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as LABBPJSLBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'BPJ' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'INSTALSAI LABORATORIUM' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $query_labbpjspbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as LABBPJSPBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'BPJ' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'INSTALSAI LABORATORIUM' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $hasil_labbpjslbru = $koneksi->query($query_labbpjslbru);
            $hasil_labbpjspbru = $koneksi->query($query_labbpjspbru);

            //  INSTALSAI LABORATORIUM BPJS L & P LAMA
            $query_labbpjsllma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as LABBPJSLLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'BPJ' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'INSTALSAI LABORATORIUM' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $query_labbpjsplma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as LABBPJSPLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'BPJ' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'INSTALSAI LABORATORIUM' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $hasil_labbpjsllma = $koneksi->query($query_labbpjsllma);
            $hasil_labbpjsplma = $koneksi->query($query_labbpjsplma);

            //  INSTALSAI LABORATORIUM JASA RAHARJA L & P BARU
            $query_labjasaraharjalbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as LABJASARAHARJALBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'JSR' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'INSTALSAI LABORATORIUM' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $query_labjasaraharjapbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as LABJASARAHARJAPBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'JSR' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'INSTALSAI LABORATORIUM' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $hasil_labjasaraharjalbru = $koneksi->query($query_labjasaraharjalbru);
            $hasil_labjasaraharjapbru = $koneksi->query($query_labjasaraharjapbru);
            
            //  INSTALSAI LABORATORIUM JASA RAHARJA L & P LAMA
            $query_labjasaraharjallma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as LABJASARAHARJALLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'JSR' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'INSTALSAI LABORATORIUM' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $query_labjasaraharjaplma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as LABJASARAHARJAPLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'JSR' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'INSTALSAI LABORATORIUM' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $hasil_labjasaraharjallma = $koneksi->query($query_labjasaraharjallma);
            $hasil_labjasaraharjaplma = $koneksi->query($query_labjasaraharjaplma);

            //  INSTALSAI LABORATORIUM TOTAL KESELURUHAN
            $query_labtotal = "SELECT poliklinik.nm_poli, COUNT(reg_periksa.no_rkm_medis) as LABTOTAL FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien INNER JOIN penjab WHERE reg_periksa.kd_pj = penjab.kd_pj AND poliklinik.nm_poli = 'INSTALSAI LABORATORIUM' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli" ;
            $hasil_labtotal = $koneksi->query($query_labtotal);


            //  INSTALASI NICU
            //  INSTALASI NICU UMUM L & P BARU
            $query_nicuumumlbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as NICUUMUMLBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'UMU' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'INSTALASI NICU' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $query_nicuumumpbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as NICUUMUMPBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'UMU' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'INSTALASI NICU' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $hasil_nicuumumlbru = $koneksi->query($query_nicuumumlbru);
            $hasil_nicuumumpbru = $koneksi->query($query_nicuumumpbru);

            //  INSTALASI NICU UMUM L & P LAMA
            $query_nicuumumllma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as NICUUMUMLLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'UMU' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'INSTALASI NICU' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $query_nicuumumplma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as NICUUMUMPLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'UMU' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'INSTALASI NICU' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $hasil_nicuumumllma = $koneksi->query($query_nicuumumllma);
            $hasil_nicuumumplma = $koneksi->query($query_nicuumumplma);

            //  INSTALASI NICU BPJS L & P BARU
            $query_nicubpjslbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as NICUBPJSLBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'BPJ' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'INSTALASI NICU' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $query_nicubpjspbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as NICUBPJSPBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'BPJ' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'INSTALASI NICU' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $hasil_nicubpjslbru = $koneksi->query($query_nicubpjslbru);
            $hasil_nicubpjspbru = $koneksi->query($query_nicubpjspbru);

            //  INSTALASI NICU BPJS L & P LAMA
            $query_nicubpjsllma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as NICUBPJSLLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'BPJ' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'INSTALASI NICU' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $query_nicubpjsplma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as NICUBPJSPLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'BPJ' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'INSTALASI NICU' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $hasil_nicubpjsllma = $koneksi->query($query_nicubpjsllma);
            $hasil_nicubpjsplma = $koneksi->query($query_nicubpjsplma);

            //  INSTALASI NICU JASA RAHARJA L & P BARU
            $query_nicujasaraharjalbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as NICUJASARAHARJALBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'JSR' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'INSTALASI NICU' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $query_nicujasaraharjapbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as NICUJASARAHARJAPBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'JSR' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'INSTALASI NICU' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $hasil_nicujasaraharjalbru = $koneksi->query($query_nicujasaraharjalbru);
            $hasil_nicujasaraharjapbru = $koneksi->query($query_nicujasaraharjapbru);
            
            //  INSTALASI NICU JASA RAHARJA L & P LAMA
            $query_nicujasaraharjallma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as NICUJASARAHARJALLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'JSR' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'INSTALASI NICU' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $query_nicujasaraharjaplma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as NICUJASARAHARJAPLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'JSR' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'INSTALASI NICU' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $hasil_nicujasaraharjallma = $koneksi->query($query_nicujasaraharjallma);
            $hasil_nicujasaraharjaplma = $koneksi->query($query_nicujasaraharjaplma);

            //  INSTALASI NICU TOTAL KESELURUHAN
            $query_nicutotal = "SELECT poliklinik.nm_poli, COUNT(reg_periksa.no_rkm_medis) as NICUTOTAL FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien INNER JOIN penjab WHERE reg_periksa.kd_pj = penjab.kd_pj AND poliklinik.nm_poli = 'INSTALASI NICU' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli" ;
            $hasil_nicutotal = $koneksi->query($query_nicutotal);


            //  INSTALASI DOKPOL
            //  INSTALASI DOKPOL UMUM L & P BARU
            $query_dokpolumumlbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as DOKPOLUMUMLBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'UMU' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'INSTALASI DOKPOL' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $query_dokpolumumpbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as DOKPOLUMUMPBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'UMU' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'INSTALASI DOKPOL' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $hasil_dokpolumumlbru = $koneksi->query($query_dokpolumumlbru);
            $hasil_dokpolumumpbru = $koneksi->query($query_dokpolumumpbru);

            //  INSTALASI DOKPOL UMUM L & P LAMA
            $query_dokpolumumllma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as DOKPOLUMUMLLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'UMU' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'INSTALASI DOKPOL' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $query_dokpolumumplma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as DOKPOLUMUMPLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'UMU' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'INSTALASI DOKPOL' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $hasil_dokpolumumllma = $koneksi->query($query_dokpolumumllma);
            $hasil_dokpolumumplma = $koneksi->query($query_dokpolumumplma);

            //  INSTALASI DOKPOL BPJS L & P BARU
            $query_dokpolbpjslbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as DOKPOLBPJSLBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'BPJ' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'INSTALASI DOKPOL' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $query_dokpolbpjspbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as DOKPOLBPJSPBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'BPJ' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'INSTALASI DOKPOL' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $hasil_dokpolbpjslbru = $koneksi->query($query_dokpolbpjslbru);
            $hasil_dokpolbpjspbru = $koneksi->query($query_dokpolbpjspbru);

            //  INSTALASI DOKPOL BPJS L & P LAMA
            $query_dokpolbpjsllma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as DOKPOLBPJSLLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'BPJ' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'INSTALASI DOKPOL' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $query_dokpolbpjsplma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as DOKPOLBPJSPLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'BPJ' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'INSTALASI DOKPOL' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $hasil_dokpolbpjsllma = $koneksi->query($query_dokpolbpjsllma);
            $hasil_dokpolbpjsplma = $koneksi->query($query_dokpolbpjsplma);

            //  INSTALASI DOKPOL JASA RAHARJA L & P BARU
            $query_dokpoljasaraharjalbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as DOKPOLJASARAHARJALBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'JSR' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'INSTALASI DOKPOL' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $query_dokpoljasaraharjapbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as DOKPOLJASARAHARJAPBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'JSR' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'INSTALASI DOKPOL' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' ";
            $hasil_dokpoljasaraharjalbru = $koneksi->query($query_dokpoljasaraharjalbru);
            $hasil_dokpoljasaraharjapbru = $koneksi->query($query_dokpoljasaraharjapbru);
            
            //  INSTALASI DOKPOL JASA RAHARJA L & P LAMA
            $query_dokpoljasaraharjallma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as DOKPOLJASARAHARJALLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'JSR' AND pasien.jk = 'L' AND poliklinik.nm_poli = 'INSTALASI DOKPOL' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $query_dokpoljasaraharjaplma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as DOKPOLJASARAHARJAPLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'JSR' AND pasien.jk = 'P' AND poliklinik.nm_poli = 'INSTALASI DOKPOL' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' ";
            $hasil_dokpoljasaraharjallma = $koneksi->query($query_dokpoljasaraharjallma);
            $hasil_dokpoljasaraharjaplma = $koneksi->query($query_dokpoljasaraharjaplma);

            //  INSTALASI DOKPOL TOTAL KESELURUHAN
            $query_dokpoltotal = "SELECT poliklinik.nm_poli, COUNT(reg_periksa.no_rkm_medis) as DOKPOLTOTAL FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien INNER JOIN penjab WHERE reg_periksa.kd_pj = penjab.kd_pj AND poliklinik.nm_poli = 'INSTALASI DOKPOL' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli" ;
            $hasil_dokpoltotal = $koneksi->query($query_dokpoltotal);


            //  TOTAL KESELURUHAN UMUM BARU SEMUA POLI
            $query_totalumumlbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as TOTALUMUMLBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'UMU' AND pasien.jk = 'L' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' " ;
            $query_totalumumpbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as TOTALUMUMPBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'UMU' AND pasien.jk = 'P' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' " ;
            $hasil_totalumumlbru = $koneksi->query($query_totalumumlbru);
            $hasil_totalumumpbru = $koneksi->query($query_totalumumpbru);

            //  TOTAL KESELURUHAN UMUM LAMA SEMUA POLI
            $query_totalumumllma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as TOTALUMUMLLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'UMU' AND pasien.jk = 'L' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' " ;
            $query_totalumumplma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as TOTALUMUMPLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'UMU' AND pasien.jk = 'P' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' " ;
            $hasil_totalumumllma = $koneksi->query($query_totalumumllma);
            $hasil_totalumumplma = $koneksi->query($query_totalumumplma);

            //  TOTAL KESELURUHAN BPJS BARU SEMUA POLI
            $query_totalbpjslbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as TOTALBPJSLBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'BPJ' AND pasien.jk = 'L' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' " ;
            $query_totalbpjspbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as TOTALBPJSPBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'BPJ' AND pasien.jk = 'P' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' " ;
            $hasil_totalbpjslbru = $koneksi->query($query_totalbpjslbru);
            $hasil_totalbpjspbru = $koneksi->query($query_totalbpjspbru);

            //  TOTAL KESELURUHAN BPJS LAMA SEMUA POLI
            $query_totalbpjsllma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as TOTALBPJSLLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'BPJ' AND pasien.jk = 'L' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' " ;
            $query_totalbpjsplma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as TOTALBPJSPLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'BPJ' AND pasien.jk = 'P' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' " ;
            $hasil_totalbpjsllma = $koneksi->query($query_totalbpjsllma);
            $hasil_totalbpjsplma = $koneksi->query($query_totalbpjsplma);

            //  TOTAL KESELURUHAN JASA RAHARJA BARU SEMUA POLI
            $query_totaljasaraharjalbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as TOTALJASARAHARJALBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'JSR' AND pasien.jk = 'L' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' " ;
            $query_totaljasaraharjapbru = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as TOTALJASARAHARJAPBRU FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'JSR' AND pasien.jk = 'P' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Baru' " ;
            $hasil_totaljasaraharjalbru = $koneksi->query($query_totaljasaraharjalbru);
            $hasil_totaljasaraharjapbru = $koneksi->query($query_totaljasaraharjapbru);

            //  TOTAL KESELURUHAN JASA RAHARJA LAMA SEMUA POLI
            $query_totaljasaraharjallma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as TOTALJASARAHARJALLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'JSR' AND pasien.jk = 'L' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' " ;
            $query_totaljasaraharjaplma = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as TOTALJASARAHARJAPLMA FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.kd_pj = 'JSR' AND pasien.jk = 'P' AND reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli AND reg_periksa.stts_daftar='Lama' " ;
            $hasil_totaljasaraharjallma = $koneksi->query($query_totaljasaraharjallma);
            $hasil_totaljasaraharjaplma = $koneksi->query($query_totaljasaraharjaplma);

            //  TOTAL KESELURUHAN SEMUA POLI
            $query_totalpoli = "SELECT poliklinik.nm_poli, count(reg_periksa.kd_pj) as TOTALPOLI FROM reg_periksa INNER JOIN poliklinik INNER JOIN pasien WHERE reg_periksa.tgl_registrasi = CURDATE() AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli=poliklinik.kd_poli" ;
            $hasil_totalpoli = $koneksi->query($query_totalpoli);