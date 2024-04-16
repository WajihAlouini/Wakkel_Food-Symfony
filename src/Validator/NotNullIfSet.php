<?php // src/Validator/Constraints/NotNullIfSet.php

      namespace App\Validator;

      use Symfony\Component\Validator\Constraint;

      /**
       * @Annotation
       */
      class NotNullIfSet extends Constraint
      {
          public $message = 'The ingredient field must not be empty.';
      }
