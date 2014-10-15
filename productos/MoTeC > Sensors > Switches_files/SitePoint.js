/**
 * The SitePoint namespace.
 * @namespace 
 */

var SitePoint = SitePoint || {};

// Create Firebug stub if required
// Note that we should only use Firebug functions listed below.
window.console = window.console || { log: function() { /* do nothing */ } };

/**
 * An image class that supports lazy loading images until they're needed
 * @constructor
 */
SitePoint.Image = function (href, src, width, height) {
	this._href = href;
	this._src = src;
	this._width = width;
	this._height = height
};

SitePoint.Image.prototype._anchor = null;
SitePoint.Image.prototype._href = null;
SitePoint.Image.prototype._src = null;
SitePoint.Image.prototype._width = null;
SitePoint.Image.prototype._height = null;
SitePoint.Image.prototype._ready = false;
SitePoint.Image.prototype._image = null;

/**
 * Indicates if an image is ready to be shown. Note that
 * this will implicitly trigger the image loading sequence
 */
SitePoint.Image.prototype.isReady = function () {
	if (this._image == null)
	{
		this.loadImage();
	}
	if (this._ready)
	{
		return true;
	}
	return false;
};

SitePoint.Image.prototype.loadImage = function () {
//	this._anchor = new Anchor(this._href);
	this._anchor = document.createElement('a');
	this._anchor.href = this._href;
	this._image = new Image(this._width, this._height);
	thisImage = this;
	this._image.onload = function () {
		thisImage._ready = true;
	};
	this._image.src = this._src;
};

SitePoint.Image.prototype.getSrc = function () {
	return this._src;
};

SitePoint.Image.prototype.getImage = function () {
	return this._image;
}

SitePoint.Image.prototype.getAnchor = function () {
	return this._anchor;
}
