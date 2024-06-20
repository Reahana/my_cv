<h3 class="bg-light text-decoration-underline">Training Summary:</h3>
<table class="table table-bordered text-center">
    <thead class="fw-bold">
    <tr>
        <td>Sl No</td>
        <td>Topic</td>
        <td>Institute</td>
        <td>Duration</td>
        <td>Year</td>
    </tr>
    </thead>
    <tbody>
    @foreach($trainings as $training)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$training->topic}}</td>
            <td>{{$training->institute}}</td>
            <td>{{$training->duration}}</td>
            <td>{{$training->year}}</td>
        </tr>
    @endforeach
    </tbody>
</table>
