@extends('layouts.template')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Ajouter desciptions</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-warning" href="{{ route('descriptions.index') }}"> retour</a>
        </div>
    </div>
</div>
   
@if ($errors->any())
    <div class="alert alert-danger">
        There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   
                <form class="form"  action="{{ route('descriptions.store') }}" method="POST">
                @csrf
                <div class="card-body">
                                <div class="form-group">
                                <label>description:</label>
                                <input type="text" class="form-control" name="name" required placeholder="Enter full name"/>
                                <span class="form-text text-muted">description</span>
                                </div>
                                        <div class="separator separator-dashed my-5"></div> 
                                 <div class="form-group">
                                        <label>Nom:</label>
                                      <span class="form-text text-muted">Concerne</span>
                                                <select class="form-select" data-control="select2" 
                                                data-hide-search="true" data-placeholder="Select a Team Member"
                                                 name="concerne_id">
                                                
                                                @foreach ($concernes as $concerne)
                                                
                                                    <option value="{{$concerne->id}}">{{$concerne->name}}</option>
                                                    @endforeach
                                                    </select>
                                </div>       
                                <div class="separator separator-dashed my-5"></div>
                </div>
                 <div class="card-footer">
                                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                    <button type="reset" class="btn btn-secondary">Cancel</button>
                </div>
                </form>

@endsection