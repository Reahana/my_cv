<h3 class="bg-light text-decoration-underline">Academic Qualification:</h3>
<table class="table table-bordered text-center">
    <thead class="fw-bold">
    <tr>
        <td>Exam Title</td>
        <td>Concentration/Major</td>
        <td>Institute</td>
        <td>Result</td>
        <td>Pass Year</td>
    </tr>
    </thead>
    <tbody>
        @foreach($academics as $academic)
            <tr>
                <td>{{$academic->exam}}</td>
                <td>{{$academic->major}}</td>
                <td>{{$academic->institute}}</td>
                <td>{{$academic->result}}</td>
                <td>{{$academic->year}}</td>
            </tr>
        @endforeach
    </tbody>
</table>
