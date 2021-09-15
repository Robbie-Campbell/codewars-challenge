let single_digits = {
  0: "zero", 1: "one", 2: "two", 3: "three", 4: "four", 5: "five", 6: "six", 7: "seven", 8: "eight", 9: "nine"
}
let teens = {10: "ten", 11: "eleven", 12: "twelve", 13: "thirteen", 14: "fourteen", 15: "fifteen", 16: "sixteen", 
             17: "seventeen", 18: "eighteen", 19: "nineteen"
}
let tens = {
  2: "twenty", 3: "thirty", 4: "forty", 5: "fifty", 6: "sixty", 7: "seventy", 8: "eighty", 9: "ninety"
}

function number2words(n){
  const number = Array.from(String(n), Number);
  switch(number.length) {
      case 1:
        return single_digits[n];
        break;
      case 2:
        return lessThan100Converter(number);
        break;
      case 3:
        return hundredsConverter(number);
      case 4: 
        return thousandsConverter(number);
      default:
        return "test"; 
  }
}

function lessThan100Converter(number) {
  if (number.length == 1 || number[0] == 0) {
    return number[0] != 0 ? single_digits[number[0]] : single_digits[number[1]];
  }
  return number[0] < 2 ? teens[number.join("")] : number[1] == 0 ? tens[number[0]] : 
         tens[number[0]] + "-" + single_digits[number[1]];
}

function hundredsConverter(number) {
  if (number[number.length - 2] == 0 && number[number.length - 1] == 0) {
    return single_digits[number[0]] + " hundred";
  }
  if (number[0] == 0) {
    return lessThan100Converter(number.slice(number.length - 2, number.length));
  }
  return single_digits[number[0]] + " hundred " + lessThan100Converter(number.slice(number.length - 2, number.length));
}

function thousandsConverter(number) {
  const allEqual = arr => arr.every(val => val === arr[0]);
  let splitArray = number.slice(number.length - 3, number.length);
  if (allEqual(splitArray)) {
    return single_digits[number[number.length - 4]] + " thousand";
  }
  return single_digits[number[number.length - 4]] + " thousand " + hundredsConverter(splitArray);
}