@extends('layouts.backend.main')

@section('title', 'MyBlog | Add new post')

@section('content')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Blog
        <small>Add new post</small>
      </h1>
      <a href="{{ route('backend.blog.index',app()->getLocale()) }}" class="btn btn-success"><i class="fa fa-bars"></i> Show all posts</a>
      <ol class="breadcrumb">
        <li>
          <a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> Dashboard</a>
        </li>
        <li><a href="{{ route('backend.blog.index',app()->getLocale()) }}">Blog</a></li>
        <li class="active">Add new</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
          <div class="col-xs-12">
            <div class="box">
              <div class="box-body ">
                {!! Form::model($post, [
                  'method' => 'POST',
                  'route' => ['backend.blog.store', $post->id],
                  'files' => TRUE,
                  'id' => 'post-form'
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
                <div class="form-group excerpt {{ $errors->has('excerpt') ? 'has-error' : '' }}">
                  {!! Form::label('excerpt') !!}
                  {!! Form::textarea('excerpt', null, ['class' => 'form-control', 'rows' => '5', 'style' => 'resize:none','maxlength' => 90]) !!}
                  @if($errors->has('excerpt'))
                    <span class="help-block">{{ $errors->first('excerpt') }}</span>
                  @endif
                </div>

                <div class="form-group {{ $errors->has('body') ? 'has-error' : '' }}">
                  {!! Form::label('body') !!}
                  {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
                  @if($errors->has('body'))
                    <span class="help-block">{{ $errors->first('body') }}</span>
                  @endif
                </div>

                <div class="form-group {{ $errors->has('published_at') ? 'has-error' : '' }}">
                  {!! Form::label('published_at', 'Publish date') !!}
                  <div class="form-group">
                    <div class='input-group date' id='datetimepicker1'>
                        {!! Form::text('published_at', null, ['class' => 'form-control', 'placeholder' => 'Y-m-d H:i:s']) !!}
                        <span class="input-group-addon">
                            <span class="glyphicon glyphicon-calendar"></span>
                        </span>
                    </div>
                  </div>
                  @if($errors->has('published_at'))
                    <span class="help-block">{{ $errors->first('published_at') }}</span>
                  @endif
                </div>

                <div class="form-group {{ $errors->has('category_slug') ? 'has-error' : '' }}">
                  {!! Form::label('category_slug', 'Category Slug') !!}
                  {!! Form::select('category_slug', App\Category::pluck('slug', 'slug'), null, ['class' => 'form-control', 'placeholder' => 'Choose category']) !!}
                  @if($errors->has('category_slug'))
                    <span class="help-block">{{ $errors->first('category_slug') }}</span>
                  @endif
                </div>
                <div class="form-group {{ $errors->has('category_id') ? 'has-error' : '' }}">
                  {!! Form::label('category_id', 'Category') !!}
                  {!! Form::select('category_id', App\Category::pluck('title', 'id'), null, ['class' => 'form-control', 'placeholder' => 'Choose category']) !!}
                  @if($errors->has('category_id'))
                    <span class="help-block">{{ $errors->first('category_id') }}</span>
                  @endif
                </div>

                <div class="form-group">
                  {!! Form::label('lang', 'Language') !!}
                  {!! Form::select('lang', array('en' => 'English', 'ar' => 'العربية', 'es' => 'Spanish'), 'en',['class' => 'form-control']); !!}
                  @if($errors->has('lang'))
                    <span class="help-block">{{ $errors->first('lang') }}</span>
                  @endif
                </div>

                <div class="form-group">
                  {!! Form::label('post_tags', 'Tags') !!}
                  {!! Form::text('post_tags', null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group {{ $errors->has('image') ? 'has-error' : '' }}">
                  {!! Form::label('image', 'Feature Image') !!}<br>
                  <div class="fileinput fileinput-new" data-provides="fileinput">
  <div class="fileinput-new img-thumbnail" style="width: 200px; height: 150px;">
    <img src="{{ ($post->image_thumb_url) ? $post->image_thumb_url : 'http://placehold.it/200x150&text=No+Image' }}"  alt="...">
  </div>
  <div class="fileinput-preview fileinput-exists img-thumbnail" style="max-width: 200px; max-height: 150px;"></div>
  <div>
    <span class="btn btn-outline-secondary btn-file"><span class="fileinput-new">Select image</span><span class="fileinput-exists">Change</span>{!! Form::file('image') !!}</span>
    <a href="#" class="btn btn-outline-secondary fileinput-exists" data-dismiss="fileinput">Remove</a>
  </div>
</div>

                  @if($errors->has('image', ['class' => 'form-control' ]))
                    <span class="help-block">{{ $errors->first('image') }}</span>
                  @endif
                </div>
                <hr>

                {!! Form::submit('Publish', ['class' => 'btn btn-primary']) !!}
                <a class="btn btn-default" id="draft-btn">Save Draft</a>
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

@include('backend.blog.script')
