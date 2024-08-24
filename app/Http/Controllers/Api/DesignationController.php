<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Designation;
use Illuminate\Http\Request;

class DesignationController extends Controller
{
    //index
    public function index(){
        $designations = Designation::all();
        return response([
            'message' => 'Designations list',
            'data' => $designations
        ], 200);
    }

    //store
    public function store(Request $request){

        //validate Request
        $request->validate([
            'name' => 'required',
        ]);

        $user = $request->user();

        $designation = new Designation();
        $designation->company_id = 1;
        $designation->created_by = $user->id;
        $designation->name = $request->name;
        $designation->description = $request->description;
        $designation->save();

        return response([
            'message' => 'Designation created',
            'data' => $designation
        ], 200);
    }

    //show
    public function show($id){
        $designation = Designation::find($id);
        if(!$designation){
            return response([
                'message' => 'Designation not found'
            ], 404);
        }

        return response([
            'message' => 'Designation details',
            'data' => $designation
        ], 200);
    }

    //update
    public function update(Request $request, $id){

        //validate reuest
        $request->validate([
            'name' => 'required',
        ]);

        $user = $request->user();

        $designation = Designation::find($id);
        if(!$designation){
            return response([
                'message' => 'Designation not found'
            ], 404);
        }

        $designation->name = $request->name;
        $designation->description = $request->description;
        $designation->save();

        return response([
            'message' => 'Designation updated',
            'data' => $designation
        ], 200);
    }

    //destroy
    public function destroy($id){
        $designation = Designation::find($id);
        if(!$designation){
            return response([
                'message' => 'Designation not found'
            ], 404);
        }

        $designation->delete();

        return response([
            'message' => 'Designation deleted'
        ], 200);
    }
}
