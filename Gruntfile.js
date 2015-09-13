module.exports = function(grunt) {

  // Project configuration.
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    
    concat: {
      js: {
        src: [
          'assets/js/jquery-2.1.3.min.js',
          'assets/js/jquery.parallax-1.1.3.js',
          'assets/js/contact.js',
          'assets/js/custom.js'
        ],
        dest: 'assets/js/script-concat.js'
      },
      css: {
        src: [
          'assets/css/fonts.css',
          'assets/css/bootstrap.min.css',
          'assets/css/style.css'
        ],
        dest: 'assets/css/style-concat.css'
      }
    },
    
    cssmin: {
      options: {
        keepSpecialComments: 0
      },
      target: {
        files: {
          'assets/css/style.min.css': 'assets/css/style-concat.css'
        }
      }
    },
    
    uglify: {
      build: {
        src: 'assets/js/script-concat.js',
        dest: 'assets/js/script.min.js'
      }
    },
    
    imagemin: {
      dynamic: {                
        files: [{
          expand: true,         
          cwd: 'assets/images/',
          src: ['**/*.{png,jpg,gif}'],
          dest: 'assets/images/'
        }]
      }
    },
    
    watch: {
      js: {
        files: 'assets/js/**',
        tasks: ['concat:js', 'uglify'],
      },
      css: {
        files: 'assets/css/**',
        tasks: ['concat:css', 'cssmin'],
      },
    },
  });

  grunt.event.on('watch', function(action, filepath, target) {
    grunt.log.writeln(target + ': ' + filepath + ' has ' + action);
  });

  // Load the plugins
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-concat');
  grunt.loadNpmTasks('grunt-contrib-cssmin');
  grunt.loadNpmTasks('grunt-contrib-imagemin');

  // Default task(s).
  grunt.registerTask('default', ['concat', 'cssmin', 'uglify', 'imagemin']);
};