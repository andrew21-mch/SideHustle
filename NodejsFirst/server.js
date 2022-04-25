const express = require('express');
const os = require('os');
const fs = require('fs');
const server = express();
const path = require('path');
const router = express.Router();
const osin = require('./osinfo.json')

const host = "127.0.0.1";
const port = 5000;
router.get('/',(req,res)=>{
  res.sendFile(path.join(__dirname+'/pages/index.html'));
  //__dirname : It will resolve to your project folder.
});

router.get('/about',(req,res)=>{
  res.sendFile(path.join(__dirname+'/pages/about.html'));
});

router.get('/sys', (req, res)=>{
    res.statusCode = 200;
    let json = JSON.stringify({
        'hostname': os.hostname(),
        'platform': os.platform(),
        'architechure': os.arch(),
        'numberOfCPUs': os.numberOfCPUs,
        'networkInterfaces' : os.networkInterfaces(),
        'uptime': os.uptime(),

    });
    //write into osin
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

        console.log(`System Information:\n
        =============================================
        Hostname: ${osin.hostname},
        Platform: ${osin.platform},
        Arhcitecture: ${osin.architechure},
        numberOfCPUS: ${osin.numberOfCPUs.stringify},
        NetworkInterfaces: ${osin.stringnify(networkInterfaces)},
        Uptime: ${osin.uptime}
        =============================================
        `);
});



//add the router
server.use('/', router);
server.listen(port, host, (res)=>{
    console.log(`Server listerning at http://${host}:${port}`);
});
