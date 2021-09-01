<?php function infected(s) {
  return s.split("X").join("").length == 0 ? 0 : 100 * (s.split("X").map(x => x.includes(1) ? x.length : 0).reduce((a, b) => a + b, 0) / s.split("X").join("").length);
}