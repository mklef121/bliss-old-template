<input type="file" id="fileinput" multiple />
<button type="button" onclick="myInput()">Create Input</button>
<script>
  function myInput(){
	  var x =document.createElement("INPUT");
	   var t =document.createElement("STYLE");
	  var y = document.createTextNode("");
	  x.setAttribute("type","text");
	  x.setAttribute("name", "Username");
	  x.setAttribute("id","username");
	  x.setAttribute("placeholder","Please Provide Username");
	 
	  document.body.appendChild(x);
	 
	  }
</script>
<script type="text/javascript">
  function readMultipleFiles(evt) {
    //Retrieve all the files from the FileList object
    var files = evt.target.files; 
    if (files) {
        for (var i=0, f; f=files[i]; i++) {
	          var r = new FileReader();
            r.onload = (function(f) {
                return function(e) {
                    var contents = e.target.result;
                    var ty = f.name;
                    alert(ty);
                    alert( "Got the file.n" 
                          +"name: " + f.name + "n"
                          +"type: " + f.type + "n"
                          +"size: " + f.size + " bytesn"
                          + "starts with: " + contents.substr(1, contents.indexOf("n"))
                    ); 
                };
            })(f);

            r.readAsText(f);
        }   
    } else {
	      alert("Failed to load files"); 
    }
  }
  
  document.getElementById('fileinput').addEventListener('change', readMultipleFiles, false);
</script>