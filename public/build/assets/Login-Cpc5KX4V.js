import{W as d,r as n,j as e,Y as g}from"./app-DRodd_3C.js";import{G as x}from"./iconBase-CETh2C7E.js";import{I as i}from"./InputError-cGyVl4Dp.js";function p(s){return x({tag:"svg",attr:{version:"1",viewBox:"0 0 48 48",enableBackground:"new 0 0 48 48"},child:[{tag:"polygon",attr:{fill:"#FF9800",points:"24,37 19,31 19,25 29,25 29,31"},child:[]},{tag:"g",attr:{fill:"#FFA726"},child:[{tag:"circle",attr:{cx:"33",cy:"19",r:"2"},child:[]},{tag:"circle",attr:{cx:"15",cy:"19",r:"2"},child:[]}]},{tag:"path",attr:{fill:"#FFB74D",d:"M33,13c0-7.6-18-5-18,0c0,1.1,0,5.9,0,7c0,5,4,9,9,9s9-4,9-9C33,18.9,33,14.1,33,13z"},child:[]},{tag:"path",attr:{fill:"#424242",d:"M24,4c-6.1,0-10,4.9-10,11c0,0.8,0,2.3,0,2.3l2,1.7v-5l12-4l4,4v5l2-1.7c0,0,0-1.5,0-2.3c0-4-1-8-6-9l-1-2 H24z"},child:[]},{tag:"g",attr:{fill:"#784719"},child:[{tag:"circle",attr:{cx:"28",cy:"19",r:"1"},child:[]},{tag:"circle",attr:{cx:"20",cy:"19",r:"1"},child:[]}]},{tag:"polygon",attr:{fill:"#fff",points:"24,43 19,31 24,32 29,31"},child:[]},{tag:"polygon",attr:{fill:"#D32F2F",points:"23,35 22.3,39.5 24,43.5 25.7,39.5 25,35 26,34 24,32 22,34"},child:[]},{tag:"path",attr:{fill:"#546E7A",d:"M29,31L29,31l-5,12l-5-12c0,0-11,2-11,13h32C40,33,29,31,29,31z"},child:[]}]})(s)}function j({status:s,canResetPassword:u}){const{data:a,setData:t,post:c,processing:h,errors:l,reset:m}=d({email:"",password:"",remember:!1});n.useEffect(()=>()=>{m("password")},[]);const o=r=>{r.preventDefault(),c(route("login"))};return e.jsxs("section",{className:"bg-gray-50",children:[e.jsx(g,{title:"Login"}),e.jsxs("div",{className:"flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0",children:[e.jsxs("div",{className:"flex items-center mb-6 text-3xl font-bold text-gray-800",children:[e.jsx(p,{className:"mr-3 text-4xl"}),e.jsx("span",{className:"tracking-wide",children:"Customer Control"})]}),e.jsx("div",{className:"w-full bg-white rounded-lg shadow md:mt-0 sm:max-w-md xl:p-0",children:e.jsx("div",{className:"p-6 space-y-4 md:space-y-6 sm:p-8",children:e.jsxs("form",{className:"space-y-4 md:space-y-6",onSubmit:o,children:[e.jsxs("div",{children:[e.jsx("label",{htmlFor:"email",className:"block mb-2 text-sm font-medium text-gray-900",children:"Email"}),e.jsx("input",{type:"email",name:"email",id:"email",value:a.email,onChange:r=>t("email",r.target.value),className:"bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5",placeholder:"",required:""}),e.jsx(i,{message:l.email,className:"mt-2"})]}),e.jsxs("div",{children:[e.jsx("label",{htmlFor:"password",className:"block mb-2 text-sm font-medium text-gray-900",children:"Senha"}),e.jsx("input",{type:"password",name:"password",id:"password",placeholder:"",value:a.password,onChange:r=>t("password",r.target.value),className:"bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5",required:""}),e.jsx(i,{message:l.password,className:"mt-2"})]}),e.jsx("div",{className:"flex items-center justify-between",children:e.jsxs("div",{className:"flex items-start",children:[e.jsx("div",{className:"flex items-center h-5",children:e.jsx("input",{id:"remember","aria-describedby":"remember",type:"checkbox",className:"w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300",required:""})}),e.jsx("div",{className:"ml-3 text-sm",children:e.jsx("label",{htmlFor:"remember",className:"text-gray-500",children:"Lembrar"})})]})}),e.jsx("button",{type:"submit",className:"w-full text-white bg-gray-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center",children:"Logar"})]})})})]})]})}export{j as default};