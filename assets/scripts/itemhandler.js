

function loadCategories(){
    $.ajax('assets/scripts/getcategories.php').done(function (data){
        var html = '';
        if($('#content').html() != ''){
            $('#content').fadeOut(500, function(){
                $('#content').html(getContent());
                $('#content').fadeIn(); 
            });
        } else $('#content').html(getContent());
        
        function getContent(){
            for(var i = 0; i < data.length; i++){
                html+=
                '<div class="imageitem" onclick="setUrlHash(\'category='+data[i].categoryid+'\');">'+
                '<img src="'+data[i].image+'" />'+
                '<p>'+data[i].name+'</p></div>'
            }
            return html;
        }
        
    });
}

function gotoItem(id){
    $.ajax({
      type: "POST",
      url: 'assets/scripts/getitem.php',
      data: {'itemid': id},
      success: function(data){
          $('#content').fadeOut(500, function(){
                var html = '<center><h1>'+data.name+'</h1>';
                
                html += '<img class="imageBig" src="'+data.imagePath+'"></center>';
                
                html += markdown.toHTML(data.description);
                
                html += '</div>';
              $('#content').html(html);
              $('#content').fadeIn(); 
          });
      },
      error: function(one, two, three){
          console.log(three);
      },
      dataType: 'json'
    });
}

function gotoCategory(id){
    $.ajax({
      type: "POST",
      url: 'assets/scripts/getitems.php',
      data: {'categoryid': id},
      success: function(data){
          $('#content').fadeOut(500, function(){
              var html = '';
              for(var i = 0; i < data.length; i++){
                html+=
                '<div class="imageitem" onclick="setUrlHash(\'item='+data[i].id+'\');">'+
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