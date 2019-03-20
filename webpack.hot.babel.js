const path = require('path');
const merge = require('webpack-merge');
const webpack = require('webpack');
const common = require('./webpack.common.babel.js');
var WebpackLaravelMixManifest = require('webpack-laravel-mix-manifest');
// const useDevServer = true;
// const publicPath = useDevServer ? 'http://localhost:8080/build/' : '/build/';

// const File = require('./webpack.repository.js');
var fs = require('fs-extra');

// write a hot file to filesystem for laravel mix to detect HMR
fs.writeFileSync(path.resolve(__dirname, 'public/hot'), 'hot reloading');

module.exports = merge(common, {
    mode: 'development',
    stats: 'normal',
    devtool: 'inline-source-map',
    devServer: {
        inline: true,
        hot: true, // hot module replacement. Depends on HotModuleReplacementPlugin
        https: {
            key: fs.readFileSync('./SSL/customessaymeister.test.key'),
            cert: fs.readFileSync('./SSL/customessaymeister.test.crt'),
            ca: fs.readFileSync('./SSL/cacert.pem'),
        },
        host: 'localhost',
        contentBase: path.resolve(__dirname, 'public/'),
        // watchContentBase: true
        // https: false, // true for self-signed, object for cert authority
        headers: {
            "Access-Control-Allow-Origin": "*"
        },
        // // contentBase: path.resolve('public'),
        historyApiFallback: true,
        // noInfo: true,
        compress: true,
        // quiet: true
    },
    output: {
        // path: '/',
        publicPath: 'https://localhost:8080/'
    },
    plugins: [
        // new webpack.HotModuleReplacementPlugin(),
        // new WebpackLaravelMixManifest.default(),
    ]
});
