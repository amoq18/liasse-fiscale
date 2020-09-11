@extends('layouts.app')

@section('css')
    {{-- <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-select.min.css') }}"> --}}
@endsection

@section('content')
    @include('snippets.traitement', [
        'state1' => 'active',
    ])
@endsection

@section('js')
{{-- <script src="{{ asset('assets/js/bootstrap-select.min.js') }}"></script>
<script>
    $(document).ready(function () {

    });
</script> --}}
@endsection
