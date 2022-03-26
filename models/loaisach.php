<?php
    $objLoai= new LoaiSach();
    $dataLoai=$objLoai->getAll();
    function getLoaiById($id){
        
        $objLoai= new LoaiSach();
        return $objLoai->getById($id);
    }
    function getAllLoai(){
        
        $objLoai= new LoaiSach();
        return $objLoai->getAll();
    }
    function updateLoai($id, $value){
        $objLoai= new LoaiSach();
        return $objLoai->update($id, $value);
    }
    function deleteLoai($id){
        $objLoai= new LoaiSach();
        return $objLoai->delete($id);
    }
    function insertLoai($value){
        
        $objLoai= new LoaiSach();
        return $objLoai->insert($value);
    }
    function getKeyword($keyword){
        $objSach= new LoaiSach();
        return $objSach->getByKeyword($keyword);
    }
?>