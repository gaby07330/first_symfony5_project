<?php 
namespace App\Form;

use App\Entity\Recipes;
use App\Form\ApplicationType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class RecipeType extends ApplicationType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('author')
            ->add('name', TextType::class, $this->getConfiguration("Nom","Le nom de la recette"))
            ->add('step', TextareaType::class, $this->getConfiguration("Etapes","Les étapes de la recette"))
            ->add('Confirmer', SubmitType::class); 
        ;
    }
    
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Recipes::class,
        ]);
    }
}