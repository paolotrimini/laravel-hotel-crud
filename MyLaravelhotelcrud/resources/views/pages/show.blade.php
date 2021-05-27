    @extends('layouts.main-layout')

    @section('content')
        <div class="container text-center">
            <div class="row">
                <div class="col-12">
                    <h1>Employees:</h1>
                    <h2>{{ $employee -> firstname }} {{ $employee -> lastname }}</h2>
                    <p>{{ $employee -> role }}</p>
                    <p>{{ $employee -> ral }}</p>
                </div>
            </div>
        </div>
    @endsection
