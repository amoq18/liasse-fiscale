@extends('layouts.app')

@section('content')
    @include('snippets.traitement', [
        'state2' => 'active',
    ])
@endsection
