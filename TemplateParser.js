/*global Mustache */
( function ( mw, $ ) {

	// Overloading Mustache lookup function to support i18n params

	var Context = Mustache.Context;
	var _lookup = Context.prototype.lookup;
	Context.prototype.lookup = function i18nLookup (name) {
		if( name.indexOf('_ ') === 0 || name.indexOf('__ ') === 0 ) {
			var msg_key = name.substr( 2 ).replace(/"/g,'');
			return mw.msg(msg_key);
		}
		return _lookup.apply(this, arguments);
	};

}( mediaWiki, jQuery ) );