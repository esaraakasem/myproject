@extends('layouts.app')

@section('content')
 <section class="content-header">
      <h1>
      question
        <small>list of question</small>
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
          <h3 class="box-title">question</h3>

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
@if(count($qi))

<div class='table-responsive'>
    
    <table class='table table-bordered'>
        
        <thead>
           
            <tr>
                <td>#</td>
                <td>email</td>
                <td>response</td>
                <td>question</td>
                <td class="text-center">edit</td>
               
              <td class="text-center">delete</td>
          </tr>
           
        </thead> 
        
        <tbody>
            @foreach($qi as $que)
            <tr>
        <td>{{$loop->iteration}}</td>  
        
        <td> {{$que->email}}</td>
        
        <td> {{$que->response}} </td>
            
        <td> {{$que->question}} </td>
                <td class="text-center">

                    <a href="{{url(route('question.edit',$que->id))}}" class="btn btn-danger"> edit</a>

                </td>
        
                    <td class="text-center"> 
                   <div class="form-group">

                       {!! Form::open([

        'action'=>['QuestionController@destroy',$que->id],
        'method'=>'delete'
    ]) !!}

                       <button class="btn btn-danger">delete</button>

                       {!! Form::close() !!}

                   </div>
          
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




        <!-- /.box-body -->
        
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
    @endsection

  
