<head>
<meta charset = "utf-8">


<form id="test_form" method="post" enctype="multipart/form-data" onSubmit="">
<input type="file" id="file">
</form>



<script type="text/javascript" src="http://scriptjava.net/source/scriptjava/scriptjava.js"></script>



<script type="text/javascript">

var file=document.getElementById("file"),
xhr=new XMLHttpRequest(),
form=new FormData();
 
file.onchange=function()
{
    var upload_file=file.files[0];
    form.append("fil",upload_file);
    xhr.open("post","re.php",true);
    xhr.send(form); 
}

</script>


