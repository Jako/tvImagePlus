/**
 * Image+ Input Panel
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

ImagePlus.panel.input = function (config) {
    config = config || {};

    this.options = config.options;
    this.image = {};

    this.getValue(config.hiddenField);
    this.createImageBrowser();
    this.createImagePreview();
    this.createTextFields();

    // Warn if has no dependencies
    if (ImagePlus.config.hasUnmetDependencies) {
        ImagePlus.warnAboutUnmetDependencies()
    }

    Ext.apply(config, {
        border: false,
        config: config,
        baseCls: 'modx-panel',
        hiddenField: config.hiddenField,
        width: '400px',
        items: [{
            xtype: 'compositefield',
            anchor: '100%',
            hideLabel: true,
            listeners: {
                afterrender: {
                    fn: this.onAfterRender,
                    scope: this
                }
            },
            items: [
                this.imageBrowser
            ]
        }, {
            cls: 'modx-tv-image-preview imageplus-image-preview',
            border: false,
            items: [
                this.imagePreview,
                this.altTextField,
                this.captionField,
                this.creditsField
            ]
        }]
    });
    ImagePlus.panel.input.superclass.constructor.call(this, config);


    this.listenForResetEvent();
};
Ext.extend(ImagePlus.panel.input, MODx.Panel, {
    // Listen for TV 'Reset' button
    listenForResetEvent: function () {
        var resourcePanel = Ext.getCmp('modx-panel-resource');
        resourcePanel.on('tv-reset', function (changed) {
            if (changed.id === this.options.tvId) {
                this.onReset();
            }
        }, this);
    },
    // Create the image browser combo
    createImageBrowser: function () {
        // Generate opento path
        var openToPath = this.image.sourceImg.src.split('/');
        openToPath.pop();
        openToPath = openToPath.join('/');

        // Create browser component
        var _this = this;
        this.imageBrowser = new ImagePlus.combo.Browser({
            value: this.image.sourceImg.src,
            source: this.options.mediaSource,
            hideSourceCombo: true,
            openTo: openToPath,
            listeners: {
                select: {
                    fn: this.onImageSelected,
                    scope: this
                },
                change: {
                    fn: function (cb, nv) {
                        this.onImageChange(nv);
                    },
                    scope: this
                }
            },
            onTrigger1Click: function () {
                _this.clearImage();
            },

            onTrigger2Click: function () {
                _this.editImage();
            }
        })
    },
    // Create image preview img
    createImagePreview: function () {
        this.imagePreview = new Ext.BoxComponent({
            autoEl: {
                tag: 'img',
                src: ''
            }
        });
    },
    // Create fields for alt-text, caption and credits input
    createTextFields: function () {
        var _this = this;
        this.altTextField = MODx.load({
            xtype: 'panel',
            items: {
                xtype: this.options.altTagOn ? 'textfield' : 'hidden',
                submitValue: false,
                value: this.image.altTag || '',
                listeners: {
                    change: {
                        fn: this.onAltTagChange,
                        scope: this
                    },
                    afterrender: function () {
                        var el = this.getEl();
                        if (el && _this.options.altTagOn) {
                            el.set({'placeholder': _('imageplus.alt_text')});
                            el.insertSibling({
                                tag: 'span',
                                cls: 'icon icon-code',
                                style: 'position: absolute; left: 8px; top: 14px; opacity: 0.6',
                                title: _('imageplus.alt_text')
                            }, 'after', true);
                        }
                    }
                },
                width: 400,
                style: {
                    marginTop: '5px',
                    paddingLeft: '25px'
                }
            }
        });
        this.captionField = MODx.load({
            xtype: 'panel',
            items: {
                xtype: this.options.captionOn ? 'textfield' : 'hidden',
                submitValue: false,
                value: this.image.caption || '',
                listeners: {
                    change: {
                        fn: this.onCaptionChange,
                        scope: this
                    },
                    afterrender: function () {
                        var el = this.getEl();
                        if (el && _this.options.captionOn) {
                            el.set({'placeholder': _('imageplus.caption')});
                            el.insertSibling({
                                tag: 'span',
                                cls: 'icon icon-header',
                                style: 'position: absolute; left: 8px; top: 14px; opacity: 0.6',
                                title: _('imageplus.caption')
                            }, 'after', true);
                        }
                    }
                },
                width: 400,
                style: {
                    marginTop: '5px',
                    paddingLeft: '25px'
                }
            }
        });
        this.creditsField = MODx.load({
            xtype: 'panel',
            items: {
                xtype: this.options.creditsOn ? 'textfield' : 'hidden',
                submitValue: false,
                value: this.image.credits || '',
                listeners: {
                    change: {
                        fn: this.onCreditsChange,
                        scope: this
                    },
                    afterrender: function () {
                        var el = this.getEl();
                        if (el && _this.options.creditsOn) {
                            el.set({'placeholder': _('imageplus.credits')});
                            el.insertSibling({
                                tag: 'span',
                                cls: 'icon icon-copyright',
                                style: 'position: absolute; left: 8px; top: 14px; opacity: 0.6',
                                title: _('imageplus.credits')
                            }, 'after', true);
                        }
                    }
                },
                width: 400,
                style: {
                    marginTop: '5px',
                    paddingLeft: '25px'
                }
            }
        })
    },
    // Fires when the TV field is reset
    generateThumbUrl: function (params) {
        var url = MODx.config.connectors_url + 'system/phpthumb.php';
        var defaults = {
            wctx: 'mgr',
            w: this.options.thumbnailWidth,
            source: this.image.sourceImg.source
        };
        for (var i in params) {
            defaults[i] = params[i];
        }
        var qs = '';
        for (i in defaults) {
            qs += encodeURIComponent(i) + '=' + encodeURIComponent(defaults[i]) + '&';
        }
        if (qs.length > 0) {
            qs = qs.substring(0, qs.length - 1);
            url = url + "?" + qs;
        }
        return url;
    },
    // Fires when the TV field is reset
    onReset: function () {
        this.imageBrowser.setValue('');
        this.image.sourceImg = false;
        this.updatePreviewImage.defer(10, this);
    },
    // Runs after initial render of panel
    onAfterRender: function () {
        this.updateDisplay();
    },
    // Fired when user has selected an image from the browser
    onImageSelected: function (img) {
        var diffImg = (!this.image.sourceImg || (this.image.sourceImg && this.image.sourceImg.src !== img.relativeUrl));

        this.oldSourceImg = {};
        for (var i in this.image.sourceImg) {
            this.oldSourceImg[i] = this.image.sourceImg[i];
        }
        this.image.sourceImg = {
            src: img.relativeUrl,
            width: img.image_width,
            height: img.image_height,
            source: this.options.mediaSource
        };
        // Reset crop rectangle everytime an image is selected to be different from browser
        if (diffImg) {
            this.image.crop.x = 0;
            this.image.crop.y = 0;
            if (this.options.targetRatio) {
                if (this.image.sourceImg.width / this.image.sourceImg.height < this.options.targetRatio) {
                    this.image.crop.width = this.image.sourceImg.width;
                    this.image.crop.height = this.image.sourceImg.height / this.options.targetRatio;
                } else {
                    this.image.crop.width = this.image.sourceImg.width / this.options.targetRatio;
                    this.image.crop.height = this.image.sourceImg.height;
                }
            } else {
                this.image.crop.width = this.image.sourceImg.width;
                this.image.crop.height = this.image.sourceImg.height;
            }
        }
        // If server returns 800x600 or higher, image may be larger so need to get size manually
        if (img.image_width >= 800 || img.image_height >= 600) {
            this.manualGetImageSize();
        }
        // Update display
        if (!this.updateDisplay()) {
            return;
        }
        if (diffImg) {
            this.editImage();
        }
    },
    // Fired when user has changed the image input
    onImageChange: function (src) {
        if (src !== '') {
            var diffImg = (!this.image.sourceImg || (this.image.sourceImg && this.image.sourceImg.src !== src));

            this.oldSourceImg = {};
            for (var i in this.image.sourceImg) {
                this.oldSourceImg[i] = this.image.sourceImg[i];
            }

            this.image.sourceImg = {
                src: src,
                source: this.options.mediaSource
            };

            var baseUrl = ImagePlus.config['sources'][this.image.sourceImg.source].url;
            var img = new Image();
            img.onload = (function (ths) {
                return function () {
                    ths.image.sourceImg.width = this.width;
                    ths.image.sourceImg.height = this.height;

                    // Reset crop rectangle everytime an image is selected to be different from browser
                    if (diffImg) {
                        ths.image.crop.x = 0;
                        ths.image.crop.y = 0;
                        if (ths.options.targetRatio) {
                            if (ths.image.sourceImg.width / ths.image.sourceImg.height < ths.options.targetRatio) {
                                ths.image.crop.width = ths.image.sourceImg.width;
                                ths.image.crop.height = ths.image.sourceImg.height / ths.options.targetRatio;
                            } else {
                                ths.image.crop.width = ths.image.sourceImg.width / ths.options.targetRatio;
                                ths.image.crop.height = ths.image.sourceImg.height;
                            }
                        } else {
                            ths.image.crop.width = ths.image.sourceImg.width;
                            ths.image.crop.height = ths.image.sourceImg.height;
                        }
                    }

                    // Update display
                    if (!ths.updateDisplay()) {
                        return;
                    }
                    if (diffImg) {
                        ths.editImage();
                    }

                    ths.updateDisplay();
                    if (ths.image.crop.width === 0 || ths.image.crop.height === 0) {
                        ths.editImage();
                    }
                }
            })(this);
            img.onerror = (function (ths) {
                return function () {
                    if (!ths.oldSourceImg) {
                        ths.imageBrowser.reset();
                    } else {
                        if (ths.oldSourceImg.crop) {
                            ths.image.crop.x = ths.oldSourceImg.crop.x;
                            ths.image.crop.y = ths.oldSourceImg.crop.y;
                            ths.image.crop.width = ths.oldSourceImg.crop.width;
                            ths.image.crop.height = ths.oldSourceImg.crop.height;
                        }
                        ths.imageBrowser.setValue(ths.lastFileLabel || '');
                    }
                    MODx.msg.alert(_('imageplus.error.image_not_found.title'), _('imageplus.error.image_not_found.msg'));
                    return false;
                }
            })(this);
            img.src = baseUrl + this.image.sourceImg.src;
        } else {
            this.clearImage();
        }
    },
    // Fired when alt-tag field is changed
    onAltTagChange: function (field, value) {
        this.image.altTag = value;
        this.updateValue();
    },
    // Fired when caption-tag field is changed
    onCaptionChange: function (field, value) {
        this.image.caption = value;
        this.updateValue();
    },
    // Fired when credits-tag field is changed
    onCreditsChange: function (field, value) {
        this.image.credits = value;
        this.updateValue();
    },
    // Manually get image size
    manualGetImageSize: function () {
        var baseUrl = ImagePlus.config['sources'][this.image.sourceImg.source].url;
        var img = new Image();
        img.onload = (function (ths) {
            return function () {
                ths.image.sourceImg.width = this.width;
                ths.image.sourceImg.height = this.height;
                ths.updateDisplay();
                if (ths.image.crop.width === 0 || ths.image.crop.height === 0) {
                    ths.editImage();
                }
            }
        })(this);
        img.src = baseUrl + this.image.sourceImg.src;
    },
    // Update the component display on state change
    updateDisplay: function () {

        // Make sure image is large enough to use
        if (!this.checkImageIsLargeEnough()) {
            this.image.sourceImg = this.oldSourceImg;
            if (!this.oldSourceImg) {
                this.imageBrowser.reset();
            } else {
                if (this.oldSourceImg.crop) {
                    this.image.crop.x = this.oldSourceImg.crop.x;
                    this.image.crop.y = this.oldSourceImg.crop.y;
                    this.image.crop.width = this.oldSourceImg.crop.width;
                    this.image.crop.height = this.oldSourceImg.crop.height;
                }
                this.imageBrowser.setValue(this.lastFileLabel || '');
            }
            MODx.msg.alert(_('imageplus.error.image_too_small.title'), _('imageplus.error.image_too_small.msg'));
            return false;
        }
        this.lastFileLabel = this.image.sourceImg.src;

        this.updatePreviewImage.defer(10, this);
        this.updateValue();
        return true;
    },
    // Get hidden field value
    getValue: function (field) {
        this.image = Ext.util.JSON.decode(Ext.get(field).getValue());
        if (!this.image) {
            this.image = {
                'sourceImg': {
                    'height': 0,
                    'width': 0,
                    'source': this.options.mediaSource,
                    'src': Ext.get(field).getValue()
                },
                'crop': {
                    'x': 0,
                    'y': 0,
                    'width': 0,
                    'height': 0
                }
            }
        }
    },
    // Update hidden field value
    updateValue: function () {
        var TV = {
            sourceImg: this.image.sourceImg,
            crop: this.image.crop,
            targetWidth: this.options.targetWidth,
            targetHeight: this.options.targetHeight,
            altTag: this.image.altTag,
            caption: this.image.caption,
            credits: this.image.credits
        };
        var json = JSON.stringify(TV, null, '  ');

        var external = document.getElementById(this.hiddenField);
        var current = external.value || external.innerHTML || '';

        if (current !== '' && JSON.parse(current)) {
            current = JSON.stringify(JSON.parse(current), null, '  ');
        } else {
            current = '';
        }

        // Has value changed and is source image not empty?
        if (external && current !== json && this.image.sourceImg.src !== '') {
            external.value = json;

            // Mark resource as dirty
            MODx.fireResourceFormChange()
        }
    },
    // Checks whether the image is larger than specified crop dimensions
    checkImageIsLargeEnough: function () {
        if (!this.image.sourceImg || this.image === undefined) return true;

        if (this.options.targetWidth > 0 && this.image.sourceImg.width > 0) {
            if (this.options.targetWidth > this.image.sourceImg.width) {
                return false;
            }
        }
        if (this.options.targetHeight > 0 && this.image.sourceImg.height > 0) {
            if (this.options.targetHeight > this.image.sourceImg.height) {
                return false;
            }
        }
        return true;
    },
    // Launch the editor window
    editImage: function () {
        // Create the editor window (if it doesnt exist)
        if (!this.editorWindow && this.image.sourceImg && this.image.sourceImg.src) {

            // Calculate safe image ratio
            var imgW = this.image.sourceImg.width;
            var imgH = this.image.sourceImg.height;
            var maxH = window.innerHeight * 0.7;
            var maxW = window.innerWidth * 0.9;
            var ratio;

            // Is image taller than screen?
            if (imgH > maxH) {
                ratio = maxH / imgH;
                if ((imgW * ratio) > maxW) {
                    ratio = maxW / imgW
                }
            } else {
                if (imgW > maxW) {
                    ratio = maxW / imgW
                } else {
                    ratio = 1;
                }
            }

            this.editorWindow = MODx.load({
                xtype: 'imageplus-window-editor',
                title: _('imageplus.editor_title'),
                image: this.image,
                options: this.options,
                inputPanel: this,
                displayRatio: ratio,
                width: (((imgW * ratio) + 20) <= 200) ? 200 : ((imgW * ratio) + 20),
                height: ((imgH * ratio) + 20 + 84),
                crop: this.image.crop,
                padding: 10
            });

            // Show the window
            this.editorWindow.show();
        }
    },
    clearImage: function () {
        this.image.sourceImg = null;
        this.oldSourceImg = null;
        this.lastFileLabel = '';
        if (this.imagePreview.el) {
            jQuery(this.imagePreview.el.dom).attr('src', 'data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==');
        }
        document.getElementById(this.hiddenField).innerHTML = '';
        document.getElementById(this.hiddenField).value = '';
        this.imageBrowser.setValue('');
        MODx.fireResourceFormChange();
    },
    // Receive new cropping dimensions from editor
    updateFromEditor: function (crop) {
        this.image.crop.x = crop.x;
        this.image.crop.y = crop.y;
        this.image.crop.width = crop.width;
        this.image.crop.height = crop.height;

        if (!this.oldSourceImg) {
            this.oldSourceImg = {};
            for (var i in this.image.sourceImg) {
                this.oldSourceImg[i] = this.image.sourceImg[i];
            }
        }
        this.oldSourceImg.crop = {};
        this.oldSourceImg.crop.x = crop.x;
        this.oldSourceImg.crop.y = crop.y;
        this.oldSourceImg.crop.width = crop.width;
        this.oldSourceImg.crop.height = crop.height;

        this.editorWindow = null;
        this.updateDisplay();
    },
    updatePreviewImage: function () {
        if (!this.image.sourceImg || this.image.crop.width === 0) {
            this.imagePreview.hide();
            return;
        }
        var url = this.generateThumbUrl({
            src: this.image.sourceImg.src,
            sw: this.image.crop.width,
            sh: this.image.crop.height,
            sx: this.image.crop.x,
            sy: this.image.crop.y
        });
        if (this.imagePreview.el) {
            this.imagePreview.el.dom.src = url;
            this.imagePreview.show()
        }
    }

});
Ext.reg('imageplus-panel-input', ImagePlus.panel.input);

ImagePlus.form.TripleTriggerField = Ext.extend(Ext.form.TriggerField, {
    /**
     * @cfg {String} trigger1Class
     * An additional CSS class used to style the trigger button.  The trigger will always get the
     * class 'x-form-trigger' by default and triggerClass will be appended if specified.
     */

    /**
     * @cfg {String} trigger2Class
     * An additional CSS class used to style the trigger button.  The trigger will always get the
     * class 'x-form-trigger' by default and triggerClass will be appended if specified.
     */

    /**
     * @cfg {String} trigger3Class
     * An additional CSS class used to style the trigger button.  The trigger will always get the
     * class 'x-form-trigger' by default and triggerClass will be appended if specified.
     */
    initComponent: function () {
        ImagePlus.form.TripleTriggerField.superclass.initComponent.call(this);

        this.triggerConfig = {
            tag: 'span', cls: 'x-form-triple-triggers', cn: [
                {tag: 'div', cls: 'x-form-trigger ' + this.trigger1Class},
                {tag: 'div', cls: 'x-form-trigger ' + this.trigger2Class},
                {tag: 'div', cls: 'x-form-trigger ' + this.trigger3Class}
            ]
        };
    },
    getTrigger: function (index) {
        return this.triggers[index];
    },
    initTrigger: function () {
        var ts = this.trigger.select('.x-form-trigger', true);
        var triggerField = this;
        ts.each(function (t, all, index) {
            var triggerIndex = 'Trigger' + (index + 1);
            t.hide = function () {
                var w = triggerField.wrap.getWidth();
                this.dom.style.display = 'none';
                triggerField.el.setWidth(w - triggerField.trigger.getWidth());
                this['hidden' + triggerIndex] = true;
            };
            t.show = function () {
                var w = triggerField.wrap.getWidth();
                this.dom.style.display = '';
                triggerField.el.setWidth(w - triggerField.trigger.getWidth());
                this['hidden' + triggerIndex] = false;
            };

            if (this['hide' + triggerIndex]) {
                t.dom.style.display = 'none';
                this['hidden' + triggerIndex] = true;
            }
            this.mon(t, 'click', this['on' + triggerIndex + 'Click'], this, {preventDefault: true});
            t.addClassOnOver('x-form-trigger-over');
            t.addClassOnClick('x-form-trigger-click');
        }, this);
        this.triggers = ts.elements;
    },
    getTriggerWidth: function () {
        var tw = 0;
        Ext.each(this.triggers, function (t, index) {
            var triggerIndex = 'Trigger' + (index + 1),
                w = t.getWidth();
            if (w === 0 && !this['hidden' + triggerIndex]) {
                tw += this.defaultTriggerWidth;
            } else {
                tw += w;
            }
        }, this);
        return tw;
    },
    // private
    onDestroy: function () {
        Ext.destroy(this.triggers);
        ImagePlus.form.TripleTriggerField.superclass.onDestroy.call(this);
    },
    /**
     * The function that should handle the trigger's click event.  This method does nothing by default
     * until overridden by an implementing function. See {@link Ext.form.TriggerField#onTriggerClick}
     * for additional information.
     * @method
     * @param {EventObject} e
     */
    onTrigger1Click: Ext.emptyFn,
    /**
     * The function that should handle the trigger's click event.  This method does nothing by default
     * until overridden by an implementing function. See {@link Ext.form.TriggerField#onTriggerClick}
     * for additional information.
     * @method
     * @param {EventObject} e
     */
    onTrigger2Click: Ext.emptyFn,
    /**
     * The function that should handle the trigger's click event.  This method does nothing by default
     * until overridden by an implementing function. See {@link Ext.form.TriggerField#onTriggerClick}
     * for additional information.
     * @method
     * @param {EventObject} e
     */
    onTrigger3Click: Ext.emptyFn
});

