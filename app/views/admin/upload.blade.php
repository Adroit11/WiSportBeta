@extends('layouts.oneCol')

@section('content')
<h2>Upload Race Results</h2>
<br/>
{{ Form::open(['url' => '/admin/upload', 'enctype' => 'multipart/form-data']) }}
{{ Form::file('file', ['class' => 'btn btn-default btn-xs']) }}
<br/>
{{ Form::submit('Upload File', ['class' => 'btn btn-default btn-xs']) }}
{{ Form::close() }}

<hr/>
<output id=list>
</output>
<hr />

<h2>Results</h2>
<div ng-app="" ng-controller="customersController">
    <table id="contents" class="table table-striped table-bordered">

        <thead>
            <tr>
                <th>Wisport ID</th>
                <th>Event ID</th>
                <th>Place</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Gender</th>
                <th>Age Group</th>
                <th>Time</th>
            </tr>
        </thead>
        <tr ng_repeat="x in results">
            <td>@{{ x.wisportId }}</td>
            <td>@{{ x.eventId }}</td>
            <td>@{{ x.place }}</td>
            <td>@{{ x.first }}</td>
            <td>@{{ x.last }}</td>
            <td>@{{ x.gender }}</td>
            <td>@{{ x.ageGroup }}</td>
            <td>@{{ x.time }}</td>
        </tr>
    </table>
</div>
{{Form::open(array('url' => 'admin/upload', 'files' => true))}}

   {{ Form::submit('Upload To Server',array('class'=>'btn btn-sm btn-default')) }}

{{Form::close()}}

<script src="http://jquery-csv.googlecode.com/git/src/jquery.csv.js"></script>
        <script type="text/javascript">
          $("#filename").change(function(e) {
          var ext = $("input#filename").val().split(".").pop().toLowerCase();

          if($.inArray(ext, ["csv"]) == -1) {
          alert('Upload CSV');
          return false;
          }

          if (e.target.files != undefined) {
          var reader = new FileReader();
          reader.onload = function(e) {
          var csvval=e.target.result.split("\n");
          var csvvalue=csvval[0].split(",");
          var inputrad="";
          for(var i=0;i<csvvalue.length;i++)
          {
          var temp=csvvalue[i];
          var inputrad=inputrad+" "+temp;
          }
          $("#csvimporthint").html(inputrad);
          $("#csvimporthinttitle").show();
          };
          reader.readAsText(e.target.files.item(0));

          }

          return false;

          });
        </script>
@stop

