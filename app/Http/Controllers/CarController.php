<?php

namespace App\Http\Controllers;

use App\Repositories\CarRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CarController extends Controller
{
    /**
     * @var CarRepository
     */
    private $repository;

    public function __construct(CarRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * List all cars
     */
    public function index()
    {
        $cars = $brands = $this->repository->all();

        $route = 'cars.index';

        $edit = false;

        $links[] = '../../assets/css/pages/wizard/wizard-4.css';

        //$scripts[] = '../../assets/js/pages/custom/user/add-user.js';
        $scripts[] = '../../assets/js/pages/crud/forms/widgets/bootstrap-maxlength.js';
        $scripts[] = '../../assets/js/pages/crud/forms/widgets/select2.js';
        $scripts[] = '../../js/data-car.js';
        $scripts[] = '../../js/car.js';

        $i = 1;

        foreach ($cars as $car)
        {
            $car->row = $i;

            $i++;
        }

        $file = fopen("json/cars.json","w");

        fwrite($file, json_encode($cars));

        fclose($file);

        return view('index', compact('cars', 'route', 'links', 'scripts', 'edit', 'brands'));
    }

    /**
     * Create a new car
     */
    public function create()
    {
        $route = 'cars.form';

        $edit = false;

        $scripts[] = '../../js/car.js';

        return view('index', compact('route', 'edit', 'scripts'));
    }

    /**
     * Edit a car
     * @param $id
     */
    public function edit($id)
    {
        $car = $this->repository->findByField('id', $id)->first();

        $route = 'cars.form';

        $edit = true;

        $scripts[] = '../../js/car.js';

        if($car)
        {
            return view('index', compact( 'route', 'edit', 'scripts', 'car'));
        }

        abort(404);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $data = $request->all();

        DB::beginTransaction();

        try{

            $data['model'] = strtoupper($data['model']);
            $data['brand'] = strtoupper($data['brand']);
            $data['version'] = strtoupper($data['version']);

            $this->repository->create($data);

            DB::commit();

            $request->session()->flash('success.msg', 'O carro foi cadastrado com sucesso');

            return redirect()->route('car.index');

        }catch (\Exception $e){

            DB::rollBack();

            $request->session()->flash('error.msg', $e->getMessage());

            return redirect()->back()->withInput();
        }
    }

    /**
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();

        DB::beginTransaction();

        try{

            $data['model'] = strtoupper($data['model']);
            $data['brand'] = strtoupper($data['brand']);
            $data['version'] = strtoupper($data['version']);

            $this->repository->update($data, $id);

            DB::commit();

            $request->session()->flash('success.msg', 'O carro foi alterado com sucesso');

            return redirect()->route('cars.index');

        }catch (\Exception $e){

            DB::rollBack();

            $request->session()->flash('error.msg', $e->getMessage());

            return redirect()->back()->withInput();
        }
    }

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

            return json_encode(['status' => false, 'msg' => 'Este carro não existe']);

        }catch (\Exception $e){

            DB::rollBack();

            return json_encode(['status' => false, 'msg' => $e->getMessage()]);
        }

    }

    public function car_exists($model, $id = null)
    {

        $car = $this->repository->findByField('model', strtoupper($model))->first();

        if($car)
        {
            if($id)
            {
                if($car->id == $id)
                {
                    return json_encode(['status' => true, 'id' => true]);
                }
            }

            return json_encode(['status' => false, 'msg' => 'Erro! Este carro já está cadastrado']);
        }

        return json_encode(['status' => true]);


    }
}
