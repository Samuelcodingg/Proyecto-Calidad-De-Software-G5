<?php

//php clase cart

class Cart
{
    public $db = null;

    public function __construct(DBController $db)
    {
        if (!isset($db->con)) return null;
        $this->db = $db;
    }

    //insert into cart table
    public function insertintoCart($params = null, $table = 'carrocompras')
    {
        if ($this->db->con != null) {
            if ($params != null) {
                //"insert into cart(user_id) values(0)"
                //get table columms
                $columns = implode(',', array_keys($params));

                $values = implode(',', array_values($params));

                //create sql query
                $query_string = sprintf("INSERT INTO %s(%s) VALUES(%s)", $table, $columns, $values);

                //ejecutar query
                $result = $this->db->con->query($query_string);
                return $result;
            }
        }
    }

    //obtener user_id y item_id insert into cart table
    public function addToCart($userid, $itemid)
    {
        if (isset($userid) && isset($itemid)) {
            $params = array(
                "user_id" => $userid,
                "item_id" => $itemid
            );

            //insert data into cart
            $result = $this->insertintoCart($params);
            if ($result) {
                header("Location: " . $_SERVER['PHP_SELF']);
            }
        }
    }

    //calcular sub total
    public function getSum($arr)
    {
        if (isset($arr)) {
            $sum = 0;
            foreach ($arr as $item) {
                $sum += floatval($item[0]);
            }
            return sprintf('%2f' . $sum);
        }
    }

    //delete cart item using cart item id
    public function deleteCart($item_id = null, $table = 'carrocompras')
    {
        if ($item_id != null) {
            $result = $this->db->con->query("DELETE FROM {$table} WHERE item_id={$item_id}");
            if ($result) {
                header("Location:" . $_SERVER['PHP_SELF']);
            }
            return $result;
        }
    }

    //get item_id of shopping cart list
    public function getCartid($cartArray = null, $key = "item_id")
    {
        if ($cartArray != null) {
            $cart_id = array_map(function ($value) use ($key) {
                return $value[$key];
            }, $cartArray);
            return $cart_id;
        }
    }
}
