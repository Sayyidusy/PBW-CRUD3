<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Daftar Koleksi') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
              <div class="p-6 bg-white border-b border-gray-200">
                <div class="container">
                    <table class="table table-bordered yajra-datatable-collections">
                        <thead>
                            <tr>
                                <th>No</th>  
                                <th>Judul</th>  
                                <th>Jenis</th>  
                                <th>Jumlah</th>  
                                <th>Aksi</th>  
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
              </div>
            </div>
        </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
    <script type="text/javascript">
      $(function () {
        
        var table = $('.yajra-datatable-collections').DataTable({
            ajax: '{{ url("getAllCollections") }}',
            serverSide: false,
            processing: true,
            deferRender: true,
            type: 'GET',
            destroy:true,
            columns: [
                {data:'id', name: 'id'},
                {data:'judul', name: 'judul'},
                {data:'jenis', name: 'jenis'},
                {data:'jumlah', name: 'jumlah'},
                {data:'action', name: 'action', orderable: false, searchable: false}
            ]
        });
        
      });
    </script>
</x-app-layout>
