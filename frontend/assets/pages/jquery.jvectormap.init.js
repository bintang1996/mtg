/**
 * Theme: Syntra - Bootstrap 4 Web App kit
 * Author: Mannat-themes
 * VectorMap
 */

! function($) {
	"use strict";

	var VectorMap = function() {
	};




	
	VectorMap.prototype.init = function() {
		//various examples
		$('#world-map-markers').vectorMap({
			map : 'world_mill_en',
			normalizeFunction : 'polynomial',
			hoverOpacity : 0.7,
			hoverColor : false,
			regionStyle : {
				initial : {
					fill : '#ad7fa8'
				}
			},
			 markerStyle: {
                initial: {
                    r: 9,
                    'fill': '#7382b3',
                    'fill-opacity': 0.9,
                    'stroke': '#fff',
                    'stroke-width' : 7,
                    'stroke-opacity': 0.4
                },

                hover: {
                    'stroke': '#fff',
                    'fill-opacity': 1,
                    'stroke-width': 1.5
                }
            },
			backgroundColor : 'transparent',
			markers : 
			[{
				latLng : [-6.200000, 106.816666],
				name : 'Vatican City'
			}, 
			{
				latLng : [0.33, 6.73],
				name : 'São Tomé and Príncipe'
			}],
			onRegionClick: function(e,  code,  isSelected,  selectedRegions){
				$('#map').vectorMap('get','mapObject').setFocus({region: code});
			  }
		});



		$('#india').vectorMap({
			map : 'id_ID',
			backgroundColor : '#87CEFA',
			normalizeFunction : 'polynomial',
			hoverOpacity : 0.7,
			regionStyle : {
				initial : {
					fill : '#8aa678'
				}
			},
			markerStyle: {
                initial: {
                    r: 9,
                    'fill': '#7382b3',
                    'fill-opacity': 0.9,
                    'stroke': '#fff',
                    'stroke-width' : 7,
                    'stroke-opacity': 0.4
                },

                hover: {
                    'stroke': '#fff',
                    'fill-opacity': 1,
                    'stroke-width': 1.5
                }
            },
			
			markers : 
			[{
				latLng : [-6.20, 106.81],
				name : 'Jakarta'
			}, 
			{
				latLng : [-7.25, 112.75],
				name : 'Surabaya'
			}]
		});

		

	},
	//init
	$.VectorMap = new VectorMap, $.VectorMap.Constructor =
	VectorMap
}(window.jQuery),

//initializing
function($) {
	"use strict";
	$.VectorMap.init()
}(window.jQuery);

