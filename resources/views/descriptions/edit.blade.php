@extends('layouts.template')
  
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Modifier desciptions</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-warning" href="{{ route('descriptions.index') }}">retour</a>
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

   
  
    <form action="{{ route('descriptions.update',$description->id) }}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Descriotion:</strong>
                    <input type="text" name="name" value="{{ $description->name }}" class="form-control" placeholder="Name">
                </div>

                <div class="separator separator-dashed my-5"></div>

                <div class="form-group">
                                        <label>Nom Concerne: </label>
                                      <span class="form-text text-muted">concerne</span>
                                                <select class="form-select" data-control="select2" 
                                                data-hide-search="true" data-placeholder="Select a Team Member"
                                                 name="concerne_id">

                                   

                    @foreach ($concernes as $concerne)
                        <option value="{{$concerne->id}}"
                          @if ($concerne->id == $description->concerne_id)
                            selected
                          @endif
                          >
                          {{$concerne->name}}
                        </option>
                      @endforeach

                                                    </select>
                                </div>       
                                <div class="separator separator-dashed my-5"></div>

            </div>
           
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Modifier</button>
            </div>
        </div>
   
    </form>
    @endsection