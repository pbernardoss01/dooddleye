<?php

class homeModel
{
    public function _construct()
    {
        //echo "Mensaje desde el modelo Home";  
    }
    public function getCarrito($params)
    {
        return "Datos del carrito No. ".$params;
    }
}
