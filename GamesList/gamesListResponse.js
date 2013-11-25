var io = require('socket.io').listen(55550);
var getGames = require('./gamesListServer');
var jsonHtmlTable = require('./JSONtoHTABLE.js');

//JSON to HTML Table params
var nestedTable = [{
    key1: "val1",
    key2: "val2",
    key3: {
        tableId: "tblIdNested1",
        tableClassName: "clsNested",
        linkText: "Download",
        data: [{
            subkey1: "subval1",
            subkey2: "subval2",
            subkey3: "subval3"
        }]
    }
}];
//END JSON to HTML Table params

io.set('log level', 1);

io.sockets.on('connection',
    function (socket)
    {
        getGames.getResponse(
            function (rows)
            {
                socket.json.send(jsonHtmlTable.ConvertJsonToTable(rows, nestedTable, null, 'Download'));
            }
        );
    }
);
