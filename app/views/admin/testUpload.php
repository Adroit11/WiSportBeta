
<!--script src="/public/js/uploader.js"></script-->

<input type='file' accept='text/csv' onchange='openFile(event)'><br>
<img id='output'>
<script>
    var openFile = function(event) {
        var input = event.target;

        var reader = new FileReader();
        reader.onload = function(){
            var text = reader.result;
            //console.log(reader.result.substring(0, 200));
            return text;
        };
        reader.readAsText(input.files[0]);
        return reader;
    };
</script>