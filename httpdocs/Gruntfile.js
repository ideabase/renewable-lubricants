module.exports = function(grunt) {

  // Configuration
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    sass: {
      dist: {
        options: {
          style: 'compressed'
        },
        files: {
        'assets/css/style.css': 'assets/_sass/style.scss'
        }
      }
    },
    criticalcss: {
      custom: {
        options: {
          url: "http://renew.web/",
          width: 1200,
          height: 900,
          outputfile: "assets/css/critical.css",
          filename: "assets/css/style.css",
          buffer: 800*1024,
          ignoreConsole: false
        }
      }
    },
    uglify: {
      my_target: {
        files: {
          'assets/js/min/scripts.js': ['assets/js/*.js']
        }
      }
    },
    postcss: {
      options: {
        map: false,
        processors: [
          require('pixrem')(),
          require('autoprefixer')(),
          require('cssnano')()
        ]
      },
      dist: {
        src: 'assets/css/style.css'
      },
    },
    watch: {
      css: {
				files: '**/*.scss',
				tasks: ['sass', 'postcss'],
        options: {
          livereload: true,
        },
			},
      js: {
				files: '**/js/*.js',
				tasks: ['uglify'],
        options: {
          livereload: true,
        },
			}
    }
  });

  // Plugins
  grunt.loadNpmTasks('grunt-postcss');
  grunt.loadNpmTasks('grunt-contrib-imagemin');
  grunt.loadNpmTasks('grunt-contrib-sass');
  grunt.loadNpmTasks('grunt-criticalcss');
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-watch');

  // Tasks
  grunt.registerTask('default', ['watch']);
  grunt.registerTask('critical', ['criticalcss']);
};
