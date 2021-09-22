function pigIt(str){
  return str.split(" ").map(x => !/[~`!#$%\^&*+=\-\[\]\\';,/{}|\\":<>\?]/g.test(x) ? x.substring(1, x.length) + x.charAt(0) + "ay" : x).join(" ");
}