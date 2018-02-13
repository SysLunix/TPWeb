<?php

class RecipeController extends MY_Controller
{
    public function index()
    {
        // $this->load->model('RecipeModel');

        // $recipe = $this->RecipeModel->getRecipeById(1, true);

        $data = array(
            'pageTitle' => "Danny Boy !!!"
        );

        $this->renderView('recipe/main', $data);

    }

    /**
     * get a recipe
     * 
     * @param int $id
     */
    public function recipe(int $id){}
}