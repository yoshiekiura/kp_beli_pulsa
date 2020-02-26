<?php 

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "beli_pulsa";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

	/* Contoh Respon */
	// {
	//     "status": "200",
	//     "msg": "Data ditemukan.",
	//     "data": [
	//         {
	//             "nama": "Putnam",
	//             "no_rekening": "1234566",
	//             "atas_nama": "Budi Harianto",
	//             "bank": "BCA"
	//         }
	//     ]
	// }
	/* End Of Contoh Respon */

	$base_url	= "https://flopipay.com/api.php"; // Server API
	$url_server = $base_url . "/rekening"; // URL API
	$data = array(
		"key"	=> "5b916684d9bb389a03a331db262cc31d", // Key API
	);

	$ch = curl_init();
	$param_curl = array(
    	CURLOPT_URL             => $url_server,
    	CURLOPT_POST            => true,
	    CURLOPT_POSTFIELDS      => http_build_query($data),
	    CURLOPT_SSL_VERIFYHOST  => 0,
	    CURLOPT_SSL_VERIFYPEER  => 0,
	    CURLOPT_RETURNTRANSFER  => true,
	    CURLOPT_HEADER          => false
	);
	curl_setopt_array($ch, $param_curl);
	$result = curl_exec($ch);
	curl_close($ch);

	if(!empty($result))
	{
		$respon = json_decode($result);
		// var_dump($respon);
		if($respon->status == '200') // Jika Sukses, Kode 200 untuk sukses, 201 untuk gagal.
		{
			foreach($respon->data as $key => $c)
			{
				$nama 		 = $c->nama;
				$no_rekening = $c->no_rekening;
				$atas_nama   = $c->atas_nama;
				$bank 		 = $c->bank;

				$insert = "INSERT INTO banks (nama, no_rekening, atas_nama, bank) VALUES 
              	('$nama','$no_rekening','$atas_nama','$bank')";   
    			$conn->query($insert);
			}
		}
	}
	$conn->close();

?>