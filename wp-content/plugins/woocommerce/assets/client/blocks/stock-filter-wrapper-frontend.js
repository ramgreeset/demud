(self.webpackChunkwebpackWcBlocksFrontendJsonp=self.webpackChunkwebpackWcBlocksFrontendJsonp||[]).push([[660],{8781:(e,t,o)=>{"use strict";o.d(t,{A:()=>l});var s=o(1609),n=o(7723),r=o(4656);o(5400);const l=({name:e,count:t})=>(0,s.createElement)(s.Fragment,null,e,null!==t&&Number.isFinite(t)&&(0,s.createElement)(r.Label,{label:t.toString(),screenReaderLabel:(0,n.sprintf)(/* translators: %s number of products. */ /* translators: %s number of products. */
(0,n._n)("%s product","%s products",t,"woocommerce"),t),wrapperElement:"span",wrapperProps:{className:"wc-filter-element-label-list-count"}}))},5659:(e,t,o)=>{"use strict";o.d(t,{A:()=>n});var s=o(1609);o(1626);const n=({children:e})=>(0,s.createElement)("div",{className:"wc-block-filter-title-placeholder"},e)},9454:(e,t,o)=>{"use strict";o.d(t,{A:()=>c});var s=o(1609),n=o(7723),r=o(851),l=o(4656);o(8335);const c=({className:e,
/* translators: Reset button text for filters. */
label:t=(0,n.__)("Reset","woocommerce"),onClick:o,screenReaderLabel:c=(0,n.__)("Reset filter","woocommerce")})=>(0,s.createElement)("button",{className:(0,r.A)("wc-block-components-filter-reset-button",e),onClick:o},(0,s.createElement)(l.Label,{label:t,screenReaderLabel:c}))},7033:(e,t,o)=>{"use strict";o.d(t,{A:()=>c});var s=o(1609),n=o(7723),r=o(851),l=o(4656);o(1504);const c=({className:e,isLoading:t,disabled:o,
/* translators: Submit button text for filters. */
label:c=(0,n.__)("Apply","woocommerce"),onClick:a,screenReaderLabel:i=(0,n.__)("Apply filter","woocommerce")})=>(0,s.createElement)("button",{type:"submit",className:(0,r.A)("wp-block-button__link","wc-block-filter-submit-button","wc-block-components-filter-submit-button",{"is-loading":t},e),disabled:o,onClick:a},(0,s.createElement)(l.Label,{label:c,screenReaderLabel:i}))},5352:(e,t,o)=>{"use strict";o.d(t,{A:()=>l});var s=o(1609),n=o(4180),r=o(851);o(243);const l=({className:e,style:t,suggestions:o,multiple:l=!0,saveTransform:c=(e=>e.trim().replace(/\s/g,"-")),messages:a={},validateInput:i=(e=>o.includes(e)),label:u="",...d})=>(0,s.createElement)("div",{className:(0,r.A)("wc-blocks-components-form-token-field-wrapper",e,{"single-selection":!l}),style:t},(0,s.createElement)(n.A,{label:u,__experimentalExpandOnFocus:!0,__experimentalShowHowTo:!1,__experimentalValidateInput:i,saveTransform:c,maxLength:l?void 0:1,suggestions:o,messages:a,...d}))},4785:(e,t,o)=>{"use strict";o.d(t,{A:()=>d});var s=o(6087),n=o(4717),r=o(3993),l=o(5574),c=o(7901),a=o(3122),i=o(5372),u=o(3244);const d=({queryAttribute:e,queryPrices:t,queryStock:o,queryRating:d,queryState:m,isEditor:f=!1})=>{let g=(0,u._)();g=`${g}-collection-data`;const[p]=(0,a.dJ)(g),[v,b]=(0,a.xd)("calculate_attribute_counts",[],g),[y,_]=(0,a.xd)("calculate_price_range",null,g),[h,k]=(0,a.xd)("calculate_stock_status_counts",null,g),[w,E]=(0,a.xd)("calculate_rating_counts",null,g),S=(0,c.c)(e||{}),A=(0,c.c)(t),C=(0,c.c)(o),x=(0,c.c)(d);(0,s.useEffect)((()=>{"object"==typeof S&&Object.keys(S).length&&(v.find((e=>(0,r.objectHasProp)(S,"taxonomy")&&e.taxonomy===S.taxonomy))||b([...v,S]))}),[S,v,b]),(0,s.useEffect)((()=>{y!==A&&void 0!==A&&_(A)}),[A,_,y]),(0,s.useEffect)((()=>{h!==C&&void 0!==C&&k(C)}),[C,k,h]),(0,s.useEffect)((()=>{w!==x&&void 0!==x&&E(x)}),[x,E,w]);const[N,L]=(0,s.useState)(f),[R]=(0,n.d7)(N,200);N||L(!0);const T=(0,s.useMemo)((()=>(e=>{const t=e;return Array.isArray(e.calculate_attribute_counts)&&(t.calculate_attribute_counts=(0,l.di)(e.calculate_attribute_counts.map((({taxonomy:e,queryType:t})=>({taxonomy:e,query_type:t})))).asc(["taxonomy","query_type"])),t})(p)),[p]),{results:O,isLoading:F}=(0,i.G)({namespace:"/wc/store/v1",resourceName:"products/collection-data",query:{...m,page:void 0,per_page:void 0,orderby:void 0,order:void 0,...T},shouldSelect:R});return{data:O,isLoading:F}}},5372:(e,t,o)=>{"use strict";o.d(t,{G:()=>i});var s=o(7594),n=o(7143),r=o(6087),l=o(7901),c=o(3271),a=o(3993);const i=e=>{const{namespace:t,resourceName:o,resourceValues:i=[],query:u={},shouldSelect:d=!0}=e;if(!t||!o)throw new Error("The options object must have valid values for the namespace and the resource properties.");const m=(0,r.useRef)({results:[],isLoading:!0}),f=(0,l.c)(u),g=(0,l.c)(i),p=(0,c.a)(),v=(0,n.useSelect)((e=>{if(!d)return null;const n=e(s.COLLECTIONS_STORE_KEY),r=[t,o,f,g],l=n.getCollectionError(...r);if(l){if(!(0,a.isError)(l))throw new Error("TypeError: `error` object is not an instance of Error constructor");p(l)}return{results:n.getCollection(...r),isLoading:!n.hasFinishedResolution("getCollection",r)}}),[t,o,g,f,d,p]);return null!==v&&(m.current=v),m.current}},3122:(e,t,o)=>{"use strict";o.d(t,{dJ:()=>c,xd:()=>a});var s=o(7594),n=o(7143),r=o(6087),l=(o(923),o(3244));const c=e=>{const t=(0,l._)();e=e||t;const o=(0,n.useSelect)((t=>t(s.QUERY_STATE_STORE_KEY).getValueForQueryContext(e,void 0)),[e]),{setValueForQueryContext:c}=(0,n.useDispatch)(s.QUERY_STATE_STORE_KEY);return[o,(0,r.useCallback)((t=>{c(e,t)}),[e,c])]},a=(e,t,o)=>{const c=(0,l._)();o=o||c;const a=(0,n.useSelect)((n=>n(s.QUERY_STATE_STORE_KEY).getValueForQueryKey(o,e,t)),[o,e]),{setQueryValue:i}=(0,n.useDispatch)(s.QUERY_STATE_STORE_KEY);return[a,(0,r.useCallback)((t=>{i(o,e,t)}),[o,e,i])]}},3244:(e,t,o)=>{"use strict";o.d(t,{_:()=>r});var s=o(6087);const n=(0,s.createContext)("page"),r=()=>(0,s.useContext)(n);n.Provider},4015:(e,t,o)=>{"use strict";o.d(t,{Z:()=>n});var s=o(6087);function n(e,t){const o=(0,s.useRef)();return(0,s.useEffect)((()=>{o.current===e||t&&!t(e,o.current)||(o.current=e)}),[e,t]),o.current}},7901:(e,t,o)=>{"use strict";o.d(t,{c:()=>l});var s=o(6087),n=o(923),r=o.n(n);function l(e){const t=(0,s.useRef)(e);return r()(e,t.current)||(t.current=e),t.current}},4487:(e,t,o)=>{"use strict";o.d(t,{p:()=>i});var s=o(851),n=o(3993),r=o(1194),l=o(9786);function c(e={}){const t={};return(0,l.getCSSRules)(e,{selector:""}).forEach((e=>{t[e.key]=e.value})),t}function a(e,t){return e&&t?`has-${(0,r.c)(t)}-${e}`:""}const i=e=>{const t=(e=>{const t=(0,n.isObject)(e)?e:{style:{}};let o=t.style;return(0,n.isString)(o)&&(o=JSON.parse(o)||{}),(0,n.isObject)(o)||(o={}),{...t,style:o}})(e),o=function(e){var t,o,r,l,i,u,d;const{backgroundColor:m,textColor:f,gradient:g,style:p}=e,v=a("background-color",m),b=a("color",f),y=function(e){if(e)return`has-${e}-gradient-background`}(g),_=y||(null==p||null===(t=p.color)||void 0===t?void 0:t.gradient);return{className:(0,s.A)(b,y,{[v]:!_&&!!v,"has-text-color":f||(null==p||null===(o=p.color)||void 0===o?void 0:o.text),"has-background":m||(null==p||null===(r=p.color)||void 0===r?void 0:r.background)||g||(null==p||null===(l=p.color)||void 0===l?void 0:l.gradient),"has-link-color":(0,n.isObject)(null==p||null===(i=p.elements)||void 0===i?void 0:i.link)?null==p||null===(u=p.elements)||void 0===u||null===(d=u.link)||void 0===d?void 0:d.color:void 0}),style:c({color:(null==p?void 0:p.color)||{}})}}(t),r=function(e){var t;const o=(null===(t=e.style)||void 0===t?void 0:t.border)||{};return{className:function(e){var t;const{borderColor:o,style:n}=e,r=o?a("border-color",o):"";return(0,s.A)({"has-border-color":!!o||!(null==n||null===(t=n.border)||void 0===t||!t.color),[r]:!!r})}(e),style:c({border:o})}}(t),l=function(e){var t;return{className:void 0,style:c({spacing:(null===(t=e.style)||void 0===t?void 0:t.spacing)||{}})}}(t),i=(e=>{const t=(0,n.isObject)(e.style.typography)?e.style.typography:{},o=(0,n.isString)(t.fontFamily)?t.fontFamily:"";return{className:e.fontFamily?`has-${e.fontFamily}-font-family`:o,style:{fontSize:e.fontSize?`var(--wp--preset--font-size--${e.fontSize})`:t.fontSize,fontStyle:t.fontStyle,fontWeight:t.fontWeight,letterSpacing:t.letterSpacing,lineHeight:t.lineHeight,textDecoration:t.textDecoration,textTransform:t.textTransform}}})(t);return{className:(0,s.A)(i.className,o.className,r.className,l.className),style:{...i.style,...o.style,...r.style,...l.style}}}},3271:(e,t,o)=>{"use strict";o.d(t,{a:()=>n});var s=o(6087);const n=()=>{const[,e]=(0,s.useState)();return(0,s.useCallback)((t=>{e((()=>{throw t}))}),[])}},547:(e,t,o)=>{"use strict";o.r(t),o.d(t,{default:()=>Q});var s=o(1609),n=o(851),r=o(4487),l=o(3993),c=o(7723),a=o(195),i=o(7104),u=o(224),d=o(7901),m=o(4015),f=o(3122),g=o(4785),p=o(5703),v=o(6087),b=o(4656),y=o(7033),_=o(9454),h=o(5659),k=o(8781),w=o(5352),E=o(923),S=o.n(E),A=o(8537),C=o(3832),x=o(3966);const N=[{value:"preview-1",name:"In Stock",label:(0,s.createElement)(k.A,{name:"In Stock",count:3}),textLabel:"In Stock (3)"},{value:"preview-2",name:"Out of stock",label:(0,s.createElement)(k.A,{name:"Out of stock",count:3}),textLabel:"Out of stock (3)"},{value:"preview-3",name:"On backorder",label:(0,s.createElement)(k.A,{name:"On backorder",count:2}),textLabel:"On backorder (2)"}];o(5837);const L=JSON.parse('{"uK":{"F8":{"A":3},"Ox":{"A":"list"},"dc":{"A":"multiple"}}}');function R(){return Math.floor(Math.random()*Date.now())}const T=e=>e.trim().replace(/\s/g,"").replace(/_/g,"-").replace(/-+/g,"-").replace(/[^a-zA-Z0-9-]/g,"");var O=o(4548);const F=x.nD+"stock_status",P=({attributes:e,isEditor:t=!1})=>{const o=(0,O.LY)(),r=(0,p.getSettingWithCoercion)("isRenderingPhpTemplate",!1,l.isBoolean),[E,L]=(0,v.useState)(!1),{outofstock:P,...Q}=(0,p.getSetting)("stockStatusOptions",{}),q=(0,v.useRef)((0,p.getSetting)("hideOutOfStockItems",!1)?Q:{outofstock:P,...Q}),j=(0,v.useMemo)((()=>((e,t="filter_stock_status")=>{const o=(0,x.Vf)(t);if(!o)return[];const s=(0,l.isString)(o)?o.split(","):o,n=Object.keys(e);return s.filter((e=>n.includes(e)))})(q.current,F)),[]),[B,$]=(0,v.useState)(j),[I,K]=(0,v.useState)(e.isPreview?N:[]),[Y]=(0,v.useState)(Object.entries(q.current).map((([e,t])=>({slug:e,name:t}))).filter((e=>!!e.name)).sort(((e,t)=>e.slug.localeCompare(t.slug)))),[D]=(0,f.dJ)(),[H,V]=(0,f.xd)("stock_status",j),{data:z,isLoading:J}=(0,g.A)({queryStock:!0,queryState:D,isEditor:t}),W=(0,v.useCallback)((e=>(0,l.objectHasProp)(z,"stock_status_counts")&&Array.isArray(z.stock_status_counts)?z.stock_status_counts.find((({status:t,count:o})=>t===e&&0!==Number(o))):null),[z]),[M,U]=(0,v.useState)(R());(0,v.useEffect)((()=>{if(J||e.isPreview)return;const t=Y.map((t=>{const o=W(t.slug);if(!(o||B.includes(t.slug)||(n=t.slug,null!=D&&D.stock_status&&D.stock_status.some((({status:e=[]})=>e.includes(n))))))return null;var n;const r=o?Number(o.count):0;return{value:t.slug,name:(0,A.decodeEntities)(t.name),label:(0,s.createElement)(k.A,{name:(0,A.decodeEntities)(t.name),count:e.showCounts?r:null}),textLabel:e.showCounts?`${(0,A.decodeEntities)(t.name)} (${r})`:(0,A.decodeEntities)(t.name)}})).filter((e=>!!e));K(t),U(R())}),[e.showCounts,e.isPreview,J,W,B,D.stock_status,Y]);const Z="single"!==e.selectType,G=(0,v.useCallback)((e=>{t||(e&&!r&&V(e),(e=>{if(!window)return;if(0===e.length){const e=(0,C.removeQueryArgs)(window.location.href,F);return void(e!==(0,x.Q)(window.location.href)&&(0,x.CH)(e))}const t=(0,C.addQueryArgs)(window.location.href,{[F]:e.join(",")});t!==(0,x.Q)(window.location.href)&&(0,x.CH)(t)})(e))}),[t,V,r]);(0,v.useEffect)((()=>{e.showFilterButton||G(B)}),[e.showFilterButton,B,G]);const X=(0,v.useMemo)((()=>H),[H]),ee=(0,d.c)(X),te=(0,m.Z)(ee);(0,v.useEffect)((()=>{S()(te,ee)||S()(B,ee)||$(ee)}),[B,ee,te]),(0,v.useEffect)((()=>{E||(V(j),L(!0))}),[V,E,L,j]);const oe=(0,v.useCallback)((e=>{const t=e=>{const t=I.find((t=>t.value===e));return t?t.name:null},o=({filterAdded:e,filterRemoved:o})=>{const s=e?t(e):null,n=o?t(o):null;s?(0,a.speak)((0,c.sprintf)(/* translators: %s stock statuses (for example: 'instock'...) */ /* translators: %s stock statuses (for example: 'instock'...) */
(0,c.__)("%s filter added.","woocommerce"),s)):n&&(0,a.speak)((0,c.sprintf)(/* translators: %s stock statuses (for example:'instock'...) */ /* translators: %s stock statuses (for example:'instock'...) */
(0,c.__)("%s filter removed.","woocommerce"),n))},s=B.includes(e);if(!Z){const t=s?[]:[e];return o(s?{filterRemoved:e}:{filterAdded:e}),void $(t)}if(s){const t=B.filter((t=>t!==e));return o({filterRemoved:e}),void $(t)}const n=[...B,e].sort();o({filterAdded:e}),$(n)}),[B,Z,I]);if(!J&&0===I.length)return o(!1),null;const se=`h${e.headingLevel}`,ne=!e.isPreview&&!q.current||0===I.length,re=!e.isPreview&&J;if(!(0,p.getSettingWithCoercion)("hasFilterableProducts",!1,l.isBoolean))return o(!1),null;const le=Z?!ne&&B.length<I.length:!ne&&0===B.length,ce=(0,s.createElement)(se,{className:"wc-block-stock-filter__title"},e.heading),ae=ne?(0,s.createElement)(h.A,null,ce):ce;return o(!0),(0,s.createElement)(s.Fragment,null,!t&&e.heading&&ae,(0,s.createElement)("div",{className:(0,n.A)("wc-block-stock-filter",`style-${e.displayStyle}`,{"is-loading":ne})},"dropdown"===e.displayStyle?(0,s.createElement)(s.Fragment,null,(0,s.createElement)(w.A,{key:M,className:(0,n.A)({"single-selection":!Z,"is-loading":ne}),suggestions:I.filter((e=>!B.includes(e.value))).map((e=>e.value)),disabled:ne,placeholder:(0,c.__)("Select stock status","woocommerce"),onChange:e=>{!Z&&e.length>1&&(e=e.slice(-1));const t=[e=e.map((e=>{const t=I.find((t=>t.value===e));return t?t.value:e})),B].reduce(((e,t)=>e.filter((e=>!t.includes(e)))));if(1===t.length)return oe(t[0]);const o=[B,e].reduce(((e,t)=>e.filter((e=>!t.includes(e)))));1===o.length&&oe(o[0])},value:B,displayTransform:e=>{const t=I.find((t=>t.value===e));return t?t.textLabel:e},saveTransform:T,messages:{added:(0,c.__)("Stock filter added.","woocommerce"),removed:(0,c.__)("Stock filter removed.","woocommerce"),remove:(0,c.__)("Remove stock filter.","woocommerce"),__experimentalInvalid:(0,c.__)("Invalid stock filter.","woocommerce")}}),le&&(0,s.createElement)(i.A,{icon:u.A,size:30})):(0,s.createElement)(b.CheckboxList,{className:"wc-block-stock-filter-list",options:I,checked:B,onChange:oe,isLoading:ne,isDisabled:re})),(0,s.createElement)("div",{className:"wc-block-stock-filter__actions"},(B.length>0||t)&&!ne&&(0,s.createElement)(_.A,{onClick:()=>{$([]),G([])},screenReaderLabel:(0,c.__)("Reset stock filter","woocommerce")}),e.showFilterButton&&(0,s.createElement)(y.A,{className:"wc-block-stock-filter__button",isLoading:ne,disabled:ne||re,onClick:()=>G(B),screenReaderLabel:(0,c.__)("Apply stock filter","woocommerce")})))},Q=e=>{const t=(0,r.p)(e),o=(c=e,{heading:(0,l.isString)(null==c?void 0:c.heading)?c.heading:"",headingLevel:(0,l.isString)(null==c?void 0:c.headingLevel)&&parseInt(c.headingLevel,10)||L.uK.F8.A,showFilterButton:"true"===(null==c?void 0:c.showFilterButton),showCounts:"true"===(null==c?void 0:c.showCounts),isPreview:!1,displayStyle:(0,l.isString)(null==c?void 0:c.displayStyle)&&c.displayStyle||L.uK.Ox.A,selectType:(0,l.isString)(null==c?void 0:c.selectType)&&c.selectType||L.uK.dc.A});var c;return(0,s.createElement)("div",{className:(0,n.A)((0,l.isString)(e.className)?e.className:"",t.className),style:t.style},(0,s.createElement)(P,{isEditor:!1,attributes:o}))}},3966:(e,t,o)=>{"use strict";o.d(t,{CH:()=>u,Q:()=>d,Vf:()=>i,nD:()=>a,xB:()=>c});var s=o(3832),n=o(5703),r=o(3993);const l=(0,n.getSettingWithCoercion)("isRenderingPhpTemplate",!1,r.isBoolean),c="query_type_",a="filter_";function i(e){return window?(0,s.getQueryArg)(window.location.href,e):null}function u(e){if(l){const t=new URL(e);t.pathname=t.pathname.replace(/\/page\/[0-9]+/i,""),t.searchParams.delete("paged"),t.searchParams.forEach(((e,o)=>{o.match(/^query(?:-[0-9]+)?-page$/)&&t.searchParams.delete(o)})),window.location.href=t.href}else window.history.replaceState({},"",e)}const d=e=>{const t=(0,s.getQueryArgs)(e);return(0,s.addQueryArgs)(e,t)}},5400:()=>{},1626:()=>{},8335:()=>{},1504:()=>{},243:()=>{},5837:()=>{}}]);