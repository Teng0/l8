@extends('layouts.app')
@section('content')
    <div class="m-auto w-4/5 py-24">
        <div class="text-center">
            <img src="{{asset('images/'.$car->image_path)}}" alt="" class="w-8/12 m-auto">
            <h2 class="text-gray-700 text-5xl">

                    <a href="/cars">{{$car->name}}</a>
            </h2>
        </div>

        <div class="pt-10">
            <a href="/cars" class="border-b-2 pb-2 border-dotted italic text-blue-500">
                Back &rarr;
            </a>
        </div>

        <div class="w-5/6 py-10">
{{--            {{$cars}}--}}
            <span class="uppercase text-blue-500 font-bold text-xs  italic text-right">
                    Founded:{{$car->founded}}
                </span>
                <div class="mx-auto text-center">
                    <div class="float-right">
                        <a href="/cars/{{$car->id}}/edit" class="border-b-2 pb-2 border-dotted italic text-green-500">Edit &rarr; </a>

                    </div>


                    <p class="text-lg text-gray-700 py-6">
                        {{$car->description}}
                    </p>

                    <table class="table-auto text-center w-11/12">
                            <tr class="bg-blue-100">
                                <th class="w-1/2 border-4 border-gray-500">
                                    Model
                                </th>
                                <th class="w-1/2 border-4 border-gray-500">
                                    Engines
                                </th>
                               @forelse ($car->carModels as $model)
                                   <tr>
                                       <td class="border-4 border-gray-500" >{{$model->name}}</td>
                                        <td class="border-4 border-gray-500" >
                                            @foreach($car->engines as $engine)
                                               @if ($model->id == $engine->model_id)
                                                    {{$engine->engine_name}}
                                               @endif

                                            @endforeach
                                        </td>
                               @empty
                                <td>No Model Spesified</td>
                            </tr>
                               @endforelse

                    </table>
                    <p class="text-left">
                        Product Types:
                        @forelse($car->products as $product)
                        {{$product->name}}
                        @empty
                            <p>No Product Description</p>
                        @endforelse
                    </p>
                    <hr class="mt-4 mb-8 border-1 border-gray-300">

                </div>
        </div>
    </div>

@endsection
