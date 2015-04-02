$.ajax('assets/scripts/getcategories.php').done(function (data){
    var html = '';
    console.log(data);
    for(var i = 0; i < data.length; i++){
        html+=
        '<div class="imageitem" onclick="gotoCategory(\''+data[i].categoryid+'\');">'+
        '<img src="'+data[i].image+'" />'+
        '<p>'+data[i].name+'</p></div>'
    }
    console.log(html);
    $('#content').html(html);
})