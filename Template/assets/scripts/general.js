var hash = location.hash;
if(hash==''){
    loadCategories();
}

console.log(hash);

if(hash.match( /^#category/)!=null){
    var id = hash.match(/^#category=[a-z0-9]+/)[0].substr(10);
    gotoCategory(id);
}
    


$(window).hashchange( function(){
    var hash = location.hash;
    if(hash.match( /^#category/)!=null){
        var id = hash.match(/^#category=[a-z0-9]+/)[0].substr(10);
        gotoCategory(id);
    }
    
    if(hash==''){
        loadCategories();
    }
});

function setUrlHash(hash){
    window.location.hash = hash;
}