@extends('app')

@section('contents')
    {{-- {!! $dataTable->table() !!} --}}
@endsection

@push('scripts')
    {{-- {!! $dataTable->scripts() !!} --}}
    <script>
//         $(document).ready( function () {
//     $('#myTable').DataTable();
// } );
    </script>
@endpush