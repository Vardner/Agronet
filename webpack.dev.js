'use strict';

const path = require('path');
const merge = require('webpack-merge');
const common = require('./webpack.common.js');

const OptimizeCSSAssetsPlugin = require('optimize-css-assets-webpack-plugin');

module.exports = merge(common, {
    mode: 'development',
    stats: 'normal',
    devtool: 'inline-source-map',
    devServer: {
        contentBase: path.resolve(__dirname, 'public/'),
        open: false,
        compress: true,
        historyApiFallback: true,
        host: 'localhost',
        port: 8080
    }
});