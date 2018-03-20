<?php

class IngredientModel extends MY_Model{

    public function __construct()
    {
        $this->tableName = 'Ingredient';

        parent::__construct();
    }
}