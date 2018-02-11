var _createClass = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

var circle = '<svg viewBox="0 0 67.4 67.4"><circle class="circle" cx="33.7" cy="33.7" r="20"/></svg>';

var Particle = function () {
  function Particle(svg, coordinates, friction) {
    _classCallCheck(this, Particle);

    this.svg = svg;
    this.steps = $(window).height() / 2;
    this.item = null;
    this.friction = friction;
    this.coordinates = coordinates;
    this.position = this.coordinates.y;
    this.dimensions = this.render();
    this.move();
    this.rotation = Math.random() > 0.5 ? "-" : "+";
    this.scale = 0.4 + Math.random() * 2;
    this.siner = $(window).width() / 2.5 * Math.random();
  }

  _createClass(Particle, [{
    key: "destroy",
    value: function destroy() {
      this.item.remove();
    }
  }, {
    key: "move",
    value: function move() {
      this.position = this.position - this.friction;
      var top = this.position;
      var left = this.coordinates.x + Math.sin(this.position * Math.PI / this.steps) * this.siner;
      this.item.css({
        transform: "translateX(" + left + "px) translateY(" + top + "px) scale(" + this.scale + ") rotate(" + this.rotation + (this.position + this.dimensions.height) + "deg)"
      });

      if (this.position < -this.dimensions.height) {
        this.destroy();
        return false;
      } else {
        return true;
      }
    }
  }, {
    key: "render",
    value: function render() {
      this.item = $(this.svg, {
        css: {
          transform: "translateX(" + this.coordinates.x + "px) translateY(" + this.coordinates.y + "px)"
        }
      });
      $("#particles").append(this.item);
      return {
        width: this.item.width(),
        height: this.item.height()
      };
    }
  }]);

  return Particle;
}();

var isPaused = false;
window.onblur = function () {
  isPaused = true;
}.bind(this);
window.onfocus = function () {
  isPaused = false;
}.bind(this);

//-------------------------------
var particles = [];

setInterval(function () {
  if (!isPaused) {
    particles.push(new Particle(circle, {
      "x": Math.random() * $(window).width(),
      "y": $(window).height() + 100
    }, 1 + Math.random()));
  }
}, 180);

function update() {
  particles = particles.filter(function (p) {
    return p.move();
  });
  requestAnimationFrame(update.bind(this));
}
update();