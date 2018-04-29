document.write("<script type='text/javascript' src='../js/jquery-3.3.1.min.js'></script>");

window.onload = function() {
    $(function () {
        var conn = new WebSocket('ws://localhost:1337');
        conn.onopen = function (e) {
            console.log("Connection established!");
        };

        conn.onmessage = function (rec) {
            $('#chat').append($('<li class="left">').text(rec.data));
        };

        conn.addEventListener('open', function () {

        });

        $('#send').on('click', function () {
            if($('#message').val()) {
                $('#chat').append($('<li class="right">').text($('#message').val()));
                var sendMessage = $('#message').val();
                conn.send(sendMessage);
                $("#chat").scrollTop( $("#chat")[0].scrollHeight );
              //  $('#message').val('');
            }
        });
    });

}