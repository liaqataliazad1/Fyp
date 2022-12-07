                @extends('admin.layout');
                @section('container')
                <form>
                    <div class="form-group mt-0">
                    <input type="search" name="search" class="form-control w-25" placeholder=" search departmentm">
                    <button class="btn btn-primary mt-2">Search</button>
                    </div>
                </form>
                <h1 class="m-b-20">All Departments</h1>

                {{ session('message') }}
                <!-- DATA TABLE-->
                <div class="table-responsive m-b-40 m-t-30">
                    <table class="table table-borderless table-data3">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Deparment Name</th>
                                <th>Short descraption</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $department)
                                
                        
                            <tr>
                                <td>{{ $department->id }}</td>
                                <td>{{ $department->name }}</td>
                                <td>{{ $department->description }}</td>
                                
                               
                            <td>
                                    {{-- <button class="btn btn-danger">Delete</button> --}}
                                    <form method="POST" action="{{ route('departments.destroy', $department) }}">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger" type="submit">Delete</button>
                                    </form>
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