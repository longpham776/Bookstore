<?php
class LoaiSach extends Db{
    public function getAll(){
        return $this->selectQuery("select * from loai");
    }
    public function getById($id){
        return $this->selectQuery("select * from loai where maloai=?", [$id]);
    }
    public function update($id, $value=[]){
        return $this->updateQuery("update loai set tenloai= ? where maloai=?", [$value["tenloai"], $id]);
    }
    public function delete($id){
        return $this->deleteQuery("delete from loai where maloai=?", [$id]);
    }
    public function insert($values){
        return $this->insertQuery("insert into loai(maloai, tenloai) values(?,?)", $values);
    }
    public function getByKeyword($keyword){
        return $this->selectQuery("select loai.* from loai 
        where loai.tenloai like '%$keyword%'");
    }
}
?>