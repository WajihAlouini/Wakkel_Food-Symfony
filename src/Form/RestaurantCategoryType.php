<?php

namespace App\Form;

use App\Entity\RestaurantCategory;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\File;
use Symfony\Component\Validator\Constraints\NotBlank;



class RestaurantCategoryType extends AbstractType
{
    private string $UploadDirectory;

    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('categoryName')

            ->add('categoryImage', FileType::class, [
                'label' => 'Category Image',
                'mapped' => false,
                'required' => false,
                'constraints' => [

                    new NotBlank([
                        'message' => 'Please upload an image',
                    ]),
                ],
            ]);
        $builder->addEventListener(FormEvents::SUBMIT, function (FormEvent $event) {
            $form = $event->getForm();
            $data = $event->getData();


            $categoryImageFile = $form->get('categoryImage')->getData();
            if ($categoryImageFile instanceof UploadedFile) {
                $fileName = md5(uniqid()) . '.' . $categoryImageFile->guessExtension();

                // Move the uploaded file to the desired directory
                $categoryImageFile->move(
                    $this->UploadDirectory='uploads',
                    $fileName
                );

                // Update the data with the file name
                $data->setCategoryImage($fileName);} });}


    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => RestaurantCategory::class,
        ]);
    }
}
