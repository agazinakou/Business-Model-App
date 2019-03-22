<div id="loading" class="hidden">
        <div class="ripple ripple1"></div>
        <div class="ripple ripple2"></div>
        <div class="ripple ripple3"></div>
        <div class="ripple ripple4"></div>
    </div>
    <!--END PRELOADER-->
    <nav class="navbar navbar-expand-lg fixed-top custom-menu custom-menu__light">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img src="img/logo.png" alt="Image" class="logo-md" style="width: 50px;">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="menu-icon__circle">
                </span>
                <span class="menu-icon">
                    <span class="menu-icon__bar"></span>
                    <span class="menu-icon__bar"></span>
                    <span class="menu-icon__bar"></span>
                </span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-lg-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="/">
                            {{ t('app.nav.home') }}
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" onclick="comingSoon()">{{ t('app.nav.show_more') }}</a>
                    </li>
                </ul>
                <div class="custom-menu__right">
                    <a href="sign-in" type="button" class="btn btn-warning btn-pills">{{ t('app.nav.login_for_save') }}</a>
                    <button class="btn btn-primary btn-pills" id="print">{{ t('app.nav.print') }} <i class="fas fa-print"></i></button>
                    <p class="assistive-text d-md-none">Free forever</p>
                </div>
                <div class="dropdown">
                    <button class="btn btn-light dropdown-toggle" type="button" data-toggle="dropdown" id="language">
                        <img src="img/flags/fr.svg" width="40" alt="French flag"> French
                    </button>
                    <div class="dropdown-menu">
                        <a class="btn btn-light" type="button" id="switch"><img src="img/flags/uk.svg" width="40" alt="United Kingdom flag"> English        </a>              
                    </div>
                </div>
            </div>
        </div>
    </nav>