<div id="tv-input-properties-form{$tv}"></div>
<script type="text/javascript">
    // <![CDATA[
    {literal}
    var params = {
        {/literal}{foreach from=$params key=k item=v name='p'}
        '{$k}': '{$v|escape:"javascript"}'{if NOT $smarty.foreach.p.last}, {/if}
        {/foreach}{literal}
    };
    var oc = {
        'change': {
            fn: function () {
                Ext.getCmp('modx-panel-tv').markDirty();
            }, scope: this
        }
    };
    MODx.load({
        xtype: 'panel',
        layout: 'form',
        autoHeight: true,
        cls: 'form-with-labels',
        border: false,
        labelAlign: 'top',
        items: [{
            cls: 'x-form-item imageplus-section',
            html: '<label class="x-form-item-label" style="padding-bottom: 0">' +
            _('imageplus.section') + '</label><label class="desc-under" style="">' +
            _('imageplus.section_desc') + '</label>'
        }, {
            xtype: 'sizes-ratio-combo',
            fieldLabel: _('imageplus.selectConfig{/literal}{if $forceconfig}Force{/if}{literal}'),
            name: 'inopt_selectConfig',
            id: 'inopt_selectConfig{/literal}{$tv}{literal}',
            tvId: '{/literal}{$tv}{literal}',
            labelAlign: 'left',
            data: {/literal}{$selectconfig}{literal},
            hidden: {/literal}{$hide}{literal},
            anchor: '100%'
        }, {
            xtype: MODx.expandHelp ? 'label' : 'hidden',
            forId: 'inopt_selectConfig{/literal}{$tv}{literal}',
            html: _('imageplus.selectConfig{/literal}{if $forceconfig}Force{/if}{literal}_desc'),
            cls: 'desc-under'
        }, {
            layout: 'column',
            items: [{
                columnWidth: .5,
                layout: 'form',
                labelAlign: 'top',
                items: [{
                    xtype: 'textfield',
                    fieldLabel: _('imageplus.targetwidth'),
                    name: 'inopt_targetWidth',
                    id: 'inopt_targetWidth{/literal}{$tv}{literal}',
                    value: params['targetWidth'] || '',
                    readOnly: {/literal}{if $forceconfig}true{else}false{/if}{literal},
                    anchor: '100%',
                    listeners: oc
                }, {
                    xtype: MODx.expandHelp ? 'label' : 'hidden',
                    forId: 'inopt_targetWidth{/literal}{$tv}{literal}',
                    html: _('imageplus.targetwidth_desc'),
                    cls: 'desc-under'
                }, {
                    xtype: 'textfield',
                    fieldLabel: _('imageplus.targetheight'),
                    name: 'inopt_targetHeight',
                    id: 'inopt_targetHeight{/literal}{$tv}{literal}',
                    value: params['targetHeight'] || '',
                    readOnly: {/literal}{if $forceconfig}true{else}false{/if}{literal},
                    anchor: '100%',
                    listeners: oc
                }, {
                    xtype: MODx.expandHelp ? 'label' : 'hidden',
                    forId: 'inopt_targetHeight{/literal}{$tv}{literal}',
                    html: _('imageplus.targetheight_desc'),
                    cls: 'desc-under'
                }]
            }, {
                columnWidth: .5,
                layout: 'form',
                labelAlign: 'top',
                items: [{
                    xtype: 'textfield',
                    fieldLabel: _('imageplus.targetRatio'),
                    name: 'inopt_targetRatio',
                    id: 'inopt_targetRatio{/literal}{$tv}{literal}',
                    value: params['targetRatio'] || '',
                    readOnly: {/literal}{if $forceconfig}true{else}false{/if}{literal},
                    anchor: '100%',
                    listeners: oc
                }, {
                    xtype: MODx.expandHelp ? 'label' : 'hidden',
                    forId: 'inopt_targetRatio{/literal}{$tv}{literal}',
                    html: _('imageplus.targetRatio_desc'),
                    cls: 'desc-under'
                }, {
                    xtype: 'textfield',
                    fieldLabel: _('imageplus.thumbnailWidth'),
                    name: 'inopt_thumbnailWidth',
                    id: 'inopt_thumbnailWidth{/literal}{$tv}{literal}',
                    value: params['thumbnailWidth'] || '',
                    anchor: '100%',
                    listeners: oc
                }, {
                    xtype: MODx.expandHelp ? 'label' : 'hidden',
                    forId: 'inopt_thumbnailWidth{/literal}{$tv}{literal}',
                    html: _('imageplus.thumbnailWidth_desc'),
                    cls: 'desc-under'
                }]
            }]
        }, {
            layout: 'column',
            items: [{
                columnWidth: .33,
                layout: 'form',
                labelAlign: 'top',
                items: [{
                    xtype: 'combo-boolean',
                    fieldLabel: _('imageplus.allowAltTag'),
                    name: 'inopt_allowAltTag',
                    hiddenName: 'inopt_allowAltTag',
                    id: 'inopt_allowAltTag{/literal}{$tv}{literal}',
                    value: !(params['allowAltTag'] === 0 || params['allowAltTag'] === 'false'),
                    labelAlign: 'left',
                    anchor: '100%',
                    listeners: oc
                }, {
                    xtype: MODx.expandHelp ? 'label' : 'hidden',
                    forId: 'inopt_allowAltTag{/literal}{$tv}{literal}',
                    html: _('imageplus.allowAltTag_desc'),
                    cls: 'desc-under'
                }]
            }, {
                columnWidth: .33,
                layout: 'form',
                labelAlign: 'top',
                items: [{
                    xtype: 'combo-boolean',
                    fieldLabel: _('imageplus.allowCaption'),
                    name: 'inopt_allowCaption',
                    hiddenName: 'inopt_allowCaption',
                    id: 'inopt_allowCaption{/literal}{$tv}{literal}',
                    value: (params['allowCaption'] === 1 || params['allowCaption'] === 'true'),
                    labelAlign: 'left',
                    anchor: '100%',
                    listeners: oc
                }, {
                    xtype: MODx.expandHelp ? 'label' : 'hidden',
                    forId: 'inopt_allowCaption{/literal}{$tv}{literal}',
                    html: _('imageplus.allowCaption_desc'),
                    cls: 'desc-under'
                }]
            }, {
                columnWidth: .34,
                layout: 'form',
                labelAlign: 'top',
                items: [{
                    xtype: 'combo-boolean',
                    fieldLabel: _('imageplus.allowCredits'),
                    name: 'inopt_allowCredits',
                    hiddenName: 'inopt_allowCredits',
                    id: 'inopt_allowCredits{/literal}{$tv}{literal}',
                    value: (params['allowCredits'] === 1 || params['allowCredits'] === 'true'),
                    labelAlign: 'left',
                    anchor: '100%',
                    listeners: oc
                }, {
                    xtype: MODx.expandHelp ? 'label' : 'hidden',
                    forId: 'inopt_allowCredits{/literal}{$tv}{literal}',
                    html: _('imageplus.allowCredits_desc'),
                    cls: 'desc-under'
                }]
            }]
        }, {
            cls: "treehillstudio_about",
            html: '<img width="133" height="40" src="' + ImagePlus.config.assetsUrl + 'img/mgr/treehill-studio-small.png"' + ' srcset="' + ImagePlus.config.assetsUrl + 'img/mgr/treehill-studio-small@2x.png 2x" alt="Treehill Studio">',
            listeners: {
                afterrender: function (component) {
                    component.getEl().select('img').on('click', function () {
                        var msg = '<span style="display: inline-block; text-align: center;">&copy; 2013-2015 by Alan Pich <a href="https://github.com/alanpich" target="_blank">github.com/alanpich</a><br>' +
                                '<img src="' + ImagePlus.config.assetsUrl + 'img/mgr/treehill-studio.png" srcset="' + ImagePlus.config.assetsUrl + 'img/mgr/treehill-studio@2x.png 2x" alt="Treehill Studio" style="margin-top: 10px"><br>' +
                                '&copy; 2015-2021 by <a href="https://treehillstudio.com" target="_blank">treehillstudio.com</a></span>';
                        Ext.Msg.show({
                            title: _('imageplus') + ' ' + ImagePlus.config.version,
                            msg: msg,
                            buttons: Ext.Msg.OK,
                            cls: 'treehillstudio_window',
                            width: 330
                        });
                    });
                }
            }
        }],
        renderTo: 'tv-input-properties-form{/literal}{$tv}{literal}'
    });
    // ]]>
</script>
{/literal}
