@extends('admin.layout');
@section('container')
<form>
    <div class="form-group mt-0">
    <input type="search" name="search" class="form-control w-25" placeholder=" search inventory">
    <button class="btn btn-primary mt-2">Search</button>
    </div>
</form>
<h1 class="m-b-20">Inventory</h1>

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
                <td>{{ $inventory->location }} <span class="p-1">{{ $inventory->department->name }}</span></td>
                <td>{{ $inventory->remarks }}</td>
                <td> <img height="200" width="150" src="inventoryimage/{{ $inventory->image }}" alt=""> </td>
               <td><div class="visible-print text-center">
                {{-- {!! QrCode::size(80)->generate(Request::url()); !!} --}}
                {!! QrCode::size(80)->generate("product name". $inventory->name ." product location " . " $inventory->location " . " contact admin: 0945-920502"); !!}
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