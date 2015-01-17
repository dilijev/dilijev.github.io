if ((typeof String.prototype.format) === "undefined") {
  String.prototype.format = function() {
    var str = new String(this);
    for (var i = 0; i < arguments.length; i++) {
      var value = arguments[i];  // implicit arguments input variable
      var param = "{" + i + "}";
      while (str.indexOf(param) !== -1) {
        str = str.replace(param, value);
      }
    }
    return str;
  }
}

if ((typeof String.prototype.formatMap) === "undefined") {
  String.prototype.formatMap = function(argv) {
    var str = new String(this);
    for (var key in argv) {
      var value = argv[key];
      var param = "{" + key + "}";
      while (str.indexOf(param) !== -1) {
        str = str.replace(param, value);
      }
    }
    return str;
  }
}

/* test
$(document).ready(function () {
  console.log("{0} {1} {0} {2} {0}".format("hello", "world"));
});
*/

/* test
$(document).ready(function () {
  console.log("{hello} {hello} {world} {world}".formatMap({hello: 'world'}));
});
*/
