@include('layouts.header')


    <div class="container">
        <table class="table table-bordered" id="cambio-table">
            <thead>
                <tr>
                    <th>N°</th>
                    <th>Moneda</th>
                    <th>Tasa por $</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                    <th>Action</th>
                </tr>
            </thead>
        </table>
    </div>





@include('layouts.footer')

<script>
    $(function() {
        $('#cambio-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{!! route('cambio.list') !!}',
            columns: [
                { data: 'pk_cambio', name: 'pk_cambio' },
                { data: 'moneda', name: 'moneda' },
                { data: 'tasa', name: 'tasa' },
                { data: 'created_at', name: 'created_at' },
                { data: 'updated_at', name: 'updated_at' },
                {
                data: 'action', 
                name: 'action', 
                orderable: true, 
                searchable: true
            },
            ]
        });
    });
</script>