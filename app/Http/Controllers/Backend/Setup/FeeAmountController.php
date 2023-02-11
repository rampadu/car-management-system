<?php

namespace App\Http\Controllers\Backend\Setup;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FeeCategory;
use App\Models\CarClass;
use App\Models\FeeCategoryAmount;

class FeeAmountController extends Controller
{
    public function ViewFeeAmount()
    {
        //$data['allData'] = FeeCategoryAmount::all();
        $data['allData'] = FeeCategoryAmount::select('fee_category_id')->groupBy('fee_category_id')->get();
        return view('backend.setup.fee_amount.view_fee_amount', $data);
    }

    public function AddFeeAmount()
    {
        $data['fee_categories'] = FeeCategory::all();
        $data['classes'] = CarClass::all();
        return view('backend.setup.fee_amount.add_fee_amount', $data);
    }

    public function StoreFeeAmount(Request $request)
    {

        $countClass = count($request->class_id);
        if ($countClass != NULL) {
            for ($i=0; $i <$countClass ; $i++) { 
                $fee_amount = new FeeCategoryAmount();
                $fee_amount->fee_category_id = $request->fee_category_id;
                $fee_amount->class_id = $request->class_id[$i];
                $fee_amount->amount = $request->amount[$i];
                $fee_amount->save();


            } //End For Loop
        } //End If Condition

        $notification = array(
            'message' => 'Fee Amount inserted successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('fee.amount.view')->with($notification);

    } //End Method

    public function EditFeeAmount($fee_category_id){
        $data['editData'] = FeeCategoryAmount::where('fee_category_id', $fee_category_id)->orderBy('class_id', 'asc')->get();
        //dd($data['editData']->toArray());
        $data['fee_categories'] = FeeCategory::all();
        $data['classes'] = CarClass::all();
        return view('backend.setup.fee_amount.edit_fee_amount', $data);

    }

    public function UpdateFeeAmount(Request $request, $fee_category_id){
        if ($request->class_id == NULL){
            $notification = array(
                'message' => 'Sorry you did not insert any item',
                'alert-type' => 'error'
            );

            return redirect()->route('fee.amount.edit', $fee_category_id)->with($notification);

        }else{
            $countClass = count($request->class_id);
            FeeCategoryAmount::where('fee_category_id', $fee_category_id)->delete();
                for ($i=0; $i <$countClass ; $i++) { 
                    $fee_amount = new FeeCategoryAmount();
                    $fee_amount->fee_category_id = $request->fee_category_id;
                    $fee_amount->class_id = $request->class_id[$i];
                    $fee_amount->amount = $request->amount[$i];
                    $fee_amount->save();
        
                } //End For Loop
        } //end else
        $notification = array(
            'message' => 'Data updated successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('fee.amount.view')->with($notification);
    } //end method





}
