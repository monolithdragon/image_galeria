@extends('layouts.app')

@section('content')

<div class="row row-cols-1 d-block text-center py-3">
    <h1 class='fw-bolder'>Képgaléria</h1>
    <h4 class="text-wrap p-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
        Harum eos, ipsam quasi accusamus inventore illum est iste vitae incidunt ratione.
    </h4>
</div>
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-3">
        @foreach ($images as $image => $title)
            
            <div class="col d-flex">

                <div class="card shadow">
                    <a href="{{ asset('./assets/images/'.$image) }}" data-lightbox="images" data-title="{{ $title }}" class="d-flex h-100">
                        <img src="{{ asset('./assets/images/'.$image) }}" class="card-img-top" alt="{{ $title }}">
                    </a>
                    
                    <div class="card-body">

                      <h5 class="card-title fw-bold">{{ $title }}</h5>
                      <p class="card-text text-muted fw-light">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Est similique corrupti officia quisquam exercitationem alias vel laudantium provident temporibus non.
                      </p>
                      
                    </div>

                </div>

            </div>
        
        @endforeach
    </>
    
@endsection