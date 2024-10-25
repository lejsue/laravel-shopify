<script type="text/javascript">
    document.addEventListener('DOMContentLoaded', function () {
        @if (isset($flashNotice) || request()->has('notice'))
            shopify.toast.show("{{ request()->get('notice', $flashNotice ?? null) }}", { duration: 3000 });
        @endif

        @if (isset($flashError) || request()->has('error'))
            shopify.toast.show("{{ request()->get('error', $flashError ?? null) }}", { duration: 3000, isError: true });
        @endif
    });
</script>
