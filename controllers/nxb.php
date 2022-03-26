<?php
    $action= Utilities::get("action");
    switch ($action) {
        case 'index':
            include './models/NhaXB.php';
            include './views/nhaxb/index.php';
            break;
        case 'edit':
            include "./models/NhaXB.php";
            $manxb= Utilities::get("manxb");
            $nxbById= getById($manxb);
            include './views/nhaxb/edit.php';
            break;
        case 'update':
            $manxb= Utilities::get("manxb");
            $tennxb= Utilities::post("tennxb");
            include './models/NhaXB.php';
            updateNxb($manxb, ["tennxb"=>$tennxb]);
            $dataNxb= getAll();
            include './views/nhaxb/index.php';
            break;
        case 'delete':
            $manxb= Utilities::get("manxb");
            include "./models/NhaXB.php";
            deleteNxb($manxb);
            $dataNxb= getAll();
            include './views/nhaxb/index.php';
            break;
        case "add":
            include "./views/nhaxb/add.php";
            break;
        case "insert";
            $manxb= Utilities::post("manhaxb");
            $tennxb= Utilities::post("tennhaxb");
            include "./models/NhaXB.php";
            insertNxb([$manxb,$tennxb]);
            $dataNxb= getAll();
            include "./views/nhaxb/index.php";
            break;
        default:
            # code...
            break;
    }
?>