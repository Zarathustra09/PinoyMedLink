<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="{{route('home')}}" class="app-brand-link">

            <span class="app-brand-text demo menu-text fw-bolder ms-2">{{ config('app.name', 'Laravel') }}</span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <!-- Dashboard -->
        <li class="menu-item {{ Request::is('home') ? 'active' : '' }}">
            <a href="{{route('home')}}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
            </a>
        </li>

        <!-- Doctor Section -->
        <li class="menu-header small text-uppercase"><span class="menu-header-text">Doctor</span></li>
        <li class="menu-item {{ Request::is('doctor/appointment') ? 'active' : '' }}">
            <a href="{{ route('doctor.appointment.index') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-calendar"></i>
                <div data-i18n="Appointments">Appointments</div>
            </a>
        </li>

        <!-- Patients Section -->
        <li class="menu-header small text-uppercase"><span class="menu-header-text">Patients</span></li>

        <li class="menu-item {{ Request::is('doctor/patient') ? 'active' : '' }}">
            <a href="{{route('doctor.patient.index')}}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-user-plus"></i>
                <div data-i18n="Patient Records">Add Patient</div>
            </a>
        </li>

        <li class="menu-item {{ Request::is('doctor/patient/record') ? 'active' : '' }}">
            <a href="{{route('doctor.patient.records')}}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-folder"></i>
                <div data-i18n="Patient Records">Add Doctor</div>
            </a>
        </li>

        <!-- Relationship Section -->
        <li class="menu-header small text-uppercase"><span cass="menu-header-text">Relationship</span></li>
        <li class="menu-item {{ Request::is('chatify') ? 'active' : '' }}">
            <a href="{{url('/chatify')}}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-chat"></i>
                <div data-i18n="Chat">Chat</div>
            </a>
        </li>
    </ul>


</aside>