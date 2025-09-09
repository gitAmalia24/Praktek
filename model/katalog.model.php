<?php 
class KatalogModel extends Connect {
    protected $nama;
    protected $kategori;
    protected $manfaat;

    protected function findAll(){
        $sql = 'SELECT * FROM tanaman';
        $result = $this->connect()->query($sql);
        if($result->num_rows >0){
            while ($data = mysqli_fetch_assoc($result)){
                $product[] = $data;
            }
            return $product;
        }
    }

    protected function findOne($id){
        $sql = 'SELECT * FROM tanaman WHERE id = ' . $id;
        $result = $this->connect()->query($sql);
         if($result->num_rows >0){
            while ($data = mysqli_fetch_assoc($result)){
                $product[] = $data;
            }
            return $product;
        }
    }
}
?>