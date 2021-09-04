@extends('layouts.app')


@section('content')

<div class="container-scroller">
    <header id="home" class="jumbotron banner bg-dark">
        <h2 class="section-header text-uppercase display-4 text-light">Nos produits</h2>
    </header>

    <div class="main-panel">

        <div class="container">
            <h3>
                Vous trouvez ici nos produits divers
            </h3>


            <div class="row">

                @forelse( App\Product::where('category', 'agro')->paginate(12) as $product )

                <div class="col-lg-3 card col-md-6 m-3 m-0 p-0">
                    <a href="/show/{{$product->id}}">
                        <div class=" card-body m-0 p-0">
                            <div class="pi-pic card-header m-0 p-0" data-setbg="">
                                <img src="{{ Voyager::image($product->image, 'small') }}" class="img-fluid" alt="{{ $product->name }}">

                            </div>
                            <div class="pi-text p-3">
                                <a href="#" class="heart-icon"><span class="icon_heart_alt"></span></a>
                                <div class="pt-price">{{ $product->prix }} FCFA <span hidden>/month</span></div>
                                <h5><a href="show/{{$product->id}}">{{ $product->name}}</a></h5>
                                <p><span class="icon_pin_alt"></span> {{ $product->details}}</p>
                                @if($product->options != null)
                                <ul>

                                    {{-- <li><i class="fa fa-object-group"></i> 2, 283</li> --}}
                                    <!-- <li><i class="fa fa-bathtub"></i> 03</li>
                                    <li><i class="fa fa-bed"></i> 05</li>
                                    <li><i class="fa fa-automobile"></i> 01</li> -->

                                    <span class="text-danger ">Aucune option disponible</span>

                                </ul>
                                @endif

                            </div>
                            <!-- <div class="label">A {{ date($product->created_at) }}</div> -->

                        </div>
                    </a>
                </div>

                @empty
                <div class="col-md-12 offset-md-12 padding-y    text-center">
                    <p class="m-3 text-light alert alert-danger b display-3">AUCUN ARTICLE EN VENTE POUR LE MOMENT, REVENEZ PLUS TARD !!</p>

                </div>

                @endforelse
            </div>
        </div>
    </div>
</div>
@stop