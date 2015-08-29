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

		public function delete($user_id)
		{
			$sql = "DELETE FROM `{$this->table}` WHERE {$this->primary_key} = ".$user_id;
			return db_get_all($sql);
		}
	}
 ?>