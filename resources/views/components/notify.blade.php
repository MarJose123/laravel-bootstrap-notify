@if (session()->has('notify.message') && (session()->get('notify.model') === 'alert' || session()->get('notify.model') === null))

    @include('notify::notifications.danger')

    @include('notify::notifications.info')

    @include('notify::notifications.success')

    @include('notify::notifications.warning')

@endif

{{ session()->forget('notify.message') }}

<script>
    let notify = {
        timeout: "{{ config('notify.timeout') }}",
        preset: {{ config('notify.preset-messages') }}
    }

    window.notify = notify;
</script>