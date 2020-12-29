    @if (Session::has('message'))
        <script>
            @if(Session::get('type') == 'success')
                toastr.success(' {{ Session::get('message') }} ');
            @elseif(Session::get('type') == 'danger')
                toastr.error('  {{ Session::get('message') }}  ');
            @endif
        </script>
    @endif
    