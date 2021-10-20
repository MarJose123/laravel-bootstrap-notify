@if(session()->get('notify.type') === 'success')
    <div class="notify alert alert-success alert-dismissible fade show" role="alert">
        <span class="alert-icon"><i class="{{session()->get('notify.icon')}}"></i></span>
        <span class="alert-text"><strong>Success!</strong> {{ session()->get('notify.message') }}</span>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif