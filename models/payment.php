<?php
// require 'model.php';
class Payment extends Model {
    public $table = 'payments';
    public $primary_key = 'id';
    
    public function getAllByUserId($user_id) {
        $first_day_this_month = date("Y-m-d", strtotime('first day of this month'));
        $first_day_next_month = date("Y-m-d", strtotime('first day of next month'));
        
        $sql = "SELECT * FROM `{$this->table}`
                    WHERE `user_id` = " . intval($user_id) . "
                            AND `paid_day` >= '" . $first_day_this_month  . "'
                            AND `paid_day` < '" . $first_day_next_month  . "'";
        
        return db_get_all($sql);
    }
    
    public function addToUser($postData, $user_id) {
        $postData['paid_day'] = date("Y-m-d H:i:s");
        $postData['user_id'] = $user_id;
        
        return db_insert($this->table, $postData);
    }

    public function addToPayment($name, $unit, $quantity, $prices, $product_id)
    {
        $data = array();
        $currentUser = isLogged();
        $user_id = $currentUser['id'];
        $paid_day = date("Y-m-d");
        $data['user_id'] = $user_id;
        $data['product_id'] = $product_id;
        $data['product_name'] = $name;
        $data['quantity'] = $quantity;
        $data['prices'] = $prices;
        $data['paid_day'] = $paid_day;

        // $sql = "INSERT INTO `{$this->table}` (user_id, product_id, product_name, quantity, prices, paid_day) 
        //         VALUES ({$user_id}, {$product_id}, {$name}, {$quantity}, {$prices}, {$paid_day})";
        return db_insert($this->table, $data);
    }
}
