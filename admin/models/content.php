<?php 
require 'model.php';
	class Content extends Model_admin
	{
		public $table = 'content';
		public $primary_key = 'id';

		public function getAll()
		{
			$sql = "SELECT * FROM `{$this->table}`";
			return db_get_all($sql);
		}
	}
 ?>