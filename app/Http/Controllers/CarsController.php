<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateValidationRequest;
use App\Models\Car;
use App\Models\Product;
use Illuminate\Http\Request;

class CarsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cars = Car::all();
      //  $cars = Car::where('name','=','BMW')->get();
       // $cars = Car::where('name','=','BMWs')->firstOrFail();
        return  view('cars.index',['cars'=>$cars]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('cars.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //$test->guessExtension()
        //$test->getMimeType()
        //$test->store()
        //$test->asStore()
        //$test->storePublicly()
        //$test->move()
        //$test->getClientOriginalName()
        //$test->getClientMimeType()
        //$test->getClientExtention()
        //$test->getSize()
        //$test->getError()
        //$test->isValid()


        $test = $request->file('image');
        $request->validate([
            'image'=>'required|mimes:jpg,png,pdf|max:5048',
            'name'=>'required|unique:cars',
            'founded'=>'required|integer|min:0|max:2021',
            'description'=>'required',
        ]);
        $car = new Car;
//        $car->name = $request->input('name');
//        $car->founded = $request->input('founded');
//        $car->description = $request->input('description');
//        $car->save();

        $newImageName = time().'-'.$request->name.'.'.$request->image->extension();

        $request->image->move(public_path('images'),$newImageName);
        $car::create([
            'name'=>$request->input('name'),
            'founded'=> $request->input('founded'),
            'description'=> $request->input('description'),
            'image_path'=>$newImageName,
        ]);

        return redirect('/cars');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $car =Car::find($id);
        $products = Product::find($id);
        return view('cars.show',compact('car'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
            $car = Car::find($id)->first();

            return view('cars.edit',compact('car'));
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
            'name'=>'required|unique:cars',
            'founded'=>'required|integer|min:0|max:2021',
            'description'=>'required',
            'image'=>'reqired|mimes:jpg,png,pdf|max:5048'
        ]);

        $newImageName = time().'-'.$request->name.'.'.$request->image->extention;

        $request->image->move(public_path('images'),$newImageName);
        $car=Car::where('id',$id)->update([
            'name'=>$request->input('name'),
            'founded'=> $request->input('founded'),
            'description'=> $request->input('description'),
        ]);
        return redirect('/cars');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Car $car)
    {
       $car->delete();
        return redirect('/cars');
    }
}
