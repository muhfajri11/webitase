<?php 

class Vlog {

	private $db;

	public function __construct()
	{
		$this->db = Database::getInstance();
	}

	public function getUrl()
	{
		return $this->db->getAll('rulebook');
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
		
		$input_1 = [NULL, $data[0], $data[1], $data[2], $data[3], ''];
		$result_1 = $this->db->insert('vlog_team', $input_1);

		if(!$result_1)
		{
			echo "Insert Data Awal Gagal ...";
		}

		$getdata = $this->db->getWhere('vlog_team', ['namateam' => $data[0]]);
		$conv = (int)$getdata->id_vlog;

		switch ($count) {
			case 12:	

				$input_2 = [NULL, $conv, $data[4], $data[5], $data[6], $data[7], $data[8], $data[9], $data[10], $data[11], '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '' , ''];
				$result_2 = $this->db->insert('vlog_anggota', $input_2);

				if(!$result_2)
				{
					echo "Insert Data Akhir Gagal ...";
				} else if($result_1 && $result_2)
				{

					$ke = $data[11];
					$subjek = "Pendaftaran Lomba Vlog ITASE 2.0";
					$pesan = "Selamat anda sudah melakukan registrasi pendaftaran. Silahkan lakukan pembayaran dan kirim bukti pembayaran pada laman Vlog Competition.";

					require_once '../app/Core/PHPMailer.php';
					require_once '../app/Core/SMTP.php';
					require_once '../app/Core/Exception.php';

					$mail = new PHPMailer\PHPMailer\PHPMailer();

					$mail->isSMTP();
					$mail->Host = "smtp.gmail.com";
					$mail->SMTPAuth = true;
					$mail->Username = "wsolihatin@gmail.com";
					$mail->Password = "30desember1999";
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
					$mail->setFrom($ke, "Windi Solihatin");
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
			case 20: // 1 anggota

				$input_2 = [NULL, $conv, $data[4], $data[5], $data[6], $data[7], $data[8], $data[9], $data[10], $data[11], $data[12], $data[13], $data[14], $data[15], $data[16], $data[17], $data[18], $data[19], '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '' , ''];
				$result_2 = $this->db->insert('vlog_anggota', $input_2);

				if(!$result_2)
				{
					echo "Insert Data Akhir Gagal ...";
				} else if($result_1 && $result_2)
				{
					$ke = $data[11];
					$subjek = "Pendaftaran Lomba Vlog ITASE 2.0";
					$pesan = "Selamat anda sudah melakukan registrasi pendaftaran. Silahkan lakukan pembayaran dan kirim bukti pembayaran pada laman Vlog Competition.";

					require_once '../app/Core/PHPMailer.php';
					require_once '../app/Core/SMTP.php';
					require_once '../app/Core/Exception.php';

					$mail = new PHPMailer\PHPMailer\PHPMailer();

					$mail->isSMTP();
					$mail->Host = "smtp.gmail.com";
					$mail->SMTPAuth = true;
					$mail->Username = "wsolihatin@gmail.com";
					$mail->Password = "30desember1999";
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
					$mail->setFrom($ke, "Windi Solihatin");
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
			case 28: // 2 anggota

				$input_2 = [NULL, $conv, $data[4], $data[5], $data[6], $data[7], $data[8], $data[9], $data[10], $data[11], $data[12], $data[13], $data[14], $data[15], $data[16], $data[17], $data[18], $data[19], $data[20], $data[21], $data[22], $data[23], $data[24], $data[25], $data[26], $data[27], '', '', '', '', '', '', '', '', '', '', '', '', '', '', '' , ''];
				$result_2 = $this->db->insert('vlog_anggota', $input_2);

				if(!$result_2)
				{
					echo "Insert Data Akhir Gagal ...";
				} else if($result_1 && $result_2)
				{
					$ke = $data[11];
					$subjek = "Pendaftaran Lomba Vlog ITASE 2.0";
					$pesan = "Selamat anda sudah melakukan registrasi pendaftaran. Silahkan lakukan pembayaran dan kirim bukti pembayaran pada laman Vlog Competition.";

					require_once '../app/Core/PHPMailer.php';
					require_once '../app/Core/SMTP.php';
					require_once '../app/Core/Exception.php';

					$mail = new PHPMailer\PHPMailer\PHPMailer();

					$mail->isSMTP();
					$mail->Host = "smtp.gmail.com";
					$mail->SMTPAuth = true;
					$mail->Username = "wsolihatin@gmail.com";
					$mail->Password = "30desember1999";
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
					$mail->setFrom($ke, "Windi Solihatin");
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
			case 36 :
				$input_2 = [NULL, $conv, $data[4], $data[5], $data[6], $data[7], $data[8], $data[9], $data[10], $data[11], $data[12], $data[13], $data[14], $data[15], $data[16], $data[17], $data[18], $data[19], $data[20], $data[21], $data[22], $data[23], $data[24], $data[25], $data[26], $data[27], $data[28], $data[29], $data[30], $data[31], $data[32], $data[33], $data[34], $data[35], '', '', '', '', '', '', '' , ''];
				$result_2 = $this->db->insert('vlog_anggota', $input_2);

				if(!$result_2)
				{
					echo "Insert Data Akhir Gagal ...";
				} else if($result_1 && $result_2)
				{
					$ke = $data[11];
					$subjek = "Pendaftaran Lomba Vlog ITASE 2.0";
					$pesan = "Selamat anda sudah melakukan registrasi pendaftaran. Silahkan lakukan pembayaran dan kirim bukti pembayaran pada laman Vlog Competition.";

					require_once '../app/Core/PHPMailer.php';
					require_once '../app/Core/SMTP.php';
					require_once '../app/Core/Exception.php';

					$mail = new PHPMailer\PHPMailer\PHPMailer();

					$mail->isSMTP();
					$mail->Host = "smtp.gmail.com";
					$mail->SMTPAuth = true;
					$mail->Username = "wsolihatin@gmail.com";
					$mail->Password = "30desember1999";
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
					$mail->setFrom($ke, "Windi Solihatin");
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
			case 44 :
				$input_2 = [NULL, $conv, $data[4], $data[5], $data[6], $data[7], $data[8], $data[9], $data[10], $data[11], $data[12], $data[13], $data[14], $data[15], $data[16], $data[17], $data[18], $data[19], $data[20], $data[21], $data[22], $data[23], $data[24], $data[25], $data[26], $data[27], $data[28], $data[29], $data[30], $data[31], $data[32], $data[33], $data[34], $data[35], $data[36], $data[37], $data[38], $data[39], $data[40], $data[41], $data[42] , $data[43]];
				$result_2 = $this->db->insert('vlog_anggota', $input_2);

				if(!$result_2)
				{
					echo "Insert Data Akhir Gagal ...";
				} else if($result_1 && $result_2)
				{
					$ke = $data[11];
					$subjek = "Pendaftaran Lomba Vlog ITASE 2.0";
					$pesan = "Selamat anda sudah melakukan registrasi pendaftaran. Silahkan lakukan pembayaran dan kirim bukti pembayaran pada laman Vlog Competition.";

					require_once '../app/Core/PHPMailer.php';
					require_once '../app/Core/SMTP.php';
					require_once '../app/Core/Exception.php';

					$mail = new PHPMailer\PHPMailer\PHPMailer();

					$mail->isSMTP();
					$mail->Host = "smtp.gmail.com";
					$mail->SMTPAuth = true;
					$mail->Username = "wsolihatin@gmail.com";
					$mail->Password = "30desember1999";
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
					$mail->setFrom($ke, "Windi Solihatin");
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

		$getdata = $this->db->getAll('vlog_team');

		foreach ($getdata as $key) {

			if($get['namateam'] == $key->namateam)
			{
				$bool = true;
			}

		}

		if($bool)
		{
			$data = ['namateam' => $get['namateam']];

			$result = $this->db->update('vlog_team', $get, $data);

			if(!$result)
			{
				echo "Error data ...";
			} else if($result)
			{
				echo "Berhasil mengirim bukti pembayaran<br> Silahkan tunggu konfirmasi kami pada email atau Whatsapp anda ...";
			}

		} else {
			unlink($path);

			echo "Team ".$get['namateam']." tidak terdaftar ...";
		}
	}

}

?>