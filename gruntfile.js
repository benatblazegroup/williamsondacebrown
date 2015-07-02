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
  });

  // Load the plugin that provides the tasks.
  grunt.loadNpmTasks('grunt-sass');
  grunt.loadNpmTasks('grunt-contrib-concat');

  // Default task(s).
  grunt.registerTask('default', [
    //'uglify',
    'sass',
    'concat',
    ]);

};
