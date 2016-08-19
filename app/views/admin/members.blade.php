@extends('layouts.default')
    @section('content')

        @include('includes.alert')
         

         <div class="panel-body">
                    @if(count($members))
                        <table class="display table table-bordered table-striped" id="example">
                            <thead>
                            <tr>
                                <th class="text-center">ID</th>
                                <th class="text-center">Name</th>
                                <th class="text-center">Reg No</th>
                                <th class="text-center">Phone</th>
                                <th class="text-center">Role</th>
                                <th class="text-center">Action</th>


                            </tr>
                            </thead>
                            <tbody>
                            @foreach($members as $member)
                                <tr class="text-center">
                                    <td >{{ $member->id }}</td>
                                    <td >{{ $member->name}}</td>
                                    <td >{{ $member->reg_no}}</td>
                                    <td >{{ $member->phone}}</td>
                                    <td >{{ $member->role_name}}</td>
                                    <td >
                                        <a href="{{URL::route('member.edit', $member->id)}}" class="btn btn-danger">Edit</a>
                                        <a href="{{URL::route('member.showMore', $member->id)}}" class="btn btn-primary">See More</a>
                                    
                                    </td>
                                    
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    @else
                        No Data Found
                    @endif
                </div>
         
    @stop