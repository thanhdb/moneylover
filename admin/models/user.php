<?php 
require 'model.php';
	class User extends Model_admin
	{
		public $table = 'users';
		public $primary_key = 'id';

		public function getAll()
		{
			$sql = "SELECT * FROM `{$this->table}`";
			return db_get_all($sql);
		}

		public function delete($user_id, $value = null)
		{
			if($value == null)
			{
				$value = $this->primary_key;
			}
			// $sql = "DELETE FROM `{$this->table}` WHERE {$value} = ".$user_id;
			return db_delete($this->table,"{$value} = ".$user_id);
		}
	}
 ?>