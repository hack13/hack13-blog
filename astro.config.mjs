import sitemap from '@astrojs/sitemap'
import svelte from '@astrojs/svelte'
import tailwind from '@astrojs/tailwind'
import swup from '@swup/astro'
import Compress from 'astro-compress'
import icon from 'astro-icon'
import { defineConfig } from 'astro/config'
import Color from 'colorjs.io'
import rehypeAutolinkHeadings from 'rehype-autolink-headings'
import rehypeComponents from 'rehype-components' /* Render the custom directive content */
import rehypeKatex from 'rehype-katex'
import rehypeSlug from 'rehype-slug'
import remarkDirective from 'remark-directive' /* Handle directives */
import remarkGithubAdmonitionsToDirectives from 'remark-github-admonitions-to-directives'
import remarkMath from 'remark-math'
import { AdmonitionComponent } from './src/plugins/rehype-component-admonition.mjs'
import { GithubCardComponent } from './src/plugins/rehype-component-github-card.mjs'
import { parseDirectiveNode } from './src/plugins/remark-directive-rehype.js'
import { remarkReadingTime } from './src/plugins/remark-reading-time.mjs'

const oklchToHex = str => {
  const DEFAULT_HUE = 250
  const regex = /-?\d+(\.\d+)?/g
  const matches = str.string.match(regex)
  const lch = [matches[0], matches[1], DEFAULT_HUE]
  return new Color('oklch', lch).to('srgb').toString({
    format: 'hex',
  })
}

