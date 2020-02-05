//Page Home
    $(document).ready(function(){
        $('#home-movie-list').change(function(){
            var home_movie_list = $(this).val();
            $.ajax({
                url:"./Lichchieu/GetRoom",
                method:"POST",
                data:{
                    homeMovieList:home_movie_list
                },
                dataType:"text",
                success:function(data){
                    $('#home-room-list').html(data);
                }
            });
        });

        $('#home-room-list').change(function(){
            var home_room_code = $(this).val();
            var home_movie_code = $('#home-movie-list').val();
            $.ajax({
                url:"./Lichchieu/GetDay",
                method:"POST",
                data:{
                    homeMovieCode:home_movie_code,
                    homeRoomCode:home_room_code
                },
                dataType:"text",
                success:function(data){
                    $('#home-day-list').html(data);
                }
            });
        });

        $('#home-day-list').change(function(){
            var home_day = $(this).val();
            var home_room_code = $('#home-room-list').val();
            var home_movie_code = $('#home-movie-list').val();
            $.ajax({
                url:"./Lichchieu/GetTimeOfDay",
                method:"POST",
                data:{
                    homeDay: home_day,
                    homeMovieCode:home_movie_code,
                    homeRoomCode:home_room_code
                },
                dataType:"text",
                success:function(data){
                    $('#home-dayTime-list').html(data);
                }
            });
        });
        
        $("#loginBuyTicket").click(function(){
            var home_dayTime_list = $('#home-dayTime-list').val();
            var home_room_code = $('#home-room-list').val();
            var home_movie_code = $('#home-movie-list').val();
            if (home_dayTime_list == ''){
                alert("Bạn chưa chọn suất!");
            }else{
                location.replace("Muave/BuyTicket/code_movie=home_movie_code&code_room=home_room_code");
            }
        });
    });
       
//End Page Home


//Page Booking
//Title Follow Film
// SELECT ROOM OF FILM
        $(document).on('click','.movies-list',function(){
            var listRoom = document.getElementById("myListRoom");
            listRoom.innerHTML='';
            var listTimeOfRoom = document.getElementById("myListTime");
            listTimeOfRoom.innerHTML='';
                $(".movies-list").removeClass("active");
                // $(".tab").addClass("active"); // instead of this do the below 
                $(this).addClass("active"); 
                var code_movie = $(this).data("movieid");
                $.ajax({
                    type: 'POST',
                    url: './Ajax/getRoom',
                    data: {
                        code_movie: code_movie,
                    },
                    success: function(rooms) {
                        $(".loader").fadeIn(700);
                        $(".loader").fadeOut(0, function() {
                            $('#myListRoom').html(rooms).fadeIn("slow");
                        });
                    }
                });
        });


    // SELECT TIME OF ROOM AND FILM
    
        function listTimeOfARoom(){
            $(document).on('click','.rooms-list',function(){
                var listTimeOfRoom = document.getElementById("myListTime");
                listTimeOfRoom.innerHTML='';
                $(".rooms-list").removeClass("active");
                // $(".tab").addClass("active"); // instead of this do the below 
                $(this).addClass("active"); 
                var code_movie = $(this).data("movieid");
                var code_room = $(this).data("room");
                $.ajax({
                    type: 'POST',
                    url: './Ajax/getTime',
                    data: {
                        code_movie: code_movie,
                        code_room: code_room
                    },
                    success: function(times) {
                        $('#myListTime').html(times).fadeIn("slow");
                    }
                });
            });    
        }

//Title Follow Room
// SELECT Film OF Room
$(document).on('click','.room-movies-list',function(){
    var listMovie = document.getElementById("room-myListMovie");
    listMovie.innerHTML='';
    var listTimeOfMovie = document.getElementById("room-myListTime");
    listTimeOfMovie.innerHTML='';
        $(".room-movies-list").removeClass("active");
        // $(".tab").addClass("active"); // instead of this do the below 
        $(this).addClass("active"); 
        var code_room = $(this).data("roomid");
        $.ajax({
            type: 'POST',
            url: './Ajax/getMovieOfRoom',
            data: {
                code_room: code_room,
            },
            success: function(movies) {
                $(".loader").fadeIn(700);
                        $(".loader").fadeOut(0, function() {
                            $('#room-myListMovie').html(movies).fadeIn("slow");
                        });
            }
        });
});


// SELECT TIME OF ROOM AND FILM
function listTimeOfAFilm(){
    $(document).on('click','.rooms-list',function(){
        var listTimeOfRoom = document.getElementById("room-myListTime");
        listTimeOfRoom.innerHTML='';
        $(".rooms-list").removeClass("active");
        // $(".tab").addClass("active"); // instead of this do the below 
        $(this).addClass("active"); 
        var code_movie = $(this).data("movieid");
        var code_room = $(this).data("room");
        $.ajax({
            type: 'POST',
            url: './Ajax/getTime',
            data: {
                code_movie: code_movie,
                code_room: code_room
            },
            success: function(times) {
                $('#room-myListTime').html(times).fadeIn("slow");
            }
        });
    });    
}




       
