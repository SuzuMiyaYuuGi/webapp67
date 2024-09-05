const random_hex_color_code = () => {
    let n = (Math.random() * 0xffffff * 1000000).toString(16);
    return '#' + n.slice(0, 6);
};

const random = random_hex_color_code();
const random1 = random_hex_color_code();
const random2 = random_hex_color_code();



document.body.style.backgroundColor = random; 
document.write(random);
document.body.style.color = random1;
document.body.style.borderBlockColor = random2;
