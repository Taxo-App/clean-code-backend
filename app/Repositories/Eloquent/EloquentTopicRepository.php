<?php

namespace App\Repositories\Eloquent;

use App\Models\Topic;
use App\Repositories\Contracts\TopicRepository;

class EloquentTopicRepository implements TopicRepository
{
    public function all()
    {
        return Topic::all();
    }
}
