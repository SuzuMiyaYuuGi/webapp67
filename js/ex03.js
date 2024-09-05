const digitize = n =>[...`${n}`].map(i =>parseInt(i));

console.log(digitize(123));
console.log(digitize(1230));

document.getElementById("123").innerHTML = digitize(123);
document.getElementById("1230").innerHTML = digitize(1230);