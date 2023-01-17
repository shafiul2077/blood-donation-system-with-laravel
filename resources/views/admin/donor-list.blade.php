@extends('layout.app')
@section('title', 'Donors List')

@section('main-container')



@foreach ($donorDisplay as $data)


    <h3 scope="col" class="text-center">Name</h3>
<div class="text-center">
<p> {{$data->acceptor->name}}</p>
@if ($data->acceptor->blood_group == $data->blood_group)
    <p>sand</p>
@endif
<p>{{$data->name}}</p>

</div>

@endforeach

@endsection
