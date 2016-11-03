'use strict';
//Counter class
function Counter (elements, initial, period) {
  this.amount = initial || 100;
  this.counterElements = elements;
  this.intervalFunc = null;
  this.period = period;
}

Counter.prototype = {
  setCounter: function () {
    this.setNewValue(this.amount);
    this.intervalFunc = setInterval(this.updateCounter.bind(this), this.period);
  },

  updateCounter: function() {
    this.amount -= parseInt(Math.random() * 5 + 0);
    if(this.amount <= 0) {
          this.amount = 0;
          this.counterElements.forEach(function(counter) {
              this.destroyCounter(disableButton, $('#button-'+counter.attr('id')));
          }, this);
    }
    this.setNewValue(this.amount);
  },

  destroyCounter: function (callback, args) {
      clearInterval(this.intervalFunc);
      callback(args);
  },

  setNewValue: function (value) {
      this.counterElements.forEach(function (counter) {
          counter.text(value);
      });
  }
}
