<?php
class Usuario {
    private $db;
}
    public function_construct ($conexao ) {
        $this->db = $conexao;
    
    }

     public function listarUsuario (){
        $usuarios = array();
       $sql = "SELECT * FROM usuarios"
     
       $result = $this->db->query($sql);

       if ($result){

        while($row =$result->fetch_assoc()){
               $usuarios[]=$row;

        }
        $result->close();
       }
       return $usuarios;
    }
    ?>