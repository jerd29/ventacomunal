@include('layouts.header')


    <div class="container">
        <table class="table table-bordered" id="jornada-table">
            <thead>
                <tr>
                    <th>N°</th>
                    <th>Jornada</th>
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
        $('#jornada-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{!! route('jornada.list') !!}',
            columns: [
                { data: 'pk_jornada', name: 'pk_jornada' },
                { data: 'nombre_venta', name: 'nombre_venta' },
                { data: 'fecha_cierre', name: 'fecha_cierre' },
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

<script>
    $(document).on('click', "#entrar-jornada", function() {
      $(this).addClass('edit-item-trigger-clicked'); //useful for identifying which trigger was clicked and consequently grab data from the correct row and not the wrong one.
    });
  
    // on modal show
    $(document).on('click', '#entrar-jornada', function() {
      fila = $(this).closest("tr");
      id = parseInt(fila.find("td:eq(0)").text());
        console.log(id);
        url = 'venta/'+id;
        window.location = url;


  
    });
</script>