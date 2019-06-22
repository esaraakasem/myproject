@extends('layouts.app')

@section('content')
 <section class="content-header">
      <h1>
company
        <small>list of company</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">Blank page</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
            
          <h3 class="box-title">company</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
               <a href="{{url(route('company.create'))}}" class="btn btn_primary btn btn-danger"> <i class=" fa fa-edit"></i>new company</a>
            @include('flash::message')
        @if(count($coms))

<div class='table-responsive'>
    
    <table class='table table-bordered'>
        
        <thead>
           
            <tr>
                <td>#</td>
                <td>name</td>
                <td>detail</td>
            
                <td class="text-center">edit</td>
              <td class="text-center">delete</td>
          </tr>
           
        </thead> 
        
        <tbody>
            @foreach($coms as $com)
            <tr>
        <td>{{$loop->iteration}}</td>  
        
        <td> {{$com->name}}</td>
        
       <td> {{$com->detail}}</td>
            
          <td class="text-center"> 
          
              <a href="{{url(route('company.edit',$com->id))}}" class="btn btn-danger"> edit</a>
          
          </td>
              
                         <td class="text-center"> 
                   <div class="form-group">

                       <div class="form-group">


                           {!! Form::open([

                         'action'=>['CompanyController@destroy',$com->id],
                         'method'=>'delete'
                     ]) !!}

                           <button class="btn btn-danger">delete</button>

                           {!! Form::close() !!}


                       </div>

                   </div>
          
          </td>
            </tr>
           @endforeach 
        </tbody>
        
        
        @else 
        <div class="alert alert-primary">
           no data 
            
            
        </div>
        
    </table>   
    
    @endif
    
</div>





        </div>
        <!-- /.box-body -->
        
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
    @endsection

  
