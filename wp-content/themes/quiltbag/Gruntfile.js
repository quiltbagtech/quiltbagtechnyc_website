module.exports = function(grunt) {

  // Via the load-grunt-tasks plugin, this
  // automagically makes all devDependencies listed in package.json
  // available to Grunt
  require('load-grunt-tasks')(grunt);

  // Settings for various Grunt plugins
  grunt.initConfig({
    sass: {
      dist: {
        options: {
          style: 'expanded'
        },
        files: {
          'library/css/style.css': 'library/scss/style.scss'
        }
      }
    },
    watch: {
      css: {
        files: ['library/scss/style.scss'],
        tasks: ['sass'],
        options: {
          livereload: true
        }
      }
    }
  });

  // Default task(s).
  grunt.registerTask('default', ['watch']);

};