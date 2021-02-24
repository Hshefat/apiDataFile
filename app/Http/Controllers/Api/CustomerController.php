<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Customer;
use Response;
use Image;
use Illuminate\Support\Facades\Validator;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function imageStore(Request $request)
    {
        /* $customer = new customer();
        $fileName = time() . '.' . $customer->getClientOriginalExtension();
        $path = $request->file('photo')->move(public_path('/frontend/image'), $fileName);
        $photoURL = url('/frontend/image' . $fileName);
        return response()->json(['url' => $photoURL], 200); */

        /*   $customer = new customer();

        if ($request->hasFile('image')) {
            $customer = $request->file('image');
            $filename = time() . '.' . $customer->getClientOriginalExtension();
            Image::make($customer)->resize(300, 300)->save(public_path('frontend/image/' . 'shefat' . $filename));
            $customer->image = $filename;

            $url =  $request->getSchemeAndHttpHost() . '/frontend/image/' . 'shefat' . $filename;
        }


        $customer = ['image' => $url];




        if (Customer::firstOrCreate($url)) {
            return response()->json([
                'error' => 'false',
                'customer' => $url,
                'message' => 'Customer register successfully'
            ], 200);
        } else {
            return response()->json([
                'error' => 'true',
                'customer' => $url,
                'message' => 'Customer does not registered. Something went wrong.',
                "image" => $url
            ], 200);
        } */

        /*  if ($request->hasFile('image')) {
            $customer = $request->file('image');
            $filename = time() . '.' . $customer->getClientOriginalExtension();
            Image::make($customer)->resize(300, 300)->save(public_path('frontend/image/' . 'shefat' . $filename));
            $customer->image = $filename;

            $url =  $request->getSchemeAndHttpHost() . '/frontend/image/' . 'shefat' . $filename;
        } */
    }

    public function createCustomer(Request $request)
    {


        /*  $validator = validator::make($request->all(), [
            'first_name' => 'required|regex:/^[\p{L} ]+$/u|max:20',
            'middle_name' => 'required|regex:/^[\p{L} ]+$/u|max:15',
            'last_name' => 'required|regex:/^[\p{L} ]+$/u|max:20',
            'image' => 'required|mimes:jpeg,png,jpg,gif,svg|max:2000',
            // 'file' => 'required|mimes:doc,docx,pdf,txt,csv|max:2048',
            // 'image' => 'required|mimes:jpeg,png,jpg,gif,svg|max:1000',
            'age' => 'required',
            'blood_group' => 'required',
            'phone_number' => 'required|digits:11',
            'email' => 'required',
            'village' => 'required',
            'district' => 'required',
            'post_code' => 'required',
            'city' => 'required',
            'country' => 'required',
            'occupation' => 'required'
        ]);
        /* if ($validator->fails()) {
            return $this->sendError('Validation Error.', $validator->errors());
        }

        if ($validator->fails()) {

            return response()->json(['error' => $validator->errors()], 401);
        }
 */
        $date = date('Y-m-d h:i:s');

        $customer = new customer();

        if ($request->hasFile('image')) {
            $customer = $request->file('image');
            $filename = time() . '.' . $customer->getClientOriginalExtension();
            Image::make($customer)->resize(300, 300)->save(public_path('frontend/image/' . 'shefat' . $filename));
            $customer->image = $filename;

            $url =  $request->getSchemeAndHttpHost() . '/frontend/image/' . 'shefat' . $filename;
        }
        $customer =  [
            'first_name' => $request->first_name,
            'middle_name' => $request->middle_name,
            'last_name' => $request->last_name,
            'image' => $url,
            'age' => $request->get('age'),
            'blood_group' => $request->get('blood_group'),
            'phone_number' => $request->get('phone_number'),
            'email' => $request->get('email'),
            'village' => $request->get('village'),
            'district' => $request->get('district'),
            'post_code' => $request->get('post_code'),
            'city' => $request->get('city'),
            'country' => $request->get('country'),
            'occupation' => $request->get('occupation')

        ];

        if (Customer::firstOrCreate($customer)) {
            return response()->json([
                'error' => 'false',
                'customer' => $customer,
                'message' => 'Customer register successfully'
            ], 200);
        } else {
            return response()->json([
                'error' => 'true',
                'customer' => $customer,
                'message' => 'Customer does not registered. Something went wrong.'
            ], 200);
        }
    }
}