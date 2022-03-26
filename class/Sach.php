<?php
    class Sach extends Db{
        public function getAll(){
            return $this->selectQuery("select * from sach");
        }
        public function getById($id){
            return $this->selectQuery("select * from sach where masach=?",[$id]);
        }
        public function getByLoai($idLoai){
            return $this->selectQuery("select * from sach where maloai=?", [$idLoai]);
        }
        public function getByNxb($idNxb){
            return $this->selectQuery("select * from sach where manxb=?", [$idNxb]);
        }
        public function deleteById($id){
            return $this->deleteQuery("delete from sach where masach=?", [$id]);
        }
        public function update($id, $value){
            return $this->updateQuery("update sach set tensach=?,mota=?,gia=?,maloai=?,manxb=?,hinh=?  where masach=? ",[$value["tensach"], $value["mota"], $value["gia"], $value["maloai"], $value["manxb"], $value["hinh"], $id]);
        }
        public function insert($value=[]){
            return $this->insertQuery("insert into sach(masach, tensach, mota, gia, maloai, manxb, hinh) values(?,?,?,?,?,?,?)",$value);
        }
        public function getSearch($kw){
            return $this->selectQuery("select * from sach where tensach like ? ",[$kw]);
        }
        public function getByKeyword($keyword){
            return $this->selectQuery("select sach.* from sach join loai on sach.maloai= loai.maloai join nhaxb on sach.manxb=nhaxb.manxb 
            where sach.tensach like '%$keyword%' 
                or sach.mota like '%$keyword%'
                or loai.tenloai like '%$keyword%' 
                or nhaxb.tennxb like '%$keyword%'
            ");
        }
    }
?>