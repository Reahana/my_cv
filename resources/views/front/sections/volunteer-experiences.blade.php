<h3 class="bg-light text-decoration-underline">Volunteer Experiences:</h3>
<table class="table table-bordered text-center">
    <thead class="fw-bold">
    <tr>
        <td>Sl</td>
        <td>Organization</td>
        <td>Position</td>
        <td>Starts-Ends</td>
        <td>Duration</td>
    </tr>
    </thead>
    <tbody>
    @foreach($volunteers as $volunteer)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$volunteer->organization}}</td>
            <td>{{$volunteer->position}}</td>
            <td>{{$volunteer->starts}} - {{$volunteer->ends}}</td>
            <td>{{$volunteer->duration}}</td>
        </tr>
    @endforeach
    </tbody>
</table>