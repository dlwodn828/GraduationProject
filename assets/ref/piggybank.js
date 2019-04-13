function AddComma(data_value) {
    return Number(data_value).toLocaleString('en');
  }
function savemoney(){
    
    var b = false;
    if(true){
        swal("성공");
        b=true;
    }
    if(b){
        return true;
    }else{
        return false;
    }
}
$(document).ready(function() {
    $('#pg1').hide();
    $('#coincover').hide();
    $('.blush1').hide();
    $('.blush2').hide();
    var pm = $('#pinmoney1').val();
    
    // $('#coin').playKeyframe(
    //     'glow 1s alternate infinite'
    // );
    // $('#coin').playKeyframe({
    //     name: 'glow', // name of the keyframe you want to bind to the selected element
    //     duration: '1s', // [optional, default: 0, in ms] how long you want it to last in milliseconds
    //     timingFunction: 'alternate', // [optional, default: ease] specifies the speed curve of the animation
    //     delay: '0s', //[optional, default: 0s]  how long you want to wait before the animation starts
    //     iterationCount: 'infinite', //[optional, default:1]  how many times you want the animation to repeat
    //     // direction: 'normal', //[optional, default: 'normal']  which direction you want the frames to flow
    //     // fillMode: 'forwards', //[optional, default: 'forward']  how to apply the styles outside the animation time, default value is forwards
    //     // complete: function(){} //[optional] Function fired after the animation is complete. If repeat is infinite, the function will be fired every time the animation is restarted.
    // });
    
    // $.keyframe.define({
    //     name: 'glow',
    //     from: {
    //         'box-shadow': '0 0 10px #FFFF94'
    //     },
    //     to: {
    //         'box-shadow': '0 0 10px 10px #FFFF94'
    //     }
    // });


    $('#coin').click(function() {
        
        if($('#coinprice').html()=='0'){
            swal('저금할 돈이 없습니다!');
            return false;
        }else{
            var pm = $('#pinmoney1').val();
            $(this).addClass('active');
            console.log(pm);
            $('#coincover').show();
            // $('h1').fadeOut('slow');
            
            $(this).animate({
            bottom: "173px"
            }, 1000);
            
            $('.mouth').addClass('smile');
            
            setTimeout(function() {
            $('#blush1').fadeIn('slow');
            }, 1000);
            setTimeout(function() {
            $('#blush2').fadeIn('slow');
            }, 1000);
            
            setTimeout(function() {
            $('#pg1').show();
            }, 1100);
            
            setTimeout(function() {
            var a= 10;
            // alert(pm+"저금이 완료되었어요");
            
            swal(pm+"원이 저금되었어요!");
            $('#savingMoney').submit();
            
                
            
            
            }, 1300);
        }
        // event.preventDefault();

        
        
      
    });
    
  });
