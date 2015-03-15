module.exports = {
    configFiles: {
        files: [ 'Gruntfile.js'],
        options: {
            reload: true
        }
    },
    js: {
        files: ['../public/theme/js/**/*.js'],
        tasks: [],
        options: {
            spawn: false,
            livereload: true
        }
    },
    css: {
        files: [
            '../public/theme/css/**/*.scss',
            '../public/theme/css/**/*.sass',
            '../public/theme/css/**/*.css'
        ],
        tasks: [
            'sass'
        ],
        options: {
            spawn: false,
            livereload: true
        }
    },
    templates: {
        files: [
            '../public/theme/**/*.php',
            '../public/theme/**/*.json'
        ],
        tasks: [],
        options: {
            spawn: false,
            livereload: true
        }
    },
}