var elixir = require('laravel-elixir');

require('laravel-elixir-sass-compass');

require('laravel-elixir-webpack-official');


var publicPath = 'html',
    cssPath = publicPath + '/css',
    jsPath = publicPath + '/js';

/**
 * Over write some elixir settings
 */
elixir.config.publicPath = publicPath;
elixir.config.assetsPath = 'resources';
elixir.config.sourcemaps = true;

/**
 * Main Elixir function
 */
elixir(function(mix) {
    //-- copy some files over to use.
    mix.copy('node_modules/jquery/dist/jquery.min.js','html/js/jquery.min.js');
    mix.copy('node_modules/normalize.css/normalize.css','resources/sass/vendor/normalize.scss');

    mix.compass(['main.scss','footer.scss'],'html/css/')
        .webpack('app.js', 'html/js/app.min.js');

});
