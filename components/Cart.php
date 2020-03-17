<?php

class Cart {

    public static function addProduct($id) {
        
        $id = intval($id);
        //Пустой массив, в котором будут содержаться товары
        $productsInCart = array();
        
        if(isset($_SESSION['products']))
        {
            $productsInCart = $_SESSION['products'];
        }
        
        //Проверяем, имеется ли уже товар в корзине, если да, то просто увеличиваем его кол-во
        if(array_key_exists($id, $productsInCart))
        {
            $productsInCart[$id]++;
        }else //Иначе добавляем новый товар в кол-ве 1 шт.
        {
            $productsInCart[$id] = 1;
        }
        $_SESSION['products'] = $productsInCart;
        return self::countItems();
    }
    
    //подсчитываем кол-во товаров в корзине
    public static function countItems() {
        
        if(isset($_SESSION['products']))
        {
            $count = 0;
            
            foreach (($_SESSION['products']) as $id => $quantity) {
                $count = $count + $quantity;
            }
            return $count;
        }else {
            return 0;
        }
    }
    
    public static function getProducts() {
        
        if (isset($_SESSION['products'])) {
            return $_SESSION['products'];
        }
        return false;
    }
    public static function getTotalPrice($products) {
        $productsInCart = self::getProducts();
        
        $total = 0;
        if($productsInCart){
            foreach ($products as $item)
            {
                $total += $item['price'] * $productsInCart[$item['id']];
            }
        }
        return $total;  
    }
    public static function clear()
    {
        if (isset($_SESSION['products'])){
            unset($_SESSION['products']);
        }
    }
    public static function delete($id)
    {
        $delete = array_key_exists($id, ($_SESSION['products']));
        if ($delete == true)
            unset($_SESSION['products'][$id]);
    }
}
