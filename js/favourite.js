function mouseOver1(button){
    button.style.backgroundColor="#616161";
    button.style.color="white"
               
}
    
function mouseOut1(button){
    button.style.backgroundColor="white";
    button.style.color="#616161"
        
}

function mouseOver2(button){
    button.style.backgroundColor="lightgreen";
    button.style.color="white"
               
}

function mouseOut2(button){
    button.style.backgroundColor="white";
    button.style.color="lightgreen"
        
}


function show_delete_btn() {
    var x = document.getElementsByClassName('delete_button')
    var i;
    for (i = 0; i < x.length; i++) {
    x[i].style.visibility="visible";
    }
    document.getElementById('save').style.visibility="visible";
}


function hide_delete_btn() {
    var x = document.getElementsByClassName('delete_button')
    var i;
    for (i = 0; i < x.length; i++) {
    x[i].style.visibility="hidden";
    }
    document.getElementById('save').style.visibility="hidden";
}

$(document).ready(function(){
    $("#close1").click(function(){
      $("#library1").remove();
    });
});

$(document).ready(function(){
    $("#close2").click(function(){
      $("#library2").remove();
    });
});

$(document).ready(function(){
    $("#close3").click(function(){
      $("#library3").remove();
    });
});

$(document).ready(function(){
    $("#close4").click(function(){
      $("#library4").remove();
    });
});

$(document).ready(function(){
    $("#close5").click(function(){
      $("#library5").remove();
    });
});
