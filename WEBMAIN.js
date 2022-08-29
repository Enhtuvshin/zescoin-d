const request = require('request');
const cheerio = require('cheerio');
const fs = require('fs');

const writeStream = fs.createWriteStream('post.txt');

// Write Headers
writeStream.write(`Title,Link,Date \n`);

request('https://cmc.bibi.mn/?coin=ZESC', (error, response, html) => {
    if (!error && response.statusCode == 200) {
        console.log("title");
        const $ = cheerio.load(html);
        const gg = $('body').html();


        console.log(gg);
        writeStream.write(html)
        $('#tradeTRDMNT').each((i, el) => {
            console.log(el);

            const title = $(el)
                .find('.siteName')
                .text();
            console.log(title);
            writeStream.write(`${title} \n`);
        });

        console.log('Scraping Done...');

    }
});