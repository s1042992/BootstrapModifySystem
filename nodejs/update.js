var mysql = require('mysql');
var fs = require('fs');
var fs2 = require('fs-extra')
var nodeCmd = require('node-cmd');
var child_process=require("child_process")
var step=require("step")

var connection = mysql.createConnection({
  host: 'localhost',
  user: 'root',
  password: '',
  database: 'member' 
});

var temp=0
var arr=[]
var lessid
var alertscode
var personname
var carouselode
var projectname
var modSql = 'UPDATE css_list SET css_url = ? WHERE css_id = ?';
var modSqlParams


  connection.connect();
      connection.query('SELECT * FROM less_list', (err,rows) => {
     if(err) throw err;
      rows.forEach((row)=>{
        personname=`${row.person_name}`
        lessid=`${row.less_id}`
        projectname=`${row.project_name}`
        versionname=`${row.version_name}`
            modSqlParams = [`http://120.113.173.173/boot/nodejs/src/${personname}/${projectname}/${versionname}/custom-bootstrap.css`,`${lessid}`];
            connection.query(modSql,modSqlParams,function (err, result) {
            if(err){
            console.log('[UPDATE ERROR] - ',err.message);
            return;
             }        
            console.log('--------------------------UPDATE----------------------------');
            console.log(`update ${projectname}`);
            console.log('--------------------------------------------------------\n\n');
            });

        })

       }); 





