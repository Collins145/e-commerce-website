@extends('layouts.site')
@section('content')
    <section class="max-w-6xl mx-auto py-10 px-4 md:px-0">
        <div>
            <h1 class="text-2xl text-center text-black font-bold py-8">Products in {{$category->title}} category</h1>
        </div>
        <div class="mt-16">
            <h4 class="font-bold">Products</h4>
            <div class="grid sm:grid-cols-2 xl:grid-cols-4 gap-4 mt-6">

            </div>
        </div>
    </section>
@endsection


