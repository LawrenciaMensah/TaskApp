@extends('layouts.parent')

@section('killer')

    <div class="col-md-offset-3">
        <div class="col-md-9">
           <table class="table table-responsive table-striped">
               <thead>
                <th>Name</th>
                <th>Status</th>
                <th>Time Elapsed</th>
                <th>Edit</th>
                <th>Delete</th>
               </thead>
               <tbody>
            @if(!empty($tasks))
                @foreach($tasks as $task)
                <tr>
                    <td>{{$task->name}}</td>
                    <td>{{$task->status}}</td>
                    <td>{{$task->created_at->diffForHumans()}}</td>
                    <td><a href="{{route('add_task.edit',$task->id)}}" class="btn btn-primary fa fa-edit"></a></td>
                       {!! Form::open(array("route"=>["add_task.destroy",$task->id],'method'=>'delete')) !!}
                    <td><button  type="submit" class="btn btn-danger" ><span class="fa fa-trash-o fa-2x"></span></button></td>

                    {!! Form::close() !!}


                </tr>
                @endforeach
             @endif
               </tbody>
           </table>

        </div>

    </div>



    @endsection