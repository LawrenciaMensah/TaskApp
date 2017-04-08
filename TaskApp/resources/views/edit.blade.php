@extends('layouts.parent')

@section('killer')

    <div class="col-md-offset-3">
        <div class="col-md-6">
            {!! Form::model($task,['route'=>['add_task.update',$task->id],'method'=>'patch','class'=>'form']) !!}
            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
            {!! Form::label('Name of Task') !!}

            {!! Form::text('name',null,['class'=>'form-control']) !!}
                @if ($errors->has('name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif
            </div>
            {!! Form::label('Status') !!}

            {!! Form::select('status',['completed'=>'Completed','uncompleted'=>'Un-completed'],$task->status,['class'=>'form-control']) !!}
            <br>
            {!! Form::submit('Update',['class'=>'btn btn-warning btn-block']) !!}
            {!! Form::close() !!}

        </div>

    </div>



    @endsection