<?php

class IngredientController extends MY_Controller
{
    public function index()
    {
        $data = array(
            'pageTitle' => "Ingredients - Danny Boy"
        );

        $this->renderView('ingredient/ingredient.php', $data);

    }
}