@extends('layouts.app')

@section('content')
    <a class="btn btn-primary mb-4" href="{{ url('/clients/create') }}" role="button">Add Client</a>
    <home-page/>
@endsection
