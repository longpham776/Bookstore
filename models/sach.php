<?php
    $objSach= new Sach();
    $dataSach= $objSach->getAll();
    function getSachById($id){
        $objSach= new Sach();
        return $objSach->getById($id);
    }
     function updateSach($dataSach){
        $objSach= new Sach();
        $dataSach= $objSach->getAll();
        $masach= Utilities::post("masach");
        if($masach!=""){
            $tensach=Utilities::post("tensach");
            $gia=Utilities::post("giasach");
            $loaisach=Utilities::post("loaisach");
            $nhaxb=Utilities::post("nhaxb");
            $mota=Utilities::post("mota");
            $filehinh=Utilities::post("hinh");
            $tenHinh="";
            if($filehinh!=""){
                if($filehinh["error"]==0){
                    $tenHinh= $filehinh["name"];
                    move_uploaded_file($filehinh['tmp_name'], "./resources/images/products/$tenHinh");
                }
            }
            if($tenHinh==""){
                foreach($dataSach as $sach){
                    if($sach["masach"]== $masach){
                        $tenHinh= $sach["hinh"];
                    }
                }
                
            }
            $value = ["tensach"=>$tensach, "mota"=>$mota, "gia"=>$gia, "maloai"=>$loaisach,"manxb"=>$nhaxb, "hinh"=>$tenHinh];
            $objSach->update($masach, $value);
        }
    }
    function getAllSach(){
        $objSach= new Sach();
        $dataSach= $objSach->getAll();
        return $dataSach;
    }
    function deleteSach($id){
        $objSach= new Sach();
        $row= $objSach->deleteById($id);
        return $row;
    }
    function addSach($value){
        
        $objSach= new Sach();
        $row= $objSach->insert($value);
        return $row;
    }
    function getByKeyword($keyword){
        $objSach= new Sach();
        return $objSach->getByKeyword($keyword);
    }
    function getBySearch($kw){
        $objSach= new Sach();
        return $objSach->getSearch($kw);
    }
?>