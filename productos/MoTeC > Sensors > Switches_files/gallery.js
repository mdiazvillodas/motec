var ImageGallery = {
	init: function() {
		ImageGallery.div = this;

		// assign thickbox popups to thumbnails
		$('.thumb a', ImageGallery.div).click(ImageGallery.previewImage);
	},

	previewImage: function()
	{
		TB_show(this.title, this.href);
		$(window).unscroll(TB_position);
		return false;
	}
};

$(document).ready(function() {
	$('#gallery').each(ImageGallery.init);
});
