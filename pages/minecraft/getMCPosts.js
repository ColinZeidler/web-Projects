window.onload=function() {
    xmlhttp=new XMLHttpRequest();
    xmlhttp.onreadystatechange=function() {
        if (xmlhttp.readyState==4) {
        document.getElementById("posts").innerHTML=xmlhttp.responseText;
        }
    }
    xmlhttp.open("GET","getPosts.php",true);
    xmlhttp.send();
}