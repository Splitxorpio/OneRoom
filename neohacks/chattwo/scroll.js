

// function scrolltotop(){
//     var objDiv = document.getElementById("scroll");
//     objDiv.scrollTop = objDiv.scrollHeight;
// }
function scrollWin() {
    var objDiv = document.getElementById("scroll");
    window.scrollBy(0, 0);
    
  }
// window.onload = scrolltotop();



// window.onbeforeunload = function () {
//     window.scrollTo(0, 0);
// }; 
// var objDiv = document.getElementById("scroll");
// objDiv.scrollTop = objDiv.scrollHeight;

// var myElement = document.getElementById('scroll');
// var topPos = myElement.offsetTop;
// document.getElementById('scrolling_div').scrollTop = topPos;

function timedRefresh(timeoutPeriod) {
	setTimeout("location.reload(true);",timeoutPeriod);
}

window.onload = timedRefresh(5000);