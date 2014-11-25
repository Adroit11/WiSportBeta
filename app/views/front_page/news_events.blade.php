<div role="tabpanel">

      <!-- Nav front_page -->
      <ul class="nav nav-tabs" role="tablist" id="myTab">
            <li role="presentation" class="active"><a href="#news" aria-controls="news" role="tab" data-toggle="tab"style="font-size: 20px;">NEWS</a></li>
            <li role="presentation"><a href="#events" aria-controls="events" role="tab" data-toggle="tab">EVENTS</a></li>
      </ul>

      <!-- Tab panes -->
      <div class="tab-content">
            <div role="tabpanel" class="tab-pane fade in active" id="news">

                @foreach($posts as $p)

                    <div class="col-lg-12">
                        <h3>{{ HTML::link('blog/'.$p->slug, $p->title) }}</h3>
                        <!--hr-->
                        <p><span class="glyphicon glyphicon-time"></span> Posted {{ date_format($p->created_at, 'l, F j, Y')}}</p>
                        <p>{{ Str::limit($p->body, 120)}}{{HTML::link('blog/'.$p->slug, 'Read More')}}</p>
                    </div>

                @endforeach

            </div>
            <div role="tabpanel" class="tab-pane fade" id="events">
                <h3>Guernsey</h3>
                <p><span class="glyphicon glyphicon-calendar"></span> Posted : November 19, 2014</p>
                <p>
                Cupim turducken chuck doner, ball tip hamburger ground round chicken meatball pork loin. Biltong chicken meatball swine leberkas shankle short ribs tri-tip cow flank. Landjaeger pork salami, sirloin ham hock capicola tongue sausage boudin doner bresaola. Swine ham cupim hamburger sirloin. Andouille swine ham bacon pork tri-tip. Sirloin strip steak tri-tip fatback prosciutto, ham hock ribeye turducken tail picanha. Prosciutto doner boudin tail jowl, t-bone brisket spare ribs meatball.
                </p>
                <h3>Holstein</h3>
                <p><span class="glyphicon glyphicon-calendar"></span> Posted : November 20, 2014</p>
                <p>
                Filet mignon ground round shoulder, turkey meatloaf frankfurter jowl sirloin tail corned beef kevin strip steak swine turducken short ribs. Jerky tenderloin ham hock corned beef short loin jowl ground round tri-tip porchetta. Andouille salami brisket, prosciutto frankfurter kielbasa turkey jerky drumstick ham ball tip. Pig ham hock pork belly pancetta. Filet mignon turkey doner hamburger jerky frankfurter landjaeger spare ribs. Drumstick cupim t-bone doner bacon chuck pork loin rump filet mignon shank spare ribs shoulder. Ground round short ribs tri-tip bresaola, capicola kevin turkey pancetta filet mignon shoulder beef ribs biltong ham.
                </p>
                <h3>Jersey</h3>
                <p><span class="glyphicon glyphicon-calendar"></span> Posted : November 21, 2014</p>
                <p>
                Prosciutto flank chuck, meatball swine pig biltong brisket chicken pork loin ham. Shank frankfurter landjaeger hamburger cupim t-bone. Turducken ball tip prosciutto sirloin. Jowl turducken pork loin corned beef, pancetta ball tip pork chop ham hock.
                </p>
            </div>
      </div>



      <script>
            $(function () {
                $('#myTab a:last').tab('show')
            })

            $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
                e.target // newly activated tab
                e.relatedTarget // previous active tab
            })
      </script>
</div>
