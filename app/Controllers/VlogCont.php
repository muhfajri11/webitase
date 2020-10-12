<?php 

class VlogCont extends Controller {

	public function index()
	{
		$model = $this->model('Vlog');
		$result = $model->getUrl();

		return $this->view('vlog' ,['link' => $result]);
	}

	public function pendaftaran()
	{
		$model = $this->model('Vlog');

		$kelompok = $_POST['klmpk'];
		$namatim = $this->no_inject_str(ucwords($_POST['nm_tim']));
		$judulvlog = $this->no_inject_str(ucwords($_POST['judul']));
		$temavlog = $this->no_inject_str(ucwords($_POST['tema']));

		$namaketua = $this->no_inject_str(ucwords($_POST['nm_ketua']));
		$nimketua = $this->no_inject_str(ucwords($_POST['nimketua']));
		$kampusketua = $this->no_inject_str(ucwords($_POST['univketua']));
		$tlahirketua = $this->no_inject_str(ucwords($_POST['tempatlahir']));
		$tglketua = $this->no_inject_str($_POST['tgllahir']);
		$alamatketua = $this->no_inject_str(ucwords($_POST['alamatketua']));
		$telpketua = $this->no_inject_str($_POST['telpketua']);
		$emailketua = $this->no_inject_str($_POST['emailketua']);

		if($kelompok == "tim")
		{
			$sum_tim = $this->no_inject_str($_POST['sum_timb']);

			$namaanggota1 = $this->no_inject_str(ucwords($_POST['nm_anggota1']));
			$nimanggota1 = $this->no_inject_str(ucwords($_POST['nimanggota1']));
			$kampusanggota1 = $this->no_inject_str(ucwords($_POST['univanggota1']));
			$tlahiranggota1 = $this->no_inject_str(ucwords($_POST['tempatlahiranggota1']));
			$tglanggota1 = $this->no_inject_str($_POST['tgllahiranggota1']);
			$alamatanggota1 = $this->no_inject_str(ucwords($_POST['alamatanggota1']));
			$telpanggota1 = $this->no_inject_str($_POST['telpanggota1']);
			$emailanggota1 = $this->no_inject_str($_POST['emailanggota1']);

			if($sum_tim == 1)
			{
				$temp = explode("-", $tglketua);
				$tglketua = $temp[2]."-".$temp[1]."-".$temp[0];
				$temp = explode("-", $tglanggota1);
				$tglanggota1 = $temp[2]."-".$temp[1]."-".$temp[0];

				$alldata = [$namatim, $sum_tim, $judulvlog, $temavlog, $namaketua, $nimketua, $tlahirketua, $tglketua, $kampusketua, $telpketua, $alamatketua, $emailketua, $namaanggota1, $nimanggota1, $tlahiranggota1, $tglanggota1, $kampusanggota1, $telpanggota1, $alamatanggota1, $emailanggota1];

			} else if($sum_tim == 2) {

				$namaanggota2 = $this->no_inject_str(ucwords($_POST['nm_anggota2']));
				$nimanggota2 = $this->no_inject_str(ucwords($_POST['nimanggota2']));
				$kampusanggota2 = $this->no_inject_str(ucwords($_POST['univanggota2']));
				$tlahiranggota2 = $this->no_inject_str(ucwords($_POST['tempatlahiranggota2']));
				$tglanggota2 = $this->no_inject_str($_POST['tgllahiranggota2']);
				$alamatanggota2 = $this->no_inject_str(ucwords($_POST['alamatanggota2']));
				$telpanggota2 = $this->no_inject_str($_POST['telpanggota2']);
				$emailanggota2 = $this->no_inject_str($_POST['emailanggota2']);

				$temp = explode("-", $tglketua);
				$tglketua = $temp[2]."-".$temp[1]."-".$temp[0];
				$temp = explode("-", $tglanggota1);
				$tglanggota1 = $temp[2]."-".$temp[1]."-".$temp[0];
				$temp = explode("-", $tglanggota2);
				$tglanggota2 = $temp[2]."-".$temp[1]."-".$temp[0];

				$alldata = [$namatim, $sum_tim, $judulvlog, $temavlog, $namaketua, $nimketua, $tlahirketua, $tglketua, $kampusketua, $telpketua, $alamatketua, $emailketua, $namaanggota1, $nimanggota1, $tlahiranggota1, $tglanggota1, $kampusanggota1, $telpanggota1, $alamatanggota1, $emailanggota1, $namaanggota2, $nimanggota2, $tlahiranggota2, $tglanggota2, $kampusanggota2, $telpanggota2, $alamatanggota2, $emailanggota2];

			} else if($sum_tim == 3)
			{
				$namaanggota2 = $this->no_inject_str(ucwords($_POST['nm_anggota2']));
				$nimanggota2 = $this->no_inject_str(ucwords($_POST['nimanggota2']));
				$kampusanggota2 = $this->no_inject_str(ucwords($_POST['univanggota2']));
				$tlahiranggota2 = $this->no_inject_str(ucwords($_POST['tempatlahiranggota2']));
				$tglanggota2 = $this->no_inject_str($_POST['tgllahiranggota2']);
				$alamatanggota2 = $this->no_inject_str(ucwords($_POST['alamatanggota2']));
				$telpanggota2 = $this->no_inject_str($_POST['telpanggota2']);
				$emailanggota2 = $this->no_inject_str($_POST['emailanggota2']);

				$namaanggota3 = $this->no_inject_str(ucwords($_POST['nm_anggota3']));
				$nimanggota3 = $this->no_inject_str(ucwords($_POST['nimanggota3']));
				$kampusanggota3 = $this->no_inject_str(ucwords($_POST['univanggota3']));
				$tlahiranggota3 = $this->no_inject_str(ucwords($_POST['tempatlahiranggota3']));
				$tglanggota3 = $this->no_inject_str($_POST['tgllahiranggota3']);
				$alamatanggota3 = $this->no_inject_str(ucwords($_POST['alamatanggota3']));
				$telpanggota3 = $this->no_inject_str($_POST['telpanggota3']);
				$emailanggota3 = $this->no_inject_str($_POST['emailanggota3']);

				$temp = explode("-", $tglketua);
				$tglketua = $temp[2]."-".$temp[1]."-".$temp[0];
				$temp = explode("-", $tglanggota1);
				$tglanggota1 = $temp[2]."-".$temp[1]."-".$temp[0];
				$temp = explode("-", $tglanggota2);
				$tglanggota2 = $temp[2]."-".$temp[1]."-".$temp[0];
				$temp = explode("-", $tglanggota3);
				$tglanggota3 = $temp[2]."-".$temp[1]."-".$temp[0];

				$alldata = [$namatim, $sum_tim, $judulvlog, $temavlog, $namaketua, $nimketua, $tlahirketua, $tglketua, $kampusketua, $telpketua, $alamatketua, $emailketua, $namaanggota1, $nimanggota1, $tlahiranggota1, $tglanggota1, $kampusanggota1, $telpanggota1, $alamatanggota1, $emailanggota1, $namaanggota2, $nimanggota2, $tlahiranggota2, $tglanggota2, $kampusanggota2, $telpanggota2, $alamatanggota2, $emailanggota2, $namaanggota3, $nimanggota3, $tlahiranggota3, $tglanggota3, $kampusanggota3, $telpanggota3, $alamatanggota3, $emailanggota3];

			} else if($sum_tim == 4)
			{
				$namaanggota2 = $this->no_inject_str(ucwords($_POST['nm_anggota2']));
				$nimanggota2 = $this->no_inject_str(ucwords($_POST['nimanggota2']));
				$kampusanggota2 = $this->no_inject_str(ucwords($_POST['univanggota2']));
				$tlahiranggota2 = $this->no_inject_str(ucwords($_POST['tempatlahiranggota2']));
				$tglanggota2 = $this->no_inject_str($_POST['tgllahiranggota2']);
				$alamatanggota2 = $this->no_inject_str(ucwords($_POST['alamatanggota2']));
				$telpanggota2 = $this->no_inject_str($_POST['telpanggota2']);
				$emailanggota2 = $this->no_inject_str($_POST['emailanggota2']);

				$namaanggota3 = $this->no_inject_str(ucwords($_POST['nm_anggota3']));
				$nimanggota3 = $this->no_inject_str(ucwords($_POST['nimanggota3']));
				$kampusanggota3 = $this->no_inject_str(ucwords($_POST['univanggota3']));
				$tlahiranggota3 = $this->no_inject_str(ucwords($_POST['tempatlahiranggota3']));
				$tglanggota3 = $this->no_inject_str($_POST['tgllahiranggota3']);
				$alamatanggota3 = $this->no_inject_str(ucwords($_POST['alamatanggota3']));
				$telpanggota3 = $this->no_inject_str($_POST['telpanggota3']);
				$emailanggota3 = $this->no_inject_str($_POST['emailanggota3']);

				$namaanggota4 = $this->no_inject_str(ucwords($_POST['nm_anggota4']));
				$nimanggota4 = $this->no_inject_str(ucwords($_POST['nimanggota4']));
				$kampusanggota4 = $this->no_inject_str(ucwords($_POST['univanggota4']));
				$tlahiranggota4 = $this->no_inject_str(ucwords($_POST['tempatlahiranggota4']));
				$tglanggota4 = $this->no_inject_str($_POST['tgllahiranggota4']);
				$alamatanggota4 = $this->no_inject_str(ucwords($_POST['alamatanggota4']));
				$telpanggota4 = $this->no_inject_str($_POST['telpanggota4']);
				$emailanggota4 = $this->no_inject_str($_POST['emailanggota4']);

				$temp = explode("-", $tglketua);
				$tglketua = $temp[2]."-".$temp[1]."-".$temp[0];
				$temp = explode("-", $tglanggota1);
				$tglanggota1 = $temp[2]."-".$temp[1]."-".$temp[0];
				$temp = explode("-", $tglanggota2);
				$tglanggota2 = $temp[2]."-".$temp[1]."-".$temp[0];
				$temp = explode("-", $tglanggota3);
				$tglanggota3 = $temp[2]."-".$temp[1]."-".$temp[0];
				$temp = explode("-", $tglanggota4);
				$tglanggota4 = $temp[2]."-".$temp[1]."-".$temp[0];

				$alldata = [$namatim, $sum_tim, $judulvlog, $temavlog, $namaketua, $nimketua, $tlahirketua, $tglketua, $kampusketua, $telpketua, $alamatketua, $emailketua, $namaanggota1, $nimanggota1, $tlahiranggota1, $tglanggota1, $kampusanggota1, $telpanggota1, $alamatanggota1, $emailanggota1, $namaanggota2, $nimanggota2, $tlahiranggota2, $tglanggota2, $kampusanggota2, $telpanggota2, $alamatanggota2, $emailanggota2, $namaanggota3, $nimanggota3, $tlahiranggota3, $tglanggota3, $kampusanggota3, $telpanggota3, $alamatanggota3, $emailanggota3, $namaanggota4, $nimanggota4, $tlahiranggota4, $tglanggota4, $kampusanggota4, $telpanggota4, $alamatanggota4, $emailanggota4];
				
			}


		} else if($kelompok == "ind") {
			$sum_tim = 0;

			$temp = explode("-", $tglketua);
			$tglketua = $temp[2]."-".$temp[1]."-".$temp[0];

			$alldata = [$namatim, $sum_tim, $judulvlog, $temavlog, $namaketua, $nimketua, $tlahirketua, $tglketua, $kampusketua, $telpketua, $alamatketua, $emailketua];
		}

		return $model->insert_register($alldata);

	}

	public function struct()
	{
		$model = $this->model('Vlog');

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

		$path = '../public/assets/struct/vlog/'.$img_name;

		// echo $image_tmp;
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

		// move_uploaded_file()
	}

}

?>