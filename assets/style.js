$(function() {

  /*** variables ***/

  var backButton = $('.back-btn');
  var readMore = $('.read-more');
  var pushButton = $('#header .button');
  var articles = $('.article');
  var form = $('form');
  var submitButton = form.find('.button');
  var form = $('form');
  var formData = $('#formData');

  /*** smooth scroll ***/

  backButton.on('click', function() {
    $('html, body').animate({
      scrollTop: 0
    }, 'slow');
  });

  /*** changing 'ipsum' color ***/

  pushButton.on('click', function() {
    var btn = $(this);
    btn.attr("disabled", true);
    articles.each(function() {
      var paragraphs = $(this).find('p');
      paragraphs.each(function() {
        var self = $(this);
        if (self.is(':contains("ipsum")')) {
          var fontColor = self.css("color");
          if (self.children().length) {
            self.find('span.changedColor').css('color', 'red');
          } else {
            self.html(self.html().replace('ipsum', '<span class="changedColor">$&</span>'));
            self.css('text-align', 'justify');
          }
          setTimeout(function() {
            self.find('span.changedColor').css('color', fontColor);
            btn.attr("disabled", false);
          }, 3000);
        } else {
          return true;
        };
      });
    });
  });

  /*** readMore ***/

  readMore.each(function() {
    $(this).on('click', function() {
      var additionalText = $(this).parent().find('p.additional-text');
      var moreOrLess = additionalText.is(':visible')? '— read more' : '— read less';
      $(this).text(moreOrLess);
      additionalText.slideToggle('slow');
    });
  });

  /*** form submit***/

  submitButton.on('click', function() {
    $.ajax({
      url: '../post.php',
      type: 'POST',
      data: $('form').serialize()
    }).done(function(response) {
      showData(response);
    }).fail(function(error) {
      console.log("Failure in Ajax request");
    });
  });

  function showData(resp) {
    var returnButton = $('<div class="button">return</div>');
    returnButton.on('click', function() {
      formData.css('display', 'none');
      form.css('display', 'flex');
      $(this).off();
    });
    form.css('display', 'none');
    formData.html(resp).css('display', 'flex');
    formData.append(returnButton);
  }

});
