
<style>
    .sidebar {
        width: 260px;
        /* flex: 0 0 260px; */
        border-right: 1px solid #ddd;
        max-height: 100vh;
        background-color: #ffffff;
        color: #000000;
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 20px 0;
        box-shadow: 0.5px 0.5px 1px 1px  rgba(0,0,0,0.3);
    }

    .logo-branding {
        margin-bottom: 20px;
    }

    .logo-branding img {
        width: 100px;
    }

    .user-profile {
        display: flex;
        align-items: center;
        padding: 15px;
        border-radius: 8px;
        box-shadow: 0.5px 0.5px 1px 1px  rgba(0,0,0,0.3);
    }

    .user-profile img {
        width: 45px;
        height: 45px; 
        border-radius: 50%; 
    }

    .user-profile .user-name {
        margin-left: 15px;
        padding-bottom: 0;
    }

    .user-profile .user-name h3, p {
        font-size: 80%;
        margin: 0;
    }

    .user-profile .user-name p {
        font-weight: lighter;
        color: #7f8c8d;
    }

    .navigation-menu ul {
        list-style: none;
        padding: 0;
        width: 100%;
    }

    .navigation-menu li {
        padding: 15px 75px 15px 15px;
        cursor: pointer;
        text-align: left;
    }

    .navigation-menu li:hover {
        background-color: #efe28a;
        border-radius: 8px;
        box-shadow: inset 0.5px 0.5px 1px 1px  rgba(0,0,0,0.3);
        
    }

    .navigation-menu li a {
        text-decoration: none;
        color: #000000;
    }

    .navigation-menu li img {
        width: 20px;
        margin-right: 10px;
        vertical-align: middle;
    }
</style>

<nav class="sidebar">
    <nav class="logo-branding">
        <img src="{{ asset('images/logo-classly.png') }}" alt="Logo Classly">
    </nav>
    <nav class="user-profile">
        <img src="{{ asset('images/user-profile.jpg') }}" alt="User Profile">
        <div class="user-name">
            <h3>Maula Qodri Lail</h3>
            <p>Admin</p>
        </div>
    </nav>
    <nav class="navigation-menu">
        <ul>
            <li>
                <a href="{{ url('/dashboard') }}">
                    <img src="{{ asset('images/dashboard.png') }}" alt="Dashboard">
                    <span>Dashboard</span>
                </a>
            </li>
            <li>
                <img src="{{ asset('images/attendance.png') }}" alt="Attendance">
                <span>Attendance</span>
            </li>
            <li>
                <img src="{{ asset('images/dashboard.png') }}" alt="Dashboard">
                <span>Schedule</span>
            </li>
            <li>
                <img src="{{ asset('images/attendance.png') }}" alt="Attendance">
                <span>Event</span>
            </li>
            <li>
                <img src="{{ asset('images/dashboard.png') }}" alt="Dashboard">
                <span>Insight</span>
            </li>
        </ul>
    </nav>
</nav>
