<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Common\Persistence\ObjectManager;


use App\Form\RecipeType;
use App\Entity\Recipe;

class RecipesController extends AbstractController
{
    /**
     * @Route("/recipes", name="recipes")
     */
    public function index()
    {
        return $this->render('recipes/index.html.twig', [
            'controller_name' => 'RecipesController',
        ]);
    }




    /**
     * @Route("/recipe/new", name="recipeNew", )
     */
    public function recipeNew(Request $request)
    {

        $recipe = new Recipe();

        $form = $this->createForm(RecipeType::class, $recipe);

        return $this->render('recipes/new.html.twig', [
            'form'=> $form->createView(),
        ]);
    }



    /**
     * @Route("/recipe/{recipeId}", name="recipe", )
     */
    public function recipe($recipeId)
    {
        return $this->render('recipes/recipe.html.twig', [
            'recipe'=> $recipeId
        ]);
    }




}/*EO RecipesController */