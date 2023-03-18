const path = require('path');
const CleanPlugin = require('clean-webpack-plugin');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');
const WebpackShellPluginNext = require('webpack-shell-plugin-next');

module.exports = {
  mode: 'development',
  entry: ['./styles/style.scss', './ts/main.ts'],
  devtool: 'inline-source-map',
  output: {
    filename: 'main.js',
    path: path.resolve(__dirname, 'js'),
    // publicPath: 'js'
  },
  module: {
    rules: [
      {
        test: /\.ts$/,
        use: 'ts-loader',
        exclude: /node_modules/
      },
      {
        test: /\.s?[c]ss$/i,
        use: [
          MiniCssExtractPlugin.loader,
          'css-loader',
          'sass-loader'
        ]
      },
      {
        test: /\.sass$/i,
        use: [
          MiniCssExtractPlugin.loader,
          'css-loader',
          {
            loader: 'sass-loader',
            options: {
              sassOptions: { indentedSyntax: true }
            }
          }
        ]
      },
    ],
  },
  resolve: {
    extensions: ['.ts', '.js']
  },
  plugins: [
    new CleanPlugin.CleanWebpackPlugin(),
    new MiniCssExtractPlugin({
      filename: '../style.css',
    }),
    new WebpackShellPluginNext({
      onBuildStart: {
        scripts: ['echo "=======> Inizio WEBPACK"'],
        blocking: true,
        parallel: false
      },
      onBuildEnd: {
        scripts: [
          'echo "=======> Esecuzione replace.build_common.js"',
          'node ./replace.build_common.js',
          'echo "=======> Esecuzione replace.build_dev.js"',
          'node ./replace.build_dev.js'
        ],
        blocking: true,
        parallel: false
      }
    }),
  ],
  watch: true,
};