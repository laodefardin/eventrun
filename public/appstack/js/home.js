var today = new Date();

var countTo = race.valueOf();
$(".timer").countdown(countTo, function(event) {
  $(this).find(".days").text(zeroPad(event.offset.totalDays,2));
  $(this).find(".hours").text(zeroPad(event.offset.hours,2));
  $(this).find(".minutes").text(zeroPad(event.offset.minutes,2));
  $(this).find(".seconds").text(zeroPad(event.offset.seconds,2));
});

function zeroPad(num, places) {
  var zero = places - num.toString().length + 1;
  return Array(+(zero > 0 && zero)).join("0") + num;
}