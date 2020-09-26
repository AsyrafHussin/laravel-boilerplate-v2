@if (checkRole('admin'))
    @include('layouts.navbar.admin')
@else
    @include('layouts.navbar.user')
@endif
