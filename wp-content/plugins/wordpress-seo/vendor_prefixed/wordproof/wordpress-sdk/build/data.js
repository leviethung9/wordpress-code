!function(){"use strict";var e={n:function(t){var n=t&&t.__esModule?function(){return t.default}:function(){return t};return e.d(n,{a:n}),n},d:function(t,n){for(var s in n)e.o(n,s)&&!e.o(t,s)&&Object.defineProperty(t,s,{enumerable:!0,get:n[s]})},o:function(e,t){return Object.prototype.hasOwnProperty.call(e,t)}},t=window.wp.apiFetch,n=e.n(t);const{get:s}=lodash,c=function(e){let t=arguments.length>1&&void 0!==arguments[1]?arguments[1]:{};return s(window,"wordproofSdk.data"+(e?`.${e}`:""),t)},{createReduxStore:a,registerStore:r,register:o}=wp.data,d="wordproof",i={isAuthenticated:c("is_authenticated",!1),balance:c("balance",0),selectedPostTypes:c("settings.selected_post_types",[])},u={setIsAuthenticated:e=>({type:"SET_IS_AUTHENTICATED",isAuthenticated:e}),getIsAuthenticated:()=>({type:"GET_IS_AUTHENTICATED"}),setBalance:e=>({type:"SET_BALANCE",balance:e}),getBalance:()=>({type:"GET_BALANCE"}),setSelectedPostTypes:e=>({type:"SET_SELECTED_POST_TYPES",selectedPostTypes:e}),getSelectedPostTypes:()=>({type:"GET_SELECTED_POST_TYPES"})},T={reducer:function(){let e=arguments.length>0&&void 0!==arguments[0]?arguments[0]:i,t=arguments.length>1?arguments[1]:void 0;switch(t.type){case"SET_IS_AUTHENTICATED":return{...e,isAuthenticated:t.isAuthenticated};case"SET_BALANCE":return{...e,balance:t.balance};case"SET_SELECTED_POST_TYPES":return{...e,selectedPostTypes:t.selectedPostTypes};default:return e}},controls:{fetchIsAuthenticated:e=>n()({path:e.path})},selectors:{getIsAuthenticated(e){const{isAuthenticated:t}=e;return t},getBalance(e){const{balance:t}=e;return t},getSelectedPostTypes(e){const{selectedPostTypes:t}=e;return t}},resolvers:{*fetchIsAuthenticated(){const e=yield u.getIsAuthenticated();return u.setIsAuthenticated(e)}},actions:u};a?o(a(d,T)):r(d,T)}();