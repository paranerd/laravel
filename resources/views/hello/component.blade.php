@foreach ($parts as $part)
@component('hello.row')
    @slot('title')
        {{ $part['name'] }}
    @endslot

    This is a component for {{ $part['name'] }}
    <!--<form action="{{ url('data/create/' . $part['id']) }}" method="GET">-->
    <form action="{{ route('parts.create', ['id' => $part['id']])}}" method="GET">
      <button class="btn btn-danger">Download</button>
    </form>
@endcomponent
@endforeach
