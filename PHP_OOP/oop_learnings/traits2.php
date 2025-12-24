<?php
trait logMsg{
    public function successMsg(){
         echo "<p style='color: green;'>Login successful!</p>";
    }
    public function errorMsg(){
         echo "<p style='color: red;'>Login failed</p>";
    }
}

// user authentication ###################Login
class Auth
{
    use LogMsg;

    public function login($username, $password)
    {
        // Dummy credentials
        if ($username === 'admin' && $password === '1234') {
            $this->SuccessMsg();
        } else {
            $this->errorMsg();
        }
    }
}


?>