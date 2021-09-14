@extends('layouts.app')

@section('title', 'A propos')

@section('css')


@endsection

@section('content')

<div class="container-scroller">
    <div class="main-panel">

        <header id="home" class="jumbotron banner bg-dark">
            <h2 class="section-header text-uppercase display-4 text-light">A propos </h2>
            <h5 class="text-white">Du Royaume Emerkhammaat</h5>
        </header>

        <div class="container py-2">

            @forelse(DB::table('abouts')->get() as $about)
            <section>
                <h2 class="text-uppercase">
                    {{ $about->titre }}
                </h2>

                <div class="py-5">
                    <p>
                        {!! $about->content !!}
                    </p>
                </div>
            </section>
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

@endsection