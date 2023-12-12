@extends('layouts.adminbase')

@section('contents')
@if(isset($msg))
<div class="alert alert-primary" role="alert">{{$msg}}</div>
@endif

@if(isset($items))
<div class="card">
    <h5 class="card-header">検索結果</h5>
    <div class="card-body">
            <h6 class="card-title">【検索条件】</h6>
            <ul>
                <li>部屋タイプ：{{$master_name}}</li>
                <li>チェックイン：{{$checkin}}</li>
                <li>チェックアウト：{{$checkout}}</li>
            </ul>
        
        <table class="table">
          <thead class="table-dark">
            <tr>
                <th scope="col">部屋番号</th><th scope="col">宿泊料金<small>（お1人様・1泊あたり）</small></th></tr>
          </thead>
          <tbody>
            @foreach($items as $item)
            <tr>
                <td>{{$item->room_num}}</td>
                <td>{{$item->room_price}}</td>
            </tr>
            @endforeach
          </tbody>
         </table>
    </div>
</div>
 @endif

<h3 style="margin-top: 50px;">宿泊予約</h3>
@if(count($errors)>0)
<div>
    <ul>
        @foreach($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
    </ul>
</div>
@endif

<div class="content_area">
    <form action="/reservation/add" method="post">
    @csrf
    
    <input class="form-control form-control-lg" type="number" placeholder="お客様ID" name="guest_id" value="{{old('guest_id')}}"><br>
    <input class="form-control form-control-lg" type="number" placeholder="ご利用人数" name="people" value="{{old('people')}}"><br>
    <p class="lead">ご希望の部屋番号を指定</p>
    
    <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="room_id">
        <option selected>ご希望の部屋番号をお選びください</option>
        @if(isset($items))
        @foreach($items as $item)
        <option value="{{$item->room_id}}">{{$item->room_num}}</option>
        @endforeach
        @else
        <option value="1">101</option>
        <option value="2">102</option>
        <option value="3">103</option>
        <option value="4">あの間</option>
        <option value="5">いの間</option>
        <option value="6">うの間</option>
        <option value="7">スイート</option>
        <option value="8">カカオ</option>
        <option value="9">みかん</option>
        @endif
      </select>
    <br>
    @if(isset($checkin))
    <p class="lead" style="margin-top: 30px;">チェックイン</p>
    <input class="form-control form-control-lg" type="date" placeholder="チェックイン" name="checkin" value="{{$checkin}}"><br>
    <p class="lead">チェックアウト</p>
    <input class="form-control form-control-lg" type="date" placeholder="チェックアウト" name="checkout" value="{{$checkout}}"><br>
    @else
    <p class="lead" style="margin-top: 30px;">チェックイン</p>
    <input class="form-control form-control-lg" type="date" placeholder="チェックイン" name="checkin" value="{{old('checkin')}}"><br>
    <p class="lead">チェックアウト</p>
    <input class="form-control form-control-lg" type="date" placeholder="チェックアウト" name="checkout" value="{{old('checkout')}}"><br>
    @endif
    <div class="btn-group"><input class="btn btn-dark" type="submit" value="予約"></div>
</form>
</div>

@endsection