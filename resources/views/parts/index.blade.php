@extends('parts.base')
@section('title', 'Parts')

@section('content')
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col" class="text-right">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($parts as $part)
    <tr>
      <th scope="row">{{ $part['id'] }}</th>
      <td>{{ $part['name'] }}</td>
      <td class="text-right">
        <form action="{{ url('data/create/' . $part['id']) }}" method="GET">
          <button class="btn btn-danger">Download</button>
        </form>
      </td>
    </tr>
  @endforeach
  </tbody>
</table>
@endsection
