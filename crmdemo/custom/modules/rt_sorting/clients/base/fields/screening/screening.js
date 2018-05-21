/**
 * Created by ahsan.latif on 6/30/16.
 */
({
    /**
     * Called when initializing the field
     * @param options
     */
    extendsFrom: 'EnumField',
    _render: function () {
        this.setPotentialClientList();
        this._super('_render');

    },
    setPotentialClientList: function(){
        var self = this;
        if (!this.items || _.isEmpty(this.items)) {
            var mur_client_n_list = app.data.createBeanCollection('mur_client_n_list');
            mur_client_n_list.fetch({
                fields: ['id', 'name'],
                filter: [{'active_on_portal': '1'}],
                limit: 1000,
                success: function(){
                    var data = {};
                    _.each(mur_client_n_list.models, function(model){
                            var value = model.get('name');
                            data[value] = value;
                    });
                    self.items = data;
                }
            });
        }
    },
    /**
     * Called when formatting the value for display
     * @param value
     */
    format: function (value) {
        return this._super('format', [value]);
    },
    /**
     * Called when unformatting the value for storage
     * @param value
     */
    unformat: function (value) {
        return this._super('unformat', [value]);
    }
})
