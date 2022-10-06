const mysql = require('mysql');
//import mysql from 'mysql';
    console.log(mysql)

    const connection = mysql.createConnection({
        host: 'localhost',
        user: 'root',
        password: 'stores33',
        database: 'cs_club'
    });
    console.log("working")


    function loaded() {
      alert('Page is loaded');
    }

    connection.connect((error) => {
        if(error){
            console.log('Error connecting to the MySQL Database');
            return;
        }
        console.log('Connection established sucessfully');
    });
    /*var sql = "CREATE TABLE news (date DATE, title VARCHAR(50), bodytext VARCHAR(500), TIME)";
        connection.query(sql, function (err, result) {
                if (err) throw err;
                console.log("news created");
            });*/
    //get_last_event();
    //get_last_news();
    get_news();
    function get_last_event(){
        var sql = "SELECT * FROM  events  ORDER BY date, time desc LIMIT 1";
        connection.query(sql, function (err, result) {
                //if (err) throw err;
                console.log("last event done");
                console.log(result[0].date.substr(0,8))
                return result;
            });
    }

    function get_last_news(){
        connection.query("SELECT * FROM  news  ORDER BY date desc LIMIT 1", function (err, result) {
                //if (err) throw err;
                console.log("you got last news");
                console.log(new Date(result.date))
                return result;
            });
    }

    function get_upcoming_events(){
        var sql = "SELECT * FROM  events WHERE date > CURDATE() ORDER BY date, time";
        connection.query(sql, function (err, result) {
            if (err) throw err;
            console.log("upcoming events done");
            return result;
        });
    }

    function get_past_events(){
        var sql = "SELECT * FROM  events WHERE date < CURDATE() ORDER BY date, time";
        connection.query(sql, function (err, result) {
            if (err) throw err;
            console.log("past events done");
            return result;
        });
    }
    function get_news(){
        var sql = "SELECT * FROM news ORDER BY date";
        connection.query(sql, function (err, result) {
            if (err) throw err;
            console.log(result)
            console.log("news done");
            return result;
        });
    }
/*  events table
    +------------+---------------+----------+----------------------------------+
    | date       | title         | time     | bodytext                         |
    +------------+---------------+----------+----------------------------------+
    | 2008-11-11 | title event 1 | 08:00:00 | sdgreh et he5 gerh 5ehwesrg te4r |
    +------------+---------------+----------+----------------------------------+ */

/*  news table
    +------------+--------------+-------------------------------------------------------+
    | date       | title        | bodytext                                              |
    +------------+--------------+-------------------------------------------------------+
    | 2018-10-02 | title news 1 | sdgreh et he5r re erg regre gergre gerh 5ehwesrg te4r |
    +------------+--------------+-------------------------------------------------------+ */
