<?php

namespace OwnerRez\Api\Resources;

use OwnerRez\Api\Glue\ResourceBase;

class ExternalSites extends ResourceBase
{
    public function __construct($service)
    {
        parent::__construct($service, 'externalsites');
    }

    public function get(int $id)
    {
        return parent::request('get', null, $id);
    }

    public function register()
    {
        return parent::request('post', "register");
    }
}