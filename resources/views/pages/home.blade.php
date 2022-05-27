@extends('layouts.app')

@section('title')
Store Homepage
@endsection

@push('addon-style')
    <link href="{{ url('/style/style.css') }}" rel="stylesheet" />
    <style>
    .banner1 {
        position: relative;
        width: 100%;
        min-height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        background-image: url("assets/images/1.jpg");
        background-size: cover;
    }
    </style>
@endpush

@section('content')

    <section class="banner1" id="banner1">
        <div class="content1">
            <h2>Futsal Match</h2>
            <p>Futsal match menyediakan produk terbaik mulai dari sepatu olahraga dan sneaker hingga aksesori olahraga lainnya untuk semua kebutuhan Anda.</p>
            <a href="{{ route('about') }}" class="btn">Tentang Kami</a>
        </div>
    </section>
    <section class="store-trend-categories">
        <div class="container">
            <div class="row">
                <div class="title" data-aos="fade-up">
                    <h2 class="tittleText">Kategori <span>P</span>roduk</h2>
                </div>
            </div>
            <div class="row">
                @php $incrementCategory = 0 @endphp
                @forelse ($categories as $category)
                <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="{{ $incrementCategory+= 100 }}">
                    <a href="{{ route('categories-detail', $category->slug) }}" class="component-categories d-block">
                        <div class="categories-image">
                            <img src="{{  Storage::url($category->photo) }}" alt="" class="w-100" />
                        </div>
                        <h5 class="categories-text" style="font-size: 18px;">
                            {{ $category->name }}
                        </h5>
                    </a>
                </div>
                @empty
                <div class="col-12 text-center py-5" data-aos="fade-up" data-aos-delay="100">
                    No Categories Found
                </div>
                @endforelse
            </div>
        </div>
    </section>

    <section class="store-new-products">
        <div class="container">
            <div class="row">
                <div class="title" data-aos="fade-up">
                    <h2 class="tittleText">Produk <span>T</span>erbaru</h2>
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
        </div>
    </section>



@endsection
