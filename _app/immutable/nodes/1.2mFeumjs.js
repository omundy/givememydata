import{s as S,n as V,e as j}from"../chunks/scheduler.k-kUyWhY.js";import{S as k,i as q,g as f,m as C,s as A,h,j as g,n as y,f as d,c as G,x as H,k as E,a as T,y as i,o as w}from"../chunks/index.Jtwc3yqv.js";import{b as z}from"../chunks/paths.LlILbNYr.js";import{p as B}from"../chunks/stores.mCAroS4f.js";import{s as F}from"../chunks/document.86rbJhtU.js";function J(c){let t,r,e,s,a=c[0].status+"",p,x,m=(c[0].error.message??"Error")+"",v,b,l,D="Go home";return{c(){t=f("div"),r=f("div"),e=f("div"),s=f("h1"),p=C(a),x=C(": "),v=C(m),b=A(),l=f("a"),l.textContent=D,this.h()},l(o){t=h(o,"DIV",{class:!0});var n=g(t);r=h(n,"DIV",{class:!0});var I=g(r);e=h(I,"DIV",{class:!0});var _=g(e);s=h(_,"H1",{});var u=g(s);p=y(u,a),x=y(u,": "),v=y(u,m),u.forEach(d),b=G(_),l=h(_,"A",{href:!0,"data-svelte-h":!0}),H(l)!=="svelte-wi19i7"&&(l.textContent=D),_.forEach(d),I.forEach(d),n.forEach(d),this.h()},h(){E(l,"href",z+"/"),E(e,"class","col-12 col-lg-8 offset-lg-2"),E(r,"class","row"),E(t,"class","container py-5")},m(o,n){T(o,t,n),i(t,r),i(r,e),i(e,s),i(s,p),i(s,x),i(s,v),i(e,b),i(e,l)},p(o,[n]){n&1&&a!==(a=o[0].status+"")&&w(p,a),n&1&&m!==(m=(o[0].error.message??"Error")+"")&&w(v,m)},i:V,o:V,d(o){o&&d(t)}}}function K(c,t,r){let e;j(c,B,a=>r(0,e=a));let{title:s="Error"}=t;return F(s),c.$$set=a=>{"title"in a&&r(1,s=a.title)},[e,s]}class Q extends k{constructor(t){super(),q(this,t,K,J,S,{title:1})}}export{Q as component};
