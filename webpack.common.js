'use strict';

const path = require('path');
const webpack = require('webpack');
const devMode = process.env.WEBPACK_MODE === 'development';

const glob = require('glob');
const CopyWebpackPlugin = require('copy-webpack-plugin');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');
const CleanWebpackPlugin = require('clean-webpack-plugin');
const WebpackNotifierPlugin = require('webpack-notifier');
const WebpackLaravelMixManifest = require('webpack-laravel-mix-manifest');

const sources = {
    public: path.resolve(__dirname, 'public'),
    frontendJS: path.resolve(__dirname, 'resources/js/frontend/'),
    sass: path.resolve(__dirname, 'resources/sass/bundle.scss'),
};

function getPlugins () {
    const plugins = [];

    plugins.push(
        new CleanWebpackPlugin()
    );

    plugins.push(
        new WebpackNotifierPlugin({
            excludeWarnings: true,
            title: 'Webpack',
            alwaysNotify: true,
        })
    );

    plugins.push(
        new WebpackLaravelMixManifest()
    );

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
            $: 'jquery'
        })
    );

    plugins.push(
        new MiniCssExtractPlugin({
            filename: devMode ? 'css/[name].css' : 'css/[name].[hash].css',
            chunkFilename: devMode ? 'css/[id].css' : 'css/[id].[hash].css'
        })
    );

    return plugins;
}

module.exports = {
    entry: {
        pollyfill: 'babel-polyfill',
        main: glob.sync('./resources/js/frontend/**/*.js').concat(['./resources/sass/bundle.scss'])
    },

    output: {
        path: sources.public,
        filename: 'js/frontend/[name].js'
    },

    plugins: getPlugins(),

    optimization: {
        splitChunks: {
            chunks: 'all',
            minSize: 30000,
            maxSize: 0,
            minChunks: 1,
            maxAsyncRequests: 10,
            maxInitialRequests: 5,
            automaticNameDelimiter: '~',
            name: true,
            cacheGroups: {
                vendors: {
                    test: /[\\/]node_modules[\\/]/,
                    priority: -10,
                    chunks: 'all',
                    reuseExistingChunk: true,
                    automaticNameDelimiter: '~'
                },
                // commons: {
                //     test: /[\\/]resources[\\/]/,
                //     priority: -20,
                //     chunks: 'all',
                //     minChunks: 1
                // }

            }
        }
    },

    module: {
        rules: [
            {
                test: /\.js$/,
                exclude: /node_modules/,
                include: path.resolve(__dirname, 'resources/js/frontend/'),
                use: [
                    {
                        loader: 'babel-loader',
                    },
                    {
                        loader: 'eslint-loader',
                        options: {
                            configFile: 'eslint.json',
                            formatter: require('eslint-formatter-friendly'),
                            failOnError: true,
                            parserOptions: {
                                ecmaVersion: 2017
                            }
                        }
                    }
                ],

            },
            {
                test: /\.scss$/,
                use: [
                    "style-loader",
                    MiniCssExtractPlugin.loader,
                    {
                        loader: "css-loader",
                        options: {
                            sourceMap: true
                        }
                    },
                    "postcss-loader",
                    {
                        loader: "resolve-url-loader",
                        options: {
                            keepQuery: true
                        }
                    },
                    {
                        loader: "sass-loader",
                        options: {
                            sourceMap: true,
                            sourceMapContents: false
                        }
                    }

                ]
            },
            {
                test: /\.(ttf|eot|otf)(\?v=[0-9]\.[0-9]\.[0-9])?$/,
                use: {
                    loader: 'file-loader',
                    options: {
                        outputPath: '/fonts'
                    }
                }
            },
            {
                test: /\.(svg|gif|png|jpg|jpeg)(\?v=[0-9]\.[0-9]\.[0-9])?$/,
                use: {
                    loader: 'file-loader',
                    options: {
                        outputPath: 'images',
                        name: '[name].[ext]'
                    }
                }
            }
        ]
    },
};