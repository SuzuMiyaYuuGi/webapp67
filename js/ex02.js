const random_Number_in_Range = (min,max) => Math.random()*(max-min)+min;

const result1 = random_Number_in_Range(2, 10);
const result2 = random_Number_in_Range(1, 5);
console.log(result1);
console.log(result2);

document.getElementById("ex02res1").innerHTML = result1;
document.getElementById("ex02res2").innerHTML = result2;