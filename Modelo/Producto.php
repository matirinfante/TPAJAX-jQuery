<?php
include_once('conector/BaseDatos.php');
class Producto{
    private $idProducto;
    private $nombre;
    private $talle;
    private $descripcion;
    private $precio;
    private $op;

    public function __construct(){
        $this->idProducto = "";
        $this->nombre = "";
        $this->talle = "";
        $this->descripcion = "";
        $this->precio = "";
        $this->op = "";
    }

    public function setear($idProducto, $nombre, $talle, $descripcion, $precio){
        $this->setIdProducto($idProducto);
        $this->setNombre($nombre);
        $this->setTalle($talle);
        $this->setDescripcion($descripcion);
        $this->setPrecio($precio);
    }

    public function getIdProducto(){
        return $this->idProducto;
    }
    public function setIdProducto($idProducto){
        $this->idProducto = $idProducto;
    }
    public function getNombre(){
        return $this->nombre;
    }
    public function setNombre($nombre){
        $this->nombre = $nombre;
    }
    public function getTalle(){
        return $this->talle;
    }
    public function setTalle($talle){
        $this->talle = $talle;
    }
    public function getDescripcion(){
        return $this->descripcion;
    }
    public function setDescripcion($descripcion){
        $this->descripcion = $descripcion;
    }
    public function getPrecio(){
        return $this->precio;
    }
    public function setPrecio($precio){
        $this->precio = $precio;
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
        $sql="SELECT * FROM producto WHERE idproducto = ".$this->getIdProducto();
        if ($base->Iniciar()) {
            $res = $base->Ejecutar($sql);
            if($res>-1){
                if($res>0){
                    $row = $base->Registro();
                    $this->setear($row['idproducto'], $row['nombre'], $row['talle'], $row['descripcion'], $row['precio']);
                    $resp=true;
                }
            }
        } else {
            $this->setOp("producto->listar: ".$base->getError());
        }
        return $resp;
    
        
    }
    
    public function insertar(){
        $resp = false;
        $base=new BaseDatos();
        $sql="INSERT INTO producto(nombre, talle, descripcion, precio) VALUES('".$this->getNombre()."', '".$this->getTalle()."', '".$this->getDescripcion()."', '".$this->getPrecio()."');";
        if ($base->Iniciar()) {
            if ($elid=$base->Ejecutar($sql)) {
                $this->setIdProducto($elid);
                $resp = true;
            } else {
                $this->setOp("producto->insertar: ".$base->getError());
            }
        } else {
            $this->setOp("producto->insertar: ".$base->getError());
        }
        return $resp;
    }
    
    public function modificar(){
        $resp = false;
        $base=new BaseDatos();
        $sql="UPDATE producto SET nombre='".$this->getNombre()."', talle='".$this->getTalle()."', descripcion='".$this->getDescripcion()."', precio='".$this->getPrecio()."' WHERE idContacto=".$this->getIdProducto();
        // echo $sql;
        if ($base->Iniciar()) {
            if ($base->Ejecutar($sql)) {
                $resp = true;
            } else {
                $this->setOp("producto->modificar: ".$base->getError());
            }
        } else {
            $this->setOp("producto->modificar: ".$base->getError());
        }
        return $resp;
    }
    
    public function eliminar(){
        $resp = false;
        $base=new BaseDatos();
        $sql="DELETE FROM producto WHERE idproducto=".$this->getIdProducto();
        if ($base->Iniciar()) {
            if ($base->Ejecutar($sql)) {
                return true;
            } else {
                $this->setOp("producto->eliminar: ".$base->getError());
            }
        } else {
            $this->setOp("producto->eliminar: ".$base->getError());
        }
        return $resp;
    }
    
    public static function listar($parametro=""){
        $arreglo = array();
        $base=new BaseDatos();
        $sql="SELECT * FROM producto ";
        
        if ($parametro!="") {
            $sql.='WHERE '.$parametro;
        }
        // echo"CONSULTA: ".$sql."\n";
        $res = $base->Ejecutar($sql);
        if($res>-1){
            if($res>0){
                while ($row = $base->Registro()){
                    $obj= new Producto();
                    $obj->setear($row['idproducto'], $row['nombre'], $row['talle'], $row['descripcion'], $row['precio']);
                    array_push($arreglo, $obj);
                }
            }
        } else {
            $obj= new Producto();
            $obj->setOp("producto->listar: ".$base->getError());
        }
        return $arreglo;
    }

    public static function Contar(){
        $arreglo = array();
        $base=new BaseDatos();
        $sql="SELECT idProducto FROM producto ";
        $res = $base->Ejecutar($sql);
        if($res>-1){
            if($res>0){
                while ($row = $base->Registro()){
                    $obj= new Producto();
                    $obj->setear($row['idProducto'],null,null,null,null);
                    array_push($arreglo, $obj);
                }
            }
        }
        return count($arreglo);
    }
}


?>