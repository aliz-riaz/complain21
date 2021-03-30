



function tutor_rangeSlider() {
   $( "#slider-range" ).slider({
      range: true,
      min: 0,
      max: 500,
      values: [ 75, 300 ],
      slide: function( event, ui ) {
        $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
      }
    });
    $( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) + " - $" + $( "#slider-range" ).slider( "values", 1 ) );
}


/* ========= Click On dropdown HOme Filter ==========*/
$(document).on('click', '#price_dropdown', function () {
  tutor_rangeSlider();
})


/* ==========
    Calendar JS
  ===========*/


  $('.calendar_pick').markyourcalendar({
    isMultiple:true,

    availability: [
      ['1:00'],
      ['2:00']
      
    ],
    startDate: new Date("2021-01-25"),
    onClick: function(ev, data) {
      // data is a list of datetimes
      var d = data[0].split(' ')[0];
      var t = data[0].split(' ')[1];
      $('#selected-date').html(d);
      $('#selected-time').html(t);
    }
  /*  onClickNavigator: function(ev, instance) {
      var arr = []
      var rn = Math.floor(Math.random() * 10) % 7;
      instance.setAvailability(arr[rn]);
    }*/
  });


/*
  ==============
  Sticky Header
  =============
*/
function FixedHeader() {
    var e = document.getElementById("header"),
        r = e.offsetTop;
    window.pageYOffset > r ? e.classList.add("header-sticky") : e.classList.remove("header-sticky")
}
window.onscroll = function() {
    FixedHeader()
}