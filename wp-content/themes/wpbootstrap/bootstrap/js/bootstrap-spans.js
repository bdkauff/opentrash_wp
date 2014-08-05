/**
 * bootstrap-spans.js 1.0.0
 * https://github.com/davidstutz/bootstrap-spans
 * 
 * Copyright 2012 David Stutz 
 * 
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
!function ($) {

	"use strict"; // jshint ;_;

	var Spans = function(element) {
		
		var spans = $('.span1, .span2, .span3, .span4, .span5, .span6, .span7, .span8, .span9, .span10, .span11, .span12', element);
		
		for (var i = 0; i < spans.length; i++) {
			
			// Try to add the span to an existing row.
			$('.row-fluid', element).each(function() {
				
				// Get sum of spans in current row.
				var sum = 0;
				for (var k = 1; k <= 12; k++) {
					$('.span' + k, $(this)).each(function() {
						sum += k;
					});
				}
				
				// Get span of current element.
				var span = 0;
				for (var k = 1; k <= 12; k++) {
					if ($(spans[i]).hasClass('span' + k)) {
						span = k;
					}
				}
				
				if (12 - sum >= span) {
					$(this).append(spans[i]);
					spans[i] = null;
				}
			});
			
			if (spans[i] !== null) {
				var row = $('<div class="row-fluid"></div>');
				row.append(spans[i]);
				$(element).append(row);
				spans[i] = null;
			}
		}
	};

	$.fn.spans = function (options) {
		return this.each(function () {
			var data = $(this).data('spans');
		
			if (!data) {
				$(this).data('spans', (data = new Spans(this, options)));
			}
		});
	}

	Spans.prototype.constructor = Spans;

}(window.jQuery);