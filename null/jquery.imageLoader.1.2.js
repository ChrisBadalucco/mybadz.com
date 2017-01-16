/*
Name:       Image Loader
Version:    1.2 (February 20th, 2010)
Author:     Bryan T. Smith
Support:    http://orionseven.com/imageloader

Licence:    Image Loader is licensed under the MIT license
			http://www.opensource.org/licenses/mit-license.php
            
Credits:    The great jQuery community producing numerous tutorials 
			on creating jQuery plugins. 
*/

// Image Loader Initalization Function Declaration
jQuery.fn.imageLoader = function(options, callBackFunction) {

    var opts = $.extend({}, $.fn.imageLoader.defaults, options);
    var loading = 1;
    var appendToID = this;
    var images = [];
    var imagesIsObjects = (typeof opts.images[0] == 'object') ? true : false;

    insertLoading();

    // Add Images
    for (var i = 0; i < opts.images.length; i++) {
        images['img' + i] = new Image();

		$(appendToID).append(function(index, html) {
			var img = $(images['img' + i]).load(function() {
				updateLoading();
			});
			
			if (opts.hideImages) {
				$(img).hide();
			}
			
			img.attr((imagesIsObjects ? opts.images[i] : { src: opts.images[i] }));
			
			return img;
		});
    }

    return $(this);

    // Private Function: Update Loading Screen
    function updateLoading() {
        loading++;

        if ((opts.images.length + 1) == loading) {
            if (opts.endableSplashScreen) {
                $('#imageLoaderSplashArea').fadeOut(2500, function(){
					document.form.search.disabled=false;
				 	$('#search').fadeIn(2500);
				  	$('#major').fadeIn(2500);
				})
			};

            if (typeof callBackFunction == 'function') {
                callBackFunction.call();
            }
        }
        else {
            if (opts.endableSplashScreen && opts.enableSplashScreenText)
                $('#imageLoaderSplashArea p.loadingText').html("Loading " + loading + " of " + opts.images.length + " Images");
        }
    };

    // Private Function: Insert Loading Screen
    function insertLoading() {
        if (opts.endableSplashScreen) {
            var preloadArea = '<div id="imageLoaderSplashArea">'
				+ ((opts.enableSplashScreenImage) ? '<img src="' + opts.splashScreenImage + '" class="splashScreenImage" />' : '')
				+ ((opts.enableSplashScreenText) ? '<p class="loadingText">Loading ' + loading + ' of ' + opts.images.length + ' Images</p>' : '')
				+ '</div>';

            $(appendToID).append(preloadArea);
        }
    }
};

// Default Options
jQuery.fn.imageLoader.defaults = {
	images: [],
	splashScreenImage: 'img/loader_2.gif',
	enableSplashScreenImage: 1,
	enableSplashScreenText: 1,
	endableSplashScreen: 1,
	hideImages: 1
};