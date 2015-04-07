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
  // uglify: {
  //   my_target: {
  //   files: {
  //       '/assets/js/wdb.min.js': ['/assets/js/wdb.js']
  //     }
  //   }
  // },
    sass: {
      dist: {
        options: {
          style: 'compressed',
        },
        files: {
          'assets/css/wdb-styles.min.css': 'assets/src/sass/wdb.scss'
        }
      }
    }
  });

  // Load the plugin that provides the tasks.
  // grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-sass');
  grunt.loadNpmTasks('grunt-autoprefixer');
  grunt.loadNpmTasks('grunt-contrib-concat');

  // Default task(s).
  grunt.registerTask('default', [
    // 'uglify',
    'sass',
    'concat',
    ]);

};
