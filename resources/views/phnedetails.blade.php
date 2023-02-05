@foreach ($phone as $item)
    <p> {{ $item['Type']}} - {{ $item['Price']}} - {{ $item['Color']}}</p>   
@endforeach