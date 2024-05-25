<?php
namespace App\Traits;
use App\Models\Car;

trait Filterable
{
    public function filter($field, $value, $employee_field, $employee_value)
    {
        $cars = Car::with(['employee', 'driver'])->where([
                                                    [$field, $value],
                                                    [$employee_field, $employee_value]
                                                    ])->get();
        return response()->json($cars);
    }
}
