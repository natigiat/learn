module.exports = function(grunt) {

  //Initializing the configuration object
    grunt.initConfig({

      // Task configuration
    less: {
        development: {
            options: {
              compress: true,  //minifying the result
            },
            files: {
              //compiling backend.less into backend.css
              "./public/css/base.css":"./resources/assets/less/base.less"
            }
        }
    },

    concat: {
      options: {
        separator: ';',
      },
      js_frontend: {
        src: [
          './resources/assets/bower/**/*.js',
        ],
        dest: './public/js/frontend.js',
      },
    },



    watch: {
        js_frontend: {
          files: [
            //watched files
            './resources/assets/bower/**/*.js'
            ],   
          tasks: ['concat:js_frontend'],     //tasks to run
          options: {
            livereload: true                        //reloads the browser
          }
        },
        less: {
          files: ['./app/assets/stylesheets/*.less'],  //watched files
          tasks: ['less'],                          //tasks to run
          options: {
            livereload: true                        //reloads the browser
          }
        },
      }


   
    });

  // Plugin loading
  grunt.loadNpmTasks('grunt-contrib-concat');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-less');
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-phpunit');

  // Task definition
  grunt.registerTask('default', ['uglify']);

};