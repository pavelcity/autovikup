const mix = require('laravel-mix');


mix.js('resources/js/app.js', 'public/js')
	.postCss('resources/css/app.css', 'public/css', [
		require('postcss-import'),
		require('tailwindcss'),
	]);

if (mix.inProduction()) {
	mix.version();
}



mix.sass('resources/css/admin_styles.scss', 'public/adminka');
mix.sass('resources/css/addtitional.scss', 'public/css');






 

