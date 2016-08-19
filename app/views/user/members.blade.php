@extends('layouts.userDefault')
@section('content')
    <div class="container">
        <div class="row margin-vert-30">
            @include('includes.alert')

                <div class="table-responsive">
                    @if(count($members))
                    <table class="table table-bordered">
                        <thead>
                            <th class="text-center">Name</th>
                            <th class="text-center">Reg No</th>
                            <th class="text-center">Phone</th>
                            @if($members->first()->role_id >= 3)
                            	<th class="text-center">Designation</th>
                            @endif
                        </thead>
                        <tbody>
                            @foreach($members as $member)
                                <tr class="text-center">
                                    <td >{{ $member->name}}</td>
                                    <td >{{ $member->reg_no}}</td>
                                    <td >{{ $member->phone}}</td>
                                    @if($member->role_id >= 3)
                                    <td >{{ $member->role_name }}</td>
                                    @endif
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @else
                    No Member Registed
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