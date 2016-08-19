@extends('layouts.default')
@section('content')
    <div class="row">
        <div class="col-md-12">
            @include('includes.alert')
            <section class="panel">
                <header class="panel-heading">
                    {{ $title }}
                </header>
                <div class="panel-body">
                    {{ Form::model($news , array('route' => ['update.news' , $news->id], 'method'=>'put','class' => 'form-horizontal')) }}


                    <div class="form-group">
                        {{ Form::label('title', 'Title*', array('class' => 'col-md-2 control-label')) }}
                        <div class="col-md-4">
                            {{ Form::textarea('title', $news->title , array('class' => 'form-control')) }}
                        </div>
                    </div>

                    <div class="form-group">
                        {{ Form::label('description', 'Detail*', array('class' => 'col-md-2 control-label')) }}
                        <div class="col-md-4">
                            {{ Form::textarea('description', $news->description , array('class' => 'form-control')) }}
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-lg-offset-2 col-lg-10">
                            {{ Form::submit('Update', array('class' => 'btn btn-primary')) }}
                        </div>
                    </div>
                    {{ Form::close() }}
                </div>
            </section>
        </div>
    </div>
@stop
