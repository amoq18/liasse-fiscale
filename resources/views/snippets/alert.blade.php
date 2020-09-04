@if ($alert_type == 'success')
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <h5><strong>{{ $msg }}</strong></h5>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div>
@endif

