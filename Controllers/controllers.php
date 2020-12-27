<?php
class Controllers
{
    public function _construct()
    {
        $this->loadModel();
    }
    public function loadModel()
    {
        $model = get_class($this)."Model";
        $routClass = "Models/".$model.".php";
        if(file_exists($routClass)){
            require_once($routClass);
            $this->model = new $model();
        }
    }
}

?>