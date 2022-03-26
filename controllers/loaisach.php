<?php
    $action = Utilities::get("action", 'index');
    switch ($action) {
        case 'index':
            include "./models/loaisach.php";
            include './views/loaisach/index.php';
            
            break;
        case 'edit':
            include "./models/loaisach.php";
            $maloai= Utilities::get("maloai");
            $loaiById= getLoaiById($maloai);
            include "./views/loaisach/edit.php";
            break;
        case 'update':
            include './models/loaisach.php';
            $maloai= Utilities::get("maloai");
            $tenloai= Utilities::post("tenloai");
            updateLoai($maloai, ["tenloai"=>$tenloai]);
            $dataLoai= getAllLoai();
            include "./views/loaisach/index.php";
            break;
        case 'delete':
            $maloai= Utilities::get("maloai");
            include "./models/loaisach.php";
            deleteLoai($maloai);
            $dataLoai= getAllLoai();
            include "./views/loaisach/index.php";
            break;
        case 'add':
            include "views/loaisach/add.php";
            break;
        case "addNew":
            $maloai= Utilities::post("maloai");
            $tenloai= Utilities::post("tenloai");
            include "./models/loaisach.php";
            insertLoai([$maloai, $tenloai]);
            $dataLoai=getAllLoai();
            include "./views/loaisach/index.php";
            break;
        case "filter":
            $keyword= Utilities::post("keyword");
            include './models/loaisach.php';
            $dataSach=getKeyword($keyword);
            include './views/loaisach/index.php';
            break;
        default:
            # code...
            break;
    }
?>