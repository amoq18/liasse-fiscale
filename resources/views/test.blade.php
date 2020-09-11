@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card p-5">
            <h2>fgf</h2>
            <input type="text" class="form-control" name="" placeholder="your text" id="ok">
            <div class="row col-md-6 list" >
                <button class="col-md-12 btn btn-success" value="btn1" id="btn1"> btn 1</button>
                <button class="col-md-12 btn btn-success bg-success-light" value="btn2" id="btn2"> btn 2</button>
                <button class="col-md-12 btn btn-success" value="btn3" id="btn3"> btn 3</button>
                <button class="col-md-12 btn btn-success bg-success-light" value="btn4" id="btn4"> btn 4</button>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
<script>
    $('button').hide()
    // $('option').hide()
    $('#ok').on('keyup', function () {
        $('option').show()
        if($('#ok').val() == 'btn1') {
            $('#btn1').show()
        }
        else {
            $('#btn1').hide()
        }
    })

    $('#btn1').click(function () {
        $('#ok').val('Hello ' + this.value)
        $('button').hide()
    })

</script>
@endsection
