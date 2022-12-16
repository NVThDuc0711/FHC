@extends('studying.client')

@section('title')
    {{$title}}
@endsection


@section('content')
<x-test-compo type="error" :message="$message"/>
@include('studying.form')
<hr>

<a href="{{ Route('studying-product') }}">See More Product</a>
<hr>
<table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Comment</th>
        <th scope="col">Address</th>
      </tr>
    </thead>
    <tbody>
        @if(!empty($admin))
            @foreach ( $admin as $key => $value )
            <tr>
                <td>{{ $key +1 }}</td>
                <td>{{ $value->name }}</td>
                <td>{{ $value->email }}</td>
                <td>{{ $value->comment }}</td>
                <td>{{ $value->address }}</td>
              </tr>
            @endforeach


        @endif


    </tbody>
  </table>
<a href="{{ Route('studying-about') }}">About Us</a>
@endsection

