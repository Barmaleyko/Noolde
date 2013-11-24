var sys = require("sys");
var PostgresClient = require("PostgresClient").PostgresClient;

var options = {
    hostname: "localhost",
    database: "noodle",
    username: "postgres",
    password: "postgres"
};

var db = new PostgresClient(options);

db.simpleQuery("SELECT * FROM fos_user;",
    function(err, rows, result)
    {
        if (err)
        {
            sys.puts("OH NOES! "+err);
            return;
        }

        sys.puts("Output from "+result);
        sys.puts(sys.inspect(rows));

    }
);
