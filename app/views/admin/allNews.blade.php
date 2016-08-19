@extends('layouts.default')
    @section('content')

        @include('includes.alert')
         <div class="panel-body">
                    @if(count($newses))
                        <table class="display table table-bordered table-striped" id="example">
                            <thead>
                            <tr>
                                <th class="text-center">Title</th>
                                <th class="text-center">Description</th>
                                <th class="text-center">Action</th>

                            </tr>
                            </thead>
                            @foreach($newses as $news)
                            <tbody>
                                <tr class="text-center">
                                    <td >{{ $news->title}}</td>
                                    <td >{{ $news->description}}</td>
                                    <td >
                                        <a href="{{ URL::route('edit.news',$news->id) }}" class="btn btn-danger">Edit</a>
                                    </td>
                                    
                                </tr>
                            </tbody>
                            @endforeach
                        </table>
                    @else
                        No Data Found
                    @endif
                </div>
         
    @stop