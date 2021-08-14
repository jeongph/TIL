//const { description } = require('../../package')

module.exports = {
  base: '',
  title: 'Bin-e TIL',
  description: 'ParkJU',

  head: [
    ['meta', { name: 'theme-color', content: '#3eaf7c' }],
    ['meta', { name: 'apple-mobile-web-app-capable', content: 'yes' }],
    ['meta', { name: 'apple-mobile-web-app-status-bar-style', content: 'black' }]
  ],

  themeConfig: {
    repo: 'https://github.com/bin-e/TIL',
    editLinks: false,
    docsDir: '',
    editLinkText: '',
    lastUpdated: false,
  },

  plugins: [
    '@vuepress/plugin-back-to-top',
    '@vuepress/plugin-medium-zoom',
  ]
}
