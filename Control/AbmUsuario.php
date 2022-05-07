<?php

class AbmUsuario
{
    /**
     * @param array $param
     */
    public function alta($param)
    {
        $resp = false;
        $param["username"] = null;
        $objCont = $this->cargarObjeto($param);

        if ($objCont != null and $objCont->insertar()) {

            $resp = true;
        }
        return $resp;
    }

    /**
     * Espera como parametro un arreglo asociativo donde las claves coinciden con los nombres de las variables instancias del objeto
     * @param array $param
     * @return object
     */
    public function cargarObjeto($param)
    {
        $obj = null;
        if (array_key_exists('idContacto', $param) && array_key_exists('nombre', $param) && array_key_exists('empresa', $param) && array_key_exists('telefono', $param) && array_key_exists('mail', $param) && array_key_exists('comentario', $param)) {
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