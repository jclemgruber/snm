var webpack = require('webpack');

Elixir.webpack.mergeConfig({
  module: {
    loaders: [{
      test: /resource\/vendor\/js\/.+\.(jsx|js)$/,
      loader: 'imports?jQuery=jquery,$=jquery,this=>window'
    }]
  },

  plugins: [
    new webpack.ProvidePlugin({
        'window.jQuery': 'jquery',
        'window.$': 'jquery',
    }),
  ],

});