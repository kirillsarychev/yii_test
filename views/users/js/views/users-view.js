var app = app || {};

(function(){
	app.UserListView = Marionette.CompositeView.extend({
		tagName: 'div',

		className: 'row',

		template: '#list-users',

		childView: app.UserView,

		childViewContainer: 'tbody',

		emptyView: app.EmptyView,

		events: {
			'click .add': 'addClicked'
		},

		addClicked: function(ev) {
			ev.preventDefault();
			Backbone.history.navigate("users/new");
			$('#wrapper').empty().append(new app.UserEditView({model: new app.User()}).render().$el);		
		}
	});
})();

