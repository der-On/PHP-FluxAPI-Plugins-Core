<?php
namespace Plugins\FluxAPI\Core\FieldValidator;

use \Symfony\Component\Validator\Constraints as Assert;

class Url extends \FluxAPI\FieldValidator
{
    public function validate($value, \FluxAPI\Field $field, \FluxAPI\Model $model, array $options = array())
    {
        $constraint = new Assert\Url();
        $errors = $this->_api->app['validator']->validateValue($value, $constraint);

        if (count($errors) > 0) {
            $model->addError(new \FluxAPI\Exception\ValidateException(sprintf('The field "%s" is no valid URL.', $field->name)));
            return false;
        }

        return true;
    }
}