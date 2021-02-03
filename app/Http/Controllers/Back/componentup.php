<?php

namespace App\Http\Controllers\back;

use App\component;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;

class componentup extends Controller
{
    public function index(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'Component1' => 'required',
            'Component2' => 'required',
            'Component3' => 'required',
        ]);
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        $component = component::find($id);
        $component->update([
            'Component1' => $request->Component1,
            'Component2' => $request->Component2,
            'Component3' => $request->Component3,
        ]);
    }

    public function about(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'Component2' => 'required',
            'Component3' => 'required',
            'Component4' => 'required',
            'Component5' => 'required',
            'Component6' => 'required',
            'Component7' => 'required',
            'Component8' => 'required',
            'Component9' => 'required',
            'Component10' => 'required',
            'Component11' => 'required',
            'Component12' => 'required',
            'Component13' => 'required',
            'Component14' => 'required',
            'Component15' => 'required',
            'Component16' => 'required',
            'Component17' => 'required',
            'Component18' => 'required',
            'Component19' => 'required',
            'Component20' => 'required',
            'Component21' => 'required',
            'Component22' => 'required',
            'Component23' => 'required',
            'Component24' => 'required',
        ], [
            'Component2.required' => ' The data field is required',
            'Component3.required' => ' The data field is required',
            'Component4.required' => ' The data field is required',
            'Component5.required' => ' The data field is required',
            'Component6.required' => ' The data field is required',
            'Component7.required' => ' The data field is required',
            'Component8.required' => ' The data field is required',
            'Component9.required' => ' The data field is required',
            'Component10.required' => ' The data field is required',
            'Component11.required' => ' The data field is required',
            'Component12.required' => ' The data field is required',
            'Component13.required' => ' The data field is required',
            'Component14.required' => ' The data field is required',
            'Component15.required' => ' The data field is required',
            'Component16.required' => ' The data field is required',
            'Component17.required' => ' The data field is required',
            'Component18.required' => ' The data field is required',
            'Component19.required' => ' The data field is required',
            'Component20.required' => ' The data field is required',
            'Component21.required' => ' The data field is required',
            'Component22.required' => ' The data field is required',
            'Component23.required' => ' The data field is required',
            'Component24.required' => ' The data field is required',

        ]);
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        $component = component::findOrfail($id);
        $component->Component1 =   UP_EX($request,  1280, 1599, "/front/assets/images/backgrounds/", $component->Component1,"Image","_about_");
        $component->Component2 = $request->input('Component2');
        $component->Component3 = $request->input('Component3');
        $component->Component4 = $request->input('Component4');
        $component->Component5 = $request->input('Component5');
        $component->Component6 = $request->input('Component6');
        $component->Component7 = $request->input('Component7');
        $component->Component8 = $request->input('Component8');
        $component->Component9 = $request->input('Component9');
        $component->Component10 = $request->input('Component10');
        $component->Component11 = $request->input('Component11');
        $component->Component12 = $request->input('Component12');
        $component->Component13 = $request->input('Component13');
        $component->Component14 = $request->input('Component14');
        $component->Component15 = $request->input('Component15');
        $component->Component16 = $request->input('Component16');
        $component->Component17 = $request->input('Component17');
        $component->Component18 = $request->input('Component18');
        $component->Component19 = $request->input('Component19');
        $component->Component20 = $request->input('Component20');
        $component->Component21 = $request->input('Component21');
        $component->Component22 = $request->input('Component22');
        $component->Component23 = $request->input('Component23');
        $component->Component24 = $request->input('Component24');
        $component->save();
        return redirect()->back()->with('alert-success', 'تم التعديل بنجاح');
    }

    public function contact(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'Component2' => 'required',
            'Component3' => 'required',
            'Component4' => 'required',
            'Component5' => 'required',
            'Component6' => 'required',
            'Component7' => 'required',
            'Component8' => 'required',
            'Component9' => 'required',
            'Component10' => 'required',
            'Component11' => 'required',
            'Component12' => 'required',
            'Component13' => 'required',
            'Component14' => 'required',
            'Component15' => 'required',
            'Component16' => 'required',
            'Component17' => 'required',
            'Component18' => 'required',
            'Component19' => 'required',
            'Component20' => 'required',
            'Component21' => 'required',
            'Component22' => 'required',
            'Component23' => 'required',
            'Component24' => 'required',
            'Component25' => 'required',
        ], [
            'Component2.required' => ' The data field is required',
            'Component3.required' => ' The data field is required',
            'Component4.required' => ' The data field is required',
            'Component5.required' => ' The data field is required',
            'Component6.required' => ' The data field is required',
            'Component7.required' => ' The data field is required',
            'Component8.required' => ' The data field is required',
            'Component9.required' => ' The data field is required',
            'Component10.required' => ' The data field is required',
            'Component11.required' => ' The data field is required',
            'Component12.required' => ' The data field is required',
            'Component13.required' => ' The data field is required',
            'Component14.required' => ' The data field is required',
            'Component15.required' => ' The data field is required',
            'Component16.required' => ' The data field is required',
            'Component17.required' => ' The data field is required',
            'Component18.required' => ' The data field is required',
            'Component19.required' => ' The data field is required',
            'Component20.required' => ' The data field is required',
            'Component21.required' => ' The data field is required',
            'Component22.required' => ' The data field is required',
            'Component23.required' => ' The data field is required',
            'Component24.required' => ' The data field is required',
            'Component25.required' => ' The data field is required',

        ]);
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        $component = component::findOrfail($id);
        $component->Component1 =   UP_EX($request,  1280, 1599, "/front/assets/images/backgrounds/", $component->Component1,"Image","_contact_");
        $component->Component2 = $request->input('Component2');
        $component->Component3 = $request->input('Component3');
        $component->Component4 = $request->input('Component4');
        $component->Component5 = $request->input('Component5');
        $component->Component6 = $request->input('Component6');
        $component->Component7 = $request->input('Component7');
        $component->Component8 = $request->input('Component8');
        $component->Component9 = $request->input('Component9');
        $component->Component10 = $request->input('Component10');
        $component->Component11 = $request->input('Component11');
        $component->Component12 = $request->input('Component12');
        $component->Component13 = $request->input('Component13');
        $component->Component14 = $request->input('Component14');
        $component->Component15 = $request->input('Component15');
        $component->Component16 = $request->input('Component16');
        $component->Component17 = $request->input('Component17');
        $component->Component18 = $request->input('Component18');
        $component->Component19 = $request->input('Component19');
        $component->Component20 = $request->input('Component20');
        $component->Component21 = $request->input('Component21');
        $component->Component22 = $request->input('Component22');
        $component->Component23 = $request->input('Component23');
        $component->Component24 = $request->input('Component24');
        $component->Component25 = $request->input('Component25');
        $component->save();
        return redirect()->back()->with('alert-success', 'تم التعديل بنجاح');
    }



    public function portfolio(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'Component2' => 'required',
            'Component3' => 'required',
            'Component4' => 'required',
            'Component5' => 'required',
            'Component6' => 'required',
            'Component7' => 'required',
        ], [
            'Component2.required' => ' The data field is required',
            'Component3.required' => ' The data field is required',
            'Component4.required' => ' The data field is required',
            'Component5.required' => ' The data field is required',
            'Component6.required' => ' The data field is required',
            'Component7.required' => ' The data field is required',

        ]);
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        $component = component::findOrfail($id);
        $component->Component1 =  UP_EX($request,1280, 1599, "/front/assets/images/backgrounds/", $component->Component1,"Image","_portfolio_");
        $component->Component2 = $request->input('Component2');
        $component->Component3 = $request->input('Component3');
        $component->Component4 = $request->input('Component4');
        $component->Component5 = $request->input('Component5');
        $component->Component6 = $request->input('Component6');
        $component->Component7 = $request->input('Component7');
        $component->save();
        return redirect()->back()->with('alert-success', 'تم التعديل بنجاح');
    }

    public function services(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'Component2' => 'required',
            'Component3' => 'required',
            'Component4' => 'required',
            'Component5' => 'required',
            'Component6' => 'required',
            'Component7' => 'required',
            'Component8' => 'required',
        ], [
            'Component2.required' => ' The data field is required',
            'Component3.required' => ' The data field is required',
            'Component4.required' => ' The data field is required',
            'Component5.required' => ' The data field is required',
            'Component6.required' => ' The data field is required',
            'Component7.required' => ' The data field is required',
            'Component8.required' => ' The data field is required',

        ]);
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        $component = component::findOrfail($id);
        $component->Component1 =  UP_EX($request, 1280, 1599,"/front/assets/images/backgrounds/", $component->Component1,"Image","_BAC_services_");
        $component->Component2 = $request->input('Component2');
        $component->Component3 = $request->input('Component3');
        $component->Component4 = $request->input('Component4');
        $component->Component5 = $request->input('Component5');
        $component->Component6 = $request->input('Component6');
        $component->Component7 = $request->input('Component7');
        $component->Component8 = $request->input('Component8');
        $component->Component9 =  UP_EX($request, 1280, 1599,"/front/assets/images/services/", $component->Component9,"Component9","_SERVE_");
        $component->save();
        return redirect()->back()->with('alert-success', 'تم التعديل بنجاح');
    }

    public function blog(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'Component2' => 'required',
            'Component3' => 'required',
            'Component4' => 'required',
            'Component5' => 'required',
            'Component6' => 'required',
            'Component7' => 'required',
        ], [
            'Component2.required' => ' The data field is required',
            'Component3.required' => ' The data field is required',
            'Component4.required' => ' The data field is required',
            'Component5.required' => ' The data field is required',
            'Component6.required' => ' The data field is required',
            'Component7.required' => ' The data field is required',

        ]);
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        $component = component::findOrfail($id);
        $component->Component1 =  UP_EX($request,1280, 1599, "/front/assets/images/backgrounds/", $component->Component1,"Image","_portfolio_");
        $component->Component2 = $request->input('Component2');
        $component->Component3 = $request->input('Component3');
        $component->Component4 = $request->input('Component4');
        $component->Component5 = $request->input('Component5');
        $component->Component6 = $request->input('Component6');
        $component->Component7 = $request->input('Component7');
        $component->save();
        return redirect()->back()->with('alert-success', 'تم التعديل بنجاح');
    }




}
