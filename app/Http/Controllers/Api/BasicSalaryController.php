<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\BasicSalary;
use Illuminate\Http\Request;

class BasicSalaryController extends Controller
{
    //index
    public function index(){

        $basicSalaries = BasicSalary::all();
        return response([
            'massege' => 'Basic Salaries list',
            'data' => $basicSalaries
        ], 200);
    }

    //store
    public function store(Request $request){

        //validate request
        $request->validate([
            'basic_salary' => 'required',
            'user_id' => 'required'
        ]);

        $user = $request->user();

        $basicSalary = new BasicSalary();
        $basicSalary->company_id = 1;
        $basicSalary->user_id = $request->user_id;
        $basicSalary->basic_salary = $request->basic_salary;
        $basicSalary->save();

        return response([
            'message' => 'Basic Salary created',
            'data' => $basicSalary
        ], 201);
    }

    //show
    public function show($id){
        $basicSalary = BasicSalary::find($id);
        if(!$basicSalary){
            return response([
                'message' => 'Basic Salary not found'
            ], 404);
        }

        return response([
            'message' => 'Basic Salary details',
            'data' => $basicSalary,
        ], 200);
    }

    //update
    public function update(Request $request, $id){

        //validate request
        $request->validate([
            'basic_salary' => 'required',
            'user_id' => 'required',
        ]);

        $basicSalary = BasicSalary::find($id);
        if(!$basicSalary){
            return response([
                'message' => 'Basic Salary not found'
            ], 404);
        }

        $basicSalary->basic_salary = $request->basic_salary;
        $basicSalary->user_id = $request->user_id;
        $basicSalary->save();

        return response([
            'message' => 'Basic Salary updated',
            'data' => $basicSalary
        ], 200);
    }

    //destroy
    public function destroy($id){
        $basicSalary = BasicSalary::find($id);
        if(!$basicSalary){
            return response([
                'message' => 'Basic Salary not found'
            ], 404);
        }

        $basicSalary->delete();

        return response([
            'message' => 'Basic Salary deleted'
        ], 200);
    }
}
