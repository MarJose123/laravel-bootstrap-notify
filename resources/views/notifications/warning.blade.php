@if(session()->get('notify.type') === 'warning')
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <span class="alert-icon"><i class="fas fa-exclamation-circle"></i></span>
        <span class="alert-text"><strong>Warning!</strong> {{ session()->get('notify.message') }}</span>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif