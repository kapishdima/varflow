export function consoleEffect() {
  const paragraphs = document.querySelectorAll(".console__text p")
  let currentParagraphIndex = 0
  let currentCharIndex = 0

  function typeText() {
    if (currentParagraphIndex < paragraphs.length) {
      const currentParagraph = paragraphs[currentParagraphIndex]
      const fullText = currentParagraph.innerText
      currentParagraph.innerHTML = ""
      currentParagraph.style.display = "block"
      typeCharacter(currentParagraph, fullText)
    }
  }

  function typeCharacter(element, text) {
    if (currentCharIndex < text.length) {
      const nextChar = text[currentCharIndex]
      if (nextChar === "<") {
        let tagContent = ""
        let tagEndIndex = text.indexOf(">", currentCharIndex)
        if (tagEndIndex !== -1) {
          tagEndIndex++
          tagContent = text.substring(currentCharIndex, tagEndIndex)
          currentCharIndex = tagEndIndex
        }
        element.innerHTML += tagContent
      } else {
        const spanClass = paragraphs[currentParagraphIndex].querySelectorAll("span")
        if (spanClass.length > 0) {
          spanClass.forEach(span => {
            const spanText = span.innerText
            const spanClasses = span.classList
            const spanStyle = span.getAttribute("style")
            element.innerHTML += `<span class="${Array.from(spanClasses).join(
              " ",
            )}" style="${spanStyle}">${spanText}</span>`
          })
        }
        element.innerHTML += nextChar
        currentCharIndex++
      }
      setTimeout(() => typeCharacter(element, text), 50) // Скорость печатания
    } else {
      currentCharIndex = 0
      currentParagraphIndex++
      setTimeout(typeText, 80) // Пауза между строками
    }
  }

  typeText()
}
