<?php
function alphanumeric(string $s): bool {
    if (preg_match('/[^a-z_\-0-9]/i', $s)) {
      return false;
    }
    return strlen($s) > 0;
  }