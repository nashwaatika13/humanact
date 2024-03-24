@extends('layouts.main')

@section('container')
<div class="title-top mb-5">
    <h2 class="fw-bold">What tasks can we help you?</h2>
</div>
<form method="post" action="{{route('contacts.store')}}">
    {{csrf_field()}}
    <div class="form-floating mb-3">
        <input type="text" class="form-control" id="inputname" placeholder="Nama" name="nama">
        <label for="inputname">Full Name</label>
    </div>
    <div class="form-floating mb-3">
        <input type="email" class="form-control" id="inputemail" placeholder="Email" name="email">
        <label for="inputemail" class="form-label">Email</label>
    </div>
    <div class="form-floating mb-3">
        <textarea class="form-control" placeholder="Leave a message here" id="floatingTextarea2" style="height: 100px" name="pesan"></textarea>
        <label for="floatingTextarea2">Have questions or need assistance with your tasks? Describe your task or questions here!</label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
<form>

@endsection