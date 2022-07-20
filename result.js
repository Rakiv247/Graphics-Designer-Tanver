window.addEventListener('load' , ()=> {
 const params = (new URL (document.location)).searchParams;
 const t1 = params.get('t1');

 document.getElementById('result-name').innerHTML =t1;
})