<?php
namespace Plugins\FluxAPI\FieldValidator;

class Required extends \FluxAPI\FieldValidator
{
    public function validate($value, \FluxAPI\Field $field, \FluxAPI\Model $model, array $options = array())
    {
        return (!empty($value));
    }
}