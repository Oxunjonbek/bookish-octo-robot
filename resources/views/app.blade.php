<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <link rel="stylesheet" href="https://cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css"> --}}
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    {{-- <script src="https://cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script> --}}
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            @section('contents')
                @show
                <table class="table table-bordered" id="users-table">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Age</th>
                            <th>TSCk</th>
                            <th>Status</th>
                            <th>Created At</th>
                            <th>Updated At</th>
                        </tr>
                    </thead>
                </table>
        </div>
    </div>
    @stack('scripts')
    
</body>
<script>
    // $('#users-table').DataTable({
    //     processing: true,
    //     serverSide: true,
    //     ajax: 'https://datatables.yajrabox.com/eloquent/multi-filter-select-data',
    //     columns: [
    //         { data: 'id', name: 'id' },
    //             { data: 'name', name: 'name' },
    //             { data: 'email', name: 'email' },
    //             { data: 'age', name: 'age' },
    //             { data: 'TCKN', name: 'TCKN' },
    //             { data: 'status', name: 'status' },
    //             { data: 'created_at', name: 'created_at' },
    //             { data: 'updated_at', name: 'updated_at' }
    //     ],
    //     initComplete: function () {
    //         this.api().columns().every(function () {
    //             var column = this;
    //             var input = document.createElement("input");
    //             $(input).appendTo($(column.footer()).empty())
    //             .on('change', function () {
    //                 column.search($(this).val(), false, false, true).draw();
    //             });
    //         });
    //     }
    // });
    $(function() {
        $('#users-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{!! route('users') !!}',
            columns: [
                { data: 'id', name: 'id' },
                { data: 'name', name: 'name' },
                { data: 'email', name: 'email' },
                { data: 'age', name: 'age' },
                { data: 'TCKN', name: 'TCKN' },
                { data: 'status', name: 'status' },
                { data: 'created_at', name: 'created_at' },
                { data: 'updated_at', name: 'updated_at' }
            ]
        });
    });
    </script>
</html>