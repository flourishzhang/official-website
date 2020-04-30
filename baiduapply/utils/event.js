var events = []

module.exports = {
  on: function (type, callback) {
    events.push({
      type: type,
      callback: callback
    })
  },
  off: function (type, callback) {
    for (let i = 0, len = events.length; i < len; i++) {
      if (events[i].type === type && events[i].callback === callback) {
        events.splice(i, 1)
        len--
      }
    }
  },
  emit: function (type, ...param) {
    for (let i = 0, len = events.length; i < len; i++) {
      events[i].callback(...param)
    }
  }
}