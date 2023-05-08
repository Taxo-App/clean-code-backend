<?php

namespace App\Http\Controllers\Topics;

use App\Http\Controllers\Controller;
use App\Repositories\Contracts\TopicRepository;
use App\Repositories\Eloquent\Criteria\LatestFirst;
use Illuminate\Http\Request;
use Inertia\Inertia;

class TopicIndexController extends Controller
{
    protected $topics;
    public function __construct(TopicRepository $topics)
    {
        $this->topics = $topics;
    }
    public function __invoke()
    {
        $topics = $this->topics->withCriteria(new LatestFirst())
            ->paginate();

        return Inertia::render('Topics/Index', [
            'topics' => $topics
        ]);
    }
}