// https://astro.build/config
export default defineConfig({
  site: 'https://hack13.blog/',
  base: '/',
  trailingSlash: 'always',
  redirects: {
    '/feed': '/rss.xml',
    '/2010/06/new-blog': '/posts/new-blog',
    '/2012/04/been-a-while': '/posts/been-a-while',
    '/2012/04/my-take-on-opensim-grids': '/posts/my-take-on-opensim-grids',
    '/2012/04/my-vision-of-the-hypergrid': '/posts/my-vision-of-the-hypergrid',
    '/2012/04/we-have-hypergrid-use-it': '/posts/we-have-hypergrid-use-it',
    '/2012/05/coming-changes': '/posts/coming-changes',
    '/2012/06/timothys-thoughts': '/posts/timothys-thoughts',
    '/2012/07/finding-my-place': '/posts/finding-my-place',
    '/2012/07/lil-about-me-some-rage': '/posts/lil-about-me-some-rage',
    '/2012/08/battle-of-business-vs-opensource':
      '/posts/2012-08-09-battle-of-business-vs-opensource',
    '/2012/12/new-years-resolutions': '/posts/2012-12-31-new-years-resolutions',
    '/2013/02/explaining-opensim-memory-usage':
      '/posts/2013-02-11-explaining-opensim-memory-usage',
    '/2013/02/thank-you': '/posts/2013-02-13-thank-you',
    '/2013/02/needing-rest': '/posts/2013-02-20-needing-rest',
    '/2013/02/top-10-reasons-not-to-give-up-on-aurora-sim':
      '/posts/2013-02-21-top-10-reasons-not-to-give-up-on-aurora-sim',
    '/2013/02/who-is-timothy-vyperhoxleyrogers':
      '/posts/2013-02-23-who-is-timothy-vyperhoxleyrogers',
    '/2013/03/why-i-closed-aurorascape':
      '/posts/2013-03-05-why-i-closed-aurorascape',
    '/2013/03/closed-vs-open-really': '/posts/2013-03-11-closed-vs-open-really',
    '/2013/04/moving-up-around': '/posts/2013-04-08-moving-up-around',
    '/2013/04/my-clocks-are-ticking': '/posts/2013-04-26-my-clocks-are-ticking',
    '/2013/06/upset-with-stiffled-innovation':
      '/posts/2013-06-19-upset-with-stiffled-innovation',
    '/2013/08/depression': '/posts/2013-08-12-depression',
    '/2013/09/my-response-to-kitely-marketplace':
      '/posts/2013-09-02-my-response-to-kitely-marketplace',
    '/2013/11/why-i-dont-use-the-cloud':
      '/posts/2013-11-03-why-i-dont-use-the-cloud',
    '/2016/01/moved-to-wordpress': '/posts/2016-01-04-moved-to-wordpress',
    '/2018/01/where-has-tim-been': '/posts/2018-01-06-where-has-tim-been',
    '/2018/01/taking-control-of-my-cloud-storage':
      '/posts/2018-01-14-taking-control-of-my-cloud-storage',
    '/2018/04/finding-my-linux-distro':
      '/posts/2018-04-26-finding-my-linux-distro',
    '/2019/01/2019-goals': '/posts/2019-01-26-2019-goals',
    '/2019/01/speeding-up-zadaroo-files':
      '/posts/2019-01-28-speeding-up-zadaroo-files',
    '/2021/10/cloudflare-workers-and-pages':
      '/posts/2021-10-29-cloudflare-workers-and-pages',
    '/2022/02/struggling-with-anxiety':
      '/posts/2022-02-02-struggling-with-anxiety',
    '/2022/02/nft-polarization': '/posts/2022-02-17-nft-polarization',
    '/2022/04/neosvr-event-hosting': '/posts/2022-04-17-neosvr-event-hosting',
    '/2022/05/continuing-to-find-myself':
      '/posts/2022-05-08-continuing-to-find-myself',
    '/2023/05/decentralized-protocols':
      '/posts/2023-05-03-decentralized-protocols',
    '/2023/09/perspectives': '/posts/2023-09-16-upset-over-crypto',
    '/2023/12/mff-2023-fedi-panel': '/posts/2023-12-06-mff-2023-panel',
  },
  integrations: [
    tailwind(),
    swup({
      theme: false,
      animationClass: 'transition-',
      containers: ['main'],
      smoothScrolling: true,
      cache: true,
      preload: true,
      accessibility: true,
      globalInstance: true,
    }),
    icon({
      include: {
        'material-symbols': ['*'],
        'fa6-brands': ['*'],
        'fa6-regular': ['*'],
        'fa6-solid': ['*'],
      },
    }),
    Compress({
      Image: false,
    }),
    svelte(),
    sitemap(),
  ],
  markdown: {
    remarkPlugins: [
      remarkMath,
      remarkReadingTime,
      remarkGithubAdmonitionsToDirectives,
      remarkDirective,
      parseDirectiveNode,
    ],
    rehypePlugins: [
      rehypeKatex,
      rehypeSlug,
      [
        rehypeComponents,
        {
          components: {
            github: GithubCardComponent,
            note: (x, y) => AdmonitionComponent(x, y, 'note'),
            tip: (x, y) => AdmonitionComponent(x, y, 'tip'),
            important: (x, y) => AdmonitionComponent(x, y, 'important'),
            caution: (x, y) => AdmonitionComponent(x, y, 'caution'),
            warning: (x, y) => AdmonitionComponent(x, y, 'warning'),
          },
        },
      ],
      [
        rehypeAutolinkHeadings,
        {
          behavior: 'append',
          properties: {
            className: ['anchor'],
          },
          content: {
            type: 'element',
            tagName: 'span',
            properties: {
              className: ['anchor-icon'],
              'data-pagefind-ignore': true,
            },
            children: [
              {
                type: 'text',
                value: '#',
              },
            ],
          },
        },
      ],
    ],
  },
  vite: {
    build: {
      rollupOptions: {
        onwarn(warning, warn) {
          // temporarily suppress this warning
          if (
            warning.message.includes('is dynamically imported by') &&
            warning.message.includes('but also statically imported by')
          ) {
            return
          }
          warn(warning)
        },
      },
    },
    css: {
      preprocessorOptions: {
        stylus: {
          define: {
            oklchToHex: oklchToHex,
          },
        },
      },
    },
  },
})
