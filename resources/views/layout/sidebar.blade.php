<!--  BEGIN SIDEBAR  -->
<ul class="navbar-nav theme-brand flex-row  text-center">
    <li class="nav-item theme-logo">
        <a href="dashboard">
            <img src="assets/img/main.png" class="navbar-logo" alt="logo">
        </a>
    </li>
    <li class="nav-item theme-text">
        <a href="dashboard" class="nav-link">Powerwall</a>
    </li>
</ul>

<ul class="list-unstyled menu-categories" id="accordionExample">
    <li id="menuDashboard" class="menu">
        <a href="#dashboard" data-toggle="collapse" aria-expanded="true" class="dropdown-toggle">
            <div class="">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-home">
                    <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                    <polyline points="9 22 9 12 15 12 15 22"></polyline>
                </svg>
                <span>MAIN PANEL</span>
            </div>
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-chevron-right">
                    <polyline points="9 18 15 12 9 6"></polyline>
                </svg>
            </div>
        </a>
        <ul class="collapse submenu recent-submenu mini-recent-submenu list-unstyled show" id="dashboard"
            data-parent="#accordionExample">
            <li>
                <a href="dashboard"> Dashboard </a>
            </li>
            <li>
                <a href="usages"> Usages </a>
            </li>
            <li>
                <a href="cost"> Cost </a>
            </li>
            <li>
                <a href="control"> Control </a>
            </li>
            <!-- <li>
                <a href="bms"> Battery Monitoring </a>
            </li>
            <li>
                <a href="inverter"> Inverter </a>
            </li> -->
        </ul>
    </li>

    <li id="menuBMS" class="menu">
        <a href="bms" aria-expanded="false" class="dropdown-toggle">
            <div class="">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-dollar-sign">
                    <path d="m19.5 19h-17c-1.379 0-2.5-1.122-2.5-2.5v-10c0-1.378 1.121-2.5 2.5-2.5h17c1.379 0 2.5 1.122 2.5 2.5v.5h.491c.827 0 1.5.673 1.5 1.5v6c0 .827-.673 1.5-1.5 1.5h-.491v.5c0 1.378-1.121 2.5-2.5 2.5zm-17-14c-.827 0-1.5.673-1.5 1.5v10c0 .827.673 1.5 1.5 1.5h17c.827 0 1.5-.673 1.5-1.5v-1c0-.276.224-.5.5-.5h.991c.275 0 .5-.224.5-.5v-6c0-.276-.225-.5-.5-.5h-.991c-.276 0-.5-.224-.5-.5v-1c0-.827-.673-1.5-1.5-1.5z"/>
                    <path d="m6.5 16h-3c-.276 0-.5-.224-.5-.5v-8c0-.276.224-.5.5-.5h3c.276 0 .5.224.5.5v8c0 .276-.224.5-.5.5zm-2.5-1h2v-7h-2z"/>
                    <path d="m12.5 16h-3c-.276 0-.5-.224-.5-.5v-8c0-.276.224-.5.5-.5h3c.276 0 .5.224.5.5v8c0 .276-.224.5-.5.5zm-2.5-1h2v-7h-2z"/>
                </svg>
                <span>BMS</span>
            </div>
        </a>
    </li>

    <li id="menuInverter" class="menu">
        <a href="inverter" aria-expanded="false" class="dropdown-toggle">
            <div class="">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="m9.303 21c-.079 0-.16-.019-.234-.058-.215-.114-.317-.367-.24-.599l2.094-6.343h-3.923c-.186 0-.356-.103-.443-.268-.086-.165-.074-.364.032-.517l6.926-10c.136-.196.395-.266.611-.174.219.096.34.333.289.566l-1.408 6.393h3.993c.19 0 .364.108.449.279.084.171.063.375-.053.526l-7.697 10c-.097.127-.245.195-.396.195zm-1.348-8h3.66c.161 0 .311.077.405.207s.12.297.069.45l-1.39 4.209 5.285-6.866h-3.599c-.151 0-.295-.069-.39-.187s-.131-.273-.099-.421l.996-4.521z"/>
                </svg>
                <span>Inverter</span>
            </div>
        </a>
    </li>
  <!-- END SIDEBAR  -->

    <li class="menu">
        <a href="#" aria-expanded="false" class="dropdown-toggle">
            <div class="">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-book">
                    <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path>
                    <path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path>
                </svg>
                <span>Documentation</span>
            </div>
        </a>
    </li>
</ul>
<!--  END SIDEBAR  -->
