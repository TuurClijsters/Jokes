// var bridge = document.getElementById("bridge"),
// bridgeCanvas = bridge.getContext('2d'),
// brushRadius = (bridge.width / 100) * 5,
// img = new Image();
// img.src = '/img/black2.jpg';
// img.src = '/img/chalkboard-slider.jpg';

var c = document.getElementById("bridge");
var ctx = c.getContext("2d");
c.width = 1000;
c.height = 1000;
ctx.fillStyle = "#F74E10";
ctx.fillRect(0, 0, 1000, 1000);

var brushRadius = (bridge.width / 100) * 5


if (brushRadius < 50) { brushRadius = 50 }


function detectLeftButton(event) {
    if ('buttons' in event) {
        return event.buttons === 1;
    } else if ('which' in event) {
        return event.which === 1;
    } else {
        return event.button === 1;
    }
}

function getBrushPos(xRef, yRef) {
	var bridgeRect = c.getBoundingClientRect();
    return {
	  x: Math.floor((xRef-bridgeRect.left)/(bridgeRect.right-bridgeRect.left)*bridge.width),
	  y: Math.floor((yRef-bridgeRect.top)/(bridgeRect.bottom-bridgeRect.top)*bridge.height)
    };
}
      
function drawDot(mouseX,mouseY){
    ctx.beginPath();
    // ctx.arc(mouseX, mouseY, 50, 0, 2 * Math.PI);
    ctx.arc(mouseX, mouseY, 100, 0, 2*Math.PI, true);
    ctx.fillStyle = '#000';
    ctx.globalCompositeOperation = "destination-out";
    ctx.fill();
}

c.addEventListener("mousemove", function(e) {
	var brushPos = getBrushPos(e.clientX, e.clientY);
  var leftBut = detectLeftButton(e);
  if (leftBut == 1) {
		drawDot(brushPos.x, brushPos.y);
  }
}, false);

c.addEventListener("touchmove", function(e) {
    e.preventDefault();
    var touch = e.targetTouches[0];
    if (touch) {
    var brushPos = getBrushPos(touch.pageX, touch.pageY);
        drawDot(brushPos.x, brushPos.y);
    }
}, false);