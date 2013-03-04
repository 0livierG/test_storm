<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Utilisateur
 * Date: 04/03/13
 * Time: 14:26
 * To change this template use File | Settings | File Templates.
 */
class Panier {
    // Eléments de notre panier
    var $items;

    public function setItems($items)
    {
        $this->items = $items;
    }

    public function getItems()
    {
        return $this->items;
    }




}