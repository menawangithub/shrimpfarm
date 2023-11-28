<?php
    $id = $_GET['id'];
    $jenis_panen = $_GET['jenis_panen'];
    $perkiraan_panen = $_GET['perkiraan_panen'];
    $ukuran_panen = $_GET['ukuran_panen'];
    $tonase_panen = $_GET['tonase_panen'];
    $usia_budidaya = $_GET['usia_panen'];
    $harga_harapan = $_GET['harga_panen'];
    $lokasi_budidaya = $_GET['lokasi_panen'];
    
    if($id == ''){
        $url = 'https://asia-south1.gcp.data.mongodb-api.com/app/application-0-rugju/endpoint/insertPanen?jenis_panen='. urlencode($jenis_panen) . 
        '&perkiraan_panen=' . urlencode($perkiraan_panen). 
        '&ukuran_panen=' . urlencode($ukuran_panen). 
        '&tonase_panen=' . urlencode($tonase_panen).
        '&usia_budidaya=' . urlencode($usia_budidaya).
        '&harga_harapan=' . urlencode($harga_harapan).
        '&lokasi_budidaya=' . urlencode($lokasi_budidaya);
        $customrequest = 'POST';
    }else{
        $url = 'https://asia-south1.gcp.data.mongodb-api.com/app/application-0-rugju/endpoint/updateDataPanen?id='.urlencode($id)
        .'&jenis_panen='. urlencode($jenis_panen). 
        '&perkiraan_panen=' . urlencode($perkiraan_panen). 
        '&ukuran_panen=' . urlencode($ukuran_panen). 
        '&tonase_panen=' . urlencode($tonase_panen).
        '&usia_budidaya=' . urlencode($usia_budidaya).
        '&harga_harapan=' . urlencode($harga_harapan).
        '&lokasi_budidaya=' . urlencode($lokasi_budidaya);

        $customrequest = 'PUT';
    }
    
    $cUrl = curl_init();
    
    $options = array(
        CURLOPT_URL => $url,
        CURLOPT_CUSTOMREQUEST => $customrequest
    );
    
    curl_setopt_array($cUrl, $options);
    
    $response = curl_exec($cUrl);
    
    curl_close($cUrl);
    
    header('Location: ../../html/tables-basic.php');
    
?>