<?php

namespace App\Http\Controllers\Backend\Setup;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CarYear;

class CarYearController extends Controller
{
    public function ViewYear (){
        $data['allData'] = CarYear::all();
        return view('backend.setup.year.view_year', $data);
    }

    public function CarYearAdd (){
        return view('backend.setup.year.add_year');
    }

    public function CarYearStore (Request $request){

        $validatedData = $request->validate([
            'name' => 'required|unique:car_years,name',
        ]);

        $data = new CarYear();
        $data->name = $request->name;
        $data->save();

        $notification = array(
            'message' => 'Car Year inserted successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('car.year.view')->with($notification);
    }

    public function CarYearEdit ($id){
        $editData = CarYear::find($id);
        return view('backend.setup.year.edit_year', compact('editData'));
    }

    public function CarYearUpdate (Request $request, $id){

        $data = CarYear::find($id);

        $validatedData = $request->validate([
            'name' => 'required|unique:car_years,name,'.$data->id
        ]);

        
        $data->name = $request->name;
        $data->save();

        $notification = array(
            'message' => 'Car Year Updated successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('car.year.view')->with($notification);
    
    }

    public function CarYearDelete ($id){
        $user = CarYear::find($id);
        $user->delete();

        $notification = array(
            'message' => 'Car Year Deleted successfully',
            'alert-type' => 'info'
        );

        return redirect()->route('car.year.view')->with($notification);
    }



}
