'use strict';
const express = require('express');
const app = express();
var bodyParser = require('body-parser');
const port = 700;
var mysql = require('mysql');
var mysql = mysql.createConnection({
    host: "localhost",
    user: "root",
    password: "",
    database: "smartshare"
});

app.use(bodyParser.urlencoded({ extended: true }));
app.use(express.json());

mysql.connect(function (err) {
    if (!err) {
        console.log("Database is connected.....");
    } else {
        console.log("Error connecting database.....");
    }
});

app.post('/login', function (req, res) {
    var email = req.body.email;
    var password = req.body.password;
    mysql.query('SELECT * FROM students', [email], function (error, results, fields) {
        if (error) {
            console.log("error ocurred",error);
            res.send({
                "code": 400,
                "failed": "error ocurred"
            })
        } else {
            console.log('The solution is: ', results);
            if (results.length > 0) {
                if (results[0].password == password) {
                    res.send({
                        "code": 200,
                        "success": "login sucessfull"
                    });
                }
                else {
                    res.send({
                        "code": 204,
                        "success": "Email and password does not match"
                    });
                }
            }
            else {
                res.send({
                    "code": 204,
                    "success": "Email does not exits"
                });
            }
        }
    });
});



app.listen(port, function () {
    console.log('Server Started at PORT : ' + port)
})