const header = document.querySelector('header');
const footer = document.querySelector('footer');
const startEffectBtn = document.getElementById('start-effect-btn');
const rainbowSound = document.getElementById('rainbow-sound');
const gifContainer = document.getElementById('gif-container');

startEffectBtn.addEventListener('click', () => {
  header.classList.toggle('rainbow-effect');
  footer.classList.toggle('rainbow-effect');

  //sound
  if (header.classList.contains('rainbow-effect')) {
    rainbowSound.play();
  } else {
    rainbowSound.pause();
    rainbowSound.currentTime = 0; //wiedergabezeit auf anfang
  }

  //gif
  gifContainer.style.display = header.classList.contains('rainbow-effect') ? 'block' : 'none';

  //headerfooter frabe
  if (header.classList.contains('rainbow-effect')) {
    restart();
  } else {
    clearInterval(id);
  }
});

var c;
var ctx;
var id;
var x_off;
var y_off;

var min_dist = 0;
var max_dist = 32;
var d = 150;
var n_stars = 250;

var Point = {
  x: 0,
  y: 0
};

var elements = [];

function initCanvas() {
  c = document.getElementById('myCanvas');
  c.width = window.innerWidth;
  c.height = window.innerHeight;
  ctx = c.getContext('2d');
}

function project2d(point, dist) {
  var p = Object.create(Point);
  p.x = Math.round(d * point.x / dist);
  p.y = Math.round(d * point.y / dist);
  return p;
}

var StarElement = {
  p1: null,
  width: 3,
  dist: 0,

  draw: function () {
    var p2 = project2d(this.p1, this.dist);

    if (p2.x + x_off <= 0 || p2.x + x_off > c.width || p2.y + y_off <= 0 || p2.y + y_off > c.height) {
      this.dist = max_dist;
    } else {
      var percent = 1 - this.dist / max_dist;

      ctx.beginPath();
      ctx.strokeStyle = 'hsl(330, 100%, ' + percent * 100 + '%)'; //farbe gold -> ändern zu pink ctx.strokeStyle = 'hsl(330, 100%, ' + percent * 100 + '%)'

      this.width = percent * 3;
      ctx.rect(p2.x + x_off, p2.y + y_off, this.width, this.width);

      ctx.stroke();
      ctx.closePath();
    }
  }
};

function randomRange(minVal, maxVal) {
  return Math.floor(Math.random() * (maxVal - minVal + 1)) + minVal;
}

function createElements() {
  for (var i = 0; i < n_stars; i++) {
    var elem = Object.create(StarElement);
    elem.p1 = Object.create(Point);
    elem.p1.x = randomRange(-50, 50);
    elem.p1.y = randomRange(-50, 50);
    elem.dist = randomRange(0, max_dist);
    elements.push(elem);
  }
}

function update() {
  ctx.clearRect(0, 0, c.width, c.height);

  elements.forEach(function (elem, i, arr) {
    elem.dist = elem.dist - 0.2;
    elem.draw();
  });
}

function restart() {
  if (!ctx) {
    return; 
  }

  ctx.strokeStyle = 'hsl(50,100%,80%)'; //gelbton = 50
  ctx.clearRect(0, 0, c.width, c.height);
  ctx.lineWidth = 2;
  ctx.moveTo(0, 0);

  x_off = c.width / 2;
  y_off = c.height / 2;

  elements = [];
  createElements();

  
  if (header.classList.contains('rainbow-effect')) {
    id = setInterval(update, 30);
  } else {
    clearInterval(id);
  }
}

window.onload = function () {
  initCanvas();

};