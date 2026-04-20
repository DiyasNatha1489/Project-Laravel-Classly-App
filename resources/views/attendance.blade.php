<style>
    .attendance-nav {
        display: flex;
        padding: 0 100px;
        justify-content: space-between;
    }

    .attendance-nav ul { 
        list-style: none;
        padding: 0;
        width: 30%;
    }

    .attendance-nav li {
        margin: 5px;
        padding: 15px 75px 15px 15px;
        cursor: pointer;
        text-align: left;
        background-color: #efe28a;
        border-radius: 8px;
        box-shadow: inset 0.5px 0.5px 1px 1px  rgba(0,0,0,0.3);
    }

    .attendance-nav li:hover {
    }

    .attendance-nav li a {
        text-decoration: none;
        color: #000000;
    }

    .attendance-nav img {
        width: 250px;
        height: auto; 
    }
</style>

@extends('layouts.app')
@section('title', 'Classly Apps Attendance')
@section('content')

<nav class="attendance-nav">
    <ul>
        <li>
            <a href="/">Present</a>
        </li>
        <li>
            <a href="/">Permit</a>
        </li>
        <li>
            <a href="/">Sick</a>
        </li>
        <li>
            <a href="/">Absent</a>
        </li>
        <li>
            <a href="/">Overview</a>
        </li>
    </ul>
    <img src="{{ asset('images/barcode.png') }}" alt="">
</nav>

@endsection