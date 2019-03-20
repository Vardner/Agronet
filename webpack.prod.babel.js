'use strict'
const path = require('path');
const merge = require('webpack-merge');
const common = require('./webpack.common.babel.js');

const MomentLocalesPlugin = require('moment-locales-webpack-plugin');
const OptimizeCSSAssetsPlugin = require('optimize-css-assets-webpack-plugin');
const TerserPlugin = require('terser-webpack-plugin');
const BundleAnalyzerPlugin = require('webpack-bundle-analyzer').BundleAnalyzerPlugin;

module.exports = merge(common, {
    mode: 'production',
    stats: 'errors-only',
    optimization: {
        minimizer: [
            new TerserPlugin({
                sourceMap: true,
                cache: true,
                parallel: 8,
                terserOptions: {
                    warnings: false,
                    output: {
                        comments: false,
                    }
                }
            }),
            new OptimizeCSSAssetsPlugin({})
        ]
    },
    plugins: [
        new MomentLocalesPlugin(),
        // new BundleAnalyzerPlugin()
    ],
    output: {
        filename: 'js/[name]-[hash].js',
        path: path.resolve(__dirname, 'public'),

    }

});
