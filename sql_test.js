var mysql = require('mysql');
var http = require('http');

var con = mysql.createConnection({
  host: "localhost",
  user: "root",
  password: "82198219"
});

con.connect(function(err) {
  if (err) throw err;
  console.log("Connected!");
});