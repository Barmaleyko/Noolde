var sys = require("sys");
var PostgresClient = require("PostgresClient").PostgresClient;

var options =
{
    hostname: "localhost",
    database: "noodle",
    username: "postgres",
    password: "postgres"
};

function getRows(done)
{
    var db = new PostgresClient(options);
    db.simpleQuery("SELECT * from gameslist;", done);
}

function getResponse(our)
{
    getRows(
        function (err, rows, result)
        {
            if (err)
            {
                sys.puts("OH NOES! " + err);
                return;
            }
            our(rows);
        }
    );
}

exports.getResponse = getResponse;
