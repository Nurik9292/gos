<nav class="navbar navbar-dark navbar-theme-primary px-4 col-12 d-lg-none">
    <a class="navbar-brand me-lg-5" href="/">
        <img class="navbar-brand-dark" src="{{asset('/image/clena.png')}}" alt="Admin logo" >
        <img class="navbar-brand-light" src="{{asset('/image/clena.png')}}" alt="Admin logo" >
    </a>
    <div class="d-flex align-items-center">
        <button class="navbar-toggler d-lg-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
</nav>


<nav id="sidebarMenu" class="sidebar d-lg-block bg-gray-800 text-white collapse" data-simplebar>
    <div class="sidebar-inner px-4 pt-3">
        <ul class="nav flex-column pt-3 pt-md-0">
            <li class="nav-item">
                <a href="#" class="nav-link d-flex align-items-center">
                        <span class="sidebar-icon">
                                <img src="{{asset('/image/clena.png')}}" height="40" width="40" alt="Ugur Logo">
                        </span>
                    <span class="mt-1 ms-1 sidebar-text">
                            <h2>Gos</h2>
                        </span>
                </a>
            </li>

            <li class="nav-item">
                    <span
                        class="nav-link  collapsed d-flex justify-content-between align-items-center"
                        data-bs-toggle="collapse" data-bs-target="#submenu-app">
                    <span>
                        <span class="sidebar-icon">
                            <svg class="icon icon-xs me-2" data-slot="icon" fill="none" stroke-width="1.5" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25"></path>
                            </svg>
                        </span>
                        <span class="sidebar-text">Главная</span>
                    </span>
                        <span class="link-arrow">
                            <svg class="icon icon-sm" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                        </span>
                    </span>
                <div class="multi-level collapse"
                     role="list" id="submenu-app" aria-expanded="false">
                    <ul class="flex-column nav">
                        <li class="nav-item @if($page == 'logo') active @endif">
                            <a class="nav-link" href="{{route('logo.index')}}">
                                <span class="sidebar-text">Лого</span>
                            </a>
                        </li>
                        <li class="nav-item @if($page == 'banner') active @endif">
                            <a class="nav-link" href="{{route('banner.index')}}">
                                <span class="sidebar-text">Банеры</span>
                            </a>
                        </li>
                        <li class="nav-item @if($page == 'card') active @endif">
                            <a class="nav-link" href="{{route('card.index')}}">
                                <span class="sidebar-text">Карточки</span>
                            </a>
                        </li>
                        <li class="nav-item @if($page == 'content') active @endif">
                            <a class="nav-link" href="{{route('content.index')}}">
                                <span class="sidebar-text">Контент</span>
                            </a>
                        </li>
                        <li class="nav-item @if($page == 'service') active @endif">
                            <a class="nav-link" href="{{route('service.index')}}">
                                <span class="sidebar-text">Услуги</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                    <span
                        class="nav-link  collapsed d-flex justify-content-between align-items-center"
                        data-bs-toggle="collapse" data-bs-target="#submenu-about">
                    <span>
                        <span class="sidebar-icon">
                            <svg class="icon icon-xs me-2" data-slot="icon" fill="none" stroke-width="1.5" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25"></path>
                            </svg>
                        </span>
                        <span class="sidebar-text">О нас</span>
                    </span>
                        <span class="link-arrow">
                            <svg class="icon icon-sm" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                        </span>
                    </span>
                <div class="multi-level collapse"
                     role="list" id="submenu-about" aria-expanded="false">
                    <ul class="flex-column nav">
                        <li class="nav-item @if($page == 'about-text') active @endif">
                            <a class="nav-link" href="{{route('about-text.index')}}">
                                <span class="sidebar-text">Текст</span>
                            </a>
                        </li>
                        <li class="nav-item @if($page == 'about') active @endif">
                            <a class="nav-link" href="{{route('about.index')}}">
                                <span class="sidebar-text">Конент</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item @if($page == 'gallery') active @endif">
                <a href="{{route('gallery.index')}}" class="nav-link">
                        <span class="sidebar-icon">
                            <svg class="icon icon-xs me-2" data-slot="icon" fill="none" stroke-width="1.5" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m2.25 15.75 5.159-5.159a2.25 2.25 0 0 1 3.182 0l5.159 5.159m-1.5-1.5 1.409-1.409a2.25 2.25 0 0 1 3.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 0 0 1.5-1.5V6a1.5 1.5 0 0 0-1.5-1.5H3.75A1.5 1.5 0 0 0 2.25 6v12a1.5 1.5 0 0 0 1.5 1.5Zm10.5-11.25h.008v.008h-.008V8.25Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z"></path>
                            </svg>
                        </span>
                    <span class="sidebar-text">Галлерея</span>
                </a>
            </li>
            <li class="nav-item @if($page == 'footer') active @endif">
                <a href="{{route('footer.index')}}" class="nav-link">
                        <span class="sidebar-icon">
                            <svg class="icon icon-xs me-2" data-slot="icon" fill="none" stroke-width="1.5" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5h3m-6.75 2.25h10.5a2.25 2.25 0 0 0 2.25-2.25v-15a2.25 2.25 0 0 0-2.25-2.25H6.75A2.25 2.25 0 0 0 4.5 4.5v15a2.25 2.25 0 0 0 2.25 2.25Z"></path>
                        </svg>
                        </span>
                    <span class="sidebar-text">Footer</span>
                </a>
            </li>
            <li role="separator" class="dropdown-divider mt-4 mb-3 border-gray-700"></li>
        </ul>
    </div>
</nav>
