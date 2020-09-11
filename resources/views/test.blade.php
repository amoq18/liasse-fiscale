@extends('layouts.app')

@section('content')
<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Rounded justified</h4>
        </div>
        <div class="card-body">
            <ul class="nav nav-tabs nav-tabs-solid nav-tabs-rounded nav-justified">
                <li class="nav-item"><a class="nav-link active" href="#solid-rounded-justified-tab1" data-toggle="tab">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="#solid-rounded-justified-tab2" data-toggle="tab" style="">Profile</a></li>
                <li class="nav-item"><a class="nav-link" href="#solid-rounded-justified-tab3" data-toggle="tab" style="">Messages</a></li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane show active" id="solid-rounded-justified-tab1">
                    Tab content 1 <br>
                    <a class="btn btn-primary" href="http://192.168.8.116:3000/test#solid-rounded-justified-tab2">btn 1</a>
                </div>
                <div class="tab-pane" id="solid-rounded-justified-tab2">
                    Tab content 2
                </div>
                <div class="tab-pane" id="solid-rounded-justified-tab3">
                    Tab content 3
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
<script>
    
</script>
@endsection
