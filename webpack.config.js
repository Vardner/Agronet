'use strict';

const path = require('path');
const webpack = require('webpack');
const devMode = process.env.NODE_ENV !== 'production';

const glob = require('glob');
const CopyWebpackPlugin = require('copy-webpack-plugin');
const UglifyJsPlugin = require('uglifyjs-webpack-plugin');
const MiniCssExtractPlugin = require("mini-css-extract-plugin");
const autoprefixer = require("autoprefixer");

function getPlugins () {
  const plugins = [];

  if (devMode) {
    plugins.push(
        new webpack.LoaderOptionsPlugin({
          options: {
            postcss: [
              autoprefixer()
            ]
          }
        })
    );
  }

  plugins.push(
      new CopyWebpackPlugin([
        {
          from: path.resolve(__dirname, 'resources/images/'),
          to: path.resolve(__dirname, 'public/images/'),
          toType: 'dir'
        },
        {
          from: path.resolve(__dirname, 'resources/fonts/'),
          to: path.resolve(__dirname, 'public/fonts/'),
          toType: 'dir'
        }
      ])
  );

  plugins.push(
      new webpack.ProvidePlugin({
        $: 'jquery',
        Vue: ['vue/dist/vue.esm.js', 'default']
      }),
  );

  plugins.push(
      new MiniCssExtractPlugin({
        filename: "[name].css",
      }),
  );

  return plugins;
}

module.exports = {
  mode: devMode ? 'development' : 'production',
  watch: true,

  entry: glob.sync('./resources/js/frontend/**/*.js').concat(['./resources/sass/app.scss']),

  output: {
    path: path.resolve(__dirname, 'public/js/frontend'),
    filename: '[name].js'
  },

  optimization: {
    noEmitOnErrors: true,
    minimizer: [
      new UglifyJsPlugin({
        include: path.resolve(__dirname, 'resources/js/frontend/'),
        parallel: true,
        cache: true,
        uglifyOptions: {
          mangle: true,
          ie8: false,
        },
        sourceMap: true
      })
    ]
  },

  watchOptions: {
    aggregateTimeout: 100
  },

  devtool: 'source-map',

  module: {
    rules: [
      {
        loader: 'eslint-loader',
        enforce: 'pre',
        test: /\.js$/,
        exclude: /node_modules/,
        include: path.resolve(__dirname, 'resources/js/frontend/'),
        options: {
          configFile: 'eslint.json',
          formatter: require('eslint-formatter-friendly'),
          failOnError: true,
        }
      },
      {
        test: /\.js$/,
        exclude: /node_modules/,
        include: path.resolve(__dirname, 'resources/js/frontend/'),
        loader: 'babel-loader',
        options: {
          presets: [
            [
              '@babel/preset-env'
            ]
          ]
        }
      },
      {
        test: /\.scss$/,
        use: [
          // "style-loader",
          MiniCssExtractPlugin.loader,
          "css-loader",
          "postcss-loader",
          "sass-loader"
        ]
      }
    ]
  },

  plugins: getPlugins(),
};
