jQuery(function($) {

  // Get the image path of ajax-loader.gif
  var ajaxLoaderPath = search.ajax_loader_path;

  // Create a image element with ajaxLoaderPath
  var ajaxLoaderImg = $('<img class="p-search-result__loader" alt="">').attr('src', ajaxLoaderPath);

  $('#js-search__form').submit(function(event) {

    event.preventDefault();

    // Get form
    var $form = $(this);

    // Get submit button
    var $button = $form.find('#js-search__submit');

    // Get scroll distance to #js-search-result
    var scrollDistance = $('#js-search-result').offset().top - parseInt($('#js-search').css('margin-bottom'));
    if ($('#js-header').hasClass('l-header--fixed')) {
      scrollDistance -= $('#js-header').height(); 
    }

    // Display the ajax loader icon
    $('#js-search-result').html(ajaxLoaderImg);

    // Scroll to #js-search-result
    $('body, html').animate({
      scrollTop: scrollDistance + 'px'
    }, 1000);

    // Submit data by AJAX
    $.ajax({
      type: 'POST',
      url: search.ajaxurl,
      timeout: 10000,
      beforeSend: function() {
        // Preventing double form submission
        $button.attr('disabled', true);
      },
      complete: function() {
        // Enable form submission
        $button.attr('disabled', false);
      },
      data: {
        action: 'search_style_list',
        security: search.nonce,
        form_data: $form.serialize()
      }
    }).done(function(data, textStatus, jqXHR) { // Display results
      $('#js-search-result')
        .css({'opacity': 0})
        .html(data.html)
        .fadeTo('slow', 1);
    }).fail(function() {
      $('#js-search-result').html('<p>' + search.error_message + '</p>');
    }); 
  });
});
