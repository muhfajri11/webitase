<?php 

class IndexCont extends Controller {

	public function index()
	{
		// adminitase itase2191019
		return $this->view('index');
	}

	public function about()
	{
		return $this->view('about');	
	}

	public function badminton()
	{
		$model = $this->model('Index');
		$result = $model->getUrl();

		return $this->view('badminton', ['link' => $result]);	
	}

	public function pubg()
	{	
		$model = $this->model('Index');
		$result = $model->getUrl();

		return $this->view('pubg', ['link' => $result]);	
	}

	public function gtalent()
	{
		$model = $this->model('Index');
		$result = $model->getUrl();

		return $this->view('gtalent', ['link' => $result]);	
	}

	public function generatecaptcha()
	{
		session_start();

		$captcha = $this->generateCaptchaString();
		$_SESSION['captcha'] = $captcha;

		$fontPath = $this->getFontPath();

		$imageWidth = 160;
		$imageHeight = 50;
		$fontSize = 30;
		$angle = rand(-5, 5);

		$image = imagecreatetruecolor($imageWidth, $imageHeight);
		$fontColor = $this->getFontColor($image);
		$backgroundColor = imagecolorallocate($image, 255, 255, 255);
		imagefilledrectangle($image, 0, 0, $imageWidth, $imageHeight, $backgroundColor);

		$box = imagettfbbox($fontSize, $angle, $fontPath, $captcha);
		$textwidth = abs($box[4] - $box[0]);
		$x = ($imageWidth - $textwidth) / 2;
		$textHeight = abs($box[5] - $box[1]);
		$y = ($imageHeight + $textHeight) / 2 -5;

		imagettftext($image, $fontSize, $angle, $x, $y, $fontColor, $fontPath, $captcha);

		header("Content-type: image/png");
		imagepng($image);
	}

	public function verifcaptcha() { session_start(); echo json_encode($this->isCaptchaValid()); }

}

?>