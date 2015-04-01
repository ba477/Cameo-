/**
 * Created by BastienCameo on 30/03/2015.
 */
var myList = test.json;

// Builds the HTML Table out of myList.
function buildHtmlTable() {
    var columns = addAllColumnHeaders(myList);

    for (var i = 0 ; i < myList.length ; i++) {
        var row$ = $('<tr/>');
        for (var colIndex = 0 ; colIndex < columns.length ; colIndex++) {
            var cellValue = myList[i][columns[colIndex]];

            if (cellValue == null) { cellValue = ""; }

            row$.append($('<td/>').html(cellValue));
        }
        $("#excelDataTable").append(row$);
    }
}

// Adds a header row to the table and returns the set of columns.
// Need to do union of keys from all records as some records may not contain
// all records
function addAllColumnHeaders(myList)
{
    var columnSet = [];
    var headerTr$ = $('<tr/>');

    for (var i = 0 ; i < myList.length ; i++) {
        var rowHash = myList[i];
        for (var key in rowHash) {
            if ($.inArray(key, columnSet) == -1){
                columnSet.push(key);
                headerTr$.append($('<th/>').html(key));
            }
        }
    }
    $("#excelDataTable").append(headerTr$);

    return columnSet;
}​

var csv = require("./csv.js");
var json = csv.parse('path/to/file'); // Console reads “Parsed Items: #”
Writes the parsed file to a file like this:

csv.write('path/to/file'); // Console reads “Parsed Items: #”
By default, a report is sent to the console (“Parsed Items: #” for .parse(); “File saved” for .write()). You can pass an config object as a second argument with console: false to bypass this behavior. Like so:

    var config = {
        console: false
    }
var json = csv.parse('path/to/file', config);
csv.write('path/to/file', config);