'use strict';
const path = require('path');
const merge = require('webpack-merge');
const common = require('./webpack.common.js');

const OptimizeCSSAssetsPlugin = require('optimize-css-assets-webpack-plugin');
const TerserPlugin = require('terser-webpack-plugin');
const BundleAnalyzerPlugin = require('webpack-bundle-analyzer').BundleAnalyzerPlugin;

module.exports = merge(common, {
    mode: 'production',
    stats: 'normal',
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
        new BundleAnalyzerPlugin({
            analyzerMode: 'server',
            generateStatsFile: false,
            statsOptions: { source: false },
            openAnalyzer: true
        })
    ],
    output: {
        filename: 'js/[name]-[hash:8].js',
        path: path.resolve(__dirname, 'public'),
    }
});





