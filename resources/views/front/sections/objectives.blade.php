<h3 class="bg-light text-decoration-underline">Career Objectives:</h3>
@foreach($objectives as $objective)
    <p >
        {{$objective->details}}
    </p>
@endforeach
