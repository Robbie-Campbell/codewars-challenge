function vaporcode(string) {
  return string.split("").filter(x => x != " ").map(x => x.toUpperCase()).join("  ");
}