<?php

namespace App\Http\Controllers;

use App\Repositories\PersonRepository;
use App\Repositories\RolesRepository;
use App\Repositories\UserRepository;
use App\Repositories\WorkshopRepository;
use App\Traits\Config;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PersonController extends Controller
{
    use Config;

    /**
     * @var PersonRepository
     */
    private $repository;
    /**
     * @var WorkshopRepository
     */
    private $workshopRepository;
    /**
     * @var RolesRepository
     */
    private $rolesRepository;
    /**
     * @var UserRepository
     */
    private $userRepository;

    public function __construct(PersonRepository $repository, UserRepository $userRepository,
                                WorkshopRepository $workshopRepository, RolesRepository $rolesRepository)
    {

        $this->repository = $repository;
        $this->workshopRepository = $workshopRepository;
        $this->rolesRepository = $rolesRepository;
        $this->userRepository = $userRepository;
    }

    public function index()
    {
        $workshop = $this->workshopRepository->findByField('id', $this->get_user_workshop())->first();

        if($workshop)
        {
            $people = $workshop->people;
        }

        $route = 'people.list-default';

        foreach ($people as $person)
        {
            $person->initials = $this->initials($person->name);

            $person->role_name = $this->rolesRepository->findByField('id', $person->role_id)->first() ?
                $this->rolesRepository->findByField('id', $person->role_id)->first()->name : 'Cargo não definido';

            $person->created_at_str = date_format(date_create($person->created_at), 'd/m/Y');
        }

        $people_qtde = count($people);

        return view('index', compact('route', 'people', 'people_qtde'));
    }

    public function employees()
    {
        $workshop = $this->workshopRepository->findByField('id', $this->get_user_workshop())->first();

        if($workshop)
        {
            $people = $this->repository->findByField('role_id', 2);
        }

        return $people;
        //TODO: return view
    }

    public function create()
    {
        $links[] = 'assets/css/pages/wizard/wizard-4.css';

        $scripts[] = 'assets/js/pages/custom/user/add-user.js';

        $route = 'people.create';

        return view('index', compact('links', 'route'));
    }

    public function store(Request $request)
    {
        $data = $request->all();

        $data['workshop_id'] = $this->get_user_workshop();

        if($data['role_id'] == 2)
        {
            $user = $this->userRepository->findByField('email', $data['email'])->first();

            if ($user) {
                $request->session()->flash('error.msg', 'Este usuário já existe em nossa base de dados');

                return redirect()->back();
            }
        }

        DB::beginTransaction();

        try{

            $person_id = $this->repository->create($data)->id;


            $u['email'] = $data['email'];
            $u['password'] = bcrypt($this->random_number());
            $u['person_id'] = $person_id;
            $u['workshop_id'] = $this->get_user_workshop();

            $this->userRepository->create($u);

            DB::commit();

            $request->session()->flash('success.msg', 'O usuário foi cadastrado com sucesso');

            return 'ok';

            //TODO: return view

        }catch (\Exception $e)
        {
            DB::rollBack();

            return $e->getMessage();
        }
    }
}
