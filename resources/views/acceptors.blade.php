@extends('layout.app')
@section('title', 'Acceptors')

@section('main-container')
@if (Session::has('msg'))
<div class="alert alert-success">
   {{Session::get('msg')}}
</div>
@endif

<form action="/acceptors-sent" method="post" role="form" >
   <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
   <input type="text" name="name"  id="name" placeholder="Your Name" required>
   <input type="text" name="blood_group"  id="blood_group" placeholder="Blood Group" required>
   <input type="number" name="age"  id="age" placeholder="Age" required>
   <input type="text" name="address"  id="address" placeholder="Address" required>
   <input type="number" name="contact_number"  id="contact_number" placeholder="Contact Number" required>
  <button type="submit" >Submit</button>

</form>


@endsection
