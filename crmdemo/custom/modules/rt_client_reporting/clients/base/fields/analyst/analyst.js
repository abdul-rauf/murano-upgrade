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
        this.setUsersList();
        this._super('_render');

    },
    setUsersList: function(){
        var self = this;
        if (!this.items || _.isEmpty(this.items)) {
            var users = app.data.createBeanCollection('Users');
            users.fetch({
                fields: ['user_name'],
                filter: [{'status': "Active"}],
                limit: 1000,
                success: function(){
                    var data = {};
                    _.each(users.models, function(model){
                            var value = model.get('user_name');
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