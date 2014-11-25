
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                <li data-target="#carousel-example-generic" data-slide-to="4"></li>
          </ol>

          <!-- Wrapper for slides -->
          <div class="carousel-inner" role="listbox">
                <div class="item active">
                    {{ HTML::image('/public/images/yearend/yeb1.jpg', '2014 Year End Banquet'); }}
                    <div class="carousel-caption">
                        2014 Year End Banquet
                    </div>
                </div>
                <div class="item">
                    {{ HTML::image('/public/images/yearend/yeb2.jpg', '2014 Year End Banquet'); }}
                    <div class="carousel-caption">
                        2014 Year End Banquet
                    </div>
                </div>
                <div class="item">
                    {{ HTML::image('/public/images/yearend/yeb3.jpg', '2014 Year End Banquet'); }}
                    <div class="carousel-caption">
                        2014 Year End Banquet
                    </div>
                </div>
                <div class="item">
                    {{ HTML::image('/public/images/yearend/yeb4.jpg', '2014 Year End Banquet'); }}
                    <div class="carousel-caption">
                        2014 Year End Banquet
                    </div>
                </div>
                <div class="item">
                    {{ HTML::image('/public/images/yearend/yeb5.jpg', '2014 Year End Banquet'); }}
                    <div class="carousel-caption">
                        2014 Year End Banquet
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