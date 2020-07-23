module.exports = {
  context: 'assets',
  entry: {
    styles: './styles/main.scss',
    scripts: './scripts/main.js'
  },
  devtool: 'cheap-module-eval-source-map',
  outputFolder: '../assets',
  publicFolder: 'assets',
  proxyTarget: 'https://firstbyte.elkin.dev',
  watch: [
    '../**/*.php'
  ]
}