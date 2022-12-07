@extends('admin.layout');
@section('container')
<h1 class="m-b-20">Adjust Inventory</h1>

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
                <th>Action</th>
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
                <td >
                    <a href="{{ url('edit_inventory', $inventory->id) }}">
                    <button type="button" class="btn btn-success">Edit</button>
                    </a>
                </td>
            
            </tr>

            @endforeach
           
        </tbody>
    </table>
</div>
<!-- END DATA TABLE-->

@endsection