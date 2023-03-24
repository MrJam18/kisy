const path = require('path');

module.exports = {
    entry: ['./scripts/basket.js', './scripts/main.js'],
    output: {
        filename: '[name].js',
        path: path.resolve(__dirname, 'dist'),
    },
    mode: "development"
};