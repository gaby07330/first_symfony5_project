<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

use Doctrine\ORM\EntityManagerInterface;




use App\Form\RecipeType;
use App\Entity\Recipes;

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

        /*Création d'une instance de "recipes" */
        $recipe = new Recipes();

        /* Pour les entré dans la bdd avec doctrine */
        $entityManager = $this->getDoctrine()->getManager();

        /* Création du formulaire à partir du formulaire type RecipeType */
        $form = $this->createForm(RecipeType::class, $recipe);

        // Permet au formulaire de manipuler les requettes
        $form->handleRequest(($request));


        /* Appelé à la soumission */
        if($form->isSubmitted() && $form->isValid()){

            /* Alimente la date de création de l'objet recipe*/
            $recipe->setCretedAt(new \DateTime());

            /*Dit a doctrine que l'on veux eventuelement sauvegarder l'objet recipe*/
            $entityManager->persist($recipe);

            /* Exectute la requete en bdd */
            $entityManager->flush();


            $this->addFlash(
                'success',
                'Merci pour votre recette ! ');

            return $this->redirectToRoute('recipes');
        }

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