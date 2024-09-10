import{j as t,r as l}from"./app-DjyIttX0.js";import{f as i,T as m,d as u}from"./index-D2GmhkKM.js";import{b as x,a as b}from"./index-D2mx18dn.js";import{M as g}from"./index-C-g7ErB0.js";import{routeNames as p}from"./Utils-aaFgtiZ_.js";const T=e=>{const a={1:"A",2:"B",3:"C",4:"Em Prospecção"}[parseInt(e)],r={1:"bg-green-600",2:"bg-yellow-500",3:"bg-red-600",4:"bg-blue-600"}[parseInt(e)];if(!a||!r)throw new Error("classificacao não mapeado. Verificar função getBadgeClassificacaoCliente.");return t.jsx("span",{className:`me-2 rounded px-2.5 py-0.5 font-medium text-white ${r}`,children:a})},w=e=>{const a={0:"Inativo",1:"Ativo"}[e?1:0],r={0:"bg-red-600",1:"bg-green-600"}[e?1:0];if(!a||!r)throw new Error("idsituacao não mapeado. Verificar função getBadgeSituacaoCliente.");return t.jsx("span",{className:`me-2 rounded px-2.5 py-0.5 text-white ${r}`,children:a})},f=(e,a="bg-green-600",r="bg-red-600")=>{const s={0:"Não",1:"Sim"}[e?1:0],n={0:r,1:a}[e?1:0];if(!s||!n)throw new Error("value não mapeado. Verificar função getBadgeTrueOrFalse.");return t.jsxs("div",{className:"flex items-center",children:[e?t.jsx(x,{className:"mr-2 text-2xl text-red-500"}):t.jsx(b,{className:"mr-2 text-2xl text-green-500"}),t.jsx("span",{className:`me-2 rounded px-2.5 py-0.5 text-white ${n}`,children:s})]})};function h(e){const{recados:a}=e,r=o=>{confirm("Deseja realmente excluir este registro?")&&u.Inertia.delete(route(p.recadodestroy,o))},s=l.useMemo(()=>[{label:"CLIENTE",accessor:"cliente"},{label:"RECADO",accessor:"recado"},{label:"Data Cadastro",accessor:"datacadastro"},{label:"Retornar em",accessor:"retornarem"},{label:"RECADO EM ATRASO",accessor:"recadoematraso",minWidth:200},{label:"Ação",accessor:"acao"}],[]),n=l.useMemo(()=>a.map(o=>{const c=new Date(o.datahoraretorno),d=new Date>c;return{...o,cliente:o.cliente.razaosocial,recado:o.recado,retornarem:i(c),recadoematraso:f(d,"bg-red-500","bg-green-500"),datacadastro:i(o.created_at),acao:t.jsx("div",{className:"flex items-center",children:t.jsx("button",{className:"text-red-500",children:t.jsx(g,{className:"text-2xl",onClick:()=>r(o.idrecadocliente)})})})}}),[a]);return t.jsx(m,{columns:s,rows:n,title:"Recados",subtitle:"Lista de Recados"})}const D=Object.freeze(Object.defineProperty({__proto__:null,default:h},Symbol.toStringTag,{value:"Module"}));export{h as T,w as a,D as b,T as g};
