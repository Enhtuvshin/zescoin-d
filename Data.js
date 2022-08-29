var fs = require('fs');
var text = fs.readFileSync("./post.txt").toString('utf-8');

const allCoinDatas = text.split("let ");
// console.log(myArray[1]);
const allCoinDatas2 = allCoinDatas[1].split("birjDatas =");
// console.log(allCoinDatas2[1]);
const allCoinDatasReal = allCoinDatas2[1].split(";");
// console.log(allCoinDatasReal[0]);

const writeStream = fs.createWriteStream('data.json');
writeStream.write(allCoinDatasReal[0]);
var trade;
var complex;
let jsonData = {}
fs.readFile('data.json', 'utf-8', (err, data) => {
    if (err) throw err

    jsonData = JSON.parse(data)
    trade = jsonData['trade']['ZESCMNT'];

    console.log(trade);
    complex = jsonData['complex']['ZESCMNT'];
    console.log(complex);



})