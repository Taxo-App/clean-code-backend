<?php

namespace App\Http\Controllers\Topics;

use App\Http\Controllers\Controller;
use App\Repositories\Contracts\TopicRepository;
use Illuminate\Http\Request;

class TopicIndexController extends Controller
{
    protected $topics;
    public function __construct(TopicRepository $topics)
    {
        $this->topics = $topics;
    }
    public function __invoke()
    {
        $topics = $this->topics->all();
        dd($topics);
    }
}
