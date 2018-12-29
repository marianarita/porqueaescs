

  $(window).on('scroll', function() {
    var document_height = $(document).height();
    var window_height = $(window).height();
    var window_scroll_top = $(window).scrollTop();
    var percent_scrolled = window_scroll_top / (document_height - window_height) * 100;
	//console.log(percent_scrolled)
	$('#progress-bar').css({
		'height': percent_scrolled + '%'
	});

  });

  $('.input').on('click', function() {
    var name = $('.name-input').val();
    $('.name').text(name);
    var $this = $(this).parent();
    $('html, body').animate({
      scrollTop: $($this).next().offset().top}, 400, function(){
        $($this).next().animate({
          opacity: 1,
        })
        $($this).animate({
          opacity: .5,
        })
      });
    
  });

  $('#form input').on('change', function() {
    var curso = $('input[name=Q3]:checked', '#form').attr('data-curso'); 
    $('.curso').text(curso);

 });
  

  /*
  if (!$("input[name='name']").is(':checked')) {
   alert('Nothing is checked!');
}
else {
   alert('One of the radio buttons is checked!');
}
*/

