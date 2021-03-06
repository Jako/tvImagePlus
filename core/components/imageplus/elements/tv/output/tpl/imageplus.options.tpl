<div id="tv-output-properties-form{$tv}"></div>
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
            xtype: 'textfield',
            fieldLabel: _('imageplus.phpThumbParams'),
            description: MODx.expandHelp ? '' : _('imageplus.phpThumbParams_desc'),
            name: 'prop_phpThumbParams',
            id: 'prop_phpThumbParams{/literal}{$tv}{literal}',
            value: params['phpThumbParams'] || '',
            anchor: '100%',
            listeners: oc
        }, {
            xtype: MODx.expandHelp ? 'label' : 'hidden',
            forId: 'prop_phpThumbParams{/literal}{$tv}{literal}',
            html: _('imageplus.phpThumbParams_desc'),
            cls: 'desc-under'
        }, {
            xtype: 'modx-combo',
            url: MODx.config.connectors_url + 'index.php',
            baseParams: {
                action: 'element/chunk/getlist'
            },
            pageSize: 20,
            fields: ['name', 'id'],
            displayField: 'name',
            valueField: 'name',
            typeAhead: true,
            editable: true,
            fieldLabel: _('imageplus.outputChunk'),
            description: MODx.expandHelp ? '' : _('imageplus.outputChunk_desc'),
            name: 'prop_outputChunk',
            id: 'prop_outputChunk{/literal}{$tv}{literal}',
            value: params['outputChunk'] || '',
            anchor: '100%',
            listeners: oc
        }, {
            xtype: MODx.expandHelp ? 'label' : 'hidden',
            forId: 'prop_outputChunk{/literal}{$tv}{literal}',
            html: _('imageplus.outputChunk_desc'),
            cls: 'desc-under'
        }, {
            xtype: 'combo-boolean',
            fieldLabel: _('imageplus.generateUrl'),
            description: MODx.expandHelp ? '' : _('imageplus.generateUrl_desc') + '<br><span class="red">' + _('imageplus.generateUrl_desc_warning') + '</span>',
            name: 'prop_generateUrl',
            hiddenName: 'prop_generateUrl',
            id: 'prop_generateUrl{/literal}{$tv}{literal}',
            value: (params['generateUrl'] === 1 || params['generateUrl'] === 'true'),
            anchor: '100%',
            listeners: oc
        }, {
            xtype: MODx.expandHelp ? 'label' : 'hidden',
            forId: 'prop_generateUrl{/literal}{$tv}{literal}',
            html: _('imageplus.generateUrl_desc') + '<br><span class="red">' + _('imageplus.generateUrl_desc_warning') + '</span>',
            cls: 'desc-under'
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
        renderTo: 'tv-output-properties-form{/literal}{$tv}{literal}'
    });
    // ]]>
</script>
{/literal}
