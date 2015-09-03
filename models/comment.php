<?php 
	
class Comment extends Model
{
	public $table = 'comment';
    public $primary_key = 'id';

    public function addToComment($idPost, $msgCmt)
    {
    	$insert = array();
    	$currentUser = isLogged();

    	$insert['user_id'] = $currentUser['id'];
    	$insert['content_id'] = $idPost;
    	$insert['comment'] = $msgCmt;

    	return db_insert($this->table, $insert);
    }

    public function getAll()
    {
    	$sql = "SELECT comment FROM {$this->table}";
    	
    	return db_get_all($sql);
    }

    public function getUsersId($id_content)
    {
    	$sql = "SELECT user_id FROM {$this->table} WHERE content_id={$id_content}";

    	return db_get_all($sql);
    }
}
?>
