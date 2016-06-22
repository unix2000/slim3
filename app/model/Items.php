<?php
class Items extends BaseModel{
	public function getItems(){
		// //return $this->pdo;
		// $s = $this->pdo->prepare("select id,name from items limit 0,10");
		// $s->execute();
		// //return json_encode($s->fetchall());
		// return $s->fetchall();
		return $this->pdo->items()
			->select('id,name,email,address')
			->order('id')
			->limit(10);
	}
	public function getItemsById($id){
		$id = (int)$id;
		$data = $this->pdo->items()
			->select('id,name,email,address')
			->where(array('id'=>$id));
		// //return json_encode($data[1]);
		return $data[$id];
		// return $id;
		//return $data;
	}
}