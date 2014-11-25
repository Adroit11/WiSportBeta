
          <div class="well">
            <h4>Blog Search</h4>
            {{ Form::open(array('url' => 'search')) }}
            <div class="input-group">
              {{Form::text('search', '', array('class' => 'form-control'))}}
              <span class="input-group-btn">
              {{ Form::submit('Search', array('class' => 'btn btn-default'))}}
              </span>
            {{ Form::close()}}
            </div><!-- /input-group -->
          </div><!-- /well -->



