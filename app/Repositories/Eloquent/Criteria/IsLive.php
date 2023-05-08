<?php

namespace App\Repositories\Eloquent\Criteria;

use App\Repositories\Criteria\CriterionInterface;

class IsLive implements CriterionInterface
{
    public function apply($entity)
    {
        return $entity->live();
    }
}
