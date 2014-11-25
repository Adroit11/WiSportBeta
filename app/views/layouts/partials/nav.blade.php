
        <!-- NAVBAR -->

        <nav class="navbar navbar" role="navigation">
            <header class="navbar navbar-fixed-top navbar-default container" id="navbar-top" role="banner">
                <!--div class="container"-->
                <div class="collapse navbar-collapse" id="navbar-contents">
                    <div class="row">
                        <div class="col-lg-2 col-sm-2">
                            <div class="row">
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-contents">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                    </button>
                                </div>
                            </div>
                            <div class="row">

                            <a href="http://wisportcycling.org/" class="navbar-brand wisport">{{ HTML::image('public/images/nav-logo.png', 'WiSport Logo'); }}</a>
                            </div>
                        </div>
                        <div class="col-lg-10 col-sm-10 navbar-right">
                            <div class="row">
                                <ul class="nav navbar-nav">
                                    <li><a href="https://mtborah.com/">{{ HTML::image('public/images/Borah-sm.jpg', 'Mt Borah Link'); }}</a></li>
                                    <li><a href="www.trailheadcycling.com/">{{ HTML::image('public/images/THlogo-sm.gif', 'Trailhead Cycling Link'); }}</a></li>
                                </ul>
                                <ul class="nav navbar-nav navbar-right">
                                @if(!isset($userData))
                                    <li><a href="#" class="nav-button">{{ HTML::image('public/images/login-btn.png', 'Login'); }}</a></li>
                                @endif

                                @if(!isset($userData)||($userData[0]->paid==0))
                                    <li><a href="#" class="nav-button">{{ HTML::image('public/images/signup-btn.png', 'Sign Up'); }}</a></li><?php /*{{route('signup')}}*/
                                     ?>
                                @endif

                                @if(isset($userData))
                                    <li><a href="#" class="nav-button">{{ HTML::image('public/images/logout-btn.png', 'Logout'); }}</a></li>
                                @endif
                                <?php /*{{route('logout')}}*/ ?>
                                </ul>
                            </div>
                            <hr class="nav-divider">
                            <div class="row">
                                <ul class="nav navbar-nav" role="navigation">
                                    <li><a href="/">Home</a></li>
                                    <li><a href="#">Schedule</a></li>
                                    <li class="dropdown" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
                                        <a id="nav-locator-dropdown" class="dropdown-toggle" href="..." data-toggle="dropdown" data-target="#">
                                            About Us
                                        <span class="caret"></span>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-left " role="menu" aria-labelledby="dropdownMenu1">
                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Rules</a></li>
                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Mission</a></li>
                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="{{route('champs')}}">Past Champions</a></li>
                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Teams</a></li>
                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Shops</a></li>
                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Leadership</a></li>
                                          </ul>
                                    </li>
                                    <li><a href="#">Results</a></li>
                                    <li><a href="#">Standings</a></li>
                                    @if(isset($userData))
                                    <li class="dropdown" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
                                         <a id="nav-locator-dropdown" class="dropdown-toggle" href="..." data-toggle="dropdown" data-target="#">
                                             My Wisport
                                         <span class="caret"></span>
                                         </a>
                                         <ul class="dropdown-menu dropdown-menu-left " role="menu" aria-labelledby="dropdownMenu1">
                                             <li role="presentation"><a role="menuitem" tabindex="-1" href="#">My Results</a></li>
                                             <li role="presentation"><a role="menuitem" tabindex="-1" href="#">My Team</a></li>
                                             <li role="presentation"><a role="menuitem" tabindex="-1" href="#">My Shop</a></li>
                                             <li role="presentation"><a role="menuitem" tabindex="-1" href="#">My Schedule</a></li>
                                           </ul>
                                     </li>
                                    @endif
                                    <!--li><a href="#">Forum</a></li-->
                                </ul>

                                @if(isset($userData))
                                <ul class="nav navbar-nav navbar-right">
                                    <li><div class="user-info">Welcome {{{$userData[0]->first_name}}}, {{{$userData[0]->wisportId}}}</div></li>
                                </ul>
                                @endif
                            </div>

                        </div>
                     </div>
                </div>
            </header>
        </nav>