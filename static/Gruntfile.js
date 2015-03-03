module.exports = function(grunt) {
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),

        sass: {
            options: {
                includePaths: ['bower_components/foundation/scss']
            },
            dist: {
                options: {
                    outputStyle: 'expanded'
                },
                files: {
                    'css/style.css': 'scss/style.scss'
                }
            }
        },

        watch: {
            grunt: { files: ['Gruntfile.js'] },
            sass: {
                files: 'scss/**/*.scss',
                tasks: ['sass', 'autoprefixer'],
            },
            options: {
                // Start a live reload server on the default port 35729
                livereload: true
            }
        },

        autoprefixer: {
            options: {
                browsers: ['last 18 versions']
            },
            dist: { // Target
                files: {
                    'css/style.css': 'css/style.css'
                }
            },
        },

        cssmin: {
            combine: {
                files: {
                    'css/style.min.css': [
                        'css/style.css'
                    ]
                }
            }
        },

        uglify: {
            my_target: {
                options: {
                    mangle: false
                },
                files: {
                    'js/project.min.js': [
                        'components/fastclick/lib/fastclick.js',
                        'components/jquery-form/jquery.form.js',
                        'js/init.js'
                    ]
                }
            }
        }
    });

    grunt.loadNpmTasks('grunt-sass');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-cssmin');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-autoprefixer');

    grunt.registerTask('build', ['sass:dist', 'autoprefixer', 'cssmin', 'uglify']);
    grunt.registerTask('composer', ['build']);

    grunt.registerTask('default', ['sass:dist', 'autoprefixer', 'watch']);

}