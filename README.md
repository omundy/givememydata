
# Give Me My Data

Give Me My Data was a Facebook application that helped users export their data out of Facebook. Reasons included making artwork, archiving and deleting your account, or circumventing the interface Facebook provides. Data could be exported in CSV, XML, and other common formats.


- [Statement on Facebook decision to block the app](http://givememydata.com/)
- [Visualizations and screenshots from the project](https://owenmundy.com/site/give-me-my-data)



## Dev Notes






### Setup

[SvelteKit > Project Structure](https://kit.svelte.dev/docs/project-structure)

```bash
# create a new project in the current directory
npm create svelte@latest
# install dependencies
npm install 
# or start the server and open the app in a new browser tab
npm run dev -- --open
```




## Building (Static Site Generation)

[How to Build a Static SvelteKit Site](https://www.philkruft.dev/blog/how-to-build-a-static-sveltekit-site/), 2023
[Building your static website with Svelte, SvelteKit](https://dev.to/robertobutti/how-to-start-building-your-static-website-with-svelte-and-tailwindcss-hbk), 2021
[SvelteKit > Static site generation](https://kit.svelte.dev/docs/adapter-static)

```bash
npm i -D @sveltejs/adapter-static@latest
```

```bash
# create a production version of your app
npm run build
# preview the production build
npm run v
```





## Development

Bootstrap
https://github.com/svelte-add/bootstrap

Override Bootstrap tutorial
https://www.freecodecamp.org/news/how-to-customize-bootstrap-with-sass/


```bash
npx svelte-add@latest bootstrap
```

The <svelte:head> element allows you to insert elements inside the <head> of your document:
https://svelte.dev/tutorial/svelte-head

Use `class:active={$page.url.pathname === '/about'}` to insert a class name in a nav
https://svelte.dev/examples/classes

Access page properties
https://stackoverflow.com/a/68578884/441878

```svelte
<script>
  import { page } from '$app/stores';
</script>

<h1>{$page.url.pathname}</h1>
```



## Deployment

Setup project
https://www.okupter.com/blog/deploy-sveltekit-website-to-github-pages
https://github.com/metonym/sveltekit-gh-pages

But use gh-pages
https://futurewebdesign.au/posts/gh-pages/
https://www.npmjs.com/package/gh-pages