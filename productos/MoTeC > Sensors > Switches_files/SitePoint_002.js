/**
 * The SitePoint namespace.
 * @namespace 
 */
var SitePoint = SitePoint || {};

// Create Firebug stub if required
// Note that we should only use Firebug functions listed below.
window.console = window.console || { log: function() { /* do nothing */ } };


/**
 * A simple slideshow script.
 * Note that this is dependant on jQuery (tested with version 1.2.3)
 */
SitePoint.SlideShow = function (containerId, width, height, delay) {
	this._containerId = containerId;
	this._width = width;
	this._height = height;
	this._delay = delay;
};

SitePoint.SlideShow.prototype._containerId = null;
SitePoint.SlideShow.prototype._width = null;
SitePoint.SlideShow.prototype._height = null;
SitePoint.SlideShow.prototype._delay = 5;
SitePoint.SlideShow.prototype._imageArray = null;
SitePoint.SlideShow.prototype._imageIndex = null;

SitePoint.SlideShow.prototype.start = function (imageArray) {
	this._imageArray = imageArray;
	console.log(imageArray);
	this.displayNextImage();
};

SitePoint.SlideShow.prototype.displayNextImage = function () {
	this.advanceIndex();
	this.loadImage();
};

SitePoint.SlideShow.prototype.advanceIndex = function () {
	if (this._imageIndex == null)
	{
		this._imageIndex = 0;
	}
	else
	{
		this._imageIndex++;
	}
	if (this._imageIndex == this._imageArray.length)
	{
		this._imageIndex = 0;
	}
};

SitePoint.SlideShow.prototype.getCurrent = function () {
	return this._imageArray[this._imageIndex];
};

SitePoint.SlideShow.prototype.loadImage = function () {
	if (this.getCurrent().isReady())
	{
		console.log("Image is ready with id: " + this.getImageId(this._imageIndex));
		this.fadeInImage();
	}
	else
	{
		mySlideShow = this;
		setTimeout(function () {
			mySlideShow.loadImage();
		}, 100);
	}
};

SitePoint.SlideShow.prototype.fadeInImage = function () {
	console.log("Fading in image: " + this.getImageId(this._imageIndex));
//	console.log(this.getCurrent());
	this.insertCurrentImage();
	mySlideShow = this;
	$('#' + this.getImageId(this._imageIndex)).fadeIn(1500, function () {
		mySlideShow.removePreviousImage();
	});
};

/**
 * Inserts the current image into the page
 */
SitePoint.SlideShow.prototype.insertCurrentImage = function () {
	if (!this.imageExists(this._imageIndex))
	{
		console.log("Logging Image Object");
		console.log(this.getCurrent());
		var src = this.getCurrent().getSrc();
		var image = this.getCurrent().getImage();
		var anchor = this.getCurrent().getAnchor();
		image.style["display"] = 'none';
		image.id = this.getImageId(this._imageIndex);
		image.style["position"] = 'absolute';
		anchor.appendChild(image);
		document.getElementById(this._containerId).appendChild(anchor);
		//$('#' + this._containerId).append('<img style="display:none; position:absolute;"src="' + src + '" width="' + this._width + '" height="' + this._height + '" id="' + this.getImageId(this._imageIndex) + '" />');
	}
};

/**
 * Checks if an image currently exists in the page
 */
SitePoint.SlideShow.prototype.imageExists = function (index) {
	var id = this.getImageId(index);
	if ($('#' + id).size() > 0)
	{
		return true;
	}
	return false;
}

/**
 * Generates an id for each image based on its id and contained element
 */
SitePoint.SlideShow.prototype.getImageId = function (index) {
	console.log(this._containerId + '_' + index);
	return this._containerId + '_' + index;
};

/**
 * Hides the previous image and initiates the loop to show the next iamge
 */
SitePoint.SlideShow.prototype.removePreviousImage = function () {
	console.log("Removing image: " + this.getImageId(this.getPreviousIndex()));
	$('#' + this.getImageId(this.getPreviousIndex())).fadeOut(1500);
	mySlideshow = this;
	setTimeout(function () { 
		mySlideshow.displayNextImage();
	}, 1000 * this._delay);
};

/**
 * Gets the index of the previous image from the image array
 */
SitePoint.SlideShow.prototype.getPreviousIndex = function () {
	if (this._imageIndex == 0)
	{
		return this._imageArray.length -1;
	}
	return this._imageIndex -1;
};
