"use strict";(globalThis.webpackChunk_wcAdmin_webpackJsonp=globalThis.webpackChunk_wcAdmin_webpackJsonp||[]).push([[3978],{63978:(e,t,a)=>{a.r(t),a.d(t,{ProductsApp:()=>Ie});var i=a(69307),s=a(86802),n=a(12238),l=a(74776);const{lock:r,unlock:o}=(0,l.__dangerousOptInToUnstableAPIsOnlyForCoreModules)("I acknowledge private features are not for use in themes or plugins and doing so will break in the next version of WordPress.","@wordpress/edit-site");var c=a(56795),u=a(40953),d=a(78281),m=a(87461),p=a(37798),_=a(65736),v=a(9818),g=a(17855),f=a.n(g),b=a(55609),h=a(72384),y=a(50185),E=a(31357),w=a(72006),N=a(28275),k=a(78423);const x="table",S="list",T="is",P={[x]:{layout:{primaryField:"name",styles:{name:{maxWidth:300}}}},grid:{layout:{mediaField:"featured-image",primaryField:"name"}},[S]:{layout:{primaryField:"name",mediaField:"featured-image"}}},C={type:x,search:"",filters:[],page:1,perPage:20,sort:{field:"date",direction:"desc"},fields:["name","sku","status","date"],layout:P[S].layout};function L({postType:e}){const t=(0,v.useSelect)((t=>{const{getPostType:a}=t(p.store),i=a(e);return null==i?void 0:i.labels}),[e]);return(0,i.useMemo)((()=>[{title:(null==t?void 0:t.all_items)||(0,_.__)("All items","woocommerce"),slug:"all",icon:h.Z,view:{...C}},{title:(0,_.__)("Published","woocommerce"),slug:"published",icon:y.Z,view:{...C,filters:[{field:"status",operator:T,value:"publish"}]}},{title:(0,_.__)("Scheduled","woocommerce"),slug:"future",icon:E.Z,view:{...C,filters:[{field:"status",operator:T,value:"future"}]}},{title:(0,_.__)("Drafts","woocommerce"),slug:"drafts",icon:w.Z,view:{...C,filters:[{field:"status",operator:T,value:"draft"}]}},{title:(0,_.__)("Private","woocommerce"),slug:"private",icon:N.Z,view:{...C,filters:[{field:"status",operator:T,value:"private"}]}},{title:(0,_.__)("Trash","woocommerce"),slug:"trash",icon:k.Z,view:{...C,type:x,layout:P[x].layout,filters:[{field:"status",operator:T,value:"trash"}]}}]),[t])}const A=[{value:"draft",label:(0,_.__)("Draft","woocommerce")},{value:"future",label:(0,_.__)("Scheduled","woocommerce")},{value:"private",label:(0,_.__)("Private","woocommerce")},{value:"publish",label:(0,_.__)("Published","woocommerce")},{value:"trash",label:(0,_.__)("Trash","woocommerce")}],I=[{id:"name",label:(0,_.__)("Name","woocommerce"),enableHiding:!1,type:"text",render:function({item:e}){return(0,i.createElement)(i.Fragment,null,e.name)}},{id:"sku",label:(0,_.__)("SKU","woocommerce"),enableHiding:!1,enableSorting:!1,render:({item:e})=>(0,i.createElement)(i.Fragment,null,e.sku)},{id:"date",label:(0,_.__)("Date","woocommerce"),render:({item:e})=>(0,i.createElement)("time",null,e.date_created)},{label:(0,_.__)("Status","woocommerce"),id:"status",getValue:({item:e})=>{var t,a;return null!==(a=null===(t=A.find((({value:t})=>t===e.status)))||void 0===t?void 0:t.label)&&void 0!==a?a:e.status},elements:A,filterBy:{operators:[T]},enableSorting:!1}];var F=a(77942);const{useHistory:R,useLocation:Z}=o(s.privateApis),H=({postType:e})=>{const t=R(),a=Z();return(0,i.useMemo)((()=>({id:"edit-product",label:(0,_.__)("Edit","woocommerce"),isPrimary:!0,icon:F.Z,supportsBulk:!0,isEligible:e=>"trash"!==e.status,callback(i){const s=i[0];t.push({...a.params,postId:s.id,postType:e,quickEdit:!0})}})),[t,a.params])},D=(0,i.createContext)(null);function B({children:e}){const[t,a]=(0,i.useState)(!1);return(0,i.createElement)(D.Provider,{value:{showNewNavigation:t,setShowNewNavigation:a}},e)}function U(){const e=(0,i.useContext)(D);if(e){const{showNewNavigation:t,setShowNewNavigation:a}=e;return[t,a]}return[!1,()=>{}]}const{NavigableRegion:V,usePostActions:M}=o(n.privateApis),{useHistory:z,useLocation:j}=o(s.privateApis),W=25,q=[],O=(e,t)=>{var a;return null===(a=e.find((({slug:e})=>e===t)))||void 0===a?void 0:a.view};function G(e){return e.id.toString()}function K({subTitle:e,className:t,hideTitleFromUI:a=!1}){const[s,n]=U(),l=z(),r=j(),{postId:o,quickEdit:g=!1,postType:h="product",isCustom:y,activeView:E="all"}=r.params,[w,N]=(0,i.useState)([o]),[k,x]=function(e){const{params:{activeView:t="all",isCustom:a="false",layout:s}}=j(),n=z(),l=L({postType:e}),[r,o]=(0,i.useState)((()=>{var e;const a=null!==(e=O(l,t))&&void 0!==e?e:{type:null!=s?s:S},i=null!=s?s:a.type;return{...a,type:i}})),c=(0,i.useCallback)((e=>{const{params:t}=n.getLocationWithParams();(e.type!==S||(null==t?void 0:t.layout))&&e.type!==(null==t?void 0:t.layout)&&n.push({...t,layout:e.type}),o(e)}),[n]);return(0,i.useEffect)((()=>{o((e=>({...e,type:null!=s?s:S})))}),[s]),(0,i.useEffect)((()=>{const e=O(l,t);if(e){const t=null!=s?s:e.type;o({...e,type:t})}}),[t,a,s,l]),[r,c,c]}(h),T=(0,i.useMemo)((()=>{var e,t,a,i;const s={};null===(e=k.filters)||void 0===e||e.forEach((e=>{"status"===e.field&&(s.status=Array.isArray(e.value)?e.value.join(","):e.value)}));const n="name"===(null===(t=k.sort)||void 0===t?void 0:t.field)?"title":null===(a=k.sort)||void 0===a?void 0:a.field;return{per_page:k.perPage,page:k.page,order:null===(i=k.sort)||void 0===i?void 0:i.direction,orderby:n,search:k.search,...s}}),[k]),C=(0,i.useCallback)((e=>{N(e),l.push({...r.params,postId:e.join(",")})}),[l,r.params]),{records:A,totalCount:F,isLoading:R}=(0,v.useSelect)((e=>{const{getProducts:t,getProductsTotalCount:a,isResolving:i}=e("wc/admin/products");return{records:t(T),totalCount:a(T),isLoading:i("getProducts",[T])}}),[T]),Z=(0,i.useMemo)((()=>({totalItems:F,totalPages:Math.ceil(F/(k.perPage||W))})),[F,k.perPage]),{labels:D,canCreateRecord:B}=(0,v.useSelect)((e=>{const{getPostType:t,canUser:a}=e(p.store),i=t(h);return{labels:null==i?void 0:i.labels,canCreateRecord:a("create",{kind:"postType",name:h})}}),[h]),K=M({postType:h,context:"list"}),Q=H({postType:h}),J=(0,i.useMemo)((()=>[Q,...K]),[K,Q]),X=f()("edit-site-page",t);return(0,i.createElement)(V,{className:X,ariaLabel:(0,_.__)("Products","woocommerce")},(0,i.createElement)("div",{className:"edit-site-page-content"},!a&&(0,i.createElement)(b.__experimentalVStack,{className:"edit-site-page-header",as:"header",spacing:0},(0,i.createElement)(b.__experimentalHStack,{className:"edit-site-page-header__page-title"},(0,i.createElement)(b.__experimentalHeading,{as:"h2",level:3,weight:500,className:"edit-site-page-header__title",truncate:!0},(0,_.__)("Products","woocommerce")),(0,i.createElement)(b.FlexItem,{className:"edit-site-page-header__actions"},(null==D?void 0:D.add_new_item)&&B&&(0,i.createElement)(i.Fragment,null,(0,i.createElement)(b.Button,{variant:"primary",disabled:!0,__next40pxDefaultSize:!0},D.add_new_item)))),e&&(0,i.createElement)(b.__experimentalText,{variant:"muted",as:"p",className:"edit-site-page-header__sub-title"},e)),(0,i.createElement)(c.Z,{key:E+y,paginationInfo:Z,fields:I,data:A||q,isLoading:R,view:k,actions:J,onChangeView:x,onChangeSelection:C,getItemId:G,selection:w,defaultLayouts:P,header:(0,i.createElement)(i.Fragment,null,(0,i.createElement)(b.Button,{size:"compact",icon:s?u.Z:d.Z,label:(0,_.__)("Toggle navigation","woocommerce"),onClick:()=>{n(!s)}}),(0,i.createElement)(b.Button,{size:"compact",isPressed:g,icon:m.Z,label:(0,_.__)("Toggle details panel","woocommerce"),onClick:()=>{l.push({...r.params,quickEdit:!g||void 0})}}))})))}var Q=a(39483),J=a(19504);const{NavigableRegion:X}=o(n.privateApis),Y={type:"panel",fields:["name","status"]};function $({subTitle:e,actions:t,className:a,hideTitleFromUI:s=!0,postType:n,postId:l=""}){const r=f()("edit-product-page",a,{"is-empty":!l}),o=(0,i.useMemo)((()=>l.split(",")),[l]),{initialEdits:c}=(0,v.useSelect)((e=>({initialEdits:1===o.length?e("wc/admin/products").getProduct(o[0]):null})),[n,o]),[u,d]=(0,i.useState)({}),m=(0,i.useMemo)((()=>({...c,...u})),[c,u]),p=!(0,Q.h)(m,I,Y);return(0,i.createElement)(X,{className:r,ariaLabel:(0,_.__)("Product Edit","woocommerce")},(0,i.createElement)("div",{className:"edit-product-content"},!s&&(0,i.createElement)(b.__experimentalVStack,{className:"edit-site-page-header",as:"header",spacing:0},(0,i.createElement)(b.__experimentalHStack,{className:"edit-site-page-header__page-title"},(0,i.createElement)(b.__experimentalHeading,{as:"h2",level:3,weight:500,className:"edit-site-page-header__title",truncate:!0},(0,_.__)("Product Edit","woocommerce")),(0,i.createElement)(b.FlexItem,{className:"edit-site-page-header__actions"},t)),e&&(0,i.createElement)(b.__experimentalText,{variant:"muted",as:"p",className:"edit-site-page-header__sub-title"},e)),!l&&(0,i.createElement)("p",null,(0,_.__)("Select a product to edit","woocommerce")),l&&(0,i.createElement)(b.__experimentalVStack,{spacing:4,as:"form",onSubmit:async e=>{e.preventDefault(),(0,Q.h)(m,I,Y)&&d({})}},(0,i.createElement)(J.Z,{data:m,fields:I,form:Y,onChange:d}),(0,i.createElement)(b.FlexItem,null,(0,i.createElement)(b.Button,{variant:"primary",type:"submit",accessibleWhenDisabled:!0,disabled:p,__next40pxDefaultSize:!0},(0,_.__)("Update","woocommerce"))))))}var ee=a(96483),te=a(71643),ae=a(12873),ie=a(52123),se=a(42358);const{useHistory:ne}=o(s.privateApis);function le({className:e,icon:t,withChevron:a=!1,suffix:s,uid:n,params:l,onClick:r,children:o,...c}){const u=ne();return(0,i.createElement)(b.__experimentalItem,{className:f()("edit-site-sidebar-navigation-item",{"with-suffix":!a&&s},e),onClick:function(e){r?r(e):l&&(e.preventDefault(),u.push(l))},id:n,...c},(0,i.createElement)(b.__experimentalHStack,{justify:"flex-start"},t&&(0,i.createElement)(ae.Z,{style:{fill:"currentcolor"},icon:t,size:24}),(0,i.createElement)(b.FlexBlock,null,o),a&&(0,i.createElement)(ae.Z,{icon:(0,_.isRTL)()?ie.Z:se.Z,className:"edit-site-sidebar-navigation-item__drilldown-indicator",size:24}),!a&&s))}const{useHistory:re,useLocation:oe}=o(s.privateApis);function ce({title:e,slug:t,customViewId:a,type:s,icon:n,isActive:l,isCustom:r,suffix:o}){var c;const{params:{postType:u,page:d}}=oe(),m=n||(null===(c=te.Kw.find((e=>e.type===s)))||void 0===c?void 0:c.icon);let p=r?a:t;"all"===p&&(p=void 0);const _=function(e,t,a=!1){const i=re(),s=(0,ee.getQueryArgs)(window.location.href),n=(0,ee.removeQueryArgs)(window.location.href,...Object.keys(s));return{href:(0,ee.addQueryArgs)(n,e),onClick:function(s){null==s||s.preventDefault(),a?i.replace(e,t):i.push(e,t)}}}({page:d,postType:u,layout:s,activeView:p,isCustom:r?"true":void 0});return(0,i.createElement)(b.__experimentalHStack,{justify:"flex-start",className:f()("edit-site-sidebar-dataviews-dataview-item",{"is-selected":l})},(0,i.createElement)(le,{icon:m,..._,"aria-current":l?"true":void 0},e),o)}const{useLocation:ue}=o(s.privateApis);function de(){const{params:{postType:e="product",activeView:t="all",isCustom:a="false"}}=ue(),s=L({postType:e});if(!e)return null;const n="true"===a;return(0,i.createElement)(i.Fragment,null,(0,i.createElement)(b.__experimentalItemGroup,null,s.map((e=>(0,i.createElement)(ce,{key:e.slug,slug:e.slug,title:e.title,icon:e.icon,type:e.view.type,isActive:!n&&e.slug===t,isCustom:!1})))))}var me=a(17184),pe=a(40670);function _e(e){return(0,i.createElement)(b.Button,{...e,className:f()("edit-site-sidebar-button",e.className)})}const{useHistory:ve,useLocation:ge}=o(s.privateApis);function fe({isRoot:e,title:t,actions:a,meta:s,content:n,footer:l,description:r,backPath:c}){var u;const{dashboardLink:d,dashboardLinkText:m}=(0,v.useSelect)((e=>{const{getSettings:t}=o(e("core/edit-site"));return{dashboardLink:t().__experimentalDashboardLink,dashboardLinkText:t().__experimentalDashboardLinkText}}),[]),p=ge(),g=ve(),h=null!=c?c:null===(u=p.state)||void 0===u?void 0:u.backPath,y=(0,_.isRTL)()?me.Z:pe.Z;return(0,i.createElement)(i.Fragment,null,(0,i.createElement)(b.__experimentalVStack,{className:f()("edit-site-sidebar-navigation-screen__main",{"has-footer":!!l}),spacing:0,justify:"flex-start"},(0,i.createElement)(b.__experimentalHStack,{spacing:3,alignment:"flex-start",className:"edit-site-sidebar-navigation-screen__title-icon"},!e&&(0,i.createElement)(_e,{onClick:()=>{g.push(h)},icon:y,label:(0,_.__)("Back","woocommerce"),showTooltip:!1}),e&&(0,i.createElement)(_e,{icon:y,label:m||(0,_.__)("Go to the Dashboard","woocommerce"),href:d||"index.php"}),(0,i.createElement)(b.__experimentalHeading,{as:"h1",className:"edit-site-sidebar-navigation-screen__title",color:"#e0e0e0",level:1},t),a&&(0,i.createElement)("div",{className:"edit-site-sidebar-navigation-screen__actions"},a)),s&&(0,i.createElement)(i.Fragment,null,(0,i.createElement)("div",{className:"edit-site-sidebar-navigation-screen__meta"},s)),(0,i.createElement)("div",{className:"edit-site-sidebar-navigation-screen__content"},r&&(0,i.createElement)("p",{className:"edit-site-sidebar-navigation-screen__description"},r),n)),l&&(0,i.createElement)("footer",{className:"edit-site-sidebar-navigation-screen__footer"},l))}const{useLocation:be}=o(s.privateApis);var he=a(94333);function ye({children:e}){const t=(0,i.useRef)(null);return(0,i.createElement)("div",{ref:t,className:"edit-site-sidebar__screen-wrapper"},e)}function Ee({routeKey:e,children:t}){return(0,i.createElement)("div",{className:"edit-site-sidebar__content"},(0,i.createElement)(ye,{key:e},t))}var we=a(22629),Ne=a(20264);const ke=function({className:e}){const{isRequestingSite:t,siteIconUrl:a}=(0,v.useSelect)((e=>{const{getEntityRecord:t}=e(p.store),a=t("root","__unstableBase");return{isRequestingSite:!a,siteIconUrl:null==a?void 0:a.site_icon_url}}),[]);if(t&&!a)return(0,i.createElement)("div",{className:"edit-site-site-icon__image"});const s=a?(0,i.createElement)("img",{className:"edit-site-site-icon__image",alt:(0,_.__)("Site Icon","woocommerce"),src:a}):(0,i.createElement)(b.Icon,{className:"edit-site-site-icon__icon",icon:Ne.Z,size:48});return(0,i.createElement)("div",{className:f()(e,"edit-site-site-icon")},s)},xe=(0,i.memo)((0,i.forwardRef)((({isTransparent:e},t)=>{const{dashboardLink:a,homeUrl:s,siteTitle:n}=(0,v.useSelect)((e=>{const{getSettings:t}=o(e("core/edit-site")),{getSite:a,getUnstableBase:i}=e(p.store),s=a(),n=i();return{dashboardLink:t().__experimentalDashboardLink||"index.php",homeUrl:null==n?void 0:n.home,siteTitle:!(null==s?void 0:s.title)&&(null==s?void 0:s.url)?(0,ee.filterURLForDisplay)(null==s?void 0:s.url):null==s?void 0:s.title}}),[]);return(0,i.createElement)("div",{className:"edit-site-site-hub"},(0,i.createElement)(b.__experimentalHStack,{justify:"flex-start",spacing:"0"},(0,i.createElement)("div",{className:f()("edit-site-site-hub__view-mode-toggle-container",{"has-transparent-background":e})},(0,i.createElement)(b.Button,{ref:t,href:a,label:(0,_.__)("Go to the Dashboard","woocommerce"),className:"edit-site-layout__view-mode-toggle",style:{transform:"scale(0.5)",borderRadius:4}},(0,i.createElement)(ke,{className:"edit-site-layout__view-mode-toggle-icon"}))),(0,i.createElement)(b.__experimentalHStack,null,(0,i.createElement)("div",{className:"edit-site-site-hub__title"},(0,i.createElement)(b.Button,{variant:"link",href:s,target:"_blank"},n&&(0,we.decodeEntities)(n),(0,i.createElement)(b.VisuallyHidden,{as:"span"},(0,_.__)("(opens in a new tab)","woocommerce")))))))}))),{NavigableRegion:Se}=o(n.privateApis),Te=.3;function Pe({route:e,showNewNavigation:t=!1}){const[a]=(0,he.useResizeObserver)(),s=(0,i.useRef)(null),l=(0,he.useViewportMatch)("medium","<"),r=(0,he.useReducedMotion)(),{key:o,areas:c,widths:u}=e;return(0,i.createElement)(i.Fragment,null,a,(0,i.createElement)("div",{className:"edit-site-layout"},(0,i.createElement)("div",{className:"edit-site-layout__content"},(!l||!c.mobile)&&t&&(0,i.createElement)(Se,{ariaLabel:(0,_.__)("Navigation","woocommerce"),className:"edit-site-layout__sidebar-region"},(0,i.createElement)(b.__unstableAnimatePresence,null,(0,i.createElement)(b.__unstableMotion.div,{initial:{opacity:0},animate:{opacity:1},exit:{opacity:0},transition:{type:"tween",duration:r||l?0:Te,ease:"easeOut"},className:"edit-site-layout__sidebar"},(0,i.createElement)(xe,{ref:s,isTransparent:!1}),(0,i.createElement)(Ee,{routeKey:o},c.sidebar)))),(0,i.createElement)(n.EditorSnackbars,null),!l&&c.content&&(0,i.createElement)("div",{className:"edit-site-layout__area",style:{maxWidth:null==u?void 0:u.content}},c.content),!l&&c.edit&&(0,i.createElement)("div",{className:"edit-site-layout__area",style:{maxWidth:null==u?void 0:u.edit}},c.edit))))}const{RouterProvider:Ce}=o(s.privateApis),{GlobalStylesProvider:Le}=o(n.privateApis);function Ae(){const[e]=U();e?document.body.classList.add("is-fullscreen-mode"):document.body.classList.remove("is-fullscreen-mode");const t=function(){const{params:e={}}=be(),{postType:t="product",layout:a="table",canvas:s,quickEdit:n,postId:l}=e;if(["product"].includes(t)){const e="list"===a||!a;return{key:"products-list",areas:{sidebar:(0,i.createElement)(fe,{title:"Products",isRoot:!0,content:(0,i.createElement)(de,null)}),content:(0,i.createElement)(K,null),preview:!1,mobile:(0,i.createElement)(K,{postType:t}),edit:n&&(0,i.createElement)($,{postType:t,postId:l})},widths:{edit:n&&!e?380:void 0}}}return{key:"default",areas:{preview:!1,mobile:"edit"===s}}}();return(0,i.createElement)(Pe,{route:t,showNewNavigation:e})}function Ie(){return(0,i.createElement)(B,null,(0,i.createElement)(Le,null,(0,i.createElement)(n.UnsavedChangesWarning,null),(0,i.createElement)(Ce,null,(0,i.createElement)(Ae,null))))}}}]);