const prevMultOfThree = n => {
    if (n % 3 == 0) {
      return n;
    }
    let splitNumbers = String(n).split("");
    for (let number = splitNumbers.length; number > 0; number--) {
      if (splitNumbers.join("") % 3 == 0) {
        return parseInt(splitNumbers.join(""));
      }
      splitNumbers.pop(splitNumbers[number]);
    }
    return null;
  }