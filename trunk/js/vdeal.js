$('#menu_header a').live('click',function(){
    var menuTile = $('#menu_header a.active').text();
    $('h3#title').text(menuTile);
    
});
