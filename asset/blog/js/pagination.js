$(document).ready(function(){
    var base_url        = window.location.origin;
    // Load more data 
    $('.load-more').click(function(){
        var slug        = $('.load-more').attr('slug');
        var blog_id     = $('.load-more').attr('blog_id');
        var row         = Number($('#row').val());
        var allcount    = Number($('#all').val());
        row             = row + 3;
        
        if(row <= allcount){
            $("#row").val(row);

            $.ajax({
                url:base_url+'/blog/getdata/',
                type: 'get',
                dataType: 'text',
                data: {row:row,slug:slug,blog_id:blog_id},
                beforeSend:function(){
                    $(".load-more").html('<button class="btn btn-primary">Loading...</button>');
                },
                success: function(response){
                    // Setting little delay while displaying new content
                    setTimeout(function() {
                        // appending posts after last post with class="post"
                        $(".postData:last").after(response).show().fadeIn("slow");

                        var rowno = row + 3;
                        // checking row value is greater than allcount or not
                        if(rowno > allcount){
                            // Change the text and background
                            $('#Load-More-Btn').hide();
                            //$('.load-more').css("background","darkorchid");
                        }else{
                            $(".load-more").html('<button class="btn btn-primary">Load More</button>');
                        }
                    }, 200);


                }
            });
        }else{
            $(".load-more").html('<button class="btn btn-primary">Loading...</button>');

            // Setting little delay while removing contents
            setTimeout(function() {

                // When row is greater than allcount then remove all class='post' element after 3 element
                $('.postData:nth-child(3)').nextAll('.postData').remove().fadeIn("slow");

                // Reset the value of row
                $("#row").val(0);

                // Change the text and background
                $(".load-more").html('<button class="btn btn-primary">Load More</button>');
                //$('.load-more').css("background","#15a9ce");

            }, 200);


        }

    });

});