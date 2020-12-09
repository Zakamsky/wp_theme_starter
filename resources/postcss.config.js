module.exports = ({ options }) => ({
  plugins: {
    'autoprefixer': {},
    'postcss-preset-env': {},
    'css-mqpacker': {
      sort: true
    },
    'cssnano': options.dev ? false : {
      preset: ['default', {
        discardComments: { removeAll: true }
      }]
    }
  }
});
