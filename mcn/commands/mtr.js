var mtr = require("mtr").Mtr;
var mtrTest = new mtr("8.8.8.8");

mtrTest.traceroute();

mtrTest.on("hop", function (hop) {
  console.log(hop);
});

mtrTest.on("error", function (err) {
  console.error(err);
});
