<?php
include_once('conector/BaseDatos.php');
class Contacto{
    private $idContacto;
    private $nombre;
    private $empresa;
    private $telefono;
    private $mail;
    private $comentario;
    private $op;

    public function __construct(){
        $this->idContacto = "";
        $this->nombre = "";
        $this->empresa = "";
        $this->telefono = "";
        $this->mail = "";
        $this->comentario = "";
        $this->op = "";
    }

    public function setear($idContacto, $nombre, $empresa, $telefono, $mail, $comentario){
        $this->setIdContacto($idContacto);
        $this->setNombre($nombre);
        $this->setEmpresa($empresa);
        $this->setTelefono($telefono);
        $this->setMail($mail);
        $this->setComentario($comentario);
    }

    public function getIdContacto(){
        return $this->idContacto;
    }
    public function setIdContacto($idContacto){
        $this->idContacto = $idContacto;
    }
    public function getNombre(){
        return $this->nombre;
    }
    public function setNombre($nombre){
        $this->nombre = $nombre;
    }
    public function getEmpresa(){
        return $this->empresa;
    }
    public function setEmpresa($empresa){
        $this->empresa = $empresa;
    }
    public function getTelefono(){
        return $this->telefono;
    }
    public function setTelefono($telefono){
        $this->telefono = $telefono;
    }
    public function getMail(){
        return $this->mail;
    }
    public function setMail($mail){
        $this->mail = $mail;
    }
    public function getComentario(){
        return $this->comentario;
    }
    public function setComentario($comentario){
        $this->comentario = $comentario;
    }
    public function getOp(){
        return $this->op;
    }
    public function setOp($op){
        $this->op = $op;
    }

    
    public function cargar(){
        $resp = false;
        $base=new BaseDatos();
        $sql="SELECT * FROM contactos WHERE IdContacto = ".$this->getIdContacto();
        if ($base->Iniciar()) {
            $res = $base->Ejecutar($sql);
            if($res>-1){
                if($res>0){
                    $row = $base->Registro();
                    $this->setear($row['IdContacto'], $row['Nombre'], $row['Empresa'], $row['Telefono'], $row['Mail'], $row['Comentario']);
                    $resp=true;
                }
            }
        } else {
            $this->setOp("contactos->listar: ".$base->getError());
        }
        return $resp;
    
        
    }
    
    public function insertar(){
        $resp = false;
        $base=new BaseDatos();
        $sql="INSERT INTO contactos(Nombre, Empresa, Telefono, Mail, Comentario) VALUES('".$this->getNombre()."', '".$this->getEmpresa()."', '".$this->getTelefono()."', '".$this->getMail()."', '".$this->getComentario()."');";
        if ($base->Iniciar()) {
            if ($elid=$base->Ejecutar($sql)) {
                $this->setIdContacto($elid);
                $resp = true;
            } else {
                $this->setOp("contactos->insertar: ".$base->getError());
            }
        } else {
            $this->setOp("contactos->insertar: ".$base->getError());
        }
        return $resp;
    }
    
    public function modificar(){
        $resp = false;
        $base=new BaseDatos();
        $sql="UPDATE contactos SET Nombre='".$this->getNombre()."', Empresa='".$this->getEmpresa()."', Telefono='".$this->getTelefono()."', Mail='".$this->getMail()."', Comentario='".$this->getComentario()."' WHERE idContacto=".$this->getIdContacto();
        // echo $sql;
        if ($base->Iniciar()) {
            if ($base->Ejecutar($sql)) {
                $resp = true;
            } else {
                $this->setOp("contactos->modificar: ".$base->getError());
            }
        } else {
            $this->setOp("contactos->modificar: ".$base->getError());
        }
        return $resp;
    }
    
    public function eliminar(){
        $resp = false;
        $base=new BaseDatos();
        $sql="DELETE FROM contactos WHERE idContacto=".$this->getIdContacto();
        if ($base->Iniciar()) {
            if ($base->Ejecutar($sql)) {
                return true;
            } else {
                $this->setOp("contactos->eliminar: ".$base->getError());
            }
        } else {
            $this->setOp("contactos->eliminar: ".$base->getError());
        }
        return $resp;
    }
    
    public static function listar($parametro=""){
        $arreglo = array();
        $base=new BaseDatos();
        $sql="SELECT * FROM contactos ";
        if ($parametro!="") {
            $sql.='WHERE '.$parametro;
        }
        $res = $base->Ejecutar($sql);
        if($res>-1){
            if($res>0){
                
                while ($row = $base->Registro()){
                    $obj= new Contacto();
                    $obj->setear($row['IdContacto'], $row['Nombre'], $row['Empresa'], $row['Telefono'], $row['Mail'], $row['Comentario']);
                    array_push($arreglo, $obj);
                }
               
            }
            
        } else {
            $obj= new Contacto();
            $obj->setOp("contactos->listar: ".$base->getError());
        }
 
        return $arreglo;
    }
}
?>