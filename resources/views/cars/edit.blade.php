@extends('layouts.app')
@section('content')
    <div class="mx-auto w-4/8 py-24">
        <div class="text-center">
            <h2 class="text-5xl uppercase bold">
                Update  Car
            </h2>
        </div>
    <div class="flex justify-center pt-20">
            <form action="/cars/{{$car->id}}" method="post">
                @csrf
                @method('PUT')
                <input type="text" class="block shadow-5xl mb-10 py-2 w-80 italic  placeholder-green-300"
                name="name" value="{{$car->name}}">

                <input type="text" class="block shadow-5xl mb-10 py-2 w-80 italic  placeholder-green-300"
                       name="founded" value="{{$car->founded}}">
                <input type="text" class="block shadow-5xl mb-10 py-2 w-80 italic  placeholder-green-300"
                       name="description" value="{{$car->description}}">

                <button type="submit" class="bg-green-500 block  shadow-5xl mb-10 py-2 w-80 uppercase font-bold">Submit</button>
            </form>
    </div>
    </div>

@endsection
