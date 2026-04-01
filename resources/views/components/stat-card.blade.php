<style>
    .summary-card {
        display: flex;
        gap: 10px;
        padding: 20px;
    }

    .stat-card {
        background-color: #6589ae;
        color: #ffffff;
        border-radius: 8px;
        padding: 20px;
        flex: 1;
        display: flex;
        align-items: center; 
    }

    .stat-card img {
        width: 20px;
        margin-right: 10px;
        vertical-align: middle;
    }

    .stat-card h3 {
        margin: 0;
        font-size: 16px;
        font-weight: lighter;
    }
</style>

<nav class="summary-card">
    <nav class="stat-card">
        <img src="{{ asset('images/dashboard.png') }}" alt="Dashboard">
        <h3>24 Siswa Aktif</h3>
    </nav>
    <nav class="stat-card">
        <img src="{{ asset('images/dashboard.png') }}" alt="Dashboard">
        <h3>3 Agendan Minggu Ini</h3>
    </nav>
    <nav class="stat-card">
        <img src="{{ asset('images/dashboard.png') }}" alt="Dashboard">
        <h3>1 Jadwal Hari Ini</h3>
    </nav>
    <nav class="stat-card">
        <img src="{{ asset('images/dashboard.png') }}" alt="Dashboard">
        <h3>2 Notifikasi Belum Dibaca</h3>
    </nav>
</nav>
