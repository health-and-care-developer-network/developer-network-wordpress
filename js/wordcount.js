function countWords(s) {

  if (undefined(s)) {
    return false;
  }

  s.replace(/(^\s*)|(\s*$)/gi,"") // remove start and end white-space
   .replace(/[ ]{2,}/gi," ") // compress multiple spaces
   .replace(/\n /,"\n") // exclude newline with a start spacing

  return s.split(' ').length;

} // countWords
