@extends('layouts.app')

@section('content')
<div class="container-scroller">
    <div class="main-panel">

        <header id="home" class="jumbotron banner bg-dark">
            <h2 class="section-header text-uppercase display-4 text-light">FORMATION DES ELITES</h2>
        </header>
        <div class="container">
            <p>
                Conquête des terres pour l’instauration du Royaume à travers l’Agriculture, la Santé, l’Education, dans les territoires enclavés, abandonnés afin de rendre les villageois indépendant, autonome en cherchant à découvrir les potentialités ou richesses de la nature.
            </p>
        </div>
        <div class="row p-5">
            <div class="col-3 card">
                <div class="py-5">
                    <h4>Les portails spirituelles</h4>
                </div>
                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    @forelse(DB::table('formations')->get() as $format)
                    <a class="nav-link {{ $format->id == 1 ? 'active' : '' }}" id="v-pills-{{ $format->slug }}-tab" data-toggle="pill" href="#v-pills-{{ $format->slug }}" role="tab" aria-controls="v-pills-{{ $format->slug }}" aria-selected="true">{{ $format->titre }}</a>
                    <hr>
                    @empty

                    <div class="py-5 " align="center">

                        <div class="alert alert-danger b h4">
                            Mise à jour en cours
                        </div>
                    </div>

                    @endforelse
                </div>
            </div>
            <div class="col-9 ">
                <!-- <label for="v-pills-tabContent">FORMATION</label> -->
                <div class="tab-content" id="v-pills-tabContent">

                    @forelse(DB::table('formations')->get() as $format)
                    <div class="tab-pane fade  {{ $format->id == 1 ? ' show active' : '' }}" id="v-pills-{{ $format->slug }}" role="tabpanel" aria-labelledby="v-pills-{{ $format->slug }}-tab">
                        <p class="text-danger">{!! $format->content !!}</p>
                    </div>
                    @empty

                    <div class="py-5 " align="center">

                        <div class="alert alert-danger b h4">
                            Mise à jour en cours
                        </div>
                    </div>

                    @endforelse

                </div>
            </div>
        </div>
    </div>
</div>



@stop