@extends('admin.layout')
@section('container')
<h1>Add Inventory</h1>
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
                <form  method="post" action="{{ route('saveinventory') }}" enctype="multipart/form-data" novalidate="novalidate">
                    @csrf
                    



                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="select" class=" form-control-label">Inventory Name</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <select name="name" id="select" class="form-control">
                                <option value="">Please select an inventory</option>
                                <option value="Table">Table</option>
                                <option value="Chair">Chair</option>
                                <option value="LCD">LCD</option>
                                <option value="CPU tower">CPU tower</option>
                                <option value="CPU tower">Water cooler</option>
                                <option value="CPU tower">Marker</option>
                                <option value="CPU tower">white board</option>
                            </select>
                        </div>
                    </div>

                    
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="select" class=" form-control-label">Salect department</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <select name="department" id="select" class="form-control">
                                @foreach ($department as $row)
                                <option value="{{ $row->id }}">{{ $row->name }}</option>

                                 @endforeach
                            </select>
                        </div>
                    </div>



                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="select" class=" form-control-label">Inventory status</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <select name="status" id="select" class="form-control">
                                <option value="">Please choose inventory status</option>
                                <option value="1">Active</option>
                                <option value="0">Expired</option>
                                
                            </select>
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="cc-payment" class="control-label mb-1">Inventory Location</label>
                        <input id="cc-pament" name="location" type="text" class="form-control" aria-required="true" aria-invalid="false">
                    </div>

                    {{-- <div class="form-group has-success">
                        <label for="cc-name" class="control-label mb-1">Inventory Code</label>
                        <input id="cc-name" name="code" type="text" class="form-control cc-name valid" data-val="true" data-val-required="Please enter the name on card"
                            autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name-error">
                        <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                    </div> --}}
                    
                    <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="file-input" class=" form-control-label">File input</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="file" id="file-input" name="file" class="form-control-file">
                                                </div>
                                            </div>
                    </div>
                    <div class="form-group">
                        <label for="cc-payment" class="control-label mb-1">Remarks</label>
                        <input id="cc-pament" name="remarks" type="text" class="form-control" aria-required="true" aria-invalid="false">
                    </div>
                    <div>
                        <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
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



