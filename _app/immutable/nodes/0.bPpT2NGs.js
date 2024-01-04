import{_ as re}from"../chunks/preload-helper.0HuHagjb.js";import{s as O,n as Z,c as D,u as y,g as z,d as T,e as ne,o as le}from"../chunks/scheduler.k-kUyWhY.js";import{S as U,i as H,g as h,h as m,x as _,k as o,a as Q,f as b,r as Y,s as G,j as C,u as x,c as S,y as g,v as B,d as q,t as $,w as M,z as d}from"../chunks/index.Jtwc3yqv.js";import{b as X}from"../chunks/paths.nQ0KKbEf.js";import{p as oe}from"../chunks/stores.gY2I_0nx.js";import{s as ie}from"../chunks/document.dVftYLFj.js";const ce=!0,ue=!0,fe="ignore",We=Object.freeze(Object.defineProperty({__proto__:null,prerender:ce,ssr:ue,trailingSlash:fe},Symbol.toStringTag,{value:"Module"})),ve="data:image/png;base64,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";function ge(n){let e,a=`<img src="${ve}" alt="Give Me My Data logo" class="img-fluid svelte-8iehpx"/>
    Give Me My Data`;return{c(){e=h("a"),e.innerHTML=a,this.h()},l(t){e=m(t,"A",{class:!0,href:!0,"data-svelte-h":!0}),_(e)!=="svelte-12rupe9"&&(e.innerHTML=a),this.h()},h(){o(e,"class","navbar-brand svelte-8iehpx"),o(e,"href",X+"/")},m(t,l){Q(t,e,l)},p:Z,i:Z,o:Z,d(t){t&&b(e)}}}class ae extends U{constructor(e){super(),H(this,e,null,ge,O,{})}}const pe=n=>({}),ee=n=>({});function he(n){let e,a,t,l,f,i,c='<span class="navbar-toggler-icon"></span>',I,v,r;l=new ae({});const s=n[1].Navbar,u=D(s,n,n[0],ee);return{c(){e=h("header"),a=h("nav"),t=h("div"),Y(l.$$.fragment),f=G(),i=h("button"),i.innerHTML=c,I=G(),v=h("div"),u&&u.c(),this.h()},l(p){e=m(p,"HEADER",{});var L=C(e);a=m(L,"NAV",{class:!0});var V=C(a);t=m(V,"DIV",{class:!0});var F=C(t);x(l.$$.fragment,F),f=S(F),i=m(F,"BUTTON",{class:!0,type:!0,"data-bs-toggle":!0,"data-bs-target":!0,"aria-controls":!0,"aria-expanded":!0,"aria-label":!0,"data-svelte-h":!0}),_(i)!=="svelte-w6g5op"&&(i.innerHTML=c),I=S(F),v=m(F,"DIV",{class:!0,id:!0});var R=C(v);u&&u.l(R),R.forEach(b),F.forEach(b),V.forEach(b),L.forEach(b),this.h()},h(){o(i,"class","navbar-toggler"),o(i,"type","button"),o(i,"data-bs-toggle","collapse"),o(i,"data-bs-target","#navbarSupportedContent"),o(i,"aria-controls","navbarSupportedContent"),o(i,"aria-expanded","false"),o(i,"aria-label","Toggle navigation"),o(v,"class","collapse navbar-collapse"),o(v,"id","navbarSupportedContent"),o(t,"class","container-fluid"),o(a,"class","navbar navbar-expand-lg svelte-1oxl22c")},m(p,L){Q(p,e,L),g(e,a),g(a,t),B(l,t,null),g(t,f),g(t,i),g(t,I),g(t,v),u&&u.m(v,null),r=!0},p(p,[L]){u&&u.p&&(!r||L&1)&&y(u,s,p,p[0],r?T(s,p[0],L,pe):z(p[0]),ee)},i(p){r||(q(l.$$.fragment,p),q(u,p),r=!0)},o(p){$(l.$$.fragment,p),$(u,p),r=!1},d(p){p&&b(e),M(l),u&&u.d(p)}}}function me(n,e,a){let{$$slots:t={},$$scope:l}=e;return n.$$set=f=>{"$$scope"in f&&a(0,l=f.$$scope)},[l,t]}class Ae extends U{constructor(e){super(),H(this,e,me,he,O,{})}}function be(n){let e,a,t,l="Home",f,i,c,I="About",v,r,s,u="Visualizations",p,L,V,F="FAQ",R,W,N,j="Credits";return{c(){e=h("ul"),a=h("li"),t=h("a"),t.textContent=l,f=G(),i=h("li"),c=h("a"),c.textContent=I,v=G(),r=h("li"),s=h("a"),s.textContent=u,p=G(),L=h("li"),V=h("a"),V.textContent=F,R=G(),W=h("li"),N=h("a"),N.textContent=j,this.h()},l(E){e=m(E,"UL",{class:!0});var A=C(e);a=m(A,"LI",{class:!0});var P=C(a);t=m(P,"A",{class:!0,"aria-current":!0,href:!0,"data-svelte-h":!0}),_(t)!=="svelte-1l2ryzg"&&(t.textContent=l),P.forEach(b),f=S(A),i=m(A,"LI",{class:!0});var k=C(i);c=m(k,"A",{class:!0,href:!0,"data-svelte-h":!0}),_(c)!=="svelte-14wsneu"&&(c.textContent=I),k.forEach(b),v=S(A),r=m(A,"LI",{class:!0});var J=C(r);s=m(J,"A",{class:!0,href:!0,"data-svelte-h":!0}),_(s)!=="svelte-197z1ly"&&(s.textContent=u),J.forEach(b),p=S(A),L=m(A,"LI",{class:!0});var K=C(L);V=m(K,"A",{class:!0,href:!0,"data-svelte-h":!0}),_(V)!=="svelte-l2lu44"&&(V.textContent=F),K.forEach(b),R=S(A),W=m(A,"LI",{class:!0});var w=C(W);N=m(w,"A",{class:!0,href:!0,"data-svelte-h":!0}),_(N)!=="svelte-hhr21d"&&(N.textContent=j),w.forEach(b),A.forEach(b),this.h()},h(){o(t,"class","nav-link svelte-15a4c6c"),o(t,"aria-current","page"),o(t,"href",X+"/"),d(t,"p-0",n[0]==="footer"),d(t,"active",n[1].url.pathname==="/"),o(a,"class","nav-item"),o(c,"class","nav-link svelte-15a4c6c"),o(c,"href",X+"/about"),d(c,"p-0",n[0]==="footer"),d(c,"active",n[1].url.pathname==="/about"),o(i,"class","nav-item"),o(s,"class","nav-link svelte-15a4c6c"),o(s,"href",X+"/visualizations"),d(s,"p-0",n[0]==="footer"),d(s,"active",n[1].url.pathname==="/visualizations"),o(r,"class","nav-item"),o(V,"class","nav-link svelte-15a4c6c"),o(V,"href",X+"/faq"),d(V,"p-0",n[0]==="footer"),d(V,"active",n[1].url.pathname==="/faq"),o(L,"class","nav-item"),o(N,"class","nav-link svelte-15a4c6c"),o(N,"href",X+"/credits"),d(N,"p-0",n[0]==="footer"),d(N,"active",n[1].url.pathname==="/credits"),o(W,"class","nav-item"),o(e,"class","navbar-nav ms-auto mb-2 mb-lg-0 svelte-15a4c6c")},m(E,A){Q(E,e,A),g(e,a),g(a,t),g(e,f),g(e,i),g(i,c),g(e,v),g(e,r),g(r,s),g(e,p),g(e,L),g(L,V),g(e,R),g(e,W),g(W,N)},p(E,[A]){A&1&&d(t,"p-0",E[0]==="footer"),A&2&&d(t,"active",E[1].url.pathname==="/"),A&1&&d(c,"p-0",E[0]==="footer"),A&2&&d(c,"active",E[1].url.pathname==="/about"),A&1&&d(s,"p-0",E[0]==="footer"),A&2&&d(s,"active",E[1].url.pathname==="/visualizations"),A&1&&d(V,"p-0",E[0]==="footer"),A&2&&d(V,"active",E[1].url.pathname==="/faq"),A&1&&d(N,"p-0",E[0]==="footer"),A&2&&d(N,"active",E[1].url.pathname==="/credits")},i:Z,o:Z,d(E){E&&b(e)}}}function de(n,e,a){let t;ne(n,oe,f=>a(1,t=f));let{location:l=""}=e;return n.$$set=f=>{"location"in f&&a(0,l=f.location)},[l,t]}class se extends U{constructor(e){super(),H(this,e,de,be,O,{location:0})}}const Le=n=>({}),te=n=>({location:"footer"});function Ve(n){let e,a,t,l,f,i,c,I;const v=n[1].Navbar,r=D(v,n,n[0],te);return c=new ae({}),{c(){e=h("footer"),a=h("div"),t=h("div"),l=h("div"),r&&r.c(),f=G(),i=h("div"),Y(c.$$.fragment),this.h()},l(s){e=m(s,"FOOTER",{class:!0});var u=C(e);a=m(u,"DIV",{class:!0});var p=C(a);t=m(p,"DIV",{class:!0});var L=C(t);l=m(L,"DIV",{class:!0});var V=C(l);r&&r.l(V),V.forEach(b),f=S(L),i=m(L,"DIV",{class:!0});var F=C(i);x(c.$$.fragment,F),F.forEach(b),L.forEach(b),p.forEach(b),u.forEach(b),this.h()},h(){o(l,"class","col-12 col-lg-8 order-2 order-lg-1 mt-3 mt-lg-0"),o(i,"class","col-12 col-lg-4 order-1 order-lg-2 mt-0 mt-lg-3"),o(t,"class","row"),o(a,"class","container"),o(e,"class","container-fluid py-4 svelte-1ujsyt5")},m(s,u){Q(s,e,u),g(e,a),g(a,t),g(t,l),r&&r.m(l,null),g(t,f),g(t,i),B(c,i,null),I=!0},p(s,[u]){r&&r.p&&(!I||u&1)&&y(r,v,s,s[0],I?T(v,s[0],u,Le):z(s[0]),te)},i(s){I||(q(r,s),q(c.$$.fragment,s),I=!0)},o(s){$(r,s),$(c.$$.fragment,s),I=!1},d(s){s&&b(e),r&&r.d(s),M(c)}}}function Ie(n,e,a){let{$$slots:t={},$$scope:l}=e;return n.$$set=f=>{"$$scope"in f&&a(0,l=f.$$scope)},[l,t]}class Ce extends U{constructor(e){super(),H(this,e,Ie,Ve,O,{})}}function Ee(n){let e,a;return e=new se({props:{slot:"Navbar",location:"header"}}),{c(){Y(e.$$.fragment)},l(t){x(e.$$.fragment,t)},m(t,l){B(e,t,l),a=!0},p:Z,i(t){a||(q(e.$$.fragment,t),a=!0)},o(t){$(e.$$.fragment,t),a=!1},d(t){M(e,t)}}}function Fe(n){let e,a;return e=new se({props:{slot:"Navbar",location:"footer"}}),{c(){Y(e.$$.fragment)},l(t){x(e.$$.fragment,t)},m(t,l){B(e,t,l),a=!0},p:Z,i(t){a||(q(e.$$.fragment,t),a=!0)},o(t){$(e.$$.fragment,t),a=!1},d(t){M(e,t)}}}function Ne(n){let e,a,t,l,f,i,c;a=new Ae({props:{$$slots:{Navbar:[Ee]},$$scope:{ctx:n}}});const I=n[0].default,v=D(I,n,n[1],null);return i=new Ce({props:{$$slots:{Navbar:[Fe]},$$scope:{ctx:n}}}),{c(){e=h("div"),Y(a.$$.fragment),t=G(),l=h("main"),v&&v.c(),f=G(),Y(i.$$.fragment),this.h()},l(r){e=m(r,"DIV",{class:!0});var s=C(e);x(a.$$.fragment,s),t=S(s),l=m(s,"MAIN",{class:!0});var u=C(l);v&&v.l(u),u.forEach(b),f=S(s),x(i.$$.fragment,s),s.forEach(b),this.h()},h(){o(l,"class","svelte-1h144oj"),o(e,"class","layout svelte-1h144oj")},m(r,s){Q(r,e,s),B(a,e,null),g(e,t),g(e,l),v&&v.m(l,null),g(e,f),B(i,e,null),c=!0},p(r,[s]){const u={};s&2&&(u.$$scope={dirty:s,ctx:r}),a.$set(u),v&&v.p&&(!c||s&2)&&y(v,I,r,r[1],c?T(I,r[1],s,null):z(r[1]),null);const p={};s&2&&(p.$$scope={dirty:s,ctx:r}),i.$set(p)},i(r){c||(q(a.$$.fragment,r),q(v,r),q(i.$$.fragment,r),c=!0)},o(r){$(a.$$.fragment,r),$(v,r),$(i.$$.fragment,r),c=!1},d(r){r&&b(e),M(a),v&&v.d(r),M(i)}}}function Ge(n,e,a){let{$$slots:t={},$$scope:l}=e;return le(async()=>{await re(()=>import("../chunks/bootstrap.esm.o9GY1IWT.js"),__vite__mapDeps([]),import.meta.url)}),ie(""),n.$$set=f=>{"$$scope"in f&&a(1,l=f.$$scope)},[t,l]}class Xe extends U{constructor(e){super(),H(this,e,Ge,Ne,O,{})}}export{Xe as component,We as universal};
function __vite__mapDeps(indexes) {
  if (!__vite__mapDeps.viteFileDeps) {
    __vite__mapDeps.viteFileDeps = []
  }
  return indexes.map((i) => __vite__mapDeps.viteFileDeps[i])
}