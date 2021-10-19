@if (session()->has('notify.message'))

    @include('notify::notifications.danger')

    @include('notify::notifications.info')

    @include('notify::notifications.success')

    @include('notify::notifications.warning')

@endif

{{ session()->forget('notify.message') }}

<script>
    let notify = {
        timeout: "{{ config('notify.timeout') }}",
    }
</script>