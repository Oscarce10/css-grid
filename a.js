let p = new Promise((resolve, reject) => {
    let a = 1;
if(a + a == 2 )
resolve("success");
else 
reject("failed!");
})

p.then((msj) => {
	console.log("then " + msj);
}).catch((msj) => {
	console.log("catch " + msj);
});
for (let i = 0; i < 1500; i++) {
	console.log("a");
}