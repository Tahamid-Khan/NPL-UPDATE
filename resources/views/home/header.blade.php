<header class="header header__sticky v__1">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12">
                    <div class="header__wrapper">
                        <div class="header__logo">
                            <a href="indexinvalid link" class="header__logo--link">
                                <img src="{{asset('bibm/assets/images/logo/logo__two2.svg')}}" alt="unipix"style="filter: none;width: 32px;">
                            </a>
                        </div>
                        <div class="header__menu">
                            <div class="navigation">
                                <nav class="navigation__menu">
                                    <ul>
                                    <li class="navigation__menu--item">
    <a href="{{route('home') }}" class="navigation__menu--item__link">Home</a>
</li>


<li class="navigation__menu--item">
                                            <a  href="{{route('about') }}"  class="navigation__menu--item__link">About Us</a>
                                        </li>
                                        <li class="navigation__menu--item">
                                            <a href="{{ route('newsevent') }}" class="navigation__menu--item__link">News & Events</a>
                                        </li>

                                        <li class="navigation__menu--item">
                                            <a href="{{ route('executivecommittee') }}" class="navigation__menu--item__link">Executive Committee</a>
                                            <ul class="submenu sub__style">
                                                <li><a href="{{ route('newsevent') }}">Event</a></li>
                                            </ul>
                                        </li>
                                        <li class="navigation__menu--item">
                                            <a  href="{{route('contactus')}}" class="navigation__menu--item__link">Contact</a>
                                        </li>
                                        <!-- <li class="navigation__menu--item">
                                            <a  href="{{url('/login')}}" class="navigation__menu--item__link">Login</a>
                                        </li> -->
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="header__right">
                            <div class="header__right--item">
                                <!-- <div id="langSwitcher" class="lang__trigger">
                                    <span class="selected__lang">English</span>
                                    <i class="fa-light fa-globe"></i>
                                    <div class="translate__lang">
                                        <ul>
                                            <li><a href="#" class="active">English</a></li>
                                            <li><a href="#">French</a></li>
                                            <li><a href="#">Spanish</a></li>
                                            <li><a href="#">Romanian</a></li>
                                        </ul>
                                    </div>
                                </div> -->
                              
                                <div id="menu-btn" class="menu__trigger">
                                    <img src="{{asset('bibm/assets/images/icon/menu-07.svg')}}" alt="bar">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>