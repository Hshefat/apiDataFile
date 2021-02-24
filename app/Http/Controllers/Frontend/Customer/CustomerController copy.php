<?php

namespace App\Http\Controllers\Frontend\Customer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Customer;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
// import the Intervention Image Manager Class
use Intervention\Image\ImageManager;


use Image; //Intervention Image
use Illuminate\Support\Facades\Storage;

class CustomerController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers = Customer::all();
        $customer = Customer::latest()->paginate(5);


        return view('frontend.customer.view_customer', compact('customers'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('customers.create_customer');
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
        $flag = false;
        $emailFlag = false;
        $customerInformation = Customer::all();

        foreach ($customerInformation as $item) {
            if (isset($item['phone_number']) && $item['phone_number'] == $request->phone_number) {
                Session::flash('phonemsg', 'Contact number already exits.');
                $flag = true;
                break;
            }
        }

        foreach ($customerInformation as $item) {
            if (isset($item['email']) && $item['email'] == $request->email) {
                Session::flash('emailmsg', 'Email already exits.');
                $flag = true;
                break;
            }
        }


        // $request->validate([
        $validator = validator::make($request->all(), [
            'first_name' => 'required|regex:/^[\p{L} ]+$/u|max:20',
            'middle_name' => 'required|regex:/^[\p{L} ]+$/u|max:15',
            'last_name' => 'required|regex:/^[\p{L} ]+$/u|max:20',
            'image' => 'required|mimes:jpeg,png,jpg,gif,svg|max:2000',
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


        //pone number and email exits validation
        if ($validator->fails()) {
            return redirect()->back()->withInput()->withErrors($validator->errors());
        }
        if ($flag == true && $emailFlag == true) {
            return redirect()->back()->withInput();
        } elseif ($flag == true && $emailFlag == false) {
            return redirect()->back()->withInput();
        } elseif ($flag == false && $emailFlag == true) {
            return redirect()->back()->withInput();
        }

        /*  $customer = new Customer([
            'first_name' => $request->get('first_name'),
            'middle_name' => $request->get('middle_name'),
            'last_name' => $request->get('last_name'),
            'image' => $request->get('image'),
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

        ]); */

        /* $customer = Customer::updateOrCreate([
            'first_name' => $request->first_name,
            'middle_name' => $request->middle_name,
            'last_name' => $request->last_name,
            'image' => $request->image,
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

        ]); */



        $customer =  [
            'first_name' => $request->first_name,
            'middle_name' => $request->middle_name,
            'last_name' => $request->last_name,
            'image' => $request->image,
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


        /*  $image = $request->file('image');
        $image_name = time() . '.' . $image->getClientOriginalExtension();
        $upload_path = public_path('thumbnail');
        $resize_image = Customer::make($image->getRealPath());
        $resize_image->resize(300, 300, function ($constraint) {
            $constraint->aspectRatio();
        })->save($upload_path . '.' . $image_name);
        $upload_path = public_path('/frontend/image/');
        $success = $image->move($upload_path, $image_name); */


        $image = $request->file('image');
        if ($image) {
            $image_name = hexdec(uniqid());
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name . '.' . $ext;
            $upload_path = 'frontend/image/';
            $image_url = $upload_path . $image_full_name;
            $success = $image->move($upload_path, $image_full_name);
            $customer['image'] = $image_url;


            Customer::firstOrCreate($customer);
        } else {
            dd($customer);
        }
        // $customer->save();
        // Customer::Create($customer);

        //  return redirect('customers')->with('success', 'Customer saved!');
        Session::flash('update_msg', 'Customers profile Create successfully.');
        return redirect()->back();
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
        $customers = Customer::find($id);
        return view('customers.edit', compact('customers'));
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
        $request->validate([
            'first_name' => 'required',
            'middle_name' => 'required',
            'last_name' => 'required',
            'age' => 'required',
            'blood_group' => 'required',
            'phone_number' => 'required',
            'email' => 'required',
            'village' => 'required',
            'district' => 'required',
            'post_code' => 'required',
            'city' => 'required',
            'country' => 'required',
            'occupation' => 'required'
        ]);

        $contact = new Customer([
            'first_name' => $request->get('first_name'),
            'middle_name' => $request->get('middle_name'),
            'last_name' => $request->get('last_name'),
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
        ]);
        $contact->save();
        return redirect('/customers')->with('success', 'Customer Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $customers = Customer::find($id);
        $customers->delete();

        return redirect('/customers')->with('success', 'Contact deleted!');
    }
}