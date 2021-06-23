@include('layouts.header')


    <div class="container">
        <table class="table table-bordered" id="consejocomunal-table">
            <thead>
                <tr>
                    <th>N°</th>
                    <th>Consejo Comunal</th>
                    {{-- <th>Created At</th>
                    <th>Updated At</th> --}}
                    <th>Action</th>
                </tr>
            </thead>
        </table>
    </div>





@include('layouts.footer')

<script>
    $(function() {
        $('#consejocomunal-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{!! route('consejocomunal.list') !!}',
            columns: [
                { data: 'pk_consejo_comunal', name: 'pk_consejo_comunal' },
                { data: 'nombre_consejo_comunal', name: 'nombre_consejo_comunal' },
                // { data: 'created_at', name: 'created_at' },
                // { data: 'updated_at', name: 'updated_at' },
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