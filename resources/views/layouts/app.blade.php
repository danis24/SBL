@role('dev')
@include('layouts.dev.app')
@else
@include('layouts.normal.app')
@endrole