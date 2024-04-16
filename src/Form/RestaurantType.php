<?php

namespace App\Form;

use App\Entity\Restaurant;
use App\Entity\RestaurantCategory;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RestaurantType extends AbstractType
{
    private $UploadDirectory;

    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nomRestaurant')
            ->add('adresseRestaurant')
            ->add('restaurantImage', FileType::class, [
                'label' => 'Restaurant Image',
                'mapped' => false, // Tell Symfony not to try to map this field to an entity property
                'required' => false, // Make the file upload optional
                'attr' => ['accept' => 'image/*']]) // Restrict file types to images
            ->add('restaurantCategory', EntityType::class, [
                'class' => RestaurantCategory::class,
                'choice_label' => 'categoryName', // Adjust this according to your RestaurantCategory entity
                'placeholder' => 'Select a category', // Optional placeholder

            ]);

        // Add event listener to handle file upload
        $builder->addEventListener(FormEvents::SUBMIT, function (FormEvent $event) {
            $form = $event->getForm();
            $data = $event->getData();

            // Handle file upload if restaurantImage field is not empty
            $restaurantImageFile = $form->get('restaurantImage')->getData();
            if ($restaurantImageFile instanceof UploadedFile) {
                $fileName = md5(uniqid()) . '.' . $restaurantImageFile->guessExtension();

                // Move the uploaded file to the desired directory
                $restaurantImageFile->move(
                    $this->UploadDirectory='uploads',
                    $fileName
                );

                // Update the data with the file name
                $data->setRestaurantImage($fileName);
            }
        });
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Restaurant::class,
        ]);
    }
}
