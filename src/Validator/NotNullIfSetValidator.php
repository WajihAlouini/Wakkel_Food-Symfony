<?php // src/Validator/NotNullIfSetValidator.php

namespace App\Validator;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

class NotNullIfSetValidator extends ConstraintValidator
{
public function validate($value, Constraint $constraint)
{
if (null === $value && $this->context->getObject()->getIngredient() !== null) {
$this->context->buildViolation($constraint->message)
->addViolation();
}
}
}
