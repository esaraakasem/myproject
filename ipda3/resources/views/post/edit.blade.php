@extends('layouts.app')
@inject('category','App\Catogery')
@section('content')

 <section class="content-header">
      <h1>
   posts
        <small>list of \posts</small>
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




            {!!Form::model($pos,[
            'action'=>['PostController@update', $pos->id],
            'method'=>'put',
            'files'=>true
            ]) !!}


            <div class='form-group' >
                <label> image</label>

                {!!Form::file('image',null,[
                'class'=>'form-control'
                ])!!}
                <label> date</label>
                {!!Form::text('date',null,[
              'class'=>'form-control'
              ])!!}

                <label> text</label>
                {!!Form::text('text',null,[
              'class'=>'form-control'
              ])!!}

                <label> catogery</label>
                {!!Form::select('catogery_id',$category->pluck('name','id')->toArray(),null,[
              'class'=>'form-control'
              ])!!}

                <label> title</label>
                {!!Form::text('title',null,[
              'class'=>'form-control'
              ])!!}


                <div class='form-group' >
                    <button class="btn btn-primary"type="submit"> submit</button>
                </div>


            {!!Form::close()!!}
    
    
    
</div>





        <!-- /.box-body -->
        
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
@endsection

  
