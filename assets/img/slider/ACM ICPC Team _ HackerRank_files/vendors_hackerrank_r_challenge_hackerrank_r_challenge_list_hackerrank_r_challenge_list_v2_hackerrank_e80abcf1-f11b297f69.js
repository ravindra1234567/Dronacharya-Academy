(window.webpackJsonp=window.webpackJsonp||[]).push([[2],{W6q9:function(e,a,t){"use strict";t("2Spj"),t("bWfx"),t("Z2Ku"),t("L9s1"),t("0l/t");var l=t("lwsE"),s=t.n(l),r=t("W8MJ"),n=t.n(r),c=t("a1gu"),i=t.n(c),h=t("Nsbk"),o=t.n(h),u=t("PJYZ"),m=t.n(u),S=t("7W2i"),d=t.n(S),p=t("pVnL"),v=t.n(p),b=t("QILm"),w=t.n(b),k=t("lSNA"),f=t.n(k),g=t("cDcd"),N=t.n(g),C=t("vN+2"),L=t.n(C),y=t("Wt1U"),E=t.n(y),M=t("g+WX"),A=t("1OM/"),I=t("bIS8"),P=t("TSYQ"),W=t.n(P),x=(t("byxf"),function(e){function a(e){var t;return s()(this,a),t=i()(this,o()(a).call(this,e)),f()(m()(t),"toggleShowAll",(function(){t.setState({showAll:!t.state.showAll})})),f()(m()(t),"handleSearchInput",(function(e){var a=e.currentTarget.value,l=t.props.searchCallback;t.setState({searchState:a},(function(){l(a)}))})),f()(m()(t),"checklistChange",(function(e,a){var l=t.props,s=l.value,r=l.onChange,n=a.target.checked,c=E()(s,e.value);n&&c.push(e.value),r(c,e,n)})),t.state={showAll:!e.itemSize,searchState:e.initialSearchState||""},t}return d()(a,e),n()(a,[{key:"getChecklist",value:function(){var e=this.state.searchState,a=this.props,t=a.list;if(a.isSearchable&&e){var l=e.toLowerCase();t=t.filter((function(e){return e.label.toLowerCase().includes(l)}))}return t}},{key:"renderSearchBar",value:function(){var e=this.props.searchPlaceholder,a=this.state.searchState;return N.a.createElement(A.b,{className:"checklist-input width-100",type:"text",placeholder:e,onChange:this.handleSearchInput,value:a})}},{key:"renderShowMore",value:function(e){var a=this.props,t=a.itemSize,l=a.showMoreLabel,s=a.showLessLabel,r=this.state.showAll;return!!t&&e.length>t&&N.a.createElement("div",{className:"set-footer",onClick:this.toggleShowAll},N.a.createElement("a",{className:"filter-show-more"},r?s:l))}},{key:"render",value:function(){var e=this,a=this.props,t=a.className,l=a.itemSize,s=a.isSearchable,r=a.list,n=a.value,c=a.error,i=a.componentClassName,h=(a.showLessLabel,a.showMoreLabel,a.searchPlaceholder,a.searchCallback,a.initialSearchState,w()(a,["className","itemSize","isSearchable","list","value","error","componentClassName","showLessLabel","showMoreLabel","searchPlaceholder","searchCallback","initialSearchState"]));delete h["aria-label"],delete h.id;var o=this.state.showAll,u=this.getChecklist(),m=o?u:u.slice(0,Math.min(r.length,l));return N.a.createElement("div",{className:W()("ui-checklist",t)},s&&this.renderSearchBar(),N.a.createElement("ul",{className:"ui-checklist-list"},m.map((function(a,t){var l=void 0!==a.key?a.key:t,s=n.includes(a.value);return N.a.createElement("li",{className:"ui-checklist-list-item",key:l},N.a.createElement("div",{className:"ui-checklist-item-wrap"},N.a.createElement(M.a,v()({},h,{onChange:e.checklistChange.bind(e,a),value:a.value,checked:s,label:a.label,className:i,required:void 0,error:!!c}))))}))),this.renderShowMore(u),c&&"string"==typeof c&&N.a.createElement("div",{className:"d-flex align-items-center error-message",role:"alert"},N.a.createElement(I.InfoIcon,{className:"error-icon"}),c))}}]),a}(g.Component));f()(x,"defaultProps",{searchPlaceholder:"",isSearchable:!1,itemSize:1/0,initialSearchState:"",searchCallback:L.a,className:"",componentClassName:"",showMoreLabel:"More",showLessLabel:"Less",value:[]}),a.a=x},byxf:function(e,a,t){}}]);
//# sourceMappingURL=https://hrcdn.net/fcore/assets/sourcemaps/vendors~hackerrank_r_challenge~hackerrank_r_challenge_list~hackerrank_r_challenge_list_v2~hackerrank~e80abcf1-f11b297f69.js.map