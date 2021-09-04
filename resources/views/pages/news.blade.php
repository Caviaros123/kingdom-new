@extends('layouts.app')

@section('css')

@endsection

@section('content')

<!-- <div class"container-scroller ">
        <div class="main-panel p-5 m-5">
            <header id="header">
                <div class="container d-flex justify-content-center align-items-center">
                 
                     <h1 class"display-2 m-auto text-center">
                         Cette page est en contruction
                     </h1><br>
                 
                </div>
            </header>
            <div class="container d-flex justify-content-center align-items-center">
                 
                    <p>Elle sera disponible bientot</p>
                 
                </div>
           
        </div>
    </div> -->

<div class="container-scroller">
  <div class="main-panel">

    <header id="home" class="jumbotron banner bg-dark">
      <h2 class="section-header text-uppercase display-2 text-light">Actualités</h2>
    </header>

    <div class="py-2">


      <!-- partial -->
      <div class="flash-news-banner">
        <div class="container">
          <div class="d-lg-flex align-items-center justify-content-between">
            <div class="d-flex align-items-center">
              <span class="badge badge-dark mr-3">Flash info</span>
              <p class="mb-0">
                Nous publions constament sur notre site
              </p>
            </div>
            <div class="d-flex">
              <span class="mr-3 text-danger">{{ NOW() }}</span>
              <span class="text-danger">30°C, Brazzaville</span>
            </div>
          </div>
        </div>
      </div>


      <div class="content-wrapper pt-4">
        <div class="container">
          <div class="row" data-aos="fade-up">
            <div class="col-xl-8 stretch-card grid-margin">

              @forelse(DB::table('posts')->where('status', 'PUBLISHED')->get() as $post)
              <div class="position-relative">
                <img src="{{Voyager::image($post->image)}}" alt="banner" class="img-fluid" />
                <div class="banner-content">
                  <div class="badge badge-danger fs-12 font-weight-bold mb-3">
                    Nouveautés
                  </div>
                  <h1 class="mb-0">{{ $post->title }}</h1>
                  <h1 class="mb-2">
                    {!! $post->body !!}
                  </h1>
                  <div class="fs-12">
                    <span class="mr-2">Photo </span>10 Minutes
                  </div>
                </div>
              </div>
              <hr>
              @empty

              <div class="alert alert-danger">
                <h3>Aucun post pour le moment</h3>
              </div>
              @endforelse
            </div>


            <div class="col-xl-4 stretch-card grid-margin">
              <div class="card bg-light text-dark ">
                <div class="card-body">
                  <h2>Dernières Nouvelles</h2>

                  @forelse(DB::table('posts')->where('status', 'PUBLISHED')->take(3)->get() as $post)
                  <div class="d-flex border-bottom-blue pt-3 pb-4 align-items-center justify-content-between">
                    <div class="pr-3">
                      <h5>{{ $post->title }}</h5>
                      <div class="fs-12 mt-2">
                        <span class="mr-2 small">Posté il y'a 10 Minutes </span>
                      </div>
                    </div>
                    <div class="rotate-img" align="right">
                      <img src="{{ Voyager::image($post->image) }}" style="max-width: 200px;" alt="thumb" class="img-fluid img-lg" />
                    </div>
                  </div>
                  @empty
                  <div class="alert alert-danger">
                    <h3>Aucun post récent pour le moment</h3>
                  </div>
                  @endforelse



                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
    <!-- main-panel ends -->
  </div>
</div>


@endsection


@section('footer')

@endsection

@section('js')

@endsection