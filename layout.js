// for inputting countries
function getInputValue() {
    var inputVal = document.getElementById("place-input").value;
    if (inputVal == 'india') {
        window.open("india.html", "_self");
    }
    else if (inputVal == 'srilanka') {
        window.open("srilanka.html", "_self");
    }
    else if (inputVal == 'africa') {
        window.open("africa.html", "_self");
    }
    else if (inputVal == 'italy') {
        window.open("italy.html", "_self");
    }
    else if (inputVal == 'dubai') {
        window.open("dubai.html", "_self");
    }
    else if (inputVal == 'switzerland') {
        window.open("switzerland.html", "_self");
    }
    else{
        alert("Currently Unavailable");
    }
}

// for flight dropdown
$('.from a').click(function(){
    $('#From').text($(this).text());
  });

  $('.to a').click(function(){
    $('#To').text($(this).text());
  });

//Book Flight Button
function bookFlight(){
    alert("iTravel support is on our way to you.");
}