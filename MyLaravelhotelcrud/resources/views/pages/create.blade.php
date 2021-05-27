@extends('layouts.main-layout')

@section('content')

    <div class="container">
        <div class="row text-center">
            <div class="col-12">
                <h1>New Employee:</h1>
            </div>
        </div>
    </div>
    <form method="POST" action="{{ route('store') }}">

        @csrf
        @method('POST')

        {{-- firstname --}}
        <div class="form-group row">
            <label for="first" class="col-md-4 col-form-label text-md-right">Firstname</label>
            <div class="col-md-6">
                <input id="firstname" type="text" class="form-control" name="firstname">
            </div>
        </div>
        {{-- lastname --}}
        <div class="form-group row">
            <label for="lastname" class="col-md-4 col-form-label text-md-right">Lastname</label>
            <div class="col-md-6">
                <input id="lastname" type="text" class="form-control" name="lastname">
            </div>
        </div>
        {{-- role --}}
        <div class="form-group row">
            <label for="role" class="col-md-4 col-form-label text-md-right">Role</label>
            <div class="col-md-6">
                <input id="role" type="text" class="form-control" name="role">
            </div>
        </div>
        {{-- ral --}}
        <div class="form-group row">
            <label for="ral" class="col-md-4 col-form-label text-md-right">Ral</label>
            <div class="col-md-6">
                <input id="ral" type="text" class="form-control" name="ral">
            </div>
        </div>
        {{-- BUTTON --}}
        <div class="form-group row">
            <div class="col-12 text-center">
                <button type="submit" class="btn btn-primary">
                    CREATE
                </button>
            </div>
        </div>
    </form>
@endsection
