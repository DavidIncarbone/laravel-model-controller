{{-- Questa pagina utilizza il layout master --}}

@extends("layouts.master")


@section("contenuto")

@foreach ($movies as $movie)

@dd($movie["title"])



@endforeach

    @endsection



