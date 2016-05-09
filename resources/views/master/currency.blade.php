@extends('app')

@section('content')
<h4>Currency</h4>
<table>
    <thead>
        <tr>

          <th>Name</th>
          <th>Code</th>
        </tr>
      </thead>
      <tbody>
      @endforeach($data as $key)
        <tr>
          <td>{{$key->name}}</td>
          <td>{{$key->code}}</td>
        </tr>
    </tbody>
  </table>
  @endsection
