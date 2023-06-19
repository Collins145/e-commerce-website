@extends('layouts.site')
@section('content')
<section class="w-full mx-auto bg-nordic-gray-light flex pt-12 md:pt-0 md:items-center bg-cover bg-right" style="max-width:1600px; height: 32rem; background-image: url('https://images.unsplash.com/photo-1612325430161-94c758c7f330?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80');">
    <div class="container mx-auto">
    
        <div class="flex flex-col w-full lg:w-1/2 justify-center items-start  px-6 tracking-wide">
            <h1 class="text-black text-2xl my-4 text-gray-600">Stripped Italian Suit</h1>
            <a class="text-xl inline-block no-underline border-b border-gray-600 leading-relaxed hover:text-black hover:border-black" href="{{('')}}">products</a>
        </div>
    
    </div>
</section>
<section class="max-w-6xl mx-auto py-10 px-4 md:px-0">
    <div>
        <h1 class="text-2xl text-center font-bold py-8">Collinz Store's - Menswear Online</h1>
        <p class="text-l text-bold text-black">Collinz store's is an online menswear retailer with a physical presence via the stores in Nairobi, Kenya. <br> At Collinz store's, we focus on elegant menswear and fashionable classics which are always well-​​made and with high quality. <br> Whether it’s <span><a class="text-pink-400" href="{route('suits')}">suits</a>, <a class="text-pink-400" href="{route('blazers')}">blazers</a>, <a class="text-pink-400" href="{route('shoes')}">shoes</a>, <a class="text-pink-400" href="{route('shirts')}">shirts</a>, <a class="text-pink-400" href="{route('ties')}">ties</a>, <a class="text-pink-400" href="{route('accessories')}">accessories</a></span> we at Collinz store's share a passion for menswear and everything that comes with them.</p>
    </div>
</section>
@endsection


