@include('layouts.header')


    <div class="container">
        <table class="table table-bordered" id="venta-table">
            <thead>
                <tr>
                    <th>N°</th>
                    <th>venta</th>
                    <th>Fecha de Cierre</th>
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
        $('#venta-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: 'venta/'+id,
            columns: [
                { data: 'pk_venta', name: 'pk_venta' },
                { data: 'fk_combo', name: 'fk_combo' },
                { data: 'cantidad', name: 'cantidad' },
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