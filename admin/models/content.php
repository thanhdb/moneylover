<?php 
// require 'model.php';
	class Content extends Model
	{
		public $table = 'content';
		public $primary_key = 'id';

		public function getAll()
		{
			$sql = "SELECT * FROM `{$this->table}`";
			return db_get_all($sql);
		}

		public function delete($post_id)
		{
			// $sql = "SELECT * FROM `{$this->table}` WHERE {$this->primary_key} = ".$post_id;
			return db_delete($this->table, "{$this->primary_key} = ".$post_id);
		}

		public function insert($data)
		{
			// $data = array();
			return db_insert($this->table, $data);
		}

		public function update($data, $id)
		{
			return db_update($this->table, $data, 'id='.$id);
		}
	}
 ?>