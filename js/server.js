
var express = require ("express");
var mysql 	= require ('mysql');

var connection = mysql.createConnection({
  host     : 'localhost',
  user     : 'maadmin',
  password : 'local',
  database : 'mafinder_db'
});

var app = express();


connection.connect(function(err){
	if(!err) {
		console.log("Database connected");
	} else {
		console.log("Database connection error");
	}
});

app.get("/",function(req,res){
connection.query('SELECT * from user LIMIT 2', function(err, rows, fields) {
connection.end();
  if (!err)
    console.log('The solution is: ', rows);
  else
    console.log('Error while performing Query.');
  });
});

app.listen(3000)