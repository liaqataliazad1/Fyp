@extends('admin.layout');
@section('container')
<h1 class="m-b-20">Inventory Reports</h1>

{{ session('message') }}
<!-- DATA TABLE-->
<div class="table-responsive m-b-40 m-t-30">
    <table class="table table-borderless table-data3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Inventory Name</th>
                <th>Inventory Location</th>
                <th>Inventory Code</th>
                
               
               
            </tr>
        </thead>
        <tbody>
           
                
           
            <tr>
                <td>test</td>
                <td>test</td>
                <td>test</td>
                <td>test</td>
                
               
            
            </tr>

          
           
        </tbody>
    </table>
</div>

<!-- END DATA TABLE-->

@endsection