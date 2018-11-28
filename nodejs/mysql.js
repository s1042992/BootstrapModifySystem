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

var req=null;
var res=null;

function unhtmlspecialchars(ch) {
    if (ch===null) return '';
    ch = ch.replace("&amp;","&");
    ch = ch.replace("&quot;","\"");
    ch = ch.replace("&#039;","\'");
    ch = ch.replace("&lt;","<");
    ch = ch.replace("&gt;",">");
    return ch;
    }
var func1 = function(req,res,callback){

  connection.connect();

  connection.query('SELECT * FROM `less_list`', function (error, results, fields) {
  if (error) throw error;
  console.log(results);
  });

      connection.query('SELECT * FROM less_list', (err,rows) => {
      if(err) throw err;
      rows.forEach((mkdir)=>{
        mkname3=`${mkdir.project_name}`
        mkname2=`${mkdir.version_name}`
        mkname=`${mkdir.person_name}`
            fs.mkdir(`./src/${mkname}/${mkname3}/${mkname2}`, function (err) {
            if(err)
             {
              temp=1
              console.log(); 
            }
             })
            if(temp=="0")
            {
              fs2.copy('./bootstrap', `./src/${mkname}/${mkname3}/${mkname2}`, function (err) {
               if (err) {
               console.error(err);
               } else {
               console.log("success!!!\n");
               }
                });
            }
            temp=0
        })
    
     if(err) throw err;
      rows.forEach((row)=>{
        lessid=`${row.less_id}`
        projectname=`${row.project_name}`
        versionname=`${row.version_name}`
        carouselode=`${row.less_carousel}`
        personname=`${row.person_name}`
        alertscode=`${row.less_alerts}`
        navbarcode=`${row.less_navbar}`
        dropdownscode=`${row.less_dropdowns}`
        tablescode=`${row.less_tables}`
        var count=10000
        while(count--){
          carouselode=unhtmlspecialchars(carouselode)
          alertscode=unhtmlspecialchars(alertscode)
          navbarcode=unhtmlspecialchars(navbarcode)
          dropdownscode=unhtmlspecialchars(dropdownscode)
          tablescode=unhtmlspecialchars(tablescode)
        }
        
         fs.writeFile(`./src/${personname}/${projectname}/${versionname}/bootstrap/less/carousel.less`,carouselode,function(error){
         console.log(`${versionname}carouse success!\n`)})
         fs.writeFile(`./src/${personname}/${projectname}/${versionname}/bootstrap/less/alerts.less`,alertscode,function(error){
         console.log(`${versionname}alert success!\n`)})
         fs.writeFile(`./src/${personname}/${projectname}/${versionname}/bootstrap/less/navbar.less`,navbarcode,function(error){
         console.log(`${versionname}navbar success!\n`)})
         fs.writeFile(`./src/${personname}/${projectname}/${versionname}/bootstrap/less/dropdowns.less`,dropdownscode,function(error){
         console.log(`${versionname}dropdowns success!\n`)})
         fs.writeFile(`./src/${personname}/${projectname}/${versionname}/bootstrap/less/tables.less`,tablescode,function(error){
         console.log(`${versionname}tables success!\n`)})
         child_process.execFile("change.bat",null,{cwd:`C:/xampp/htdocs/boot/nodejs/src/${personname}/${projectname}/${versionname}`},function(error,stdout,stderr){
            if(error !==null){
                console.log("exec error"+error)
            }
            else console.log("成功")
                   console.log('stdout: ' + stdout);
                   console.log('stderr: ' + stderr);
           })

                  modSqlParams = [`http://120.113.173.173/boot/nodejs/src/${personname}/${projectname}/${versionname}/custom-bootstrap.css`,`${lessid}`];
                  connection.query(modSql,modSqlParams,function (err, result) {
                  if(err){
                  console.log('[UPDATE ERROR] - ',err.message);
                  return;
                   }        
                  console.log('--------------------------UPDATE----------------------------');
                  console.log('UPDATE affectedRows',result.affectedRows);
                  console.log('--------------------------------------------------------\n\n');
                  });

        })

       }); 
      setTimeout(function(){
        console.log('in func1');
        callback(req,res,1);  
       },1000);
      
}

var func2 = function(req,res,callback)
{ 
          {
             connection.end();
          }
 }

func1(req,res,function(){
  func2(req,res,function(){    
      process.exit(0);   
  });  
});