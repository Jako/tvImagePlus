/**
 * Image+ Image Editor
 *
 * Copyright 2013-2015 by Alan Pich <alan.pich@gmail.com>
 * Copyright 2015-2021 by Thomas Jakobi <thomas.jakobi@partout.info>
 *
 * @package imageplus
 * @subpackage script
 *
 * @author Alan Pich <alan.pich@gmail.com>
 * @author Thomas Jakobi <thomas.jakobi@partout.info>
 * @copyright Alan Pich 2013-2015
 * @copyright Thomas Jakobi 2015-2021
 */


ImagePlus.window.Editor = function (config) {
    config = config || {};

    this.image = config.image;
    this.options = config.options;
    this.inputPanel = config.inputPanel;
    this.displayRatio = config.displayRatio;

    var cropSettings = {
        x: this.image.crop.x,
        y: this.image.crop.y,
        width: this.image.crop.width,
        height: this.image.crop.height
    };

    Ext.apply(config, {
        bodyStyle: {'padding': '0'},
        border: false,
        crop: cropSettings,
        resizable: false,
        closeAction: 'close',
        listeners: {
            close: {
                fn: this.onClose,
                scope: this
            },
            success: {
                fn: function () {
                    console.log('success')
                }
            }
        },
        items: [{
            border: false,
            xtype: 'imageplus-jquery-imagecrop',
            image: this.image,
            initialWidth: this.getDisplayWidth(),
            initialHeight: this.getDisplayHeight(),
            imageUrl: this.getImageUrl(),
            window: this,
            listeners: {
                change: {
                    fn: this.onCropChange,
                    scope: this
                }
            },
            cropData: this.image.crop
        }],
        buttonAlign: 'right',
        buttons: [{
            text: _('cancel'),
            handler: this.closeFromEditor,
            scope: this
        }, {
            text: _('update'),
            handler: this.updateFromEditor,
            scope: this
        }]
    });
    ImagePlus.window.Editor.superclass.constructor.call(this, config);
};
Ext.extend(ImagePlus.window.Editor, Ext.Window, {
    // Get the required width of the cropper
    getDisplayWidth: function () {
        return Math.round(this.image.sourceImg.width * this.displayRatio);
    },
    getDisplayHeight: function () {
        return Math.round(this.image.sourceImg.height * this.displayRatio);
    },
    // Get a url to image resized for window
    getImageUrl: function () {
        return this.inputPanel.generateThumbUrl({
            src: this.image.sourceImg.src,
            w: this.getDisplayWidth(),
            h: this.getDisplayHeight()
        });
    },
    getOuterImageUrl: function () {
        return this.inputPanel.generateThumbUrl({
            src: this.image.sourceImg.src,
            w: this.getDisplayWidth(),
            h: this.getDisplayHeight(),
            'fltr[]': 'blur|25'
        });
    },
    getMinCropSize: function () {
        return [
            Math.round(this.options.targetWidth * this.displayRatio),
            Math.round(this.options.targetHeight * this.displayRatio)
        ]
    },
    getMinCropWidth: function () {
        return Math.round(this.options.targetWidth * this.displayRatio);
    },
    getMinCropHeight: function () {
        return Math.round(this.options.targetHeight * this.displayRatio);
    },
    getInitialCropX: function () {
        return Math.round(this.image.crop.x * this.displayRatio);
    },
    getInitialCropY: function () {
        return Math.round(this.image.crop.y * this.displayRatio);
    },
    getInitialCropWidth: function () {
        if (this.image.crop.width === 0) {
            return Math.round(this.options.targetWidth * this.displayRatio);
        } else {
            return Math.round(this.image.crop.width * this.displayRatio);
        }
    },
    getInitialCropHeight: function () {
        if (this.image.crop.height === 0) {
            return Math.round(this.options.targetHeight * this.displayRatio)
        } else {
            return Math.round(this.image.crop.height * this.displayRatio);
        }
    },
    getAspectRatio: function () {
        if (this.options.targetRatio) {
            return this.options.targetRatio;
        } else {
            if (this.options.targetWidth > 0 && this.options.targetHeight > 0) {
                return this.options.targetWidth / this.options.targetHeight;
            } else {
                return false
            }
        }
    },
    getCropCoords: function () {
        var W = this.getInitialCropWidth();
        var H = this.getInitialCropHeight();
        if (W === 0 || H === 0) {
            return false;
        }
        var X = this.getInitialCropX();
        var Y = this.getInitialCropY();
        return [X, Y, (X + W), (Y + H)];
    },
    // Handle window
    onClose: function () {
        this.inputPanel.editorWindow = false;
    },
    // Handle crop area change
    onCropChange: function (data) {
        this.crop.height = Math.round(data.height / this.displayRatio);
        this.crop.width = Math.round(data.width / this.displayRatio);
        this.crop.x = Math.round(data.x / this.displayRatio);
        this.crop.y = Math.round(data.y / this.displayRatio);
    },
    updateFromEditor: function () {
        this.inputPanel.updateFromEditor(this.crop);
        this.close();
    },
    closeFromEditor: function () {
        this.crop.width = this.image.crop.width;
        this.crop.height = this.image.crop.height;
        this.crop.x = this.image.crop.x;
        this.crop.y = this.image.crop.y;
        this.close();
    }
});
Ext.reg('imageplus-window-editor', ImagePlus.window.Editor);
