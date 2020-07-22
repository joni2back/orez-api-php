<?php

namespace OwnerRez\Api\Resources;

use OwnerRez\Api\Glue\ResourceBase;

class Properties extends ResourceBase
{
    public function __construct($service)
    {
        parent::__construct($service, 'properties');
    }

    public function search(array $query)
    {
        return parent::get("search", $query);
    }
}