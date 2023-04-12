<?php
declare(strict_types=1);

namespace App\Models;

use AmoCRM\Models\CatalogElementModel;

class Product extends CatalogElementModel
{
    function getPrice(): int | float
    {
        $data = $this->getCustomFieldsValues()->getBy('fieldId', 683659);
        return (float)$data->getValues()->first()->getValue();
    }
    static function cast(object $object): self
    {
        $self = new self();
        foreach (get_object_vars($object) as $key => $name) {
            $self->$key = $name;
        }
        return $self;
    }

}
