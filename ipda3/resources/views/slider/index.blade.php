@extends('layouts.app')

@section('content')
 <section class="content-header">
      <h1>
      posts
        <small>list of posts</small>
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
          <h3 class="box-title">posts</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
                <a href="{{url(route('slider.create'))}}" class="btn btn_primary btn btn-danger" ><i class=" fa fa-edit"></i> new slider</a>
            @include('flash::message')
@if(count($posts))

<div class='table-responsive'>
    
    <table class='table table-bordered'>
        
        <thead>
           
            <tr>
                <td>#</td>
                <td>image</td>
                <td>title</td>
                <td>contain</td>

                <td class="text-center">edit</td>
              <td class="text-center">delete</td>
          </tr>
           
        </thead> 
        
        <tbody>
            @foreach($posts as $post)
            <tr>
        <td>{{$loop->iteration}}</td>  
        
        <td>  <img src="{{asset('/uploads/' . $post->image)}}" style="width:200px; height:100px"></td>
        
        <td> {{$post->title}} </td>
            
        <td> {{$post->contain}} </td>

            
          <td class="text-center"> 
          
              <a href="{{url(route('slider.edit',$post->id))}}" class="btn btn-danger"> edit</a>
          
          </td>
              
                        <td class="text-center">
                            <div class="form-group">


                                {!! Form::open([

                              'action'=>['SliderController@destroy',$post->id],
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
        <div class="alert alert-primary">
           no data 
            
            
        </div>
        
    </table>
</div>
    @endif
    





</div>
      </div>
    </section>


        <!-- /.box-body -->
        
        <!-- /.box-footer-->

    @endsection

  
