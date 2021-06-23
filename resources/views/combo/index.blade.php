@include('layouts.header')


    <div class="container">
        <table class="table table-bordered" id="combo-table">
            <thead>
                <tr>
                    <th>N°</th>
                    <th>Nombre Combo</th>
                    <th>Precio Dolares</th>
                    <th>Jornada</th>
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
        $('#combo-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{!! route('combo.list') !!}',
            columns: [
                { data: 'pk_combo', name: 'pk_combo' },
                { data: 'nombre_combo', name: 'nombre_combo' },
                { data: 'precio_dolares', name: 'precio_dolares' },
                { data: 'jornada.nombre_venta', name: 'jornada.nombre_venta' },
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