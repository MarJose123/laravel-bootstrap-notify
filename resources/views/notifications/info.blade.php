@if(session()->get('notify.type') === 'info')
    <div class="alert alert-info alert-dismissible fade show" role="alert">
        <span class="alert-icon"><i class="fa fa-info-circle"></i></span>
        <span class="alert-text"><strong>Info!</strong> {{ session()->get('notify.message') }}</span>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif