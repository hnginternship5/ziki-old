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


	private function get_user_hash($name){

		try {

			$stmt = $this->_users;
			$stmt->execute(array('name' => $name));

			return $stmt->fetch();

		} catch(PDOException $e) {
		    echo '<p class="error">'.$e->getMessage().'</p>';
		}
	}


	public function login($name,$email,$persist){


if ($persist) {
        $hash = crypt($name.$_SERVER['REMOTE_ADDR']);
        setcookie('pr', $name.'#~#'.$hash, time() + 3600 * 24 * 7, '/', '', false, true);

        $_SESSION['loggedin'] = true;
		    $_SESSION['name'] = $name;
        $_SESSION['email'] = $email;
        $_SESSION['accesstoken'] = "local";

      }else {
        $_SESSION['loggedin'] = true;
		    $_SESSION['name'] = $name;
        $_SESSION['email'] = $email;
        $_SESSION['accesstoken'] ="local";

      }

        return true;
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
