@extends('layouts.default')
    @section('content')

        @include('includes.alert')
         <div class="panel-body">
                    @if(count($mission))
                        <table class="display table table-bordered table-striped" id="example">
                            <thead>
                            <tr>
                                <th class="text-center">Preview</th>
                                <th class="text-center">Description</th>
                                <th class="text-center">Action</th>

                            </tr>
                            </thead>
                            <tbody>
                                <tr class="text-center">
                                    <td >{{ $mission->preview}}</td>
                                    <td >{{ $mission->description}}</td>
                                    <td >
                                        <a href="{{ URL::route('edit.ourMission') }}" class="btn btn-danger">Edit</a>
                                    </td>
                                    
                                </tr>
                            </tbody>
                        </table>
                    @else
                        No Data Found
                    @endif
                </div>
         
    @stop