ImagePlus.combo.Browser = function (config) {
    config = config || {};
    Ext.applyIf(config, {
        submitValue: false,
        width: 400,
        triggerAction: 'all',
        trigger1Class: 'x-form-clear-trigger',
        trigger2Class: 'x-form-crop-trigger',
        trigger3Class: 'x-form-image-trigger',
        source: config.source || MODx.config.default_media_source
    });
    ImagePlus.combo.Browser.superclass.constructor.call(this, config);
    this.config = config;
};
Ext.extend(ImagePlus.combo.Browser, ImagePlus.form.TripleTriggerField, {
    browser: null,

    onTrigger3Click: function (btn) {
        if (this.disabled) {
            return false;
        }
        this.browser = MODx.load({
            xtype: 'modx-browser',
            closeAction: 'close',
            id: Ext.id(),
            multiple: true,
            source: this.config.source || 1,
            hideFiles: this.config.hideFiles || false,
            rootVisible: this.config.rootVisible || false,
            allowedFileTypes: this.config.allowedFileTypes || '',
            wctx: this.config.wctx || 'web',
            openTo: this.config.openTo || '',
            rootId: this.config.rootId || '/',
            hideSourceCombo: this.config.hideSourceCombo || false,
            listeners: {
                select: {
                    fn: function (data) {
                        this.setValue(data.relativeUrl);
                        this.fireEvent('select', data);
                    }, scope: this
                }
            }
        });
        this.browser.show(btn);
        return true;
    },

    onDestroy: function () {
        ImagePlus.combo.Browser.superclass.onDestroy.call(this);
    }
});
Ext.reg('imageplus-combo-browser', ImagePlus.combo.Browser);
