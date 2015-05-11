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
        files: [{
          expand: true,
          cwd: 'library/scss',
          src: '*.scss',
          dest: 'library/css/',
          ext: '.css'
        }]
      }
    },
    watch: {
      css: {
        files: ['library/scss/{,*/}*.scss'],
        tasks: ['sass', 'postcss'],
        options: {
          livereload: true
        }
      }
    },
    postcss: {
      options: {
        map: true,
        processors: [
          require('autoprefixer-core')({browsers: 'last 5 versions'}).postcss
        ]
      },
      dist: {
        src: 'library/css/*.css'
      }
    }
  });

  // Default task(s).
  grunt.registerTask('default', ['watch']);

};