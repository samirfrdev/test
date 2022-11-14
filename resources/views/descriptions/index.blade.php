@extends('layouts.template')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
   
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('descriptions.create') }}"> Ajouter description</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table id="kt_datatable_both_scrolls" class="table table-striped table-row-bordered gy-5 gs-7">
    <thead>
        <tr class="fw-semibold fs-6 text-gray-800">
            <th class="min-w-200px">Nom</th>
            <th class="min-w-200px">Concernes</th>
            <th class="min-w-150px" width="280px">Action</th>
          

        </tr>
    </thead>
    <tbody>
    @foreach ($descriptions as $description)
        <tr>
            
            <td>{{ $description->name }}</td>
            <td>{{ $description->concerne->name }}</td>
           
            <td>
                <form action="{{ route('descriptions.destroy',$description->id) }}" method="POST">
   
                    <!-- <a  href="{{ route('descriptions.show',$description->id) }}"><i class="fa fa-eye" style="font-size:24px;color:royalblue"></i></a> -->
    
                    <a href="{{ route('descriptions.edit',$description->id) }}"><i class='far fa-edit' style='font-size:24px;color:green'></i></a>
   
                    @csrf
                    @method('DELETE')

                 <button class="btn btn-sm" >
                            
                 <i class='fa fa-trash' style='font-size:24px;color:red;margin-top: -11px'> </i>
                </button> 

                
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
{!! $descriptions->links() !!}  
@endsection
     
      
