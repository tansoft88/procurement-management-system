$(document).ready(function(){
// Caching the Room textbox:
var room_number = $('#RoomAllocationRoomNumber');

// Defining a placeholder text:
room_number.defaultText('Room number');

// Using jQuery UI’s autocomplete widget:
room_number.autocomplete({
minLength    : 1,
source        : 'search_room'
});

});

// A custom jQuery method for placeholder text:

$.fn.defaultText = function(value){

var element = this.eq(0);
element.data('defaultText',value);

element.focus(function(){
if(element.val() == value){
element.val('').removeClass('defaultText');
}
}).blur(function(){
if(element.val() == '' || element.val() == value){
element.addClass('defaultText').val(value);
}
});

return element.blur();
}