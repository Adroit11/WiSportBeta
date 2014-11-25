@extends('...layouts.oneCol')

@section('content')
<div class="container">
<h1>Payment Options</h1>
<hr/>
<div class="row col-lg-6">
<h2>PayPal</h2>
<hr/>
<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
    <input type="hidden" name="cmd" value="_s-xclick">
    <input type="hidden" name="hosted_button_id" value="87TFXTD368XJL">
    <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
    <!--img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1"-->
</form>
</div>
<div class="row col-lg-6">
<h2>Mail It In</h2>
<hr/>
<button class="btn btn-default"><a class="print" href="#">
    <span class="glyphicon glyphicon-print" style="vertical-align:middle"></span>  Printer Friendly  </a>
  </button>
</div>
@endsection