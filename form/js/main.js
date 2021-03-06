/*
* 
* PORQUE A ESCS
* FORMULARIO // JS
* Trabalho para a Cadeira de Laboratorio de Aplicacoes Interativas 
* Feito por:
* Edite Fernandes, no 9939 
* Filipa Ribeiro, no 9987 
* Mariana Rita, no 9972 
* 
*/



/*=============================================
=                PROGRESS BAR                =
=============================================*/

$(window).on('scroll', function () {
  var document_height = $(document).height();
  var window_height = $(window).height();
  var window_scroll_top = $(window).scrollTop();
  var percent_scrolled = window_scroll_top / (document_height - window_height) * 100;
  $('#progress-bar').css({
    'height': percent_scrolled + '%'
  });
});

/*=====  End of PROGRESS BAR  ======*/

/*=============================================
=        NAV ENTRE FORM SECTIONS  E NOME      =
=============================================*/

$('.next').on('click', function () {
  /* NAV ENTRE FORM SECTIONS */
  var $this = $(this).parent();
  //console.log($($this).parent());
  $('html, body').animate({
    scrollTop: $($this).next().offset().top
  }, 400, function () {
    ($($this).next().animate({
      opacity: 1,
    }))
  });
});


/*$(function () {
  $(document).keyup(function (e) {
     alert(e.keyCode);
  });
});*/

$('input').keydown(function (e) {
  if (e.keyCode === 13 || e.keyCode === 9 ) {
    e.preventDefault();
    $(this).parent().find('.next').click();
    var name = $('.name-input').val();
    $('.name').text(name);

  }
});

/*=====  End of NAV ENTRE FORM SECTIONS  ======*/

/*=============================================
=                 NOME CURSO                  =
=============================================*/

/* PERSONALIZAÇÃO DO FORM PELOS INPUTS */
$('#form input').on('change', function () {
  /* TIRAR NOME DO CURSO PELO DATA ATTRIBUTE PARA COLOCAR NA QUESTAO 5 */
  var curso = $('input[name=Q3]:checked', '#form').attr('data-curso');
  $('.curso').text(curso);

  /* TIRAR NOME USER PELO TEXT INPUT PARA USAR AO LONGO DO FORM */
  var name = $('.name-input').val();
  if( !$('.name-input').val() ) {
    $('.name').text('_ _ _ _ _ _ _ _ _ _ ');} else{
      $('.name').text(name);

    }

});

/*=====  End of TEXT INPUTS  ======*/

/*=============================================
=               REVER FORMULARIO              =
=============================================*/

$('.button--cta').on('click', function () {
  $('#home').fadeOut('600', function () {
    $('.form-wrapper').fadeIn(600);
  });
})

$('.mobile-button--cta').on('click', function () {
  $('.mobile-wrapper').fadeOut('600', function () {
    $('.form-wrapper').fadeIn(600);
  });
})
$('.review').on('click', function () {
  $('body, html').css({'overflow':'visible' }),
    $('html, body').animate({
      scrollTop: 0,
    }, function () {
      $('.form-section').animate({
        opacity: 1,
      });
      $('#progress-bar').fadeOut(300);
      $('#name').fadeOut(300);
      $('.filler').fadeOut(300);
    });
});

/*=====  End of REVER FORMULARIO  ======*/

/*=============================================
=            CAIXAS DE SELECCAO            =
=============================================*/

/* TRUNCAR CAIXAS DE SELECAO QUANDO A OPCAO "NENHUMA" E SELECCIONDA */

/* Questao 4: Porque escolheste a ESCS */
$("input[name~='Q4[]']").on('change', function () {
  if ($('#Q4 .disable').prop('checked') == true) {
    //console.log('a')
    $('#Q4 .disabled').prop('disabled', true);
  } else {
    if ($('#Q4 .disable').prop('checked') == false) {
      //console.log('b')
      $('#Q4 .disabled').prop('disabled', false);
    }
  }
})

/* Questao 5: Porque escolheste o curso */
$("input[name~='Q5[]']").on('change', function () {
  if ($('#Q5 .disable').prop('checked') == true) {
    //console.log('a')
    $('#Q5 .disabled').prop('disabled', true);
  } else {
    if ($('#Q5 .disable').prop('checked') == false) {
      //console.log('b')
      $('#Q5 .disabled').prop('disabled', false);
    }
  }
})

/* TRUNCAR CAIXAS DE SELECAO QUANDO ESTAS PASSAM DAS 3 */

/* Questao 5: 3 Qualidades da ESCS */
$("input[name~='Q6[]']").change(function () {
  var nrMax = 3;
  var nrAtual = $("input[name~='Q6[]']:checked").length;
  if (nrAtual >= nrMax) {
    $("input[name~='Q6[]']").not(':checked').prop('disabled', true);
  } else {
    if (nrAtual < nrMax) {
      $("input[name~='Q6[]']").not(':checked').prop('disabled', false);
    }
  }
});

/*=====  End of CAIXAS DE SELECCAO  ======*/
