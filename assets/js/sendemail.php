function sendMail() {
    var link = "mailto:jt.jatinsinghal@gmail.com"
             + "&subject=" + encodeURIComponent(document.getElementById('subject').value)
             + "&body=" + encodeURIComponent(document.getElementById('name').value) + ' - ' + encodeURIComponent(document.getElementById('email').value) + ' - ' + encodeURIComponent(document.getElementById('message').value)
    ;
    
    window.location.href = link;
}