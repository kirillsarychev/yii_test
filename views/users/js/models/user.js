var app = app || {};

(function() {
	app.userStorage = app.userStorage || new Backbone.LocalStorage('users');
	
	app.User = Backbone.Model.extend({
		urlRoot: '/users',
		localStorage: app.userStorage,

		defaults: {
			Login: 'admin',
			Password: 'admin',
			Email: 'admin@admin.com'
		}
	});
})();
