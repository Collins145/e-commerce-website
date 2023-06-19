@extends('layouts.site')
@section('content')
    <section class="bg-white">
        <div class="max-w-6xl mx-auto py-10 px-4 md:px-0">
            <h1 class="text-2xl text-center text-black font-bold py-8">All Products</h1>
        </div>
    </section>
    <section class="bg-gray-100">
        <div class="max-w-6xl mx-auto py-10 px-4 md:px-0">
            <div class="grid sm:grid-cols-2 xl:grid-cols-4 gap-4">
                <x-site.products :products="$products"/>
            </div>
        </div>
    </section>
@endsection


