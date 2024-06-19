<h3 class="bg-light">Employment History</h3>
    @foreach($employments as $employment)
        <h5><span class="fs-4">{{$employment->position}}</span>
            ({{$employment->starting}} to {{$employment->ending}} )
        </h5>
        <h5><u>{{$employment->organization}}</u></h5>
        <h5>Department : {{$employment->department}}</h5>
        <h5>Duties/Responsibilities : {{$employment->responsibilities}}</h5>
    @endforeach
