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
    mysql.query('SELECT * FROM students WHERE email = ?', [email], function (error, results, fields) {
        if (error) {
            console.log("error ocurred", error);
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
                        "success": "Login sucessfull!!!!!"
                    });
                }
                else {
                    res.send({
                        "code": 204,
                        "success": "Email and password does not match!!!!!"
                    });
                }
            }
            else {
                res.send({
                    "code": 204,
                    "success": "Email does not exits!!!!!"
                });
            }
        }
    });
});


app.post('/admin_login', function (req, res) {
    var username = req.body.username;
    var password = req.body.password;
    mysql.query('SELECT * FROM admin WHERE id = 1001', [username], function (error, results, fields) {
        if (error) {
            console.log("error ocurred", error);
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
                        "success": "Login sucessfull!!!!!"
                    });
                }
                else {
                    res.send({
                        "code": 204,
                        "success": "Username and password does not match!!!!!!"
                    });
                }
            }
            else {
                res.send({
                    "code": 204,
                    "success": "Username does not exits!!!!!"
                });
            }
        }
    });
});


app.post('/register', function (req, res) {
    console.log("req",req.body);
    var users = {
        "en_no": req.body.en_no,
        "name": req.body.name,
        "email": req.body.email,
        "phone_no": req.body.mob_no,
        "password": req.body.password
    }
    mysql.query('INSERT INTO students SET ?', users, function (error, results, fields) {
        if (error) {
            console.log("error ocurred", error);
            res.send({
                "code": 400,
                "failed": "error ocurred"
            })
        } else {
            res.send({
                "code": 200,
                "success": "Registered sucessfully!!!!!"
            });
        }
    });
});



app.listen(port, function () {
    console.log('Server Started at PORT : ' + port)
})