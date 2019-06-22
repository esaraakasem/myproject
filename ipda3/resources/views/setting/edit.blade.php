@extends('layouts.app')
@inject('model','App\setting');
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




            {!!Form::model($model,[
            'action'=>['SettingController@update', $setting->id],
            'method'=>'put'
            ]) !!}


            <label> facebook</label>

            {!!Form::text('facebook',null,[
            'class'=>'form-control'
            ])!!}


            <label> twitter</label>

            {!!Form::text('twitter',null,[
            'class'=>'form-control'
            ])!!}    <label> instegram</label>

            {!!Form::text('instegram',null,[
            'class'=>'form-control'
            ])!!}    <label> youtube</label>

            {!!Form::text('youtube',null,[

            'class'=>'form-control'
            ])!!}
            <label> google</label>


            {!!Form::text('google',null,[
            'class'=>'form-control'
            ])!!}
            <div class='form-group' >
                <button class="btn btn-primary"type="submit"> submit</button>
            </div>

            {!! Form::close() !!}






        </div>



 


        <!-- /.box-body -->
        
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
    @endsection

  
