<?php

namespace App\Http\Controllers;

use App\Repositories\PersonRepository;
use App\Repositories\UserRepository;
use App\Traits\Config;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    use Config;
    /**
     * @var PersonRepository
     */
    private $personRepository;
    /**
     * @var UserRepository
     */
    private $userRepository;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(PersonRepository $personRepository, UserRepository $userRepository)
    {
        $this->middleware('auth');
        $this->personRepository = $personRepository;
        $this->userRepository = $userRepository;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $route = 'home.index';

        $scripts[] = 'assets/js/pages/dashboard.js';

        return view('index', compact('route', 'scripts'));
    }
}
