@extends('layouts.main')

@section('content')

@dump($gp)
@foreach ($gp as $g)
@dump($g->race())
@endforeach

@endsection