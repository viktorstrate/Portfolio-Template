loadCategories();

function loadCategories(){
    console.log("Was here");
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
    });
}

function gotoCategory(id){
    setUrlHash('category='+id);
    $.ajax({
      type: "POST",
      url: 'assets/scripts/getitems.php',
      data: {'categoryid': id},
      success: function(data){
          console.log(data);
          $('#content').fadeOut(500, function(){
              var html = '';
              for(var i = 0; i < data.length; i++){
                html+=
                '<div class="imageitem" onclick="gotoItem(\''+data[i].id+'\');">'+
                '<img src="'+data[i].image+'" />'+
                '<p>'+data[i].name+'</p></div>'
              }
              $('#content').html(html);
              $('#content').fadeIn(); 
          });
      },
      dataType: 'json'
    });
}