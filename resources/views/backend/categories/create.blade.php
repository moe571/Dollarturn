@extends('layouts.backend.main')

@section('title', 'MyBlog | Add new category')

@section('content')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Categories
        <small>Add new category</small>
      </h1>
      <br>

      <a href="{{ route('backend.categories.index',app()->getLocale()) }}" class="btn btn-success"><i class="fa fa-folder"></i> Categories</a>
      <ol class="breadcrumb">
        <li>
          <a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> Dashboard</a>
        </li>
        <li><a href="{{ route('backend.categories.index') }}">Categories</a></li>
        <li class="active">Add new</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
          <div class="col-xs-12">
            <div class="box">
              <div class="box-body ">
                {!! Form::model($category, [
                  'method' => 'POST',
                  'route' => 'backend.categories.store',
                  'files' => TRUE,
                  'id' => 'category-form'
                ]) !!}
                <div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
                  {!! Form::label('title') !!}
                  {!! Form::text('title', null, ['class' => 'form-control']) !!}
                  @if($errors->has('title'))
                    <span class="help-block">{{ $errors->first('title') }}</span>
                  @endif
                </div>

                <div class="form-group {{ $errors->has('slug') ? 'has-error' : '' }}">
                  {!! Form::label('slug') !!}
                  {!! Form::text('slug', null, ['class' => 'form-control']) !!}
                  @if($errors->has('slug'))
                    <span class="help-block">{{ $errors->first('slug') }}</span>
                  @endif
                </div>


                <div class="form-group {{ $errors->has('type') ? 'has-error' : '' }}">
                  {!! Form::label('type') !!}
                  {!! Form::text('type', null, ['class' => 'form-control']) !!}
                  @if($errors->has('type'))
                    <span class="help-block">{{ $errors->first('type') }}</span>
                  @endif
                </div>

                <div class="form-group">
                  {!! Form::label('lang', 'Language') !!}
                  {!! Form::select('lang', array('en' => 'English', 'ar' => 'العربية', 'es' => 'Spanish'), 'en',['class' => 'form-control']); !!}
                  @if($errors->has('lang'))
                    <span class="help-block">{{ $errors->first('lang') }}</span>
                  @endif
                </div>
                <div class="form-group {{ $errors->has('en_slug') ? 'has-error' : '' }}">
                  {!! Form::label('English slug') !!}
                  {!! Form::text('en_slug', null, ['class' => 'form-control']) !!}
                  @if($errors->has('en_slug'))
                    <span class="help-block">{{ $errors->first('en_slug') }}</span>
                  @endif
                </div>
                <div class="form-group {{ $errors->has('es_slug') ? 'has-error' : '' }}">
                  {!! Form::label('Spanish slug') !!}
                  {!! Form::text('es_slug', null, ['class' => 'form-control']) !!}
                  @if($errors->has('es_slug'))
                    <span class="help-block">{{ $errors->first('es_slug') }}</span>
                  @endif
                </div>
                <div class="form-group {{ $errors->has('ar_slug') ? 'has-error' : '' }}">
                  {!! Form::label('Arabic slug') !!}
                  {!! Form::text('ar_slug', null, ['class' => 'form-control']) !!}
                  @if($errors->has('ar_slug'))
                    <span class="help-block">{{ $errors->first('ar_slug') }}</span>
                  @endif
                </div>
                <div class="form-group excerpt {{ $errors->has('meta_description') ? 'has-error' : '' }}">
                  {!! Form::label('Meta Description') !!}
                  {!! Form::textarea('meta_description', null, ['class' => 'form-control', 'rows' => '5', 'style' => 'resize:none','maxlength' => 160]) !!}
                  @if($errors->has('meta_description'))
                    <span class="help-block">{{ $errors->first('meta_description') }}</span>
                  @endif
                </div>

                <hr>

                <button type="submit" class="btn btn-primary">{{ $category->exists ? 'Update' : 'Save' }}</button>
                <a href="{{ route('backend.categories.index') }}" class="btn btn-default">Cancel</a>
                {!! Form::close() !!}
              </div>
              <!-- /.box-body -->

            </div>
            <!-- /.box -->
          </div>
        </div>
      <!-- ./row -->
    </section>
    <!-- /.content -->
  </div>

@endsection

@include('backend.categories.script')
