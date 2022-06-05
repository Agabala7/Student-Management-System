<?php 

class Signup extends Controller {
	public function index() {
		$errors = [];
		if(count($_POST) > 0) {
			$user = new User();
			
			if($user->validate($_POST)) {
				$arr["first_name"] = $_POST["first_name"];
				$arr["last_name"] = $_POST["last_name"];
				$arr["email"] = $_POST["email"];
				$arr["password"] = password_hash($_POST["password"],PASSWORD_DEFAULT);
				$arr["rank"] = $_POST["rank"];
				$arr["gender"] = $_POST["gender"];
				$arr["date"] = date("Y-m-d H:i:s");
				$user->insert($arr);
				$this->redirect("login");
			}else {
				$errors = $user->errors;
			}
		}
		$this->view("signup",["errors"=>$errors]);
	}
}