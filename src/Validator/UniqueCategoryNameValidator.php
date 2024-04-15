<?php

namespace App\Validator;

use App\Repository\RestaurantCategoryRepository;
use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

class UniqueCategoryNameValidator extends ConstraintValidator
{
    private RestaurantCategoryRepository $categoryRepository;

    public function __construct(RestaurantCategoryRepository $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }

    public function validate($value, Constraint $constraint): void
    {
        /* @var $constraint UniqueCategoryName */

        if (null === $value || '' === $value) {
            return;
        }

        // Check if the category name already exists
        $existingCategory = $this->categoryRepository->findOneBy(['categoryName' => $value]);

        if ($existingCategory) {
            // If category name already exists, add a validation error
            $this->context->buildViolation($constraint->message)
                ->setParameter('{{ value }}', $value)
                ->addViolation();
        }
    }
}
