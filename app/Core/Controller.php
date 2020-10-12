<?php 

class Controller {

	public function view($file, $data = [])
	{
		require_once '../app/Views/'.$file.'.php';
	}

	public function model($file)
	{
		require_once '../app/Models/'.$file.'.php';
		return new $file();
	}

	public function no_inject_str($case)
	{
		$act = stripslashes(strip_tags(htmlspecialchars(filter_var($case, FILTER_SANITIZE_STRING))));

		return $act;
	}

	public function no_inject_int($case)
	{

		$act = stripslashes(strip_tags(htmlspecialchars(filter_var($case, FILTER_VALIDATE_INT))));

		return $act;
	}

	public function compress($img_src, $destination, $quality)
	{
		$info = getimagesize($destination);

		// var_dump($info);

		if($info['mime'] == 'image/jpeg')
		{
			$image = imagecreatefromjpeg($destination);
		} else if($info['mime'] == 'image/png')
		{
			$image = imagecreatefrompng($destination);
		}

		return imagejpeg($image, $destination, $quality);
	}

	public function generateCaptchaString($length = 5)
	{
		return strtoupper(substr(md5(rand()), 0, $length));
	}

	public function getFontPath()
	{
		$files = glob('../public/fonts/*.ttf');
		$file = array_rand($files);
		return $files[$file];
	}

	public function getFontColor($image) 
	{
		return imagecolorallocate($image, 0x00, 0x66, 0x99);
	}

	public function isCaptchaValid() 
	{
		if (!isset($_REQUEST['captcha']))
		{
			return false;
		}  

		if (!isset($_SESSION['captcha']))
		{
			return false;
		}

		return strtoupper($_REQUEST['captcha']) == strtoupper($_SESSION['captcha']);
	}

	// public function sendmail($ke, $subjek, $pesan, $data = [])
	// {
	// 	$count = count($data);

	// 	if($count > 0)
	// 	{
			
	// 		foreach ($data as $key => $value) {
	// 			if($key == "From")
	// 			{
	// 				$headers = $key . ": ". $value . "\r\n";
	// 			} else {
	// 				$headers .= $key . ": ". $value . "\r\n";  
	// 			}
	// 		}

	// 		return mail($ke, $subjek, $pesan, $headers);
	// 	} else {
	// 		return mail($ke, $subjek, $pesan);
	// 	}
	// }

}

?>