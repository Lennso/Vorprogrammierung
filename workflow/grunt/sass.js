
module.exports = {
    dist: {
        files: [{
            expand: true,
            cwd: '../public/theme/css',
            src: [
                '*.scss',
                '*.sass'
            ],
            dest: '../public/theme/dist',
            ext: '.css'
        }]
    }
};