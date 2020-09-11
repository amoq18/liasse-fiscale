@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-select.min.css') }}">
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card p-5">
            <input type="text" class="form-control" name="product" list="q"/>
            <datalist id="q">
                <option value="Pen">Pen</option>
                <option value="Pencil">Pencil</option>
                <option value="Paper">Paper</option>
            </datalist>

            <select class="form-control selectpicker" style="background: white" data-live-search="true" title="-- Choisir --">
                <optgroup label="Picnic" data-tokens="Picnic">
                    <option title="Picnic - Mustard">Mustard</option>
                    <option title="Picnic - Ketchup">Ketchup</option>
                    <option title="Picnic - Relish">Relish</option>
                </optgroup>
                <optgroup label="Camping" data-tokens="Camping">
                    <option title="Camping">Tent</option>
                    <option title="Camping">Flashlight</option>
                    <option title="Camping">Toilet Paper</option>
                </optgroup>
            </select>
        </div>
    </div>
</div>
@endsection

@section('js')
<script src="{{ asset('assets/js/bootstrap-select.min.js') }}"></script>
<script>
    // $('select').selectpicker();

</script>
@endsection
