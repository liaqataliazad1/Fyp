@extends('admin.layout')
@section('container')
<h1>Add Department</h1>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
{{ session('message') }}
<div class="row">
    <div class="col-lg-12">
        
        <div class="card">
            <div class="card-body">
                <form  method="post" action="{{ url('departments') }}" enctype="multipart/form-data" novalidate="novalidate">
                    @csrf
                    



                    <div class="col form-group">
                        <div class="col col-md-6">
                            <label for="select" class=" form-control-label">department Name</label>
                            <input type="text" class="form-control" name="name">
                        </div>
                        <div class=" form-group">
                            <div class="col col-md-6">
                                <label for="select" class=" form-control-label">department description</label>
                                <textarea type="text-area" class="form-control p-28" name="description"></textarea>
                            </div>
                        </div>
                            <div class="col form-group">
                                
                        <button id="payment-button" type="submit" class=" mr-3 btn btn-lg btn-info  mt-4">
                            <span id="payment-button-amount">Submit</span>
                            <span id="payment-button-sending" style="display:none;">Sending…</span>
                        </button>
                       
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection



