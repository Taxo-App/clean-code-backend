<?php

namespace App\Repositories;


use App\Repositories\Criteria\CriteriaInterface;
use App\Repositories\Exceptions\NoEntityDefined;
use App\Repositories\Contracts\RepositoryInterface;
use Illuminate\Support\Arr;

abstract class RepositoryAbstract implements RepositoryInterface, CriteriaInterface
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

    public function find($id)
    {
        return $this->entity->find($id);
    }

    public function findWhere($column, $value)
    {
        return $this->entity->where($column, $value)->get();
    }

    public function findWhereFirst($column, $value)
    {
        return $this->entity->where($column, $value)->first();
    }

    public function paginate( $perPage = 10)
    {
        return $this->entity->paginate($perPage);
    }

    public function create(array $properties)
    {
        return $this->entity->create($properties);
    }

    public function update($id ,array $properties)
    {
        return $this->find($id)->update($properties);
    }

    public function delete($id)
    {
        return $this->find($id)->delete();
    }

    public function withCriteria(...$criteria)
    {
        $criteria = Arr::flatten($criteria);

        foreach ($criteria as $criterion){
            $this->entity = $criterion->apply($this->entity);
        }

        return $this;

    }

    protected function resolveEntity()
    {
        if (!method_exists($this,'entity')) {
            throw new NoEntityDefined('No entity defined!');
        }

        return app()->make($this->entity()); // App\AnyEntity
    }
}
