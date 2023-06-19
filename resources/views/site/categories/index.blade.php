@extends('layouts.site')
@section('content')
    <section class="max-w-6xl mx-auto py-10 px-4 md:px-0">
        <div>
            <h1 class="text-2xl text-center text-black font-bold py-8">Browse by Category</h1>
        </div>
        <div class="mt-16">
            <div class="grid sm:grid-cols-2 xl:grid-cols-4 gap-4">
                @foreach($categories as $category)
                    <a href="{{route('categories.show', $category)}}" class="block border p-6">
                        {{$category->title}}
                    </a>
                @endforeach
            </div>
        </div>
    </section>
@endsection


