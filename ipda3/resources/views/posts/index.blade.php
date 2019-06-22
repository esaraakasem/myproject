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
            <a href="{{url(route('posts.create'))}}}" class="btn btn_primary btn btn-danger" ><i class=" fa fa-edit"></i> new post</a>
            @include('flash::message')
@if(count($posts))

<div class='table-responsive'>
    
    <table class='table table-bordered'>
        
        <thead>
           
            <tr>
                <td>#</td>
                <td>image</td>
                <td>date</td>
                <td>text</td>
                <td>catogery_id</td>
                <td>title</td>
                <td class="text-center">edit</td>
              <td class="text-center">delete</td>
          </tr>
           
        </thead> 
        
        <tbody>
            @foreach($posts as $post)
            <tr>
        <td>{{$loop->iteration}}</td>  
        
        <td> {{$post->image}}</td>
        
        <td> {{$post->date}} </td>
            
        <td> {{$post->text}} </td>
            
         <td> {{$post->catogery_id}} </td>
         
         <td> {{$post->title}} </td>
            
          <td class="text-center"> 
          
              <a href="route('post.edit',$mos->$id)" class="btn btn-danger"> edit</a>
          
          </td>
              
                        <td class="text-center"> 
                   <div class="form-group">
                       
                       

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







        <!-- /.box-body -->
        </div>
      </div>
    </section>
        <!-- /.box-footer-->


      <!-- /.box -->


    @endsection

  
