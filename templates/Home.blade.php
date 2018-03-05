
@extends('Layouts.Main')

@section('Content')
    <p> {{lang('randomStr')}} </p>
    <p> Custom string: {{$myCustomVar}}</p>
    <a href="{{url('blade/add')}}"> {{lang('addMore')}} </a>
    <table>
        <tr>
            <th> {{lang('name')}} </th>
            <th> {{lang('email')}} </th>
            <th> {{lang('age')}} </th>
            <th> {{lang('img')}} </th>
        </tr>
        @foreach($clients as $client)
        <tr>
            <td>{{$client['fname']}} {{$client['lname']}}</td>
            <td>{{$client['email']}}</td>
            <td>{{$client['age']}}</td>
            @if(isset($client['img']))
            <td><img src="{{$client['img']}}" style="width: 30px; height: 30px"></td>
            @endif
        </tr>
        @endforeach
    </table>
@endsection
