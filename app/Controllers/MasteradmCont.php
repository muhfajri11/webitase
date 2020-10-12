<?php 

Class MasteradmCont extends Controller 
{
	public function index()
	{
		$model = $this->model('Masteradm');		
		$bisnis = $model->bisnis();
		// $vlog = $this->vlog();

		// if($param == NULL)
		// {
		// 	return $this->view('Admin/master');
		// } else {
		return $this->view('Admin/adm', ['query' => $bisnis]);
		// }

	}

	public function modal()
	{
		$id = $_POST['id'];
		$model = $this->model('Masteradm');
		$bisnis = $model->bisnis($id);

		return $this->view('Admin/modals', ['getdata' => $bisnis]);
	}

	public function delete()
	{
		$id = $_POST['id'];
		$model = $this->model('Masteradm');

		return $model->deleteonce($id);
	}

	public function token()
	{
		$id = $_POST['id'];
		$status = $_POST['status'];

		$model = $this->model('Masteradm');

		if($status == 'true')
		{
			$token = sha1(uniqid());

			$data = ['id' => $id, 'token' => $token];

			return $model->tokenUpdate($data, true);

		} else {
			$data = ['id' => $id, 'token' => ''];

			return $model->tokenUpdate($data, false);
		}
	}

	public function link_()
	{
		$model = $this->model('Masteradm');

		$link = $_POST['linkfile'];
		$dw = $_POST['dwfile'];
		$select = $_POST['menu_select'];

		return $model->linkUpdate(['link' => $link, 'dw' => $dw, 'select' => $select]);
	}
}

?>