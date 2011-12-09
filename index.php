<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <script type="text/javascript">
            function startUp() {
            if (window.XMLHttpRequest)
              {
                xhttp=new XMLHttpRequest();
              }
            else // IE 5/6
              {
                xhttp=new ActiveXObject("Microsoft.XMLHTTP");
              }
            xhttp.open("GET","strinXtest.xml",false);
            xhttp.send();
            xmlDoc=xhttp.responseXML; 
            
            var grt = xmlDoc.getElementById("greeting");
            
            var outp = grt.getElementByTagNameNS();
            
            document.getElementById("output").innerHTML = "fuck";
            }
        </script>
    </head>
    <body onload="startUp()">
        <span id="output">Hi</span>
    </body>
</html>
