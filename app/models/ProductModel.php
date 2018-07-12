<?php

class ProductModel extends DModel{

	public function __construct(){
		parent::__construct();
	}

	public function getAllProduct($table){
		$sql="SELECT * FROM $table ORDER BY id DESC";
		return $this->db->select($sql);
	}

	public function productById($table,$id){
		$sql="select * from $table where id=:id";
		$data=array(":id"=>$id);
		return $this->db->select($sql,$data);
		
		// $stmt->bindParam(':id',$id);
		// $stmt->execute();
		// return $stmt->fetchAll();
		
	}

	public function insertCat($table,$data){
		return $this->db->insert($table,$data);
	}

	public function productUpdate($table,$data,$cond){
		return $this->db->update($table,$data,$cond);
	}
	
	public function deleteById($table,$cond){
		return $this->db->delete($table,$cond);
	}
} 
?>