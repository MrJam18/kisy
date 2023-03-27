const path = require('path');

module.exports = {
    module: {
        rules: [
            {
                test: /\.m?js$/,
                exclude: /node_modules/,
                use: {
                    loader: 'babel-loader',
                    options: {
                        presets: [
                            ['@babel/preset-env', { targets: "defaults" }]
                        ]
                    }
                }
            }
        ]
    },
    entry: ['./dist/basket.js'],
    output: {
        filename: 'basket.js',
        path: path.resolve(__dirname, 'build'),
    },
    mode: "production"
};