@extends('layouts.adminbase')

@section('contents')
    <div class="edit">
        <table>
            @csrf
            {{-- @foreach ($guests as $guest) --}}
            {{-- コントローラーのfind()で取得したデータは単数形。なので変数名も単数形guest。１つしかデータが入っていない変数をforeachで回すとバグるのでダメ --}}
            <form action="/guest/update" method="post" class="form-group editform">
                @csrf
                <label for="name">お名前</label>
                <input type="text" name="name" value="{{ $guest->name }}" class="form-control" required autofocus>
                <br>
                <label for="address">ご住所</label>
                <input type="text" name="address" value="{{ $guest->address }}" class="form-control" required>
                <br>
                <label for="tel">電話番号</label>
                <input type="tel" name="tel" value="{{ $guest->tel }}" class="form-control" required>
                <br>
                <input type="hidden" name="id" value="{{ $guest->guest_id }}">
                <input type="submit" value="更新" class="form-control-sm">
            </form>
            {{-- @endforeach --}}
        </table>
    </div>
@endsection

<style>
    .edit {
        margin: 0 auto;
        width: 80%;
    }
</style>
