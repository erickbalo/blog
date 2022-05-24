<h1>Módulo de Tareas</h1>

<ul>
    @foreach($tasks as $task)
        <li>
            {{ $task->title }} <br/>
            {{ $task->description }}
        </li>
    @endforeach
</ul>