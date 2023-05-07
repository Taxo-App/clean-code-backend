<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Repositories\Contracts\UserRepository;
use Illuminate\Http\Request;

class UserIndexController extends Controller
{
    protected $users;
    public function __construct(UserRepository $users)
    {
        $this->users = $users;
    }

    public function __invoke()
    {
        $users = $this->users->all();
        dd($users);
    }
}
