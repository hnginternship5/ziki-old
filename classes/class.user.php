<?php

Class User {

    private $users;

	function __construct($users){
		

		$this->_users = $users;
	}

	public function is_logged_in(){
		if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
			return true;
		}
	}
  public function is_admin(){
		if(isset($_SESSION['privilages']) && $_SESSION['privilages'] == 1){
			return true;
		}
	}

	private function get_user_hash($username){

		try {

			$stmt = $this->_users;
			$stmt->execute(array('username' => $username));

			return $stmt->fetch();

		} catch(PDOException $e) {
		    echo '<p class="error">'.$e->getMessage().'</p>';
		}
	}


	public function login($username,$password){


    $user = $this->get_user_hash($username);

		if($this->password_verify($password,$user['password']) == 1){

if ($persist) {
        $hash = crypt($username.$_SERVER['REMOTE_ADDR']);
        setcookie('pr', $username.'#~#'.$hash, time() + 3600 * 24 * 7, '/', '', false, true);

        $_SESSION['loggedin'] = true;
		    $_SESSION['Name'] = $user['Name'];
        $_SESSION['Email'] = $user['Email'];

      }else {
        $_SESSION['loggedin'] = true;
		    $_SESSION['Name'] = $user['Name'];
        $_SESSION['Email'] = $user['Email'];

      }

        return true;
		}

	}


	public function logout(){

		session_destroy();
    // We also unset the cookie
    if( isset($_COOKIE['pr']) )
    {
        setcookie('pr', '', time() - 3600, '/', '', false, true);
    }
	}

}


?>
