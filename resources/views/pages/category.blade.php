@extends('layouts.app')

@section('title')
Store Category Page
@endsection

@push('addon-script')
<style>
    .container1
    {
        position: relative;
        min-width: 320px;
        height: 400px;
        box-shadow: inset 5px 5px 5px rgba(0,0,0,0.2),
                    inset -5px -5px 155px rgba(255,255,255,0.1),
                    5px 5px 15px rgba(0,0,0,0.3),
                    -5px -5px 15px rgba(255,255,255,0.1);
        border-radius: 15px;
        margin: 30px;
        margin-top: 50px;
    }
    .container1 .card1
    {
        position: absolute;
        top: 20px;
        left: 20px;
        right: 20px;
        bottom: 20px;
        background: #2a2b2f;
        border: 2px solid #1e1f23;
        border-radius: 15px;
        box-shadow: 0 20px 50px rgba(0,0,0,0.5);
        transition: 0.5s;
        display: flex;
        justify-content: center;
        align-items: center;
        overflow: hidden;
    }
    .container1 .card1::before
    {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 50%;
        height: 100%;
        background: rgba(255,255,255,0.05);
        pointer-events: none;
    }
    .container .card1:hover{
        transform: translateY(-50px);
        box-shadow: 0 40px 70px rgba(0,0,0,0.5);
    }
    .btn
    {
    font-size: 1em;
    color: #fff;
    background: #ff0157;
    display: inline-block;
    padding: 10px 30px;
    margin-bottom: 20px;
    text-transform: uppercase;
    text-decoration: none;
    letter-spacing: 2px;
    transition: 0.5s;
    }
    .btn:hover
    {
    letter-spacing: 6px;
    }
    .title
    {
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    }
    .tittleText
    {
    margin-top: 40px;
    color: rgb(185, 80, 80);
    font-size: 2em;
    font-weight: 300;
    }
    .tittleText span
    {
    color: #ff0157;
    font-weight: 700;
    font-size: 1.5em;
    }
</style>

@endpush

@section('content')
<!--page content-->
<div class="page-content page-home">
    <section class="store-trend-categories">
        <div class="container">
            <div class="row">
                <div class="title" data-aos="fade-up">
                    <h2 class="tittleText">Semua <span>K</span>ategori</h2>
                </div>
            </div>
            <div class="row">
                @php $incrementCategory = 0 @endphp
                @forelse ($categories as $category)
                <div class="col-6 col-md-3 col-lg-2 mt-5" data-aos="fade-up" data-aos-delay="{{ $incrementCategory+= 100 }}">
                    <a href="{{ route('categories-detail', $category->slug) }}" class="component-categories d-block">
                        <div class="categories-image">
                            <img src="{{  Storage::url($category->photo) }}" alt="" class="w-100" />
                        </div>
                        <p class="categories-text" style="font-size: 18px;">
                            {{ $category->name }}
                        </p>
                    </a>
                </div>
                @empty
                <div class="col-12 text-center py-5" data-aos="fade-up" data-aos-delay="100">
                    No Categories Found
                </div>
                @endforelse
                <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="600">
                </div>
            </div>
    </section>

    <section class="store-new-products">
        <div class="container">
            <div class="row">
                <div class="title" data-aos="fade-up">
                    <h2 class="tittleText">Semua <span>P</span>roduk</h2>
                </div>
            </div>
            <div class="row">
                @php $incrementProduct = 0 @endphp
                @forelse ($products as $product)
                <div class="container1" data-aos="fade-up" data-aos-delay="{{  $incrementProduct += 100 }}">
                    <div class="card1">
                        <a href="{{ route('detail', $product->slug) }}" class="component-products d-block">
                            <div class="products-thumbnail">
                                    <div class="products-image" style="
                                        @if($product->galleries->count())
                                            background-image: url('{{ Storage::url($product->galleries->first()->photos) }}');
                                        @else
                                            background-color: rgba(255,255,255,0.05);
                                        @endif
                                    "></div>
                            </div>
                            <div class="products-text">
                                {{ $product->name }}
                            </div>
                            <div class="products-price">
                                Rp{{ number_format($product->price) }}
                            </div>
                        </a>
                    </div>
                </div>
                @empty
                <div class="col-12 text-center py-5" data-aos="fade-up" data-aos-delay="100">
                    No Products Found
                </div>
                @endforelse
            </div>
            <div class="row">
                <div class="col-12 mt-4">
                    {{ $products->links() }}
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
