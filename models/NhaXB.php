<?php
    $objNxb= new NhaXB();
    $dataNxb= $objNxb->getAll();
    function getAll(){
        $objNxb= new NhaXB();
        return $objNxb->getAll();

    }
    function getById($id){
        $objNxb= new NhaXB();
        return $objNxb->getById($id);
    }
    function updateNxb($id, $value){
        $objNxb= new NhaXB();
        return $objNxb->update($id, $value);
    }
    function deleteNxb($id){
        $objNxb= new NhaXB();
        return $objNxb->delete($id);
    }
    function insertNxb($values){
        $objNxb= new NhaXB();
        return $objNxb->insert($values);
    }
?>