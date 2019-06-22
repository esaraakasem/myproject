@extends('layouts.app')

@section('content')
 <section class="content-header">
      <h1>
      videos
        <small>list of videos</small>
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
          <h3 class="box-title">videos</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
               
             <a href="{{url(route('video.create'))}}" class="btn btn_primary btn btn-danger"> <i class=" fa fa-edit"></i> new video</a>
            @include('flash::message')
            
@if(count($videos ))

<div class='table-responsive'>
    
    <table class='table table-bordered'>
        
        <thead>
           
            <tr>
                <td>#</td>
                <td>video</td>
                <td>title</td>
                <td>image</td>
                <td>description</td>
                <td class="text-center">edit</td>
              <td class="text-center">delete</td>
          </tr>
           
        </thead> 
        
        <tbody>
            @foreach($videos as $video)
            <tr>
        <td>{{$loop->iteration}}</td>  
        
        <td> {!! $video->video !!}</td>
        
        <td> {{$video->title}} </td>

                <td>  <img src="{{asset('/uploads/' . $video->image)}}" style="width:200px; height:100px"></td>
            
         <td> {{$video->description}} </td>
            
          <td class="text-center"> 
          
              <a href="{{url(route('video.edit',$video->id))}}" class="btn btn-danger"> edit</a>
          
          </td>
              
                         <td class="text-center"> 
                   <div class="form-group">

                       <div class="form-group">


                           {!! Form::open([

                         'action'=>['VideoController@destroy',$video->id],
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

  
