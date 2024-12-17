@extends('layouts.template')
@section('content')
<div class="container">
  <div class="row mt-4">
    <div class="col col-lg-3 col-md-3 mb-2">
      <div class="card shadow">
        <div class="card-header bg-dark text-white" style="text-align: center;">
          Kategori
        </div>
        <ul class="list-group list-group-flush">
          @foreach($listkategori as $kategori)
          <a href="{{ URL::to('kategori/'.$kategori->slug_kategori) }}" class="text-decoration-none">
            <li class="list-group-item">{{ $kategori->nama_kategori }}</li>
          </a>
          @endforeach
        </ul>
      </div>
    </div>
    <div class="col col-lg-9 col-md-9 mb-2">
      @if(isset($itemkategori))
      <h3>{{ $itemkategori->nama_kategori }}</h3>
      @else
      <h3>Semua Produk</h3>
      @endif
      <div class="row mt-4">
        @foreach($itemproduk as $produk)
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <a href="{{ URL::to('produk/'.$produk->slug_produk) }}">
              @if($produk->foto != null)
              <img src="{{ \Storage::url($produk->foto) }}" alt="{{ $produk->nama_produk }}" class="card-img-top">
              @else
              <img src="{{ asset('images/bag.jpg') }}" alt="{{ $produk->nama_produk }}" class="card-img-top">
              @endif
            </a>
            <div class="card-body">
              <a href="{{ URL::to('produk/'.$produk->slug_produk ) }}" class="text-decoration-none">
                <p class="card-text">
                  {{ $produk->nama_produk }}
                </p>
              </a>
              <div class="row mt-4">
                <div class="col">
                  <button class="btn btn-light">
                    <i class="far fa-heart"></i>
                  </button>
                </div>
                <div class="col-auto">
                    @if($produk->promo != null)
                    <div class="col-auto">
                        <p style="font-size: 18px; font-weight: bold;  color: red;">
                            <del style="color: red;">Rp. {{ number_format($produk->promo->harga_awal, 2) }}</del><br>
                            Rp. {{ number_format($produk->promo->harga_akhir, 2) }}
                        </p>
                    </div>
                    @else
                    <div class="col-auto ">
                        <p style="font-size: 23px; font-weight: bold; color: black;"><b>
                          <div class="btn"></div>
                            Rp. {{ number_format($produk->harga, 2) }}
                        </b></p>
                    </div>
                    @endif
                </div>


              </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>
      <div class="row">
        <div class="col">
          {{ $itemproduk->links() }}
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
