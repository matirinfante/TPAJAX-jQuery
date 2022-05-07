<?php
include_once('conector/BaseDatos.php');

class Estado
{
    private $id;
    private $descripcion;
    private $idPais;
    private $op;

    public function __construct()
    {
        $this->id = "";
        $this->descripcion = "";
        $this->idPais = "";
        $this->op = "";
    }

    public function setear($id, $descripcion, $idPais)
    {
        $this->setId($id);
        $this->setDescripcion($descripcion);
        $this->setIdPais($idPais);
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getDescripcion()
    {
        return $this->descripcion;
    }

    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    }

    public function getIdPais()
    {
        return $this->idPais;
    }

    public function setIdPais($idPais)
    {
        $this->idPais = $idPais;
    }

    public function getOp()
    {
        return $this->op;
    }

    public function setOp($op)
    {
        $this->op = $op;
    }


    public function cargar()
    {
        $resp = false;
        $base = new BaseDatos();
        $sql = "SELECT * FROM estados WHERE id = " . $this->getId();
        if ($base->Iniciar()) {
            $res = $base->Ejecutar($sql);
            if ($res > -1) {
                if ($res > 0) {
                    $row = $base->Registro();
                    $this->setear($row['id'], $row['descripcion'], $row['idPais']);
                    $resp = true;
                }
            }
        } else {
            $this->setOp("estados->listar: " . $base->getError());
        }
        return $resp;
    }

    public function insertar()
    {
        $resp = false;
        $base = new BaseDatos();
        $sql = "INSERT INTO estados(id, descripcion, idPais) VALUES('" . $this->getId() . "', '" . $this->getDescripcion() . "', '" . $this->getIdPais() . "');";
        if ($base->Iniciar()) {
            if ($elid = $base->Ejecutar($sql)) {
                $this->setId($elid);
                $resp = true;
            } else {
                $this->setOp("estados->insertar: " . $base->getError());
            }
        } else {
            $this->setOp("estados->insertar: " . $base->getError());
        }
        return $resp;
    }

    public function modificar()
    {
        $resp = false;
        $base = new BaseDatos();
        $sql = "UPDATE estados SET descripcion='" . $this->getDescripcion() . "', idPais='" . $this->getIdPais() . "' WHERE idC=" . $this->getId();
        // echo $sql;
        if ($base->Iniciar()) {
            if ($base->Ejecutar($sql)) {
                $resp = true;
            } else {
                $this->setOp("estados->modificar: " . $base->getError());
            }
        } else {
            $this->setOp("estados->modificar: " . $base->getError());
        }
        return $resp;
    }

    public function eliminar()
    {
        $resp = false;
        $base = new BaseDatos();
        $sql = "DELETE FROM estados WHERE id=" . $this->getId();
        if ($base->Iniciar()) {
            if ($base->Ejecutar($sql)) {
                return true;
            } else {
                $this->setOp("estados->eliminar: " . $base->getError());
            }
        } else {
            $this->setOp("estados->eliminar: " . $base->getError());
        }
        return $resp;
    }

    public static function listar($parametro = "")
    {
        $arreglo = array();
        $base = new BaseDatos();
        $sql = "SELECT * FROM estados ";
        if ($parametro != "") {
            $sql .= 'WHERE ' . $parametro;
        }
        //echo "CONSULTA: " . $sql . "\n";
        $res = $base->Ejecutar($sql);
        if ($res > -1) {
            if ($res > 0) {

                while ($row = $base->Registro()) {
                    $obj = new Estado();
                    $obj->setear($row['id'], $row['descripcion'], $row['idPais']);
                    array_push($arreglo, $obj);
                }
            }
        } else {
            $obj = new Contacto();
            $obj->setOp("estados->listar: " . $base->getError());
        }
        return $arreglo;
    }
}

?>