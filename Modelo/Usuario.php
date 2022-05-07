<?php

class Usuario
{
    private $username;
    private $password;
    private $nombre;
    private $apellido;

    /**
     * @param $username
     * @param $password
     * @param $nombre
     * @param $apellido
     */
    public function __construct($username, $password, $nombre, $apellido)
    {
        $this->username = $username;
        $this->password = $password;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
    }

    public function setear($username, $password, $nombre, $apellido)
    {
        $this->setUsername($username);
        $this->setNombre($nombre);
        $this->setPassword($password);
        $this->setApellido($apellido);

    }

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param mixed $username
     * @return Usuario
     */
    public function setUsername($username)
    {
        $this->username = $username;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     * @return Usuario
     */
    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * @param mixed $nombre
     * @return Usuario
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getApellido()
    {
        return $this->apellido;
    }

    /**
     * @param mixed $apellido
     * @return Usuario
     */
    public function setApellido($apellido)
    {
        $this->apellido = $apellido;
        return $this;
    }

    public function cargar()
    {
        $resp = false;
        $base = new BaseDatos();
        $sql = "SELECT * FROM usuario WHERE username = " . $this->getUsername();
        if ($base->Iniciar()) {
            $res = $base->Ejecutar($sql);
            if ($res > -1) {
                if ($res > 0) {
                    $row = $base->Registro();
                    $this->setear($row['username'], $row['password'], $row['nombre'], $row['apellido']);
                    $resp = true;
                }
            }
        }
        return $resp;


    }

    public function insertar()
    {
        $resp = false;
        $base = new BaseDatos();
        $sql = "INSERT INTO usuario(username, password, nombre, apellido) VALUES('{$this->getUsername()}','{$this->getPassword()}','{$this->getNombre()}','{$this->getApellido()}');";
        if ($base->Iniciar()) {
            if ($elid = $base->Ejecutar($sql)) {
                $resp = true;
            }
        }
        return $resp;
    }

    public static function listar($parametro = "")
    {
        $arreglo = array();
        $base = new BaseDatos();
        $sql = "SELECT * FROM usuario";
        if ($parametro != "") {
            $sql .= 'WHERE ' . $parametro;
        }
        $res = $base->Ejecutar($sql);
        if ($res > -1) {
            if ($res > 0) {

                while ($row = $base->Registro()) {
                    $obj = new Usuario();
                    $obj->setear($row['username'], $row['password'], $row['nombre'], $row['apellido']);
                    array_push($arreglo, $obj);
                }
            }
        } else {
            $obj = new Usuario();
            $obj->setOp("contactos->listar: " . $base->getError());
        }

        return $arreglo;
    }

}