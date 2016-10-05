/**
 * shows flash messages for 'timeoutSec' seconds
 */
$(document).ready(function() {
  var timeoutSec = 7;
  $("#flash-messages-wrap")
    .fadeIn('slow')
    .animate({opacity: '+=0'}, timeoutSec * 1000)
    .fadeOut('slow');
});

function update_notice() {
  $.ajax({
    url: '/ajax/notice.php',
    success: function(data) {
      if (data.length > 0) {
        display_notice(data);
      } else {
        remove_notice();
      }
    }
  });
}

function display_notice(notice) {
  if ($('#flash-messages-service').length == 0) {
    $('#flash-messages-close').append('<div id="flash-messages-service"></div>');
    $('#flash-messages-service').hide();
    $('#flash-messages-service').text(notice);
    $('#flash-messages-service').fadeIn('slow');
  }
  $('#flash-messages-service').text(notice);
}

function remove_notice() {
  if ($('#flash-messages-service').length > 0)
    $('#flash-messages-service').remove();
}

$(document).ready(function() {
  update_notice();
  setInterval(update_notice, 10000);
});
