<ul>
    @foreach ($comments as $comment)
        <li>
            {{ $comment->name }} (avg team size {{ $comment->comment }}) </br>
            Task name: {{ $comment->task->name }}</br>
            User Full Name: {{ $comment->task->user->full_name }}</br> <!-- full_name field append column & function in User model file laravel -->
            User Email: {{ $comment->task->user->email }}</br>

        </li>
        </br>
    @endforeach
</ul>
