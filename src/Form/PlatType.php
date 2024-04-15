<?php // src/Form/PlatType.php

// src/Form/PlatType.php

namespace App\Form;

use App\Entity\Plat;
use App\Entity\Restaurant;
use App\Entity\RestaurantCategory;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use App\Repository\RestaurantRepository;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Validator\Constraints\NotBlank;

class PlatType extends AbstractType
{
    private string $uploadDirectory;
    private RestaurantRepository $restaurantRepository;

    public function __construct(RestaurantRepository $restaurantRepository)
    {
        $this->restaurantRepository = $restaurantRepository;
    }

    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('Restaurant', EntityType::class, [
                'class' => Restaurant::class,
                'choice_label' => 'nomRestaurant', // Adjust this according to your RestaurantCategory entity
                'placeholder' => 'Select a restaurant',])
            ->add('nomPlat')
            ->add('prix')
            ->add('ingredient')
            ->add('platImage', FileType::class, [
                'label' => 'Category Image',
                'mapped' => false,
                'required' => false,
                'constraints' => [

                    new NotBlank([
                        'message' => 'Please upload an image',
                    ]),
                ],
            ]);

        // Add event listener to handle file upload
        $builder->addEventListener(FormEvents::SUBMIT, function (FormEvent $event) {
            $form = $event->getForm();
            $data = $event->getData();

            // Handle file upload if platImage field is not empty
            $platImageFile = $form->get('platImage')->getData();
            if ($platImageFile instanceof UploadedFile) {
                $fileName = md5(uniqid()) . '.' . $platImageFile->guessExtension();

                // Move the uploaded file to the desired directory
                $platImageFile->move(
                    $this->uploadDirectory='uploads',
                    $fileName
                );

                // Update the data with the file path
                $data->setPlatImage($fileName);
            }
        });
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Plat::class,
        ]);
    }
}
