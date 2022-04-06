<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CarRegistration;
use PDF;
use  App\Models\Partner;
use App\Models\Vendor;

class CarController extends Controller
{
    public function register_car(Request $request)
    {
        $this->validate($request,[
            'purchase_date' => 'required',
            'advance_date' => 'required',
            'serial_no' => 'required',
            'registration_no' => 'required',
            'model' => 'required',
            'model_year' => 'required',
            'chases_no' => 'required',
            'engine_no' => 'required',
            'quota' => 'required',
            'mark' => 'required',
            'color' => 'required',
            'power' => 'required',
            'number_plate' => 'required',
            'file' => 'required',
            'copy' => 'required',
            'total_documents' => 'required',
            'token' => 'required',
            'purchased_price' => 'required',
            'documents' => 'required',
        ]);

        if($request->vendor == 1)
        {
            $this->validate($request,[
                'vendor_first_name' => 'required',
                'vendor_last_name' => 'required',
                'vendor_phone_no' => 'required',
                'vendor_id_card' => 'required',
                'vendor_current_address' => 'required',
                'vendor_permanent_address' => 'required',
            ]);
        }

        $location = public_path('assets/pdf_images');
        $files = array();
        foreach($request->file('documents') as $index=>$document)
        {
            $file_name = time().$document->getClientOriginalName();
            $document->move($location, $file_name);
            $files[$index] = $file_name;
        }

        $location = public_path('assets/pdf');
        $file_name = time().'.pdf';
        $pdf = PDF::loadView('pdf', compact('files'));
        $pdf->save($location.'/'.$file_name);
        $registration_detail = $request->except('_token','documents');
        $registration_detail['document'] = 'assets/pdf/'.$file_name;
        $car = CarRegistration::create($registration_detail);

        if($request->partenership == 1)
        {
            foreach($request->partner_name as $index=>$partner)
            {
                $partner_detail = [
                    'car_id' => $car->id,
                    'name' => $partner,
                    'percentage' => $request->partner_percentage[$index],
                ];

                Partner::create($partner_detail);
            }
        }

        if($request->vendor == 1)
        {
            $vendor_detail = [
                'car_id' => $car->id,
                'first_name' => $request->vendor_first_name,
                'last_name' => $request->vendor_last_name,
                'phone_no' => $request->vendor_phone_no,
                'id_card' => $request->vendor_id_card,
                'current_address' => $request->vendor_current_address,
                'permanent_address' => $request->vendor_permanent_address,
            ];

            Vendor::create($vendor_detail);
        }

        return redirect('products')->with(['success_message'=> 'Car Registered Successfully']);

    }

    public function delete_car($car_id)
    {
        CarRegistration::where(['id'=>$car_id])->delete();
        Partner::where(['car_id'=>$car_id])->delete();
        Vendor::where(['car_id'=>$car_id])->delete();
        return redirect('products')->with(['success_message'=> 'Car Deleted Successfully']);
    }
}
