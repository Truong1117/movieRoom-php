$(document).ready(function(){
    $('#search_text').keyup(function(){
        var search_txt = $(this).val();
        // if ( event.which == 13 ) {
        //     url = "Phim/GetMovieFollowKeyEnter/" + search_txt;
        //     location.replace(url);
        // }
        if(search_txt != ''){
            $.ajax({
                url: "Searchmovie/GetMovie",
                method:"POST",
                data:{
                    search_txt:search_txt
                },
                dataType: "text",
                success:function(name_movies){
                    $('#search_result').html(name_movies);
                }
            });
        }else{
            $('#search_result').html('');
        }
    });
});

//PAGE SEARCH MOVIE
$(document).ready(function(){
    $('#search_key').keyup(function(){
        var search_key = $(this).val();
        if(search_key != ''){
            $.ajax({
                url: "../Searchmovie/GetMovieFollowKey",
                method:"POST",
                data:{
                    search_key:search_key
                },
                dataType: "text",
                success:function(name_movies){
                    $('#search-content').html(name_movies);
                }
            });
        }else{
            $('#search-content').html('');
        }
    });
});