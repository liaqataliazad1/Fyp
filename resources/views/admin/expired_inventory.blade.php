@extends('admin.layout');
@section('container')
<h1 class="m-b-20">Expired Inventory List</h1>

{{ session('message') }}
<!-- DATA TABLE-->
<div class="table-responsive m-b-40 m-t-30">
    <table class="table table-borderless table-data3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Inventory Name</th>
                <th>Inventory Location</th>
                <th>Remarks</th>
                <th>Inventory Image</th>
                <th>QR Code</th>
               
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $inventory)
                
           
            <tr>
                <td>{{ $inventory->id }}</td>
                <td>{{ $inventory->name }}</td>
                <td>{{ $inventory->location }}</td>
                <td>{{ $inventory->remarks }}</td>
                <td> <img height="200" width="150" src="inventoryimage/{{ $inventory->image }}" alt=""> </td>
               <td><div class="visible-print text-center">
                {{-- {!! QrCode::size(80)->generate(Request::url()); !!} --}}
                {!! QrCode::size(80)->generate('{{ $inventory->id }}'); !!}
                </div>
               </td>
            
            </tr>

            @endforeach
           
        </tbody>
    </table>
     {{-- Pagination --}}
     <div class="d-flex justify-content-center">
        {!! $data->links() !!}
    </div>
</div>

<!-- END DATA TABLE-->

@endsection