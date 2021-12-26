

$(document).ready(function(){


    function getData(){

        $.ajax({
            url:"getData.php",
            type:"post",
            success:function(response){

                $('.chatbox').html(response);
            }
        });
        $('.chatbox').animate({ scrollTop:"400" },1000);
    }
/* ******************************************************* */

    $('#sendbtn').click(function(e){

        e.preventDefault();
        var name = $('#nickname').val();
        var msg = $('#msg').val();
       
        $.ajax({
            url:"sendData.php",
            type:"post",
            data:{nm:name, m:msg},
            success:function(data){
                $('.chatbox').html(data);
            }
        });

        $('#msg').val("");
        getData();
        $('.chatbox').animate({ scrollTop:"400" },1000);
    });

    setInterval(function(){
        getData();
    },1500);

});
