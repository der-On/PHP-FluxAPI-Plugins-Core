<?php
namespace Plugins\FluxAPI\FieldValidator;

use \Symfony\Component\Validator\Constraints as Assert;

class Url extends \FluxAPI\FieldValidator
{
    public function validate($value, \FluxAPI\Field $field, \FluxAPI\Model $model, array $options = array())
    {
        $constraint = new Assert\Url();
        $errors = $this->_api->app['validator']->validateValue($value, $constraint);

        return (count($errors) == 0);
    }
}