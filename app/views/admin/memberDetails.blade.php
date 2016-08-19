@extends('layouts.default')
@section('content')
    <div class="row">
        <div class="col-md-12">
            @include('includes.alert')
            <section class="panel">
                <div class="panel-body">
                    <div class="form-group">
                    <h4 class="text-center"><i><b>Member Info :</b></i></h4>
                    <h4 class="text-center">Name: {{ $member->name }}</h4>
                    <h4 class="text-center">Father's Name:  {{ $member_more->father }}</h4>
                    <h4 class="text-center">Mother's Name:  {{ $member_more->mother }}</h4>
                    <h4 class="text-center">Address: {{ $member_more->address }}</h4>
                    <h4 class="text-center">Contact No: {{ $member->phone }}</h4>
                    <h4 class="text-center">Email Address: {{ $member_more->email }}</h4>
                    <h4 class="text-center">Blood Group: {{ $member_more->bl_group }}</h4>
                    <h4 class="text-center">Department: {{ $member->dept }}</h4>
                    <h4 class="text-center">Registration: {{ $member->reg_no }}</h4>
                    <h4 class="text-center">Designation: {{ $member->role_name }}</h4>
                    </div>
                </div>
            </section>
        </div>
    </div>
@stop