var mysql = require("mysql2");
let localhost = "localhost";
let yourusername = "root";
let yourpassword = "4u3p7px6";
let sqlResponse;

var con = mysql.createConnection({
  host: localhost,
  user: yourusername,
  password: yourpassword,
  database: "mundo",
});

// INSERT:
// con.connect(function (err) {
//   if (err) throw err;
//   console.log("Connected!");
//   var sql =
//     "INSERT INTO countries (country_name, continente, region, poblacion, capital) VALUES ('Costa Rica', 'America', 'Centroamerica', '5.154.000', 'San Jose');";
//   con.query(sql, function (err, result) {
//     if (err) throw err;
//     console.log("1 record inserted");
//   });
// });

// QUERY: Select * from countries
// con.connect(function (err) {
//   if (err) throw err;
//   console.log("Connected!");

//   con.query("SELECT * FROM countries", function (err, result, fields) {
//     if (err) throw err;
//     console.table(result);
//   });
// });

// CREATE TABLE: create new table
con.connect(function (err) {
  if (err) throw err;
  console.log("Connected!");
  var sql = "CREATE TABLE customers (name VARCHAR(255), address VARCHAR(255))";
  con.query(sql, function (err, result) {
    if (err) throw err;
    console.log("Table created");
  });
});

//INSERT:
con.connect(function (err) {
  if (err) throw err;
  console.log("Connected!");
  var sql =
    "INSERT INTO customers (name, address) VALUES ('Company Inc', 'Highway 37')";
  con.query(sql, function (err, result) {
    if (err) throw err;
    console.log("1 record inserted");
  });
});

// UPDATE:
con.connect(function (err) {
  if (err) throw err;
  var sql =
    "UPDATE customers SET address = 'Canyon 123' WHERE address = 'Valley 345'";
  con.query(sql, function (err, result) {
    if (err) throw err;
    console.log(result.affectedRows + " record(s) updated");
  });
});
