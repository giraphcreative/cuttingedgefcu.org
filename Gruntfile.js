
module.exports = function(grunt) {

    // load all grunt tasks
    require('matchdep').filterDev('grunt-*').forEach(grunt.loadNpmTasks);

    grunt.initConfig({

        watch: {
            js: {
                files: ['js/src/*.js'],
                tasks: ['uglify'],
                options: {
                    spawn: false
                }
            },
            css: {
                files: ['css/src/*.scss'],
                tasks: ['sass'],
                options: {
                    spawn: false
                }
            }
        },


        // uglify to concat, minify, and make source maps
        uglify: {
            dist: {
                files: {
                    'js/main.js': [
                        'js/lib/fitvids/jquery.fitvids.js',
                        'js/lib/magnific/dist/jquery.magnific-popup.js',
                        'js/src/*.js',
                    ]
                }
            }
        },


        // we use the Sass
        sass: {
            dist: {
                options: {
                    // nested, compact, compressed, expanded
                    style: 'compressed'
                },
                files: {
                    'css/main.css': 'css/src/main.scss',
                    'editor-style.css': 'css/src/editor.scss',
                }
            }
        },


        /*
        // auto-prefix our css3 properties.
        autoprefixer: {
            files: {
                dest: 'css/main.css',
                src: 'css/src/main-unprefixed.css'
            }
        }
        */

    });

    // register task
    grunt.registerTask('default', ['watch']);

    // a build task just in case we want to
    grunt.registerTask('build', ['sass','uglify']);

};

