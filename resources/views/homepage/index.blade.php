@extends('layouts.template')
@section('content')
<div class="container">
  <!-- carousel -->
  <div class="row">
    <div class="col">
      <div id="carousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          @foreach($itemslide as $index => $slide )
          @if($index == 0)
          <div class="carousel-item active">
              <img src="{{ \Storage::url($slide->foto) }}" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5>{{ $slide->caption_title }}</h5>
                <p>{{ $slide->caption_content }}</p>
              </div>
          </div>
          @else
          <div class="carousel-item">
              <img src="{{ \Storage::url($slide->foto) }}" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5>{{ $slide->caption_title }}</h5>
                <p>{{ $slide->caption_content }}</p>
              </div>
          </div>
          @endif
          @endforeach          
        </div>
        <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
  </div>
  <!-- end carousel -->
  <!-- kategori produk -->
  <div class="row mt-4">
    <div class="col col-md-12 col-sm-12 mb-4">
      <h2 class="">Kategori Produk</h2>
    </div>
    @foreach($itemkategori as $kategori)
    <!-- kategori pertama -->
    <div class="col-md-4">
      <div class="card mb-4 shadow-sm">
        <a href="{{ URL::to('kategori/'.$kategori->slug_kategori) }}">
          @if($kategori->foto != null)
          <img src="{{ \Storage::url($kategori->foto) }}" alt="{{ $kategori->nama_kategori }}" class="card-img-top" style="width: 100%; height: 400px; object-fit: cover;">
          @else
          <img src="{{ asset('images/bag.jpg') }}" alt="{{ $kategori->nama_kategori }}" class="card-img-top">
          @endif
        </a>
        <div class="card-body">
          <a href="{{ URL::to('kategori/'.$kategori->slug_kategori) }}" class="text-decoration-none" style="color: black;" >
            <p class="card-text">{{ $kategori->nama_kategori }}</p>
          </a>
        </div>
      </div>
    </div>
    @endforeach
  <!-- end kategori produk -->
  <!-- produk Promo-->
  <div class="row mt-4">
    <div class="col col-md-12 col-sm-12 mb-4">
      <h2 class="">Promo</h2>
    </div>
    @foreach($itempromo as $promo)
    <!-- produk pertama -->
    <div class="col-md-4">
      <div class="card mb-4 shadow-sm">
        <a href="{{ URL::to('produk/'.$promo->produk->slug_produk) }}">
          @if($promo->produk->foto != null)
          <img src="{{\Storage::url($promo->produk->foto) }}" alt="{{ $promo->produk->nama_produk }}" class="card-img-top">
          @else
          <img src="{{asset('images/bag.jpg') }}" alt="{{ $promo->produk->nama_produk }}" class="card-img-top">
          @endif
        </a>
        <div class="card-body">
          <a href="{{ URL::to('produk/'.$promo->produk->slug_produk) }}" class="text-decoration-none" style="color: black;" >
            <p class="card-text">
              {{ $promo->produk->nama_produk }}
            </p>
          </a>
          <div class="row mt-4">
            <div class="col">
              <button class="btn btn-light">
                <i class="far fa-heart"></i>
              </button>
            </div>
            <div class="col-auto">
              <p style="color: red;">
                <del>Rp. {{ number_format($promo->harga_awal, 2) }}</del>
                <br />
                Rp. {{ number_format($promo->harga_akhir, 2) }}
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    @endforeach
  <!-- end produk promo -->
<!-- produk Terbaru-->
<div class="row mt-4">
  <div class="col col-md-12 col-sm-12 mb-4">
    <h2 class="">Terbaru</h2>
  </div>
  @php $count = 0; @endphp <!-- Menambahkan variabel count -->
  @foreach($itemproduk as $produk)
    <!-- Hentikan loop setelah 3 produk -->
    @if($count < 3)
      <!-- produk pertama -->
      <div class="col-md-4">
        <div class="card mb-4 shadow-sm">
          <a href="{{ URL::to('produk/'.$produk->slug_produk ) }}">
            @if($produk->foto != null)
              <img src="{{ \Storage::url($produk->foto) }}" alt="{{ $produk->nama_produk }}" class="card-img-top">
            @else
              <img src="{{ asset('images/bag.jpg') }}" alt="{{ $produk->nama_produk }}" class="card-img-top">
            @endif
          </a>
          <div class="card-body">
            <a href="{{ URL::to('produk/'.$produk->slug_produk ) }}" class="text-decoration-none" style="color: black;" >
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
                <p>
                  Rp. {{ number_format($produk->harga, 2) }}
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      @php $count++; @endphp <!-- Increment count setiap kali produk ditampilkan -->
    @endif
  @endforeach
<!-- end produk terbaru -->


  <!-- tentang toko -->
  <hr>
  <section class="saving_section ">
    <div class="box">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-6">
            <div class="img-box">
              <img src="{{ asset('images/saving-img.png') }}" alt="">
            </div>
          </div>
          <div class="col-lg-6">
            <div class="detail-box" style="color: black;">
              <div class="heading_container">
                <h2>
                  Dagadu Djokdja
                </h2>
              </div>
              <p>
              Dagadu Djokdja adalah brand produk kreatif aseli Yogyakarta yang berdiri sejak 1994. Menghadirkan desain-desain unik dan menggelitik dalam beragam gaya visual yang bisa Dagaduers pilih sesuai selera masing-masing.
            </p>
              <div class="btn-box">
                <a href="{{ asset('produk') }}" class="btn1">
                  Belanja Sekarang
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- end tentang toko -->

</div>
@endsection