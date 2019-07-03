<?php
include 'includes/doc_header.php';
include("includes/classes/Doc.php");
include("includes/classes/Post.php");

    if(isset($_POST['post'])){
        $post = new Post($con, $userLoggedIn);
        $post->submitPost($_POST['post_text'], 'none');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Project x</title>
    <link rel="stylesheet" href="css/style_home.css">
</head>
<body>
<div class="col-sm-3 col-lg-2 col-fixed hidden-xs">
        <a class="btn body_link " href="<?php echo $userLoggedIn;?>"><img class="img-rounded home-profile" src="<?php echo $user['profile_pic'];?>"><br><?php echo $user['first_name'] ?>&nbsp;<?php echo $user['last_name'] ?></a><br>
</div>
<div class="container">
    <div class="row">
        <div class="col-sm-6 col-sm-push-3 col-lg-7 col-lg-push-2 ">
            <div class="col">
                <form class="form-group form-post" action="doc_home.php" method="POST">
                    <textarea name="post_text" class="post_text form-control"></textarea>
                    <input type="submit" class="btn btn-primary pull-right" name="post" id="post_button" value="Post">
                </form><br>
            </div>

            <div class ="posts_area"></div>
             <img id="loading" src="images/icons/loading.gif">

        </div>
        <div class="col-sm-3 col-sm-push-3 col-lg-push-2 col hidden-xs">
        Side column
        </div>
    </div>
</div>
<script>
    var userLoggedIn = '<?php echo $userLoggedIn; ?>';

    $(document).ready(function() {

        $('#loading').show();

        //Original ajax request for loading first posts
        $.ajax({
            url: "includes/handlers/ajax_load_posts.php",
            type: "POST",
            data: "page=1&userLoggedIn=" + userLoggedIn,
            cache:false,

            success: function(data) {
                $('#loading').hide();
                $('.posts_area').html(data);
            }
        });

        $(window).scroll(function() {
            var height = $('.posts_area').height(); //Div containing posts
            var scroll_top = $(this).scrollTop();
            var page = $('.posts_area').find('.nextPage').val();
            var noMorePosts = $('.posts_area').find('.noMorePosts').val();
            if (($(document).height() === $(window).scrollTop() + $(window).height()) && noMorePosts == 'false') {
                $('#loading').show();

                var ajaxReq = $.ajax({
                    url: "includes/handlers/ajax_load_posts.php",
                    type: "POST",
                    data: "page=" + page + "&userLoggedIn=" + userLoggedIn,
                    cache:false,

                    success: function(response) {
                        $('.posts_area').find('.nextPage').remove(); //Removes current .nextpage
                        $('.posts_area').find('.noMorePosts').remove(); //Removes current .nextpage
                        $('#loading').hide();
                        $('.posts_area').append(response);
                    }
                });

            } //End if

            return false;

        }); //End (window).scroll(function())
    });

</script>
</body>
</html>
