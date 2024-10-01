import{bS as h,aS as _,aK as u,u as d,I as r,bi as t,v as s,b9 as k,t as m,bM as S,at as p,s as V,bH as c,F as P,bT as B,H as g,bU as N}from"./app-fLTEigqr.js";import{d as f}from"./index-CULpMyyS.js";import{_ as b,a as v}from"./TextInput-_CQyXWZ3.js";import{_ as x}from"./InputLabel-B2E5N67M.js";import{P as q}from"./PrimaryButton-DQ4fje7T.js";import"./_plugin-vue_export-helper-DlAUqK2U.js";const I={class:"flex items-center justify-center min-h-screen bg-center bg-cover",style:{"background-image":"url('/images/backgrounddswd.png')"}},C={class:"w-full max-w-xs p-4 bg-white-700 rounded-lg shadow-md sm:p-6 lg:p-8 sm:max-w-md lg:max-w-lg border border-grey-400"},L={key:0,class:"mb-4 text-sm font-medium text-blue-600"},R={class:"relative"},T={class:"relative mt-1"},U={class:"relative mt-4"},j={class:"relative mt-1"},D={class:"flex items-center justify-between mt-8"},G={__name:"Login",props:{canResetPassword:{type:Boolean,default:!0},status:{type:String,default:""}},setup(i){const o=h({empuser:"",emppass:""}),l=_(!1),y=()=>{l.value=!l.value},w=()=>{o.post(route("login"),{onSuccess:a=>{console.log("Server response:",a),a.props.otp_required?(console.log("OTP is required"),f.Inertia.visit(route("otp.form"),{method:"get",data:{context:"login"}})):(console.log("Redirecting to dashboard"),f.Inertia.visit(route("dashboard")))},onError:a=>{console.error("Login error:",a)}})};return(a,e)=>(u(),d(P,null,[r(t(B),{title:"Log in"}),s("div",I,[s("div",C,[e[5]||(e[5]=s("div",{class:"flex justify-center mb-6 lg:mb-8"},[s("img",{src:"/images/dswd-logo1.png",alt:"DSWD Logo",class:"h-20 lg:h-40"})],-1)),e[6]||(e[6]=s("hr",{class:"my-4 border-gray-300"},null,-1)),e[7]||(e[7]=s("div",{class:"mb-4 text-xl font-semibold text-center lg:text-2xl"},"Human Resource Management System",-1)),i.status?(u(),d("div",L,k(i.status),1)):m("",!0),s("form",{onSubmit:S(w,["prevent"])},[s("div",R,[r(x,{for:"empuser",value:"Username"}),s("div",T,[r(b,{id:"empuser",type:"text",class:"block w-full pl-4 pr-10 border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500",modelValue:t(o).empuser,"onUpdate:modelValue":e[0]||(e[0]=n=>t(o).empuser=n),required:"",autofocus:"",autocomplete:"username"},null,8,["modelValue"]),e[2]||(e[2]=s("span",{class:"absolute inset-y-0 right-0 flex items-center pr-3"},[s("i",{class:"fas fa-user text-gray-400"})],-1))]),r(v,{class:"mt-2",message:t(o).errors.empuser},null,8,["message"])]),s("div",U,[r(x,{for:"emppass",value:"Password"}),s("div",j,[r(b,{type:l.value?"text":"password",id:"emppass",class:"block w-full pl-4 pr-10 border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500",modelValue:t(o).emppass,"onUpdate:modelValue":e[1]||(e[1]=n=>t(o).emppass=n),required:"",autocomplete:"current-password"},null,8,["type","modelValue"]),s("span",{class:"absolute inset-y-0 right-0 flex items-center pr-3 cursor-pointer",onClick:y},[s("i",{class:p([l.value?"fas fa-eye-slash":"fas fa-eye","text-gray-400"])},null,2)])]),r(v,{class:"mt-2",message:t(o).errors.emppass},null,8,["message"])]),s("div",D,[i.canResetPassword?(u(),V(t(N),{key:0,href:a.route("password.request"),class:"text- text-blue-700 underline hover:no-underline"},{default:c(()=>e[3]||(e[3]=[g(" Forgot password? ")])),_:1},8,["href"])):m("",!0),r(q,{class:p(["py-2 px-12 text-lg font-semibold text-white bg-gradient-to-r from-blue-900 to-blue-900 rounded-full hover:from-blue-800 hover:to-blue-800",{"opacity-25":t(o).processing}]),disabled:t(o).processing},{default:c(()=>e[4]||(e[4]=[g(" SIGN IN ")])),_:1},8,["class","disabled"])])],32)])])],64))}};export{G as default};
