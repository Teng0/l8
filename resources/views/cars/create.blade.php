@extends('layouts.app')
@section('content')
    <div class="mx-auto w-4/8 py-24">
        <div class="text-center">
            <h2 class="text-5xl uppercase bold">
                Create Car
            </h2>
        </div>
    <div class="flex justify-center pt-20">
            <form action="/cars" method="post" enctype="multipart/form-data">
                @csrf
                <input type="file" class="block shadow-5xl mb-10 py-2 w-80 italic  placeholder-green-300"
                       name="image">
                <input type="text" class="block shadow-5xl mb-10 py-2 w-80 italic  placeholder-green-300"
                name="name" placeholder="Brand name">

                <input type="text" class="block shadow-5xl mb-10 py-2 w-80 italic  placeholder-green-300"
                       name="founded" placeholder="Founded">
                <input type="text" class="block shadow-5xl mb-10 py-2 w-80 italic  placeholder-green-300"
                       name="description" placeholder="Description">

                <button type="submit" class="bg-green-500 block  shadow-5xl mb-10 py-2 w-80 uppercase font-bold">Submit</button>
            </form>
    </div>
        @if($errors->any())
            @foreach($errors->all() as $error)
                <li class="w-4/8 margin-auto text-center text-red-600">
                        {{$error}}
                </li>
            @endforeach
        @endif
    </div>

@endsection
