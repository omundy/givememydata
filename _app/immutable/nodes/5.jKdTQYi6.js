import{s as Vt,n as Gt}from"../chunks/scheduler.k-kUyWhY.js";import{S as zt,i as Ft,g as s,m as It,s as n,h as l,j as I,n as Wt,f as z,c as i,x as o,k as W,a as Nt,y as e,o as Xt}from"../chunks/index.Jtwc3yqv.js";import{b as G}from"../chunks/paths.jqJsh1bS.js";import{s as jt}from"../chunks/document.86rbJhtU.js";function $t(V){let r,d,t,p,F,N,m,ht="How To Use",X,f,ct=`<a href="${G}/assets/img/app_20100428_howto_data.png" target="_blank"><img src="${G}/assets/img/app_20100428_howto_data_t.png" alt="screenshot"/></a> <a href="${G}/assets/img/app_20100428_howto_format.png" target="_blank"><img src="${G}/assets/img/app_20100428_howto_format_t.png" alt="screenshot"/></a> <a href="${G}/assets/img/app_20100428.png" target="_blank"><img src="${G}/assets/img/app_20100428_t.png" alt="screenshot"/></a>`,j,v,mt="<li>Select the data type you wish to retrieve.</li> <li>Select how you would like the data formatted. Most people choose &quot;plain text.&quot;</li> <li>Click the &quot;Give me my data&quot; button.</li>",$,g,ft=`You can copy and paste information from Give Me My Data into any text editor. Here is a list of editors for
				Macintosh and Windows platforms:`,J,k,vt='<li><a href="http://docs.google.com/" target="_blank">Google Docs</a> (Mac and Win)</li> <li><a href="http://en.wikipedia.org/wiki/TextEdit" target="_blank">TextEdit</a> (Mac)</li> <li><a href="http://en.wikipedia.org/wiki/Pages" target="_blank">Pages</a> (Mac)</li> <li><a href="http://notepad-plus.sourceforge.net/uk/site.htm" target="_blank">NotePad++</a> (Win)</li> <li><a href="http://en.wikipedia.org/wiki/Microsoft_Word" target="_blank">Microft Word</a> (Win)</li>',Q,u,gt=`After you have copied and pasted your information into an editor you can do a number of things depending on the
				format you chose. All data formats allow you to examine the text and copy and paste the exact information you
				are trying to retrieve from Facebook.`,U,_,kt=`You can also save the text with a new extension to be able to open the file in other applications. For example,
				to view your CSV data just save the plain text file with the .csv extension and open it in any spreadsheet
				software like <a href="http://en.wikipedia.org/wiki/Numbers_(software)" target="_blank">Numbers</a> (Mac),
				<a href="http://en.wikipedia.org/wiki/Microsoft_Excel" target="_blank">Microsoft Excel</a>
				(Win) or <a href="http://en.wikipedia.org/wiki/OpenOffice.org" target="_blank">OpenOffice</a>, which is free and
				works on all operating systems.`,Y,x,ut=`XML is a popular format for archiving and presenting data with other software. There are many free XML viewers
				available. For example you can view XML files with the <a href="http://www.mozilla.com/firefox/" target="_blank">Firefox web browser</a>. Also, check out a list of
				<a href="http://manyeyes.alphaworks.ibm.com/manyeyes/page/Visualization_Options.html" target="_blank" title="Visualization Options">Visualization Options</a>
				for CSV and XML data on the <a href="http://many-eyes.com/" target="_blank">ManyEyes website</a>.`,R,w,_t='<a class="gotoapp" href="http://apps.facebook.com/give_me_my_data/" target="_parent">Go to Application</a>',B,y,xt="How can I get my groups, likes, links, etc. back onto my info page?",K,b,wt=`Give Me My Data is designed only to export a copy of your information <strong>from Facebook</strong> to allow you
				to access and manipulate your data yourself. Putting it back into Facebook is unfortunately a manual process.`,Z,M,yt="Why do I have to allow Give Me My Data access to my information?",tt,C,bt=`In order for Give Me My Data to work you need to give it permission to access your information. Click "Allow"
				when you encounter this screen to start reclaiming your data. Give Me My Data only requests read access and will
				not write to your profile without your permission.`,et,L,Mt='<img src="assets/img/allow_access_dialog.png" alt="allow access dialog"/>',at,T,Ct="This app does not work, it did not _________________.",st,H,Lt=`The primary goal in creating Give Me My Data is to give users agency over their data by allowing them to export
				and manipulate it regardless (and in spite if you like) of the interfaces we are presented.`,lt,P,Tt="Can I get live data or incoming messages, shares, etc. realtime?",nt,D,Ht="Give Me my Data is only available as a web browser-based application.",it,S,Pt="What is your Privacy Policy",ot,q,Dt=`Give Me My Data respects your privacy and therefore does not save any information about you or your friends in
				any form. In addition to the <a href="http://www.facebook.com/terms.php" target="_blank">Statement of Rights and Responsibilities</a>, required for anyone who uses Facebook, applications and developers are bound by the
				<a href="http://developers.facebook.com/policy/" target="_blank">Facebook Developer Principles &amp; Policies</a>`,rt,O,St="What data formats are available?",dt,A,qt=`A file format is a particular way that information is encoded for storage in a computer file. The file extension
				indicates the type of file format as well as the application may open the file.`,pt,h,Ot=`<table class="table table-hover table-bordered svelte-1mlk0st"><tr class="svelte-1mlk0st"><th class="ext svelte-1mlk0st">extension</th> <th class="name svelte-1mlk0st">name</th> <th class="svelte-1mlk0st">description</th></tr> <tr class="svelte-1mlk0st"><td class="ext svelte-1mlk0st"><a href="http://en.wikipedia.org/wiki/Plain_text" target="_blank" class="svelte-1mlk0st">TXT</a></td> <td class="svelte-1mlk0st">plain text</td> <td class="svelte-1mlk0st">Text that contains no visual formatting.</td></tr> <tr class="svelte-1mlk0st"><td class="ext svelte-1mlk0st"><a href="http://en.wikipedia.org/wiki/Comma-separated_values" target="_blank" class="svelte-1mlk0st">CSV</a></td> <td class="svelte-1mlk0st">Comma-Separated Values</td> <td class="svelte-1mlk0st">Used for the digital storage of tabular data such as a database or spreadsheet. Each line in the CSV file
							corresponds to a row in the table. CSV files can be opened in any spreadsheet application like Microsoft
							Excel or Apple Numbers.</td></tr> <tr class="svelte-1mlk0st"><td class="ext svelte-1mlk0st"><a href="http://en.wikipedia.org/wiki/XML" target="_blank" class="svelte-1mlk0st">XML</a></td> <td class="svelte-1mlk0st">Extensible Markup Language</td> <td class="svelte-1mlk0st">A plain text markup language for storing and transporting data.</td></tr> <tr class="svelte-1mlk0st"><td class="ext svelte-1mlk0st"><a href="http://en.wikipedia.org/wiki/JSON" target="_blank" class="svelte-1mlk0st">JSON</a></td> <td class="svelte-1mlk0st"><a href="http://en.wikipedia.org/wiki/JSON" target="_blank" class="svelte-1mlk0st">JavaScript Object Notation</a></td> <td class="svelte-1mlk0st">A lightweight text-based open standard designed for human-readable data interchange.</td></tr> <tr class="svelte-1mlk0st"><td class="ext svelte-1mlk0st"><a href="http://en.wikipedia.org/wiki/DOT_language" target="_blank" class="svelte-1mlk0st">DOT</a></td> <td class="svelte-1mlk0st">Graphviz DOT Language</td> <td class="svelte-1mlk0st">A plain text graph description language for use with <a href="http://www.graphviz.org/" target="_blank" class="svelte-1mlk0st">Graphviz</a>.</td></tr> <tr class="svelte-1mlk0st"><td class="ext svelte-1mlk0st"><a href="http://en.wikipedia.org/wiki/SQL" target="_blank" class="svelte-1mlk0st">SQL</a></td> <td class="svelte-1mlk0st">Structured Query Language</td> <td class="svelte-1mlk0st">A database computer language designed for managing data in relational database management systems.</td></tr> <tr class="svelte-1mlk0st"><td class="ext svelte-1mlk0st"><a href="http://freemind.sourceforge.net/wiki/index.php/Main_Page" target="_blank" class="svelte-1mlk0st">MM</a></td> <td class="svelte-1mlk0st">FreeMind</td> <td class="svelte-1mlk0st">An XML-based language used by <a href="https://en.wikipedia.org/wiki/FreeMind" target="_blank" class="svelte-1mlk0st">FreeMind</a> mind mapping software.</td></tr> <tr class="svelte-1mlk0st"><td class="ext svelte-1mlk0st"><a href="http://nodebox.net" target="_blank" class="svelte-1mlk0st">PY</a></td> <td class="svelte-1mlk0st">NodeBox</td> <td class="svelte-1mlk0st">A Python IDE for creating visualizations.</td></tr></table>`;return{c(){r=s("div"),d=s("div"),t=s("div"),p=s("h1"),F=It(V[0]),N=n(),m=s("h2"),m.textContent=ht,X=n(),f=s("p"),f.innerHTML=ct,j=n(),v=s("ol"),v.innerHTML=mt,$=n(),g=s("p"),g.textContent=ft,J=n(),k=s("ul"),k.innerHTML=vt,Q=n(),u=s("p"),u.textContent=gt,U=n(),_=s("p"),_.innerHTML=kt,Y=n(),x=s("p"),x.innerHTML=ut,R=n(),w=s("p"),w.innerHTML=_t,B=n(),y=s("h2"),y.textContent=xt,K=n(),b=s("p"),b.innerHTML=wt,Z=n(),M=s("h2"),M.textContent=yt,tt=n(),C=s("p"),C.textContent=bt,et=n(),L=s("p"),L.innerHTML=Mt,at=n(),T=s("h2"),T.textContent=Ct,st=n(),H=s("p"),H.textContent=Lt,lt=n(),P=s("h2"),P.textContent=Tt,nt=n(),D=s("p"),D.textContent=Ht,it=n(),S=s("h2"),S.textContent=Pt,ot=n(),q=s("p"),q.innerHTML=Dt,rt=n(),O=s("h2"),O.textContent=St,dt=n(),A=s("p"),A.textContent=qt,pt=n(),h=s("div"),h.innerHTML=Ot,this.h()},l(c){r=l(c,"DIV",{class:!0});var E=I(r);d=l(E,"DIV",{class:!0});var At=I(d);t=l(At,"DIV",{class:!0});var a=I(t);p=l(a,"H1",{});var Et=I(p);F=Wt(Et,V[0]),Et.forEach(z),N=i(a),m=l(a,"H2",{"data-svelte-h":!0}),o(m)!=="svelte-nxpfnq"&&(m.textContent=ht),X=i(a),f=l(a,"P",{"data-svelte-h":!0}),o(f)!=="svelte-19b4qew"&&(f.innerHTML=ct),j=i(a),v=l(a,"OL",{"data-svelte-h":!0}),o(v)!=="svelte-lx37b2"&&(v.innerHTML=mt),$=i(a),g=l(a,"P",{"data-svelte-h":!0}),o(g)!=="svelte-1jqbb2t"&&(g.textContent=ft),J=i(a),k=l(a,"UL",{"data-svelte-h":!0}),o(k)!=="svelte-chzlsk"&&(k.innerHTML=vt),Q=i(a),u=l(a,"P",{"data-svelte-h":!0}),o(u)!=="svelte-1pnxn6n"&&(u.textContent=gt),U=i(a),_=l(a,"P",{"data-svelte-h":!0}),o(_)!=="svelte-o9v3r3"&&(_.innerHTML=kt),Y=i(a),x=l(a,"P",{"data-svelte-h":!0}),o(x)!=="svelte-z5zntk"&&(x.innerHTML=ut),R=i(a),w=l(a,"P",{"data-svelte-h":!0}),o(w)!=="svelte-1mlycqg"&&(w.innerHTML=_t),B=i(a),y=l(a,"H2",{"data-svelte-h":!0}),o(y)!=="svelte-vvc9en"&&(y.textContent=xt),K=i(a),b=l(a,"P",{"data-svelte-h":!0}),o(b)!=="svelte-1r8x2vt"&&(b.innerHTML=wt),Z=i(a),M=l(a,"H2",{"data-svelte-h":!0}),o(M)!=="svelte-8v9z9"&&(M.textContent=yt),tt=i(a),C=l(a,"P",{"data-svelte-h":!0}),o(C)!=="svelte-lfavbq"&&(C.textContent=bt),et=i(a),L=l(a,"P",{"data-svelte-h":!0}),o(L)!=="svelte-2fnam"&&(L.innerHTML=Mt),at=i(a),T=l(a,"H2",{"data-svelte-h":!0}),o(T)!=="svelte-1au3d7y"&&(T.textContent=Ct),st=i(a),H=l(a,"P",{"data-svelte-h":!0}),o(H)!=="svelte-f7nfej"&&(H.textContent=Lt),lt=i(a),P=l(a,"H2",{"data-svelte-h":!0}),o(P)!=="svelte-bi43xk"&&(P.textContent=Tt),nt=i(a),D=l(a,"P",{"data-svelte-h":!0}),o(D)!=="svelte-1vkapb3"&&(D.textContent=Ht),it=i(a),S=l(a,"H2",{"data-svelte-h":!0}),o(S)!=="svelte-1qrq4yl"&&(S.textContent=Pt),ot=i(a),q=l(a,"P",{"data-svelte-h":!0}),o(q)!=="svelte-78ufy6"&&(q.innerHTML=Dt),rt=i(a),O=l(a,"H2",{"data-svelte-h":!0}),o(O)!=="svelte-ijk9sy"&&(O.textContent=St),dt=i(a),A=l(a,"P",{"data-svelte-h":!0}),o(A)!=="svelte-f9yagw"&&(A.textContent=qt),pt=i(a),h=l(a,"DIV",{class:!0,"data-svelte-h":!0}),o(h)!=="svelte-g7uw82"&&(h.innerHTML=Ot),a.forEach(z),At.forEach(z),E.forEach(z),this.h()},h(){W(h,"class","table-wrapper svelte-1mlk0st"),W(t,"class","col-12 col-lg-8 offset-lg-2"),W(d,"class","row"),W(r,"class","container py-5")},m(c,E){Nt(c,r,E),e(r,d),e(d,t),e(t,p),e(p,F),e(t,N),e(t,m),e(t,X),e(t,f),e(t,j),e(t,v),e(t,$),e(t,g),e(t,J),e(t,k),e(t,Q),e(t,u),e(t,U),e(t,_),e(t,Y),e(t,x),e(t,R),e(t,w),e(t,B),e(t,y),e(t,K),e(t,b),e(t,Z),e(t,M),e(t,tt),e(t,C),e(t,et),e(t,L),e(t,at),e(t,T),e(t,st),e(t,H),e(t,lt),e(t,P),e(t,nt),e(t,D),e(t,it),e(t,S),e(t,ot),e(t,q),e(t,rt),e(t,O),e(t,dt),e(t,A),e(t,pt),e(t,h)},p(c,[E]){E&1&&Xt(F,c[0])},i:Gt,o:Gt,d(c){c&&z(r)}}}function Jt(V,r,d){let{title:t="Frequently Asked Questions"}=r;return jt(t),V.$$set=p=>{"title"in p&&d(0,t=p.title)},[t]}class Bt extends zt{constructor(r){super(),Ft(this,r,Jt,$t,Vt,{title:0})}}export{Bt as component};
