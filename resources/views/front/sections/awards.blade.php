<h3 class="bg-light text-decoration-underline">Awards/Achievements:</h3>
<table class="table table-bordered text-center">
    <thead class="fw-bold">
    <tr>
        <td>Sl</td>
        <td>Occasion</td>
        <td>Category</td>
        <td>Position</td>
        <td>Date</td>
    </tr>
    </thead>
    <tbody>
    @foreach($awards as $award)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$award->occasion}}</td>
            <td>{{$award->category}}</td>
            <td>{{$award->position}}</td>
            <td>{{$award->date}}</td>
        </tr>
    @endforeach
    </tbody>
</table>