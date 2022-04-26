const http = require('http');
const fs = require('fs');
const os = require('os')
const osin = require('./osinfo.json')
const hostname = '127.0.0.1';
const port = 5000;

const server = http.createServer((req, res) => {
	let htmlFile = '';
    if(req.url == '/')
			htmlFile = 'pages/index.html';
	else if(req.url == '/about'){
        htmlFile = 'pages/about.html';
    }
    else if(req.url == '/sys'){
        
        res.statusCode = 200;
        var json = JSON.stringify({
        'hostname': os.hostname(),
        'platform': os.platform(),
        'architechure': os.arch(),
        'numberOfCPUs': os.numberOfCPUs,
        'networkInterfaces' : os.networkInterfaces(),
        'uptime': os.uptime(),

    });
        fs.writeFile('./osinfo.json', json, (err)=>{
            if(err) throw err;
            console.log('The file has been saved!');
        });
        
            res.end(`System Information:\n
            =============================================
            Hostname: ${osin.hostname},
            Platform: ${osin.platform},
            Arhcitecture: ${osin.architechure},
            numberOfCPUS: ${osin.numberOfCPUs},
            NetworkInterfaces: ${osin.networkInterfaces},
            Uptime: ${osin.uptime}
            =============================================
            `);
    
            console.log(`
            =============================================
            Hostname: ${osin.hostname},
            Platform: ${osin.platform},
            Arhcitecture: ${osin.architechure},
            numberOfCPUS: ${osin.numberOfCPUs},
            NetworkInterfaces: ${osin.networkInterfaces},
            Uptime: ${osin.uptime}
            ==============================================
            `);


    }
    else{
        htmlFile = 'pages/404.html';
    }
			

	if(htmlFile)
		render(res, htmlFile);
});

function render(res, htmlFile) {
  	fs.stat(`./${htmlFile}`, (err, stats) => {
		res.statusCode = 200;
		res.setHeader('Content-Type', 'text/html');
  		if(stats) {
		  	fs.createReadStream(htmlFile).pipe(res);
  		} else {
  			res.statusCode = 404;
            render(res, htmlFile)
  			res.end();
  		}
  	});
}

server.listen(port, hostname, () => {
  console.log(`Server running at http://${hostname}:${port}/`);
});

