<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
    <!-- Le styles -->  
    <link href="/assets/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" /> -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.js"></script>
    <!-- <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script> -->
    <!-- <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script> -->
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pigmong</title>
    <style>
    * { margin: 0px; padding: 0px; }
    li{
        float:left;
        margin-left:3.7rem;
    }
    #title{
        margin-left:13.5rem;
    }
    .FixedLayoutTop { width: 100%; }
    .FixedLayoutfunction { position: fixed; top: 0px; }
    .FixedLayoutContent { margin-bottom:50px; } /* FixedLayoutBottom 의 영역만큼 여백을 추가 */
    .FixedLayoutBottom { position: fixed; bottom: 0px; width: 100%; }


    .css_layout_logo {padding:0; margin:0;margin-top:-5px;margin-bottom:1v px; height:30px; line-height:30px; text-align:center }
    .css_layout_menu {
        text-align: center;
        background-color: yellow;
        height:80px;
        line-height:80px;
    }
    .css_contents { }
    .css_layout_Bottom {
        text-align: center;
        /* background-color:#333; */
        /* color:#fff; */
        height:50px;
        line-height:50px;
    }
    </style>
    <script>
    $( document ).ready( function() {
        var FixedLayoutOffset = $( '.FixedLayoutTop' ).offset();
        $( window ).scroll( function() {
        if ( $( document ).scrollTop() > FixedLayoutOffset.top ) {
            $( '.FixedLayoutTop' ).addClass( 'FixedLayoutfunction' );
        }
        else {
            $( '.FixedLayoutTop' ).removeClass( 'FixedLayoutfunction' );
        }
        });
    });

    // 스크롤 위치를 퍼센트로 나타내기
    $(window).scroll(function(){
        scrollPercent = ($(window).scrollTop()/ ($(document).height()-$(window).height())) * 100;
    });


    $(window).scroll(function(){
        // Change this to target a different percentage
        var targetPercentage = 70;
        //Change this to the ID of the content you are trying to show.
        var targetID = "#navigation";
        //Window Math
        var scrollTo = $(window).scrollTop(),
            docHeight = $(document).height(),
            windowHeight = $(window).height();
            scrollPercent = (scrollTo / (docHeight-windowHeight)) * 100;
        //스크롤 표시
        $('#percentageCounter h1').text(scrollPercent+"%");
        //네비바 보이기
        if(scrollPercent > targetPercentage) {
            $(targetID).css({ top: '0' });
        } else {
            $(targetID).css({ top: '-'+$(targetID).height+'px' });
        }
    }).trigger('scroll');
    </script>
</head>
<body>
    <!-- <nav class="navbar navbar-inverse navbar-fixed">
        <div class="container-fluid">
            <div class="navbar-header css_layout_logo">
                <a  id="title" href="#" class="navbar-brand">Pigmong</a>
            </div>
            <div class="FixedLayoutTop css_layout_menu">
                <ul class="nav navbar-nav">
                    <li class=""><a href="/main/needs">Needs</a></li>
                    <li class=""><a href="/main/missions">Missions</a></li> 
                    <li class=""><a href="/main/saving">Saving</a></li>
                </ul>
            </div>
        </div>
    </nav> -->

    <script>
    // $("li").click(function(){
    //     $("li").removeClass("active");
    //     $(this).addClass("active");
    // });
    // $( document ).ready( function() {
    //     var jbOffset = $( '.jbMenu' ).offset();
    //     $( window ).scroll( function() {
    //       if ( $( document ).scrollTop() > jbOffset.top ) {
    //         $( '.jbMenu' ).addClass( 'jbFixed' );
    //       }
    //       else {
    //         $( '.jbMenu' ).removeClass( 'jbFixed' );
    //       }
    //     });
    //   } );
    </script>

    
    