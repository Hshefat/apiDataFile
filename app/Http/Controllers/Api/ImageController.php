<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\FileImage;
use Validator;
use  Image;

class ImageController extends Controller
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

    public function imageUpload(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'path' =>    'required|mimes:png,jpg,jpeg,gif|max:2305',
        ]);
        if ($validator->fails()) {

            return response()->json(['error' => $validator->errors()], 401);
        }

        if ($validator->fails()) {

            return response()->json(['error' => $validator->errors()], 401);
        }


        $date = date('Y-m-d h:i:s');

        $path = new FileImage();

        if ($request->hasFile('path')) {
            $customer = $request->file('path');
            $filename = time() . '.' . $customer->getClientOriginalExtension();
            Image::make($customer)->resize(300, 300)->save(public_path('frontend/image/' . 'shefat' . $filename));
            $customer->path = $filename;

            $url =  $request->getSchemeAndHttpHost() . '/frontend/image/' . 'shefat' . $filename;

            $path = [
                // 'name' => $request->name,
                'path' => $url
            ];
        }

        /*    $path = $request->input('path');
        if (isset($request['path'])) {
            $path = trim($path) . $request['path']->clientExtension();
            $uid = uniqid();
            $path = $uid . '-shefat-img.' . $path;
            $request['path']->move(public_path('/frontend/image/'), $path);
            $url = $request->getSchemeAndHttpHost() . '/frontend/image/'  . $path;
            $path = [
                'name' => $request->name,
                'path' => $url
            ]; */

        //return response()->json(['downloadUrl'=>$url],200);
        if (FileImage::firstOrCreate($path)) {
            return response()->json([
                'error' => 'false',
                'message' => 'File uploaded successfully',
                'image' => $url
            ], 200);
        } else {
            return response()->json(['error' => 'true', 'message' => 'File uploaded unsuccess'], 201);
        }
    }


    // return "upload success fully";



}