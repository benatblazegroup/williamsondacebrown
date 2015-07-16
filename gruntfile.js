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
    sass: {
      dist: {
        options: {
          style: 'compressed',
          // sourceMap: true,
        },
        files: {
          'assets/css/wdb-styles.min.css': 'assets/src/sass/wdb.scss'
        }
      }
    },
   uglify: {
      my_target: {
        files: {
          'assets/js/wdb.min.js': ['assets/js/wdb.js']
        }
      }
    },
  imagemin: {                          // Task 
    dynamic: {                         // Another target 
      files: [{
        expand: true,                  // Enable dynamic expansion 
        cwd: 'assets/src/img/',                   // Src matches are relative to this path 
        src: ['**/*.{png,jpg,gif,svg}'],   // Actual patterns to match 
        dest: 'assets/img/'                  // Destination path prefix 
      }]
    }
  }
  });

  // Load the plugin that provides the tasks.
  grunt.loadNpmTasks('grunt-sass');
  grunt.loadNpmTasks('grunt-contrib-concat');
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-imagemin');

  // Default task(s).
  grunt.registerTask('default', [
    //'uglify',
    'sass',
    'concat',
    'uglify',
    'imagemin',
    ]);

};
