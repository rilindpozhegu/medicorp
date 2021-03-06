module.exports = function(grunt) {

	// Configure

	grunt.initConfig({
		// pass in options to pluginsm references to files etc...
		concat:{
			js:{
				src:[
					'js/jquery.js',
					'js/bootstrap.min.js', // Boostrap Script.min General,
					'js/scrolling-nav.js', // Scrolling Nav Default Script,
					
					//	Slick.
					'js/slick.js',
					'js/slick_edition.js',
					// -------------------// 

					// Animation.css Scripts after scroll
					'js/wow.min.js',
					'js/animate.js',
					// --------------------------------// 
					'js/active_property.js',
					// Gallery Scripts New ONE
					'js/gallery/add_gallery.js',
					'js/gallery/lightgallery.min.js',
					'js/gallery/lg-fullscreen.min.js',
					'js/gallery/lg-thumbnail.min.js',
					'js/gallery/lg-video.min.js',
					'js/gallery/lg-autoplay.min.js',
					'js/gallery/lg-zoom.min.js',
					'js/gallery/lg-hash.min.js',
					'js/gallery/lg-pager.min.js',
					'js/gallery/jquery.mousewheel.min.js',
					// ---------------------------------//
					'js/owl.carousel.min.js',

					// 'js/smoothscroll.js' // Smooth Scroll Script + time to Scroll,

					'js/parallax-background.js',
					'js/free_question_collapse.js',
					],

				dest: 'build/scripts.js'
			},
			css: {
				src:['css/**/*.css'],
				dest: 'build/styles.css'
			}
		},
		watch: {
		  scripts: {
		    files: ['css/**/*.css'],
		    tasks: ['concat'],
		    options: {
		      spawn: false,
		    },
		  },
		},

	});


	//  Load Plugins
	grunt.loadNpmTasks('grunt-contrib-concat');
	grunt.loadNpmTasks('grunt-contrib-watch');

	// Register tasks

	grunt.registerTask('default', ['watch']);
	// grunt.registerTask('concat-css', ['concat:css']);


};