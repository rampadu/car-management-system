<?php

namespace App\Http\Controllers\Backend\Setup;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CarClass;

class CarClassController extends Controller
{
    public function ViewCar (){
        $data['allData'] = CarClass::all();
        return view('backend.setup.car_class.view_class', $data);
    }

    public function CarClassAdd (){
        return view('backend.setup.car_class.add_class');
    }

    public function CarClassStore (Request $request){

        $validatedData = $request->validate([
            'name' => 'required|unique:car_classes,name',
        ]);

        $data = new CarClass();
        $data->name = $request->name;
        $data->save();

        $notification = array(
            'message' => 'Car Class inserted successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('car.class.view')->with($notification);
    }

    public function CarClassEdit ($id){
        $editData = CarClass::find($id);
        return view('backend.setup.car_class.edit_class', compact('editData'));
    }

    public function CarClassUpdate (Request $request, $id){

        $data = CarClass::find($id);

        $validatedData = $request->validate([
            'name' => 'required|unique:car_classes,name,'.$data->id
        ]);

        
        $data->name = $request->name;
        $data->save();

        $notification = array(
            'message' => 'Car Class Update successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('car.class.view')->with($notification);
    
    }

    public function CarClassDelete ($id){
        $user = CarClass::find($id);
        $user->delete();

        $notification = array(
            'message' => 'Car Class Deleted successfully',
            'alert-type' => 'info'
        );

        return redirect()->route('car.class.view')->with($notification);
    }




}
