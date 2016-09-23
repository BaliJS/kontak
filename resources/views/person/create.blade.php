@extends('layouts.master')

@section('content')

    <br>

    <form action="{{ route('people.store') }}" method="POST" class="form">
        {{ csrf_field() }}
        <fieldset class="form-group">
            <label for="name">NAME:</label>
            <input id="name" name="name" type="text" placeholder="Name" class="form-control" required>
        </fieldset>
        <fieldset class="form-group">
            <label for="phone">PHONE:</label>
            <input id="phone" name="phone" type="text" placeholder="Phone" class="form-control" required>
        </fieldset>
        <fieldset class="form-group">
            <label for="address">ADDRESS:</label>
            <input id="address" name="address" type="text" placeholder="Address" class="form-control" required>
        </fieldset>
        <div class="form-actions">
            <button type="submit" class="btn btn-primary btn-block">Submit</button>
        </div>
    </form>

@endsection
