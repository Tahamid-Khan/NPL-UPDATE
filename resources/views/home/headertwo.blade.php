<header class="header header__sticky v__2">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="header__wrapper">
                        <div class="header__logo">
                            <a href="indexinvalid link" class="header__logo--link">
                                <img src="{{asset('bibm/assets/images/logo/logo__two2.svg')}}" alt="unipix">
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
                                            <a href="{{route('about') }}"  class="navigation__menu--item__link">About Us</a>
                                        </li>
                                        <!-- <li class="navigation__menu--item has-child has-arrow">
                                            <a href="aboutinvalid link" class="navigation__menu--item__link">About Us</a>
                                            <ul class="submenu sub__style">
                                                <li><a href="aboutinvalid link">About BIBM</a></li>
                                                <li><a href="athleticsinvalid link">About MBM</a></li>
                                                <li class="has-child has-arrow">
                                                    <a href="#">About MAS</a>
                                                    <ul class="sub__style">
                                                        <li><a class="mobile-menu-link" href="faculty-subinvalid link">Faculty</a></li>
                                                        <li><a class="mobile-menu-link" href="faculty-sub-detailsinvalid link">Faculty Details</a></li>
                                                        <li><a href="facultyinvalid link">Faculty Staff</a></li>
                                                        <li class="has-child"><a href="faculty-detailsinvalid link">Faculty Staff details</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li> -->
                                        <li class="navigation__menu--item">
                                            <a href="{{ route('newsevent') }}" class="navigation__menu--item__link">News & Events</a>
                                        </li>
                                        
                                        <li class="navigation__menu--item">
                                            <a href="{{ route('executivecommittee') }}" class="navigation__menu--item__link">Executive Committee</a>
                                            <ul class="submenu sub__style">
                                                <!-- <li><a href="eventinvalid link">Event</a></li>
                                                <li><a href="event-detailsinvalid link">Event Details</a></li> -->
                                            </ul>
                                        </li>
                                        <!-- <li class="navigation__menu--item has-child has-arrow">
                                            <a href="#" class="navigation__menu--item__link">Blog</a>
                                            <ul class="submenu sub__style">
                                                <li><a href="bloginvalid link">Blog</a></li>
                                                <li><a href="blog-gridinvalid link">Blog Grid</a></li>
                                                <li><a href="blog-listinvalid link">Blog List</a></li>
                                                <li><a href="blog-detailsinvalid link">Blog Details</a></li>
                                            </ul>
                                        </li> -->
                                        <li class="navigation__menu--item">
                                            <a  href="{{ route('contactus') }}"  class="navigation__menu--item__link">Contact</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="header__right">
                            <div class="header__right--item">
                                <div id="langSwitcher" class="lang__trigger">
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
                                </div>
                                <div id="search-btn" class="search__trigger">
                                    <i class="fa-sharp fa-light fa-magnifying-glass"></i>
                                </div>
                                <div id="menu-btn" class="menu__trigger">
                                    <img src="{{asset('bibm/assets/images/icon/menu__bar.svg')}}" alt="bar">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>