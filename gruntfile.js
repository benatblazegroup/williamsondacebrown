module.exports = function(grunt) {

// Project configuration.
grunt.initConfig({
  pkg: grunt.file.readJSON('package.json'),
    concat: {
      options: {
        separator: ';',
        },
        dist: {
          src: ['assets/src/js/bootstrap/*.js','assets/src/js/wdb.js'],
          dest: 'assets/js/wdb.js',
        },
    },
    uglify: {
     my_target: {
       files: {
         'assets/js/wdb.min.js': ['assets/js/wdb.js']
       }
     }
    },
    sass: {
      dist: {
         options: {
           style: 'compressed',
         },
         files: {
           'assets/css/wdb-styles.css': 'assets/src/sass/wdb.scss'
         }
      }
    },
    cssmin: {
      target: {
        files: {
         'assets/css/wdb-styles.min.css': ['assets/css/wdb-styles.css']
        }
     }
    },
    imagemin: {                          // Task 
      dynamic: {                         // Another target 
        files: [{
          expand: true,                  // Enable dynamic expansion 
          cwd: 'assets/src/img/',                   // Src matches are relative  o this path 
          src: ['**/*.{png,jpg,gif,svg}'],   // Actual patterns to match 
          dest: 'assets/img/'                  // Destination path prefix 
        }]
      }
    },
});

  // Load the plugin that provides the tasks.
  grunt.loadNpmTasks('grunt-contrib-concat');
  grunt.loadNpmTasks('grunt-contrib-uglify');
  //grunt.loadNpmTasks('grunt-contrib-imagemin');
  grunt.loadNpmTasks('grunt-sass');
  grunt.loadNpmTasks('grunt-contrib-cssmin');

  // Default task(s).
  grunt.registerTask('default', [
    'concat',
    'uglify',
    'sass',
    //'imagemin',
    'cssmin',
    ]);

};
