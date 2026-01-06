<?php
require_once "config.php";
class note extends database{
    
    // fetch data from the database
    public function get_notes(){
        $sql = "SELECT * FROM notes";
        $result = $this->conn->query($sql);
        $notes = [];

        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                $notes[] = $row;
            }
        }
        return $notes;
    }
    public function get_note_id($id){
        $stmt=$this->conn->prepare(
            "SELECT*FROM notes WHERE id=?"
        );
        $stmt->bind_param("i",$id);
        $stmt->execute();

        return $stmt->get_result()->fetch_assoc();

    }
    public function delete_note($id){
        $stmt=$this->conn->prepare("SELECT * FROM notes WHERE id=?");
        $stmt->bind_param("id",$id);
        
        return $stmt->execute();
    }
    public function update_note($id,$noteTitle, $notes){
        $stmt = $this->conn->prepare(
            "UPDATE notes SET noteTitle = ?, notes = ? WHERE id = ?"
        );
        $stmt->bind_param("ssi", $noteTitle, $notes, $id);

        return $stmt->execute();
    }
}


?>


<!--  -->

