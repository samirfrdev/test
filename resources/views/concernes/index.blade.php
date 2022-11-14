@extends('layouts.template')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
   
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('concernes.create') }}"> Ajouter concerne</a>
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
            <th class="min-w-200px">constats</th>
            <th class="min-w-150px" width="280px">Action</th>
          

        </tr>
    </thead>
    <tbody>
    @foreach ($concernes as $concerne)
        <tr>
            
            <td>{{ $concerne->name }}</td>
            <td>{{ $concerne->constat->name }}</td>
           
            <td>
                <form action="{{ route('concernes.destroy',$concerne->id) }}" method="POST">
   
                    <!-- <a  href="{{ route('concernes.show',$concerne->id) }}"><i class="fa fa-eye" style="font-size:24px;color:royalblue"></i></a> -->
    
                    <a href="{{ route('concernes.edit',$concerne->id) }}"><i class='far fa-edit' style='font-size:24px;color:green'></i></a>
   
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
{!! $concernes->links() !!}  
@endsection
     
      
