<?php
class KatalogController extends KatalogModel{

    public function getKatalog()
    {
        return $this->findAll();
    }
    public function getKatalogBy()
    {
        if (!isset($GET['id'])){
            return;
        }
        $onlyId = preg_replace('/\D/', '', $_GET['id']);
        if ($onlyId !== ""){
            return $this->findOne($_GET['id']);
        }
    }
}
?>