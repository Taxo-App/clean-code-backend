<?php

namespace App\Traits\Eloquent;

use Illuminate\Database\Eloquent\Builder;

trait  HasLive
{
    public function scopelive(Builder $builder)
    {
        return $builder->where('live', true);
    }
}
