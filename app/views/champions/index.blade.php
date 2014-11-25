@extends('layouts.oneCol')

@section('content')
<style>
.carousel-caption{
color: #FFFF00;
text-transform: uppercase;
font-weight: 800;
}

.carousel-indicators .active {
  background-color: #FFFF00;
}
</style>

<div class="row">
<div class="col-lg-2"></div>
<div class="col-lg-8">
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                <li data-target="#carousel-example-generic" data-slide-to="4"></li>
                <li data-target="#carousel-example-generic" data-slide-to="5"></li>
                <li data-target="#carousel-example-generic" data-slide-to="6"></li>
                <li data-target="#carousel-example-generic" data-slide-to="7"></li>
                <li data-target="#carousel-example-generic" data-slide-to="8"></li>
                <li data-target="#carousel-example-generic" data-slide-to="9"></li>
                <li data-target="#carousel-example-generic" data-slide-to="10"></li>
                <li data-target="#carousel-example-generic" data-slide-to="11"></li>
                <li data-target="#carousel-example-generic" data-slide-to="12"></li>
                <li data-target="#carousel-example-generic" data-slide-to="13"></li>
                <li data-target="#carousel-example-generic" data-slide-to="14"></li>
                <li data-target="#carousel-example-generic" data-slide-to="15"></li>
                <li data-target="#carousel-example-generic" data-slide-to="16"></li>
                <li data-target="#carousel-example-generic" data-slide-to="17"></li>
                <li data-target="#carousel-example-generic" data-slide-to="18"></li>
                <li data-target="#carousel-example-generic" data-slide-to="19"></li>
          </ol>

          <!-- Wrapper for slides -->
          <div class="carousel-inner" role="listbox">
                <div class="item active">
                    {{ HTML::image('/public/images/yewinners/LBR.jpg', '2014 Year End Banquet'); }}
                    <div class="carousel-caption">
                        Lead Butt Racing - 1st Place Team
                    </div>
                </div>
                <div class="item">
                    {{ HTML::image('/public/images/yewinners/bigring.jpg', '2014 Year End Banquet'); }}
                    <div class="carousel-caption">
                        Big Ring Flyers - 2nd Place Team
                    </div>
                </div>
                <div class="item">
                    {{ HTML::image('/public/images/yewinners/jbinder.jpg', '2014 Year End Banquet'); }}
                    <div class="carousel-caption">
                        John Binder - 2014 Spirit of WiSport
                    </div>
                </div>
                <div class="item">
                    {{ HTML::image('/public/images/yewinners/jfouts.jpg', '2014 Year End Banquet'); }}
                    <div class="carousel-caption">
                        Jeffrey Fouts - 1st place for Best of 7 and TT : Under 14
                    </div>
                </div>
                <div class="item">
                    {{ HTML::image('/public/images/yewinners/svollrath.jpg', '2014 Year End Banquet'); }}
                    <div class="carousel-caption">
                        Seth Vollrath - 1st place for Best of 7 : 30-34 and 2nd place for Menzel Yellow Jersey
                    </div>
                </div>
                <div class="item">
                    {{ HTML::image('/public/images/yewinners/pmahler.jpg', '2014 Year End Banquet'); }}
                    <div class="carousel-caption">
                        Peter Mahler - 1st place for Menzel Yellow Jersey and 2nd place for Best of 7 : 35 - 39
                    </div>
                </div>
                <div class="item">
                     {{ HTML::image('/public/images/yewinners/aps.jpg', '2014 Year End Banquet'); }}
                     <div class="carousel-caption">
                         Andrea Potyondy-Smith - WiSport Worlds TT; Series Champion; Fastest Female; Menzel Yellow, Green; 1st place for Menzel Yellow Jersey and 2nd place for Best of 7 : 35 - 39
                     </div>
                </div>
                <div class="item">
                    {{ HTML::image('/public/images/yewinners/bdeyoung.jpg', '2014 Year End Banquet'); }}
                    <div class="carousel-caption">
                        Ben DeYoung - 1st place for TT : 35 - 39
                    </div>
                </div>
                <div class="item">
                    {{ HTML::image('/public/images/yewinners/kmyszkewicz.jpg', '2014 Year End Banquet'); }}
                    <div class="carousel-caption">
                        Ken Myszkewicz - 1st place for Best of 7 : 40-44
                    </div>
                </div>
              <div class="item">
                    {{ HTML::image('/public/images/yewinners/aarnold.jpg', '2014 Year End Banquet'); }}
                    <div class="carousel-caption">
                        Ann Arnold - WiSport World RR; 1st place for Best of 7 : 40-44
                    </div>
                </div>
                <div class="item">
                    {{ HTML::image('/public/images/yewinners/sfouts.jpg', '2014 Year End Banquet'); }}
                    <div class="carousel-caption">
                        Steve Fouts - 2nd place for Best of 7 : 40-44
                    </div>
                </div>
                <div class="item">
                    {{ HTML::image('/public/images/yewinners/rblennert.jpg', '2014 Year End Banquet'); }}
                    <div class="carousel-caption">
                        Ryan Blennert - 3rd place for Best of 7 : 40-44
                    </div>
                </div>
                <div class="item">
                    {{ HTML::image('/public/images/yewinners/rfleming.jpg', '2014 Year End Banquet'); }}
                    <div class="carousel-caption">
                        Randall Fleming - Series Champion; 1st place for Best of 7 and TT : 50 - 54
                    </div>
                </div>
                <div class="item">
                    {{ HTML::image('/public/images/yewinners/rgehin.jpg', '2014 Year End Banquet'); }}
                    <div class="carousel-caption">
                        Richard Gehin - 1st place for Best of 7 and TT : 55-59
                    </div>
                </div>
                <div class="item">
                    {{ HTML::image('/public/images/yewinners/swoods.jpg', '2014 Year End Banquet'); }}
                    <div class="carousel-caption">
                        Susan Woods - 1st place for Best of 7 : 55 - 59
                    </div>
                </div>
                <div class="item">
                    {{ HTML::image('/public/images/yewinners/dwilcox.jpg', '2014 Year End Banquet'); }}
                    <div class="carousel-caption">
                        Dave Wilcox - 1st place for Best of 7 : 60-64
                    </div>
                </div>
                <div class="item">
                    {{ HTML::image('/public/images/yewinners/nlundeen.jpg', '2014 Year End Banquet'); }}
                    <div class="carousel-caption">
                        Neal Lundeen - 1st place for TT : 60 - 64
                    </div>
                </div>
                <div class="item">
                    {{ HTML::image('/public/images/yewinners/volson.jpg', '2014 Year End Banquet'); }}
                    <div class="carousel-caption">
                        Varick Olson - 1st place for Best of 7 : 65 - 69
                    </div>
                </div>
                <div class="item">
                    {{ HTML::image('/public/images/yewinners/msahs.jpg', '2014 Year End Banquet'); }}
                    <div class="carousel-caption">
                        Marva Sahs - 1st place for Best of 7 and TT : 65 - 69
                    </div>
                </div>
                <div class="item">
                    {{ HTML::image('/public/images/yewinners/jsybledon.jpg', '2014 Year End Banquet'); }}
                    <div class="carousel-caption">
                        Joe Sybledon - 1st place for Best of 7 and TT : 70 - 74
                    </div>
                </div>
          </div>

          <!-- Controls -->
          <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
          </a>

    </div>
    </div>
    <div class="col-lg-2"></div>
</div>
@stop