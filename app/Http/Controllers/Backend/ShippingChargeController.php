<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Models\ChippingCharge;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class ShippingChargeController extends Controller
{
    public function shappingChargeEdit($id)
    {
        return view('backend.pages.shappingCharge.edit');
    }
    public function shappingChargeUpdate(Request $request, $id)
    {
        // dd($request->all());
        $validated = Validator::make($request->all(), [
            'out_side_dhaka' => 'required',
            'in_side_dhaka' => 'required'
        ])->validate();

        $shippingCharge = ChippingCharge::findOrFail($id);
        $shippingCharge->update([
            'out_side_dhaka' => $request->out_side_dhaka,
            'in_side_dhaka' => $request->in_side_dhaka

        ]);

        return back();
    }
}
