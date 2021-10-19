@if (session()->has('notify.message'))

    @include('notify::resources.views.notifications.danger')

    @include('notify::resources.views.notifications.info')

    @include('notify::resources.views.notifications.success')

    @include('notify::resources.views.notifications.warning')

@endif

{{ session()->forget('notify.message') }}

<script>
    let notify = {
        timeout: "{{ config('notify.timeout') }}",
    }
</script>