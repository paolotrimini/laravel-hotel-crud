    @extends('layouts.main-layout')

    @section('content')
        <div class="container text-center">
            <div class="row">
                <div class="col-12">
                    <h2>Employees:</h2>
                    <ul>
                        @foreach($employees as $employee)
                            <li>
                                <a href="{{ route('show', $employee -> id) }}">
                                        {{ $employee -> firstname }}
                                        {{ $employee -> lastname }}
                                    <a href="{{ route('edit', $employee -> id) }}">
                                        &#9998;
                                    </a>
                                    <a href="{{ route('destroy', $employee -> id) }}">
                                        &#10060;
                                    </a>
                                </a>
                            </li>
                        @endforeach
                    </ul>

                </div>
            </div>
        </div>
    @endsection
