@if(session()->get('notify.type') === 'info' && (session()->get('notify.type') === 'alert' || session()->get('notify.type') === null))
    <div class="notify alert alert-info alert-dismissible fade show" role="alert">
        <span class="alert-icon"><i class="{{session()->get('notify.icon')}}"></i></span>
        <span class="alert-text"><strong>Info!</strong> {{ session()->get('notify.message') }}</span>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif