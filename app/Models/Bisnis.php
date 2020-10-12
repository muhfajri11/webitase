<?php 

class Bisnis {

	private $db;

	public function __construct()
	{
		$this->db = Database::getInstance();
	}

	public function index()
	{
		return $this->db->getAll('bisnis_team');
	}

	public function All($select)
	{
		return $this->db->getAll($select);
	}

	public function insert_register($get = [])
	{
		$data = [];
		$i = 0;
		foreach ($get as $key) {
			$data[$i] =  $this->db->no_inject($key);
			$i++;
		}

		$count = count($data);

		$input_1 = [NULL, $data[0], $data[1], $data[2], '', '', ''];
		$result_1 = $this->db->insert('bisnis_team', $input_1);

		if(!$result_1)
		{
			echo "Insert Data Awal Gagal ...";
		}

		$getdata = $this->db->getWhere('bisnis_team', ['namateam' => $data[0]]);
		$conv = (int)$getdata->id_team;

		switch ($count) {
			case 11:	

				$input_2 = [NULL, $conv, $data[3], $data[4], $data[5], $data[6], $data[7], $data[8], $data[9], $data[10], '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''];
				$result_2 = $this->db->insert('bisnis_anggota', $input_2);

				if(!$result_2)
				{
					echo "Insert Data Akhir Gagal ...";
				} else if($result_1 && $result_2)
				{

					$ke = $data[10];
					$subjek = "Pendaftaran Lomba Bisnis Plan ITASE 2.0";
					$pesan = "Selamat anda sudah melakukan registrasi pendaftaran. Silahkan lakukan pembayaran dan kirim bukti pembayaran pada laman Bisnis Plan.";

					require_once '../app/Core/PHPMailer.php';
					require_once '../app/Core/SMTP.php';
					require_once '../app/Core/Exception.php';

					$mail = new PHPMailer\PHPMailer\PHPMailer();

					$mail->isSMTP();
					$mail->Host = "smtp.gmail.com";
					$mail->SMTPAuth = true;
					$mail->Username = "itasehmsi@gmail.com";
					$mail->Password = "itasehmsiittelkom";
					$mail->Port = 587;
					$mail->SMTPSecure = "tls";
					$mail->SMTPOptions = array(
						'ssl' => array(
							'verify_peer' => false,
							'verify_peer_name' => false,
							'allow_self_signed' => true
						)
					);

					$mail->isHTML(false);
					$mail->setFrom($ke, "Admin ITASE 2.0");
					$mail->addAddress($ke);
					$mail->Subject = $subjek;
					$mail->Body = $pesan;

					if ($mail->send()) {
						echo "Pendaftaran Berhasil <br> Silahkan lakukan pembayaran ...";
					} else {
						echo "Something Wrong : <br>". $mail->ErrorInfo;
					}

					// echo "Berhasil Input Data ...";
				}

				break;
			case 19:

				$input_2 = [NULL, $conv, $data[3], $data[4], $data[5], $data[6], $data[7], $data[8], $data[9], $data[10], $data[11], $data[12], $data[13], $data[14], $data[15], $data[16], $data[17], $data[18], '', '', '', '', '', '', '',''];

				$result_2 = $this->db->insert('bisnis_anggota', $input_2);

				if(!$result_2)
				{
					echo "Insert Data Akhir Gagal ...";
				} else if($result_1 && $result_2)
				{
					$ke = $data[10];
					$subjek = "Pendaftaran Lomba Bisnis Plan ITASE 2.0";
					$pesan = "Selamat anda sudah melakukan registrasi pendaftaran. Silahkan lakukan pembayaran dan kirim bukti pembayaran pada laman Bisnis Plan.";

					require_once '../app/Core/PHPMailer.php';
					require_once '../app/Core/SMTP.php';
					require_once '../app/Core/Exception.php';

					$mail = new PHPMailer\PHPMailer\PHPMailer();

					$mail->isSMTP();
					$mail->Host = "smtp.gmail.com";
					$mail->SMTPAuth = true;
					$mail->Username = "itasehmsi@gmail.com";
					$mail->Password = "itasehmsiittelkom";
					$mail->Port = 587;
					$mail->SMTPSecure = "tls";
					$mail->SMTPOptions = array(
						'ssl' => array(
							'verify_peer' => false,
							'verify_peer_name' => false,
							'allow_self_signed' => true
						)
					);

					$mail->isHTML(false);
					$mail->setFrom($ke, "Admin ITASE 2.0");
					$mail->addAddress($ke);
					$mail->Subject = $subjek;
					$mail->Body = $pesan;

					if ($mail->send()) {
						echo "Pendaftaran Berhasil <br> Silahkan lakukan pembayaran ...";
					} else {
						echo "Something Wrong : <br>". $mail->ErrorInfo;
					}

					// echo "Berhasil Input Data ...";
				}

				break;
			case 27:

				$input_2 = [NULL, $conv, $data[3], $data[4], $data[5], $data[6], $data[7], $data[8], $data[9], $data[10], $data[11], $data[12], $data[13], $data[14], $data[15], $data[16], $data[17], $data[18], $data[19], $data[20], $data[21], $data[22], $data[23], $data[24], $data[25],$data[26]];
				$result_2 = $this->db->insert('bisnis_anggota', $input_2);

				if(!$result_2)
				{
					echo "Insert Data Akhir Gagal ...";
				} else if($result_1 && $result_2)
				{
					$ke = $data[10];
					$subjek = "Pendaftaran Lomba Bisnis Plan ITASE 2.0";
					$pesan = "Selamat anda sudah melakukan registrasi pendaftaran. Silahkan lakukan pembayaran dan kirim bukti pembayaran pada laman bisnis Plan.";

					require_once '../app/Core/PHPMailer.php';
					require_once '../app/Core/SMTP.php';
					require_once '../app/Core/Exception.php';

					$mail = new PHPMailer\PHPMailer\PHPMailer();

					$mail->isSMTP();
					$mail->Host = "smtp.gmail.com";
					$mail->SMTPAuth = true;
					$mail->Username = "itasehmsi@gmail.com";
					$mail->Password = "itasehmsiittelkom";
					$mail->Port = 587;
					$mail->SMTPSecure = "tls";
					$mail->SMTPOptions = array(
						'ssl' => array(
							'verify_peer' => false,
							'verify_peer_name' => false,
							'allow_self_signed' => true
						)
					);

					$mail->isHTML(false);
					$mail->setFrom($ke, "Admin ITASE 2.0");
					$mail->addAddress($ke);
					$mail->Subject = $subjek;
					$mail->Body = $pesan;

					if ($mail->send()) {
						echo "Pendaftaran Berhasil <br> Silahkan lakukan pembayaran ...";
					} else {
						echo "Something Wrong : <br>". $mail->ErrorInfo;
					}
					
					// echo "Berhasil Input Data ...";
				}

				break;
			default:
				echo "Error";
				break;
		}
	}

	public function struct_img($get = [], $path)
	{
		$bool = false;

		$getdata = $this->db->getAll('bisnis_team');

		foreach ($getdata as $key) {

			if($get['namateam'] == $key->namateam)
			{
				$getdata2 = $this->db->getWhere('bisnis_anggota',['id_team' => $key->id_team]);
				$ke = $getdata2->email_ketua;
				$bool = true;
			}

		}

		if($bool)
		{
			$data = ['namateam' => $get['namateam']];

			$result = $this->db->update('bisnis_team', $get, $data);

			if(!$result)
			{
				echo "Error data ...";
			} else if($result)
			{
				$subjek = "Bukti Pembayaran Bisnis Plan ITASE 2.0";
				$pesan = "Team ".$get['namateam']." berhasil mengirimkan bukti pembayaran Bisnis Plan. Silahkan tunggu konfirmasi dari kami untuk mendapatkan token.";

				require_once '../app/Core/PHPMailer.php';
				require_once '../app/Core/SMTP.php';
				require_once '../app/Core/Exception.php';

				$mail = new PHPMailer\PHPMailer\PHPMailer();

				$mail->isSMTP();
				$mail->Host = "smtp.gmail.com";
				$mail->SMTPAuth = true;
				$mail->Username = "itasehmsi@gmail.com";
				$mail->Password = "itasehmsiittelkom";
				$mail->Port = 587;
				$mail->SMTPSecure = "tls";
				$mail->SMTPOptions = array(
					'ssl' => array(
						'verify_peer' => false,
						'verify_peer_name' => false,
						'allow_self_signed' => true
					)
				);

				$mail->isHTML(false);
				$mail->setFrom($ke, "Admin ITASE 2.0");
				$mail->addAddress($ke);
				$mail->Subject = $subjek;
				$mail->Body = $pesan;

				if ($mail->send()) {
					echo "Berhasil mengirim bukti pembayaran<br> Silahkan tunggu konfirmasi kami pada email atau Whatsapp anda ...";
				} else {
					echo "Something Wrong : <br>". $mail->ErrorInfo;
				}
				
			}

		} else {
			unlink($path);

			echo "Team ".$get['namateam']." tidak terdaftar ...";
		}
	}

	public function proposaldb($get = [], $path)
	{
		$bool = false;

		$getdata = $this->db->getAll('bisnis_team');

		foreach ($getdata as $key) {

			if($get['token'] == $key->token)
			{
				$getdata2 = $this->db->getWhere('bisnis_anggota',['id_team' => $key->id_team]);
				$ke = $getdata2->email_ketua;
				$team = $key->nama_team;
				$bool = true;
			}

		}

		if($bool)
		{
			$data = ['token' => $get['token']];

			$result = $this->db->update('bisnis_team', $get, $data);

			if(!$result)
			{
				echo "Error data ...";
			} else if($result)
			{
				$subjek = "Proposal Bisnis Plan ITASE 2.0";
				$pesan = "Team ".$team." berhasil mengirimkan proposal Bisnis Plan. Proposal ".$team." akan kami seleksi. Terima Kasih.";

				require_once '../app/Core/PHPMailer.php';
				require_once '../app/Core/SMTP.php';
				require_once '../app/Core/Exception.php';

				$mail = new PHPMailer\PHPMailer\PHPMailer();

				$mail->isSMTP();
				$mail->Host = "smtp.gmail.com";
				$mail->SMTPAuth = true;
				$mail->Username = "itasehmsi@gmail.com";
				$mail->Password = "itasehmsiittelkom";
				$mail->Port = 587;
				$mail->SMTPSecure = "tls";
				$mail->SMTPOptions = array(
					'ssl' => array(
						'verify_peer' => false,
						'verify_peer_name' => false,
						'allow_self_signed' => true
					)
				);

				$mail->isHTML(false);
				$mail->setFrom($ke, "Admin ITASE 2.0");
				$mail->addAddress($ke);
				$mail->Subject = $subjek;
				$mail->Body = $pesan;

				if ($mail->send()) {
					echo "Berhasil mengirim proposal<br> Proposal ".$team." akan kami seleksi.";
				} else {
					echo "Something Wrong : <br>". $mail->ErrorInfo;
				}
				//echo "Berhasil mengirim proposal<br> Silahkan tunggu konfirmasi kami pada email atau Whatsapp anda ...";
			}

		} else {
			unlink($path);

			echo "Token tidak terdaftar ...";
		}
	}

}

?>