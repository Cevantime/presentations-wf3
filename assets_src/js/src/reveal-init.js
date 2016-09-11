var $ = require('jquery');

var Reveal = require('reveal.js');

var baseURL = window.baseURL;

Reveal.initialize({
	dependencies : [
		{src: baseURL+'node_modules/presentable/dist/presentable.min.js',callback: function() { presentable.toc({framework: "revealjs"}); } }
	]
});


