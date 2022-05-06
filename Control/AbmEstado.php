<?php
class AbmEstado
{
    /**
     * @param array $param
     */
    public function alta($param)
    {
        $resp = false;
        $param["id"] = null;
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
            if (isset($param['id']))
                $where .= " and id ='" . $param['id'] . "'";
            if (isset($param['descripcion']))
                $where .= " and descripcion ='" . $param['descripcion'] . "'";
            if (isset($param['idPais']))
                $where .= " and idPais ='" . $param['idPais'] . "'";
            if (isset($param['condicion']))
                $where .= " and descripcion " . $param['condicion'];
        }
        // echo "<br>WHERE : " . $where."<br>";
        $arreglo = Estado::listar($where);
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
        if (array_key_exists('id', $param) && array_key_exists('descripcion', $param) && array_key_exists('idPais', $param)) {
            $obj = new Estado();
            $obj->setear($param['id'], $param['descripcion'], $param['idPais']);
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
        if (isset($param['id'])) {
            $obj = new Estado();
            $obj->setear($param["id"], null, null, null, null, null);
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
        if (isset($param['id']))
            $resp = true;
        return $resp;
    }
}
