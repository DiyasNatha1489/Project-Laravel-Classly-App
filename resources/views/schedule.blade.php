<style>
    .schedule-edit img {
        width: 35px;
        height: 35px;
        margin: 10px;
    }

    table {
        background-color: #6589ae;
        width: 100%;
        height: 50vh;
        border: white 10px;
        text-align: center;
    }

    table tr {
        background-color: #6589ae;
        color: #efe28a;
    }

    table tr td {
        background-color: white;
        color: black;
    }
</style>

@extends('layouts.app')
@section('title', 'Classly Apps Schedule')
@section('content')

<div class="schedule-section">
    <div class="schedule-edit">
        <img src="{{ asset('images/dashboard.png') }}" alt="">
    </div>
    <table>
        <tr>
            <th>Day</th>
            <th>1</th>
            <th>2</th>
            <th>3</th>
            <th>4</th>
            <th>5</th>
            <th>6</th>
            <th>7</th>
            <th>8</th>
            <th>9</th>
            <th>10</th>
        </tr>
        <tr>
            <td>Mon.</td>
            <td colspan="3">BI</td>
            <td>BK</td>
            <td colspan="6">KK</td>
        </tr>
        <tr>
            <td>Tue.</td>
            <td colspan="3">MTK</td>
            <td colspan="3">PAI</td>
            <td colspan="2">SEJARAH</td>
            <td colspan="2">PP</td>
        </tr>
        <tr>
            <td>Wed.</td>
            <td colspan="2">B INGGRIS</td>
            <td colspan="4">MP</td>
            <td colspan="4">KK</td>
        </tr>
        <tr>
            <td>Thu.</td>
            <td colspan="2">B JAWA</td>
            <td colspan="2">PJOK</td>
            <td colspan="2">B INGGRIS</td>
            <td colspan="4">KK</td>
        </tr>
        <tr>
            <td>Sun.</td>
            <td colspan="4">KK</td>
            <td colspan="5">PKK</td>
            <td></td>
        </tr>
    </table>
</div>

@endsection