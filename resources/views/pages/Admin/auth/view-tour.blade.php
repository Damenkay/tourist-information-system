@extends('layouts.admin')
@section('content')
        <div class="table-container">
               <div class="table-wrapper">
                    <h1 style="text-align: center">{{$tour->destination_name}}</h1>
                    <table>
                      <tr>
                        <th>Destination Name</th>
                        <th>Location</th>
                        <th>Address</th>
                        <th>Created At</th>
                        <th>Updated At</th>
                        </tr>
                    
                            <td>{{$tour->destination_name}}</td> 
                            <td>{{$tour->location}}</td> 
                            <td>{{$tour->address}}</td>
                            <td>{{$tour->created_at}}</td>
                            <td>{{$tour->updated_at}}</td>
                        </tr>
                     
                    </table>
            <a href="/dashboard"id="backbtn">Back</a>
        </div>
    </div>
@endsection
