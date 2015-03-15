module.exports = function(grunt) {

    // Measure the time needed to run a task
    require('time-grunt')(grunt);

    // Load tasks from config
    require('load-grunt-config')(grunt, {
        // pass data to the modules
        data: {},

        // Speeds up the build by lazy loading
        jitGrunt: {}
    });
};