<?php
class AbmContacto
{
    /**
     * @param array $param
     */
    public function alta($param)
    {
        $resp = false;
        $param["idContacto"] = null;
        $objCont = $this->cargarObjeto($param);

        if ($objCont != null and $objCont->insertar()) {

            $resp = true;
        }
        return $resp;
    }


    /**
     * permite eliminar un objeto 
     * @param array $param
     * @return boolean
     */
    public function baja($param)
    {
        $resp = false;
        if ($this->seteadosCamposClaves($param)) {
            // echo "campo seteado \n";
            $objCont = $this->cargarObjetoConClave($param);
            // print_r($objCont);
            if ($objCont != null and $objCont->eliminar()) {
                $resp = true;
            }
        }
        return $resp;
    }

    /**
     * permite modificar un objeto
     * @param array $param
     * @return boolean
     */
    public function modificacion($param)
    {
        $resp = false;
        // echo"Entro a modificacion";
        // print_r($param);
        if ($this->seteadosCamposClaves($param)) {
            // echo"<br> Campos claves seteados";
            $objCont = $this->cargarObjeto($param);
            if ($objCont != null and $objCont->modificar()) {
                $resp = true;
            }
        }
        return $resp;
    }

    /**
     * permite buscar un objeto
     * @param array $param
     * @return boolean
     */
    public function buscar($param)
    {
        $where = " true ";
        if ($param <> NULL) {
            if (isset($param['idContacto']))
                $where .= " and idContacto ='" . $param['idContacto'] . "'";
            if (isset($param['nombre']))
                $where .= " and Nombre ='" . $param['nombre'] . "'";
            if (isset($param['empresa']))
                $where .= " and Empresa ='" . $param['empresa'] . "'";
            if (isset($param['telefono']))
                $where .= " and Telefono ='" . $param['telefono'] . "'";
            if (isset($param['mail']))
                $where .= " and Mail ='" . $param['mail'] . "'";
            if (isset($param['comentario']))
                $where .= " and Comentario ='" . $param['comentario'] . "'";
        }
        // echo "<br>WHERE : " . $where."<br>";
        $arreglo = Contacto::listar($where);
        // print_r($arreglo);
        return $arreglo;
    }

    /**
     * Espera como parametro un arreglo asociativo donde las claves coinciden con los nombres de las variables instancias del objeto
     * @param array $param
     * @return object
     */
    public function cargarObjeto($param)
    {
        $obj = null;
        if (array_key_exists('idContacto', $param) && array_key_exists('nombre', $param) && array_key_exists('empresa', $param) && array_key_exists('telefono', $param) && array_key_exists('mail', $param)&& array_key_exists('comentario', $param)) {
            $obj = new Contacto();
            $obj->setear($param['idContacto'], $param['nombre'], $param['empresa'], $param['telefono'], $param['mail'], $param['comentario']);
        }
        return $obj;
    }

    /**
     * Espera como parametro un arreglo asociativo donde las claves coinciden con los nombres de las variables instancias del objeto que son claves
     * @param array $param
     * @return object
     */
    private function cargarObjetoConClave($param)
    {
        $obj = null;
        if (isset($param['idContacto'])) {
            $obj = new Contacto();
            $obj->setear($param["idContacto"], null, null, null, null, null);
        }
        return $obj;
    }


    /**
     * Corrobora que dentro del arreglo asociativo estan seteados los campos claves
     * @param array $param
     * @return boolean
     */

    private function seteadosCamposClaves($param)
    {
        $resp = false;
        if (isset($param['idContacto']))
            $resp = true;
        return $resp;
    }
}
