const matches = (obj,source) => Object.keys(source).every(key => obj.hasOwnProperty(key)&&obj[key]===source[key]);
console.log(matches({age:25,hair:'long',beard:true},{hair:'long',beard:true}));
console.log(matches({hair:'long',beard:true},{age:25,hair:'long',beard:true}));
document.getElementById("matches1").innerHTML = matches({age:25,hair:'long',beard:true},{hair:'long',beard:true});
document.getElementById("matches2").innerHTML = matches({hair:'long',beard:true},{age:25,hair:'long',beard:true});

