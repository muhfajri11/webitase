<?php 

Class Masteradm {
	private $db;

	public function __construct()
	{
		$this->db = Database::getInstance();
	}

	public function bisnis($param = null)
	{
		if($param != NULL)
		{
			return $this->db->join(['bisnis_team','bisnis_anggota'],['bisnis_team' => 'id_team','bisnis_anggota' => 'id_team'],['bisnis_team.id_team' => $param]);
		} else {
			return $this->db->join(['bisnis_team','bisnis_anggota'],['bisnis_team' => 'id_team','bisnis_anggota' => 'id_team']);
		}
	}

	public function tokenUpdate($data = [], $check)
	{
		if($check)
		{
			if ($this->db->update('bisnis_team', ['token' => $data['token']], ['id_team' => $data['id']])) {
				$get_data = $this->db->getWhere('bisnis_anggota',['id_team' => $data['id']]);

				$ke = $get_data->email_ketua;
				$subjek = "Konfirmasi Pembayaran Bisnis Plan ITASE 2.0";
				$pesan = "Selamat anda sudah terverifikasi dan telah menyelesaikan pembayaran registrasi. Berikut token untuk dapat submit proposal token = ".$data['token'].". Mohon agar dapat submit proposal team anda ...";
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
					echo "Terverifikasi";
				} else {
					echo "Something Wrong : <br>". $mail->ErrorInfo;
				}

			} else {
				echo "error";
			}
		} else {
			if ($this->db->update('bisnis_team', ['token' => ''], ['id_team' => $data['id']])) {
				$get_data = $this->db->getWhere('bisnis_anggota',['id_team' => $data['id']]);

				$ke = $get_data->email_ketua;
				$subjek = "Konfirmasi Pembayaran Bisnis Plan ITASE 2.0";
				$pesan = "Maaf pembayaran anda tidak valid.";
				
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
					echo "Not Verif";
				} else {
					echo "Something Wrong : <br>". $mail->ErrorInfo;
				}
			} else {
				echo "error";
			}
		}
	}

	public function linkUpdate($data = [])
	{
		switch ($data['select']) {
			case 'bisnis':
				echo "Berhasil Update Rulebook Bisnis Plan";
				return $this->db->update('rulebook',['bisnis_view' => $data['link'], 'bisnis_dw' => $data['dw']], ['id_rb' => 1]);
				break;

			case 'vlog':
				echo "Berhasil Update Rulebook Vlog";
				return $this->db->update('rulebook',['vlog_view' => $data['link'], 'vlog_dw' => $data['dw']], ['id_rb' => 1]);
				break;

			case 'gtalent':
				echo "Berhasil Update Rulebook SI Got Talent";
				return $this->db->update('rulebook',['gtalent_view' => $data['link'], 'gtalent_dw' => $data['dw']], ['id_rb' => 1]);
				break;

			case 'badminton':
				echo "Berhasil Update Rulebook Badminton";
				return $this->db->update('rulebook',['badminton_view' => $data['link'], 'badminton_dw' => $data['dw']], ['id_rb' => 1]);
				break;

			case 'pubg':
				echo "Berhasil Update Rulebook PUBGM";
				return $this->db->update('rulebook',['pubg_view' => $data['link'], 'pubg_dw' => $data['dw']], ['id_rb' => 1]);
				break;
		}
	}

	public function deleteonce($id)
	{
		$get = $this->db->getWhere('bisnis_team',['id_team' => $id]);

		if($get->filestruct != NULL)
		{
			$path = getcwd()."/assets/struct/bisnis/".$get->filestruct;
			unlink($path);
		} else if($get->fileprop != NULL) {
			$path = getcwd()."/assets/doc/proposal/".$get->fileprop;
			unlink($path);
		}

		$delete1 = $this->db->delete_('bisnis_anggota',['id_team' => $id]);
		$delete2 = $this->db->delete_('bisnis_team',['id_team' => $id]);

		if($delete1 && $delete2)
		{
			echo "Delete berhasil";
		} else if($delete1) {
			echo "Delete anggota berhasil";
		} else {
			echo "error";
		}
	}

}

?>