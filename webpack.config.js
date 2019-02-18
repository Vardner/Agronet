'use strict';

const path = require('path');
const webpack = require('webpack');
const devMode = process.env.NODE_ENV !== 'production';

const glob = require('glob');
const CopyWebpackPlugin = require('copy-webpack-plugin');

const UglifyJsPlugin = require('uglifyjs-webpack-plugin');
const MiniCssExtractPlugin = require("mini-css-extract-plugin");
const cssnano = require("cssnano");
const OptimizeCSSAssetsPlugin = require("optimize-css-assets-webpack-plugin");
const autoprefixer = require("autoprefixer");

function getPlugins() {
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
            // $: 'jquery',
            Vue: ['vue/dist/vue.esm.js', 'default']
        }),
    );

    plugins.push(
        new MiniCssExtractPlugin({
            filename: 'css/[name].css'
        }),
    );

    return plugins;
}

module.exports = {
    mode: devMode ? 'development' : 'production',

    entry: glob.sync('./resources/js/frontend/**/*.js').concat([path.resolve(__dirname, 'resources/sass/bundle.scss')]),

    output: {
        path: path.resolve(__dirname, 'public'),
        filename: 'js/frontend/[name].js'
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
            }),
            new OptimizeCSSAssetsPlugin(
                {
                    assetNameRegExp: /\.scss$/,
                    cssProcessor: cssnano,
                    cssProcessorPluginOptions: {
                        preset: ['default', { discardComments: { removeAll: true } }],
                    },
                    canPrint: false
                }
            )
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
                    {
                        loader: "css-loader",
                    },
                    "postcss-loader",
                    {
                        loader: "resolve-url-loader",
                        options: {
                            root: '/fonts',
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
                test: /\.(svg|gif|png|jpg)(\?v=[0-9]\.[0-9]\.[0-9])?$/,
                use: {
                    loader: 'file-loader',
                    options: {
                        outputPath: '/images'
                    }
                }
            }
        ]
    },

    plugins: getPlugins(),
};
