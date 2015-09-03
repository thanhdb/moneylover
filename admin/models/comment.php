<?php 
class Comment extends Model
{
	public $table = 'comment';
	public $primary_key = 'id';
	

    public function getDone()
    {
		$sql = " SELECT name, title, comment, comment.id
					FROM {$this->table}
		 			JOIN users ON {$this->table}.user_id = users.id
					JOIN content ON {$this->table}.content_id = content.id ";
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