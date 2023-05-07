<?php

namespace App\Repositories;


use App\Repositories\Exceptions\NoEntityDefined;
use App\Repositories\Contracts\RepositoryInterface;

abstract class RepositoryAbstract implements RepositoryInterface
{
    protected $entity;

    public function __construct()
    {
        $this->entity = $this->resolveEntity();

    }

    public function all()
    {
        return $this->entity->all();
    }

    protected function resolveEntity()
    {
        if (!method_exists($this,'entity')) {
            throw new NoEntityDefined('No entity defined!');
        }

        return app()->make($this->entity()); // App\AnyEntity
    }
}
