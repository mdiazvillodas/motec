// requires jQuery
$(window).load(function(){
		$('a[@rel="external"]').each(function(){
				this.target = "_blank";
		});
});