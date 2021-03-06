/**
 * Image+ Custom Manager Page Script
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

var imagePlus = function (config) {
    config = config || {};
    imagePlus.superclass.constructor.call(this, config);
};

Ext.extend(imagePlus, Ext.Component, {
    page: {}, window: {}, grid: {}, tree: {}, panel: {}, combo: {}, config: {}, jquery: {}, form: {},

    generateThumbUrl: function (params) {
        return this.generatePhpThumbOfUrl(params);
    },

    generatePhpThumbOfUrl: function (params) {
        var url = MODx.config.connectors_url + 'system/phpthumb.php?';
        var defaults = {
            wctx: 'mgr',
            w: 150,
            source: 1
        };
        for (var i in params) {
            defaults[i] = params[i]
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

    warnAboutUnmetDependencies: function () {
        var warningWindow = MODx.load({
            xtype: 'modx-window',
            title: 'Image+ Warning – Unmet Dependencies',
            modal: true,
            padding: 25,
            allowDrop: false,
            resizable: true,
            collapsible: true,
            maximizable: true,
            buttons: [{
                text: _('ok'),
                handler: function (L) {
                    L.ownerCt.ownerCt.close();
                }
            }],
            html: '<h3>You don\'t have any crop engines!</h3>' +
            '<p>Before you can use Image+, you need at least one Crop Engine installed to handle image manipulation.</p>' +
            '<p>A quick fix is to install either pThumb, phpThumbOf, phpThumbsUp or phpThumbOn from the MODX Package Repository</p>'
        });
        warningWindow.show();
    }
});
Ext.reg('imageplus', imagePlus);

ImagePlus = new imagePlus();
