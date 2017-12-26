$(document).ready(function(ev){
    $('#custom_carousel .controls a').on('click',function(){
        $('#custom_carousel .controls li.active').removeClass('active');
        $(this).parent('li').addClass('active');
    });
});
$(document).ready(function() {
  $('#media').carousel({
    pause: true,
    interval: false,
  });
});