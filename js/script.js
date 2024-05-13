"use strict";
(function () {
	// Global variables
	var userAgent = navigator.userAgent.toLowerCase(),
			initialDate = new Date(),

			$document = $(document),
			$window = $(window),
			$html = $("html"),
			$body = $("body"),

			isDesktop = $html.hasClass("desktop"),
			isIE = userAgent.indexOf("msie") !== -1 ? parseInt(userAgent.split("msie")[1], 10) : userAgent.indexOf("trident") !== -1 ? 11 : userAgent.indexOf("edge") !== -1 ? 12 : false,
			isMobile = /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent),
			windowReady = false,
			isNoviBuilder = false,
			pageTransitionDuration = 500,

			plugins = {
				bootstrapTooltip:        $("[data-toggle='tooltip']"),
				captcha:                 $('.recaptcha'),
				campaignMonitor:         $('.campaign-mailform'),
				copyrightYear:           $(".copyright-year"),
				isotope:                 $(".isotope"),
				lightGallery:            $("[data-lightgallery='group']"),
				lightGalleryItem:        $("[data-lightgallery='item']"),
				lightDynamicGalleryItem: $("[data-lightgallery='dynamic']"),
				materialParallax:        $(".parallax-container"),
				owl:                     $(".owl-carousel"),
				preloader:               $(".preloader"),
				rdNavbar:                $(".rd-navbar"),
				maps:                    $(".google-map-container"),
				rdMailForm:              $(".rd-mailform"),
				rdInputLabel:            $(".form-label"),
				regula:                  $("[data-constraints]"),
				wow:                     $(".wow"),
				buttonWinona:            $('.button-winona'),
				animePresets:            document.querySelectorAll('[data-anime]'),
				navbar:                  document.querySelectorAll('.navbar')
			};

	


	// Initialize scripts that require a loaded page
	$window.on('load', function () {
		// Page loader & Page transition
		if (plugins.preloader.length && !isNoviBuilder) {
			pageTransition({
				target:            document.querySelector('.page'),
				delay:             0,
				duration:          pageTransitionDuration,
				classIn:           'fadeIn',
				classOut:          'fadeOut',
				classActive:       'animated',
				conditions:        function (event, link) {
					return !/(\#|callto:|tel:|mailto:|:\/\/)/.test(link)
							&& !event.currentTarget.hasAttribute('data-lightgallery');
				},
				onTransitionStart: function (options) {
					setTimeout(function () {
						plugins.preloader.removeClass('loaded');
					}, options.duration * .75);
				},
				onReady:           function () {
					plugins.preloader.addClass('loaded');
					windowReady = true;
				}
			});
		}
	});

	// Initialize scripts that require a finished document
	$(function () {
				isNoviBuilder = window.xMode;

				/**
				 * @desc Initialize owl carousel plugin
				 * @param {object} c - carousel jQuery object
				 */
				function initOwlCarousel(c) {
					var aliaces = ["-", "-sm-", "-md-", "-lg-", "-xl-", "-xxl-"],
							values = [0, 576, 768, 992, 1200, 1600],
							responsive = {};

					for (var j = 0; j < values.length; j++) {
						responsive[values[j]] = {};
						for (var k = j; k >= -1; k--) {
							if (!responsive[values[j]]["items"] && c.attr("data" + aliaces[k] + "items")) {
								responsive[values[j]]["items"] = k < 0 ? 1 : parseInt(c.attr("data" + aliaces[k] + "items"), 10);
							}
							if (!responsive[values[j]]["stagePadding"] && responsive[values[j]]["stagePadding"] !== 0 && c.attr("data" + aliaces[k] + "stage-padding")) {
								responsive[values[j]]["stagePadding"] = k < 0 ? 0 : parseInt(c.attr("data" + aliaces[k] + "stage-padding"), 10);
							}
							if (!responsive[values[j]]["margin"] && responsive[values[j]]["margin"] !== 0 && c.attr("data" + aliaces[k] + "margin")) {
								responsive[values[j]]["margin"] = k < 0 ? 30 : parseInt(c.attr("data" + aliaces[k] + "margin"), 10);
							}
							if (!responsive[values[j]]["autoWidth"] && responsive[values[j]]["autoWidth"] !== 0 && c.attr("data" + aliaces[k] + "auto-width")) {
								responsive[values[j]]["autoWidth"] = k < 0 ? false : c.attr("data" + aliaces[k] + "auto-width");
							}
						}
					}

					
				

					c.owlCarousel({
						autoplay:           isNoviBuilder ? false : c.attr("data-autoplay") === "true",
						autoplayTimeout:    c.attr("data-autoplay-timeout") ? parseInt(c.attr("data-autoplay-timeout"), 10) : 100,
						autoplayHoverPause: true,
						smartSpeed:         c.attr("data-speed") ? parseInt(c.attr("data-speed")) : 250,
						loop:               isNoviBuilder ? false : c.attr("data-loop") !== "false",
						items:              1,
						easing:             c.attr('data-easing') ? c.attr('data-easing') : 'swing',
						center:             c.attr("data-center") === "true",
						dotsContainer:      c.attr("data-pagination-container") || false,
						navContainer:       c.attr("data-navigation-container") || false,
						mouseDrag:          isNoviBuilder ? false : c.attr("data-mouse-drag") !== "false",
						nav:                c.attr("data-nav") === "true",
						dots:               c.attr("data-dots") === "true",
						dotsEach:           c.attr("data-dots-each") ? parseInt(c.attr("data-dots-each"), 10) : false,
						animateIn:          c.attr('data-animation-in') ? c.attr('data-animation-in') : false,
						animateOut:         c.attr('data-animation-out') ? c.attr('data-animation-out') : false,
						responsive:         responsive,
						navText:            c.attr("data-nav-text") ? $.parseJSON(c.attr("data-nav-text")) : [],
						navClass:           c.attr("data-nav-class") ? $.parseJSON(c.attr("data-nav-class")) : ['owl-prev', 'owl-next']
					});
				}

				/**
				 * @desc Check the element whas been scrolled into the view
				 * @param {object} elem - jQuery object
				 * @return {boolean}
				 */
				function isScrolledIntoView(elem) {
					if (!isNoviBuilder) {
						return elem.offset().top + elem.outerHeight() >= $window.scrollTop() && elem.offset().top <= $window.scrollTop() + $window.height();
					} else {
						return true;
					}
				}

				/**
				 * @desc Calls a function when element has been scrolled into the view
				 * @param {object} element - jQuery object
				 * @param {function} func - callback function
				 */
				function lazyInit(element, func) {
					var handler = function () {
						if ((!element.hasClass('lazy-loaded') && (isScrolledIntoView(element)))) {
							func.call();
							element.addClass('lazy-loaded');
						}
					};

					handler();
					$window.on('scroll', handler);
				}

				
				
					

				
				/**
				 * @desc Initialize Bootstrap tooltip with required placement
				 * @param {string} tooltipPlacement
				 */
				function initBootstrapTooltip(tooltipPlacement) {
					plugins.bootstrapTooltip.tooltip('dispose');

					for (var i = 0; i < plugins.bootstrapTooltip.length; i++) {
						var $tooltip = $(plugins.bootstrapTooltip[i]);

						if (window.innerWidth < 576) {
							$tooltip.tooltip({
								customClass: $tooltip.attr('data-class') ? $tooltip.attr('data-class') : '',
								placement:   'bottom'
							});
						} else {
							$tooltip.tooltip({
								customClass: $tooltip.attr('data-class') ? $tooltip.attr('data-class') : '',
								placement:   tooltipPlacement
							});
						}
					}
				}

				


				/**
				 * @desc Initialize the gallery with one image
				 * @param {object} itemToInit - jQuery object
				 * @param {string} addClass - additional gallery class
				 */
				function initLightGalleryItem(itemToInit, addClass) {
					itemToInit = $(itemToInit);
					if (!isNoviBuilder) {
						if (itemToInit.length && itemToInit.attr('href').split('http').length > 1) {
							addClass = 'lightgallery-iframe';
						}
						itemToInit.lightGallery({
							selector:            "this",
							addClass:            addClass,
							counter:             false,
							iframeMaxWidth:      '90%',
							youtubePlayerParams: {
								modestbranding: 1,
								showinfo:       1,
								rel:            1,
								controls:       1
							},
							vimeoPlayerParams:   {
								byline:   0,
								portrait: 0
							}
						});
					}
				}

				/**
				 * @desc Initialize Google maps
				 */
				function initMaps() {
					var key;

					for (var i = 0; i < plugins.maps.length; i++) {
						if (plugins.maps[i].hasAttribute("data-key")) {
							key = plugins.maps[i].getAttribute("data-key");
							break;
						}
					}

					$.getScript('//maps.google.com/maps/api/js?' + (key ? 'key=' + key + '&' : '') + 'sensor=false&libraries=geometry,places&v=quarterly', function () {
						var head = document.getElementsByTagName('head')[0],
								insertBefore = head.insertBefore;

						head.insertBefore = function (newElement, referenceElement) {
							if (newElement.href && newElement.href.indexOf('//fonts.googleapis.com/css?family=Roboto') !== -1 || newElement.innerHTML.indexOf('gm-style') !== -1) {
								return;
							}
							insertBefore.call(head, newElement, referenceElement);
						};
						var geocoder = new google.maps.Geocoder;
						for (var i = 0; i < plugins.maps.length; i++) {
							var zoom = parseInt(plugins.maps[i].getAttribute("data-zoom"), 10) || 11;
							var styles = plugins.maps[i].hasAttribute('data-styles') ? JSON.parse(plugins.maps[i].getAttribute("data-styles")) : [];
							var center = plugins.maps[i].getAttribute("data-center") || "New York";

							// Initialize map
							var map = new google.maps.Map(plugins.maps[i].querySelectorAll(".google-map")[0], {
								zoom:        zoom,
								styles:      styles,
								scrollwheel: false,
								center:      {
									lat: 0,
									lng: 0
								}
							});

							// Add map object to map node
							plugins.maps[i].map = map;
							plugins.maps[i].geocoder = geocoder;
							plugins.maps[i].google = google;

							// Get Center coordinates from attribute
							getLatLngObject(center, null, plugins.maps[i], function (location, markerElement, mapElement) {
								mapElement.map.setCenter(location);
							});

							// Add markers from google-map-markers array
							var markerItems = plugins.maps[i].querySelectorAll(".google-map-markers li");

							if (markerItems.length) {
								var markers = [];
								for (var j = 0; j < markerItems.length; j++) {
									var markerElement = markerItems[j];
									getLatLngObject(markerElement.getAttribute("data-location"), markerElement, plugins.maps[i], function (location, markerElement, mapElement) {
										var icon = markerElement.getAttribute("data-icon") || mapElement.getAttribute("data-icon");
										var activeIcon = markerElement.getAttribute("data-icon-active") || mapElement.getAttribute("data-icon-active");
										var info = markerElement.getAttribute("data-description") || "";
										var infoWindow = new google.maps.InfoWindow({
											content: info
										});
										markerElement.infoWindow = infoWindow;
										var markerData = {
											position: location,
											map:      mapElement.map
										};
										if (icon) {
											markerData.icon = icon;
										}
										var marker = new google.maps.Marker(markerData);
										markerElement.gmarker = marker;
										markers.push({
											markerElement: markerElement,
											infoWindow:    infoWindow
										});
										marker.isActive = false;
										// Handle infoWindow close click
										google.maps.event.addListener(infoWindow, 'closeclick', (function (markerElement, mapElement) {
											var markerIcon = null;
											markerElement.gmarker.isActive = false;
											markerIcon = markerElement.getAttribute("data-icon") || mapElement.getAttribute("data-icon");
											markerElement.gmarker.setIcon(markerIcon);
										}).bind(this, markerElement, mapElement));


										// Set marker active on Click and open infoWindow
										google.maps.event.addListener(marker, 'click', (function (markerElement, mapElement) {
											if (markerElement.infoWindow.getContent().length === 0) return;
											var gMarker, currentMarker = markerElement.gmarker, currentInfoWindow;
											for (var k = 0; k < markers.length; k++) {
												var markerIcon;
												if (markers[k].markerElement === markerElement) {
													currentInfoWindow = markers[k].infoWindow;
												}
												gMarker = markers[k].markerElement.gmarker;
												if (gMarker.isActive && markers[k].markerElement !== markerElement) {
													gMarker.isActive = false;
													markerIcon = markers[k].markerElement.getAttribute("data-icon") || mapElement.getAttribute("data-icon")
													gMarker.setIcon(markerIcon);
													markers[k].infoWindow.close();
												}
											}

											currentMarker.isActive = !currentMarker.isActive;
											if (currentMarker.isActive) {
												if (markerIcon = markerElement.getAttribute("data-icon-active") || mapElement.getAttribute("data-icon-active")) {
													currentMarker.setIcon(markerIcon);
												}

												currentInfoWindow.open(map, marker);
											} else {
												if (markerIcon = markerElement.getAttribute("data-icon") || mapElement.getAttribute("data-icon")) {
													currentMarker.setIcon(markerIcon);
												}
												currentInfoWindow.close();
											}
										}).bind(this, markerElement, mapElement))
									})
								}
							}
						}
					});
				}


			

				// RD Navbar
				if (plugins.rdNavbar.length) {
					var aliaces, i, j, len, value, values;

					aliaces = ["-", "-sm-", "-md-", "-lg-", "-xl-", "-xxl-"];
					values = [0, 576, 768, 992, 1200, 1600];

					for (var z = 0; z < plugins.rdNavbar.length; z++) {
						var $rdNavbar = $(plugins.rdNavbar[z]),
								responsiveNavbar = {};

						for (i = j = 0, len = values.length; j < len; i = ++j) {
							value = values[i];
							if (!responsiveNavbar[values[i]]) {
								responsiveNavbar[values[i]] = {};
							}
							if ($rdNavbar.attr('data' + aliaces[i] + 'layout')) {
								responsiveNavbar[values[i]].layout = $rdNavbar.attr('data' + aliaces[i] + 'layout');
							}
							if ($rdNavbar.attr('data' + aliaces[i] + 'device-layout')) {
								responsiveNavbar[values[i]]['deviceLayout'] = $rdNavbar.attr('data' + aliaces[i] + 'device-layout');
							}
							if ($rdNavbar.attr('data' + aliaces[i] + 'hover-on')) {
								responsiveNavbar[values[i]]['focusOnHover'] = $rdNavbar.attr('data' + aliaces[i] + 'hover-on') === 'true';
							}
							if ($rdNavbar.attr('data' + aliaces[i] + 'auto-height')) {
								responsiveNavbar[values[i]]['autoHeight'] = $rdNavbar.attr('data' + aliaces[i] + 'auto-height') === 'true';
							}

							if ($rdNavbar.attr('data' + aliaces[i] + 'anchor-nav-offset')) {
								responsiveNavbar[values[i]]['anchorNavOffset'] = $rdNavbar.attr('data' + aliaces[i] + 'anchor-nav-offset');
							}

							if (isNoviBuilder) {
								responsiveNavbar[values[i]]['stickUp'] = false;
							} else if ($rdNavbar.attr('data' + aliaces[i] + 'stick-up')) {
								var isDemoNavbar = $rdNavbar.parents('.layout-navbar-demo').length;
								responsiveNavbar[values[i]]['stickUp'] = $rdNavbar.attr('data' + aliaces[i] + 'stick-up') === 'true' && !isDemoNavbar;
							}

							if ($rdNavbar.attr('data' + aliaces[i] + 'stick-up-offset')) {
								responsiveNavbar[values[i]]['stickUpOffset'] = $rdNavbar.attr('data' + aliaces[i] + 'stick-up-offset');
							}
						}


						$rdNavbar.RDNavbar({
							anchorNav:    !isNoviBuilder,
							stickUpClone: ($rdNavbar.attr("data-stick-up-clone") && !isNoviBuilder) ? $rdNavbar.attr("data-stick-up-clone") === 'true' : false,
							responsive:   responsiveNavbar,
							callbacks:    {
								onDropdownOver: function () {
									return !isNoviBuilder;
								}
							}
						});


						if ($rdNavbar.attr("data-body-class")) {
							document.body.className += ' ' + $rdNavbar.attr("data-body-class");
						}

					}
				}

				

				
			
				
							

				

									

				

				

				// Material Parallax
				if (plugins.materialParallax.length) {
					if (!isNoviBuilder && !isIE && !isMobile) {
						plugins.materialParallax.parallax();

						// heavy pages fix
						$window.on('load', function () {
							setTimeout(function () {
								$window.scroll();
							}, 500);
						});
					} else {
						for (var i = 0; i < plugins.materialParallax.length; i++) {
							var parallax = $(plugins.materialParallax[i]),
									imgPath = parallax.data("parallax-img");

							var parallaxBg = document.createElement('div');
							parallaxBg.classList.add('material-parallax');
							parallax.prepend(parallaxBg);

							parallaxBg.style.backgroundImage = 'url(' + imgPath + ')';
							parallaxBg.style.backgroundSize = 'cover';
						}
					}
				}

				

				

				

				
					
				
			}
	);
}());
