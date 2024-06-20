<h3 class="bg-light">Languages:</h3>

@foreach($languages as $language)
    <h5>{{$language->name}} : {{$language->skill}}</h5>
@endforeach