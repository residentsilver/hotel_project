@extends('layouts.adminbase')

@section('contents')

<form action="/guest/restore" method="post"> 
    @csrf
    <div class="alert alert-light" role="alert">
  <p>削除した利用者を本当に復元しますか？</p>
  <input type="submit" value="実行する">
    </div>
  </form>

@endsection

<style>
    /* テーブル */
    @media screen and (max-width: 991px) {
        .table-wrap {
            overflow-x: scroll;
        }
    }

    table {
        width: 80%;
        border-collapse: collapse;
        border-spacing: 0;
        white-space: nowrap;
        margin: auto;
    }

    table th {
        /*テーブルのth幅調整*/
        min-width: 140px;
    }

    table th,
    table td {
        padding: 10px 0;
        text-align: center;
        border: solid 1px #333;
    }


    /* table tr:nth-child(odd) {
            background-color: #eee;
        } */

    table th {
        background-color: #eee;
    }


    .addform {
        margin: auto auto 3vw;
        max-width: 80%;
    }

    form {
        margin: auto;
    }
</style>
