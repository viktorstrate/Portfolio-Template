var hash = location.hash;
if(hash==''){
    loadCategories();
}

console.log(hash);

if(hash.match( /^#category/)!=null){
    var id = hash.match(/^#category=[a-z0-9]+/)[0].substr(10);
    gotoCategory(id);
}

if(hash.match( /^#item/)!=null){
    var id = hash.match(/^#item=[a-z0-9]+/)[0].substr(6);
    gotoItem(id);
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
    
    if(hash.match( /^#item/)!=null){
        var id = hash.match(/^#item=[a-z0-9]+/)[0].substr(6);
        console.log(id);
        gotoItem(id);
    }
});

function setUrlHash(hash){
    window.location.hash = hash;
}