@extends('layout')

@section('content')
<h4><a class="btn btn-success" href="{{route('users.create')}}">Add User</a><h4>
<div>
    @if(Session::get('success', false))
        @php $data = Session::get('success') @endphp
        @if (is_array($data))
            @foreach ($data as $msg)
                <div class="alert alert-success" role="alert">
                    <i class="fa fa-check"></i>
                    {{ $msg }}
                </div>
            @endforeach
        @else
            <div class="alert alert-success" role="alert">
                <i class="fa fa-check"></i>
                {{ $data }}
            </div>
        @endif
    @endif
</div>
<ul>
    @foreach ($users as $user)
        <li>
            <b>{{ $user->name }}</b> ({{ $user->email }}) </br>
            <img src="{{ $user->profile }}" height="100" width="100" />
            @if ($user->tasks->count() > 0)
                @php $i=1 @endphp
                <b>Task Name:</b></br>
                    @foreach ($user->tasks as $task) 
                    {{ $i++ }}.)  {{ $task->name }} </br>
                    @endforeach
            @endempty  
            @if ($user->comments->count() > 0)
                @php $j=1 @endphp
                <b>Comment:</b></br>
                    @foreach ($user->comments as $comment) 
                        {{ $j++ }}.)  {{ $comment->comment }} </br>
                    @endforeach
            @endempty  
            <div> 
                <a class="btn btn-info" href="{{ route('users.edit', [$user->id]) }}">Edit</a> 
                &nbsp; 
                <form action="{{ route('users.delete' , [$user->id]) }}">
                    @csrf
                    @method('delete')
                    <input type="submit" value="Delete" class="btn btn-danger btn-block" onclick="return confirm('Are you sure to delete?')">
                    <!-- <a class="btn btn-danger" href="{{ route('users.destroy' , [$user->id]) }}">Delete</a> -->
                </form>
            </div>
        </li>   
        </br>
    @endforeach
</ul>
@endsection

