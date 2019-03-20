'use strict';
const path = require('path');
const devMode = process.env.NODE_ENV !== 'production';
const webpack = require('webpack');

import { getIfUtils, removeEmpty } from 'webpack-config-utils';



const WebpackBar = require('webpackbar');
const Dotenv = require('dotenv-webpack');
const CleanWebpackPlugin = require('clean-webpack-plugin');
const MiniCssExtractPlugin = require('mini-css-extract-plugin')
var WebpackLaravelMixManifest = require('webpack-laravel-mix-manifest')
const OptimizeCssAssetsPlugin = require('optimize-css-assets-webpack-plugin')
var WebpackNotifierPlugin = require('webpack-notifier');
const CopyWebpackPlugin = require('copy-webpack-plugin');
const VueLoaderPlugin = require('vue-loader/lib/plugin');
const VuetifyLoaderPlugin = require('vuetify-loader/lib/plugin')

function isHot(){
    return process.argv.includes('--hot')
}
function getPlugins() {
    var plugins = []

    if (!isHot()) {
        plugins.push(
            new CleanWebpackPlugin([
                'public/admin',
                'public/js',
                'public/css',
                'public/fonts',
                'public/images',
                'public/hot',
                'public/mix-manifest.json'
            ])
        )
    }
    plugins.push(
        new Dotenv({
            // path: './some.other.env', // load this now instead of the ones in '.env'
            // safe: true,
            // load '.env.example' to verify the '.env' variables are all set. Can also be a string to a different file.
            systemvars: true,
            // load all the predefined 'process.env' variables which will trump anything local per dotenv specs.
            silent: true
            // hide any errors
        })
    );
    plugins.push(
        new VuetifyLoaderPlugin()
    );
    plugins.push(
        new MiniCssExtractPlugin({
            filename: devMode ? 'css/[name].css' : 'css/[name].[hash].css',
            chunkFilename: devMode ? 'css/[id].css' : 'css/[id].[hash].css'
        })
    );
    plugins.push(
        new WebpackLaravelMixManifest.default()
    );
    plugins.push(
        new WebpackNotifierPlugin({alwaysNotify: true})
    );
    plugins.push(
        new CopyWebpackPlugin(
            [
                {
                    from: path.resolve(__dirname, 'resources/assets/images/'),
                    to: path.resolve(__dirname, 'public/images/'),
                    // flatten: false
                    toType: 'dir'
                },
                {
                    from: path.resolve(__dirname, 'resources/assets/fonts/'),
                    to: path.resolve(__dirname, 'public/fonts/'),
                    // flatten: false
                    toType: 'dir'
                }
            ],

        )
    );
    plugins.push(
        new VueLoaderPlugin()
    );
    plugins.push(
        new WebpackBar()
    );

    return plugins;
}

