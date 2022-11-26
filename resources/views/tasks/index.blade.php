<ul>
    @foreach ($tasks as $task)
        <li>{{ $task->name }} </br>
            <b>User Name:</b> {{ $task->user->name }} </br>
            <b>User Email:</b> {{ $task->user->email }} </br>
            <b>Comment Details: </b></br>
            @php $i=1; @endphp
            @foreach ($task->comments as $comment)
                {{ $i++ }}.) <b>Sender Name: </b>{{ $comment->name }}</br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Comment: </b>{{ $comment->comment }}</br>
            @endforeach
        </li>
        </br>
    @endforeach
</ul>
