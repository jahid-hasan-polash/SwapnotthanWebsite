@extends('layouts.userDefault')
@section('content')
    <div class="container">
        <div class="row margin-vert-30">
            @include('includes.alert')

                <div class="table-responsive">
                    @if(count($doners))
                    <table class="table table-bordered">
                        <thead>
                            <th class="text-center">Id</th>
                            <th class="text-center">Name</th>
                            <th class="text-center">Address</th>
                            <th class="text-center">Gender</th>
                            <th class="text-center">Blood Group</th>
                            <th class="text-center">Phone</th>
                            <th class="text-center">Last date to donate</th>
                        </thead>
                        <tbody>
                            @foreach($doners as $doner)
                                <tr class="text-center">
                                    <td >{{ $doner->id }}</td>
                                    <td >{{ $doner->name}}</td>
                                    <td >{{ $doner->address}}</td>
                                    <td >{{ $doner->Gender}}</td>
                                    <td >{{ $doner->blood_group}}</td>
                                    <td >{{ $doner->phone}}</td>
                                    <td >{{ $doner->last_donation}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @else
                    No Data Found
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    @endif
                </div>
        </div>
    </div>

@stop
