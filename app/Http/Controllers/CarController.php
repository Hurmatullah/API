<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use App\Traits\Filterable;

class CarController extends Controller
{
    use Filterable;

    public function index()
    {
        $cars = Car::with(['employee', 'driver'])->take(5)->get();
        return response()->json($cars);
    }

    public function filterByModel($model, $employee_id)
    {
        return $this->filter('model', $model, 'employees_id', $employee_id);
    }

    public function filterByComfortCategory($category, $employee_id)
    {
        return $this->filter('comfort_category', $category, 'employees_id', $employee_id);
    }
}
