function update() {
    xmlhttp=new XMLHttpRequest();
    xmlhttp.onreadystatechange=function() {
        //if xmlhttp.readyState==4 && xmlhttp.status==200) {
        document.getElementById("content").innerHTML=xmlhttp.responseText;
        setTimeout('update()', 5000);
        //}
    }
    xmlhttp.open("GET","mysqltest.php",true);
    xmlhttp.send();
}

window.onload=function() {
    setTimeout('update()',100);
}