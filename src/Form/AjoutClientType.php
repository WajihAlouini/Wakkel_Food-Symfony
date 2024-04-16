<?php

namespace App\Form;

use App\Entity\Client;
use App\Enum\ClientRole;
use App\Enum\ClientGenre;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Regex;
use Symfony\Component\Validator\Constraints\Email;

class AjoutClientType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $includePassword = $options['include_password']; // Vérifiez si le champ de mot de passe doit être inclus
        $includeEmail = $options['include_email']; // Vérifiez si le champ d'email doit être inclus
        $includeNumero = $options['include_numero']; // Vérifiez si le champ de numéro doit être inclus
        $includeNom = $options['include_nom']; // Vérifiez si le champ de nom doit être inclus
        $includePrenom = $options['include_prenom']; // Vérifiez si le champ de prénom doit être inclus
        $includeAdresse = $options['include_adresse']; // Vérifiez si le champ d'adresse doit être inclus
        $includeGenre = $options['include_genre']; // Vérifiez si le champ de genre doit être inclus

        // Ajouter le champ de nom uniquement si nécessaire
        if ($includeNom) {
            $builder->add('nom_c', null, [
                'label' => 'Nom',
                'constraints' => [
                    new NotBlank(['message' => 'Le nom ne doit pas être vide.']),
                    new Length(['max' => 12, 'maxMessage' => 'Le nom ne doit pas dépasser {{ limit }} caractères.']),
                    new Regex([
                        'pattern' => '/^[a-zA-Z]+$/',
                        'message' => 'Le nom ne doit contenir que des lettres sans espaces.',
                    ]),
                ],
                'invalid_message' => 'Erreur dans le nom.',
            ]);
        }

        // Ajouter le champ de prénom uniquement si nécessaire
        if ($includePrenom) {
            $builder->add('prenom_c', null, [
                'label' => 'Prénom',
                'constraints' => [
                    new NotBlank(['message' => 'Le prénom ne doit pas être vide.']),
                    new Length(['max' => 12, 'maxMessage' => 'Le prénom ne doit pas dépasser {{ limit }} caractères.']),
                    new Regex([
                        'pattern' => '/^[a-zA-Z]+$/',
                        'message' => 'Le prénom ne doit contenir que des lettres sans espaces.',
                    ]),
                ],
                'invalid_message' => 'Erreur dans le prénom.',
            ]);
        }

        // Ajouter le champ d'adresse uniquement si nécessaire
        if ($includeAdresse) {
            $builder->add('adresse_c', null, [
                'label' => 'Adresse',
                'constraints' => [
                    new NotBlank(['message' => 'L\'adresse ne doit pas être vide.']),
                ],
                'invalid_message' => 'Erreur dans l\'adresse.',
            ]);
        }

        // Ajouter le champ de mot de passe uniquement si nécessaire
        if ($includePassword) {
            $builder->add('mdp', PasswordType::class, [
                'label' => 'Mot de passe',
                'constraints' => [
                    new NotBlank(['message' => 'Le mot de passe ne doit pas être vide.']),
                    new Length(['min' => 6, 'minMessage' => 'Le mot de passe doit contenir au moins {{ limit }} caractères.']),
                ],
                'invalid_message' => 'Erreur dans le mot de passe.',
            ]);
        }

        /* // Utilisez cette option pour définir les contraintes du champ de mot de passe en fonction du type de validation choisi
        if ($includePassword) {
            $passwordConstraints = [];
        
            // Déterminez si le champ de mot de passe est requis ou non
            if ($options['empty_password_allowed']) {
                // Le champ de mot de passe est requis, ajoutez la contrainte de non-nullité
                $passwordConstraints[] = new NotBlank(['message' => 'Le mot de passe ne doit pas être vide.']);
                $passwordConstraints[] = new Length(['min' => 6, 'minMessage' => 'Le mot de passe doit contenir au moins {{ limit }} caractères.']);
            } else {
                // Le champ de mot de passe est facultatif, n'ajoutez pas la contrainte de non-nullité
                $passwordConstraints[] = new Regex([
                    'pattern' => '/^.{1,5}$/',
                    'message' => 'Le mot de passe doit contenir au moins 6 caractères.'
                ]);
            }
        
            $builder->add('mdp', PasswordType::class, [
                'label' => 'Mot de passe',
                'constraints' => $passwordConstraints,
                'invalid_message' => 'Erreur dans le mot de passe.',
            ]);
        }*/

        // Ajouter le champ d'email uniquement si nécessaire
        if ($includeEmail) {
            $builder->add('email_c', EmailType::class, [
                'label' => 'Email',
                'constraints' => [
                    new NotBlank(['message' => 'L\'email ne doit pas être vide.']),
                    new Email(['message' => 'L\'adresse email "{{ value }}" n\'est pas valide.']),
                ],
                'invalid_message' => 'Erreur dans l\'email.',
            ]);
        }

        // Ajouter le champ de numéro uniquement si nécessaire
        if ($includeNumero) {
            $builder->add('numero_c', null, [
                'label' => 'Numero',
                'constraints' => [
                    new NotBlank(['message' => 'Le numéro ne doit pas être vide.']),
                    new Length(['min' => 8, 'max' => 8, 'exactMessage' => 'Le numéro doit contenir exactement {{ limit }} chiffres.']),
                    new Regex([
                        'pattern' => '/^\d+$/',
                        'message' => 'Le numéro doit contenir uniquement des chiffres.',
                    ]),
                ],
                'invalid_message' => 'Erreur dans le numéro.',
            ]);
        }

        // Ajouter le champ de genre uniquement si nécessaire
        if ($includeGenre) {
            $builder->add('genre', ChoiceType::class, [
                'choices' => [
                    'homme' => ClientGenre::homme,
                    'femme' => ClientGenre::femme,
                ],
                'placeholder' => 'Choose a genre',
                'label' => 'Genre',
                'invalid_message' => 'Erreur dans le genre.',
            ]);
        }
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Client::class,
            'include_password' => true, // Par défaut, inclure le champ de mot de passe
            'include_email' => true, // Par défaut, inclure le champ d'email
            'include_numero' => true, // Par défaut, inclure le champ de numéro
            'include_nom' => true, // Par défaut, inclure le champ de nom
            'include_prenom' => true, // Par défaut, inclure le champ de prénom
            'include_adresse' => true, // Par défaut, inclure le champ d'adresse
            'include_genre' => true, // Par défaut, inclure le champ de genre
        ]);
    }
}