module.exports = function(grunt) {

    // 1. All configuration goes here
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),

        concat: {
            dist: {
                src: [
                    // 'assets/js/build/modernizr.js',
                    'assets/js/global/*.js', // All JS in the global folder
                    // 'assets/js/global/ga.js',
                ],
                dest: 'assets/js/build/global.js',
            }
        },

        uglify: {
            build: {
                src: 'assets/js/build/global.js',
                dest: 'assets/js/build/global.min.js'
            }
        },

        php: {
            dist: {
                options: {
                    port: 4000
                }
            }
        },

        open : {
            dev : {
                path: 'http://localhost:4000/',
                app: 'Google Chrome'
            }
        },

        sass: {
          dist: {
            options: {
              style: 'expanded'
            },
            files: {
              'assets/css/screen.css': 'assets/css/scss/screen.scss'
            }
          }
        },

        // postcss: {
        //   options: {
        //     // map: true,
        //     map: false,
        //     processors: [
        //       require('autoprefixer')({
        //           browsers: ['last 3 versions']
        //       }),
        //       require('cssnano')() // minify the result
        //     ]
        //   },
        //   dist: {
        //     src: 'assets/css/screen.css'
        //   }
        // },

        modernizr: {
          dist: {
            "dest" : "assets/js/build/modernizr.js",
            "parseFiles": true,
            "tests": [
              "cssanimations"
            ],
            "options": [
              "setClasses"
            ],
            "uglify": true
          }
        },

        watch: {
            files: ['Gruntfile.js'],
            tasks: ['jshint'],
            scripts: {
                files: ['assets/js/*.js', 'assets/js/global/global.js'],
                tasks: ['concat', 'uglify', 'jshint'],
                options: {
                    spawn: false,
                },
            },
            css: {
                files: ['assets/css/scss/*.scss'],
                tasks: ['sass', 'postcss'],
                options: {
                    spawn: false,
                }
            }
        }

    });

    // 3. Where we tell Grunt we plan to use this plug-in.

    require('load-grunt-tasks')(grunt);

    // 4. Where we tell Grunt what to do when we type "grunt" into the terminal.
    grunt.registerTask('default', ['modernizr', 'concat', 'uglify', 'sass', 'php', 'open', 'watch']);

    grunt.task.run('notify_hooks');

};
