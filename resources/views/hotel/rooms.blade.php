@extends('layouts.adminbase')
@section('contents')
{{-- DBの内容を表示--}}
  <table>
    <tr>
        <th>ID</th>
        <th>部屋タイプ</th>
        <th>部屋番号</th>
    </tr>
    @foreach ($items as $item)
        <tr>
          <td>{{$item ->room_id}}</td>
          <td>{{$item ->masters->room_name}}</td>
          <td>{{$item ->room_num}}</td>
        </tr>
    @endforeach
</table>
<table>
@endsection
