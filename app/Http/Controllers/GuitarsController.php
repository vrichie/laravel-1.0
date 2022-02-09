<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guitar;
use App\Http\Requests\GuitarFormRequest;

class GuitarsController extends Controller
{



    private static function getData(){
        return [
            ['id' =>1,'name' =>'American_1','brand'=>'Fender_1'],
            ['id' =>2,'name' =>'American_2','brand'=>'Fender_2'],
            ['id' =>3,'name' =>'American_3','brand'=>'Fender_3'],
            ['id' =>4,'name' =>'American_4','brand'=>'Fender_4'],
            ['id' =>5,'name' =>'American_5','brand'=>'Fender_5']
        ];
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('guitars.index',[
            'guitars'=>Guitar::all()

        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('guitars.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GuitarFormRequest $request)
    {

       $data= $request->validated();
        
        //
 
        Guitar::create($data);

        return redirect()->route('guitars.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Guitar $guitar)
    {
        //
        return view('guitars.show',[
            'guitar'=>($guitar)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Guitar $guitar)
    {
        //
        return view('guitars.edit',[
            'guitar'=>($guitar)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(GuitarFormRequest $request,Guitar $guitar)
    {
        //



        $data= $request->validated();

        $guitar->update($data);
        
        //
       
        // $guitar->name=strip_tags($request->input('guitar-name'));
        // $guitar->brand=strip_tags($request->input('brand'));
        // $guitar->year_made=strip_tags($request->input('year'));

        // $guitar->save();

        return redirect()->route('guitars.show',$guitar->id);
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
}
