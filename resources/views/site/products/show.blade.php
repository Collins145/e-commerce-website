@extends('layouts.site')
@section('content')
    <section class="max-w-6xl mx-auto py-10 px-4 md:px-0">
        <div>
            <h1 class="text-2xl text-center text-black font-bold py-8">{{$product->title}}</h1>
        </div>
        <div class="mt-16">
            <div class="grid sm:grid-cols-2 gap-4 mt-6">
                <div>
                    <img class="hover:grow hover:shadow-lg w-full h-full object-cover" src="{{$product->featured_image}}" alt="{{$product->title}}">
                </div>
                <div>
                    <div class="prose">
                        {!! $product->description !!}
                    </div>
                    <div class="mt-3">
                        <p class="text-gray-700 font-bold">Ksh {{number_format($product->price)}}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection


