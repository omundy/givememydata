import{s as j,n as $,e as S}from"../chunks/scheduler.k-kUyWhY.js";import{S as k,i as q,g as h,m as y,s as w,h as m,j as g,n as D,f as p,c as A,x as G,k as E,a as H,y as o,o as b}from"../chunks/index.L7QVYBH2.js";import{p as z}from"../chunks/stores.fb6NJ_B0.js";function B(i){let t,s,e,a,c=i[0].status+"",v,x,d=(i[0].error.message??"Error")+"",f,C,n,I="Go home";return{c(){t=h("div"),s=h("div"),e=h("div"),a=h("h1"),v=y(c),x=y(": "),f=y(d),C=w(),n=h("a"),n.textContent=I,this.h()},l(r){t=m(r,"DIV",{class:!0});var l=g(t);s=m(l,"DIV",{class:!0});var V=g(s);e=m(V,"DIV",{class:!0});var _=g(e);a=m(_,"H1",{});var u=g(a);v=D(u,c),x=D(u,": "),f=D(u,d),u.forEach(p),C=A(_),n=m(_,"A",{href:!0,"data-svelte-h":!0}),G(n)!=="svelte-tjl696"&&(n.textContent=I),_.forEach(p),V.forEach(p),l.forEach(p),this.h()},h(){E(n,"href","/"),E(e,"class","col"),E(s,"class","row"),E(t,"class","container my-3")},m(r,l){H(r,t,l),o(t,s),o(s,e),o(e,a),o(a,v),o(a,x),o(a,f),o(e,C),o(e,n)},p(r,[l]){l&1&&c!==(c=r[0].status+"")&&b(v,c),l&1&&d!==(d=(r[0].error.message??"Error")+"")&&b(f,d)},i:$,o:$,d(r){r&&p(t)}}}function F(i,t,s){let e;return S(i,z,a=>s(0,e=a)),[e]}class M extends k{constructor(t){super(),q(this,t,F,B,j,{})}}export{M as component};
