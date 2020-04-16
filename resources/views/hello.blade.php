<h1>Name, {{ $name }}.</h1>
<h1>Age, {{ $age }}.</h1>
<h1>Books.</h1>

@foreach($books as $book)
{{ $book }}
@endforeach
