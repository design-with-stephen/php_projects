<?php
require_once"includes/config.php";
class users extends database{
    // insert users
    public function insert_user($username,$password,$email,$password_hash){
        $username =htmlspecialchars(trim($_POST["username"]));
        $password =htmlspecialchars(trim($_POST["password"]));
        $email =$_POST["email"];
        $password_hash =md5($_POST["password"]);
        $stmt =$this->conn->prepare("
        INSERT INTO USERS(firstname, lastname, email)VALUES(?,?,?)
        ");
        $stmt->bind_param("", $username, $password, $email, $password, $password_hash);
        $stmt->execute();
    }
    // fetch users
    public function get_users(){
        $sql = "SELECT * FROM users";
        $result =$this->conn->query($sql);
        $users =[];

        if($result->num_rows > 0){
            while($row =$result->fetch_assoc()){
                $users[]=$row;
            }
        }
        return $users;
    }
    // get user by id
    public function get_user_by_id($id){
        $stmt =$this->conn->prepare("SELECT * FROM users where id=?");
        $stmt->bind_param("id",$id);

        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }
    //  delete user by id
    public function delete_user_by_id($id){
        $stmt= $this->conn->prepare("
        Update users set deleted=?, deleted_at = ? where id=?
        ");
        $stmt->bind_param("id",$id);
         return $stmt->execute();
    }



    public function update_user_by_id($id,$data){
    $stmt = $this->conn->prepare("
    UPDATE users SET user_name =?,firstname=?,lastName=?,
    contact=?
    ");
    $stmt->bind_param("id",$id);
    return $stmt->execute();
   }
}



?>