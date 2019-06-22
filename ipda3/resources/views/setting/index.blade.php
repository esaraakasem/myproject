@extends('layouts.app')

@section('content')
 <section class="content-header">
      <h1>
       setting
        <small>list of setting</small>
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
          <h3 class="box-title">setting</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
            @include('flash::message')
@if(count($catogery))

<div class='table-responsive'>
    
    <table class='table table-bordered'>
        
        <thead>
           
            <tr>
                <td>#</td>
                <td>facebook</td>
                <td>twitter</td>
                <td>instegram</td>
                <td>youtube</td>
                <td>google</td>
              <td class="text-center">edit</td>
          </tr>
           
        </thead> 
        
        <tbody>
            @foreach($catogery as $set)
            <tr>
        <td>{{$loop->iteration}}</td>  
        
        <td> {{$set->facebook}}</td>
        
        <td> {{$set->twitter}} </td>
            
        <td> {{$set->instegram}} </td>
            
         <td> {{$set->youtube}} </td>
            
          <td> {{$set->google}} </td>
              
            
               <td class="text-center"> 
          
              <a href="{{url(route('setting.edit',$set->id))}}" class="btn btn-danger"> edit</a>
          
          </td>
            </tr>
           @endforeach 
        </tbody>
        
        @else
        
        <div class="alert alert-danger">
            
            nooo data
        </div>
        
        @endif
        
    </table>   
    
    
    
</div>






        </div>
        <!-- /.box-body -->
        
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>

  @endsection
