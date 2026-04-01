<style>
    body {
        min-height: 200px;
    }

    .summary-quick {
        display: flex;
        gap: 20px;
        padding: 20px;
        margin: 0;
    }

    .quick-stats {
        background-color: #6589ae;
        color: #ffffff;
        border-radius: 8px;
        padding: 20px;
        flex: 1;
        /* display: flex; */
        align-items: center; 
    }

    .flex {
        display: flex;
        align-items: center;
        gap: 20px;
    }
</style>

@extends('layouts.app')
@section('title', 'Classly Apps Dashboard')
@section('content')
<div class="summary-quick">
    <div class="quick-stats">
        <h3>Absensi</h3>
        <p>Hari ini</p>
        <div class="flex">
            <div>
                <h2>30</h2>
                <p>Hadir</p>
            </div>
            <div>
                <h2>6</h2>
                <p>Tidak Hadir</p>
            </div>
        </div>
    </div>
    <div class="quick-stats">
        <h3>Event</h3>
        <p>Hari ini</p>
        <h2>Tidak Ada Event</h2>
    </div>
    <div class="quick-stats">
        <h3>Jadwal Pelajaran</h3>
        <p>Hari ini</p>
        <div class="flex">
            <div>
                <h2>PK</h2>
                <p>Jam ke 1-5</p>
            </div>
            <div>
                <h2>MTK</h2>
                <p>Jam ke 6-8</p>
            </div>
            <div>
                <h2>PP</h2>
                <p>Jam ke 9-10</p>
            </div>
        </div>
    </div>
</div>
<div class="summary-quick">
    <div class="quick-stats">
        <h3>Absensi</h3>
        <p>Hari ini</p>
    </div>
</div>
@endsection