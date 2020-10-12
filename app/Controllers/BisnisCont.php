<?php 

class BisnisCont extends Controller {

	public function index()
	{
		session_start();
		$model = $this->model('Bisnis');
		$result = $model->All('rulebook');

		return $this->view('bisnis', ['link' => $result]);
	}

	public function pendaftaran()
	{
		$model = $this->model('Bisnis');
		$kelompok = $_POST['klmpk'];
		$namatim = $this->no_inject_str(ucwords($_POST['nm_tim']));
		$judulprop = $this->no_inject_str(ucwords($_POST['judul']));

		$namaketua = $this->no_inject_str(ucwords($_POST['nm_ketua']));
		$kampusketua = $this->no_inject_str(ucwords($_POST['kampus']));
		$prodiketua = $this->no_inject_str(ucwords($_POST['prodi']));
		$tlahirketua = $this->no_inject_str(ucwords($_POST['tempat']));
		$tglketua = $this->no_inject_str($_POST['tgl']);
		$alamatketua = $this->no_inject_str(ucwords($_POST['alamat_ketua']));
		$telpketua = $this->no_inject_str($_POST['telp_ketua']);
		$emailketua = $this->no_inject_str($_POST['email_ketua']);

		if($kelompok == "tim")
		{
			$sum_tim = $this->no_inject_int($_POST['sum_tim']);

			$namaanggota1 = $this->no_inject_str(ucwords($_POST['nm_anggota1']));
			$kampusanggota1 = $this->no_inject_str(ucwords($_POST['kampus_anggota1']));
			$prodianggota1 = $this->no_inject_str(ucwords($_POST['prodi_anggota1']));
			$tlahiranggota1 = $this->no_inject_str(ucwords($_POST['tempat_anggota1']));
			$tglanggota1 = $this->no_inject_str($_POST['tgl_anggota1']);
			$alamatanggota1 = $this->no_inject_str(ucwords($_POST['alamat_anggota1']));
			$telpanggota1 = $this->no_inject_str($_POST['telp_anggota1']);
			$emailanggota1 = $this->no_inject_str($_POST['email_anggota1']);

			if($sum_tim == 1)
			{
				$temp = explode("-", $tglketua);
				$tglketua = $temp[2]."-".$temp[1]."-".$temp[0];
				$temp = explode("-", $tglanggota1);
				$tglanggota1 = $temp[2]."-".$temp[1]."-".$temp[0];

				$alldata = [$namatim, $sum_tim, $judulprop, $namaketua, $kampusketua, $prodiketua, $tlahirketua, $tglketua, $alamatketua, $telpketua, $emailketua, $namaanggota1, $kampusanggota1, $prodianggota1, $tlahiranggota1, $tglanggota1, $alamatanggota1, $telpanggota1, $emailanggota1];

			} else if($sum_tim == 2) {

				$namaanggota2 = $this->no_inject_str(ucwords($_POST['nm_anggota2']));
				$kampusanggota2 = $this->no_inject_str(ucwords($_POST['kampus_anggota2']));
				$prodianggota2 = $this->no_inject_str(ucwords($_POST['prodi_anggota2']));
				$tlahiranggota2 = $this->no_inject_str(ucwords($_POST['tempat_anggota2']));
				$tglanggota2 = $this->no_inject_str($_POST['tgl_anggota2']);
				$alamatanggota2 = $this->no_inject_str(ucwords($_POST['alamat_anggota2']));
				$telpanggota2 = $this->no_inject_str($_POST['telp_anggota2']);
				$emailanggota2 = $this->no_inject_str($_POST['email_anggota2']);

				$temp = explode("-", $tglketua);
				$tglketua = $temp[2]."-".$temp[1]."-".$temp[0];
				$temp = explode("-", $tglanggota1);
				$tglanggota1 = $temp[2]."-".$temp[1]."-".$temp[0];
				$temp = explode("-", $tglanggota2);
				$tglanggota2 = $temp[2]."-".$temp[1]."-".$temp[0];

				$alldata = [$namatim, $sum_tim, $judulprop, $namaketua, $kampusketua, $prodiketua, $tlahirketua, $tglketua, $alamatketua, $telpketua, $emailketua, $namaanggota1, $kampusanggota1, $prodianggota1, $tlahiranggota1, $tglanggota1, $alamatanggota1, $telpanggota1, $emailanggota1, $namaanggota2, $kampusanggota2, $prodianggota2, $tlahiranggota2, $tglanggota2, $alamatanggota2, $telpanggota2, $emailanggota2];

			}


		} else if($kelompok == "ind") {
			$sum_tim = 0;

			$temp = explode("-", $tglketua);
			$tglketua = $temp[2]."-".$temp[1]."-".$temp[0];

			$alldata = [$namatim, $sum_tim, $judulprop, $namaketua, $kampusketua, $prodiketua, $tlahirketua, $tglketua, $alamatketua, $telpketua, $emailketua];

		}

		return $model->insert_register($alldata);
	}

	public function struct()
	{
		$model = $this->model('Bisnis');

		$namatim = $this->no_inject_str(ucwords($_POST['name_team']));

		$image_tmp = $_FILES['image']['tmp_name'];
		$image_name = $_FILES['image']['name'];
		$image_type = $_FILES['image']['type'];

		$temp = explode("/", $image_type);
		$i = 0;

		foreach ($temp as $key) {
			if ($key == "jpeg") {
				$temp[$i] = "jpg";
			}
			$i++;
		}

		$img_type = $temp[1];

		$img_name = "struct_".$namatim.".".$img_type;

		//$path = '/site/home/site/public/assets/struct/bisnis/'.$img_name;

		$path = getcwd()."/assets/struct/bisnis/".$img_name;

		if(!file_exists($path))
		{
			if (move_uploaded_file($image_tmp, $path)) {

				if($this->compress($image_tmp, $path, 35))
				{
					$alldata = ['namateam' => $namatim, 'filestruct' => $img_name];

					return $model->struct_img($alldata, $path);
				}

			} else {
				echo "Upload Gagal";
			}

		} else {
			echo "Maaf Team $namatim sudah mengupload bukti pembayaran sebelumnya ...";
		} 

	}

	public function proposal()
	{
		$model = $this->model('Bisnis');
		// $getAll = $model->All('bisnis_team');

		$token = $_POST['token'];
		$file_tmp = $_FILES['filed']['tmp_name'];
		$file_name = $_FILES['filed']['name'];

		$filed_name = "prop_".$token.".pdf";
		$path = getcwd()."/assets/doc/proposal/".$filed_name;

		if(!file_exists($path))
		{
			if (move_uploaded_file($file_tmp, $path)) {

				$alldata = ['token' => $token, 'fileprop' => $filed_name];

				return $model->proposaldb($alldata, $path);

			} else {
				echo "Upload Gagal";
			}

		} else {
			echo "Anda sudah mengupload proposal ...";
		} 

		// foreach ($getAll as $key) {
		// 	if ($key->token == $token) {

		// 		if(!file_exists($path))
		// 		{
		// 			if (move_uploaded_file($file_tmp, $path)) {

		// 				$alldata = ['token' => $token, 'fileprop' => $filed_name];

		// 				return $model->proposaldb($alldata);

		// 			} else {
		// 				echo "Upload Gagal";
		// 			}

		// 		} else {
		// 			echo "Maaf Team $key->nama_team sudah mengupload proposal ...";
		// 		} 
		// 		die();
		// 	}
		// }

		// echo "Token Salah";

	}

}

?>