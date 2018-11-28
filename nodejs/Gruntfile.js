module.exports = (grunt) => {
	 grunt.initConfig({
	  execute: {
	   target: {
	    src: ['mysql.js']
	     }
	    },
	    watch: {
	     scripts: {
	      files: ['mysql.js'],
	       tasks: ['execute'], 
	     }, 
	  } 
	});
	grunt.loadNpmTasks('grunt-contrib-watch');
 	grunt.loadNpmTasks('grunt-execute'); };