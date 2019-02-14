'use strict';

const path = require('path');
const webpack = require('webpack');
const glob = require('glob');
const devMode = process.env.NODE_ENV !== 'production';
const UglifyJsPlugin = require('uglifyjs-webpack-plugin');
const MiniCssExtractPlugin = require("mini-css-extract-plugin");
const autoprefixer = require("autoprefixer");

// const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

// mix.js('resources/js/app.js', 'public/js')
//     .sass('resources/sass/app.scss', 'public/css');

module.exports = {
    mode: devMode ? 'development' : 'production',

    entry: [glob.sync('./resources/js/frontend/**/*.js'), glob.sync('./resources/sass/**/*.scss')],

    output: {
        path: path.resolve(__dirname,'public/js/frontend'),
        filename: '[name].js'
    },

    optimization: {
        minimizer: [
            new UglifyJsPlugin({
                include: path.resolve(__dirname, 'resources/js/frontend/'),
                parallel: true,
                cache: true,
                uglifyOptions: {
                    mangle: true,
                    ie8: false,
                },
                sourceMap: devMode
            })
        ]
    },

    watch: devMode,

    watchOptions: {
        aggregateTimeout: 100
    },

    devtool: devMode ? 'source-map' : null,

    module: {
        rules: [
            {
                loader: 'eslint-loader',
                enforce: 'pre',
                test: /\.js$/,
                exclude: /node_modules/,
                include: path.resolve (__dirname, 'resources/js/frontend/'),
                options: {
                    configFile: 'eslint.json',
                    formatter: require('eslint-formatter-friendly'),
                    failOnError: true,
                }
            },
            {
                test: /\.js$/,
                exclude: /node_modules/,
                include: path.resolve (__dirname, 'resources/js/frontend/'),
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
                include: path.resolve (__dirname, 'resources/sass/frontend/'),
                use: [
                    MiniCssExtractPlugin.loader,
                    "css-loader",
                    "postcss-loader",
                    "sass-loader"
                ]
            }
        ]
    },

    plugins: [
        new webpack.NoEmitOnErrorsPlugin(),

        new webpack.DefinePlugin({
            devMode: devMode
        }),

        new webpack.ProvidePlugin({
            $: 'jquery'
        }),

        new MiniCssExtractPlugin({
            path: "./resources/sass/app.scss",
            filename: "[name].css"
        }),

        new webpack.LoaderOptionsPlugin({
            options: {
                postcss: [
                    autoprefixer()
                ]
            }
        })
    ],
};
