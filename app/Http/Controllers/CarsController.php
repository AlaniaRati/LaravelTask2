<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarsController extends Controller
{
    public function index()
    {
        $cars = Car::all();
        return view('index')->with('cars', $cars);
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        Car::create(array(
            'name' => $request->input('name'),
            'make' => $request->input('make'),
            'model' => $request->input('model'),
            'license_number' => $request->input('license_number'),
            'registration_year' => $request->input('registration_year'),
            'weight' => $request->input('weight')
        ));

        return redirect('/');
    }

    public function edit($id)
    {
        $car = Car::all()->where('id', $id)->first();
        return view('edit')->with('car', $car);
    }

    public function update(Request $request, $id)
    {
        Car::where('id', $id)->update(array(
            'name' => $request->input('name'),
            'make' => $request->input('make'),
            'model' => $request->input('model'),
            'license_number' => $request->input('license_number'),
            'registration_year' => $request->input('registration_year'),
            'weight' => $request->input('weight')
        ));

        return redirect('/');
    }

    public function destroy($id)
    {
        Car::where('id', $id)->delete();
        return redirect('/');
    }
}
