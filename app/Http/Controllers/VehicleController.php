<?php

namespace App\Http\Controllers;

use App\Repositories\CarRepository;
use App\Repositories\PersonRepository;
use App\Repositories\VehicleRepository;
use App\Traits\Config;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VehicleController extends Controller
{
    use Config;

    private $repository;
    private $personRepository;
    /**
     * @var CarRepository
     */
    private $carRepository;

    public function __construct(VehicleRepository $repository, PersonRepository $personRepository, CarRepository $carRepository)
    {

        $this->repository = $repository;
        $this->personRepository = $personRepository;
        $this->carRepository = $carRepository;
    }

    /**
     * List all vehicle in workshop
     * @return View
     */
    public function index()
    {
        $vehicles = $this->repository->findByField('workshop_id', $this->get_user_workshop());

        $route = 'vehicles.index';

        return view('index', compact('vehicles', 'route'));
    }

    /**
     * List all vehicles by owner
     * @param $owner_id
     * @return View
     */
    public function vehicle_by_owner($owner_id)
    {
        $vehicles = $this->repository->findByField('owner_id', $owner_id);

        $route = 'vehicles.by_owner';

        return view('index', compact('vehicles', 'route'));
    }

    /**
     * Create a new vehicle
     * @return View
     */
    public function create()
    {
        $cars = $this->carRepository->all();

        $route = 'vehicles.create';

        return view('index', compact('cars', 'route'));
    }

    /**
     * Edit selected vehicle
     * @param $id
     */
    public function edit($id)
    {
        $cars = $this->carRepository->all();

        $route = 'vehicles.edit';

        return view('index', compact('cars', 'route'));
    }

    /**
     * Store a new vehicle
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $data = $request->all();

        DB::beginTransaction();

        try{
            if($data['car_id'])
            {
                $car = $this->repository->findByField('id', $data['car_id'])->first();

                if($car)
                {
                    $this->repository->create($data);
                }
            }
            else{

                $data['car_id'] = $this->carRepository->create($data)->id;

                $this->repository->create($data);
            }

            DB::commit();

            $request->session()->flash('success.msg', 'Veículo cadastrado com sucesso');

            return redirect()->route('vehicle.index');

        }catch (\Exception $e)
        {
            DB::rollBack();

            $request->session()->flash('error.msg', 'Um erro ocorreu, tente novamente mais tarde');
        }

        return redirect()->back()->withInput();

    }

    /**
     * Update a selected vehicle
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();

        DB::beginTransaction();

        try{

            $this->repository->update($data, $id);

            DB::commit();

            $request->session()->flash('success.msg', 'Veículo alterado com sucesso');

            return redirect()->route('vehicle.index');

        }catch (\Exception $e)
        {
            DB::rollBack();

            $request->session()->flash('error.msg', 'Um erro ocorreu, tente novamente mais tarde');

            return redirect()->back()->withInput();
        }
    }

    /**
     * Delete selected vehicle
     * @param $id
     */
    public function delete($id)
    {
        DB::beginTransaction();

        try{
            if($this->repository->findByField('id', $id)->first())
            {
                $this->repository->delete($id);

                DB::commit();

                return json_encode(['status' => true]);
            }
            else{

                return json_encode(['status' => false, 'msg' => 'Este veículo não existe']);
            }

        }catch (\Exception $e){
            DB::rollBack();

            return json_encode(['status' => false, 'msg' => $e->getMessage()]);
        }

    }
}
