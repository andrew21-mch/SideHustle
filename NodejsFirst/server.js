const http = require('http');
const fs = require('fs');
const os = require('os')

const hostname = '127.0.0.1';
const port = 5000;

const server = http.createServer((req, res) => {
	let htmlFile = '';
    if(req.url == '/'){
        res.statusCode = 200;    
		htmlFile = 'pages/index.html';
    }
	else if(req.url == '/about'){
        res.statusCode = 200; 
        htmlFile = 'pages/about.html';
    }
    else if(req.url == '/sys'){
        
        res.statusCode = 200;
        let json = JSON.stringify({
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
            Hostname: ${json.hostname},
            Platform: ${json.platform},
            Arhcitecture: ${json.architechure},
            numberOfCPUS: ${json.numberOfCPUs},
            NetworkInterfaces: ${json.networkInterfaces},
            Uptime: ${json.uptime}
            =============================================
            `);
    
            console.log(`System Information:\n
            =============================================
            Hostname: ${json.hostname},
            Platform: ${json.platform},
            Arhcitecture: ${json.architechure},
            numberOfCPUS: ${json.numberOfCPUs.stringify},
            NetworkInterfaces: ${json.stringnify(networkInterfaces)},
            Uptime: ${json.uptime}
            =============================================
            `);


    }
    else{
        res.statusCode = 200; 
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