module.exports = {
    stats: 'minimal',
    devServer: {
        noInfo: true,
        stats: 'minimal'
    },
    resolve: {
        modules: [
            'node_modules',
            path.resolve(__dirname, '/')
        ],
        extensions: ['.js', '.vue', '.css', '.scss'],
        alias: {
            '@': path.resolve(__dirname, 'resources/js'),
            '$stylepath': path.resolve(__dirname, 'resources/styles'),
            '$': path.resolve(__dirname, 'resources/assets'),
            'vue$': 'vue/dist/vue.esm.js'
        }
    },
    plugins: getPlugins(),
    optimization: {
        splitChunks: {
            chunks: 'async',
            minSize: 30000,
            maxSize: 0,
            minChunks: 1,
            maxAsyncRequests: 10,
            maxInitialRequests: 3,
            automaticNameDelimiter: '~',
            name: true,
            cacheGroups: {
                commons: {
                    name: 'commons',
                    chunks: 'initial',
                    // this is the optimal setting for 3 entries
                    minChunks: 3
                },

                // sitewide styles
                // siteStyles: {
                //     name: 'sitewide',
                //     test: (m,c,entry = 'sitewide') => m.constructor.name === 'CssModule' && recursiveIssuer(m) === entry,
                //     chunks: 'all',
                //     enforce: true
                // },
                // dashboardStyles: {
                //     name: 'dashboard',
                //     test: (m,c,entry = 'dashboard') => m.constructor.name === 'CssModule' && recursiveIssuer(m) === entry,
                //     chunks: 'all',
                //     enforce: true
                // }
            }
        }
    },
    performance: {
        maxEntrypointSize: 500000,
        maxAssetSize: 300000
    },
    module: {
        rules: [
            {
                test: /\.vue$/,
                use: [
                    {
                        loader: 'vue-loader'
                    }
                ],
            },
            {
                test: /\.?js$/,
                exclude: /node_modules\/(?!(vuetify|vue-scrollto|animated-number-vue)\/).*/,
                use: [
                    {
                        loader: 'babel-loader',
                        options: {
                            extends: path.join(process.cwd(), './babel.config.js')
                        }
                    },
                    // {
                    //     loader: "eslint-loader"
                    // },
                    {
                        loader: 'source-map-loader',
                        options: {
                            enforce: 'pre'
                        }
                    }
                ]

            },
            {
                test: /\.css$/,
                use: [
                    process.env.NODE_ENV !== 'production' ? 'vue-style-loader' : MiniCssExtractPlugin.loader,
                    // MiniCssExtractPlugin.loader,
                    'css-loader'
                ]
            },
            {
                test: /\.scss$/,
                use: [
                    {
                        loader: 'vue-style-loader',
                    },
                    MiniCssExtractPlugin.loader, {
                        loader: 'css-loader',
                        options: {
                            sourceMap: true
                        }
                    },
                    {
                        loader: 'postcss-loader',
                        options: {
                            plugins: () => [require('autoprefixer')({
                                'browsers': ['> 1%', 'last 2 versions']
                            })],
                            sourceMap: true
                        }
                    },
                    {
                        loader: 'sass-loader',
                        options: {
                            sourceMap: true
                        }
                    }
                ]
            },
            {
                test: /\.pug$/,
                oneOf: [
                    // this applies to `<template lang="pug">` in Vue components
                    {
                        resourceQuery: /^\?vue/,
                        use: ['pug-plain-loader']
                    },
                    // this applies to pug imports inside JavaScript
                    {
                        use: ['raw-loader', 'pug-plain-loader']
                    }
                ]
            },
            {
                test: /\.styl(us)?$/,
                use: [
                    'vue-style-loader', // creates style nodes from JS strings
                    'css-loader', // translates CSS into CommonJS
                    'stylus-loader' // compiles Sass to CSS, using Node Sass by default
                ]
            },

            // {
            //     test: /\.(woff2?|eot|ttf|otf)(\?.*)?$/,
            //     loader: 'url',
            //     query: {
            //         limit: 10000,
            //         name: path.posix.join('path/to/yours/assets/directory', 'fonts/[name].[hash:7].[ext]')
            //     }
            // }
            {
                test: /\.(woff(2)?|ttf|eot|otf|svg)(\?v=\d+\.\d+\.\d+)?$/,
                use: [{
                    loader: 'file-loader',
                    options: {
                        name: '[name].[ext]',
                        outputPath: 'fonts/'
                    }
                }]
            }

        ]
    },
    entry: {
        // 'test': path.resolve(__dirname, 'resources/assets/js/app-test.js'),
        'app-spa': path.resolve(__dirname, 'resources/js/app-spa.js'),
        'app-sitewide': path.resolve(__dirname, 'resources/js/app-sitewide.js'),
        'app-dashboard': path.resolve(__dirname, 'resources/js/app-dashboard.js'),

    },
    output: {
        filename: 'js/[name].js',
        path: path.resolve(__dirname, 'public'),
        publicPath: '/',
    }
}
